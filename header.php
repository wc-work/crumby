<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
			// conditionizr.com
			// configure environment tests
			conditionizr.config({
					assets: '<?php echo get_template_directory_uri(); ?>',
					tests: {}
			});
		</script>
		<script src="https://kit.fontawesome.com/92ab37b888.js" crossorigin="anonymous"></script>

	</head>
	<body <?php body_class(); ?>>
	
	<nav class="navbar navbar-expand-md navbar-light fixed-top" role="navigation">
    <div class="container-fluid" id="nav-icon">
    	<!-- Brand and toggle get grouped for better mobile display -->
			<div class="col-6">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
					<span> 
						<img src="<?php echo get_template_directory_uri(); ?>/img/iconfinder-icon.svg" alt="hamburger menu icon" id="hamburger"> 
					</span>	
				</button>
				<a href="http://wc.v3/">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/wc-site-logo.png" alt="Webcrumbs with digital crumbs on the bottom of the word 'crumbs'">
				</a>
			</div>

			<div class="col-6 d-lg-none d-md-none d-xl-none" id="flex-mlogo">
        <a href="#">		
					<a href="http://wc.v3/">
						<img class="mobile-logo" id="flex-logo" src="<?php echo get_template_directory_uri(); ?>/img/main-bug.png" alt="Webcrumbs alt logo. Digital bread with WC abbreviation in the middle.">
					</a>
        </a>
			</div>

      <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
      ?>
    </div>
	</nav>
</header>
<!-- /header -->
