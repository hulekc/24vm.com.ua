<?php
class ModelExtensionShippingMeest2 extends Model {

    public function getResults($typeId, $cityId, $search) {
        $sql = "SELECT br_id, num, street_ua as street,
            street_number, type_public_ua as type_public, `lng`, `lat` FROM "
            . DB_PREFIX . "meest2_branch WHERE `city_id`='$cityId'";

        $parasits = array(
            'Відділення', 'Отделение',
            '№', 'Віділення',
            'віділення', 'відділення',
            'отделение',
            'вул', 'ул','st',
            'пров','пер',
            'шоссе','шосе',
            'просп','ave',
            'blvd','бул'
        );
        $searches = preg_split("/[\s,.]+/", $search);
        $searches = array_diff($searches, $parasits);
        $searches = array_filter($searches);
        $searches = implode('', $searches);

        if (is_numeric($searches)) {
            $sql .= " AND `num` LIKE '$searches%'";
        } else {
            $sql .= " AND (CONCAT(`street_ua`, `street_number`) LIKE '%$searches%'";
            $sql .= " OR CONCAT(`street_ru`, `street_number`) LIKE '%$searches%'";
            $sql .= " OR CONCAT(`street_en`, `street_number`) LIKE '%$searches%')";
        }

        if (is_array($typeId)) {
			$sql .= " AND type_id IN ('" . implode("','", $typeId) . "')";
		} else {
			$sql .= " AND type_id = '" . $this->db->escape($typeId) . "'";
		}

        $sql .= " ORDER BY num LIMIT 20";

        return $this->db->query($sql)->rows;
	}

    public function getCity($typeId, $search)
    {
        $sql = "SELECT DISTINCT `region_ua`, `district_ua`, `city_ua`, `city_id` FROM " . DB_PREFIX .
            "meest2_branch WHERE (`city_ua` LIKE '" . $this->db->escape($search) . "%' OR `city_ru` LIKE '"
            . $this->db->escape($search) . "%' OR `city_en` LIKE '" . $this->db->escape($search) . "%')";

        if (is_array($typeId)) {
            $sql .= " AND type_id IN ('" . implode("','", $typeId) . "')";
        } else {
            $sql .= " AND type_id = '" . $this->db->escape($typeId) . "'";
        }

        $sql .= " ORDER BY `city_ua` LIMIT 20";

        return $this->db->query($sql)->rows;
    }

    public function getQuote($address) {
        $data = $this->load->language('extension/shipping/meest2');

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int) $this->config->get('free_geo_zone_id') . "' AND country_id = '" . (int) $address['country_id'] . "' AND (zone_id = '" . (int) $address['zone_id'] . "' OR zone_id = '0')");

        if (!$this->config->get('shipping_meest2_geo_zone_id')) {
            $status = true;
        } elseif ($query->num_rows) {
            $status = true;
        } else {
            $status = false;
        }

        if ($this->cart->getSubTotal() < $this->config->get('free_total')) {
            $status = false;
        }

        $image = '/image/catalog/meest2/meest_logo.svg';
        $image_html = "<img style='width:70px' src=$image alt='{$this->language->get('text_title')}' title='{$this->language->get('text_title')}' />";
        $image_html_service = "<img style='width:20px' src='$image' alt='' title='' />";

        $method_data = [];

        if ($status) {
            $quote_data = [];
			$shipping_meest_service = $this->config->get('shipping_meest2_service');

			if ($shipping_meest_service) {
				$length = count($shipping_meest_service);
				$costs = $this->config->get('shipping_meest2_cost');

				foreach ($shipping_meest_service as $key=>$service) {
					$quote_data[$service] = [
						'code'         => 'meest2.' . $service,
						'title'        => $image_html_service ." Meest: " . $this->language->get('text_title_' . $service),
						'cost'         => !empty($costs[$service])?$costs[$service]:0,
						'tax_class_id' => $this->config->get('shipping_meest2_tax_class_id'),
						'text'         => empty($costs[$service])
                            ? ''
                            : $this->currency->format(
                                $this->tax->calculate(
                                    (isset($costs[$service])?$costs[$service]:0),
                                    $this->config->get('meest2_tax_class_id'),
                                    $this->config->get('config_tax')),
                                $this->session->data['currency']
                            ),
					];

					if ($key == $length-1) {
                        $html = $this->load->controller('extension/module/meest2',$data);
					    $quote_data[$service]['text'] .= '</label>' . $html;
					}
				}

				$method_data = [
					'code'       => 'meest2.meest2',
					'title'      => $image_html . $this->language->get('text_title'),
					'quote'      => $quote_data,
					'sort_order' => $this->config->get('shipping_meest2_sort_order'),
					'error'      => false
				];

			}
        }

        return $method_data;
    }
}
