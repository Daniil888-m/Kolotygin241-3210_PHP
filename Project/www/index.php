<?php

function myAutoload($className)
{
	require_once dirname(__DIR__) . '/' .  $className . '.php';
}

require_once dirname(__DIR__) . '\src\Models\Users\User.php';
require_once dirname(__DIR__) . '\src\Models\Articles\Article.php';
require_once dirname(__DIR__) . '\src\Controller\MainController.php';
//  spl_autoload_register('myAutoload');


$controller = new src\Controllers\MainController();
$user = new  src\Models\Users\User('Ivan');
$article = new  src\Models\Articles\Article('title', 'text', $user);

var_dump($user);
