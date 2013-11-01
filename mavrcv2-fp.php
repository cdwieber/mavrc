<?php
/*
Template Name: MAVRCv2 Home Page
*/
?>
<?php get_header(); ?>
<script type="text/javascript">
	//handle rearrangement of content for mobile devices
	//the main blurb will end up under the tagline.
	$(document).ready(function() {
		if ($(window).width() <= 768) {
			$("#main-blurb").remove().insertAfter($("#tagline"));
		}
		else {
			$("#main-blurb").remove().insertAfter($("#categories"));
		}




	$(document).load($(window).bind("resize", listenWidth));

		function listenWidth( e ) {
			if($(window).width()<=768)
			{
				$("#main-blurb").remove().insertAfter($("#tagline"));
			}
			else
			{
				$("#main-blurb").remove().insertAfter($("#categories"));
			}
		}	

//Handle star rollovers
	
</script>
<div class="row">
	<div class="twelve columns">
		<?php echo do_shortcode("[metaslider id=4]"); ?>
	</div>
</div>
<div class="row">
	<div class="twelve columns" id="tagline">
		<h3> How can MAVRC serve you? </h3>
	</div>
</div>"
<div class="row">
	<div class="six columns" id="categories">
		<div class="row">

			<div class="four columns">
				<a href="#" class="switch" gumby-trigger="#currentdrawer|#prospdrawer,#newdrawer">
					<p class="subnav"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/current_tile.png" />
					</p>
				</a>
			</div>

	

			<div class="four columns">
				<a href="#" class="switch" gumby-trigger="#newdrawer|#currentdrawer,#prospdrawer">
					<p class="subnav"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/new_tile.png" />
					</p>
				</a>
			</div>
			<div class="four columns">
					<a href="#" class="switch" gumby-trigger="#prospdrawer|#newdrawer,#currentdrawer">
						<p class="subnav"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/prospective_tile.png" />
						</p>
					</a>
				</div>
		</div>
		<a href="http://www4.uwm.edu/mebo/">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mavrc_access_button.png" />
		</a>
	</div>

	<div class="six columns" id="main-blurb">
		<?php if (have_posts()) : ?>  
	        <?php while (have_posts()) : the_post(); ?>  
	            <?php the_content(); ?>  
	        <?php endwhile; ?>  
	        <?php else : ?>  
	        <h2>No content found!</h2>
	   	<?php endif; ?>
	   	<?php rewind_posts(); ?>

	</div>
	<div class="row">
		<div class="six columns">
			<center>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/facebook_32.png" />
		   	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/twitter_32.png" />
		   	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/google_plus_32.png" />
		   	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/linkedin_32.png" />
		   	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/youtube_32.png" />
			</center>
		</div>
	</div>
</div>
<!-- BEGIN PROSPECTIVE DRAWER -->
<div class="row">
	<div class="twelve columns">
		
		<div class="drawer" id="prospdrawer">
			<div class="row">	
				<div class="twelve columns">
					<h2> Why UWM?</h2>
				</div>
			</div>
			<div class="row">
				<div class="three columns">
					<p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png"  />	
					We enroll the most student 
					veterans in Wisconsin
					</p>
				</div>
				<div class="three columns">
					<p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png"  />	
					We're a military friendly campus, a rare 
					designation
					</p>
				</div>
				<div class="three columns">
					<p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png"  />	
					Our campus is easy to get around for disabled 
					students.
					</p>
				</div>
				<div class="three columns">
					<p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png"  />	
				We're a proud member of the Yellow Ribbon Program
					</p>
				</div>
			<div class="row">	
				<div class="push_three three columns">
					<p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png"  />	
					Live and learn alongside fellow veterans in the PantherBarracks.
					</p>
				</div>
				<div class="three columns">
					<p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png"  />	
					Our veterans automatically join Student Veterans of America
					</p>
				</div>
				<div class="row">
					<div class="twelve columns">
						<h3>Ready to apply? Find out your <a href="#">next steps...</a></h3>
					</div>
				</div>
			</div>
					<div class="row">
						<div class="one centered column">
							<a href="#" class="switch" gumby-trigger="|#prospdrawer"><img class="close-dra" src="<?php echo get_stylesheet_directory_uri(); ?>/img/close.png" /></a>
						</div>
					</div>
			</div>
		</div>
		<!--NEW DRAWER-->
		<div class="drawer" id="newdrawer">
			<div class="row">
				<div class="twelve columns">
					<h2> Welcome to UWM! </h2>
				</div>
			</div>
			<div class="row">
				<div class="three columns">
					<a href="http://www4.uwm.edu/discover/explore.cfm" class="bullets">
					<p class="bullets"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png" />Find your way around campus.</p>
					</a>
				</div>
				<div class="three columns">
					<a href="http://mavrc.uwm.dev/resources/" class="bullets">
					<p class="bullets"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png" />Discover useful resources in the area.</p>
					</a>
				</div>
				<div class="three columns">
					<a href="http://www4.uwm.edu/financialaid/" class="bullets">
					<p class="bullets"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png" />Get answers about your financial aid deadlines and disbursement dates</P>
				</a></div>
				<div class="three columns">
					<a href="http://www4.uwm.edu/life/" class="bullets">
					<p class="bullets"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png" />Get involved with student organizations, clubs, and veterans associations</p>
				</a></div>
			</div>
				<div class="row">
						<div class="one centered column">
							<a href="#" class="switch" gumby-trigger="|#newdrawer"><img class="close-dra" src="<?php echo get_stylesheet_directory_uri(); ?>/img/close.png" /></a>
						</div>
					</div>
		</div>
		<!--CURRENT DRAWER-->
		<div class="drawer" id="currentdrawer">
			<div class="row">
				<div class="twelve columns">
					<h2> We're here to help. </h2>
				</div>
			</div>
			<div class="row">
				<div class="three columns">
					<a class="bullets" href="http://www4.uwm.edu/mebo/">
					<p class="bullets"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png" />Troubleshoot your VA payments</p>
					</a>
				</div>
				<div class="three columns">
					<a class="bullets" href="http://www4.uwm.edu/mebo/">
						<p class="bullets"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png" />Get info on the latest changes to VA Benefits</p>
					</a>
				</div>
				<div class="three columns">
					<a class="bullets" href="http://www4.uwm.edu/financialaid/">
					<p class="bullets"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png" />Get answers about your financial aid deadlines and disbursement dates</P>
					</a>
				</div>
				<div class="three columns">
					<a class="bullets" href="http://mavrc.uwm.dev/resources/#emp">
					<p class="bullets"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MAVRC_menu_buttons.png" />Use our center to help find employment and internships</p>
					</a>
				</div>
			</div>
				<div class="row">
						<div class="one centered column">
							<a href="#" class="switch" gumby-trigger="|#currentdrawer">
								<img class="close-dra" src="<?php echo get_stylesheet_directory_uri(); ?>/img/close.png" />
							</a>
						</div>
					</div>
		</div>

	</div>
</div>
<div class="row">
	<div class="six columns">
		<h3>Latest News</h3>
		<?php query_posts('post_type=post&post_status=publish'); ?>
			
			<?php while (have_posts()) : the_post(); ?>
				<?php the_title('<h4>','</h4>'); ?>
				<p class="post-meta">
					Posted <?php the_date(); ?>
					by: <?php the_author(); ?>
				</p>	
				
				<?php the_excerpt(); ?>
				<?php break; ?>
			<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</div>
	<div class="six columns">
	<?php echo do_shortcode("[gravityform id=1 title=true description=true ajax=true]"); ?>
</div>
</div>
<?php get_footer(); ?>