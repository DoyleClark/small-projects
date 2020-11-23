<?php
	include 'db.inc.php';

	$id=NULL;
	$name='Doyle';
	$cell=01234;

	$query="insert into emp values('$id','$name','$cell')";
	if(mysql_query($query)){
		echo 'success, '.$name.'information inserted';
	}
?>