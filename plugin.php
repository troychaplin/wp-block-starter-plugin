<?php

/**
 * Plugin Name:       WP Block Starter Plugin
 * Description:       A custom block and functionality plugin for WordPress.
 * Requires at least: 6.6
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
$classes = [
    \WPBS\AllowedBlocks::class,
    \WPBS\BlockCategories::class,
    \WPBS\CoreBlocks::class,
    \WPBS\Customizations::class,
    \WPBS\EnqueueScripts::class,
    \WPBS\RegisterBlocks::class,
    \WPBS\RemoveOptions::class,
];

foreach ($classes as $class) {
    new $class();
}