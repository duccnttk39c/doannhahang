<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactpage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('contact');
	}
}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */