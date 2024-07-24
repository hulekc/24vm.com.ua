<?php 
/* v:10.7 19-JAN-2024*/
if (isset($j3popup) && !empty($j3popup)) {
	$parent="parent.";	
} else {
	$parent="";
}
if (!isset($tmanalytics)) {
	$tmanalytics ='';
}
$tmanalytics .= '<script type="text/javascript" nitro-exclude="">';
$tmanalytics .= "defer(function () {
var dataLayer = window.dataLayer = window.dataLayer || [];
$(document).ajaxSuccess(function(event, xhr, settings, json) {
action = null;";

if (isset($page_type) && $page_type == 'checkout') {
	$tmanalytics .= "if (typeof settings !== 'undefined' && typeof settings.url !== 'undefined' && typeof settings.data !== 'undefined') {
		if (settings.url.includes(\"shipping_method/save\")) {
			if (json && json['ec_data'] && json['ec_data']['datalayer']) {
				var ec = json['ec_data']['datalayer'];
				var postdata = json['ec_data'];
				dataLayer.push({'event': 'add_shipping_info','eventAction': 'Add Shipping Info','eventLabel': 'Add Shipping Info','value' : ec['value'],'currency' : ec['currency'],'shipping_tier' : ec['shipping_tier'],'ga4_items' : ec['ga4_items'],});
			}
		}
		if (settings.url.includes(\"payment_method/save\")) {
			if (json && json['ec_data'] && json['ec_data']['datalayer']) {
				var ec = json['ec_data']['datalayer'];
				var postdata = json['ec_data'];
				dataLayer.push({'event': 'add_payment_info','eventAction': 'Add Payment Info','eventLabel': 'Add Payment Info','value' : ec['value'],'currency' : ec['currency'],'payment_type' : ec['payment_type'],'ga4_items' : ec['ga4_items'],});";
				if(isset($tagmanager['pixel']) && $tagmanager['pixel']) {
					$tmanalytics .= "
					if (postdata['fb_data']) {
						fbq('track','AddPaymentInfo', postdata['fb_data'],{'eventID': ec['event_id'] });
					}	
					";
				}
				if (isset($tagmanager['tiktok_status']) && !empty($tagmanager['tiktok_code']) && $tagmanager['tiktok_status'] == '1' ) {
					if(isset($tracking_block) && !$tracking_block){
						$tmanalytics .= $parent . "ttq.track('AddPaymentInfo',{'eventID': ec['event_id'] });"."\n";
					}
				}
				if (isset($tagmanager['twitter_status']) && !empty($tagmanager['twitter_tag']) && $tagmanager['twitter_status'] == '1' ) {
					if(isset($tracking_block) && !$tracking_block){
					$tmanalytics .= "
					if (postdata['twitter_event'] && postdata['twitter_data']) {
						twq('event', postdata['twitter_event'], postdata['twitter_data']);
					}	
					";
					}
				}	
			$tmanalytics .= "	
			}
		}";
		if ($this->config->get('config_template') === 'journal2') {
			$tmanalytics .= "
			if (settings.url.includes(\"journal2/checkout/save\")) {
			if (json && json['journal_shipping'] && json['journal_shipping']['datalayer']) {
				var ec = json['journal_shipping']['datalayer'];
				var postdata = json['journal_shipping'];
				dataLayer.push({'event': 'add_shipping_info','eventAction': 'Add Shipping Info','eventLabel': 'Add Shipping Info','value' : ec['value'],'currency' : ec['currency'],'shipping_tier' : ec['shipping_tier'],'ga4_items' : ec['ga4_items'],});
			}
			if (json && json['journal_payment'] && json['journal_payment']['datalayer']) {
				var ec = json['journal_payment']['datalayer'];
				var postdata = json['journal_payment'];
				dataLayer.push({'event': 'add_payment_info','eventAction': 'Add Payment Info','eventLabel': 'Add Payment Info','value' : ec['value'],'currency' : ec['currency'],'payment_type' : ec['payment_type'],'ga4_items' : ec['ga4_items'],});
			";
			if(isset($tagmanager['pixel']) && $tagmanager['pixel']) {
				$tmanalytics .= "
				if (postdata['fb_data']) {
					fbq('track','AddPaymentInfo', postdata['fb_data'],{'eventID': ec['event_id'] });
				}	
				";
			}
			if (isset($tagmanager['tiktok_status']) && !empty($tagmanager['tiktok_code']) && $tagmanager['tiktok_status'] == '1' ) {
				if(isset($tracking_block) && !$tracking_block){
					$tmanalytics .= $parent . "ttq.track('AddPaymentInfo',{'eventID': ec['event_id'] });"."\n";
				}
			}
			if (isset($tagmanager['twitter_status']) && !empty($tagmanager['twitter_tag']) && $tagmanager['twitter_status'] == '1' ) {
				if(isset($tracking_block) && !$tracking_block){
					$tmanalytics .= "
					if (postdata['twitter_event'] && postdata['twitter_data']) {
						twq('event', postdata['twitter_event'], postdata['twitter_data']);
					}	
					";
				}
			}	
		$tmanalytics .= "	
			}
			}
			";
		}	
		if (isset($data['ttheme']) && $data['ttheme'] == 'journal3') {
			$tmanalytics .= "
			if (settings.url.includes(\"journal3/checkout/save\")) {
			if (json && json['response']['journal_shipping'] && json['response']['journal_shipping']['datalayer']) {
				var ec = json['response']['journal_shipping']['datalayer'];
				var postdata = json['response']['journal_shipping'];
				dataLayer.push({'event': 'add_shipping_info','eventAction': 'Add Shipping Info','eventLabel': 'Add Shipping Info','value' : ec['value'],'currency' : ec['currency'],'shipping_tier' : ec['shipping_tier'],'ga4_items' : ec['ga4_items'],});
			}
			if (json && json['response']['journal_payment'] && json['response']['journal_payment']['datalayer']) {
				var ec = json['response']['journal_payment']['datalayer'];
				var postdata = json['response']['journal_payment'];
				dataLayer.push({'event': 'add_payment_info','eventAction': 'Add Payment Info','eventLabel': 'Add Payment Info','value' : ec['value'],'currency' : ec['currency'],'payment_type' : ec['payment_type'],'ga4_items' : ec['ga4_items'],});
				";
			if(isset($tagmanager['pixel']) && $tagmanager['pixel']) {
				$tmanalytics .= "
				if (postdata['fb_data']) {
					fbq('track','AddPaymentInfo', postdata['fb_data'],{'eventID': ec['event_id'] });
				}	
				";
			}
			if (isset($tagmanager['tiktok_status']) && !empty($tagmanager['tiktok_code']) && $tagmanager['tiktok_status'] == '1' ) {
				if(isset($tracking_block) && !$tracking_block){
					$tmanalytics .= $parent . "ttq.track('AddPaymentInfo',{'eventID': ec['event_id'] });"."\n";
				}
			}
			if (isset($tagmanager['twitter_status']) && !empty($tagmanager['twitter_tag']) && $tagmanager['twitter_status'] == '1' ) {
				if(isset($tracking_block) && !$tracking_block){
				$tmanalytics .= "
				if (postdata['twitter_event'] && postdata['twitter_data']) {
					twq('event', postdata['twitter_event'], postdata['twitter_data']);
				}	
				";
				}
			}	
			$tmanalytics .= "	
			}
			}
			";
		}
		if (file_exists(DIR_APPLICATION . 'controller/extension/module/xtensions/checkout/checkout.php')) {
			$tmanalytics .= "
			if (settings.url.includes(\"xtensions/checkout/xpayment_address/validate\")) {
			if (json && json['xtension_shipping'] && json['xtension_shipping']['datalayer']) {
				var ec = json['xtension_shipping']['datalayer'];
				var postdata = json['xtension_shipping'];
				dataLayer.push({'event': 'add_shipping_info','eventAction': 'Add Shipping Info','eventLabel': 'Add Shipping Info','value' : ec['value'],'currency' : ec['currency'],'shipping_tier' : ec['shipping_tier'],'ga4_items' : ec['ga4_items'],});
			}}
			if (settings.url.includes(\"xtensions/checkout/xpayment_method/validate\")) {
			if (json && json['xtension_payment'] && json['xtension_payment']['datalayer']) {
				var ec = json['xtension_payment']['datalayer'];
				var postdata = json['xtension_payment'];
				dataLayer.push({'event': 'add_payment_info','eventAction': 'Add Payment Info','eventLabel': 'Add Payment Info','value' : ec['value'],'currency' : ec['currency'],'payment_type' : ec['payment_type'],'ga4_items' : ec['ga4_items'],});";
			if(isset($tagmanager['pixel']) && $tagmanager['pixel']) {
				$tmanalytics .= "
				if (postdata['fb_data']) {
					fbq('track','AddPaymentInfo', postdata['fb_data'],{'eventID': ec['event_id'] });
				}	
				";
			}
			if (isset($tagmanager['tiktok_status']) && !empty($tagmanager['tiktok_code']) && $tagmanager['tiktok_status'] == '1' ) {
				if(isset($tracking_block) && !$tracking_block){
					$tmanalytics .= $parent . "ttq.track('AddPaymentInfo',{'eventID': ec['event_id'] });"."\n";
				}
			}
			if (isset($tagmanager['twitter_status']) && !empty($tagmanager['twitter_tag']) && $tagmanager['twitter_status'] == '1' ) {
				if(isset($tracking_block) && !$tracking_block){
				$tmanalytics .= "
				if (postdata['twitter_event'] && postdata['twitter_data']) {
					twq('event', postdata['twitter_event'], postdata['twitter_data']);
				}	
				";
				}
			}	
		$tmanalytics .= "}}";
		}
		$tmanalytics .= "}";
}
$tmanalytics .= "
if (json && json['ec_data']) {
if (!json.error) { 
if(json['action'] && json['ec_data']['action'] == \"addToCart\") {
var ec = json['ec_data']['data'];
var postdata =  json['ec_data'];";
$tmanalytics .= $parent . "dataLayer.push({'event': 'ADD_CART','eventAction': 'ADD_CART','eventLabel': 'AddToCart','contents': [{'id' : ec['id'],'quantity' : ec['quantity']}],'content_name' : ec['name'],'content_type' : 'product','brand': ec['brand'],'category': ec['category'],'quantity':ec['quantity'],'pixel_value': ec['pixel_value'],'fb_currency': ec['fcurrency'],'number_items': ec['quantity'],'content_ids' : ec['id'],'remarketing_ids' : [{'id' : ec['id'],'google_business_vertical': 'retail'}],'value' : ec['value'],'currency' : ec['currency'],'ga4_items' : ec['ga4_data'],'event_id'	: ec['event_id'],});" . "\n";
if(isset($tagmanager['pixel']) && $tagmanager['pixel']) {
$tmanalytics .= "fbq('track','AddToCart', postdata['fb_data'], {'eventID': ec['event_id'] });" . "\n";
}
if (isset($tagmanager['tiktok_status']) && !empty($tagmanager['tiktok_code']) && $tagmanager['tiktok_status'] == '1' ) {
if(isset($tracking_block) && !$tracking_block){
$tmanalytics .= $parent . "ttq.track('AddToCart',{'content_category' : postdata['tiktok']['content_category'],'content_type' : postdata['tiktok']['content_type'],'content_name' : postdata['tiktok']['content_name'],'content_id' : postdata['tiktok']['content_id'],'quantity':postdata['tiktok']['quantity'],'value' : postdata['tiktok']['price'],'price'	: postdata['tiktok']['price'],'currency' : postdata['tiktok']['currency']});"."\n";
}
}
if (isset($tagmanager['twitter_status']) && !empty($tagmanager['twitter_tag']) && $tagmanager['twitter_status'] == '1' ) {
	if(isset($tracking_block) && !$tracking_block){
	$tmanalytics .= "if (postdata['twitter_event'] && postdata['twitter_event'] !== 0){ ". "\n";
	$tmanalytics .= "twq('event', postdata['twitter_event'], postdata['twitter_data']);". "\n";	
	$tmanalytics .= "}";
	}
}
$tmanalytics .="console.log('Tagmanager AddToCart Event Sent');
}
if(json['action'] && json['ec_data']['action'] == \"addToWishlist\") {
var ec = json['ec_data']['data'];
var postdata = json['ec_data'];";
$tmanalytics .= $parent . "dataLayer.push({'event': 'ADD_WISHLIST','eventAction': 'ADD_WISHLIST','eventLabel': 'AddToWishlist','content_ids' : ec['id'],'content_name' : ec['name'],'content_type' : 'product','brand': ec['brand'],'category': ec['category'],'pixel_value': ec['fprice'],'fb_currency': ec['fcurrency'],'value' : ec['price'],'currency' : ec['currency'],'ga4_items' : ec['ga4_data'],'event_id'	: ec['event_id'],});";
if (isset($tagmanager['twitter_status']) && !empty($tagmanager['twitter_tag']) && $tagmanager['twitter_status'] == '1' ) {
	if(isset($tracking_block) && !$tracking_block){
	$tmanalytics .= "if (postdata['twitter_event'] && postdata['twitter_event'] !== 0){ ". "\n";
	$tmanalytics .= "twq('event', postdata['twitter_event'], postdata['twitter_data']);". "\n";	
	$tmanalytics .= "}";
	}
}
$tmanalytics .= "console.log('Tagmanager Wishlist Event Sent');
}
if(json['action'] && json['ec_data']['action'] == \"RemoveCart\") {
var ec = json['ec_data']['data'];"; 
$tmanalytics .= $parent . "dataLayer.push({'event': 'REMOVE_CART','eventAction': 'REMOVE_CART','eventLabel': 'REMOVE CART','value' : ec['value'],'currency' : ec['currency'],'ga4_items' : ec['ga4_data'],'event_id'	: ec['event_id'],});";
$tmanalytics .="console.log('Tagmanager Remove Cart Event Sent');}}}});";
$tmanalytics .="});";
$tmanalytics .="function GAPromotion(creative_name,creative_slot,promotion_id,promotion_name,items) {" . $parent . "dataLayer.push({'event': 'promotionClick','eventAction': 'promotionClick','eventLabel': 'promotionClick','creative_name': creative_name, 'creative_slot': creative_slot, 'promotion_id' : promotion_id, 'promotion_name': promotion_name, 'items': items});}";
$tmanalytics .="function GAClick(name,sku,price,brand,category,item_category) {". $parent . "dataLayer.push({'event': 'generic_productclick','eventAction': 'generic_productclick','eventLabel': 'generic_productclick','ga4_items': [{'item_id': sku,'item_name': name,'affiliation': '','coupon': '','discount': 0,'index': 0,'item_brand': brand,'item_category': item_category,'item_category2': '','item_category3': '','item_category4': '','item_category5': '','item_list_id': '','item_list_name': category,'item_variant': '','price': price,'quantity': 1
}]});}</script>";
?>