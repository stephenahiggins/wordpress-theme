<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >

        <link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>

	<body <?php body_class(); ?>>

		<?php
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		}
		?>

		<a class="skip-link button" href="#site-content"><?php _e( 'Skip to the content', 'hamilton' ); ?></a>

        <header class="site-header" >
			<div class="section-inner">
				<div class="header-intro-wrapper">
					<div class="header-intro-wrapper-left">
						<a href="<?php echo esc_url( home_url() ); ?>" class="header-headshot">
							<img src="<?php bloginfo('stylesheet_directory')?>/assets/img/headshot_circle.png" />
						</a>
					</div>
					<?php
						$site_title_elem 	= is_front_page() || ( is_home() && get_option( 'show_on_front' ) == 'posts' ) ? 'h1' : 'div';
						$site_title 		= get_bloginfo( 'name' );
						$blog_description 	= get_option('blogdescription');
					?>
					<div class="header-intro-wrapper-right">
						<div class="header-intro-wrapper-right-top-row">
							<<?php echo $site_title_elem; ?> class="site-title">
								<a href="<?php echo esc_url( home_url() ); ?>" class="site-name"><?php echo $site_title; ?></a>
							</<?php echo $site_title_elem; ?>>
						</div>
						<div class="header-intro-wrapper-right-bottom-row">
							<span id="site-header-intro-text"><?php echo($blog_description); ?></span>
						</div>
					</div>
					<div class="nav-toggle-container">
						<button class="nav-toggle">
							<span class="screen-reader-text"><?php _e( 'Toggle menu'); ?></span>
							<div class="bars">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</button><!-- .nav-toggle -->
						<div class="header-pointer-wrapper">
							<svg id="header-pointer-arrow" viewBox="0 0 126 80" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M41.206 67.4892C52.0985 65.6447 62.5817 61.5019 71.8579 55.6639C81.1338 49.726 89.4026 42.0922 95.8662 33.1657C99.0482 28.7526 101.829 24.0412 104.109 19.1319C103.111 19.736 102.113 20.24 101.116 20.8441C97.8233 22.6576 94.4311 24.5715 91.1385 26.3849C90.1405 26.889 87.1348 25.5013 88.5316 24.6956C91.7242 22.8825 95.0168 21.069 98.2094 19.256C99.8057 18.3495 101.402 17.4429 102.999 16.6364C104.495 15.8303 106.193 15.1233 107.287 13.8189C107.984 13.016 110.688 13.905 110.492 15.0058C109.024 22.9118 107.957 30.8163 107.189 38.8195C107.094 39.9199 103.691 39.1338 103.885 37.833C104.367 33.3309 104.849 28.8289 105.53 24.3261C101.363 32.2432 95.892 39.4656 89.5173 45.6917C81.5493 53.5243 71.9751 59.8635 61.6927 64.2055C55.8026 66.6296 49.71 68.4545 43.4145 69.5802C42.615 69.6835 41.6142 69.4876 41.1117 68.8896C40.4088 68.1925 40.5068 67.6921 41.206 67.4892Z"/>
							</svg>
							<div id="header-pointer-wrapper-text">
								More stuff
							</div>
						</div>
					</div>
					<div class="alt-nav-wrapper">
						<ul class="alt-nav">
							<?php
							if ( has_nav_menu( 'primary-menu' ) ) :
								wp_nav_menu( array(
									'container' 		=> '',
									'items_wrap' 		=> '%3$s',
									'theme_location' 	=> 'primary-menu',
								) );
							else :
								wp_list_pages( array(
									'container' => '',
									'title_li' 	=> ''
								) );
							endif;
							?>
						</ul><!-- .alt-nav -->
					</div><!-- .alt-nav-wrapper -->
				</div>
			</div>
        </header><!-- header -->
		<div id="nav-container">
			<div id="nav-wrapper">
				<div class="site-nav">
					<?php
						if ( has_nav_menu( 'primary-menu' ) ) :
							wp_nav_menu( array(
								'container' 		=> '',
								'theme_location' 	=> 'primary-menu'
								) );
								else : ?>
							<div class="menu-wrapper">
								<ul>
									<?php
										wp_list_pages( array(
											'container' => '',
											'title_li' 	=> ''
										) );
									?>
								</ul>
							</div>
							<?php
						endif;

						if ( has_nav_menu( 'secondary-menu' ) ) {
							wp_nav_menu( array(
								'container' 		=> '',
								'theme_location' 	=> 'secondary-menu'
							) );
						}
					?>
				</div><!-- .site-nav -->
			</div> <!--#nav-wrapper-->
		</div> <!--#nav-container-->
		<main id="site-content">
