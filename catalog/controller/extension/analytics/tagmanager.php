<?php
/******************************************************
 * @package Google Tag Manager for OC2.3,3x
 * @version 10.7
 * @author Muhammad Akram
 * @link https://aits.xyz
 * @copyright Copyright (C)2023 aits.xyz All rights reserved.
 * @email:info@aits.pk. 
 * $date: 30-JAN-2024
 * controller/extension/analytics/tagmanager
*******************************************************/
class ControllerExtensionAnalyticsTagmanager extends Controller {

	private $path_include =  DIR_SYSTEM .'library/tagmanager/';
	private $extension_route =  'index.php?route=extension/analytics/tagmanager';

    public function index() {
    	$customcode = '';
    	$PREFIX = '';
    	$gdpr_analytics = 'granted';
		$gdpr_marketing = 'granted';
		$allowAdFeatures = 'false';
		$cc_analytics = 0;
		$cc_marketing = 0;
		$tracking_block = false; 
		$marketing_block = false;
		$fbq ='';
		$event_id ='';
		$consent = 'grant';
		$cdn_url = '';
		$tm_cdn = false;
		$eu_css = '';
		$eu_js = '';
		$tmanalytics = '';
		$j3popup = false;
    	
		if(substr(VERSION,0,1)=='3' ) {
			$PREFIX = 'analytics_';
		}
		
		if (!method_exists($this, 'gtm')) {
			return false;	
		}

		if (isset($this->request->get['route'])) { 
			if ($this->request->get['route'] == 'account/success' || $this->request->get['route'] == 'account/login' || $this->request->get['route'] == 'account/logout' || $this->request->get['route'] == 'account/account' || $this->request->get['route'] == 'contact/success'|| $this->request->get['route'] == 'checkout/confirm') { 
				$this->gtm->resetCustomerData(); 
			}
		}		
		
		$tagmanager = $this->gtm->config();
		
		if ($tagmanager['bot']) {
			return false;
		}

		$tm_mode = (isset($tagmanager['ajax']) ? $tagmanager['ajax'] : false);
		$setting_tags = [];
		$cc_data = []; 
		$tm_delay = $tagmanager['delay'];
		$oc1 = false;
	
		if (isset($GLOBALS['tm'])) {
			$tm = $GLOBALS['tm'];
		}
		
		if (isset($GLOBALS['tm_m'])) {
			$tm_m = $GLOBALS['tm_m'];
		}
				
		unset($GLOBALS['tm']);
		unset($GLOBALS['tm_m']);
		
		if (defined('JOURNAL3_ACTIVE')) {
			$data['ttheme'] = 'journal3';
		}

		$page_type = (isset($tm['type']) ? $tm['type'] : '');
		$j3popup = (isset($this->request->get['popup']) ? $this->request->get['popup'] : '') ;
		$tmdata = [];
		$route = (isset($this->request->get['route']) ? $this->request->get['route'] : 'common/home');
		$org_route = $route;

		if(substr(VERSION,0,1)=='3') {

			$this->user = new Cart\User($this->registry);
			$data['tagmanager'] = $tagmanager;
			$data['route'] = $route;
			$user_logged = $this->user->isLogged();


		} elseif (substr(VERSION,0,3)=='2.3' || substr(VERSION,0,3)=='2.2') {

			$this->user = new Cart\User($this->registry);
			$data['tagmanager'] = $tagmanager;
			$data['route'] = $route;
			$user_logged = $this->user->isLogged();

		} elseif (substr(VERSION,0,3)=='2.1' ) {

			$this->user = new User($this->registry);
			$user_logged = $this->user->isLogged();
			$data['tagmanager'] = $tagmanager;
			$data['route'] = $route;

		} elseif (substr(VERSION,0,3)=='2.0') {

			$this->load->library('user');
			$this->user = new User($this->registry);
			$user_logged = $this->user->isLogged();
			$data['tagmanager'] = $tagmanager;
			$data['route'] = $route;

		} elseif (substr(VERSION,0,1)=='1' ) {

			$oc1 = true;
			$this->load->library('user');
			$this->user = new User($this->registry);
			$user_logged = $this->user->isLogged();
			$this->data['tagmanager'] = $tagmanager;
			$this->data['route'] = $route;

		} 
		
		if (isset($user_logged) && $tagmanager['admin']) {
			return false;
		}

		if (!empty($tagmanager['route_checkout'])) {	
			$route_checkout = explode(PHP_EOL, $tagmanager['route_checkout']);
			$tagmanager['route_checkout'] = array_filter($route_checkout, 'strlen');
		} else {
			$tagmanager['route_checkout'] = array('extension/quickcheckout/checkout','quickcheckout/checkout');
		}
		
		if (!empty($tagmanager['route_confirm'])) {	
			$route_confirm = explode(PHP_EOL, $tagmanager['route_confirm']);
			$tagmanager['route_confirm'] = array_filter($route_confirm, 'strlen');
		} else {
			$tagmanager['route_confirm'] = array('extension/quickcheckout/confirm');
		}

		if (!empty($tagmanager['route_success'])) {	
			$route_success = explode(PHP_EOL, $tagmanager['route_success']);
			$tagmanager['route_success'] = array_filter($route_success, 'strlen');
		} else {
			$tagmanager['route_success'] = array('extension/ordersuccess','extension/checkout/eghlresponse/success');
		}
		
		foreach ($tagmanager['route_success'] as $checkroute) {
			if (trim($checkroute) == $route){
				$route = 'checkout/success';
			}
		}
		
		foreach ($tagmanager['route_confirm'] as $checkroute) {
			if (trim($checkroute) == $route){
				$route = 'checkout/confirm';
			}
		}
		
		foreach ($tagmanager['route_checkout'] as $checkroute) {
			if (trim($checkroute) == $route){
				$route = 'checkout/checkout';
			}
		}
		
		if ($route == 'product/quickview' || $route == 'extension/module/pavquickview/show' || $route == 'journal2/quickview' ) { $j3popup ='quickview'; }
	
		if ($page_type == 'product'){
			$tmdata = $this->gtm->prepareProduct($tm);
		}
	
		if ($page_type == 'listing'){
			$tmdata = $this->gtm->prepareProducts($tm);
		}
		
		if ($org_route == 'information/contact'){
			$page_type = 'contact';
		}
		
		if ($org_route == 'account/success'){
			$page_type = 'signup';
		}
		
		if ($org_route == 'common/home'){
			$page_type = 'home';
		}
		
		switch ($route) {
			case "checkout/cart":
				if ($this->cart->hasProducts()) {
					$tmdata = $this->gtm->prepareCart();
					$page_type = 'cart';
				}
				break;
			
			case "checkout/checkout":
				$prepare = ['page' => 'checkout','step' => '1',	'mode' => 'checkout'];
	
				$this->session->data['steps'] = 1;
				$this->session->data['reload_check'] = [];
	
				if ($this->cart->hasProducts()) {
					$tmdata = $this->gtm->prepareCheckout($prepare);
					$page_type = 'checkout';
				}
				break;
	
			case "checkout/confirm":
				if (isset($this->session->data['steps'])) {
					$this->session->data['steps'] ++;
	
				} else {
					$this->session->data['steps'] = 2;
				}
	
				$this->session->data['reload_check'] = [];
				
				$prepare = [ 'page' => 'confirm','step' => $this->session->data['steps'],'mode' => 'confirm'];

				if ($this->cart->hasProducts()) {
					$tmdata = $this->gtm->prepareConfirm($prepare);
					$page_type = 'confirm';
				}
				break;
	
			case "checkout/success":
				
				if (!isset($this->session->data['tm_order_id']) || empty($this->session->data['tm_order_id']) || $this->session->data['tm_order_id'] == 0) {
					if (isset($this->session->data['xsuccess_order_id'])) {
                		$this->gtm->saveOrderID($this->session->data['xsuccess_order_id']);
            		}
            		if (isset($this->session->data['order_id'])) {
                		$this->gtm->saveOrderID($this->session->data['order_id']);
            		}
				}
				if (!isset($this->session->data['tm_order_id']) && isset($this->session->data['order_id'])) {
					$this->session->data['tm_order_id'] = $this->session->data['order_id'];
				}	
				if (!isset($this->session->data['tm_order_id'])) {
					$gtm_orderid = (int)$this->gtm->readGTMCookie('gtm_orderid');
					if ($gtm_orderid && !empty($gtm_orderid) && $gtm_orderid > 0) {
						$this->session->data['tm_order_id'] = $gtm_orderid;
					}
				}

				if (isset($this->request->get['gtm_trans'])) {
					$transaction_id = (int)$this->request->get['gtm_trans'];
				}
				if (isset($this->request->get['transaction_id'])) {
					$transaction_id = (int)$this->request->get['transaction_id'];
				}

				if (isset($transaction_id) && $transaction_id && !isset($this->session->data['tm_order_id'])) {
					$this->session->data['tm_order_id'] = $transaction_id;
				}
				
				if (isset($this->session->data['tm_order_id']) && !empty($this->session->data['tm_order_id'])) {
					$order_id = $this->session->data['tm_order_id'];
					$order_data = $this->gtm->prepareOrder($order_id);
					$order_status_id = $this->gtm->OrderStatusCheck($order_id);
	
					if ($order_status_id == '0') {
					
						if (isset($tagmanager['debug']) && $tagmanager['debug']) {
							$this->gtm->tmerror('TM: Order Success Called [ Order: ' . $order_id . ' ] Result: Order Status is not Complete to send hit');
						}
	
					}
	
					if (isset($order_data['hit']) && $order_data['hit'] == '0') {
						$tmdata = $order_data;
						$page_type = 'success';
						if(substr(VERSION,0,1)=='1' ) {
							$this->data['order_data'] = $order_data; 
						} else {
							$data['order_data'] = $order_data; 
						}
						if (isset($tagmanager['debug']) && $tagmanager['debug']) {
							$this->gtm->tmerror('TM: Order Success Called [ Order: ' . $order_id . ' ] Result: success order');
						}
					}
					if (isset($order_data['hit']) && $order_data['hit'] == '1') {
						if (isset($tagmanager['debug']) && $tagmanager['debug']) {
							$this->gtm->tmerror('TM: Order Success Called Twice '. $order_id );
						}
						$this->gtm->resetGTMCookie('gtm_orderid');
						unset($this->session->data['tm_order_id']);
					}
				} else {
					if (isset($tagmanager['debug']) && $tagmanager['debug']) {
						$this->gtm->tmerror('TM: Order Success Called: Order ID Missing' );
					}
				}
				break;
		}

		if (isset($tmdata)) {
			if (isset($tmdata['tmerror']) && $tmdata['tmerror'] =='false') {
				$_data = $tmdata;
			}
		}
		
		if ($j3popup == 'quickview') {
			if ($page_type == 'product' && isset($_data['google_ec'])) { 
				$tmanalytics .= "<!-- End Google Tag Manager -->" . "\n" . "<script>";
				if (isset($_data['datalayer'])){ 
					$tmanalytics .= "parent.dataLayer.push(" . json_encode($_data['datalayer']) . ");";
				}
				$tmanalytics .= "</script>" . "\n" . "<!-- Google Tag Manager Extension -->";	
			}
			return $tmanalytics;
		}
		$cookie_data = $this->gtm->readConsent();
		$cc_enabled = $cookie_data['cc_enabled'];
		$gdpr_analytics = $cookie_data['gdpr_analytics'];
		$gdpr_marketing = $cookie_data['gdpr_marketing'];
		$ad_user_data = $cookie_data['ad_user_data'];
		$ad_personalization = $cookie_data['ad_personalization'];
		$allowAdFeatures = $cookie_data['allowAdFeatures'];
		$consent = $cookie_data['consent'];
		$tracking_block = $cookie_data['tracking_block'];
		$marketing_block = $cookie_data['marketing_block'];

		$tmanalytics .= '<!-- Google Tag Manager Extension -->';
		$tmanalytics .= '<script type="text/javascript" nitro-exclude="">' . "\n";
		$tmanalytics .= 'var dataLayer = window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} var delayInMilliseconds = ' . $tm_delay . '; '.  "\n";
		$tmanalytics .= 'function whenAvailable(name, callback) {var interval = 10; window.setTimeout(function() {if (window[name]) {callback(window[name]);} else {window.setTimeout(arguments.callee, interval);}}, interval);}'."\n";
		$tmanalytics .= "function defer(method) {if (window.jQuery) {method();} else {console.log('jquery not loaded waiting');setTimeout(function() { defer(method) }, 50);}}".  "\n";
		$tmanalytics .=" defer(function () { ";
		$tmanalytics .=" $.getcookiepreference = function(cookieTypeValue) {	var control = getCookie('cookieControl');var preferences = getCookie('cookieControlPrefs');	preferences = JSON.parse(preferences);	if (control === false) {return false;}if (preferences === false || preferences.indexOf(cookieTypeValue) === -1) {return false;}return true;};";
		$tmanalytics .=' var getCookie = function(name) {var cookie_name = name + "=";';
		$tmanalytics .=	"var decodedCookie = decodeURIComponent(document.cookie);var ca = decodedCookie.split(';');for (var i = 0; i < ca.length; i++) {var c = ca[i];while (c.charAt(0) == ' ') {c = c.substring(1);}if (c.indexOf(cookie_name) === 0) {return c.substring(cookie_name.length, c.length);}}return false;};";
    	$tmanalytics .="});";

		$tmanalytics .= '</script>' . "\n";
		$dimemsion = [];
		$dimemsion['ecomm_prodid']		= (isset($_data['datalayer']['ecomm_prodid']) ? $_data['datalayer']['ecomm_prodid'] : false);
		$dimemsion['ecomm_pagetype']	= (isset($_data['datalayer']['ecomm_pagetype']) ? $_data['datalayer']['ecomm_pagetype'] : false);
		$dimemsion['ecomm_totalvalue']	= (isset($_data['datalayer']['ecomm_totalvalue']) ? $_data['datalayer']['ecomm_totalvalue'] : false);
		$dimemsion['dynx_itemid']		= (isset($_data['datalayer']['dynx_itemid']) ? $_data['datalayer']['dynx_itemid'] : false);
		$dimemsion['dynx_itemid2']		= (isset($_data['datalayer']['dynx_itemid2']) ? $_data['datalayer']['dynx_itemid2'] : false);
		$dimemsion['dynx_pagetype']		= (isset($_data['datalayer']['dynx_pagetype']) ? $_data['datalayer']['dynx_pagetype'] : false);
		$dimemsion['dynx_totalvalue']	= (isset($_data['datalayer']['dynx_totalvalue']) ? $_data['datalayer']['dynx_totalvalue'] : false);
		
		$page_url = $tagmanager['url'];
		if (empty($tagmanager['url'])) {
			$page_url = $tagmanager['host_url'] . $tagmanager['path'];
		}
		
		if (!$tagmanager['pagecache']) {
			
			$post_data = [];
			
			if (isset($_data['fb_data']) && $this->gtm->check_array($_data['fb_data'])) {
				
				$post_data = $_data['fb_data'];
				
				if (isset($tagmanager['fb_catalog_id']) && !empty($tagmanager['fb_catalog_id'])) {
					$_data['fb_data']['product_catalog_id'] = $tagmanager['fb_catalog_id'];
					$post_data['product_catalog_id'] = $tagmanager['fb_catalog_id'];
				}
			}
			
			if (isset($_data['pixel_customer_data']) &&  $this->gtm->check_array($_data['pixel_customer_data'])) {
				$post_data['customer_data'] = $_data['pixel_customer_data'];
			}
			$post_data['page_type'] = $page_type;
			$post_data['route'] = $org_route;
			$post_data['dimemsion'] = $dimemsion;
			$result = $this->dataLayers($tagmanager,$post_data);
			
			if (isset($result['pixel']['event_id'])) {
				$event_id = $result['pixel']['event_id'];
				unset($result['pixel']['event_id']);
			}
			if (isset($result['pixel']['consent'])) {
				$consent = $result['pixel']['consent'];
				unset($result['pixel']['consent']);
			}
			if (isset($result['datalayer']['analytics_storage'])) {
				$analytics_storage = $result['datalayer']['analytics_storage'];
				unset($result['datalayer']['analytics_storage']);
			}
			if (isset($result['datalayer']['ad_storage'])) {
				$ad_storage = $result['datalayer']['ad_storage'];
				unset($result['datalayer']['ad_storage']);
			}
			if (isset($result['datalayer']['ad_user_data'])) {
				$ad_user_data = $result['datalayer']['ad_user_data'];
				unset($result['datalayer']['ad_user_data']);
			}
			if (isset($result['datalayer']['ad_personalization'])) {
				$ad_personalization = $result['datalayer']['ad_personalization'];
				unset($result['datalayer']['ad_personalization']);
			}
			
			if (isset($_data['fb_data'])) {
				
				if (isset($tagmanager['fb_catalog_id']) && !empty($tagmanager['fb_catalog_id'])) {
					$_data['fb_data']['product_catalog_id'] = $tagmanager['fb_catalog_id'];
				}

				switch ($page_type) {
	
					case "success":
					    $fbq = "fbq('track','Purchase'," .  json_encode($_data['fb_data']) . ",{'eventID': '" . $event_id . "'});";
					    break;
					
					case "product":
					     $fbq = "fbq('track','ViewContent'," .  json_encode($_data['fb_data']) . ",{'eventID': '" . $event_id . "'});";
					    break;
					
					case "listing":
						if ($route == 'product/search') {
					    	$fbq = "fbq('track','Search'," .  json_encode($_data['fb_data']) . ",{'eventID': '" . $event_id . "'});";
						} else {
							$fbq = "fbq('trackCustom','ViewCategory'," .  json_encode($_data['fb_data']) . ",{'eventID': '" . $event_id . "'});";
						}
					    break;
					case "checkout":
					    $fbq = "fbq('track','InitiateCheckout'," .  json_encode($_data['fb_data']) . ",{'eventID': '" . $event_id . "'});";
					    break;
					
					case "cart":
					    $fbq = "fbq('track','ViewCart'," .  json_encode($_data['fb_data']) . ",{'eventID': '" . $event_id . "'});";
					    break;
					
				}
			}
			
			$tmanalytics .= '<script type="text/javascript" nitro-exclude="">' . "\n";
			$tmanalytics .= "dataLayer.push(" .  json_encode($result['datalayer']) . ");". "\n";
			if ($ad_storage == 'denied') {
				$tmanalytics .= "gtag('set', 'ads_data_redaction', true);";
			}
			$tmanalytics .= "gtag('consent', 'default', {'analytics_storage': '" . $analytics_storage ."', 'ad_storage': '" . $ad_storage ."', 'ad_user_data': '" . $ad_user_data ."', 'ad_personalization': '" . $ad_personalization ."'});". "\n";
			include( $this->path_include . 'gtm_main.php');
			if (isset($tagmanager['pixelcode']) && !empty($tagmanager['pixelcode']) && $tagmanager['pixel'] == '1') { 
			$tmanalytics .= "!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');" . "\n";
			$tmanalytics .= "fbq('set', 'autoConfig', 'false', '" . $tagmanager['pixelcode'] . "');" . "\n";
			$tmanalytics .= "fbq('consent', '" . $consent . "');" . "\n";
			$tmanalytics .= "fbq('init', '" . $tagmanager['pixelcode'] . "'," . json_encode($result['pixel']) . ");" . "\n";
			$tmanalytics .= "fbq('track', 'PageView',{'eventID': '0-" . $event_id . "'});" . "\n";
			$tmanalytics .= $fbq;
			}
			$tmanalytics .= "</script>"."\n";

		} else {

			$post_data = [];
			
			
			if (isset($_data['fb_data'])) {
				$post_data = $_data['fb_data'];
				if (isset($tagmanager['fb_catalog_id']) && !empty($tagmanager['fb_catalog_id'])) {
					$_data['fb_data']['product_catalog_id'] = $tagmanager['fb_catalog_id'];
					$post_data['product_catalog_id'] = $tagmanager['fb_catalog_id'];
				}
	
				switch ($page_type) {
	
					case "success":
					    $fbq = "fbq('track','Purchase'," .  json_encode($_data['fb_data']) . ",{'eventID': event_id });";
					    break;
					
					case "product":
					     $fbq = "fbq('track','ViewContent'," .  json_encode($_data['fb_data']) . ",{'eventID': event_id });";
					    break;
					
					case "listing":
						if ($route == 'product/search') {
					    	$fbq = "fbq('trackCustom','Search'," .  json_encode($_data['fb_data']) . ",{'eventID': event_id });";
						} else {
							$fbq = "fbq('trackCustom','ViewCategory'," .  json_encode($_data['fb_data']) . ",{'eventID': event_id });";
						}
					    break;
					case "checkout":
					    $fbq = "fbq('track','InitiateCheckout'," .  json_encode($_data['fb_data']) . ",{'eventID': event_id });";
					    break;
					
					case "cart":
					    $fbq = "fbq('track','ViewCart'," .  json_encode($_data['fb_data']) . ",{'eventID': event_id });";
					    break;
					
				}
			}
			
			$post_data['page_type'] = (isset($page_type) ? $page_type : '');
			$post_data['route'] = (!empty($org_route) ? $org_route : $route);
			$post_data['url'] = $page_url;
			$post_data['dimemsion'] = $dimemsion;
			if (isset($_data['pixel_customer_data'])) {
				$post_data['customer_data'] = $_data['pixel_customer_data'];
			}
			
			
			$token = $this->gtm->getAJAXtoken();
			$post_data['token'] = $token;
			
			$post_data = json_encode($post_data);
			
			$tmanalytics .= '<script type="text/javascript" nitro-exclude="">' . "\n";
			if ($tm_mode) {
				$tmanalytics .= "
				defer(function () {"."$.ajax({cache: false, url: '". $this->extension_route . "/gtm&ts='+ Math.random(),type: 'post',
				data: JSON.stringify({ data: " . $post_data . " }),  contentType: \"application/json; charset=utf-8\",dataType: 'json',
				beforeSend: function() { },complete: function() { },success: function(mydata) {var analytics_storage = mydata['datalayer']['analytics_storage'];var ad_personalization = mydata['datalayer']['ad_personalization'];var ad_user_data = mydata['datalayer']['ad_user_data'];var ad_storage = mydata['datalayer']['ad_storage'];delete mydata['datalayer']['analytics_storage'];delete mydata['datalayer']['ad_storage'];delete mydata['datalayer']['ad_user_data'];delete mydata['datalayer']['ad_personalization'];dataLayer.push(mydata['datalayer']);console.log(mydata['datalayer']);if (ad_storage != 'granted'){ gtag('set', 'ads_data_redaction', true);} gtag('consent', 'default', {'analytics_storage': analytics_storage, 'ad_storage': ad_storage, 'ad_user_data' : ad_user_data, 'ad_personalization' : ad_personalization });";
				include( $this->path_include . 'gtm_main.php');
				if (isset($tagmanager['pixelcode']) && !empty($tagmanager['pixelcode']) && $tagmanager['pixel'] == '1') { 
				$tmanalytics .= "!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
				n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');";
				$tmanalytics .= "var consent = mydata['pixel']['consent'];	var event_id = mydata['pixel']['event_id'];
				delete mydata['pixel']['event_id'];delete mydata['pixel']['consent'];fbq('set', 'autoConfig', 'false', '" . $tagmanager['pixelcode'] . "');fbq('consent', consent);
				fbq('init', '" . $tagmanager['pixelcode'] . "',mydata['pixel']);fbq('track', 'PageView',{'eventID': '0-'+event_id });" . $fbq;
				}
				$tmanalytics .= "},error: function(xhr, ajaxOptions, thrownError) {console.log(xhr.responseText);}});});";
				} else {
				$tmanalytics .= "var xhr = new XMLHttpRequest();xhr.open(\"POST\", \"". $this->extension_route . "/gtm&ts=\" +Math.random() );
				xhr.setRequestHeader(\"Content-type\", \"application/x-www-form-urlencoded;charset=UTF-8\");xhr.responseType = 'json';xhr.onload = function () {if (xhr.readyState === xhr.DONE && xhr.status === 200) {
				var mydata = xhr.response;var analytics_storage = mydata['datalayer']['analytics_storage'];var ad_storage = mydata['datalayer']['ad_storage'];var ad_personalization = mydata['datalayer']['ad_personalization'];var ad_user_data = mydata['datalayer']['ad_user_data'];delete mydata['datalayer']['analytics_storage'];delete mydata['datalayer']['ad_storage'];dataLayer.push(mydata['datalayer']);console.log(mydata['datalayer']);if (ad_storage != 'granted'){ gtag('set', 'ads_data_redaction', true);} gtag('consent', 'default', {'analytics_storage': analytics_storage, 'ad_storage': ad_storage,'ad_user_data' : ad_user_data, 'ad_personalization' : ad_personalization });";
				include( $this->path_include . 'gtm_main.php');
				if (isset($tagmanager['pixelcode']) && !empty($tagmanager['pixelcode']) && $tagmanager['pixel'] == '1') { 
				$tmanalytics .= "!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
				n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');";
				$tmanalytics .= "var consent = mydata['pixel']['consent'];	var event_id = mydata['pixel']['event_id'];
				delete mydata['pixel']['event_id'];delete mydata['pixel']['consent'];fbq('set', 'autoConfig', 'false', '" . $tagmanager['pixelcode'] . "');fbq('consent', consent);
				fbq('init', '" . $tagmanager['pixelcode'] . "',mydata['pixel']);fbq('track', 'PageView',{'eventID': '0-'+event_id });" . $fbq;
				}
				$tmanalytics .= "}};xhr.send(JSON.stringify({ data: " . $post_data . " }));" ;
				}	
				$tmanalytics .= "</script>"."\n";
		}

		$tmanalytics .= '<script type="text/javascript" nitro-exclude="">' . "\n";
		
		if(isset($tracking_block) && !$tracking_block){

			if (isset($tagmanager['luckyorange_status']) && !empty($tagmanager['luckyorange_siteid']) && $tagmanager['luckyorange_status'] == '1' ) {
				include( $this->path_include . 'lucky_main.php');
			}
		
			if (isset($tagmanager['tiktok_status']) && !empty($tagmanager['tiktok_code']) && $tagmanager['tiktok_status'] == '1' ) {
				include( $this->path_include . 'tiktok.php');
			}
			
			if (isset($tagmanager['skroutz_siteid']) && !empty($tagmanager['skroutz_siteid']) && $tagmanager['skroutz_status'] == '1') {
				include( $this->path_include . 'skroutz.php');
			}
			
			if (isset($tagmanager['twitter_tag']) && !empty($tagmanager['twitter_tag']) && $tagmanager['twitter_status'] == '1') {
				include( $this->path_include . 'twitter.php');
			}
			
		}

		$tmanalytics .= "</script>"."\n";

		if(isset($tracking_block) && !$tracking_block){
			if (isset($tagmanager['matomo_code']) && !empty($tagmanager['matomo_code']) && $tagmanager['matomo_status'] == '1') {
				include( $this->path_include . 'matomo.php');
			}
		}	
		
		if(isset($marketing_block) && !$marketing_block){
			
			if (isset($tagmanager['paypal_code']) && !empty($tagmanager['paypal_code']) && $tagmanager['paypal_status'] == '1' ) {
				include( $this->path_include . 'paypal.php');
			}
		
			if (isset($tagmanager['admitad_code']) && !empty($tagmanager['admitad_code']) && $tagmanager['admitad_status'] == '1' ) {
				include( $this->path_include . 'admitad_main.php');
			}
		
			if (isset($tagmanager['sendinblue_status']) && !empty($tagmanager['sendinblue_code']) && $tagmanager['sendinblue_status'] == '1' ) {
				include( $this->path_include . 'sendinblue.php');
			}
			
			if (isset($tagmanager['linkwise_status']) && !empty($tagmanager['linkwise_code']) && $tagmanager['linkwise_status'] == '1' ) {
				include( $this->path_include . 'linkwise.php');
			}

			if (isset($tagmanager['klaviyo_status']) && !empty($tagmanager['klaviyo_code']) && $tagmanager['klaviyo_status'] == '1' ) {
				include( $this->path_include . 'klaviyo.php');
			}

			if (isset($tagmanager['da_code']) && !empty($tagmanager['da_code']) && $tagmanager['da_status'] == '1') {
				include( $this->path_include . 'dataaudience.php');
			}

		}

		

		if (isset($tagmanager['cj_code']) && !empty($tagmanager['cj_code']) && $tagmanager['cj_status'] == '1') {
			$cookie_name = "cje";
			$domain = $this->gtm->getNewURL();
			$cjevent = false;
			$_GET_lower = array_change_key_case($_GET, CASE_LOWER);
			$cjevent = (isset($_GET_lower["cjevent"]) ? $_GET_lower["cjevent"] : false);
			if (isset($cjevent) && $cjevent) {
				setcookie($cookie_name, $cjevent, time() + (86400 * 395), "/", $domain, true, false);
			}
		}

		switch ($page_type) {

			case "success":

				$tmanalytics .= '<script type="text/javascript" nitro-exclude="">';
				$tmanalytics .= "defer(function () {" . "$.ajax({ url: '". $this->extension_route . "/hitorder&oid=" . $_data['order_id'] . "&v=" . $tagmanager['vs'] ."'});" ."});</script>"."\n";
							
				if(isset($marketing_block) && !$marketing_block){
				
					if (isset($tagmanager['performant_code']) && isset($tagmanager['performant_confirm']) && $tagmanager['performant_status']) {
						include( $this->path_include . '2performant.php');
					}
					if (isset($tagmanager['affgateway_code']) && $tagmanager['affgateway_status']) {
					
					}
				
					if (isset($tagmanager['admitad_code']) && !empty($tagmanager['admitad_code']) && $tagmanager['admitad_status'] == '1' ) {
						include( $this->path_include . 'admitad_success.php');
					}	
					
					if (isset($tagmanager['admitad_retag_code5']) && !empty($tagmanager['admitad_retag_code5']) && $tagmanager['admitad_retag_status']) {
						include( $this->path_include . 'retag_success.php');
					}
					if (isset($tagmanager['merchant_id']) && !empty($tagmanager['merchant_id']) && $tagmanager['greview'] == '1') {	
						include( $this->path_include . 'google_review_success.php');
					}
				}
				
				break;
			
			case "product":
				
				if (isset($tagmanager['admitad_retag_code3']) && !empty($tagmanager['admitad_retag_code3']) && $tagmanager['admitad_retag_status']) {
					if(isset($marketing_block) && !$marketing_block){
					    include( $this->path_include . 'retag_product.php');
					}
				}

				break;
			
			case "listing":
				
				if (isset($tagmanager['admitad_retag_code2']) && !empty($tagmanager['admitad_retag_code2']) && $tagmanager['admitad_retag_status']) {
					if(isset($marketing_block) && !$marketing_block){
						include( $this->path_include . 'retag_category.php');
					}
				}

				break;
			
			case "cart":
			
				if (isset($tagmanager['admitad_retag_code4']) && !empty($tagmanager['admitad_retag_code4']) && $tagmanager['admitad_retag_status']) {
					if(isset($marketing_block) && !$marketing_block){
					    include( $this->path_include . 'retag_cart.php');
					}
				}
			
				break;
			
			case "home":
				
				if (isset($tagmanager['admitad_retag_code1']) && !empty($tagmanager['admitad_retag_code1']) && $tagmanager['admitad_retag_status']) {
					if(isset($marketing_block) && !$marketing_block){
						include( $this->path_include . 'retag_home.php');
					}
				}
				
				break;
		}
		
			if (isset($tagmanager['eu_cookie']) && $tagmanager['eu_cookie']) {
				include( $this->path_include . 'cookiee_main.php');
				if ($tagmanager['eu_cookie_enforce']) {
					$cc_enabled = 1;
					$tracking_block = true; 
					$marketing_block = true;
					$gdpr_analytics = 'denied';
					$gdpr_marketing = 'denied';
					$ad_user_data = 'denied';
					$ad_personalization = 'denied';
					$allowAdFeatures = 'false';
				}
				$cc_accepted = (isset($_COOKIE["cookieControl"]) ? $_COOKIE["cookieControl"] : false);
	
				if (isset($_COOKIE["cookieControlPrefs"])) {
					$cc_data = (array) json_decode($_COOKIE["cookieControlPrefs"]);
					foreach ($cc_data as $cc_option) {
						if ($cc_option == 'analytics') {
							$cc_analytics = 1;
							$tracking_block = false; 
						}
						if ($cc_option == 'marketing') {
							$cc_marketing = 1;
							$marketing_block = false;
						}
					}					
				}
			} 

	
    		$j3popup = (isset($this->request->get['popup']) ? $this->request->get['popup'] : '') ;
    		if(substr(VERSION,0,1)=='1' ) {
    			$this->data['route'] = (isset($this->request->get['route']) ? $this->request->get['route'] : 'common/home');
    			if ($this->data['route'] == 'journal2/quickview') {
    				$j3popup = 'quickview';
    			}
    		}

    		include( $this->path_include . 'event_scripts.php');
    		
    		if (isset($tagmanager['customcode']) && !empty($tagmanager['customcode'])) {
				$tmanalytics .= html_entity_decode($tagmanager['customcode'], ENT_QUOTES, 'UTF-8');
			}

    		if (isset($tagmanager['gdpr_customcode']) && !empty($tagmanager['gdpr_customcode'])) {
				if(isset($marketing_block) && !$marketing_block){
					$tmanalytics .= html_entity_decode($tagmanager['gdpr_customcode'], ENT_QUOTES, 'UTF-8');
				}
			} 
    
		$tmanalytics .= "<!-- End Google Tag Manager -->" ."\n";

		if (isset($this->request->get['debug'])) {
			if ($this->request->get['debug'] == 'log') {
				
			}
			if ($this->request->get['debug'] == 'show') {
			echo '<pre>';
			if(substr(VERSION,0,1)=='1' ) {
				print_r($this->data);
			} else {
				print_r($data);
			}
			
			die;
			}
			if ($this->request->get['debug'] == 'twig') {
			if(substr(VERSION,0,1)=='1' ) {
				$this->data['twig_debug'] = true;
			} else {
				$data['twig_debug'] = true;
			}
			
			}
		}

		return $tmanalytics;
	}
	
	public function dataLayers($tagmanager=false,$data=false) {
		if (!$tagmanager) {
			$tagmanager = $this->gtm->config();
		}
		
		$dimemsion = [];
		$setting_tags = [];

		if (isset($data['dimemsion'])) {
			$dimemsion = $data['dimemsion'];
			unset($data['dimemsion']);
		}
		if (isset($data['route'])) {
			$route = $data['route'];
			unset($data['route']);
		}
		if (isset($data['customer_data'])) {
			$customer_data = $data['customer_data'];
			unset($data['customer_data']);
		}
		$fb_data = $data;
		
		$setting_tags[] = ['route'	=> $route];

		$tagmanager['event_id'] = $this->gtm->eventid();
	
		$tag_initiate = $this->gtm->getDataLayerSettings($setting_tags,$tagmanager,$dimemsion);
		
		if (isset($route) && $route=='product/search') {
			$fb_data['page_type'] = 'search';	
		}
		
		$data = [];
		
		if (isset($customer_data) && $this->gtm->check_array($customer_data)) {
			$data['pixel'] = [
			'em'			=> (isset($customer_data['em']) ? $customer_data['em'] : false),
			'fn'			=> (isset($customer_data['fn']) ? $customer_data['fn'] : false),
			'ln'			=> (isset($customer_data['ln']) ? $customer_data['ln'] : false),
			'ph'			=> (isset($customer_data['ph']) ? $customer_data['ph'] : false),
			'ct'			=> (isset($customer_data['ct']) ? $customer_data['ct'] : false),
			'zp'			=> (isset($customer_data['pc']) ? $customer_data['pc'] : false),
			'st'			=> (isset($customer_data['st']) ? $customer_data['st'] : false),
			'country'		=> (isset($customer_data['cc']) ? $customer_data['cc'] : false),
			'external_id'	=> (isset($tagmanager['external_id']) ? $tagmanager['external_id'] : false),
			'event_id'		=> (isset($tagmanager['event_id']) ? $tagmanager['event_id'] : false),
			'consent'		=> (isset($tag_initiate['consent']) ? $tag_initiate['consent'] : 'grant'),
			];
			$tagmanager['em'] = (isset($customer_data['em']) ? $customer_data['em'] : false);
			$tagmanager['fn'] = (isset($customer_data['fn']) ? $customer_data['fn'] : false);
			$tagmanager['ln'] = (isset($customer_data['ln']) ? $customer_data['ln'] : false);
			$tagmanager['ph'] = (isset($customer_data['ph']) ? $customer_data['ph'] : false);
			$tagmanager['ct'] = (isset($customer_data['ct']) ? $customer_data['ct'] : false);
			$tagmanager['zp'] = (isset($customer_data['pc']) ? $customer_data['pc'] : false);
			$tagmanager['st'] = (isset($customer_data['st']) ? $customer_data['st'] : false);
			$tagmanager['cc'] = (isset($customer_data['cc']) ? $customer_data['cc'] : false);
		} else {
			$data['pixel'] = [
			'em'			=> (isset($tagmanager['em']) ? $tagmanager['em'] : false),
			'fn'			=> (isset($tagmanager['fn']) ? $tagmanager['fn'] : false),
			'ln'			=> (isset($tagmanager['ln']) ? $tagmanager['ln'] : false),
			'ph'			=> (isset($tagmanager['ph']) ? $tagmanager['ph'] : false),
			'ct'			=> (isset($tagmanager['ct']) ? $tagmanager['ct'] : false),
			'zp'			=> (isset($tagmanager['pc']) ? $tagmanager['pc'] : false),
			'st'			=> (isset($tagmanager['st']) ? $tagmanager['st'] : false),
			'country'		=> (isset($tagmanager['cc']) ? $tagmanager['cc'] : false),
			'external_id'	=> (isset($tagmanager['external_id']) ? $tagmanager['external_id'] : false),
			'event_id'		=> (isset($tagmanager['event_id']) ? $tagmanager['event_id'] : false),
			'consent'		=> (isset($tag_initiate['consent']) ? $tag_initiate['consent'] : 'grant'),
			];
		}
		
		
		
		if ($tagmanager['fb_api'])	{
			$this->gtm->pixelView('pageview','0-'.$tagmanager['event_id'],$tagmanager);	
		}
		
		if ($tagmanager['fb_api'] && isset($data) && isset($fb_data['page_type'])) {

			$fb_data['event_id'] = $tagmanager['event_id'];

			switch ($fb_data['page_type']) {
				
				case "success":
					$pixel_post = $this->gtm->pixelSetup($tagmanager,'Purchase',$fb_data);
				    break;
				
				case "product":
				     $pixel_post = $this->gtm->pixelSetup($tagmanager,'ViewContent',$fb_data);
				    break;
				
				case "listing":
				    $pixel_post = $this->gtm->pixelSetup($tagmanager,'ViewCategory',$fb_data);
				    break;
				    
				case "search":
				    $pixel_post = $this->gtm->pixelSetup($tagmanager,'Search',$fb_data);
				    break;    
				
				case "checkout":
				    $pixel_post = $this->gtm->pixelSetup($tagmanager,'InitiateCheckout',$fb_data);
				    break;
				
				case "cart":
				    $pixel_post = $this->gtm->pixelSetup($tagmanager,'ViewCart',$fb_data);
				    break;
				
			    case "contact":
				    $pixel_post = $this->gtm->pixelView('contact',false,$tagmanager);
			        break;  
			        
			    case "signup":
			    	$pixel_post = $this->gtm->pixelView('signup',false,$tagmanager);
					break;
			}
		} 
		
		$data['datalayer'] = $tag_initiate;

		return $data;
	}

	public function gtm() {
		$json = [];
		$route ='';
		$url ='';
		$post_data = file_get_contents('php://input');
		if (!isset($post_data) || empty($post_data)) {
		    echo 'oops hey you know what to do ;';
		    die;
		}
		if(isset($post_data)) {
			$data = json_decode($post_data,true);
		}

		if (!isset($data['data']['token'])) {
			echo 'hey send it proper;';
			die;
		}
		$token = $this->gtm->getAJAXtoken();

		if ($data['data']['token'] != $token) {
			echo 'opps i dont know you....';
			die;
		}
		$dimemsion = [];
		if (isset($data['data']['dimemsion'])) {
			$dimemsion = $data['data']['dimemsion'];
			unset($data['data']['dimemsion']);
		}
		if (isset($data['data']['route'])) {
			$route = $data['data']['route'];
			unset($data['data']['route']);
		}
		if (isset($data['data']['customer_data'])) {
			$customer_data = $data['data']['customer_data'];
			unset($data['data']['customer_data']);
		}

		if (isset($data['data']['url'])) {
			$url = $data['data']['url'];
			unset($data['data']['url']);
		} 
		
		$fb_data = $data['data'];
		
		if (isset($route)) { 
			if ($route == 'account/success' || $route == 'account/login' || $route == 'account/logout' || $route == 'account/account' || $route == 'contact/success'|| $route == 'checkout/confirm') { 
				$this->gtm->resetCustomerData(); 
			}
		}
		
		$setting_tags = [];
		
		$setting_tags[] = ['route'	=> $route];
		$tagmanager = $this->gtm->config();
		$tagmanager['event_id'] = $this->gtm->eventid();
		$tagmanager['url'] = $url;
	
		$tag_initiate = $this->gtm->getDataLayerSettings($setting_tags,$tagmanager,$dimemsion);
		
		if (isset($route) && $route=='product/search') {
			$fb_data['page_type'] = 'search';	
		}
		
		if (isset($customer_data) && $this->gtm->check_array($customer_data)) {
			$json['pixel'] = [
			'em'			=> (isset($customer_data['em']) ? $customer_data['em'] : false),
			'fn'			=> (isset($customer_data['fn']) ? $customer_data['fn'] : false),
			'ln'			=> (isset($customer_data['ln']) ? $customer_data['ln'] : false),
			'ph'			=> (isset($customer_data['ph']) ? $customer_data['ph'] : false),
			'ct'			=> (isset($customer_data['ct']) ? $customer_data['ct'] : false),
			'zp'			=> (isset($customer_data['pc']) ? $customer_data['pc'] : false),
			'st'			=> (isset($customer_data['st']) ? $customer_data['st'] : false),
			'country'		=> (isset($customer_data['cc']) ? $customer_data['cc'] : false),
			'external_id'	=> (isset($tagmanager['external_id']) ? $tagmanager['external_id'] : false),
			'event_id'		=> (isset($tagmanager['event_id']) ? $tagmanager['event_id'] : false),
			'consent'		=> (isset($tag_initiate['consent']) ? $tag_initiate['consent'] : 'grant'),
			];
			$tagmanager['em'] = (isset($customer_data['em']) ? $customer_data['em'] : false);
			$tagmanager['fn'] = (isset($customer_data['fn']) ? $customer_data['fn'] : false);
			$tagmanager['ln'] = (isset($customer_data['ln']) ? $customer_data['ln'] : false);
			$tagmanager['ph'] = (isset($customer_data['ph']) ? $customer_data['ph'] : false);
			$tagmanager['ct'] = (isset($customer_data['ct']) ? $customer_data['ct'] : false);
			$tagmanager['zp'] = (isset($customer_data['pc']) ? $customer_data['pc'] : false);
			$tagmanager['st'] = (isset($customer_data['st']) ? $customer_data['st'] : false);
			$tagmanager['country'] = (isset($customer_data['cc']) ? $customer_data['cc'] : false);
			
		} else {
			$json['pixel'] = [
			'em'			=> (isset($tagmanager['em']) ? $tagmanager['em'] : false),
			'fn'			=> (isset($tagmanager['fn']) ? $tagmanager['fn'] : false),
			'ln'			=> (isset($tagmanager['ln']) ? $tagmanager['ln'] : false),
			'ph'			=> (isset($tagmanager['ph']) ? $tagmanager['ph'] : false),
			'ct'			=> (isset($tagmanager['ct']) ? $tagmanager['ct'] : false),
			'zp'			=> (isset($tagmanager['pc']) ? $tagmanager['pc'] : false),
			'st'			=> (isset($tagmanager['st']) ? $tagmanager['st'] : false),
			'country'		=> (isset($tagmanager['cc']) ? $tagmanager['cc'] : false),
			'external_id'	=> (isset($tagmanager['external_id']) ? $tagmanager['external_id'] : false),
			'event_id'		=> (isset($tagmanager['event_id']) ? $tagmanager['event_id'] : false),
			'consent'		=> (isset($tag_initiate['consent']) ? $tag_initiate['consent'] : 'grant'),
			];
		}
		
		if ($tagmanager['fb_api'])	{
			$this->gtm->pixelView('pageview','0-'.$tagmanager['event_id'],$tagmanager);	
		}
		
		if ($tagmanager['fb_api'] && isset($data) && isset($fb_data['page_type']) && !empty($url)) {
			
			$fb_data['event_id'] = $tagmanager['event_id'];
			
			switch ($fb_data['page_type']) {
				
				case "success":
					$pixel_post = $this->gtm->pixelSetup($tagmanager,'Purchase',$fb_data);
				    break;
				
				case "product":
				     $pixel_post = $this->gtm->pixelSetup($tagmanager,'ViewContent',$fb_data);
				    break;
				
				case "listing":
				    $pixel_post = $this->gtm->pixelSetup($tagmanager,'ViewCategory',$fb_data);
				    break;
				    
				case "search":
				    $pixel_post = $this->gtm->pixelSetup($tagmanager,'Search',$fb_data);
				    break;    
				
				case "checkout":
				    $pixel_post = $this->gtm->pixelSetup($tagmanager,'InitiateCheckout',$fb_data);
				    break;
				
				case "cart":
				    $pixel_post = $this->gtm->pixelSetup($tagmanager,'ViewCart',$fb_data);
				    break;
				
				case "contact":
					$pixel_post = $this->gtm->pixelView('contact',false,$tagmanager);
					break;  
						
				case "signup":
					$pixel_post = $this->gtm->pixelView('signup',false,$tagmanager);
					break;
			}
		} 
		
		$json['datalayer'] = $tag_initiate;
		$this->response->addHeader('Content-Type: application/json');
		$this->response->addHeader('Cache-Control: no-cache, no-store, must-revalidate');
		$this->response->addHeader('Pragma: no-cache');
		$this->response->addHeader('Expires: Thu, 19 Nov 1981 08:52:00 GMT');
		$this->response->setOutput(json_encode($json));
	}
	
	public function sendorder() {
		$json['error'] = true ;
		$json['message'] = 'error';
		
		$tagmanager = $this->gtm->settings;

		if (isset($this->request->get['oid'])) {
			$order_id = $this->request->get['oid'];
		}

		if (isset($this->request->get['v'])) {
			$v= $this->request->get['v'];
		}

		if (!$this->validate($v)) {
			$json['message'] = 'error processing -> key not verified';
		} else {
			if (isset($order_id) && !empty($order_id)) {
				$json = $this->gtm->apiOrderSend($order_id) ;
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));

	}
	
	public function refund() {
		$json['error'] = true ;
		$json['message'] = 'error';
		$tagmanager = $this->gtm->config();

		if (isset($this->request->get['oid'])) {
			$order_id = $this->request->get['oid'];
		}

		if (isset($this->request->get['v'])) {
			$v= $this->request->get['v'];
		}

		if (!$this->validate($v)) {
			$json['message'] = 'error processing -> key not verified';
		} else { 
			if (isset($this->request->get['order_status_id'])) {
				$order_status_id = $this->request->get['order_status_id'];
	
			} else {
				$json['message'] = 'error processing order status missing';
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput($json);
			}
	
			$status = $tagmanager['return_status'];
			
			if (in_array($order_status_id, $status, true)) {
				$json['error'] = true;
				if (isset($this->request->get['oid'])) {
					$order_id = (int)$this->request->get['oid'];
					if (isset($order_id) && !empty($order_id)) {
					    $json = $this->gtm->apiOrderRefund($order_id);
					} else {
					    $this->gtm->tmerror('Refund Routine Order id invalid. ' );
					}
				}
			} else {
				$json['message'] = 'error processing couldnt validate order status check return status id in config';
			}
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function hitorder() {
		$json['error'] = true ;
		$json['message'] = 'error';
		$tagmanager = $this->gtm->settings;
		if (isset($this->request->get['v'])) {
			$v= $this->request->get['v'];
		}

		if (!$this->validate($v)) {
			$json['message'] = 'error processing -> key not verified ';
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput($json);
		} 

		if ($this->validate($v)) { 
			if (isset($this->request->get['oid'])) {
				$order_id = $this->request->get['oid'];
				$json = $this->gtm->GAupdateorder($order_id);
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));

	}

	public function validate($str) {
		$tagmanager = $this->gtm->config();
		if (strtolower($str) != strtolower($tagmanager['vs'])) {
		  $this->gtm->tmerror('Tagmanager API couldnt verify key '. $str.' vs ' . $tagmanager['vs']);
		  return false;
		} else {
		  return true;
		}
	}
}
?>