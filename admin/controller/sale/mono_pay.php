<?php
class ControllerSaleMonoPay extends Controller {
	private $error = array();
	
	public function __construct($registry) {
		parent::__construct($registry);

		require_once DIR_SYSTEM . 'library/mono_pay/mono_pay.php';
		
		$this->load->model('extension/payment/mono_pay');
		
		$this->load->language('sale/mono_pay');
		
		$this->secretkey = $this->config->get('payment_mono_pay_token');
		$this->currency_code = $this->config->get('payment_mono_pay_pay_cur');
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
			'href' => $this->url->link('sale/mono_pay', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);
		
		$data['order_statuses'] = array();
		
		$order_statuses = array('expired', 'declined', 'refunded', 'approved', 'waitingauthcomplete', 'voided', 'inprocessing'); 
		
		foreach($order_statuses as $status) {
			$data['order_statuses'][] = array(
				'order_status_id'	=> $status,
				'name'				=> $this->language->get('text_list_status_' . $status)
			);
		}
		
		$mono_pay = new MonoPay();
		$mono_pay->setSecretKey($this->secretkey);

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

		$operation_total = $this->model_extension_payment_mono_pay->getTotalOperation($filter_data); 

		$results = $this->model_extension_payment_mono_pay->getOperation($filter_data);

		foreach ($results as $result) {
			$currency = array_search($result['ccy'], $mono_pay->currencies) ? array_search($result['ccy'], $mono_pay->currencies) : '';
			
			$data['operations'][] = array(
				'mono_transaction_list_id'     	=> $result['mono_transaction_list_id'],
				'reference'						=> $result['reference'],
				'invoiceId'						=> $result['invoiceId'],
				'maskedPan'						=> $result['maskedPan'],
				'paymentScheme'					=> $result['paymentScheme'],
				'status'      					=> $this->language->get('text_list_status_' . strtolower($result['status'])),
				'amount'      					=> number_format($result['amount'] / 100, 2, '.', '') . ' ' . $currency,
				'profit'      					=> number_format($result['profit'] / 100, 2, '.', '') . ' ' . $currency,
				'create_date'   				=> date($this->language->get('date_format_short'), strtotime($result['date']))
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
		
		$first_load_date = $this->config->get('mono_pays_last_date_start') ? date($this->language->get('date_format_short'), strtotime($this->config->get('mono_pays_last_date_start'))) : '';
		$last_load_date = $this->config->get('mono_pays_last_date_end') ? date($this->language->get('date_format_short'), strtotime($this->config->get('mono_pays_last_date_end'))) : '';
		
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

		$data['sort_order'] = $this->url->link('sale/mono_pay', 'user_token=' . $this->session->data['user_token'] . '&sort=order_id' . $url, true);
		$data['sort_payment_id'] = $this->url->link('sale/mono_pay', 'user_token=' . $this->session->data['user_token'] . '&sort=payment_id' . $url, true);
		$data['sort_status'] = $this->url->link('sale/mono_pay', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, true);
		$data['sort_total'] = $this->url->link('sale/mono_pay', 'user_token=' . $this->session->data['user_token'] . '&sort=amount' . $url, true);
		$data['sort_date_added'] = $this->url->link('sale/mono_pay', 'user_token=' . $this->session->data['user_token'] . '&sort=create_date' . $url, true);
		$data['sort_date_modified'] = $this->url->link('sale/mono_pay', 'user_token=' . $this->session->data['user_token'] . '&sort=end_date' . $url, true);

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
		$pagination->url = $this->url->link('sale/mono_pay', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

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

		$this->response->setOutput($this->load->view('sale/mono_pay_list', $data));
	}
	
	public function getApiInfo() {		
		$json = array();
		$apis_data = array();
		
		//Тут дата в гет параметрах, если нету - то за сегодня
		if(isset($this->request->get['date_start'])) {
			$date_start = strtotime($this->request->get['date_start']);
		} else {
			$date_start = strtotime("now");
		}		
		
		if(isset($this->request->get['date_end'])) {
			$date_end = strtotime($this->request->get['date_end']);
		} else {
			$date_end = strtotime("now");
		}
		
		$mono_pay = new MonoPay();
		$mono_pay->setSecretKey($this->secretkey);
		$mono_pay->setTypeMethod('GET');
		
		$mono_pay_data = array(
			'api_uri' 	=> 'statement?from=' . $date_start . '&to=' . $date_end
		);
		
		$result_data = $mono_pay->getStatements($mono_pay_data);
		
		// Log
		$this->setLog($result_data, 'Отримання інформації по транзакції');	
				
		if(!empty($result_data['list'])) {
			foreach($result_data['list'] as $item) {				
				$apis_data[$item['reference']] = array(
					'reference'				=> $item['reference'],
					'invoiceId'				=> $item['invoiceId'],
					'status'				=> $item['status'],
					'maskedPan'				=> $item['maskedPan'],
					'date'					=> date('Y-m-d H:i:s', strtotime($item['date'])),
					'paymentScheme'			=> $item['paymentScheme'],
					'amount'				=> $item['amount'],
					'profit'				=> $item['profit'],
					'ccy'					=> $item['ccy'],
					'cancel_amount'			=> isset($item['cancelList'][0]['amount']) ? $item['cancelList'][0]['amount'] : 0,
				);
			}

			$last_load = array(
				'mono_pays_last_date_start'	=> date('Y-m-d H:i:s', $date_start),
				'mono_pays_last_date_end'	=> date('Y-m-d H:i:s', $date_end)
			);
			
			$this->load->model('setting/setting');

			$this->model_setting_setting->editSetting('mono_pays', $last_load);
		}
	
		$write = 0;
		
		if($apis_data) {			
			$write = $this->model_extension_payment_mono_pay->writeApisData($apis_data);
		} else {
			if(isset($result_data['errText'])) {
				$json['error'] = sprintf($this->language->get('text_settle_error'), $result_data['errText']);
			} else {
				$json['error'] = $this->language->get('text_settle_error_empty');
			}
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
		
		if(isset($this->request->get['tid']) || isset($this->request->get['invoice_id'])) {
			
			if(isset($this->request->get['tid'])) {
				$invoice_info = $this->model_extension_payment_mono_pay->getInvoiceByOrderId($this->request->get['tid']);
			}
			
			if(isset($this->request->get['invoice_id'])) {
				$invoice_info['invoiceId'] = $this->request->get['invoice_id'];
			}
			
			if($invoice_info) {
				$mono_pay = new MonoPay();
				$mono_pay->setSecretKey($this->secretkey);
				$mono_pay->setTypeMethod('GET');
				
				$mono_pay_data = array(
					'invoiceId' => $invoice_info['invoiceId'],
					'api_uri' 	=> 'invoice/status?invoiceId=' . $invoice_info['invoiceId']
					//'api_uri' 	=> 'invoice/payment-info?invoiceId=' . $invoice_info['invoiceId']
				);
				
				$result_data = $mono_pay->getTransactionInfo($mono_pay_data);
	 
				// Log
				$this->setLog($result_data, 'Отримання інформації по транзакції');
					
				if($result_data) {
					$order_id = $result_data['reference'];
					
					$this->load->model('sale/order');
					
					$order_info = $this->model_sale_order->getOrder($order_id);
				
					if($order_info) {				
						$order_link = 'index.php?route=sale/order/info&user_token=' . $this->session->data['user_token'] . '&order_id=' . $order_id;
					} else {
						$order_link = '';
					}
					
					$currency = array_search($result_data['ccy'], $mono_pay->currencies);
					
					$data['result'] = array(
						'invoiceId'			=> $result_data['invoiceId'],
						'text_status'		=> $this->language->get('text_list_status_' . strtolower($result_data['status'])),
						'status'			=> $result_data['status'],
						'failureReason'		=> !empty($result_data['failureReason']) ? $result_data['failureReason'] : '',
						'order_id'			=> $order_id,
						'amount'			=> $result_data['amount'] / 100,
						'currency'			=> !empty($currency) ? $currency : $result_data['ccy'],
						'finalAmount'		=> !empty($result_data['finalAmount']) ? $result_data['finalAmount'] / 100 : 0,
						'createdDate'		=> date('Y-m-d H:i:s', strtotime($result_data['createdDate'])),
						'modifiedDate'		=> date('Y-m-d H:i:s', strtotime($result_data['modifiedDate'])),
						'order_link'		=> $order_link
					);
				}
			}
		}
		
		$this->response->setOutput($this->load->view('sale/mono_pay_info', $data));
	}
	
	public function successPay() {
		$json = array();
		
		if(isset($this->request->get['amount']) && (isset($this->request->get['id']) || isset($this->request->get['invoice_id']))) {
			$mono_pay = new MonoPay();
			$mono_pay->setSecretKey($this->secretkey);
			
			if(isset($this->request->get['tid'])) {
				$invoice_info = $this->model_extension_payment_mono_pay->getInvoiceByOrderId($this->request->get['id']);
			}
			
			if(isset($this->request->get['invoice_id'])) {
				$invoice_info['invoiceId'] = $this->request->get['invoice_id'];
			}
	 
			if($invoice_info) {
				$amount = $this->request->get['amount'] * 100;
				
				$mono_pay_data = array(
					'invoiceId' 		=> $invoice_info['invoiceId'],
					'amount'   		    => (int)$amount,
					'api_uri' 			=> 'invoice/finalize'
				);
				
				$result_data = $mono_pay->transactionSettle($mono_pay_data);
				
				// Log
				$this->setLog($result_data, 'Списання коштів з HOLD');
			}
			
			if(isset($result_data['status']) && $result_data['status'] == 'success') {				
				$json['success'] = $this->language->get('text_settle_success');
			} else {
				$json['error'] = sprintf($this->language->get('text_settle_error'), $result_data['errText']);
			}
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function refundPay() {
		$json = array();
		
		if(isset($this->request->get['amount']) && isset($this->request->get['id'])) {
			$mono_pay = new MonoPay();
			$mono_pay->setSecretKey($this->secretkey);
			
			$invoice_info = $this->model_extension_payment_mono_pay->getInvoiceByOrderId($this->request->get['id']);

			if($invoice_info) {				
				$order_product = $this->model_extension_payment_mono_pay->getOrderProduct($this->request->get['id'], $invoice_info['currency']);
				
				$amount = $this->request->get['amount'] * 100;
				
				$mono_pay_data = array(
					'invoiceId' 		=> $invoice_info['invoiceId'],
					'amount' 			=> $amount,
					'api_uri' 			=> 'invoice/cancel',
					'items' 			=> $order_product
				);
				
				$result_data = $mono_pay->transactionRefund($mono_pay_data);
				
				// Log
				$this->setLog($result_data, 'Повернення коштів з HOLD');
			}
			
			if(isset($result_data['status']) && $result_data['status'] == 'success') {				
				$json['success'] = $this->language->get('text_refund_success');
			} else {
				$json['error'] = sprintf($this->language->get('text_refund_error'), $result_data['errText']);
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
		$data['entry_validity_time'] = $this->language->get('entry_validity_time');
		$data['entry_currency'] = $this->language->get('entry_currency');
		$data['entry_chanel_notify'] = $this->language->get('entry_chanel_notify');
		
		$data['button_seend'] = $this->language->get('button_seend');
		$data['button_product_add'] = $this->language->get('button_product_add');
		$data['button_remove'] = $this->language->get('button_remove');
		
		$data['user_token'] = $this->session->data['user_token'];
		
		$data['currencies'] = array('UAH', 'USD', 'EUR');
		$data['validity_time'] = 86400;
		
		$data['order_products'] = array();

		if(!empty($this->request->get['order_id'])) {
			$payment_wfp_data = array();
			
			$this->load->model('sale/order');
		
			$order_info = $this->model_sale_order->getOrder($this->request->get['order_id']);
			$order_products = $this->model_sale_order->getOrderProducts($this->request->get['order_id']);
	
			$data['first_name'] = $order_info['firstname'];
			$data['last_name'] = $order_info['lastname'];
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
		
		$this->response->setOutput($this->load->view('sale/mono_pay_invoive', $data));
	}
	
	public function getInvoice() {
		$this->load->model('sale/order');
	
		$json = array();
		
		if(!empty($this->request->get['order_id']) && !empty($this->request->post)) {
			
			if (empty($this->request->post['validity_time']) || $this->request->post['validity_time'] > 86400 || $this->request->post['validity_time'] < 5600) {
				$json['error']['validity_time'] = $this->language->get('validity_time');
			}
				
			if(!isset($json['error'])) {
				$order_id = $this->request->get['order_id'];
				
				$mono_pay = new MonoPay();
				$mono_pay->setSecretKey($this->secretkey);
				
				if(!empty($mono_pay->currencies[$this->request->post['currency']])) {
					$currency_ccy = $mono_pay->currencies[$this->request->post['currency']];
					$currency = $this->request->post['currency'];
				} else {
					$currency_ccy = 980;
					$currency = 'UAH';
				}
				
				$products = array();
				
				$order_info = $this->model_sale_order->getOrder($order_id);
			
				$order_product = $this->model_extension_payment_mono_pay->getOrderProduct($order_id, $currency);
				
				$merchantPaymInfo = array(
					'reference'		=> (string)$order_id,
					'destination'	=> sprintf($this->language->get('text_order_description'), $order_id),
					'basketOrder'	=> $order_product,
				);
				
				$api_data = array(
					'amount'			=> $this->currency->format($order_info['total'], $currency, $this->currency->getValue($currency), false) * 100,
					'ccy'				=> (int)$currency_ccy,
					'merchantPaymInfo'	=> $merchantPaymInfo,
					'redirectUrl'		=> str_replace(array('&amp;', '/admin/'), array('&', '/'), $this->url->link('extension/payment/mono_pay/response', 'orderid=' . $order_id, 'SSL')),
					'webHookUrl'		=> str_replace(array('&amp;', '/admin/'), array('&', '/'), $this->url->link('extension/payment/mono_pay/callback', '', 'SSL')),
					'validity'			=> (int)$this->config->get('payment_mono_pay_validity_time'),
					'paymentType'		=> in_array($this->config->get('payment_mono_pay_type'), $mono_pay->payment_type) ? $this->config->get('payment_mono_pay_type') : '',
					'api_uri'			=> 'invoice/create',
				);
				
				$result_data = $mono_pay->getInvoice($api_data);
				
				// Log
				$this->setLog($result_data, 'Генерація інвойсу');

				if(!empty($result_data['pageUrl'])) {
					$json['success'] = sprintf($this->language->get('text_invoice_success'), $result_data['pageUrl']);
					
					$this->model_extension_payment_mono_pay->setMonoOrder($order_id, $currency, $result_data);
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
			$invoice_info = $this->model_extension_payment_mono_pay->getInvoiceByOrderId($this->request->get['order_id']);
			
			if($invoice_info) {
				$mono_pay = new MonoPay();
				$mono_pay->setSecretKey($this->secretkey);
				
				$mono_pay_data = array(
					'invoiceId' => $invoice_info['invoiceId'],
					'api_uri' 	=> 'invoice/remove'
				);
		
				$result_data = $mono_pay->deleteInvoice($mono_pay_data);
				
				// Log
				$this->setLog($result_data, 'Видалення інвойсу');
				
				$this->model_extension_payment_mono_pay->deleteInvoice($this->request->get['order_id']);
				
				$json['success'] = $this->language->get('text_invoice_delete_success');
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
	
	private function setLog($data, $text) {
		if($this->config->get('payment_mono_pay_status_log')) {
			$log = new Log('mono.log');
			$log->write('--------- ' . $text . ': ПОЧАТОК ---------');
			$log->write(json_encode($data));
			$log->write('--------- ' . $text . ': КІНЕЦЬ ---------');
		}
	}
}