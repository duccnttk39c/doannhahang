<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slide_model');
		$this->load->model('dish_model');
		$this->load->model('news_model');
		$this->load->model('book_model');
		$this->somonmotbua = 18;
		$this->sotinmottrang = 3;
	}

	public function index()
	{
		$tintuc = $this->news_model->loadDsNewsPage($this->sotinmottrang);
		$danhmuctin = $this->news_model->getDataCateNews();
		$somon = $this->dish_model->loadDanhSachDish($this->somonmotbua);
		$somonslide1 = $this->dish_model->loadDanhSachDishSlide1(5);
		$somonslide2 = $this->dish_model->loadDanhSachDishSlide2(5);
		$somonslide3 = $this->dish_model->loadDanhSachDishSlide3(5);
		$dl = $this->slide_model->getDataSlide();
		$buaan = $this->dish_model->getDataMeal();
		$dsmang = array(
			'mangdl' => $dl,
			'dsmonan' => $somon,
			'dsmonanslide1' => $somonslide1,
			'dsmonanslide2' => $somonslide2,
			'dsmonanslide3' => $somonslide3,
			'dstintuc' => $tintuc,
			'danhmuctin' => $danhmuctin,
			'dsbuaan' => $buaan
		);
		$this->load->view('homepage', $dsmang);
	}
	public function reservation()
	{
		// lấy về dữ liệu đặt bàn mà người dùng gửi lên server
		$name_customer = $this->input->post('name_customer');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$book_date = $this->input->post('book_date');
		$book_time = $this->input->post('book_time');
		$date = (string)$book_date;
		$time = (string)$book_time;
		$book_time = $date . ' ' . $time;
		$number_people = $this->input->post('number_people');
		// gọi model ra và insert vào cơ sở dữ liệu
		if($this->book_model->booking($name_customer, $email, $phone, $book_date, $book_time, $number_people)) {
			$this->load->view('thanhcongdatban');
		} else {
			$this->load->view('thatbaidatban');
		}
	}
	public function logout()
	{
		if ($this->session->userdata('login')) {
			$this->session->unset_userdata('login');
			redirect(base_url(). 'login');
		}
	}
}

/* End of file Homepage.php */
/* Location: ./application/controllers/Homepage.php */