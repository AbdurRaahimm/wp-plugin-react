<?php
/**
 * Plugin Name:       WordPress React Plugin
 * Description:       A Chart list made by WordPress.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Abdur Rahim
 * Author URI:       https://www.facebook.com/Rahim72446
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wpreact
 */


//  Dashboard widget

 function new_dashboard_setup(){
    wp_add_dashboard_widget('wp_dashboard_widget', 'WordPress React Plugin', 'wp_dashboard_widget_function');

 }
add_action('wp_dashboard_setup', 'new_dashboard_setup');

function wp_dashboard_widget_function(){
    require_once plugin_dir_path( __FILE__ ) . 'templates/app.php';
}


// add script 

function wp_react_enqueue_scripts() {
    wp_enqueue_style( 'wp-react-style', plugin_dir_url( __FILE__ ) . 'build/index.css' );
    wp_enqueue_script( 'wp-react-script', plugin_dir_url( __FILE__ ) . 'build/index.js', array( 'wp-element' ), '1.0.0', true );
}

add_action( 'admin_enqueue_scripts', 'wp_react_enqueue_scripts' );