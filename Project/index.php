<?php 

	class Cat {
		private $name;
		public $color;
		public $weight;

		function __construct(string $name, string $color, int $age) {
			$this->name = $name;
			$this->age = $age;
			$this->color = $color;
		}

		function setName(string $name) {
			$this->name = $name; 
		}

		function getName() {
			return $this->name;
		}
	}

	$cat1 = new Cat('murka','green', 4);
	var_dump($cat1);