<?php
class ControllerSaleWfp extends Controller {
	private $error = array();
	
	public function __construct($registry) {
		parent::__construct($registry);
		
		require_once DIR_SYSTEM . 'library/wfp/wayforpay.php';
		
		$this->load->model('extension/payment/wfp');
		
		$this->load->language('sale/wfp');
		
		if($this->config->get('payment_wfp_mode') == 'test') {
			$this->merchant_account = 'test_merch_n1';
			$this->secretkey = 'flk3409refn54t54t*FNJRET';
		} else {
			$this->merchant_account = $this->config->get('payment_wfp_merchant_account');
			$this->secretkey = $this->config->get('payment_wfp_secret_key');
		}
	}

	public function index() {
		$this->document->setTitle($this->language->get('heading_title'));

		$this->getList();
	}
	
	protected function getList() {
		if (isset($this->request->get['filter_order_id'])) {
			$filter_order_id = $this->request->get['filter_order_id'];
		} else {
			$filter_order_id = null;
		}

		if (isset($this->request->get['filter_transaction'])) {
			$filter_transaction = $this->request->get['filter_transaction'];
		} else {
			$filter_transaction = null;
		}

		if (isset($this->request->get['filter_order_status'])) {
			$filter_order_status = $this->request->get['filter_order_status'];
		} else {
			$filter_order_status = null;
		}

		if (isset($this->request->get['filter_total'])) {
			$filter_total = $this->request->get['filter_total'];
		} else {
			$filter_total = null;
		}

		if (isset($this->request->get['filter_date_added'])) {
			$filter_date_added = $this->request->get['filter_date_added'];
		} else {
			$filter_date_added = null;
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$filter_date_modified = $this->request->get['filter_date_modified'];
		} else {
			$filter_date_modified = null;
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'o.order_id';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_transaction'])) {
			$url .= '&filter_transaction=' . urlencode(html_entity_decode($this->request->get['filter_transaction'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_order_status'])) {
			$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
		}

		if (isset($this->request->get['filter_total'])) {
			$url .= '&filter_total=' . $this->request->get['filter_total'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('sale/wfp', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);
		
		$data['order_statuses'] = array();
		
		$order_statuses = array('expired', 'declined', 'refunded', 'approved', 'waitingauthcomplete', 'voided', 'inprocessing'); 
		
		foreach($order_statuses as $status) {
			$data['order_statuses'][] = array(
				'order_status_id'	=> $status,
				'name'				=> $this->language->get('text_list_status_' . $status)
			);
		}

		$data['operations'] = array();

		$filter_data = array(
			'filter_order_id'      => $filter_order_id,
			'filter_order_status'  => $filter_order_status,
			'filter_total'         => $filter_total,
			'filter_transaction'   => $filter_transaction,
			'filter_date_added'    => $filter_date_added,
			'filter_date_modified' => $filter_date_modified,
			'sort'                 => $sort,
			'order'                => $order,
			'start'                => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'                => $this->config->get('config_limit_admin')
		);

		$operation_total = $this->model_extension_payment_wfp->getTotalOperation($filter_data); 

		$results = $this->model_extension_payment_wfp->getOperation($filter_data);

		foreach ($results as $result) {
			$order_ids = explode('#', $result['orderReference']);
			
			if(!empty($order_ids[0])) {
				$order_id = $order_ids[0];
			} else {
				$order_id = false;
			}
			
			$data['operations'][] = array(
				'wfp_id'     	=> $result['wfp_id'],
				'order_id'		=> $order_id,
				'orderReference'=> $result['orderReference'],
				'sort'      	=> $sort,
				'order'      	=> $order,
				'status'      	=> $this->language->get('text_list_status_' . strtolower($result['transactionStatus'])),
				'amount'      	=> number_format($result['amount'], 2, '.', '') . ' ' . $result['currency'],
				'create_date'   => date($this->language->get('date_format_short'), strtotime($result['createdDate'])),
				'end_date'      => ($result['processingDate'] != '0000-00-00 00:00:00') ? date($this->language->get('date_format_short'), strtotime($result['processingDate'])) : ''
			);
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_list'] = $this->language->get('text_list');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_loading'] = $this->language->get('text_loading');
		$data['text_info_transaction'] = $this->language->get('text_info_transaction');

		$data['column_order_id'] = $this->language->get('column_order_id');
		$data['column_pay_id'] = $this->language->get('column_pay_id');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_total'] = $this->language->get('column_total');
		$data['column_date_added'] = $this->language->get('column_date_added');
		$data['column_date_modified'] = $this->language->get('column_date_modified');
		$data['column_action'] = $this->language->get('column_action');

		$data['entry_order_id'] = $this->language->get('entry_order_id');
		$data['entry_transaction'] = $this->language->get('entry_transaction');
		$data['entry_order_status'] = $this->language->get('entry_order_status');
		$data['entry_total'] = $this->language->get('entry_total');
		$data['entry_date_added'] = $this->language->get('entry_date_added');
		$data['entry_date_modified'] = $this->language->get('entry_date_modified');
		$data['entry_amount'] = $this->language->get('entry_amount');

		$data['button_filter'] = $this->language->get('button_filter');
		$data['button_view_pay'] = $this->language->get('button_view_pay');
		$data['button_load_list'] = $this->language->get('button_load_list');
		$data['button_apply'] = $this->language->get('button_apply');

		$data['today_date'] = date('Y-m-d HH:mm:ss', strtotime('today midnight'));
		$data['min_date'] = date('Y-m-d H:m:s', time() - (86400 * 31));

		$data['autoload'] = $this->config->get('lqp_request_transaction');
		
		$data['user_token'] = $this->session->data['user_token'];
		
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}
		
		$first_load_date = $this->config->get('wfps_last_date_start') ? date($this->language->get('date_format_short'), strtotime($this->config->get('wfps_last_date_start'))) : '';
		$last_load_date = $this->config->get('wfps_last_date_end') ? date($this->language->get('date_format_short'), strtotime($this->config->get('wfps_last_date_end'))) : '';
		
		if ($first_load_date && $last_load_date) {
			$data['alert_info'] = sprintf($this->language->get('last_load_data'), $first_load_date, $last_load_date);
		} else {
			$data['alert_info'] = '';
		}

		$url = '';

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_transaction'])) {
			$url .= '&filter_transaction=' . urlencode(html_entity_decode($this->request->get['filter_transaction'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_order_status'])) {
			$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
		}

		if (isset($this->request->get['filter_total'])) {
			$url .= '&filter_total=' . $this->request->get['filter_total'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_order'] = $this->url->link('sale/wfp', 'user_token=' . $this->session->data['user_token'] . '&sort=order_id' . $url, true);
		$data['sort_payment_id'] = $this->url->link('sale/wfp', 'user_token=' . $this->session->data['user_token'] . '&sort=payment_id' . $url, true);
		$data['sort_status'] = $this->url->link('sale/wfp', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, true);
		$data['sort_total'] = $this->url->link('sale/wfp', 'user_token=' . $this->session->data['user_token'] . '&sort=amount' . $url, true);
		$data['sort_date_added'] = $this->url->link('sale/wfp', 'user_token=' . $this->session->data['user_token'] . '&sort=create_date' . $url, true);
		$data['sort_date_modified'] = $this->url->link('sale/wfp', 'user_token=' . $this->session->data['user_token'] . '&sort=end_date' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_order_id'])) {
			$url .= '&filter_order_id=' . $this->request->get['filter_order_id'];
		}

		if (isset($this->request->get['filter_transaction'])) {
			$url .= '&filter_transaction=' . urlencode(html_entity_decode($this->request->get['filter_transaction'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_order_status'])) {
			$url .= '&filter_order_status=' . $this->request->get['filter_order_status'];
		}

		if (isset($this->request->get['filter_total'])) {
			$url .= '&filter_total=' . $this->request->get['filter_total'];
		}

		if (isset($this->request->get['filter_date_added'])) {
			$url .= '&filter_date_added=' . $this->request->get['filter_date_added'];
		}

		if (isset($this->request->get['filter_date_modified'])) {
			$url .= '&filter_date_modified=' . $this->request->get['filter_date_modified'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $operation_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('sale/wfp', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($operation_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($operation_total - $this->config->get('config_limit_admin'))) ? $operation_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $operation_total, ceil($operation_total / $this->config->get('config_limit_admin')));

		$data['filter_order_id'] = $filter_order_id;
		$data['filter_transaction'] = $filter_transaction;
		$data['filter_order_status'] = $filter_order_status;
		$data['filter_total'] = $filter_total;
		$data['filter_date_added'] = $filter_date_added;
		$data['filter_date_modified'] = $filter_date_modified;

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('sale/wfp_list', $data));
	}
	
	public function getApiInfo() {		
		$json = array();
		$apis_data = array();
		
		//Тут дата в гет параметрах, если нету - то за сегодня
		if(isset($this->request->get['date_start'])) {
			$date_start = strtotime($this->request->get['date_start']);
			$date_load_start = $this->request->get['date_start'];
		} else {
			$date_start = strtotime("now");
			$date_load_start = $date_start;
		}		
		
		if(isset($this->request->get['date_end'])) {
			$date_end = strtotime($this->request->get['date_end']);
			$date_load_end = $this->request->get['date_end'];
		} else {
			$date_end = strtotime("now");
			$date_load_end = $date_end;
		}
		
		$last_load = array(
			'wfps_last_date_start'	=> $date_load_start,
			'wfps_last_date_end'		=> $date_load_end
		);
		
		$this->load->model('setting/setting');

        $this->model_setting_setting->editSetting('wfps', $last_load);
		
		$payment_wfp_data = array(
			'transactionType' 	=> 'TRANSACTION_LIST',
			'merchantAccount' 	=> $this->merchant_account,
			'apiVersion'    	=> 2,
			'dateBegin' 		=> $date_start,
			'dateEnd'   		=> $date_end 
		);
		
		$wfp = new WayForPay();
		$wfp->setSecretKey($this->secretkey);
		
		$result_data = $wfp->getTransactionList($payment_wfp_data);
		
		// Log
		if($this->config->get('payment_wfp_status_log')) {			
			$log = new Log('wfp.log');
			$log->write('--------- Отримання списку транзакцій за дату: ПОЧАТОК ---------');
			$log->write($result_data);
			$log->write('--------- Отримання списку транзакцій за дату: КІНЕЦЬ ---------');
		}
			
		if($result_data['reason'] == 'Ok' && $result_data['reasonCode'] == '1100') {
				
			if($result_data['transactionList']) {
				foreach($result_data['transactionList'] as $item) {
					$order_ids = explode('#', $item['orderReference']);
			
					if(!empty($order_ids[0])) {
						$order_id = $order_ids[0];
					} else {
						$order_id = $item['orderReference'];
					}
					
					$apis_data[$order_id] = array(
						'transactionType'		=> $item['transactionType'],
						'orderReference'		=> $item['orderReference'],
						'order_id'				=> $order_id,
						'createdDate'			=> date('Y-m-d H:i:s', $item['createdDate']),
						'amount'				=> $item['amount'],
						'currency'				=> $item['currency'],
						'baseAmount'			=> $item['baseAmount'],
						'baseCurrency'			=> $item['baseCurrency'],
						'transactionStatus'		=> $item['transactionStatus'],
						'processingDate'		=> date('Y-m-d H:i:s', $item['processingDate']),
						'reasonCode'			=> $item['reasonCode'],
						'reason'				=> $item['reason'], 
						'settlementDate'		=> !empty($item['settlementDate']) ? date('Y-m-d H:i:s', $item['settlementDate']) : '',
						'settlementReference'	=> $item['settlementReference'],
						'email'					=> $item['email'],
						'phone'					=> $item['phone'],
						'paymentSystem'			=> $item['paymentSystem'],
						'cardPan'				=> $item['cardPan'],
						'cardType'				=> $item['cardType'],
						'issuerBankCountry'		=> $item['issuerBankCountry'],
						'issuerBankName'		=> $item['issuerBankName'],
						'fee'					=> $item['fee'],
						'clientName'			=> $item['clientName'],
						'clientPhone'			=> $item['clientPhone'],
						'clientEmail'			=> $item['clientEmail'],
						'clientComment'			=> $item['clientComment'],
						'prroLink'				=> $item['prroLink'],
						'prroNumber'			=> $item['prroNumber'],
					);
				}				
			}
		}
	
		$write = 0;
		
		if($apis_data) {
			$write = $this->model_extension_payment_wfp->writeApisData($apis_data);
		} else {
			$json['error'] = $this->language->get('text_no_data_apis');
		}
		
		if(!isset($json['error'])) {
			$this->session->data['success'] = sprintf($this->language->get('text_data_apis_load'), $write);
			$json['success'] = true;
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function getPayInfo() {
		
		$data['text_info_payment_id'] = $this->language->get('text_info_payment_id');
		$data['text_order_id'] = $this->language->get('text_order_id');
		$data['text_info_status'] = $this->language->get('text_info_status');
		$data['text_info_currency'] = $this->language->get('text_info_currency');
		$data['text_info_paytype'] = $this->language->get('text_info_paytype');
		$data['text_info_sender_phone'] = $this->language->get('text_info_sender_phone');
		$data['text_info_email'] = $this->language->get('text_info_email');
		$data['text_empty'] = $this->language->get('text_empty');
		$data['text_info_order_id'] = $this->language->get('text_info_order_id');
		$data['text_info_create_date'] = $this->language->get('text_info_create_date');
		$data['text_info_amount'] = $this->language->get('text_info_amount');
		$data['text_view_order'] = $this->language->get('text_view_order');
		$data['text_info_end_date'] = $this->language->get('text_info_end_date');
		$data['text_apply_pay'] = $this->language->get('text_apply_pay');
		$data['text_cancel_pay'] = $this->language->get('text_cancel_pay');
		$data['text_write_off'] = $this->language->get('text_write_off');
		
		$data['user_token'] = $this->session->data['user_token'];
		
		$data['status'] = false;
		$data['result'] = array();
		
		if(isset($this->request->get['tid'])) {
			
			$invoice_info = $this->model_extension_payment_wfp->getInvoiceByOrderId($this->request->get['tid']);
			
			if($invoice_info) {
				$this->request->get['tid'] = $invoice_info['orderReference'];
			}
			
			$wfp = new WayForPay();
			$wfp->setSecretKey($this->secretkey);
			
			$payment_wfp_data = array(
				'transactionType' 	=> 'CHECK_STATUS',
				'merchantAccount' 	=> $this->merchant_account,
				'orderReference'    => $this->request->get['tid'],
				'apiVersion' 		=> 2
			);
			
			$result_data = $wfp->getTransactionInfo($payment_wfp_data);
			
			// Log
			if($this->config->get('payment_wfp_status_log')) {			
				$log = new Log('wfp.log');
				$log->write('--------- Отримання інформації по транзакції: ПОЧАТОК ---------');
				$log->write($result_data);
				$log->write('--------- Отримання інформації по транзакції: КІНЕЦЬ ---------');
			}
				
			if($result_data['reason'] == 'Ok' && $result_data['reasonCode'] == '1100') {
				$order_ids = explode('#', $result_data['orderReference']);
		
				if(!empty($order_ids[0])) {
					$order_id = $order_ids[0];
				} else {
					$order_id = false;
				}
				
				$this->load->model('sale/order');
				
				$order_info = $this->model_sale_order->getOrder($order_id);
			
				if($order_info) {				
					$order_link = 'index.php?route=sale/order/info&user_token=' . $this->session->data['user_token'] . '&order_id=' . $order_id;
				} else {
					$order_link = '';
				}
				
				$data['result'] = array(
					'merchantAccount'	=> $result_data['merchantAccount'],
					'reason'			=> $result_data['reason'],
					'reasonCode'		=> $result_data['reasonCode'],
					'order_id'			=> $order_id,
					'orderReference'	=> $result_data['orderReference'],
					'amount'			=> $result_data['amount'],
					'currency'			=> $result_data['currency'],
					'create_date'		=> date('Y-m-d H:i:s', $result_data['createdDate']),
					'processing_date'	=> date('Y-m-d H:i:s', $result_data['processingDate']),
					'settlement_date'	=> !empty($result_data['settlementDate']) ? date('Y-m-d H:i:s', $result_data['settlementDate']) : '',
					'paytype'			=> $result_data['issuerBankCountry'] . ', ' . $result_data['issuerBankName'],
					'refundAmount'		=> $result_data['refundAmount'],
					//'end_date'			=> !empty($result_data['settlementDate']) ? date('Y-m-d H:i:s', $result_data['settlementDate']) : '',
					'end_date'			=> $result_data['transactionStatus'] == 'WaitingAuthComplete' ? true : false,
					'settlementAmount'	=> $result_data['settlementAmount'],
					'fee'				=> $result_data['fee'],
					'clientName'		=> $result_data['clientName'],
					'sender_phone'		=> $result_data['clientPhone'],
					'email'				=> $result_data['clientEmail'],
					'clientComment'		=> $result_data['clientComment'],
					'products'			=> $result_data['products'],
					'order_link'		=> $order_link,
					'status'			=> $this->language->get('text_list_status_' . strtolower($result_data['transactionStatus']))
				);
			}
		}
		
		$this->response->setOutput($this->load->view('sale/wfp_info', $data));
	}
	
	public function successPay() {
		$json = array();
		
		if(isset($this->request->get['amount']) && isset($this->request->get['id'])) {
			$wfp = new WayForPay();
			$wfp->setSecretKey($this->secretkey);
			
			$transaction_info = $this->model_extension_payment_wfp->getPayInfoByOreference($this->request->get['id']);
			
			if(!$transaction_info) {
				$this->load->model('sale/order');
				
				$order_info = $this->model_sale_order->getOrder($this->request->get['id']);

				if($order_info) {
					$transaction_info['currency'] = $order_info['currency_code'];
				}
			}
			
			$payment_wfp_data = array(
				'transactionType' 	=> 'SETTLE',
				'merchantAccount' 	=> $this->merchant_account,
				'orderReference'    => $this->request->get['id'],
				'amount'   		    => $this->request->get['amount'],
				'currency'   		=> $transaction_info['currency'],
				'apiVersion' 		=> 1
			);
			
			$result_data = $wfp->transactionSettle($payment_wfp_data);
			
			// Log
			if($this->config->get('payment_wfp_status_log')) {			
				$log = new Log('wfp.log');
				$log->write('--------- Списання коштів: ПОЧАТОК ---------');
				$log->write($result_data);
				$log->write('--------- Списання коштів: КІНЕЦЬ ---------');
			}
			
			if($result_data['reason'] == 'Ok' && $result_data['reasonCode'] == '1100') {
				$this->model_extension_payment_wfp->setSettleInfo('Approved', $this->request->get['id'], date('Y-m-d H:i:s', $result_data['processingDate']));
				
				$json['success'] = $this->language->get('text_settle_success');
			} else {
				$json['error'] = sprintf($this->language->get('text_settle_error'), $result_data['reason']);
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function refundPay() {
		$json = array();
		
		if(isset($this->request->get['amount']) && isset($this->request->get['id'])) {
			$wfp = new WayForPay();
			$wfp->setSecretKey($this->secretkey);
			
			$transaction_info = $this->model_extension_payment_wfp->getPayInfoByOreference($this->request->get['id']);
			
			if(!$transaction_info) {
				$this->load->model('sale/order');
				
				$order_info = $this->model_sale_order->getOrder($this->request->get['id']);

				if($order_info) {
					$transaction_info['currency'] = $order_info['currency_code'];
				}
			}
			
			$payment_wfp_data = array(
				'transactionType' 	=> 'REFUND',
				'merchantAccount' 	=> $this->merchant_account,
				'orderReference'    => $this->request->get['id'],
				'amount'   		    => $this->request->get['amount'],
				'currency'   		=> $transaction_info['currency'],
				'comment'   		=> 'Товар відсутній',
				'apiVersion' 		=> 1
			);
			
			$result_data = $wfp->transactionRefund($payment_wfp_data);
			
			// Log
			if($this->config->get('payment_wfp_status_log')) {			
				$log = new Log('wfp.log');
				$log->write('--------- Повернення коштів: ПОЧАТОК ---------');
				$log->write($result_data);
				$log->write('--------- Повернення коштів: КІНЕЦЬ ---------');
			}
			
			if($result_data['reason'] == 'Ok' && $result_data['reasonCode'] == '1100') {
				$this->model_extension_payment_wfp->setSettleInfo('Voided', $this->request->get['id'], date('Y-m-d H:i:s'));
				
				$json['success'] = $this->language->get('text_refund_success');
			} else {
				$json['error'] = sprintf($this->language->get('text_refund_error'), $result_data['reason']);
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function getModalInvoice() {
		$data['text_info_payment_id'] = $this->language->get('text_info_payment_id');
		$data['text_product_none'] = $this->language->get('text_product_none');
		$data['text_product_heading'] = $this->language->get('text_product_heading');
		$data['text_info_invoice_order'] = $this->language->get('text_info_invoice_order');
		$data['text_total'] = $this->language->get('text_total');
		
		$data['entry_product_name'] = $this->language->get('entry_product_name');
		$data['entry_product_description'] = $this->language->get('entry_product_description');
		$data['entry_product_quantity'] = $this->language->get('entry_product_quantity');
		$data['entry_product_price'] = $this->language->get('entry_product_price');
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_email'] = $this->language->get('entry_email');
		$data['entry_language'] = $this->language->get('entry_language');
		$data['entry_last_name'] = $this->language->get('entry_last_name');
		$data['entry_telephone'] = $this->language->get('entry_telephone');
		$data['entry_currency'] = $this->language->get('entry_currency');
		$data['entry_chanel_notify'] = $this->language->get('entry_chanel_notify');
		
		$data['button_seend'] = $this->language->get('button_seend');
		$data['button_product_add'] = $this->language->get('button_product_add');
		$data['button_remove'] = $this->language->get('button_remove');
		
		$data['user_token'] = $this->session->data['user_token'];
		
		$data['languages'] = array('UA', 'RU', 'EN');
		$data['currencies'] = array('UAH', 'USD', 'EUR');
		
		$data['notifies'] = array(
			'all' 	=> $this->language->get('text_notify_all'), 
			'bot' 	=> $this->language->get('text_notify_bot'),
			'email'	=> $this->language->get('text_notify_email'), 
			'sms'	=> $this->language->get('text_notify_sms')
		);
		
		$data['order_products'] = array();

		if(!empty($this->request->get['order_id'])) {
			$payment_wfp_data = array();
			
			$this->load->model('sale/order');
		
			$order_info = $this->model_sale_order->getOrder($this->request->get['order_id']);
			$order_products = $this->model_sale_order->getOrderProducts($this->request->get['order_id']);
	
			$data['first_name'] = $order_info['firstname'];
			$data['last_name'] = $order_info['lastname'];
			$data['email'] = $order_info['email'];
			$data['telephone'] = $this->preparePhone($order_info['telephone']);
			$data['currency_code'] = in_array($order_info['currency_code'], $data['currencies']) ? $order_info['currency_code'] : 'UAH';
			$data['order_total'] = $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false);
			
			foreach($order_products as $product) {
				$data['order_products'][] = array(
					'name'			=> $product['name'],
					'description'	=> $product['name'],
					'quantity'		=> $product['quantity'],
					'price'			=> $this->currency->format($product['price'], $order_info['currency_code'], $order_info['currency_value'], false),
				);
			}
			
		} else {
			$payment_wfp_data = array();
			
			$data['first_name'] = '';
			$data['last_name'] = '';
			$data['email'] = '';
			$data['telephone'] = '';
			$data['currency_code'] = 'UAH';
			$data['order_total'] = 0;
			
			
		}
		
		$this->response->setOutput($this->load->view('sale/wfp_invoive', $data));
	}
	
	public function getInvoice() {
		$this->load->model('sale/order');
	
		$json = array();
		
		if((!empty($this->request->get['order_id']) || !empty($this->request->post['telephone'])) && !empty($this->request->post)) {
			
			if ((utf8_strlen($this->request->post['first_name']) < 3) || (utf8_strlen($this->request->post['first_name']) > 25)) {
				$json['error']['first_name'] = $this->language->get('error_first_name');
			}	
			
			if ((utf8_strlen($this->request->post['last_name']) < 3) || (utf8_strlen($this->request->post['last_name']) > 25)) {
				$json['error']['last_name'] = $this->language->get('error_last_name');
			}	
			
			if ((utf8_strlen($this->request->post['telephone']) < 10) || (utf8_strlen($this->request->post['telephone']) > 12)) {
				$json['error']['telephone'] = $this->language->get('error_telephone');
			}
			
			if (!empty($this->request->post['total']) && $this->request->post['total'] > 0) {
				//$json['error']['total'] = $this->language->get('error_total');
			}
			
			if ((utf8_strlen($this->request->post['email']) > 96) || !filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
				$json['error']['email'] = $this->language->get('error_email');
			}
				
			if(!isset($json['error'])) {
				$order_id = !empty($this->request->get['order_id']) ? $this->request->get['order_id'] : $this->request->post['telephone'];
				
				$fields = array();
			
				$products = array();
				$products_prices = array();
				$products_count = array();
				
				$currencies = array('UAH', 'USD', 'EUR');
				$languages = array('UA', 'RU', 'EN');
				
				$currency = in_array($this->request->post['currency'], $currencies) ? $this->request->post['currency'] : 'UAH';
				
				foreach($this->request->post['products'] as $product) {
					$products[] = str_replace(["'", '"', '&#39;', '&'], '', htmlspecialchars_decode($product['name']));
					$products_prices[] = $this->currency->format($this->request->post['total'], $currency, $this->currency->getValue($currency), false);
					$products_count[] = intval(round($product['quantity'])); 
				}
				
				$orderReference = $order_id . '#' . time();
				
				$payment_wfp_data = array(
					'transactionType' 			=> 'CREATE_INVOICE',
					'merchantAccount'			=> $this->merchant_account,
					'merchantDomainName'		=> HTTPS_SERVER,
					'merchantTransactionType'	=> $this->config->get('payment_wfp_type_transaction'),
					'apiVersion'				=> 1,
					'orderReference'			=> $orderReference,
					'orderDate'					=> time(),
					'amount'					=> $this->currency->format($this->request->post['total'], $currency, $this->currency->getValue($currency), false),
					'currency'					=> $currency,
					'productName'				=> $products,
					'productPrice'				=> $products_prices,
					'productCount'				=> $products_count,
					'clientPhone'				=> $this->preparePhone($this->request->post['telephone']),
					'clientFirstName'			=> $this->request->post['first_name'],
					'clientLastName'			=> $this->request->post['last_name'],
					'clientEmail'				=> $this->request->post['email'],
					'orderTimeout'				=> 172800,
					'language'					=> in_array($this->request->post['language'], $languages) ? $this->request->post['language'] : 'UA',
					'serviceUrl'				=> $this->url->link('extension/payment/wfp/callback', '', 'SSL')
				); 
				
				$wfp = new WayForPay();
				$wfp->setSecretKey($this->secretkey);
		
				$result_data = $wfp->createInvoice($payment_wfp_data);
		
				// Log
				if($this->config->get('payment_wfp_status_log')) {			
					$log = new Log('wfp.log');
					$log->write('--------- Генерація інвойсу: ПОЧАТОК ---------');
					$log->write($result_data);
					$log->write('--------- Генерація інвойсу: КІНЕЦЬ ---------');
				}
				
				if(isset($result_data['reason']) && $result_data['reasonCode'] == 1100) {
					$json['success'] = sprintf($this->language->get('text_invoice_success'), $result_data['invoiceUrl']);
					$json['date_added'] = date("Y-m-d H:m:s", strtotime("+2 days"));
					
					$this->model_extension_payment_wfp->setInvoice($order_id, $orderReference, $result_data); 
				} else {
					$json['error'] = sprintf($this->language->get('text_invoice_error'), $result_data['reason']);
				}
			}
			
		} else {
			$json['error']['telephone'] = $this->language->get('error_telephone');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function deleteInvoice() {
		$json = array();
		
		if(!empty($this->request->get['order_id'])) {
			$invoice_info = $this->model_extension_payment_wfp->getInvoiceByOrderId($this->request->get['order_id']);
			
			if($invoice_info) {
				$wfp = new WayForPay();
				$wfp->setSecretKey($this->secretkey);
				
				$payment_wfp_data = array(
					'transactionType' 		=> 'REMOVE_INVOICE',
					'merchantAccount'		=> $this->merchant_account,
					'orderReference'		=> $this->request->get['order_id'],
					'apiVersion'			=> 1
				);
				
				$result_data = $wfp->deleteInvoice($payment_wfp_data);
				
				// Log
				if($this->config->get('payment_wfp_status_log')) {			
					$log = new Log('wfp.log');
					$log->write('--------- Видалення інвойсу: ПОЧАТОК ---------');
					$log->write($result_data);
					$log->write('--------- Видалення інвойсу: КІНЕЦЬ ---------');
				}
				
				if(isset($result_data['reason']) && $result_data['reasonCode'] == 1100) {
					$json['success'] = $this->language->get('text_invoice_delete_success');
					
					$this->model_extension_payment_wfp->deleteInvoice($this->request->get['order_id']);
				} else {
					$json['error'] = $this->language->get('text_invoice_delete_error');
				}
			} else {
				$json['error'] = $this->language->get('text_invoice_delete_error');
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
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