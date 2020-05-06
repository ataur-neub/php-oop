<?php

	class Car{
		var $light=6;
		var $window =4;
		var $gear=1;
		var $wheels=4;

		function moveWheels(){
			$this->wheels=10;
		}

	}

	$carObject=new Car();

	class Plane extends Car{

	}

$planeObject=new Plane();
echo $planeObject->gear;


?>