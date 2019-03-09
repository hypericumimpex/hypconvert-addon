<?php
/**
 * Plugin Name: HYP Convert - Addon
 * Plugin URI: https://github.com/hypericumimpex/hypconvert-addon/
 * Description: HYP Convert - Addon is a collection of advanced modules and features that you can enable or disable as per your needs. With these modules, you can integrate with third party mailers, view analytics, A/B test your designs, add advanced scripts and view grid lines within the editor.
 * Version: 1.1.7
 * Author: Romeo C.
 * Author URI: https://github.com/hypericumimpex/
 * Text Domain: convertpro-addon
 *
 * @package convertpro-addon
 */

if ( ! function_exists( 'cp_load_pro_addon' ) ) {

	/**
	 * Loader function
	 */
	function cp_load_pro_addon() {
		require_once 'classes/class-cp-addon-loader.php';
	}
}

add_action( 'plugins_loaded', 'cp_load_pro_addon', 99 );

require_once 'includes/cp-addon-cronjobs.php';

register_activation_hook( __FILE__, 'cpro_addon_activate' );
register_deactivation_hook( __FILE__, 'cpro_addon_deactivate' );
