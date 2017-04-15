<?php 
	require("connect.php");
	$flag=mysqli_query($con,"delete from product_detail_table where product_code=$_POST[code]");
	if(isset($flag))
	{
	echo "<script>alert('Product Has Been Deleted')
		</script> ";
		echo '<script> window.location = "admin.php";
		</script> ';
		
	}
	//header("Location:admin.php");
	?>