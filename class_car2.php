<?php
	
	class Car{

			var $gear=1;
			var $light =4;
			var $windows=41;

		function MoveWheels(){
			 $this->light="hello";
			
		}

		function exraFeatures(){
			$this->gear="high quality gear";
		}
	}

	$carObject=new Car();

	$carObject->MoveWheels();
	echo $carObject->light;
	echo "<br>";

	$windows=$carObject->windows=55;
	echo $windows . "<br>";
    $carObject->exraFeatures();
    echo $carObject->gear;


?>