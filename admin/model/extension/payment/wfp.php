<?php
class ModelExtensionPaymentWfp extends Model {
	public function install() {
		$this->db->query("CREATE TABLE `" . DB_PREFIX . "wfp_list` (`wfp_id` int(11) NOT NULL AUTO_INCREMENT, `transactionType` varchar(155) NOT NULL, `orderReference` varchar(155) NOT NULL, `order_id` int(11) NOT NULL, `createdDate` datetime NOT NULL, `amount` decimal(15,4) NOT NULL, `currency` varchar(55) NOT NULL, `transactionStatus` varchar(155) NOT NULL, `processingDate` datetime NOT NULL, `reasonCode` varchar(55) NOT NULL, `reason` varchar(255) NOT NULL, `email` varchar(155) NOT NULL, `phone` varchar(55) NOT NULL, `paymentSystem` varchar(35) NOT NULL, `cardPan` varchar(55) NOT NULL, `cardType` varchar(55) NOT NULL, `issuerBankCountry` varchar(55) NOT NULL, `issuerBankName` varchar(55) NOT NULL, `fee` int(11) NOT NULL, `settlementDate` datetime NOT NULL, PRIMARY KEY (`wfp_id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8");
		$this->db->query("CREATE TABLE `" . DB_PREFIX . "wfp_invoice` (`invoice_id` int(11) NOT NULL AUTO_INCREMENT, `order_id` int(11) NOT NULL, `orderReference` varchar(155) NOT NULL, `invoiceUrl` varchar(255) NOT NULL,  `qrCode` varchar(255) NOT NULL, `date_added` datetime NOT NULL, PRIMARY KEY (`invoice_id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8");
	}

	public function uninstall() {
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "wfp_invoice`");
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "wfp_list`");
	}
	
	public function getOperation($data) {
		$sql = "SELECT * FROM " . DB_PREFIX . "wfp_list WHERE wfp_id > '0'";
		
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
			'order_id',
			'transactionStatus',
			'createdDate',
			'processingDate',
			'amount'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY wfp_id";
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
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "wfp_list WHERE wfp_id > '0'";
		
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
	
	public function writeApisData($data) {
	
		$i = 0;
		
		$this->db->query("TRUNCATE " . DB_PREFIX . "wfp_list");
		
		foreach($data as $item) {
			if(!empty($item['orderReference'])) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "wfp_list (transactionType, orderReference, order_id, createdDate, amount, currency, transactionStatus, processingDate, reasonCode, reason, email, phone, paymentSystem, cardPan, cardType, issuerBankCountry, issuerBankName, fee, settlementDate) VALUES ('" . $this->db->escape($item['transactionType']) . "', '" . $this->db->escape($item['orderReference']) . "', '" . (int)$item['order_id'] . "', '" . $this->db->escape($item['createdDate']) . "', '" . (float)$item['amount'] . "', '" . $this->db->escape($item['currency']) . "', '" . $this->db->escape($item['transactionStatus']) . "', '" . $this->db->escape($item['processingDate']) . "',  '" . (int)$item['reasonCode'] . "', '" . $this->db->escape($item['reason']) . "', '" . $this->db->escape($item['email']) . "', '" . $this->db->escape($item['phone']) . "', '" . (float)$item['paymentSystem'] . "', '" . $this->db->escape($item['cardPan']) . "', '" . $this->db->escape($item['cardType']) . "', '" . $this->db->escape($item['issuerBankCountry']) . "', '" . $this->db->escape($item['issuerBankName']) . "', '" . $this->db->escape($item['fee']) . "', '" . $this->db->escape($item['settlementDate']) . "')");
			}
			$i++;
		}
		
		return $i;
	}
	
	public function getPayInfo($wfp_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "wfp_list WHERE `wfp_id` = '" . (int)$wfp_id . "'");
		
		return $query->row;
	}	
	
	public function getPayInfoByOrderId($order_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "wfp_list WHERE `order_id` = '" . (int)$order_id . "'");
		
		return $query->row;
	}
	
	public function getPayInfoByOreference($orderReference) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "wfp_list WHERE `orderReference` = '" . $this->db->escape($orderReference) . "'");
		
		return $query->row;
	}
	
	public function setSettleInfo($status, $orderReference, $processingDate) { 
		$this->db->query("UPDATE " . DB_PREFIX . "wfp_list SET transactionStatus = '" . $this->db->escape($status) . "', processingDate = NOW() WHERE orderReference = '" . $this->db->escape($orderReference) . "'");
	}
	
	public function setInvoice($order_id, $orderReference, $data) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "wfp_invoice WHERE invoice_id = '" . (int)$order_id . "'");
	
		$this->db->query("INSERT INTO " . DB_PREFIX . "wfp_invoice (order_id, orderReference, invoiceUrl, qrCode, date_added) VALUES ('" . (int)$order_id . "', '" . $this->db->escape($orderReference) . "', '" . $this->db->escape($data['invoiceUrl']) . "', '" . $this->db->escape($data['qrCode']) . "', NOW())");
	}
	
	public function deleteInvoice($order_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "wfp_invoice WHERE order_id = '" . (int)$order_id .  "'");
	}
	
	public function getInvoiceByOrderId($order_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "wfp_invoice WHERE order_id = '" . (int)$order_id .  "'");
		
		return $query->row; 
	}
}