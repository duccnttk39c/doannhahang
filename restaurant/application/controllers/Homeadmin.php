<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homeadmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('dish_model');
	}

	public function index()
	{
		$demdm = $this->news_model->totalCateNews();
		$demtin = $this->news_model->totalNews();
		$demmonan = $this->dish_model->totalDish();
		$danhsachdl = array(
			'sodanhmuc' => $demdm,
			'sotin' => $demtin,
			'somonan' => $demmonan
		);
		$this->load->view('HomeAdmin_view', $danhsachdl);
	}

}

/* End of file Homeadmin.php */
/* Location: ./application/controllers/Homeadmin.php */