<?php

namespace src\Models\Articles;

use src\Models\Users;

class Article
{
	private $title;
	private $text;
	private $author;

	public function __construct(string $title, string $text,  $author)
	{
		$this->title = $title;
		$this->text = $text;
		$this->author = $author;
	}

	public function setTitle(string $title)
	{
		$this->title = $title;
	}
	public function setText(string $text)
	{
		$this->text = $text;
	}
	public function setAuthor($author)
	{
		$this->author = $author;
	}

	public function getTitle(): string
	{
		return $this->title;
	}
	public function getText(): string
	{
		return $this->text;
	}
	public function getAuthor()
	{
		return $this->author;
	}
}
