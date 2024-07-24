<?php
class ControllerExtensionModuleLatest extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/latest');

			$uniset = $this->config->get('config_unishop2');
			$lang_id = $this->config->get('config_language_id');
			
			$this->load->model('extension/module/uni_new_data');
			$this->load->language('extension/module/uni_othertext');
			
			$data['type_view'] = isset($setting['name']) && in_array($setting['name'], $uniset['module_type_view']) ? 'grid' : 'carousel';
			
			$data = array_merge($data, $this->load->controller('extension/module/uni_new_data', ['type' => 'catalog']));
			
			$data['img_width'] = isset($setting['width']) ? $setting['width'] : $data['img_width'];
			$data['img_height'] = isset($setting['height']) ? $setting['height'] : $data['img_height'];
			
			$currency = $this->session->data['currency'];
			$config_tax = $this->config->get('config_tax'); 
			
			$stock_warning = (!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')) ? true : false;
			

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['products'] = array();

		$results = $this->model_catalog_product->getLatestProducts($setting['limit']);

		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if (!is_null($result['special']) && (float)$result['special'] >= 0) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$tax_price = (float)$result['special'];
				} else {
					$special = false;
					$tax_price = (float)$result['price'];
				}
	
				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format($tax_price, $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}


			$result = isset($product_info) && isset($setting) ? $product_info : $result;
			$new_data = $this->model_extension_module_uni_new_data->getNewData($result, ['width' => $data['img_width'], 'height' => $data['img_height']]);
			
			if($new_data['special_date_end']) {
				$data['show_timer'] = true;
			}
			
			if((int)$result['reviews']) {
				$data['show_rating'] = true;
			}
			
				$data['products'][] = array(

			'rating_new'		=> $result['rating'],
			'text_reviews'		=> $new_data['text_reviews'],
			'quantity' 			=> $result['quantity'],
			'minimum' 			=> $result['minimum'] ? $result['minimum'] : 1,
			'maximum'			=> $stock_warning ? $result['quantity'] : 100000,
			'price_value' 		=> $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $config_tax), $currency, false, false),
			'special_value' 	=> $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $config_tax), $currency, false, false),
			'model'				=> $new_data['model'],
			'additional_image'	=> $new_data['additional_image'],
			'stickers' 			=> $new_data['stickers'],
			'special_date_end' 	=> $new_data['special_date_end'],
			'quantity_indicator'=> $new_data['quantity_indicator'],
			'discounts'			=> $new_data['discounts'],
			'attributes' 		=> $new_data['attributes'],
			'options'			=> $new_data['options'],
			'show_description'	=> $new_data['show_description'],
			'show_quantity'		=> $new_data['show_quantity'],
			'cart_btn_icon'		=> $new_data['cart_btn_icon'],
			'cart_btn_text'		=> $new_data['cart_btn_text'],
			'cart_btn_class'	=> $new_data['cart_btn_class'],
			'quick_order'		=> $new_data['quick_order'],
			
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}

			return $this->load->view('extension/module/latest', $data);
		}
	}
}
