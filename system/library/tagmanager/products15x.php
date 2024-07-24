<?php
/* v:10.7 19-JAN-2024*/
if (isset($tagmanager['code']) && $tagmanager['status']=='1') {
	if (!isset($this->data['listname'])) {
		$this->data['listname']='';
	}
	if(isset($result) && isset($result['price'])) {
		$value = $result;
	} elseif (isset($product_info) && isset($product_info['price'])) {
		$value = $product_info;
	} elseif (isset($product) && isset($product['price'])) {
		$value = $product;
	} 
	if (isset($value)) {
		$pprice = 0.00;
		$fprice = 0.00;
		$org_price = 0.00;
		$discount_value = 0;
		$item_price = 0;

		$sku = (isset($value['sku']) ? $value['sku'] : $value['product_id']);
		$gtin = (isset($value['ean']) ? $value['ean'] : $value['product_id']);
		$model = (isset($value['model']) ? $value['model'] : $value['product_id']);
		$pid = $this->gtm->tagmangerPmap($model, $sku, $value['product_id']);
		$brand = (isset($value['manufacturer']) ? $this->gtm->cleanStr($value['manufacturer']) : $this->gtm->getProductBrandName($value['product_id']));
		$title = $this->gtm->tagmangerPtitle($value['name'], $brand, $model, $value['product_id']);

		if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
			$item_price = $value['price'];
		}
		
		if ((float)$value['special']) {
			$item_price = $value['special'];
		}

		$pprice = $this->currency->format($this->tax->calculate($item_price, $value['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'],'',false);
		$fprice = $this->tax->calculate($item_price, $value['tax_class_id'], $this->config->get('config_tax'));
		
		$cat_data = $this->gtm->getProductCatName($value['product_id'],$tagmanager);
		
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
		
		if(!isset($i)) {
			$i=0;
		}
    	$i++;

    	$this->data['catname'] =  (isset($category_name) ? $category_name : '');
    	$this->data['brandname'] = (isset($brand) ? $brand : '');
    	
    	if ( strtolower($this->data['listname']) == 'search') {
    		$item_list_name = 'Search Results';
    		$item_list_id = 'SR_' . (isset($this->data['search']) ? $this->data['search'] : '');
    	} else {
    		$item_list_name = $item_list_name;
    		$item_list_id = $item_list_id;
    	}

		$this->data['ecproducts'][]=array(
			'id'				=> $pid,
			'name'				=> $title,
			'brand'				=> $brand,
			'category'			=> $category_name,
			'list'				=> $item_list_name,
			'item_list_name'	=> (isset($item_list_name) ? $item_list_name : ''),
			'item_list_id'		=> (isset($item_list_id) ? $item_list_id : ''),
			'item_brand'		=> (isset($brand) ? $brand : ''),
			'item_category'		=> (isset($item_category) ? $item_category : ''),
			'item_category2'	=> (isset($item_category2) ? $item_category2 : ''),
			'item_category3'	=> (isset($item_category3) ? $item_category3 : ''),
			'item_category4'	=> (isset($item_category4) ? $item_category4 : ''),
			'item_category5'	=> (isset($item_category5) ? $item_category5 : ''),	
			'item_variant'		=> '',
			'affiliation'		=> '',
			'discount'			=> (isset($discount) ? number_format((float)$discount, 2, '.', '') : '0'),
			'coupon'			=> '',
			'index'				=> (isset($i) ? $i-1 : '0'),
			'position'			=> (isset($i) ? $i : '0'),
			'currency'			=> $this->session->data['currency'],
			'price'				=> number_format((float)$pprice, 2, '.', ''),
			'fprice'			=> number_format((float)$fprice, 2, '.', ''),
			'item_price'		=> $item_price,
			'tax_class_id'		=> $value['tax_class_id'],
		);
	} 
}
?>