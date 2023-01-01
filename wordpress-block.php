<?php
/**
 * Plugin Name: WordPress Block
 */

 function mywp_block_script_register(){
    wp_enqueue_script(
        'wordpress-block-script',
        plugin_dir_url(__FILE__).'/build/index.js',
        array('wp-blocks', 'wp-editor'),
        true,
        false
 );
 }

 add_action('enqueue_block_editor_assets', 'mywp_block_script_register');