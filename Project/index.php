<?php

// class Cat
// {
// 	private $name;
// 	public $color;
// 	public $weight;

// 	function __construct(string $name, string $color, int $weight)
// 	{
// 		$this->name = $name;
// 		$this->weight = $weight;
// 		$this->color = $color;
// 	}

// 	function setName(string $name)
// 	{
// 		$this->name = $name;
// 	}

// 	function getName()
// 	{
// 		return $this->name;
// 	}
// }

// $cat1 = new Cat('murka', 'green', 4);
// var_dump($cat1);

/* class Lesson
{
	protected $title;
	protected $text;

	function __construct(string $title, string $text)
	{
		$this->title = $title;
		$this->text = $text;
	}

	public function getText()
	{
		return $this->text;
	}
}

$lesson = new Lesson('lesson 1', 'Lorem, ipsum.');

class Homework extends Lesson
{
	protected $task;
	function __construct(string $title, string $text, $task)
	{
		parent::__construct($title, $text);
		$this->task = $task;
	}
}


class LabWork extends Homework
{
	protected $count;
	function __construct(string $title, $text, $task, $count)
	{
		parent::__construct($title, $text, $task);
		$this->count = $count;
	}
}

$labWork = new LabWork('rt', 'tr', 4, 4);

echo $labWork->getText(); */

/* class Rectangle
{
	private $a;
	private $b;

	public function __construct($a, $b)
	{
		$this->a = $a;
		$this->b = $b;
	}

	public function calculateSquare(): float
	{
		return $this->a * $this->b;
	}
}

class Circle implements calculateSquare
{
	private $r;
	public function __construct($r)
	{
		$this->r = $r;
	}

	public function calculateSquare(): float
	{
		$pi = 3.14;
		return pow($this->r, 2) * $pi;
	}
}


interface calculateSquare
{
	public function calculateSquare(): float;
};

$figures = [
	$rectangle = new Rectangle(4, 5),
	$circle = new Circle(6),
];
foreach ($figures as $figure) {
	echo '<br>';
	echo $figure->calculateSquare();
} */

class A
{
	public function method1()
	{
		return $this->method2();
	}

	protected function method2()
	{
		return 'A';
	}
}

class B extends A
{
	protected function method2()
	{
		return 'B';
	}
}

$b = new B();

echo $b->method1();


abstract class AbstractClass
{
	public abstract function getValue();

	public function printValue()
	{
		echo $this->getValue();
	}
}

class Math
{

	public $num;
	public static $PI = 3.14;

	public static function getPi()
	{
		return self::$PI;
	}

	public function __construct(int $num)
	{
		$this->num = $num;
	}

	public static function createBigNum()
	{
		return new self(10000000000);
	}
}

echo '<br>';
var_dump(Math::getPi());
echo '</br>';
