<?php
class Smtone_Custom_Types {

    function __construct() {
        add_action( 'init', array( $this, 'register_cpts' ) );
    }

    public function register_cpts() {
        $this->register_product_cpt();
    }

    private function register_product_cpt() {
        $labels = array(
            'name'                  => esc_html_x( 'Products', 'Post Type General Name', 'smtone' ),
            'singular_name'         => esc_html_x( 'Products', 'Post Type Singular Name', 'smtone' ),
            'menu_name'             => esc_html__( 'Products', 'smtone' ),
            'name_admin_bar'        => esc_html__( 'Products', 'smtone' ),
            'parent_item_colon'     => esc_html__( 'Parent Products:', 'smtone' ),
            'all_items'             => esc_html__( 'All Products', 'smtone' ),
            'add_new_item'          => esc_html__( 'Add New Products', 'smtone' ),
            'add_new'               => esc_html__( 'Add Products', 'smtone' ),
            'new_item'              => esc_html__( 'New Products', 'smtone' ),
            'edit_item'             => esc_html__( 'Edit Products', 'smtone' ),
            'update_item'           => esc_html__( 'Update Products', 'smtone' ),
            'view_item'             => esc_html__( 'View Products', 'smtone' ),
            'search_items'          => esc_html__( 'Search Products', 'smtone' ),
            'not_found'             => esc_html__( 'Not found', 'smtone' ),
            'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'smtone' ),
            'items_list'            => esc_html__( 'Products list', 'smtone' ),
            'items_list_navigation' => esc_html__( 'Products list navigation', 'smtone' ),
            'filter_items_list'     => esc_html__( 'Filter Products list', 'smtone' ),
        );

        $args = array(
            'label'               => esc_html__( 'Products', 'smtone' ),
            'description'         => esc_html__( 'Products Post Type', 'smtone' ),
            'labels'              => $labels,
            'supports'            => array('title', 'editor', 'author', 'thumbnail'),
            'taxonomies'          => array( 'product-tag', 'product-category' ),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 20,
            'menu_icon'           => 'dashicons-images-alt2',
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'exclude_from_search' => true,
            'capability_type'     => 'post',
        );

        //register_post_type( 'product', $args );


        $labelss = array(
        'name'                  => _x( 'Slider', 'Post Type General Slider', 'smtone' ),
        'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'smtone' ),
        'menu_name'             => __( 'Slider', 'smtone' ),
        'name_admin_bar'        => __( 'Slider', 'smtone' ),
        'archives'              => __( 'Slider Archives', 'smtone' ),
        'attributes'            => __( 'Slider Attributes', 'smtone' ),
        'parent_item_colon'     => __( 'Parent Slider:', 'smtone' ),
        'all_items'             => __( 'All Slider', 'smtone' ),
        'add_new_item'          => __( 'Add New Slider', 'smtone' ),
        'add_new'               => __( 'Add Slider', 'smtone' ),
        'new_item'              => __( 'New Slider', 'smtone' ),
        'edit_item'             => __( 'Edit Slider', 'smtone' ),
        'update_item'           => __( 'Update Slider', 'smtone' ),
        'view_item'             => __( 'View Slider', 'smtone' ),
        'view_items'            => __( 'View Slider', 'smtone' ),
        'search_items'          => __( 'Search Slider', 'smtone' ),
        'not_found'             => __( 'Not found', 'smtone' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'smtone' ),
        'featured_image'        => __( 'Featured Image', 'smtone' ),
        'set_featured_image'    => __( 'Set featured image', 'smtone' ),
        'remove_featured_image' => __( 'Remove featured image', 'smtone' ),
        'use_featured_image'    => __( 'Use as featured image', 'smtone' ),
        'insert_into_item'      => __( 'Insert into item', 'smtone' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'smtone' ),
        'items_list'            => __( 'Items list', 'smtone' ),
        'items_list_navigation' => __( 'Items list navigation', 'smtone' ),
        'filter_items_list'     => __( 'Filter items list', 'smtone' ),
    );
    $argss = array(
        'label'                 => __( 'Slider', 'smtone' ),
        'description'           => __( 'Post Type Description', 'smtone' ),
        'labels'                => $labelss,
        'supports'              => array('title'),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-gallery',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'slider', $argss );

    }


}
new Smtone_Custom_Types;


function Smtone_register_product_category() {
    $labels = array(
        'name'                       => esc_html_x( 'Categories', 'Taxonomy General Name', 'smtone' ),
        'singular_name'              => esc_html_x( 'Category ', 'Taxonomy Singular Name', 'smtone' ),
        'menu_name'                  => esc_html__( 'Categories', 'smtone' ),
        'all_items'                  => esc_html__( 'All Categories', 'smtone' ),
        'parent_item'                => esc_html__( 'Parent categories', 'smtone' ),
        'parent_item_colon'          => esc_html__( 'Parent categories:', 'smtone' ),
        'new_item_name'              => esc_html__( 'New categories Name', 'smtone' ),
        'add_new_item'               => esc_html__( 'Add New categories', 'smtone' ),
        'edit_item'                  => esc_html__( 'Edit categories', 'smtone' ),
        'update_item'                => esc_html__( 'Update categories', 'smtone' ),
        'view_item'                  => esc_html__( 'View categories', 'smtone' ),
        'separate_items_with_commas' => esc_html__( 'Separate category with commas', 'smtone' ),
        'add_or_remove_items'        => esc_html__( 'Add or remove category', 'smtone' ),
        'choose_from_most_used'      => esc_html__( 'Choose from the most used', 'smtone' ),
        'popular_items'              => esc_html__( 'Popular categories', 'smtone' ),
        'search_items'               => esc_html__( 'Search categories', 'smtone' ),
        'not_found'                  => esc_html__( 'Not Found', 'smtone' ),
        'no_terms'                   => esc_html__( 'No categories', 'smtone' ),
        'items_list'                 => esc_html__( 'categories list', 'smtone' ),
        'items_list_navigation'      => esc_html__( 'categories list navigation', 'smtone' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => false,
        'show_tagcloud'              => false,
    );
    //register_taxonomy( 'product_cat', array( 'product' ), $args );
}
add_action( 'init', 'Smtone_register_product_category', 0 );
