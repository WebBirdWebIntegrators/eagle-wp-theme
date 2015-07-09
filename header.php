<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!-- Global Code -->
	<?php if( get_field('field_552fa3edb21a1', 'option') === 'active' ) :
		echo get_field('field_552fa43fb21a2', 'option');
	endif; ?>
	
	<!-- Start Page Code -->
	<?php if( get_field('field_552fa3edb21a1') === 'active' ) :
		echo get_field('field_552fa43fb21a2');
	endif; ?>
	
	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
	
	<!-- Google Analytics -->
	<?php get_template_part( 'assets/google-analytics' ) ?>	
	
	
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>

<!-- Header -->
<?php get_template_part( 'assets/header' ) ?>

<!-- Search -->
<?php get_template_part( 'assets/search' ) ?>

<div class="main">