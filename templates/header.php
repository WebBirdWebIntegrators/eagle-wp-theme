<header>

	<!-- Eagle theme code -->
	<?php get_template_part('templates/eagle/header'); ?>

	<nav id="main-navigation" class="mobile">
		<div class="menu">
			<div class="menu-icon">
				<i class="fa fa-bars" id="open-menu-active"></i>
			</div>
		</div>
		<div class="menu-active" id="menu-active">
			<div class="menu-icon">
				<i class="fa fa-close" id="close-menu-active"></i>
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
		</div>
		<script type="text/javascript">
				jQuery(function(){
					jQuery("#open-menu-active").click(function () {
						//jQuery("#open-menu-active").toggleClass("active");
						jQuery("#menu-active").slideToggle();
					});
					jQuery("#close-menu-active").click(function () {
						//jQuery("#open-menu-active").toggleClass("active");
						jQuery("#menu-active").slideToggle();
					});
				});
		</script>
	</nav>

</header>
