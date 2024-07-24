<?php
class WayForPay {
    public $order_approved = 'Approved';
    public $order_hold_approved = 'WaitingAuthComplete';
    public $order_is_pending = 'Pending';
    public $order_separator = '#';
    public $signature_separator = ';';
    public $url = "https://secure.wayforpay.com/pay";
    public $api_url = "https://api.wayforpay.com/api";

    private $secret_key = '';
	
    /** @var array */
    protected $keysForResponseSignature = array(
        'merchantAccount',
        'orderReference',
        'amount',
        'currency',
        'authCode',
        'cardPan',
        'transactionStatus',
        'reasonCode'
    );

    /** @var array */
    protected $keysForSignature = array(
        'merchantAccount',
        'merchantDomainName',
        'orderReference',
        'orderDate',
        'amount',
        'currency',
        'productName',
        'productCount',
        'productPrice'
    );
	
	/** @var array */
	protected $keysForSignatureApisList = array(
		'merchantAccount',
		'dateBegin',
		'dateEnd'
	);	
	
	/** @var array */
	protected $keysForSignatureTransInfo = array(
		'merchantAccount',
		'orderReference'
	);	
	
	/** @var array */
	protected $keysForSignatureSettle = array(
		'merchantAccount',
		'orderReference',
		'amount',
		'currency'
	);	
	
	/** @var array */
	protected $keysForSignatureRefund = array(
		'merchantAccount',
		'orderReference',
		'amount',
		'currency'
	);	
	
	/** @var array */
	protected $keysForSignatureCreateInvoice = array(
		'merchantAccount',
		'merchantDomainName',
		'orderReference',
		'orderDate',
		'amount',
		'currency',
		'productName',
		'productCount',
		'productPrice'
	);	
	
	/** @var array */
	protected $keysForSignatureDeleteInvoice = array(
		'merchantAccount',
		'orderReference'
	); 
	
	public function getCurrencies() {
		$currencies = array(
			980 => 'UAH',
            840 => 'USD',
            978 => 'EUR',
		);
		
		return $currencies;
	}

    /**
     * @param $option
     * @param $keys
     * @return string
     */
    public function getSignature($option, $keys)
    {
        $hash = array();
		
        foreach ($keys as $dataKey) {
            if (!isset($option[$dataKey])) {
                $option[$dataKey] = '';
            }
            if (is_array($option[$dataKey])) {
                foreach ($option[$dataKey] as $v) {
                    $hash[] = $v;
                }
            } else {
                $hash [] = $option[$dataKey];
            }
        }

        $hash = implode($this->signature_separator, $hash);
		
        return hash_hmac('md5', $hash, $this->getSecretKey());
    }


    /**
     * @param $options
     * @return string
     */
    public function getRequestSignature($options) {
        return $this->getSignature($options, $this->keysForSignature);
    }

    /**
     * @param $options
     * @return string
     */
    public function getResponseSignature($options) {
        return $this->getSignature($options, $this->keysForResponseSignature);
    }
	
	/**
     * @param $options
     * @return string
     */
	public function getResponseSignatureList($options) {
		return $this->getSignature($options, $this->keysForSignatureApisList);
	}	
	
	/**
     * @param $options
     * @return string
     */
	public function getResponseSignatureInfo($options) {
		return $this->getSignature($options, $this->keysForSignatureTransInfo);
	}	
	
	/**
     * @param $options
     * @return string
     */
	public function getResponseSignatureSettle($options) {
		return $this->getSignature($options, $this->keysForSignatureSettle);
	}
	
	/**
     * @param $options
     * @return string
     */
	public function getResponseSignatureRefund($options) {
		return $this->getSignature($options, $this->keysForSignatureRefund);
	}
	
	/**
     * @param $options
     * @return string
     */
	public function getResponseSignatureCreateInvoice($options) {
		return $this->getSignature($options, $this->keysForSignatureCreateInvoice);
	}	
	
	/**
     * @param $options
     * @return string
     */
	public function getResponseSignatureDeleteInvoice($options) {
		return $this->getSignature($options, $this->keysForSignatureDeleteInvoice);
	}

    /**
     * @param array $data
     * @return string
     */
    public function getAnswerToGateWay($data)
    {
        $time = time();
		
        $responseToGateway = array(
            'orderReference' => $data['orderReference'],
            'status' => 'accept',
            'time' => $time
        );
		
        $sign = array();
		
        foreach ($responseToGateway as $dataKey => $dataValue) {
            $sign [] = $dataValue;
        }
		
        $sign = implode($this->signature_separator, $sign);
        $sign = hash_hmac('md5', $sign, $this->getSecretKey());
        $responseToGateway['signature'] = $sign;

        return json_encode($responseToGateway);
    }

    /**
     * @param $response
     * @return bool|string
     */
    public function isPaymentValid($response) {
        
        if (!isset($response['merchantSignature']) && isset($response['reason'])) {
            return $response['reason'];
        }
		
		$sign = $this->getResponseSignature($response);
		
        if ($sign != $response['merchantSignature']) {
            return 'An error has occurred during payment ';
        }

        if ($response['transactionStatus'] == $this->order_approved || $response['transactionStatus'] == $this->order_hold_approved || $response['transactionStatus'] == $this->order_is_pending) {
            return true;
        }

        return false;
    }
	
	/**
     * @param $key
     */
    public function setSecretKey($key) {
        $this->secret_key = $key;
    }

	/**
     * @return $secret_key
     */
    public function getSecretKey() {
        return $this->secret_key; 
    }
	
	/**
     * @param $response
     * @return bool|string
     */
	public function getTransactionList($send_array) {	
		$sign = $this->getResponseSignatureList($send_array);
		
		$send_array['merchantSignature'] = $sign;
	
		$result_data = $this->getApiData($send_array);
		
		if(isset($result_data['reason']) && $result_data['reasonCode'] == 1100) {
			return $result_data;
		} else {
			return false;
		}
	}	
	
	public function getTransactionInfo($send_array) {	
		$sign = $this->getResponseSignatureInfo($send_array);
		
		$send_array['merchantSignature'] = $sign;
	
		$result_data = $this->getApiData($send_array);
		
		if(isset($result_data['reason']) && $result_data['reasonCode'] == 1100) {
			return $result_data;
		} else {
			return false;
		}
	}
	
	public function transactionSettle($send_array) {
		$sign = $this->getResponseSignatureSettle($send_array);
		
		$send_array['merchantSignature'] = $sign;
		
		$result_data = $this->getApiData($send_array); 
	
		return $result_data;
	}
	
	public function transactionRefund($send_array) {
		$sign = $this->getResponseSignatureRefund($send_array);
		
		$send_array['merchantSignature'] = $sign;
		
		$result_data = $this->getApiData($send_array); 
	
		return $result_data;
	}	
	
	public function createInvoice($send_array) {
		$sign = $this->getResponseSignatureCreateInvoice($send_array);
		
		$send_array['merchantSignature'] = $sign;
		
		$result_data = $this->getApiData($send_array); 
	
		return $result_data;
	}
	
	public function deleteInvoice($send_array) {
		$sign = $this->getResponseSignatureDeleteInvoice($send_array);
		
		$send_array['merchantSignature'] = $sign;
		
		$result_data = $this->getApiData($send_array); 
	
		return $result_data;
	}
	
	private function getApiData($data) {
		$ch = curl_init();
			
		curl_setopt($ch, CURLOPT_URL, $this->api_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		
		$result_data = json_decode(curl_exec($ch), true);

		curl_close($ch);
		
		return $result_data;
	}
}