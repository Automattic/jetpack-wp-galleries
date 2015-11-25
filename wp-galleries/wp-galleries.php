<?php

/*
 * Plugin Name: WordPress Galleries
 * Plugin URI: http://jetpack.me
 * Description: A feature plugin for core to improve galleries by forking Jetpack Tiled Galleries
 * Author: Automattic
 * Version: 0.0.1-dev
 * Author URI: http://jetpack.me
 * License: GPL2+
 * Text Domain: wp-galleries
 */

include "tiled-gallery.php";

add_action( 'jetpack_modules_loaded', 'jetpack_tiled_gallery_loaded' );

function jetpack_tiled_gallery_loaded() {
	Jetpack::enable_module_configurable( __FILE__ );
	Jetpack::module_configuration_load( __FILE__, 'jetpack_tiled_gallery_configuration_load' );
}

function jetpack_tiled_gallery_configuration_load() {
	wp_safe_redirect( admin_url( 'options-media.php' ) );
	exit;
}