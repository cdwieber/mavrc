<?php
/*
 * Template Name: MAVRC FAQ
 * Description: The FAQ page for the MAVRC site.
 */
?>
<?php 
get_header(); 
query_posts('post_type=faq&order=ASC')
?>
<div class="container-fluid">
	<div id="desktopWrapper">
		<div class="row">
			<div id="questions" class="nine columns">

			<?php if (have_posts()) : //Start Loop to retrieve Questions ?>    
   		    <h1>FAQs</h1>  
     	  
            <ol>  
                <?php while (have_posts()) : the_post(); ?>  
                <li><a class="skip" href="#" gumby-goto="#answer<?php the_id() ?>"><?php the_title(); ?></a></li>  
                <?php endwhile; ?>                          
            </ol>       
        	      
    		<?php else : //Spit error if no FAQ's in DB ?>  
        		<h3>Not Found</h3>  
        		<p>Sorry, No FAQs created yet.</p>  
    		<?php endif; ?>  
    		<?php rewind_posts(); //rewind posts to the beginning ?>   
			</div>
			<div id="row">	
				<?php if (have_posts()) : //Start loop to retrieve Answers ?>                                
			    <div id="answers" class="nine columns">  
			        <ol>  
			            <?php while (have_posts()) : the_post(); ?>  
			                <li id="answer<?php the_id(); ?>">  
			                    <h4><?php the_title(); ?></h4>  
			                    <?php the_content(); ?>
			                    <p><a class="skip" href="#" gumby-goto="top">Top...</a></p>
			                </li>  
			            <?php endwhile; ?>                          
			        </ol>       
			    </div>
			 
			    <?php endif; ?>
			</div>
			</div>      
		    <?php wp_reset_query(); ?>  
		</div>
	</div>

<?php get_footer(); ?>