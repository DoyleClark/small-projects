<?php
	if(ISSET($_POST['name'])){
		if($_POST['name']!=""){
			$name=$_POST['name'];
			echo 'hello <b>'.$name.'<b>';
		}else{
			echo 'enter name';
			}
		}
	}
?>