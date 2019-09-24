<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hotel_Luxury
 */

get_header(); ?>


    <div class="row">
        <div class="col-md-12">
            <div class="page-title-wrapper">
				<h1 class="page-title left "><?php the_archive_title(); ?></h1>
				<div class="clear"></div>
            </div>
        </div>
    </div>

    <div id="primary" class="content-area row">
        <div class="loop-posts col-md-8">
            <main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'list' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


            </main><!-- #main -->
        </div>

	    <?php get_sidebar() ; ?>

    </div><!-- #primary -->

<?php
get_footer();
