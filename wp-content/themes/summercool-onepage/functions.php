<?php
/**
 * Theme functions.
 *
 * @package SummerCoolOnepage
 */

if (! defined('ABSPATH')) {
    exit;
}

function summercool_onepage_assets(): void
{
    wp_enqueue_style(
        'summercool-onepage-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'summercool-onepage-script',
        get_template_directory_uri() . '/script.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'summercool_onepage_assets');

function summercool_onepage_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'summercool_onepage_setup');
