<html>
 <head>
 <link href="../../css/phpMM.css" rel="stylesheet" type="text/css" />
 </head>
 <body>
 <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
 <div id="example">Пример 2.1</div>
 <div id="content">
 <p>Это запись той информации, которую вы отправили:</p>
 
 <?php
	$first_name=trim($_REQUEST['first_name']);
	$last_name=trim($_REQUEST['last_name']);
	$email=trim($_REQUEST['email']);
	$facebook_handle=trim($_REQUEST['facebook_url']);
	$facebook_url = "https://www.facebook.com/";
	$twitter_handle=trim($_REQUEST['twitter_handle']);
	$twitter_url = "https://www.twitter.com/";

	if (strpos($facebook_handle,"facebook.com")===false) {
	    $facebook_handle = $facebook_url.$facebook_handle;
	}
	
	if (strpos($twitter_handle,"@")===false) {
	    $twitter_handle = $twitter_url.$twitter_handle;
	}
	else {
	    //$twitter_handle = $twitter_url.substr($twitter_handle,1);
	    $twitter_handle = $twitter_url.str_replace("@","",$twitter_handle);
	}

	
 ?>
 Имя: <?php echo $first_name; ?><br />
 Фамилия: <?php echo $last_name; ?><br />
 Адрес электронной почты: <?php echo $email; ?><br />
 URL-адрес Facebook: <a href="<?php echo $facebook_handle; ?>"><?php echo $facebook_handle; ?></a><br />
 Идентификатор в Twitter: <a href="<?php echo $twitter_handle; ?>"><?php echo $twitter_handle; ?></a><br />
 </p>
 
 <p><h2>Массивы</h2>
 <?php
$file_cabinet['first_name1'] = "Derek";
$file_cabinet['last_name1'] = "Trucks";
$file_cabinet['email1'] = "derek@DerekTrucks.com";
$file_cabinet['facebook_url1'] = "http://www.facebook.com/DerekTrucks";
$file_cabinet['twitter_handle1'] = "@derekandsusan";

$first_name1 = $file_cabinet['first_name1'];
$last_name1 = $file_cabinet['last_name1'];
$email1 = $file_cabinet['email1'];
$facebook_url1 = $file_cabinet['facebook_url1'];
$twitter_handle1 = $file_cabinet['twitter_handle1'];

echo $first_name1 . " " . $last_name1."</br>";
echo "\nАдрес электронной почты: " . $email1."</br>";
echo "\nURL-адрес в Facebook: " . $facebook_url1."</br>";
echo "\nИдентификатор в Twitter: " . $twitter_handle1."</br>";
?>
</p>

<p><h2>Содержание $_REQUEST</h2>
<?php
$i=0;
foreach($_REQUEST as $value) {
echo "<p> _REQUEST[".$i."] = ".$value."</p>";
$i++;
}
?>
</p>

<p><h2>Содержание $_REQUEST в ключах</h2>
<?php
foreach($_REQUEST as $key => $value) {
echo "<p>Для " . $key . ", имеется значение '" . $value . "'.</p>";
}
?>
</p>

 </div>
 <div id="footer"></div>
</body>
</html>