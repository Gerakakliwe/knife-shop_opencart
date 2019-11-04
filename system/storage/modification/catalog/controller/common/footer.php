<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');

			// Cookie Policy

		$this->load->model('localisation/language');
		$data['languages'] = $this->model_localisation_language->getLanguages();
		$data['langcode'] = $this->session->data['language'];

				$this->load->language('extension/module/cookiepolicy');
				
				$text_strings = array(
					'text_before',
					'link_text',
					'text_after',
					'accept_text',
					'cookie_url'
				);
				
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
					'module_cookiepolicy_cookietext',
					'module_cookiepolicy_cookietext_after',
					'module_cookiepolicy_urltext',
					'module_cookiepolicy_buttontext',
					'module_cookiepolicy_cookie_expires',
					'module_cookiepolicy_text_align'
			        );
				
			        foreach ($config_data as $conf) {
			                $data[$conf] = $this->config->get($conf);

					$data['infopage_number'] = $this->config->get('module_cookiepolicy_infopage');
					if ($this->config->get('module_cookiepolicy_infopage')) {
					$data['module_cookiepolicy_infopage_url'] =  $this->config->get('config_url') . 'index.php?route=information/information&information_id=' . $data['infopage_number'];

					$this->load->model('catalog/information');

					$information_info = $this->model_catalog_information->getInformation($this->config->get('module_cookiepolicy_infopage'));

					$data['module_cookiepolicy_infopage_title'] = $information_info['title'];
					}
			        }
			// END Cookie Policy
			

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
		
		return $this->load->view('common/footer', $data);
	}
}
