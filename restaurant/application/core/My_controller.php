<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->kiemTraDN();
	}
	public function kiemTraDN()
	{
		$controller = $this->uri->segment(2);
		$user = $this->session->userdata('login');
		if ($controller != 'login' && !$user) {
			redirect(base_url(). 'login');
		}
		if ($controller == 'login' && $user) {
			redirect(base_url(). 'Homeadmin');
		}
	}
}

/* End of file My_controller.php */
/* Location: ./application/controllers/My_controller.php */