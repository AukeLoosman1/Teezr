<!doctype html>
<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

		<?php wp_head(); ?>

	</head>

	<body>

			<div class="text-center" id="sticky-nav">
				<img src="/teezr/wordpress/wp-content/themes/teezr/assets/img/teezr-logo.png"  id="teezr-logo">
					<nav class="navbar navbar-expand-lg navbar-light" style="top:-30px;" >
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav">
							<?php
								wp_nav_menu( array(
									'menu_class'      => 'navbar-nav ml-auto',
									'depth'           => 2,
									'walker'          => new WP_bootstrap_4_walker_nav_menu()
								) );
							?>
							</div>
						</div>
						<div>
							<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
						</div>
						<button class="position-absolute navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
					</nav>
			</div>
