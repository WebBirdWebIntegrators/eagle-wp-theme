<div id="footer">

	<!-- Location & Directions -->
	<?php if( is_page_template( 'page_contact.php' ) ) : ?>
		<?php get_template_part( 'assets/location-directions' ) ?>
	<?php endif; ?>

	<div class="fb1">
		<div class="cntr">
			<ul>
				<li class="col1">
					<?php
					include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
					if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) {
					?>
						<?php if( get_field('field_5519603fea32a','option') && ICL_LANGUAGE_CODE=='nl' ) { ?>
							<h3><?php the_field('field_5519603fea32a','option'); ?></h3>
						<?php } elseif( get_field('field_551960692ab73','option') && ICL_LANGUAGE_CODE=='fr' ) { ?>
							<h3><?php the_field('field_551960692ab73','option'); ?></h3>
						<?php } elseif( get_field('field_5519606977a2c','option') && ICL_LANGUAGE_CODE=='de' ) { ?>
							<h3><?php the_field('field_5519606977a2c','option'); ?></h3>
						<?php } elseif( get_field('field_55196068d856a','option') && ICL_LANGUAGE_CODE=='en' ) { ?>
							<h3><?php the_field('field_55196068d856a','option'); ?></h3>
						<?php } ?>
					<?php } else { ?>
						<?php if( get_field('field_5519603fea32a','option') ) : ?>
							<h3><?php the_field('field_5519603fea32a','option'); ?></h3>
						<?php endif; ?>
					<?php } ?>

					<?php
					include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
					if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) {
					?>
						<?php if( get_field('field_5519604cea32b','option') && ICL_LANGUAGE_CODE=='nl' ) { ?>
							<?php the_field('field_5519604cea32b','option'); ?>
						<?php } elseif( get_field('field_551960692aba5','option') && ICL_LANGUAGE_CODE=='fr' ) { ?>
							<?php the_field('field_551960692aba5','option'); ?>
						<?php } elseif( get_field('field_5519606977a43','option') && ICL_LANGUAGE_CODE=='de' ) { ?>
							<?php the_field('field_5519606977a43','option'); ?>
						<?php } elseif( get_field('field_55196068d8594','option') && ICL_LANGUAGE_CODE=='en' ) { ?>
							<?php the_field('field_55196068d8594','option'); ?>
						<?php } ?>
					<?php } else { ?>
						<?php if( get_field('field_5519604cea32b','option') ) : ?>
							<?php the_field('field_5519604cea32b','option'); ?>
						<?php endif; ?>
					<?php } ?>
				</li>
				<li class="col2">
					<?php
						$menu_location = 'footer-nav';
						$menu_locations = get_nav_menu_locations();
						$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
						$menu_name = (isset($menu_object->name) ? $menu_object->name : '');
						echo '<h3>' . esc_html($menu_name) . '</h3>' ;
					?>
					<?php {
						$footer_nav = array(
							'theme_location'  => 'footer-nav',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'footer-nav',
							'menu_id'         => 'footer-nav',
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
						wp_nav_menu( $footer_nav ); }
					?>
				</li>
				<li class="col3">

					<!-- Start title -->
					<?php
					include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
					if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) {
					?>
						<?php if( get_field('field_545c8f54e05af','option') && ICL_LANGUAGE_CODE=='nl' ) { ?>
							<h3><?php the_field('field_545c8f54e05af','option'); ?></h3>
						<?php } elseif( get_field('field_5518fffd0f171','option') && ICL_LANGUAGE_CODE=='fr' ) { ?>
							<h3><?php the_field('field_5518fffd0f171','option'); ?></h3>
						<?php } elseif( get_field('field_5518fffdc4ccb','option') && ICL_LANGUAGE_CODE=='de' ) { ?>
							<h3><?php the_field('field_5518fffdc4ccb','option'); ?></h3>
						<?php } elseif( get_field('field_5518fffc56f79','option') && ICL_LANGUAGE_CODE=='en' ) { ?>
							<h3><?php the_field('field_5518fffc56f79','option'); ?></h3>
						<?php } ?>
					<?php } else { ?>
						<h3><?php the_field('field_545c8f54e05af','option'); ?></h3>
					<?php } ?>
					<!-- Start title -->

					<ul class="contact">

						<!-- Start company name -->
						<?php
						include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
						if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) {
						?>
							<?php if( get_field('field_545c91318d1d7','option') && ICL_LANGUAGE_CODE=='nl' ) { ?>
								<li class="company"><?php the_field('field_545c91318d1d7','option'); ?></li>
							<?php } elseif( get_field('field_5518fffd0f19a','option') && ICL_LANGUAGE_CODE=='fr' ) { ?>
								<li class="company"><?php the_field('field_5518fffd0f19a','option'); ?></li>
							<?php } elseif( get_field('field_5518fffdc4d25','option') && ICL_LANGUAGE_CODE=='de' ) { ?>
								<li class="company"><?php the_field('field_5518fffdc4d25','option'); ?></li>
							<?php } elseif( get_field('field_5518fffc56fb4','option') && ICL_LANGUAGE_CODE=='en' ) { ?>
								<li class="company"><?php the_field('field_5518fffc56fb4','option'); ?></li>
							<?php } ?>
						<?php } else { ?>
							<?php if( get_field('field_545c91318d1d7','option') ) : ?>
								<li class="company"><?php the_field('field_545c91318d1d7','option'); ?></li>
							<?php endif; ?>
						<?php } ?>
						<!-- End company name -->

						<!-- Start street & number -->
						<?php
						include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
						if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) {
						?>
							<?php if( get_field('field_545c9204920f9','option') && ICL_LANGUAGE_CODE=='nl' ) { ?>
								<li><?php the_field('field_545c9204920f9','option'); ?></li>
							<?php } elseif( get_field('field_5518fffd0f1ac','option') && ICL_LANGUAGE_CODE=='fr' ) { ?>
								<li><?php the_field('field_5518fffd0f1ac','option'); ?></li>
							<?php } elseif( get_field('field_5518fffdc4d3e','option') && ICL_LANGUAGE_CODE=='de' ) { ?>
								<li><?php the_field('field_5518fffdc4d3e','option'); ?></li>
							<?php } elseif( get_field('field_5518fffc56fca','option') && ICL_LANGUAGE_CODE=='en' ) { ?>
								<li><?php the_field('field_5518fffc56fca','option'); ?></li>
							<?php } ?>
						<?php } else { ?>
							<?php if( get_field('field_545c9204920f9','option') ) : ?>
								<li><?php the_field('field_545c9204920f9','option'); ?></li>
							<?php endif; ?>
						<?php } ?>
						<!-- End street & number -->

						<!-- Start postal code & city -->
						<?php
						include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
						if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) {
						?>
							<?php if( get_field('field_545c9234920fa','option') && ICL_LANGUAGE_CODE=='nl' ) { ?>
								<li><?php the_field('field_545c9234920fa','option'); ?></li>
							<?php } elseif( get_field('field_5518fffd0f1be','option') && ICL_LANGUAGE_CODE=='fr' ) { ?>
								<li><?php the_field('field_5518fffd0f1be','option'); ?></li>
							<?php } elseif( get_field('field_5518fffdc4d7f','option') && ICL_LANGUAGE_CODE=='de' ) { ?>
								<li><?php the_field('field_5518fffdc4d7f','option'); ?></li>
							<?php } elseif( get_field('field_5518fffc56fe7','option') && ICL_LANGUAGE_CODE=='en' ) { ?>
								<li><?php the_field('field_5518fffc56fe7','option'); ?></li>
							<?php } ?>
						<?php } else { ?>
							<?php if( get_field('field_545c9234920fa','option') ) : ?>
								<li><?php the_field('field_545c9234920fa','option'); ?></li>
							<?php endif; ?>
						<?php } ?>
						<!-- End postal code & city -->

						<!-- Start phone number -->
						<?php
						include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
						if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) {
						?>
							<?php if( get_field('field_545c925d920fb','option') && ICL_LANGUAGE_CODE=='nl' ) { ?>
								<li class="phone">
									<label>T:</label>
									<a href="tel:<?php echo str_replace( ' ', '', get_field('field_545c925d920fb','option') ) ?>"><?php the_field('field_545c925d920fb','option'); ?></a>
								</li>
							<?php } elseif( get_field('field_5518fffd0f1f4','option') && ICL_LANGUAGE_CODE=='fr' ) { ?>
								<li class="phone">
									<label>T:</label>
									<a href="tel:<?php echo str_replace( ' ', '', get_field('field_5518fffd0f1f4','option') ) ?>"><?php the_field('field_5518fffd0f1f4','option'); ?></a>
								</li>
							<?php } elseif( get_field('field_5518fffdc4dbf','option') && ICL_LANGUAGE_CODE=='de' ) { ?>
								<li class="phone">
									<label>T:</label>
									<a href="tel:<?php echo str_replace( ' ', '', get_field('field_5518fffdc4dbf','option') ) ?>"><?php the_field('field_5518fffdc4dbf','option'); ?></a>
								</li>
							<?php } elseif( get_field('field_5518fffc57027','option') && ICL_LANGUAGE_CODE=='en' ) { ?>
								<li class="phone">
									<label>T:</label>
									<a href="tel:<?php echo str_replace( ' ', '', get_field('field_5518fffc57027','option') ) ?>"><?php the_field('field_5518fffc57027','option'); ?></a>
								</li>
							<?php } ?>
						<?php } else { ?>
							<?php if( get_field('field_545c925d920fb','option') ) : ?>
								<li class="phone">
									<label>T:</label>
									<a href="tel:<?php echo str_replace( ' ', '', get_field('field_545c925d920fb','option') ) ?>"><?php the_field('field_545c925d920fb','option'); ?></a>
								</li>
							<?php endif; ?>
						<?php } ?>
						<!-- End phone number -->

						<!-- Start mobile phone number -->
						<?php
						include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
						if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) {
						?>
							<?php if( get_field('field_545ceae654114','option') && ICL_LANGUAGE_CODE=='nl' ) { ?>
								<li>
									<label>M:</label>
									<a href="tel:<?php echo str_replace( ' ', '', get_field('field_545ceae654114','option') ) ?>"><?php the_field('field_545ceae654114','option'); ?></a>
								</li>
							<?php } elseif( get_field('field_5518fffd0f205','option') && ICL_LANGUAGE_CODE=='fr' ) { ?>
								<li>
									<label>M:</label>
									<a href="tel:<?php echo str_replace( ' ', '', get_field('field_5518fffd0f205','option') ) ?>"><?php the_field('field_5518fffd0f205','option'); ?></a>
								</li>
							<?php } elseif( get_field('field_5518fffdc4dd1','option') && ICL_LANGUAGE_CODE=='de' ) { ?>
								<li>
									<label>M:</label>
									<a href="tel:<?php echo str_replace( ' ', '', get_field('field_5518fffdc4dd1','option') ) ?>"><?php the_field('field_5518fffdc4dd1','option'); ?></a>
								</li>
							<?php } elseif( get_field('field_5518fffc57040','option') && ICL_LANGUAGE_CODE=='en' ) { ?>
								<li>
									<label>M:</label>
									<a href="tel:<?php echo str_replace( ' ', '', get_field('field_5518fffc57040','option') ) ?>"><?php the_field('field_5518fffc57040','option'); ?></a>
								</li>
							<?php } ?>
						<?php } else { ?>
							<?php if( get_field('field_545ceae654114','option') ) : ?>
								<li>
									<label>M:</label>
									<a href="tel:<?php echo str_replace( ' ', '', get_field('field_545ceae654114','option') ) ?>"><?php the_field('field_545ceae654114','option'); ?></a>
								</li>
							<?php endif; ?>
						<?php } ?>
						<!-- End mobile phone number -->

						<!-- Start email -->
						<?php
						include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
						if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) {
						?>
							<?php if( get_field('field_545c927a920fc','option') && ICL_LANGUAGE_CODE=='nl' ) { ?>
								<li>
									<label>E:</label>
									<a href="mailto:<?php the_field('field_545c927a920fc','option'); ?>"><?php the_field('field_545c927a920fc','option'); ?></a>
								</li>
							<?php } elseif( get_field('field_5518fffd0f1e2','option') && ICL_LANGUAGE_CODE=='fr' ) { ?>
								<li>
									<label>E:</label>
									<a href="mailto:<?php the_field('field_5518fffd0f1e2','option'); ?>"><?php the_field('field_5518fffd0f1e2','option'); ?></a>
								</li>
							<?php } elseif( get_field('7field_5518fffdc4dae','option') && ICL_LANGUAGE_CODE=='de' ) { ?>
								<li>
									<label>E:</label>
									<a href="mailto:<?php the_field('7field_5518fffdc4dae','option'); ?>"><?php the_field('7field_5518fffdc4dae','option'); ?></a>
								</li>
							<?php } elseif( get_field('field_5518fffc57014','option') && ICL_LANGUAGE_CODE=='en' ) { ?>
								<li>
									<label>E:</label>
									<a href="mailto:<?php the_field('field_5518fffc57014','option'); ?>"><?php the_field('field_5518fffc57014','option'); ?></a>
								</li>
							<?php } ?>
						<?php } else { ?>
							<?php if( get_field('field_545c927a920fc','option') ) : ?>
								<li>
									<label>E:</label>
									<a href="mailto:<?php the_field('field_545c927a920fc','option'); ?>"><?php the_field('field_545c927a920fc','option'); ?></a>
								</li>
							<?php endif; ?>
						<?php } ?>
						<!-- End email -->
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="fb2">
		<div class="cntr">
			<ul class="social">

				<!-- Facebook button -->
				<?php if( get_field('ts_social_media__facebook','option') ) : ?>
					<li>
						<a href="<?php the_field('ts_social_media__facebook','option'); ?>" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- Twitter button -->
				<?php if( get_field('ts_social_media__twitter','option') ) : ?>
					<li class="twitter">
						<a href="<?php the_field('ts_social_media__twitter','option'); ?>" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- Linked button -->
				<?php if( get_field('ts_social_media__linkedin','option') ) : ?>
					<li>
						<a href="<?php the_field('ts_social_media__linkedin','option'); ?>" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- Google+ button -->
				<?php if( get_field('ts_social_media__google_plus','option') ): ?>
					<li class="twitter">
						<a href="https://plus.google.com/<?php the_field('ts_social_media__google_plus','option'); ?>" target="_blank" rel="publisher">
							<i class="fa fa-google-plus"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- Instagram button -->
				<?php if( get_field('ts_social_media__instagram','option') ): ?>
					<li>
						<a href="<?php the_field('ts_social_media__instagram','option'); ?>" target="_blank">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- Pinterest button -->
				<?php if( get_field('ts_social_media__pinterest','option') ): ?>
					<li>
						<a href="<?php the_field('ts_social_media__pinterest','option'); ?>" target="_blank">
							<i class="fa fa-pinterest"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- YouTube button -->
				<?php if( get_field('ts_social_media__youtube','option')  ): ?>
					<li>
						<a href="<?php the_field('ts_social_media__youtube','option'); ?>" target="_blank">
							<i class="fa fa-youtube"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- Vimeo button -->
				<?php if( get_field('ts_social_media__vimeo','option') ): ?>
					<li>
						<a href="<?php the_field('ts_social_media__vimeo','option'); ?>" target="_blank">
							<i class="fa fa-vimeo-square"></i>
						</a>
					</li>
				<?php endif; ?>
			</ul>
			<ul class="copyright">
				<li>&copy;<?php echo date("Y"); ?> - <?php _e('All rights reserved', 'eagle'); ?></li>

				<?php {
						$footer_copyrights = array(
						'theme_location'  => 'footer-copyrights',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'footer-copyrights',
						'menu_id'         => 'footer-copyrights',
						'echo'            => true,
						'fallback_cb'     => false,
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '%3$s',
						'depth'           => 0,
						'walker'          => ''
					);
					wp_nav_menu( $footer_copyrights ); }
				?>

				<li class="design">
					<a href="<?php the_field('wb_545c9804ed55f','option'); ?>">
						<?php _e('Website by', 'eagle'); ?> <?php the_field('wb_545c97cbed55e','option'); ?>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>



<!-- Google Analytics -->
<?php get_template_part( 'assets/google-analytics' ) ?>

</div>

<?php wp_footer(); ?>

</body></html>
