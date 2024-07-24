<?php
class ControllerCatalogSizechart extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('catalog/sizechart');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."sizechart` (
		  `sizechart_id` int(11) NOT NULL AUTO_INCREMENT,
		  `sort_order` int(3) NOT NULL DEFAULT '0',
		  `status` tinyint(1) NOT NULL DEFAULT '1',
		  `sizechart` longtext NOT NULL,
		  `chart_numbers` int(11) NOT NULL,
		  `display` varchar(255) NOT NULL,
		  PRIMARY KEY (`sizechart_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8;");


		$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."sizechart_category` (
		  `sizechart_id` int(11) NOT NULL,
		  `category_id` int(11) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

		$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."sizechart_description` (
		  `sizechart_id` int(11) NOT NULL,
		  `language_id` int(11) NOT NULL,
		  `title` varchar(64) NOT NULL,
		  `description` text NOT NULL,
		  PRIMARY KEY (`sizechart_id`,`language_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8;");


		$this->db->query("CREATE TABLE IF NOT EXISTS `".DB_PREFIX."sizechart_product` (
		  `sizechart_id` int(11) NOT NULL,
		  `product_id` int(11) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

		$this->load->model('catalog/sizechart');

		$this->getList();
	}

	public function add() {
		$this->load->language('catalog/sizechart');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/sizechart');
		
		$this->load->model('catalog/product');
		
		$this->load->model('catalog/category');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_sizechart->addSizeChart($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/sizechart', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		$this->load->language('catalog/sizechart');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/sizechart');
		
		$this->load->model('catalog/product');
		
		$this->load->model('catalog/category');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_sizechart->editSizeChart($this->request->get['sizechart_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/sizechart', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('catalog/sizechart');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/sizechart');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $sizechart_id) {
				$this->model_catalog_sizechart->deleteSizeChart($sizechart_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/sizechart', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'id.title';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/sizechart', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('catalog/sizechart/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('catalog/sizechart/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['sizecharts'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$sizechart_total = $this->model_catalog_sizechart->getTotalSizeCharts();

		$results = $this->model_catalog_sizechart->getSizeCharts($filter_data);

		foreach ($results as $result) {
			
			
			
			$data['sizecharts'][] = array(
				'sizechart_id' => $result['sizechart_id'],
				'title'          => $result['title'],
				'sort_order'     => $result['sort_order'],
				'edit'           => $this->url->link('catalog/sizechart/edit', 'user_token=' . $this->session->data['user_token'] . '&sizechart_id=' . $result['sizechart_id'] . $url, true)
			);
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_list'] = $this->language->get('text_list');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');

		$data['column_title'] = $this->language->get('column_title');
		$data['column_sort_order'] = $this->language->get('column_sort_order');
		$data['column_action'] = $this->language->get('column_action');

		$data['button_add'] = $this->language->get('button_add');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_title'] = $this->url->link('catalog/sizechart', 'user_token=' . $this->session->data['user_token'] . '&sort=id.title' . $url, true);
		$data['sort_sort_order'] = $this->url->link('catalog/sizechart', 'user_token=' . $this->session->data['user_token'] . '&sort=i.sort_order' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $sizechart_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('catalog/sizechart', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($sizechart_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($sizechart_total - $this->config->get('config_limit_admin'))) ? $sizechart_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $sizechart_total, ceil($sizechart_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/sizechart_list', $data));
	}

	protected function getForm() {
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_form'] = !isset($this->request->get['sizechart_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_sizechart'] = $this->language->get('text_sizechart');
		$data['text_heading'] = $this->language->get('text_heading');
		$data['text_value'] = $this->language->get('text_value');
		
		$data['text_popup'] = $this->language->get('text_popup');
		$data['text_above_description'] = $this->language->get('text_above_description');
		$data['text_in_description'] = $this->language->get('text_in_description');
		$data['text_sizechart_tab'] = $this->language->get('text_sizechart_tab');
		
		$data['entry_title'] = $this->language->get('entry_title');
		$data['entry_description'] = $this->language->get('entry_description');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_product'] = $this->language->get('entry_product');
		$data['entry_category'] = $this->language->get('entry_category');
		$data['entry_add_chart'] = $this->language->get('entry_add_chart');
		$data['entry_display'] = $this->language->get('entry_display');
		
		$data['button_add'] = $this->language->get('button_add');
		$data['button_chart_value_add'] = $this->language->get('button_chart_value_add');
		$data['button_remove'] = $this->language->get('button_remove');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_data'] = $this->language->get('tab_data');
		$data['tab_links'] = $this->language->get('tab_links');
		$data['tab_display'] = $this->language->get('tab_display');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = array();
		}

		if (isset($this->error['description'])) {
			$data['error_description'] = $this->error['description'];
		} else {
			$data['error_description'] = array();
		}
		
		if (isset($this->error['chart_numbers'])) {
			$data['error_chart_numbers'] = $this->error['chart_numbers'];
		} else {
			$data['error_chart_numbers'] = '';
		}
		
		if (isset($this->error['sizechart'])) {
			$data['error_sizechart'] = $this->error['sizechart'];
		} else {
			$data['error_sizechart'] = array();
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/sizechart', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['sizechart_id'])) {
			$data['action'] = $this->url->link('catalog/sizechart/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('catalog/sizechart/edit', 'user_token=' . $this->session->data['user_token'] . '&sizechart_id=' . $this->request->get['sizechart_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('catalog/sizechart', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['sizechart_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$sizechart_info = $this->model_catalog_sizechart->getSizeChart($this->request->get['sizechart_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['sizechart_description'])) {
			$data['sizechart_description'] = $this->request->post['sizechart_description'];
		} elseif (isset($this->request->get['sizechart_id'])) {
			$data['sizechart_description'] = $this->model_catalog_sizechart->getSizeChartDescriptions($this->request->get['sizechart_id']);
		} else {
			$data['sizechart_description'] = array();
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($sizechart_info)) {
			$data['status'] = $sizechart_info['status'];
		} else {
			$data['status'] = true;
		}

		if (isset($this->request->post['sort_order'])) {
			$data['sort_order'] = $this->request->post['sort_order'];
		} elseif (!empty($sizechart_info)) {
			$data['sort_order'] = $sizechart_info['sort_order'];
		} else {
			$data['sort_order'] = '';
		}
		
		if (isset($this->request->post['display'])) {
			$data['display'] = $this->request->post['display'];
		} elseif (!empty($sizechart_info)) {
			$data['display'] = $sizechart_info['display'];
		} else {
			$data['display'] = 'above';
		}
		
		if (isset($this->request->post['chart_numbers'])) {
			$data['chart_numbers'] = $this->request->post['chart_numbers'];
		} elseif (!empty($sizechart_info)) {
			$data['chart_numbers'] = $sizechart_info['chart_numbers'];
		} else {
			$data['chart_numbers'] = '';
		}
		
		if (isset($this->request->post['sizechart'])) {
			$data['sizecharts'] = $this->request->post['sizechart'];
		} elseif (!empty($sizechart_info)) {
			$data['sizecharts'] = (!empty($sizechart_info['sizechart'])) ? unserialize($sizechart_info['sizechart']) : array();
		} else {
			$data['sizecharts'] = array();
		}
		
		$data['products'] = array();

		if (isset($this->request->post['product'])) {
			$products = $this->request->post['product'];
		} elseif (!empty($sizechart_info)) {
			$products = $this->model_catalog_sizechart->getSizeChartProducts($sizechart_info['sizechart_id']);
		} else {
			$products = array();
		}

		if($products) {
			foreach ($products as $product_id) {
				$product_info = $this->model_catalog_product->getProduct($product_id);

				if ($product_info) {
					$data['products'][] = array(
						'product_id' => $product_info['product_id'],
						'name'       => $product_info['name']
					);
				}
			}
		}
		
		
		$data['categories'] = array();

		if (isset($this->request->post['category'])) {
			$categories = $this->request->post['category'];
		} elseif (!empty($sizechart_info)) {
			$categories = $this->model_catalog_sizechart->getSizeChartCategories($sizechart_info['sizechart_id']);
		} else {
			$categories = array();
		}

		if($categories) {
			foreach ($categories as $category_id) {
				$category_info = $this->model_catalog_category->getCategory($category_id);

				if ($category_info) {
					$data['categories'][] = array(
						'category_id'	 => $category_info['category_id'],
						'name'      	 => ($category_info['path']) ? $category_info['path'] . ' &gt; ' . $category_info['name'] : $category_info['name']
					);
				}
			}
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/sizechart_form', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'catalog/sizechart')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['sizechart_description'] as $language_id => $value) {
			if ((utf8_strlen($value['title']) < 3) || (utf8_strlen($value['title']) > 64)) {
				$this->error['title'][$language_id] = $this->language->get('error_title');
			}
		}
		
		if ($this->request->post['chart_numbers'] < 1) {
			$this->error['chart_numbers'] = $this->language->get('error_chart_numbers');
		}
		
		if (empty($this->request->post['sizechart'])) {
			$this->error['warning'] = $this->language->get('error_sizechart_two');
		}else{
			if(count($this->request->post['sizechart']) < 2) {
				$this->error['warning'] = $this->language->get('error_sizechart_two');	
			}
				
			if($this->request->post['sizechart']) {
				foreach($this->request->post['sizechart'] as $key => $sizechart_value) {
					foreach($sizechart_value as $chart_numbers => $input_value) {
						if(empty($input_value['value'])) {
							$this->error['sizechart'][$key][$chart_numbers]['value'] = $this->language->get('error_sizechart_value');
						}
					}
				}
			}
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'catalog/sizechart')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}