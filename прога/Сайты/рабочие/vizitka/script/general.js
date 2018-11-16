$(document).ready(function() {
	//переменные от цвета текста и цвета бэка, заданных в body
	var color = $('body').css('color');
	var back_color = $('body').css('background-color');
	
	//подчеркивание страницы, на которой находишься с помошью проверки адресов страницы и ссылки элемента navi
	$(function selectedNavi() {
 		function getFileName() {
			//this gets the full url
			var url = document.location.href;
			//this removes the anchor at the end, if there is one
			url = url.split('#')[0];
			//this removes the query after the file name, if there is one
			url = url.split('?')[0];
			//this removes everything before the last slash in the path
			url = url.split('/').pop();
			return url;
		};
		//циклируем li на совпадение линка и названия текущей страницы
 		$('.navi li').each(function () {
	        var naviLink = $(this).find('a').attr('href');	
	        if (naviLink === "index.php" && getFileName() === "") {
	            $(this).addClass('selected');
	        } 
	        else if (naviLink === getFileName()) {
	            $(this).addClass('selected');
	        }
	    });
	});

	//нажатие на languages, скрывает список
	$('li.menu').click(function(event) {
		event.preventDefault();
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
			$('li.menu a').css('color', color);
			$('li.menu').css('background-color', back_color);
			$('ul.languages li.lang').hide();
		}
		else {
			$(this).addClass('active');
			$('li.menu.active a').css('color', back_color);
			$('li.menu.active').css('background-color', color);
			$('ul.languages li.lang').show();
		}
	});

	//нажатие на contacts, открытие, закрытие формы
	$('li.contacts').click(function(event) {
		event.preventDefault();
		$(this).addClass('selected');
		$('div.contacts_window').show();
	});

	$('.closeButtonContacts').click(function(event) {
		event.preventDefault();
		$('.contacts_window').hide();
		$('li.contacts').removeClass('selected');
	});

	//тема письма
	$('#theme_box li').click(function(event) {
		event.preventDefault();
		if ($(this).hasClass('select')) {
			$(this).removeClass('select');
			$(this).css('color', back_color);
			$(this).css('background-color', color);	
		}
		else {
			$('#theme_box li.select').css('color', back_color);
			$('#theme_box li.select').css('background-color', color);
			$('#theme_box li.select').removeClass('select');
			$(this).addClass('select');
			$(this).css('color', color);
			$(this).css('background-color', back_color);
		}
	});

	$('#theme_box li').mouseover(function() {
		if (!$(this).hasClass('select')) {
			$(this).css('color', color);
			$(this).css('background-color', back_color);
		}
	}).mouseout(function() {
		if (!$(this).hasClass('select')) {
			$(this).css('color', back_color);
			$(this).css('background-color', color);
		}
	});

	//всплывашка в проектах 
	$('.openVspliv').click(function(event) {
		event.preventDefault();
		$('.vspliv').css({'display':'flex','flex-direction':'column'});
		$('.vspliv').show();
	});

	$('.closeButtonVspliv').click(function(event) {
		event.preventDefault();
		$('.vspliv').hide();
	});
});