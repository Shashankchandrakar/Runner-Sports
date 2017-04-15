<?php 
	$mysql_username="root";
	$mysql_password="";
	$mysql_host="localhost";
	$mysql_database="shoes_db";
	
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"shoes_db");
	
		echo mysqli_error($con);


?>