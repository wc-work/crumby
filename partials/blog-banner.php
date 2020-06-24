<div class="layer"></div>
<div class="blog-img layout mb-3" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);">
    <div class="wrapper">
        <div class="blog-title"> <?php the_title(); ?></div>
        <div class="excerpt"><?php echo get_excerpt(140); ?></div>
    </div>
    <a href="<?php the_permalink();?>"><button type="button" class="btn btn-lg blog-button">Read More</button></a>
</div>