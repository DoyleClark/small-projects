<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		//indexed array
		$myArray=array('James','Doyle','Alexandra','Lexie');
		print_r($myArray);
		echo '<br>';
		echo $myArray[1].' and '.$myArray[3].'<br>';

		//associative array
		$myArray1 = array('Name'=>'Lexie','Age'=>22,'Phone'=>3028248648);
		print_r($myArray1);
		echo $myArray1['Name'];

		//multidimensional array
		$myArray2 = array(
						'Name'=>'Lexie',
						'Age'=>22,
						'Phone'=>
						array(
							'Landline'=>3028248648,
							'Mobile'=>array(3028426484,3028421288)
							)
						);
		echo '<br><br>';
		echo $myArray2['Phone']['Mobile'][0];
		echo '<br><br>';
		echo '<pre>',print_r($myArray2),'</pre>';
	?>
</body>
</html>