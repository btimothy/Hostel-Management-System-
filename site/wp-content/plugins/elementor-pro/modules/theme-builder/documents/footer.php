<?php
namespace ElementorPro\Modules\ThemeBuilder\Documents;

use Elementor\Core\DocumentTypes\Post;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Footer extends Theme_Section_Document {

	public static function get_properties() {
		$properties = parent::get_properties();

		$properties['location'] = 'footer';

		return $properties;
	}

	public function get_name() {
		return 'footer';
	}

	public static function get_title() {
		return __( 'Footer', 'elementor-pro' );
	}

	public function get_css_wrapper_selector() {
		return '.elementor-' . $this->get_main_id();
	}

	protected static function get_editor_panel_categories() {
		// Move to top as active.
		$categories = [
			'theme-elements' => [
				'title' => __( 'Site', 'elementor-pro' ),
				'active' => true,
			],
		];

		return $categories + parent::get_editor_panel_categories();
	}


	protected function _register_controls() {
		parent::_register_controls();

		Post::register_style_controls( $this );
	}
}
