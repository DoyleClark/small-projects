<?php
	include 'db.inc.php';

	$id=2;
	$name='James';
	$email='James@gmail.com';
	$newEmail='new@gmail.com';

	$query="select * from employee where id='$id";
	$query_run=mysqli_query($con1, $query);

	if(mysqli_num_rows($query_run)>0){
		while($row=mysqli_fetch_assoc($query_run)){
			echo 'id: '.$row['id'].' name: '.$row['name'].' email: '.$row['email'].'<br>';
		}
	}

	mysqli_close($con1);
?>