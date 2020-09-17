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

            <div class="icon-text-container col-xs col-xl-12 d-flex justify-content-between ">
                <a href="tel:14153102317"><img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/phone.png" alt="An icon that depicts a cellphone"></a>
                <div class="d-flex w-100 justify-content-center">
                    <a  href="tel:14153102317"><h2 class="contact-number">(415)310-2317</h2></a>
                </div>
            </div>

            <div class="icon-text-container d-flex col-xs col-xl-12 justify-content-between">
                <a href="mailto:fmunoz@geekwiseacademy.com?Subject=Howdy!"> <img class="icons " src="<?php bloginfo('template_url'); ?>/img/icons/email.png" alt="An icon that depicts an envelope"></a>
                <div class="d-flex w-100 justify-content-center">
                    <a href="mailto:fmunoz@geekwiseacademy.com?Subject=Howdy!">
                        <h2 class="contact-email">fmunoz@geekwiseacademy.com</h2>
                    </a>
                </div>
                
            </div>

            <div class="icon-text-container d-flex col-xs col-xl-12">
                <a href="https://goo.gl/maps/9A9otZuTM4n55z1GA" target="_blank"><img class="icons" src="<?php bloginfo('template_url'); ?>/img/icons/location-solid.png" alt="An icon that symbolizes locations"></a>
                <a href="https://goo.gl/maps/9A9otZuTM4n55z1GA" class=" w-100" target="_blank">
                    <h2 class="addy"> 
                        <p>
                        WebCrumbs
                        <p>
                        2721 Ventura St., Suite 201
                        <p> 
                        Fresno, CA 93721 
                    </h2>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.4569156451403!2d-119.78040578442447!3d36.73560227903237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80945fb2c7d60e87%3A0x9b82a7350ac60ce0!2sBitwise%20%7C%2041!5e0!3m2!1sen!2sus!4v1585174116672!5m2!1sen!2sus" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </a>
            </div>

        </div> <!-- end row -->

        <div class="form-wrapper col-sm-6 form">
            <div class ="center-form">
                 <?php echo do_shortcode( '[contact-form-7 id="23" title="Contact form 1"]' ); ?>
            </div>
        </div>
     
    </div> <!-- end container -->
    
</div>
<?php get_footer(); ?>