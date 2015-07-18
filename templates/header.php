<div id="header">
	<div class="hb1 <?php if( 'transparent' == get_field('ts_header_style__style', 'option' ) && 'active' == get_field('ts_billboard_status__status') ) {
								echo ' floating ';
								echo get_field('ts_header_style__style', 'option' );
								echo get_field('ts_billboard_setting_status');
						   } else {
								echo 'non-floating';
							} ?>

					<?php $object = get_queried_object();
						if( $object instanceof WP_Post  ) { $post_id = $object->ID; } else { $post_id = 0; }
					?>

					<?php
						$value = get_field('ts_billboard_status__status', $post_id );

						if( false === $value ) {
							update_field( 'ts_billboard_status__status', 'active', $post_id ); // the default value
							echo 'active';

						} else {
							echo $value; // this will echo either 'active' or 'disabled'
						}
					?>
	">
	<div class="hb1 <?php eagle_billboard_classes(); ?>">
		<div class="cntr">
			<div class="bp1">
				<script type="text/javascript">
				    jQuery(function(){
				      jQuery("#toggle-nav").click(function () {
					  	jQuery("#toggle-nav").toggleClass("active");
				        jQuery("#mnav-mobile").slideToggle("#mnav-mobile");
				        jQuery("#fnav-mobile").slideToggle("#fnav-mobile");
				      });
				      jQuery("#toggle-contact").click(function () {
					  	jQuery("#toggle-contact").toggleClass("active");
				        jQuery("#contact").slideToggle("#contact");
				      });
				      jQuery("#toggle-language").click(function () {
					  	jQuery("#toggle-language").toggleClass("active");
				        jQuery("#language").slideToggle("#language");
				      });
				      jQuery("#toggle-search").click(function () {
					  	jQuery("#toggle-search").toggleClass("active");
				        jQuery("#search").slideToggle("#search");
				      });
				      jQuery("#toggle-search-layer").click(function () {
					  	jQuery("#toggle-search-layer").toggleClass("active");
				        jQuery("#search-layer").slideToggle("#search-layer");
				      });
				      jQuery("#close-search-layer").click(function () {
					  	jQuery("#close-search-layer").toggleClass("active");
				        jQuery("#search-layer").slideToggle("#search-layer");
				      });
				    });
				</script>
				<nav>
					<div class="nav-bar">
						<ul>
							<li>
								<i class="fa fa-bars" id="toggle-nav"></i>
							</li>
							<li>
								<div class="site-name">
									<a href="<?php echo home_url(); ?>">
										<?php bloginfo( 'name' ); ?>
									</a>
								</div>
							</li>
							<li>
								<i class="fa fa-phone" id="toggle-contact"></i>
								<?php
									include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
									if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) :
								?>
									<i class="fa fa-globe" id="toggle-language"></i>
								<?php endif; ?>
								<i class="fa fa-search" id="toggle-search"></i>
							</li>
						</ul>
					</div>
					<div class="contact" id="contact">
						<ul>
							<?php if (get_field('wb_548edd668ebcb', 'option') == 'yes' ) { ?>
								<?php if( get_field('wb_545ceae654114','option') ): ?>
									<li class="phone">
										<a href="tel:<?php echo str_replace( ' ', '', get_field('wb_545ceae654114','option') ) ?>"><?php _e('Call', 'eagle') ?></a>
									</li>
								<?php endif; ?>
							<?php } elseif (get_field('wb_548edd668ebcb', 'option') == 'no') { ?>
								<?php if( get_field('wb_545c925d920fb','option') ): ?>
									<li class="phone">
										<a href="tel:<?php echo str_replace( ' ', '', get_field('wb_545c925d920fb','option') ) ?>"><?php _e('Call', 'eagle') ?></a>
									</li>
								<?php endif; ?>
							<?php } ?>

							<!-- Start mobile phone number -->
							<?php if( get_field('wb_545ceae654114','option') ): ?>
								<?php if (get_field('wb_548ede8895396', 'option') == 'yes') : ?>
									<li class="sms">
										<a href="sms:<?php echo str_replace( ' ', '', get_field('wb_545ceae654114','option') ) ?>"><?php _e('SMS', 'eagle'); ?></a>
									</li>
								<?php endif ?>
							<?php endif; ?>
							<!-- End mobile phone number -->

							<?php if( get_field('wb_545c927a920fc','option') ): ?>
								<li class="email">
									<a href="mailto:<?php the_field('wb_545c927a920fc','option'); ?>"><?php _e('Email', ''); ?></a>
								</li>
							<?php endif; ?>
							<li>
								<a href=" http://maps.google.com/maps?daddr=<?php echo str_replace( ' ', '%20', get_field('wb_545c9204920f9','option') ); ?>,<?php echo str_replace( ' ', '%20', get_field('wb_545c9234920fa','option') ); ?>"><?php _e('Route', 'eagle'); ?></a>
							</li>
						</ul>
						<div class="address">
							<ul>
								<?php if( get_field('wb_545c91318d1d7','option')  ): ?>
									<li><?php the_field('wb_545c91318d1d7','option'); ?></li>
								<?php endif; ?>
								<?php if( get_field('wb_545c9204920f9','option') ): ?>
									<li><?php the_field('wb_545c9204920f9','option'); ?></li>
								<?php endif; ?>
								<?php if( get_field('wb_545c9234920fa','option') ): ?>
									<li><?php the_field('wb_545c9234920fa','option'); ?></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
					<?php
						include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
						if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) :
					?>
						<div class="language" id="language">
							<ul>
								<?php

										$languages_mobile = icl_get_languages('skip_missing=1');
										if(1 < count($languages_mobile)) {
											foreach($languages_mobile as $l) {
										      if( !$l['active'] ) $langs[] = '<li><a href="'.$l['url'].'">'.$l['language_code'].'</a></li>';
										    }
										echo join('', $langs);
										}

								?>
							</ul>
						</div>
					<?php endif; ?>
					<div class="search" id="search">
						<?php get_search_form(); ?>
					</div>
					<?php {
						$mnav = array(
							'theme_location'  => 'header-mnav',
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
					<?php {
						$fnav = array(
							'theme_location'  => 'header-fnav',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'fnav',
							'menu_id'         => 'fnav-mobile',
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
						wp_nav_menu( $fnav ); }
					?>
				</nav>
			</div>
			<div class="bp5">
				<div class="site-logo">
					<div class="img-wrap">
						<div class="img">
							<a href="<?php echo home_url(); ?>">

								<?php

								$image = get_field('ts_header_logo_image', 'option');

								if( !empty($image) ) {

									// vars
									$alt = get_field('ts_header_logo_alt_tag', 'option');

									// thumbnail
									$size = 'medium';
									$thumb = $image['sizes'][ $size ];

									if( get_field('ts_header_logo_width', 'option') ) {
										$width = get_field('ts_header_logo_width', 'option') . 'px';
										$height = 'auto';

									} else {
									}
									?>

									<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" style="width:<?php echo $width ?>; height:<?php echo $height ?>"/>

								<?php } else { ?>

									<img src="<?php echo get_template_directory_uri(); ?>/img/logo-site.png" alt="WebBird - Website & Webshop Architects">

								<?php } ?>
							</a>
						</div>
					</div>
				</div>
				<nav>
					<div class="functional-navigation">
						<?php
							include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
							if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) :
						?>
							<ul class="language">
								<?php
									$languages_desktop = icl_get_languages('skip_missing=1');
									  if( 1 < count($languages_desktop) ) {
										 $langs_desktop = array();
									    foreach($languages_desktop as $l_desktop) {
									      if( !$l_desktop['active']) {
										      $langs_desktop[] = '<li><a href="' . $l_desktop['url'] . '">' . $l_desktop['language_code'] . '</a></li>';
										  }
									    }
									    echo join('', $langs_desktop);
									    //var_dump($languages_desktop);
									  }
								?>
							</ul>
						<?php endif; ?>
						<div class="search">
							<i class="fa fa-search" id="toggle-search-layer"></i>
						</div>
						<?php {
							$fnav = array(
								'theme_location'  => 'header-fnav',
								'menu'            => '',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'fnav',
								'menu_id'         => 'fnav-desktop',
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
							wp_nav_menu( $fnav ); }
						?>
					</div>
					<div class="main-navigation">
						<?php {
							$mnav = array(
								'theme_location'  => 'header-mnav',
								'menu'            => '',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'mnav',
								'menu_id'         => 'mnav-desktop',
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
				</nav>
			</div>
		</div>
	</div>

	<?php if ( is_category() ) { ?>
		<div class="hb2"></div>
		<script type="text/javascript">
			jQuery(document).ready(function() {
			  function setHeight() {
			  	hb1 = jQuery('.hb1').innerHeight();
			    hb2 = jQuery('.hb2').innerHeight();
			    jQuery('.hb2').css('height', hb1);
			  };
			  setHeight();
			});
		</script>

	<?php } elseif( is_post_type_archive()) { ?>

	<?php } elseif( is_tax()) { ?>

	<?php } elseif( is_404()) { ?>

	<?php } elseif( is_archive() || is_search() ) { ?>
		<div class="hb2 archive search"></div>
		<script type="text/javascript">
			jQuery(document).ready(function() {
			  function setHeight() {
			  	hb1 = jQuery('.hb1').innerHeight();
			    hb2 = jQuery('.hb2').innerHeight();
			    jQuery('.hb2').css('height', hb1);
			  };
			  setHeight();
			});
		</script>

	<?php } elseif ( is_home() || is_page() || is_page_template() || is_single() || is_single('wbp_products') || is_singular() ) { ?>

		<!-- If billboard is active -->
		<?php if( get_field('ts_billboard_setting_status') === 'active') { ?>

			<!-- If billboard is an ACF repeater -->
			<?php if( have_rows('wb_548fefb1006a4') ) { ?>
				<div class="hb2 slider page page-template single singular <?php if( 'transparent' == get_field('ts_header_style__style', 'option' ) && 'active' == get_field('ts_billboard_status__status') ) {
								echo ' floating ';
								echo get_field('ts_header_style__style', 'option' );
								echo get_field('ts_billboard_status__status');
						   } else {
								echo 'non-floating';
							} ?>">
					<div class="cntr">
						<div class="pattern-overlay"></div>
						<div class="billboard">
							<ul>
								<?php while( have_rows('wb_548fefb1006a4') ): the_row(); ?>
									<?php
										$get_image = get_sub_field('wb_548fefd8006a5');
										$size = 'large';
										$image = $get_image['sizes'][ $size ];
									?>

										<?php
											if ( wp_is_mobile() ) {
												echo '<li>';
											} else {
												echo '<li style="height:' . get_field('ts_billboard_setting__billboard_default_image_height', 'option') . 'px;">';
											}
										?>
											<div class="billboard-image">
												<img src="<?php echo $image ?>"/>
											</div>
											<?php if( get_sub_field('wb_5512d073cf8ae') ) : ?>
												<div class="billboard-content">
													<?php if( get_sub_field('wb_5512d063cf8ad') ) : ?>
														<h2><?php echo get_sub_field('wb_5512d063cf8ad'); ?></h2>
													<?php endif ?>
													<?php if( get_sub_field('wb_5512d073cf8ae') ) : ?>
														<?php echo get_sub_field('wb_5512d073cf8ae'); ?>
													<?php endif ?>
												</div>
											<?php endif ?>
										</li>
								<?php endwhile; ?>
							</ul>

							<script type="text/javascript">
								jQuery(window).load(function() {
									jQuery('.billboard').flexslider( {
										selector: "ul > li",
										animation: "fade",
										animationSpeed: 1000,
										slideshowSpeed: 5000,
										direction: "horizontal",
										animationLoop: true,
										controlNav: false,
										directionNav: false,
										useCSS: false,
									} );
								} );
							</script>
						</div>
					</div>
				</div>

			<!-- Featured image is available so let's show it -->

			<?php } elseif( has_post_thumbnail() ) { ?>
				<div class="hb2 post-thumbnail page page-template single singular <?php if( 'transparent' == get_field('ts_header_style__style', 'option' ) && 'active' == get_field('ts_billboard_status__status') ) {
								echo ' floating ';
								echo get_field('ts_header_style__style', 'option' );
								echo get_field('ts_billboard_status__status');
						   } else {
								echo 'non-floating';
							} ?>">
					<div class="cntr">
						<div class="pattern-overlay"></div>
						<div class="billboard">
							<ul>
								<?php
									if ( wp_is_mobile() ) {
										echo '<li>';
									} else {
										echo '<li style="height:' . get_field('ts_billboard_setting__billboard_default_image_height', 'option') . 'px">';
									}
								?>
									<?php the_post_thumbnail('billboard-bp5'); ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			<!-- If default billboard image is available -->
			<?php } elseif( get_field('ts_billboard_setting__billboard_default_image', 'option') ) { ?>
				<div class="hb2 default-image <?php if( get_field('ts_header_style__style', 'option' ) == 'transparent') {

							if( get_field('ts_billboard_status__status') == 'active' ) {
								echo ' floating';
							}

						  } else {
								echo 'not-floating';
							} ?>">
				<div class="hb2 default-image <?php if( get_field('ts_header_style', 'option' ) == 'transparent') {

							if( get_field('ts_billboard_setting_status') == 'active' ) {
								echo ' floating';
							}

						  } else {
								echo 'not-floating';
							} ?>">
					<div class="cntr">
						<div class="pattern-overlay"></div>
						<div class="billboard default">
							<ul>
								<?php
									if ( wp_is_mobile() ) {
										echo '<li>';
									} else {
										echo '<li style="height:' . get_field('ts_billboard_setting__billboard_default_image_height', 'option') . 'px">';
									}
								?>
									<?php
										$get_image = get_field('ts_billboard_setting__billboard_default_image', 'option');
										$size = 'billboard-bp5';
										$image = $get_image['sizes'][ $size ];
									?>
									<div class="billboard-image">
										<img src="<?php echo $image ?>"/>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			<?php } else { ?>
				<?php if( get_field('ts_header_style__style', 'option' ) === 'transparent' && get_field('ts_billboard_status__status') === 'active' ) { ?>
					<div class="hb2 fallback"></div>
					<script type="text/javascript">
						jQuery(document).ready(function() {
						  function setHeight() {
						  	hb1 = jQuery('.hb1').innerHeight();
						    hb2 = jQuery('.hb2').innerHeight();
						    jQuery('.hb2').css('height', hb1);
						  };
						  setHeight();
						});
					</script>
				<?php } ?>
			<?php } ?>

		<!-- If billboard is not active -->

		<?php } else { ?>
		<div class="hb2 billboard-not-active"></div>

	<?php } ?>

	<?php } else { ?>
		<div class="hb2 global-fallback"></div>
		<script type="text/javascript">
			jQuery(document).ready(function() {
			  function setHeight() {
			  	hb1 = jQuery('.hb1').innerHeight();
			    hb2 = jQuery('.hb2').innerHeight();
			    jQuery('.hb2').css('height', hb1);
			  };
			  setHeight();
			});
		</script>
	<?php } ?>

	<!-- Title & description -->
	<?php get_template_part( 'assets/header/title-description' ) ?>
</div>
