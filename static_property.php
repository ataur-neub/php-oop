<?php 
	class Car{
		static $wheel=4;
		static $hood=44;
		static function moveWheel(){
			 echo "hello one two three<br>";
		}
	}

	$carInstance=new Car();
	echo Car::$wheel ."<br>";

	Car::moveWheel();
?>