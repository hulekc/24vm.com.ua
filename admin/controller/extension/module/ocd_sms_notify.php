<?php
/**
 * @author  Alexander Vakhovskiy (AlexWaha)
 * @link    https://ocdev.pro
 * @email support@ocdev.pro
 * @license Commercial
 */

class ControllerExtensionModuleOcdSmsNotify extends Controller {

    private $error = [];

    public function index() {
        $this->load->language('extension/module/ocd_sms_notify');

        $this->document->setTitle($this->language->get('heading_main_title'));

        $this->load->model('extension/module/ocd_sms_notify');

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('sms_notify', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('extension/module/ocd_sms_notify', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        $data['action'] = $this->url->link('extension/module/ocd_sms_notify', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = '';
        }

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true),
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/ocd_sms_notify', 'user_token=' . $this->session->data['user_token'], true),
        ];

        $data['sms_gatenames'] = [];

        $files = glob(DIR_SYSTEM . 'library/smsgate/*.php');

        foreach ($files as $file) {
            $data['sms_gatenames'][] = basename($file, '.php');
        }

        if (isset($this->request->post['sms_notify_gatename'])) {
            $data['sms_notify_gatename'] = $this->request->post['sms_notify_gatename'];
        } else {
            $data['sms_notify_gatename'] = $this->config->get('sms_notify_gatename');
        }

        if (isset($this->request->post['sms_notify_to'])) {
            $data['sms_notify_to'] = $this->request->post['sms_notify_to'];
        } else {
            $data['sms_notify_to'] = $this->config->get('sms_notify_to');
        }

        if (isset($this->request->post['sms_notify_from'])) {
            $data['sms_notify_from'] = $this->request->post['sms_notify_from'];
        } else {
            $data['sms_notify_from'] = $this->config->get('sms_notify_from');
        }

        if (isset($this->request->post['sms_notify_message'])) {
            $data['sms_notify_message'] = $this->request->post['sms_notify_message'];
        } else {
            $data['sms_notify_message'] = $this->config->get('sms_notify_message');
        }

        if (isset($this->request->post['sms_notify_gate_username'])) {
            $data['sms_notify_gate_username'] = $this->request->post['sms_notify_gate_username'];
        } else {
            $data['sms_notify_gate_username'] = $this->config->get('sms_notify_gate_username');
        }

        if (isset($this->request->post['sms_notify_gate_password'])) {
            $data['sms_notify_gate_password'] = $this->request->post['sms_notify_gate_password'];
        } else {
            $data['sms_notify_gate_password'] = $this->config->get('sms_notify_gate_password');
        }

        if (isset($this->request->post['sms_notify_alert'])) {
            $data['sms_notify_alert'] = $this->request->post['sms_notify_alert'];
        } else {
            $data['sms_notify_alert'] = $this->config->get('sms_notify_alert');
        }

        if (isset($this->request->post['sms_notify_copy'])) {
            $data['sms_notify_copy'] = $this->request->post['sms_notify_copy'];
        } else {
            $data['sms_notify_copy'] = $this->config->get('sms_notify_copy');
        }

        if (isset($this->request->post['sms_notify_admin_alert'])) {
            $data['admin_alert'] = $this->request->post['sms_notify_admin_alert'];
        } elseif ($this->config->get('sms_notify_admin_alert')) {
            $data['admin_alert'] = $this->config->get('sms_notify_admin_alert');
        } else {
            $data['admin_alert'] = '';
        }

        if (isset($this->request->post['sms_notify_client_alert'])) {
            $data['client_alert'] = $this->request->post['sms_notify_client_alert'];
        } elseif ($this->config->get('sms_notify_client_alert')) {
            $data['client_alert'] = $this->config->get('sms_notify_client_alert');
        } else {
            $data['client_alert'] = '';
        }

        if (isset($this->request->post['sms_notify_order_alert'])) {
            $data['order_alert'] = $this->request->post['sms_notify_order_alert'];
        } elseif ($this->config->get('sms_notify_order_alert')) {
            $data['order_alert'] = $this->config->get('sms_notify_order_alert');
        } else {
            $data['order_alert'] = '';
        }

        if (isset($this->request->post['sms_notify_reviews'])) {
            $data['reviews'] = $this->request->post['sms_notify_reviews'];
        } elseif ($this->config->get('sms_notify_reviews')) {
            $data['reviews'] = $this->config->get('sms_notify_reviews');
        } else {
            $data['reviews'] = '';
        }

        if (isset($this->request->post['sms_notify_payment_alert'])) {
            $data['payment_alert'] = $this->request->post['sms_notify_payment_alert'];
        } elseif ($this->config->get('sms_notify_order_alert')) {
            $data['payment_alert'] = $this->config->get('sms_notify_payment_alert');
        } else {
            $data['payment_alert'] = '';
        }

        if (isset($this->request->post['sms_notify_translit'])) {
            $data['translit'] = $this->request->post['sms_notify_translit'];
        } elseif ($this->config->get('sms_notify_translit')) {
            $data['translit'] = $this->config->get('sms_notify_translit');
        } else {
            $data['translit'] = false;
        }

        if (isset($this->request->post['sms_notify_force'])) {
            $data['force'] = $this->request->post['sms_notify_force'];
        } elseif ($this->config->get('sms_notify_force')) {
            $data['force'] = $this->config->get('sms_notify_force');
        } else {
            $data['force'] = '';
        }

        if (isset($this->request->post['sms_notify_admin_template'])) {
            $data['admin_template'] = $this->request->post['sms_notify_admin_template'];
        } elseif ($this->config->get('sms_notify_admin_template')) {
            $data['admin_template'] = $this->config->get('sms_notify_admin_template');
        } else {
            $data['admin_template'] = '';
        }

        if (isset($this->request->post['sms_notify_client_template'])) {
            $data['client_template'] = $this->request->post['sms_notify_client_template'];
        } elseif ($this->config->get('sms_notify_client_template')) {
            $data['client_template'] = $this->config->get('sms_notify_client_template');
        } else {
            $data['client_template'] = '';
        }

        if (isset($this->request->post['sms_notify_reviews_template'])) {
            $data['reviews_template'] = $this->request->post['sms_notify_reviews_template'];
        } elseif ($this->config->get('sms_notify_reviews_template')) {
            $data['reviews_template'] = $this->config->get('sms_notify_reviews_template');
        } else {
            $data['reviews_template'] = '';
        }

        $data['payments'] = [];

        $data['payments'] = $this->model_extension_module_ocd_sms_notify->getPaymentList();

        if (isset($this->request->post['sms_notify_payment'])) {
            $data['sms_payment'] = $this->request->post['sms_notify_payment'];
        } elseif ($this->config->get('sms_notify_payment')) {
            $data['sms_payment'] = $this->config->get('sms_notify_payment');
        } else {
            $data['sms_payment'] = [];
        }

        if (isset($this->request->post['sms_notify_payment_template'])) {
            $data['payment_template'] = $this->request->post['sms_notify_payment_template'];
        } elseif ($this->config->get('sms_notify_payment_template')) {
            $data['payment_template'] = $this->config->get('sms_notify_payment_template');
        } else {
            $data['payment_template'] = [];
        }

        $this->load->model('customer/customer_group');

        $data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

        if (isset($this->request->post['sms_notify_customer_group'])) {
            $data['sms_customer_group'] = $this->request->post['sms_notify_customer_group'];
        } elseif ($this->config->get('sms_notify_customer_group')) {
            $data['sms_customer_group'] = $this->config->get('sms_notify_customer_group');
        } else {
            $data['sms_customer_group'] = [];
        }

        if (isset($this->request->post['sms_notify_viber_alert'])) {
            $data['viber_alert'] = $this->request->post['sms_notify_viber_alert'];
        } elseif ($this->config->get('sms_notify_viber_alert')) {
            $data['viber_alert'] = $this->config->get('sms_notify_viber_alert');
        } else {
            $data['viber_alert'] = '';
        }

        if (isset($this->request->post['sms_notify_viber_sender'])) {
            $data['viber_sender'] = $this->request->post['sms_notify_viber_sender'];
        } elseif ($this->config->get('sms_notify_viber_sender')) {
            $data['viber_sender'] = $this->config->get('sms_notify_viber_sender');
        } else {
            $data['viber_sender'] = '';
        }

        if (isset($this->request->post['sms_notify_viber_ttl'])) {
            $data['viber_ttl'] = $this->request->post['sms_notify_viber_ttl'];
        } elseif ($this->config->get('sms_notify_viber_ttl')) {
            $data['viber_ttl'] = $this->config->get('sms_notify_viber_ttl');
        } else {
            $data['viber_ttl'] = '3600';
        }

        if (isset($this->request->post['sms_notify_viber_caption'])) {
            $data['viber_caption'] = $this->request->post['sms_notify_viber_caption'];
        } elseif ($this->config->get('sms_notify_viber_caption')) {
            $data['viber_caption'] = $this->config->get('sms_notify_viber_caption');
        } else {
            $data['viber_caption'] = '';
        }

        if (isset($this->request->post['sms_notify_viber_url'])) {
            $data['viber_url'] = $this->request->post['sms_notify_viber_url'];
        } elseif ($this->config->get('sms_notify_viber_url')) {
            $data['viber_url'] = $this->config->get('sms_notify_viber_url');
        } else {
            $data['viber_url'] = '';
        }

        if (isset($this->request->post['sms_notify_viber_image_width'])) {
            $data['width'] = $this->request->post['sms_notify_viber_image_width'];
        } elseif ($this->config->get('sms_notify_viber_image_width')) {
            $data['width'] = $this->config->get('sms_notify_viber_image_width');
        } else {
            $data['width'] = '400';
        }

        if (isset($this->request->post['sms_notify_viber_image_height'])) {
            $data['height'] = $this->request->post['sms_notify_viber_image_height'];
        } elseif ($this->config->get('sms_notify_viber_image_height')) {
            $data['height'] = $this->config->get('sms_notify_viber_image_height');
        } else {
            $data['height'] = '400';
        }

        $this->load->model('tool/image');

        $data['viber_image'] = '';
        $data['viber_thumb'] = '';

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        if (isset($this->request->post['sms_notify_viber_image'])) {
            $data['viber_image'] = $this->request->post['sms_notify_viber_image'];
        } elseif ($this->config->get('sms_notify_viber_image')) {
            $image = $this->config->get('sms_notify_viber_image');

            if (is_file(DIR_IMAGE . $image)) {
                $data['viber_thumb'] = $this->model_tool_image->resize($image, 100, 100);
                $data['viber_image'] = $image;
            }
        }

        if (isset($this->request->post['sms_notify_client_viber_template'])) {
            $data['client_viber_template'] = $this->request->post['sms_notify_client_viber_template'];
        } elseif ($this->config->get('sms_notify_client_viber_template')) {
            $data['client_viber_template'] = $this->config->get('sms_notify_client_viber_template');
        } else {
            $data['client_viber_template'] = '';
        }

        if (isset($this->request->post['sms_notify_payment_viber_template'])) {
            $data['payment_viber_template'] = $this->request->post['sms_notify_payment_viber_template'];
        } elseif ($this->config->get('sms_notify_payment_viber_template')) {
            $data['payment_viber_template'] = $this->config->get('sms_notify_payment_viber_template');
        } else {
            $data['payment_viber_template'] = [];
        }

        if (isset($this->request->post['sms_notify_viber_template'])) {
            $data['order_viber_template'] = $this->request->post['sms_notify_viber_template'];
        } elseif ($this->config->get('sms_notify_viber_template')) {
            $data['order_viber_template'] = $this->config->get('sms_notify_viber_template');
        } else {
            $data['order_viber_template'] = [];
        }

        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        //CKEditor
        if ($this->config->get('config_editor_default')) {
            $this->document->addScript('view/javascript/ckeditor/ckeditor.js');
            $this->document->addScript('view/javascript/ckeditor/ckeditor_init.js');
        }

        $data['ckeditor'] = $this->config->get('config_editor_default');

        $data['lang'] = $this->language->get('lang');

        if (isset($this->request->post['sms_notify_sms_template'])) {
            $data['sms_template'] = $this->request->post['sms_notify_sms_template'];
        } elseif ($this->config->get('sms_notify_sms_template')) {
            $data['sms_template'] = html_entity_decode($this->config->get('sms_notify_sms_template'), ENT_QUOTES, 'UTF-8');
        } else {
            $data['sms_template'] = '';
        }

        $data['order_statuses'] = $this->model_extension_module_ocd_sms_notify->getOrderStatuses();

        if (isset($this->request->post['sms_notify_status_template'])) {
            $data['order_status_template'] = $this->request->post['sms_notify_status_template'];
        } elseif ($this->config->get('sms_notify_status_template')) {
            $data['order_status_template'] = $this->config->get('sms_notify_status_template');
        } else {
            $data['order_status_template'] = [];
        }

        if (isset($this->request->post['sms_notify_order_status'])) {
            $data['sms_order_status'] = $this->request->post['sms_notify_order_status'];
        } elseif ($this->config->get('sms_notify_order_status')) {
            $data['sms_order_status'] = $this->config->get('sms_notify_order_status');
        } else {
            $data['sms_order_status'] = [];
        }

        if (isset($this->request->post['sms_notify_log'])) {
            $data['sms_notify_log'] = $this->request->post['sms_notify_log'];
        } elseif ($this->config->get('sms_notify_log')) {
            $data['sms_notify_log'] = $this->config->get('sms_notify_log');
        } else {
            $data['sms_notify_log'] = '';
        }

        $data['sms_log'] = '';

        $data['sms_log_filname'] = 'sms_log.log';

        if ($this->config->get('sms_notify_log')) {
            $file = DIR_LOGS . $data['sms_log_filname'];

            if (file_exists($file)) {
                $size = filesize($file);

                if ($size >= 5242880) {
                    $suffix = [
                        'B',
                        'KB',
                        'MB',
                        'GB',
                        'TB',
                        'PB',
                        'EB',
                        'ZB',
                        'YB',
                    ];

                    $i = 0;

                    while (($size / 1024) > 1) {
                        $size = $size / 1024;
                        $i++;
                    }

                    $data['error_warning'] = sprintf($this->language->get('error_warning'), basename($file), round(substr($size, 0, strpos($size, '.') + 4), 2) . $suffix[$i]);
                } else {
                    $data['sms_log'] = file_get_contents($file, FILE_USE_INCLUDE_PATH, null);
                }
            }
        } else {
            $this->clearLog();
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/ocd_sms_notify', $data));
    }

    public function order() {
        $this->load->language('extension/module/ocd_sms_notify');

        $data['user_token'] = $this->session->data['user_token'];

        $this->load->model('localisation/order_status');

        $data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

        return $this->load->view('extension/module/ocd_sms_notify_list', $data);
    }

    public function orderInfo() {
        $this->load->language('extension/module/ocd_sms_notify');

        if (isset($this->request->get['order_id'])) {
            $data['order_id'] = $this->request->get['order_id'];
        } else {
            $data['order_id'] = 0;
        }

        if (isset($this->request->post['sms_notify_sms_template'])) {
            $data['sms_template'] = $this->request->post['sms_notify_sms_template'];
        } elseif ($this->config->get('sms_notify_sms_template')) {
            $data['sms_template'] = html_entity_decode($this->config->get('sms_notify_sms_template'), ENT_QUOTES, 'UTF-8');
        } else {
            $data['sms_template'] = '';
        }

        $data['force'] = $this->config->get('sms_notify_force');

        $data['user_token'] = $this->session->data['user_token'];

        return $this->load->view('extension/module/ocd_sms_notify_info', $data);
    }

    public function sendSms() {
        $json = [];

        $this->load->language('extension/module/ocd_sms_notify');

        $this->load->model('sale/order');
        $this->load->model('extension/module/ocd_sms_notify');

        if (isset($this->request->get['order_id'])) {
            $order_info = $this->model_sale_order->getOrder($this->request->get['order_id']);
        } else {
            $order_info = [];
        }

        if ((utf8_strlen($this->request->post['sms_message']) < 3)) {
            $json['error'] = $this->language->get('error_sms');
        }

        if ($this->config->get('sms_notify_gatename') && $this->config->get('sms_notify_gate_username')) {
            if ($order_info) {
                $phone = preg_replace("/[^0-9]/", '', $order_info['telephone']);
            } elseif ($this->request->post['phone']) {
                $phone = preg_replace("/[^0-9]/", '', $this->request->post['phone']);
            } else {
                $phone = false;
                $json['error'] = $this->language->get('error_sms');
            }
        } else {
            $json['error'] = $this->language->get('error_sms_setting');
        }

        if (!isset($json['error'])) {
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
                'message'   => $this->request->post['sms_message'],
                'ttl'       => $this->config->get('sms_notify_viber_ttl'),
                'image_url' => $viber_image ? $viber_image : false,
                'caption'   => $this->config->get('sms_notify_viber_caption'),
                'action'    => $this->config->get('sms_notify_viber_url'),
            ];

            $options = [
                'to'       => $phone,
                'from'     => $this->config->get('sms_notify_from'),
                'username' => $this->config->get('sms_notify_gate_username'),
                'password' => $this->config->get('sms_notify_gate_password'),
                'message'  => $this->request->post['sms_message'],
                'viber'    => $viber_options,
            ];

            $sms = new OcdSms($this->config->get('sms_notify_gatename'), $options);
            $sms->send();

            if ($order_info) {
                $this->model_extension_module_ocd_sms_notify->addOrderHistory($order_info['order_id'], $order_info['order_status_id'], $options['message']);
            }

            $json['success'] = $this->language->get('text_success_sms');
        }

        $this->response->setOutput(json_encode($json));
    }

    public function sendSmsMass() {
        $json = [];

        $this->load->language('extension/module/ocd_sms_notify');

        $this->load->model('sale/order');
        $this->load->model('extension/module/ocd_sms_notify');

        if (isset($this->request->post)) {
            $numbers = $this->model_extension_module_ocd_sms_notify->getOrdersPhone($this->request->post);
        } else {
            $numbers = [];
        }
        if ((utf8_strlen($this->request->post['sms_message']) < 3)) {
            $json['error'] = $this->language->get('error_sms');
        }

        $phones = implode(',', array_unique($numbers));

        if ($this->config->get('sms_notify_gatename') && $this->config->get('sms_notify_gate_username')) {
            if (!$phones) {
                $$phones = false;
                $json['error'] = $this->language->get('error_sms');
            }
        } else {
            $json['error'] = $this->language->get('error_sms_setting');
        }

        if (!isset($json['error'])) {
            $options = [
                'to'       => $phones,
                'from'     => $this->config->get('sms_notify_from'),
                'username' => $this->config->get('sms_notify_gate_username'),
                'password' => $this->config->get('sms_notify_gate_password'),
                'message'  => $this->request->post['sms_message']
            ];

            $sms = new OcdSms($this->config->get('sms_notify_gatename'), $options);
            $sms->send();

            $json['success'] = $this->language->get('text_success_sms');
        }

        $this->response->setOutput(json_encode($json));
    }

    public function clearLog() {
        $json = [];

        $this->load->language('extension/module/ocd_sms_notify');

        if (!$this->user->hasPermission('modify', 'extension/module/ocd_sms_notify')) {
            $json['error'] = $this->language->get('error_permission');
        } else {
            $file = DIR_LOGS . 'sms_log.log';

            $handle = fopen($file, 'w+');

            fclose($handle);

            $json['success'] = $this->language->get('text_success_log');
        }

        $this->response->setOutput(json_encode($json));
    }

    public function install() {
        $this->load->model('setting/setting');
        $this->model_setting_setting->editSetting('module_ocd_sms_notify', ['module_ocd_sms_notify_status' => '1']);
        //Add Events
        $this->load->model('setting/event');
        $this->model_setting_event->addEvent('ocd_sms_notify_review_alert', 'catalog/model/catalog/review/addReview/before', 'extension/module/ocd_sms_notify/review');
        $this->model_setting_event->addEvent('ocd_sms_notify_order_alert', 'catalog/model/checkout/order/addOrderHistory/before', 'extension/module/ocd_sms_notify/order');
    }

    public function uninstall() {
        $this->load->model('setting/setting');
        $this->model_setting_setting->deleteSetting('sms_notify');
        //Remove Events
        $this->load->model('setting/event');
        $this->model_setting_event->deleteEventByCode('ocd_sms_notify_review_alert');
        $this->model_setting_event->deleteEventByCode('ocd_sms_notify_order_alert');
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/ocd_sms_notify')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}