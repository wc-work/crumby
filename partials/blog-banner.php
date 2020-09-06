<div></div>
<div style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);">
    <div>
        <div> <?php the_title(); ?></div>
        <div><?php echo get_excerpt(140); ?></div>
    </div>
    <a href="<?php the_permalink();?>"><button type="button">Read More</button></a>
</div>