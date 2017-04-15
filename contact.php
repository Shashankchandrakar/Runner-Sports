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
<script src="js/menu_jquery.js"></script>
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
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
<!-- content -->
<div class="container">
<div class="main">
<div class="contact">				
					<div class="contact_info">
						<h2>get in touch</h2>
			    	 		<div class="map">
					   			<iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#777777;text-align:left;font-size:13px;">View Larger Map</a></small>
					   		</div>
      				</div>
				  <div class="contact-form">
			 	  	 	<h2>Contact Us</h2>
			 	 	    <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Mobile</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>Subject</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="" value="Submit us"></span>
						  </div>
					    </form>
				    </div>
  				<div class="clearfix"></div>		
			  </div>
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