<?php
class ControllerExtensionModuleFeedback extends Controller {
	public function index() {
        $this->load->language('extension/module/feedback');
        
        if (isset($this->config->get('module_feedback_title')[$this->config->get('config_language_id')])) {
			$data['heading_title'] = html_entity_decode($this->config->get('module_feedback_title')[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
		} else {
            $data['heading_title'] = '';
        }
        
        if (isset($this->config->get('module_feedback_main')[$this->config->get('config_language_id')])) {
			$data['text_main'] = html_entity_decode($this->config->get('module_feedback_main')[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
        } else {
            $data['text_main'] = '';
        }
        
		$data['email_active'] = $this->config->get('module_feedback_email');

		// Captcha
        if (!$this->customer->isLogged() && $this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('feedback', (array)$this->config->get('config_captcha_page'))) {
            $data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'), $this->error);
        } else {
            $data['captcha'] = '';
		}
		
		if ($this->customer->isLogged()) {
            $data['name'] = $this->customer->getFirstName() . '&nbsp;' . $this->customer->getLastName();
        } else {
            $data['name'] = '';
        }

        if ($this->customer->isLogged()) {
            $data['phone'] = $this->customer->getTelephone();
        } else {
            $data['phone'] = '';
        }
		
		if (($this->config->get('module_feedback_email') == 1) && $this->customer->isLogged()) {
            $data['email'] = $this->customer->getEmail();
        } elseif ($this->config->get('module_feedback_email') == 1) {
            $data['email'] = '';
        } else {
        }

		return $this->load->view('extension/module/feedback', $data);
	}

	public function write() {
        $this->load->language('extension/module/feedback');

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			$data['error_name'] =  $this->language->get('error_name');
            $data['error_phone'] =  $this->language->get('error_phone');
            $data['error_email'] =  $this->language->get('error_email');
            $data['error_enquiry'] =  $this->language->get('error_enquiry');
			$data['text_success'] = $this->language->get('text_success');
			
			if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 25)) {
                $json['error'] = $data['error_name'];
            }

            if ((utf8_strlen($this->request->post['phone']) < 3) || (utf8_strlen($this->request->post['phone']) > 25)) {
                $json['error'] = $data['error_phone'];
            }

            if ($this->config->get('module_feedback_email') == 1) {
            	if (!filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
	                $json['error'] = $data['error_email'];
	            }
            }

            if ((utf8_strlen($this->request->post['enquiry']) < 10) || (utf8_strlen($this->request->post['enquiry']) > 3000)) {
                $json['error'] = $data['error_enquiry'];
            }

            // Captcha
			if (!$this->customer->isLogged() && $this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('feedback', (array)$this->config->get('config_captcha_page'))) {
                $captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

                if ($captcha) {
                    $json['error'] = $captcha;
                }
			}
			
			if (!isset($json['error'])) {
				$json['success'] = $data['text_success'];
				
				$mail = new Mail($this->config->get('config_mail_engine'));
				$mail->parameter = $this->config->get('config_mail_parameter');
				$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
				$mail->smtp_username = $this->config->get('config_mail_smtp_username');
				$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
				$mail->smtp_port = $this->config->get('config_mail_smtp_port');
				$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
	
				$mail->setTo($this->config->get('config_email'));
				$mail->setFrom($this->config->get('config_email'));
				$mail->setSender(html_entity_decode($this->request->post['name'], ENT_QUOTES, 'UTF-8'));
				$mail->setSubject(html_entity_decode(sprintf($this->language->get('email_subject'), $this->request->post['name']), ENT_QUOTES, 'UTF-8'));
				if ($this->config->get('module_feedback_email') == 1) {
					$mail->setReplyTo($this->request->post['email']);
					$mail->setText($this->request->post['name'] . ' ' . $this->request->post['phone'] . "\n" . $this->request->post['email'] . "\n" . $this->request->post['enquiry']);
				} else {
					$mail->setText($this->request->post['name'] . ' ' . $this->request->post['phone'] . "\n" . $this->request->post['enquiry']);
				}
				$mail->send();
			}
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}