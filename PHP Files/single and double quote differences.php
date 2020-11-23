<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$var1 = "My name is James";
		$var2 = "I enjoy programming";
		echo $var1.'. '.$var2;

		$friend1 = "Alexandra";
		$friends2 = "Lexie";
		echo "<br>";
		//double quotes has higher processing time, and single quotes less
		//double quotes processes the variables
		echo "My friends are $friend1 and $friends2";
		echo "<br>";
		echo 'My friends are '.$friend1.' and '.$friends2;
		echo "<br>";
		//single quote only prints the line
		echo 'My friends are $friend1 and $friends2';
	?>
</body>
</html>