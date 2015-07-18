<?php

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'woocommerce' );
add_theme_support( "title-tag" );

function webbird_load_editor_style()
{
  add_editor_style( get_template_directory_uri() . '/css/editor-style.css' );
}
//add_action( 'after_setup_theme', 'webbird_load_editor_style' );

add_action('after_setup_theme', 'webbird_theme_setup');

function webbird_theme_setup()
{
    load_theme_textdomain( 'eagle', get_template_directory() . '/languages' );
}

add_action('init', 'load_exported_fields');

function load_exported_fields(){
	include 'assets/acf/acf.php';
}

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

add_image_size( 'medium-square', 600, 600, true );
add_image_size( 'billboard-bp5', 2500, 9999 );

add_filter( 'image_size_names_choose', 'webbird_custom_image_sizes' );

function webbird_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
	    'medium-square' => __( 'Medium square', 'eagle' ),
        'billboard-bp5' => __( 'Billboard', 'eagle' ),
    ) );
}

register_nav_menus (
	array (
		'header-mnav' => 'Header - Main navigation',
		'header-fnav' => 'Header - Functional navigation',
		'footer-nav' => 'Footer - Navigation',
		'footer-copyrights' => 'Footer - Copyrights',
	)
);

if ( ! isset( $content_width ) ) $content_width = 600;

/*
function editor_style() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'editor_style' );
*/

require_once( 'functions-inc/wordpress-dashboard.php' ); // WordPress dashboard settings
require_once( 'functions-inc/woocommerce.php' );
require_once( 'assets/shortcodes.php' );

function webbird_login_stylesheet() {
    wp_enqueue_style( 'custom-login' , get_template_directory_uri() . '/css/wordpress.css' );
}
add_action( 'login_enqueue_scripts' , 'webbird_login_stylesheet' );

function webbird_login_logo_url() {
    return 'http://www.webbird.be';
}
add_filter( 'login_headerurl' , 'webbird_login_logo_url' );

function webbird_login_logo_url_title() {
    return 'WebBird | Website & webshop architects';
}
add_filter( 'login_headertitle' , 'webbird_login_logo_url_title' );

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

// LOAD GOOGLE FONTS

function wb_load_google_fonts() {
	$google_fonts = get_field('google_fonts_settings__fonts', 'option');
	echo $google_fonts;
}

add_action('wp_head' , 'wb_load_google_fonts');


$role_object = get_role( 'editor' );
$role_object->add_cap( 'edit_theme_options' );

if ( ! function_exists( 'webbird_sidebar_default' ) ) {

// Register Sidebar
function webbird_sidebar_default() {

  // if( get_field('ts_sidebar_setting__title_setting__style', 'option') === 'uppercase' ) {
	// 	$uppercase = 'style="text-transform: uppercase"';
	// } else {
  //   $uppercase = '';
  // }

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

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'webbird_sidebar_default' );
}

if ( ! function_exists( 'webbird_sidebar_contact_page' ) ) {

// Register Sidebar
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

// Hook into the 'widgets_init' action
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

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Header Settings', 'eagle'),
		'menu_title'	=> __('Header', 'eagle'),
		'slug'			=> 'header-settings',
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Billboard Settings', 'eagle'),
		'menu_title'	=> __('Billboard', 'eagle'),
		'slug'			=> 'billboard-settings',
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Sidebar Settings', 'eagle'),
		'menu_title'	=> __('Sidebar', 'eagle'),
		'slug'			=> 'sidebar-settings',
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Footer Settings', 'eagle'),
		'menu_title'	=> __('Footer', 'eagle'),
		'slug'			=> 'footer-settings',
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Contact Information Settings', 'eagle'),
		'menu_title'	=> __('Contact Information', 'eagle'),
		'slug'			=> 'contact-settings',
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Agency Settings', 'eagle'),
		'menu_title'	=> __('Agency', 'eagle'),
		'slug'			=> 'agency-settings',
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Site Credits Settings', 'eagle'),
		'menu_title'	=> __('Site Credits', 'eagle'),
		'slug'			=> 'site-credits-settings',
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Social Media Settings', 'eagle'),
		'menu_title'	=> __('Social Media', 'eagle'),
		'slug'			=> 'social-media-settings',
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Google Settings', 'eagle'),
		'menu_title'	=> __('Google', 'eagle'),
		'slug'			=> 'google-settings',
		'parent_slug'	=> 'theme-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> __('Design Settings', 'eagle'),
		'menu_title'	=> __('Design', 'eagle'),
		'slug'			=> 'design-settings',
		'parent_slug'	=> 'theme-settings',
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

add_action( 'wp_before_admin_bar_render', 'webbird_wp_before_admin_bar_render' );

function webbird_wp_before_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->add_node( array(
        'id'    => 'webbird-support',
        'title' => 'Contact WebBird Support',
        'href'  => 'https://webbird.zendesk.com/hc/nl/requests/new',
        'meta'  => array( 'target' => '_blank' )
    ) );
}

add_action( 'activity_box_end', 'activity_box_end_example' );

function activity_box_end_example() {
   _e( "If you have any questions, you can reach WebBird's support at" );
   echo '&nbsp;<a href="mailto:support@webbird.be">support@webbird.be</a>.';
}

add_filter( 'the_content', 'webbird_featured_image_in_feed' );

function webbird_featured_image_in_feed( $content ) {
    global $post;
    if( is_feed() ) {
        if ( has_post_thumbnail( $post->ID ) ){
            $output = get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'float:right; margin:0 0 10px 10px;' ) );
            $content = $output . $content;
        }
    }
    return $content;
}


// Allow user to login with email address

add_filter('authenticate', 'webbird_allow_email_login', 20, 3);

function webbird_allow_email_login( $user, $username, $password ) {
    if( is_email( $username ) ) {
        $user = get_user_by_email( $username );

        if( $user ) $username = $user->user_login;
    }
    return wp_authenticate_username_password( null, $username, $password );
}


// Add email login label to username input field

add_filter( 'gettext', 'webbird_add_email_to_login', 20, 3 );

function webbird_add_email_to_login( $translated_text, $text, $domain ) {
    if( 'Username' == $translated_text )
        $translated_text .= __( ' or Email' );
    return $translated_text;
}


// Move Yoast SEO meta box to the bottom

function webbird_move_yoast_seo_to_bottom() {
	return 'low';
}

add_filter( 'wpseo_metabox_prio', 'webbird_move_yoast_seo_to_bottom');


// Wrap video container around WordPress oembeds

function wb_oembed_video_container($html, $url, $attr, $post_id) {
  return '<div class="video-container">' . $html . '</div>';
}

add_filter('embed_oembed_html', 'wb_oembed_video_container', 99, 4);

// WP UPDATES

require_once('wp-updates-theme.php');
new WPUpdatesThemeUpdater_1459( 'http://wp-updates.com/api/2/theme', basename( get_template_directory() ) );

/**
 *	Output custom classes based on Billboard Settings
 */
function eagle_billboard_classes(){

	$object = get_queried_object();
	if( $object instanceof WP_Post  ) { $post_id = $object->ID; } else { $post_id = 0; }

	// fix pages/posts that don't have these ACF fields set
	$value = get_field('ts_billboard_setting_status', $post_id );
	if( empty( $value) && 0 != $post_id ) {

		update_field( 'ts_billboard_setting_status', 'active', $post_id ); // the default value

	}

	if( 'transparent' == get_field('ts_header_style', 'option' ) && 'active' == get_field('ts_billboard_setting_status') ) {
		echo implode( ' ', array( 'floating', get_field('ts_header_style', 'option' ), get_field('ts_billboard_setting_status') ) );
	} else {
		echo 'non-floating';
	}
}
