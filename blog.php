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
            <ul>
                <!-- the loop -->
                
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="blogpost" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                    <li class="d-flex justify-content-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                </div>
                <?php endwhile; ?>

                <!-- end of the loop -->
            </ul>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

			<h1><?php _e( 'WebCrumbs Blog', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->


	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>