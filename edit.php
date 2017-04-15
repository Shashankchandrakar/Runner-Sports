<?php 
session_start();
   if(!(@$_SESSION['admin']==TRUE))
	{	echo "<h2>Page Not Found</h2>";
		die();
	}?>
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
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/jquery.easydropdown.js"></script>
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
<style>
th{
	Padding:1em;
}
</style>
</head>
<body >
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
					require_once("connect.php");
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
			<li><a class="color1" href="viewall.php">View All Products</a></li>
			<li class="grid"><a class="color2" href="addproduct.php">Add Product</a>
				
				</li>
			<li><a class="color4" href="delete.php">Delete Product</a>
				
				</li>				
				<li><a class="color5" href="edit.php">Edit Product</a>
				
				</li>
				
				<div class="clearfix"> </div>
		 </ul> 
			</div>
		</div>	
	</div>
	<div style="padding:3em;">
	<u><h3>Edit Product</h3></u> <br/><br/><form action="edittoproduct.php" method="GET"> 
	<?php 
	$data=mysqli_query($con,"Select * from product_detail_table");
	echo "<h4>Choose Product Code : </h4> <select name='code'  required autofocus onchange='ajax()' id='a' size=1>";
	echo '<option value="" disabled="disabled" selected="selected">Please Select Product Code</option>';
	while($val=mysqli_fetch_array($data))
	{
		echo "<option value='$val[product_code]'>$val[product_code]</option>";
	}
	echo "</select>
	
	
	<script>function ajax() {
		var b=document.getElementById('a').value;
		
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('demo').innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open('GET','display.php?code='+b,true);
        xmlhttp.send();
    
}</script>
<br/>
<br/>
<p id='demo'></p>";?><br/><button>Edit </button></form></div>