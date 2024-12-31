<?php

namespace WPBS;

if (! defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

class EnqueueScripts
{
  public function __construct()
  {
    add_action('enqueue_block_editor_assets', [$this, 'enqueue_block_assets']);
    add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_assets']);
  }

  /**
   * Enqueues the block editor JavaScript assets for the Block Plugin.
   *
   * This function registers and enqueues the JavaScript file required for the block editor.
   * The script is dependent on several WordPress packages such as wp-blocks, wp-components, wp-data, etc.
   *
   * @return void
   */
  public function enqueue_block_assets()
  {
    wp_enqueue_script(
      'wp-block-starter-plugin-editor-js',
      plugin_dir_url(__FILE__) . '../build/wp-block-editor.js',
      array('wp-blocks', 'wp-components', 'wp-data', 'wp-dom-ready', 'wp-edit-post', 'wp-element', 'wp-i18n', 'wp-plugins'),
      null,
      false
    );
  }

  /**
   * Enqueues the admin JavaScript assets for the Block Plugin.
   *
   * This function registers and enqueues the JavaScript file used in the admin
   * area of the Block Plugin. The script is loaded from the build directory
   * and is set to load in the footer of the admin page.
   *
   * @return void
   */
  public function enqueue_admin_assets()
  {
    wp_enqueue_script(
      'wp-block-starter-plugin-admin-js',
      plugin_dir_url(__FILE__) . '../build/wp-block-admin.js',
      array(),
      null,
      true
    );
  }
}
