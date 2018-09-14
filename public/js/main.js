$(document).ready(function(){
	$('#card').click(function(e) {
		e.stopPropagation();
		$(this).closest('.card').hide();
	});
	$('[data-toggle="popover"]').popover(); 

	$('.carousel').carousel({
		interval: 2000,
		pause: "false"
	  });

	// var $numberofSlides = $('.carousel-item').length;
	// var $currentSlide = Math.floor((Math.random() * $numberofSlides));

	// $('.carousel-indicators li').each(function(){
	// 	var $slideValue = $(this).attr('data-slide-to');
		
	// 	if($currentSlide == $slideValue) {
	// 		$(this).addClass('active');
	// 		$item.eq($slideValue).addClass('active');
	// 	} else {
	// 		$(this).removeClass('active');
	// 		$item.eq($slideValue).removeClass('active');
	// 	}
	// });

});