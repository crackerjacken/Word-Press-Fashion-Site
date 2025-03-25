<?php
/*
 * Plugin Name: Fashion Lookbook Guide Post Type
 * Description: Lookbook Guide for Fashion.
 * Version: 0.1.0
 * Requires at least: 6.7
 * Requires PHP: 7.4
 * Author: Emmanuella
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: fash
 */

add_action('init', 'fashion_lookbook_post_type');

function fashion_lookbook_post_type() {
    $labels = array(
        'name'                  => __('Lookbooks', 'fash'),
        'singular_name'         => __('Lookbook', 'fash'),
        'add_new'               => __('Add New', 'fash'),
        'add_new_item'          => __('Add New Lookbook', 'fash'),
        'edit_item'             => __('Edit Lookbook', 'fash'),
        'new_item'              => __('New Lookbook', 'fash'),
        'view_item'             => __('View Lookbook', 'fash'),
        'view_items'            => __('View Lookbooks', 'fash'),
        'search_items'          => __('Search Lookbooks', 'fash'),
        'not_found'             => __('No Lookbooks found.', 'fash'),
        'not_found_in_trash'    => __('No Lookbooks found in Trash.', 'fash'),
        'parent_item_colon'     => __('Parent Lookbooks:', 'fash'),
        'all_items'             => __('All Lookbooks', 'fash'),
        'archives'              => __('Lookbook Archives', 'fash'),
        'attributes'            => __('Lookbook Attributes', 'fash'),
        'insert_into_item'      => __('Insert into Lookbook', 'fash'),
        'uploaded_to_this_item' => __('Uploaded to this Lookbook', 'fash'),
        'featured_image'        => __('Cover Image', 'fash'),
        'set_featured_image'    => __('Set cover image', 'fash'),
        'remove_featured_image' => __('Remove cover image', 'fash'),
        'use_featured_image'    => __('Use as cover image', 'fash'),
        'menu_name'             => __('Lookbooks', 'fash'),
        'filter_items_list'     => __('Filter Lookbook list', 'fash'),
        'filter_by_date'        => __('Filter by date', 'fash'),
        'items_list_navigation' => __('Lookbook list navigation', 'fash'),
        'items_list'            => __('Lookbook list', 'fash'),
        'item_published'        => __('Lookbook published.', 'fash'),
        'item_published_privately' => __('Lookbook published privately.', 'fash'),
        'item_reverted_to_draft' => __('Lookbook reverted to draft.', 'fash'),
        'item_scheduled'        => __('Lookbook scheduled.', 'fash'),
        'item_updated'          => __('Lookbook updated.', 'fash'),
        'item_link'             => __('Lookbook Link', 'fash'),
        'item_link_description' => __('A link to a lookbook.', 'fash'),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => __('Create and manage fashion lookbooks.', 'fash'),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'menu_icon'             => 'dashicons-images-alt2',
        'capability_type'       => 'post',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions'),
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'lookbook'),
    );

    register_post_type('fashion_lookbook', $args);
}
