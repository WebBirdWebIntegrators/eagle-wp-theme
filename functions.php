<?php

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
//add_theme_support( 'custom-header' );
//add_theme_support( 'custom-background' );
add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'woocommerce' );
add_theme_support( "title-tag" );

function webbird_load_editor_style()
{
  add_editor_style( get_template_directory_uri() . '/css/editor-style.css' );
}
//add_action( 'after_setup_theme', 'webbird_load_editor_style' );

function webbird_theme_setup() {
  load_theme_textdomain( 'eagle', get_template_directory() . '/languages' );
}

add_action('after_setup_theme', 'webbird_theme_setup');

function webbird_show_full_tinymce( $args ) {
	$args['wordpress_adv_hidden'] = false;
	return $args;
}

add_filter( 'tiny_mce_before_init', 'webbird_show_full_tinymce' );

update_option('thumbnail_size_w', 300);
update_option('thumbnail_size_h', 300);
update_option('medium_size_w', 600);
update_option('medium_size_h', 600);
update_option('large_size_w', 1200);
update_option('large_size_h', 1200);

add_image_size( 'responsive', 600 );
add_image_size( 'medium-square', 600, 600, true );
add_image_size( 'medium-landscape', 600, 450, true );

function webbird_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
	    '' => __( '', 'webbird' ),
    )
  );
}

add_filter( 'image_size_names_choose', 'webbird_custom_image_sizes' );

register_nav_menus (
	array (
		'mnav' => 'Main navigation',
		'fnav' => 'Functional navigation',
		'footer-nav' => 'Footer - Navigation',
		'copyrights' => 'Copyrights',
	)
);

if ( ! isset( $content_width ) ) $content_width = 600;

/*
function editor_style() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'editor_style' );
*/

add_action('wp_enqueue_scripts' , 'webbird_scripts');

function webbird_scripts() {
	wp_enqueue_script('jquery');

	wp_register_style( 'webbird-styles' , get_template_directory_uri() . '/css/styles.css');
	wp_enqueue_style( 'webbird-styles' );

	wp_register_style( 'fontawesome' , get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome' );

	wp_register_script( 'flexslider' , get_template_directory_uri() . '/js/jquery.flexslider.js' );
	wp_enqueue_script( 'flexslider' );

	wp_register_script( 'black-and-white-images' , get_template_directory_uri() . '/js/jquery.BlackAndWhite.min.js' );
	wp_enqueue_script( 'black-and-white-images' );
}

function webbird_load_fonts() {
  echo "<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>";
}

add_action('wp_head' , 'webbird_load_fonts');

function webbird_load_acf(){
	require_once 'assets/acf/acf.php';
}

add_action('init', 'webbird_load_acf');

function webbird_load_wordpress_admin_functions(){
	require_once 'functions/wordpress-admin.php';
}

add_action('init', 'webbird_load_wordpress_admin_functions');

function webbird_load_eagle_functions(){
	require_once 'functions/eagle/functions.php';
}

add_action('init', 'webbird_load_eagle_functions');

function webbird_load_eagle_acf(){
	require_once 'assets/acf/eagle/acf.php';
}

add_action('init', 'webbird_load_eagle_acf');


if ( ! function_exists( 'webbird_sidebar_default' ) ) {

function webbird_sidebar_default() {

	$args = array(
		'id'            => 'sidebar1',
		'name'          => __( 'Default', 'eagle' ),
		'description'   => __( 'Default sidebar', 'eagle' ),
		'class'         => 'sidebar-default',
		'before_widget' => '<div class="sidebar-default %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<h2 class="widget-title"' . '>',
		'after_title' => '</h3>',
	);
	register_sidebar( $args );
}

add_action( 'widgets_init', 'webbird_sidebar_default' );
}

if ( ! function_exists( 'webbird_sidebar_contact_page' ) ) {

function webbird_sidebar_contact_page() {

	$args = array(
		'id'            => 'sidebar2',
		'name'          => __( 'Contact Page', 'eagle' ),
		'description'   => __( 'Contact Page Sidebar', 'eagle' ),
		'class'         => 'sidebar-default',
		'before_widget' => '<div class="sidebar-default %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );
}

add_action( 'widgets_init', 'webbird_sidebar_contact_page' );
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> __('Theme Settings', 'eagle'),
		'menu_title'	=> __('Theme Settings', 'eagle'),
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-admin-appearance',
		'position'		=> '90',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> __('Theme Plugins', 'eagle'),
		'menu_title'	=> __('Theme Plugins', 'eagle'),
		'menu_slug' 	=> 'theme-plugins',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-admin-plugins',
		'position'		=> '91',
		'redirect'		=> true
	));
}

function webbird_oembed_video_container($html, $url, $attr, $post_id) {
  return '<div class="video-container">' . $html . '</div>';
}

add_filter('embed_oembed_html', 'webbird_oembed_video_container', 99, 4);

//require_once( 'functions-inc/wordpress-dashboard.php' ); // WordPress dashboard settings
//require_once( 'functions-inc/woocommerce.php' );
//require_once( 'assets/shortcodes.php' );
