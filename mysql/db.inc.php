<?php
$host='localhost';
$user='root';
$password='';

$db='company';
if(@mysql_connect($host,$user,$password)){
	//echo 'connected';
	if(@mysql_select_db($db)){
		//echo 'db selected';
	}
}else{
	echo 'error... not connected';
}
?>