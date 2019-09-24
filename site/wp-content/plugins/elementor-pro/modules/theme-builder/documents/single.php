<?php
namespace ElementorPro\Modules\ThemeBuilder\Documents;

use Elementor\DB;
use ElementorPro\Classes\Utils;
use ElementorPro\Modules\ThemeBuilder\Module;
use ElementorPro\Plugin;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Single extends Theme_Page_Document {

	/**
	 * Document sub type meta key.
	 */
	const SUB_TYPE_META_KEY = '_elementor_template_sub_type';

	public static function get_properties() {
		$properties = parent::get_properties();

		$properties['location'] = 'single';
		$properties['condition_type'] = 'singular';

		return $properties;
	}

	public function get_name() {
		return 'single';
	}

	public static function get_title() {
		return __( 'Single', 'elementor-pro' );
	}

	public static function get_editor_panel_config() {
		$config = parent::get_editor_panel_config();
		$config['widgets_settings']['theme-post-content'] = [
			'show_in_panel' => true,
		];

		return $config;
	}

	protected static function get_editor_panel_categories() {
		$categories = [
			'theme-elements-single' => [
				'title' => __( 'Single', 'elementor-pro' ),
			],
		];

		return $categories + parent::get_editor_panel_categories();
	}

	public function get_remote_library_type() {
		$sub_type = $this->get_meta( self::SUB_TYPE_META_KEY );

		if ( $sub_type ) {
			if ( 'not_found404' === $sub_type ) {
				$sub_type = '404 page';
			} else {
				$sub_type = 'single ' . $sub_type;
			}

			return $sub_type;
		}

		return parent::get_remote_library_type();
	}

	public function get_container_classes() {
		$classes = parent::get_container_classes();

		if ( is_singular() /* !404*/ ) {
			$post_classes = get_post_class( '', get_the_ID() );
			$classes .= ' ' . implode( ' ', $post_classes );
		}

		return $classes;
	}

	public function print_content() {
		$requested_post_id = get_the_ID();
		if ( $requested_post_id !== $this->post->ID ) {
			$requested_document = Module::instance()->get_document( $requested_post_id );

			/**
			 * if current requested document is theme-document & it's not a content type ( like header/footer/sidebar )
			 * show a placeholder instead of content.
			 */
			if ( $requested_document && ! $requested_document instanceof Section && $requested_document->get_location() !== $this->get_location() ) {
				echo '<div class="elementor-theme-builder-content-area">' . __( 'Content Area', 'elementor-pro' ) . '</div>';

				return;
			}
		}

		parent::print_content();
	}

	protected function _register_controls() {
		parent::_register_controls();

		$post_type = $this->get_main_meta( self::SUB_TYPE_META_KEY );

		$latest_posts = get_posts( [
			'posts_per_page' => 1,
			'post_type' => $post_type,
		] );

		if ( ! empty( $latest_posts ) ) {
			$this->update_control(
				'preview_type',
				[
					'default' => 'single/' . $post_type,
				]
			);

			$this->update_control(
				'preview_id',
				[
					'default' => $latest_posts[0]->ID,
				]
			);
		}
	}

	public static function get_preview_as_options() {
		$post_types = Utils::get_public_post_types();
		unset( $post_types['product'] );

		$post_types['attachment'] = get_post_type_object( 'attachment' )->label;
		$post_types_options = [];

		foreach ( $post_types as $post_type => $label ) {
			$post_types_options[ 'single/' . $post_type ] = get_post_type_object( $post_type )->labels->singular_name;
		}

		return [
			'single' => [
				'label' => __( 'Single', 'elementor-pro' ),
				'options' => $post_types_options,
			],
			'page/404' => __( '404', 'elementor-pro' ),
		];
	}

	public function get_depended_widget() {
		return Plugin::elementor()->widgets_manager->get_widget_types( 'theme-post-content' );
	}

	public function get_elements_data( $status = DB::STATUS_PUBLISH ) {
		$data = parent::get_elements_data();

		if ( Plugin::elementor()->preview->is_preview_mode() && self::get_property( 'location' ) === Module::instance()->get_locations_manager()->get_current_location() ) {
			$has_the_content = false;

			$depended_widget = $this->get_depended_widget();

			Plugin::elementor()->db->iterate_data( $data, function( $element ) use ( &$has_the_content, $depended_widget ) {
				if ( isset( $element['widgetType'] ) && $depended_widget->get_name() === $element['widgetType'] ) {
					$has_the_content = true;
				}
			} );

			if ( ! $has_the_content ) {
				add_action( 'wp_footer', [ $this, 'preview_error_handler' ] );
			}
		}

		return $data;
	}

	public function preview_error_handler() {
		$depended_widget_title = $this->get_depended_widget()->get_title();

		wp_localize_script( 'elementor-frontend', 'elementorPreviewErrorArgs', [
			/* translators: %s: is the widget name. */
			'headerMessage' => sprintf( __( 'The %s Widget was not found in your template.', 'elementor-pro' ), $depended_widget_title ),
			/* translators: %1$s: is the widget name. %2$s: is the template name.  */
			'message' => sprintf( __( 'You must include the %1$s Widget in your template (<strong>%2$s</strong>), in order for Elementor to work on this page.', 'elementor-pro' ), $depended_widget_title, static::get_title() ),
			'strings' => [
				'confirm' => __( 'Edit Template', 'elementor-pro' ),
			],
			'confirmURL' => $this->get_edit_url(),
		] );
	}

	/**
	 * @since  2.0.6
	 * @access public
	 */
	public function save_template_type() {
		parent::save_template_type();

		$conditions_manager = Module::instance()->get_conditions_manager();

		if ( ! empty( $_REQUEST[ self::SUB_TYPE_META_KEY ] ) ) {
			$sub_type = $_REQUEST[ self::SUB_TYPE_META_KEY ];

			if ( $conditions_manager->get_condition( $sub_type ) ) {
				$this->update_meta( self::SUB_TYPE_META_KEY, $sub_type );

				$conditions_manager->save_conditions( $this->post->ID, [
					[
						'include',
						'singular',
						$sub_type,
					],
				] );
			}
		}
	}
}
