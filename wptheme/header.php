<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://gmpg.org/xfn/11">   
		<title>
			<?php bloginfo('name') ?>
			<?php if ( is_404() ) : ?> &raquo; 
				<?php _e('Not Found') ?>
			<?php elseif ( is_home() ) : ?> &raquo; 
				<?php bloginfo('name') ?>
			<?php else : ?>
				<?php wp_title() ?>
			<?php endif ?>
		</title>   
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> 
		<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" /> 
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
		<?php wp_head(); ?>
		<?php wp_get_archives('type=monthly&format=link'); ?> 
	</head> 

	<body id="page-top">
		<!-- Navigation-->
		<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
				<div class="container">
						<a class="navbar-brand js-scroll-trigger" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
						<button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
							Menu <i class="fas fa-bars"></i>
						</button>
	      				<?php 
							wp_nav_menu(array(
								'menu' => 'top-menu',
								'theme_location' => 'primary',
								'container' => 'div',
								'container_class' => 'navbar-collapse collapse',
								'container_id' => 'navbarResponsive',
								'menu_class' => 'navbar-nav ml-auto'
							));
						?>
				</div>
		</nav>