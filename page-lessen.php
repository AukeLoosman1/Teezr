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

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<script src="..\wp-content\themes\Teezr\assets\js\les.js">

		</script>
		<title></title>
	</head>
	<body>

		<div class="d-none d-xl-block container container--gallery ">
		  <div class="row">
		    <div class="col-sm-6">

						<?php
					    $the_query = new WP_Query( 'showposts=1&lesvandeweek' );
					    if($the_query->have_posts()) :
					        while ($the_query -> have_posts()) : $the_query -> the_post();?>
					          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-thumb', array('class' => 'photo-zoom-boss')); ?></a>
					  <?php endwhile;
					    endif;
					    /* Restore original Post Data */
					    wp_reset_postdata();?>

						<div class="centered"><h4 class="line">LES VAN DE WEEK</h4></div>

		    </div>

		    <div class="col-sm-3">

		      <a class="photo-zoom" href="saved_resource(3).jpg">
		        <img src="..\wp-content\themes\Teezr\assets\img\lessen\zelfregulering.jpg" alt="" />
						<div class="centered"><h4 class="line">ZELFREGULERING</h4></div>
		      </a>
		    </div>

		    <div class="col-sm-3">
		      <a class="photo-zoom" href="Moscow_003.jpg">
		        <img src="..\wp-content\themes\Teezr\assets\img\lessen\leren.jpg" alt="" />
						<div class="centered"><h4 class="line">LEREN</h4></div>
		      </a>
		    </div>

		    <div class="col-sm-3">
		      <a class="photo-zoom" href="Moscow_017.jpg">
		        <img src="..\wp-content\themes\Teezr\assets\img\lessen\communiceren.jpg" alt="" />
						<div class="centered"><h4 class="line">COMMUNICEREN</h4></div>
		      </a>
		    </div>

		    <div class="col-sm-3">
		      <a class="photo-zoom" href="Moscow_005.jpg">
		        <img src="..\wp-content\themes\Teezr\assets\img\lessen\sociaal-cultureel.jpg" alt="" />
						<div class="centered"><h4 class="line">SOCIAAL <br> CULTUREEL</h4></div>
		      </a>
		    </div>

		    <div class="col-sm-3">
		      <a class="photo-zoom" href="Moscow_010.jpg">
		        <img src="..\wp-content\themes\Teezr\assets\img\lessen\probleemoplossend.jpg" alt="" />
						<div class="centered"><h4 class="line">PROBLEEMOPLOSSEND</h4></div>
		      </a>
		    </div>

		    <div class="col-sm-3">
		      <a class="photo-zoom" href="Moscow_014.jpg">
		        <img src="..\wp-content\themes\Teezr\assets\img\lessen\creativiteit.jpg" alt="" />
						<div class="centered"><h4 class="line">CREATIVITEIT</h4></div>
		      </a>
		    </div>

		    <div class="col-sm-3">
		      <a class="photo-zoom" href="Moscow_012.jpg">
		        <img src="..\wp-content\themes\Teezr\assets\img\lessen\ondernemendheid.jpg" alt="" />
						<div class="centered"><h4 class="line">ONDERNEMENDHEID</h4></div>
		      </a>
		    </div>

		    <div class="col-sm-3">
		      <a class="photo-zoom" href="Moscow_008.jpg">
		        <img src="..\wp-content\themes\Teezr\assets\img\lessen\kritisch-denken.jpg" alt="" />
						<div class="centered"><h4 class="line">KRITISCH <br> DENKEN</h4></div>
		      </a>
		    </div>

				<div class="col-sm-3">
					<a class="photo-zoom" href="Moscow_008.jpg">
						<img src="..\wp-content\themes\Teezr\assets\img\lessen\mediawijsheid.jpg" alt="" />
						<div class="centered"><h4 class="line">MEDIAWIJSHEID</h4></div>
					</a>
				</div>

				<div class="col-sm-3">
					<a class="photo-zoom" href="Moscow_008.jpg">
						<img src="..\wp-content\themes\Teezr\assets\img\lessen\samenwerken.jpg" alt="" />
						<div class="centered"><h4 class="line">SAMENWERKEN</h4></div>
					</a>
				</div>


		  </div>
		</div>


<!-- MOBILE VIEW -->
		<div id="testmobile" class="d-block d-none d-sm-block d-md-block d-xl-none ">
		  <hr>
		    <div id="height" class="row">
					<?php
						$the_query = new WP_Query( 'showposts=1&lesvandeweek' );
						if($the_query->have_posts()) :
								while ($the_query -> have_posts()) : $the_query -> the_post();
								?>
		      <a id="centeredlvdw" style="color:black;" class="col-8" href="<?php the_permalink(); ?>">LES VAN DE WEEK</a>
			      <div id="meta" class="col-4">
							<div>

												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('lesvdwmobile', array('class' => 'photo-lesvdw'));?></a>
							 <?php endwhile;
									endif;

									/* Restore original Post Data */
									wp_reset_postdata();?>
							</div>
	 					</div>
				</div>

		  <hr>
			<div id="height" class="row">
				<div id="centered" class="col-8">ZELFREGULERING</div>
					<div id="meta" class="col-4">
						<div>
							<img class="photo" src="..\wp-content\themes\Teezr\assets\img\lessen\zelfregulering.jpg" alt="" />
						</div>
					</div>
			</div>
		  <hr>
			<div id="height" class="row">
				<div id="centered" class="col-8">LESSEN</div>
					<div id="meta" class="col-4">
						<div>
							<img class="photo" src="..\wp-content\themes\Teezr\assets\img\lessen\leren.jpg" alt="" />
						</div>
					</div>
			</div>
		  <hr>
			<div id="height" class="row">
				<div id="centered" class="col-8">COMMUNICEREN</div>
					<div id="meta" class="col-4">
						<div>
							<img class="photo" src="..\wp-content\themes\Teezr\assets\img\lessen\communiceren.jpg" alt="" />
						</div>
					</div>
			</div>
		  <hr>
			<div id="height" class="row">
				<div id="centered" class="col-8">SOCIAAL-CULTUREEL</div>
					<div id="meta" class="col-4">
						<div>
							<img class="photo" src="..\wp-content\themes\Teezr\assets\img\lessen\sociaal-cultureel.jpg" alt="" />
						</div>
					</div>
			</div>
		  <hr>
			<div id="height" class="row">
				<div id="centered" class="col-8">PROBLEEMOPLOSSEND</div>
					<div id="meta" class="col-4">
						<div>
							<img class="photo" src="..\wp-content\themes\Teezr\assets\img\lessen\probleemoplossend.jpg" alt="" />
						</div>
					</div>
			</div>
		  <hr>
			<div id="height" class="row">
			 <div id="centered" class="col-8">CREATIVITEIT</div>
				 <div id="meta" class="col-4">
					 <div>
						 <img class="photo" src="..\wp-content\themes\Teezr\assets\img\lessen\creativiteit.jpg" alt="" />
					 </div>
				 </div>
		 </div>
		  <hr>
			<div id="height" class="row">
			 <div id="centered" class="col-8">ONDERNEMENDHEID</div>
				 <div id="meta" class="col-4">
					 <div>
						 <img class="photo" src="..\wp-content\themes\Teezr\assets\img\lessen\ondernemendheid.jpg" alt="" />
					 </div>
				 </div>
		 </div>
		  <hr>
			<div id="height" class="row">
				<div id="centered" class="col-8">KRITISCH-DENKEN</div>
					<div id="meta" class="col-4">
						<div>
							<img class="photo" src="..\wp-content\themes\Teezr\assets\img\lessen\kritisch-denken.jpg" alt="" />
						</div>
					</div>
			</div>
		  <hr>
			<div id="height" class="row">
				<div id="centered" class="col-8">MEDIAWIJSHEID</div>
					<div id="meta" class="col-4">
						<div>
							<img class="photo" src="..\wp-content\themes\Teezr\assets\img\lessen\mediawijsheid.jpg" alt="" />
						</div>
					</div>
			</div>
		  <hr>
			<div id="height" class="row">
				<div id="centered" class="col-8">SAMENWERKEN</div>
					<div id="meta" class="col-4">
						<div>
							<img class="photo" src="..\wp-content\themes\Teezr\assets\img\lessen\samenwerken.jpg" alt="" />
						</div>
					</div>
			</div>
		  <hr>
		</div>
	</div>
	</body>
</html>




<?php get_footer(); ?>
