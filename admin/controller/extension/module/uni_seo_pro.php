<?php
class ControllerExtensionModuleUniSeoPro extends Controller {
	public function index() {
		$this->load->language('extension/module/uni_seo_pro');
		$this->document->setTitle(strip_tags($this->language->get('heading_title')));

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

			$this->load->model('setting/setting');
			if (isset($this->request->post['module_uni_seo_pro_utm'])) {
				$uni_seo_pro_utm = $this->request->post['module_uni_seo_pro_utm'];
				$uni_seo_pro_utm = explode("\n", str_replace(array("\r\n", "\r"), "\n", trim($this->request->post['module_uni_seo_pro_utm'])));
				$new_uni_seo_pro_utm = array();
				foreach ($uni_seo_pro_utm as $utm) {
					$u = trim($utm);
					if ($u != '') {
						$new_uni_seo_pro_utm[] = $u;
					}
				}
				$this->request->post['module_uni_seo_pro_utm'] = implode("\n",$new_uni_seo_pro_utm);
			}

			$this->model_setting_setting->editSettingValue('config', 'config_seo_url', $this->request->post['config_seo_url']);
			
			$this->model_setting_setting->editSetting('module_uni_seo_pro', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');
			$this->cache->delete('seo_pro');
			
			if (isset($this->request->post['module_uni_seo_pro_status']) && $this->request->post['module_uni_seo_pro_status']
			&& isset($this->request->post['config_seo_url']) && $this->request->post['config_seo_url']) {
				$this->installXml();
				$this->installEvents();
				
			} else {
				$this->uninstallXml();
				$this->uninstallEvents();
			}
			
			$this->clearCache();

			$this->load->controller('marketplace/modification/refresh', array('redirect' => 'extension/module/uni_seo_pro'));
			$this->response->redirect($this->makeUrl('extension/module/uni_seo_pro'));
		}

		$data['cancel'] = $this->makeUrl('marketplace/extension');

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

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->makeUrl('common/dashboard')
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->makeUrl('marketplace/extension')
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->makeUrl('extension/module/uni_seo_pro')
		);

		$data['action']                   = $this->makeUrl('extension/module/uni_seo_pro');
		$data['button_log']               = $this->makeUrl('extension/module/uni_seo_pro/download');
		$data['button_clear_cache']       = $this->makeUrl('extension/module/uni_seo_pro/clearCache');
		$data['button_recovery_category'] = $this->makeUrl('extension/module/uni_seo_pro/recovery_category');

		$allow_input = array(
			'module_uni_seo_pro_status' => 1,
			'module_uni_seo_pro_include_path' => 1,
			'module_uni_seo_pro_postfix' => '',
			'module_uni_seo_pro_postfix_slash' => 0,
			'module_uni_seo_pro_postfix_slash_product' => 0,
			'module_uni_seo_pro_short_url' => 0,
			'module_uni_seo_pro_prefix_category' => '',
			'module_uni_seo_pro_prefix_product' => '',
			'module_uni_seo_pro_prefix_blogcategory' => '',
			'module_uni_seo_pro_prefix_blogarticle' => '',
			'module_uni_seo_pro_prefix_brand' => '',
			'module_uni_seo_pro_utm' => "block
frommarket
gclid
keyword
list_type
openstat
openstat_service
openstat_campaign
openstat_ad
openstat_source
position
source
tracking
type
yclid
ymclid
uri
urltype
utm_source
utm_medium
utm_campaign
utm_term
utm_content",
			'module_uni_seo_pro_seo_page' => 0 ,
			'module_uni_seo_pro_allow_utm' => 0,
			'module_uni_seo_pro_use_lang_prefix' => 0,
			'module_uni_seo_pro_lang_prefix' => array(),
			'config_seo_url' => 0,
			'module_uni_seo_pro_use_lang_prefix_main' => $this->config->get('config_language_id'),
		);
		foreach ($allow_input as $input=>$value) {
			if (isset($this->request->post[$input])) {
				$data[$input] = $this->request->post[$input];
			} else {
				if ($this->config->has($input)) {
					$data[$input] = $this->config->get($input);
				} else {
					$data[$input] = $value;
				}
			}
		}

		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();
		

		$data['htaccess'] = $this->validateHtaccess();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/uni_seo_pro', $data));
	}

	private function validateHtaccess() {
		$path = pathinfo(DIR_CATALOG);
		return is_file($path['dirname'] . '/.htaccess');
	}
	
	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/uni_seo_pro')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		return !$this->error;
	}
	
	public function install() {
		$filename = 'uni_seo_pro';
		$file = DIR_CONFIG . $filename . '.php';

		if (file_exists($file)) {
			$_ = array();
			require($file);
			$this->load->model('setting/setting');
			$this->model_setting_setting->editSetting('module_uni_seo_pro', $_);
		}
		
		$query = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "seo_url` WHERE Field = 'seopath'");
		if (!$query->num_rows) {
			$sql = "ALTER TABLE `" . DB_PREFIX . "seo_url` ADD `seopath` VARCHAR( 255 ) NOT NULL";
			$this->db->query($sql);
		}
		
		$query = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "product_to_category` WHERE Field = 'main_category'");
		if (!$query->num_rows) {
			$sql = "ALTER TABLE `" . DB_PREFIX . "product_to_category` ADD `main_category` INT(1) NOT NULL DEFAULT '0'";
			$this->db->query($sql);
		}
		
		$this->load->model('localisation/language');
		$languages = $this->model_localisation_language->getLanguages();
		$seourl = $this->getDefaultSeourl();
		
		foreach ($languages as $language) {
			foreach ($seourl as $query => $keyword) {
				$prefix = ($language['code'] == $this->config->get('config_language')) ? '':$language['code'] .'-';
				$result = $this->db->query("SELECT `keyword` FROM " . DB_PREFIX ."seo_url WHERE `keyword`='" . $this->db->escape($prefix . $keyword) . "'");
				if (!$result->num_rows) {
					$this->db->query("INSERT INTO " . DB_PREFIX ."seo_url (store_id, query, keyword, language_id) VALUES ('0', '" . $this->db->escape($query) . "', '" . $this->db->escape($prefix . $keyword) . "', '" . (int)$language['language_id'] ."' )");
				}
			}
		}
		
		$this->installXml();
		$this->installEvents();
	}

	private function getEvents(){
		$events = array(
			'seo_pro_EditBefore' => array(
				'trigger' => 'admin/model/catalog/*/edit*/after',
				'action'  => 'extension/module/uni_seo_pro/clearCache',
			),
			'seo_pro_AddBefore' => array(
				'trigger' => 'admin/model/catalog/*/add*/after',
				'action'  => 'extension/module/uni_seo_pro/clearCache',
			),
		);
		return $events;
	}

	private function getDefaultSeourl() {
		return array(
			'common/home' 			=> '',
			'account/wishlist' 		=> 'wishlist',
			'account/account' 		=> 'account',
			'checkout/cart' 		=> 'cart',
			'checkout/checkout' 	=> 'checkout',
			'account/login'			=> 'login',
			'account/logout'		=> 'logout',
			'account/order'			=> 'order-history',
			'account/order/info'	=> 'order-information',
			'account/newsletter'	=> 'newsletter',
			'product/special'		=> 'specials',
			'affiliate/account'		=> 'affiliates',
			'account/voucher'		=> 'gift-vouchers',
			'account/recurring'		=> 'recurring-payments',
			'product/manufacturer'	=> 'brands',
			'information/contact'	=> 'contact-us',
			'account/return/add'	=> 'request-return',
			'information/sitemap'	=> 'sitemap',
			'blog/latest'	=> 'blog',
			'account/forgotten'		=> 'forgot-password',
			'account/download'		=> 'downloads',
			'account/return'		=> 'returns',
			'account/transaction'	=> 'transactions',
			'account/register'		=> 'create-account',
			'product/compare'		=> 'compare-products',
			'product/search'		=> 'search',
			'account/edit'			=> 'edit-account',
			'account/password'		=> 'change-password',
			'account/address'		=> 'address-book',
			'account/address/edit'	=> 'edit-address',
			'account/address/add'	=> 'add-address',
			'account/address/delete'=> 'delete-address',
			'account/reward'		=> 'reward-points',
			'affiliate/edit'		=> 'edit-affiliate-account',
			'affiliate/password'	=> 'change-affiliate-password',
			'affiliate/payment'		=> 'affiliate-payment-options',
			'affiliate/tracking'	=> 'affiliate-tracking-code',
			'affiliate/transaction'	=> 'affiliate-transactions',
			'affiliate/logout'		=> 'affiliate-logout',
			'affiliate/forgotten'	=> 'affiliate-forgot-password',
			'affiliate/register'	=> 'create-affiliate-account',
			'affiliate/login'		=> 'affiliate-login'
		);

	}

	private function uninstallEvents() {
		$this->load->model('setting/event');
		$events = $this->getEvents();
		foreach ($events as $code=>$value) {
			$this->model_setting_event->deleteEventByCode($code);
		}
	}

	private function installEvents() {
		$this->load->model('setting/event');
		$events = $this->getEvents();
		foreach ($events as $code=>$value) {
			$this->model_setting_event->deleteEventByCode($code);
			$this->model_setting_event->addEvent($code, $value['trigger'], $value['action'], 1);
		}
	}
	
	private function uninstallXml() {
		$this->load->model('setting/modification');
		
		$modification  = $this->model_setting_modification->getModificationByCode('Uni.SeoPro.oc3');
		if ($modification) {
			$this->model_setting_modification->deleteModification($modification['modification_id']);
		}
		
	}
	
	private function installXml() {
		$xml = file_get_contents(DIR_SYSTEM . "config/uni_seo_pro.xml");
		$modification_data = array(
			'name'    => 'Uni SeoPro oc3',
			'code'    => 'Uni.SeoPro.oc3',
			'author'  => 'opencart-3x.ru',
			'version' => '1.0',
			'link'    => 'https://opencart-3x.ru/',
			'status'  => 1,
			'extension_install_id'  => 999998,
			'xml'     => $xml,
		);
		$this->uninstallXml();
		$this->model_setting_modification->addModification($modification_data);
	}

	public function uninstall() {
		$query = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "seo_url` WHERE Field = 'seopath'");
		if($query->num_rows) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "seo_url` DROP COLUMN `seopath`;");
		}

		$seourl = $this->getDefaultSeourl();
		$this->load->model('localisation/language');
		$languages = $this->model_localisation_language->getLanguages();
		
		foreach ($languages as $language) {
			foreach ($seourl as $query => $keyword) {
				$prefix = ($language['code'] == $this->config->get('config_language')) ? '':$language['code'] .'-';
				$result = $this->db->query("DELETE FROM " . DB_PREFIX ."seo_url WHERE `keyword`='" . $prefix . $keyword. "'");
			}
		}

		$this->uninstallXml();
		$this->uninstallEvents();
	}
	
	public function clearCache() {
		$this->load->language('extension/module/uni_seo_pro');
		$this->cache->delete('seo_pro');
		$json = array();
		$json['success'] = $this->language->get('text_clear_cache_sucess');

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	private function clearPath() {
		$this->db->query("UPDATE " . DB_PREFIX . "seo_url SET `seopath` = ''");
	}

	private function repairCategories($parent_id = 0) {
		$this->db->query("UPDATE `" . DB_PREFIX . "category` c1
			LEFT JOIN `" . DB_PREFIX . "category` c2 ON c1.parent_id = c2.category_id
			SET  c1.parent_id = 0
			WHERE c1.parent_id <>0
			AND c2.category_id iS NULL");
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category WHERE parent_id = '" . (int)$parent_id . "'");

		foreach ($query->rows as $category) {
			// Delete the path below the current one
			$this->db->query("DELETE FROM `" . DB_PREFIX . "category_path` WHERE category_id = '" . (int)$category['category_id'] . "'");

			// Fix for records with no paths
			$level = 0;

			$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "category_path` WHERE category_id = '" . (int)$parent_id . "' ORDER BY level ASC");

			foreach ($query->rows as $result) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "category_path` SET category_id = '" . (int)$category['category_id'] . "', `path_id` = '" . (int)$result['path_id'] . "', level = '" . (int)$level . "'");
				$level++;
			}

			$this->db->query("REPLACE INTO `" . DB_PREFIX . "category_path` SET category_id = '" . (int)$category['category_id'] . "', `path_id` = '" . (int)$category['category_id'] . "', level = '" . (int)$level . "'");

			$this->repairCategories($category['category_id']);
		}
	}

	private function makeUrl($route,$arg='') {
		if ($arg) {
			$arg = '&' . ltrim($arg,'&');
		}
		return $this->url->link($route, 'user_token=' . $this->session->data['user_token'] . $arg,true);
	}

}
