<?php
/**
 * Optimize Font Awesome enqueue on front end.
 *
 * @package The7
 */

defined( 'ABSPATH' ) || exit;

/**
 * Class The7_FontAwesome_Enqueue_Optimizer
 */
class The7_FontAwesome_Enqueue_Optimizer {

	/**
	 * Main method. Add all necessary hooks.
	 */
	public function run() {
		add_action( 'wp_footer', array( $this, 'override_revslider_font' ) );
		add_filter( 'style_loader_src', array( $this, 'override_vc_font' ), 10, 2 );
		add_filter( 'revslider_layer_content', array( $this, 'fix_icons_in_revslider_content' ) );
	}

	/**
	 * Override revslider font logic.
	 */
	public function override_revslider_font() {
		if ( empty( $GLOBALS['fa_icon_var'] ) && empty( $GLOBALS['fa_var'] ) ) {
			return;
		}
		if ( The7_Icon_Manager::is_fontawesome_enabled() ) {
			wp_enqueue_style( 'the7-awesome-fonts-back' );
			$GLOBALS['fa_icon_var'] = false;
			$GLOBALS['fa_var']      = false;

			return;
		}
		if ( $this->is_revslider6() ) {
			wp_dequeue_style( 'font-awesome' );
			wp_deregister_style( 'font-awesome' );

			return;
		}
	}

	/**
	 * Override visual composer font logic.
	 *
	 * @param string $src    Style src.
	 * @param string $handle Style handle.
	 *
	 * @return bool
	 */
	public function override_vc_font( $src, $handle ) {
		if ( $handle === 'font-awesome' ) {
			if ( The7_Icon_Manager::is_fontawesome_enabled() ) {
				wp_enqueue_style( 'the7-awesome-fonts-back' );

				return false;
			}
			if ( $this->is_revslider6() ) {
				wp_enqueue_style( 'the7-awesome-fonts-back' );
				$GLOBALS['fa_icon_var'] = false;
				$GLOBALS['fa_var']      = false;

				return false;
			}
		}

		return $src;
	}

	/**
	 * Replace custom revslider icons classes with more common one for older plugin versions.
	 *
	 * Replace 'fa-icon-' with 'fa fa-' if revslidr version less than 6.0.0.
	 *
	 * @param string $html Revslider layer HTML.
	 *
	 * @return string
	 */
	public function fix_icons_in_revslider_content( $html ) {
		if ( The7_Icon_Manager::is_fontawesome_enabled() && ! $this->is_revslider6() ) {
			$html = str_replace( 'fa-icon-', 'fa fa-', $html );
		}

		return $html;
	}

	/**
	 * Return true if active revslidr version is 6.0.0 or greater, otherwise return false.
	 *
	 * @return bool
	 */
	public function is_revslider6() {
		return defined( 'RS_REVISION' ) && version_compare( RS_REVISION, '6.0.0', '>=' );
	}
}
