<?php
/*
 * Template Name: MAVRC Resources
 * Description: The FAQ page for the MAVRC site.
 */
?>
<?php get_header(); ?>
<!--MAIN LOOP-->
<?php if (have_posts()) : ?>  
    <?php while (have_posts()) : the_post(); ?>  
        <?php the_content(); ?>  
    <?php endwhile; ?>  
    <?php else : ?>  
    <h2>No content found!</h2>
<?php endif; ?>
<?php rewind_posts(); ?>



<div class="row">
	<div class="five columns" id="on-campus-list">
		<a id="menu"></a>
		<h3>On-Campus Resources</h3>
		<ul>
			<li class="res-list"><a href="#" class="skip" gumby-goto="#aca">Academic Support and Tutoring</a></li>
			<li class="res-list"><a href="#" class="skip" gumby-goto="#acc">Accessibility</a></li>
			<li class="res-list"><a href="#" class="skip" gumby-goto="#emp">Employment</a></li>
			<li class="res-list"><a href="#" class="skip" gumby-goto="#fin">Financial Aid and Benefits</a></li>
			<li class="res-list"><a href="#" class="skip" gumby-goto="#haw">Health & Wellness</a></li>
			<li class="res-list"><a href="#" class="skip" gumby-goto="#tech">Tech Support</a></li>
			<li class="res-list"><a href="#" class="skip" gumby-goto="#vag">Veterans Groups</a></li>
		</ul>
	</div>
	<div class="five columns push_two" id="off-campus-list">
		<h3>Off-Campus Resources</h3>
		<ul>
			<li class="res-list"><a href="#" class="skip" gumby-goto="#oc-haw">Health & Wellness</a></li>
			<li class="res-list"><a href="#" class="skip" gumby-goto="#oc-hou">Housing</a></li>
			<li class="res-list"><a href="#" class="skip" gumby-goto="#soc">Social</a></li>
			<li class="res-list"><a href="#" class="skip" gumby-goto="#oc-va">Veterans Affairs Offices</a></li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="six centered columns">
		<hr />
	</div>
</div>
<div class="row">
	<div class="eight columns">

	<h2>On-Campus Resources</h2>
		<a id="aca"></a>
		<h3>Academic Support and Tutoring</h3>
			<?php //Never use this method you are about to see. This is horrible. Signed, the guy who wrote this awful code. ?>
				<?php query_posts('cat=24&post_type=resource'); ?>
					<?php while (have_posts()) : the_post(); ?> 
						<?php the_title('<h4>','</h4>'); ?>
       					<?php the_content(); ?>  
       					<br />
       					<a href="#" class="skip" gumby-goto="#menu">Back to top...</a>
    				<?php endwhile; ?>  
					<?php wp_reset_query(); ?>
		<a id="acc"></a>
		<h3>Accessibility</h3>

						<?php query_posts('cat=26&post_type=resource'); ?>
					<?php while (have_posts()) : the_post(); ?> 
						<?php the_title('<h4>','</h4>'); ?>
       					<?php the_content(); ?> 
       					<br />
       					<a href="#" class="skip" gumby-goto="#menu">Back to top...</a>
    				<?php endwhile; ?>  
					<?php wp_reset_query(); ?>
		<a id="emp"></a>
		<h3>Employment</h3>
						<?php query_posts('cat=22&post_type=resource'); ?>
					<?php while (have_posts()) : the_post(); ?> 
						<?php the_title('<h4>','</h4>'); ?>
       					<?php the_content(); ?> 
       					<br />
       					<a href="#" class="skip" gumby-goto="#menu">Back to top...</a>
    				<?php endwhile; ?>  
					<?php wp_reset_query(); ?>
		<a id="fin"></a>
		<h3>Financial Aid and Benefits</h3>
						<?php query_posts('cat=21&post_type=resource'); ?>
					<?php while (have_posts()) : the_post(); ?> 
						<?php the_title('<h4>','</h4>'); ?>
       					<?php the_content(); ?> 
       					<br />
       					<a href="#" class="skip" gumby-goto="#menu">Back to top...</a> 
    				<?php endwhile; ?>  
					<?php wp_reset_query(); ?>
		<a id="haw"></a>
		<h3>Health & Wellness</h3>
						<?php query_posts('cat=20&post_type=resource'); ?>
					<?php while (have_posts()) : the_post(); ?> 
						<?php the_title('<h4>','</h4>'); ?>
       					<?php the_content(); ?>
       					<br />
       					<a href="#" class="skip" gumby-goto="#menu">Back to top...</a>  
    				<?php endwhile; ?>  
					<?php wp_reset_query(); ?>
		<a id="tech"></a>
		<h3>Tech Support</h3>
						<?php query_posts('cat=25&post_type=resource'); ?>
					<?php while (have_posts()) : the_post(); ?> 
						<?php the_title('<h4>','</h4>'); ?>
       					<?php the_content(); ?>
       					<br />
       					<a href="#" class="skip" gumby-goto="#menu">Back to top...</a>  
    				<?php endwhile; ?>  
					<?php wp_reset_query(); ?>
		<a id="vag"></a>
		<h3>Veterans Groups</h3>
						<?php query_posts('cat=23&post_type=resource'); ?>
					<?php while (have_posts()) : the_post(); ?> 
						<?php the_title('<h4>','</h4>'); ?>
       					<?php the_content(); ?>
       					<br />
       					<a href="#" class="skip" gumby-goto="#menu">Back to top...</a>  
    				<?php endwhile; ?>  
					<?php wp_reset_query(); ?>
	<h2>Off-Campus Resources</h2>
		<a id="oc-haw"></a>
		<h3>Health & Wellness</h3>
						<?php query_posts('cat=28&post_type=resource'); ?>
					<?php while (have_posts()) : the_post(); ?> 
						<?php the_title('<h4>','</h4>'); ?>
       					<?php the_content(); ?> 
       					<br />
       					<a href="#" class="skip" gumby-goto="#menu">Back to top...</a> 
    				<?php endwhile; ?>  
					<?php wp_reset_query(); ?>
		<a id="oc-hou"></a>
		<h3>Housing</h3>
						<?php query_posts('cat=29&post_type=resource'); ?>
					<?php while (have_posts()) : the_post(); ?> 
						<?php the_title('<h4>','</h4>'); ?>
       					<?php the_content(); ?>
       					<br />
       					<a href="#" class="skip" gumby-goto="#menu">Back to top...</a>
    				<?php endwhile; ?>  
					<?php wp_reset_query(); ?>
		<a id="soc"></a>
		<h3>Social</h3>
						<?php query_posts('cat=30&post_type=resource'); ?>
					<?php while (have_posts()) : the_post(); ?> 
						<?php the_title('<h4>','</h4>'); ?>
       					<?php the_content(); ?>
       					<br />
       					<a href="#" class="skip" gumby-goto="#menu">Back to top...</a>
    				<?php endwhile; ?>  
					<?php wp_reset_query(); ?>
		<a id="oc-va"> </a>
		<h3>Veterans Affairs Offices</h3>
						<?php query_posts('cat=27&post_type=resource'); ?>
					<?php while (have_posts()) : the_post(); ?> 
						<?php the_title('<h4>','</h4>'); ?>
       					<?php the_content(); ?>
       					<br />
       					<a href="#" class="skip" gumby-goto="#menu">Back to top...</a>  
    				<?php endwhile; ?>  
					<?php wp_reset_query(); ?>
	</div>
</div>
<?php get_footer(); ?>