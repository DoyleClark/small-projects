<?php
	include 'db.inc.php';

	$query='select*from emp';
	if(mysql_query($query)){
		echo 'success';
	}
?>