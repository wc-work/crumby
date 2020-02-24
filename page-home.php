<?php 
/* 
 * Template Name: Homepage
 * Template Post Type: page
 */
get_header(); ?>

	<main role="main">
		<section class="homepage">
  			<div class="boxed">

				<div id="big-video">
					<div class="mov-overlay"></div>
					<div class="mov" 
						data-src="<?php echo get_template_directory_uri();?>/img/video/webcrumbs-placeholder.png" 
						data-video="<?php echo get_template_directory_uri();?>/img/video/webcrumbs-take-1.mp4"
						data-placeholder="<?php echo get_template_directory_uri();?>/img/video/webcrumbs-placeholder.png">
					</div>
    			</div>
			</div>
		</section>

<!-- QUOTE SECTION -->
<div class="container-fluid quotes-sec mb-5">
	<div class="d-flex justify-content-center">
		<div>	
				
				<img src="<?php echo get_template_directory_uri();?>/img/quote-1.svg" alt="Quote icon" class="quote1">
		</div>
		<div>
			<p>WebCrumbs works to put you in control of your website. We tailor your Wordpress experience to help showcase your authentic style.</p>
		</div>
		<div>
		<img src="<?php echo get_template_directory_uri();?>/img/quote-1.svg" alt="Quote icon" class="quote2">
		</div>
	</div>

</div>









<!-- CARDS -->

 <div class="container yellow mb-5">
	<div class="row">
		<div class="col-lg col-md">
			<div class="cards">
				<h1 class="cards-h1">What?</h1>
				<img src="<?php echo get_template_directory_uri();?>/img/whatcard-icon.svg" alt="Wordpress logo" class="cards-icon" alt="icon of website grid" class="cards-icon">
				<p id="what">Simply put, we make websites.</p>
			</div>
		</div>
		<div class="col-lg col-md">
			<div class="cards">
				<h1 class="cards-h1">How?</h1>
				<img src="<?php echo get_template_directory_uri();?>/img/wordpress-icon.svg" alt="Wordpress logo" class="cards-icon">
				<p>We use Wordpress.</p>
				<a href="http://wc.v3/process" class="btn btn-lg">Learn More</a>
			</div>
		</div>
		<div class="col-lg col-md">
			<div class="cards mb-5">
				<h1 class="cards-h1">Why?</h1>
				<img src="<?php echo get_template_directory_uri();?>/img/whatcard-icon.svg" alt="Wordpress logo" class="cards-icon" alt="icon of website grid" alt="icon of a bell" class="cards-icon">
				<p>It's in our values.</p>
				<a href="http://wc.v3/about-us" class="btn btn-lg">Learn More</a>
			</div>
		</div>
	</div>
	
</div> 


		<!-- /section -->
	</main>



<?php get_footer(); ?>