<?php


class ControllerExtensionModuleFakereviews extends Controller {
	private $error = array();
	
	public function index() {

		
		$this->load->language('extension/module/fakereviews');
		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_fakereviews', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/account', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/account', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$data['token'] = $this->session->data['user_token'];




		
		$this->load->model('catalog/product');

		$data['products'] = array();

		if (!empty($this->request->post['fakereviews_product'])) {
			$products = $this->request->post['fakereviews_product'];
		} elseif (!empty($this->config->get('fakereviews_product'))) {
			$products = $this->config->get('fakereviews_product');
		} else {
			$products = array();
		}
		
		
		
		if (isset($this->request->post['fakereviews_product'])) {
			$products = $this->request->post['fakereviews_product'];
		} else if (!empty($this->config->get('fakereviews_product'))) {
			$products = $this->config->get('fakereviews_product');
		} else {
			$products = array();
		}
		



		foreach ($products as $product_id) {
			$product_info = $this->model_catalog_product->getProduct($product_id);

			if ($product_info) {
				$data['products'][] = array(
					'product_id' => $product_info['product_id'],
					'name'       => $product_info['name']
				);
			}
		}

		if (isset($this->request->post['fakereviews_status'])) {
			$data['fakereviews_status'] = $this->request->post['fakereviews_status'];
		} else {
			$data['fakereviews_status'] = $this->config->get('fakereviews_status');
		}
	

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/fakereviews', $data));
	}
	
	
	public function addreviews() {
		$json = array();
		
		$getReviews = explode("\n",$this->request->get['reviews']);
		
		$getUz = explode("\n",$this->request->get['names_uz']);
		
		$getProducts = $this->request->get['fakereviews_product'];
		
		$date_ot = strtotime($this->request->get['date_ot']);
		$date_do = strtotime($this->request->get['date_do']);
		
		$i = 0;
		$prod = 0;
		foreach ($getReviews as $review) {
			
			$int = mt_rand($date_ot, $date_do);
			
			$date = date("Y-m-d",$int);
			$date = $date . " 00:00:00";
			
			if (array_key_exists($prod, $getProducts) == false) {
				$prod = 0;
			}
			
			if (array_key_exists($i, $getUz) == false) {
				$i = 0;
			}
			
			
			
			$result = $this->db->query("INSERT INTO " . DB_PREFIX . "review (product_id, customer_id, author, text, rating, status, date_added, date_modified) 
			VALUES ('" . $getProducts[$prod] . "', 0, '" . $getUz[$i] . "', '" . $review . "', '" . $this->request->get['ocenka'] . "', '" . $this->request->get['stat_otz'] . "', '" . $date . "', '" . $date . "')");
		$i++;
		$prod++;
		}		
		
		
		$json[] = $result;
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
		
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/fakereviews')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}