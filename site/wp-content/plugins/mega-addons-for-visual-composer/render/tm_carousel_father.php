<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_tm_carousel_father extends WPBakeryShortCodesContainer {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'padding'		=>		'5',
			'theme'			=>		'default-tdt',
			'mbl_height'	=>		'',
			'effect'		=>		'false',
			'arrow'			=>		'false',
			'dot'			=>		'true',
			'autoplay'		=>		'true',
			'speed'			=>		'2000',
			'slide_visible'	=>		'1',
			'slide_visible_mbl'	=>		'1',
			'slide_scroll'	=>		'1',
			'dotclr'		=>		'#000',
			'borderclr'		=>		'transparent',
			'arrowclr'		=>		'#000',
			'arrowsize'		=>		'30',
			'class'			=>		'',
		), $atts ) );
		$some_id = rand(5, 500);
		$content = wpb_js_remove_wpautop($content);
		wp_enqueue_style( 'slick-carousel-css', plugins_url( '../css/slick-carousal.css' , __FILE__ ));
		wp_enqueue_script( 'slick-js', plugins_url( '../js/slick.js' , __FILE__ ), array('jquery'));
		wp_enqueue_script( 'custom-js', plugins_url( '../js/custom-tm.js' , __FILE__ ), array('jquery'));
		ob_start(); ?>
		<section class="tm-slider slider <?php echo $class; ?> <?php echo $theme; ?>" id="tdt-slider-<?php echo $some_id ?>" data-slide="<?php echo $slide_visible_mbl ?>" data-slick='{"arrows": <?php echo $arrow; ?>, "autoplaySpeed": <?php echo $speed; ?>, "dots": <?php echo $dot; ?>, "autoplay": true, "slidesToShow": <?php echo $slide_visible; ?>, "slidesToScroll": <?php echo $slide_scroll; ?>, "fade": <?php echo $effect; ?>}'>
		    <?php echo $content; ?>
		</section>

		<style>
			#tdt-slider-<?php echo $some_id ?> .slick-dots li button:before{
				color: <?php echo $dotclr ?>;
				border: 2px solid <?php echo $borderclr ?>;
			}
			#tdt-slider-<?php echo $some_id ?> .slick-next:before {
				color: <?php echo $arrowclr ?> !important;
				font-size: <?php echo $arrowsize; ?>px !important;
			}
			#tdt-slider-<?php echo $some_id ?> .slick-prev:before {
				color: <?php echo $arrowclr ?> !important;
				font-size: <?php echo $arrowsize; ?>px !important;
			}
			#tdt-slider-<?php echo $some_id ?> .slick-dots li.slick-active button:before {
				opacity: 1 !important;
			}
			#tdt-slider-<?php echo $some_id ?>.content-over-slider .slick-slide .content-section {
				top: <?php echo $padding ?>%;
			}
			@media only screen and (max-width: 480px) {
				#tdt-slider-<?php echo $some_id ?>.content-over-slider .slick-slide .content-section {
					top: 35px !important;
				}
				#tdt-slider-<?php echo $some_id ?>.content-over-slider .ultimate-slide-img {
					height: <?php echo $mbl_height; ?>px !important;
				}
			}
		</style>
		<?php return ob_get_clean();
	}
}


vc_map( array(
	"base" 			=> "tm_carousel_father",
	"name" 			=> __( 'Carousal Slider', 'tm-carousel' ),
	"as_parent" 	=> array('only' => 'tm_carousel_son'),
	"content_element" => true,
	"js_view" 		=> 'VcColumnView',
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('show as slider', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/carousal-slider.png',
	'params' => array(
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Select Theme', 'slider' ),
			"param_name" 	=> 	"theme",
			"description"	=>	__('Use as carousal top image bottom content or as slider image over content <a href="https://addons.topdigitaltrends.net/carousal-slider/" target="_blank">See Demo</a>', 'slider'),
			"group" 		=> 'Settings',
				"value" 		=> 	array(
					"Top Image Bottom Content" 		=> 		"default-tdt",
					"Image Over Content" 			=> 		"content-over-slider",
				)
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Carousel Height (For Mobile)', 'slider' ),
			"param_name" 	=> 	"mbl_height",
			"description"	=>	__( 'set in pixel eg, 250 or leave blank', 'slider' ),
			"suffix" 		=> 	'px',
			"dependency" => array('element' => "theme", 'value' => 'content-over-slider'),
			"group" 		=> 'Settings',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Padding Top', 'slider' ),
			"param_name" 	=> 	"padding",
			"description"	=>	__('set in % eg 5. padding will apply from top for the content', 'slider'),
			"dependency" => array('element' => "theme", 'value' => 'content-over-slider'),
			"suffix" 		=> 	'%',
			"value"			=>	"5",
			"group" 		=> 'Settings',
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Slide Effect', 'slider' ),
			"param_name" 	=> 	"effect",
			"description"	=>	__('choose slider effect', 'slider'),
			"group" 		=> 'Settings',
				"value" 		=> 	array(
					"Slide [Right To Left]" 		=> 		"false",
					"Fade" 			=> 		"true",
				)
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Arrows', 'slider' ),
			"param_name" 	=> 	"arrow",
			"description"	=>	__('Show/Hide on left & right', 'slider'),
			"group" 		=> 'Settings',
				"value" 		=> 	array(
					"Hide" 			=> 		"false",
					"Show" 			=> 		"true",
				)
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Dots', 'slider' ),
			"param_name" 	=> 	"dot",
			"description"	=>	__('Show/Hide show at bottom', 'slider'),
			"group" 		=> 'Settings',
				"value" 		=> 	array(
					"Show" 			=> 		"true",
					"Hide" 			=> 		"false",
				)
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Autoplay', 'slider' ),
			"param_name" 	=> 	"autoplay",
			"description"	=>	__('move auto or slide on click', 'slider'),
			"group" 		=> 'Settings',
			"value" 		=> 	array(
				"True" 						=> 		"true",
				"False (available in pro)" 	=> 		"",
			)
		),
		/*array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Width', 'slider' ),
			"param_name" 	=> 	"width",
			"description"	=>	__('container width in percentage eg, 100%', 'slider'),
			"value"			=>	"100%",
			"group" 		=> 'Settings',
		),*/
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Slider Speed', 'slider' ),
			"param_name" 	=> 	"speed",
			"description"	=>	__('write in ms eg, 2000 [1s = 1000]', 'slider'),
			"value"			=>	"2000",
			"group" 		=> 'Settings',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Slide To Show (For Desktop)', 'slider' ),
			"param_name" 	=> 	"slide_visible",
			"description"	=>	__('set visible number of slides. default is 1', 'slider'),
			"value"			=>	"1",
			"group" 		=> 'Settings',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Slide To Show (For Mobile available In Pro)', 'slider' ),
			"param_name" 	=> 	"slide_in_pro",
			"description"	=>	__('set visible number of slides. default is 1', 'slider'),
			"value"			=>	"1",
			"group" 		=> 'Settings',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Slide To Scroll', 'slider' ),
			"param_name" 	=> 	"slide_scroll",
			"description"	=>	__('allow user to multiple slide on click or drag. default is 1', 'slider'),
			"value"			=>	"1",
			"group" 		=> 'Settings',
		),
		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Extra Class', 'int_banner' ),
			"param_name" 	=> 	"class",
			"description" 	=> 	__( 'Add extra class name that will be applied to the icon process, and you can use this class for your customizations.', 'int_banner' ),
			"group" 		=> 	"Settings",
        ),
        array(
			"type" 			=> "vc_links",
			"param_name" 	=> "caption_url",
			"class"			=>	"ult_param_heading",
			"description" 	=> __( '<span style="Background: #ddd;padding: 10px; display: block; color: #0073aa;font-weight:600;"><a href="https://1.envato.market/02aNL" target="_blank" style="text-decoration: none;">Get the Pro version for more stunning elements and customization options.</a></span>', 'ihover' ),
			"group" 		=> 'Settings',
		),

		// Dot Section Setting 
		
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Dot/Border', 'slider' ),
			"param_name" 	=> 	"style",
			"group" 		=> 'Dot',
			"dependency" => array('element' => "dot", 'value' => 'true'),
			"value"			=>	array(
				"Dot"		=>		"dot",
				"Border"	=>		"border",
			)
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Dot Color', 'slider' ),
			"param_name" 	=> 	"dotclr",
			"dependency" => array('element' => "style", 'value' => 'dot'),
			"value"			=>	"#000",
			"group" 		=> 'Dot',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Border Color', 'slider' ),
			"param_name" 	=> 	"borderclr",
			"dependency" => array('element' => "style", 'value' => 'border'),
			"value"			=>	"#000",
			"group" 		=> 'Dot',
		),

		// Dot Section Setting
		 
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Arrow Color', 'slider' ),
			"param_name" 	=> 	"arrowclr",
			"dependency" 	=> array('element' => "arrow", 'value' => 'true'),
			"value"			=>	"#000",
			"group" 		=> 'Arrow',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Arrow Font Size', 'slider' ),
			"param_name" 	=> 	"arrowsize",
			"description"	=>	"set in pixel eg, 20",
			"dependency" 	=> array('element' => "arrow", 'value' => 'true'),
			"suffix" 		=> 	'px',
			"value"			=>	"30",
			"group" 		=> 'Arrow',
		),

	)
) );
