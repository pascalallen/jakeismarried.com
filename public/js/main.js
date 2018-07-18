$(document).ready(function(){
	$('#card').click(function(e) {
		e.stopPropagation();
		$(this).closest('.card').hide();
	});
	$('[data-toggle="popover"]').popover(); 
});