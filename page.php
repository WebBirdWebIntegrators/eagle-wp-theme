<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr page">
			<div class="content with-aside">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

					<!-- Gallery -->
					<?php get_template_part( 'assets/gallery' ) ?>

				</div>
				<?php endwhile; endif; ?>
				<?php edit_post_link( __('Edit this entry', 'eagle') , '<div class="post-edit">', '</div>'); ?>
				<?php paginate_comments_links() ?>
			</div>
			<?php if( get_field('ts_sidebar_status__status') === 'disabled' ) { ?>
			<?php } else { ?>
				<div class="sidebar">
					<?php dynamic_sidebar( 'sidebar1' ); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
