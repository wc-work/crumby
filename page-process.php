<?php
/*
 * Template Name: Process Template
 * Template Post Type: page
 */
get_header();?>
<main class="process">
	<!-- Banner -->
	<section class="banner">
		<div class="title"><?php the_title();?></div>
		<div class="layer"></div>
		<img src="<?php echo get_the_post_thumbnail_url();?>">
	</section>
	<!-- end Banner -->
	<!-- Our Story -->
	<div class="container">
		<div class="d-flex flex-row flex-wrap">
			<?php
			// check if the repeater field has rows of data
			if( have_rows('flow_info') ):
				// loop through the rows of data
				while ( have_rows('flow_info') ) : the_row();
			?>
			<!--Loop starts here if you decide to use a loop and a repeater for the ACF-->
			<div class="flow_chart_row">
				<div class="text col-6 col-lg-10 m_auto">
					<h2><?php the_sub_field('title'); ?></h2>
					<div class="icon_circle hidden_md_down"><i class="<?php the_sub_field('fa_icon'); ?>"></i></div>
					<h3><?php the_sub_field('description'); ?></h3>
				</div>
				<div class="col-6 hidden_md">
					<div class="icon_circle"><i class="<?php the_sub_field('fa_icon'); ?>"></i></div>
				</div>
			</div>
			<!--Loop ends here   -->
			<?php
				endwhile;
			else :
				// no rows found
			endif;
			?>
	</div>
</main>

<?php get_footer(); ?>
