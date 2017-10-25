<?php
/**
 * Plugin Name:       WP Plugin
 * Plugin URI:        http://micheleivani.com
 * Description:       Test plugin.
 * Version:           0.1.0
 * Author:            Michele Ivani
 * Author URI:        http://micheleivani.com
 * Text Domain:       wpplugin
 * Domain Path:       /languages
 */

namespace MI;

// If this file is called directly, abort.
if (! defined( 'WPINC' )) {
    die;
}

class Options_Page
{

    function __construct()
    {
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
    }

    function admin_menu()
    {
        add_options_page(
        'WP Plugin Options',
        'WP Plugin Options',
        'manage_options',
        'wpplugin-options',
        array(
            $this,
            'settings_page'
        )
        );
    }

    function settings_page()
    {
    ?>
        <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
       <p>Lorem ipsum</p>
    </div>
    <?php
    }
}

new Options_Page;
