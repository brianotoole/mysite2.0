<?php
/*
Plugin Name: BZO Custom Post Types
Plugin URI: #
Description: Custom post type & taxonomies for BZO 2.0 site
Version: 2.0.0
Author: #
*/

// Register Custom Post Type - "project"

function project_post_type() {

	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'project_post_type' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'project_post_type' ),
		'menu_name'           => __( 'Projects', 'project_post_type' ),
		'name_admin_bar'      => __( 'Projects', 'project_post_type' ),
		'parent_item_colon'   => __( 'Parent Item:', 'project_post_type' ),
		'all_items'           => __( 'All Projects', 'project_post_type' ),
		'add_new_item'        => __( 'Add New Project', 'project_post_type' ),
		'add_new'             => __( 'Add New', 'project_post_type' ),
		'new_item'            => __( 'New Project', 'project_post_type' ),
		'edit_item'           => __( 'Edit Project', 'project_post_type' ),
		'update_item'         => __( 'Update Project', 'project_post_type' ),
		'view_item'           => __( 'View Project', 'project_post_type' ),
		'search_items'        => __( 'Search Project', 'project_post_type' ),
		'not_found'           => __( 'Not found', 'project_post_type' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'project_post_type' ),
	);
	$args = array(
		'label'               => __( 'Project', 'project_post_type' ),
		'description'         => __( 'Recent works', 'project_post_type' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-desktop',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'project_post_type', 1 );

?>