<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "page" div.
 *
 * @package WordPress
 * @subpackage SketchThemes
 * @since Lovebond Lite 1.0.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!--[if IE 9]>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="index"></div>
	<div class='thetop'></div>
	<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->

	
	<!-- BEGIN: HEADER -->
	<?php
	/*
	<header<?php if( !is_front_page() ) { ?> id="sktwed-blogpage" <?php } ?>>
	*/
	?>
	<header>
			<!-- BEGIN: MENU BUTTON -->
			<a class="main_menu_btn">
				<span class="line line1"></span>
				<span class="line line2"></span>
				<span class="line line3"></span>
			</a>		
			
			<!-- BEGIN: SUBMENU -->
			<div class="main_menu_block">
				<div class="menu_wrapper">
						<?php if ( has_nav_menu('Header') ) {
							wp_nav_menu(array( 'container_class' => 'sub_menu anim', 'menu_id' => 'menu', 'menu_class' => 'max-menu', 'theme_location' => 'Header' ));
						} else { ?>
						<div class="sub_menu anim">
							<ul id="menu" class="max-menu">
								<?php wp_list_pages('title_li'); ?>
							</ul>
						</div>
						<?php } ?>
					<div class="sub_img anim"></div>
				</div>
			</div>
			<!-- END: SUBMENU -->

			<!-- BEGIN: LOGO -->
			<div class="logo-wrap">
				<div class="row">

				</div>
			</div>
			<!-- END: LOGO -->
	</header>
	<!-- END: HEADER -->

	<!-- END: LAYOUT/HEADERS/HEADER-1 -->

	


	<!-- END: HEADER -->




	
<div class="page content-pages">

	