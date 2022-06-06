<?php
	class Equation{
		private $a;
		private $b;
		private $c;
		private $discriminant;
		private $x1;
		private $x2;
		public function __construct($a,$b,$c)
		{
			$this->a=$a;
			$this->b=$b;
			$this->c=$c;
		}
		
		public function result()
		{
			$this->x1=$x1;
			$this->x2=$x2;
			$this->discriminant=$discriminant;
			$this->discriminant = $this->b*$this->b-4*$this->a*$this->c;
			$this->x1 = (-$this->b+sqrt($this->discriminant))/(2*$this->a);
			$this->x2 = (-$this->b-sqrt($this->discriminant))/(2*$this->a);
			echo "<h2>D:$this->discriminant</h2>
				  <h2>X1:$this->x1</h2>
				  <h2>X2:$this->x2</h2>";
		}
	}
$test = new Equation(3,-14,-5);
$test->result();
?>