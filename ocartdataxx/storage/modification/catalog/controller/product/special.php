<?php
class ControllerProductSpecial extends Controller {
	public function index() {
		$this->load->language('product/special');

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

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = isset($uniset['catalog']['default_sort']) ? explode('|', $uniset['catalog']['default_sort'])[0] : 'p.sort_order';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = isset($uniset['catalog']['default_sort']) ? explode('|', $uniset['catalog']['default_sort'])[1] : 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$url = '';

			if (isset($this->request->get['cat_id'])) {
				$url .= '&cat_id=' . (int)$this->request->get['cat_id'];
			}
			

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('product/special', $url)
		);

		$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

		$data['compare'] = $this->url->link('product/compare');

		$data['products'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $limit,
			
			'limit' => $limit,
			'filter_category_id' => isset($this->request->get['cat_id']) ? (int)$this->request->get['cat_id'] : 0,
			
		);

			$special_page = $uniset['catalog']['special_page'];
			
			if(isset($special_page['product_category'])) {
				$this->load->model('extension/module/uni_special');
				$this->load->language('product/uni_special');
			}
			

		$product_total = $this->{isset($special_page['product_category']) ? 'model_extension_module_uni_special' : 'model_catalog_product'}->getTotalProductSpecials($filter_data);

		$results = $this->{isset($special_page['product_category']) ? 'model_extension_module_uni_special' : 'model_catalog_product'}->getProductSpecials($filter_data);


			$data = array_merge($data, $this->load->controller('product/uni_special'));
				
			if(isset($data['breadcrumbs_new'])) {
				$data['breadcrumbs'] = array_merge($data['breadcrumbs'], $data['breadcrumbs_new']);
			}
			
		foreach ($results as $result) {
			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
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
				$rating = (int)$result['rating'];
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
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'rating'      => $result['rating'],
				'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'] . $url)
			);
		}

		$url = '';

			if (isset($this->request->get['cat_id'])) {
				$url .= '&cat_id=' . (int)$this->request->get['cat_id'];
			}
			

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}


      // OCFilter start
      if (isset($url) && $this->registry->get('ocfilter') && $this->ocfilter->startup() && $this->ocfilter->api->isSelected()) {
        $url .= '&' . $this->ocfilter->api->getParamsIndex() . '=' . $this->ocfilter->api->getParamsString();
        
        if (isset($this->request->get['ocfilter_placement'])) {
          $url .= '&ocfilter_placement=' . $this->request->get['ocfilter_placement'];
        }
      }
      // OCFilter end
      
		$data['sorts'] = array();

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_default'),
			'value' => 'p.sort_order-ASC',
			'href'  => $this->url->link('product/special', 'sort=p.sort_order&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_name_asc'),
			'value' => 'pd.name-ASC',
			'href'  => $this->url->link('product/special', 'sort=pd.name&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_name_desc'),
			'value' => 'pd.name-DESC',
			'href'  => $this->url->link('product/special', 'sort=pd.name&order=DESC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_price_asc'),
			'value' => 'ps.price-ASC',
			'href'  => $this->url->link('product/special', 'sort=ps.price&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_price_desc'),
			'value' => 'ps.price-DESC',
			'href'  => $this->url->link('product/special', 'sort=ps.price&order=DESC' . $url)
		);

		if ($this->config->get('config_review_status')) {
			$data['sorts'][] = array(
				'text'  => $this->language->get('text_rating_desc'),
				'value' => 'rating-DESC',
				'href'  => $this->url->link('product/special', 'sort=rating&order=DESC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_rating_asc'),
				'value' => 'rating-ASC',
				'href'  => $this->url->link('product/special', 'sort=rating&order=ASC' . $url)
			);
		}

		$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_asc'),
				'value' => 'p.model-ASC',
				'href'  => $this->url->link('product/special', 'sort=p.model&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_model_desc'),
			'value' => 'p.model-DESC',
			'href'  => $this->url->link('product/special', 'sort=p.model&order=DESC' . $url)
		);

		$url = '';

			if (isset($this->request->get['cat_id'])) {
				$url .= '&cat_id=' . (int)$this->request->get['cat_id'];
			}
			

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}


      // OCFilter start
      if (isset($url) && $this->registry->get('ocfilter') && $this->ocfilter->startup() && $this->ocfilter->api->isSelected()) {
        $url .= '&' . $this->ocfilter->api->getParamsIndex() . '=' . $this->ocfilter->api->getParamsString();
        
        if (isset($this->request->get['ocfilter_placement'])) {
          $url .= '&ocfilter_placement=' . $this->request->get['ocfilter_placement'];
        }        
      }
      // OCFilter end
      
		$data['limits'] = array();

		$limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));


			if(isset($uniset['catalog']['limit']['status'])) {
				$new_limits = array_unique(explode(',', $uniset['catalog']['limit']['value']));

				$limits = $new_limits ? $new_limits : $limits;
			}
			
		sort($limits);

		foreach($limits as $value) {
			$data['limits'][] = array(
				'text'  => $value,
				'value' => $value,
				'href'  => $this->url->link('product/special', $url . '&limit=' . (int)$value)
			);
		}

		$url = '';

			if (isset($this->request->get['cat_id'])) {
				$url .= '&cat_id=' . (int)$this->request->get['cat_id'];
			}
			

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}


      // OCFilter start
      if (isset($url) && $this->registry->get('ocfilter') && $this->ocfilter->startup() && $this->ocfilter->api->isSelected()) {
        $url .= '&' . $this->ocfilter->api->getParamsIndex() . '=' . $this->ocfilter->api->getParamsString();
        
        if (isset($this->request->get['ocfilter_placement'])) {
          $url .= '&ocfilter_placement=' . $this->request->get['ocfilter_placement'];
        }        
      }
      // OCFilter end
      
		$pagination = new Pagination();
		$pagination->total = $product_total;
		$pagination->page = $page;
		$pagination->limit = $limit;
		$pagination->url = $this->url->link('product/special', $url . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

		// http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
		if ($page == 1) {
		    $this->document->addLink($this->url->link('product/special', '', true), 'canonical');
		} else {
		    $this->document->addLink($this->url->link('product/special', 'page='. $page , true), 'canonical');
		}		
		
		if ($page > 1) {
			$this->document->addLink($this->url->link('product/special', (($page - 2) ? '&page='. ($page - 1) : ''), true), 'prev');
		}

		if ($limit && ceil($product_total / $limit) > $page) {
		    $this->document->addLink($this->url->link('product/special', 'page='. ($page + 1), true), 'next');
		}


			if(isset($uniset['catalog']['disabled_sorts']) && isset($data['sorts'])) {
				foreach($data['sorts'] as $key => $sorts) {
					if(in_array(explode('-', $sorts['value'])[0], $uniset['catalog']['disabled_sorts'])) {
						unset($data['sorts'][$key]);
					}
				}
			}
			
		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['limit'] = $limit;

      // OCFilter Start
      if ($this->registry->get('ocfilter') && $this->ocfilter->startup()) {
        $this->ocfilter->api->setProductListControllerData($data, (isset($product_total) ? $product_total : null));
      }
      // OCFilter End
      

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('product/special', $data));
	}
}
