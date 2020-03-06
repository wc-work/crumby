<?php 
/* 
 * Template Name: Homepage
 * Template Post Type: page
 */
get_header();?>

<section class="homepage">
  <div class="boxed">
    <div class="intro">
      <img class="home-logo" src="<?php echo get_template_directory_uri();?>/img/main-logo.png">
      <div class="intro-headers">
        <h1>Pave your digital footprint with websites made fresh by WebCrumbs</h1>  
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
	<h1>Our Services</h1>
	<div class="d-flex justify-content-center">
		<img class="serviceimg mt-5" src="<?php echo get_template_directory_uri();?>/img/icons/services-img.svg" alt="Image of website browser">
	</div>
	<div class="container card categories-content">
		<div class="row">
			<div class="col-xs-6 col-lg-4 categories mt-5">
				<h2>Website Design</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quidem cum exercitationem consequuntur sint non ipsa quos, quia animi ducimus culpa eveniet, veritatis, corporis eligendi itaque sed natus distinctio cumque.</p>
			</div>
			<div class="col-xs-6 col-lg-4 card categories mt-5">
				<h2>Custom Development</h2>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto ut facere repudiandae quis quod eaque deleniti, non pariatur et fuga quia commodi velit obcaecati culpa ad, vero laudantium quas sit.</p>
			</div>
			<div class="col-xs-6 col-lg-4 card categories mt-5">
				<h2>SEO Basics</h2>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque commodi praesentium autem laboriosam ipsum excepturi libero laudantium laborum, ea aperiam quod molestiae neque! Numquam illum porro magni, ea eius ducimus!</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-lg-4 categories mt-5">
				<h2>Onboarding Specialist</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quidem cum exercitationem consequuntur sint non ipsa quos, quia animi ducimus culpa eveniet, veritatis, corporis eligendi itaque sed natus distinctio cumque.</p>
			</div>
			<div class="col-xs-6 col-lg-4 card categories mt-5">
				<h2>ADA Compliance</h2>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto ut facere repudiandae quis quod eaque deleniti, non pariatur et fuga quia commodi velit obcaecati culpa ad, vero laudantium quas sit.</p>
			</div>
			<div class="col-xs-6 col-lg-4 card categories mt-5">
				<h2>Intro to Google Analytics</h2>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque commodi praesentium autem laboriosam ipsum excepturi libero laudantium laborum, ea aperiam quod molestiae neque! Numquam illum porro magni, ea eius ducimus!</p>
			</div>
		</div>
	
	</div>
	
</div>

<div class="button-container container-fluid">
                <!-- <a class="button" href="https://square.site/book/GDH2KVERNEFSC/webcrumbs-fresno-ca" data-toggle="tooltip" title="Hooray!"> Book A Meeting</a> -->
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
			<p>"WebCrumbs works to put you in control of your website. We tailor your WordPress experience to help showcase your authentic style."</p>
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
					<p>We use WordPress.</p>
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


<?php get_footer(); ?>
