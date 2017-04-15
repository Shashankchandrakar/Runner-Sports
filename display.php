<?php 
	require("connect.php");
	$data=mysqli_query($con,"select * from product_detail_table where product_code=$_GET[code]");
	echo"<h3>Product Info</h3>  <table border=1>";
	$val=mysqli_fetch_array($data);
	{
		echo "<tr><th>Product Code</th><td>$val[0]</td></tr>";
		echo "<tr><th>Name</th><td>$val[1]</td></tr>";
		echo "<tr><th>Category</th><td>$val[2]</td></tr>";
		echo "<tr><th>Company</th><td>$val[3]</td></tr>";
		echo "<tr><th>Details</th><td>$val[4]</td></tr>";
		echo "<tr><th>Buying Price</th><td>$val[5]</td></tr>";
		echo "<tr><th>Selling Price</th><td>$val[6]</td></tr>";
		echo "<tr><th>MRP</th><td>$val[7]</td></tr>";
	}echo "</table>";
?>