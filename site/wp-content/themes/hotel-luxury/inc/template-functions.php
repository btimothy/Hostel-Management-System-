<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Hotel_Luxury
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function hotel_luxury_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if ( is_front_page() ) {
		$page_id = get_option( 'page_on_front' );
	} elseif ( is_home() ) {
		$page_id = get_option( 'page_for_posts' );
	} elseif ( hotel_luxury_is_shop_page() == true ) {
		$page_id = get_option( 'woocommerce_shop_page_id' );
	} else {
		$page_id = get_the_ID();
	}

	if ( is_page() || is_home() || hotel_luxury_is_shop_page() == true ) {
		$hide_title_bar = get_post_meta( $page_id, '_hide_title_bar', true );
	} else {
		$hide_title_bar = 1;
	}

	$show = '';
	if ( is_singular( array('tribe_events', 'post', 'product')) || hotel_luxury_is_event() == true ) {
	    $show = true;
    }

	if ( !$hide_title_bar || $show == true ) {
		$classes[] = 'has-titlebar';
    } else {
		$classes[] = 'no-titlebar';
    }

    $hide_page_title = get_post_meta( $page_id, '_hide_page_title', true );
	if ( $hide_page_title ) {
		$classes[] = 'no-page-title';
    }

	$page_layout = esc_attr( get_theme_mod('page_layout', 'right') );

	if ( $page_layout == 'left' ) {
		$classes[] = 'left-sidebar-wrapper';
	} else {
		$classes[] = 'right-sidebar-wrapper';
    }
    
    $has_slider = esc_attr( get_theme_mod('show_main_slider', '') );
	if ( $has_slider && is_front_page() ) {
		$classes[] = 'has-slider';
	}

	return $classes;
}
add_filter( 'body_class', 'hotel_luxury_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function hotel_luxury_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'hotel_luxury_pingback_header' );


add_action( 'tgmpa_register', 'hotel_luxury_register_required_plugins' );
function hotel_luxury_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		array(
			'name'      => 'Elementor Page Builder',
			'slug'      => 'elementor',
			'required'  => false,
		),

		array(
			'name'      => 'The Events Calendar',
			'slug'      => 'the-events-calendar',
			'required'  => false,
		),

		array(
			'name'      => 'MailChimp for WordPress',
			'slug'      => 'mailchimp-for-wp',
			'required'  => false,
		),

		array(
			'name'      => 'Breadcrumb NavXT',
			'slug'      => 'breadcrumb-navxt',
			'required'  => false,
		),

		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => false,
		)
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'hotel-luxury',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.


	);

	tgmpa( $plugins, $config );
}


/**
 * Frontpage slider
 */
add_action( 'hotel_luxury_main_slider', 'hotel_luxury_get_featured_posts' );
function hotel_luxury_get_featured_posts(){
	if ( is_admin() ) {
		return ;
	}

	$tags = esc_attr( get_theme_mod('slide_tag_name', 'slider') ) ;
	if ( empty( $tags ) ) {
		return;
	}
	$show_star = esc_attr( get_theme_mod( 'show_star', 1 ) );

	$num_post = absint( get_theme_mod( 'slide_number_post', 3 ) );
	$featured_content_args = array(
		'post_type' => 'post',
		'meta_key' => '_thumbnail_id',
		'tag' => $tags,
		'order' => 'DESC',
		'orderby' => 'date',
		'posts_per_page' => $num_post,
	);

	$f_query = new WP_Query( $featured_content_args );

	if ( $f_query ) {
		echo '<div class="slider-outer-wrapper"><div id="main_slider" class="owl-carousel owl-theme">';
		while ( $f_query->have_posts() ): $f_query->the_post();
			$thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( $f_query->ID ), 'full' , true );
			?>
			<div class="item">
				<img src="<?php echo esc_url( $thumbnail_url[0] ) ?>" alt="" />
				<div class="carousel-caption intro-caption">
					<div class="slide-info">
						<div class="slide-content">
                            <h1 class="slider-title"><?php  the_title() ?></h1>
			                <?php  if ( $show_star == 1 ) {  ?>
                            <div class="inline">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
			                <?php } ?>
							<?php the_excerpt() ?>
                        </div>
					</div>
				</div>
			</div>
			<?php
		endwhile;
		echo '</div></div>';
	}
	wp_reset_postdata();

}



if ( ! function_exists( 'hotel_luxury_display_page_title' ) ) {
	/**
	 * Display page title
	 */
    function hotel_luxury_display_page_title() {

	    if ( is_front_page() ) {
		    $page_id = get_option( 'page_on_front' );
        } elseif ( is_home() ) {
		    $page_id = get_option( 'page_for_posts' );
        } else {
		    $page_id = get_the_ID();
        }
	    $hide_page_title = get_post_meta( $page_id, '_hide_page_title', true );

	    if ( !$hide_page_title && ( !is_home() || !is_single() )  ) {
		    ?>
            <div class="row">
                <div class="col-md-12">
                    <?php if ( hotel_luxury_is_event() == true ) {} else { ?>
                    <div class="page-title-wrapper">
                        <h1 class="page-title left"><?php single_post_title(); ?> </h1>
                        <div class="clear"></div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php

	    }
    }
}
add_action( 'hotel_luxury_page_before_content', 'hotel_luxury_display_page_title' );


if ( ! function_exists( 'hotel_luxury_display_title_bar' ) ) {
	/**
	 * Display title bar
	 */
    function hotel_luxury_display_title_bar() {

        $header_image = get_header_image();

	    if ( is_front_page() ) {
		    $page_id = get_option( 'page_on_front' );
	    } elseif ( is_home() ) {
		    $page_id = get_option( 'page_for_posts' );
	    }  elseif ( hotel_luxury_is_shop_page() == true ){
		    $page_id = get_option( 'woocommerce_shop_page_id' );
        }
	    else {
		    $page_id = get_the_ID();
	    }

	    if ( is_page() || is_home() || hotel_luxury_is_shop_page() ) {
		    $hide_title_bar = get_post_meta( $page_id, '_hide_title_bar', true );
	    } else {
		    $hide_title_bar = 1;
        }

	    $show_cover = get_post_meta( $page_id, '_cover', true );
	    $title_bar_image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'full' );
	    if ( $show_cover && $title_bar_image ) {
	        $css = 'style="background-image: url('. esc_url( $title_bar_image[0] ) .')"';
        } else {
	        if ( ! empty($header_image) ) {
		        $css = 'style="background-image: url('. $header_image .')"';
            } else {
		        $css = '';
            }
        }

	    $show_main_slider = esc_attr( get_theme_mod('show_main_slider', 0 ) ) ;

	    if ( $show_main_slider == 1 &&  is_front_page()  ) {
		    do_action('hotel_luxury_main_slider');
	    } else {

		    $show = '';

            if ( is_singular(array( 'tribe_events', 'post', 'product') )  || hotel_luxury_is_event() == true ) {
	            $show = true;
            }

		    if ( $show == true || $hide_title_bar != '1'  ) {
			    $event_title =  esc_attr( get_theme_mod('eventbar_title', esc_html__( 'Events', 'hotel-luxury' ) )  ) ;
			    ?>
                <div class="titlebar-outer-wrapper" <?php echo $css; ?> >

                    <div class="titlebar-title">
                                <h2>
                                    <?php
                                    if ( is_singular('tribe_events') ) {
	                                    single_post_title();
                                    } elseif ( hotel_luxury_is_event() == true ) {
                                        echo $event_title;
                                    }
                                    else {
	                                    echo get_the_title( $page_id );
                                    }
                                    ?>
                                </h2>
                                <div class="breadcrumbs">
                                    <?php
                                    if(function_exists('bcn_display' ) )
	                                {
		                                bcn_display();
	                                }
	                                ?>
                                </div>
                    </div>

                </div>
			    <?php
		    }
	    }
    }
}
add_action( 'hotel_luxury_before_main_content', 'hotel_luxury_display_title_bar' );



add_filter( 'woocommerce_show_page_title' , 'hotel_luxury_hide_shop_page_title' );
/**
 * Removes the "shop" title on the main shop page
 */
function hotel_luxury_hide_shop_page_title() {
	return false;
}

function hotel_luxury_search_form( $form ) {
	$form = '
		<form role="search" class="sidebar-search-form" action="'. esc_url( home_url( '/' ) ) .'">
            <label>
                <span class="screen-reader-text">'. _x( 'Search for:', 'label', 'hotel-luxury' ) .'</span>
                <input type="search" class="search-field" placeholder="'. esc_attr( 'Search &hellip;', 'hotel-luxury' ) .'" value="'. get_search_query() .'" name="s" title="'. esc_attr_x( 'Search for:', 'label', 'hotel-luxury' ) .'" />
            </label>
            <button type="submit" class="search-submit" >
                <svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21">
                    <path fill="currentColor" fill-rule="evenodd" d="M12.514 14.906a8.264 8.264 0 0 1-4.322 1.21C3.668 16.116 0 12.513 0 8.07 0 3.626 3.668.023 8.192.023c4.525 0 8.193 3.603 8.193 8.047 0 2.033-.769 3.89-2.035 5.307l4.999 5.552-1.775 1.597-5.06-5.62zm-4.322-.843c3.37 0 6.102-2.684 6.102-5.993 0-3.31-2.732-5.994-6.102-5.994S2.09 4.76 2.09 8.07c0 3.31 2.732 5.993 6.102 5.993z"></path>
                </svg>
            </button>
        </form>';
	return $form;
}
add_filter( 'get_search_form', 'hotel_luxury_search_form' );

/**
 * Footer Copyright
 */
function hotel_luxury_footer_info() {
	echo sprintf( esc_html__( 'Copyright &copy; %1$s %2$s - %3$s theme by FilaThemes', 'hotel-luxury' ), date_i18n( __('Y', 'hotel-luxury') ), '<a href="'.esc_url( home_url( '/' ) ).'" title="'.esc_attr( get_bloginfo( 'name', 'display' ) ).'">'.esc_html( get_bloginfo( 'name', 'display' ) ).'</a>', '<a target="_blank" href="https://www.filathemes.com/downloads/hotel-luxury/">Hotel Luxury</a>' );
}
add_action( 'hotel_luxury_footer_copyright', 'hotel_luxury_footer_info' );