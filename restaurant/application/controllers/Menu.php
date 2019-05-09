<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dish_model');
	}

	public function index()
	{
		$dsmonan = $this->dish_model->loadDsDishByMeal();
		$monantheobua = array(
			'dsmonan' => $dsmonan
		);
		$this->load->view('menu', $monantheobua);
	}

}
/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */