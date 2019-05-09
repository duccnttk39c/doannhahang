<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertUser($username, $password, $fullname, $email, $phone)
	{ 
		$dulieu = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'email' => $email,
			'phone' => $phone
		);
		return $this->db->insert('user', $dulieu);
	}
	public function loadDsUser()
	{
		$this->db->select('*');
		$dl = $this->db->get('user');
		$dl = $dl->result_array();
		return $dl;
	}
	public function getUserById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$ketqua = $this->db->get('user');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}
	public function updateUser($id, $username, $password, $fullname, $email, $phone)
	{
		$dlupdate = array(
			'id' => $id,
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'email' => $email,
			'phone' => $phone
		);
		$this->db->where('id', $id);
		return $this->db->update('user', $dlupdate);
	}
	public function deleteUserById($id)
	{	
		$this->db->where('id', $id);
		return $this->db->delete('user');
	}
	public function check_exists($where = array())
	{
		$this->db->where($where);
		$query = $this->db->get('user');
		if($query->num_rows() > 0 ) {
			return true;
		} else {
			return false;
		}
	}
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */