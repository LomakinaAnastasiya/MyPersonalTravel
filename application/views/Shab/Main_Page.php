<html>
	<head>		
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/Styles.css">

	<meta charset="UTF-8">

  <script type="text/javascript" src="/js/jjj.js"></script>
  <script type="text/javascript" src="/js/JQ.js"></script>

<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">

</head>



<body>

<div id="wrap"> 

<div class="MainBlock">

<div class="TopBlock">
	<a class="MainRef" href="/">MyPersonalTravel
	<img src="/photo/logo.png" height="40px">
	</a>
	<div style="position: absolute;left: 500px;top: 20px;" id="google_translate_element"></div>

	<?php
if (isset($_SESSION['Login'])) {      
  echo '<p style="margin-left: 20px;">Добро пожаловать, '.$_SESSION['Names'].'</p>';
}
else{
echo '<p style="margin-left: 20px;">Добро пожаловать, Гость</p>';
}
?>

	<div class="Identif_Block">
		<p><img src="/photo/in.png" height="24px;">Вход</p>
		<ul class="Identif">

	<?php
if (isset($_SESSION['Login'])) {      
	echo '<li><a href="/Info/logout">Выход</a></li>';
}
else{
	echo '<li><a href="/Page/avt">Авторизация</a></li>';
	echo '<li><a href="/Page/reg">Регистрация</a></li>';
}
?>
		</ul>
	</div>
</div>


<ul class="MainMenu">

<?php
if (isset($_SESSION['Login'])) {  
	if ($_SESSION['Login']=="Admin") {       
		echo '<li><a style="color: black; font-weight: bold; cursor:pointer;">Зона администратора</a>';
		echo '<ul>';
			echo '<li><a href="/Admin/ls">Личные данные</a></li>';
			echo '<li><a href="/Admin/Spis">Список пользователей</a></li>';
			echo '<li><a href="/Admin/Add_News">Добавить новость</a></li>';
			echo '<li><a href="/Admin/Add_Tyr">Добавить тур</a></li>';	
			echo '<li><a href="/Admin/News">Список новостей</a></li>';	
			echo '<li><a href="/Admin/Tyr">Список туров</a></li>';	
			echo '<li><a href="/Admin/Buy">Заявки пользователей</a></li>';	
		echo '</ul>';
		echo '</li>';
	}	

	if ($_SESSION['Types']=="1") {       
		echo '<li><a style="color: black; font-weight: bold; cursor:pointer;">Зона редактора</a>';
		echo '<ul>';
			echo '<li><a href="/Redaktor/ls">Личные данные</a></li>';
			echo '<li><a href="/Redaktor/Add_News">Добавить новость</a></li>';
			echo '<li><a href="/Redaktor/Add_Tyr">Добавить тур</a></li>';	
			echo '<li><a href="/Redaktor/News">Список новостей</a></li>';	
			echo '<li><a href="/Redaktor/Tyr">Список туров</a></li>';	
		echo '</ul>';
		echo '</li>';
	}	

	if ($_SESSION['Types']=="2") { 
		echo '<li><a style="color: black; font-weight: bold; cursor:pointer;">Зона пользователя</a>';
		echo '<ul>';
			echo '<li><a href="/User/ls">Личные данные</a></li>';
			echo '<li><a href="/User/Buy">Мои заявки</a></li>';

		echo '</ul>';
		echo '</li>';
	}
	
}

?>

	<li><a href="/">Главная</a></li>
	<li><a href="/News">Новости и акции</a></li>
	<li><a href="/Page/Country">Страны</a></li>
	<li><a href="/Tour">Туры</a></li>
	<li><a href="/Page/About">О нас</a>
		<ul>
			<li><a href="/Page/About">О компании</a></li>
			<li><a href="/Page/Parthner">Партнеры</a></li>
			<li><a href="/Page/Straxov">Страхование</a></li>
		</ul>
	</li>
	<li><a href="/Page/Kont">Контакты</a></li>
</ul>
<br>

<?php
  include 'application/views/'.$content_view;
?>

</div>

</div>

<footer>
	<p style="float: right; padding-top: 8px;">Курсовой проект, 2019</p>
	<ul class="footer_Menu">
		<li><a href="/Page/Sxema">Схема проезда</a></li>
		<li><a href="/Page/Map">Карта сайта</a></li>
		<li><a href="/Page/Kont">Контакты</a></li>
	</ul>
	
</footer>


<script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'ru'
  }, 'google_translate_element');
}
</script>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>  

</body>
</html>




