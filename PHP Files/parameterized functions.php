<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		//block of code that specifies operations to be done when necessary
		function myFunction($name, $age){
			//echo "Name is $name, and age is $age<br>";
			echo 'Name is '.$name.' and age is '.$age.'<br>';
		}

		myFunction('James', 26);
		myFunction('Doyle', 26);
		myFunction('Alexandra', 22);
		myFunction('Lexie', 48);
	?>
</body>
</html>