<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // https://realfavicongenerator.net) ?>
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon-32x32.png?v=2">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon-16x16.png?v=2">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/site.webmanifest">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/safari-pinned-tab.svg" color="#fd002d">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicons/favicon.ico">
		<meta name="msapplication-TileColor" content="#fd002d">
		<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/library/images/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">


		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>

		<!-- ￼Fontawesome Script Here -->
		<script src="https://kit.fontawesome.com/56a7cebe29.js" crossorigin="anonymous"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->


	</head>
	<body <?php if(is_page(125)) { body_class('contact-us-page');}
		else { body_class(); } ?> itemscope itemtype="http://schema.org/WebPage"> 

	<!-- <a class="linked-in" href="http://www.linkedin.com" target="_blank"><img width="91" height="47" src="<?php //echo get_template_directory_uri(); ?>/library/images/linked-in.png" /></a> -->

			<header
			<?php if(get_field('add_hero_fphero')) : ?>
				class="header hero-header"
			<?php else: ?>
				class="header"
			<?php endif; ?>
			role="banner" itemscope itemtype="http://schema.org/WPHeader">

					
					<a class="logo" id="logo" href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a>


							<p class="top-phone"><a href="tel:<?php the_field('footer_address_phone', 'option'); ?>"><?php the_field('footer_address_phone','option'); ?></a></p>

					


					<nav class="main-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
						)); ?>

					</nav>

					<a class="twentyfive-years" href="<?php //Field from options will use this ?>"><!-- ￼<img src="<?php //echo get_template_directory_uri(); ?>/library/images/25yearsLogo.png" alt="Arrow Components has been operating for 25 years."> -->
					<?php echo file_get_contents( get_template_directory_uri() . '/library/images/svg/25years.svg'); ?>
					</a>

			</header>

			<?php if (get_field('add_hero_fphero')): ?>
				<div class="hero-container">
					<?php get_template_part('/library/content-modules/hero/largeWithButton/hero','largeWithButton'); ?>
				</div>
			<?php else: ?>

			<?php endif; ?>
