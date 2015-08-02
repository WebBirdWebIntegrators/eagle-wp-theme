<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Eagle theme code -->
	<?php include_once 'assets/head/eagle/head.php' ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Header -->
<?php get_template_part( 'templates/header' ) ?>
