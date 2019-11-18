<?php
// File Security Check.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class DT_Blog_Shortcode_HTML
 */
class DT_Portfolio_Shortcode_HTML {
	/**
	 * Return "Details" button HTML.
	 *
	 * @param string       $btn_style
	 * @param string|null  $btn_text
	 * @param array|string $class
	 *
	 * @return string
	 */
	public static function add_projec_class( $class = array() ) {
		if ( 'browser_width_based' === $this->get_att( 'responsiveness' ) ) {
			$class[] = 'resize-by-browser-width';
		}

		return $class;
	}

	public static function get_details_btn( $btn_style = 'default', $target = '', $btn_text = '', $btn_link = '', $class = array() ) {
		if ( ! is_array( $class ) ) {
			$class = explode( ' ', $class );
		}

		$class[] = 'post-details';

		$btn_classes = array(
			'default_link' => 'details-type-link',
			'default_button' => 'details-type-btn',
		);

		if ( isset( $btn_classes[ $btn_style ] ) ) {
			$class[] = $btn_classes[ $btn_style ];
		}

		$btn_text .= '<i class="fa fa-caret-right" aria-hidden="true"></i>';
		$return_class = implode( ' ', $class );

		return '<a class=" '. $return_class .' " href=" '.$btn_link.' " target="'.$target.'">' . $btn_text . '</a>';
		//presscore_post_details_link( null, $class, $btn_text );
	}

	/**
	 * Output posts filter.
	 *
	 * @param array $terms
	 * @param array $class
	 */
	public static function display_posts_filter( $terms, $class = array() ) {
		if ( ! is_array( $class ) ) {
			$class = explode( ' ', $class );
		}

		$class[] = 'filter';

		presscore_get_category_list( array(
			'data'  => array(
				'terms'       => $terms,
				'all_count'   => false,
				'other_count' => false,
			),
			'class' => implode( ' ', $class ),
		) );
	}
}