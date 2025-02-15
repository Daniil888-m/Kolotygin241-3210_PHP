<?php

// 1 Задание
$a = 27;
$b = 12;
echo number_format(sqrt(pow($a, 2) + pow($b, 2)), 2, '.', '');

// 2 Задание

$a = 27; // первый острый угол
$b = 90 - $a; // второй острый угол


$a = 27;
$opposite = 23;


$angleRadians = deg2rad($a);

$hypotenuse = $opposite / sin($angleRadians);


$adjacent = $opposite / tan($angleRadians);

echo "Гипотенуза: " . $hypotenuse . "<br>";
echo "Прилежащий катет: " . $adjacent . "<br>";

// 3 Задание


$a = 2;
$b = 2.0;
$c = '2';
$d = 'two';
$g = true;
$f = false;

$result1 = $a . $b;
$result2 = $c . $d;
$result3 = $a . $c;
$result4 = $b . $d;
$result5 = $g . $f;
$result6 = $a . $g;
$result7 = $b . $f;
$result8 = $c . $g;
$result9 = $d . $a;
$result10 = $d . $b;

echo "Результат 1: " . $result1 . "<br>";
echo "Результат 2: " . $result2 . "<br>";
echo "Результат 3: " . $result3 . "<br>";
echo "Результат 4: " . $result4 . "<br>";
echo "Результат 5: " . $result5 . "<br>";
echo "Результат 6: " . $result6 . "<br>";
echo "Результат 7: " . $result7 . "<br>";
echo "Результат 8: " . $result8 . "<br>";
echo "Результат 9: " . $result9 . "<br>";
echo "Результат 10: " . $result10 . "<br>";
