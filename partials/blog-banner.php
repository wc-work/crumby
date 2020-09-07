<div class="post-wrapper">
    <div class="post-info" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);"></div>
        <div class="post">
            <div class="post-date"> <?php the_date(); ?></div>
            <h3> <?php the_title(); ?></h3>
            <h3 class="byline">By <?php the_author(); ?></h3>
            <div class="post-excerpt"><?php echo get_excerpt(140); ?></div>
            <a href="<?php the_permalink();?>"><button class="btn" type="button">Read More</button></a>
        </div>

    </div>

</div>