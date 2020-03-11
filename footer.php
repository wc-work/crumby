<?php
/*
 * Template Name: Footer
 * Template Post Type: page
 */ 
?>

<footer class="footer">
	<div class="container-fluid blue">
		<div class="row col-lg-3">
			<div class="col-xs col-md centered">
				<p class="footertext ml-5" id="copyright">	&copy; 
				<?php if(have_rows('copyright_test', 'option')):?>
					<?php while(have_rows('copyright_test', 'option')): the_row();?>
					<?php the_sub_field('copyright')?>
						
					<?php endwhile;?>	
				<?php endif;?>
				</p>
			</div>
		</div>

		<div class="col-xs col-lg-6 icon-alignment d-flex justify-content-around">
			<?php if(have_rows('social_media_info', 'option')):?>
					<?php while(have_rows('social_media_info', 'option')): the_row();?>
						<a href="<?php the_sub_field('link')?>"><img src="<?php the_sub_field('icon')?>"></a>
						
					<?php endwhile;?>	
				<?php endif;?>
				<!-- <div class="col-xs centered d-flex justify-content-around"> -->
					<a href="https://www.instagram.com/webcrumbs.dev/?hl=en"  class="social-media">
						<i class="fab fa-instagram fa-3x social-media" id="insta"></i> 
					</a>
					<a href="https://www.facebook.com/WebCrumbs.dev/" class="social-media">
						<i class="fab fa-facebook fa-3x social-media"></i>
					</a>
					<a href="https://twitter.com/WebCrumbsDev" class="social-media">
						<i class="fab fa-twitter fa-3x social-media"></i>
					</a>
					<a href="https://www.linkedin.com/" class="social-media">
						<i class="fab fa-linkedin fa-3x social-media"></i>
					</a>
				<!-- </div> -->
		</div>

		<div class="col-xs centered col-lg-3">
		<p class="footertext">
			<?php if(have_rows('contact_info', 'option')):?>
				<?php while(have_rows('contact_info', 'option')): the_row();?>
					<?php the_sub_field('email')?>
					<br />
					<?php the_sub_field('street_address')?>
					<br />
					<?php the_sub_field('city_state_zip')?>
				<?php endwhile;?>	
			<?php endif;?>
			</p>
		</div>
	</div>
</footer>
	
		<!-- /wrapper -->

		<?php wp_footer(); ?>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>


