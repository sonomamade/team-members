<?php

/**
 *
 * @since             1.0.0
 * @package           Sonoma_Team_Members
 *
 * @wordpress-plugin
 * Plugin Name:       Sonoma Team Members
 * Plugin URI:        https://github.com/sonomamade/team-members
 * Description:       A plugin that adds a team member custom post type
 * Version:           1.0.0
 * Author:            Michael Silva
 * Author URI:        http://michaelsilva.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sonoma-team-members
 * Domain Path:       /languages
 */

/**
 * Register Team Member Post Type
 */
if ( ! function_exists('sonoma_team_member_post_type') ) {

// Register Custom Post Type
function sonoma_team_member_post_type() {

	$labels = array(
		'name'                => 'Team Members',
		'singular_name'       => 'Team Member',
		'menu_name'           => 'Team Members',
		'parent_item_colon'   => 'Parent Team Member:',
		'all_items'           => 'All Team Members',
		'view_item'           => 'View Team Member',
		'add_new_item'        => 'Add New Team Member',
		'add_new'             => 'Add New',
		'edit_item'           => 'Edit Team Member',
		'update_item'         => 'Update Team Member',
		'search_items'        => 'Search Team Members',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'team_member',
		'description'         => 'A custom post type to enter and organize your company staff',
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'team', $args );

}

// Hook into the 'init' action
add_action( 'init', 'sonoma_team_member_post_type', 0 );

}
