<?php
function charitoki_register_Events_type()
{
    $labels = array(
        'name'                  => esc_html_x('Events', 'Events', 'charitoki'),
        'singular_name'         => esc_html_x('Events', 'Events', 'charitoki'),
        'menu_name'             => esc_html__('Events', 'charitoki'),
        'name_admin_bar'        => esc_html__('Events', 'charitoki'),
        'parent_item_colon'     => esc_html__('Parent Events:', 'charitoki'),
        'all_items'             => esc_html__('All Events', 'charitoki'),
        'add_new_item'          => esc_html__('Add New Events', 'charitoki'),
        'add_new'               => esc_html__('Add Events', 'charitoki'),
        'new_item'              => esc_html__('New Events', 'charitoki'),
        'edit_item'             => esc_html__('Edit Events', 'charitoki'),
        'update_item'           => esc_html__('Update Events', 'charitoki'),
        'view_item'             => esc_html__('View Events', 'charitoki'),
        'search_items'          => esc_html__('Search Events', 'charitoki'),
        'not_found'             => esc_html__('Not found', 'charitoki'),
        'not_found_in_trash'    => esc_html__('Not found in Trash', 'charitoki'),
        'items_list'            => esc_html__('Events list', 'charitoki'),
        'items_list_navigation' => esc_html__('Events list navigation', 'charitoki'),
        'filter_items_list'     => esc_html__('Filter Events list', 'charitoki'),
    );

    $args = array(
        'label' => esc_html__('Events', 'charitoki'),
        'description' => esc_html__('Events Post Type', 'charitoki'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'author', 'thumbnail'),
        'taxonomies' => array('Events-tag', 'Events-category'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-images-alt2',
        'show_in_admin_bar' => true,
        'can_export' => true,
        'exclude_from_search' => true,
        'capability_type' => 'post',
    );

    register_post_type('events', $args);
}
add_action('init','charitoki_register_Events_type');






