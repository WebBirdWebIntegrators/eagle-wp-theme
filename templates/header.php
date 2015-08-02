<header>

	<!-- Eagle theme code -->
	<?php get_template_part('templates/eagle/header'); ?>

	<nav id="main-navigation" class="mobile">
		<div class="menu-icon">
			<div class="menu">
				<i class="fa fa-bars"></i>
			</div>
		</div>
		<?php {
			$mnav = array(
				'theme_location'  => 'mnav',
				'menu'            => '',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'mnav',
				'menu_id'         => 'mnav-mobile',
				'echo'            => true,
				'fallback_cb'     => '',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);
			wp_nav_menu( $mnav ); }
		?>
	</nav>

</header>
