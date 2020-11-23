<?php
	include 'db.inc.php';

	$id=1;
	$name='Lexie';
	$cell=0987;

	$query="UPDATE emp set name='$name', cell='$cell' where empid='$id'";
	if(mysql_query($query)){
		echo 'updated';
	}
?>