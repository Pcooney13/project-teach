<?php 
	$url = get_field('video');
	if ($url): 
		if (get_field('video_type') == 'vimeo'):
			$videoImage = 'https://vumbnail.com/' . $url . '.jpg';
		else:
			$videoImage = 'https://img.youtube.com/vi/' . $url . '/0.jpg';
		endif;
	else:
		$videoImage = 'https://via.placeholder.com/640x480/039fda/ffffff?text=Project TEACH';
	endif; 
?>

<div class="flex flex-col md:flex-row bg-white w-full mb-6 min-h-32 border-b border-solid border-off-white">

	<!-- Image -->
	<?php if(has_post_thumbnail()):?>
		<a class="overflow-hidden relative text-white hover:text-purple transition-all duration-300" href="<?php the_permalink(); ?>">
			<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none h-6 w-6 absolute top-50 z-10 w-full h-10 transform -translate-y-1/2" fill="currentColor" viewBox="0 0 24 24"><path d="M2 24v-24l20 12-20 12z"/></svg>
			<div class="event__image-overlay w-full h-full absolute transition-all duration-300 ease-in-out bg-black opacity-25 hover:opacity-0"></div>
        	<img class="w-full md:w-48 h-full object-cover" src="<?php the_post_thumbnail_url(); ?>">
    	</a>							
	<?php else:?> 
		<a class="overflow-hidden relative text-white hover:text-purple transition-all duration-300" href="<?php the_permalink(); ?>">
			<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none h-6 w-6 absolute top-50 z-10 w-full h-10 transform -translate-y-1/2" fill="currentColor" viewBox="0 0 24 24"><path d="M2 24v-24l20 12-20 12z"/></svg>
			<div class="event__image-overlay w-full h-full absolute transition-all duration-300 ease-in-out bg-black opacity-25 hover:opacity-0"></div>
			<img class="w-full md:w-48 h-full object-cover" src="<?php echo $videoImage; ?>" />
    	</a>
	<?php endif;?> 

    <div class="mx-2 flex flex-col justify-center flex-1">
		<!-- Categories -->
		<div class="flex flex-wrap">
			<?php 
				$terms = get_the_terms( $post->ID , 'video_type' );
				if ($terms) {
					foreach ( $terms as $term ) {
						echo '<a href="/video_type/' . $term->slug . '/" class="text-blue text-sm leading-6 mr-1 opacity-75 transition-all duration-300 hover:opacity-100">' . $term->name . '</a>';
					}
				}
			?>
		</div>
		<div class="mb-4">			
			<!-- Title  -->
        	<a target="_blank" href="<?php the_permalink(); ?>">
            	<h3 class="font-gotham-bold text-base leading-6 lg:pr-4 transition-all duration-300 hover:text-purple">
					<?php the_title(); ?>
				</h3>
        	</a>
			<!-- Module Number -->
			<?php if (false && get_field('module_number') ) : ?>
				<p class="inline-block text-sm mb-1 leading-none px-2 py-1 bg-off-white rounded-md"><?php echo get_field('module_number'); ?></p>
			<?php endif; ?>
			<!-- Date Published -->
			<div class="flex items-center opacity-50">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
					<path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
				</svg>
				<p class="text-sm leading-none"><?php echo get_the_date(); ?></p>
			</div>
			<!-- Additional Materials -->
			<?php if (get_field('materials')) : ?>
				<div class="flex items-center mt-1 text-purple opacity-75">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
					</svg>
					<p class="text-sm ml-px leading-none">Additional Material Available</p>
				</div>
			<?php endif; ?>
		</div>
        <!-- Authors -->
		<?php if (have_rows('presenters')): ?>
			<div class="flex">
				<?php while (have_rows('presenters')): the_row();
					$featured_post = get_sub_field('presenter');
					echo '<a href="' . get_the_permalink($featured_post) . '" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">';
					    if (get_field('image', $featured_post)) {
			        	    $featured_image = get_field('image', $featured_post);
						    echo '<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(' . $featured_image['url'] . ');"></div>';
			    	    }
					    if( $featured_post ):
    					    echo '<h3 class="mt-px pt-px">' . get_the_title($featured_post) . '</h3>';
					    endif;
					echo '</a>';
				endwhile; ?>
			</div>
		<?php endif; ?>

    </div>
</div>