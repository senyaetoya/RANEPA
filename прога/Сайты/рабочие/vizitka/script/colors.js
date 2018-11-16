$(document).ready(function() {
	//переменные от цвета текста и цвета бэка, заданных в body
	var color = $('body').css('color');
	var back_color = $('body').css('background-color');

	//опредление цвета текста 
	$('ul.languages li.lang a').css('color', back_color);
	$('nav').css('color', color);
	$('.contacts_window').css('color', back_color);
	$('.contacts_header').css('color', back_color);
	$('#letter').css('color', back_color);
	$('.contacts_window input').css('color', back_color);
	$('.contacts_window #form_submit').css('color', back_color);
	$('.vspliv').css('color', back_color);
	//опредление цвета бэкграунда
	$('nav').css('background-color', back_color);
	$('ul.languages li.lang').css('background-color', color);
	$('.contacts_window').css('background-color', color);
	$('.contacts_window input').css('background-color', color);
	$('#letter').css('background-color', color);
	$('.contacts_window #form_submit').css('background-color', color);
	$('.vspliv').css('background-color', color);
	$('.vspliv .some_content').css('background-color', back_color);
	//определение цвета границ
	$('.contacts_window #general input').css('border-color', back_color);
	$('#theme').css('border-color', back_color);
	$('#letter').css('border-color', back_color);
	$('#form_submit').css('border-color', back_color);
});