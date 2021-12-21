<?php
	$servername='database';
	$username='root';
	$password='tiger';
	$dbname = 'Testing';
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	  if(!$conn){
		  die('Could not Connect MySql Server:' .mysql_error());
		}
?>