<!--[if IE]>
	<script type="text/javascript">
		 var console = { log: function() {} };
	</script>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="script/jquery.fullPage.js"></script>
<script type="text/javascript" src="script/general.js"></script> <!--генеральный скрипт-->
<script type="text/javascript" src="script/colors.js"></script> <!--определение цветов-->
<script type="text/javascript"> //запрещает прокрутку по горизонтали
	var scrollEventHandler = function()
	{
	  window.scroll(0, window.pageYOffset)
	}
	window.addEventListener("scroll", scrollEventHandler, false);
</script>
<script type="text/javascript" src="script/tabs.js"></script> <!--текстовый слайдер в pointer-->