<?php
namespace HotelElements;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ElementorCustomElement {
	/**
	 * Plugin constructor.
	 */
	public function __construct() {
		$this->add_actions();
	}

	private function add_actions() {
		add_action( 'elementor/init', array( $this, 'add_elementor_category' ) );
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'on_widgets_registered' ] );
	}

	public function add_elementor_category()
	{
		\Elementor\Plugin::instance()->elements_manager->add_category( 'hotel-elements', array(
			'title' => __( 'Theme Elements', 'hotel-luxury' ),
		), 1 );

	}

	public function on_widgets_registered() {
		$this->includes();
		$this->register_widget();
	}

	private function includes()
	{
		// Theme Elements
		require_once __DIR__ . '/elementor/rooms.php';
		require_once __DIR__ . '/elementor/featured-box.php';
		require_once __DIR__ . '/elementor/upcoming-event.php';
	}

	private function register_widget() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \HotelElements\Widgets\Hotel_Luxury_Elements_Rooms() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \HotelElements\Widgets\Hotel_Luxury_Elements_Featured_Box() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \HotelElements\Widgets\Hotel_Luxury_Elements_Upcoming_Events() );
	}
}

new ElementorCustomElement();