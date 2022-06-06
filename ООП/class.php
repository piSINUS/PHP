<?php
	class Car{
			public $model;
			public $color;
			public $hp;
			public $year;
			
			public function __construct($model,$color,$hp,$year)
			{
				$this->model=$model;
				$this->color=$color;
				$this->hp=$hp;
				$this->year=$year;
			}
			public function show()
			{
				echo "<h2>$this->model</h2>
					  <h2>$this->color</h2>
					  <h2>$this->hp</h2>
					  <h2>$this->year</h2>";
			}
	}
$car = new Car(bmw,red,120,2005);
$car->show();

?>