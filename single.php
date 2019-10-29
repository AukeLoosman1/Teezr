<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<?php
				the_post_navigation(array(
					'prev_text' => esc_html__( '&laquo; Vorige post', 'teezr' ),
				) );
				
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_type() );

				endwhile; // End of the loop.
			?>
		</div>
	</div>	
</div>


<?php get_footer(); ?>