<!DOCTYPE html>
<html lang="ru">
<head>
    
    <?php require($DOCUMENT_ROOT."includes/head.php");?>
    
    <link rel="stylesheet" type="text/css" href="css/styleOther.css">
	<link rel="stylesheet" type="text/css" href="css/whitecolor.css"> <!--белый текст-->

    <?php require($DOCUMENT_ROOT."includes/scripts.php");?>
    
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
			//Навигация
			menu: '#menu',
			lockAnchors: false,
			anchors:['sectio0','sectio1','sectio2'],
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
			interlockedSlides: false,
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
</head>

<body class="design">
	
	<div id="fullpage">	
		<div class="section" id="section0">
			
			<?php require($DOCUMENT_ROOT."includes/nav.php");?>

			<main class="navdots fullheight designMain">			
				<div class="slide_header_container">
					<div class="slide design_slide">
						<h1 class="sliding_header">Site?</h1>
					</div>

					<div class="slide design_slide">
						<h1 class="sliding_header">Laptop?</h1>
					</div>

					<div class="slide design_slide">
						<h1 class="sliding_header">Pills?</h1>
					</div>

					<div class="slide design_slide">
						<h1 class="sliding_header">Mining farm?</h1>
					</div>
				</div>

				<h1 class="fixed">Design it.</h1>
				<a href="projects.php" class="go">
					<p>Go to projects</p>
					<img class="fin_line" src="img/fin_line.svg" alt="">
				</a>
				
			</main>
		</div>
	</div>
</body>
</html>