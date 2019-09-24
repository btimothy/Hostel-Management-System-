<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_mvc_counter extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'counter_style' 	=>		 'style',
			'css' 				=>		 '',
			'sec_style' 		=>		 'image',
			'image_id' 			=>		 '',
			'image_width' 		=>		 '',
			'image_height' 		=>		 '',
			'count_icon' 		=>		 '',
			'icon_size' 		=>		 '',
			'icon_clr' 			=>		 '',
			'count_title' 		=>		 '',
			'icon_bg'			=>		'',
			'icon_radius'		=>		'0px',
			'icon_style'		=>		'',
			'title_size' 		=>		 '30',
			'title_font' 		=>		 '500',
			'title_clr' 		=>		 '',
			'lineheight'		=>		'1.1',
			'stat_numb' 		=>		 '',
			'stat_size' 		=>		 '20',
			'stat_font' 		=>		 '',
			'stat_clr' 			=>		 '',
			'count_decimal' 	=> 		 '0',
			'count_speed' 		=>		 '4000',
			'count_interv' 		=>		 '10',
			'start_from' 		=>		 '0',
		), $atts ) );
		$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
		wp_enqueue_style( 'counter-css', plugins_url( '../css/statcounter.css' , __FILE__ ));
		wp_enqueue_script( 'count-to', plugins_url( '../js/countTo.min.js' , __FILE__ ), array('jquery') );
		if ($image_id != '') {
			$image_url = wp_get_attachment_url( $image_id );		
		}
		$content = wpb_js_remove_wpautop($content, true);
		ob_start(); ?>
		
	    	<!-- Counter style one -->
		<?php if ($counter_style == 'style') { ?>
			<div id="mega_count_bar" class="<?php echo $css_class; ?>">
				<div class="mega_count_img">
					<?php if ($sec_style == 'image') { ?>		   
						<img src="<?php echo $image_url; ?>" width="<?php echo $image_width; ?>px" height="<?php echo $image_height; ?>px">
					<?php } ?>
					<?php if ($sec_style == 'icon') { ?>
						<i class="<?php echo $count_icon; ?>" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px; line-height: <?php echo $image_height-4; ?>px; background: <?php echo $icon_bg; ?>; border-radius: <?php echo $icon_radius; ?>; border: <?php echo $icon_style; ?>; font-size: <?php echo $icon_size; ?>px; color: <?php echo $icon_clr; ?>;"></i>
					<?php } ?>
				</div>
				<div class="mega_count_content">
					<p class="timer" data-decimals="<?php echo $count_decimal; ?>" data-speed="<?php echo $count_speed; ?>" data-to="<?php echo $stat_numb; ?>" data-refresh-interval="<?php echo $count_interv; ?>" data-from="<?php echo $start_from; ?>" style="line-height: <?php echo $lineheight; ?>; text-align: center; font-size: <?php echo $stat_size; ?>px; font-weight: <?php echo $stat_font; ?>; color: <?php echo $stat_clr; ?>;">
						<?php echo $start_from; ?>
					</p>
					<h3 style="font-size: <?php echo $title_size; ?>px; font-weight: <?php echo $title_font; ?>; color: <?php echo $title_clr; ?>;">
						<?php echo $count_title; ?>
					</h3>
				</div>
			</div>
		<?php } ?>

		<!-- Counter style two -->
		<?php if ($counter_style == 'style2') { ?>
			<div id="mega_count_bar" class="<?php echo $css_class; ?>">
				<div class="mega_count_img">
					<?php if ($sec_style == 'image') { ?>		   
						<img src="<?php echo $image_url; ?>" width="<?php echo $image_width; ?>px" height="<?php echo $image_height; ?>px" alt="">
					<?php } ?>
					<?php if ($sec_style == 'icon') { ?>
						<i class="<?php echo $count_icon; ?>" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px; line-height: <?php echo $image_height-4; ?>px; background: <?php echo $icon_bg; ?>; border-radius: <?php echo $icon_radius; ?>; border: <?php echo $icon_style; ?>; font-size: <?php echo $icon_size; ?>px; color: <?php echo $icon_clr; ?>;"></i>
					<?php } ?>
				</div>
				<div class="mega_count_content">
					<h3 style="font-size: <?php echo $title_size; ?>px; font-weight: <?php echo $title_font; ?>; color: <?php echo $title_clr; ?>;">
						<?php echo $count_title; ?>
					</h3>
					<hr style="line-height: <?php echo $lineheight; ?>;">
					<p class="timer" data-decimals="<?php echo $count_decimal; ?>" data-speed="<?php echo $count_speed; ?>" data-to="<?php echo $stat_numb; ?>" data-refresh-interval="<?php echo $count_interv; ?>" data-from="<?php echo $start_from; ?>" style="text-align: center; font-size: <?php echo $stat_size; ?>px; font-weight: <?php echo $stat_font; ?>; color: <?php echo $stat_clr; ?>;">
						<?php echo $start_from; ?>
					</p>
				</div>
			</div>
		<?php } ?>

		<!-- Counter style three -->
		<?php if ($counter_style == 'style3') { ?>
			<div id="mega_count_bar_2" class="<?php echo $css_class; ?>">
				<div class="mega_count_img">		   
					<?php if ($sec_style == 'image') { ?>		   
						<img src="<?php echo $image_url; ?>" width="<?php echo $image_width; ?>px" height="<?php echo $image_height; ?>px" alt="">
					<?php } ?>
					<?php if ($sec_style == 'icon') { ?>
						<i class="<?php echo $count_icon; ?>" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px; line-height: <?php echo $image_height-2; ?>px; background: <?php echo $icon_bg; ?>; border-radius: <?php echo $icon_radius; ?>; border: <?php echo $icon_style; ?>; font-size: <?php echo $icon_size; ?>px; color: <?php echo $icon_clr; ?>;"></i>
					<?php } ?>
				</div>
				<div class="mega_count_content">
					<h3 style="line-height: <?php echo $lineheight; ?>; font-size: <?php echo $title_size; ?>px; font-weight: <?php echo $title_font; ?>; color: <?php echo $title_clr; ?>;">
						<?php echo $count_title; ?>
					</h3>
					<p class="timer" data-decimals="<?php echo $count_decimal; ?>" data-speed="<?php echo $count_speed; ?>" data-to="<?php echo $stat_numb; ?>" data-refresh-interval="<?php echo $count_interv; ?>" data-from="<?php echo $start_from; ?>" style="text-align: center; font-size: <?php echo $stat_size; ?>px; font-weight: <?php echo $stat_font; ?>; color: <?php echo $stat_clr; ?>;">
						<?php echo $start_from; ?>
					</p>		
				</div>
			</div>
		<?php } ?>

		<!-- Counter style four -->
		<?php if ($counter_style == 'style4') { ?>
			<div id="mega_count_bar_3" class="<?php echo $css_class; ?>">
				<div class="mega_count_content">
					<h3 style="font-size: <?php echo $title_size; ?>px; font-weight: <?php echo $title_font; ?>; color: <?php echo $title_clr; ?>;">
						<?php echo $count_title; ?>
					</h3>
					<p class="timer" data-decimals="<?php echo $count_decimal; ?>" data-speed="<?php echo $count_speed; ?>" data-to="<?php echo $stat_numb; ?>" data-refresh-interval="<?php echo $count_interv; ?>" data-from="<?php echo $start_from; ?>" style="line-height: <?php echo $lineheight; ?>; text-align: right; font-size: <?php echo $stat_size; ?>px; font-weight: <?php echo $stat_font; ?>; color: <?php echo $stat_clr; ?>;">
						<?php echo $start_from; ?>
					</p>
				</div>
				<div class="mega_count_img">		   
					<?php if ($sec_style == 'image') { ?>		   
						<img src="<?php echo $image_url; ?>" width="<?php echo $image_width; ?>px" height="<?php echo $image_height; ?>px" alt="">
					<?php } ?>
					<?php if ($sec_style == 'icon') { ?>
						<i class="<?php echo $count_icon; ?>" style="width: <?php echo $image_width; ?>px; height: <?php echo $image_height; ?>px; line-height: <?php echo $image_height-2; ?>px; background: <?php echo $icon_bg; ?>; border-radius: <?php echo $icon_radius; ?>; border: <?php echo $icon_style; ?>; font-size: <?php echo $icon_size; ?>px; color: <?php echo $icon_clr; ?>;"></i>
					<?php } ?>
				</div>
			</div>
		<?php } ?>

		<!-- Counter style five -->
		<?php if ($counter_style == 'style5') { ?>
			<div id="mega_count_bar_4" class="<?php echo $css_class; ?>">
				<div class="mega_count_content">
					<h3 style="font-size: <?php echo $title_size; ?>px; font-weight: <?php echo $title_font; ?>; color: <?php echo $title_clr; ?>;">
						<?php echo $count_title; ?>
					</h3>
				</div>
				<div class="mega_count_img" style="line-height: <?php echo $lineheight; ?>;">		   
					<?php if ($sec_style == 'image') { ?>		   
						<img src="<?php echo $image_url; ?>" width="<?php echo $image_width; ?>px" height="<?php echo $image_height; ?>px" alt="">
					<?php } ?>
					<?php if ($sec_style == 'icon') { ?>
						<i class="<?php echo $count_icon; ?>" style="line-height: <?php echo $image_height-2; ?>px; font-size: <?php echo $icon_size; ?>px; color: <?php echo $icon_clr; ?>;"></i>
					<?php } ?>
				</div>
				<div class="mega_count_content">
					<p class="timer" data-decimals="<?php echo $count_decimal; ?>" data-speed="<?php echo $count_speed; ?>" data-to="<?php echo $stat_numb; ?>" data-refresh-interval="<?php echo $count_interv; ?>" data-from="<?php echo $start_from; ?>" style="text-align: center; font-size: <?php echo $stat_size; ?>px; font-weight: <?php echo $stat_font; ?>; color: <?php echo $stat_clr; ?>;">
						<?php echo $start_from; ?>
					</p>
				</div>
			</div>
		<?php } ?>
		

		<?php
		return ob_get_clean();
	}
}


vc_map( array(
	"name" 			=> __( 'Stats counter', 'counter' ),
	"base" 			=> "mvc_counter",
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('Your milestones, achievements etc', 'counter'),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/counter.png',
	'params' => array(
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Counter styles', 'counter' ),
			"param_name" 	=> 	"counter_style",
			"description" 	=> 	__( 'Select counter styles <a href="http://addons.topdigitaltrends.net/stats-counter/">See demo</a>', 'counter' ),
			"group" 		=> 	'General',
			"value" 		=> array(
				"Top logo bottom content"		=> "style", 
				"Top logo bottom content 2" 	=> "style2",
				"Left logo right content" 	=> "style3",
				"Left content right logo" 	=> "style4",
				"Logo in center" 	=> "style5",
			)
		),

		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Image/Icon', 'counter' ),
			"param_name" 	=> 	"sec_style",
			"description" 	=> 	__( 'Select Image or font Icon', 'counter' ),
			"group" 		=> 	'General',
			"value" => array(
				"Image" => "image", 
				"Icon" => "icon", 
			)
		),
		array(
			"type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Image', 'counter' ),
			"param_name" 	=> 	"image_id",
			"description" 	=> 	__( 'select image for logo', 'counter' ),
			"group" 		=> 	'General',
			"dependency" => array('element' => "sec_style", 'value' => 'image'),
		),

		array(
			"type" 			=> 	"iconpicker",
			"heading" 		=> 	__( 'Font Icon', 'counter' ),
			"param_name" 	=> 	"count_icon",
			"description" 	=> 	__( 'Select font icon', 'counter' ),
			"dependency" => array('element' => "sec_style", 'value' => 'icon'),
			"group" 		=> 	'General',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Icon font size', 'counter' ),
			"param_name" 	=> 	"icon_size",
			"description" 	=> 	__( 'set font size in pixel e.g 25', 'counter' ),
			"dependency" => array('element' => "sec_style", 'value' => 'icon'),
			"value"			=>	"25",
			"suffix" 		=> 	'px',
			"group" 		=> 	'General',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Width', 'counter' ),
			"param_name" 	=> 	"image_width",
			"description" 	=> 	__( 'Set custom width in pixel or leave blank e.g 100', 'counter' ),
			"value"			=>	"50",
			"suffix" 		=> 	'px',
			"group" 		=> 	'General',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Height', 'counter' ),
			"param_name" 	=> 	"image_height",
			"description" 	=> 	__( 'Set custom height in pixel or leave blank e.g 100', 'counter' ),
			"value"			=>	"50",
			"suffix" 		=> 	'px',
			"group" 		=> 	'General',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Icon Color', 'counter' ),
			"param_name" 	=> 	"icon_clr",
			"description" 	=> 	__( 'Select icon color', 'counter' ),
			"dependency" => array('element' => "sec_style", 'value' => 'icon'),
			"group" 		=> 	'General',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Icon Background', 'counter' ),
			"param_name" 	=> 	"icon_bg",
			"description" 	=> 	__( 'background color for Icon', 'counter' ),
			"dependency" => array('element' => "sec_style", 'value' => 'icon'),
			"group" 		=> 	'General',
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Border Radius', 'counter' ),
			"param_name" 	=> 	"icon_radius",
			"description" 	=> 	__( 'border radius for icon', 'counter' ),
			"dependency" => array('element' => "sec_style", 'value' => 'icon'),
			"group" 		=> 	'General',
			"value" 		=> array(
				"0px"		=> "0px", 
				"5px" 		=> "5px",
				"10px" 		=> "10px",
				"20px" 		=> "20px",
				"30px" 		=> "30px",
				"50px" 		=> "50px",
				"50%" 		=> "50%",
			)
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Border Style', 'counter' ),
			"param_name" 	=> 	"icon_style",
			"description" 	=> 	__( '[width style color]', 'counter' ),
			"dependency" => array('element' => "sec_style", 'value' => 'icon'),
			"value"			=>	"0px solid #fff",
			"group" 		=> 	'General',
		),

		array(
			"type" 			=> "vc_links",
			"param_name" 	=> "caption_url",
			"class"			=>	"ult_param_heading",
			"description" 	=> __( '<span style="Background: #ddd;padding: 10px; display: block; color: #0073aa;font-weight:600;"><a href="https://1.envato.market/02aNL" target="_blank" style="text-decoration: none;">Get the Pro version for more stunning elements and customization options.</a></span>', 'ihover' ),
			"group" 		=> 'General',
		),


		// Content Section 
		
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Title', 'counter' ),
			"param_name" 	=> 	"count_title",
			"description" 	=> 	__( 'write counter title for info', 'counter' ),
			"group" 		=> 	'Title',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Font size', 'counter' ),
			"param_name" 	=> 	"title_size",
			"description" 	=> 	__( 'set title font size in pixel e.g 30', 'counter' ),
			"suffix" 		=> 	'px',
			"group" 		=> 	'Title',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Font Weight', 'counter' ),
			"param_name" 	=> 	"title_font",
			"description" 	=> 	__( 'set font thickness with difference of 100 in numbers e.g 500', 'counter' ),
			"max"			=>	"",
			"group" 		=> 	'Title',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Title Color', 'counter' ),
			"param_name" 	=> 	"title_clr",
			"description" 	=> 	__( 'Select title color', 'counter' ),
			"group" 		=> 	'Title',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Line Height', 'counter' ),
			"param_name" 	=> 	"lineheight",
			"description" 	=> 	__( 'set line height', 'counter' ),
			"value"			=>	"1",
			"group" 		=> 	'Title',
		),


		// Counter Section 
		
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Stat Counts', 'counter' ),
			"param_name" 	=> 	"stat_numb",
			"description" 	=> 	__( 'write in numbers e.g 4329', 'counter' ),
			"max"			=>	"",
			"group" 		=> 	'Stat Counter',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Font size', 'counter' ),
			"param_name" 	=> 	"stat_size",
			"description" 	=> 	__( 'set counter font size in pixel e.g 20', 'counter' ),
			"suffix" 		=> 	'px',
			"group" 		=> 	'Stat Counter',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Font Weight', 'counter' ),
			"param_name" 	=> 	"stat_font",
			"description" 	=> 	__( 'set counter font thickness with difference of 100 in numbers e.g 500', 'counter' ),
			"max"			=>	"",
			"group" 		=> 	'Stat Counter',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Color', 'counter' ),
			"param_name" 	=> 	"stat_clr",
			"description" 	=> 	__( 'Select counter title color', 'counter' ),
			"group" 		=> 	'Stat Counter',
		),

		// Setting Section 
		
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Decimal', 'counter' ),
			"param_name" 	=> 	"count_decimal",
			"description" 	=> 	__( 'decimal value after points e.g 2 or leave blank', 'counter' ),
			"group" 		=> 	'Setting',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Speed', 'counter' ),
			"param_name" 	=> 	"count_speed",
			"description" 	=> 	__( 'set completion time from start to end in milli second 1s=1000 e.g 4000', 'counter' ),
			"max"			=>	"",
			"group" 		=> 	'Setting',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Start from', 'counter' ),
			"param_name" 	=> 	"count_value",
			"description" 	=> 	__( 'set counter from starting point in number default 0', 'counter' ),
			"group" 		=> 	'Setting',
		),
		array(
			"type" 			=> 	"vc_number",
			"heading" 		=> 	__( 'Count interval', 'counter' ),
			"param_name" 	=> 	"count_interv",
			"description" 	=> 	__( 'set counter interval e.g 100', 'counter' ),
			"max"			=>	"",
			"group" 		=> 	'Setting',
		),

		/*=================================
		Design Options====================*/ 

		array(
			"type" 			=> 	"css_editor",
			"heading" 		=> 	__( 'Custom Styling', 'counter' ),
			"param_name" 	=> 	"css",
			"group" 		=> 	'Design Options',
		),
	),
) );

