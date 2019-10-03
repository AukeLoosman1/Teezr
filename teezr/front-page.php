<?php get_header(); ?>

<div id="content" class="site-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Widget area (makes body widget area)-->
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('body') ) : 	endif; ?>
				<!-- End Widget area -->
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>