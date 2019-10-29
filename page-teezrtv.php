<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

	<div class="container">
		<h5><strong>DE NIEUWSTE </strong>VIDEO'S</h5>
		<?php echo do_shortcode("[pt_view id=911c2b1b92]"); ?>
	</div>
<hr>
	<div class="container">
		<h5><strong>NEEM </strong>HIER EVEN DE TIJD VOOR</h5>
		<?php echo do_shortcode("[pt_view id=457ca39mcv]"); ?>
	</div>
<hr>
	<div class="container">
		<h5><strong>VLOGS</strong></h5>
		<?php echo do_shortcode("[pt_view id=2b0bd3fdex]"); ?>
	</div>

<?php get_footer(); ?>
