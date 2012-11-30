<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

	function __construct() {
		parent::__construct();	
	}
	
	function index() {
		$user = $this->ion_auth->user()->row();
		$this->data['title'] = "Welcome";
		if ($this->session->userdata('group_id')){
			$this->data['username']=$user->first_name;	
		}else{

			$this->data['username']='Guest';	
		}
		
		
		$this->render();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */