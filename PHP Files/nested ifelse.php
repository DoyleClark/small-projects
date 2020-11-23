<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$x=5;
		$y="5";

		if($x==$y){
			echo "both have the same values";
			if($x===$y){
				echo "both are identical";
			}else{
				echo "both have the same values, but not of the same type";
			}
		}else{
			//will not execute
		}
	?>
</body>
</html>