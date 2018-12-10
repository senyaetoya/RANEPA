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

<body class="store">
	
	<div id="fullpage">	
		<div class="section" id="section0">
			
			<?php require($DOCUMENT_ROOT."includes/nav.php");?>

			<main class="navdots fullheight">
				<div class="slide proj_slide" id="slide0">
					<h1>Prefer perfection</h1>
					<a href="#" class="go">
						<p>Go to blog</p>
						<?php include($DOCUMENT_ROOT."includes/finLine.php");?>
					</a>
				</div>

				<div class="slide proj_slide">	
				</div>

				<div class="slide proj_slide">
				</div>

				<div class="slide proj_slide">
				</div>

				<div class="slide proj_slide">
				</div>
			</main>
		</div>
		
		<div class="section pointer" id="section1">
			<header>
				<p>Pointer</p>
			</header>
			<main class="pointer">
				<div class="pointer_desc">
					<h2>Prefer perfection</h2>
					<ul class="tabs">
						<li><a class="active" href="#" tabIndex="tab1">About</a></li>
						<li><a href="#" tabIndex="tab2">Specifications</a></li>
						<li><a href="#" tabIndex="tab3">Timeline</a></li>
					</ul>
					<div class="desc active" id="tab1">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quae officia architecto? Mollitia sit laborum cupiditate sint est, eos, magni odio, laboriosam eaque qui inventore.</p>
					
					</div>
					<div class="desc" id="tab2">
						<p>Lfgfd.</p>
					</div>
					<div class="desc" id="tab3">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, repellendus cum, necessitatibus quas repellat fuga iusto perferendis delectus maiores culpa hic deserunt. Esse unde libero quidem odit, repellat accusantium assumenda delectus eos explicabo.</p>
					</div>
					<ul class="submenufoot">
						<li><a href="#">Naming</a></li>
						<li><a href="#">Logo</a></li>
						<li><a href="#">Social Networks</a></li>
						<li><a href="#">Vcards</a></li>
						<li><a href="#">Includes:</a></li>
					</ul>
				</div>

				<div class="pointer_photos navdots">
					<div class="slide photka" id="photka1">
					</div>

					<div class="slide photka" id="photka2">
					</div>

					<div class="slide photka" id="photka3">
					</div>
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