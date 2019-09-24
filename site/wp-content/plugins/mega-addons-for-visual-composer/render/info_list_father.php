<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_info_list_father extends WPBakeryShortCodesContainer {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'css'			=> '',
		), $atts ) );
		$content = wpb_js_remove_wpautop($content, true);
		$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
		wp_enqueue_style( 'info-list-css', plugins_url( '../css/infolist.css' , __FILE__ ));
		ob_start(); ?>
		<ul class="mega-info-list <?php echo $css_class; ?>" style="list-style-type: none; height: 100%;">
			<?php echo $content; ?>
		</ul>

		<?php return ob_get_clean();
	}
}


vc_map( array(
	"base" 			=> "info_list_father",
	"name" 			=> __( 'Info List', 'infolist' ),
	"as_parent" 	=> array('only' => 'info_list_son'),
	"content_element" => true,
	"js_view" 		=> 'VcColumnView',
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('Text blocks connected together in one list', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/infolist.png',
	'params' => array(
		array(
				"type" 			=> 	"css_editor",
				"heading" 		=> 	__( 'Design Options', 'infolist' ),
				"param_name" 	=> 	"css",
				"group" 		=> 'General',
			),
		)
) );
