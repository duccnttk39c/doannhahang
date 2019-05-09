<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đức Restaurant</title>
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
<body>
 	<?php include 'header_home.php'; ?>

 	<div class="slide">
 		<div id="slidehome" class="carousel slidecon" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#slidehome" data-slide-to="0" class="active"></li>
				<li data-target="#slidehome" data-slide-to="1"></li>
				<li data-target="#slidehome" data-slide-to="2"></li>
				<li data-target="#slidehome" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<?php
					$mangdl = json_decode($mangdl, true);
					$dem = 1;
				?>
				<?php foreach ($mangdl as $key => $value): ?>
								
				<div class="carousel-item <?php if($dem==1){ echo "active"; $dem++;}?>">
					<div class="chu chu01">
						<h2 class="fontoswald"> <?= $value['title'] ?> </h2>
						<p><?= $value['description'] ?> </p>
						<a href="<?= $value['button_link'] ?>" class="nutslide fontoswald btn btn-warning"><?= $value['button_text'] ?></a>
					</div>
					<img src="<?= $value['slide_image'] ?>" alt="">
				</div>

				<?php endforeach ?>
			</div>
			<a class="left carousel-control" href="#slidehome" role="button" data-slide="prev">
				<span class="icon-prev" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#slidehome" role="button" data-slide="next">
				<span class="icon-next" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
 	</div> <!-- het slide -->

 	<div class="badichvu">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-4 wow flipInY mb-2">
 					<a href=""><img src="images/anhdv01.jpg" alt="" class="img-fluid"></a>
 					<h3><a class="fontoswald" href="">Phục vụ trực tiếp tại nhà hàng</a></h3>
 					<p class="fontroboto">Đem đến cho khách hàng chất lượng dịch vụ tốt nhất (món ăn, cung cách – thái độ phục vụ,…) khiến khách cảm thấy hài lòng, vui vẻ.</p>
 				</div>
 				<div class="col-sm-4 wow flipInY" data-wow-delay="0.2s">
 					<a href=""><img src="images/anhdv02.jpg" alt="" class="img-fluid"></a>
 					<h3><a class="fontoswald" href="">Dịch vụ đặt giữ chỗ nhà hàng</a></h3>
 					<p class="fontroboto">Quy trình xử lý thông tin đặt bàn được thực hiện một cách chính xác, đúng ngày giờ để khách hàng luôn cảm thấy hài lòng về chất lượng dịch vụ.</p>
 				</div>
 				<div class="col-sm-4 wow flipInY" data-wow-delay="0.4s">
 					<a href=""><img src="images/anhdv04.jpg" alt="" class="img-fluid"></a>
 					<h3><a class="fontoswald" href="">Dịch vụ Catering</a></h3>
 					<p class="fontroboto">Với dịch vụ Catering, các nhà hàng sẽ nhận tổ chức tiệc cho khách hàng: tiệc cưới, tiệc team – building, tiệc gala dinner… </p>
 				</div>
 			</div> <!-- het row -->
 		</div> <!-- het container -->
 	</div> <!-- het badichvu -->

	<div class="khoimenu wow fadeInUp">
		<div class="tieudekhoimenu text-xs-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 push-sm-2">
						<span class="tieudephu fontdancing">Mục thực đơn ngon của chúng tôi</span>
						<h3 class="tieudechinh fontroboto">Thực phẩm tươi và tốt cho sức khỏe</h3>
				 	</div>
				</div>
			</div>	
		</div> <!-- het tieudekhoimenu -->
	</div> <!-- het khoimenu -->

	<div class="thucdonct wow fadeInUp">
		<div class="tieudect text-xs-center fontroboto">
			<a href="" data-monan="*">Tất cả</a>
			<a href="" data-monan=".1">Bữa sáng</a>
			<a href="" data-monan=".2">Bữa trưa</a>
			<a href="" data-monan=".3">Bữa tối</a>
		</div>
		<div class="noidungct">
			<div class="container">
				<div class="row nhieumon">
					<?php foreach ($dsmonan as $dsmon): ?>
					
					<div class="col-xs-12 col-sm-6 col-md-4 motmon <?= $dsmon['id_meal'] ?>">
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

					<?php endforeach ?>
				</div> <!-- het row -->
			</div> <!-- het container -->
		</div> <!-- het noidungct -->
	</div> <!-- het thucdonct -->
	<div class="slidemonan wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h4>Món ăn đặc biệt của chúng tôi</h4>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div id="slidemonanduoi" data-interval="3000" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slidemonanduoi" data-slide-to="0" class="active"></li>
							<li data-target="#slidemonanduoi" data-slide-to="1"></li>
							<li data-target="#slidemonanduoi" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<div class="row">
									<?php foreach ($dsmonanslide1 as $mon1): ?>
																	
									<div class="sanpham">
										<img src="<?= $mon1['image_dish'] ?>" alt="" class="img-fluid">
										<div class="tensp">
											<div class="gia float-xs-right"><?php echo number_format($mon1['price'],0,'.',',') . 'đ' ?></div>
											<div class="ten"><?= $mon1['name_dish'] ?></div>
										</div>
										<div class="tencongthuc">
											<?= $mon1['description'] ?>
										</div> 
									</div> <!-- SAN PHAM -->
									<?php endforeach ?>

								</div> <!-- het row -->
							</div>  <!-- HET CAROUSEL ITEM -->
							<div class="carousel-item ">
								<div class="row">
									<?php foreach ($dsmonanslide2 as $mon2): ?>
									
									<div class="sanpham">
										<img src="<?= $mon2['image_dish'] ?>" alt="" class="img-fluid">
										<div class="tensp">
											<div class="gia float-xs-right"><?php echo number_format($mon2['price'],0,'.',',') . 'đ' ?></div>
											<div class="ten"><?= $mon2['name_dish'] ?></div>
										</div>
										<div class="tencongthuc">
											<?= $mon2['description'] ?>
										</div> 
									</div> <!-- SAN PHAM -->

									<?php endforeach ?>
								</div> <!-- het row -->
							</div>  <!-- HET CAROUSEL ITEM -->
							<div class="carousel-item ">
								<div class="row">
									<?php foreach ($dsmonanslide3 as $mon3): ?>
									
									<div class="sanpham">
										<img src="<?= $mon3['image_dish'] ?>" alt="" class="img-fluid">
										<div class="tensp">
											<div class="gia float-xs-right"><?php echo number_format($mon3['price'],0,'.',',') . 'đ' ?></div>
											<div class="ten"><?= $mon3['name_dish'] ?></div>
										</div>
										<div class="tencongthuc">
											<?= $mon3['description'] ?>
										</div> 
									</div> <!-- SAN PHAM -->

									<?php endforeach ?>
								</div> <!-- het row -->
							</div>  <!-- het carousel item -->
							 
						</div>
						<a class="left carousel-control" href="#slidemonanduoi" role="button" data-slide="prev">
							<span class="icon-prev" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#slidemonanduoi" role="button" data-slide="next">
							<span class="icon-next" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div> <!-- het row -->
		</div> <!-- het container -->
	</div> <!-- het slidemonan -->

	<div class="gioithieudaubep wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<img src="images/daubep.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-sm-7 push-sm-1">
					<div class="thongtin">
						<h2 class="fontoswald">Rene Oskam</h2>
						<span class="fontdancing">Bậc thầy nấu ăn</span>
						<p class="fontroboto"> 
							Đức Restaurant trân trọng giới thiệu Bếp Trưởng Rene Oskam với hơn 18 năm làm việc tại nhiều khách sạn thuộc các tập đoàn xuyên quốc gia với vị trí Bếp Trưởng Điều Hành. 
						</p>
						<p class="fontroboto">
							Bếp trưởng Rene được lớn lên trong một gia đình có truyền thống về ẩm thực với cha của anh là một đầu bếp và gia đình của mẹ anh là những đầu bếp bánh tài ba. Với khao khát phát triển những trải nghiệm chân thực nhất tại Đức Restaurant, phục vụ những nguyên liệu tốt nhất mà chúng tôi có cũng như giới thiệu hương vị mới, Bếp Trưởng Rene hướng tới gây dựng đội ngũ đầu bếp tài năng ngày càng phát triền và thành công hơn nữa.
						</p>
					</div> <!-- het thongtin -->
					<div class="daubepcontact">
						<a href="" class="icondb"><i class="fa fa-facebook"></i></a>
						<a href="" class="icondb"><i class="fa fa-vimeo"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- het gioithieudaubep -->

	<div class="sloganhome wow fadeInUp">
		<div class="container text-xs-center">
			<div class="row">
				<div class="col-sm-8 push-sm-2">
					<h3 class="fontdancing">Tận hưởng bữa ăn ngon với gia đình, bạn bè và đối tác</h3>
					<span class="fontroboto">Không khí thư giãn</span>
				</div>
			</div>
		</div>
	</div> <!-- het sloganhome -->

	<div class="khoidatban text-xs-center wow fadeInUp">
		<form action="<?= base_url() ?>homepage/reservation" method="POST" id="formdatbanonline">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 push-sm-3">
						<div class="thongtindatban fontroboto">
							<h2 class="fontroboto">Đặt bàn</h2>
							<p class="tt">Đặt bàn chưa bao giờ dễ dàng đến thế với việc đặt bàn trực tuyến miễn phí và ngay lập tức, đặt ngay !!</p>
							<p class="giodb">Thứ hai đến Thứ sáu <span class="vang"> 7:00 sáng - 23:00 tối </span> Thứ bảy đến Chủ nhật <span class="vang"> 10:00 sáng - 22:00 tối </span> Lưu ý: Nhà hàng Đức Restaurant đóng cửa vào các ngày lễ.</p>
							<div class="dtdb fontoswald">+84 886 140 122</div>
						</div>
					</div>
					<div class="col-sm-10 push-sm-1">
						<div class="formdatban">
							<div class="row">
								<div class="col-sm-12">
									<h2 class="text-xs-center fontroboto">Đặt bàn trực tuyến</h2>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="text" name="name_customer" class="form-control" placeholder="Họ tên *" required>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Email *" required>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="number" name="phone" class="form-control" placeholder="Số điện thoại *" required>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="date" name="book_date" class="form-control" placeholder="Ngày *" required>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="time" name="book_time" class="form-control" placeholder="Thời gian *" required>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="number" name="number_people" class="form-control" placeholder="Số lượng người *"required>
									</div>
								</div>
								<div class="col-sm-12 text-xs-center">
									<input type="submit" class="btn btn-warning datban2" value="Đặt bàn ngay">
								</div>
							</div>
						</div> <!-- het formdatban -->
					</div>
				</div>	<!-- het row -->
			</div> <!-- het container -->
		</form>
	</div> <!-- het datban -->	

	<div class="phanhoinguoidung wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 push-sm-1 text-xs-center">
					<div id="slidetestimnial" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slidetestimnial" data-slide-to="0" class="active"></li>
							<li data-target="#slidetestimnial" data-slide-to="1"></li>
							<li data-target="#slidetestimnial" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
							 	 <i class="fa fa-quote-right"></i>
							 	 <div class="quote">
							 	 	Đói thì phải ăn, khát thì phải uống. Các nhà khoa học gọi đó là Định Luật Bảo Toàn Tính Mạng.
							 	 </div>
							 	 <b class="fontdancing tennguoi"> Khuyết danh </b>

							</div> 
							 <div class="carousel-item ">
							 	 <i class="fa fa-quote-right"></i>
							 	 <div class="quote">
							 	 	Đồ ăn chính là biểu tượng của tình yêu khi ta không tìm ra từ ngữ nào để diễn tả.
							 	 </div>
							 	 <b class="fontdancing tennguoi"> Alan D. Wolfelt </b>

							</div> 
							<div class="carousel-item ">
							 	 <i class="fa fa-quote-right"></i>
							 	 <div class="quote">
							 	 	Trông tôi có vẻ như đang suy nghĩ nhưng 99% suy nghĩ của tôi dành cho việc sẽ ăn gì tiếp theo
							 	 </div>
							 	 <b class="fontdancing tennguoi"> Khuyết danh </b>
							</div> 							
						</div>	 
					</div>
				</div>
			</div>
		</div>
	</div> <!-- het phanhoinguoidung -->

	<div class="tintuchome">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-xs-center">
					<div class="tdtintuchome">
						<span class="fontdancing">Tin tức của chúng tôi</span>
						<h2 class="fontroboto">Cập nhật tin tức mới nhất</h2>
					</div>
				</div>
				<?php foreach ($dstintuc as $dstin): ?>
				
				<div class="col-md-4 col-sm-2 col-xs-12 wow flipInY">
					<div class="mottinchuan">
						<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $dstin['id'] ?>"><img class="anhtinhome" src="<?= $dstin['image_news'] ?>" alt="<?php echo base_url() ?>newspage/newsDetail/<?= $dstin['id'] ?>"></a>
						<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $dstin['id'] ?>" class="tieudetin1 fontoswald"><?= $dstin['title'] ?></a>
						<div class="ngaythang1"><?= date('l, d/m/Y  G:i a',$dstin['date_created']) ?> - <span class="vang"> <?= $dstin['name_catenews'] ?></span></div>
						<p class="fontroboto tintrichdanhome"><?= $dstin['quote'] ?></p>
						<div class="docthem mb-2 mb-2">
							<a href="<?php echo base_url() ?>newspage/newsDetail/<?= $dstin['id'] ?>" class="rm fontroboto">Xem thêm</a>
						</div>
					</div>
				</div>

				<?php endforeach ?>
			</div>
		</div>
	</div> <!-- het tintuchome -->

	<?php include "footer_home.php"; ?>
</body>
</html>