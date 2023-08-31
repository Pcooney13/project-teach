<?php 
    // sets variables for if color will be bg or text
    $colorOption = get_field('color_option');
    if ($colorOption === 'bg') {
        $colorOption = "background-color:";
    } elseif ($colorOption === 'text') {
        $colorOption = "color:";
        $borderStyles = true;
    }

    // sets variables for color
    $colorHex = get_field('color');
    if ($colorHex) {

        $inlineColorStyle = $colorOption . $colorHex;

        if ($colorHex === "#3e0d85") {
            $colorName = "purple";
        } elseif ($colorHex === "#039fda") {
            $colorName = "blue";
        } elseif ($colorHex === "#7bbf43") {
            $colorName = "green";
        } elseif ($colorHex === "#e09b3d") {
            $colorName = "orange";
        }
    }
?>

<h2 class="px-0 font-gotham-bold leading-tight mb-2">
    <?php the_field('specific_posts_title');?>
</h2>

<div class="border-l-4 mb-8 border-<?php echo $colorName; ?>">
<?php
$featured_posts = get_field('specific_posts');
if( $featured_posts ) :
    $matchedPosts = [];
    foreach( $featured_posts as $featured_post ):
		array_push($matchedPosts, $featured_post->ID);
    endforeach;
endif; ?>

<?php
	// New query with matchposts to display
	// in order of how they are sorted in ACF
	$args = array(
		'post_type' => array( 'post', 'pt-events' ),
	    'post__in' => $matchedPosts,
       	'orderby' =>  'post__in',
	);
	$query = new WP_Query( $args );
	
	if ($query -> have_posts()) : 
		$i = 1;

		//Sets variables for the post loop
		include( locate_template( 'includes/utilities/post-list-options.php', false, false ) ); 

		// Feature the First above dropdown
		while ($query -> have_posts()) : $query -> the_post();
			if ($i === 1) {
				//Displays post content
				$callout_post = true;
				include( locate_template( 'includes/utilities/post-list-card.php', false, array($callout_post) ) );
			}
		$i++;
		endwhile; 

		// Posts other than the first are placed in a dropdown
		if (count($matchedPosts) > 1) : ?>
			<div class="shadow-md p-4 bg-white">
    			<button class="bg-<?php echo $colorName; ?> flex leading-tight accordion text-white items-center text-left cursor-pointer border-none w-full outline-none transition-all duration-300 ease-in-out p-4 opacity-100">
    		    	<p class="text-base md:text-lg md:font-gotham-medium w-full mr-4">
    		        	More
    		    	</p>
    		    	<span class="text-base md:text-lg md:font-gotham-medium ml-auto">
    		        	+
    		    	</span>
    			</button>
    			<div class="panel bg-<?php echo $colorName; ?>-200 overflow-hidden max-h-0 px-4 transition-all duration-300 ease-in-out border-b border-r border-l border-black-100">
    		    	<div class="py-4">
						<?php 
							$i = 1;
							
							while ($query -> have_posts()) : $query -> the_post();
								if ($i !== 1) {
									//Displays post content
									include( locate_template( 'includes/utilities/post-list-card.php', false, false ) );
								}
							$i++;
							endwhile; 
						?>
		        	</div>
    			</div>
			</div>
		<?php endif;
		
    endif;
?>
</div>