<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends My_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('book_model');
	}

	public function index()
	{
		$ketqua = $this->book_model->getDataBooking();
		$ketqua = array(
			'reservation' => $ketqua,
			'msg' => $this->session->flashdata('msg'),
			'msg_class' => $this->session->flashdata('msg_class')
		);
		$this->load->view('booking_view', $ketqua);
	}
	/*public function qlBooking()
	{
		$ketqua = $this->book_model->getDataBooking();
		$ketqua = array('reservation' => $ketqua);
		$this->load->view('booking_view', $ketqua);
	}*/
	public function updateIsApproved()
	{ 
		if (isset($_REQUEST['sval'])) {
			$up_status = $this->book_model->updateIsApproved();
			if ($up_status > 0) {
				$this->session->set_flashdata('msg', 'Cập nhật trạng thái thành công');
				$this->session->set_flashdata('msg_class', 'alert-success');
			} else {
				$this->session->set_flashdata('msg', 'Cập nhật trạng thái thất bại');
				$this->session->set_flashdata('msg_class', 'alert-danger');
			}
			$ketqua = $this->book_model->getDataBooking();
			$mang = array(
				'reservation' => $ketqua,
				'msg' => $this->session->flashdata('msg'),
				'msg_class' => $this->session->flashdata('msg_class')
			);
			

			$this->load->view('booking_view', $mang);
		}
	}
}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */