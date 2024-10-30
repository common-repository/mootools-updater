<?php
/*
Plugin Name: MooTools Updater
Plugin URI: http://www.ramoonus.nl/wordpress/mootools-updater/
Description: This plugin updates mootools to the latest (stable) version.
Version: 1.5.2
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/

function rw_mootools() {
		wp_deregister_script('mootools'); // deregister
		wp_enqueue_script('mootools', plugins_url('/js/mootools.min.js', __FILE__), false, '1.5.2');
}
add_action('init', 'rw_mootools');
?>