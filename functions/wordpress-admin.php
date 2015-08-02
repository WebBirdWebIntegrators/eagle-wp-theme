<?php
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

function webbird_wp_before_admin_bar_render() {
  global $wp_admin_bar;
  $wp_admin_bar->add_node(
    array(
      'id'    => 'webbird-support',
      'title' => __('Contacteer WebBird Support', 'webbird'),
      'href'  => 'https://webbird.zendesk.com/hc/nl/requests/new',
      'meta'  => array( 'target' => '_blank' )
    )
  );
}

add_action( 'wp_before_admin_bar_render', 'webbird_wp_before_admin_bar_render' );

function webbird_allow_email_login( $user, $username, $password ) {
  if( is_email( $username ) ) {
    $user = get_user_by_email( $username );

    if( $user ) $username = $user->user_login;
  }
  return wp_authenticate_username_password( null, $username, $password );
}

add_filter('authenticate', 'webbird_allow_email_login', 20, 3);

function webbird_add_email_to_login( $translated_text, $text, $domain ) {
  if( 'Username' == $translated_text )
    $translated_text .= __('of e-mail', 'webbird');
  return $translated_text;
}

add_filter( 'gettext', 'webbird_add_email_to_login', 20, 3 );

function webbird_remove_dashboard_widgets() {
	global$wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['icl_dashboard_widget']);
}

if (!current_user_can('manage_options')) {
	add_action('wp_dashboard_setup', 'webbird_remove_dashboard_widgets' );
}

function webbird_move_yoast_seo_to_bottom() {
	return 'low';
}

add_filter( 'wpseo_metabox_prio', 'webbird_move_yoast_seo_to_bottom');

$role_object = get_role( 'editor' );
$role_object->add_cap( 'edit_theme_options' );
