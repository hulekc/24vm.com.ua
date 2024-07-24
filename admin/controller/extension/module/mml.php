<?php
class ControllerExtensionModuleMML extends Controller {
	private $version = '3.1.0';
	private $error = array();

	public function index() {
		$this->load->language('extension/module/mml');
		
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/mml', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/mml', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/mml', $data));
	}
	
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/mml')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}


	protected function validate_form() {
		return !$this->error;
	}

	private function getEvents() {
		$events = array(
			'mml' => array(
				'trigger' => 'catalog/controller/*/before',
				'action'  => 'extension/module/mml',
			),
		);
		return $events;
	}
	public function install() {
		$events = $this->getEvents();
		$this->load->model('setting/event');
		foreach ($events as $code=>$value) {
			$this->model_setting_event->deleteEventByCode($code);
			$this->model_setting_event->addEvent($code, $value['trigger'], $value['action'], 1,9999);
		}
	}

	public function uninstall() {
		$events = $this->getEvents();
		$this->load->model('setting/event');
		foreach ($events as $code=>$value) {
			$this->model_setting_event->deleteEventByCode($code);
		}				
	}
	
}