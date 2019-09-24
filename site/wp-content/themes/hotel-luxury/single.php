<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hotel_Luxury
 */

get_header();

$post_layout = esc_attr( get_theme_mod('post_layout', 'right-sidebar') );
$col = ( $post_layout == 'no-sidebar' ) ? 12 : 8;
?>

    <?php do_action('hotel_luxury_page_before_content'); ?>

    <div id="primary" class="content-area row">

	    <?php
	    if ( $post_layout != 'no-sidebar' && $post_layout == 'left-sidebar' ) {
		    get_sidebar();
	    }
	    ?>


        <div class="content-wrapper col-md-<?php echo $col ?>">
            <main id="main" class="site-main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', get_post_type() );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
            </main><!-- #main -->
        </div>

	    <?php
        if ( $post_layout != 'no-sidebar' && $post_layout == 'right-sidebar' ) {
	        get_sidebar();
        }
        ?>

    </div><!-- #primary -->
<?php

get_footer();
