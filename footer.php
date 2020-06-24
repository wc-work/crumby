<?php
/*
 * Template Name: Footer
 * Template Post Type: page
 */ 
?>

<footer class="footer">
	<div class="container-fluid blue">

		<div class="centered">
			<div class="footertext left left-copy"> 
				<a href="<?php echo get_page_link( get_page_by_path( 'terms-and-conditions' ) ); ?>">Terms and Conditions</a> 
				<br>
				<a href="<?php echo get_page_link( get_page_by_path( 'privacy-policy' ) ); ?>">Privacy Policy</a>
				<br>
				<div class="footertext left left-copy" id="copyright">	&copy; 
					<?php if(have_rows('copyright_test', 'option')):?>
						<?php while(have_rows('copyright_test', 'option')): the_row();?>
							<?php the_sub_field('copyright')?>
						<?php endwhile;?>	
					<?php endif;?>
				</div>
			</div>
		</div>

		<div class="col-xs col-lg-6 icon-alignment d-flex justify-content-around align-items-center">
			<?php if(have_rows('social_media_info', 'option')):?>
					<?php while(have_rows('social_media_info', 'option')): the_row();?>
						<a href="<?php the_sub_field('link');?>">
							<i class="<?php the_sub_field('fa_icon_footer');?> social-media"></i>
						</a>
					<?php endwhile;?>	
				<?php endif;?>
		</div>

		<div class="centered">
			<div class="footertext right right-copy">
				<?php if(have_rows('contact_info', 'option')):?>
					<?php while(have_rows('contact_info', 'option')): the_row();?>
						<?php the_sub_field('email')?>
						<br />
						<?php the_sub_field('street_address')?>
						<br />
						<?php the_sub_field('city_state_zip')?>
					<?php endwhile;?>	
				<?php endif;?>
			</div>
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