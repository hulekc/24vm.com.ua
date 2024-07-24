<?php
class ModelExtensionPaymentMonoPay extends Model {
	public function install() {
		$this->db->query("CREATE TABLE `" . DB_PREFIX . "mono_transaction` (`mono_transaction_id` int(11) NOT NULL AUTO_INCREMENT, `order_id` int(11) NOT NULL, `invoiceId` varchar(100) NOT NULL, `pageUrl` varchar(255) NOT NULL, `currency` varchar(10) NOT NULL, PRIMARY KEY (`mono_transaction_id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8");
		$this->db->query("CREATE TABLE `" . DB_PREFIX . "mono_transaction_list` (`mono_transaction_list_id` int(11) NOT NULL AUTO_INCREMENT, `reference` int(11) NOT NULL, `invoiceId` varchar(155) NOT NULL, `status` varchar(100) NOT NULL, `maskedPan` varchar(100) NOT NULL, `date` datetime NOT NULL, `paymentScheme` varchar(100) NOT NULL, `amount` int(11) NOT NULL, `profit` int(11) NOT NULL, `ccy` int(11) NOT NULL, `cancel_amount` int(11) NOT NULL, PRIMARY KEY (`mono_transaction_list_id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8");
	}

	public function uninstall() {
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "mono_transaction`");
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "mono_transaction_list`");
	}
	
	public function getInvoiceByOrderId($order_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "mono_transaction WHERE order_id = '" . (int)$order_id .  "'");
		
		return $query->row; 
	}
	
	public function getOrderProduct($order_id, $currency) {
		$order_product = array();
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$order_id . "'");
		
		if($query->num_rows) {
			foreach($query->rows as $product) {
				$order_product[] = array(
					'name'	=> $product['name'],
					'qty'	=> (int)$product['quantity'],
					'sum'	=> $this->currency->format($product['price'], $currency, $this->currency->getValue($currency), false) * 100,
					'code'	=> $product['model'],
					'icon'	=> $this->getProductImage($product['product_id'])
				);
			}
		}
		
		return $order_product;
	}
	
	private function getProductImage($product_id) {
		$image = '';
		
		$query = $this->db->query("SELECT image FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product_id . "'");
		
		if($query->num_rows) {
			$this->load->model('tool/image');
			
			$image = $this->model_tool_image->resize($query->row['image'], 100, 100);
		}
		
		return $image;
	}
	
	public function deleteInvoice($order_id) {
		$this->db->query("UPDATE `" . DB_PREFIX . "mono_transaction` SET `pageUrl` = '' WHERE order_id = '" . (int)$order_id . "'");
	}
	
	public function setMonoOrder($order_id, $currency, $data) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "mono_transaction` WHERE `order_id` = '" . (int)$order_id . "'");
		
		if($query->num_rows) {
			$this->db->query("UPDATE `" . DB_PREFIX . "mono_transaction` SET `pageUrl` = '" . $this->db->escape($data['pageUrl']) . "' WHERE `order_id` = '" . (int)$order_id . "'");
		} else {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "mono_transaction` (`order_id`, `invoiceId`, `pageUrl`, `currency`) VALUES ('" . (int)$order_id . "', '" . $this->db->escape($data['invoiceId']) . "', '" . $this->db->escape($data['pageUrl']) . "', '" . $this->db->escape($currency) . "')");
		}
	}
	
	public function writeApisData($data) {
		$this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "mono_transaction_list`");
		
		$sql = "INSERT INTO `" . DB_PREFIX . "mono_transaction_list` (`reference`, `invoiceId`, `status`, `maskedPan`, `date`, `paymentScheme`, `amount`, `profit`, `ccy`, `cancel_amount`) VALUES";
		
		$sql_temp = array();
		
		foreach($data as $item) {
			$sql_temp[] = " ('" . (int)$item['reference'] . "', '" . $this->db->escape($item['invoiceId']) . "', '" . $this->db->escape($item['status']) . "', '" . $this->db->escape($item['maskedPan']) . "', '" . $this->db->escape($item['date']) . "', '" . $this->db->escape($item['paymentScheme']) . "', '" . (int)$item['amount'] . "', '" . (int)$item['profit'] . "', '" . (int)$item['ccy'] . "', '" . (int)$item['cancel_amount'] . "')"; 
		}
		
		if($sql_temp) {
			$sql .= implode(',', $sql_temp);
			
			$this->db->query($sql);
		}
	}
	
	public function getOperation($data) {
		$sql = "SELECT * FROM " . DB_PREFIX . "mono_transaction_list WHERE mono_transaction_list_id > '0'";
		
		if (isset($data['filter_order_id'])) {
			$sql .= " AND orderReference LIKE '" . $this->db->escape($data['filter_order_id']) . "%'";
		}
		
		if (!empty($data['filter_date_added'])) {
			$sql .= " AND DATE(createdDate) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}	
		
		if (!empty($data['filter_date_modified'])) {
			$sql .= " AND DATE(processingDate) = DATE('" . $this->db->escape($data['filter_date_modified']) . "')";
		}
		
		if (!empty($data['filter_total'])) {
			$sql .= " AND amount = '" . (float)$data['filter_total'] . "'";
		}	
		
		if (!empty($data['filter_transaction'])) {
			$sql .= " AND orderReference = '" . $this->db->escape($data['filter_transaction']) . "'";
		}
		
		if (!empty($data['filter_order_status'])) {
			$sql .= " AND transactionStatus = '" . $this->db->escape($data['filter_order_status']) . "'";
		}
		
		$sort_data = array(
			'reference',
			'transactionStatus',
			'createdDate',
			'processingDate',
			'amount'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY reference";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}
		
		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
		
		$query = $this->db->query($sql);
		
		return $query->rows;
	}
	
	public function getTotalOperation($data) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "mono_transaction_list WHERE mono_transaction_list_id > '0'";
		
		if (isset($data['filter_order_id'])) {
			$sql .= " AND orderReference LIKE '" . $this->db->escape($data['filter_order_id']) . "%'";
		}
		
		if (!empty($data['filter_date_added'])) {
			$sql .= " AND DATE(createdDate) = DATE('" . $this->db->escape($data['filter_date_added']) . "')";
		}
		
		if (!empty($data['filter_date_modified'])) {
			$sql .= " AND DATE(processingDate) = DATE('" . $this->db->escape($data['filter_date_modified']) . "')";
		}
		
		if (!empty($data['filter_total'])) {
			$sql .= " AND amount = '" . (float)$data['filter_total'] . "'";
		}
		
		if (!empty($data['filter_transaction'])) {
			$sql .= " AND orderReference = '" . $this->db->escape($data['filter_transaction']) . "'";
		}
		
		if (!empty($data['filter_order_status'])) {
			$sql .= " AND transactionStatus = '" . $this->db->escape($data['filter_order_status']) . "'"; 
		}
		
		$query = $this->db->query($sql);

		return $query->row['total'];
	}
}