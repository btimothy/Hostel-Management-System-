<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_vc_headings extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'style'			=>		'theme1',
			'style2'		=>		'icon',
			'linewidth'		=>		'230',
			'borderwidth'	=>		'2',
			'borderclr'		=>		'#000',
			'lineheight'	=>		'1',
			'icon'			=>		'',
			'iconalign'		=>		'center',
			'iconclr'		=>		'#000',
			'image_id'		=>		'',
			'align'			=>		'center',
			'title'			=>		'',
			'titlesize'		=>		'22',
			'titleclr'		=>		'#000',
		), $atts ) );
		if ($image_id != '') {
			$image_url = wp_get_attachment_url( $image_id );		
		}
		$content = wpb_js_remove_wpautop($content, true);
		wp_enqueue_style( 'vc-heading-css', plugins_url( '../css/heading.css' , __FILE__ ));
		ob_start(); ?>
		<div id="mega-line-container">
			<?php if ($style == 'theme1') { ?>
				<div class="mega-line-top" style="text-align: <?php echo $align; ?>;">  
			        <span style="width: <?php echo $linewidth; ?>px; border: <?php echo $borderwidth; ?>px solid <?php echo $borderclr; ?>;"></span>
			        <h2 style="font-size: <?php echo $titlesize; ?>px; color: <?php echo $titleclr; ?>; line-height: <?php echo $lineheight; ?>;">
			        	<?php echo $title; ?>
			        </h2>
			        <div>
			        	<?php echo $content ?>
			        </div>
		      </div>
			<?php } ?>

			<?php if ($style == 'theme2') { ?>
			    <div class="mega-line-center" style="text-align: <?php echo $align; ?>;">  
		        	<h2 style="font-size: <?php echo $titlesize; ?>px; color: <?php echo $titleclr; ?>;">
			        	<?php echo $title; ?>
			        </h2>
			        <div style="line-height: <?php echo $lineheight; ?>;">
		        		<span style="width: <?php echo $linewidth; ?>px; border: <?php echo $borderwidth; ?>px solid <?php echo $borderclr; ?>;"></span>
		        	</div>
		        	<div>
			        	<?php echo $content ?>
			        </div>
		      	</div>
		    <?php } ?>

		    <?php if ($style == 'theme3') { ?>
			    <div class="mega-line-bottom" style="text-align: <?php echo $align; ?>;">  
			        <h2 style="font-size: <?php echo $titlesize; ?>px; color: <?php echo $titleclr; ?>;">
			        	<?php echo $title; ?>
			        </h2>
			        <div style="line-height: <?php echo $lineheight; ?>;">
			        	<?php echo $content ?>
			        </div>
			        <span style="width: <?php echo $linewidth; ?>px; border: <?php echo $borderwidth; ?>px solid <?php echo $borderclr; ?>;"></span>
			    </div>
		    <?php } ?>

		    <?php if ($style == 'theme4') { ?>
		        
			    <div id="mega-line-icon" style="text-align: <?php echo $align; ?>;">  
			        <div class="line-icon" style="text-align: <?php echo $iconalign; ?>;">
		        		<?php if ($style2 == 'icon') { ?>
		        			<i class="<?php echo $icon; ?>" aria-hidden="true" style="color: <?php echo $iconclr; ?>"></i>
		        		<?php } ?>
		        		<?php if ($style2 == 'image') { ?>
		        		<img src="<?php echo $image_url; ?>">
		        	<?php } ?>
		        	</div>
			        <h2 style="font-size: <?php echo $titlesize; ?>px; color: <?php echo $titleclr; ?>; line-height: <?php echo $lineheight; ?>; margin-bottom: -15px;">
			        	<?php echo $title; ?>
			        </h2>
			        <div>
			        	<?php echo $content ?>
			        </div>
			    </div>
		    <?php } ?>

		    <?php if ($style == 'theme5') { ?>
			    <div id="mega-line-icon" style="text-align: <?php echo $align; ?>;">  
			        <h2 style="font-size: <?php echo $titlesize; ?>px; color: <?php echo $titleclr; ?>;">
			        	<?php echo $title; ?>
			        </h2>
			        <div style="line-height: <?php echo $lineheight; ?>;">
				        <div class="line-icon" style="text-align: <?php echo $iconalign; ?>;">
				        	<?php if ($style2 == 'icon') { ?>
				        		<i class="<?php echo $icon; ?>" aria-hidden="true" style="color: <?php echo $iconclr; ?>"></i>
				        	<?php } ?>
				        	<?php if ($style2 == 'image') { ?>
				        		<img src="<?php echo $image_url; ?>">
				        	<?php } ?>
				        </div>
			        </div>
			        <div>
			        	<?php echo $content ?>
			        </div>
			    </div>
		    <?php } ?>

		    <?php if ($style == 'theme6') { ?>
				<div id="mega-line-icon" style="text-align: <?php echo $align; ?>;">  
			        <h2 style="font-size: <?php echo $titlesize; ?>px; color: <?php echo $titleclr; ?>;">
			        	<?php echo $title; ?>
			        </h2>
			        <div style="line-height: <?php echo $lineheight; ?>;">
			        	<?php echo $content ?>
			        </div>
			        <div class="line-icon" style="text-align: <?php echo $iconalign; ?>;">
			        	<?php if ($style2 == 'icon') { ?>
			        		<i class="<?php echo $icon; ?>" aria-hidden="true" style="color: <?php echo $iconclr; ?>"></i>
			        	<?php } ?>
			        	<?php if ($style2 == 'image') { ?>
			        		<img src="<?php echo $image_url; ?>">
			        	<?php } ?>
			        </div>
			    </div>
		    <?php } ?>
      	</div>
		<?php
		return ob_get_clean();
	}
}


vc_map( array(
	"name" 			=> __( 'Heading', 'heading' ),
	"base" 			=> "vc_headings",
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('Display stylish headings', 'heading'),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/heading.png',
	'params' => array(
		array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Select Style', 'heading' ),
			"param_name" 	=> "style",
			"description" 	=> __('<a href="https://addons.topdigitaltrends.net/headings/" target="_blank">See Demo</a>', 'heading'),
			"group" 		=> "General",
			"value"			=>	array(
				"Simple Top Line"		=>	"theme1",
				"Simple Center Line"	=>	"theme2",
				"Simple Bottom Line"	=>	"theme3",
				"Top Icon/Image"		=>	"theme4",
				"Center Icon/Image"		=>	"theme5",
				"Bottom Icon/Image"		=>	"theme6",
			)
		),

		array(
			"type" 			=> "vc_number",
			"heading" 		=> __( 'Line length', 'heading' ),
			"param_name" 	=> "linewidth",
			"description" 	=> __('set in pixel. default: 230', 'heading'),
			"dependency" => array('element' => "style", 'value' => array('theme1', 'theme2', 'theme3')),
			"suffix" 		=> 	'px',
			"value"			=>	"230",
			'max' 			=> 	"",
			"group" 		=> 	"General",
		),

		array(
			"type" 			=> "vc_number",
			"heading" 		=> __( 'Border Width', 'heading' ),
			"param_name" 	=> "borderwidth",
			"description" 	=> __('set in pixel. default: 2', 'heading'),
			"dependency" => array('element' => "style", 'value' => array('theme1', 'theme2', 'theme3')),
			"value"			=>	"2",
			"suffix" 		=> 'px',
			"group" 		=> "General",
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Border Color', 'heading' ),
			"param_name" 	=> "borderclr",
			"description" 	=> __('color of border line', 'heading'),
			"dependency" => array('element' => "style", 'value' => array('theme1', 'theme2', 'theme3')),
			"value"			=>	"#000",
			"group" 		=> "General",
		),

		array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Seclect Icon/Image', 'heading' ),
			"param_name" 	=> "style2",
			"dependency" => array('element' => "style", 'value' => array('theme4', 'theme5', 'theme6')),
			"group" 		=> "General",
			"value"			=>	array(
				"Icon"			=>	"icon",
				"Image"			=>	"image",
			)
		),

		// Image/Icon Section

		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Choose Icon', 'heading' ),
			"param_name" 	=> "icon",
			"dependency" => array('element' => "style2", 'value' => 'icon'),
			"group" 		=> "General",
		),

		array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Icon Alignment', 'heading' ),
			"param_name" 	=> "iconalign",
			"dependency" => array('element' => "style2", 'value' => 'icon'),
			"group" 		=> "General",
			"value"			=>	array(
				"Center"	=>		"center",
				"Left"		=>		"left",
				"Right"		=>		"right",
			)
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Color for Icon', 'heading' ),
			"param_name" 	=> "iconclr",
			"dependency" => array('element' => "style2", 'value' => 'icon'),
			"group" 		=> "General",
		),

		array(
			"type" 			=> "attach_image",
			"heading" 		=> __( 'Choose Image', 'heading' ),
			"param_name" 	=> "image_id",
			"dependency" => array('element' => "style2", 'value' => 'image'),
			"group" 		=> "General",
		),
		
		array(
			"type" 			=> "vc_links",
			"param_name" 	=> "caption_url",
			"class"			=>	"ult_param_heading",
			"description" 	=> __( '<span style="Background: #ddd;padding: 12px; display: block; color: #0073aa;font-weight:600;"><a href="https://1.envato.market/02aNL" target="_blank" style="text-decoration: none;">Get the Pro version for more stunning elements and customization options.</a></span>', 'ihover' ),
			"group" 		=> 'General',
		),

		// Heading Section

		array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Heading Alignment', 'heading' ),
			"param_name" 	=> "align",
			"group" 		=> "Heading",
			"value"			=>	array(
				"Center"	=>		"center",
				"Left"		=>		"left",
				"Right"		=>		"right",
			)
		),

		array(
			"type" 			=> "vc_number",
			"heading" 		=> __( 'Line Height', 'heading' ),
			"param_name" 	=> "lineheight",
			"description" 	=> __('margin between line and headings', 'heading'),
			"value"			=>	"1",
			"group" 		=> "Heading",
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Title', 'heading' ),
			"param_name" 	=> "title",
			"value"			=>	"Title Here",
			"group" 		=> "Heading",
		),

		array(
			"type" 			=> "vc_number",
			"heading" 		=> __( 'Title Font Size', 'heading' ),
			"param_name" 	=> "titlesize",
			"value"			=>	"22",
			"suffix" 		=> 'px',
			"group" 		=> "Heading",
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Title Color', 'heading' ),
			"param_name" 	=> "titleclr",
			"value"			=>	"#000",
			"group" 		=> "Heading",
		),

		// Description section 
		
		array(
			"type" 			=> "textarea_html",
			"heading" 		=> __( 'Description', 'heading' ),
			"param_name" 	=> "content",
			"value"			=>	"write your detail or leave blank",
			"group" 		=> "Description",
		),
	),
) );

