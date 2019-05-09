<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý tin tức</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
 	<script src="<?php echo base_url() ?>/ckeditor/ckeditor.js"></script>
 	<script src="<?php echo base_url() ?>/ckeditor/ckfinder/ckfinder.js"></script>
</head>
<body>
	<?php include 'header_admin.php'; ?>
	<div class="container-fluid mt-3 pt-2">
		<div class="row">
			<div class="col-sm-6 themmoi">
				<div class="jumbotron text-xs-center">
					<h1>Thêm mới món ăn</h1>
					<p class="lead">Form này cho phép thêm món ăn vào cơ sở dữ liệu</p>
					<hr class="m-y-md">
				</div>
				<div class="formthemmoi">
					<form action="<?= base_url() ?>dish/addDish" method="POST" enctype="multipart/form-data">
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Tên món ăn</label>
							<input type="text" name="name_dish" class="form-control" id="formGroupExampleInput" placeholder="Tên món ăn">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Ảnh món ăn</label>
							<input type="file" name="image_dish" class="form-control" placeholder="Ảnh món ăn">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Miêu tả món ăn</label>
							<input type="text" name="description" class="form-control" placeholder="Miêu tả món ăn">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Giá</label>
							<input type="number" name="price" class="form-control" placeholder="Giá">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Bữa ăn</label>
							<select name="id_meal" id="" class="form-control">
								<?php foreach ($dulieubuaan as $row): ?>

								<option value="<?= $row['id'] ?>"><?= $row['name_meal'] ?></option>

								<?php endforeach ?>
							</select>
						</fieldset>
						<fieldset class="form-group">
							<input type="submit" class="btn btn-success btn-block btn-lg" value="Thêm món">
						</fieldset>
					</form>
				</div>
			</div>
			<div class="col-sm-6 danhsach">
				<div class="jumbotron text-xs-center">
					<h1>Danh sách món ăn</h1>
					<p class="lead">Các món ăn đã thêm</p>
					<hr class="m-y-md">
				</div>
				<!-- khoi danh sach tin -->
				<div class="row">
					<div class="card-group">
						<?php foreach ($dulieumon as $value): ?>
						<div class="col-sm-4">
							<div class="card">
								<?php 
								if (empty($value['image_dish'])) {
								?>	
								<img class="card-img-top img-fluid" src="http://placehold.it/700x300" alt="Card image cap">
								<?php 
								} else {
								?>	
								<img class="card-img-top img-fluid" src="<?= $value['image_dish'] ?>" alt="Card image cap">
								<?php } ?>
								<div class="card-block">
									<h4 class="card-title"><?= $value['name_dish'] ?></h4>
									<p class="card-text"><?= $value['description'] ?></p>
									<p class="card-text">Giá: <?php echo number_format($value['price'],0,'.',',') . 'đ' ?></p>
									<p class="card-text"><small class="text-muted">Thêm vào ngày <?= date('d/m/Y - G:i - A',$value['date_created']) ?></small></p>
									<a href="<?= base_url() ?>dish/editDish/<?= $value['id'] ?>" class="btn btn-outline-success"><i class="fa fa-pencil"></i></a>
									<a href="<?= base_url() ?>dish/deleteDish/<?= $value['id'] ?>" class="btn btn-outline-danger"><i class="fa fa-remove"></i></a>
								</div>
							</div>
						</div>

						<?php endforeach ?>
					</div>	
				</div> <!-- het khoi danh sach tin -->
			</div>
		</div>
	</div>
</body>
</html>