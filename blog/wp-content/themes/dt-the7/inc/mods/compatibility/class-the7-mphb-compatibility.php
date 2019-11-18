<?php
/**
 * Compatibility class for Hotel Booking Lite plugin
 *
 * @package The7
 */

defined( 'ABSPATH' ) || exit;

/**
 * Class The7_MPHB_Compatibility
 */
class The7_MPHB_Compatibility {

	/**
	 * Main method.
	 */
	public function bootstrap() {
		add_filter( 'presscore_pages_with_basic_meta_boxes', array( $this, 'add_default_meta_boxes' ) );
	}

	/**
	 * Add default meta boxes for plugin main post type `mphb_room_type`.
	 *
	 * @param array $post_types List of post types with default meta boxes.
	 *
	 * @return array
	 */
	public function add_default_meta_boxes( $post_types ) {
		$post_types[] = 'mphb_room_type';

		return $post_types;
	}
}
