<!DOCTYPE html>
<html lang="ru">
<head>
    
	<?php require($DOCUMENT_ROOT."includes/head.php");?>
	
	<link rel="stylesheet" type="text/css" href="css/styleIndex.css">
	
	<?php require($DOCUMENT_ROOT."includes/scripts.php");?>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
			//Навигация
			menu: '#menu',
			lockAnchors: false,
			anchors:['main', 'blog', 'design', 'shop'],
			navigation: false,
			navigationPosition: 'bottom',
			navigationTooltips: ['firstSlide', 'secondSlide'],
			showActiveTooltip: false,
			slidesNavigation: false,
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
			controlArrows: true,
			verticalCentered: false,
			sectionsColor : [],
			paddingTop: 0,
			paddingBottom: 0,
			fixedElements: '.navi',
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

<body class="index">
	
	<div id="fullpage">	
		<div class="section" id="section0">
			
			<?php require($DOCUMENT_ROOT."includes/nav.php");?>
		
			<div class="logo">
			    <div class="logoImg"></div> 
			    <h2 class="logoName">беретпоправь</h2>
			</div>

			<footer>
			    <a href="#blog">
				<span>Что это значит?</span>
				<img class="arrow" src="img/Arrow.svg" alt="">
				</a>
			</footer>
		</div>

		<div class="section" id="section1">
				
			<header>
				<p>For me it's a creed.</p>
			</header>

			<main>
				<div class="article">
				    <div class="article_text">
    					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    				</div>
					<figure class="blog">
					    <figcaption>
							<h2>Title name</h2>
							<span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti provident qui inventore laborum eum, debitis quisquam nisi esse accusamus optio minima perferendis quo modi itaque praesentium repellat sit dolorum, fuga.
							</span>
							<a href="blog.php" class="go">
								<p>
									Go to blog
								</p>
								<?php include($DOCUMENT_ROOT."includes/finLine.php");?>
							</a>
						</figcaption>
					</figure>
				</div>	
			</main>

			<footer>
			    <a href="#design">
				<span>Could I commit it?</span>
				<img class="arrow" src="img/Arrow.svg" alt="">
				</a>
			</footer>
			
		</div>

		<div class="section" id="section2">
				
			<header>
				<p>For me it's a creed.</p>
			</header>

			<main>
				<div class="article">
				    <div class="article_text">
    					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    				</div>
					<figure class="design">
						<figcaption>
							<h2>Title name</h2>
							<span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti provident qui inventore laborum eum, debitis quisquam nisi esse accusamus optio minima perferendis quo modi itaque praesentium repellat sit dolorum, fuga.
							</span>
							<a href="design.php" class="go">
								<p>
									Go to design
								</p>
								<?php include($DOCUMENT_ROOT."includes/finLine.php");?>
							</a>
						</figcaption>
					</figure>
				</div>	
			</main>

			<footer>
			    <a href="#shop">
				<span>How it was?</span>
				<img class="arrow" src="img/Arrow.svg" alt="">
				</a>
			</footer>
		</div>

		<div class="section" id="section3">

			<header>
				<p>For me it's a creed.</p>
			</header>

			<main>
				<div class="article">
				    <div class="article_text">
    					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    				</div>
					<figure class="projects">
						<figcaption>
							<h2>Title name</h2>
							<span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti provident qui inventore laborum eum, debitis quisquam nisi esse accusamus optio minima perferendis quo modi itaque praesentium repellat sit dolorum, fuga.
							</span>
							<a href="projects.php" class="go">
								<p>
									Go to projects
								</p>
								<?php include($DOCUMENT_ROOT."includes/finLine.php");?>
							</a>
						</figcaption>
					</figure>
				</div>	
			</main>
			<footer>

			</footer>
		</div>	
	</div>		
</body>
</html>