	<div class="topheader">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-5">
 					<div class="mangxh float-sm-left text-xs-center text-sm-left">
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-google-plus"></i></a>
 					 </div>
 					<div class="datban">
 						Gọi để đặt bàn: +84 886 140 122
 					 </div>
 				</div>
 				<div class="col-sm-4">
 					<div class="datban openingtop float-sm-left text-sm-left text-xs-center">
 						Giờ mở cửa: 9:00 sáng - 10:00 tối
 					</div>
 				</div>
 				<div class="col-sm-3">
 					<div class="dangnhapadmin openingtop float-sm-right text-sm-left text-xs-center">
 						<ul class="dangnhapquantri">
 							<?php if ($this->session->userdata('login')) { ?>
 								<li class="lidangnhap"><a href="<?php echo base_url() . 'Homeadmin' ?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('login'); ?></a></li>
 								<li class="lidangnhap"><a href="<?php echo base_url() . 'Homepage/logout' ?>"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
 							<?php } else { ?>
	 							<li class="lidangnhap"><a href="<?= base_url() ?>Login"><i class="fa fa-sign-in"></i> Quản trị</a></li>
 							<?php } ?>
 						</ul>
 					</div>
 				</div>
 			</div> <!-- het row -->
 		</div> <!-- het container -->
 	</div> <!-- het topheader  -->

 	<div class="logovamenu">
	    <nav class="navbar navbar-light fontroboto">
	    	<div class="container">    	
			    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#mtren">
			       
			    </button>
		      	<div class="collapse navbar-toggleable-xs" id="mtren">
		        	<a class="navbar-brand text-xs-center text-sm-left anhnhahang" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>images/logo.png" alt=""></a>
		        	<ul class="nav navbar-nav float-sm-right">
		          		<li class="nav-item active">
		            		<a class="nav-link nav-menu1" href="<?php echo base_url() ?>">Trang chủ </a>
		          		</li>
		          		<li class="nav-item">
		            		<a class="nav-link nav-menu1" href="<?php echo base_url() ?>About">Giới thiệu</a>
		          		</li>
		          		<li class="nav-item">
		            		<a class="nav-link nav-menu1" href="<?php echo base_url() ?>Newspage/page/1">Tin tức</a>
		          		</li>
		          		<li class="nav-item">
		            		<a class="nav-link nav-menu1" href="<?php echo base_url() ?>Menu">Thực đơn</a>
		          		</li>
		          		<li class="nav-item">
		            		<a class="nav-link nav-menu1" href="<?php echo base_url() ?>Contactpage">Liên hệ</a>
		          		</li>
		         		<li class="nav-item datbanmenu">
		            		<a class="nav-link btn btn-warning wow bounce nav-menu1" data-wow-iteration="5">ĐẶT BÀN</a>
		          		</li>
		        	</ul>
		      	</div>
	      	</div> <!-- het container -->
	    </nav>  
 	</div> <!-- het logo va menu -->
 	<div class="datbanonline text-xs-center">
 		<form action="<?= base_url() ?>homepage/reservation" method="POST">
	 		<i class="nutx fa fa-close"></i>
	    	<div class="container ml-3">
	    		<div class="row">
	    			<div class="col-sm-10 push-sm-1">
						<div class="formdatban1 mt-3 mb-3">
							<div class="row">
								<div class="col-sm-12">
									<div class="thongtindatban1 fontroboto">
										<h2 class="fontroboto">Đặt bàn</h2>
										<p class="giodb">Thứ hai đến Thứ sáu <span class="vang"> 7:00 sáng - 23:00 tối </span> Thứ bảy đến Chủ nhật <span class="vang"> 10:00 sáng - 22:00 tối </span> Lưu ý: Nhà hàng Đức Restaurant đóng cửa vào các ngày lễ.</p>
										<div class="dtdb fontoswald">+84 886 140 122</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="text" name="name_customer" class="form-control" placeholder="Họ tên *">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Email *">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="number" name="phone" class="form-control" placeholder="Số điện thoại *">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="date" name="book_date" class="form-control" placeholder="Ngày *">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="time" name="book_time" class="form-control" placeholder="Thời gian *">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<input type="number" name="number_people" class="form-control" placeholder="Số lượng người *">
									</div>
								</div>
								<div class="col-sm-12 text-xs-center">
									<input type="submit" class="btn btn-warning datban2" value="Đặt bàn ngay">
								</div>
							</div>
						</div> <!-- het formdatban -->
					</div>
	    		</div>
	    	</div>
	    </form>
    </div>
    <div class="den"></div>
