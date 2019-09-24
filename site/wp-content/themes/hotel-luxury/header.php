<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hotel_Luxury
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hotel-luxury' ); ?></a>

    <header id="masthead" class="site-header header-container-wrapper">

        <div class="top-bar-outer-wrapper">
            <div class="top-bar-wrapper container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar-left pull-left">
                            <nav id="top-nav-id" class="top-nav slideMenu">
    	                        <?php
                                if ( has_nav_menu('topbar-menu') ) {
	                                wp_nav_menu( array(
		                                'theme_location' => 'topbar',
		                                'menu_id'        => 'topbar-menu'
	                                ) );
                                }
    	                        ?>
                            </nav>
                        </div>
    
                        <?php if ( is_active_sidebar( 'topbar-right' ) ) { ?>
                        <div class="top-bar-right text-right pull-right">
    	                    <?php dynamic_sidebar( 'topbar-right' ); ?>
                        </div>
                        <?php } ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div><!-- END .top-bar-wrapper -->
        </div> <!-- END .top-bar-outer-wrapper -->
        <div class="header-outer-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-left pull-left">
                            <div class="site-branding logo-wrapper">
                                <?php the_custom_logo();
                                if ( is_front_page() && is_home() ) : ?>
                                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php else : ?>
                                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	                                <?php
                                endif;

                                $description = get_bloginfo( 'description', 'display' );
                                if ( $description || is_customize_preview() ) : ?>
                                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
	                                <?php
                                endif;

                                ?>
                            </div>
                        </div>
                        <div class="header-right text-right pull-right">

                            <a href="#" id="primary-nav-mobile-a" class="primary-nav-close">
                                <span></span>
                                <?php esc_attr_e('MENU', 'hotel-luxury'); ?>
                            </a>

                            <nav id="primary-nav-id" class="primary-nav slideMenu">
	                            <?php
	                            wp_nav_menu( array(
		                            'theme_location' => 'menu-1',
		                            'menu_id'        => 'primary-menu',
	                            ) );
	                            ?>
                            </nav>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div><!-- END .header-wrapper -->
        </div><!-- END .header-outer-wrapper -->
    </header> <!-- END .header-container-wrapper -->

    <?php  do_action('hotel_luxury_before_main_content');  ?>


	<div id="content" class="main-outer-wrapper container">
