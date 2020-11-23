<?php
	include 'db.inc.php';

	$id=2;
	$name='James';
	$email='James@gmail.com';
	$newEmail='new@gmail.com';

	$query="Update employee SET email='$newEmail' where id='$id'";
	$query_run=mysqli_query($con1, $query);

	if($query_run){
		echo 'values updated';
	}

	mysqli_close($con1);
?>