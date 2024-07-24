<?php
class ControllerCommonFooter extends Controller {
	public function index() {

            // ts_messengers_widget start

            $module_ts_messengers_widget_status = $this->config->get('module_ts_messengers_widget_status');
            $module_ts_messengers_widget_settings = $this->config->get('module_ts_messengers_widget_settings');
            $module_ts_messengers_widget_data = $this->config->get('module_ts_messengers_widget_data');

            $data['module_ts_messengers_widget_status'] = $module_ts_messengers_widget_status;
            $data['module_ts_messengers_widget_settings'] = $module_ts_messengers_widget_settings;
            $data['module_ts_messengers_widget_data'] = $module_ts_messengers_widget_data;

            if (isset($module_ts_messengers_widget_status) && $module_ts_messengers_widget_status) {

            $this->document->addStyle('catalog/view/theme/default/stylesheet/t-solutions/ts_messengers_widget.css');
            $this->document->addStyle('catalog/view/theme/default/stylesheet/t-solutions/ts_messengers_widget_settings.css');

            $this->load->model('localisation/language');
            $this->load->model('tool/image');

            $data['tip_text'] = $module_ts_messengers_widget_settings[$this->session->data['language']]['tip_text'];
            $data['manager_text'] = $module_ts_messengers_widget_settings[$this->session->data['language']]['manager_text'];

            if (isset($module_ts_messengers_widget_settings['image']) &&  $module_ts_messengers_widget_settings['image'] != "") {
                $data['manager_image'] = $this->model_tool_image->resize($module_ts_messengers_widget_settings['image'], 50, 50);
            } else {
                $data['manager_image'] = '';
            }

            $data['messengers'] = array();

            if (isset($module_ts_messengers_widget_data) && $module_ts_messengers_widget_data) {

            foreach ($module_ts_messengers_widget_data as $messenger) {

            if (!empty($messenger['link_status'])) {
                    $data['messengers'][] = array(
                        'link' => $messenger['link'],
                        'field' => $messenger['field'],
                        'link_text' => $messenger[$this->session->data['language']]['link_text'],
                        'icon' => ($messenger['icon']) ? $messenger['icon'] : false,
                        'sort_order' => $messenger['sort_order']
                    );
                }

            }

            $sorting = array_column($data['messengers'], 'sort_order');
            array_multisort($sorting, SORT_ASC, $data['messengers']);

            }

            }

            // ts_messengers_widget end
            
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');
		$data['styles'] = $this->document->getStyles('footer');
		

			$data = array_merge($data, $this->load->controller('extension/module/uni_new_data', ['type' => 'footer']));
			
$data['config_counters'] = html_entity_decode($this->config->get('config_counters'), ENT_QUOTES, 'UTF-8');
		return $this->load->view('common/footer', $data);
	}
}
