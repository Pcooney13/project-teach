<?php 
	$categories = get_the_category();  

	$shortened_title = get_the_title();
	if (strlen($shortened_title) <= 70) {
		$shortened_title;
	} else {
		$shortened_title = substr($shortened_title, 0, 70) . '...';
	}
?>

<div class="flex flex-col md:flex-row bg-white w-full mb-6 min-h-32 border-b border-solid border-off-white">

	<!-- Image -->
	<?php if(has_post_thumbnail()):?>
		<a class="overflow-hidden" href="<?php the_permalink(); ?>">
        	<img class="w-full md:w-48 h-full object-cover transform transition-all duration-300 hover:scale-110" src="<?php the_post_thumbnail_url(); ?>">
    	</a>
	<?php else: ?>
        <a class="w-full md:w-48 bg-purple relative uppercase h-40 md:h-auto" href="<?php the_permalink(); ?>">
            <span class="text-white font-gotham-bold absolute bottom-0 right-0 text-3xl opacity-50 mr-1"><?php the_time('M Y'); ?></span>
		</a>									
	<?php endif;?> 

    <div class="mx-2 flex flex-col justify-center flex-1">
		<!-- Categories -->
		<?php if ( ! empty( $categories ) ) : ?>
			<div class="flex items-center text-blue">
            	<?php foreach( $categories as $category ) :
					if ($category->name !== 'Uncategorized') :                    
                    	$cat_id = $category->cat_ID;
                    	$color = get_field('category_color', 'category_'. $cat_id .'');?>    
						<a style="color:<?php echo $color; ?>;" class="text-sm leading-6 font-gotham-thin mr-2" href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
					<?php endif; ?>
                <?php endforeach; ?>
			</div>
        <?php endif; ?>
		<!-- Title  -->
        <a target="_blank" href="<?php the_permalink(); ?>">
            <h3 class="font-gotham-bold text-base leading-6 mb-4 lg:pr-4 transition-all duration-300 hover:text-purple">
				<?php echo $shortened_title; ?>
			</h3>
        </a>
        <!-- Authors -->
		<?php if (have_rows('authors')): ?>
			<div class="flex items-center">
				<?php while (have_rows('authors')): the_row();
					$featured_post = get_sub_field('author');
					echo '<a href="/consultants/' . $featured_post->post_name . '/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">';
					    if (get_field('image', $featured_post->ID)) {
			        	    $featured_image = get_field('image', $featured_post->ID);
						    echo '<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(' . $featured_image['url'] . ');"></div>';
			    	    }
					    if( $featured_post ):
    					    echo '<h3 class="mt-px pt-px">' . esc_html( $featured_post->post_title ) . '</h3>';
					    endif;
					echo '</a>';
				endwhile; ?>
			</div>
		<?php endif; ?>

    </div>
</div>