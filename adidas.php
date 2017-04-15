<?php 
session_start();?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require('connect.php');?>
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
<!-- content -->
<div class="container">
<div class="women_main">
<div class="col-md-3 span_1_of_right1">
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
<div class="col-md-9 w_content">
		<div class="women">
			
			<ul class="w_nav">
                            <li><h4>Sort :</h4> </li>
                                                <h5>
                                         |<li><a href="?sort=Name"> Name</a></li> |               
		     			<li><a href="?sort=HightoLow">Price:High to Low</a></li> |
                                        <li><a href="?sort=LowtoHigh">Price: Low High </a></h5></li> 
		     			<div class="clear"></div>	
		     </ul>
		     <div class="clearfix"></div>	
		</div>
		<!-- grids_of_4 ->
		
		<div class="grids_of_4">
		  <div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="images/5.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			<//?php $data=mysqli_query($con,"select * from product_detail_table where product_company='Nike'");
		 /* for($i=0;$i<9;$i++)
		  {$val=mysqli_fetch_array($data);
		  echo '
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html?code='.$val['product_code'].'">
			   	  <div class="view view-fifth">
			   	   	 <img style="height:204px;width:247px;" src="images/'.$val['product_code'].'(1).jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html?code='.$val['product_code'].'"> '.$val['product_name'].'</a></h4>
				     
				     <span>'.$val['product_selling'].'</span>
			   	</div>
			</div>
			
			';//<div class="clearfix"></div>
		echo'</div>';}*/?>

<?php /*$data=mysqli_query($con,"select * from product_detail_table where product_company='Nike'");
		 // for($i=0;$i<9;$i++)
		  {$val=mysqli_fetch_array($data);
		  echo '
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html?code='.$val['product_code'].'">
			   	  <div class="view view-fifth">
			   	   	 <img style="height:204px;width:247px;" src="images/'.$val['product_code'].'(1).jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html?code='.$val['product_code'].'"> '.$val['product_name'].'</a></h4>
				     
				     <span>'.$val['product_selling'].'</span>
			   	</div>
			</div>
			
			';//<div class="clearfix"></div>
		echo'</div>';}*/?>

			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="images/7.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			
		
		  <div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="images/8.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="images/9.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				      <span>$99.99</span>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="images/10.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			
		
		  <div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="images/11.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="images/12.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="images/13.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			
			<div class="clearfix"></div>
		</div>
		<!-- end grids_of_4 -->
	<table border=2>	
		<?php 
		 if (@strcmp($_GET['sort'] ,'HightoLow')==0) {
                    $data = mysqli_query($con, "select * from product_detail_table where product_company='Adidas' order by product_selling desc ");
                } elseif (@strcmp($_GET['sort'] , 'LowtoHigh')==0) {
                    $data = mysqli_query($con, "select * from product_detail_table where product_company='Adidas' order by product_selling asc ");
                } elseif (@strcmp($_GET['sort'], 'Name')==0) {
                    $data = mysqli_query($con, "select * from product_detail_table where product_company='Adidas' order by product_name ");
                } else {
                    $data = \mysqli_query($con, "select * from product_detail_table where product_company='Adidas'");
                }
		$count=0;
		$flag=false;
		while($val=mysqli_fetch_array($data))
		{$count++;
		
		if($flag)
		{
		echo '<tr>';
		$flag=false;
		}if ($count == 0) {
                         echo '<tr>';
                 }
                echo '
		<td style="padding:2em .8em 0em 2em;">
		<a href="details.php?code='.$val['product_code'].'"><img style="height:220px;width:280px;" src="images/'.$val['product_code'].'(1).jpg"/>
			<br/><br/><h4><b> '.$val['product_name'].'<br/> '.$val['product_selling'].'
			</a></b></h4></td>
			';
		if($count%3==0)
		{	$flag=true;
			echo '</tr>';
		}
			
			
		}
		
	echo '</table>';?>
	</div>
				<div class="clearfix"></div>	
	</div>	
	
</div>		
<!-- content -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<p>Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
		</div>
	</div>
<!-- footer -->
</body>
</html>