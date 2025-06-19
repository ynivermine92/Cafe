<?php
if (!defined('_S_VERSION')) {

	define('_S_VERSION', '1.0.0');
}

function fast_vid_setup()
{

	add_theme_support('title-tag');

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action('after_setup_theme', 'fast_vid_setup');




function fast_vid_scripts()
{
	wp_enqueue_style('fast-vid-global-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css', array(), wp_get_theme()->get('Version'));


	wp_enqueue_script('imask', 'https://unpkg.com/imask', array(), null, true);

	wp_enqueue_script('fast-vid-script', get_template_directory_uri() . '/assets/js/scripts.min.js', array('imask'), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'fast_vid_scripts');



function theme_register_nav_menus()
{
	register_nav_menus(
		array(
			'header_nav' => 'Header Navigation',
			'footer_nav' => 'Footer Navigation',
		)
	);
}
add_action('after_setup_theme', 'theme_register_nav_menus', 0);



add_filter('nav_menu_css_class', 'custom_menu_item_class', 10, 4);
function custom_menu_item_class($classes, $item, $args, $depth)
{
	if ($args->theme_location == 'header-menu') {
		return ['menu__item'];
	}
	return $classes;
}

add_filter('nav_menu_link_attributes', 'custom_menu_link_attributes', 10, 4);
function custom_menu_link_attributes($atts, $item, $args, $depth)
{
	if ($args->theme_location == 'header-menu') {
		$atts['class'] = 'menu__item-link';
		$atts['data-scroll'] = '';
	}
	return $atts;
}








require get_template_directory() . '/inc/template-tags.php';
