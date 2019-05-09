<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa tin tức</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<body>
	<?php include 'header_admin.php'; ?>
	<div class="container mt-3 pt-2">
		<div class="row">
			<div class="col-sm-10 push-sm-1">
				<div class="jumbotron text-xs-center">
					<h1 class="display-3">Sửa món ăn</h1>
					<p class="lead">Form này cho phép sửa món ăn rồi lưu vào cơ sở dữ liệu</p>
					<hr class="m-y-md">
				</div>
				<div class="formthemmoi">
					<form action="<?= base_url() ?>dish/updateDish" method="POST" enctype="multipart/form-data">
						<?php foreach ($dulieusua as $value): ?>
						
						<input type="hidden" name="id" value="<?php echo $value['id'] ?>">
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Tên món ăn</label>
							<input type="text" name="name_dish" class="form-control" value="<?php echo $value['name_dish'] ?>">
						</fieldset>
						<fieldset class="form-group">
							<img src="<?php echo $value['image_dish'] ?>" alt="" class="img-fluid">
							<input type="hidden" value="<?php echo $value['image_dish'] ?>" name="image_dishold">
							<br>
							<label for="formGroupExampleInput">Ảnh món ăn</label>
							<input type="file" name="image_dish" class="form-control" placeholder="Ảnh món ăn">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Miêu tả món ăn</label>
							<input type="text" name="description" class="form-control" value="<?php echo $value['description'] ?>">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Danh mục bữa ăn</label>
							<select name="id_meal" id="" class="form-control">
							<?php foreach ($tenbuaan as $row){
								if ($value['id_meal'] == $row['id'] ) {?>
									<option selected="selected" value="<?php echo $row['id'] ?>"><?php echo $row['name_meal'] ?></option>
								<?php } else { ?>
									<option value="<?php echo $row['id'] ?>"><?php echo $row['name_meal'] ?></option>
								<?php } ?>
							<?php } ?>
							</select>
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Giá</label>
							<input type="number" name="price" class="form-control" value="<?php echo $value['price'] ?>">
						</fieldset>
						<fieldset class="form-group">
							<input type="submit" class="btn btn-info btn-block btn-lg" value="Lưu">
						</fieldset>

						<?php endforeach ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>