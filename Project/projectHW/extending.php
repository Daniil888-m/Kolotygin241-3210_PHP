<?php
class Lesson
{
	protected $title;
	protected $text;
	private $homework;

	public function __construct(string $title, string $text, string $homework)

	{

		$this->title = $title;
		$this->text = $text;
		$this->homework = $homework;
	}



	public function getHomework(): string
	{
		return $this->homework;
	}



	public function setHomework(string $homework): void
	{
		$this->homework = $homework;
	}
}

class PaidLesson extends Lesson
{

	protected $price;

	public function __construct(string $title, string $text, string $homework, int $price)
	{
		parent::__construct($title, $text, $homework);
		$this->price = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}
}

$funnyLesson = new PaidLesson('Урок о наследовании в PHP', 'Лол, кек, чебурек', 'Ложитесь спать, утро вечера мудренее', 99.90);

var_dump($funnyLesson);
