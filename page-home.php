<?php 
/* 
 * Template Name: Homepage
 * Template Post Type: page
 */
get_header('transition');?>
<main class="homepage">
<section class="banner">
  <div class="boxed">
    <div class="intro d-flex justify-content-center align-items-center flex-column">
      <img class="home-logo" src="<?php echo get_template_directory_uri();?>/img/main-logo.png">
      <div class="intro-headers">
		<h1><?php bloginfo( "description" ); ?></h1>
      </div>
    </div>
  </div>
 
  <div id="big-video">
      <div class="mov-overlay"></div>
      <div class="mov" data-src="<?php echo get_template_directory_uri();?>/img/video/webcrumbs-placeholder.png" 
        data-video="<?php echo get_template_directory_uri();?>/img/video/webcrumbs-take-1.mp4"
        data-placeholder="<?php echo get_template_directory_uri();?>/img/video/webcrumbs-placeholder.png">
      </div>
    </div>
  </div>
</section>
<!-- SERVICES SECTION -->

<div class="container-fluid services-sec">
	<div class="d-flex justify-content-center">
		<img class="serviceimg mt-5" src="<?php echo get_template_directory_uri();?>/img/icons/services-img.svg" alt="Image of website browser">
	</div>
	<h1><?php the_field('section_title'); ?></h1>
	<div class="container categories-content">
		<div class="row">
		 <?php 
			if(have_rows('service_card')):
				while(have_rows('service_card')): the_row();
					$title = get_sub_field('service_title');
					$description = get_sub_field('service_description');
		?>
			<div class="col-md-4 categories mt-5">
				<h2><?php echo $title ?></h2>
				<p> <?php echo $description ?></p>
			</div>
		<?php 	
				endwhile;
			endif; 
		?> 
		</div>
	</div>
</div>

<div class="container-fluid contact_wrapper ">
	<h2>Get in Touch Today</h2>
  <div class="lrg_wrapper">
    <div class="section_header text-center">
      <p>If you're wondering if a WordPress website will suit your company's needs, we can help answer your questions. Take a moment to tell us about your idea.</p>
    </div>
    <div class="section_wrapper">
      <div class="section_info">
        <h2>Floyd Muñoz</h2>
        <h3 class="job_title">Business Developer<br>Management</h3>
      </div>
      <div class="contact">
        <p>(415) 310-2317</p>
        <p>fmunoz@geekwiseacademy.com</p>
        <p>2721 Ventura St.
        <br>
        Suite 201
        <br>
        Fresno CA, 93721</p>
      </div>

		</div>
		<div class="button_section d-flex flex-row justify-content-center mt-2">
        <button type="button" class="btn btn-lg">Contact Us</button>
      </div>
  </div>     
 </div>



<!-- QUOTE SECTION -->

	<div class="quotes-sec container">
		<div class="d-flex justify-content-center col-xl-10 quotecontainer">
			<div>	
				<img src="<?php echo get_template_directory_uri();?>/img/quote-1.svg" alt="Quote icon" class="quote1">
			</div>
			<div>
				<p><?php the_field('quotes_section'); ?></p>
			</div>
			<div>
				<img src="<?php echo get_template_directory_uri();?>/img/quote-1.svg" alt="Quote icon" class="quote2">
			</div>
		</div>
	</div>
	<div class="mobile-quotes">
		<div class="container">
			<p>WebCrumbs works to put you in control of your website. We tailor your WordPress experience to help showcase your authentic style.</p>
		</div>
	
	</div>
	<!-- CARDS -->
	<div class="container yellow">
		<div class="row">
			<div class="col-lg col-md">
				<div class="cards d-flex flex-column align-items-center">
					<div class="cards-h1">What?</div>
					<img src="<?php echo get_template_directory_uri();?>/img/whatcard-icon.svg" alt="Wordpress logo" class="cards-icon" alt="icon of website grid" class="cards-icon">
					<div class="cardheading mt-3">We make websites.</div>
					<p id="card-p">We build and enhance websites that put you in control.</p>
					<a href="https://webcrumbs.dev/process/" class="btn btn-lg learnbtn">Learn More</a>
				</div>
			</div>
			<div class="col-lg col-md">
				<div class="cards d-flex flex-column align-items-center">
					<div id="how" class="cards-h1 mb-3">How?</div>
					<img src="<?php echo get_template_directory_uri();?>/img/wordpress-icon.svg" alt="Wordpress logo" class="cards-icon">
					<div class="cardheading">We use WordPress.</div>
					<p id="card-p">We use WordPress, a self content management system.
					</p>
					<a href="https://webcrumbs.dev/why-webcrumbs-uses-wordpress/" class="btn btn-lg learnbtn">Learn More</a>
				</div>
			</div>
			<div class="col-lg col-md">
				<div class="cards mb-5 d-flex flex-column align-items-center">
					<div class="cards-h1">Why?</div>
					<img src="<?php echo get_template_directory_uri();?>/img/whatcard-icon.svg" alt="Wordpress logo" class="cards-icon" alt="icon of website grid" alt="icon of a bell" class="cards-icon">
					<div class="cardheading mt-3">It's in our values.</div>
					<p id="card-p">We’re here to help, <br id="how"> we’re here for you. 
					</p>
					<a href="https://webcrumbs.dev/helpful-authentic-transparent-about/" class="btn btn-lg learnbtn">Learn More</a>
				</div>
			</div>
		</div>
	</div>  
	<br>
</main>

<?php get_footer(); ?>

