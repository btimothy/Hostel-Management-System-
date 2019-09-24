<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hotel_Luxury
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-heading">
        <div class="blog-meta">
			<?php hotel_luxury_posted_on(); ?>
        </div>
    </div>

	<?php if ( has_post_thumbnail() ) { ?>
        <div class="blog-thumb-wrapper">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( 'fashify-thumb-default' ); ?>
            </a>
        </div>
	<?php } ?>

    <div class="text-content">
        <?php the_content() ; ?>
    </div>

    <div class="entry-footer">
		<?php hotel_luxury_entry_footer() ; ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->
