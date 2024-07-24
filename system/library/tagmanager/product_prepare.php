<?php
/* v:10.7 19-JAN-2024*/
if (!isset($tagmanager)) {
	$tagmanager = $this->gtm->settings;
}
if (isset($tagmanager['code']) && $tagmanager['status']=='1') {	
	$GLOBALS['tm'] = array();
	
	if(substr(VERSION,0,1)=='1' ) {
		$_data = (isset($this->data) ? $this->data : null);
	} else {
		$_data = (isset($data) ? $data : null);
	}

	if(isset($this->request->get['product_id']) && $this->request->get['product_id']) {
	
		$_data['url_link'] = '';
		$_data['image_link'] = '';
		
		if (isset($tagmanager['admitad_retag_status']) && $tagmanager['admitad_retag_status']) {
			if (!isset($product_info['image'])) {
				$img = $this->gtm->getProductImages($this->request->get['product_id']);
				foreach ($img as $im) {
					$_data['image_link'] = '//image/' . $im['image'];
				}
			} else {
				$_data['image_link'] = '//image/' . $product_info['image'];
			}
			$_data['url_link'] = $this->url->link('product/product', '&product_id=' . (isset($_data['product_id']) ? $_data['product_id'] : ''));
		}
		
		if (isset($_data['pid'])){
		
			$GLOBALS['tm'] = [
				'type'				=>	'product',
				'id'				=>	(isset($_data['pid']) ? $_data['pid'] : ''),
				'name'				=>	(isset($_data['title']) ? $_data['title'] : ''),
				'price'				=>	$_data['pprice'],
				'brand'				=>	(isset($_data['brand']) ? $_data['brand'] : ''),
				'category'			=>	(isset($_data['category_name']) ? $_data['category_name'] : ''),
				'sku'				=> 	(isset($_data['sku']) ? $_data['sku'] : ''),		
				'model'				=> 	(isset($product_info['model']) ? $product_info['model'] : ''),
				'gtin'				=> 	(isset($_data['gtin']) ? $_data['gtin'] : ''),	
				'variant'			=>	'',
				'currency'			=>	(isset($tagmanager['currency']) ? $tagmanager['currency'] : ''),
				'item_list_name'	=> (isset($_data['item_list_name']) ? $_data['item_list_name'] : ''),
				'item_list_id'		=> (isset($_data['item_list_id'])   ? $_data['item_list_id'] : ''),
				'item_category'		=> (isset($_data['item_category'])  ? $_data['item_category'] : ''),
				'item_category2'	=> (isset($_data['item_category2']) ? $_data['item_category2'] : ''),
				'item_category3'	=> (isset($_data['item_category3']) ? $_data['item_category3'] : ''),
				'item_category4'	=> (isset($_data['item_category4']) ? $_data['item_category4'] : ''),
				'item_category5'	=> (isset($_data['item_category5']) ? $_data['item_category5'] : ''),	
				'item_variant'		=> '',
				'affiliation'		=> '',
				'discount'			=> 0,
				'coupon'			=> '',
				'index'				=> 0,
				'url_link'			=> $_data['url_link'],
				'image_link'		=> $_data['image_link'],
				'item_price'		=> $_data['item_price'],
				'tax_class_id'		=> $_data['tax_class_id'],
				'ecproducts'		=>	(isset($_data['ecproducts']) ? $_data['ecproducts'] : []),
			];

		}

	} else {
		if (isset($_data['ecproducts'])) {
			
			$GLOBALS['tm'] = [
					'type'			=>	'listing',
					'products'		=>	$_data['ecproducts'],
					'listname'			=>	$_data['listname'],
					'catname'			=>	$_data['catname'],
					'brandname'			=>	$_data['brandname'],
					'search'			=>  $_data['search'],
				
			];
			
			if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
				if(substr(VERSION,0,1)=='1' ) {
					$this->data['tmdata'] = $this->gtm->prepareProducts($GLOBALS['tm']);
					$this->data['xhr'] = true;
				} else {
					$data['tmdata'] = $this->gtm->prepareProducts($GLOBALS['tm']);
					$data['xhr'] = true;
				}
			} 
		}
	}
}
?>