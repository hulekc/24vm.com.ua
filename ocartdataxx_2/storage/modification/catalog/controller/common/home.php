<?php
class ControllerCommonHome extends Controller {
	public function index() {

			$language_id = $this->config->get('config_language_id');

			$logos = $this->config->get('config_logo_multi');
			if (isset($logos[$language_id]) && $logos[$language_id]) 
				$this->config->set('config_logo', $logos[$language_id]);
			
			$config_meta_description_multi = $this->config->get('config_meta_description_multi');
			if (isset($config_meta_description_multi[$language_id]) && $config_meta_description_multi[$language_id])
				$this->config->set('config_meta_description', $config_meta_description_multi[$language_id]);

			$config_address_multi = $this->config->get('config_address_multi');
			if (isset($config_address_multi[$language_id]) && $config_address_multi[$language_id])
				$this->config->set('config_address', $config_address_multi[$language_id]);

			$config_name_multi = $this->config->get('config_name_multi');
			if (isset($config_name_multi[$language_id]) && $config_name_multi[$language_id])
				$this->config->set('config_name', $config_name_multi[$language_id]);

			$config_meta_title_multi = $this->config->get('config_meta_title_multi');
			if (isset($config_meta_title_multi[$language_id]) && $config_meta_title_multi[$language_id])
				$this->config->set('config_meta_title', $config_meta_title_multi[$language_id]);

			$config_meta_keyword_multi = $this->config->get('config_meta_keyword_multi');
			if (isset($config_meta_keyword_multi[$language_id]) && $config_meta_keyword_multi[$language_id])
				$this->config->set('config_meta_keyword', $config_meta_keyword_multi[$language_id]);

			$config_open_multi = $this->config->get('config_open_multi');
			if (isset($config_open_multi[$language_id]) && $config_open_multi[$language_id])
				$this->config->set('config_open', $config_open_multi[$language_id]);
			
			$data['config_meta_tags'] = html_entity_decode($this->config->get('config_meta_tags'), ENT_QUOTES, 'UTF-8');
	
			
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
