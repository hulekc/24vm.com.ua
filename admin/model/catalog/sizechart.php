<?php
class ModelCatalogSizeChart extends Model {
	public function addSizeChart($data) {
		//$this->event->trigger('pre.admin.sizechart.add', $data);

		$this->db->query("INSERT INTO " . DB_PREFIX . "sizechart SET sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "', sizechart = '" . $this->db->escape(isset($data['sizechart']) ? serialize($data['sizechart']) : '')  . "', chart_numbers = '" . (int)$data['chart_numbers']  . "', display = '" . $this->db->escape($data['display'])  . "'");

		$sizechart_id = $this->db->getLastId();
		
		

		foreach ($data['sizechart_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "sizechart_description SET sizechart_id = '" . (int)$sizechart_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "', description = '" . $this->db->escape($value['description']) . "'");
		}
		
		if(!empty($data['category'])) {
			foreach($data['category'] as $category_id) {
				$this->db->query("INSERT INTO ". DB_PREFIX ."sizechart_category SET sizechart_id = '" . (int)$sizechart_id . "', category_id = '" . (int)$category_id . "'");
			}
		}
		
		if(!empty($data['product'])) {
			foreach($data['product'] as $product_id) {
				$this->db->query("INSERT INTO ". DB_PREFIX ."sizechart_product SET sizechart_id = '" . (int)$sizechart_id . "', product_id = '" . (int)$product_id . "'");
			}
		}
		
		//$this->event->trigger('post.admin.sizechart.add', $sizechart_id);

		return $sizechart_id;
	}

	public function editSizeChart($sizechart_id, $data) {
		//$this->event->trigger('pre.admin.sizechart.edit', $data);

		$this->db->query("UPDATE " . DB_PREFIX . "sizechart SET sort_order = '" . (int)$data['sort_order'] . "', status = '" . (int)$data['status'] . "', sizechart = '" . $this->db->escape(isset($data['sizechart']) ? serialize($data['sizechart']) : '')  . "', chart_numbers = '" . (int)$data['chart_numbers']  . "', display = '" . $this->db->escape($data['display'])  . "' WHERE sizechart_id = '" . (int)$sizechart_id . "'");
		
		

		$this->db->query("DELETE FROM " . DB_PREFIX . "sizechart_description WHERE sizechart_id = '" . (int)$sizechart_id . "'");

		foreach ($data['sizechart_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "sizechart_description SET sizechart_id = '" . (int)$sizechart_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "', description = '" . $this->db->escape($value['description']) . "'");
		}
		
		$this->db->query("DELETE FROM " . DB_PREFIX . "sizechart_category WHERE sizechart_id = '" . (int)$sizechart_id . "'");
		if(!empty($data['category'])) {
			foreach($data['category'] as $category_id) {
				$this->db->query("INSERT INTO ". DB_PREFIX ."sizechart_category SET sizechart_id = '" . (int)$sizechart_id . "', category_id = '" . (int)$category_id . "'");
			}
		}
		
		$this->db->query("DELETE FROM " . DB_PREFIX . "sizechart_product WHERE sizechart_id = '" . (int)$sizechart_id . "'");
		if(!empty($data['product'])) {
			foreach($data['product'] as $product_id) {
				$this->db->query("INSERT INTO ". DB_PREFIX ."sizechart_product SET sizechart_id = '" . (int)$sizechart_id . "', product_id = '" . (int)$product_id . "'");
			}
		}

		//$this->event->trigger('post.admin.sizechart.edit', $sizechart_id);
	}

	public function deleteSizeChart($sizechart_id) {
		//$this->event->trigger('pre.admin.sizechart.delete', $sizechart_id);

		$this->db->query("DELETE FROM " . DB_PREFIX . "sizechart WHERE sizechart_id = '" . (int)$sizechart_id . "'");
		
		$this->db->query("DELETE FROM " . DB_PREFIX . "sizechart_description WHERE sizechart_id = '" . (int)$sizechart_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "sizechart_category WHERE sizechart_id = '" . (int)$sizechart_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "sizechart_product WHERE sizechart_id = '" . (int)$sizechart_id . "'");

		//$this->event->trigger('post.admin.sizechart.delete', $sizechart_id);
	}

	public function getSizeChart($sizechart_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "sizechart WHERE sizechart_id = '" . (int)$sizechart_id . "'");

		return $query->row;
	}
	
	

	public function getSizeCharts($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "sizechart i LEFT JOIN " . DB_PREFIX . "sizechart_description id ON (i.sizechart_id = id.sizechart_id) WHERE id.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		$sort_data = array(
			'id.title',
			'i.sort_order'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY id.title";
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

	public function getSizeChartDescriptions($sizechart_id) {
		$sizechart_description_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "sizechart_description WHERE sizechart_id = '" . (int)$sizechart_id . "'");

		foreach ($query->rows as $result) {
			$sizechart_description_data[$result['language_id']] = array(
				'title'            => $result['title'],
				'description'      => $result['description']
			);
		}

		return $sizechart_description_data;
	}

	public function getTotalSizeCharts() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "sizechart");

		return $query->row['total'];
	}
	
	public function getSizeChartCategories($sizechart_id) {
		$query = $this->db->query("SELECT * FROM ". DB_PREFIX ."sizechart_category WHERE sizechart_id ='". $sizechart_id ."'");
		
		$categories_data = array();
		foreach($query->rows as $value) {
			$categories_data[] = $value['category_id'];
		}
		
	 return $categories_data;
  }
	
	public function getSizeChartProducts($sizechart_id) {
		$query = $this->db->query("SELECT * FROM ". DB_PREFIX ."sizechart_product WHERE sizechart_id = '". $sizechart_id ."'");
		
		$products_data = array();
		foreach($query->rows as $value) {
			$products_data[] = $value['product_id'];
		}
		
	 return $products_data;
  }
}