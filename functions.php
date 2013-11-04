<?php
/*Mavrc v2 Functions */

//Function for the Blog: makes "READ MORE" link to post
function new_excerpt_more( $more ) {
	return '...<br /> <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Contact sidebar',
		'id' => 'contact-sidebar',
		'before_widget' => '<div id="contact">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/**
 * Register our custom post type for the FAQ
 *
 */
add_action('init', 'my_custom_init');

function my_custom_init()
{
	$labels = array(  
	   'name' => _x('FAQs', 'post type general name'),  
	   'singular_name' => _x('FAQ', 'post type singular name'),  
	   'add_new' => _x('Add New', 'FAQ'),  
	   'add_new_item' => __('Add New FAQ'),  
	   'edit_item' => __('Edit FAQ'),  
	   'new_item' => __('New FAQ'),  
	   'view_item' => __('View FAQ'),  
	   'search_items' => __('Search FAQs'),  
	   'not_found' =>  __('No FAQs found'),  
	   'not_found_in_trash' => __('No FAQs found in Trash'),  
	   'parent_item_colon' => ''  
	 ); 
	$args = array(  
	    'labels' => $labels,  
	    'public' => true,  
	    'publicly_queryable' => true,  
	    'show_ui' => true,  
	    'query_var' => true,  
	    'rewrite' => true,  
	    'capability_type' => 'post',  
	    'hierarchical' => false,  
	    'menu_position' => 5,  
	    'supports' => array('title','editor','thumbnail','custom-fields')  
	  );
	$labels_r = array(  
	   'name' => _x('Resources', 'post type general name'),  
	   'singular_name' => _x('Resource', 'post type singular name'),  
	   'add_new' => _x('Add New', 'Resource'),  
	   'add_new_item' => __('Add New Resource'),  
	   'edit_item' => __('Edit Resource'),  
	   'new_item' => __('New Resource'),  
	   'view_item' => __('View Resource'),  
	   'search_items' => __('Search Resource'),  
	   'not_found' =>  __('No Resources found'),  
	   'not_found_in_trash' => __('No Resources found in Trash'),  
	   'parent_item_colon' => ''  
	 ); 
	$args_r = array(  
	    'labels' => $labels_r,  
	    'public' => true,  
	    'publicly_queryable' => true,  
	    'show_ui' => true,  
	    'query_var' => true,  
	    'rewrite' => true,  
	    'capability_type' => 'post',  
	    'hierarchical' => false,  
	    'menu_position' => 6,  
	    'supports' => array('title','editor','thumbnail','custom-fields'),
	    'taxonomies' => array('category')
	  );
		register_post_type('faq',$args);
		register_post_type('resource', $args_r)

}
?>
