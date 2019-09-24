<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_text_type_vc extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'align'	 		=> 'left',
			'typespeed' 	=> '70',
			'backspeed' 	=> '500',
			'loop' 			=> '',
			'verticalclr' 	=> '#000',
			'checked' 		=> '',
			'before'		=>	'',
			'after'			=>	'',
			'size'			=>	'',
			'clr'			=>	'',
		), $atts ) );
		$content = wpb_js_remove_wpautop($content, true);
		wp_enqueue_script( 'typed-js', plugins_url( '../js/typed.js' , __FILE__ ), array('jquery', 'jquery-ui-core'));
		wp_enqueue_script( 'typer-js', plugins_url( '../js/customTyper.js' , __FILE__ ), array('jquery', 'jquery-ui-core'));
		wp_localize_script( 'typer-js', 'mega_text', array(
			'typespeed' => $typespeed,
			'backspeed' => $backspeed,
		) );
		?>
		<!-- HTML DESIGN HERE -->

		<div class="type-wrap"
			data-typespeed="<?php echo $typespeed; ?>"
			data-backspeed="<?php echo $backspeed; ?>"
			data-loop="<?php echo $loop; ?>"
			style="height: 50px; text-align: <?php echo $align; ?>;">
			<span style="font-size: <?php echo $size; ?>px; color: <?php echo $clr; ?>;"><?php echo $before; ?></span>
	            <div class="typed-strings">
	                <?php echo $content; ?>
	            </div>
	            <span class="typed" style="white-space:pre;"></span>
	            <?php if (!empty($checked)) { ?>
	            	<span class="blink_me" style="font-size: <?php echo $size; ?>px; color: <?php echo $verticalclr; ?>;">|</span>	            	
	            <?php } ?>
	        <span style="font-size: <?php echo $size; ?>px;color: <?php echo $clr; ?>;"><?php echo $after; ?></span>
        </div>

        <!-- HTML END DESIGN HERE -->
		<?php 
	}
}


vc_map( array(
	"name" 			=> __( 'Text Type', 'text_type_vc' ),
	"base" 			=> "text_type_vc",
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('Fancy line with animation effects', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/texttype.png',
	'params' => array(
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Text Align', 'text_type_vc' ),
			"param_name" 	=> 	"align",
			"description" 	=> 	__( 'set text align <a href="https://addons.topdigitaltrends.net/texttype-effects/">See Demo</a>', 'text_type_vc' ),
			"group" 		=> 	'General',
			"value"			=>	array(
				"Left" 			=> 	"left",
				"Center" 		=> 	"center",
				"Right" 		=> 	"right",
			)
		),
		array(
			"type" 			=> 	"textarea",
			"heading" 		=> 	__( 'Text Before Typer', 'text_type_vc' ),
			"param_name" 	=> 	"before",
			"description" 	=> 	__( 'write text that will show before typer text or leave blank', 'text_type_vc' ),
			"group" 		=> 	'General',
		),
		array(
			"type" 			=> 	"textarea",
			"heading" 		=> 	__( 'Text After Typer', 'text_type_vc' ),
			"param_name" 	=> 	"after",
			"description" 	=> 	__( 'write text that will show after typer text or leave blank', 'text_type_vc' ),
			"group" 		=> 	'General',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Font size', 'text_type_vc' ),
			"param_name" 	=> 	"size",
			"description" 	=> 	__( 'text font size in pixel e.g 18', 'text_type_vc' ),
			"suffix" 		=> 'px',
			'value' 		=> __( "18", 'text_type_vc' ),
			"group" 		=> 	'General',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Text Color', 'text_type_vc' ),
			"param_name" 	=> 	"clr",
			"group" 		=> 	'General',
		),
		array(
			"type" 			=> "vc_links",
			"param_name" 	=> "caption_url",
			"class"			=>	"ult_param_heading",
			"description" 	=> __( '<span style="Background: #ddd;padding: 10px; display: block; color: #0073aa;font-weight:600;"><a href="https://1.envato.market/02aNL" target="_blank" style="text-decoration: none;">Get the Pro version for more stunning elements and customization options.</a></span>', 'ihover' ),
			"group" 		=> 'General',
		),
		array(
			"type" 			=> 	"checkbox",
			"heading" 		=> 	__( 'Show Vertical line|', 'text_type_vc' ),
			"param_name" 	=> 	"checked",
			"description" 	=> 	__( 'with and after typer text', 'text_type_vc' ),
			"group" 		=> 	'Typer Text',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Vertical line Color', 'text_type_vc' ),
			"param_name" 	=> 	"verticalclr",
			"group" 		=> 	'Typer Text',
		),
		array(
			"type" 			=> 	"textarea_html",
			"heading" 		=> 	__( 'Provide text to display (each per line) [ Text must be wrapped in html markup ]', 'text_type_vc' ),
			"param_name" 	=> 	"content",
			"description" 	=> 	__( 'Text must be wrapped in html markup.', 'text_type_vc' ),
			'value' 		=> __( "I'm hello world", 'text_type_vc' ),
			"group" 		=> 	'Typer Text',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Text type speed', 'text_type_vc' ),
			"param_name" 	=> 	"typespeed",
			"description" 	=> 	__( 'in milli second, default 70 [1s = 1000]', 'text_type_vc' ),
			"max"			=>	"",
			'value' 		=> __( "70", 'text_type_vc' ),
			"group" 		=> 	'Setting',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Back delay speed', 'text_type_vc' ),
			"param_name" 	=> 	"backspeed",
			"description" 	=> 	__( 'in milli second, default 500 [1s = 1000]', 'text_type_vc' ),
			"max"			=>	"",
			'value' 		=> __( "500", 'text_type_vc' ),
			"group" 		=> 	'Setting',
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Loop', 'text_type_vc' ),
			"param_name" 	=> 	"loop",
			"description" 	=> 	__( 'Repeat text', 'text_type_vc' ),
			"group" 		=> 	'Setting',
			'value' 		=> 	 array( 'true', 'false' ),
		),
	),
) );

