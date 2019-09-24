<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hotel_Luxury
 */

?>

        <?php
        $newsletter_disable = esc_attr( get_theme_mod('newsletter_disable', '1') );
        $newsletter_mailchimp = get_theme_mod('newsletter_form_shortcode') ;
        if ( $newsletter_disable != '1' && $newsletter_mailchimp != '' ) :
        ?>
                <div class="subscribe_section row">
		            <?php echo do_shortcode( wp_kses_post($newsletter_mailchimp) ); ?>
                </div>
	    <?php  endif; ?>

        </div><!-- .main-wrapper -->
	</div><!-- #content -->


    <footer id="colophon" class="site-footer footer-outer-wrapper">
        <div class="footer-wrapper container">
            <div class="footer-columns row">
                <div class="col-md-3 columns">
	                <?php if ( is_active_sidebar( 'footer-1' ) ) {
                        dynamic_sidebar('footer-1');
	                }
                    ?>
                </div>
                <div class="col-md-3 columns">
	                <?php if ( is_active_sidebar( 'footer-2' ) ) {
		                dynamic_sidebar('footer-2');
	                }
	                ?>
                </div>
                <div class="col-md-3 columns">
	                <?php if ( is_active_sidebar( 'footer-3' ) ) {
		                dynamic_sidebar('footer-3');
	                }
	                ?>
                </div>
                <div class="col-md-3 columns">
	                <?php if ( is_active_sidebar( 'footer-4' ) ) {
		                dynamic_sidebar('footer-4');
	                }
	                ?>
                </div>

            </div>
        </div> <!-- END .footer-wrapper -->

        <div class="footer-copyright-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-copyright">
                            <div class="copy-left pull-left">
				                <?php do_action( 'hotel_luxury_footer_copyright' ); ?>
                            </div>

			                <?php if ( has_nav_menu( 'social' ) ) { ?>
                                <div class="social-links pull-right">
					                <?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_class' => 'footer-social', 'link_before' => '<span class="screen-reader-text">',  'link_after'   => '</span>') ) ; ?>
                                </div>
			                <?php } ?>

                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </footer> <!-- END .footer-outer-wrapper -->

    <a href="#top" id="to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
