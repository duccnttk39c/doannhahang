<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đức Restaurant - Tin tức</title>
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
<?php include 'header_home.php'; ?>
<div class="tieudenews">
		<div class="container">
	 		<div class="row">
	 			<div class="col-sm-12 text-xs-center wow flipInY" data-wow-delay="0s">
					<div class="tdtintuchome">
						<span class="fontdancing">Tin tức về ẩm thực</span>
						<h2 class="fontroboto">Tin từ danh mục</h2>
					</div>
				</div>
	 		</div>
	 	</div>
	</div>

	<section class="noidungtin">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<?php foreach ($dulieutin as $dstin): ?>
					
					<div class="mottinchuan mb-3 wow fadeInUp">
						<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $dstin['id'] ?>"><img src="<?= $dstin['image_news'] ?>" alt=""></a>
						<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $dstin['id'] ?>" class="tieudetin1 fontoswald"><?= $dstin['title'] ?></a>
						<div class="ngaythang1"><?= date('l, d/m/Y  G:i a',$dstin['date_created']) ?> - <span class="vang"> <?= $dstin['name_catenews'] ?></span></div>
						<p class="fontroboto"><?= $dstin['quote'] ?></p>
						<div class="docthem mb-2">
							<!-- <div class="like float-xs-right fontroboto">10 like</div> -->
							<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $dstin['id'] ?>" class="rm fontroboto">Xem thêm</a>
						</div>
					</div>	

					<?php endforeach ?>
				</div> <!-- het cot9 -->
				<div class="col-sm-3">
					<div class="phansearch  wow fadeInUp">
						<form action="<?php echo base_url() ?>newspage/searchTitle" method="POST" class="form-block">
							<input type="text" class="form-control phansearchct" name="searchtitle" placeholder="Tìm kiếm">
							<button type="submit" class="iconsearch"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="khoilistlink my-2  wow fadeInUp">
						<h3 class="fontoswald">Danh mục</h3>
						<ul class="fontroboto">
							<?php foreach ($danhmuctin as $dmtin): ?>
							
							<li><a href="<?php echo base_url() ?>newspage/LoadNewsByCate/<?= $dmtin['id'] ?>"><?= $dmtin['name_catenews'] ?></a></li>

							<?php endforeach ?>
						</ul>
					</div> <!-- het khoilistlink -->
							
				</div> <!-- het cot3 -->
			</div>
		</div>
	</section> <!-- het noidungtin -->

	<?php include "footer_home.php"; ?>
</body>
</html>