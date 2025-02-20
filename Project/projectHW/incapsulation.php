<?php
class Cat
{
	private $name;
	private $color;

	public function __construct(string $name, string $color)
	{
		$this->name = $name;
		$this->color = $color;
	}

	public function sayHello()
	{
		echo 'Привет! Меня зовут ' . $this->name . ' и мой цвет - ' . $this->color;
	}

	public function setName(string $name)
	{
		$this->name = $name;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getColor()
	{
		return $this->color;
	}
}

$Mikki = new Cat('Mikki', 'черный');
