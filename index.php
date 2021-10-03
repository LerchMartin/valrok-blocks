<?php
/**
 * Plugin Name: Valrok Blocks
 * Plugin URI: https://google.com
 * Description: This plugin creates Gutenberg blocks using ACF
 * Version: 1.0.0
 * Author: Martin Lerch
 * Author URI: https://google.com
 * License: MIT
 * Text Domain: acf-guten-blocks
 * Domain Path: /languages
 *
 * @package Valrok Blocks
 */

if( ! defined('ABSPATH')) exit;

// Define Constants.
define( 'BLOCK_PATH', plugin_dir_path( __FILE__ ) . '/blocks/' );

// File Includes
include_once 'inc/register-blocks.php';

// add_action('wp_enqueue_scripts', 'loadScripts');

function loadScripts(){
    wp_enqueue_scripts('blockType', plugin_dir_url(__FILE__) . 'app.js', array('wp-blocks'));
}

