<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_mvc_team_profile extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'member_visibility' => 'grow',
			'shadow_visibility' => 'none',
			'member_clr' => '#27BEBE',
			'url' 		=> '',
			'image_id' => '',
			'image_alt' => '',
			'memb_name' => '',
			'memb_prof' => '',
			'memb_about' => '',
			'info_size' => '',
			'info_clr' => '',
			'memb_email' => '',
			'memb_url' => '',
			'memb_numb' => '',
			'memb_addr' => '',
			'memb_skill' => '',
			'memb_perl' => '',
			'memb_skill2' => '',
			'memb_per2' => '',
			'memb_skill3' => '',
			'memb_per3' => '',
			'memb_skill4' => '',
			'memb_per4' => '',
			'memb_skill5' => '',
			'memb_per5' => '',
			'social_icon' => '',
			'social_url' => '',
			'social_clr' => '',
			'social_icon2' => '',
			'social_url2' => '',
			'social_clr2' => '',
			'social_icon3' => '',
			'social_url3' => '',
			'social_clr3' => '',
			'social_icon4' => '',
			'social_url4' => '',
			'social_clr4' => '',
			'social_icon5' => '',
			'social_url5' => '',
			'social_clr5' => '',
			'social_icon6' => '',
			'social_url6' => '',
		), $atts ) );
		$url = vc_build_link($url);
		if ($image_id != '') {
			$image_url = wp_get_attachment_url( $image_id );		
		}
		wp_enqueue_style( 'memberprofile-css', plugins_url( '../css/memberprofile.css' , __FILE__ ));
		$content = wpb_js_remove_wpautop($content, true);
		ob_start(); ?>
		
		<?php if ($member_visibility == 'grow') { ?>
			<div class="mega_team_case">
				<div class="mega_team_wrap">
					<div class="member-image">
						<?php if (isset($url) && $url != '') { ?>
							<a href="<?php echo esc_url($url['url']); ?>" target="<?php echo $url['target']; ?>" title="<?php echo esc_html($url['title']); ?>"><img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"></a>
						<?php } ?>
						<?php if (isset($url) && $url == NULL) { ?>
							<a><img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"></a>
						<?php } ?>
					</div>
					<div class="member-name">
						<?php echo $memb_name; ?>
						<span style="background-color: <?php echo $member_clr; ?>;"><?php echo $memb_prof; ?></span>
					</div>
				</div>
				<div class="member-desc">
					<?php echo $memb_about; ?>
				</div>
				<div class="member-info" style="font-size: <?php echo $info_size; ?>px; color: <?php echo $info_clr; ?>">
					<?php if (!empty($memb_email)) { ?>
						<p><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $memb_email; ?></p>
					<?php } ?>
					<?php if (!empty($memb_url)) { ?>
						<p><i class="fa fa-globe" aria-hidden="true"></i> <?php echo $memb_url; ?></p>
					<?php } ?>
					<?php if (!empty($memb_addr)) { ?>
						<p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $memb_addr; ?></p>
					<?php } ?>
					<?php if (!empty($memb_numb)) { ?>
						<p><i class="fa fa-phone-square" aria-hidden="true"></i> <?php echo $memb_numb; ?></p>
					<?php } ?>
				</div>
				<div class="member-skills">
					<?php if (!empty($memb_skill)) { ?>
						<div class="skill-label"><?php echo $memb_skill; ?></div>
						<div class="skill-prog">
							<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_perl; ?>%; background-color: <?php echo $member_clr; ?>;">
							</div>
						</div>
					<?php } ?>

					<?php if (!empty($memb_skill2)) { ?>
					<div class="skill-label"><?php echo $memb_skill2; ?></div>
					<div class="skill-prog">
						<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_per2; ?>%; background-color: <?php echo $member_clr; ?>;">
						</div>
					</div>
					<?php } ?>
					
					<?php if (!empty($memb_skill3)) { ?>
					<div class="skill-label"><?php echo $memb_skill3; ?></div>
					<div class="skill-prog">
						<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_per3; ?>%; background-color: <?php echo $member_clr; ?>;">
						</div>
					</div>
					<?php } ?>
					
					<?php if (!empty($memb_skill4)) { ?>
					<div class="skill-label"><?php echo $memb_skill4; ?></div>
					<div class="skill-prog">
						<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_per4; ?>%; background-color: <?php echo $member_clr; ?>;">
						</div>
					</div>
					<?php } ?>
					
					<?php if (!empty($memb_skill5)) { ?>
					<div class="skill-label"><?php echo $memb_skill5; ?></div>
					<div class="skill-prog">
						<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_per5; ?>%; background-color: <?php echo $member_clr; ?>;">
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="member-social">
					<a href="<?php echo $social_url; ?>" style="background-color: <?php echo $social_clr; ?>" target="_blank">
						<i class="<?php echo $social_icon; ?>"></i>
					</a>
					<a href="<?php echo $social_url2; ?>" style="background-color: <?php echo $social_clr2; ?>" target="_blank">
						<i class="<?php echo $social_icon2; ?>"></i>
					</a>
					<a href="<?php echo $social_url3; ?>" style="background-color: <?php echo $social_clr3; ?>" target="_blank">
						<i class="<?php echo $social_icon3; ?>"></i>
					</a>
					<a href="<?php echo $social_url4; ?>" style="background-color: <?php echo $social_clr4; ?>" target="_blank">
						<i class="<?php echo $social_icon4; ?>"></i>
					</a>
					<a href="<?php echo $social_url5; ?>" style="background-color: <?php echo $social_clr5; ?>" target="_blank">
						<i class="<?php echo $social_icon5; ?>"></i>
					</a>
					<?php if (!empty($social_icon6)) { ?>
					<a href="<?php echo $social_url6; ?>" style="background-color: <?php echo $social_clr6; ?>" target="_blank">
						<i class="<?php echo $social_icon6; ?>"></i>
					</a>
					<?php } ?>
				</div>
			</div>
		<?php } ?>

		<!-- /**** Float Style****/ -->
		
		<?php if ($member_visibility == 'float') { ?>
			<div class="mega_team_case_2">
				<div class="mega_team_head">
					<div class="mega_team_wrap">
						<div class="member-image">
							<?php if (isset($url) && $url != '') { ?>
								<a href="<?php echo esc_url($url['url']); ?>" target="<?php echo $url['target']; ?>" title="<?php echo esc_html($url['title']); ?>"><img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"></a>
							<?php } ?>
							<?php if (isset($url) && $url == NULL) { ?>
								<a><img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"></a>
							<?php } ?>
						</div>
						<div class="member-name">
							<?php echo $memb_name; ?>
							<span style="background-color: <?php echo $member_clr; ?>;"><?php echo $memb_prof; ?></span>
						</div>
					</div>
				</div>
				<div class="mega_team_footer">
					<div class="member-skills">
						<?php if (!empty($memb_skill)) { ?>
						<div class="skill-label"><?php echo $memb_skill; ?></div>
						<div class="skill-prog">
							<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_perl; ?>%; background-color: <?php echo $member_clr; ?>;">
							</div>
						</div>
						<?php } ?>

						<?php if (!empty($memb_skill2)) { ?>
						<div class="skill-label"><?php echo $memb_skill2; ?></div>
						<div class="skill-prog">
							<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_per2; ?>%; background-color: <?php echo $member_clr; ?>;">
							</div>
						</div>
						<?php } ?>
						
						<?php if (!empty($memb_skill3)) { ?>
						<div class="skill-label"><?php echo $memb_skill3; ?></div>
						<div class="skill-prog">
							<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_per3; ?>%; background-color: <?php echo $member_clr; ?>;">
							</div>
						</div>
						<?php } ?>
						
						<?php if (!empty($memb_skill4)) { ?>
						<div class="skill-label"><?php echo $memb_skill4; ?></div>
						<div class="skill-prog">
							<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_per4; ?>%; background-color: <?php echo $member_clr; ?>;">
							</div>
						</div>
						<?php } ?>
						
						<?php if (!empty($memb_skill5)) { ?>
						<div class="skill-label"><?php echo $memb_skill5; ?></div>
						<div class="skill-prog">
							<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_per5; ?>%; background-color: <?php echo $member_clr; ?>;">
							</div>
						</div>
						<?php } ?>
					</div>
					<div class="member-info" style="font-size: <?php echo $info_size; ?>px; color: <?php echo $info_clr; ?>">
						<?php if (!empty($memb_email)) { ?>
							<p><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $memb_email; ?></p>
						<?php } ?>
						<?php if (!empty($memb_url)) { ?>
							<p><i class="fa fa-globe" aria-hidden="true"></i> <?php echo $memb_url; ?></p>
						<?php } ?>
						<?php if (!empty($memb_addr)) { ?>
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $memb_addr; ?></p>
						<?php } ?>
						<?php if (!empty($memb_numb)) { ?>
							<p><i class="fa fa-phone-square" aria-hidden="true"></i> <?php echo $memb_numb; ?></p>
						<?php } ?>
					</div>
					<div class="member-social">
						<a href="<?php echo $social_url; ?>" style="background-color: <?php echo $social_clr; ?>" target="_blank">
						<i class="<?php echo $social_icon; ?>"></i>
						</a>
						<a href="<?php echo $social_url2; ?>" style="background-color: <?php echo $social_clr2; ?>" target="_blank">
							<i class="<?php echo $social_icon2; ?>"></i>
						</a>
						<a href="<?php echo $social_url3; ?>" style="background-color: <?php echo $social_clr3; ?>" target="_blank">
							<i class="<?php echo $social_icon3; ?>"></i>
						</a>
						<a href="<?php echo $social_url4; ?>" style="background-color: <?php echo $social_clr4; ?>" target="_blank">
							<i class="<?php echo $social_icon4; ?>"></i>
						</a>
						<a href="<?php echo $social_url5; ?>" style="background-color: <?php echo $social_clr5; ?>" target="_blank">
							<i class="<?php echo $social_icon5; ?>"></i>
						</a>
						<?php if (!empty($social_icon6)) { ?>
						<a href="<?php echo $social_url6; ?>" style="background-color: <?php echo $social_clr6; ?>" target="_blank">
							<i class="<?php echo $social_icon6; ?>"></i>
						</a>
						<?php } ?>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="member-desc">
					<?php echo $memb_about; ?>
				</div>
			</div>
		<?php } ?>

		<!-- Outset Style -->

		<?php if ($member_visibility == 'outset') { ?>
			<div class="mega_team_case_3">
				<div class="mega_team_wrap">
					<div class="member-image">
						<?php if (isset($url) && $url != '') { ?>
							<a href="<?php echo esc_url($url['url']); ?>" target="<?php echo $url['target']; ?>" title="<?php echo esc_html($url['title']); ?>"><img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"></a>
						<?php } ?>
						<?php if (isset($url) && $url == NULL) { ?>
							<a><img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"></a>
						<?php } ?>
					</div>
					<div class="member-name">
						<?php echo $memb_name; ?>
						<span><?php echo $memb_prof; ?></span>
					</div>
				</div>
				<div class="member-desc">
					<?php echo $memb_about; ?>
				</div>
				<div class="member-info" style="font-size: <?php echo $info_size; ?>px; color: <?php echo $info_clr; ?>">
					<?php if (!empty($memb_email)) { ?>
						<p><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $memb_email; ?></p>
					<?php } ?>
					<?php if (!empty($memb_url)) { ?>
						<p><i class="fa fa-globe" aria-hidden="true"></i> <?php echo $memb_url; ?></p>
					<?php } ?>
					<?php if (!empty($memb_addr)) { ?>
						<p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $memb_addr; ?></p>
					<?php } ?>
					<?php if (!empty($memb_numb)) { ?>
						<p><i class="fa fa-phone-square" aria-hidden="true"></i> <?php echo $memb_numb; ?></p>
					<?php } ?>
				</div>
				<div class="member-skills">
						<?php if (!empty($memb_skill)) { ?>
						<div class="skill-label"><?php echo $memb_skill; ?></div>
						<div class="skill-prog">
							<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_perl; ?>%; background-color: <?php echo $member_clr; ?>;">
							</div>
						</div>
						<?php } ?>

						<?php if (!empty($memb_skill2)) { ?>
						<div class="skill-label"><?php echo $memb_skill2; ?></div>
						<div class="skill-prog">
							<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_per2; ?>%; background-color: <?php echo $member_clr; ?>;">
							</div>
						</div>
						<?php } ?>
						
						<?php if (!empty($memb_skill3)) { ?>
						<div class="skill-label"><?php echo $memb_skill3; ?></div>
						<div class="skill-prog">
							<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_per3; ?>%; background-color: <?php echo $member_clr; ?>;">
							</div>
						</div>
						<?php } ?>
						
						<?php if (!empty($memb_skill4)) { ?>
						<div class="skill-label"><?php echo $memb_skill4; ?></div>
						<div class="skill-prog">
							<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_per4; ?>%; background-color: <?php echo $member_clr; ?>;">
							</div>
						</div>
						<?php } ?>
						
						<?php if (!empty($memb_skill5)) { ?>
						<div class="skill-label"><?php echo $memb_skill5; ?></div>
						<div class="skill-prog">
							<div class="fill" data-progress-animation="90%" data-appear-animation-delay="400" style="width: <?php echo $memb_per5; ?>%; background-color: <?php echo $member_clr; ?>;">
							</div>
						</div>
						<?php } ?>
					</div>
				<div class="member-social">
					<a href="<?php echo $social_url; ?>" style="background-color: <?php echo $social_clr; ?>" target="_blank">
						<i class="<?php echo $social_icon; ?>"></i>
					</a>
					<a href="<?php echo $social_url2; ?>" style="background-color: <?php echo $social_clr2; ?>" target="_blank">
						<i class="<?php echo $social_icon2; ?>"></i>
					</a>
					<a href="<?php echo $social_url3; ?>" style="background-color: <?php echo $social_clr3; ?>" target="_blank">
						<i class="<?php echo $social_icon3; ?>"></i>
					</a>
					<a href="<?php echo $social_url4; ?>" style="background-color: <?php echo $social_clr4; ?>" target="_blank">
						<i class="<?php echo $social_icon4; ?>"></i>
					</a>
					<a href="<?php echo $social_url5; ?>" style="background-color: <?php echo $social_clr5; ?>" target="_blank">
						<i class="<?php echo $social_icon5; ?>"></i>
					</a>
					<?php if (!empty($social_icon6)) { ?>
					<a href="<?php echo $social_url6; ?>" style="background-color: <?php echo $social_clr6; ?>" target="_blank">
						<i class="<?php echo $social_icon6; ?>"></i>
					</a>
					<?php } ?>
				</div>
			</div>
		<?php } ?>

		<!-- Smart Style -->

		<?php if ($member_visibility == 'smart') { ?>
			<div class="mega_team_case_4">
				<div class="member-image">
					<?php if (isset($url) && $url != '') { ?>
						<a href="<?php echo esc_url($url['url']); ?>" target="<?php echo $url['target']; ?>" title="<?php echo esc_html($url['title']); ?>"><img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"></a>
					<?php } ?>
					<?php if (isset($url) && $url == NULL) { ?>
						<a><img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"></a>
					<?php } ?>
				</div>
				<div class="mega_wrap">
					<div class="member-name">
						<?php echo $memb_name; ?>
						<span><?php echo $memb_prof; ?></span>
					</div>
					<div class="member-desc">
						<?php echo $memb_about; ?>
					</div>
					<div class="member-social">
						<a href="<?php echo $social_url; ?>" target="_blank">
							<i class="<?php echo $social_icon; ?>"></i>
						</a>
						<a href="<?php echo $social_url2; ?>" target="_blank">
							<i class="<?php echo $social_icon2; ?>"></i>
						</a>
						<a href="<?php echo $social_url3; ?>" target="_blank">
							<i class="<?php echo $social_icon3; ?>"></i>
						</a>
						<a href="<?php echo $social_url4; ?>" target="_blank">
							<i class="<?php echo $social_icon4; ?>"></i>
						</a>
						<a href="<?php echo $social_url5; ?>" target="_blank">
							<i class="<?php echo $social_icon5; ?>"></i>
						</a>
						<?php if (!empty($social_icon6)) { ?>
						<a href="<?php echo $social_url6; ?>" target="_blank">
							<i class="<?php echo $social_icon6; ?>"></i>
						</a>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>

		<?php
		return ob_get_clean();
	}
}


vc_map( array(
	"name" 			=> __( 'Member Profile', 'memberprofile' ),
	"base" 			=> "mvc_team_profile",
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('Show your awesome team', 'memberprofile'),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/memberprofile.png',
	'params' => array(
		array(
            "type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Member Style', 'memberprofile' ),
			"param_name" 	=> 	"member_visibility",
			"description" 	=> 	__( 'Select style of member profile <a href="http://addons.topdigitaltrends.net/member-profile">See demo</a>', 'memberprofile' ),
			"group" 		=> 	'General',
			"value" 		=> array(
				"Grow"		=> "grow", 
				"Float" 	=> "float",
				"Outset" 	=> "outset",
				"Smart" 	=> "smart",
			)
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Profile color', 'memberprofile' ),
			"param_name" 	=> 	"member_clr",
			"description" 	=> 	__( 'color effects for the team meber', 'memberprofile' ),
			"group" 		=> 	'General',
        ),

        array(
			"type" 			=> "vc_link",
			"heading" 		=> __( 'URL Link', 'member-vc' ),
			"param_name" 	=> "url",
			"description" 	=> __( 'It will move to next page on click', 'member-vc' ),
			"group" 		=> 'General',
		),

    	array(
            "type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Image', 'memberprofile' ),
			"param_name" 	=> 	"image_id",
			"description" 	=> 	__( 'Select the image', 'memberprofile' ),
			"group" 		=> 	'General',
        ),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Alternate Text', 'memberprofile' ),
			"param_name" 	=> "image_alt",
			"description" 	=> __( 'It will be used as alt attribute of img tag', 'memberprofile' ),
			"group" 		=> 'General',
		),

		array(
			"type" 			=> "vc_links",
			"param_name" 	=> "caption_url",
			"class"			=>	"ult_param_heading",
			"description" 	=> __( '<span style="Background: #ddd;padding: 10px; display: block; color: #0073aa;font-weight:600;"><a href="https://1.envato.market/02aNL" target="_blank" style="text-decoration: none;">Get the Pro version for more stunning elements and customization options.</a></span>', 'ihover' ),
			"group" 		=> 'General',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Member name', 'memberprofile' ),
			"param_name" 	=> "memb_name",
			"description" 	=> __( 'Write member name', 'memberprofile' ),
			"group" 		=> 'About',
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Profession', 'memberprofile' ),
			"param_name" 	=> "memb_prof",
			"description" 	=> __( 'Write member profession', 'memberprofile' ),
			"group" 		=> 'About',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'About', 'memberprofile' ),
			"param_name" 	=> "memb_about",
			"description" 	=> __( 'Info about member in detail', 'memberprofile' ),
			"group" 		=> 'About',
		),

		// Info

		array(
			"type" 			=> "vc_number",
			"heading" 		=> __( 'Info text font size', 'memberprofile' ),
			"param_name" 	=> "info_size",
			"description" 	=> __( 'Write font size along with units e.g 13', 'memberprofile' ),
			"suffix" 		=> 	'px',
			"group" 		=> 'Info',
		),
		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Text Color', 'memberprofile' ),
			"param_name" 	=> "info_clr",
			"description" 	=> __( 'Set color of all info text', 'memberprofile' ),
			"group" 		=> 'Info',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Email', 'memberprofile' ),
			"param_name" 	=> "memb_email",
			"description" 	=> __( 'Write member email address or leave blank', 'memberprofile' ),
			"group" 		=> 'Info',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Site Url', 'memberprofile' ),
			"param_name" 	=> "memb_url",
			"description" 	=> __( 'Write member site url or leave blank', 'memberprofile' ),
			"group" 		=> 'Info',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Contact number', 'memberprofile' ),
			"param_name" 	=> "memb_numb",
			"description" 	=> __( 'Write member contact number or leave blank', 'memberprofile' ),
			"group" 		=> 'Info',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Address', 'memberprofile' ),
			"param_name" 	=> "memb_addr",
			"description" 	=> __( 'Write member address or leave blank', 'memberprofile' ),
			"group" 		=> 'Info',
		),

		// Skills

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 1', 'memberprofile' ),
			"param_name" 	=> "memb_skill",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'memberprofile' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "vc_number",
			"heading" 		=> __( 'First percentage', 'memberprofile' ),
			"param_name" 	=> "memb_perl",
			"description" 	=> __( 'first skill percentage e.g 87 or leave blank', 'memberprofile' ),
			"suffix" 		=> 	'%',
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 2', 'memberprofile' ),
			"param_name" 	=> "memb_skill2",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'memberprofile' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "vc_number",
			"heading" 		=> __( 'Second percentage', 'memberprofile' ),
			"param_name" 	=> "memb_per2",
			"description" 	=> __( 'second skill percentage e.g 83 or leave blank', 'memberprofile' ),
			"suffix" 		=> 	'%',
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 3', 'memberprofile' ),
			"param_name" 	=> "memb_skill3",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'memberprofile' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "vc_number",
			"heading" 		=> __( 'Third percentage', 'memberprofile' ),
			"param_name" 	=> "memb_per3",
			"description" 	=> __( 'third skill percentage e.g 83 or leave blank', 'memberprofile' ),
			"suffix" 		=> 	'%',
			"group" 		=> 'Skill',
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 4', 'memberprofile' ),
			"param_name" 	=> "memb_skill4",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'memberprofile' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "vc_number",
			"heading" 		=> __( 'Fourth percentage', 'memberprofile' ),
			"param_name" 	=> "memb_per4",
			"description" 	=> __( 'fourth skill percentage e.g 83 or leave blank', 'memberprofile' ),
			"suffix" 		=> 	'%',
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 5', 'memberprofile' ),
			"param_name" 	=> "memb_skill5",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'memberprofile' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "vc_number",
			"heading" 		=> __( 'Fifth percentage', 'memberprofile' ),
			"param_name" 	=> "memb_per5",
			"description" 	=> __( 'fifth skill percentage e.g 83 or leave blank', 'memberprofile' ),
			"suffix" 		=> 	'%',
			"group" 		=> 'Skill',
		),

		/*** Social Icons ***/

		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Social icon', 'memberprofile' ),
			"param_name" 	=> "social_icon",
			"description" 	=> __( 'choose icon for social upadate', 'memberprofile' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'First Social Url', 'memberprofile' ),
			"param_name" 	=> "social_url",
			"description" 	=> __( 'first social url', 'memberprofile' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'First Social color', 'memberprofile' ),
			"param_name" 	=> "social_clr",
			"description" 	=> __( 'first color of social icon', 'memberprofile' ),
			"group" 		=> 'Social',
		),


		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Second social icon', 'memberprofile' ),
			"param_name" 	=> "social_icon2",
			"description" 	=> __( 'choose icon for social', 'memberprofile' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Second Social Url', 'memberprofile' ),
			"param_name" 	=> "social_url2",
			"description" 	=> __( 'Second social url', 'memberprofile' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Second Social color', 'memberprofile' ),
			"param_name" 	=> "social_clr2",
			"description" 	=> __( 'Second color of social icon', 'memberprofile' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Third social icon', 'memberprofile' ),
			"param_name" 	=> "social_icon3",
			"description" 	=> __( 'choose icon for social', 'memberprofile' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Third Social Url', 'memberprofile' ),
			"param_name" 	=> "social_url3",
			"description" 	=> __( 'Third social url', 'memberprofile' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Third Social color', 'memberprofile' ),
			"param_name" 	=> "social_clr3",
			"description" 	=> __( 'Third color of social icon', 'memberprofile' ),
			"group" 		=> 'Social',
		),


		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Fourth social icon', 'memberprofile' ),
			"param_name" 	=> "social_icon4",
			"description" 	=> __( 'choose icon for social', 'memberprofile' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Fourth Social Url', 'memberprofile' ),
			"param_name" 	=> "social_url4",
			"description" 	=> __( 'Fourth social url', 'memberprofile' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Fourth Social color', 'memberprofile' ),
			"param_name" 	=> "social_clr4",
			"description" 	=> __( 'Fourth color of social icon', 'memberprofile' ),
			"group" 		=> 'Social',
		),


		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Fifth social icon', 'memberprofile' ),
			"param_name" 	=> "social_icon5",
			"description" 	=> __( 'choose icon for social', 'memberprofile' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Fifth Social Url', 'memberprofile' ),
			"param_name" 	=> "social_url5",
			"description" 	=> __( 'Fifth social url', 'memberprofile' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Fifth Social color', 'memberprofile' ),
			"param_name" 	=> "social_clr5",
			"description" 	=> __( 'Fifth color of social icon', 'memberprofile' ),
			"group" 		=> 'Social',
		),
	),
) );

