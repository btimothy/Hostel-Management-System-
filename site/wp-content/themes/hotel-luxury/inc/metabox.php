<?php
/**
 * Calls the class on the post edit screen.
 */
function hotel_luxury_metabox_init() {
	new Hotel_Luxury_MetaBox();
}
if ( is_admin() ) {
	add_action( 'load-post.php',     'hotel_luxury_metabox_init' );
	add_action( 'load-post-new.php', 'hotel_luxury_metabox_init' );
}
/**
 * The Class.
 */
class Hotel_Luxury_MetaBox {
	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
		add_action( 'save_post',      array( $this, 'save'         ) );
	}
	/**
	 * Adds the meta box container.
	 */
	public function add_meta_box( $post_type ) {
		// Limit meta box to certain post types.
		$post_types = array( 'page' );
		if ( in_array( $post_type, $post_types ) ) {
			add_meta_box(
				'hotel_luxury_page_settings',
				__( 'Page Settings', 'hotel-luxury' ),
				array( $this, 'render_meta_box_content' ),
				$post_type,
				'side',
				'high'
			);

		}
	}
	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {
		/*
		 * We need to verify this came from the our screen and with proper authorization,
		 * because save_post can be triggered at other times.
		 */
		// Check if our nonce is set.
		if ( ! isset( $_POST['hotel_luxury_page_settings_nonce'] ) ) {
			return $post_id;
		}
		$nonce = sanitize_text_field( $_POST['hotel_luxury_page_settings_nonce'] );
		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'hotel_luxury_page_settings' ) ) {
			return $post_id;
		}
		/*
		 * If this is an autosave, our form has not been submitted,
		 * so we don't want to do anything.
		 */
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}
		// Check the user's permissions.
		if ( 'page' == get_post_type( $post_id ) ) {
			if ( ! current_user_can( 'edit_page', $post_id ) ) {
				return $post_id;
			}
		} else {
			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return $post_id;
			}
		}
		$settings = isset( $_POST['hotel_luxury_page_settings'] ) ? wp_unslash( $_POST['hotel_luxury_page_settings'] ) : array();
		$settings = wp_parse_args( $settings, array(
			'hide_page_title' => '',
			'hide_title_bar' => '',
			'cover' => '',
		) );
		foreach( $settings as $key => $value ) {
			// Update the meta field.
			update_post_meta( $post_id, '_'.$key, sanitize_text_field( $value ) );
		}


	}
	/**
	 * Render Meta Box content.
	 *
	 * @param WP_Post $post The post object.
	 */
	public function render_meta_box_content( $post ) {
		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'hotel_luxury_page_settings', 'hotel_luxury_page_settings_nonce' );
		$values = array(
			'hide_page_title' => '',
			'hide_title_bar' => '',
			'cover' => '',
		);
		foreach( $values as $key => $value ) {
			$values[ $key ] = get_post_meta( $post->ID, '_'.$key, true );
		}
		?>

        <p>
            <label>
                <input type="checkbox" name="hotel_luxury_page_settings[hide_title_bar]" <?php checked( $values['hide_title_bar'], 1 ); ?> value="1"> <?php _e( 'Hide Title Bar.', 'hotel-luxury' ); ?>
            </label>
        </p>

        <p>
			<label>
				<input type="checkbox" name="hotel_luxury_page_settings[hide_page_title]" <?php checked( $values['hide_page_title'], 1 ); ?> value="1"> <?php _e( 'Hide page title.', 'hotel-luxury' ); ?>
			</label>
		</p>

		<p>
			<label>
				<input type="checkbox" name="hotel_luxury_page_settings[cover]" <?php checked( $values['cover'], 1 ); ?> value="1"> <?php _e( 'Display featured image as header cover.', 'hotel-luxury' ); ?>
			</label>
		</p>

		<?php
	}

}