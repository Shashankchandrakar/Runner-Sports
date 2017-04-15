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
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.easydropdown.js"></script>
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
<!-- details -->
<div class="details">
<div class="container">
<div class="row single">
<div class="col-md-9">
				  <div class="single_left">
				 <?php
				 require ('connect.php');
				$a=$_REQUEST['code'];
		  $data=mysqli_query($con,"select * from product_detail_table where product_code=$a ");
		 if($data==FALSE)
                 {  echo "<h2><b>Page Not Found Error - 404</b></h2>";
                     die();
                 }
                  $val=mysqli_fetch_array($data);
                 $get=mysqli_query($con,"select * from product_info where product_code=$val[product_code]");
                 $info=  mysqli_fetch_array($get);
                 $points=  mysqli_query($con,"select * from product_detail where product_code=$val[product_code]");
                 
					
					echo '<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/'.$_GET['code'].'(1).jpg" class="img-responsive" />
									<img class="etalage_source_image" src="images/'.$_GET['code'].'(1).jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/'.$_GET['code'].'(2).jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images/'.$_GET['code'].'(2).jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/'.$_GET['code'].'(3).jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/'.$_GET['code'].'(3).jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/'.$_GET['code'].'(4).jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/'.$_GET['code'].'(4).jpg"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"></div>		
				  </div>
				  <div class="desc1 span_3_of_2">
				
				
					
					<h3>'.$val['product_name'].'</h3>
					<p>'.$val['product_selling'].'</p>
					<div class="det_nav">
						<h4>related styles :</h4>
						<ul>
							<li><a href="#"><img src="images/1.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="images/12.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="images/3.jpg" class="img-responsive" alt=""/></a></li>
							<li><a href="#"><img src="images/ss2.jpg" class="img-responsive" alt=""/></a></li>
						</ul>
						';
					echo '
					</div>
					<form action="buy.php?op=add&code='.$_GET['code'].'" method="POST">
                                                <div class="det_nav1">
						<h4>Select a size :</h4>
							<div class=" sky-form col col-4">
								<ul>
									<li><label class="checkbox"><input type="radio" name="size" value="S" checked><i></i>S</label></li>
									<li><label class="checkbox"><input type="radio" name="size" value="M"><i></i>M</label></li>
									<li><label class="checkbox"><input type="radio" name="size" value="L"><i></i>L</label></li>
									<li><label class="checkbox"><input type="radio" name="size" value="XL"><i></i>XL</label></li>
								</ul>
							</div>Select No Of Shoes You Want to Buy
                                                        <select name="quant">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                           </select>
                                                            
					</div>
                                        <button style="background-color:red;height:50px;width:120px;font-size:20px;">Buy</button>
                                        </form> ';
					echo'
					<a href="#"><span>login to save in wishlist </span></a>
					
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    <div class="single-bottom1 "style="font-size:18px;">
					<b><h6>Details</h6>
					<p class="prod-desc">'.$val['product_details'].'</p>
                                            ';
                                        echo '<b></br>Key Features<br/></b><br/>'.$info['product_info'].'
				</b>
                                <br/><br/>
                                <table border=.3px  BORDERCOLOR=RED>
                                ';
                                 $flag=true;
                                while($dt=  mysqli_fetch_array($points))
                                {
                                   if($flag){ $flag=FALSE;
                                               echo '<tr> 
                                            <th style="padding:.4em"> '.$dt['product_property'].'</th>
                                            <td style="padding:.4em"> '.$dt['product_info'].'</td>
                                   </tr>';}
                                   else{
                                       $flag=TRUE;
                                        echo '<tr style="background-color:grey;"> 
                                            <th style="padding:.4em"> '.$dt['product_property'].'</th>
                                            <td style="padding:.4em"> '.$dt['product_info'].'</td>
                                   </tr>';
                                   }
                                }
                                echo ' </table></div> '; ?>
				
				<div class="single-bottom2">
					<h6>Related Products</h6>
					<?php $same=mysqli_query($con,"select * from product_detail_table where product_category='$val[product_category]' and product_code<>$val[product_code]");
						$data=mysqli_fetch_array($same);
						?>
					 <div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img style="height:100px;width:190px;"src="images/<?php echo $data['product_code'].'(1)';?>.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="details.php?code=<?php echo$data['product_code'];?>"><?php echo$data['product_name'];?></a></h5>
		                           <p class="product_descr"><?php echo substr($data['product_details'],0,198).'....';?> </p>									
							   </div>
							  <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access"><?php echo $data['product_selling'];?></span>								
								<button class="button1"><span>Add to cart</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
					 <?php $data=mysqli_fetch_array($same);?>
					 <div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img style="height:100px;width:190px;"src="images/<?php echo $data['product_code'].'(1)';?>.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="details.php?code=<?php echo$data['product_code'];?>"><?php echo$data['product_name'];?></a></h5>
		                           <p class="product_descr"><?php echo substr($data['product_details'],0,198).'....';?> </p>									
							   </div>
							  <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access"><?php echo $data['product_selling'];?></span>								
								<button class="button1"><span>Add to cart</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
					  <?php $data=mysqli_fetch_array($same);?>
					 <div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img style="height:100px;width:190px;"src="images/<?php echo $data['product_code'].'(1)';?>.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="details.php?code=<?php echo$data['product_code'];?>"><?php echo$data['product_name'];?></a></h5>
		                           <p class="product_descr"><?php echo substr($data['product_details'],0,198).'....';?> </p>									
							   </div>
							  <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access"><?php echo $data['product_selling'];?></span>								
								<button class="button1"><span>Add to cart</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
					 
					
		   	  </div>       </div>	
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
	</div>
<!-- details -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<p>Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
		</div>
	</div>
<!-- footer -->
</body>
</html>