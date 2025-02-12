<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>2 Лаба: Текущее время</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<div class="container">
			<div class="container">
				<img src="top_sh.png" alt="Image">
				<h1>2 лаба: Текущее время</h1>
			</div>


		</div>
	</header>

	<main>
		<div class="container">
			<section>
				<h2>Текущее время и дата:</h2>
				<p><?php
					date_default_timezone_set('Europe/Moscow');
					echo date("d F Y  H:i")
					?></p>
			</section>

		</div>
	</main>

	<footer>
		<div class="container">
			<p>Задание для самостоятельной работы</p>
			<p><a href="https://github.com/Daniil888-m/Kolotygin241-3210_PHP">Ссылка на GitHub</a></p>
		</div>
	</footer>
</body>

</html>