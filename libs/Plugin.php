<?php

namespace WPSC\Libs;

use \WPSC\Libs\Controllers\Admin;

class Plugin {

    public static function install () {

    }

    public static function uninstall () {

    }

    public static function initiate () {

    }

    public static function load_scripts () {

    }

    public static function install_admin_panel () {
        add_menu_page("Social Cache", "Social Cache", "administrator", "wpsc-menu",  array('\WPSC\Libs\Controllers\Admin', 'index'));

        add_action("admin_head", array('\WPSC\Libs\Controllers\Admin', 'header'));
        add_action("admin_foot", array('\WPSC\Libs\Controllers\Admin', 'footer'));
    }

}