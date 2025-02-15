<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>3 лаба: HTTP</title>
	<link rel="stylesheet" href="../style.css">
</head>

<body>
	<header>
		<div class="container">
			<div class="container">
				<img src="../top_sh.png" alt="Image">
				<h1>3 лаба: HTTP</h1>
			</div>


		</div>
	</header>

	<main>
		<div class="container">
			<section>
				<form id="user-form" action="https://httpbin.org/post" method="post">
					<label for="username">Имя пользователя:</label>
					<input type="text" id="username" name="username" required>

					<label for="email">E-mail пользователя:</label>
					<input type="email" id="email" name="email" required>

					<label for="type">Тип обращения:</label>
					<select id="type" name="type" required>
						<option value="complaint">Жалоба</option>
						<option value="suggestion">Предложение</option>
						<option value="thanks">Благодарность</option>
					</select>

					<label for="message">Текст обращения:</label>
					<textarea id="message" name="message" rows="5" required></textarea>

					<label>
						<input type="checkbox" name="response" value="sms"> СМС
					</label>
					<label>
						<input type="checkbox" name="response" value="email"> E-mail
					</label>

					<button type="submit">Отправить</button>
				</form>
				<a href="requests.php">Ссылка на 2 страницу</a>
			</section>

		</div>
	</main>

	<footer>
		<div class="container">
			<p>Задание для самостоятельной работы выполнил Колотыгин Даниил 241-3210</p>
			<p><a href="https://github.com/Daniil888-m/Kolotygin241-3210_PHP">Ссылка на GitHub</a></p>
		</div>
	</footer>
</body>

</html>