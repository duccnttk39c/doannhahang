<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quản lý danh mục tin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">

</head>
<body>
	<?php include 'header_admin.php'; ?>
	<div class="danhsachdatban mt-3 pt-2">
		<div class="container-fluid">
			<h1 class="text-xs-center mb-2">Danh Sách đặt bàn</h1>
			<h3 class="<?php echo $msg_class; ?> mb-2"><?php echo $msg; ?></h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Stt</th>
						<th>Họ tên khách hàng</th>
						<th>Email</th>
						<th>Số điện thoại</th>
						<th>Thời gian đặt</th>
						<th>Số người</th>
						<th>Trạng thái</th>
						<th class="text-xs-center">Chức năng</th>
					</tr>
				</thead>
				<?php if (count($reservation)) {
					$id = 0;
					foreach ($reservation as $datban) {
				?>
				<tbody>
					<tr>
						<td><?= ++$id; ?></td>
						<td><?= $datban['name_customer'] ?></td>
						<td><?= $datban['email'] ?></td>
						<td><?= $datban['phone'] ?></td>
						<td><?= $datban['book_time'] ?></td>
						<td><?= $datban['number_people'] ?></td>
						<td>
							<?php 
								$isapproved = $datban['isapproved'];
								if ($isapproved == 0) {
							?>
									<p style="color: blue;">Chờ phê duyệt</p>
							<?php } else if ($isapproved == 1) { ?>	
									<p style="color: #009933;">Đồng ý</p>
							<?php } else if ($isapproved == 2) { ?>	
									<p style="color: red;">Từ chối</p>
							<?php } ?>
						</td>
						<td class="text-xs-center">
							<a href="<?= base_url() ?>Booking/updateIsApproved?sid=<?= $datban['id'];?>&sval=1" class="btn btn-success">Đồng ý</a>
							<a href="<?= base_url() ?>Booking/updateIsApproved?sid=<?= $datban['id'];?>&sval=2" class="btn btn-danger">Từ chối</a>
						</td>	
					</tr>
				</tbody>
					<?php } ?>
				<?php } ?>
			</table>
		</div>
	</div>
</body>
</html>
