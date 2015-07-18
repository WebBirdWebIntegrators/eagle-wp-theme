<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package eagle2
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Global Custom Head Code -->
	<?php if( get_field('ts_custom_head_code__code', 'option') ) {
		echo get_field('ts_custom_head_code__code', 'option');
	} ?>

	<!-- Custom Head Code -->
	<?php if( get_field('ts_custom_head_code__code') ) {
		echo get_field('ts_custom_head_code__code');
	} ?>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>


	<!-- Google Analytics -->
	<?php get_template_part( 'assets/google-analytics' ) ?>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Header -->
<?php get_template_part( 'templates/header' ) ?>

<!-- Search -->
<?php get_template_part( 'templates/search' ) ?>

<div class="main">
