<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_accordion_son extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'titlemargin'		=>		'0',
			'title'				=>		'',
			'height'			=>		'50',
			'size'				=>		'16',
			'clr'				=>		'',
			'borderwidth'		=>		'0px 0px 0px 0px',
			'borderwidth2'		=>		'0px 0px 0px 0px',
			'borderclr'			=>		'',
			'borderclr2'		=>		'',
			'bgclr'				=>		'',
			'gradientbg'		=>		'',
			'bodybg'			=>		'',
		), $atts ) );
		$content = wpb_js_remove_wpautop($content);
		ob_start(); ?>
		<h3 class="ac-style" style="margin-top: <?php echo $titlemargin; ?>px; border-width: <?php echo $borderwidth; ?>; border-style: solid; border-color: <?php echo $borderclr; ?>; color: <?php echo $clr; ?>; background: <?php echo $bgclr; ?> <?php echo $gradientbg; ?>; font-size: <?php echo $size; ?>px;height: <?php echo $height; ?>px; line-height: <?php echo $height; ?>px;">
			<?php echo $title; ?>
		</h3>
		<div class="mega-panel" style="margin-bottom: <?php echo $titlemargin; ?>px;background: <?php echo $bodybg; ?>; border-width: <?php echo $borderwidth2; ?>; border-style: solid; border-color: <?php echo $borderclr2; ?>;">
		  <?php echo $content; ?>
		</div>

		<?php return ob_get_clean();
	}
}


vc_map( array(
	"name" 			=> __( 'Accordion Settings', 'accordion' ),
	"base" 			=> "accordion_son",
	"as_child" 		=> array('only' => 'accordion_father'),
	"content_element" => true,
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('vertically stacked list of items', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/accordions.png',
	'params' => array(

		// Title Section

		array(
            "type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Margin', 'accordion' ),
			"param_name" 	=> 	"titlemargin",
			"description" 	=> 	__( 'margin from bottom for each tab, set in pixel', 'accordion' ),
			"value"			=>	"0",
			"suffix" 		=> 	'px',
			"group" 		=> 	'General',
        ),

		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Title', 'accordion' ),
			"param_name" 	=> 	"title",
			"description" 	=> 	__( 'display title', 'accordion' ),
			"group" 		=> 	'Title',
        ),


		array(
            "type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Title Section Height', 'accordion' ),
			"param_name" 	=> 	"height",
			"description" 	=> 	__( 'set in pixel default 50', 'accordion' ),
			"value"			=>	"50",
			"suffix" 		=> 	'px',
			"group" 		=> 	"Title",
        ),
		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Font Size', 'accordion' ),
			"param_name" 	=> 	"size",
			"description" 	=> 	__( 'set in pixel eg, 16', 'accordion' ),
			"value"			=>	"16",
			"suffix" 		=> 	'px',
			"group" 		=> 	'Title',
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Title Color', 'accordion' ),
			"param_name" 	=> 	"clr",
			"group" 		=> 	'Title',
        ),

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Title Background', 'accordion' ),
			"param_name" 	=> 	"bgclr",
			"group" 		=> 	'Title',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Title Background Gradient', 'accordion' ),
			"param_name" 	=> 	"gradientbg",
			"description" 	=> 	__( 'put three different colors inside for gradient effects or leave blank <a href="https://www.w3schools.com/csS/css3_gradients.asp">Further</a>', 'accordion' ),
			"value"			=>	"linear-gradient(141deg, #0fb8ad 0%, #9C27B0 51%, #FFEB3B 75%)",
			"group" 		=> 	'Title',
        ),

        // Detail Section

        array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Body Background', 'accordion' ),
			"param_name" 	=> "bodybg",
			"group" 		=> "Detail",
		),

        array(
            "type" 			=> 	"textarea_html",
			"heading" 		=> 	__( 'Detail', 'accordion' ),
			"param_name" 	=> 	"content",
			"group" 		=> 	'Detail',
        ),

        // Border Style
        
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Title Border Width', 'accordion' ),
			"param_name" 	=> 	"borderwidth",
			"description" 	=> 	__( 'border width for title [top right bottom left]', 'accordion' ),
			"value"			=>	"0px 0px 0px 0px",
			"group" 		=> 	'Border',
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Title Border Color', 'accordion' ),
			"param_name" 	=> 	"borderclr",
			"description" 	=> 	__( 'color for title border', 'accordion' ),
			"group" 		=> 	'Border',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Description Border Width', 'accordion' ),
			"param_name" 	=> 	"borderwidth2",
			"description" 	=> 	__( 'border width for description [top right bottom left]', 'accordion' ),
			"value"			=>	"0px 0px 0px 0px",
			"group" 		=> 	'Border',
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Description Border Color', 'accordion' ),
			"param_name" 	=> 	"borderclr2",
			"description" 	=> 	__( 'color for description border', 'accordion' ),
			"group" 		=> 	'Border',
        ),

	),
) );
