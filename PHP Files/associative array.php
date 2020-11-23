<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		//indexed array
		$myArray=array("James","Doyle","Alexandra","Lexie");
		print_r($myArray);
		echo '<br>';
		echo $myArray[1].' and '.$myArray[3].'<br>';

		//associative array
		$myArray1 = array('Name'=>'Lexie','Age'=>22,'Phone'=>3028248648);
		print_r($myArray1);
		echo $myArray1['Name'];
	?>
</body>
</html>