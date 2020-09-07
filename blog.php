<?php
/* 
 * Template Name: Blog Page
 * Template Post Type: page
 */
get_header(); ?>
<!-- section -->
    <main role="main" class="blog-wrapper">
        <div class="blog-intro">
            <h1>Welcome to the WebCrumbs Blog</h1>
            <br>
            <h2>Read What's Good</h2>
        </div>
        <div class="overlay"></div>
            <div class="banner-image">
            </div>
        
        <section class="blog-wrapper">
            <?php
                // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
            <?php if ( $wpb_all_query->have_posts() ) : ?>
                <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
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





