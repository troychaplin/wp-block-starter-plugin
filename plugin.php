<?php

/**
 * Plugin Name:       WP Block Starter Plugin
 * Description:       A custom block and functionality plugin for WordPress.
 * Requires at least: 6.6
 * Requires PHP:      8.2
 * Version:           0.1.0
 * Author:            Troy Chaplin
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-block-starter-plugin
 *
 * @package CreateBlock
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Include Composer's autoload file
require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

// Instantiate the classes
new Functions\AllowedBlocks();
new Functions\BlockCategories();
new Functions\CoreBlocks();
new Functions\Customizations();
new Functions\EnqueueScripts();
new Functions\RegisterBlocks();
new Functions\RemoveOptions();
