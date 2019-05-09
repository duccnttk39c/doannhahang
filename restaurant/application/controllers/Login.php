<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		if ($this->input->post()) {
			$this->form_validation->set_rules('login', 'Đăng nhập', 'callback_checkLogin');	
			if($this->form_validation->run())
			{
				$username = $this->input->post('username');
				//neu form da chay dung thi se tao 1 session cho admin
				$this->session->set_userdata('login',$username);
				redirect(base_url() . 'Homeadmin');
			}
		}
		$this->load->view('login');
	}
	public function checkLogin()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$data = array(
			'username' => $username,
			'password' => $password
		);
		if ($this->user_model->check_exists($data)) {
			return true;
		} else {
			return false;
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */