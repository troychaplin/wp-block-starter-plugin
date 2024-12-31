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

// Include function files
require_once plugin_dir_path(__FILE__) . 'Functions/allowed-blocks.php';
require_once plugin_dir_path(__FILE__) . 'Functions/block-categories.php';
require_once plugin_dir_path(__FILE__) . 'Functions/core-blocks.php';
require_once plugin_dir_path(__FILE__) . 'Functions/customizations.php';
require_once plugin_dir_path(__FILE__) . 'Functions/enqueue-scripts.php';
require_once plugin_dir_path(__FILE__) . 'Functions/register-blocks.php';
require_once plugin_dir_path(__FILE__) . 'Functions/remove-options.php';

// Instantiate the classes
new WPBS\Blocks\AllowedBlocks();
new WPBS\Blocks\BlockCategories();
new WPBS\Blocks\CoreBlocks();
new WPBS\Blocks\Customizations();
new WPBS\Blocks\EnqueueScripts();
new WPBS\Blocks\RegisterBlocks();
new WPBS\Blocks\RemoveOptions();
