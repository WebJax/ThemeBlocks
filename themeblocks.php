<?php
/**
 * Plugin Name: Dynamic Blocks Plugin
 * Description: A plugin to create individual Gutenberg blocks as needed.
 * Version: 1.0
 * Author: WebJax
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Include block registration.
require_once plugin_dir_path(__FILE__) . 'block-registration.php';
