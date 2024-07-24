<?php
class ModelExtensionShippingMeest2 extends Model {
	public function install() {
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX ."meest2_branch`");
		$this->db->query("CREATE TABLE `" . DB_PREFIX ."meest2_branch` (
			`br_id` varchar(40) NOT NULL DEFAULT '',
			`type_id` varchar(40) DEFAULT NULL,
			`num` int(6) DEFAULT NULL,
			`type_public_ua` varchar(256) DEFAULT NULL,
			`type_public_ru` varchar(256) DEFAULT NULL,
			`type_public_en` varchar(256) DEFAULT NULL,
			`region_id` varchar(40) DEFAULT NULL,
			`region_ua` varchar(256) DEFAULT NULL,
			`region_ru` varchar(256) DEFAULT NULL,
			`region_en` varchar(256) DEFAULT NULL,
			`district_id` varchar(40) DEFAULT NULL,
			`district_ua` varchar(256) DEFAULT NULL,
			`district_ru` varchar(256) DEFAULT NULL,
			`district_en` varchar(256) DEFAULT NULL,
			`city_id` varchar(40) DEFAULT NULL,
			`city_ua` varchar(256) DEFAULT NULL,
			`city_ru` varchar(256) DEFAULT NULL,
			`city_en` varchar(256) DEFAULT NULL,
			`street_id` varchar(40) DEFAULT NULL,
			`street_ua` varchar(256) DEFAULT NULL,
			`street_ru` varchar(256) DEFAULT NULL,
			`street_en` varchar(256) DEFAULT NULL,
			`street_number` varchar(10) DEFAULT NULL,
			`zip` varchar(5) DEFAULT NULL,
			`lng` varchar(10) DEFAULT NULL,
			`lat` varchar(10) DEFAULT NULL
		) ENGINE=MyISAM DEFAULT CHARSET=utf8;");

		$this->db->query("ALTER TABLE `" . DB_PREFIX ."meest2_branch` ADD PRIMARY KEY (`br_id`);");
	}

	public function truncateTable() {
		$this->db->query("TRUNCATE `" . DB_PREFIX . "meest2_branch`");
	}

	public function addBranch($data) {
		if ($data) {
			$query = "INSERT INTO `" . DB_PREFIX . "meest2_branch` (
				br_id 	     ,
				num 	     ,
				type_id 	 ,
				type_public_ua,
				type_public_ru,
				type_public_en,
				region_id 	 ,
				region_ua 	 ,
				region_ru 	 ,
				region_en 	 ,
				district_id  ,
				district_ua  ,
				district_ru  ,
				district_en  ,
				city_id 	 ,
				city_ua      ,
				city_ru      ,
				city_en      ,
				street_id    ,
				street_ua    ,
				street_ru    ,
				street_en    ,
				street_number,
				zip 	     ,
				lng          ,
				lat          
			)  VALUES " . implode(',', $data);

			$this->db->query($query);
		}
	}

	public function prepare($sql) {
        array_walk($sql, array($this->db,'escape'));
        return "('" . implode("','",$sql) . "')";
	}

	public function getBranches($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "meest2_branch WHERE 1";
		if (!empty($data['num'])) {
			$sql .= " AND `num` > " . (int)$data['num'];
		}
		$sql .= " ORDER BY num LIMIT 20";
		$result = $this->db->query($sql);
		return $result->rows;
	}

	public function updateBranch($br_id,$data) {
		$query = "UPDATE `" . DB_PREFIX ."meest2_branch` SET ";

		foreach ($data as $field => $val) {
			$query .= "`" . $field . "` = '" . $this->db->escape(str_replace("'","\'",$val)) . "',";
		}

		$query = trim($query,',') . " WHERE br_id = '" .$this->db->escape($br_id) . "'";
		$result = $this->db->query($query);
	}

	public function uninstall() {
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "meest2_branch`;");
	}
}