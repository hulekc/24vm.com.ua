<?php
/**
 * @author  Alexander Vakhovskiy (AlexWaha)
 * @link    https://ocdev.pro
 * @email support@ocdev.pro
 * @license Commercial
 */

class ModelExtensionModuleOcdSmsNotify extends Model {

    public function sendSms($data) {
        if (isset($data['phone']) && $data['phone']) {
            $phone = $this->prepPhone($data['phone']);
        } else {
            $phone = false;
        }

        $message = [];

        if (isset($data['message']) && $data['message']) {
            $message['sms'] = $data['message'];
            $message['viber'] = $data['message'];

            if ($this->config->get('sms_notify_translit')) {
                $message['sms'] = $this->translit($message);
                $message['viber'] = $this->translit($message);
            }
        }

        if ($phone & $message) {
            $this->sendMessage($phone, $message);

            return true;
        } else {
            return false;
        }
    }

    public function sendServiceSms($order_id) {
        $this->load->model('checkout/order');

        $order_info = $this->model_checkout_order->getOrder($order_id);

        if ($order_info['language_id']) {
            $language_id = $order_info['language_id'];
        } else {
            $language_id = $this->config->get('config_language_id');
        }

        if ($order_info) {
            $phone = $this->prepPhone($order_info['telephone']);
            // Send Client SMS if configure
            $check_customer = $this->customerGroup($order_info);

            $message = [];
            $sms_payments = [];

            $sms_payments = $this->config->get('sms_notify_payment');
            $client_alert = $this->config->get('sms_notify_client_alert');

            if ($sms_payments && in_array($order_info['payment_code'], $sms_payments)) {
                if ($sms_payments && $phone) {
                    $payment_template = $this->config->get('sms_notify_payment_template');
                    $payment_viber_template = $this->config->get('sms_notify_payment_viber_template');

                    if ($check_customer) {
                        $message['sms'] = $this->prepareMessage($order_info, $payment_template[$order_info['payment_code']][$language_id], '', $order_info['comment']);
                        $message['viber'] = $this->prepareMessage($order_info, $payment_viber_template[$order_info['payment_code']][$language_id], '', $order_info['comment']);

                        $this->sendMessage($phone, $message);
                    }
                }
            } else {
                if ($client_alert && $phone) {
                    $client_template = $this->config->get('sms_notify_client_template');
                    $client_viber_template = $this->config->get('sms_notify_client_viber_template');

                    if ($check_customer) {
                        $message['sms'] = $this->prepareMessage($order_info, $client_template[$language_id], '', $order_info['comment']);
                        $message['viber'] = $this->prepareMessage($order_info, $client_viber_template[$language_id], '', $order_info['comment']);

                        $this->sendMessage($phone, $message);
                    }
                }
            }

            // Send Admin SMS if configure
            if ($this->config->get('sms_notify_admin_alert')) {
                $phone = $this->prepPhone($this->config->get('sms_notify_to'));

                $text = $this->prepareMessage($order_info, $this->config->get('sms_notify_admin_template'), '', $order_info['comment']);

                $message = [
                    'sms'   => $text,
                    'viber' => $text,
                ];

                $this->sendMessage($phone, $message, $this->config->get('sms_notify_copy'));
            }
        }
    }

    public function sendOrderStatusSms($order_id, $order_status_id, $comment = false, $sendsms) {
        $this->load->model('checkout/order');
        //SMS send with order status
        if ($this->config->get('sms_notify_order_alert') && $this->config->get('sms_notify_order_status')) {
            $order_info = $this->model_checkout_order->getOrder($order_id);

            if ($order_info['language_id']) {
                $language_id = $order_info['language_id'];
            } else {
                $language_id = $this->config->get('config_language_id');
            }

            $phone = $this->prepPhone($order_info['telephone']);

            $message = [];

            if ($phone) {
                if (in_array($order_status_id, $this->config->get('sms_notify_order_status'))) {
                    $sms_template = $this->config->get('sms_notify_status_template');

                    $message['sms'] = $this->prepareMessage($order_info, $sms_template[$order_status_id][$language_id], $order_status_id, $comment);

                    $viber_template = $this->config->get('sms_notify_viber_template');

                    $message['viber'] = $this->prepareMessage($order_info, $viber_template[$order_status_id][$language_id], $order_status_id, $comment);
                    $check_customer = $this->customerGroup($order_info);

                    if ($check_customer) {
                        if ($message['sms'] && isset($message['viber'])) {
                            $this->addOrderHistory($order_id, $order_status_id, 'SMS ' . $message['sms'] . PHP_EOL . 'Viber ' . $message['viber']);
                        } else {
                            $this->addOrderHistory($order_id, $order_status_id, 'SMS ' . $message['sms']);
                        }

                        if ($message) {
                            $this->sendMessage($phone, $message);
                        }
                    }
                }
            }
        }
    }

    public function sendReviewsSms($product_id) {
        $this->load->model('catalog/product');

        $product_data = $this->model_catalog_product->getProduct($product_id);
        $viber_status = $this->config->get('sms_notify_viber_alert');

        if ($product_data) {
            $message = [];

            $template = $this->config->get('sms_notify_reviews_template');

            $data['product'] = [
                'name'  => utf8_substr(strip_tags(html_entity_decode($product_data['name'], ENT_QUOTES, 'UTF-8')), 0, 50) . '..',
                'model' => $product_data['model'],
                'sku'   => $product_data['sku'],
                'date'  => date('d.m.Y H:i'),
            ];

            $sms_text = $this->renderMessage($template, $data);

            if ($this->config->get('sms_notify_translit')) {
                $sms_text = $this->translit($sms_text);
            }

            $message['sms'] = $sms_text;

            if ($viber_status) {
                $data['product'] = [
                    'name'  => strip_tags(html_entity_decode($product_data['name'], ENT_QUOTES, 'UTF-8')),
                    'model' => $product_data['model'],
                    'sku'   => $product_data['sku'],
                    'date'  => date('d.m.Y H:i'),
                ];

                $viber_text = $this->renderMessage($template, $data);

                if ($this->config->get('sms_notify_translit')) {
                    $viber_text = $this->translit($viber_text);
                }

                $message['viber'] = $viber_text;
            }

            // Send Admin SMS if configure
            if ($this->config->get('sms_notify_reviews')) {
                $phone = $this->prepPhone($this->config->get('sms_notify_to'));

                $this->sendMessage($phone, $message);
            }
        }
    }

    private function prepareMessage($order_data = [], $template, $order_status_id = false, $comment = false) {
        $this->load->model('checkout/order');

        if ($order_status_id) {
            $order_status_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE order_status_id = '" . (int)$order_status_id . "' AND language_id = '" . (int)$order_data['language_id'] . "'");
        } else {
            $order_status_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE order_status_id = '" . (int)$order_data['order_status_id'] . "' AND language_id = '" . (int)$order_data['language_id'] . "'");
        }

        if ($order_status_query->num_rows) {
            $order_status = $order_status_query->row['name'];
        } else {
            $order_status = false;
        }

        $shipping_cost = 0;
        $order_total_noship = 0;

        if ($this->config->get('total_shipping_status')) {
            $order_shipping_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_total WHERE order_id = '" . (int)$order_data['order_id'] . "' AND code = 'shipping'");

            if ($order_shipping_query->num_rows) {
                $shipping_cost = $this->currency->format($order_shipping_query->row['value'], $order_data['currency_code'], $order_data['currency_value']);
                $order_total_noship = $order_data['total'] ? $order_data['total'] - $order_shipping_query->row['value'] : '';
            } else {
                $order_total_noship = $order_data['total'];
            }
        }

        $query_order_product_total = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$order_data['order_id'] . "'");

        $query_order_product = $this->db->query("SELECT name, model, price, quantity FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$order_data['order_id'] . "'");

        $products = [];

        foreach ($query_order_product->rows as $product) {
            $products[] = [
                'name'     => strip_tags(html_entity_decode($product['name'], ENT_QUOTES, 'UTF-8')),
                'model'    => $product['model'],
                'price'    => $this->currency->format($product['price'], $order_data['currency_code'], $order_data['currency_value']),
                'quantity' => $product['quantity']
            ];
        }

        $data['order_date'] = $order_data['date_added'] ? $order_data['date_added'] : '';
        $data['current_date'] = date('d.m.Y');
        $data['current_time'] = date('H:i');
        $data['store_name'] = $order_data['store_name'] ? $order_data['store_name'] : $this->config->get('config_name');
        $data['store_url'] = $order_data['store_url'] ? $order_data['store_url'] : HTTP_SERVER;
        $data['firstname'] = $order_data['firstname'] ? $order_data['firstname'] : '';
        $data['lastname'] = $order_data['lastname'] ? $order_data['lastname'] : '';
        $data['order_id'] = $order_data['order_id'] ? $order_data['order_id'] : '';
        $data['order_total'] = strip_tags($order_data['total'] ? $this->currency->format($order_data['total'], $order_data['currency_code'], $order_data['currency_value']) : '');
        $data['order_total_noship'] = strip_tags($order_total_noship ? $this->currency->format($order_total_noship, $order_data['currency_code'], $order_data['currency_value']) : '');
        $data['order_phone'] = $order_data['telephone'] ? $order_data['telephone'] : '';
        $data['order_comment'] = $comment;
        $data['order_status'] = $order_status;
        $data['payment_method'] = $order_data['payment_method'] ? $order_data['payment_method'] : '';
        $data['payment_city'] = $order_data['payment_city'] ? $order_data['payment_city'] : '';
        $data['payment_address'] = $order_data['payment_address_1'] ? $order_data['payment_address_1'] : '';
        $data['shipping_method'] = $order_data['shipping_method'] ? $order_data['shipping_method'] : '';
        $data['shipping_cost'] = strip_tags($shipping_cost);
        $data['shipping_city'] = $order_data['shipping_city'] ? $order_data['shipping_city'] : '';
        $data['shipping_address'] = $order_data['shipping_address_1'];
        $data['product_total'] = $query_order_product_total->row['total'];
        $data['products'] = $products;

        $message = $this->renderMessage($template, $data);

        $result = html_entity_decode($message, ENT_QUOTES, 'UTF-8');

        if ($this->config->get('sms_notify_translit')) {
            return $this->translit($result);
        } else {
            return $result;
        }
    }

    private function customerGroup($order) {
        $this->load->model('account/customer');

        $sms_customer_group = $this->config->get('sms_notify_customer_group');
        $config_customer_group_id = $this->config->get('config_customer_group_id');

        $customer = [];

        if($order['customer_id']) {
            $customer = $this->model_account_customer->getCustomer($order['customer_id']);
        }

        $result = true;

        if ($sms_customer_group) {
            $result = false;

            if ($customer && in_array($customer['customer_group_id'], $sms_customer_group)) {
                $result = true;
            }

            if (!$customer && in_array($config_customer_group_id, $sms_customer_group)) {
                $result = true;
            }
        }

        return $result;
    }

    private function addOrderHistory($order_id, $order_status_id, $message) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "order_history SET order_id = '" . (int)$order_id . "', order_status_id = '" . (int)$order_status_id . "', notify = '1', comment = '" . $this->db->escape($message) . "', date_added = NOW()");
    }

    private function translit($message) {
        $scheme = [
            'а' => 'a',
            'б' => 'b',
            'в' => 'v',
            'г' => 'g',
            'д' => 'd',
            'е' => 'e',
            'є' => 'ye',
            'ё' => 'yo',
            'ж' => 'zh',
            'з' => 'z',
            'і' => 'i',
            'и' => 'i',
            'й' => 'j',
            'к' => 'k',
            'ї' => 'yi',
            'л' => 'l',
            'м' => 'm',
            'н' => 'n',
            'о' => 'o',
            'п' => 'p',
            'р' => 'r',
            'с' => 's',
            'т' => 't',
            'у' => 'u',
            'ф' => 'f',
            'х' => 'kh',
            'ц' => 'ts',
            'ч' => 'ch',
            'ш' => 'sh',
            'щ' => 'shch',
            'ь' => '\'',
            'ы' => 'y',
            'ъ' => '"',
            'э' => 'e',
            'ю' => 'yu',
            'я' => 'ya',
            'А' => 'A',
            'Б' => 'B',
            'В' => 'V',
            'Г' => 'G',
            'Д' => 'D',
            'Е' => 'E',
            'Є' => 'Ye',
            'Ё' => 'Yo',
            'Ж' => 'Zh',
            'З' => 'Z',
            'І' => 'I',
            'И' => 'I',
            'Й' => 'J',
            'К' => 'K',
            'Ї' => 'Yi',
            'Л' => 'L',
            'М' => 'M',
            'Н' => 'N',
            'О' => 'O',
            'П' => 'P',
            'Р' => 'R',
            'С' => 'S',
            'Т' => 'T',
            'У' => 'U',
            'Ф' => 'F',
            'Х' => 'Kh',
            'Ц' => 'Ts',
            'Ч' => 'Ch',
            'Ш' => 'Sh',
            'Щ' => 'Shch',
            'Ь' => '\'',
            'Ы' => 'Y',
            'Ъ' => '"',
            'Э' => 'E',
            'Ю' => 'Yu',
            'Я' => 'Ya',
        ];

        $result = strtr($message, $scheme);

        return iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $result);
    }

    private function prepPhone($phone) {
        $result = preg_replace('/[^0-9,]/', '', $phone);

        return $result;
    }

    private function renderMessage($str, $data) {
        if (version_compare(VERSION, '3.0.3.3', '>')) {
            $twig = new \Twig_Environment(new \Twig_Loader_Array([]));
            $template = $twig->createTemplate($str);

            return $template->render($data);
        } else {
            include_once(DIR_SYSTEM . 'library/template/Twig/Autoloader.php');

            Twig_Autoloader::register();

            $twig = new \Twig_Environment(new Twig_Loader_String());

            return $twig->render($str, $data);
        }
    }

    private function sendMessage($phone, $message, $copy = false) {
        $this->load->model('tool/image');

        $viber_image_src = $this->config->get('sms_notify_viber_image');
        $viber_image_width = $this->config->get('sms_notify_viber_image_width');
        $viber_image_height = $this->config->get('sms_notify_viber_image_height');

        if (is_file(DIR_IMAGE . $viber_image_src)) {
            $viber_image = $this->model_tool_image->resize($viber_image_src, $viber_image_width, $viber_image_height);
        } else {
            $viber_image = false;
        }

        $viber_options = [
            'status'    => $this->config->get('sms_notify_viber_alert'),
            'sender'    => $this->config->get('sms_notify_viber_sender'),
            'message'   => $message['viber'],
            'ttl'       => $this->config->get('sms_notify_viber_ttl'),
            'image_url' => $viber_image ? $viber_image : false,
            'caption'   => $this->config->get('sms_notify_viber_caption'),
            'action'    => $this->config->get('sms_notify_viber_url'),
        ];

        $options = [
            'to'       => $phone,
            'copy'     => $copy,
            'from'     => $this->config->get('sms_notify_from'),
            'username' => $this->config->get('sms_notify_gate_username'),
            'password' => $this->config->get('sms_notify_gate_password'),
            'message'  => $message['sms'],
            'viber'    => $viber_options,
        ];

        $sms = new OcdSms($this->config->get('sms_notify_gatename'), $options);
        $sms->send();
    }
}