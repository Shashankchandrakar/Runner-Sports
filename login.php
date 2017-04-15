<?php
session_start();
require("connect.php");
function goback()
{
     echo '<script language="javascript">';
    echo 'alert("Invalid Email ID and Password ")';
    echo '</script>';
   
    echo '<script type="text/javascript">
           window.location = "registration.php"
      </script>';
}

@$mail=$_POST['email'];
$data=mysqli_query($con,"select * from customer_info where Email='$mail'");
$val=  mysqli_fetch_array($data);
if(empty($val[0]))
{   //echo mysqli_error();
   goback();
}


    
	//echo "<h1>".print_r($val)."</h1>";
    $pass_encode=$val['Password'];
    $pass=  (base64_decode($pass_encode));
	//echo $pass;
    if(@strcmp($_POST['password'],$pass)!=0)
    {  
      goback();
    }
    else if(@strcmp($_POST['password'],$pass)==0)
	{
		$_SESSION['login']=TRUE;
        $_SESSION['fname']=$val['FirstName'];
        $_SESSION['lname']=$val['LastName'];
        $_SESSION['email']=$val['Email'];
        $_SESSION['pass']=$val['Password'];
        //login($val[0]);
		$_SESSION['welcome']=TRUE;
		
        if($val['Admin']=="True")
		{$_SESSION['admin']=TRUE;
		 header("Location:admin.php");
		}
       else
        header("Location:index.php");
		
    }
	else
	{
		header("Location:index.php");
	}
		

?>