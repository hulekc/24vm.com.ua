<?php

require_once(DIR_SYSTEM . 'library/ldevsmartvideowidget.php');

class ControllerExtensionModuleLdevSmartVideoWidget extends Controller {
	private $error = array();
	private $output = array();

    

    public function __construct($registry)
    {
        parent::__construct($registry);
        $this->ldev_smart_video_widget = new LdevSmartVideoWidget($registry);
        $this->version = $this->ldev_smart_video_widget->oc_version();


        if($this->version < 23){
            $this->path = 'module/ldev_smart_video_widget';
            $this->extensionPath = 'extension/module';
        }elseif($this->version == 23){
            $this->path = 'extension/module/ldev_smart_video_widget';
            $this->extensionPath = 'extension/extension';
        }else{
            $this->path = 'extension/module/ldev_smart_video_widget';
            $this->extensionPath = 'marketplace/extension';
            $this->setPref = 'module_';
        }
        if($this->version <= 23){
            $this->tempExt = '.tpl';
        }

        $this->tokenKey = ($this->version <=23) ? 'token' : 'user_token';

    }

	public function index() {
        $this->load->language($this->path);

		$this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');
        $this->load->model('tool/image');

        $this->load->model('catalog/category');
        $this->load->model('catalog/manufacturer');
        $this->load->model('catalog/product');
        $this->load->model('catalog/information');



        if($this->version <= 23) {
            $this->load->model('extension/module');
        }else{
            $this->load->model('setting/module');
        }


        $g_set = $this->model_setting_setting->getSetting($this->setPref.'ldev_smart_video_widget');





        $module_info = [];

        if (isset($this->request->get['module_id'])) {
            if($this->version <= 23){
                $module_info = $this->model_extension_module->getModule($this->request->get['module_id']);
            }else{
                $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
            }

        }


        $this->ldev_smart_video_widget->initModule($this->output,$g_set);




        $this->output['success'] = isset($this->session->data['success']) ? $this->session->data['success'] : '';
        unset($this->session->data['success']);


		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {


            if(isset($this->request->post['form_set']) && !$this->output['s']){
                $this->model_setting_setting->editSetting($this->setPref.'ldev_smart_video_widget', [
                    $this->setPref.'ldev_smart_video_widget_ks' => $this->request->post['form_set']
                ]);
            }


			if (!isset($this->request->get['module_id'])) {
			    if($this->version <= 23){
                    $this->model_extension_module->addModule('ldev_smart_video_widget', $this->request->post);
                }else{

                    $this->model_setting_module->addModule('ldev_smart_video_widget', $this->request->post);
                }

			} else {

                if($this->version <= 23) {
                    $this->model_extension_module->editModule($this->request->get['module_id'], $this->request->post);
                }else{
                    $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
                }
			}


			$this->session->data['success'] = $this->language->get('text_success');

            if(isset($this->request->get['apply'])){
                $this->response->redirect($this->url->link($this->path, $this->tokenKey.'=' . $this->session->data[$this->tokenKey] . '&type=module&module_id='. $this->request->get['module_id'], true));
            }else {
                $this->response->redirect($this->url->link($this->extensionPath, $this->tokenKey . '=' . $this->session->data[$this->tokenKey] . '&type=module', true));
            }
		}




		if (isset($this->error['warning'])) {
			$this->output['error_warning'] = $this->error['warning'];
		} else {
			$this->output['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$this->output['error_name'] = $this->error['name'];
		} else {
			$this->output['error_name'] = '';
		}

        if($this->version == 20){
            $this->output['lang'] = $this->language->all_keys();
        }else{
            $this->output['lang'] = $this->language->all();
        }


        if (isset($this->request->post['image']) && is_file(DIR_IMAGE . $this->request->post['image'])) {
            $this->output['thumb'] = $this->model_tool_image->resize($this->request->post['image'], 100, 100);
        } elseif (isset($module_info['image']) && is_file(DIR_IMAGE . $module_info['image'])) {
            $this->output['thumb'] = $this->model_tool_image->resize($module_info['image'], 100, 100);
        } else {
            $this->output['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$this->output['breadcrumbs'] = array();

		$this->output['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', $this->tokenKey.'=' . $this->session->data[$this->tokenKey], true)
		);

        $this->output['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link($this->extensionPath, $this->tokenKey.'=' . $this->session->data[$this->tokenKey] . '&type=module', true)
        );

		if (!isset($this->request->get['module_id'])) {
			$this->output['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
                'href' => $this->url->link($this->path, $this->tokenKey.'=' . $this->session->data[$this->tokenKey], true)
			);
		} else {
			$this->output['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
                'href' => $this->url->link($this->path, $this->tokenKey.'=' . $this->session->data[$this->tokenKey]. '&module_id=' . $this->request->get['module_id'], true),
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$this->output['action'] = $this->url->link($this->path, $this->tokenKey.'=' . $this->session->data[$this->tokenKey], true);
            $this->output['apply'] = '';
        } else {
			$this->output['action'] = $this->url->link($this->path, $this->tokenKey.'=' . $this->session->data[$this->tokenKey] . '&module_id=' . $this->request->get['module_id'], true);
            $this->output['apply'] = $this->url->link($this->path, $this->tokenKey.'=' . $this->session->data[$this->tokenKey].'&module_id='.$this->request->get['module_id'].'&apply=1', true);

        }


        $this->output['k_s'] = isset($g_set[$this->setPref.'ldev_smart_video_widget_ks']) ? $g_set[$this->setPref.'ldev_smart_video_widget_ks'] : '';
		$this->output['cancel'] = $this->url->link($this->extensionPath,  $this->tokenKey.'=' . $this->session->data[$this->tokenKey] . '&type=module', true);
		$this->output['token'] = $this->session->data[$this->tokenKey];


        $this->load->model('localisation/language');
        $this->output['languages'] = $this->model_localisation_language->getLanguages();
        foreach ($this->output['languages'] as $k => $lang){
            if($this->version < 22){
                $this->output['languages'][$k]['flag'] = 'view/image/flags/'.$lang['image'];
            }else{
                $this->output['languages'][$k]['flag'] = 'language/'.$lang['code'].'/'.$lang['code'].'.png';
            }
        }


        $this->output['shop_categories'] =  $this->model_catalog_category->getCategories(['sort' => 'name', 'order' => 'ASC']);
        $this->output['shop_manufacturers'] =  $this->model_catalog_manufacturer->getManufacturers(['sort' => 'name', 'order' => 'ASC']);
        $this->output['shop_informations'] = $this->model_catalog_information->getInformations();

        $this->setFields($module_info);


        //featured products
        if(isset($this->request->get['module_id']) && isset($module_info['module_products'])) {
            $this->output['module_products'] = array();
            foreach ($module_info['module_products'] as $product_id){
                $product_info = $this->model_catalog_product->getProduct($product_id);
                if(!$product_info) continue;
                $this->output['module_products'][] = [
                    'product_id' => $product_id,
                    'name' => $product_info['name']
                ];
            }
        } else {
            $this->output['module_products'] = array();
        }
        //



		if (isset($this->request->post['status'])) {
			$this->output['status'] = $this->request->post['status'];
		} elseif (isset($module_info['status'])) {
			$this->output['status'] = $module_info['status'];
		} else {
			$this->output['status'] = '';
		}


		$this->output['header'] = $this->load->controller('common/header');
		$this->output['column_left'] = $this->load->controller('common/column_left');
		$this->output['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view($this->path.$this->tempExt, $this->output));
	}

    private function setFields($module_info){
        foreach ($this->ldev_smart_video_widget->getFields() as $field => $value){
            if (isset($this->request->post[$field])) {
                $this->output[$field] = $this->request->post[$field];
            } elseif (isset($module_info[$field])) {
                $this->output[$field] = $module_info[$field];
            } else {
                $this->output[$field] = $value;
            }
        }
    }

	protected function validate() {
		if (!$this->user->hasPermission('modify', $this->path)) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if  (isset($this->request->post['name']) && ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64))) {
			$this->error['name'] = $this->language->get('error_name');
		}

		return !$this->error;
	}

	public function install(){
        $this->load->model('user/user_group');

        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', $this->path);
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', $this->path);
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', $this->path);
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', $this->path);

    }
}
