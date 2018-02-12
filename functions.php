<?php

// Block direct access
if (! defined('ABSPATH')) {
    exit;
}

/*
 * Allow automatic updates.
 */
add_filter('automatic_updates_is_vcs_checkout', '__return_false', 1);

/*
 * Require.
 */
foreach (['assets'] as $file) {
    require get_stylesheet_directory()."/src/$file.php";
}
