<?php
	class LearningConstruct{
		var $intial=5;

		function __construct(){
			echo $this->intial;
		}
	}


	$constructObj=new LearningConstruct();
	$constructObj=new LearningConstruct();

?>