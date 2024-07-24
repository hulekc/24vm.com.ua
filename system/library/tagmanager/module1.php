<?php
/* v:10.7 19-JAN-2024*/
$tagmanager = $this->gtm->settings;
$skip_tm = false;
if (isset($tagmanager['code']) && $tagmanager['status']=='1') {
	
	if (!isset($GLOBALS['tm_m'])) {
		$GLOBALS['tm_m'] = array();
		$GLOBALS['ga4_m']= array();
	}
	$moudle_listname = (isset($listname) ? $listname : 'Module');

	if(substr(VERSION,0,1)=='1' ) {
		$this->data['tagmanager'] = $tagmanager;
	} else {
		$data['tagmanager'] = $tagmanager;
	}

	$pprice = 0;
	$fprice = 0;

	if(isset($result) && isset($result['price']) && isset($result['product_id'])) {
		$value = $result;
	} elseif (isset($product_info) && isset($product_info['price'])) {
		$value = $product_info;
	} elseif (isset($product) && isset($product['price'])) {
		$value = $product;
	} else {
	    $skip_tm = true;
	}
	
	if (!isset($value['tax_class_id'])) {
	    $skip_tm = true;
	}

	if (isset($value) && !$skip_tm) {
		if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
			$pprice = $this->currency->format($this->tax->calculate($value['price'], $value['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'],'',false);
			$fprice = $this->currency->format($this->tax->calculate($value['price'], $value['tax_class_id'], $this->config->get('config_tax')), $tagmanager['alt_currency'],'',false);
			$org_price = $pprice;
		}
		if (isset($value['special']) && (float)$value['special']) {
			$pprice = $this->currency->format($this->tax->calculate($value['special'], $value['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'],'',false);
			$fprice = $this->currency->format($this->tax->calculate($value['special'], $value['tax_class_id'], $this->config->get('config_tax')), $tagmanager['alt_currency'],'',false);
			$discount = $org_price - $pprice;
		}
		$sku = (isset($value['sku']) ? $value['sku'] : $value['product_id']);
		$model = (isset($value['model']) ? $value['model'] : $value['product_id']);
		$pid = $this->gtm->tagmangerPmap($model, $sku, $value['product_id']);
		$brand = (isset($value['manufacturer']) ? $this->gtm->cleanStr($value['manufacturer']) : $this->gtm->getProductBrandName($value['product_id']));
		$cat_data = $this->gtm->getProductCatName($value['product_id']);
		$gtin = (isset($value['ean']) ? $value['ean'] : '');
		$title = $this->gtm->tagmangerPtitle($value['name'], $brand, $value['model'],$value['product_id']);

		if (isset($cat_data)) {
			$category_name = $cat_data['category'];
			$item_list_id  = $cat_data['item_list_id'];
			$item_list_name = $cat_data['item_list_name'];
			$item_category = $cat_data ['item_category'];
			$item_category2 = $cat_data['item_category2'];
			$item_category3 = $cat_data['item_category3'];
			$item_category4 = $cat_data['item_category4'];
			$item_category5 = $cat_data['item_category5'];
		} 

    	$GLOBALS['tm_m'][]=array(
    		'id'		=>		$pid,
    		'name'		=>		$title,
    		'price'		=>		(isset($pprice) ? number_format((float)$pprice, 2, '.', '') : '0'),
    		'brand'		=>		$brand,
    		'category'	=>		$category_name,
    		'list'		=>		$moudle_listname,
    		'currency'	=>		$tagmanager['currency']
    	);
    	
    	$GLOBALS['ga4_m'][]=array(
    		'item_id'			=> $pid,
    		'item_name'			=> $title,
    		'item_list_name'	=> $item_list_name,
    		'item_list_id'		=> $item_list_id,
    		'index'				=> (isset($i) ? $i-1 : '0'),
    		'item_brand'		=> $brand,
    		'item_category'		=> $item_category,
    		'item_category2'	=> $item_category2,
    		'item_category3'	=> $item_category3,
    		'item_category4'	=> $item_category4,
    		'item_category5'	=> $item_category5,	
    		'gtin'				=> $gtin,
    		'item_variant'		=> '',
    		'affiliation'		=> '',
    		'discount'			=> (isset($discount) ? number_format((float)$discount, 2, '.', '') : '0'),
    		'coupon'			=> '',
    		'price'				=> (isset($pprice) ? number_format((float)$pprice, 2, '.', '') : '0'),
    		'curency'			=> $tagmanager['currency'],
    	);
	}
}
?>