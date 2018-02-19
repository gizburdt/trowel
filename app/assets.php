<?php

// Block direct access
if (! defined('ABSPATH')) {
    exit;
}

/*
 * Styles.
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('app', get_stylesheet_directory_uri().'/public/css/app.css', '', '', 'screen');
});

/*
 * Scripts.
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('app', get_stylesheet_directory_uri().'/public/js/app.js', ['jquery'], '', true);

    wp_localize_script('app', 'Trowel', [
        'template_uri'   => get_template_directory_uri(),
        'stylesheet_uri' => get_stylesheet_directory_uri(),
        'home_url'       => get_home_url(),
        'ajax_url'       => admin_url('admin-ajax.php'),
    ]);
});
