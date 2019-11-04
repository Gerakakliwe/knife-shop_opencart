<?php
class ControllerExtensionModuleCookiePolicy extends Controller {
    private $error = array(); 

    public function index() {   

        $language = $this->load->language('extension/module/cookiepolicy');

        $this->document->setTitle($this->language->get('text_title'));
        
        $this->load->model('setting/setting');
		
	$this->load->model('localisation/language');

	$data['languages'] = $this->model_localisation_language->getLanguages();
		
	$data = array_merge($data, $language);

	$text_strings = array();

	foreach ($text_strings as $text) {
	$data[$text] = $this->language->get($text);
        }
		
        $config_data = array(
		'module_cookiepolicy_status',
		'module_cookiepolicy_position',
		'module_cookiepolicy_accept_button_colour',
		'module_cookiepolicy_accept_button_hover',
		'module_cookiepolicy_accept_text_colour',
		'module_cookiepolicy_accept_text_hover',
		'module_cookiepolicy_text_colour',
		'module_cookiepolicy_background_colour',
		'module_cookiepolicy_opacity',
		'module_cookiepolicy_url',
		'module_cookiepolicy_random_url',
		'module_cookiepolicy_infopage',
		'module_cookiepolicy_rounded_corners',
		'module_cookiepolicy_cookie_expires',
		'module_cookiepolicy_text_align',
		'module_cookiepolicy_cookietext',
		'module_cookiepolicy_urltext',
		'module_cookiepolicy_cookietext_after',
		'module_cookiepolicy_buttontext'
	);
        
		$data['module_cookiepolicy_conf'] = $this->model_setting_setting->getSetting('module_cookiepolicy');
		
		foreach ($config_data as $conf) {
			if (isset($this->request->post[$conf])) {
			$data[$conf] = $this->request->post[$conf];
			} else {
			if(isset($data['module_cookiepolicy_conf'][$conf])) {
			$data[$conf] = $data['module_cookiepolicy_conf'][$conf];
			} else {
			$data[$conf] = false;
			}
			}
		}


		$languages = $this->model_localisation_language->getLanguages();
		
		$data['languages'] = $languages;
		$data['language_id'] = '';
		
		foreach ($languages as $language) {
			if ($language['code'] == $this->config->get('config_admin_language')) {
				$data['language_id'] = $language['language_id'];
			}
		}

                        if (isset($this->request->post['module_cookiepolicy_infopage'])) {
                        $data['module_cookiepolicy_infopage'] = $this->request->post['module_cookiepolicy_infopage'];
	                } else {
                        $data['module_cookiepolicy_infopage'] = $this->config->get('module_cookiepolicy_infopage');
        	        }

                        $data['infopage_number'] = $this->config->get('module_cookiepolicy_infopage');

		        $this->load->model('catalog/information');

                	$data['informations'] = $this->model_catalog_information->getInformations();

			if ($data['infopage_number'] > '0') {
				$data['module_cookiepolicy_random_url'] = '0';
			}

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
					
			$this->model_setting_setting->editSetting('module_cookiepolicy', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('extension/module/cookiepolicy&submit=true', 'user_token=' . $this->session->data['user_token'], true));

		}
    
		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
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
            'text' => $this->language->get('text_module'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );
        
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/cookiepolicy', 'user_token=' . $this->session->data['user_token'], true)
        );
        
        $data['action'] = $this->url->link('extension/module/cookiepolicy', 'user_token=' . $this->session->data['user_token'], true);
        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_cookiepolicy_status'])) {
			$data['module_cookiepolicy_status'] = $this->request->post['module_cookiepolicy_status'];
		} else {
			$data['module_cookiepolicy_status'] = $this->config->get('module_cookiepolicy_status');
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/cookiepolicy', $data));
    }
    
	public function install(){
		$this->load->model('setting/setting');

		$cookiepolicy_cookietext = json_decode('{"text":{"en-gb":"We use cookies for the best experience on our website. For more information see ","ru-ru":"\u041c\u044b \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0435\u043c \u0444\u0430\u0439\u043b\u044b cookie \u0441 \u0446\u0435\u043b\u044c\u044e \u043e\u043f\u0442\u0438\u043c\u0438\u0437\u0430\u0446\u0438\u0438 \u0440\u0430\u0431\u043e\u0442\u044b \u043d\u0430\u0448\u0435\u0433\u043e \u0432\u0435\u0431-\u0441\u0430\u0439\u0442\u0430. \u0411\u043e\u043b\u0435\u0435 \u043f\u043e\u0434\u0440\u043e\u0431\u043d\u0430\u044f \u0438\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0438\u044f \u0441\u043e\u0434\u0435\u0440\u0436\u0438\u0442\u0441\u044f \u0432 ","uk-ua":"\u041c\u0438 \u0432\u0438\u043a\u043e\u0440\u0438\u0441\u0442\u043e\u0432\u0443\u0454\u043c\u043e \u0444\u0430\u0439\u043b\u0438 cookie, \u0449\u043e\u0431 \u0432\u0430\u0448\u0435 \u043a\u043e\u0440\u0438\u0441\u0442\u0443\u0432\u0430\u043d\u043d\u044f \u0441\u0430\u0439\u0442\u043e\u043c \u0431\u0443\u043b\u043e \u0437\u0440\u0443\u0447\u043d\u0456\u0448\u0438\u043c. \u0414\u0456\u0437\u043d\u0430\u0439\u0442\u0435\u0441\u044f \u0431\u0456\u043b\u044c\u0448\u0435 \u043f\u0440\u043e \u0444\u0430\u0439\u043b\u0438 cookie \u043d\u0430 \u0441\u0442\u043e\u0440\u0456\u043d\u0446\u0456 "}}', true);
		$cookiepolicy_urltext = json_decode('{"text":{"en-gb":"\u00abInformation Notice\u00bb","ru-ru":"\u00ab\u0418\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0438\u043e\u043d\u043d\u043e\u043c \u0443\u0432\u0435\u0434\u043e\u043c\u043b\u0435\u043d\u0438\u0438\u00bb","uk-ua":"\u041f\u043e\u043b\u0456\u0442\u0438\u043a\u0438 \u043a\u043e\u043d\u0444\u0456\u0434\u0435\u043d\u0446\u0456\u0439\u043d\u043e\u0441\u0442\u0456"}}', true);
		$cookiepolicy_cookietext_after = json_decode('{"text":{"en-gb":" on the cookie page. By clicking Accept you agree to our use of cookies.","ru-ru":" \u043d\u0430 \u0441\u0442\u0440\u0430\u043d\u0438\u0446\u0435, \u043f\u043e\u0441\u0432\u044f\u0449\u0435\u043d\u043d\u043e\u0439 cookie. \u041a\u043b\u0438\u043a\u043d\u0443\u0432 \u043d\u0430 \u00ab\u041f\u0440\u0438\u043d\u044f\u0442\u044c\u00bb, \u0432\u044b \u0441\u043e\u0433\u043b\u0430\u0448\u0430\u0435\u0442\u0435\u0441\u044c \u043d\u0430 \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u043d\u0438\u0435 \u0444\u0430\u0439\u043b\u043e\u0432 cookie.","uk-ua":". \u041d\u0430\u0442\u0438\u0441\u043d\u0456\u0442\u044c \u00ab\u041f\u0440\u0438\u0439\u043d\u044f\u0442\u0438\u00bb, \u0449\u043e\u0431 \u043f\u043e\u0433\u043e\u0434\u0438\u0442\u0438 \u0432\u0438\u043a\u043e\u0440\u0438\u0441\u0442\u0430\u043d\u043d\u044f \u0444\u0430\u0439\u043b\u0456\u0432 cookie."}}', true);
		$cookiepolicy_buttontext = json_decode('{"text":{"en-gb":"Accept","ru-ru":"\u041f\u0440\u0438\u043d\u044f\u0442\u044c","uk-ua":"\u041f\u0440\u0438\u0439\u043d\u044f\u0442\u0438"}}', true);

		$setting = array(
		'module_cookiepolicy_status'			=> 1,
		'module_cookiepolicy_position'			=> 1,
		'module_cookiepolicy_cookie_expires'		=> '365',
		'module_cookiepolicy_cookietext'		=> $cookiepolicy_cookietext,
		'module_cookiepolicy_urltext'			=> $cookiepolicy_urltext,
		'module_cookiepolicy_cookietext_after'		=> $cookiepolicy_cookietext_after,
		'module_cookiepolicy_buttontext'		=> $cookiepolicy_buttontext,
		'module_cookiepolicy_text_colour'		=> 'FFFFFF',
		'module_cookiepolicy_accept_text_colour'	=> 'FFFFFF',
		'module_cookiepolicy_accept_text_hover'		=> 'FFFFFF',
		'module_cookiepolicy_accept_button_colour'	=> '1E91CF',
		'module_cookiepolicy_accept_button_hover'	=> '343434',
		'module_cookiepolicy_background_colour'		=> '343434',
		'module_cookiepolicy_opacity'			=> '0.8',
		'module_cookiepolicy_infopage'			=> '0',
		'module_cookiepolicy_random_url'		=> '1',
		'module_cookiepolicy_url'			=> 'https://wikipedia.org/wiki/Cookie'
		);

		$this->model_setting_setting->editSetting('module_cookiepolicy', $setting, 0);
		
		$this->load->model('user/user_group');
		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/module/cookiepolicy');
		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/module/cookiepolicy');
	}
 
	public function uninstall(){
		$this->load->model('setting/setting');
		$this->model_setting_setting->deleteSetting('module_cookiepolicy');
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/cookiepolicy')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}