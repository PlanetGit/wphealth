<?php
/**
 * ACF build website
 * 
 * @package WordPress
 * 
 * @author Vladislav Novikov
 */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site General Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'site-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Site Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'site-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Site Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'site-general-settings',
	));
	
}

function wphealth_scripts() {
    $assets_path = get_template_directory_uri(). '/assets';

    $assets = array(
		array(
			'type'          => 'style',
			'handle'        => 'layout-style',
			'url'           => $assets_path . '/css/layout.css',
			'source'        => 'LOCAL',
			'dep'           => [],
			'footer'        => false
		),
		array(
			'type'          => 'style',
			'handle'        => 'common-style',
			'url'           => $assets_path . '/css/common.css',
			'source'        => 'LOCAL',
			'dep'           => [],
			'footer'        => false
		),
		array(
			'type'          => 'style',
			'handle'        => 'custom-style',
			'url'           => $assets_path . '/css/custom.css',
			'source'        => 'LOCAL',
			'dep'           => [],
			'footer'        => false
		),
		array(
			'type'          => 'style',
			'handle'        => 'swiper-style',
			'url'           => $assets_path . '/css/swiper.css',
			'source'        => 'LOCAL',
			'dep'           => [],
			'footer'        => false
		),
		array(
			'type'          => 'script',
			'handle'        => 'jquery-script',
			'url'           => $assets_path . '/js/jquery-3.6.0.min.js',
			'source'        => 'LOCAL',
			'dep'           => [],
			'footer'        => false
		),
		array(
			'type'          => 'script',
			'handle'        => 'custom-script',
			'url'           => $assets_path . '/js/custom.js',
			'source'        => 'LOCAL',
			'dep'           => [],
			'footer'        => true
		),
    );

    foreach ($assets as $asset) {
		// if url type local get stylesheet from theme assets directory
		if ($asset['type'] == 'style') {
			wp_enqueue_style($asset['handle'], $asset['url'], $asset['dep'], NULL, $asset['footer']);
		} else if ($asset['type'] == 'script') {
			wp_enqueue_script($asset['handle'], $asset['url'], $asset['dep'], NULL, $asset['footer']);
		}
	}
	wp_localize_script( 'script-custom', 'Ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

add_action('wp_enqueue_scripts', 'wphealth_scripts');

