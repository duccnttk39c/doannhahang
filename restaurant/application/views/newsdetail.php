<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đức Restaurant - Tin chi tiết</title>
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
						<span class="fontdancing">Đức Restaurant</span>
						<h2 class="fontroboto">Tin tức về ẩm thực</h2>
					</div>
				</div>
	 		</div>
	 	</div>
	</div>
	
	<section class="noidungtin">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="mottinchuan mb-3  wow  fadeInUp fontroboto">
						<?php foreach ($dulieutinct as $value): ?>
						
						<h1 class="tieudetin1 fontoswarld"><?= $value['title'] ?></h1>
						<div class="ngaythang1"><?= date('l, d/m/Y  G:i a',$value['date_created']) ?> -<span class="vang"> <?= $value['name_catenews'] ?></span></div>
						<hr>
						<h5><?= $value['quote'] ?></h5>
						<ul class="ml-2 mt2 mb-2">
							<?php foreach ($tinlienquan as $tinlq): ?>
							
							<li><a href="<?php echo base_url() ?>newspage/newsDetail/<?= $tinlq['id'] ?>"><?= $tinlq['title'] ?></a></li>

							<?php endforeach ?>
						</ul>
						<hr>
						<?= $value['content_news'] ?>

						<?php endforeach ?>		 
					</div>
					<div class="row">
						<div class="col-sm-12">
							<h3>Các tin khác</h3>
							<hr>
						</div>
						<?php foreach ($tinlienquan as $tinlq): ?>
						
						<div class="col-sm-4 wow slideInLeft mb-3">
							<div class="card-deck-wrapper">
								<div class="card-deck">
									<div class="card">
										<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $tinlq['id'] ?>"><img class="card-img-top img-fluid anhtintuchome" src="<?= $tinlq['image_news'] ?>" alt="Card image cap"></a>
										<div class="card-block">
											<a class="card-title tieudelq" href="<?php echo base_url() ?>newspage/newsDetail/<?= $tinlq['id'] ?>"><?= $tinlq['title'] ?></a>
											<p class="card-text"><?= $tinlq['quote'] ?></p>
											<p class="card-text"><small class="text-muted"><?= date('l, d/m/Y  G:i a',$tinlq['date_created']) ?> - <span class="vang"> <?= $tinlq['name_catenews'] ?></span></small></p>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- HET COT 4 -->

						<?php endforeach ?>
					</div>
				</div> <!-- HET COT 9 -->
				<div class="col-sm-3">
					<div class="phansearch  wow  fadeInUp">
						<form action="<?php echo base_url() ?>newspage/searchTitle" method="POST" class="form-block">
							<input type="text" class="form-control phansearchct" name="searchtitle" placeholder="Tìm kiếm">
							<button type="submit" class="iconsearch"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="khoilistlink my-2  wow  fadeInUp">
						<h3 class="fontoswald">Danh mục </h3>
						<ul class="fontroboto">
							<?php foreach ($danhmuc as $ds): ?>
							
							<li><a href="<?php echo base_url() ?>newspage/LoadNewsByCate/<?= $ds['id'] ?>"><?= $ds['name_catenews'] ?></a></li>

							<?php endforeach ?>
						</ul>
					</div><!--het listlink  -->
					
				</div>  <!-- HET COT 3 -->
			</div>
		</div>		
	</section><!--  het noidung tin -->

	<?php include "footer_home.php"; ?>
</body>
</html>