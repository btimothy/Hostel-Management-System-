<?php
/**
 * Compatibility for following plugind is included:
 * - WPML
 * - SEO by Yoast
 * - All in on SEO Pack
 * - Jetpack
 * - Visual Composer
 * - WooCommerce
 * - Breadcrumb NavXT
 * - Related Posts
 * - Wordpress Popular Posts
 *
 */

// disable the automatic appending of related posts to the post content
add_filter( 'rp4wp_append_content', '__return_false' );


/*-----------------------------------------------------------------------------------*/
/*  WPML Custom Functions
/*-----------------------------------------------------------------------------------*/
locate_template( AUXIN_INC. 'compatibility/wpml.php', true, true );

/*-----------------------------------------------------------------------------------*/
/*  Jetpack
/*-----------------------------------------------------------------------------------*/
locate_template( AUXIN_INC. 'compatibility/jetpack.php', true, true );

/*-----------------------------------------------------------------------------------*/
/*  Jetpack
/*-----------------------------------------------------------------------------------*/
locate_template( AUXIN_INC. 'compatibility/vc.php', true, true );

/*-----------------------------------------------------------------------------------*/
/*  WooCommerce
/*-----------------------------------------------------------------------------------*/
locate_template( AUXIN_INC. 'compatibility/woocommerce.php', true, true );

/*-----------------------------------------------------------------------------------*/
/*  Wordpress Popular Posts
/*-----------------------------------------------------------------------------------*/
locate_template( AUXIN_INC. 'compatibility/wordpress-popular-posts.php', true, true );

/*-----------------------------------------------------------------------------------*/
/*  Wordpress Popular Posts
/*-----------------------------------------------------------------------------------*/
locate_template( AUXIN_INC. 'compatibility/go-pricing.php', true, true );

/*-----------------------------------------------------------------------------------*/
/*  Elementor and corresponding expensions
/*-----------------------------------------------------------------------------------*/
locate_template( AUXIN_INC. 'compatibility/elementor.php', true, true );
