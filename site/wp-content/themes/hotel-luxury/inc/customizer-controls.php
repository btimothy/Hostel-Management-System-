<?php
class Hotel_Luxury_Group_Settings_Heading_Control extends WP_Customize_Control {
	public $settings = 'blogname';
	public $description = '';
	public $title = '';
	public $group = '';
	public $type = '';
	/**
	 * Render the description and title for the sections
	 */
	public function render_content() {
		switch ( $this->type ) {
			default:
			case 'group_heading_top':
				echo '<h4 class="customizer-group-heading group-heading-top">' . $this->title . '</h4>';
				if ( $this->description != '' ) {
					echo '<p class="customizer-group-subheading">' . $this->description . '</p>';
				}
				break;
			case 'group_heading':
				echo '<h4 class="customizer-group-heading">' . $this->title . '</h4>';
				if ( $this->description != '' ) {
					echo '<p class="customizer-group-subheading">' . $this->description . '</p>';
				}
				break;
			case 'group_heading_message':
				echo '<h4 class="customizer-group-heading-message">' . $this->title . '</h4>';
				if ( $this->description != '' ) {
					echo '<p class="customizer-group-heading-message">' . $this->description . '</p>';
				}
				break;
			case 'hr' :
				echo '<hr />';
				break;
		}
	}
}

class Hotel_Luxury_Customize_Pro_Control extends WP_Customize_Control {
	public $type = 'hotel_luxury_pro';
	function render_content(){
		if ( ! empty( $this->label ) ) : ?>
			<span class="customize-control-title hotel-pro-title"><?php echo esc_html( $this->label ); ?></span>
		<?php endif;
		if ( ! empty( $this->description ) ) : ?>
			<div class="description customize-control-description hotel-pro-description"><?php echo $this->description ; ?></div>
		<?php endif; ?>
		<?php
	}
}