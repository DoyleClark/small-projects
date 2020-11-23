<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$var=4;
		//switch statements compare values, not types
		switch($var){
			case 1:
				echo "pressed 1";
				break;
			case 2:
				echo "pressed 2";
				break;
			case 3:
				echo "pressed 3";
				break;
			case 4:
				echo "pressed 4";
				break;
			default:
				echo "invalid input";
		}
	?>
</body>
</html>