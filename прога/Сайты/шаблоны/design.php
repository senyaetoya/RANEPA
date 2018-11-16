<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>zeuberlich</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css">
	<link rel="stylesheet" href="css/style_bp.css">
	<link rel="stylesheet" type="text/css" href="css/whitecolor.css"> <!--белый текст-->
	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="script/jquery.fullPage.js"></script>	
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
			//Навигация
			menu: '#menu',
			lockAnchors: false,
			anchors:['sectio0','sectio1','sectio2','sectio3'],
			navigation: false,
			navigationPosition: 'bottom',
			navigationTooltips: ['firstSlide', 'secondSlide'],
			showActiveTooltip: false,
			slidesNavigation: true,
			slidesNavPosition: 'bottom',

			//Скроллинг
			css3: true,
			scrollingSpeed: 700,
			autoScrolling: true,
			fitToSection: true,
			fitToSectionDelay: 1000,
			scrollBar: true,
			easing: 'easeInOutCubic',
			easingcss3: 'ease',
			loopBottom: false,
			loopTop: false,
			loopHorizontal: true,
			continuousVertical: false,
			continuousHorizontal: false,
			scrollHorizontally: false,
			interlockedSlides: true,
			dragAndMove: false,
			offsetSections: false,
			resetSliders: false,
			fadingEffect: false,
			normalScrollElements: '#element1, .element2',
			scrollOverflow: false,
			scrollOverflowReset: false,
			scrollOverflowOptions: null,
			touchSensitivity: 15,
			normalScrollElementTouchThreshold: 5,
			bigSectionsDestination: null,

			//Доступ
			keyboardScrolling: true,
			animateAnchor: true,
			recordHistory: true,

			//Дизайн
			controlArrows: false,
			verticalCentered: false,
			sectionsColor : [],
			paddingTop: 0,
			paddingBottom: 0,
			fixedElements: '#header, .footer',
			responsiveWidth: 0,
			responsiveHeight: 0,
			responsiveSlides: false,
			parallax: false,
			parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

			//Настроить селекторы
			sectionSelector: '.section',
			slideSelector: '.slide',

			lazyLoading: true,

			//события
			onLeave: function(index, nextIndex, direction){},
			afterLoad: function(anchorLink, index){},
			afterRender: function(){},
			afterResize: function(){},
			afterResponsive: function(isResponsive){},
			afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
			onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
		});
	});
	</script>

	<script type="text/javascript"> //не дает прокручиваться по горизонтали, чтобы контент заходил под скроллбар
		var scrollEventHandler = function()
		{
		  window.scroll(0, window.pageYOffset)
		}
		window.addEventListener("scroll", scrollEventHandler, false);
	</script>

	<script type="text/javascript" src="script/tabs.js"></script>	
		
</head>

<body class="design">
	
	<div id="fullpage">	
		
		<div class="section pointer" id="section3">
			<header>
				<p>Pointer</p>
			</header>

			<main class="pointer">
				<div class="left_column">
					<h2>Prefer perfection</h2>

					<ul class="tabs">
						<li><a class="active" href="#" tabIndex="0">About</a></li>
						<li><a href="#" tabIndex="1">Specifications</a></li>
						<li><a href="#" tabIndex="2">Timeline</a></li>
					</ul>

					<div class="slide desc">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quae officia architecto? Mollitia sit laborum cupiditate sint est, eos, magni odio, laboriosam eaque qe.</p>
					</div>

					<div class="slide desc">
						<p>Lfgfdcxvvc.</p>
					</div>

					<div class="slide desc">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, repellendus cum, necessitatibus quas repellat fuga iusto perferendis delectus maiores culpa hic deserunt. Esse unde libero quidem odit, repellat accusantium assumenda delectus eos explicabo.</p>
					</div>

					<ul class="submenufoot">
						<li><a href="#">View website</a></li>
						<li><a href="#">Read news</a></li>
						<li><a href="store.php">Go to store</a></li>
					</ul>
				</div>			
			</main>

			<footer>
			    <a href="#blog">
				<span>Next project</span>
				<img class="arrow" src="img/Arrow_white.svg" alt="">
				</a>
			</footer>

		</div>
	</div>
</body>
</html>