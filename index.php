<?php get_header(); ?>

<div class="section-inner">
	<div class="intro-text">
		<p>I lead teams to solve data problems.</p>
		<p>I have 10 years experience building data products both as a founder and product leader. <br />As you can see from my work, I love a side project and a challenge!</p>
		<p>Some of the organisations I've worked with...</p>
		<div class="intro-text-logo-wrapper">
			<img class="intro-text-logo" id="logo-nhs" src="<?php bloginfo('stylesheet_directory')?>/assets/img/nhs-logo.png" />
			<img class="intro-text-logo" id="logo-dfe" src="<?php bloginfo('stylesheet_directory')?>/assets/img/dfe-logo.png" />
			<img class="intro-text-logo" id="logo-arbor" src="<?php bloginfo('stylesheet_directory')?>/assets/img/arbor-logo.png" />
		</div>
		<div class="intro-text-logo-wrapper">
			<img class="intro-text-logo" id="logo-matillion" src="<?php bloginfo('stylesheet_directory')?>/assets/img/matillion-logo.png" />
			<img class="intro-text-logo" id="logo-street-score" src="<?php bloginfo('stylesheet_directory')?>/assets/img/street-score-logo.png" />
			<img class="intro-text-logo" id="logo-medicus" src="<?php bloginfo('stylesheet_directory')?>/assets/img/medicus-logo.png" />
			<img class="intro-text-logo" id="logo-aire-logic" src="<?php bloginfo('stylesheet_directory')?>/assets/img/aire-logic-logo.png" />
		</div>
		<?php if ( have_posts() ) : ?>
			<h3>Selected projects</h3>
		<?php endif; ?>
	</div>
	<?php

	$archive_title_elem 	= is_front_page() || ( is_home() && get_option( 'show_on_front' ) == 'posts' ) ? 'h2' : 'h2';
	$archive_title 			= get_the_archive_title();
	$archive_description 	= get_the_archive_description();

	if ( $archive_title || $archive_description ) : ?>

		<header class="page-header fade-block">
			<div>

				<?php if ( $archive_title ) : ?>
					<<?php echo $archive_title_elem; ?> class="title"><?php echo wp_kses_post( $archive_title ); ?></<?php echo $archive_title_elem; ?>>
				<?php endif; ?>

				<?php if ( $archive_description ) : ?>
					<div class="archive-description"><?php echo wpautop( $archive_description ); ?></div>
				<?php endif; ?>

				<?php if ( is_search() && ! have_posts() ) get_search_form(); ?>

			</div>
		</header><!-- .page-header -->

	<?php endif; ?>
	<div class="posts-wrapper">
		<?php if ( have_posts() ) : ?>

			<div class="posts" id="posts">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'content' );

				endwhile;
				?>

			</div><!-- .posts -->

		<?php endif; ?>
		<div class="contact-section">
			<h2>Contact Me</h2>
			<div class="contact-icons">
				<a href="mailto:stephenahiggins@icloud.com" class="contact-icon">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<span>Email</span>
				</a>
				<a href="https://twitter.com/ste_higgins_" class="contact-icon">
					<i class="fa-brands fa-twitter" aria-hidden="true"></i>
					<span>Twitter</span>
				</a>
				<a href="https://www.linkedin.com/in/stephen-higgins-0b4a19b0/" class="contact-icon">
					<i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
					<span>LinkedIn</span>
				</a>
				<a href="https://github.com/stephenahiggins" class="contact-icon">
					<i class="fa-brands fa-github" aria-hidden="true"></i>
					<span>GitHub</span>
				</a>
			</div>
		</div>
	</div>
</div><!-- .section-inner -->

<?php

get_template_part( 'pagination' );

get_footer(); ?>
