<?php
/**
 * Template Name: Left Sidebar
 * @package Hotel_Luxury
 */

get_header();
?>

<?php do_action('hotel_luxury_page_before_content'); ?>

	<div id="primary" class="content-area row">

		<?php get_sidebar() ; ?>

		<div class="content-wrapper col-md-8">
			<main id="main" class="site-main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div>

	</div><!-- #primary -->

<?php
get_footer();
