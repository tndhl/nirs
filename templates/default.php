<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>НИРС</title>

	<link rel="stylesheet" type="text/css" href="/public/assets/stylesheets/normalize.css">
	<link rel="stylesheet/less" href="/public/assets/stylesheets/template.less?<?php echo time(); ?>">

	<script src="/public/assets/javascripts/less.js"></script>

	<script src="/public/assets/javascripts/jquery.min.js"></script>
	<script async src="/public/assets/javascripts/code.js?<?php echo time(); ?>"></script>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="brand pull-left">
				<a href="/" title="НИРС">НИРС</a>
			</div>

			<ul class="nav pull-right">
				<li><a href="/" title="Главная">Главная</a></li>
				<li><a href="/contacts" title="Контакты">Контакты</a></li>
				<li><a href="/agreement" title="Об использовании материалов">Об использовании материалов</a></li>
			</ul>
		</div>
	</div>

	<div class="slider">
		<div class="container">
			<ul id="slides">
                <li data-image="slide1.jpg" class="active"></li>
                <li data-image="slide2.jpg"></li>
                <li data-image="slide3.jpg"></li>
                <li data-image="slide4.jpg"></li>
                <li data-image="slide5.jpg"></li>
            </ul>
		</div>
        <script src="/public/assets/javascripts/slideshow.js"></script>
	</div>

	<div class="container" role="main">
		<div class="row">
			<div class="content-wrapper sidebar col-3">
				<div class="title">Навигация</div>
				<ul>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">Как это будет работать?</a></li>
					<li><a href="#">Примеры применения</a></li>
					<li><a href="#">Технологии сепарации</a>
						<ul>
							<li><a href="#">Естесственная</a></li>
							<li><a href="#">Принудительная</a></li>
							<li><a href="#">Низкотемпературная</a></li>
						</ul>
					</li>
					<li><a href="#">Технологии утилизации</a>
						<ul>
							<li><a href="#">Транспортные</a></li>
							<li><a href="#">Энергетические</a></li>
							<li><a href="#">Химические</a></li>
							<li><a href="#">Сберегающие</a></li>
						</ul>
					</li>
					<li><a href="#">Моделирование</a></li>
					<li><a href="#">Характеристики скважин</a>
						<ul>
							<li><a href="#">Компонентный состав</a></li>
							<li><a href="#">Свойства пластовой нефти</a></li>
							<li><a href="#">Разгазирование</a></li>
						</ul>
					</li>
					<li><a href="#">Карты месторождений</a>
						<ul>
							<li><a href="/maps/google">Google Maps</a></li>
							<li><a href="#">Яндекс-Карты</a></li>
						</ul>
					</li>
					<li><a href="#">Патенты</a></li>
					<li><a href="#">Партнерская программа</a></li>
				</ul>
			</div>

			<div class="content-wrapper main col-9 margin-left">
				{component}
			</div>
		</div>
	</div>

	<div class="container">
		<div class="footer">
			&copy; ЦНГТ 2013
		</div>
	</div>
</body>
</html>