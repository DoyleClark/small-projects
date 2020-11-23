<?php
	if(ISSET($_GET['name'])){
		if($_GET['name']!=""){
			$name=$_GET['name'];
			echo 'hello'.$name;
		}else{
			echo 'enter name';
		}
	}
?>