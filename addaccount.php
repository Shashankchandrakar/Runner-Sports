<?php
require_once('connect.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$gender=$_POST['radio'];
$pass=$_POST['password'];
$pass_base=base64_encode($pass);

$data=mysqli_query($con,"select * from customer_info where email='$email'");
$val=mysqli_fetch_array($data);
if(!empty($val[0]))
{
	

     echo '<script language="javascript">';
    echo 'alert(" Email ID already exists ")';
    echo '</script>';
   
    echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';

}
else
{
	mysqli_query($con,"insert into customer_info values('$fname','$lname','$email','$pass_base','$gender','False')");
	
     echo '<script language="javascript">';
    echo 'alert("Account Succesfully Added ")';
    echo '</script>';
   
    echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';

}
?>