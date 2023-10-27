<?php

/*
 * Plugin Name: Grayscale Images
 * Plugin URI: https://www.jesusamieiro.com/
 * Description: This plugin converts all images to grayscale and show the colored image on hover
 * Version: 2.0.0
 * Author: Jesús Amieiro
 * Author URI: https://www.jesusamieiro.com/
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: grayscale-images
 * Domain Path: /languages/
 */

function grayscale_images_enqueue_scripts() {
	wp_enqueue_style('grayscale', plugins_url('/css/grayscale.css', __FILE__), array(), filemtime( plugin_dir_path( __FILE__ ) . 'css/grayscale.css' ) );
}

add_action( 'wp_enqueue_scripts', 'grayscale_images_enqueue_scripts' );



