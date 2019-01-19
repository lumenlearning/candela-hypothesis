<?php

/**
 * @wordpress-plugin
 * Plugin Name: Candela Hypothesis
 * Plugin URI: https://web.hypothes.is/
 * Description: This is a fork of the hypothesis plugin included in pressbooks-textbooks originally authored by Tim Owens.
 * Author: Tim Owens, Lumen Learning
 * Author URI: https://lumenlearning.com
 * Text Domain: lumen
 * License: GPLv2 or later
 * GitHub Plugin URI: https://github.com/lumenlearning/candela-hypothesis
 */

use Candela\Hypothesis;

if ( ! defined( 'ABSPATH' ) ) {
  die();
}

// -----------------------------------------------------------------------------
// Setup
// -----------------------------------------------------------------------------

if ( ! defined( 'CANDELA_HYPOTHESIS_PLUGIN_DIR' ) ) {
	define( 'CANDELA_HYPOTHESIS_PLUGIN_DIR', ( is_link( WP_PLUGIN_DIR . '/candela-hypothesis' ) ? trailingslashit( WP_PLUGIN_DIR . '/candela-hypothesis' ) : trailingslashit( __DIR__ ) ) );
}

// -----------------------------------------------------------------------------
// Autoloader
// -----------------------------------------------------------------------------

require CANDELA_HYPOTHESIS_PLUGIN_DIR . 'autoloader.php';

// Do our necessary plugin setup and add_action routines.
Hypothesis::init();

?>
