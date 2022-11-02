<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/photo.png">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i>Алиса</i>. Я совсем недавно начала прогроммировать, однако уже написала свой личный сайт.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>На этом сайте вы можите сыграть в несколько игр, которые я написала:
			<a href="puzzle.php">Загадки</a>,
			<a href="guess.php">Угадайка</a>
			<a href="guess_2.php">Угадайка на двоих</a>
			<br>А так же вы можите сгенерировать пароль:
			<a href="passw-generator.php">Генератор паролей</a> 
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Alisa Litvinova	
</div>


</body>
</html>