<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quản lý bữa ăn</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<body>
<?php include 'header_admin.php'; ?>
<div class="container-fluid mt-3 pt-2">
	<div class="row">
		<div class="col-sm-6">
	        <div class="jumbotron jumbotron-fluid text-xs-center">
				<div class="container">
					<h1 class="">Thêm các bữa ăn</h1>
					<p class="lead">Form này cho phép thêm các bữa ăn vào cơ sở dữ liệu</p>
					<hr class="m-y-md">
				</div>
			</div>
			<!-- <form action="news/addCateNews" method="POST"> -->
				<fieldset class="form-group">
					<label for="formGroupExampleInput">Tên bữa ăn</label>
					<input name="name_meal" type="text" class="form-control" id="name_meal" placeholder="Tên bữa ăn">
				</fieldset>
				<fieldset class="form-group">
					<input type="button" class="form-control btn btn-success" id="nutthembuaan" value="Thêm bữa ăn">
				</fieldset>
			<!-- </form> -->
		</div> <!-- end cot trai -->
		<div class="col-sm-6 cacbuaan">
			<div class="jumbotron jumbotron-fluid text-xs-center">
				<div class="container">
					<h1>Danh sách bữa ăn</h1>
					<p class="lead">Các bữa ăn đã thêm</p>
					<hr class="m-y-md">
				</div>
			</div>
			<?php foreach ($dulieu as $value): ?>
				
			<div class="card card-inverse card-primary mb-3 text-center"> 
			    <div class="card-block">
				    <div class="thaotac text-xs-right">
				    	<a data-href="<?= $value['id']; ?>" class="nutedit btn btn-warning"> <i class="fa fa-pencil"></i></a>
				    	<?php if($value['id'] == 1 || $value['id'] == 2 || $value['id'] == 3) { ?>
				    		
				    	<?php } else { ?>
				    	<a data-href="<?= $value['id']; ?>" class="nutxoa btn btn-danger"> <i class="fa fa-remove"></i></a>
				    	<?php } ?>
				    </div>
				    <div class="jquery_button text-xs-right hidden-xs-up">
				    	 <a href="" class="btn btn-success nutluu"> Lưu </a>
				    </div>
				    <h4 class="card-blockquote">
			    		<fieldset class="form-group jquery_tenbuaan hidden-xs-up">
			    			<input type="hidden" class="form-control id" value="<?= $value['id']; ?>">
			    			<input type="text" class="form-control tenbuaansua" value="<?= $value['name_meal']; ?>">
			    		</fieldset>
			    		<div class="noidung_ten">
			    			<?= $value['name_meal']; ?>
			    		</div>
				    </h4>
				</div>
		   	</div>

			<?php endforeach ?>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>

<script>
	$(function() {

		$('body').on('click', '.nutedit', function(event) {

			$(this).parent().addClass('hidden-xs-up');
			$(this).parent().next().next().find('.noidung_ten').addClass('hidden-xs-up');
			$(this).parent().next().removeClass('hidden-xs-up');

			$(this).parent().next().next().find('.jquery_tenbuaan').removeClass('hidden-xs-up');
			// sử dụng ajax để kết nối với controller cập nhật dữ liệu

			event.preventDefault();
 			/* Act on the event */
		});

		$('body').on('click', '.nutluu', function(event) {
			
			giatriten = $(this).parent().next().children('.jquery_tenbuaan').children('.tenbuaansua').val();
			giatriid = $(this).parent().next().children('.jquery_tenbuaan').children('.id').val();

			phantu1 = $(this).parent().addClass('hidden-xs-up');
			phantu2 = $(this).parent().next().children('.jquery_tenbuaan').addClass('hidden-xs-up');
			noidung = $(this).parent().next().children('.jquery_tenbuaan').children('.tenbuaansua').val();
			// cho hiện thị ra
			hienthi1 = $(this).parent().prev().removeClass('hidden-xs-up');
			hienthi2 = $(this).parent().next().children('.noidung_ten').html(noidung).removeClass('hidden-xs-up');

			$.ajax({
				url: duongdan + 'dish/updateMeal',
				type: 'POST',
				dataType: 'json',
				data: {
					name_meal: giatriten,
					id: giatriid,
				},
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
			event.preventDefault();
 			/* Act on the event */
		});

		var duongdan = '<?php echo base_url() ?>';
		// bắt sự kiện click nút
		$('#nutthembuaan').click(function(event) {
			/* Act on the event */
			
			$.ajax({
				url: duongdan + 'dish/addJquery', // gửi đi controller xử lý 
				type: 'POST',
				dataType: 'json',
				data: {
					name_meal:  $('#name_meal').val()
			},
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function(res) {
				console.log(res);
				// dùng jquery add ra nội dung thêm mới
				noidung = '<div class="card card-inverse card-primary mb-3 text-center">';
				noidung+= '<div class="card-block">';
				noidung+= '<div class="thaotac text-xs-right">';
				noidung+= '<a data-href="'+res+'" class="nutedit btn btn-warning"> <i class="fa fa-pencil"></i></a>';
				noidung+= ' <a data-href="'+res+'" class="nutxoa btn btn-danger"> <i class="fa fa-remove"></i></a>';
				noidung+= '</div>';
				noidung+= '<div class="jquery_button text-xs-right hidden-xs-up">';
				noidung+= '<a href="" class="btn btn-success nutluu"> Lưu </a>';
				noidung+= '</div>';
				noidung+= '<h4 class="card-blockquote">';
				noidung+= '<fieldset class="form-group jquery_tenbuaan hidden-xs-up">';
				noidung+= '<input type="hidden" class="form-control id" value="'+res+'">';
				noidung+= '<input type="text" class="form-control tenbuaansua" value="'+$('#name_meal').val()+'">';
				noidung+= '</fieldset>';
				noidung+= '<div class="noidung_ten">';
				noidung+= $('#name_meal').val();
				noidung+= '</div>';
				noidung+= '</h4';
				noidung+= '</div>';
				noidung+= '</div>';
				$('.cacbuaan').append(noidung);
				$('#name_meal').val('');
			});
			
		}); // hết jquery cho nút thêm mới
		// bắt đầu jquery cho nút xóa
		$('body').on('click', '.nutxoa', function(event) {
			
			iddish = $(this).data('href');
			doituongxoa = $(this).parent().parent().parent();
			$.ajax({
				url: duongdan + 'dish/deleteMeal/' + iddish,
				type: 'POST',
				dataType: 'json'
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
				// dùng jquery, xóa luôn phần tử, đỡ phải load lại
				doituongxoa.remove();
			});
		});
	});
</script>

</body>
</html>