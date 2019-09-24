<?php
/**
 * Template part for displaying post list Layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hotel_Luxury
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( ' blog-post-item b30' ); ?>>

	<div class="post-heading">
		<?php the_title('<h2 class="blog-title">', '</h2>') ;?>
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

	<div class="blog-excerpt">
		<?php the_excerpt() ; ?>
	</div>

	<a class="blog-more" href="<?php the_permalink() ?>"><?php esc_attr_e('Read More', 'hotel-luxury') ?> <i class="fa fa-long-arrow-right"></i></a>
</article><!-- #post-## -->