<!DOCTYPE html>
<html lang="ru">
<head>
    
	<?php require($DOCUMENT_ROOT."includes/head.php");?>
	
	<link rel="stylesheet" type="text/css" href="css/styleOther.css">
	
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

<body class="blog">
	
	<div id="fullpage">	
		<div class="section" id="section0">

			<?php require($DOCUMENT_ROOT."includes/nav.php");?>

			<main class="navdots blog_stay">
				<div class="slide">
					<input type="text" name="search" id="search" placeholder="Search by #tags">
					<ul class="tags">
						<li>#something </li>
						<li>#someffffdsfsd </li>
						<li>#thing </li>
						<li>#some </li>
						<li>#something </li>
						<li>#thing </li>
						<li>#thing </li>
						<li>#somedsfdsfdss</li>
					</ul>
					<h1>Stay in touch.</h1>
					<h2>Coming home</h2>
				</div>
				<div class="slide">
					<input type="text" name="search" id="search" placeholder="Search by #tags">
					<ul class="tags">
						<li>#something </li>
						<li>#someffffdsfsd </li>
						<li>#thing </li>
						<li>#some </li>
						<li>#something </li>
						<li>#thing </li>
						<li>#thing </li>
						<li>#somedsfdsfdss</li>
					</ul>
					<h1>Stay in touch.</h1>
					<h2>Coming home</h2>
				</div>
				<div class="slide">
					<input type="text" name="search" id="search" placeholder="Search by #tags">
					<ul class="tags">
						<li>#something </li>
						<li>#someffffdsfsd </li>
						<li>#thing </li>
						<li>#some </li>
						<li>#something </li>
						<li>#thing </li>
						<li>#thing </li>
						<li>#somedsfdsfdss</li>
					</ul>
					<h1>Stay in touch.</h1>
					<h2>Coming home</h2>
				</div>
			</main>
			
			<footer>
				<p class="feels">How Russia feels after a long journey</p>
			    <a href="#blog">
				<span>Read feed!</span>
				<img class="arrow" src="img/Arrow.svg" alt="">
				</a>
			</footer>
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
				</div>
			</main>
			<footer>
			    <a href="#blog">
				<span>Next project</span>
				<img class="arrow" src="img/Arrow.svg" alt="">
				</a>
			</footer>
		</div>
	</div>
</body>
</html>