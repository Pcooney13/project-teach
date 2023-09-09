<?php
	get_header(); 
	// use instead but add css
	// echo the_breadcrumb();
    // require(dirname(__FILE__)."/breadcrumbs.php");
	
	$post_type = get_post_type();
	$args = array(
	   'public'   => true
	);
	$output = 'objects'; // 'names' or 'objects' (default: 'names')
	$operator = 'and'; // 'and' or 'or' (default: 'and')
	  
	$post_types = get_post_types( $args, $output, $operator );
	  
	if ( $post_types ) { // If there are any custom public post types.  
		$sidebar = false;
		// echo '<div class="flex flex-col md:flex-row max-w-screen-xl mx-auto mb-20">';
	    	foreach ( $post_types  as $type ) {
				if($post_type == $type->name) {
					if ($type->name === 'events') {
						$sidebar = false;
					} 
					if ($type->name === 'pt_resources') {
						get_template_part('templates/singles/resources');
						$sidebar = false;
					}
					get_template_part('templates/singles/' . $type->name);
				}
	    	}
			if ($sidebar) {
				echo '<div class="ml-0 md:ml-8">';
				get_sidebar();
				echo '</div>';
			}
		// echo '</div>';
	}
	get_footer();
?>