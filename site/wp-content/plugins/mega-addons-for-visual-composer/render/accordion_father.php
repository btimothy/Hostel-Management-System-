<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_accordion_father extends WPBakeryShortCodesContainer {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'active'			=>		'false',
			'animation'			=>		'350',
			'event' 			=> 		'click',
		), $atts ) );
		$content = wpb_js_remove_wpautop($content);
		wp_enqueue_style( 'accordion-css', plugins_url( '../css/accordion.css' , __FILE__ ));
		wp_enqueue_script( 'accordion-js', plugins_url( '../js/accordion.js' , __FILE__ ), array('jquery', 'jquery-ui-accordion'));
		ob_start(); ?>
		<div class="mega-accordion" data-active="<?php echo $active; ?>" data-anim="<?php echo $animation; ?>" data-event="<?php echo $event; ?>">
			<?php echo $content; ?>
		</div>

		<?php return ob_get_clean();
	}
}


vc_map( array(
	"base" 			=> "accordion_father",
	"name" 			=> __( 'Accordion', 'accordion' ),
	"as_parent" 	=> array('only' => 'accordion_son'),
	"content_element" => true,
	"js_view" 		=> 'VcColumnView',
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('vertically stacked list of items', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/accordions.png',
	'params' => array(
			array(
				"type" 			=> 	"dropdown",
				"heading" 		=> 	__( 'Tab Open/Close', 'accordion' ),
				"param_name" 	=> 	"active",
				"description" 	=> 	__( 'click to <a href="https://addons.topdigitaltrends.net/accordion/" target="_blank">See Demo</a>', 'accordion' ),
				"group" 		=> 'General',
				"value"			=> array(
					"Close"		=>	"false",
					"Open"		=>	"0",
				)
			),

			array(
	            "type" 			=> 	"vc_number",
				"heading" 		=> 	__( 'Animation Speed', 'accordion' ),
				"param_name" 	=> 	"animation",
				"description" 	=> 	__( 'in millisecond', 'accordion' ),
				"value"			=>	"350",
				"suffix" 		=> 	'ms',
				"group" 		=> 	'General',
	        ),

			array(
				"type" 			=> 	"dropdown",
				"heading" 		=> 	__( 'Event', 'accordion' ),
				"param_name" 	=> 	"event",
				"description" 	=> 	__( 'select', 'accordion' ),
				"group" 		=> 'General',
				"value"			=> array(
					"Click"			=>	"click",
					"Mouseover"		=>	"mouseover",
				)
			),

			array(
				"type" 			=> "vc_links",
				"param_name" 	=> "caption_url",
				"class"			=>	"ult_param_heading",
				"description" 	=> __( '<span style="Background: #ddd;padding: 10px; display: block; color: #0073aa;font-weight:600;"><a href="https://1.envato.market/02aNL" target="_blank" style="text-decoration: none;">Get the Pro version for more stunning elements and customization options.</a></span>', 'ihover' ),
				"group" 		=> 'General',
			),
		)
) );
