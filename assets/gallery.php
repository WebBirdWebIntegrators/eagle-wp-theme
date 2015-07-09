<!-- Check if the gallery setting is active theme settings -->

<?php 
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'sitepress-multilingual-cms/sitepress.php' ) ) {
?>

	<?php if( get_field('field_54f5dade53986', 'option') === 'yes' && ICL_LANGUAGE_CODE=='nl' ) { ?>
		
		<!-- Show gallery images -->
		
			<?php $images = get_field('field_547d824c85fb9');
			
			if( $images ): ?>
				<div class="gallery">
				    <ul>
				        <?php foreach( $images as $image ): ?>
				            <li>
				                <a href="<?php echo $image['url']; ?>">
					                <div class="layer-enlarge">
						                <div class="layer-enlarge-container">
							            	<div class="layer-enlarge-container-plus">
								            	<i class="fa fa-search-plus"></i>
								            </div>
						                </div>
					                </div>
				                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				                <p><?php echo $image['caption']; ?></p>
				            </li>
				        <?php endforeach; ?>
				    </ul>
				</div>
			<?php endif; ?>
	
	<?php } elseif( get_field('field_55195622ec494', 'option') === 'yes' && ICL_LANGUAGE_CODE=='fr' ) { ?>
		
		<!-- Show gallery images -->
		
			<?php $images = get_field('field_5518ef8252b7e');
			
			if( $images ): ?>
				<div class="gallery">
				    <ul>
				        <?php foreach( $images as $image ): ?>
				            <li>
				                <a href="<?php echo $image['url']; ?>">
					                <div class="layer-enlarge">
						                <div class="layer-enlarge-container">
							            	<div class="layer-enlarge-container-plus">
								            	<i class="fa fa-search-plus"></i>
								            </div>
						                </div>
					                </div>
				                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				                <p><?php echo $image['caption']; ?></p>
				            </li>
				        <?php endforeach; ?>
				    </ul>
				</div>
			<?php endif; ?>
	
	<?php } elseif( get_field('field_5518ef827da99', 'option') === 'yes' && ICL_LANGUAGE_CODE=='de' ) { ?>
		
		<!-- Show gallery images -->
		
			<?php $images = get_field('field_5518ef8252b7e');
			
			if( $images ): ?>
				<div class="gallery">
				    <ul>
				        <?php foreach( $images as $image ): ?>
				            <li>
				                <a href="<?php echo $image['url']; ?>">
					                <div class="layer-enlarge">
						                <div class="layer-enlarge-container">
							            	<div class="layer-enlarge-container-plus">
								            	<i class="fa fa-search-plus"></i>
								            </div>
						                </div>
					                </div>
				                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				                <p><?php echo $image['caption']; ?></p>
				            </li>
				        <?php endforeach; ?>
				    </ul>
				</div>
			<?php endif; ?>
	
	<?php } elseif( get_field('field_55195622c452d', 'option') === 'yes' && ICL_LANGUAGE_CODE=='en' ) { ?>
		
		<!-- Show gallery images -->
		
			<?php $images = get_field('field_5518ef8227988');
			
			if( $images ): ?>
				<div class="gallery">
				    <ul>
				        <?php foreach( $images as $image ): ?>
				            <li>
				                <a href="<?php echo $image['url']; ?>">
					                <div class="layer-enlarge">
						                <div class="layer-enlarge-container">
							            	<div class="layer-enlarge-container-plus">
								            	<i class="fa fa-search-plus"></i>
								            </div>
						                </div>
					                </div>
				                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				                <p><?php echo $image['caption']; ?></p>
				            </li>
				        <?php endforeach; ?>
				    </ul>
				</div>
			<?php endif; ?>
		
	<?php } ?>
	
<?php } else { ?>

	<?php if( get_field('field_54f5dade53986', 'option') === 'yes' ) { ?>
		
		<!-- Show gallery images -->
		
		<?php $images = get_field('field_547d824c85fb9');
		
		if( $images ): ?>
			<div class="gallery">
			    <ul>
			        <?php foreach( $images as $image ): ?>
			            <li>
			                <a href="<?php echo $image['url']; ?>">
				                <div class="layer-enlarge">
					                <div class="layer-enlarge-container">
						            	<div class="layer-enlarge-container-plus">
							            	<i class="fa fa-search-plus"></i>
							            </div>
					                </div>
				                </div>
			                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
			                </a>
			                <p><?php echo $image['caption']; ?></p>
			            </li>
			        <?php endforeach; ?>
			    </ul>
			</div>
		<?php endif; ?>
	
	<?php } ?>

<?php } ?>