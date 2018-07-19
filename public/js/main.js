$(document).ready(function(){
	$("#my_audio").get(0).play();
	$('#card').click(function(e) {
		e.stopPropagation();
		$(this).closest('.card').hide();
	});
	$('[data-toggle="popover"]').popover(); 
});