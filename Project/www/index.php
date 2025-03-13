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

$controller = new src\Controllers\MainController;
if (isset($_GET['name']) && !empty($_GET['name'])) {
	$controller->sayHello($_GET['name']);
} else $controller->main();
// var_dump($_GET['route']);
$user = new src\Models\Users\User('Ivan');
$article = new src\Models\Articles\Article('title', 'text', $user);


    // var_dump($user);
    // var_dump($article);