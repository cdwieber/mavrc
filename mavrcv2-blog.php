<?php
/*
Template Name: MAVRCv2 Blog Page
*/
?>
<?php get_header(); ?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
<div class="row">
	<div class="eight columns">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_title('<h3>','</h3>'); ?>
				<p class="post-meta">
					Posted <?php the_date(); ?>
					by: <?php the_author(); ?>
				</p>	
				<?php the_excerpt(); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<h2>Nothing to display!</h2>
		<?php endif; ?>	
		<div class="navigation">
 			<span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
		</div><!-- /.navigation -->
	</div>	
	<div class="four columns">
		<?php wp_reset_query() ?>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
