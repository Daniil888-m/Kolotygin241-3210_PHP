<?php

namespace src\Models\Users;

use src\Models\Articles;

class User
{
	private $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function setName(string $name)
	{
		$this->name = $name;
	}
	public function getName(): string
	{
		return $this->name;
	}
}
