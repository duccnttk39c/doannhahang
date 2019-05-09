<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class book_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function booking($name_customer, $email, $phone, $book_date, $book_time, $number_people)
	{
		$khachhang = array(
			'name_customer' => $name_customer,
			'email' => $email,
			'phone' => $phone,
			'book_date' => $book_date,
			'book_time' => $book_time,
			'number_people' => $number_people
		);
		return $this->db->insert('reservation', $khachhang);
	}
	public function getDataBooking()
	{
		$this->db->select('*');
		$this->db->order_by('reservation.isapproved', 'asc');
		$dl = $this->db->get('reservation');
		$dl = $dl->result_array();
		return $dl;
	}
	public function updateIsApproved()
	{
		$id = $_REQUEST['sid'];
		$isapproved = $_REQUEST['sval'];
		if ($isapproved == 1) {
			$isapproved = 1;
		} else if ($isapproved == 2) {
			$isapproved = 2;
		}
		$data = array(
			'isapproved' => $isapproved
		);
		$this->db->where('id', $id);
		return $this->db->update('reservation', $data);
	}
}

/* End of file book_model.php */
/* Location: ./application/models/book_model.php */