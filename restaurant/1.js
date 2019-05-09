$(function() {

	// Thư viện sắp xếp ảnh
	khoimonan = $('.nhieumon').isotope({
	  	itemSelector: '.motmon',
	  	layoutMode: 'fitRows'
	});
	// Load đến đâu xử lý đến đó
	khoimonan.imagesLoaded().progress( function() {
	  	khoimonan.isotope('layout');
	});

	// lúc truyền dữ liệu để data-
	// lúc lấy về để data()
	// hiệu ứng lọc món ăn bằng html5
	$('.tieudect a').click(function() {
		dulieu = $(this).data('monan');

		khoimonan.isotope({ filter: dulieu })
		return false; // bỏ tác dụng thẻ a
	});


	new WOW().init();

});

jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
	//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
	offset_opacity = 1200,
	//duration of the top scrolling animation (in ms)
	scroll_top_duration = 700,
	//grab the "back to top" link
	$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) {
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
			}, scroll_top_duration
		);
	});

});
$(function() {
	// Jquery cho đặt bàn online
	$('.datbanmenu').click(function(event) {
		$(this).parent().parent().parent().parent().parent().next().addClass('hienlen');
		$('.den').addClass('hienlen');
	});
	$('i.nutx, .den').click(function(event) {
		$('.datbanonline').removeClass('hienlen');
		$('.den').removeClass('hienlen');
	});
	$(document).keyup(function(e) {
	  	if (e.keyCode === 27) {
	  		$('.datbanonline').removeClass('hienlen');
			$('.den').removeClass('hienlen');
	  	}  // esc
	});
});