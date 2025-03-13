<?php

spl_autoload_register(function (string $className) {
	$className = str_replace('\\', '/', $className);

	$file = __DIR__ . '/../' . $className . '.php';

	if (file_exists($file)) {
		require_once $file;
	} else {
		throw new Exception("Файл для класса {$className} не найден: {$file}");
	}
});
$route = $_GET['route'] ?? '';

$pattern = "~^hello/(.*)$~";
preg_match($pattern, $route, $matches);

var_dump($matches);
echo '<br>';

$controller = new src\Controllers\MainController;

if (!empty($matches)) {
	$controller->sayHello($matches[1]);
} else $controller->main();
var_dump($_GET['route']);
$user = new src\Models\Users\User('Ivan');
$article = new src\Models\Articles\Article('title', 'text', $user);


    // var_dump($user);
    // var_dump($article);