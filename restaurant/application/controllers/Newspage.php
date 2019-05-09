<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newspage extends CI_Controller {

	private $sotinmottrang;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->sotinmottrang = 4;
	}

	public function index()
	{
		$dl = $this->news_model->loadDsNewsPage($this->sotinmottrang);
		$sotrang = $this->news_model->numberOfPagesNews($this->sotinmottrang);
		$danhmuc = $this->news_model->getDataCateNews();
		$mangdl = array(
			'dulieutin' => $dl,
			'sotrang' => $sotrang,
			'danhmuc' => $danhmuc
		);
		$this->load->view('newspage', $mangdl);
	}
	public function page($trang)
	{
		// tính vị trí
		$dl = $this->news_model->loadNewsByPage($trang, $this->sotinmottrang);

		$sotrang = $this->news_model->numberOfPagesNews($this->sotinmottrang);
		$danhmuc = $this->news_model->getDataCateNews();
		$mangdl = array(
			'dulieutin' => $dl,
			'sotrang' => $sotrang,
			'danhmuc' => $danhmuc
		);
		$this->load->view('newspage', $mangdl);
	}
	public function newsDetail($idtin)
	{
		$dl = $this->news_model->getNewsDetailById($idtin);
		$danhmuc = $this->news_model->getDataCateNews();
		// lấy về id của danh mục
		$iddanhmuc = $this->news_model->getIdCateNewsById($idtin);
		// lấy về dữ liệu mà có id trùng với id của dòng trên
		$tinlienquan = $this->news_model->loadRelatedNews(3, $iddanhmuc, $idtin);
		$dl = array(
			'dulieutinct' => $dl,
			'danhmuc' => $danhmuc,
			'tinlienquan' => $tinlienquan
		);
		$this->load->view('newsdetail', $dl, FALSE);
	}/*
	public function categoriesNews($iddanhmuc)
	{
		$dl = $this->news_model->loadNewsByCate($this->sotinmottrang, $iddanhmuc);
		$sotrang = $this->news_model->numberOfPagesNews($this->sotinmottrang);
		$danhmuc = $this->news_model->getDataCateNews();
		$mangdl = array(
			'dulieutin' => $dl,
			'sotrang' => $sotrang,
			'danhmuc' => $danhmuc
		);
		$this->load->view('newspage', $mangdl);
	}*/
	public function searchTitle()
	{
		$title = $this->input->post('searchtitle');
		$search = $this->news_model->searchByTitle($title);
		$danhmuc = $this->news_model->getDataCateNews();
		$dulieu = array(
			'ketquasearch' => $search,
			'danhmuc' => $danhmuc
		);
		$this->load->view('searchnews', $dulieu, FALSE);
	}
	public function LoadNewsByCate($iddanhmuc)
	{
		$dl = $this->news_model->getNewsByCate($iddanhmuc);
		$danhmuc = $this->news_model->getDataCateNews();
		$mangdl = array(
			'dulieutin' => $dl,
			'danhmuctin' => $danhmuc
		);
		$this->load->view('catenews', $mangdl);
	}
}

/* End of file Newspage.php */
/* Location: ./application/controllers/Newspage.php */