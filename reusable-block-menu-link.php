<?php
/*
Plugin Name:  Reusable Block Menu Link
Description:  Adds a link to View All Reusable Blocks and Add a new Reusable Block
Version:      1.0
Author:       Will Delphia
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  reusable-block-menu-link
*/



function register_reusable_blocks_menu_links() {
    global $menu;
    global $submenu;

    $menu[30] = array( __('Reusable Blocks'), 'manage_options', 'edit.php?post_type=wp_block', '', 'open-if-no-js menu-top', '', 'dashicons-format-aside' );

    $submenu['edit.php?post_type=wp_block'][] = array(__('View All'), 'manage_options', 'edit.php?post_type=wp_block');
    $submenu['edit.php?post_type=wp_block'][] = array(__('Add New'), 'manage_options', 'post-new.php?post_type=wp_block');


}  
add_action( 'admin_menu' , 'register_reusable_blocks_menu_links' );
