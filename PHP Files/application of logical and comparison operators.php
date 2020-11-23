<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$x=5;
		$y=10;
		$z=15;
		$p=5;
		//and - true, if both conditions are true
		//or - true, if one of the conditions is true
		//xor - false, false=>false; true xor false=>true; false xor true=>true; true xor true=>false
		if(($z>$x) || ($z>$y)){
			echo "$z is greatest number";
		}
	?>
</body>
</html>