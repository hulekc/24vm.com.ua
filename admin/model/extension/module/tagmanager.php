<?php
/******************************************************
 * @package Google Tag Manager for OC1.5x, OC2x,3x
 * @version 10.7
 * @author Muhammad Akram
 * @link https://aits.xyz
 * @copyright Copyright (C)2023 aits.xyz All rights reserved.
 * @email:info@aits.pk. 
 * $date: 30-JAN-2024
 * ADMIN/MODEL
*******************************************************/

class ModelExtensionModuleTagmanager extends Model {
	
	const TMV = '10.7';
	const TMC = 'GTM-KLJMFB2';

    public function getTagmanger() {
		
		$tagmanager = array();
		$PREFIX = '';
		
		$cid = (isset($_COOKIE['_ga']) ? $_COOKIE['_ga'] : '');

		if(substr(VERSION,0,1)=='3' ) {
			$PREFIX = 'analytics_';
		}
		$vs = $this->getNewURL();
		$vs = base64_encode($vs);
		
		$tagmanager = array (
			'vs'					=> $vs
			);

		return $tagmanager;
		
	}

	public function getConfig() {
		$_data = [];
		$ver = substr(VERSION,0,1);
		$sub_ver = substr(VERSION,0,3);
		$store_id = 0;
		if (!isset($this->request->get['store_id'])) {
			$store_id = 0;
		} else {
			$store_id = $this->request->get['store_id'];
		}

		$token = isset($this->session->data['user_token']) ? 'user_token='.$this->session->data['user_token'] : 'token='.$this->session->data['token'];

		if ($ver == '1') {
			$this->language->load('module/tagmanager');
		} else {
			$this->load->language('extension/analytics/tagmanager');
		}
		$module_url = 'extension/analytics/tagmanager';
		$parent_url = 'marketplace/extension';
		$about_url = 'https://licence.aits.xyz/tagmanager/about.php';
		$PREFIX = 'analytics_';
		
		if ($sub_ver == '2.3') {
			$module_url = 'extension/analytics/tagmanager';
            $parent_url = 'extension/extension';
			$about_url = 'https://licence.aits.xyz/tagmanager/about.php';
			$PREFIX = '';
		}
		if ($sub_ver == '2.0') {
			$module_url = 'module/tagmanager';
			$parent_url = 'extension/module';
			$about_url = 'https://licence.aits.xyz/tagmanager/about.php';
			$PREFIX = '';
		}
		if ($sub_ver == '2.1' || $sub_ver == '2.2') {
			$module_url = 'analytics/tagmanager';
			$parent_url = 'extension/analytics';
			$about_url = 'https://licence.aits.xyz/tagmanager/about.php';
			$PREFIX = '';
        }
		if ($ver == '1') {
			$module_url = 'module/tagmanager';
			$parent_url = 'extension/module';
			$about_url = 'https://licence.aits.xyz/tagmanager/about15x.php';
			$PREFIX = '';
		}
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $about_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        if(curl_errno($ch)){
			$_data['about_us_text'] = "";	
        } else {
           $_data['about_us_text'] = $result;
        }
        curl_close($ch);
		
		$_data['change_store'] = $this->url->link($module_url, $token, 'SSL');
		$_data['text_version'] = self::TMV;
    	$_data['primary']	  = self::TMC;
		$_data['heading_title'] = 'TAG Manager v' . $_data['text_version'] ;
		$_data['text_container'] = sprintf($this->language->get('text_container'), $_data['primary']);
		$_data['help_container'] = sprintf($this->language->get('help_container'), $_data['primary']);
		$_data['product_map'] = array ('product_id','model','sku','model_product_id','product_id_currency');
		$_data['product_title'] = array ('name','brand_model');
		$_data['cookie_positions'] = array ('Bottom Left','Bottom Right','Top Bar','Bottom Bar');
		$_data['badge_positions'] = array ('bottom left','bottom right');
		$_data['badge_color'] = array ('red','blue');
		$_data['page_routes'] = array ('purchase', 'contact', 'signup','journal popup');
		$_data['alt_checkout'] = 'extension/quickcheckout/checkout'. "\n" .'onepagecheckout/checkout'. "\n" .'quickcheckout/checkout'. "\n" .'quick_checkout/checkout';
		$_data['alt_confirm'] = 	'extension/quickcheckout/confirm';
		$_data['alt_success'] = 	'extension/ordersuccess' . "\n" . 'extension/checkout/eghlresponse/success';
		$_data['short_date']	= $this->language->get('date_format_short');
		
	
		return $_data;
	}
	
	public function GetTagmanagerVariables($data=array(), $store_id=0) {
		
		if (!$this->check_array($data)) {
			$data = [];
		}
		
		$switches = [
					'pagecache', 'ajax', 'cache', 'customer_data', 'tax_override', 'debug', 'debug_api', 'ga4_status', 
					'adword', 'adword_ec', 'aw_shipping_exclude','aw_tax_exclude','aw_optional','adword2','remarketing',
					'pixel','fb_api','fb_shipping_exclude', 'fb_tax_exclude','alt_currency_status','snap_pixel_status', 
					'tiktok_status', 'twitter_status', 'pinterest_status', 'skroutz_status', 'luckyorange_status','glami_status',
					'yandex_status', 'bing_status', 'google_optimize_status', 'greview', 'greview_badge', 'admitad_status', 
					'admitad_retag_status', 'sendinblue_status', 'linkwise_status', 'performant_status', 'performant_currency_status',
					'clarity_status', 'paypal_status', 'hotjar_status','zenchat_status','zopimchat_status','freshchat_status', 
					'hubspot_status','smartsupp_status', 'eu_cookie', 'eu_cookie_enforce','cookie_badge', 'server', 'admin', 'mp',
					'debug_order', 'klaviyo_status', 'matomo_status','cj_status','da_status'
		];
					
					
		$text = [
				'customcode', 'tax_override_value', 'ga4_mid', 'ga4_api', 'conversion_id', 'conversion_label',
				'aw_merchant_id','aw_feed_country', 'aw_feed_language',  'conversion_id2', 
				'conversion_label2', 'conversion_route2', 'conversion_value2','pixelcode', 'fb_token', 'pixel_test_code', 'fb_catalog_id',
				'alt_currency', 'snap_pixel_id', 'tiktok_code', 'twitter_tag', 'pinterest_tag', 'skroutz_siteid','luckyorange_siteid', 
				'glami_code', 'yandex_code','bing_uetid', 'google_optimize', 'merchant_id', 'admitad_code', 'admitad_category', 
				'admitad_additional_type', 'admitad_invoice_broker', 'admitad_invoice_category','admitad_retag_code1','admitad_retag_code2',
				'admitad_retag_code3', 'admitad_retag_code4', 'admitad_retag_code5', 'sendinblue_code', 'linkwise_code', 'linkwise_decimal',
				'performant_code', 'performant_confirm', 'performant_currency','clarity_id','paypal_code', 'hotjar_siteid', 'zenchat_code',
				'zopimchat_code', 'freshchat_code', 'freshchat_host','hubspot_code', 'smartsupp_code', 'cookie_position', 'cookie_position_mobile',
				'cookie_bg_popup','cookie_text_popup', 'cookie_bg_button', 'cookie_text_button', 'cookie_heading_color', 'gdpr_customcode',
				'cookie_badge_position', 'cookie_badge_color', 'cookie_title_1', 'cookie_text_1','cookie_text2_1', 'cookie_url_1','cookie_link_1', 
				'cookie_button1_1', 'cookie_button2_1', 'cookie_button3_1', 'cookie_essential_1', 'cookie_analytics_1', 'cookie_marketing_1',
				'server_url', 'ptitle', 'id_prefix','pmap', 'id_suffix', 'code', 'vs', 'klaviyo_code', 'klaviyo_api','twitter_purchase',
				'twitter_payment','twitter_checkout','twitter_addcart','twitter_addwishlist','twitter_viewcontent','twitter_search','twitter_pageview',
				'matomo_code','cookie_essential_title_1', 'cookie_analytics_title_1', 'cookie_marketing_title_1','cj_code','cj_currency','cj_currency_value',
				'cj_actionid','da_code',
		];
		
		foreach($switches as $key) {
			if (!array_key_exists($key, $data)) {
				$data[$key] = 0;
			}
        }
        
        foreach($text as $key) {
			if (!array_key_exists($key, $data)) {
				$data[$key] ='';
			}
        }
        
        return $data;
	}

	
	public function getlang() {
		
		$languageVariables = [
		    'heading_title','primary','entry_server','entry_server_url','text_edit','text_enabled','text_disabled','text_signup',
		    'text_about','text_about_cookie','text_version','heading_container','text_container','text_order','entry_primary',
			'entry_status','entry_ampcode','entry_ampstatus','entry_admin','entry_cache','entry_debug','entry_customer_data',
			'entry_gid','entry_ua_status','entry_ga4_status','entry_ga4_mid','entry_ga4_api','entry_mp','entry_custom_dimension1',
			'entry_custom_dimension2','entry_custom_dimension3','entry_custom_dimension4','entry_custom_dimension5',
			'entry_custom_dimension6','entry_custom_dimension7','entry_custom_dimension8','entry_custom_dimension9',
			'entry_custom_dimension','entry_google_optimize','entry_google_optimize_status','entry_greview','entry_greview_badge',
			'entry_merchant_id','entry_custom','entry_remarketing',	'entry_userid_status','entry_product','entry_ptitle',
			'entry_id_prefix','entry_id_suffix','entry_customcode',	'entry_adword','entry_adword2','entry_conversion_id',
			'entry_conversion_label','entry_adword_ec','entry_conversion_id2','entry_conversion_label2','entry_conversion_route2',
			'entry_conversion_value2','entry_aw_optional','entry_aw_merchant_id','entry_aw_feed_country','entry_aw_feed_language',
			'entry_dynx_itemid','entry_dynx_itemid2','entry_dynx_pagetype','entry_dynx_totalvalue','entry_ecomm_pagetype',
			'entry_ecomm_prodid','entry_ecomm_totalvalue','entry_pixel','entry_pixelcode','entry_fb_api','entry_fb_token',
			'entry_alt_currency','entry_alt_currency_status','entry_alt_currency_val','entry_fb_catalog_id','entry_twitter_status',
			'entry_twitter_tag','entry_pinterest_status','entry_pinterest_tag','entry_glami_status','entry_glami_code',
			'entry_hotjar_status','entry_hotjar_siteid','entry_luckyorange_status',	'entry_luckyorange_siteid',
			'entry_tiktok_status','entry_tiktok_code','entry_clarity_status','entry_clarity_siteid','entry_bing_status',
			'entry_bing_uetid',	'entry_skroutz_status',	'entry_skroutz_siteid',	'entry_skroutz_manual_tax',	'entry_skroutz_manual_tax_value',
			'entry_skroutz_payment_fee','entry_yandex_status','entry_yandex_code','entry_admitad_status','entry_admitad_code',
			'entry_admitad_category','entry_admitad_additional_type','entry_admitad_invoice_broker','entry_admitad_invoice_category',
			'entry_admitad_retag_status','entry_admitad_retag_code','entry_admitad_retag_code1','entry_admitad_retag_code2',
			'entry_admitad_retag_code3','entry_admitad_retag_code4','entry_admitad_retag_code5','entry_linkwise_status',
			'entry_linkwise_code','entry_linkwise_decimal','entry_freshchat_status','entry_freshchat_code','entry_freshchat_host',
			'entry_snap_pixel_status','entry_snap_pixel_id','entry_yandex_code','entry_performant_status','entry_performant_code',
			'entry_performant_confirm','entry_affgateway_status','entry_affgateway_code','entry_sendinblue_status',
			'entry_sendinblue_code','entry_eu_cookie','entry_eu_cookie_enforce','entry_cookie_position','entry_cookie_title',
			'entry_cookie_text','entry_cookie_text2','entry_cookie_link','entry_cookie_button1','entry_cookie_button2',
			'entry_cookie_button3','entry_cookie_bg_popup','entry_cookie_text_popup','entry_cookie_bg_button','entry_cookie_text_button',
			'entry_cookie_heading_color','entry_cookie_badge','entry_cookie_badge_position','entry_cookie_badge_color','entry_zopim_status',
			'entry_zopim_code','entry_zenchat_status','entry_zenchat_code','entry_zopimchat_status','entry_zopimchat_code',
			'entry_hubspot_status','entry_hubspot_code','entry_smartsupp_status','entry_smartsupp_code','entry_paypal_status',
			'entry_paypal_code','entry_route_checkout','entry_route_success','column_oid','column_status','column_action','help_ua',
			'help_server','help_server_url','help_ga4','help_ga4_api','help_gid','help_secondary','help_admin','help_conversion_id',
			'help_userid','help_conversion_label','help_conversion_value2','help_remarketing','help_product','help_ptitle',
			'help_mp','help_cache','help_ac','help_ac_value','help_custom',	'help_route','help_route_checkout',	'help_route_success',
			'help_id_prefix','help_id_suffix','help_customcode','help_custom_dim','help_aw','help_aw_ec','help_aw_secondary',
			'help_aw_optional','help_aw_merchant','help_aw_country','help_aw_language','help_aw_route',	'help_cenforce','help_ctitle',
			'help_ctext','help_clink','help_debug','tab_tab1','tab_tab2','tab_tab3','tab_tab4','tab_tab5','tab_tab6','tab_tab7',
			'tab_tab8','button_save','button_cancel','button_send','button_refund','error_permission','error_primary','error_secondary',
			'error_analytics','error_warrning','error_ga4','entry_debug_api','help_debug_api','entry_performant_tax','entry_performant_tax_value',
			'entry_performant_currency','help_customer_data','entry_pixel_test_code','help_pixel_test_code','entry_ajax','help_ajax','entry_pagecache','help_pagecache',
			'entry_cookie_position_mobile','entry_shipping_cost','entry_tax_override','entry_tax_override_value','help_tax_override','help_tax_override',
			'entry_tax_exclude','entry_shipping_exclude','help_tax_exclude','help_shipping_exclude','help_cookie_button1', 'help_cookie_button2',
			'help_cenforce', 'help_ctext2', 'help_clinktext', 'tab_tab9' , 'help_customcodecookie','entry_cookie_url','entry_cookie_essential','entry_cookie_analytics',
			'entry_cookie_marketing','help_cookie_essential','help_cookie_analytics','help_cookie_marketing','help_cookie_button3','text_cookie_url','text_cookie_link',
			'text_cookie_button1', 'text_cookie_title', 'text_cookie_text', 'text_cookie_text2', 'text_cookie_button2', 'text_cookie_button3', 'text_cookie_essential', 
			'text_cookie_analytics','text_cookie_marketing', 'help_tax_override_value', 'help_ga4_id','help_dimension_index','help_dimension_value',
			'help_pixel_id', 'help_pixel_token', 'help_snap_id', 'help_tiktok_id','help_twitter_id', 'help_pinterest_id','help_skroutz_id',
			'help_glami_id', 'help_bing_id','help_luckyorange_id', 'entry_debug_order', 'help_debug_order', 'entry_klaviyo_status', 'entry_klaviyo_code',
			'entry_klaviyo_api', 'help_klaviyo_id', 'help_klaviyo_api', 'column_payment_code','column_payment','column_date',
			'entry_twitter_purchase', 'entry_twitter_payment','entry_twitter_checkout','entry_twitter_addcart','entry_twitter_addwishlist','entry_twitter_viewcontent',
			'entry_twitter_search','entry_twitter_pageview','help_twitter_purchase','help_twitter_payment','help_twitter_checkout','help_twitter_addcart',
			'help_twitter_addwishlist','help_twitter_viewcontent','help_twitter_search','help_twitter_pageview','text_store','entry_matomo_status','entry_matomo_code',
			'help_matomo_code','entry_cookie_essential_title','entry_cookie_analytics_title','entry_cookie_marketing_title','entry_cj_code','entry_cj_status',
			'entry_cj_actionid', 'entry_cj_currency', 'entry_cj_currency_value', 'help_cj_code', 'help_cj_actionid', 'help_cj_currency', 'help_cj_currency_value', 
			'entry_da_status', 'entry_da_code',
		];
		foreach ($languageVariables as $languageVariable) {
    		$data[$languageVariable] = $this->language->get($languageVariable);
		}
		return $data;
	}

	public function getTransactions($filter_data, $store_id) {
		
		$sql  = "SELECT o.id, o.order_id, o.cid, o.uid, o.ip, o.geoid, o.hit, o.ul,o.tid,o.currency_code,o.currency_id, (SELECT ot.name FROM " . DB_PREFIX . "order_status ot WHERE os.order_status_id = ot.order_status_id AND ot.language_id = '" . (int)$this->config->get('config_language_id') . "') AS order_status , os.date_added, os.payment_code,os.payment_method,os.total FROM `" . DB_PREFIX . "analytics_tracking` AS o LEFT JOIN `" . DB_PREFIX ."order` AS os ON o.order_id = os.order_id";
		$sql .= " WHERE os.order_status_id > 0 AND os.store_id = '" . $store_id . "'";
		$sql .= " ORDER BY id DESC";
		if (isset($filter_data['start']) || isset($filter_data['limit'])) {
			if ($filter_data['start'] < 0) {
				$filter_data['start'] = 0;
			}

			if ($filter_data['limit'] < 1) {
				$$filter_data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$filter_data['start'] . "," . (int)$filter_data['limit'];
		}
		$query = $this->db->query($sql);

		return $query->rows;
	}
	
	public function getTotalTransactions($data = array(),$store_id=0) {
		$sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "analytics_tracking` AS o LEFT JOIN `" . DB_PREFIX ."order` AS os ON o.order_id = os.order_id";
		$sql .= " WHERE os.order_status_id > 0 AND os.store_id = '" . $store_id . "'";

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getSettingValue($key, $store_id = 0) {
		$ver = substr(VERSION,0,1);
		$sub_ver = substr(VERSION,0,3);
		
		if ($sub_ver == '2.0') {
			$this->load->model('setting/setting');
			$data = $this->model_setting_setting->getSetting($key,$store_id);
			if (isset($data[$key])) {
				$settings = json_encode($data[$key]);
			} else {
				$settings = false;
			}
			return $settings;
			
		} 
		
		$query = $this->db->query("SELECT value FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `key` = '" . $this->db->escape($key) . "'");
			
		if ($query->num_rows) {
			return $query->row['value'];
		} else {
			return null;	
		}
	}
	
	public function getNewURL() {
		$url = false;
		$temp = $this->request->server['SERVER_NAME'];
		$explode = explode(".", $temp);
		$counter = $this->check_array($explode);
		if ($counter) {
			$i = count($explode);
			if ($i == 2) {
				$url = $explode[0] . '.' . $explode[1];
			} elseif ($i == 3) {
				if (strtolower($explode[0]) != 'www' ) {
					$url = $explode[0] . '.' . $explode[1] . '.' . $explode[2];
				} else {
					$url = $explode[1] . '.' . $explode[2];
				}
			} elseif ($i == 4) {
				$url = $explode[1] . '.' . $explode[2] . '.' . $explode[3];
			}
		}
		return $url;
	}
	
	public function check_array($var) {
        return is_array($var)
          || $var instanceof \Countable
          || $var instanceof \SimpleXMLElement
          || $var instanceof \ResourceBundle;
    }
    
    public function upgrade() {
    	
    	$data = array();
    	
    	if(substr(VERSION,0,1)=='3' ) {
			$PREFIX = 'analytics_';
			$ver = '3';
		} else {
			$ver = '2';
			$PREFIX = '';
		}
		
		if (!isset($this->request->get['store_id'])) {
			$store_id = 0;
		} else {
			$store_id = $this->request->get['store_id'];
		}

	    $postKeyArray = array(
			$PREFIX . 'tagmanager_mp',
			$PREFIX . 'tagmanager_route_confirm',
			$PREFIX . 'tagmanager_status',
			$PREFIX . 'tagmanager_primary',
			$PREFIX . 'tagmanager_code',
			$PREFIX . 'tagmanager_server',
			$PREFIX . 'tagmanager_server_url',
			$PREFIX . 'tagmanager_admin',
			$PREFIX . 'tagmanager_cache',
			$PREFIX . 'tagmanager_debug',
			$PREFIX . 'tagmanager_debug_api',
			$PREFIX . 'tagmanager_debug_order',
			$PREFIX . 'tagmanager_customer_data',
			$PREFIX . 'tagmanager_shipping_cost',
			$PREFIX . 'tagmanager_tax_override',
			$PREFIX . 'tagmanager_tax_override_value',
			$PREFIX . 'tagmanager_ptitle',
			$PREFIX . 'tagmanager_product',
			$PREFIX . 'tagmanager_id_prefix',
			$PREFIX . 'tagmanager_id_suffix',
			$PREFIX . 'tagmanager_route_checkout',
			$PREFIX . 'tagmanager_route_success',
			$PREFIX . 'tagmanager_customcode',
			$PREFIX . 'tagmanager_ga4_status',
			$PREFIX . 'tagmanager_ga4_mid',
			$PREFIX . 'tagmanager_ga4_api',
			$PREFIX . 'tagmanager_adword',
			$PREFIX . 'tagmanager_conversion_id',
			$PREFIX . 'tagmanager_conversion_label',
			$PREFIX . 'tagmanager_adword_ec',
			$PREFIX . 'tagmanager_aw_optional',
			$PREFIX . 'tagmanager_aw_merchant_id',
			$PREFIX . 'tagmanager_aw_feed_country',
			$PREFIX . 'tagmanager_aw_feed_language',
			$PREFIX . 'tagmanager_aw_tax_exclude',
			$PREFIX . 'tagmanager_aw_shipping_exclude',
			$PREFIX . 'tagmanager_adword2',
			$PREFIX . 'tagmanager_conversion_id2',
			$PREFIX . 'tagmanager_conversion_label2',
			$PREFIX . 'tagmanager_conversion_route2',
			$PREFIX . 'tagmanager_conversion_value2',
			$PREFIX . 'tagmanager_remarketing',
			$PREFIX . 'tagmanager_google_optimize',
			$PREFIX . 'tagmanager_google_optimize_status',
			$PREFIX . 'tagmanager_greview',
			$PREFIX . 'tagmanager_greview_badge',
			$PREFIX . 'tagmanager_merchant_id',
			$PREFIX . 'tagmanager_pixel',
			$PREFIX . 'tagmanager_pixelcode',
			$PREFIX . 'tagmanager_pixel_test_code',
			$PREFIX . 'tagmanager_fb_api',
			$PREFIX . 'tagmanager_fb_token',
			$PREFIX . 'tagmanager_fb_catalog_id',
			$PREFIX . 'tagmanager_alt_currency_status',
			$PREFIX . 'tagmanager_alt_currency',
			$PREFIX . 'tagmanager_fb_shipping_exclude',
			$PREFIX . 'tagmanager_fb_tax_exclude',
			$PREFIX . 'tagmanager_snap_pixel_status',
			$PREFIX . 'tagmanager_snap_pixel_id',
			$PREFIX . 'tagmanager_twitter_status',
			$PREFIX . 'tagmanager_twitter_tag',
			$PREFIX . 'tagmanager_pinterest_status',
			$PREFIX . 'tagmanager_pinterest_tag',
			$PREFIX . 'tagmanager_paypal_status',
			$PREFIX . 'tagmanager_paypal_code',
			$PREFIX . 'tagmanager_yandex_status',
			$PREFIX . 'tagmanager_yandex_code',
			$PREFIX . 'tagmanager_zenchat_status',
			$PREFIX . 'tagmanager_zenchat_code',
			$PREFIX . 'tagmanager_freshchat_status',
			$PREFIX . 'tagmanager_freshchat_code',
			$PREFIX . 'tagmanager_freshchat_host',
			$PREFIX . 'tagmanager_zopimchat_status',
			$PREFIX . 'tagmanager_zopimchat_code',
			$PREFIX . 'tagmanager_hubspot_status',
			$PREFIX . 'tagmanager_hubspot_code',
			$PREFIX . 'tagmanager_smartsupp_status',
			$PREFIX . 'tagmanager_smartsupp_code',
			$PREFIX . 'tagmanager_admitad_status',
			$PREFIX . 'tagmanager_admitad_code',
			$PREFIX . 'tagmanager_admitad_category',
			$PREFIX . 'tagmanager_admitad_additional_type',
			$PREFIX . 'tagmanager_admitad_invoice_broker',
			$PREFIX . 'tagmanager_admitad_invoice_category',
			$PREFIX . 'tagmanager_admitad_retag_status',
			$PREFIX . 'tagmanager_admitad_retag_code1',
			$PREFIX . 'tagmanager_admitad_retag_code2',
			$PREFIX . 'tagmanager_admitad_retag_code3',
			$PREFIX . 'tagmanager_admitad_retag_code4',
			$PREFIX . 'tagmanager_admitad_retag_code5',
			$PREFIX . 'tagmanager_affgateway_status',
			$PREFIX . 'tagmanager_affgateway_code',
			$PREFIX . 'tagmanager_performant_status',
			$PREFIX . 'tagmanager_performant_code',
			$PREFIX . 'tagmanager_performant_confirm',
			$PREFIX . 'tagmanager_performant_tax',
			$PREFIX . 'tagmanager_performant_tax_value',
			$PREFIX . 'tagmanager_performant_currency',
			$PREFIX . 'tagmanager_performant_currency_status',
			$PREFIX . 'tagmanager_hotjar_status',
			$PREFIX . 'tagmanager_hotjar_siteid',
			$PREFIX . 'tagmanager_luckyorange_status',
			$PREFIX . 'tagmanager_luckyorange_siteid',
			$PREFIX . 'tagmanager_clarity_status',
			$PREFIX . 'tagmanager_clarity_siteid',
			$PREFIX . 'tagmanager_bing_status',
			$PREFIX . 'tagmanager_bing_uetid',
			$PREFIX . 'tagmanager_skroutz_status',
			$PREFIX . 'tagmanager_skroutz_siteid',
			$PREFIX . 'tagmanager_skroutz_manual_tax',
			$PREFIX . 'tagmanager_skroutz_manual_tax_value',
			$PREFIX . 'tagmanager_glami_status',
			$PREFIX . 'tagmanager_glami_code',
			$PREFIX . 'tagmanager_tiktok_status',
			$PREFIX . 'tagmanager_tiktok_code',
			$PREFIX . 'tagmanager_sendinblue_status',
			$PREFIX . 'tagmanager_sendinblue_code',
			$PREFIX . 'tagmanager_linkwise_status',
			$PREFIX . 'tagmanager_linkwise_code',
			$PREFIX . 'tagmanager_linkwise_decimal',
			$PREFIX . 'tagmanager_eu_cookie',
			$PREFIX . 'tagmanager_eu_cookie_enforce',
			$PREFIX . 'tagmanager_cookie_position',
			$PREFIX . 'tagmanager_cookie_bg_popup',
			$PREFIX . 'tagmanager_cookie_text_popup',
			$PREFIX . 'tagmanager_cookie_bg_button',
			$PREFIX . 'tagmanager_cookie_text_button',
			$PREFIX . 'tagmanager_cookie_heading_color',
			$PREFIX . 'tagmanager_cookie_badge',
			$PREFIX . 'tagmanager_cookie_badge_position',
			$PREFIX . 'tagmanager_cookie_badge_color',
			$PREFIX . 'tagmanager_ampcode',
			$PREFIX . 'tagmanager_ampstatus',
			$PREFIX . 'tagmanager_matomo_status',
			$PREFIX . 'tagmanager_matomo_code',
			$PREFIX . 'tagmanager_cj_code',
			$PREFIX . 'tagmanager_cj_status',
			$PREFIX . 'tagmanager_cj_actionid',
			$PREFIX . 'tagmanager_cj_currency',
			$PREFIX . 'tagmanager_cj_currency_value',
			$PREFIX . 'tagmanager_da_code',
			$PREFIX . 'tagmanager_da_status',

		);
        $this->load->model('localisation/language');
        $languages = $this->model_localisation_language->getLanguages();

        foreach ($languages as $lang) {
        	$cookie_lang = array(
	        	$PREFIX . 'tagmanager_cookie_title_'.$lang['language_id'],
				$PREFIX . 'tagmanager_cookie_text_'.$lang['language_id'],
				$PREFIX . 'tagmanager_cookie_text2_'.$lang['language_id'],
				$PREFIX . 'tagmanager_cookie_link_'.$lang['language_id'],
				$PREFIX . 'tagmanager_cookie_button1_'.$lang['language_id'],
				$PREFIX . 'tagmanager_cookie_button2_'.$lang['language_id'],
				$PREFIX . 'tagmanager_cookie_button3_'.$lang['language_id'],
				$PREFIX . 'tagmanager_cookie_url_'.$lang['language_id'],
				$PREFIX . 'tagmanager_cookie_analytics_title_'.$lang['language_id'],
				$PREFIX . 'tagmanager_cookie_essential_title_'.$lang['language_id'],
				$PREFIX . 'tagmanager_cookie_marketing_title_'.$lang['language_id'],
				$PREFIX . 'tagmanager_cookie_analytics_'.$lang['language_id'],
				$PREFIX . 'tagmanager_cookie_essential_'.$lang['language_id'],
				$PREFIX . 'tagmanager_cookie_marketing_'.$lang['language_id'],

			);
			$postKeyArray = array_merge($postKeyArray, $cookie_lang);
        }
        
        $postKeyArray = array_merge($postKeyArray, $cookie_lang);
        
        foreach($postKeyArray as $key) {
            $value = str_replace($PREFIX."tagmanager_","",$key);
            $data[$value] = '';
            
            if (isset($this->request->post[$PREFIX . 'tagmanager_status'])) {
                $data[$value] = $this->request->post[$key];
            } else {
                $data[$value] = $this->getSettingValue($key,$store_id);
            }
        }
        if (!isset($data['code'])) {
            $data['code'] = (isset($data['primary']) && !empty($data['primary']) ? $data['primary'] : ''); 
        }
        if (isset($data['code']) && empty($data['code'])) {
        	$data['code'] = (isset($data['primary']) && !empty($data['primary']) ? $data['primary'] : '');
        }
        $data['pmap'] = $data['product'];
        $data['clarity_id'] = $data['clarity_siteid'];
        
        
        return $data;
    }

	public function getTLD() {
        $tlds = array('abc','ac','adult','ae','af','afl','africa','ag','am', 'anz', 'ao', 'ar', 'arab',  
					'as', 'asia', 'aw', 'aws', 'ax', 'axa', 'az', 'ba', 'be', 'bf', 'bg', 'bh', 'bi', 'bio',
					 'biz', 'bj', 'br', 'com', 'edu', 'gov', 'info', 'jobs', 'mil', 'mobi', 'net', 'org','xyz',
					 'post','pro', 'tel', 'travel', 'xxx','se','cz','sm',
				);
		return $tlds;
	}
    
}
?>