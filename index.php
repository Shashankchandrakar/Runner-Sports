<!--
Inspire by:Ramsey Leoderf
Author Name:Shashank & Nitin 
License: Creative Commons Attribution 3.0 Unported

-->
<!DOCTYPE HTML>
<?php 
session_start();
require("connect.php");
if(@$_SESSION['welcome'])
	login();

function login()
{
     echo '<script language="javascript">';
    echo "alert('Welcome $_SESSION[fname]')";
    echo '</script>';
   
    echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
	  $_SESSION['welcome']=false;
}
function logout()
{
     echo '<script language="javascript">';
    echo "alert('Logout Successfull')";
    echo '</script>';
   
    echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
	
}
if(@$_SESSION['logout'])
{logout();
unset($_SESSION['logout']);
}
 ?>



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
	<div class="banner">
		<div class="container">
		<div class="col-md-6">
		</div>
		<div  >
			<h1>Nike Mercurial</h1>
			<p style="color: yellow;" >NIKE'S FASTEST SOCCER CLEAT
                            To help you stay fast on the field, Mercurial cleats are designed with a system of
                            speed, combining minimal construction, lightweight materials and a strategically
                            engineered traction pattern.</p>
			<a class="show-more" href="details.php?code=114">SHOW ME MORE</a>
		</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- header -->
	<div class="instock">
		<div class="container">
			<div class="col-md-6 chuk">
				
					<div class="blanc-info" >
						<h3 style="Color:Black;">MERCURY X 16</h3>
                                                <h4 style="Color:Black;">X 16+ PURECHAOS SEIZES THE SPOTLIGHT.<br/><br/></h4>
						<a class="show" href="#">SHOW ME MORE</a>
					</div>
			</div>
			<div class="col-md-6 blanc">
				
					<div class="blanc-info">
						<h3>2016 USA NATIONAL TEAM KIT</h3>
						<h4>CUSTOMIZE
                                                    WITH NATIONAL PRIDE <br/><br/>  </h4>
						<a class="show" href="#">SHOW ME MORE</a>
					</div>
			</div>
			<div class="clearfix"> </div>
		</div>	
	</div>
<!-- instock -->
<div class="featured">
<div class="container">
<div class="col-md-9">
<div class="biseller-info">
<?php @$data=mysqli_query($con,"select * from product_detail_table");
IF ($data==FALSE)
{   echo"</p>";
    echo mysql_error()."</p>";
}    

echo '
    <h3 class="new-models">featured products</h3>
			<ul id="flexiselDemo3">
    				'; 
                                    for($i=0;$i<3;$i++) 
                                    {   //while
                                           ($val= mysqli_fetch_array($data));
                                        echo'
                                    <li>
					<div class="biseller-column">
					<a href="details.php?code='.$val['product_code'].'">'
                                                . '<img id="my" src="images/'.$val['product_code'].'(1)' .'.jpg" class="img-responsive" alt="" class="veiw-img">
                                        <i class="new"></i>
					<div class="biseller-name">
						<h4>'.$val['product_name'].' </h4>
                                                <p>'.$val['product_selling'].'</p>
                                        </a>
					</div>
											
					</div>
                                    </li>';
                                       }
                                   ?>
                                  
                                                        
	     	</ul>
			
		</div>	

			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 3,
						animationSpeed: 1000,
						autoPlay: false,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			
				<div class="best-seller">
				
					<div class="biseller-info">
					 <h3 class="new-models">latest products</h3>
					<ul id="flexiselDemo1">
						<?php  for($i=0;$i<7;$i++) 
                                    {   //while
                                           ($val= mysqli_fetch_array($data));
                                        echo'
                                    <li>
					<div class="biseller-column">
					<a href="details.php?code='.$val['product_code'].'">'
                                                . '<img id="my" src="images/'.$val['product_code'].'(1)' .'.jpg" class="img-responsive" alt="" class="veiw-img">
                                        <i class="new"></i>
					<div class="biseller-name">
						<h4>'.$val['product_name'].' </h4>
                                                <p>'.$val['product_selling'].'</p>
                                        </a>
					</div>
											
					</div>
                                    </li>';
                                       }?>
						
						
			     	</ul>
					</div>
		
			</div>
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo1").flexisel({
						visibleItems: 3,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo5").flexisel({
						visibleItems: 3,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <div class="best-seller">
				
					<div class="biseller-info">
					
					<ul id="flexiselDemo5">
						<?php  for($i=0;$i<7;$i++) 
                                    {   //while
                                           ($val= mysqli_fetch_array($data));
                                        echo'
                                    <li>
					<div class="biseller-column">
					<a href="details.php?code='.$val['product_code'].'">'
                                                . '<img id="my" src="images/'.$val['product_code'].'(1)' .'.jpg" class="img-responsive" alt="" class="veiw-img">
                                        <i class="new"></i>
					<div class="biseller-name">
						<h4>'.$val['product_name'].' </h4>
                                                <p>'.$val['product_selling'].'</p>
                                        </a>
					</div>
											
					</div>
                                    </li>';
                                       }?>
												
			     	</ul>
					</div>
		
			</div>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>

			<div class="clearfix"></div>
			</div>
			<div class="col-md-3 span_1_of_right">
			 <section  class="sky-form">
				   <div class="product_right">
     			<h3 class="m_2">Categories</h3>
                        <a href="football.php"><h4 style="padding:.3em;"> Football Shoes</h4></a>
                        <a href="running.php"><h4 style="padding:.3em;"> Running Shoes</h4></a>
                        <a href="casual.php"><h4 style="padding:.3em;"> Casual Shoes</h4></a>
			
                                    </div>
						
				</section>
                   	 
						<div class="sellers">
							<h3 class="m_2">Best sellers</h3>
									<?php
									@$data=mysqli_query($con,"select * from product_detail_table where product_code>120");
									for($i=0;$i<3;$i++)
									{
									//$data=mysql_query('select * form products_details_table ');
									
									$val=mysqli_fetch_array($data);
									echo '
									<div class="best">
									<div class="icon">
									<img id="my1" src="images/'.$val['product_code'].'(1).jpg" class="img-responsive" alt=""/>
									</div>
									<div class="data">
										<h4><a href="details.php?code='.$val['product_code'].'">'.$val['product_name'].'</a></h4>
										<p>'.$val['product_actual'].'</p>
										<h5>'.$val['product_selling'].'</h5>
									</div>
									<div class="clearfix"></div>
								</div>	';
								}
								?>	
						 
						</div>
						 
					 
						
				
		       <section  class="sky-form">
					<div class="sellers">
							<h3 class="m_2">Top Shoes</h3>
							<section class="slider">
						<div class="flexslider">
							<ul class="slides">
							<?php $data=  mysqli_query($con, "select * from product_detail_table order by product_selling desc");
                                                            
                                                        for($i=0;$i<4;$i++){ 
                                                           
                                                            $val=  mysqli_fetch_array($data);
                                                        echo ' <li>
									<div class="tittle">
										<img  style="height:200px; width:200px;" src="images/'.$val['product_code'].'(1).jpg" class="img-responsive" alt=""/>
										<h6>'.$val['product_name'].'</h6>
										<p>';
                                                                           echo \substr($val['product_details'],0,180)."....";
                                                                        echo'</p>
										<a class="show1" href="details.php?code='.$val['product_code'].'">SHOW ME MORE</a>
									</div>
                                                        </li>';}?>
								
							</ul>
						</div>
					</section>
                                                        

                                                        </head>
						<!-- FlexSlider -->
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!-- FlexSlider -->

						</div>
		       </section>
		       

	  </div>
				<div class="clearfix"></div>	
	</div>		
</div>		
<!-- footer -->
	<div class="footer">
		<div class="container">
			<p style="color:purple">Made By :- Shashank & Nitin</p>
		</div>
	</div>
<!-- footer -->
</body>
</html>
