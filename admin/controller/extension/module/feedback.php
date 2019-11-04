<?php
class ControllerExtensionModuleFeedback extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/feedback');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_feedback', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/feedback', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/feedback', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_feedback_status'])) {
			$data['module_feedback_status'] = $this->request->post['module_feedback_status'];
		} else {
			$data['module_feedback_status'] = $this->config->get('module_feedback_status');
		}

		if (isset($this->request->post['module_feedback_header'])) {
			$data['module_feedback_header'] = $this->request->post['module_feedback_header'];
		} else {
			$data['module_feedback_header'] = $this->config->get('module_feedback_header');
		}

		if (isset($this->request->post['module_feedback_email'])) {
			$data['module_feedback_email'] = $this->request->post['module_feedback_email'];
		} else {
			$data['module_feedback_email'] = $this->config->get('module_feedback_email');
		}

		if (isset($this->request->post['module_feedback_title'])) {
			$data['module_feedback_title'] = $this->request->post['module_feedback_title'];
		} else {
			$data['module_feedback_title'] = $this->config->get('module_feedback_title');
		}

		if (isset($this->request->post['module_feedback_main'])) {
			$data['module_feedback_main'] = $this->request->post['module_feedback_main'];
		} else {
			$data['module_feedback_main'] = $this->config->get('module_feedback_main');
		}

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/feedback', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/feedback')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}