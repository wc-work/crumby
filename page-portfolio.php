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
                            <?php if(have_rows('carousel_item')): 
                                while(have_rows('carousel_item')): the_row(); ?>
                                    <div class="carousel-item 
                                <?php if(get_sub_field(featured_image) === true):
                                    echo(" active");
                                    endif;
                                ?>">
                                    <img src="<?php the_sub_field('carousel_item_image'); ?>" alt="">
                                    <div class="carousel-caption">
                                        <a class="carousel-item__link" href="<?php the_sub_field('carousel_item_url'); ?>"><h1><?php the_sub_field('carousel_item_name'); ?></h1></a>
                                    </div>   
                                </div>
                                <?php
                                    endwhile;
                                    else:
                                    endif;
                                ?>
                        </div>
                        <div class="d-flex w-100 justify-content-center">
                            <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev"></a>
                            <a class="right carousel-control" href="#my-slider" role="button" data-slide="next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Grid -->
        <div class="content__grid d-flex justify-content-center flex-wrap">
             <?php if(have_rows('portfolio_item')): 
                while(have_rows('portfolio_item')): the_row(); ?>
                <div class="content__grid--item d-flex flex-column align-items-center">
                    <img class="content__gif" src="<?php the_sub_field('portfolio_item_gif');?>" >
                    <img class="content__img" src="<?php the_sub_field('portfolio_item_image');?>" >
                    
                    <p class="content__text">
                        <?php the_sub_field('portfolio_item_text'); ?>
                    </p>
                </div>
                <?php
                    endwhile;
                else:
                endif;
                ?>
        </div>
      

    </div>

</main>


    

<?php get_footer(); ?>