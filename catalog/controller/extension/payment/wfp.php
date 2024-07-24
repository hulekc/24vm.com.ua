<?php

class ControllerExtensionPaymentWfp extends Controller {
	public function __construct($registry) {
		parent::__construct($registry);
		
		require_once DIR_SYSTEM . 'library/wfp/wayforpay.php';
		
		$this->load->model('extension/payment/wfp');
		
		$this->load->language('extension/payment/wfp');
		
		if($this->config->get('payment_wfp_mode') == 'test') {
			$this->merchant_account = 'test_merch_n1';
			$this->secretkey = 'flk3409refn54t54t*FNJRET';
		} else {
			$this->merchant_account = $this->config->get('payment_wfp_merchant_account');
			$this->secretkey = $this->config->get('payment_wfp_secret_key');
		}
	}
	
	public function index() {
		
		$data['text_loading'] = $this->language->get('text_loading');
		
		$data['button_confirm'] = $this->language->get('button_confirm');
		
		$wfp = new WayForPay();
		$wfp->setSecretKey($this->secretkey);
		
		$order_id = $this->session->data['order_id'];
		
        $order_info = $this->model_extension_payment_wfp->getOrder($order_id);

        $service_url = $this->url->link('extension/payment/wfp/callback', '', 'SSL');
        $return_url = $this->url->link('extension/payment/wfp/success', '', 'SSL');
		
		$currencies = $wfp->getCurrencies();
		
		if(isset($currencies[$order_info['currency_code']])) {
			$currency = $currencies[$order_info['currency_code']];
		} elseif($this->config->get('payment_wfp_pay_cur') != 'UAH') {
			$currency = $this->config->get('payment_wfp_pay_cur');
		} else {
			$currency = $order_info['currency_code'];
		}
		
		$amount = $this->currency->format($order_info['total'], $currency, $this->currency->getValue($currency), false);

        $fields = array(
            'orderReference' 				=> $order_id,  
            'merchantAccount' 				=> $this->merchant_account,
            'orderDate' 					=> strtotime($order_info['date_added']),
            'merchantAuthType' 				=> 'simpleSignature',
            'merchantTransactionType' 		=> $this->config->get('payment_wfp_type_transaction'),
            'merchantDomainName' 			=> $this->request->server['HTTP_HOST'],
            'merchantTransactionSecureType' => 'AUTO',
            'amount' 						=> $amount,
            'currency' 						=> $currency,
            'serviceUrl' 					=> $service_url,
            'returnUrl' 					=> $return_url,
            'language' 						=> $this->config->get('payment_wfp_pay_lang')
        );

        $productNames = array();
        $productQty = array();
        $productPrices = array();
		
        $products = $this->model_extension_payment_wfp->getOrderProducts($order_id);
		    
        foreach ($products as $product) {
            $productNames[] = str_replace(["'", '"', '&#39;', '&'], '', htmlspecialchars_decode($product['name']));
            $productPrices[] = $this->currency->format($product['price'], $currency, $this->currency->getValue($currency), false);
            $productQty[] = intval(round($product['quantity']));
        }

        $fields['productName'] = $productNames;
        $fields['productPrice'] = $productPrices;
        $fields['productCount'] = $productQty;

        $fields['clientFirstName'] = $order_info['firstname'];
        $fields['clientLastName'] = $order_info['lastname'];
        $fields['clientEmail'] = $order_info['email'];
        $fields['clientPhone'] = $this->preparePhone($order_info['telephone']);
        $fields['clientCity'] = $order_info['payment_city'];
        $fields['clientAddress'] = $order_info['payment_address_1'] . ' ' . $order_info['payment_address_2'];
        $fields['clientCountry'] = $order_info['payment_iso_code_3'];

        $fields['merchantSignature'] = $wfp->getRequestSignature($fields);

        $data['fields'] = $fields;
        $data['action'] = $wfp->url;

        $data['continue'] = $this->url->link('checkout/success');
        $data['canceled'] =$this->url->link('checkout/wtf_fail', '', 'SSL');
		
        $data['status_referrer'] = $this->config->get('payment_wfp_status_referrer');
		
		if($this->config->get('payment_wfp_type_pay') == 'referer') {
			return $this->load->view('extension/payment/wfp', $data);
		} else {
			return $this->load->view('extension/payment/wfp_modal', $data);
		}
	}
	
	public function callback() {
		$payment_info = json_decode(file_get_contents("php://input"), true);
	
		// Log
		if($this->config->get('payment_wfp_status_log')) {			
			$log = new Log('wfp.log');
			$log->write('--------- Колбек від платіжки: ПОЧАТОК ---------');
			$log->write($payment_info);
			$log->write('--------- Колбек від платіжки: КІНЕЦЬ ---------');
		}
		
		if(!empty($payment_info['orderReference'])) {
			
			$orderReference = explode('#', $payment_info['orderReference']);
			
			$order_id = !empty($orderReference[0]) ? $orderReference[0] : $payment_info['orderReference'];
			
			$wfp = new WayForPay();
			$wfp->setSecretKey($this->secretkey);
			
			$this->load->model('checkout/order');
			
			$order_info = $this->model_checkout_order->getOrder($order_id);
			
			if($wfp->isPaymentValid($payment_info) && $order_info) {
				if($order_info['order_status_id'] != $this->config->get('payment_wfp_order_success_status_id')) {	
					$this->pushHistory($order_id, $this->config->get('payment_wfp_order_success_status_id'));
				}
			} elseif($order_info) {
				if($order_info['order_status_id'] != $this->config->get('payment_wfp_order_failure_status_id')) {	
					$this->pushHistory($order_id, $this->config->get('payment_wfp_order_failure_status_id'));
				}
			}
			
			echo $wfp->getAnswerToGateWay($payment_info);
		}
	}
	
	public function success() {
		$payment_info = $this->request->post;
		
		// Log
		if($this->config->get('payment_wfp_status_log')) {			
			$log = new Log('wfp.log');
			$log->write('--------- Перехід на Success від платіжки: ПОЧАТОК ---------');
			$log->write($payment_info);
			$log->write('--------- Перехід на Success від платіжки: КІНЕЦЬ ---------');
		}
		
		if($payment_info) {
			$this->load->model('checkout/order');
			
			$order_info = $this->model_checkout_order->getOrder($payment_info['orderReference']);
			
			$wfp = new WayForPay();
			$wfp->setSecretKey($this->secretkey);
			
			if($wfp->isPaymentValid($payment_info) && $order_info) {
				$this->response->redirect($this->url->link('checkout/success', '', 'SSL'));
			} else {
				$this->response->redirect($this->url->link('checkout/wtf_fail', '', 'SSL'));
			}
		}
	}
	
	public function referrer() {
		$order_id = $this->session->data['order_id'];
		
		$this->pushHistory($order_id, $this->config->get('payment_wfp_order_status_id'));
	}
	
	private function pushHistory($order_id, $status) {
		$this->load->model('checkout/order');
        $this->model_checkout_order->addOrderHistory($order_id, $status);
	}
	
	private function preparePhone($phone) {
        $phone = str_replace(array('+', ' ', '(', ')'), array('', '', '', ''), $phone);
		
        if (strlen($phone) == 10) {
            $phone = '38' . $phone;
        } elseif (strlen($phone) == 11) {
            $phone = '3' . $phone;
        }
		
		return $phone;
	}
}