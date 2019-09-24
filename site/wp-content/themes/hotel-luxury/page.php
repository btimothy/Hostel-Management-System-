<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hotel_Luxury
 */

get_header();

$page_layout = esc_attr( get_theme_mod('page_layout', 'right-sidebar') );
$col = ( $page_layout == 'no-sidebar' ) ? 12 : 8;
?>

   <?php do_action('hotel_luxury_page_before_content'); ?>

    <div id="primary" class="content-area row">

	    <?php if ( $page_layout != 'no-sidebar' && $page_layout == 'left-sidebar') { ?>
		    <?php get_sidebar() ; ?>
	    <?php } ?>


        <div class="content-wrapper col-md-<?php echo $col; ?>">
            <main id="main" class="site-main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>

            </main><!-- #main -->
        </div>

	    <?php if ( $page_layout != 'no-sidebar' && $page_layout == 'right-sidebar' ) { ?>
		<?php get_sidebar() ; ?>
        <?php } ?>

    </div><!-- #primary -->

<?php
get_footer();
