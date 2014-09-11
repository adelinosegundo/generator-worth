<?php

function execute_theme_config(){
	global $theme_config;
	theme_config_show_admin_bar($theme_config['show-admin-bar']);
	theme_config_add_theme_support($theme_config['theme-support']);
	theme_config_add_image_size($theme_config['images-sizes']);
	theme_config_create_pages_required_if_not_exist($theme_config['pages_required']);
}
add_action('init', 'execute_theme_config');


//THEME CONFIG FUNCTIONS
//START
function theme_config_show_admin_bar($show = true){
	show_admin_bar($show);
}

function theme_config_add_theme_support($supports){
	if ($supports){
		foreach ($supports as $key => $support) {
			add_theme_support($support['feature'], $support['arguments']); 
		}
	}
}

function theme_config_set_post_thumbnail_size($thumbnail_size){
	if ($thumbnail_size){
		set_post_thumbnail_size($thumbnail_size['width'], $thumbnail_size['height']);
	}
}

function theme_config_add_image_size($image_sizes){
	if ($image_sizes){
		foreach ($image_sizes as $key => $size) {
			// Set crop true if blank
			if (!array_key_exists('crop', $size)){
				echo 'here';
				$size['crop'] = true;
			}
			add_image_size($key, $size['width'], $size['height'], $size['crop']);
		}
	}
}

function theme_config_create_pages_required_if_not_exist($pages){
	if ($pages){
		foreach ($pages as $page) {
			if( get_page_by_title( $page ) == NULL ){
				create_pages_on_the_fly_by_page_name( $page );
			}
		}
	}
}
//END




//utilities
function create_pages_on_the_fly_by_page_name($pageName) {
	$createPage = array(
		'post_title'    => $pageName,
		'post_content'  => '',
		'post_status'   => 'publish',
		'post_author'   => 1,
		'post_type'     => 'page',
		'post_name'     => $pageName
		);

    // Insert the post into the database
	wp_insert_post( $createPage );
}

function get_assets_root_uri(){
    return str_replace("application/style.css","assets", get_stylesheet_uri());
}

// Add post per page limit to any query
function add_posts_per_page_to_tag_query( $query ) {
	global $theme_config;
    if( !is_admin () &&$query->is_main_query() ) {
        $query->set( 'posts_per_page', $theme_config['max-posts-per-page'] );
    }

}
add_filter( 'pre_get_posts', 'add_posts_per_page_to_tag_query' );