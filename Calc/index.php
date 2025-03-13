<?php
session_start();

if (!isset($_SESSION['history'])) {
	$_SESSION['history'] = array();
}

function isnum($x)
{
	if (!$x) return false;
	if ($x[0] == '.' || $x[0] == '0') return false;
	if ($x[strlen($x) - 1] == '.') return false;
	for ($i = 0, $point_count = false; $i < strlen($x); $i++) {
		if (
			$x[$i] != '0' && $x[$i] != '1' && $x[$i] != '2' && $x[$i] != '3' &&
			$x[$i] != '4' && $x[$i] != '5' && $x[$i] != '6' && $x[$i] != '7' &&
			$x[$i] != '8' && $x[$i] != '9' && $x[$i] != '.'
		) return false;
		if ($x[$i] == '.') {
			if ($point_count) return false;
			else $point_count = true;
		}
	}
	return true;
}

function calculate($val)
{
	if (!$val) return 'Выражение не задано!';
	if (isnum($val)) return $val;

	// Удаляем все пробелы в выражении
	$val = str_replace(' ', '', $val);

	// Обрабатываем умножение и деление
	while (preg_match('/(\d+\.?\d*)([\*\/])(\d+\.?\d*)/', $val, $matches)) {
		$a = $matches[1];
		$op = $matches[2];
		$b = $matches[3];
		if ($op == '*') $result = $a * $b;
		if ($op == '/') $result = $a / $b;
		$val = str_replace($matches[0], $result, $val);
	}

	// Обрабатываем сложение и вычитание
	while (preg_match('/(\d+\.?\d*)([\+\-])(\d+\.?\d*)/', $val, $matches)) {
		$a = $matches[1];
		$op = $matches[2];
		$b = $matches[3];
		if ($op == '+') $result = $a + $b;
		if ($op == '-') $result = $a - $b;
		$val = str_replace($matches[0], $result, $val);
	}

	return $val;
}

function calculateSq($val)
{
	if (!SqValidator($val)) return 'Неправильная расстановка скобок';

	// Обрабатываем скобки
	while (preg_match('/\(([^()]+)\)/', $val, $matches)) {
		$innerVal = $matches[1];
		$result = calculate($innerVal);
		$val = str_replace($matches[0], $result, $val);
	}

	// Вычисляем оставшееся выражение
	return calculate($val);
}

function SqValidator($val)
{
	$open = 0;
	for ($i = 0; $i < strlen($val); $i++) {
		if ($val[$i] == '(') $open++;
		else if ($val[$i] == ')') {
			$open--;
			if ($open < 0) return false;
		}
	}
	return $open == 0;
}

if (isset($_POST['val'])) {
	$res = calculateSq($_POST['val']);
	$_SESSION['history'][] = $_POST['val'] . ' = ' . $res;
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Калькулятор</title>

	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			padding-top: 400px;
			height: 100vh;
			margin: 0;
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
		}

		.calculator {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		#display {
			width: 100%;
			height: 50px;
			margin-bottom: 10px;
			text-align: right;
			padding: 10px;
			font-size: 24px;
			border: 1px solid #ccc;
			border-radius: 5px;
			background-color: #f9f9f9;
		}

		.buttons {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			gap: 10px;
		}

		button {
			padding: 20px;
			font-size: 18px;
			border: none;
			border-radius: 5px;
			background-color: #e0e0e0;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		button[type="submit"] {
			width: 100%;
		}

		button:hover {
			background-color: #d0d0d0;
		}

		button:active {
			background-color: #c0c0c0;
		}
	</style>
</head>

<body>
	<form method="post">
		<input type="text" id="display" name="val" placeholder="Введите выражение">
		<div class="buttons">
			<button type="button" onclick="appendToDisplay('7')">7</button>
			<button type="button" onclick="appendToDisplay('8')">8</button>
			<button type="button" onclick="appendToDisplay('9')">9</button>
			<button type="button" onclick="appendToDisplay('+')">+</button>
			<button type="button" onclick="appendToDisplay('4')">4</button>
			<button type="button" onclick="appendToDisplay('5')">5</button>
			<button type="button" onclick="appendToDisplay('6')">6</button>
			<button type="button" onclick="appendToDisplay('-')">-</button>
			<button type="button" onclick="appendToDisplay('1')">1</button>
			<button type="button" onclick="appendToDisplay('2')">2</button>
			<button type="button" onclick="appendToDisplay('3')">3</button>
			<button type="button" onclick="appendToDisplay('*')">*</button>
			<button type="button" onclick="appendToDisplay('0')">0</button>
			<button type="button" onclick="clearDisplay()">C</button>
			<button type="button" onclick="appendToDisplay('(')">(</button>
			<button type="button" onclick="appendToDisplay(')')">)</button>

			<button type="button" onclick="appendToDisplay('/')">/</button>
			<button type="submit">Вычислить</button>
		</div>
	</form>

	<h3>История вычислений:</h3>
	<div>
		<?php
		foreach ($_SESSION['history'] as $entry) {
			echo $entry . '<br>';
		}
		?>
	</div>
	<script src="script.js"></script>
</body>

</html>