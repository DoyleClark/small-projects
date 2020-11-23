<?php
	include 'db.inc.php';

	$id=2;
	$name='Alexandra';
	$cell=01234;

	//$query="select * from emp";//returns all rows and columns. full table values
	$query="select name, cell from emp where empid='$id'";
	$query_run=mysql_query($query);

	if(mysql_num_rows($query_run)>0){
		while($row=mysql_fetch_assoc($query_run)){
			echo $row['name'].' cell number is '.$row['cell'].'<br>';
		}
	}
?>