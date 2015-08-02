<?php
require_once( 'contact-location.php' );
require_once( 'billboard-status.php' );
require_once( 'billboard-default-image.php' );
require_once( 'header-style.php' );
require_once( 'header-logo.php' );
require_once( 'header-title-description.php' );
require_once( 'google-fonts.php' );
require_once( 'sidebar-status.php' );
require_once( 'sidebar-title-settings.php' );
require_once( 'site-excerpt.php' );


// Load ACF menus

if( function_exists('acf_add_options_page') ) {

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
}
?>
