<?php

function pga_supports () {
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo', array(
        'height' => 480,
        'width'  => 720,
    ) );
    
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

// Add the style.css stylesheet
function pga_register_assets () {
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jQuerycdn', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, false, true );
    wp_enqueue_script('popper_js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', false, '', true );
    wp_enqueue_script('isotop', '//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array('jquery'), false, true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/main.js', false, '', true );
    wp_enqueue_script('jquery');


}

function pga_init() {
    register_post_type('vip', [
        'label' => 'Invités',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => ['title', 'editor', 'thumbnail'],
        // 'show_in_rest' => true,
        'has_archive' => true,
    ]);
    $labels = array(
        'name' => _x('Exposant', 'post type general name', 'your_text_domain'),
        'singular_name' => _x('Exposant', 'post type Singular name', 'your_text_domain'),
        'add_new' => _x('Add Exposant', '', 'your_text_domain'),
        'add_new_item' => __('Add New Exposant', 'your_text_domain'),
        'edit_item' => __('Edit Exposant', 'your_text_domain'),
        'new_item' => __('New Exposant', 'your_text_domain'),
        'all_items' => __('All Exposants', 'your_text_domain'),
        'view_item' => __('View Exposants', 'your_text_domain'),
        'search_items' => __('Search Exposant', 'your_text_domain'),
        'not_found' => __('No Exposant found', 'your_text_domain'),
        'not_found_in_trash' => __('No Exposant on trash', 'your_text_domain'),
        'parent_item_colon' => '',
        'menu_name' => __('Exposants', 'your_text_domain')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        // 'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'exposants'),
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 2,
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        'supports' => array('title', 'editor', 'thumbnail')
    );
    $labels = array(
        'name' => __('Category'),
        'singular_name' => __('Category'),
        'search_items' => __('Search'),
        'popular_items' => __('More Used'),
        'all_items' => __('All Categories'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Add new'),
        'update_item' => __('Update'),
        'add_new_item' => __('Add new Category'),
        'new_item_name' => __('New')
    );
    register_taxonomy('exposant_category', array('exposant'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'singular_label' => 'exposant_category',
		'all_items' => 'Category',
		'query_var' => true,
		'rewrite' => array('slug' => 'cat'))
    );
    register_post_type('exposant', $args);
    flush_rewrite_rules();

}

// Add Meta Box
function exposants_meta_box() {
    $screens = get_post_types();
    add_meta_box(
        'exposant_website',
        'Exposant Website',
        'exposant_website_callback',
        $screens,
        'side'
    );
}

// Meta Box Callback Function
function exposant_website_callback($post) {
    // Retrieve existing value from the database
    $website = get_post_meta($post->ID, 'exposant_website', true);
    // Output the field
    echo '<label for="exposant_website">Website URL:</label>';
    echo '<input type="text" id="exposant_website" name="exposant_website" value="' . esc_attr($website) . '" size="25" />';
}

// Save Meta Box Data
function save_exposant_website_meta($post_id) {
    if (array_key_exists('exposant_website', $_POST)) {
        if ($_POST['exposant_website'] == '0') {
            delete_post_meta($post_id, 'exposant_website');
        } else {
            update_post_meta($post_id, 'exposant_website', sanitize_text_field($_POST['exposant_website']));
        }
    }
}

add_action('init', 'pga_init');
add_action( 'after_setup_theme', 'pga_supports');
add_action('wp_enqueue_scripts', 'pga_register_assets');
add_action('add_meta_boxes', 'exposants_meta_box');
add_action('save_post', 'save_exposant_website_meta');