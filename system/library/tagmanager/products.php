<?php
/* v:10.7 05-FEB-2024*/
if (isset($tagmanager['code']) && $tagmanager['status']=='1') {

	if (!isset($data['listname'])) {
		$data['listname']='';
	}
	if(isset($result) && isset($result['price'])) {
		$value = $result;
	} elseif (isset($product_info) && isset($product_info['price'])) {
		$value = $product_info;
	} elseif (isset($product) && isset($product['price'])) {
		$value = $product;
	} 

	if (isset($value) && isset($value['price']) && isset($value['product_id'])) {

		$pprice = 0.00;
		$fprice = 0.00;
		$discount_value = 0;
		$item_price = 0;

		$sku = (isset($value['sku']) ? $value['sku'] : $value['product_id']);
		$gtin = (isset($value['ean']) ? $value['ean'] : $value['product_id']);
		$tmodel = (isset($value['model']) ? $value['model'] : $value['product_id']);
		$pid = $this->gtm->tagmangerPmap($tmodel, $sku, $value['product_id']);
		$brand = (isset($value['manufacturer']) ? $this->gtm->cleanStr($value['manufacturer']) : $this->gtm->getProductBrandName($value['product_id']));
		$title = $this->gtm->tagmangerPtitle($value['name'], $brand, $tmodel, $value['product_id']);

		if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
			$item_price = $value['price'];
		}
		
		if ((float)$value['special']) {
			$item_price = $value['special'];
		}

		$tax_class_id = $value['tax_class_id'];

		$pprice = $this->currency->format($this->tax->calculate($item_price, $value['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'],0,false);
		$fprice = $this->tax->calculate($item_price, $value['tax_class_id'], $this->config->get('config_tax'));
		
		$cat_data = $this->gtm->getProductCatName($value['product_id']);
		
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

		if (!isset($i)) {
			$i=0;
		}
		$i++;
		
    	if ( strtolower($data['listname']) == 'search') {
    		$item_list_name = 'Search Results';
    		$item_list_id = 'SR_' . (isset($data['search']) ? $data['search'] : '');
    	} else {
    		$item_list_name = $item_list_name;
    		$item_list_id = $item_list_id;
    	}

		$data['ecproducts'][] = [
			'id'				=> $pid,
			'name'				=> $title,
			'brand'				=> $brand,
			'category'			=> $category_name,
			'list'				=> $item_list_name,
			'item_list_name'	=> $item_list_name,
			'item_list_id'		=> $item_list_id,
			'item_category'		=> $item_category,
			'item_category2'	=> $item_category2,
			'item_category3'	=> $item_category3,
			'item_category4'	=> $item_category4,
			'item_category5'	=> $item_category5,	
			'item_variant'		=> '',
			'affiliation'		=> '',
			'discount'			=> 0,
			'coupon'			=> '',
			'position'			=> (isset($i) ? $i : '0'),
			'index'				=> (isset($i) ? $i-1 : '0'),
			'price'				=> number_format((float)$pprice, 2, '.', ''),
			'fprice'			=> number_format((float)$fprice, 2, '.', ''),
			'item_price'		=> $item_price,
			'currency'			=> $this->session->data['currency'],
			'tax_class_id'		=> $tax_class_id,
			'model'				=> (isset($tmodel) ? $tmodel : ''),
		];
	} 

	$data['catname'] 	=  $category_name;
    $data['brandname'] 	= $brand;
		
}
?>