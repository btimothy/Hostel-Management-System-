<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Hotel_Luxury
 */

if ( ! function_exists( 'hotel_luxury_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function hotel_luxury_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'hotel-luxury' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'hotel-luxury' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="blog-date"><i class="fa fa-clock-o"></i> ' . $posted_on . '</span><span class="blog-author"><i class="fa fa-user"></i> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'hotel_luxury_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function hotel_luxury_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'hotel-luxury' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Categories %1$s', 'hotel-luxury' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'hotel-luxury' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'hotel-luxury' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'hotel-luxury' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

	}
endif;


function  hotel_luxury_get_taxonomy( $taxonomy) {
	$tags = array();
	$gallery_tags = get_terms( $taxonomy, array(
		'hide_empty' => false
	) );
	if ( ! empty( $gallery_tags ) && ! is_wp_error( $gallery_tags ) ){
		foreach ( $gallery_tags as $tag ) {
			$tags[$tag->term_id] = $tag->name;
		}
	}
	return $tags;
}


if ( ! function_exists( 'hotel_luxury_get_gallery_data' ) ) {
	function hotel_luxury_get_gallery_data( $page_id ) {
		$post_id = $page_id;
		$data = array();

		if ( $post_id ) {
			$gallery = get_post_gallery( $post_id , false );
			if ( $gallery ) {
				$images = $gallery['ids'];
			}
		}

		$size = 'hotel_luxury_medium';
		$image_thumb_size = apply_filters( 'hotel_luxury_gallery_page_img_size', $size );
		if ( ! empty( $images ) ) {
			$images = explode( ',', $images );
			foreach ( $images as $post_id ) {
				$post = get_post( $post_id );
				if ( $post ) {
					$img_thumb = wp_get_attachment_image_src($post_id, $image_thumb_size );
					if ($img_thumb) {
						$img_thumb = $img_thumb[0];
					}
					$img_full = wp_get_attachment_image_src( $post_id, 'full' );
					if ($img_full) {
						$img_full = $img_full[0];
					}
					if ( $img_thumb && $img_full ) {
						$data[] = array(
							'id'        => $post_id,
							'thumbnail' => $img_thumb,
							'full'      => $img_full,
							'title'     => $post->post_title,
							'content'   => $post->post_content,
						);
					}
				}
			}
		}

		return $data;
	}
}


/**
 * Custom styling
 *
 * @return string
 */
function hotel_luxury_custom_style(){
	$css = '';
	$primary_color = esc_attr( get_theme_mod( 'primary_color', 'bca474' ) );
	$footer_bg_color = esc_attr( get_theme_mod( 'footer_bg_color', '202020' ) );
	$footer_text_color = esc_attr( get_theme_mod( 'footer_text_color', '666' ) );

	$copyright_bg_color = esc_attr( get_theme_mod( 'footer_copyright_color', '222222' ) );
	$copyright_text_color = esc_attr( get_theme_mod( 'copyright_text_color', '666' ) );

	$totop_color = esc_attr( get_theme_mod( 'totop_color', 'bca474' ) );
	$totop_hover = esc_attr( get_theme_mod( 'totop_hover_color', '000000' ) );

	$css .= ".site-footer { background: #{$footer_bg_color}; }
			.site-footer, .site-footer a, .widget-container .footer-widgettitle { color: #{$footer_text_color}; }
			.footer-copyright-wrapper { background: #{$copyright_bg_color}; }
			.footer-copyright-wrapper, .footer-copyright-wrapper a { color: #{$copyright_text_color}; }
			a,
			.primary-nav ul li.current-menu-item a,
			.primary-nav ul li a:hover {
				color: #{$primary_color};
			}
			
			.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span,
			#tribe-bar-form .tribe-bar-submit input[type=submit],
			#main_slider  .owl-nav [class*=owl-],
			input[type=\"reset\"], input[type=\"submit\"], input[type=\"button\"], button {
				background: #{$primary_color};
			}
			
			#to-top { background: {$totop_color};}
			#to-top:hover { background: {$totop_hover};}
	";

	return $css;
}


if ( ! function_exists( 'hotel_luxury_comment' ) ) :
	/**
	 * Template for comments and pingbacks.
	 *
	 * To override this walker in a child theme without modifying the comments template
	 * simply create your own famethemes_comment(), and that function will be used instead.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 * @return void
	 */
	function hotel_luxury_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
				// Display trackbacks differently than normal comments.
				?>
				<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				<p><?php _e( 'Pingback:', 'hotel-luxury' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'hotel-luxury' ), '<span class="edit-link">', '</span>' ); ?></p>
				<?php
				break;
			default :
				// Proceed with normal comments.
				global $post;
				?>
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
				<article id="comment-<?php comment_ID(); ?>" class="comment clearfix">

					<?php echo get_avatar( $comment, 60 ); ?>

					<div class="comment-wrapper">

						<header class="comment-meta comment-author vcard">
							<?php
							printf( '<cite><b class="fn">%1$s</b> %2$s</cite>',
								get_comment_author_link(),
								// If current post author is also comment author, make it known visually.
								( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', 'hotel-luxury' ) . '</span>' : ''
							);
							printf( '<a class="comment-time" href="%1$s"><time datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s', 'hotel-luxury' ), get_comment_date() )
							);
							comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'hotel-luxury' ), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );
							edit_comment_link( __( 'Edit', 'hotel-luxury' ), '<span class="edit-link">', '</span>' );
							?>
						</header><!-- .comment-meta -->

						<?php if ( '0' == $comment->comment_approved ) : ?>
							<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'hotel-luxury' ); ?></p>
						<?php endif; ?>

						<div class="comment-content entry-content">
							<?php comment_text(); ?>
							<?php  ?>
						</div><!-- .comment-content -->

					</div><!--/comment-wrapper-->

				</article><!-- #comment-## -->
				<?php
				break;
		endswitch; // end comment_type check
	}
endif;

function hotel_luxury_is_event(){

	$condition = false;

	if ( function_exists('tribe_is_month') || function_exists('tribe_is_list_view')
	     || function_exists('tribe_is_day') ) {
		if ( tribe_is_month() || tribe_is_list_view() || tribe_is_day() ) {
			$condition = true;
		}
	}

	return $condition;
}


function hotel_luxury_is_single_event(){
	global  $post;
	$is_event = false;
	if ( function_exists('tribe_is_event') ) {
		if ( tribe_is_event( $post->ID ) ){
			$is_event = true;
		}
	}
	return $is_event;
}

function hotel_luxury_is_wc(){

	$condition = false;

	if ( function_exists('is_product') || function_exists('is_product_category')
	     || function_exists('is_product_tag') ) {
		if ( is_product() || is_product_category() || is_product_tag() ) {
			$condition = true;
		}
	}

	return $condition;
}

function hotel_luxury_is_shop_page(){
	$condition = false;

	if ( function_exists('is_shop') ) {
		if ( is_shop() ) {
			$condition = true;
		}
	}

	return $condition;
}