<?php
/*
 * Template Name: ContactPage
 * Template Post Type: page
 */
get_header(); ?>

<!--Contact Info Rows-->
<div class="contact-page">
<h1 class="contact-title">Contact Us!</h1>
<div class="container-fluid contact-us">
    <div class="row row1">

        <!-- icon-text-container is to help align the icons and text together -->
        <div class="icon-text-container col-xs col-xl-12">
            <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/location-solid.png" alt="An icon that symbolizes locations">
            <h2><?php the_field('locaction_info'); ?> </h2>
        </div>

        <div class="icon-text-container col-xs col-xl-12">
            <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/email.png" alt="An icon that depicts an envelope">
            <h2> <?php the_field('email_info'); ?> </h2>
        </div>

        <div class="icon-text-container col-xs col-xl-12">
            <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/phone.png" alt="An icon that depicts a cellphone">
            <h2><?php the_field('phone_info'); ?></h2>
        </div>

    </div> <!-- end row -->

<div class="form-wrapper">
    <div class ="center-form">
        <?php echo do_shortcode( '[contact-form-7 id="23" title="Contact form 1"]' ); ?>
    </div>
</div>
     
</div> <!-- end container -->
</div>
<?php get_footer(); ?>