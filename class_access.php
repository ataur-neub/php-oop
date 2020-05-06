<?php
	class Car{
		public $wheel=4;
		protected $gear=11;
		private $light=5;

		public function showAll(){
			// echo $this->wheel ."<br>";

			echo $this->gear ."<br>";

			echo $this->light;

		}
	}

	class Truck extends Car{

		function subClass(){
			// echo $this->light;
		}
	}

// $carObj=new Car();
// $carObj->showAll();

// echo $carObj->gear;
	$truckObj=new Truck();
	// $truckObj->subClass();
	$truckObj->showAll();




?>