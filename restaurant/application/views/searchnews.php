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
						<h2 class="fontroboto">Kết quả vừa tìm kiếm được</h2>
					</div>
				</div>
	 		</div>
	 	</div>
	</div>

	<section class="noidungtin">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<?php if ($ketquasearch != null ) { ?>
						<?php foreach ($ketquasearch as $value) { ?>
					
					<div class="mottinchuan mb-3 wow fadeInUp">
						<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $value['id'] ?>"><img src="<?= $value['image_news'] ?>" alt=""></a>
						<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $value['id'] ?>" class="tieudetin1 fontoswald"><?= $value['title'] ?></a>
						<div class="ngaythang1"><?= date('l, d/m/Y  G:i a',$value['date_created']) ?> - <span class="vang"> <?= $value['name_catenews'] ?></span></div>
						<p class="fontroboto"><?= $value['quote'] ?></p>
						<div class="docthem mb-2">
							<!-- <div class="like float-xs-right fontroboto">10 like</div> -->
							<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $value['id'] ?>" class="rm fontroboto">Xem thêm</a>
						</div>
					</div>

						<?php } ?>
					<?php } else { ?>
						<p>Không tìm thấy kết quả.</p>
					<?php } ?>
					
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
							<?php foreach ($danhmuc as $ds): ?>
							
							<li><a href="<?php echo base_url() ?>newspage/LoadNewsByCate/<?= $ds['id'] ?>"><?= $ds['name_catenews'] ?></a></li>

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