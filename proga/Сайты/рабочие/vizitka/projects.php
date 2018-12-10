<!DOCTYPE html>
<html lang="en">
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

<body class="projects">
	
	<div id="fullpage">	
		<div class="section" id="section0">
			
			<?php require($DOCUMENT_ROOT."includes/nav.php");?>

			<main class="navdots fullheight">
				<div class="slide proj_slide" id="slide0">
					<h1>Prefer perfection</h1>
					<a href="blog.php" class="go">
						<p>Go to blog</p>
						<?php include($DOCUMENT_ROOT."includes/finLine.php");?>
					</a>
				</div>

				<div class="slide proj_slide" id="slide1">	
				</div>

				<div class="slide proj_slide" id="slide2">
				</div>

				<div class="slide proj_slide" id="slide3">
				</div>

				<div class="slide proj_slide" id="slide4">
				</div>
			</main>
		</div>
		

		<div class="section pointer" id="section1">

			<div class="vspliv">
				<header>
					<p>Pointer</p>
				</header>
				<main class="pointer">
					<div class="pointer_desc">
						<h2>Website</h2>

						<!--vspliv tabs-->
						<ul class="tabs">
							<li><a class="active" href="#" tabIndex="tab4">Desktop</a></li>
							<li><a href="#" tabIndex="tab5">Mobile</a></li>
							<li><a href="#" tabIndex="tab6">Safari</a></li>
						</ul>
						<div class="desc active" id="tab4">
							<p>1st tab</p>
						
						</div>
						<div class="desc" id="tab5">
							<p>2nd tab</p>
						</div>
						<div class="desc" id="tab6">
							<p>3rd tab</p>
						</div>
					</div>
					<div class="some_content"></div>
				</main>	
				<i class="fas fa-times closeButtonVspliv"></i>								
			</div>

			<header>
				<p>Pointer</p>
			</header>
			<main class="pointer">
				<div class="pointer_desc">
					<h2>Prefer perfection</h2>

					<!--normal tabs-->
					<ul class="tabs">
						<li><a class="active" href="#" tabIndex="tab1">About</a></li>
						<li><a href="#" tabIndex="tab2">Specifications</a></li>
						<li><a href="#" tabIndex="tab3">Timeline</a></li>
					</ul>
					<div class="desc active" id="tab1">
						<p>1st tab</p>
					
					</div>
					<div class="desc" id="tab2">
						<p>2nd tab</p>
					</div>
					<div class="desc" id="tab3">
						<p>3rd tab</p>
					</div>
					<ul class="submenufoot">
						<li><a href="#">View website</a></li>
						<li><a href="#" class="openVspliv">Open vspliv</a></li>
						<li><a href="store.php">Go to store</a></li>
					</ul>
				</div>

				<div class="grid_cont">
					<div class="grid">
						<div class="cell"></div>
						<div class="cell"></div>
						<div class="cell"></div>
						<div class="cell"></div>
						<div class="cell"></div>
						<div class="cell"></div>
						<div class="cell"></div>
						<div class="cell"></div>
						<div class="cell"></div>
					</div>
				</div>
			</main>
			
			<footer>
			    <a href="#sectio2">
				<span>Next project</span>
				<img class="arrow" src="img/Arrow.svg" alt="">
				</a>
			</footer>
		</div>
	</div>
</body>
</html>