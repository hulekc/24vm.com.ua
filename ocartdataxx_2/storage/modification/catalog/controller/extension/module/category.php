<?php
class ControllerExtensionModuleCategory extends Controller {
	public function index() {
		$this->load->language('extension/module/category');

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
			

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		
			$uniset = $this->config->get('config_unishop2');
			$cache_name = 'category.module.'.(int)$this->config->get('config_language_id').'.'.(int)$this->config->get('config_store_id');
			$data['categories'] = isset($uniset['menu']['caching']['status']) ? $this->cache->get($cache_name) : [];
			if(!$data['categories']) {
			

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			$children_data = array();

			if ($category['category_id'] > 0) {
				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach($children as $child) {
					$filter_data = array('filter_category_id' => $child['category_id'], 'filter_sub_category' => true);

					$children_data[] = array(
						'category_id' => $child['category_id'],
						'name' => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}
			}

			$filter_data = array(
				'filter_category_id'  => $category['category_id'],
				'filter_sub_category' => true
			);

			$data['categories'][] = array(
				'category_id' => $category['category_id'],
				'name'        => $category['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
				'children'    => $children_data,
				'href'        => $this->url->link('product/category', 'path=' . $category['category_id'])
			);
		}


				if(isset($uniset['menu']['caching']['status'])) {
					$this->cache->set($cache_name, $data['categories']);
				}
			}
			
		return $this->load->view('extension/module/category', $data);
	}
}