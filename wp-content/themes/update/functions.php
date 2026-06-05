<?php

function glass_theme_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'glass_theme_scripts');

function load_model_viewer() {
    echo '<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>';
}
add_action('wp_head', 'load_model_viewer');

?>