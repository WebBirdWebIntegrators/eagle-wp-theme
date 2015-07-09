<?php
	//Template Name: Contact Page
?>

<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr page contact">
			<div class="content with-aside">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
					
					<!-- Gallery --> 
					<?php get_template_part( 'assets/gallery' ) ?>
					
				</div>
				<?php endwhile; endif; ?>
				<?php edit_post_link( __('Edit this entry', 'eagle') , '<div class="post-edit">', '</div>'); ?>
			</div>
			<div class="sidebar">
				<?php dynamic_sidebar( 'sidebar2' ); ?>
			</div>
		</div>
	</div>	
</div>

<?php get_footer(); ?>