<?php 
/* v:10.7 19-JAN-2024*/
$tmanalytics = '';
if (!method_exists($this, 'gtm')) {
		
	$tagmanager = $this->gtm->settings;
	$cdn_url = '';
	$tm_cdn = false;
	$eu_css = '';
	$eu_js = '';
	
	$j3popup = (isset($this->request->get['popup']) ? $this->request->get['popup'] : '') ;
    
    if(substr(VERSION,0,1)=='1' ) {
    	$this->data['route'] = (isset($this->request->get['route']) ? $this->request->get['route'] : 'common/home');
    	if ($this->data['route'] == 'journal2/quickview') {
    		$j3popup = 'quickview';
    	}
    }
	
	$tmanalytics = '<!-- Google Tag Manager Extension-->';

    if (isset($tagmanager['freshchat_code']) && !empty($tagmanager['freshchat_code']) && $tagmanager['freshchat_status'] == '1' ) {
		include('freshchat_main.php');
	}
	
	if (isset($tagmanager['hubspot_code']) && !empty($tagmanager['hubspot_code']) && $tagmanager['hubspot_status'] == '1' ) {
		include('hubspot_main.php');			
	}
	
	if (isset($tagmanager['smartsupp_code']) && !empty($tagmanager['smartsupp_code']) && $tagmanager['smartsupp_status'] == '1' ) {
		include('smartsupp_main.php');		
	}
	
	if (isset($tagmanager['zenchat_code']) && !empty($tagmanager['zenchat_code']) && $tagmanager['zenchat_status'] == '1' ) {
		include('zenchat_main.php');		
	}
			
	if (isset($tagmanager['zopimchat_code']) && !empty($tagmanager['zopimchat_code']) && $tagmanager['zopimchat_status'] == '1' ) {
		include('zopimchat_main.php');
	}

	if (isset($tagmanager['merchant_id']) && !empty($tagmanager['merchant_id']) && $tagmanager['greview'] == '1' && $tagmanager['greview_badge'] == '1') {
		if(isset($marketing_block) && !$marketing_block){
			include('google_review_badge.php');
		}
	}
	
	if (isset($tagmanager['eu_cookie']) && $tagmanager['eu_cookie']) {
		include('cookiee_footer.php');
	}

	$tmanalytics .= '<!-- Google Tag Manager Extension-->';
	
	if(substr(VERSION,0,1)=='1' ) {
		$this->data['tagmanager'] = $tagmanager;
		$this->data['j3popup'] = $j3popup;
		$this->data['tmanalytics'] = $tmanalytics;
	} else {
		$data['tagmanager'] = $tagmanager;
		$data['j3popup'] = $j3popup;
		$data['tmanalytics'] = $tmanalytics;
	}
	if (isset($this->data)) {
		$this->data['tmanalytics'] = $tmanalytics;
		$this->data['tagmanager'] = $tagmanager;
		$this->data['j3popup'] = $j3popup;
	}

}
?>