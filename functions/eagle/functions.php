<?php
function eagle_load_google_fonts() {
	$google_fonts = get_field('google_fonts_settings__fonts', 'option');
	echo $google_fonts;
}

add_action('wp_head' , 'eagle_load_google_fonts');

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

function eagle_wp_updates() {
  require_once('wp-updates-theme.php');
  new WPUpdatesThemeUpdater_1459( 'http://wp-updates.com/api/2/theme', basename( get_template_directory() ) );
}
