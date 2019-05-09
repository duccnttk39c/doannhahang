<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dish_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertMeal($name_meal)
	{
		$dl = array(
			'name_meal' => $name_meal
		);
		return $this->db->insert('meal', $dl);
	}
	public function getDataMeal()
	{
		$this->db->select('*');
		$dl = $this->db->get('meal');
		$dl = $dl->result_array();
		return $dl;
	}
	public function totalDish()
	{
		$this->db->select('*');
		// tính tổng số lượng kết quả
		$kq1 = $this->db->get('menu');
		$kq1 = $kq1->result_array();
		$slmonan = count($kq1);
		return $slmonan;
	}
	public function getDataById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$dulieu = $this->db->get('meal');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function updateMealById($id, $name_meal)
	{
		$dlupdate = array(
			'id' => $id,
			'name_meal' => $name_meal
		);
		$this->db->where('id', $id);
		return $this->db->update('meal', $dlupdate);
	}
	public function deleteMealById($id)
	{	
		$this->db->where('id', $id);
		return $this->db->delete('meal');
	}
	// Món ăn
	public function insertDish($name_dish, $image_dish, $description, $id_meal, $price)
	{ 
		$dulieu = array(
			'name_dish' => $name_dish,
			'image_dish' => $image_dish,
			'description' => $description,
			'id_meal' => $id_meal,
			'price' => $price
		);
		$this->db->insert('menu', $dulieu); 
		return $this->db->insert_id();
	}
	public function loadDsDish()
	{
		$this->db->select('*');
		$this->db->order_by('menu.id', 'desc');
		$dl = $this->db->get('menu');
		$dl = $dl->result_array();
		return $dl;
	}
	public function getDishById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$ketqua = $this->db->get('menu');
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}
	public function editDishById($id, $name_dish, $image_dish, $description, $id_meal, $price)
	{
		$dulieusua = array(
			'id' => $id,
			'name_dish' => $name_dish,
			'image_dish' => $image_dish,
			'description' => $description,
			'id_meal' => $id_meal,
			'price' => $price
		);
		$this->db->where('id', $id);
		return $this->db->update('menu', $dulieusua);
	}
	public function deleteDishById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('menu');
	}
	public function loadDanhSachDish($somonmotbua)
	{ 
		$this->db->select('*');
		$this->db->join('menu', 'menu.id_meal = meal.id', 'left');
		$this->db->order_by('menu.id', 'desc');
		$kq = $this->db->get('meal', $somonmotbua, 0);
		$kq = $kq->result_array();

		return $kq;
	}
	public function loadDsDishByMeal()
	{ 
		$this->db->select('*');
		$this->db->join('menu', 'menu.id_meal = meal.id', 'left');
		$this->db->order_by('menu.id', 'desc');
		$kq = $this->db->get('meal');
		$kq = $kq->result_array();

		return $kq;
	}
	public function loadDanhSachDishSlide1($somonmotbua)
	{ 
		$this->db->select('*');
		$this->db->join('menu', 'menu.id_meal = meal.id', 'left');
		$this->db->order_by('menu.id', 'desc');
		$kq = $this->db->get('meal', $somonmotbua, 0);
		$kq = $kq->result_array();

		return $kq;
	}
	public function loadDanhSachDishSlide2($somonmotbua)
	{ 
		$this->db->select('*');
		$this->db->join('menu', 'menu.id_meal = meal.id', 'left');
		$this->db->order_by('menu.id', 'desc');
		$kq = $this->db->get('meal', $somonmotbua, 5);
		$kq = $kq->result_array();

		return $kq;
	}
	public function loadDanhSachDishSlide3($somonmotbua)
	{ 
		$this->db->select('*');
		$this->db->join('menu', 'menu.id_meal = meal.id', 'left');
		$this->db->order_by('menu.id', 'desc');
		$kq = $this->db->get('meal', $somonmotbua, 10);
		$kq = $kq->result_array();

		return $kq;
	}
}

/* End of file dish_model.php */
/* Location: ./application/models/dish_model.php */