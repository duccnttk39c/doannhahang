<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập hệ thống</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&amp;subset=vietnamese" rel="stylesheet">
	
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/jquery.validate.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/isotope.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/imagesloaded.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<body style="background: url('images/img_login3.jpg');
    background-size: cover;">
	<div class="danhnhaphethong">
		<div class="container">
			<div class="row">
				<div class="loginadmin col-sm-6 push-sm-3">
					<h1 class="text-xs-center">Đăng nhập quản trị</h1>
					<form action="<?php echo base_url(); ?>Login" method="POST" class="ml-1 mr-1">
						<fieldset class="form-group">
							<label for="exampleInputEmail1">Tài khoản</label>
							<input type="text" name="username" class="form-control" placeholder="Tài khoản">
						</fieldset>
						<fieldset class="form-group">
							<label for="exampleInputPassword1">Mật khẩu</label>
							<input type="password" name="password" class="form-control" placeholder="Mật khẩu">
						</fieldset>
						<input type="submit" class="btn btn-primary mt-1 mb-3 float-xs-left" value="Đăng nhập">
						<a href="<?= base_url() ?>" class="btn btn-warning mt-1 mb-3 float-xs-right"><i class="fa fa-chevron-left"></i> Trở về trang chủ</a>
					</form>
				</div>		
			</div>
		</div>
	</div>
</body>
</html>