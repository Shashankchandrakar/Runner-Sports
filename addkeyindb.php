<?php
	require("connect.php");
	session_start();
	   if(!(@$_SESSION['admin']==TRUE))
	{	echo "<h2>Page Not Found</h2>";
		die();
	}
	$_SESSION['key']=$_SESSION['key']."</ul>";
	
	//$data=mysqli_query($con,"select * from product_info where product_code=$_GET[code] and product_info='$_SESSION[key]'");
	//$val=mysqli_fetch_array($data);
	$code=$_GET['code'];
	$info=$_SESSION['key'];
	
	$query="INSERT INTO PRODUCT_INFO VALUES($code,'$info') ";
	
	mysqli_query($con,$query);
	
	echo "<br/>".mysqli_error($con);
	
	$_SESSION['key']=" ";
	if(mysqli_error($con))
	{
		echo "<script>alert('Duplicate Entery Not Allowed')
			window.location = 'admin.php'</script>";
	}
	else
	{
		echo "<script>alert('Data Added Succesfully')
				window.location = 'admin.php'</script>";
	}
	
	?>