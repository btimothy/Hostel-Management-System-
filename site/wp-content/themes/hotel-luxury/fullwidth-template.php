<?php
/**
 * Template Name: Full Width
 * @package Hotel_Luxury
 */

get_header();
?>

    <?php do_action('hotel_luxury_page_before_content'); ?>

	<div id="primary" class="content-area row">
		<div class="content-wrapper col-md-12">
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
