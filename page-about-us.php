<?php 
/* 
 * Template Name: About Us Page
 * Template Post Type: page
 */
get_header(); ?>

	<main role="main" class="about-us">
        <!-- Banner -->
        <section class="banner">
            <div class="title">The WebCrumbs Story</div>
            <div class="layer"></div>
            <img src="https://webcrumbs.dev/wp-content/uploads/2020/03/webcrumbs-logo-process-wide.jpg">
        </section>
        <!-- Our Story -->
        <section class="container copy">
            <div class="row">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                The world has moved to an increasingly online space, but that doesn’t mean it can’t be human. WebCrumbs is a website design company with people who value support, authenticity, and transparency with a team that’s like family. People who are supportive and enthusiastic about your past, present, and future. Feel free to call anytime, and our team will be happy to work with you.
                </div>
            </div>
        </section>
        <!-- Quote -->
        <section>
            <div class="box">
                <div class="grid">
                    <div class="grid-temp">
                        <div class="item1">
                            <picture class="picback">
                                <img src="https://webcrumbs.dev/wp-content/uploads/2020/02/webcrumbs-left-quotation-01.png">
                            </picture>
                        </div>
                        <div class="quotation item2 d-flex">
                            <p>At WebCrumbs, we always make sure to have our HAT on...</p>
                        </div>
                        <div class="item3">
                            <picture class="picback">
                                <img src="https://webcrumbs.dev/wp-content/uploads/2020/02/webcrumbs-right-quotation-01-01.png">
                            </picture>
                        </div>
                    </div>          
                </div>
            </div>      
        </section>
        <!-- HAT Carousel -->
        <section d-flex justify-content-center align-items-center>
            <div id="crumbs" class="carousel slide container-fluid" data-ride="carousel">
				<div class="carousel-inner">
                    <div class="wrapper">
                        <div class="carousel-item active">
                            <div class="carousel-caption">
                                <!-- H a t -->
                                <h1>H 
                                    <a  class="hatstyles"> 
                                        <span data-target="#crumbs" data-slide-to="1">A </span>
                                        <span data-target="#crumbs" data-slide-to="2">T </span>
                                    </a>
                                </h1>
                                <h2>Helpful</h2>
                                <h3>We are a click, text, call, drive <br> away, and always ready to help.</h3>
                            </div> 
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <!-- h A t -->
                                <h1>
                                    <a class="hatstyles">
                                        <span data-target="#crumbs" data-slide-to="0">H</span>
                                    </a> 
                                    A 
                                    <a class="hatstyles">
                                        <span data-target="#crumbs" data-slide-to="2">T </span>
                                    </a>
                                </h1>
                                <h2>Authentic</h2>
                                <h3>We work to showcase the best, <br> unique you in the digital world.</h3>
                            </div> 
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <!-- h a T -->
                                <h1>
                                    <a style="opacity: .3">
                                        <span data-target="#crumbs" data-slide-to="0">H</span>
                                    </a>
                                    <a style="opacity: .3">
                                        <span data-target="#crumbs" data-slide-to="1">A</span>
                                    </a>
                                    T
                                </h1>
                                <h2>Transparent</h2>
                                <h3>We believe in a relationship <br> with honest communication.</h3>
                            </div> 
                        </div>        
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#crumbs" data-slide-to="0" class="active"><img class="img-responsive" src="https://webcrumbs.dev/wp-content/uploads/2020/02/webcrumbs-single-crumb-one-01.png" alt="crumbs-indicator">
                    </li>
                    <li data-target="#crumbs" data-slide-to="1"><img class="img-responsive" src="https://webcrumbs.dev/wp-content/uploads/2020/02/webcrumbs-single-crumb-two-01.png" alt="crumbs-indicator">
                    </li>
                    <li data-target="#crumbs" data-slide-to="2"><img class="img-responsive" src="https://webcrumbs.dev/wp-content/uploads/2020/02/webcrumbs-single-crumb-three-01.png" alt="crumbs-indicator">
                    </li>
                </ol>
			</div>
        </section>
        <!-- Call to action button -->
        <section>
            <div class="button-container container-fluid">
               <a href="https://square.site/book/GDH2KVERNEFSC/webcrumbs-fresno-ca" class="btn btn-lg meetingbtn" target="_blank"> 
                    Book A Meeting 
                </a>
            </div>
        </section>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>