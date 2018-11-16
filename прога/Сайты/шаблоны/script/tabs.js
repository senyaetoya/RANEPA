$(document).ready(function() {
	$('.tabs a').click(function(event) {
		event.preventDefault();
		if (!$(this).hasClass('active_tab')) {
			$('.tabs a.active_tab').removeClass('active_tab');
			$('div.desc.active_tab').removeClass('active_tab');
			$(this).addClass('active_tab');
			var tabIndex = $(this).attr('tabIndex');
		};
	});
});

