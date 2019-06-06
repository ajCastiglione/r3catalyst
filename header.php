<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">

	<?php // force Internet Explorer to use the latest rendering engine available ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>
		<?php wp_title(''); ?>
	</title>

	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url(); ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url(); ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url(); ?>/favicon-16x16.png">
		<link rel="manifest" href="<?php echo site_url(); ?>/site.webmanifest">
		<link rel="mask-icon" href="<?php echo site_url(); ?>/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!--external stylesheets / fonts / etc...-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
			crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">

	<?php // wordpress head functions ?>
	<?php wp_head(); ?>
	<?php // end of wordpress head ?>

	<?php // drop Google Analytics Here ?>
	<?php // end analytics ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

	<div id="container">

		<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

			<div id="inner-header" class="large-wrapper cf">

				<div class="header-left">
					<a href="<?php echo home_url(); ?>" rel="nofollow">
						<img src="<?php if(is_page(2) || is_page(13) || is_home()) : echo get_template_directory_uri().'/library/images/logo.png'; else : echo get_template_directory_uri().'/library/images/logo_internal.png'; endif; ?>" id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
					</a>
				</div>

				<div class="header-right">
					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
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
									'fallback_cb' => 'bones_main_nav_fallback'      // fallback function (if there is one)
							)); ?>
					</nav>
				</div>

			</div>

			<?php if(is_page(2)) : get_template_part('partials/header', 'home'); endif; ?>
			<?php if(is_page(13)) : get_template_part('partials/header', 'about'); endif; ?>
			<?php if(is_home()) : get_template_part('partials/header', 'blog'); endif; ?>

		</header>