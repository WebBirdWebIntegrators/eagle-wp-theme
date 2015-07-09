<?php if ( is_singular( array('page', 'attachment', 'post') ) ) { ?>
<div class="sidebar-default categories">
	<p><strong>Remark:</strong> For the moment this does not seems to work. It should only list the child categories from the current categories, if there are any.</p>
	<?php 
		$cat_ID = get_query_var('cat');
		$args = array(
			'show_option_all'    => '',
			'orderby'            => 'name',
			'order'              => 'ASC',
			'style'              => 'list',
			'show_count'         => 0,
			'hide_empty'         => 1,
			'use_desc_for_title' => 1,
			'child_of'           => $cat_ID,
			'feed'               => '',
			'feed_type'          => '',
			'feed_image'         => '',
			'exclude'            => '',
			'exclude_tree'       => '',
			'include'            => '',
			'hierarchical'       => 1,
			'title_li'           => '',
			'show_option_none'   => '',
			'number'             => null,
			'echo'               => 1,
			'depth'              => 0,
			'current_category'   => 1,
			'pad_counts'         => 0,
			'taxonomy'           => 'category',
			'walker'             => null
		 );
		
		echo '<h2>Categories</h2>';
		echo '<ul>';
		if ( wp_list_categories ( $args ) ) {
			wp_list_categories ( $args );
		}
		echo '</ul>';						
	?>
</div>
<?php } ?>

<?php if ( ! is_singular( array('page', 'attachment', 'post') ) ) { ?>
	<div class="sidebar-default taxonomy-terms">
		<p><strong>Remark:</strong> For the moment we can't seem to get the taxonomy name / label.</p>
		<h2>
			<?php
				$taxonomyTitle = get_taxonomy( get_query_var( 'taxonomy' ) );
				echo $taxonomyTitle->labels->name;
			?>
		</h2>
		<?php
			$customPostType = get_post_type();
			$customPostTaxonomies = get_object_taxonomies($customPostType);
			if(count($customPostTaxonomies) > 0) {
				foreach($customPostTaxonomies as $tax) {
					$args = array(
		         	  'orderby' => 'name',
			          'show_count' => 0,
		        	  'pad_counts' => 0,
			          'hierarchical' => 1,
		        	  'title_li' => '',
		        	  'current_category' => 1,
		        	  'taxonomy' => $tax,
		        	);
					
					echo '<ul>';
						wp_list_categories( $args );
					echo '</ul>';
				}
			}
		?>
	</div>
<?php } ?>