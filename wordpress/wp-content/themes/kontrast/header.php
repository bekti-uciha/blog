<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">

	<header id="header">
		
		<?php if ( has_nav_menu('mobile') ): ?>
			<nav class="nav-container group" id="nav-mobile">
				<div class="nav-toggle"><i class="fa fa-bars"></i></div>
				<div class="nav-text"><!-- put your mobile menu text here --></div>
				<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'mobile','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
				
				<?php if ( get_theme_mod( 'header-search', 'on' ) == 'on' ): ?>
					<div class="container">
						<div class="container-inner">		
							<div class="toggle-search"><i class="fa fa-search"></i></div>
							<div class="search-expand">
								<div class="search-expand-inner">
									<?php get_search_form(); ?>
								</div>
							</div>
						</div><!--/.container-inner-->
					</div><!--/.container-->
				<?php endif; ?>
				
			</nav><!--/#nav-mobile-->
		<?php endif; ?>
		
		<?php if ( has_nav_menu('topbar') ): ?>
			<nav class="nav-container group" id="nav-topbar">
				<div class="nav-toggle"><i class="fa fa-bars"></i></div>
				<div class="nav-text"><!-- put your mobile menu text here --></div>
				<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'topbar','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
				
				<?php if ( get_theme_mod( 'header-search', 'on' ) == 'on' ): ?>
					<div class="container">
						<div class="container-inner">		
							<div class="toggle-search"><i class="fa fa-search"></i></div>
							<div class="search-expand">
								<div class="search-expand-inner">
									<?php get_search_form(); ?>
								</div>
							</div>
						</div><!--/.container-inner-->
					</div><!--/.container-->
				<?php endif; ?>
				
			</nav><!--/#nav-topbar-->
		<?php endif; ?>
		
		<?php if ( get_theme_mod('header-ads','off') == 'on' ): ?>
			<div class="container" id="header-ads">
				<div class="container-inner">
					<?php dynamic_sidebar( 'header-ads' ); ?>
				</div><!--/.container-inner-->
			</div><!--/.container-->
		<?php endif; ?>
		
		<div class="container-inner group">
			
			<?php if ( get_header_image() == '' ) : ?>
				<div class="group pad">
					<?php echo kontrast_site_title(); ?>
					<?php if ( display_header_text() == true ): ?>
						<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'header-social', 'on' ) == 'on' ): ?>
						<?php kontrast_social_links() ; ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
			<?php if ( get_header_image() ) : ?>
				<div class="site-header">
					<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
						<img class="site-image" src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div>
			<?php endif; ?>

			<?php if ( has_nav_menu('header') ): ?>
				<nav class="nav-container group" id="nav-header">
					<div class="nav-toggle"><i class="fa fa-bars"></i></div>
					<div class="nav-text"><!-- put your mobile menu text here --></div>
					<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'header','menu_class'=>'nav group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
				</nav><!--/#nav-header-->
			<?php endif; ?>
			
			<?php if ( has_nav_menu('subheader') ): ?>
				<nav class="nav-container group" id="nav-subheader">
					<div class="nav-toggle"><i class="fa fa-bars"></i></div>
					<div class="nav-text"><!-- put your mobile menu text here --></div>
					<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'subheader','menu_class'=>'nav group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
				</nav><!--/#nav-subheader-->
			<?php endif; ?>
			
		</div><!--/.container-->
		
	</header><!--/#header-->
	
	<div class="container" id="page">
		<div class="container-inner">			
			<div class="main">
				<div class="main-inner group">