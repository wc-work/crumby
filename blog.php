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
                <!-- <div class="layer"></div>
                <div class="blog-img layout mb-3" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);">
                    <div class="blog-title"> <?php the_title(); ?></div>
                    <div class="excerpt"><?php echo get_excerpt(140); ?></div>
                    <a href="<?php the_permalink();?>"><button type="button" class="btn btn-lg blog-button">Read More</button></a>
                </div> -->
                <?php get_template_part('partials/blog-banner');?>
            <?php endwhile; ?>
                <!-- end of the loop -->
                <!-- start of end -->
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <!-- end of end -->
        </section>
    <!-- /section -->  
    </main>
<?php get_footer(); ?>





