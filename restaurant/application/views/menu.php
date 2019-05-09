<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anh Đức Food - Giới thiệu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&amp;subset=vietnamese" rel="stylesheet">
	
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/isotope.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>vendor/imagesloaded.pkgd.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<body>

<?php include "header_home.php" ?>
<div class="khoimenu wow fadeInUp bannerkieu2dong">
	<div class="tieudekhoimenu text-xs-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 push-sm-2">
					<span class="tieudephu fontdancing">Hương vị các món ăn tốt nhất.</span>
					<h3 class="tieudechinh fontroboto">Danh sách thực đơn của chúng tôi</h3>
			 	</div>
			</div>
		</div>	
	</div> <!-- het tieudekhoimenu -->
</div> <!-- het khoimenu -->

<div class="thucdonct wow fadeInUp tthucdon">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-xs-center">
				<div class="khoi2dong">
					<p><img src="images/service2.jpg" alt=""></p>
					<span class="fontdancing">Món ăn tươi ngon và nóng hổi của chúng tôi</span>
					<h2 class="fontoswald">Thực đơn bữa sáng đặc biệt</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="noidungct">
		<div class="container">
			<div class="row nhieumon">
				<?php foreach ($dsmonan as $dsmon): ?>
				<?php if ($dsmon['id_meal'] == 1) {?>
					
				<div class="col-xs-12 col-sm-6 col-md-4 motmon sang">
					<div class="row">
						<div class="col-xs-3 col-sm-4">
							<div class="anhmon">
								<div class="tagnew">MỚI</div>
								<img src="<?= $dsmon['image_dish'] ?>" alt="" class="img-fluid">
							</div>
						</div>
						<div class="col-xs-9 col-sm-8">
							<div class="tenmon">
								<div class="tren">
									<span class="float-xs-right"><?php echo number_format($dsmon['price'],0,'.',',') . 'đ' ?></span>
									<b class="ten"><?= $dsmon['name_dish'] ?></b>
								</div>
								<div class="duoi">
									<?= $dsmon['description'] ?>
								</div>
							</div>
						</div>
					</div> <!-- het row -->
				</div> <!-- het motmon -->
				<?php } ?>
				<?php endforeach ?>

			</div> <!-- het row -->
		</div> <!-- het container -->
	</div> <!-- het noidungct -->
</div> <!-- het thucdonct -->

	<div class="khoimenu wow fadeInUp bannerkieu2dong">
	<div class="tieudekhoimenu text-xs-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 push-sm-2">
					<div><img src="images/3contom.png" alt=""></div>
					<span class="tieudephu fontdancing">Chật lượng đảm bảo</span>
					<h3 class="tieudechinh fontroboto">Thực đơn bữa trưa đặc biệt</h3>
			 	</div>
			</div>
		</div>	
	</div> <!-- het tieudekhoimenu -->
</div> <!-- het khoimenu -->

<div class="thucdonct wow fadeInUp tthucdon">
	<div class="noidungct mt-3">
		<div class="container">
			<div class="row nhieumon">
				<?php foreach ($dsmonan as $dsmon): ?>
				<?php if ($dsmon['id_meal'] == 2) {?>
					
				<div class="col-xs-12 col-sm-6 col-md-4 motmon trua">
					<div class="row">
						<div class="col-xs-3 col-sm-4">
							<div class="anhmon">
								<div class="tagnew">MỚI</div>
								<img src="<?= $dsmon['image_dish'] ?>" alt="" class="img-fluid anhmonan">
							</div>
						</div>
						<div class="col-xs-9 col-sm-8">
							<div class="tenmon">
								<div class="tren">
									<span class="float-xs-right"><?php echo number_format($dsmon['price'],0,'.',',') . 'đ' ?></span>
									<b class="ten"><?= $dsmon['name_dish'] ?></b>
								</div>
								<div class="duoi">
									<?= $dsmon['description'] ?>
								</div>
							</div>
						</div>
					</div> <!-- het row -->
				</div> <!-- het motmon -->

				<?php } ?>
				<?php endforeach ?>
			</div> <!-- het row -->
		</div> <!-- het container -->
	</div> <!-- het noidungct -->
</div> <!-- het thucdonct -->

	<div class="khoimenu wow fadeInUp bannerkieu2dong">
	<div class="tieudekhoimenu text-xs-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 push-sm-2">
					<div><img src="images/nuocchanh.png" alt=""></div>
					<span class="tieudephu fontdancing">Đa dạng giàu dinh dưỡng</span>
					<h3 class="tieudechinh fontroboto">Thực đơn bữa tối đặc biệt</h3>
			 	</div>
			</div>
		</div>	
	</div> <!-- het tieudekhoimenu -->
</div> <!-- het khoimenu -->

<div class="thucdonct wow fadeInUp tthucdon">
	<div class="noidungct mt-3">
		<div class="container">
			<div class="row nhieumon">
				<?php foreach ($dsmonan as $dsmon): ?>
				<?php if ($dsmon['id_meal'] == 3) {?>
					
				<div class="col-xs-12 col-sm-6 col-md-4 motmon sang">
					<div class="row">
						<div class="col-xs-3 col-sm-4">
							<div class="anhmon">
								<div class="tagnew">MỚI</div>
								<img src="<?= $dsmon['image_dish'] ?>" alt="" class="img-fluid anhmonan">
							</div>
						</div>
						<div class="col-xs-9 col-sm-8">
							<div class="tenmon">
								<div class="tren">
									<span class="float-xs-right"><?php echo number_format($dsmon['price'],0,'.',',') . 'đ' ?></span>
									<b class="ten"><?= $dsmon['name_dish'] ?></b>
								</div>
								<div class="duoi">
									<?= $dsmon['description'] ?>
								</div>
							</div>
						</div>
					</div> <!-- het row -->
				</div> <!-- het motmon -->

				<?php } ?>
				<?php endforeach ?>
			</div> <!-- het row -->
		</div> <!-- het container -->
	</div> <!-- het noidungct -->
</div> <!-- het thucdonct -->
<?php include "footer_home.php"; ?>