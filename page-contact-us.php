<?php
/*
 * Template Name: ContactPage
 * Template Post Type: page
 */
get_header(); ?>

<!--Contact Info Rows-->
<div class="contact-page">
    <h1 class="contact-title"> Contact Us!</h1>
    <div class="container-fluid contact-us row">
        <div class="row icon-wrapper col-sm-6">
        <!-- icon-text-container is to help align the icons and text together -->
            <div class="icon-text-container col-xs col-xl-12">
                <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/location-solid.png" alt="An icon that symbolizes locations">
                <h2> 2721 Ventura St, Fresno, CA 93721 </h2>
            </div>

            <div class="icon-text-container col-xs col-xl-12">
                <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/email.png" alt="An icon that depicts an envelope">
                <h2> info.gkw.wp@gmail.com </h2>
            </div>

            <div class="icon-text-container col-xs col-xl-12">
                <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/phone.png" alt="An icon that depicts a cellphone">
                <h2> 559-906-8945</h2>
            </div>

        </div> <!-- end row -->

        <div class="form-wrapper col-sm-6">
            <div class ="center-form">
                 <?php echo do_shortcode( '[contact-form-7 id="23" title="Contact form 1"]' ); ?>
            </div>
        </div>
     
    </div> <!-- end container -->
    
</div>
<?php get_footer(); ?>