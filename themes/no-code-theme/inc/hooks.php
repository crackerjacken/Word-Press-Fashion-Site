<?php
/**
 * Enqueue block editor assets
 */
function fashion_theme_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'fashion-theme-block-editor',
        get_theme_file_uri('assets/js/block-editor.js'),
        array(
            'wp-blocks',
            'wp-dom-ready',
            'wp-edit-post'
        ),
        '1.0.0',
        true
    );
}
add_action('enqueue_block_editor_assets', 'fashion_theme_enqueue_block_editor_assets');

/**
 * Enqueue block assets
 */
function fashion_theme_enqueue_block_assets() {
    wp_enqueue_style(
        'fashion-theme-block-styles',
        get_theme_file_uri('assets/css/block-styles.css'),
    );
}
add_action('enqueue_block_assets', 'fashion_theme_enqueue_block_assets');
