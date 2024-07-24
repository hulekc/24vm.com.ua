<?php
/* v:10.7 19-JAN-2024*/
if (!isset($tagmanager)) {
    $tagmanager = $this->gtm->settings;
}
$pprice = 0;
$fprice = 0;
$item_price = 0;
$value = $row;

if (isset($value)) {

    if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
        $item_price = $value['price'];
    }

    if (!is_null($value['special']) && (float)$value['special'] >= 0) {
        $item_price = $value['special'];
    }

    $pprice = $this->currency->format($this->tax->calculate($item_price, $value['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'],'',false);
    $pprice = number_format((float)$pprice, 2, '.', '');
    $tax_class_id = $value['tax_class_id'];
    $sku = (isset($value['sku']) ? $value['sku'] : $value['product_id']);
	$gtin = (isset($value['ean']) ? $value['ean'] : $value['product_id']);
	$model = (isset($value['model']) ? $value['model'] : $value['product_id']);
	$pid = $this->gtm->tagmangerPmap($model, $sku, $value['product_id']);
	$brand = (isset($value['manufacturer']) ? $this->gtm->cleanStr($value['manufacturer']) : $this->gtm->getProductBrandName($value['product_id']));
	$title = $this->gtm->tagmangerPtitle($value['name'], $brand, $model, $value['product_id']);
		
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
}

if (!isset($i)) {
    $i = 0;
}

$i++;

$result[$row['product_id']] = array(
    'pid'      => (isset($pid) ? $pid : ''),
    'title'    => (isset($title) ? $title : ''),
    'brand'    => (isset($brand) ? $brand : ''),
    'sku'	   => (isset($sku) ? $sku : ''),
    'gtin'	   => (isset($gtin) ? $gtin : ''),
    'category' => (isset($category_name) ? $category_name : ''),
    'pprice'   => (isset($pprice) ? number_format((float)$pprice, 2, '.', '') : '0'),
    'position' => (isset($i) ? $i : '0'),
    'index'    => (isset($i) ? $i-1 : '0'),
    );
    
?>