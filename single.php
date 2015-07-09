<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php if (is_singular()) { ?>
				<!-- Is singular -->
				<?php if ( ! is_singular( array('page', 'attachment', 'post') ) ) { ?>
					<h1>
						<?php
							$customPostType = get_post_type();
							$postTypeObject = get_post_type_object( $customPostType );
							echo $postTypeObject->labels->singular_name;
						?>
					</h1>
				<?php } else { ?>
					<?php
					$categories = get_the_category();
					foreach ($categories as $category) {
						echo '<h1>' . $category->name . '</h1>'; 
						echo '<div class="description">' . $category->description . '</div>';
					}
				?>		
				<?php } ?>
			<?php } ?>
			
		</div>
	</div>
	<div class="b2">
		<div class="cntr post">
			<div class="content with-aside">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<span class="date"><?php the_time('j.m.Y') ?></span><?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<p>
							<?php the_tags( '<div class="tags"><strong>Tags:</strong> ', ', ', '</div>'); ?>
							<?php if ( is_singular( array('page', 'attachment', 'post') ) ) { ?>
								<div class="categories">
									<strong>
										<?php _e( 'Categories', 'eagle' ); ?>:
									</strong>
									<?php the_category(', '); ?>
								</div>
							<?php } ?>
						</p>

						<p class="post-info">
							
							This entry was posted
							<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/wordpress/time-since/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
							on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
							and is filed under <?php the_category(', ') ?>.
							You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.
			
							<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
			
							<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.
			
							<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.
			
							<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.
			
							<?php } edit_post_link( __('Edit', 'eagle'),'<div class="post-edit">','</div>'); ?>
			
						</p>
							
					</div>
					
					<!-- <?php previous_post_link('&laquo; %link') ?> | <?php next_post_link('%link &raquo;') ?> -->
					
					<?php comments_template(); ?>
				
					<?php endwhile; else: ?>
				
						<p>Sorry, no posts matched your criteria.</p>
				
				<?php endif; ?>			
			</div>
			<div class="sidebar">
				<div class="sidebar-p1">
					<div class="sidebar-p1_container">
						<h2>
							<?php 
								$customPostType = get_post_type();
								$postTypeObject = get_post_type_object( $customPostType );
								echo $postTypeObject->labels->singular_name;
								echo ' ' . __('spotlights', 'eagle');
							?>
						</h2>
						<?php
						$postType = get_post_type();
						//$type = 'portfolio';
						$args = array (
							'post_type' => $postType,
							//'services' => 'Website',
							'post_status' => 'publish',
							'posts_per_page' => 2 );
							
							// The Query
							$the_query = new WP_Query( $args );
							
							
							
							// The Loop
							if ( $the_query->have_posts() ) {
								echo '<div class="sidebar-p1_container_list">';
									while ( $the_query->have_posts() ) {
										$the_query->the_post();
										echo '<div class="sidebar-p1_container_list_item">';
											echo '<div class="sidebar-p1_container_list_item_img rounded">';
											echo '<a href="' . get_the_permalink() . '">';
												echo '<div class="sidebar-p1_container_list_item_img_mask">';
													echo '<div class="sidebar-p1_container_list_item_img_mask_mask-container">';
														echo '<div class="sidebar-p1_container_list_item_img_mask_mask-container_mask-content">';
															echo '<i class="fa fa-link"></i>';
														echo '</div>';
													echo '</div>';
												echo '</div>';
												echo get_the_post_thumbnail( $post->ID, 'thumbnail' );
											echo '</a>';
											echo '</div>';
											//echo '<div class="sidebar-p1_container_list_item_content">';
												echo '<h3>';
													echo '<a href="' . get_the_permalink() . '">';
														echo get_the_title();
													echo '</a>';
												echo '</h3>';
												echo get_the_excerpt();
												echo '<div class="date-author">';
													echo the_time('l d F Y');
													echo ' / ';
													echo the_author_posts_link();
												echo '</div>';
											//echo '</div>';
										echo '</div>';
									}
								echo '</div>';
							} else {
								// no posts found
							}
							/* Restore original Post Data */
							wp_reset_postdata();
						?>
					</div>
				</div>
				<?php dynamic_sidebar( 'sidebar1' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>