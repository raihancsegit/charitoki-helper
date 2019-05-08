<?php
/*
Plugin Name: Charitoki Helper
Description: Charitoki Helper is the core plugin for charitoki WordPress Theme. You must install this plugin to get a full fledge Charitoki WordPress Theme, otherwise you'll miss some cool features.

Plugin URI: http://smartcoderbd.com/
Author: Raihan Islam
Author URI: http://smartcoderbd.com/
Version: 1.0.0
License: GPL2
Text Domain: charitoki
Domain Path: /languages
*/

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    die( 'No Direct Access' );
}

/*******************************************************************
 * Constants
 *******************************************************************/

/** Charitoki Engine version  */
define( 'CHARITOKI_HELPER_VERSION', '1.0.0' );

/** Charitoki Engine directory path  */
define( 'CHARITOKI_HELPER_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

/** Charitoki Engine includes directory path  */
define( 'CHARITOKI_HELPER_INCLUDES_DIR', trailingslashit( CHARITOKI_HELPER_DIR . 'includes' ) );

/** Charitoki Engine shortcodes directory path  */
define( 'CHARITOKI_HELPER_SHORTCODES_DIR', trailingslashit( CHARITOKI_HELPER_DIR . 'shortcodes' ) );

/** Charitoki Engine url  */
define( 'CHARITOKI_HELPER_URL', trailingslashit(  plugin_dir_url( __FILE__ ) ) );


class Charitoki_Helper {

    public function __construct() {
        register_activation_hook( __FILE__, array($this, 'activate') );

        $this->load_includes();

        $this->load_shortcodes();

        add_action( 'plugins_loaded', array($this, 'load_textdomain') );
    }

    public function activate() {
        // flash rewrite rules because of custom post type
        flush_rewrite_rules();
    }

    public function load_textdomain() {
        load_plugin_textdomain( 'charitoki', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }

    private function load_includes() {
        // Charitoki icons
        //require_once  CHARITOKI_HELPER_INCLUDES_DIR . 'icons.php';

        // shortcode base
        require_once  CHARITOKI_HELPER_INCLUDES_DIR . 'class.shortcode.php';
        //require_once  CHARITOKI_HELPER_INCLUDES_DIR . 'class-Charitoki-util.php';

        // Filters
       // require_once  CHARITOKI_HELPER_INCLUDES_DIR . 'functions-filters.php';

        // custom post type
        //require_once  CHARITOKI_HELPER_INCLUDES_DIR . 'class.custom-types.php';
        require_once  CHARITOKI_HELPER_INCLUDES_DIR . 'slider.php';
        require_once  CHARITOKI_HELPER_INCLUDES_DIR . 'register-custom.php';
        require_once  CHARITOKI_HELPER_INCLUDES_DIR . 'functions.php';


    }

    /**
     * Include all shortcode files
     * @return null
     */
    private function load_shortcodes() {
        foreach ( glob( CHARITOKI_HELPER_SHORTCODES_DIR . '*/*.php' ) as $shortcode ) {
            if ( ! file_exists( $shortcode ) ) {
                continue;
            }
            require_once $shortcode;
        }
    }

}

new Charitoki_Helper;
