<?php

// 1 Задание
$arr = ['a', 'b', 'c', 'b', 'a'];
function count_values($arr)
{
	$solve = [];

	foreach ($arr as $key => $value) {
		if (array_key_exists($value, $solve)) {
			$solve[$value] += 1;
		} else {
			$solve[$value] = 1;
		}
	}

	foreach ($solve as $key => $value) {
		echo '<br>';

		echo "$key = $value";
	}
}

count_values($arr);

// 2 Задание

$arr = [
	'a' => 1,
	'b' => 2,
	'c' => 3
];

echo '<br>';
print_r(array_flip($arr));
echo '</br>';


// 3 Задание

$arr = [1, 2, 3, 4, 5];

echo '<br>';
print_r(array_reverse($arr));
echo '</br>';

// 4 Задание

$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];

echo '<br>';
print_r(array_combine($arr1, $arr2));
echo '</br>';

// 5 Задание

$arr = [
	'a' => 1,
	'b' => 2,
	'c' => 3
];

$keys = array_keys($arr);
$values = array_values($arr);
