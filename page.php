<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package eagle2
 */

get_header(); ?>

<div id="body">
	<div id="page">
		<div class="page-wrapper">
			<main class="main-content" role="main">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>
					<?php get_template_part( 'assets/gallery' ) ?>

					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'test' ),
							'after'  => '</div>',
						) );
					?>

					<?php
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; ?>
			</main>
			<aside class="sidebar">
				Sidebar ...
			</aside>
		</div>
	</div>
</div>

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
