<?php   
// Theme Name: CarStore
// Theme URI: https://CarStore.ru:131
// Description: краткое-описание-темы
// Author: hantarr01
// Author URI: ваш-URI
// Template:***
// Version: 0.2
?> 

<?php get_header(); ?>

 <?php if ( have_posts() ); ?>


<div id="mainbanner">
		<div class="slider">
		 <img src="<?= bloginfo('template_directory'); ?>/coolimage.png" class="responsive-img" width="100%">
		 <img src="<?= bloginfo('template_directory'); ?>/lamb.jpg" class="responsive-img" width="100%">
		 <img src="<?= bloginfo('template_directory'); ?>/bb.jpg" class="responsive-img" width="100%">
		 <img src="<?= bloginfo('template_directory'); ?>/nig.jpg" class="responsive-img" width="100%">
		 <img src="<?= bloginfo('template_directory'); ?>/bmv.jpg" class="responsive-img" width="100%">
		</div>
</div>


 <div class="products">

 	<ul>
 		<li>
 			<div id="picture1">

 				<div class="wht">
 					<h5><b>HEADLIGHTS</b></h5>
 					<div class="wh"><p>Headlights Projector, LED, Factory</p></div>
 				</div>

 				<div class="inpic1">
 					<img src="<?= bloginfo('template_directory'); ?>/1picture.png"  class="responsive-img" id="imgproducts">
 				</div>
 			</div>
 		</li>

 		<li>
 			<div id="picture2">

 				<div class="wht">
 					<h5><b>HEADLIGHTS</b></h5>
 					<div class="wh"><p>Headlights Projector, LED, Factory</p></div>
 				</div>

 				<div class="inpic2">
 					<img src="<?= bloginfo('template_directory'); ?>/2picture.png"  class="responsive-img" id="imgproducts">
 				</div>
 			</div>
 		</div>
 	</li>
 </ul>

 <div  class="products2">
 	<ul class="ulmrg">
 		<li>
 			<div id="picture3">

 				<div class="wht">
 					<h5><b>HEADLIGHTS</b></h5>
 					<div class="wh"><p>Headlights Projector, LED, Factory</p></div>
 				</div>

 				<div class="inpic3">
 					<img src="<?= bloginfo('template_directory'); ?>/3picture.png"  class="responsive-img" id="imgproducts">
 				</div>
 			</div>
 		</li>

 		<li>
 			<div id="picture4">

 				<div class="wht">
 					<h5><b>HEADLIGHTS</b></h5>
 					<div class="wh"><p>Headlights Projector, LED, Factory</p></div>
 				</div>

 				<div class="inpic4">
 					<img src="<?= bloginfo('template_directory'); ?>/4picture.png"   class="responsive-img" id="imgproducts">
 				</div>
 			</div>
 		</li>

 	</ul>
 </div>
</div>


<div class="featProd">

			<div class="heading">
				<ul class="center">
					<li>
						<div class="inHeading">
							<div class="txtHead"><b>FEATURED PRODUCTS</b></div>
							<div class="brBttRed"></div>
						</div>
					</li>
				</ul>
			</div>


	<div class="tblprod">

		
			<ul>	
				<li>
					<div class="prodct1">
						<img src="<?= bloginfo('template_directory'); ?>/prod1.png"  class="responsive-img">
					</div>
				</li>
				<li>
					<div class="prodct2">
						<img src="<?= bloginfo('template_directory'); ?>/prod2.png"  class="responsive-img">
					</div>
				</li>
				<li>
					<div class="prodct3">
						<img src="<?= bloginfo('template_directory'); ?>/prod3.png"  class="responsive-img">
					</div>
				</li>
				<li>
					<div class="prodct4">
						<img src="<?= bloginfo('template_directory'); ?>/prod4.png"  class="responsive-img">
					</div>
				</li>
				<li>
					<div class="prodct5">
						<img  src="<?= bloginfo('template_directory'); ?>/prod5.png"  class="responsive-img">
					</div>
				</li>
			</ul>
	</div>

	<div class="hght"></div>
</div>



<div class="specoff" style="background-image: url(<?= bloginfo('template_directory'); ?>/image/manycars.png); background-repeat: no-repeat;background-size: 100% 100%; ">

<div class="inspecoff">
		<div class="leftTXT">
			<div class="upTxt"><b>25% OFF</b></div>
			<p class="middleTxt"><b> ON ORGER OVER $999</b></p>
			<p class="downTxt">This Offer is vallid on all our items</p>
			<form>
				<input class="buttSpecOff" type="button" name="but1SpcOff" value="BUY NOW" >
			</form>
		</div>


	<div class="brdSpecOff"></div>

		<div class="rightTXT">
			<div class="upTxt"><b>25% OFF</b></div>
			<p class="middleTxt"><b>ON ORGER OVER $999</b></p>
			<p class="downTxt">This Offer is vallid on all our items</p>
			<form>
				<input class="buttSpecOff" type="button" name="but2SpcOff" value="BUY NOW">
			</form>
		</div>
</div>


</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- post -->
			<article class="article" style="color: white; text-align: center">
				<h3 class="article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="date"><?php the_date('d.m.y'); ?></span></h3>
				<img src="<?php bloginfo('template_url') ?>/image/manycars.png" height="500" width="800" alt="">
				<?php the_excerpt(); ?>
				<footer class="article__footer">
					<div class="tags"><?php the_tags('<span>Теги:</span> '); ?></div>
					
				</footer>
			</article>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?> 

 



<?php get_footer(); ?>
    