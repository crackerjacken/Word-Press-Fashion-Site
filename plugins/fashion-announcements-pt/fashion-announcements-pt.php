<?php
/*
 * Plugin Name: Fashion Announcements Post Type
 *  Description:      Announcements for cms.
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            Emmanuella
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       fash
 */

add_action('init', 'fash_announcements_pt');

function fash_announcements_pt() {
    $labels = array(
        'name'                  => __('Announcements', 'fash'),
        'singular_name'         => __('Announcement', 'fash'),
        'add_new'               => __('Add New', 'fash'),
        'add_new_item'          => __('Add New Announcement', 'fash'),
        'edit_item'             => __('Edit Announcement', 'fash'),
        'new_item'              => __('New Announcement', 'fash'),
        'view_item'             => __('View Announcement', 'fash'),
        'view_items'            => __('View Announcements', 'fash'),
        'search_items'          => __('Search Announcements', 'fash'),
        'not_found'             => __('No Announcements found.', 'fash'),
        'not_found_in_trash'    => __('No Announcements found in Trash.', 'fash'),
        'parent_item_colon'     => __('Parent Announcements:', 'fash'),
        'all_items'             => __('All Announcements', 'fash'),
        'archives'              => __('Announcement Archives', 'fash'),
        'attributes'            => __('Announcement Attributes', 'fash'),
        'insert_into_item'      => __('Insert into Announcement', 'fash'),
        'uploaded_to_this_item' => __('Uploaded to this Announcement', 'fash'),
        'featured_image'        => __('Featured Image', 'fash'),
        'set_featured_image'    => __('Set featured image', 'fash'),
        'remove_featured_image' => __('Remove featured image', 'fash'),
        'use_featured_image'    => __('Use as featured image', 'fash'),
        'menu_name'             => __('Announcements', 'fash'),
        'filter_items_list'     => __('Filter Announcements List', 'fash'),
        'filter_by_date'        => __('Filter by date', 'fash'),
        'items_list_navigation' => __('Announcements list navigation', 'fash'),
        'items_list'            => __('Announcements list', 'fash'),
        'item_published'        => __('Announcement published.', 'fash'),
        'item_published_privately' => __('Announcement published privately.', 'fash'),
        'item_reverted_to_draft' => __('Announcement reverted to draft.', 'fash'),
        'item_scheduled'        => __('Announcement scheduled.', 'fash'),
        'item_updated'          => __('Announcement updated.', 'fash'),
        'item_link'             => __('Announcement Link', 'fash'),
        'item_link_description' => __('A link to an announcement.', 'fash'),
    );

    $args = array(
        'labels'                => $labels,
        'description'           => __('Organize and manage company announcements', 'fash'),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'menu_icon'             => 'dashicons-megaphone',
        'capability_type'       => 'post',
        'supports'              => array('title', 'editor', 'revisions'),
        'has_archive'           => false,
        'rewrite'               => array('slug' => 'announcement')
    );

    register_post_type('fash_announcement_pt', $args);
}

