<?php 
/* 
 * Template Name: Blog Page
 * Template Post Type: page
 */
get_header(); ?>

<!-- section -->

<main role="main">

	<section>

        <?php 
            // the query
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
        <?php if ( $wpb_all_query->have_posts() ) : ?>
            
            <!-- the loop -->
        
        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <container class="container-fluid blogpost col-xs-offset pb-5">
                <div class="blogimg" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);">
                    <div class="title font-weight-bold d-flex text-left pl-5"> <?php the_title(); ?></div>
                        <div class="pt-5 pl-5">
                            <button type="button" class="btn btn-primary btn-lg d-flex justify-content-center" id="blog-btn" href="<?php the_permalink();?>">Read More</button>
                        </div>
                </div>
        </container>    
        <?php endwhile; ?>
                
            <!-- end of the loop -->
            <!-- start of end -->
        <?php wp_reset_postdata(); ?>
        
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

		<?php get_template_part('loop'); ?>

        <?php get_template_part('pagination'); ?>
        <!-- end of end -->

        

    </section>
<!-- /section -->

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>