<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Custom Taxonomy
function register_roduct_type_taxonomy() {

	$labels = array(
		'name'                       => 'Product Types',
		'singular_name'              => 'Product Type',
		'menu_name'                  => 'Product Types',
		'all_items'                  => 'All product types',
		'parent_item'                => 'Parent product type',
		'parent_item_colon'          => 'Parent product type:',
		'new_item_name'              => 'New Product Type Name',
		'add_new_item'               => 'Add New Product Type Item',
		'edit_item'                  => 'Edit Product Type',
		'update_item'                => 'Update Product Type',
		'view_item'                  => 'View Product Type',
		'separate_items_with_commas' => 'Separate Product Types with commas',
		'add_or_remove_items'        => 'Add or remove Product Types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Product Types',
		'search_items'               => 'Search Product Type',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Product Types',
		'items_list'                 => 'Product Types list',
		'items_list_navigation'      => 'Product Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_type', array( 'product' ), $args );

}
add_action( 'init', 'register_roduct_type_taxonomy', 0 );
