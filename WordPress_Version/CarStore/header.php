 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">

 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 	<link type="text/css" rel="stylesheet" href="<?= bloginfo('template_directory'); ?>/materialize.min.css"  media="screen,projection"/>
 	<link href="<?= bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css">

 	<link href="<?= bloginfo('template_directory'); ?>https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
 	<link href="<?= bloginfo('template_directory'); ?>https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet"> 
 	<title>Car Store</title>
 	<?php wp_head();?>
 </head>

 <body>


 	<header>
 		<nav id="header">
 			<div class="nav-wrapper">
 				<a href="#" data-target="mobile-demo" class="sidenav-trigger" id="menu2"><i class="material-icons">menu</i></a>

 				<ul class="right hide-on-med-and-down">

 					<li>
 						<div id="up-header">


 							<div class="human" id="font">
 								<a href="#">
 									<img src="<?= bloginfo('template_directory'); ?>/human.png">
 									My Account
 								</a>
 							</div>



 							<div class="cart" id="font">
 								<a href="#">
 									<img src="<?= bloginfo('template_directory'); ?>/cart.png">
 									Cart
 								</a>
 							</div>



 							<div class="checkout" id="font">
 								<a href="#">
 									<img src="<?= bloginfo('template_directory'); ?>/checkout.png">
 									Checkout
 								</a>
 							</div>

 							<div class="border">
 							</div>
 							<div class="searchtop">
 								<img src="<?= bloginfo('template_directory'); ?>/search.png">
 							</div>
 						</div>
 						<div class="bord-bott"></div>
 					</li>


 					<li>
 						<div id="logo">
 							<img src="<?= bloginfo('template_directory'); ?>/logo.png"></img>
 						</div>
 					</li>




 					<div class="alltab">
 						<div class="intab1">
 							<a href="#">
 								<div class="tabs1">
 									<img src="<?= bloginfo('template_directory'); ?>/star.png">
 								</div>
 								<div class="tab1">
 									WISHLIST
 								</div>
 							</a>
 						</div>

 						<div class="intab2">
 							<a href="#">
 								<div class="tabs2">
 									<img src="<?= bloginfo('template_directory'); ?>/car.png">
 								</div>
 								<div class="tab2">
 									COMPARE
 								</div>
 							</a>
 						</div>

 						<div class="intab3">
 							<a href="#">
 								<div class="tabs3">
 									<img src="<?= bloginfo('template_directory'); ?>/cart2.png">
 								</div>
 								<div class="tab3">
 									MY CART
 								</div>
 							</a>
 						</div>

 						<div class="con-info">

 							<div class="phone">
 								<img src="<?= bloginfo('template_directory'); ?>/phone.png"">
 							</div>

 							<div class="number">
 								+123 456 7890
 							</div>

 							<div class="data">
 								MON-FRI: 8:30AM-7:30PM:SAT-SUN: 9:30AM-4:30PM
 							</div>

 						</div>

 					</div>

 				</li>

 			</ul>

 			<div class="nav-content">
 			</div>
 		</div>
 	</nav>







 	<ul class="sidenav" id="mobile-demo"> 


 		<li>
 			<nav>
 				<div class="nav-wrapper">
 					<form>
 						<div class="input-field"id="search2">
 							<input id="search" type="search" required>
 							<label class="label-icon" for="search"><i class="material-icons">search</i></label>
 							<i class="material-icons">close</i>
 						</div>
 					</form>
 				</div>
 			</nav>
 		</li>

 		<li class="logoMobile">
 			<img src="<?= bloginfo('template_directory'); ?>/logo.png"></img>
 		</li>

 		<li>

 			<div class="rdA">
 				<a href="#">
 					<img src="<?= bloginfo('template_directory'); ?>/human.png">
 					My Account
 				</a>
 			</div>



 			<div class="rdA">
 				<a href="#">
 					<img src="<?= bloginfo('template_directory'); ?>/cart.png">
 					Cart
 				</a>
 			</div>

 			<div class="rdA">
 				<a href="#">
 					<img src="<?= bloginfo('template_directory'); ?>/checkout.png">
 					Checkout
 				</a>
 			</div>		

 		</li>

 		<li class="whtA">

 			<div class="intabm">
 				<a href="#">
 					<div class="tabs1">
 						<img src="<?= bloginfo('template_directory'); ?>/star.png">
 					</div>
 					<div class="tabm">
 						WISHLIST
 					</div>
 				</a>
 			</div>



 			<div class="intabm2">
 				<a href="#">
 					<div class="tabs2">
 						<img src="<?= bloginfo('template_directory'); ?>/car.png">
 					</div>
 					<div class="tabm">
 						COMPARE
 					</div>
 				</a>
 			</div>



 			<div class="intabm3">
 				<a href="#">
 					<div class="tabs3">
 						<img src="<?= bloginfo('template_directory'); ?>/cart2.png"> 
 					</div>	
 					<div class="tabm">
 						MY CART
 					</div>
 				</a>
 			</div>


 		</li>
 	</ul>

 </header> 

 <div id="buttons">
 	<ul>
 		<div class="row">
 			<li><div class="col s12 col l2"></div></li>

 			<li class="marg">
 				<a href="https://materializecss.com/media-css.html">
 					<div id="buttonshrefsmall"><p>HOME</p></div>
 				</a>
 			</li>	

 			<li class="marg">
 				<a href="https://materializecss.com/media-css.html">
 					<div id="buttonshref"><p>SERVICES</p></div>
 				</a>
 			</li>	


 			<li class="marg">
 				<a href="https://materializecss.com/media-css.html">
 					<div id="buttonshrefsmall"><p>ABOUT</p></div>
 				</a>
 			</li>					

 			<li class="marg">
 				<a href="https://materializecss.com/media-css.html">
 					<div id="buttonshref"><p>REVIEWS</p></div>
 				</a>
 			</li>

 			<li class="marg">
 				<a href="https://materializecss.com/media-css.html">
 					<div id="buttonshref"><p>LOCATIONS</p></div>
 				</a>
 			</li>

 			<li class="marg">
 				<a href="https://materializecss.com/media-css.html">
 					<div id="buttonshref"><p>CONTACTS</p></div>
 				</a>
 			</li>
 		</div>
 	</ul> 
 </div>

 <?php
 wp_nav_menu( [
 	'theme_location'  => '',
 	'menu'            => '', 
 	'container'       => 'li', 
 	'container_class' => 'marg', 
 	'container_id'    => 'buttonshrefsmall',
 	'menu_class'      => 'marg', 
 	'menu_id'         => '',
 	'echo'            => true,
 	'fallback_cb'     => 'wp_page_menu',
 	'before'          => '',
 	'after'           => '',
 	'link_before'     => '',
 	'link_after'      => '',
 	'items_wrap'      => '<div id="buttonshref" class=""></div>',
 	'depth'           => 0,
 	'walker'          => '',
 ] );
 ?>

</div>