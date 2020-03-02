<?php
/*
* Template Name: Blog Post
* Template Post Type: post
*/
get_header();  ?>
<div class="post-setup">
    <main role="main">
        <!-- section -->
        <section>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!-- post thumbnail -->
                    <div class="container-fluid">
                        <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>

                        <div class="thumbnail-block">
                            <div class="featured-title"><?php the_title(); ?></div>
                            <?php the_post_thumbnail('full-width', array('class' => 'featured-img-width')); // Fullsize image for the single post ?>
                        </div>
                    </div>
                <?php endif; ?>
                    <!-- /post thumbnail -->

                    <div class="container-fluid">
                        <!-- post details -->
                        <span class="author"><?php _e('By', 'html5blank'); ?> <?php the_author_posts_link(); ?></span> |
                        <span class="date"><?php the_time('F j, Y'); ?></span>
                        <!-- post title -->
                        <div class="post-title">
                            <h1>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            </h1>
                        </div>
                        <!-- /post title -->
                        <!-- /post details -->
                        <?php the_content(); // Dynamic Content 
                        ?>
                        <?php the_tags(__('Tags: ', 'html5blank'), ', ', '<br>'); // Separated by commas with a line break at the end 
                        ?>
                        <p><?php _e('Categorised in: ', 'html5blank');
                            the_category(', '); // Separated by commas 
                            ?></p>
                    </article>
                    <!-- /article -->
                <?php endwhile; ?>

                <div class="container">
                    <div class="row d-flex justify-content-start px-5">
                        <?php
                        $recent_post = new WP_Query(array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'showposts' => 4,
                            'order' => 'DESC',       
                        ));
                        ?>
                       <?php while ($recent_post -> have_posts()) : $recent_post->the_post(); ?>
                            <div class="col-md-3 col-sm-5 d-flex flex-column justify-content-center my-3 px-5 card full-card">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'card-img-top')); ?>
                                <div class="card-body my-4">
                                <a class="card-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    <!-- <p class="card-text">This Pikachu is happy to see your face!</p> -->
                                </div>
                            </div>
                        <?php endwhile; ?>
                        
                        <!-- <div class="col-md-4 col-sm-5 d-flex flex-column justify-content-center mb-3 card">
                            <img src="https://i.guim.co.uk/img/media/c433a7fddb05056b8b345ce74e4116df18898735/0_269_1381_829/master/1381.jpg?width=620&quality=85&auto=format&fit=max&s=014e7ecc9c01bf0a8d3c95f955ec231d" class="img-fluid card-img-top" alt="Sleepy Snorlax">
                            <div class="card-body">
                                <h5 class="card-title">Sleepy Snorlax</h5>
                                <p class="card-text">Snorlax is taking a nice nap</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5 d-flex flex-column justify-content-center mb-3 card">
                            <img src="https://thespinoff.co.nz/wp-content/uploads/2019/06/40f.png" class="img-fluid card-img-top" alt="Pika What?!">
                            <div class="card-body">
                                <h5 class="card-title">Pika What?!</h5>
                                <p class="card-text">Pikachu saw what you did yesterday...</p>
                            </div>
                        </div> -->
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