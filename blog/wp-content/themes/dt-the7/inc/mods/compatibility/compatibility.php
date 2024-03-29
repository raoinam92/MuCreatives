<?php
/**
 * Compatibility module.
 *
 * @since 3.0.0
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! class_exists( 'Presscore_Modules_ComparibilityModule', false ) ) :

	class Presscore_Modules_ComparibilityModule {

		/**
		 * Execute module.
		 */
		public static function execute() {
			$path = dirname( __FILE__ );

			include $path . '/class-compatibility-vc.php';
			include $path . '/class-compatibility-ubermenu.php';
			include $path . '/class-compatibility-tec.php';
			include $path . '/class-compatibility-layerslider.php';
			include $path . '/class-compatibility-jetpack.php';
			include $path . '/class-compatibility-bbpress.php';
			include $path . '/class-compatibility-ldlms.php';
			include $path . '/class-compatibility-gopricing.php';
			include $path . '/wpml/class-compatibility-wpml.php';
			include $path . '/backward-compat/mod-the7-compatibility.php';
			include $path . '/woocommerce/class-compatibility-woocommerce.php';
			include $path . '/edd/class-compatibility-edd.php';
			include $path . '/class-the7-sensei-compatibility.php';

			The7_Sensei_Compatibility::bootstrap();

			if ( defined( 'MECEXEC' ) ) {
				require_once $path . '/class-the7-mec-compatibility.php';
				$mec_compat = new The7_MEC_Compatibility();
				$mec_compat->bootstrap();
			}

			if ( defined( 'MPHB_PLUGIN_FILE' ) ) {
				require_once $path . '/class-the7-mphb-compatibility.php';
				$mphb_compat = new The7_MPHB_Compatibility();
				$mphb_compat->bootstrap();
			}
		}
	}

	Presscore_Modules_ComparibilityModule::execute();

endif;
