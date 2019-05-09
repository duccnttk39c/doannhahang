<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quản lý danh mục tin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/isotope.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/imagesloaded.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">

</head>
<body>
	<?php include 'header_admin.php'; ?>
	
	<div class="danhsachtk mt-3 pt-2">
		<div class="container-fluid">
			<h1 class="text-xs-center mb-2">Tài khoản quản trị</h1>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Stt</th>
							<th>Tên tài khoản</th>
							<th>Mật khẩu</th>
							<th>Họ và tên</th>
							<th>Email</th>
							<th>Số điện thoại</th>
							<th>Chức năng</th>
						</tr>
					</thead>
					<?php if (count($dulieutaikhoan)) {
						$id = 0;
						foreach ($dulieutaikhoan as $dstk) {
					?>
					<tbody>
						<tr>
							<td><?= ++$id; ?></td>
							<td><?= $dstk['username'] ?></td>
							<td><?= $dstk['password'] ?></td>
							<td><?= $dstk['fullname'] ?></td>
							<td><?= $dstk['email'] ?></td>
							<td><?= $dstk['phone'] ?></td>
							<td>
								<a href="<?= base_url() ?>User/editUser/<?= $dstk['id'] ?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Sửa</a>
								<a href="<?= base_url() ?>User/deleteUser/<?= $dstk['id'] ?>" class="btn btn-danger"><i class="fa fa-remove"></i> Xóa</a>
							</td>	
						</tr>
					</tbody>
						<?php } ?>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
	<div class="addslide mt-3">
		<div class="container">
			<hr>
			<h1 class="text-xs-center mt-3 mb-3">Thêm mới tài khoản</h1>

			<form action="<?= base_url() ?>User/addUser" method="POST" enctype="multipart/form-data">
				<div class="form-group row">
					<div class="col-sm-6">
						<div class="row">
							<label class="col-sm-3 form-control-label text-xs-left">Tên tài khoản</label>
							<div class="col-sm-9">
								<input name="username" type="text" class="form-control" placeholder="Tên tài khoản">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<label class="col-sm-3 form-control-label text-xs-left">Mật khẩu</label>
							<div class="col-sm-9">
								<input name="password" type="text" class="form-control" placeholder="Mật khẩu">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-6">
						<div class="row">
							<label class="col-sm-3 form-control-labe text-xs-left">Họ và tên</label>
							<div class="col-sm-9">
								<input name="fullname" type="text" class="form-control" placeholder="Họ và tên">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<label class="col-sm-3 form-control-label text-xs-left">Email</label>
							<div class="col-sm-9">
								<input name="email" type="email" class="form-control" placeholder="Email">
							</div>
						</div>
					</div>	
				</div>
				<div class="form-group row">
					<div class="col-sm-6">
						<div class="row">
							<label class="col-sm-3 form-control-label text-xs-left">Số điện thoại</label>
							<div class="col-sm-9">
								<input name="phone" type="text" class="form-control" placeholder="Số điện thoại">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row text-xs-center">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-success">Thêm mới</button>
						<button type="reset" class="btn btn-danger">Nhập lại</button>
					</div>
				</div>
			</form>	
		</div>
	</div>
</body>
</html>
