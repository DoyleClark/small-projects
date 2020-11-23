<?php
	$name=$_POST['name'];

	if($_POST['name']!=""){
		echo 'Shalom'.$name;
	}else{
		echo 'Enter name';
	}
?>