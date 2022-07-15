<?php

/**
 * ACF build website
 * 
 * @package WordPress
 * @subpackage wphealth
 * @since wphealth 1.0
 * @author TopNotchDevTeam
 */

if (function_exists('acf_add_options_page')) {

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

function wphealth_scripts()
{
	$assets_path = get_template_directory_uri() . '/assets';

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
			'url'           => $assets_path . '/js/style-actions.js',
			'source'        => 'LOCAL',
			'dep'           => [],
			'footer'        => true
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
	wp_localize_script('script-custom', 'Ajax', array('ajax_url' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'wphealth_scripts');

// Set class of element by design
function get_mode($class = NULL)
{
	global $template;
	$kind = basename($template);
	if ($class) {
		return ($kind == "private-template.php") ? $class : '';
	}
	return ($kind == "private-template.php") ? true : false;
}


add_action('acf/init', 'my_acf_init');
function my_acf_init()
{

	// check function exists
	if (function_exists('acf_register_block')) {
		// Register blocks
		acf_register_block(array(
			'name'				=> 'introblock',
			'title'				=> __('Intro Block'),
			'description'		=> __('A custom intro block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('intro', 'quote'),
		));
		acf_register_block(array(
			'name'				=> 'brochure',
			'title'				=> __('Brochure Block'),
			'description'		=> __('A custom brochure block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('brochure', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'clientslider',
			'title'				=> __('Clients Slider Block'),
			'description'		=> __('A custom clients slider block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('clients', 'slider'),
		));
		acf_register_block(array(
			'name'				=> 'contactus',
			'title'				=> __('Contact Us Block'),
			'description'		=> __('A custom contact us block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('contact', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'formatslider',
			'title'				=> __('Formats Slider Block'),
			'description'		=> __('A custom formats slider block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('formats', 'slider'),
		));
		acf_register_block(array(
			'name'				=> 'getintouch',
			'title'				=> __('Getin Touch Block'),
			'description'		=> __('A custom getin touch block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('getintouch', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'griditems',
			'title'				=> __('Grid Items Block'),
			'description'		=> __('A custom grid items block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('griditems', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'knownblock',
			'title'				=> __('Known Block'),
			'description'		=> __('A custom known block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('known', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'mapblock',
			'title'				=> __('Map Block'),
			'description'		=> __('A custom map block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('map', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'moduleblock',
			'title'				=> __('Modules Block'),
			'description'		=> __('A custom module block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('modules', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'newsletter',
			'title'				=> __('News Letter Block'),
			'description'		=> __('A custom news letter block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('newsletter', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'nutritionblock',
			'title'				=> __('Nutrition Block'),
			'description'		=> __('A custom nutrition block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('nutritionblock', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'partialdescblock',
			'title'				=> __('Partial Description Block'),
			'description'		=> __('A custom partial description block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('partialdescblock', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'rangeblock',
			'title'				=> __('Range Block'),
			'description'		=> __('A custom range block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('rangeblock', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'sellersblock',
			'title'				=> __('Sellers & Products Block'),
			'description'		=> __('A custom sellers & products block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('sellersblock', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'stepblock',
			'title'				=> __('Step Block'),
			'description'		=> __('A custom step block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('stepblock', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'stickyscroll',
			'title'				=> __('Sticky Scroll Block'),
			'description'		=> __('A custom sticky scroll block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('stickyscroll', 'block'),
		));
		acf_register_block(array(
			'name'				=> 'verticalslider',
			'title'				=> __('Vertical Slider Block'),
			'description'		=> __('A custom vertical slider block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'module',
			'icon'				=> 'block-default',
			'keywords'			=> array('verticalslider', 'block'),
		));

		// Parts blocks define
		acf_register_block(array(
			'name'				=> 'home-ourwork',
			'title'				=> __('Ourwork Block'),
			'description'		=> __('A custom Our Work block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'parts',
			'icon'				=> 'category',
			'keywords'			=> array('ourwork', 'home'),
		));
		acf_register_block(array(
			'name'				=> 'home-service',
			'title'				=> __('Home Service Block'),
			'description'		=> __('A custom Home Service block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'parts',
			'icon'				=> 'category',
			'keywords'			=> array('homeservice', 'home'),
		));
		acf_register_block(array(
			'name'				=> 'portal-gummies',
			'title'				=> __('Portal Gummies Block'),
			'description'		=> __('A custom Portal Gummies block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'parts',
			'icon'				=> 'category',
			'keywords'			=> array('portalgummies', 'portal'),
		));
		acf_register_block(array(
			'name'				=> 'portal-testimonial',
			'title'				=> __('Portal Testimonial Block'),
			'description'		=> __('A custom Portal Testimonial block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'parts',
			'icon'				=> 'category',
			'keywords'			=> array('testimonial', 'portal'),
		));
	}
}

function my_acf_block_render_callback($block)
{
	// Convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	$category = str_replace('acf/', '', $block['category']);

	// Include a template part from within the "templates" folder
	if ($category == 'module') {
		if (file_exists(get_theme_file_path("/templates/{$category}/content-{$slug}.php"))) {
			include(get_theme_file_path("/templates/{$category}/content-{$slug}.php"));
		}
	} else if ($category == 'parts') {
		if (file_exists(get_theme_file_path("/templates/{$category}/{$slug}.php"))) {
			include(get_theme_file_path("/templates/{$category}/{$slug}.php"));
		}
	}
}
