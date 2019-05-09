<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trang chủ quản trị</title>
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
 	<?php include 'header_admin.php'; ?>
	<div class="quantriadmin">
		<div class="container-fluid mt-3">
			<div class="row">
				<div class="col-sm-12 mt-2">
			        <div class="jumbotron jumbotron-fluid text-xs-center">
						<div class="container">
							<h1 class="">Trang chủ quản trị</h1>
							<p class="lead">Form này dùng để thống kê các thông tin của nhà hàng</p>
							<hr class="m-y-md">
						</div>
					</div>
				</div> <!-- end cot trai -->
				<div class="col-sm-4 mt-1">
					<div class="card card-inverse card-primary text-center"> 
					    <div class="card-block thongkead">
						    <h4 class="card-blockquote">
						    	<i class="fa fa-list-alt"></i> Tổng số danh mục 
						    	<p class="float-xs-right"> <?php echo $sodanhmuc ?></p>
						    </h4>
						</div>
				   	</div>
				</div>
				<div class="col-sm-4 mt-1">
					<div class="card card-inverse card-danger text-center"> 
					    <div class="card-block thongkead">
						    <h4 class="card-blockquote">
						    	<i class="fa fa-newspaper-o"></i> Tổng số tin tức 
						    	<p class="float-xs-right"> <?php echo $sotin ?></p>
						    </h4>
						</div>
				   	</div>
				</div>
				<div class="col-sm-4 mt-1">
					<div class="card card-inverse card-success text-center"> 
					    <div class="card-block thongkead">
						    <h4 class="card-blockquote">
						    	<i class="fa fa-cutlery"></i> Tổng số món ăn 
						    	<p class="float-xs-right"> <?php echo $somonan ?></p>
						    </h4>
						</div>
				   	</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>