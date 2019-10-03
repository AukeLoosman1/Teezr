<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>

	</head>

	<body>
	
		<header>
			<nav class="main-navigation navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="site-branding-text text-white">
					(Logo)
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu-wrap" aria-controls="primary-menu-wrap" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-1',
						'container_class' => 'collapse navbar-collapse',
						'menu_class'      => 'navbar-nav ml-auto',
						'depth'           => 2,
						'walker'          => new WP_bootstrap_4_walker_nav_menu()
					) );
				?>
			</nav>
		</header>