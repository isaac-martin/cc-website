<?php

namespace App;

/**
 * Add <body> classes
 */
add_filter('body_class', function (array $classes) {
    /** Add page slug if it doesn't exist */
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    /** Add class if sidebar is active */
    if (display_sidebar()) {
        $classes[] = 'sidebar-primary';
    }

    /** Clean up class names for custom templates */
    $classes = array_map(function ($class) {
        return preg_replace(['/-blade(-php)?$/', '/^page-template-views/'], '', $class);
    }, $classes);

    return array_filter($classes);
});

/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

/**
 * Template Hierarchy should search for .blade.php files
 */
collect([
    'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home',
    'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment'
])->map(function ($type) {
    add_filter("{$type}_template_hierarchy", __NAMESPACE__.'\\filter_templates');
});

/**
 * Render page using Blade
 */
add_filter('template_include', function ($template) {
    $data = collect(get_body_class())->reduce(function ($data, $class) use ($template) {
        return apply_filters("sage/template/{$class}/data", $data, $template);
    }, []);
    if ($template) {
        echo template($template, $data);
        return get_stylesheet_directory().'/index.php';
    }
    return $template;
}, PHP_INT_MAX);

/**
 * Tell WordPress how to find the compiled path of comments.blade.php
 */
add_filter('comments_template', function ($comments_template) {
    $comments_template = str_replace(
        [get_stylesheet_directory(), get_template_directory()],
        '',
        $comments_template
    );
    return template_path(locate_template(["views/{$comments_template}", $comments_template]) ?: $comments_template);
});
function kc_portfolio() {

	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'portfolio' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'portfolio' ),
		'menu_name'           => __( 'Portfolio', 'portfolio' ),
		'name_admin_bar'      => __( 'Portfolio', 'portfolio' ),
		'parent_item_colon'   => __( 'Parent Project:', 'portfolio' ),
		'all_items'           => __( 'All Projects', 'portfolio' ),
		'add_new_item'        => __( 'Add New Project', 'portfolio' ),
		'add_new'             => __( 'Add Project', 'portfolio' ),
		'new_item'            => __( 'New Project', 'portfolio' ),
		'edit_item'           => __( 'Edit Project', 'portfolio' ),
		'update_item'         => __( 'Update Project', 'portfolio' ),
		'view_item'           => __( 'View Project', 'portfolio' ),
		'search_items'        => __( 'Search Project', 'portfolio' ),
		'not_found'           => __( 'Project not found', 'portfolio' ),
		'not_found_in_trash'  => __( 'Project not found in Trash', 'portfolio' ),
	);
	$rewrite = array(
		'slug'                => 'portfolio',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'kc_portfolio', 'portfolio' ),
		'description'         => __( 'This system will display a collection of your work organised as a gallery.', 'portfolio' ),
		'labels'              => $labels,
		'supports'            => array( 'title', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-format-gallery',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'kc_portfolio', $args );

}

// Hook into the 'init' action
add_action( 'init', __NAMESPACE__.'\\kc_portfolio', 0 );

// Register Custom Post Type
function kc_press() {

	$labels = array(
		'name'                => _x( 'Press', 'Post Type General Name', 'press' ),
		'singular_name'       => _x( 'Press', 'Post Type Singular Name', 'press' ),
		'menu_name'           => __( 'Press', 'Press' ),
		'name_admin_bar'      => __( 'Press', 'Press' ),
		'parent_item_colon'   => __( 'Parent Press:', 'press' ),
		'all_items'           => __( 'All Articles', 'press' ),
		'add_new_item'        => __( 'Add New Article', 'press' ),
		'add_new'             => __( 'Add Article', 'press' ),
		'new_item'            => __( 'New Article', 'press' ),
		'edit_item'           => __( 'Edit Article', 'press' ),
		'update_item'         => __( 'Update Article', 'press' ),
		'view_item'           => __( 'View Article', 'press' ),
		'search_items'        => __( 'Search Press', 'press' ),
		'not_found'           => __( 'Article not found', 'press' ),
		'not_found_in_trash'  => __( 'Article not found in Trash', 'press' ),
	);
	$rewrite = array(
		'slug'                => 'press',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'kc_press', 'Press' ),
		'description'         => __( 'This system will display a collection of your work organised as a gallery.', 'press' ),
		'labels'              => $labels,
		'supports'            => array( 'title', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-format-gallery',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'kc_press', $args );

}

// Hook into the 'init' action
add_action( 'init', __NAMESPACE__.'\\kc_press', 0 );
