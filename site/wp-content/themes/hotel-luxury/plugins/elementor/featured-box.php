<?php
namespace HotelElements\Widgets;

use  Elementor\Widget_Base ;
use  Elementor\Controls_Manager ;
use  Elementor\Utils ;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Hotel_Luxury_Elements_Featured_Box extends Widget_Base {

	public function get_name() {
		return 'hotel-luxury-featured-box';
	}

	public function get_title() {
		return __( 'Featured Box', 'hotel-luxury' );
	}

	public function get_icon() {
		// Icon name from the Elementor font file, as per http://dtbaker.net/web-development/creating-your-own-custom-elementor-widgets/
		return 'fa fa-cube';
	}

	public function get_categories() {
		return [ 'hotel-elements' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => esc_html__( 'Featured Box', 'hotel-luxury' ),
			]
		);

		$this->add_control(
			'featured_title',
			[
				'label' => __( 'Title', 'hotel-luxury' ),
				'type' => Controls_Manager::TEXT,
				'default' => ''
			]
		);

		$this->add_control(
			'featured_image',
			[
				'label' => __( 'Choose Image', 'hotel-luxury' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src()
				]
			]
		);

		$this->add_control(
			'featured_link',
			[
				'label' => __( 'Featured URL', 'hotel-luxury' ),
				'type' => Controls_Manager::URL,
				'default' => [
					'url' => 'http://',
					'is_external' => ''
				],
				'show_external' => false
			]
		);

		$this->add_control(
			'more_text',
			[
				'label' => __( 'Readmore Text', 'hotel-luxury' ),
				'type' => Controls_Manager::TEXT,
				'default' =>  __( 'Read more', 'hotel-luxury' )
			]
		);

		$this->end_controls_section();
	}


	protected function render( $instance = [] ) {

		$settings = $this->get_settings();
		$image = $settings['featured_image'];
		$featured_image = wp_get_attachment_image(  $image['id'], 'hotel_luxury_medium' );
		?>
		<div class="banner-item-wrapper">
			<div class="banner-item">
				<?php if ( $image ) : ?>
					<div class="banner-details">
						<h3 class="banner-title"><?php echo  $settings['featured_title']  ; ?></h3>
						<a href="<?php echo esc_url( $settings['featured_link']['url'] ) ; ?>" class="banner-more"><?php echo  $settings['more_text']  ; ?></a>
					</div>
					<?php echo $featured_image; ?>
				<?php endif; ?>
			</div>
		</div>

		<?php
	}

	protected function _content_template() {}
}

