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
	
	<?php require("connect.php");
		if(@isset($_POST['submit']))
		{	unset($_POST['submit']);
			$data=mysqli_query($con,"select * from product_detail where product_code=$_GET[code] and product_property='$_POST[feature]' and product_info='$_POST[spec]'");
			$val=mysqli_fetch_array($data);
			if(isset($_POST['feature']))
			{	
				if(empty($val[0]))
				{
					mysqli_query($con,"insert into product_detail values($_GET[code],'$_POST[feature]','$_POST[spec]')");
					echo'<script>alert("Data Has Been Added Successfully")</script>';
					
					
				}
				else
				{
					echo'<script>alert("Duplicate Data Exists")</script>';
				}
				unset($_POST['feature']);
			}
		}
		
		echo "<div style='Padding: 1em 0em 0em 2em;'> <form method=POST>";
			echo "<table >";
			echo"<tr  ><th colspan=2 ><h3>Enter Product Specification</h3></th></tr>";
			echo"<tr ><th style='Padding: .5em;'>Product Code</th><td style='Padding: .5em;'><input type='text' name='code' value=".@$_GET[code]."  required /></td></tr>";
			echo"<tr ><th style='Padding: .5em;'>Product Feature</th><td style='Padding: .5em;'><input type='text' name='feature' autofocus required /></td></tr>";
			
			echo "<tr><th style='Padding: .5em;'>Product Information</th><td style='Padding: .5em;'> <input type='text' name='spec' autofocus required /></td></tr>";
			echo "<tr><td style='Padding: .5em;'><input type='submit' name='submit' value='Add More'/></td></tr>";
			
		echo "</table>";
		
		echo"</form>";
		echo "<form action='addintable.php?code=$_GET[code]' method=POST>";
		echo "<input type='submit' value='Next'/>";
		echo "</form>";
	?>
	</div>
	</body>
</html>