<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dish extends My_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dish_model');
	}

	public function index()
	{
		
	}
	public function loadMeal()
	{
		$ketqua = $this->dish_model->getDataMeal();
		$ketqua = array('dulieu' => $ketqua);
		$this->load->view('meal_view', $ketqua);
	}
	public function addJquery()
	{
		$tenbuaan = $this->input->post('name_meal');
		$this->load->model('dish_model');
		$this->dish_model->insertMeal($tenbuaan);

		echo json_encode($this->db->insert_id());
	}
	public function updateMeal()
	{ 
		$id = $this->input->post('id');
		$name_meal = $this->input->post('name_meal');

		if($this->dish_model->updateMealById($id, $name_meal)) {
			$this->load->view('thanhcongnews');
		} else {
			$this->load->view('thatbainews');
		}
	}

	public function deleteMeal($id)
	{
		if($this->dish_model->deleteMealById($id)) {
			$this->load->view('thanhcongnews');
		} else {
			$this->load->view('thatbainews');
		}
	}
	public function qlDish()
	{
		$dl1 = $this->dish_model->getDataMeal();
		$dl2 = $this->dish_model->loadDsDish();
		$dulieu = array(
			'dulieubuaan' => $dl1, 
			'dulieumon' => $dl2
		);
		$this->load->view('dish_view', $dulieu);
	}
	public function addDish()
	{
		// xử lý ảnh tin
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["image_dish"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["image_dish"]["tmp_name"]);
		    if($check !== false) {
		        //echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        //echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		/*if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}*/
		// Check file size
		if ($_FILES["image_dish"]["size"] > 500000000) {
		    //echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    //echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["image_dish"]["tmp_name"], $target_file)) {
		        //echo "The file ". basename( $_FILES["image_dish"]["name"]). " has been uploaded.";
		    } else {
		        //echo "Sorry, there was an error uploading your file.";
		    }
		}
		$image_dish = base_url() . 'uploads/' .  basename( $_FILES["image_dish"]["name"]);
		$name_dish = $this->input->post('name_dish');
		$id_meal = $this->input->post('id_meal');
		$description = $this->input->post('description');
		$price = $this->input->post('price');

		if($this->dish_model->insertDish($name_dish, $image_dish, $description, $id_meal, $price)) {
			$this->load->view('thanhcongdish');
		} else {
			$this->load->view('thatbaidish');
		}
	}

	public function editDish($id)
	{
		$ketqua = $this->dish_model->getDishById($id);
		$tenbuaan = $this->dish_model->getDataMeal($id);
		$ketqua = array(
			'dulieusua' => $ketqua,
			'tenbuaan' => $tenbuaan
		);
		$this->load->view('editDish_view', $ketqua, FALSE);
	}
	public function updateDish()
	{
		// dựa vào id để lấy tin
		$image_dishold = $this->input->post('image_dishold');
		$image_dish = $_FILES['image_dish']['name'];
		// nếu không up ảnh mới
		if (empty($image_dish)) {
			$image_dish = $image_dishold;

		} else {
			// xử lý ảnh tin
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["image_dish"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["image_dish"]["tmp_name"]);
			    if($check !== false) {
			        //echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        //echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			/*if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}*/
			// Check file size
			if ($_FILES["image_dish"]["size"] > 500000000) {
			    //echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    //echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["image_dish"]["tmp_name"], $target_file)) {
			        //echo "The file ". basename( $_FILES["image_dish"]["name"]). " has been uploaded.";
			    } else {
			        //echo "Sorry, there was an error uploading your file.";
			    }
			}
			$image_dish = base_url() . 'uploads/' .  basename( $_FILES["image_dish"]["name"]);
		}
		// gọi model
		$id = $this->input->post('id');
		$name_dish = $this->input->post('name_dish');
		$description = $this->input->post('description');
		$id_meal = $this->input->post('id_meal');
		$price = $this->input->post('price');
		

		if($this->dish_model->editDishById($id, $name_dish, $image_dish, $description, $id_meal, $price)) {
			$this->load->view('thanhcongdish');
		} else {
			$this->load->view('thatbaidish');
		}
	}
	public function deleteDish($id)
	{
		// gọi model ra xử lý xóa tin
		if($this->dish_model->deleteDishById($id)) {
			$this->load->view('thanhcongdish');
		} else {
			$this->load->view('thatbaidish');
		}
	}
}

/* End of file Dish.php */
/* Location: ./application/controllers/Dish.php */