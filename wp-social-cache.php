<?php
/*
Plugin Name: WP Social Cache
Plugin URI: https://github.com/40Digits/WP-Social-Cache
Description: A developer interface for accessing social media feeds.
Version: 1.0.0
Author: 40Digits
Author URI: http://www.40digits.com
License: MIT
*/

require_once('constants.php');
require_once('autoload.php');

/*
    Setup Actions/Hooks
*/
add_action('init', array('\WPSC\Libs\Plugin', 'initiate'));
add_action('admin_enqueue_scripts', array('\WPSC\Libs\Controllers\Admin', 'load_scripts'));
add_action('wp_enqueue_scripts', array('\WPSC\Libs\Plugin', 'load_scripts'));

// Administration Menu
add_action('admin_menu', array('\WPSC\Libs\Plugin', 'install_admin_panel'));

// Plugin Install/Uninstall hooks
register_activation_hook(__FILE__, array('\WPSC\Libs\Plugin', 'install') );
register_deactivation_hook(__FILE__, array('\WPSC\Libs\Plugin', 'install'));