<?php
class ControllerCommonHeader extends Controller {
	public function index() {

//CKEditor
if ($this->config->has('module_ckeditor_status') && $this->config->get('module_ckeditor_status')) {
    $this->document->addScript('view/javascript/ckeditor/ckeditor.js');
    $this->document->addScript('view/javascript/ckeditor/ckeditor_init.js');

    $data['ckeditor_status'] = 'on';
} else {
    $data['ckeditor_status'] = 'off';
}

if (version_compare(VERSION, '3', '>=')) {
  $data['ckeditor_token'] = 'user_token';
} else {
  $data['ckeditor_token'] = 'token';
}

      

/* ChatGPT Pro */
$data['oc_version'] = (version_compare(VERSION, '3') >= 0 ? 3 : 2);
$this->load->language('extension/module/chatgpt_pro');
$data['gptp_assistant'] = $this->language->get('gptp_assistant');
$data['gptp_settings'] = $this->language->get('gptp_settings');
$data['gptp_integration'] = $this->language->get('gptp_integration');
$this->document->addStyle('view/stylesheet/chatgpt_pro/main.css?'.time());
$this->document->addScript('view/javascript/chatgpt_pro/source.js?'.time());
if (!empty($this->request->get['route'])) {
	$data['gptp_route'] = $this->request->get['route'];
	if ($this->config->get('chatgpt_pro_status') && strpos($this->request->get['route'], 'tool/chatgpt_pro') === false) {
		$this->document->addScript('view/javascript/chatgpt_pro/main.js?'.time());
	}
}
/* ChatGPT Pro END */
			
		$data['title'] = $this->document->getTitle();

		if ($this->request->server['HTTPS']) {
			$data['base'] = HTTPS_SERVER;
		} else {
			$data['base'] = HTTP_SERVER;
		}

		if ($this->request->server['HTTPS']) {
            $server = HTTPS_CATALOG;
        } else {
            $server = HTTP_CATALOG;
        }

        if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
        }

		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$this->load->language('common/header');

				#XML Mart extensions#
				$data['me_admin_search'] = '';
				if($this->config->get('module_me_admin_search_status')){
					$data['me_admin_search'] = $this->load->controller('extension/me_admin_search');
				}
				#XML Mart extensions#
			

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->user->getUserName());

		if (!isset($this->request->get['user_token']) || !isset($this->session->data['user_token']) || ($this->request->get['user_token'] != $this->session->data['user_token'])) {
			$data['logged'] = '';

			$data['home'] = $this->url->link('common/login', '', true);
		} else {
			$data['logged'] = true;

			if ($this->config->get('cache_cleaner_status') && $this->user->hasPermission('access', 'extension/module/cache_cleaner') && $this->user->hasPermission('modify', 'extension/module/cache_cleaner')) {
				$this->load->language('extension/module/cache_cleaner');

				$data['text_clear'] = $this->language->get('text_clear');
				$data['text_clear_all'] = $this->language->get('text_clear_all');
				$data['text_refresh'] = $this->language->get('text_refresh');
				$data['text_cache'] = $this->language->get('text_cache');
				$data['text_cache_system'] = $this->language->get('text_cache_system');
				$data['text_cache_modification'] = $this->language->get('text_cache_modification');
				$data['text_cache_image'] = $this->language->get('text_cache_image');
				$data['text_log'] = $this->language->get('text_log');
				$data['text_log_error'] = $this->language->get('text_log_error');
				$data['text_log_modification'] = $this->language->get('text_log_modification');

				$this->load->model('extension/module/cache_cleaner');

				if ($this->config->get('cache_cleaner_size')) {
					$data['text_cleaner_size'] = $this->model_extension_module_cache_cleaner->getSize();
				} else {
				$data['text_cleaner_size'] = false;
				
				}

				$data['storage_cleaner'] = true;
			}
			
// Extended Reviews

      $data['reviews_count'] = 0;

      if(isset($this->config->get('extended_reviews_settings')['status']) && $this->config->get('extended_reviews_settings')['status']){

      try{

			$this->load->model('catalog/extended_reviews');

			$data['answer_total'] = $this->model_catalog_extended_reviews->getTotalReviewAnswers(array('filter_status' => 0));

      $data['review_total'] = $this->model_catalog_extended_reviews->getTotalReviews(array('filter_status' => 0));

			$data['all_answer_total'] = $this->model_catalog_extended_reviews->getTotalReviewAnswers();

			$data['all_review_total'] = $this->model_catalog_extended_reviews->getTotalReviews();

      $data['reviews_count'] += $data['review_total'] + $data['answer_total'];

			$data['extended_review'] = $this->url->link('catalog/extended_reviews', 'user_token=' . $this->session->data['user_token'], true);

			$data['extended_review_off'] = $this->url->link('catalog/extended_reviews', 'user_token=' . $this->session->data['user_token'] . '&filter_status=0', true);

			$data['extended_review_answer'] = $this->url->link('catalog/extended_reviews/getAnswerList', 'user_token=' . $this->session->data['user_token'], true);

			$data['extended_review_answer_off'] = $this->url->link('catalog/extended_reviews/getAnswerList', 'user_token=' . $this->session->data['user_token'] . '&filter_status=0', true);

			$data['extended_review_settings'] = $this->url->link('extension/module/extended_reviews', 'user_token=' . $this->session->data['user_token'], true);
      }catch(Exception $e){}
      }

      if(isset($this->config->get('ex_store_reviews_settings')['status']) && $this->config->get('ex_store_reviews_settings')['status']){
			try{

			$this->load->model('catalog/ex_store_reviews');

			$data['review_store_total'] = $this->model_catalog_ex_store_reviews->getTotalReviews();

			$data['review_store'] = $this->model_catalog_ex_store_reviews->getTotalReviews(array('filter_status' => 0));

      $data['reviews_count'] += $data['review_store'];

			$data['extended_review_store'] = $this->url->link('catalog/ex_store_reviews', 'user_token=' . $this->session->data['user_token'], true);

			$data['extended_review_store_off'] = $this->url->link('catalog/ex_store_reviews', 'user_token=' . $this->session->data['user_token'] . '&filter_status=0', true);

			$data['extended_review_store_settings'] = $this->url->link('extension/module/ex_store_reviews', 'user_token=' . $this->session->data['user_token'], true);
			}
			catch(Exception $e){}
      }

/* ChatGPT Pro */
$token_param = 'token';
if (version_compare(VERSION, '3') >= 0) {
	$token_param = 'user_token';
}
$data['chatgpt_pro_link'] = ($this->config->get('chatgpt_pro_quick_chat') ? $this->url->link('tool/chatgpt_pro', $token_param.'=' . $this->session->data[$token_param], true) : FALSE);
// TMP FIX - disable quick_chat option
$data['chatgpt_pro_link'] = $this->url->link('tool/chatgpt_pro', $token_param.'=' . $this->session->data[$token_param], true);
if (!empty($this->request->get['route'])) {
	if ($this->config->get('chatgpt_pro_status') && strpos($this->request->get['route'], 'tool/chatgpt_pro') === false) {
		$data['cgp_settings'] = $this->load->controller('tool/chatgpt_pro/settings', (!empty($data['gptp_route']) ? $data['gptp_route'] : NULL));
	}
}
/* ChatGPT Pro END */
			

			$data['home'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true);
			$data['logout'] = $this->url->link('common/logout', 'user_token=' . $this->session->data['user_token'], true);
			$data['profile'] = $this->url->link('common/profile', 'user_token=' . $this->session->data['user_token'], true);

			$this->load->model('user/user');

			$this->load->model('tool/image');

			$user_info = $this->model_user_user->getUser($this->user->getId());

			if ($user_info) {
				$data['firstname'] = $user_info['firstname'];
				$data['lastname'] = $user_info['lastname'];
				$data['username']  = $user_info['username'];
				$data['user_group'] = $user_info['user_group'];

				if (is_file(DIR_IMAGE . $user_info['image'])) {
					$data['image'] = $this->model_tool_image->resize($user_info['image'], 45, 45);
				} else {
					$data['image'] = $this->model_tool_image->resize('profile.png', 45, 45);
				}
			} else {
				$data['firstname'] = '';
				$data['lastname'] = '';
				$data['user_group'] = '';
				$data['image'] = '';
			}

			// Online Stores
			$data['stores'] = array();

			$data['stores'][] = array(
				'name' => $this->config->get('config_name'),
				'href' => HTTP_CATALOG
			);

			$this->load->model('setting/store');

			$results = $this->model_setting_store->getStores();

			foreach ($results as $result) {
				$data['stores'][] = array(
					'name' => $result['name'],
					'href' => $result['url']
				);
			}
		}

		return $this->load->view('common/header', $data);
	}
}
