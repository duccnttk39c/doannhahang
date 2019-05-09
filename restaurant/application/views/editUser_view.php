<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa tài khoản</title>
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
	<div class="container mt-3 pt-2">
		<div class="row">
			<div class="col-sm-10 push-sm-1">
				<div class="jumbotron text-xs-center">
					<h1 class="display-3">Sửa tài khoản</h1>
					<p class="lead">Form này cho phép sửa tài khoản rồi lưu vào cơ sở dữ liệu</p>
					<hr class="m-y-md">
				</div>
				<div class="formthemmoi">
					<form action="<?= base_url() ?>User/updateUser" method="POST" enctype="multipart/form-data">
						<?php foreach ($mangdl as $value): ?>
						
						<input type="hidden" name="id" value="<?php echo $value['id'] ?>">
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Tên tài khoản</label>
							<input type="text" name="username" class="form-control" value="<?php echo $value['username'] ?>">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Mật khẩu</label>
							<input type="text" name="password" class="form-control" value="<?php echo $value['password'] ?>">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Họ và tên</label>
							<input type="text" name="fullname" class="form-control" value="<?php echo $value['fullname'] ?>">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Email</label>
							<input type="email" name="email" class="form-control" value="<?php echo $value['email'] ?>">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Số điện thoại</label>
							<input type="text" name="phone" class="form-control" value="<?php echo $value['phone'] ?>">
						</fieldset>
						<fieldset class="form-group">
							<input type="submit" class="btn btn-info btn-block btn-lg" value="Lưu tin">
						</fieldset>

						<?php endforeach ?>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>

		CKEDITOR.replace( 'content_news', {
		    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
		    filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
		});
	</script>
</body>
</html>