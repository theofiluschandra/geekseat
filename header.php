<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Personal_Site
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
	<script src="https://unpkg.com/feather-icons"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'personal-site'); ?></a>

		<header id="masthead" class="site-header">
			<div class="section-fixed-header position-fixed">
				<div class="row-wrapper d-grid w-90 mg-side-auto align-items-center">

					<div class="column-wrapper col-1">
						<div class="content-wrapper desktop-view">

							<div class="site-title-wrapper position-relative d-flex align-items-center">
								<div class="box-blue"></div>
								<h1 class="site-title">
									<a href="<?php echo get_home_url(); ?>">
										Theofilus Chandra <span class="symbols">/ </span><span class="jobs">Web Developer</span>
									</a>
								</h1>
							</div>
						</div>
					</div>
					<div class="column-wrapper col-2 hidden-responsive">
						<div class="content-wrapper d-grid">
							<div class="main-menu-wrapper">
								<a class="menu-item menu-project" href="<?php echo get_home_url(); ?>/project">Projects</a>
								<a class="menu-item menu-about" href="<?php echo get_home_url(); ?>/resume">About Me</a>
								<a class="menu-item menu-contact" href="<?php echo get_home_url(); ?>/contact">Contact</a>
								<a class="menu-item menu-blog" href="<?php echo get_home_url(); ?>/blog">Blog</a>
							</div>
						</div>
					</div>

					<div class="nav-burger-wrapper responsive">
						<!-- <i data-feather="menu" class="icon-nav-mobile"></i> -->
						<span class="mobilebar1 mobilebar"></span>
						<span class="mobilebar2 mobilebar"></span>
					</div>
					<div class="mobile-sidebar responsive z-9999">
						<div class="sidebar-content bg-white d-grid">
							<div class="site-title-wrapper position-relative d-flex align-items-center">
								<div class="box-blue"></div>
								<h1 class="site-title">Theofilus Chandra <br><span class="jobs">Web Developer</span></h1>
							</div>
							<div class="main-menu-wrapper d-grid">
								<a href="<?php echo get_home_url(); ?>/project">Projects</a>
								<a href="<?php echo get_home_url(); ?>/resume">About Me</a>
								<a href="<?php echo get_home_url(); ?>/contact">Contact</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->