<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_modal_popup_box extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'animation'		=>		'Default',
			'top'			=>		'60',
			'width'			=>		'600',
			'bodybg'		=>		'#1a94ad',
			'bgclr'			=>		'#ececec',
			'btntext'		=>		'',
			'btnalign'		=>		'left',
			'btnsize'		=>		'18',
			'leftpadding'	=>		'20',
			'toppadding'	=>		'5',
			'border'		=>		'0px solid transparent',
			'btnradius'		=>		'3',
			'btnclr'		=>		'',
			'hoverclr'		=>		'',
			'btnbg'			=>		'',
			'hoverbg'		=>		'',
			'titlealign'	=>		'left',
			'titletext'		=>		'Image Gallery',
			'titlesize'		=>		'20',
			'titleline'		=>		'2',
			'titleclr'		=>		'',
			'titlebg'		=>		'',
			'titleborder'	=>		'',
		), $atts ) );
		$some_id = rand(5, 500);
		wp_enqueue_style( 'animate-css', plugins_url( '../css/animate.css' , __FILE__ ));
		wp_enqueue_script( 'bpopup-js', plugins_url( '../js/bpopup.js' , __FILE__ ), array('jquery', 'jquery-ui-core'));
		$content = wpb_js_remove_wpautop($content, true);
		ob_start(); ?>
		<!-- HTML DESIGN HERE -->
		<div class="modal-popup-box" data-bodybg="<?php echo $bodybg; ?>" style="text-align: <?php echo $btnalign; ?>;">
			<button class="model-popup-btn popup-<?php echo $some_id; ?>" data-id="popup-<?php echo $some_id; ?>" style="color: <?php echo $btnclr; ?>;background: <?php echo $btnbg; ?> ; border: <?php echo $border; ?>; border-radius: <?php echo $btnradius; ?>px; font-size: <?php echo $btnsize; ?>px; padding: <?php echo $toppadding; ?>px <?php echo $leftpadding; ?>px;">
				<?php echo $btntext; ?>
			</button>

			<div class="mega-model-popup <?php echo $animation; ?> animated" id="popup-<?php echo $some_id; ?>" style="position:fixed;display: none; margin-top: <?php echo $top; ?>px; width: 95%;max-width: <?php echo $width; ?>px; background: <?php echo $bgclr; ?>;">
				<span class="b-close"><span><img src="<?php echo plugin_dir_url( __FILE__ ); ?>../images/cross.png"></span></span>
			    <div class="model-popup-container">
			    	<h2 style="border-bottom: 1px solid <?php echo $titleborder; ?>; text-align: <?php echo $titlealign; ?>; font-size: <?php echo $titlesize; ?>px; line-height: <?php echo $titleline; ?>; color: <?php echo $titleclr; ?>; background: <?php echo $titlebg; ?>; margin: 0px; padding: 0px 20px;">
			    		<?php echo $titletext; ?>
			    	</h2>
			      <span style="padding: 15px 20px; display: block;">
			      	<?php echo $content; ?>
			      </span>
			    </div>
			</div>
		</div>
		<style>
			.modal-popup-box .popup-<?php echo $some_id; ?>:hover {
				color: <?php echo $hoverclr; ?> !important;
				background: <?php echo $hoverbg; ?> !important;
			}
		</style>
        <!-- HTML END DESIGN HERE -->
		<?php
		return ob_get_clean();
	}
}


vc_map( array(
	"name" 			=> __( 'Modal Popup', 'modal_popup' ),
	"base" 			=> "modal_popup_box",
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('Add modal box in your content', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/popup.png',
	'params' => array(
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Animation Effect', 'modal_popup' ),
			"param_name" 	=> 	"animation",
			"description" 	=> 	__( 'animation style on visible <a href="https://addons.topdigitaltrends.net/modal-popup/" target="_blank">See Demo</a>', 'modal_popup' ),
			"group" 		=> 	'General',
			"value"			=>	array(
				"Default"		=>	"Default",
				"bounce"		=>	"bounce",
				"bounceIn"		=>	"bounceIn",
				"rubberBand"	=>	"rubberBand",
				"shake"			=>	"shake",
				"swing"			=>	"swing",
				"bounceInDown"	=>	"bounceInDown",
				"bounceInLeft"	=>	"bounceInLeft",
				"bounceInRight"	=>	"bounceInRight",
				"bounceInUp"	=>	"bounceInUp",
				"fadeInLeft"	=>	"fadeInLeft",
				"fadeInRight"	=>	"fadeInRight",
				"fadeInDown"	=>	"fadeInDown",
				"flash"			=>	"flash",
				"pulse"			=>	"pulse",
				"tada"			=>	"tada",
				"wobble"		=>	"wobble",
				"flip"			=>	"flip",
				"flipInX"		=>	"flipInX",
				"flipInY"		=>	"flipInY",
				"lightSpeedIn"	=>	"lightSpeedIn",
				"rotateIn"		=>	"rotateIn",
				"rotateInDownLeft"	=>	"rotateInDownLeft",
				"rotateInDownRight"	=>	"rotateInDownRight",
				"rotateInUpLeft"	=>	"rotateInUpLeft",
				"rotateInUpRight"	=>	"rotateInUpRight",
				"slideInUp"		=>	"slideInUp",
				"slideInDown"	=>	"slideInDown",
				"slideInRight"	=>	"slideInRight",
				"zoomIn"	=>	"zoomIn",
				"zoomInDown"	=>	"zoomInDown",
				"zoomInLeft"	=>	"zoomInLeft",
				"zoomInRight"	=>	"zoomInRight",
				"zoomInUp"		=>	"zoomInUp",
				"rollIn"		=>	"rollIn",
			)
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Top', 'modal_popup' ),
			"param_name" 	=> 	"top",
			"description" 	=> 	__( 'set position from top in pixel', 'modal_popup' ),
			"value" 		=> __( "60", "modal_popup" ),
			"suffix" 		=> 'px',
			"group" 		=> 	'General',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Popup Width', 'modal_popup' ),
			"param_name" 	=> 	"width",
			"description" 	=> 	__( 'set in pixel', 'modal_popup' ),
			"suffix" 		=> 'px',
			"value" 		=> __( "600", "modal_popup" ),
			"group" 		=> 	'General',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Popup Background', 'modal_popup' ),
			"param_name" 	=> 	"bodybg",
			"description" 	=> 	__( 'Popup body background color', 'modal_popup' ),
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
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Button Align', 'modal_popup' ),
			"param_name" 	=> 	"btnalign",
			"group" 		=> 	'Button Setting',
			"value"			=>	array(
				"Left"			=>	"left",
				"Center"		=>	"center",
				"Right"			=>	"right",
			)
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Button Text', 'modal_popup' ),
			"param_name" 	=> 	"btntext",
			"description" 	=> 	__( 'text for button', 'modal_popup' ),
			"group" 		=> 	'Button Setting',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Font Size', 'modal_popup' ),
			"param_name" 	=> 	"btnsize",
			"description" 	=> 	__( 'font size for button in pixel', 'modal_popup' ),
			"suffix" 		=> 'px',
			"value" 		=> __( "18", "modal_popup" ),
			"group" 		=> 	'Button Setting',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Padding [Left,Right]', 'modal_popup' ),
			"param_name" 	=> 	"leftpadding",
			"description" 	=> 	__( 'write in pixel for button width', 'modal_popup' ),
			"suffix" 		=> 'px',
			"value" 		=> __( "20", "modal_popup" ),
			"group" 		=> 	'Button Setting',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Padding [Top,Bottom]', 'modal_popup' ),
			"param_name" 	=> 	"toppadding",
			"description" 	=> 	__( 'write in pixel for button height', 'modal_popup' ),
			"suffix" 		=> 'px',
			"value" 		=> __( "5", "modal_popup" ),
			"group" 		=> 	'Button Setting',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Border Style [width style color]', 'modal_popup' ),
			"param_name" 	=> 	"border",
			"description" 	=> 	__( 'button border', 'modal_popup' ),
			"value" 		=> __( "0px solid #44448F", "modal_popup" ),
			"group" 		=> 	'Button Setting',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Radius', 'modal_popup' ),
			"param_name" 	=> 	"btnradius",
			"description" 	=> 	__( 'button radius in pixel', 'modal_popup' ),
			"suffix" 		=> 'px',
			"value" 		=> __( "5", "modal_popup" ),
			"group" 		=> 	'Button Setting',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Color', 'modal_popup' ),
			"param_name" 	=> 	"btnclr",
			"description" 	=> 	__( 'Button text color', 'modal_popup' ),
			"group" 		=> 	'Button Setting',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Hover Color', 'modal_popup' ),
			"param_name" 	=> 	"hoverclr",
			"description" 	=> 	__( 'Button text color onhover', 'modal_popup' ),
			"group" 		=> 	'Button Setting',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Background Color', 'modal_popup' ),
			"param_name" 	=> 	"btnbg",
			"description" 	=> 	__( 'Button background color', 'modal_popup' ),
			"group" 		=> 	'Button Setting',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Background Hover Color', 'modal_popup' ),
			"param_name" 	=> 	"hoverbg",
			"description" 	=> 	__( 'Button background color on hover', 'modal_popup' ),
			"group" 		=> 	'Button Setting',
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Title Align', 'modal_popup' ),
			"param_name" 	=> 	"titlealign",
			"group" 		=> 	'Title',
			"value"			=>	array(
				"Left"		=>	"left",
				"Center"		=>	"center",
				"Right"		=>	"right",
			)
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Title', 'modal_popup' ),
			"param_name" 	=> 	"titletext",
			"description" 	=> 	__( 'title text', 'modal_popup' ),
			"value" 		=> __( "Image Gallery", "modal_popup" ),
			"group" 		=> 	'Title',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Font Size', 'modal_popup' ),
			"param_name" 	=> 	"titlesize",
			"description" 	=> 	__( 'write in pixel e.g 20', 'modal_popup' ),
			"suffix" 		=> 'px',
			"value" 		=> __( "20", "modal_popup" ),
			"group" 		=> 	'Title',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Line Height', 'modal_popup' ),
			"param_name" 	=> 	"titleline",
			"description" 	=> 	__( 'it increases the title section height, default 2', 'modal_popup' ),
			"value" 		=> __( "2", "modal_popup" ),
			"group" 		=> 	'Title',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Color', 'modal_popup' ),
			"param_name" 	=> 	"titleclr",
			"description" 	=> 	__( 'title color', 'modal_popup' ),
			"group" 		=> 	'Title',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Background Color', 'modal_popup' ),
			"param_name" 	=> 	"titlebg",
			"description" 	=> 	__( 'title background color', 'modal_popup' ),
			"group" 		=> 	'Title',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Border Color', 'modal_popup' ),
			"param_name" 	=> 	"titleborder",
			"description" 	=> 	__( 'below title border color', 'modal_popup' ),
			"group" 		=> 	'Title',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Background Color', 'modal_popup' ),
			"param_name" 	=> 	"bgclr",
			"description" 	=> 	__( 'Content background color', 'modal_popup' ),
			"group" 		=> 	'Popup Content',
		),
		array(
			"type" 			=> 	"textarea_html",
			"heading" 		=> 	__( 'You can also use shortcode', 'modal_popup' ),
			"param_name" 	=> 	"content",
			"group" 		=> 	'Popup Content',
		),
	),
) );

