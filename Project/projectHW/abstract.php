<?php

abstract class HumanAbstract
{
	private $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function getName(): string
	{
		return $this->name;
	}

	abstract public function getGreetings(): string;
	abstract public function getMyNameIs(): string;

	public function introduceYourself(): string
	{
		return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
	}
}

class EnglishHuman extends HumanAbstract
{

	public function getGreetings(): string
	{
		return "Hello";
	}
	public function getMyNameIs(): string
	{
		return "My name is";
	}
}

class RussianHuman extends HumanAbstract
{

	public function getGreetings(): string
	{
		return "Приветик";
	}
	public function getMyNameIs(): string
	{
		return "Меня зовут";
	}
}

$Daniil = new RussianHuman('Даня');
$Max = new EnglishHuman('Maxim');

echo '<br>';
echo $Daniil->introduceYourself();
echo '</br>';
echo $Max->introduceYourself();
