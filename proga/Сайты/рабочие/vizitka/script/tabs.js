$(document).ready(function() {   
    //табы в поинтере, выбор активного описания
	$('.tabs a').click(function(event) {	
		event.preventDefault();
		if (!$(this).hasClass('active')) {
			$('.tabs a.active').removeClass('active');
			$('.desc.active').removeClass('active');
			$(this).addClass('active');
			var tabIndex = $(this).attr('tabIndex');
			$('#'+ tabIndex).addClass('active');
		}
	});
});

