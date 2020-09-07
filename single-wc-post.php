<?php
/*
* Template Name: Blog Post
* Template Post Type: post
*/
get_header();  ?>
<div class="post-setup blog">
    <main class="single-post-wrapper role="main">
        <!-- section -->
        <section>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!-- post thumbnail -->
                    <p class="date"><?php the_time('F jS, Y'); ?></p>
                    <h1> <?php the_title(); ?></h1>
                    <p class="byline"><?php _e('By', 'html5blank'); ?> <?php the_author_posts_link(); ?></p>
                    <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    <div class="post-thumbnail"style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);"></div>

                    <?php endif; ?>

                    <div class="the-content">
					    <p><?php the_content();?></p>
                    </div>
                </article>
                <!-- /article -->
            <?php endwhile; ?>

                <div class="spacing container">
					<div class="col-12">
						<h2 class="text-center">More Posts</h2>
                    </div>
                    <div class="more-posts">
                        <?php
                        $recent_post = new WP_Query(array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'showposts' => 4,
                            'order' => 'DESC',
                        ));
                        ?>
                       <?php while ($recent_post -> have_posts()) : $recent_post->the_post(); ?>
                            <div class="spacing col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-center px-5 card full-card">
                                <div class="img-container d-flex justify-content-center">
									<?php the_post_thumbnail('thumbnail', array('class' => 'card-img-top img-fluid')); ?>
								</div>
                                <div class="card-body my-4 text-center font-italic">
                               		<a class="card-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php else : ?>
                <!-- article -->
                <article>
                    <h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>
                </article>
                <!-- /article -->
            <?php endif; ?>
        </section>
        <!-- /section -->
    </main>
</div><!-- /container-fluid -->

<?php get_footer(); ?>
