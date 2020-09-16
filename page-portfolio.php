<?php
/*
 * Template Name: PortfolioPage
 * Template Post Type: page
 */
get_header(); ?>
    <div class="content portfolio">
        <div class="container carousel-container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="my-slider" class="carousel slide" data-ride="carousel">
                        <!-- Pictures -->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="http://localhost:8000/wp-content/themes/crumby/img/caruthers.png" alt="">
                                <div class="carousel-caption">
                                    <h1>caruthersfair.com</h1>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="http://localhost:8000/wp-content/themes/crumby/img/sideye.png" alt="">
                                <div class="carousel-caption">
                                    <h1>sideyetiedye.com</h1>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100 justify-content-center">
                            <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev">
                                <img class="arrow-icons" src="images/black_chevron-left.png" alt="">
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#my-slider" role="button" data-slide="next">
                                <img class="arrow-icons"src="images/black_chevron-right.png" alt="">
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Grid -->
        <div class="content__grid d-flex justify-content-center flex-wrap">
             <div class="content__grid--item d-flex flex-column align-items-center">
                <div alt="" class="content__img sideye"></div>
                <p class="content__text">
                   Sideye Tie Dye is a new company in the central valley, aiming to share their passion for tie-dye with the world. They are an e-commerce company selling beautiful tie-dye clothing and spreading the knowledge of how to make your own tie-dye clothing!
                </p>
            </div>
             <div class="content__grid--item d-flex flex-column align-items-center">
                <div alt="" class="content__img caruthers"></div>
                <p class="content__text">
                   We took a long-standing tradition and gave it an excellent new sleek modern website. Redesigned to fit all the needs and offer's the Caruthers fair has to provide.
                </p>
            </div>
            <div class="content__grid--item d-flex flex-column align-items-center">
                <div alt="" class="content__img travel"></div>
                <p class="content__text">
                   Travel Minded is a blogging site created to share beautiful and exquisite Vacations. The goal is to inspire others to explore the world by sharing vacation experiences and providing helpful travel tips.
                </p>
            </div>
             <div class="content__grid--item d-flex flex-column align-items-center">
                <div alt="" class="content__img flower"></div>
                <p class="content__text">
                   A single page application to help you stop and smell the flowers. This flower gallery is here to help you get to know a little more about these beautiful organisms.
                </p>
            </div>
             <div class="content__grid--item d-flex flex-column align-items-center">
                <div alt="" class="content__img backpack"></div>
                <p class="content__text">
                   Are you trying to escape the city? Backpackers Paradise is full of information on long backpacking trips from the Pacific Crest Trail to a day hike!
                </p>
            </div>
           
        </div>
    </div>

</main>


    

<?php get_footer(); ?>