<?php
class ControllerExtensionModuleMML extends Controller {
	
	public function index(&$route, &$data) {
			$language_id = $this->config->get('config_language_id');

			$logos = $this->config->get('config_logo_multi');
			if (isset($logos[$language_id]) && $logos[$language_id]) 
				$this->config->set('config_logo', $logos[$language_id]);
			
			$config_image_multi = $this->config->get('config_image_multi');
			if (isset($config_image_multi[$language_id]) && $config_image_multi[$language_id]) 
				$this->config->set('config_image', $config_image_multi[$language_id]);
			
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
			

			$config_comment_multi = $this->config->get('config_comment_multi');
			if (isset($config_comment_multi[$language_id]) && $config_comment_multi[$language_id])
				$this->config->set('config_comment', $config_comment_multi[$language_id]);
			
			$this->event->unregister('catalog/controller/*/before', 'extension/module/mml');
		}
}