<?php
session_start();
require('connect.php');
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Runners sport  A Ecommerce Category Flat a Bootstarp  Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.easydropdown.js"></script>
<script src="js/menu_jquery.js"></script>
 <!-- etale -->
				<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
		 <!-- etale -->

</head>

<!-- header -->
	<div class="header">
	<div class="top_bg">
<div class="container">
<div class="header_top">
	<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""/></a>
			</div>
	<div class="top_right">
		<ul>
                    <?php 
                    if(@$_SESSION['login'])
                    { 
					//echo '<li>Hi '.$_SESSION['fname'].$_SESSION['lname'];
                   echo '
                             <li class="login" > 
						<div id="loginContainer"><a href="#" id="loginButton"><span>HI '.$_SESSION['fname'].' '.$_SESSION['lname'].'</span></a>
						<div id="loginBox">                
						        <form id="loginForm" >
						                <fieldset id="body">
						                	<fieldset>
						                          <a href="logout.php">Logout</a>
						                         
						                    </fieldset>
						                    <fieldset>
						                            <a href="buy.php">My Cart</a>
						                            
						                    
						          
							 </form>
				        </div>
			      </div>
			</li> ';
                    
                    }
                    else
                    echo'
                    <li><a href="registration.php">Create Account </a></li>|
                    <li><a href="contact.php">Contact</a></li>|
                
                             <li class="login" > 
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm" action="login.php" method="POST">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Email Address</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						            	</fieldset>
						            <span><a href="#">Forgot your password?</a></span>
							 </form>
				        </div>
			      </div>
			</li>'; ?>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
</div>
</div>
	</div>
	<div class="head-bann">
		<div class="container">
			<div class="head-nav">
				<span class="menu"> </span>
					<ul class="megamenu skyblue">
			<li><a class="color1" href="index.php">Home</a></li>
			<li class="grid"><a class="color2" href="nike.php">Nike</a>
				
				</li>
			<li><a class="color4" href="adidas.php">Adidas</a>
				
				</li>				
				<li><a class="color5" href="puma.php">Puma</a>
				
				</li>
				
				<div class="clearfix"> </div>
		 </ul> 
			</div>
		</div>	
	</div>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
		
	<div class="banner1">
		<div class="container">
		</div>
	</div>
<!-- header -->

<?php 
@$email=$_SESSION["email"];
		@$code=$_GET["code"];
		
if(@($_SESSION['login']==TRUE))
{   if(@strcmp($_GET['op'],'remove')==0){
    //@mysqli_query($con,"delete from my_cart where email='$email' and product_code=$code");
	mysqli_query($con,"delete from my_cart where email='$email' and product_code=$code");	    }
    elseif(@strcmp($_GET['op'],'add')==0)
    {   
		
		
		$flag=true;
		
		$res=mysqli_query($con,"select * from my_cart where email='$email' and product_code=$code");
		while($row= mysqli_fetch_array($res))
		{
		$GLOBALS["flag"]=false;
		}
		
       if($flag)
       { 
	   mysqli_query($con,"insert into my_cart values('$email',$code,$_POST[quant])");	    
		}
	}
//$data=mysql_query("select * from my_cart where email='$email'",$con);
		
echo'
<div class="container">
<div class="main">
	<div class="shoping_bag">
		<h4><img src="images/small.jpg">my shopping shoe / <span> 11 item</span></h4>
		<ul class="s_art">
			<li><img src="images/art1.png"></li>
			<li><span> 11 item</span></li>
                        
		</ul>
		<div class="clearfix"></div>
	</div>
';
$tot=0;

$data=mysqli_query($con,"select * from my_cart where email='$email'");
		while($val= mysqli_fetch_array($data))
		{

//while ($val = mysqli_fetch_array($data)) {
    $prod=mysqli_query($con,"select * from product_detail_table where product_code=$val[product_code]");
    $info=  mysqli_fetch_array($prod);
        global $tot;
    $tot=$tot+$info['product_selling'];
               echo'

<div class="shoping_bag1">
		<div class="shoping_left">
			<div class="shoping1_of_1">
				<img src="images/'.$val['product_code'].'(1).jpg"  class="img-responsive" alt="" />
			</div>
			<div class="shoping1_of_2">
				<h4><a href="details.php?code='.$info['product_code'].'">'.$info['product_name'].'</h4>
				<span>size <b>xl</b>&nbsp;&nbsp; qty <b>'.$val['product_quantity'].'</b> | code :'.$val['product_code'].'</span>
				<ul class="s_icons">
					<li><a href=""><img src="images/s_icon1.png" alt=""></a></li>
					<li><a href="#"><img src="images/s_icon2.png" alt=""></a></li>
					<li><a href="?code='.$info['product_code'].'&op=remove"><img src="images/s_icon3.png" alt=""></a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="shoping_right">
			<p>35% off &nbsp;<span> '.$info['product_selling'].'</span></p>
		</div>
		<div class="clearfix"></div>
	</div>
    
    
    
    
        ';}
	echo'<div class="shoping_bag1">
		<div class="shoping_left">
			<h2><a href="#"><img src="images/gift.jpg">gift wrap </a> <span> for rs. 25</span></h2>
		</div>
		<div class="shoping_right">
			<p>sub total &nbsp;<span> Rs. 1,899</span></p>
			<p>vat collected &nbsp;<span> Rs. 91</span></p>
			<p>delivery &nbsp;<a href="#">free</a>&nbsp;<span> Rs. 0</span></p>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="shoping_bag1">
		<div class="shoping_left">
			<h2><a href="#"><img src="images/login.jpg">login </a> <span> to apply coupons</span></h2>
		</div>
		<div class="shoping_right">
			<p>coupon discount &nbsp;<span class="color"> Rs. 0</span></p>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="shoping_bag2">
		<div class="shoping_left">
			<a class="btn1" href="details.html">place order</a>
		</div>
		<div class="shoping_right">
			<p class="tot">total &nbsp;<span class="color"> '.$tot.'</span></p>
		</div>
		<div class="clearfix"></div>
</div>';
}
    else
    {
        echo "<h2><b><div class='container'>Please Login First</div></b></h2>";
    }

?>
</div>
</div>
<!-- footer -->
	<div class="footer">
		<div class="container">
			<p>Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
		</div>
	</div> 
<!-- footer -->

</html>
