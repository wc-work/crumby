<?php
/* 
 * Template Name: Blog Page
 * Template Post Type: page
 */
get_header(); ?>
<!-- section -->
    <main role="main">
        <section class="blog-wrapper">
            <?php
                // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
            <?php if ( $wpb_all_query->have_posts() ) : ?>
                <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="layer"></div>
                <div class="blog-img layout mb-3" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);">
                    <div class="blog-title" style="font-size: 8vh; width:60vh;"> <?php the_title(); ?></div>
                    <button type="button" class="btn btn-lg" style="font-size:2.2vh; height:8vh; width:20vh;" href="<?php the_permalink();?>">Read More</button>
                </div>
            <?php endwhile; ?>
                <!-- end of the loop -->
                <!-- start of end -->
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <?php get_template_part('pagination'); ?>
            <!-- end of end -->
        </section>
    <!-- /section -->  
    </main>
<?php get_footer(); ?>





