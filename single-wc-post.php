<?php
/*
* Template Name: Blog Post
* Template Post Type: post
*/
get_header();  ?>
<div class="post-setup blog">
    <main role="main">
        <!-- section -->
        <section>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!-- post thumbnail -->
                    <div class="jumbotron p-0">
                        <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>

                        <div class="thumbnail-block">
                            <div class="featured-title"><?php the_title(); ?></div>
                            <?php the_post_thumbnail('full-width', array('class' => 'featured-img-width')); // Fullsize image for the single post ?>
                        </div>
                    </div>
                <?php endif; ?>
                    <!-- /post thumbnail -->
					<!-- post details -->
					<div class="container-fluid">
						<div class="post_details">
							<p class="author"><?php _e('By', 'html5blank'); ?> <?php the_author_posts_link(); ?></p> |
							<p class="date"><?php the_time('F jS, Y'); ?></p>
						</div>
					</div>
					<!-- /post details -->
                    <div class="container">
                        <!-- post title removed if you want to add it back in wrap the title in a php tag and add parentheses after the_title-->
                        <!-- <div class="post-title">
                            <h1> the_title; </h1>
                        </div> -->
						<!-- /post title -->
						<div class="content">
							<p><?php the_content(); // Dynamic Content?></p>
						</div>
                    </article>
                    <!-- /article -->
                <?php endwhile; ?>

                <div class="container">
                    <div class="row justify-content-around recent_blog_row m-3">
						<div class="col-12">
							<h2 class="text-center">More Articles . . .</h2>
						</div>
                        <?php
                        $recent_post = new WP_Query(array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'showposts' => 4,
                            'order' => 'DESC',
                        ));
                        ?>
                       <?php while ($recent_post -> have_posts()) : $recent_post->the_post(); ?>
                            <div class="col-lg-3 col-md-6 col-12 d-flex flex-column justify-content-center px-5 card full-card">
                                <div class="img-container d-flex justify-content-center">
									<?php the_post_thumbnail('thumbnail', array('class' => 'card-img-top img-fluid')); ?>
								</div>
                                <div class="card-body my-4 text-center font-italic">
                               		<a class="card-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    <!-- <p class="card-text">This Pikachu is happy to see your face!</p> -->
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
</div><!-- /post-setup -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
