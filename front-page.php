<?php get_header(); ?>

<div id="content" class="site-content">
    <!-- Widget area (makes body widget area)-->
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('body') ) : 	endif; ?>
            <!-- End Widget area -->

<?php get_footer(); ?>