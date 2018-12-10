<html>
 <head>
 <link href="../../../css/phpMM.css" rel="stylesheet" type="text/css" />
 </head>
 <body>
 <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
 <div id="example">Пример 2.1</div>
 <div id="content">
 <p>Это запись той информации, которую вы отправили:</p>
 <p>
 Имя: <?php echo $_REQUEST['first_name']; ?><br />
 Фамилия: <?php echo $_REQUEST['last_name']; ?><br />
 Адрес электронной почты: <?php echo $_REQUEST['email']; ?><br />
 URL-адрес Facebook: <?php echo $_REQUEST['facebook_url']; ?><br />
 Идентификатор в Twitter: <?php echo $_REQUEST['twitter_handle']; ?><br />
 </p>
 </div>
 <div id="footer"></div>
</body>
</html>