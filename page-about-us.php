<?php 
/* 
 * Template Name: About Us Page
 * Template Post Type: page
 */
get_header(); ?>

	<main role="main" class="about-us">
        <!-- HAT Carousel -->
        <section>
            <div id="crumbs" class="carousel slide container-fluid" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#crumbs" data-slide-to="0" class="active"><img class="img-responsive" src="http://webcrumbs.site/wp-content/uploads/2020/02/webcrumbs-single-crumb-one-01.png" alt="crumbs-indicator">
                    </li>
                    <li data-target="#crumbs" data-slide-to="1"><img class="img-responsive" src="http://webcrumbs.site/wp-content/uploads/2020/02/webcrumbs-single-crumb-two-01.png" alt="crumbs-indicator">
                    </li>
                    <li data-target="#crumbs" data-slide-to="2"><img class="img-responsive" src="http://webcrumbs.site/wp-content/uploads/2020/02/webcrumbs-single-crumb-three-01.png" alt="crumbs-indicator">
                    </li>
                </ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
                        <div class="carousel-caption">
                            <h1>H <a style="opacity: 30%"> A T</a></h1>
                            <h2>Helpful</h2>
                            <h3>We are a click, text, call, drive <br> away, and always ready to help.</h3>
                        </div> 
  					</div>
  					<div class="carousel-item">
                        <div class="carousel-caption">
                            <h1><a style="opacity: 30%">H</a> A <a style="opacity: 30%">T</a></h1>
                            <h2>Authentic</h2>
                            <h3>We work to showcase the best, <br> unique you in the digital world.</h3>
                        </div> 
  					</div>
					<div class="carousel-item">
                        <div class="carousel-caption">
                            <h1><a style="opacity: 30%">H A</a> T</h1>
                            <h2>Transparent</h2>
                            <h3>We believe in a relationship <br> with honest communication.</h3>
                        </div> 
  					</div>
				</div>
			</div>
        </section>
        <!-- Call to action button -->
        <section>
            <div class="button-container container-fluid">
                <!-- <a class="button" href="https://square.site/book/GDH2KVERNEFSC/webcrumbs-fresno-ca" data-toggle="tooltip" title="Hooray!"> Book A Meeting</a> -->
               <a href="https://square.site/book/GDH2KVERNEFSC/webcrumbs-fresno-ca" class="btn btn-lg meetingbtn"> 
                    <p>Book A Meeting</p> 
                </a>
            </div>
        </section>
        <!-- Quote -->
        <section>
            <div class="box">
                <div class="grid">
                    <div class="grid-temp">
                        <div class="item1">
                            <picture class="picback">
                                <img src="http://webcrumbs.site/wp-content/uploads/2020/02/webcrumbs-left-quotation-01.png">
                            </picture>
                        </div>
                        <div class="quotation item2 d-flex">
                            <p>At WebCrumbs, we always make sure to have our HAT on...</p>
                        </div>
                        <div class="item3">
                            <picture class="picback">
                                <img src="http://webcrumbs.site/wp-content/uploads/2020/02/webcrumbs-right-quotation-01-01.png">
                            </picture>
                        </div>
                    </div>          
                </div>
            </div>      
        </section>



</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>