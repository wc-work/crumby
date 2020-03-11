<?php 
/* 
 * Template Name: Homepage
 * Template Post Type: page
 */
get_header();?>
<main class="homepage">
<section class="banner">
  <div class="boxed">
    <div class="intro d-flex justify-content-center align-items-center flex-column">
      <img class="home-logo" src="<?php echo get_template_directory_uri();?>/img/main-logo.png">
      <div class="intro-headers">
        <!-- <h1>Pave your digital footprint with WordPress websites made fresh by WebCrumbs.</h1>   -->
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
	<div class="container card categories-content">
		<div class="row">
		<?php 
			if(have_rows('service_card')):
				while(have_rows('service_card')): the_row();
					$title = get_sub_field('service_title');
					$description = get_sub_field('service_description');
		?>
			<div class="col-xs-6 col-lg categories mt-5">
				<h2><?php echo $title ?></h2>
				<p> <?php echo $description ?></p>
			</div>
		<?php 	
				endwhile;
			endif; 
		?>
			<!-- <di v class="col-xs-6 col-lg card categories mt-5">
				<h2>Custom Development</h2>
				<p>Custom development will be based upon your choice of a pre-built wordpress theme or custom built theme. Custom themes are built by WebCrumbs and suit specific website needs.</p>
			</div>
			<div class="col-xs-6 col-lg card categories mt-5">
				<h2>SEO Basics</h2>
				<p>Search engine optimization (SEO) is the process of increasing the quality and quantity of website traffic by increasing the visibility of a website to users of a web search engine (ex.Google).</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-lg categories mt-5">
				<h2>Onboarding Specialist</h2>
				<p>An onboarding specialist communicates to the client changes and customization that are self mangable throughout the website.
				</p>
			</div>
			<div class="col-xs-6 col-lg card categories mt-5">
				<h2>ADA Compliance</h2>
				<p> ADA compliance refers to the Americans with Disabilities Act Standards for Accessible Design, which states that all electronic and information technology (like websites) must be accessible to people with disabilities.</p>
			</div>
			<div class="col-xs-6 col-lg card categories mt-5">
				<h2>Intro to Google Analytics</h2>
				<p>Google Analytics is a web analytics service offered by Google that tracks and reports website traffic, currently as a platform inside the Google Marketing Platform brand. 
				</p>
			</div> -->
		</div>
	
	</div>
	
</div>

<div class="button-container container-fluid">
	<a href="https://square.site/book/GDH2KVERNEFSC/webcrumbs-fresno-ca" class="btn btn-lg meetingbtn" target="_blank"> 
			Book A Meeting 
	</a>
</div>


<!-- QUOTE SECTION -->

	<div class="quotes-sec container">
		<div class="d-flex justify-content-center col-xl-10 quotecontainer">
			<div>	
				<img src="<?php echo get_template_directory_uri();?>/img/quote-1.svg" alt="Quote icon" class="quote1">
			</div>
			<div>
				<p>WebCrumbs works to put you in control of your website. We tailor your WordPress experience to help showcase your authentic style.</p>
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
	<div class="container yellow mb-5">
		<div class="row">
			<div class="col-lg col-md">
				<div class="cards">
					<div class="cards-h1">What?</div>
					<img src="<?php echo get_template_directory_uri();?>/img/whatcard-icon.svg" alt="Wordpress logo" class="cards-icon" alt="icon of website grid" class="cards-icon">
					<div class="cardheading mt-3">We make websites.</div>
					<p id="card-p">We build and enhance websites that put you in control.</p>
				</div>
			</div>
			<div class="col-lg col-md">
				<div class="cards d-flex flex-column align-items-center">
					<div id="how" class="cards-h1 mb-3">How?</div>
					<img src="<?php echo get_template_directory_uri();?>/img/wordpress-icon.svg" alt="Wordpress logo" class="cards-icon">
					<div class="cardheading">We use WordPress.</div>
					<p id="card-p">We use WordPress, a self content management system.
					</p>
				</div>
			</div>
			<div class="col-lg col-md">
				<div class="cards mb-5 d-flex flex-column align-items-center">
					<div class="cards-h1">Why?</div>
					<img src="<?php echo get_template_directory_uri();?>/img/whatcard-icon.svg" alt="Wordpress logo" class="cards-icon" alt="icon of website grid" alt="icon of a bell" class="cards-icon">
					<div class="cardheading mt-3">It's in our values.</div>
					<p id="card-p">We’re here to help, <br id="how"> we’re here for you. 
					</p>
					<a href="https://webcrumbs.dev/about" class="btn btn-lg learnbtn">Learn More</a>
				</div>
			</div>
		</div>
	</div>  
	<br>
</main>

<?php get_footer(); ?>
