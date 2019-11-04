<?php
class ControllerExtensionModuleJivosite extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/jivosite');

		$this->load->model('setting/setting');

		$this->document->setTitle($this->language->get('heading_title'));

		$jivlang = substr($this->config->get('config_admin_language'),0,2);

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

			$query['partnerId'] = $this->request->post['module_jivosite_partnerId'];
			$query['agentId'] = 2469;
			$query['partnerPassword'] = $this->request->post['module_jivosite_partnerPassword'];
			$query['siteUrl'] = $this->request->post['module_jivosite_siteUrl'];
			$query['email'] = $this->request->post['module_jivosite_email'];
			$query['userPassword'] = $this->request->post['module_jivosite_userPassword'];
			$query['userDisplayName'] = $this->request->post['module_jivosite_userDisplayName'];
			$authToken = md5(time().HTTPS_CATALOG);
			$query['authToken'] = $authToken;
			$query['lang'] = $jivlang;
			$content = http_build_query($query);

			if (ini_get('allow_url_fopen')){
                $useCurl = false;
            } elseif (!extension_loaded('curl')) {
                if (!dl('curl.so')) {
                    $useCurl = false;
                } else {
                    $useCurl = true;
                }
            } else {
                $useCurl = true;
            }

            try {
                $path = "https://admin.jivosite.com/integration/install";
                if (!extension_loaded('openssl')){
                    $path = str_replace('https:','http:',$path);
                }
                if ($useCurl){
                    if ( $curl = curl_init() ) {
                        curl_setopt($curl, CURLOPT_URL, $path);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
                        curl_setopt($curl, CURLOPT_POST, true);
                        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
                        $responce = curl_exec($curl);
                        curl_close($curl);
                    }
                } else {
                    $responce = file_get_contents(
                        $path,
                        false,
                        stream_context_create(
                            array(
                                'http' => array(
                                    'method' => 'POST',
                                    'header' => 'Content-Type: application/x-www-form-urlencoded',
                                    'content' => $content
                                )
                            )
                        )
                    );
                }

                if ($responce) {
                    if (strstr($responce,'Error')){
                        $this->error['jiverror'] = $responce;
                    } else {
                        $this->request->post['module_jivosite_widget_id'] = $responce;
                        $this->request->post['module_jivosite_authToken'] = $authToken;

                        $this->model_setting_setting->editSetting('module_jivosite', $this->request->post);

						$this->session->data['success'] = $this->language->get('text_success');

						if (isset($this->request->get['loginfalse'])) {
							$this->response->redirect($this->url->link('extension/module/jivosite/inlogin', 'user_token=' . $this->session->data['user_token'], true));
						}

						else {

						$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
						}
                    }
                }
            } catch (Exception $e) {
                _e("Connection error",'jivosite');
            }


			
		}

		$data['heading_title'] = $this->language->get('heading_title2');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['entry_status'] = $this->language->get('entry_status');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['entry_email'] = $this->language->get('entry_email');
		$data['entry_userPassword'] = $this->language->get('entry_userPassword');
		$data['entry_userDisplayName'] = $this->language->get('entry_userDisplayName');

		$data['entry_helpm'] = $this->language->get('entry_helpm');
		$data['entry_helpp'] = $this->language->get('entry_helpp');
		$data['entry_cop'] = $this->language->get('entry_cop');
		$data['entry_donate'] = $this->language->get('entry_donate');

		$data['entry_siteUrl'] = HTTPS_CATALOG;

		if (isset($this->error['jiverror'])) {
			$data['error_jiverror'] = $this->error['jiverror'];
		} else {
			$data['error_jiverror'] = '';
		}


		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['email'])) {
			$data['error_email'] = $this->error['email'];
		} else {
			$data['error_email'] = '';
		}

		if (isset($this->error['userPassword'])) {
			$data['error_userPassword'] = $this->error['userPassword'];
		} else {
			$data['error_userPassword'] = '';
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
			'href' => $this->url->link('extension/module/jivosite', 'user_token=' . $this->session->data['user_token'], true)
		);

		if (isset($this->request->get['loginfalse'])) {

			$data['action'] = $this->url->link('extension/module/jivosite&loginfalse=1', 'user_token=' . $this->session->data['user_token'], true);

		}

		else{
			$data['action'] = $this->url->link('extension/module/jivosite', 'user_token=' . $this->session->data['user_token'], true);
		}

		if (isset($this->request->get['loginfalse'])) {
			$data['cancel'] = $this->url->link('extension/module/jivosite/inlogin', 'user_token=' . $this->session->data['user_token'], true);
		}

		else {

			$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		}

		if (isset($this->request->post['module_jivosite_partnerId'])) {
			$data['module_jivosite_partnerId'] = $this->request->post['module_jivosite_partnerId'];
		} else {
			$data['module_jivosite_partnerId'] = $this->config->get('module_jivosite_partnerId');
		}

		if (isset($this->request->post['module_jivosite_partnerPassword'])) {
			$data['module_jivosite_partnerPassword'] = $this->request->post['module_jivosite_partnerPassword'];
		} else {
			$data['module_jivosite_partnerPassword'] = $this->config->get('module_jivosite_partnerPassword');
		}

		if (isset($this->request->post['module_jivosite_siteUrl'])) {
			$data['module_jivosite_siteUrl'] = $this->request->post['module_jivosite_siteUrl'];
		} else {
			$data['module_jivosite_siteUrl'] = $this->config->get('module_jivosite_siteUrl');
		}

		if (isset($this->request->post['module_jivosite_email'])) {
			$data['module_jivosite_email'] = $this->request->post['module_jivosite_email'];
		} else {
			$data['module_jivosite_email'] = $this->config->get('module_jivosite_email');
		}

		if (isset($this->request->post['module_jivosite_userPassword'])) {
			$data['module_jivosite_userPassword'] = $this->request->post['module_jivosite_userPassword'];
		} else {
			$data['module_jivosite_userPassword'] = $this->config->get('module_jivosite_userPassword');
		}

		if (isset($this->request->post['module_jivosite_userDisplayName'])) {
			$data['module_jivosite_userDisplayName'] = $this->request->post['module_jivosite_userDisplayName'];
		} else {
			$data['module_jivosite_userDisplayName'] = $this->config->get('module_jivosite_userDisplayName');
		}

		if (isset($this->request->post['module_jivosite_authToken'])) {
			$data['module_jivosite_authToken'] = $this->request->post['module_jivosite_authToken'];
		} else {
			$data['module_jivosite_authToken'] = $this->config->get('module_jivosite_authToken');
		}

		if (isset($this->request->post['module_jivosite_widget_id'])) {
			$data['module_jivosite_widget_id'] = $this->request->post['module_jivosite_widget_id'];
		} else {
			$data['module_jivosite_widget_id'] = $this->config->get('module_jivosite_widget_id');
		}


		if (isset($this->request->post['module_jivosite_status'])) {
			$data['module_jivosite_status'] = $this->request->post['module_jivosite_status'];
		} else {
			$data['module_jivosite_status'] = $this->config->get('module_jivosite_status');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/jivosite', $data));
	}

	public function install() {
   
	   	if (!$this->getEventByCode('jivosite_admin_column_left')){
		    $code = "jivosite_admin_column_left";
			$trigger = "admin/view/common/column_left/before";
			$action = "extension/module/jivosite/amenu";
		 	$this->model_setting_event->addEvent($code, $trigger, $action);
		 

		  	$code = "jivosite_footer";
			$trigger = "catalog/view/common/footer/before";
			$action = "extension/module/jivosite/acLink";
		 	$this->model_setting_event->addEvent($code, $trigger, $action);

		 	$code = "jivosite_header";
			$trigger = "catalog/view/common/header/before";
			$action = "extension/module/jivosite/acLinkHead";
		 	$this->model_setting_event->addEvent($code, $trigger, $action);
		}

 	}


 	private function getEventByCode($code) {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "event` WHERE `code` = '" . $this->db->escape($code) . "' LIMIT 1");

		return $query->row;
	}


  	public function uninstall() {
	
		$this->model_setting_event->deleteEventByCode('jivosite_admin_column_left');
		$this->model_setting_event->deleteEventByCode('jivosite_footer');
		$this->model_setting_event->deleteEventByCode('jivosite_header');
	

  	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/jivosite')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['module_jivosite_email']) {
			$this->error['email'] = $this->language->get('error_email');
		}

		if (!$this->request->post['module_jivosite_userPassword']) {
			$this->error['userPassword'] = $this->language->get('error_userPassword');
		}

		return !$this->error;
	}

	public function inlogin() {
		$this->load->language('extension/module/jivosite');
		$data['heading_title'] = $this->language->get('heading_title2');

		if (!$this->user->hasPermission('access', 'extension/module/jivosite')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['jiverror'])) {
			$data['error_jiverror'] = $this->error['jiverror'];
		} else {
			$data['error_jiverror'] = '';
		}

		$data['jivlang'] = substr($this->config->get('config_admin_language'),0,2);

		$data['text_edit'] = $this->language->get('text_edit2');

		$data['entry_cop'] = $this->language->get('entry_cop');
		$data['entry_donate'] = $this->language->get('entry_donate');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$data['button_nastr'] = $this->language->get('button_nastr');
		$data['button_setup'] = $this->language->get('button_setup');
		$data['button_newwind'] = $this->language->get('button_newwind');
		$data['button_newwind2'] = $this->language->get('button_newwind2');
		$data['nastr'] = $this->url->link('extension/module/jivosite&loginfalse=1', 'user_token=' . $this->session->data['user_token'], true);

		if ($this->config->get('module_jivosite_authToken')) {
			$data['logintrue'] = true;
			$data['jtoken'] = $this->config->get('module_jivosite_authToken');
		}
		else{
			$data['logintrue'] = false;
			$data['jtoken'] = '';
		}

		$this->response->setOutput($this->load->view('extension/module/jivosite_login', $data));
	}

	public function amenu(&$route, &$data, &$output) {
	  if ($this->user->hasPermission('access', 'extension/module/jivosite')) {
		$num = -1;
		foreach($data['menus'] as $menus) {
		$num ++;
			foreach ($menus as $key => $value) {
				if($value=='menu-marketing'){
					$data['menus'][$num]['children'][] = array(
			          'name'     => 'JivoSite (JivoChat)',
			          'href'     => $this->url->link('extension/module/jivosite/inlogin', 'user_token=' . $this->session->data['user_token'], true) 
			        );
				};
			}
		     
		}

      }
	}
}