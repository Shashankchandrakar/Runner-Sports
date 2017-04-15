<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php 
session_start();?>
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
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.easydropdown.js"></script>
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>


</head>
<body>
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
			<li><a class="color4" href="nike.php">Adidas</a>

				</li>
				<li><a class="color5" href="nike.php">Puma</a>

				</li>

				<div class="clearfix"> </div>
		 </ul> 			</div>
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
<!-- content -->
<div class="container">
<div class="main">
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2>new user? <span> create a runnerssport account </span></h2>
		<a href="#"><div class="reg_fb"><img src="images/facebook.png" alt=""><i>register using Facebook</i><div class="clearfix"></div></div></a>
		<!-- [if IE]
		    < link rel='stylesheet' type='text/css' href='ie.css'/>
		 [endif] -->

		<!-- [if lt IE 7]>
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>
		<! [endif] -->
		<script>
			(function() {

			// Create input element for testing
			var inputs = document.createElement('input');

			// Create the supports object
			var supports = {};

			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;

			// Fallback for autofocus attribute
			if(!supports.autofocus) {

			}

			// Fallback for required attribute
			if(!supports.required) {

			}

			// Fallback for placeholder attribute
			if(!supports.placeholder) {

			}

			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}

		})();
		</script>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form"  action="addaccount.php"  method="POST"  >
				<div>
					<label>
						<input placeholder="first name:" id="t" name="fname" type="text" tabindex="1" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="last name:" type="text" id="t1" name="lname" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="email address:" type="email" name="email" tabindex="3" required>
					</label>
				</div>
				<div class="sky-form">
					<div class="sky_form1">
						<ul>
							<li><label class="radio left"><input type="radio" name="radio" value="Male" checked=""><i></i>Male</label></li>
							<li><label class="radio"><input type="radio" name="radio" value="Female" ><i></i>Female</label></li>
							<div class="clearfix"></div>
						</ul>
					</div>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password"  id="pass1" name="password" tabindex="4" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="retype password" type="password" onchange="checkpass()" id="pass2" name="password_again" tabindex="4" required>
					</label>
				</div>
				<div>
					<div class="sky-form">
						<label class="checkbox"><input type="checkbox" id="box" name="checkbox" onchange="unblock()" ><i></i>i agree to shoppe.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
					</div>

					<input type="submit"  value="create an account" style="background:#00405d;" id="register-submit"  disabled>


				</div>
				</form>
			<p id="demo"></p>
			<script >
			function unblock(){
				if(document.getElementById("box").checked)
					document.getElementById("register-submit").disabled=false;
					//document.getElementById("register-submit").style.backgroundColor=#ed1c24;
			}
			function checkpass()
			{
				if((document.getElementById("pass2").value)!=(document.getElementById("pass1").value)){
				window.alert("Both Password Must Be Same");
				document.getElementById("pass2").style.backgroundColor = "red";
				document.getElementById("register-submit").disabled=true;
				return false;
			}
			else {
				document.getElementById("pass2").style.backgroundColor = "white";
				document.getElementById("register-submit").disabled=false;
				return true;
			}
				}
</script>
			<!-- /Form -->
		</div>
	</div>
	<div class="registration_left">
		<h2>existing user</h2>
		<a href="#"><div class="reg_fb"><img src="images/facebook.png" alt=""><i>sign in using Facebook</i><div class="clear"></div></div></a>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action="login.php" method="POST">
				<div>
					<label>
						<input placeholder="email:" type="email" name="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password" name="password" tabindex="4" required>
					</label>
				</div>
				<div>
					<input type="submit" value="sign in" id="register-submit">
				</div>
				<div class="forget">
					<a href="#">forgot your password</a>
				</div>
			</form>
			<!-- /Form -->
			</div>
	</div>
	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
</div>
</div>
<!-- footer -->
	<div class="footer">
		<div class="container">
			<p>Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
		</div>
	</div>
<!-- footer -->
</body>
</html>
