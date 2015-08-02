<div id="footer">

	<?php if( is_page_template( 'page-contact.php' ) ) : ?>
		<?php get_template_part( 'templates/eagle/location-directions' ) ?>
	<?php endif; ?>

	<div class="fb1">
		<div class="cntr">
			<ul>
				<li class="col1">
					<?php if( get_field('wb_ts_site_excerpt__title','option') ) { ?>
						<h3><?php the_field('wb_ts_site_excerpt__title','option'); ?></h3>
					<?php } ?>

					<?php if( get_field('wb_ts_site_excerpt__content','option') ) { ?>
						<?php the_field('wb_ts_site_excerpt__content','option'); ?>
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
					<ul class="contact">
						<?php if( get_field('wb_ts_contact_info__company_name','option') ) { ?>
							<li class="company"><?php the_field('wb_ts_contact_info__company_name','option'); ?></li>
						<?php } ?>
						<?php if( get_field('wb_ts_contact_info__street_number','option') ) { ?>
							<li><?php the_field('wb_ts_contact_info__street_number','option'); ?></li>
						<?php } ?>
						<?php if( get_field('wb_ts_contact_info__postal_code__city','option') ) { ?>
							<li><?php the_field('wb_ts_contact_info__postal_code__city','option'); ?></li>
						<?php } ?>
						<?php if( get_field('wb_ts_contact_info__phone_number','option') ) { ?>
							<li class="phone">
								<label>T:</label>
								<a href="tel:<?php echo str_replace( ' ', '', get_field('wb_ts_contact_info__phone_number','option') ) ?>" onclick="ga('send','event','contact','click','phone',0);"><?php the_field('wb_ts_contact_info__phone_number','option'); ?></a>
							</li>
						<?php } ?>
						<?php if( get_field('wb_ts_contact_info__mobile_phone','option') ) { ?>
							<li>
								<label>M:</label>
								<a href="tel:<?php echo str_replace( ' ', '', get_field('wb_ts_contact_info__mobile_phone','option') ) ?>" onclick="ga('send','event','contact','click','phone',0);"><?php the_field('wb_ts_contact_info__mobile_phone','option'); ?></a>
							</li>
						<?php } ?>
						<?php if( get_field('wb_ts_contact_info__email','option') ) { ?>
							<li>
								<label>E:</label>
								<a href="mailto:<?php the_field('wb_ts_contact_info__email','option'); ?>" onclick="ga('send','event','contact','click','email',0);"><?php the_field('wb_ts_contact_info__email','option'); ?></a>
							</li>
						<?php } ?>
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
						<a href="<?php
							$field = get_field_object('ts_social_media__facebook','option');
							echo $field['prepend'];
							echo get_field('ts_social_media__facebook','option');
							?>" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- Twitter button -->
				<?php if( get_field('ts_social_media__twitter','option') ) : ?>
					<li class="twitter">
						<a href="<?php
							$field = get_field_object('ts_social_media__twitter','option');
							echo $field['prepend'];
							echo get_field('ts_social_media__twitter','option');
							?>" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- Linked button -->
				<?php if( get_field('ts_social_media__linkedin','option') ) : ?>
					<li>
						<a href="<?php
							$field = get_field_object('ts_social_media__linkedin','option');
							echo $field['prepend'];
							echo get_field('ts_social_media__linkedin','option');
							?>" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- Google+ button -->
				<?php if( get_field('ts_social_media__google_plus','option') ): ?>
					<li class="twitter">
						<a href="<?php
							$field = get_field_object('ts_social_media__google_plus','option');
							echo $field['prepend'];
							echo get_field('ts_social_media__google_plus','option');
							?>" target="_blank">
							<i class="fa fa-google-plus"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- Instagram button -->
				<?php if( get_field('ts_social_media__instagram','option') ): ?>
					<li>
						<a href="<?php
							$field = get_field_object('ts_social_media__instagram','option');
							echo $field['prepend'];
							echo get_field('ts_social_media__instagram','option');
							?>" target="_blank">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- Pinterest button -->
				<?php if( get_field('ts_social_media__pinterest','option') ): ?>
					<li>
						<a href="<?php
							$field = get_field_object('ts_social_media__pinterest','option');
							echo $field['prepend'];
							echo get_field('ts_social_media__pinterest','option');
							?>" target="_blank">
							<i class="fa fa-pinterest"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- YouTube button -->
				<?php if( get_field('ts_social_media__youtube','option')  ): ?>
					<li>
						<a href="<?php
							$field = get_field_object('ts_social_media__youtube','option');
							echo $field['prepend'];
							echo get_field('ts_social_media__youtube','option');
							?>" target="_blank">
							<i class="fa fa-youtube"></i>
						</a>
					</li>
				<?php endif; ?>

				<!-- Vimeo button -->
				<?php if( get_field('ts_social_media__vimeo','option') ): ?>
					<li>
						<a href="<?php
							$field = get_field_object('ts_social_media__vimeo','option');
							echo $field['prepend'];
							echo get_field('ts_social_media__vimeo','option');
							?>" target="_blank">
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

				<?php if( get_field('wb_ts_site_credits__site_url','option') ) { ?>
					<li class="design">
						<a href="<?php the_field('wb_ts_site_credits__site_url','option'); ?>">
							<?php _e('Website by', 'eagle'); ?> <?php the_field('wb_ts_site_credits__label','option'); ?>
						</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>

<!-- Custom Body Code -->
<?php
	if( get_field('wb_ts__custom_body_code__code', 'option') ) {
		echo get_field('wb_ts__custom_body_code__code', 'option');
	}
?>
