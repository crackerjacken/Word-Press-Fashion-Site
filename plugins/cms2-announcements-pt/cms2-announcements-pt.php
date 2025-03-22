<?php
/*
 * Plugin Name: cms2 Announcements Post Type
 *  Description:      Announcements for cms.
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            Emmanuella
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       cms2
 */

 add_action('init', 'fashion_lookbook_post_type');

 function fashion_lookbook_post_type() {
     $labels = array(
         'name'                  => __('Lookbooks', 'fashion'),
         'singular_name'         => __('Lookbook', 'fashion'),
         'add_new'               => __('Add New', 'fashion'),
         'add_new_item'          => __('Add New Lookbook', 'fashion'),
         'edit_item'             => __('Edit Lookbook', 'fashion'),
         'new_item'              => __('New Lookbook', 'fashion'),
         'view_item'             => __('View Lookbook', 'fashion'),
         'search_items'          => __('Search Lookbooks', 'fashion'),
         'not_found'             => __('No lookbooks found.', 'fashion'),
         'not_found_in_trash'    => __('No lookbooks found in Trash.', 'fashion'),
         'all_items'             => __('All Lookbooks', 'fashion'),
         'archives'              => __('Lookbook Archives', 'fashion'),
         'attributes'            => __('Lookbook Attributes', 'fashion'),
         'featured_image'        => __('Cover Image', 'fashion'),
         'set_featured_image'    => __('Set cover image', 'fashion'),
         'remove_featured_image' => __('Remove cover image', 'fashion'),
         'use_featured_image'    => __('Use as cover image', 'fashion'),
         'menu_name'             => __('Lookbooks', 'fashion'),
     );
 
     $args = array(
         'labels'             => $labels,
         'description'        => __('Seasonal and themed fashion lookbooks.', 'fashion'),
         'public'             => true,
         'has_archive'        => true,
         'show_ui'            => true,
         'show_in_menu'       => true,
         'show_in_rest'       => true,
         'menu_icon'          => 'dashicons-images-alt2',
         'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions'),
         'rewrite'            => array('slug' => 'lookbook'),
     );
 
     register_post_type('fashion_lookbook', $args);
 }
 

