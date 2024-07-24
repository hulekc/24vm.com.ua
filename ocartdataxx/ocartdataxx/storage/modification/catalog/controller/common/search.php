<?php
class ControllerCommonSearch extends Controller {
	public function index() {
		$this->load->language('common/search');

			$uniset = $this->config->get('config_unishop2');
			$this->load->language('extension/module/uni_othertext');
			
			$data['categories'] = [];
			
			$hide_category = $uniset['header']['search']['category'];
			$isMobile = $uniset['is_mobile'];
			
			$hide_cat = ($hide_category == 'always') || ($hide_category == 'only_mobile' && $isMobile) ? true : false;
			
			if(!$hide_cat) {
				$cache_name = 'category.unishop.header.search.'.(int)$this->config->get('config_language_id').'.'.(int)$this->config->get('config_store_id');
		
				$categories = $this->cache->get($cache_name);
		
				if(!$categories) {
					$this->load->model('catalog/category');
					$categories = $this->model_catalog_category->getCategories(0);
			
					if($categories){
						$this->cache->set($cache_name, $categories);
					}
				}
			
				foreach ($categories as $category) {
					$data['categories'][] = [
						'category_id' => $category['category_id'],
						'name'        => $category['name'],
					];
				}
			}
			

		$data['text_search'] = $this->language->get('text_search');

		if (isset($this->request->get['search'])) {
			$data['search'] = $this->request->get['search'];
		} else {
			$data['search'] = '';
		}

		return $this->load->view('common/search', $data);
	}
}