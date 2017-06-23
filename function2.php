<?php

	$bar = "outside";

	function foo(){
		global $bar;
		$bar = "inside";

	}

	foo();
	echo $bar ."<br/>";

	$bar2 = "outside";

	function foo2($var){
		$var = "inside";
		return $var;
	}

	$bar2 = foo2($bar2);
	echo $bar2 . "<br/>";


	function paint($color="silver",$room="office"){
		echo "The color of the {$room} is {$color}";
	}
	#paint("bedroom","blue");
	paint("blue");

?>