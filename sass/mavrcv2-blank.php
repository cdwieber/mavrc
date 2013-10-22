<?php
/*
Template Name: MAVRCv2 Basic Content
*/
?>
<?php get_header(); ?>

<div class="row">
	<div class="twelve columns">
		<?php if (have_posts()) : ?>  
	        <?php while (have_posts()) : the_post(); ?>  
	            <?php the_content(); ?>  
	        <?php endwhile; ?>  
	        <?php else : ?>  
	        <h2>No content found!</h2>
	   	<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
