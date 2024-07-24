<?php
class ControllerProductSizechart extends Controller {
	public function index() {
		$this->load->model('catalog/sizechart');
		
		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}
		
		$this->load->model('catalog/sizechart');
		$sizechart_info = $this->model_catalog_sizechart->getSizeChartProduct($product_id);
		if(!$sizechart_info) {
			$sizechart_info = $this->model_catalog_sizechart->getSizeChartCategory($product_id);
		}
		
		if($sizechart_info) {
			$data['sizechart_display'] = $sizechart_info['display'];
			$data['sizechart_title'] = $sizechart_info['title'];
			$data['sizechart_rows'] = (!empty($sizechart_info['sizechart'])) ? unserialize($sizechart_info['sizechart']) : array();
			$data['sizechart_description'] = html_entity_decode($sizechart_info['description'], ENT_QUOTES, 'UTF-8');
		}else{
			$data['sizechart_display'] = '';
			$data['sizechart_title'] = '';
			$data['sizechart_rows'] = array();
			$data['sizechart_description'] = '';
		}

		return $this->load->view('product/sizechart', $data);
		
	}
	
	public function popup() {	
		$this->load->model('catalog/sizechart');
		
		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}
		
		$this->load->model('catalog/sizechart');
		$sizechart_info = $this->model_catalog_sizechart->getSizeChartProduct($product_id);
		if(!$sizechart_info) {
			$sizechart_info = $this->model_catalog_sizechart->getSizeChartCategory($product_id);
		}
		
		if($sizechart_info) {
			$data['sizechart_display'] = $sizechart_info['display'];
			$data['sizechart_title'] = $sizechart_info['title'];
			$data['sizechart_rows'] = (!empty($sizechart_info['sizechart'])) ? unserialize($sizechart_info['sizechart']) : array();
			$data['sizechart_description'] = html_entity_decode($sizechart_info['description'], ENT_QUOTES, 'UTF-8');
		}else{
			$data['sizechart_display'] = '';
			$data['sizechart_title'] = '';
			$data['sizechart_rows'] = array();
			$data['sizechart_description'] = '';
		}
		
		return $this->load->view('product/sizechart_popup', $data);
		
	}
}