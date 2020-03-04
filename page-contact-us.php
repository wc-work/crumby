<?php
/*
 * Template Name: ContactPage
 * Template Post Type: page
 */
get_header(); ?>

<!--Contact Info Rows-->
<div class="container-fluid">
    <div class="row row1">

        <!-- icon-text-container is to help align the icons and text together -->
        <div class="icon-text-container col-xs col-lg-4">
            <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/location-solid.png" alt="An icon that symbolizes locations">
            <h2> 2721 Ventura St, Fresno, CA 93721 </h2>
        </div>


        <div class="icon-text-container col-xs col-lg-4">
            <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/email.png" alt="An icon that depicts an envelope">
            <h2> info.gkw.wp@gmail.com </h2>
        </div>



        <div class="icon-text-container col-xs col-lg-4">
            <img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/phone.png" alt="An icon that depicts a cellphone">
            <h2> ###-###-####</h2>
        </div>

        

        <!--<div class="icon-text-container col-xs col-12 text-center">
            <h2>Have ideas? Send them to Us!</h2>
            <button type="button" class="btn btn-primary btn-lg">Send Ideas</button>
        </div>-->

    </div> <!-- end row -->

    <div id ="center-form">
        <?php echo do_shortcode( '[contact-form-7 id="23" title="Contact form 1"]' ); ?>
    </div>
      
</div> <!-- end container -->
<?php get_footer(); ?>