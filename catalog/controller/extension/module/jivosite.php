<?php
class ControllerExtensionModuleJivosite extends Controller {
	private $error = array();

	public function aclinkHead (&$route, &$args, &$output) {
		if ($this->config->get('module_jivosite_status')) { 
	        $jivosite_widget_id = $this->config->get('module_jivosite_widget_id'); 
	        $jivosite_status = true;
	        $jlogged = $this->customer->isLogged();
	        if ($this->customer->isLogged()) {
	            $jname = $this->customer->getFirstName() . ' ' . $this->customer->getLastName();
	            $jemail = $this->customer->getEmail();
	            $jtel = $this->customer->getTelephone();
	            $this->load->model('account/address');
	            $jaddr = $this->model_account_address->getAddress($this->customer->getAddressId());
	            $jdesc = $jaddr['postcode'] . ' ' . $jaddr['city'] . ' ' . $jaddr['address_1'];
	        }
	        else{
				$jname = '';
				$jemail = '';
				$jtel = '';
				$jdesc = '';
			}
			$args['analytics'][] = "<script>var jivosite_widget_id = '$jivosite_widget_id'; var jivosite_status = '$jivosite_status'; var jlogged = '$jlogged'; var jname = '$jname'; var jemail = '$jemail'; var jtel = '$jtel'; var jdesc = '$jdesc';</script>";
        }
    }

    public function aclink (&$route, &$args, &$output) {
    	if ($this->config->get('module_jivosite_status')) { 
			$args['scripts'][] = 'catalog/view/javascript/jivosite/jivo.js';
		}
    }

}