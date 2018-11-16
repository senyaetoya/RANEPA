<nav>
	<ul class="navi">
		<li><a href="index.php">я</a></li>
		<li><a href="projects.php">проекты</a></li>
		<li><a href="design.php">дизайн</a></li>
		<li><a href="store.php">магазин</a></li>
		<li><a href="blog.php">блог</a></li>
		<li class="contacts"><a>контакты</a></li>
	</ul>

	<!-- contacts -->
	<div class="contacts_window">
		<form action="#" method="post" class="feedback">

			<fieldset id="general">
				<label for="name">Ваши контакты:</label>
				<div class="container">
				<input type="text" name="name" id="name" placeholder="Имя" required>
				<input type="email" name="email" id="email" placeholder="Email" required>
				<input type="tel" name="phone" id="phone" placeholder="Телефон" required>
				<input type="text" name="company" id="company" placeholder="Компания" required>
				</div>
			</fieldset>
			
			<fieldset id="theme_box">
				<span class="label_theme">Выберите тему:</span>
				<ul id="theme">
					<li value="order">Заказ</li>
					<li value="partner">Сотрудничество</li>
					<li value="job">Работа</li>
					<li value="support">Другое</li>
				</ul>
			</fieldset>

			<fieldset id="letter_box">
				<label for="letter">Ваше письмо:</label>
				<div class="wrapper">
					<textarea name="letter" id="letter" required></textarea>
				</div>
			</fieldset>
			
			
			<fieldset id="direct_box">
				<span>Прямые контакты:</span>
					<ul>
						<li>beret.poprav@gmail.ru</li>
						<li>zaitsev_senya@mail.ru</li>
						<li>teddy.marinka@gmail.com</li>
					</ul>
					<input type="submit" id="form_submit" value="Отправить">	
			</fieldset>
		</form>
		<i class="fas fa-times closeButtonContacts"></i>
	</div>
		
	<!-- languages menu -->				
	<ul class="languages">
		<li class="menu"><a href="#">выбрать язык</a></li>
		<li class="lang"><a href="#">русский</a></li>
		<li class="lang"><a href="#">english</a></li>
		<li class="lang"><a href="#">español</a></li>
	</ul>
</nav>