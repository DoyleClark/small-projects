<?php 
	$name = $_GET['name'];
	$name1 = $name.'%';
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "ajax";
	$con = mysqli_connect($host,$user,$password,$db)
	mysqli_connect('localhost','root','');
	mysqli_select_db('ajax');

	$query = "select * from customers where name like '$name1'";
	$query_run = mysqli_query($con, $query);

	if(mysqli_num_rows($query_run)>0)
	{
		while($row=mysqli_fetch_assoc($query_run))
		{
			echo 'name:'.$row['name'].' email:'.$row['email'].'<br>';
		}
	}
 ?>