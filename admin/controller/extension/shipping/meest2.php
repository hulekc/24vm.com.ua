<?php
class ControllerExtensionShippingMeest2 extends Controller {

	private $error = [];

	public function index()	 {
        $this->load->language('extension/shipping/meest2');

        $this->document->setTitle(strip_tags($this->language->get('heading_title')));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('shipping_meest2', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true));
        }

        $data['heading_title'] = $this->language->get('heading_title');

        $data['text_edit']      = $this->language->get('text_edit');
        $data['text_enabled']   = $this->language->get('text_enabled');
        $data['text_disabled']  = $this->language->get('text_disabled');
        $data['text_all_zones'] = $this->language->get('text_all_zones');
        $data['text_none']      = $this->language->get('text_none');

        $data['entry_cost']       = $this->language->get('entry_cost');
        $data['entry_tax_class']  = $this->language->get('entry_tax_class');
        $data['entry_geo_zone']   = $this->language->get('entry_geo_zone');
        $data['entry_status']     = $this->language->get('entry_status');
        $data['entry_sort_order'] = $this->language->get('entry_sort_order');

        $data['button_save']   = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['breadcrumbs'] = [
            [
                'text' => $this->language->get('text_home'),
                'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
            ],
            [
                'text' => $this->language->get('text_shipping'),
                'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true)
            ],
            [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/shipping/meest2', 'user_token=' . $this->session->data['user_token'], true)
            ]
        ];

        $data['action'] = $this->url->link('extension/shipping/meest2', 'user_token=' . $this->session->data['user_token'], true);
        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true);

        if (isset($this->request->post['shipping_meest2_cost'])) {
            $data['shipping_meest2_cost'] = $this->request->post['shipping_meest2_cost'];
        } else {
            $data['shipping_meest2_cost'] = $this->config->get('shipping_meest2_cost');
        }

        if (isset($this->request->post['shipping_meest2_tax_class_id'])) {
            $data['shipping_meest2_tax_class_id'] = $this->request->post['shipping_meest2_tax_class_id'];
        } else {
            $data['shipping_meest2_tax_class_id'] = $this->config->get('shipping_meest2_tax_class_id');
        }

        $this->load->model('localisation/tax_class');

        $data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();

        if (isset($this->request->post['shipping_meest2_geo_zone_id'])) {
            $data['shipping_meest2_geo_zone_id'] = $this->request->post['shipping_meest2_geo_zone_id'];
        } else {
            $data['shipping_meest2_geo_zone_id'] = $this->config->get('shipping_meest2_geo_zone_id');
        }

        $this->load->model('localisation/geo_zone');

        $data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

        if (isset($this->request->post['shipping_meest2_status'])) {
            $data['shipping_meest2_status'] = $this->request->post['shipping_meest2_status'];
        } else {
            $data['shipping_meest2_status'] = $this->config->get('shipping_meest2_status');
        }

        if (isset($this->request->post['shipping_meest2_sort_order'])) {
            $data['shipping_meest2_sort_order'] = $this->request->post['shipping_meest2_sort_order'];
        } else {
            $data['shipping_meest2_sort_order'] = $this->config->get('shipping_meest2_sort_order');
        }

        if (isset($this->request->post['shipping_meest2_service'])) {
            $data['shipping_meest2_service'] = $this->request->post['shipping_meest2_service'];
        } elseif ($this->config->has('shipping_meest2_service')) {
            $data['shipping_meest2_service'] = $this->config->get('shipping_meest2_service');
        } else {
            $data['shipping_meest2_service'] = [];
        }

        $data['services'] = [
            [
                'text'  => $this->language->get('text_shipping_warehouse'),
                'value' => 'warehouse'
            ],
            [
                'text'  => $this->language->get('text_shipping_postomat'),
                'value' => 'postomat'
            ],
            [
                'text'  => $this->language->get('text_shipping_courier'),
                'value' => 'courier'
            ]
        ];
        $data['branches'] = str_replace('&amp;','&',$this->url->link('extension/shipping/meest2/branches','user_token=' . $this->session->data['user_token'],true));
        $data['branchesUpdate'] = str_replace('&amp;','&',$this->url->link('extension/shipping/meest2/branchesUpdate','user_token=' . $this->session->data['user_token'],true));

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/shipping/meest2', $data));
	}

	public function install() {
		$this->load->model('extension/shipping/meest2');
		$this->model_extension_shipping_meest2->install();
        $this->branches();
	}

	public function branches() {
		$meest = new Meest($this->registry);
		$result = $meest->branches(null, ['viewdata'=>'full']);
		$json['success'] = 0;

		$this->load->model('extension/shipping/meest2');
		if (isset($result['result']) && $result['status'] === 1) {

            $this->model_extension_shipping_meest2->truncateTable();

			foreach ($result['result'] as $branch) {
				$sql = [];
				$sql['br_id'] = $branch['br_id'];
				$sql['num'] = $branch['num'];
				$sql['type_id'] = $branch['type_id'];
				$sql['type_public_ua'] = $branch['type_public']['ua'];
				$sql['type_public_ru'] = $branch['type_public']['ru'];
				$sql['type_public_en'] = $branch['type_public']['en'];

				if (isset($branch['region_id'])) {
					$sql['region_id'] = $branch['region_id'];
				} else {
					$sql['region_id'] = '';
				}

				if (isset($branch['region'])) {
					$sql['region_ua'] = $branch['region']['ua'];
					$sql['region_ru'] = $branch['region']['ru'];
					$sql['region_en'] = $branch['region']['en'];
				} else {
					$sql['region_ua'] = '';
					$sql['region_ru'] = '';
					$sql['region_en'] = '';
				}

				if (isset($branch['district_id'])) {
					$sql['district_id'] = $branch['district_id'];
				} else {
					$sql['district_id'] = '';
				}

				if (isset($branch['district'])) {
					$sql['district_ua'] = $branch['district']['ua'];
					$sql['district_ru'] = $branch['district']['ru'];
					$sql['district_en'] = $branch['district']['en'];
				} else {
					$sql['district_ua'] = '';
					$sql['district_ru'] = '';
					$sql['district_en'] = '';
				}

				$sql['city_id'] = $branch['city_id'];
				$sql['city_ua'] = $branch['city']['ua'];
				$sql['city_ru'] = $branch['city']['ru'];
				$sql['city_en'] = $branch['city']['en'];

				if (isset($branch['street_id'])) {
					$sql['street_id'] = $branch['street_id'];
				} else {
					$sql['street_id'] = '';
				}

				if (isset($branch['street'])) {
					$sql['street_ua'] = $branch['street']['ua'];
					$sql['street_ru'] = $branch['street']['ru'];
					$sql['street_en'] = $branch['street']['en'];
				} else {
					$sql['street_ua'] = '';
					$sql['street_ru'] = '';
					$sql['street_en'] = '';
				}

                if (isset($branch['street_number'])) {
                    $sql['street_number'] = $branch['street_number'];
                } else {
                    $sql['street_number'] = '';
                }

				if (isset($branch['zip'])) {
					$sql['zip'] = '';
				} else {
					$sql['zip'] = '';
				}

				$sql['lng'] = $branch['lng'];
				$sql['lat'] = $branch['lat'];
				$sqls[] = $this->model_extension_shipping_meest2->prepare($sql);
			}

            $this->model_extension_shipping_meest2->addBranch($sqls);

			$json['success'] = 1;
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/shipping/meest2')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
