<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab3

	</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			max-width: 600px;
			margin: 20px auto;
			padding: 20px;
		}

		form {
			background: #f9f9f9;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}

		.form-group {
			margin-bottom: 15px;
		}

		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}

		input[type="text"],
		input[type="email"],
		input[type="password"],
		select,
		textarea {
			width: 100%;
			padding: 8px;
			border: 1px solid #ddd;
			border-radius: 4px;
			box-sizing: border-box;
		}

		.radio-group,
		.checkbox-group {
			margin: 10px 0;
		}

		.radio-group label,
		.checkbox-group label {
			font-weight: normal;
			display: inline;
			margin-left: 5px;
		}

		button {
			background: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		button:hover {
			background: #45a049;
		}
	</style>
</head>

<body>
	<form action="index.php" method="POST">
		<div class="form-group">
			<label for="name">Full Name:</label>
			<input type="text" id="name" name="name" required>
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
		</div>


		<div class="form-group">
			<label>Gender:</label>
			<div class="radio-group">
				<input type="radio" id="male" name="gender" value="male">
				<label for="male">Male</label>
				<input type="radio" id="female" name="gender" value="female">
				<label for="female">Female</label>
				<input type="radio" id="other" name="gender" value="other">
				<label for="other">Other</label>
			</div>
		</div>

		<div class="form-group">
			<label>Interests:</label>
			<div class="checkbox-group">
				<input type="checkbox" id="sports" name="interests[]" value="sports">
				<label for="sports">Sports</label>
				<input type="checkbox" id="music" name="interests[]" value="music">
				<label for="music">Music</label>
				<input type="checkbox" id="reading" name="interests[]" value="reading">
				<label for="reading">Reading</label>
			</div>
		</div>

		<div class="form-group">
			<label for="message">Message:</label>
			<textarea id="message" name="message" rows="4"></textarea>
		</div>

		<div class="form-group">
			<button type="submit">Submit</button>
		</div>
	</form>

	<main>
		<a href="index.php?num1=1&num2=56">Click me</a>
		// GET. Отправьте с помощью GET-запроса число. Выведите его на экран.
		<?php echo var_dump($_GET);
		if (isset($_GET['num'])) {
			echo '<br>';
			echo $_GET['num'];
			echo '</br>';
		}

		// GET. Пусть с помощью GET-запроса отправляется число. Оно может быть или 1, или 2. Сделайте так, чтобы если передано 1 - на экран вывелось слово 'привет', а если 2 - то слово 'пока'.

		echo var_dump($_GET);
		if (isset($_GET['num'])) {
			echo '<br>';

			echo $_GET['num'] === '1' ? 'Привет' : 'Пока';
			echo '</br>';
		}

		// GET. Отправьте с помощью GET-запроса два числа. Выведите его на экран сумму этих чисел.

		echo var_dump($_GET);
		if (isset($_GET['num1']) && isset($_GET['num2'])) {
			echo '<br>';
			echo $_GET['num1'] + $_GET['num2'];
			echo '</br>';
		}
		?>
	</main>
</body>

</html>