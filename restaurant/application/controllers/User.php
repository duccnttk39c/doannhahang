<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends My_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		
	}
	public function addUser()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');

		if($this->user_model->insertUser($username, $password, $fullname, $email, $phone)) {
			$this->load->view('thanhconguser');
		} else {
			$this->load->view('thatbainuser');
		}
	}
	public function listUser()
	{
		$dl = $this->user_model->loadDsUser();
		$dulieu = array(
			'dulieutaikhoan' => $dl
		);
		$this->load->view('user_view', $dulieu);
	}
	public function editUser($id)
	{
		$dl = $this->user_model->getUserById($id);
		$dl = array('mangdl' => $dl);
		$this->load->view('editUser_view', $dl, FALSE);
	}
	public function updateUser()
	{ 
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');

		if($this->user_model->updateUser($id, $username, $password, $fullname, $email, $phone)) {
			$this->load->view('thanhconguser');
		} else {
			$this->load->view('thatbaiuser');
		}
	}
	public function deleteUser($id)
	{
		if($this->user_model->deleteUserById($id)) {
			$this->load->view('thanhconguser');
		} else {
			$this->load->view('thatbaiuser');
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */