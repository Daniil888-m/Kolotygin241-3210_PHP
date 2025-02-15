<?php
$arr = [2, 'r', 6, 8];
for ($i = 0; $i < sizeof($arr); $i++) {
	echo $arr[$i] . ' ';
}

$arr2['a'] = 2;
$arr2['a'] = 'r';
$arr2['a'] = 6;
$arr2['a'] = 8;

// foreach ($arr2 as $key => $value) {
// 	echo "$value ";
// }

$a = array(1, 2);
$b = array(1, 2);

// echo '<br> --------';
// var_dump($a == $b);
// echo '</br>--------';


$c = [
	'a' => 'b',
	2 => 'c',
	'd' => 1
];

$d = [
	'a' => 'f',
	3 => 'c',
	'4' => 1
];
// print_r($c);
// echo '<br>';

// print_r($d);
// echo '</br>';
// print_r($c + $d);

$arr_2 = [
	1 => [1, 2, 3],
	'd' => [5, 6, 'g', 'i',],
	3 => [89, 78]
];

foreach ($arr_2 as $arr) {
	foreach ($arr as $elem) {
		echo "$elem, ";
	}
	echo '<br>';
}

// Функции

function f(int $a, int $b): int
{
	global $c;
	$c = $a + $b;
	return $c;
}

echo '<br>';
echo f(4, 7);
echo '</br>';
