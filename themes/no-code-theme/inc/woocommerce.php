<?php
function fashion_theme_use_block_editor_for_post_type( $can_edit, $post_type ) {
    if ( $post_type == 'product' ) {
        $can_edit = true;
    }

    return $can_edit;
}

add_filter( 'use_block_editor_for_post_type', 'fashion_theme_use_block_editor_for_post_type', 10, 2 );

