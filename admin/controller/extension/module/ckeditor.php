<?php
class ControllerExtensionModuleCKEditor extends Controller {
    private $error = array();
    private $token = '';

    public function __construct($registry) {
        parent::__construct($registry);

        $this->token = isset($this->session->data['user_token']) ? 'user_token='.$this->session->data['user_token'] : 'token='.$this->session->data['token'];
    }

    public function index() {
        $data = array();
        
        $data = array_merge($data,$this->load->language('extension/module/ckeditor'));

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('module_ckeditor', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            if (version_compare(VERSION, '3', '>=')) {
                $extension_link = $this->url->link('marketplace/extension', 'type=payment&' . $this->token, 'SSL');
            } else if (version_compare(VERSION, '2.3', '>=')) {
                $extension_link = $this->url->link('extension/extension', 'type=payment&' . $this->token, 'SSL');
            }

            $this->response->redirect($extension_link);
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', $this->token, true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', $this->token . '&type=module', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/ckeditor', $this->token, true)
        );

        $data['action'] = $this->url->link('extension/module/ckeditor', $this->token, true);

        $data['cancel'] = $this->url->link('marketplace/extension', $this->token . '&type=module', true);

        if (isset($this->request->post['module_ckeditor_status'])) {
            $data['module_ckeditor_status'] = $this->request->post['module_ckeditor_status'];
        } elseif($this->config->has('module_ckeditor_status')) {
            $data['module_ckeditor_status'] = $this->config->get('module_ckeditor_status');
        } else {
            $data['module_ckeditor_status'] = 0;
        }

        if (isset($this->request->post['module_ckeditor_allowed_files'])) {
            $data['module_ckeditor_allowed_files'] = $this->request->post['module_ckeditor_allowed_files'];
        } elseif($this->config->has('module_ckeditor_allowed_files')) {
            $data['module_ckeditor_allowed_files'] = $this->config->get('module_ckeditor_allowed_files');
        } else {
            $data['module_ckeditor_allowed_files'] = 0;
        }

        if (isset($this->request->post['module_ckeditor_replace_default_filemanager'])) {
            $data['module_ckeditor_replace_default_filemanager'] = $this->request->post['module_ckeditor_replace_default_filemanager'];
        } elseif($this->config->has('module_ckeditor_replace_default_filemanager')) {
            $data['module_ckeditor_replace_default_filemanager'] = $this->config->get('module_ckeditor_replace_default_filemanager');
        } else {
            $data['module_ckeditor_replace_default_filemanager'] = 0;
        }


        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        
        if (version_compare(VERSION, '3', '>=')) {
          $this->config->set('template_engine', 'template');
          $this->response->setOutput($this->load->view('extension/module/ckeditor', $data));
        } else {
          $this->response->setOutput($this->load->view('extension/module/ckeditor.tpl', $data));
        }
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/ckeditor')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}