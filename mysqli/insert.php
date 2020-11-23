<?php
include 'db.inc.php';

	$id=null;
	$name='James';
	$email='James@gmail.com';

	$query="insert into employee values ('$id','$name','$email')";
	$query_run=mysqli_query($con1, $query);

	if($query_run){
		echo 'values inserted';
	}

	mysqli_close($con1);
?>