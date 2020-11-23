<?php
	$hostname='localhost';
	$username='root';
	$password='';
	$dbname='emp';

	//$con=mysqli_connect($hostname, $username, $password);
	$con1=mysqli_connect($hostname, $username, $password, $dbname);
	if($con1){
		echo 'connection successful';
	/*if($con){
		//echo 'connection successful';
		$db=mysqli_select_db($con, $dbname);
		if($db){
			echo 'success';
		}else{
			echo 'unsuccessful';
		}*/
	}else{
		echo 'connection unsuccessful';
	}
?>