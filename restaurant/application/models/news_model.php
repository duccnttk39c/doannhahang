<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertCateNews($name_catenews, $status)
	{
		$dl = array(
			'name_catenews' => $name_catenews,
			'status' => $status
		);
		return $this->db->insert('categories_news', $dl);
	}
	public function getDataCateNews()
	{
		$this->db->select('*');
		$dl = $this->db->get('categories_news');
		$dl = $dl->result_array();
		return $dl;
	}
	public function totalCateNews()
	{
		$this->db->select('*');
		// tính tổng số lượng kết quả
		$kq1 = $this->db->get('categories_news');
		$kq1 = $kq1->result_array();
		$sldanhmuc = count($kq1);
		return $sldanhmuc;
	}
	public function totalNews()
	{
		$this->db->select('*');
		// tính tổng số lượng kết quả
		$kq1 = $this->db->get('news');
		$kq1 = $kq1->result_array();
		$sltin = count($kq1);
		return $sltin;
	}
	public function getDataById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('categories_news');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function updateCateById($id, $name_catenews, $status)
	{
		$dlupdate = array(
			'id' => $id,
			'name_catenews' => $name_catenews,
			'status' => $status
		);
		$this->db->where('id', $id);
		return $this->db->update('categories_news', $dlupdate);
	}
	public function deleteCateById($id)
	{	
		$this->db->where('id', $id);
		return $this->db->delete('categories_news');
	}
	// insert cho tin tuc
	public function insertNews($title, $id_catenews, $content_news, $image_news, $quote)
	{ 
		$dulieu = array(
			'title' => $title,
			'id_catenews' => $id_catenews,
			'content_news' => $content_news,
			'image_news' => $image_news,
			'quote' => $quote
		);
		$this->db->insert('news', $dulieu); 
		return $this->db->insert_id();
	}
	public function loadDsNews()
	{
		$this->db->select('*');
		$this->db->order_by('news.id', 'desc');
		$dl = $this->db->get('news');
		$dl = $dl->result_array();
		return $dl;
	}
	public function getNewsById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$ketqua = $this->db->get('news');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}
	public function getNewsDetailById($id)
	{
		$this->db->select('*');
		$this->db->from('categories_news');

		$this->db->join('news', 'news.id_catenews = categories_news.id', 'left');
		$this->db->where('news.id', $id);
		$ketqua = $this->db->get();
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}
	public function editNewsById($id, $title, $id_catenews, $content_news, $image_news, $quote)
	{
		$dulieusua = array(
			'id' => $id,
			'title' => $title,
			'id_catenews' => $id_catenews,
			'content_news' => $content_news,
			'image_news' => $image_news,
			'quote' => $quote
		);
		$this->db->where('id', $id);
		return $this->db->update('news', $dulieusua);
	}
	public function getNameCateNewsById($id)
	{
		$this->db->select('*');
		$this->db->from('categories_news');

		$this->db->join('news', 'news.id_catenews = categories_news.id', 'left');
		$this->db->where('news.id', $id);
		$ketqua = $this->db->get();
		$ketqua = $ketqua->result_array();
		$ten = $ketqua[0]['name_catenews'];
		return $ten;
	}
	public function deleteNewsById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('news');
	}
	public function loadDsNewsPage($sotinmottrang)
	{ 
		$this->db->select('*');
		$this->db->join('news', 'news.id_catenews = categories_news.id', 'left');
		$this->db->order_by('news.id', 'desc');
		$kq = $this->db->get('categories_news', $sotinmottrang, 0);
		$kq = $kq->result_array();

		return $kq;
	}
	public function numberOfPagesNews($sotinmottrang)
	{
		$this->db->select('*');
		// tính tổng số lượng kết quả
		$kq1 = $this->db->get('news');
		$kq1 = $kq1->result_array();
		$soluongtin = count($kq1);
		// tính số trang
		$sotrang = ceil($soluongtin/$sotinmottrang);
		return $sotrang;
	}
	public function loadNewsByPage($trangthumay, $sotinmottrang)
	{
		$this->db->select('*');
		$this->db->join('news', 'news.id_catenews = categories_news.id', 'left');
		$this->db->order_by('news.id', 'desc');
		$vitri = ($trangthumay - 1) * $sotinmottrang;
		$kq = $this->db->get('categories_news', $sotinmottrang, $vitri);
		$kq = $kq->result_array();
		return $kq;
	}
	public function loadNewsByCate($sotinmottrang, $iddanhmuc)
	{
		$this->db->select('*');
		$this->db->join('news', 'news.id_catenews = categories_news.id', 'left');
		$this->db->order_by('news.id', 'desc');
		$this->db->where('news.id_catenews', $iddanhmuc);
		$kq = $this->db->get('categories_news', $sotinmottrang, 0);
		$kq = $kq->result_array();
		return $kq;
	}
	public function getNewsByCate($iddanhmuc)
	{
		$this->db->select('*');
		$this->db->join('news', 'news.id_catenews = categories_news.id', 'left');
		$this->db->order_by('news.id', 'desc');
		$this->db->where('news.id_catenews', $iddanhmuc);
		$kq = $this->db->get('categories_news');
		$kq = $kq->result_array();
		return $kq;
	}
	public function loadRelatedNews($sotinmottrang, $iddanhmuc, $idtin)
	{
		$this->db->select('*');
		$this->db->join('news', 'news.id_catenews = categories_news.id', 'left');
		$this->db->where('news.id_catenews', $iddanhmuc);
		$this->db->where('news.id !=', $idtin);
		$kq = $this->db->get('categories_news', $sotinmottrang, 0);
		$kq = $kq->result_array();
		return $kq;
	}
	public function getIdCateNewsById($id)
	{
		$this->db->select('*');
		$this->db->from('categories_news');

		$this->db->join('news', 'news.id_catenews = categories_news.id', 'left');
		$this->db->where('news.id', $id);
		$ketqua = $this->db->get();
		$ketqua = $ketqua->result_array();
		$iddanhmuc = $ketqua[0]['id_catenews'];
		return $iddanhmuc;
	}
	public function searchByTitle($title)
	{
		$this->db->select('*');
		$this->db->join('news', 'news.id_catenews = categories_news.id', 'left');
		$this->db->like('news.title', $title);
		$ketqua = $this->db->get('categories_news');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}
}

/* End of file news_model.php */
/* Location: ./application/models/news_model.php */