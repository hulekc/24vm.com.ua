<?php
class ControllerCommonMenu extends Controller {
	public function index() {

				$uniset = $this->config->get('config_unishop2');
				
				$this->load->model('tool/image');
				
				$new_data = $this->load->controller('extension/module/uni_new_data', ['type' => 'menu']);
				
				$data = isset($data) ? array_merge($data, $new_data) : $new_data;
				
				$third_level_limit = isset($uniset['menu']['third_level']['limit']) ? $uniset['menu']['third_level']['limit'] : 0;
			
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		
			$cache_name = 'category.unishop.menu.'.(int)$this->config->get('config_language_id').'.'.(int)$this->config->get('config_store_id');
			
			$data['categories'] = isset($uniset['menu']['caching']['status']) ? $this->cache->get($cache_name) : [];
			
			if(!$data['categories']) {
			

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2

			$show_child_image = in_array($category['category_id'], $uniset['menu']['second_level']['image']) ? true : false;
			
			
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);

						
				$children2 = $this->model_catalog_category->getCategories($child['category_id']);
					
				$children_data2 = [];
				$child_count = 0;
				$more = '';
				$show_more = $third_level_limit && $third_level_limit < count($children2) ? true : false;
			
				foreach ($children2 as $child2) {
					if(isset($uniset['menu_links_show']) ? $child2['top'] : 1) {
						$children_data2[] = [
							'name'  		=> $child2['name'],
							'category_id'	=> $child2['category_id'],
							'href'  		=> $this->url->link('product/category', 'path='.$category['category_id'].'_'.$child['category_id'].'_'.$child2['category_id'], true),
							'sort_order'	=> $child2['sort_order']
						];
							
						$child_count++;
					}
						
					if($show_more && $third_level_limit == $child_count) {
						$more = count($children2);
						break;
					}
				}
				
				if(isset($data['landinglinks'][$child['category_id']])) {
					$children_data2 = array_merge($children_data2, $data['landinglinks'][$child['category_id']]);
					
					array_multisort(array_column($children_data2, 'sort_order'), SORT_ASC, $children_data2);
				}
					
				if(isset($uniset['menu_links_show']) ? $child['top'] : 1) {
					$children_data[] = [
						'name'       	=> $child['name'],
						'category_id'	=> $child['category_id'],
						'image'			=> $show_child_image && $children_data2 && $child['image'] ? $this->model_tool_image->resize($child['image'], 100, 100) : '',
						'children'   	=> $children_data2,
						'href'        	=> $this->url->link('product/category', 'path='.$category['category_id'].'_'.$child['category_id'], true),
						'sort_order'	=> $child['sort_order'],
						'more'			=> $more
					];
				}
			}
			
			if (isset($data['landinglinks'][$category['category_id']])) {
				$children_data = array_merge($children_data, $data['landinglinks'][$category['category_id']]);
					
				array_multisort(array_column($children_data, 'sort_order'), SORT_ASC, $children_data);
			}
			
			// Level 1
			
				$data['categories'][] = array(
					'name'     => $category['name'],

			'icon'		=> isset($data['icons'][$category['category_id']]) ? $data['icons'][$category['category_id']] : [],
			'banner'	=> isset($data['banners'][$category['category_id']]) && $category['column'] > 1 ? $data['banners'][$category['category_id']] : [],
			'sort_order'=> $category['sort_order'],
			
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}


			if($data['additional_link']) {
				$data['categories'] = array_merge($data['categories'], $data['additional_link']);
				
				if(count($data['categories']) > 1) {
					array_multisort(array_column($data['categories'], 'sort_order'), SORT_ASC, $data['categories']);
				}
			}
			
				if(isset($uniset['menu']['caching']['status'])){
					$this->cache->set($cache_name, $data['categories']);
				}
			}
			

				if($this->config->get('xbundle_status')){
					$xbundle_description = $this->config->get('xbundle_description');
					if (isset($xbundle_description)&&$xbundle_description[$this->config->get('config_language_id')]['menu']!='') {
						$bundles_data=array();
						$this->load->model('extension/xbundle');
						$bundles= $this->model_extension_xbundle->getbundles(array());
						foreach($bundles as $bundle){
							if($bundle['top']){
								$bundles_data[]=array(
								  'name'  => $bundle['name'],
								  'href'  => $this->url->link('extension/product_bundle', 'bundle_id=' . $bundle['bundle_id'],true)
								);
							}
						}
						
						$data['categories'][] = array(
							'name'     => $xbundle_description[$this->config->get('config_language_id')]['menu'],
							'children' => $bundles_data,
							'column'   => $this->config->get('xbundle_column'),
							'href'     => $this->url->link('extension/xbundle','',true)
						);
					}
				}
				
		return $this->load->view('common/menu', $data);
	}
}
