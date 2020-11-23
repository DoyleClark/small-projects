<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php
 	$string = "James"; //string
 	$number = 14; //integer
 	$float = -8.4648; //float
 	echo $float;
 	$bool = true; //boolean
 	$myArray = array("James", "Doyle", "Alexandra"); //array
 	print_r ($myArray); //printing array
 	echo "<br>";
 	//var_dump dumps out information of a variable (type and value)
 	var_dump($number);
 	echo "<br>";
 	var_dump($float);
 	echo "<br>";
 	var_dump($myArray);
 	//object
 	$p = null; //null
 	echo "<br>";
 	var_dump($p);

 	function myFunction(){
 		echo "myFunction";
 	}
 	$x = myFunction(); //resource
 ?>
</body>
</html>