<style>
	.consultant-info p { font-size:16px }
	.consultant-info p,
	#about-content p {
		font-family:'GothamProLight';
		margin-bottom:1rem;
		line-height:1.5;
	}
	.unclickable {
		background:#fff!important;
		opacity:75%;
		pointer-events:none;
		color:#888;
	}
	.unclickable svg {
		display:none;
	}
</style>

<?php
					
					
					
	// Post Query
	$post_args = array(
		'numberposts'	=> -1,
		'post_type'		=> 'post',
		'meta_query'	=> array(
			'relation'		=> 'OR',
			array(
				'key'		=> 'authors_$_author',
				'compare'	=> '=',
				'value'		=> get_the_ID(),
			)
		)
	);
	$post_query = new WP_Query( $post_args );
	if ($post_query->have_posts()) {
		$post_button_classes = 'bg-blue-200';
	} else {
		$post_button_classes = 'unclickable';
	}
	// Event Query
	$event_args = array(
		'numberposts'	=> -1,
		'post_type'		=> 'events',
		'meta_query'	=> array(
			'relation'		=> 'OR',
			array(
				'compare'	=> '=',
				'value'		=> get_the_ID(),
			)
		)
	);
	$event_query = new WP_Query( $event_args );
	if ($event_query->have_posts()) {
		$event_button_classes = 'bg-blue-200';
	} else {
		$event_button_classes = 'unclickable';
	}
	// Video Query
	$video_args = array(
		'numberposts'	=> -1,
		'post_type'		=> 'videos',
		'meta_query'	=> array(
			'relation'		=> 'OR',
			array(
				'compare'	=> '=',
				'value'		=> get_the_ID(),
			)
		)
	);
	$video_query = new WP_Query( $video_args );
	if ($video_query->have_posts()) {
		$video_button_classes = 'bg-blue-200';
	} else {
		$video_button_classes = 'unclickable';
	}
?>


    <div class="flex-1">
        <div class="bg-white mx-4 md:mx-0 flex flex-col md:flex-row items-center mb-8">
            <div class="py-4 md:py-0 w-40 md:w-80">
                <img class="w-full rounded-full md:rounded-none" src="<?php echo get_the_post_thumbnail_url(); ?>">
            </div>
            <div class="consultant-info flex-1 p-4 text-center md:text-left">
                <h1 class="font-gotham-bold text-lg mb-4"><?php the_title(); ?></h1>
				<?php the_field('blurb'); ?>                
            </div>
        </div>
		<div class="mx-4 md:mx-0">
        	<div class="w-full">
            	<ul class="flex justify-center">					
                	<li id="about-button" class="rounded-t-xl mx-px md:mx-1 bg-white px-2 md:px-4 py-4 text-blue flex items-center justify-center flex-1 text-center">
                    	<span class="mr-1 font-gotham-bold">About</span>
                    	<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none right-0 h-4 w-4 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    	</svg>
                	</li>
                	<li id="posts-button" class="rounded-t-xl mx-px md:mx-1 <?php echo $post_button_classes;?> px-2 md:px-4 py-4 font-gotham-light text-blue flex items-center justify-center flex-1 text-center">
                    	<span class="mr-1">Posts</span>
                    	<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none transform rotate-180 right-0 h-4 w-4 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    	</svg>
                	</li>
                	<li id="events-button" class="rounded-t-xl mx-px md:mx-1 <?php echo $event_button_classes;?> px-2 md:px-4 py-4 font-gotham-light text-blue flex items-center justify-center flex-1 text-center">
                    	<span class="mr-1">Events</span>
                    	<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none transform rotate-180 right-0 h-4 w-4 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    	</svg>
                	</li>
                	<li id="videos-button" class="rounded-t-xl mx-px md:mx-1 <?php echo $video_button_classes;?> px-2 md:px-4 py-4 font-gotham-light text-blue flex items-center justify-center flex-1 text-center">
                    	<span class="mr-1">Videos</span>
                    	<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none transform rotate-180 right-0 h-4 w-4 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    	</svg>
                	</li>
            	</ul>
				<!-- ABOUT -->
            	<div class="bg-white px-4 md:px-8 py-8" id="about-content">
					<h4 class="font-gotham-bold text-xl mb-4">About <span class="text-blue"><?php the_title();?></span></h4>
                	<?php the_content(); ?>
            	</div>
				<!-- POSTS -->
            	<div class="bg-white px-4 md:px-8 py-8 hidden" id="posts-content">
					<?php 					
						if( $post_query->have_posts() ):
							echo '<h4 class="font-gotham-bold text-xl mb-4">Posts By <span class="text-blue">' . get_the_title() . '</span></h4>';
							while ( $post_query->have_posts() ) : $post_query->the_post(); 
								include( locate_template( 'templates/archives/post.php', false, false ) );
							endwhile; 
							wp_reset_postdata();
						endif; 
					?>		
            	</div>
				<!-- EVENTS -->
            	<div class="bg-white px-4 md:px-8 py-8 hidden" id="events-content">
					<?php 					
						if( $event_query->have_posts() ):
							echo '<h4 class="font-gotham-bold text-xl mb-4">Events With <span class="text-blue">' . get_the_title() . '</span></h4>';
							while ( $event_query->have_posts() ) : $event_query->the_post(); 
								include( locate_template( 'templates/archives/events.php', false, false ) );
							endwhile;
							wp_reset_postdata();
						endif; 
					?>
            	</div>
				<!-- VIDEOS -->
            	<div class="bg-white px-4 md:px-8 py-8 hidden" id="videos-content">
					<?php 					
						if( $video_query->have_posts() ):
							echo '<h4 class="font-gotham-bold text-xl mb-4">Videos With <span class="text-blue">' . get_the_title() . '</span></h4>';
							while ( $video_query->have_posts() ) : $video_query->the_post(); 
								include( locate_template( 'templates/archives/videos.php', false, false ) );
							endwhile;
							wp_reset_postdata();
						endif; 
					?>
            	</div>
				
				<?php if (false) : ?>
					<!-- about -->
					<div>
						<button class="accordion bg-blue-200 text-blue text-xl p-4 relative w-full items-center text-left flex">
							<h4 class="font-gotham text-xl">About <span class="font-gotham-bold"><?php echo get_the_title(); ?></span></h4>
                			<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute mr-4 right-0 h-6 w-6 text-blue transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                	    		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                			</svg>
						</button>
						<div class="panel bg-white mb-4">
							<?php 					
								if( $post_query->have_posts() ):							
									while ( $post_query->have_posts() ) : $post_query->the_post(); 
										include( locate_template( 'templates/archives/post.php', false, false ) );
									endwhile; 
									wp_reset_postdata();
								endif; 
							?>
						</div>
					</div>
					<!-- posts -->
					<div>
						<button class="accordion bg-blue-200 text-blue text-xl p-4 relative w-full items-center text-left flex">
							<h4 class="font-gotham text-xl">Posts By <span class="font-gotham-bold"><?php echo get_the_title(); ?></span></h4>
                			<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute mr-4 right-0 h-6 w-6 text-blue transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                	    		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                			</svg>
						</button>
						<div class="panel bg-white mb-4">
							<?php 					
								if( $post_query->have_posts() ):							
									while ( $post_query->have_posts() ) : $post_query->the_post(); 
										include( locate_template( 'templates/archives/post.php', false, false ) );
									endwhile; 
									wp_reset_postdata();
								endif; 
							?>
						</div>
					</div>
					<!-- events -->
					<div>
						<button class="accordion bg-blue-200 text-blue text-xl p-4 relative w-full items-center text-left flex">
							<h4 class="font-gotham text-xl">Posts By <span class="font-gotham-bold"><?php echo get_the_title(); ?></span></h4>
                			<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute mr-4 right-0 h-6 w-6 text-blue transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                	    		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                			</svg>
						</button>
						<div class="panel bg-white mb-4">
							<?php 					
								if( $post_query->have_posts() ):							
									while ( $post_query->have_posts() ) : $post_query->the_post(); 
										include( locate_template( 'templates/archives/post.php', false, false ) );
									endwhile; 
									wp_reset_postdata();
								endif; 
							?>
						</div>
					</div>
					<!-- videos -->
					<div>
						<button class="accordion bg-blue-200 text-blue text-xl p-4 relative w-full items-center text-left flex">
							<h4 class="font-gotham text-xl">Posts By <span class="font-gotham-bold"><?php echo get_the_title(); ?></span></h4>
                			<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute mr-4 right-0 h-6 w-6 text-blue transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                	    		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                			</svg>
						</button>
						<div class="panel bg-white mb-4">
							<?php 					
								if( $post_query->have_posts() ):							
									while ( $post_query->have_posts() ) : $post_query->the_post(); 
										include( locate_template( 'templates/archives/post.php', false, false ) );
									endwhile; 
									wp_reset_postdata();
								endif; 
							?>
						</div>
					</div>
				<?php endif; ?>
        	</div>
        </div>
    </div>

<script>
    window.onload = (event) => {
        const aboutButton = document.getElementById('about-button')
        const postsButton = document.getElementById('posts-button')
        const eventsButton = document.getElementById('events-button')
        const videosButton = document.getElementById('videos-button')
        const aboutContent = document.getElementById('about-content')
        const postsContent = document.getElementById('posts-content')
        const eventsContent = document.getElementById('events-content')
        const videosContent = document.getElementById('videos-content')

        function removeButtonStyles() {
            aboutButton.classList.add('bg-blue-200')
            aboutButton.classList.remove('bg-white')
            aboutButton.children[0].classList.remove('font-gotham-bold')
            aboutButton.children[1].classList.add('rotate-180')
            postsButton.classList.add('bg-blue-200')
            postsButton.classList.remove('bg-white')
            postsButton.children[0].classList.remove('font-gotham-bold')
            postsButton.children[1].classList.add('rotate-180')
            eventsButton.classList.add('bg-blue-200')
            eventsButton.classList.remove('bg-white')
            eventsButton.children[0].classList.remove('font-gotham-bold')
            eventsButton.children[1].classList.add('rotate-180')
            videosButton.classList.add('bg-blue-200')
            videosButton.classList.remove('bg-white')
            videosButton.children[0].classList.remove('font-gotham-bold')
            videosButton.children[1].classList.add('rotate-180')
        }
        function addButtonStyles(btn) {
            btn.classList.remove('bg-blue-200')
            btn.classList.add('bg-white')
            btn.children[0].classList.add('font-gotham-bold')
            btn.children[1].classList.remove('rotate-180')
        }

        aboutButton.addEventListener('click', function() {
            aboutContent.classList.remove('hidden')
            postsContent.classList.add('hidden')
            eventsContent.classList.add('hidden')
            videosContent.classList.add('hidden')
            removeButtonStyles()
            addButtonStyles(this)
        })
        postsButton.addEventListener('click', function() {
            aboutContent.classList.add('hidden')
            postsContent.classList.remove('hidden')
            eventsContent.classList.add('hidden')
            videosContent.classList.add('hidden')
            removeButtonStyles()
            addButtonStyles(this)
        })
        eventsButton.addEventListener('click', function() {
            aboutContent.classList.add('hidden')
            postsContent.classList.add('hidden')
            eventsContent.classList.remove('hidden')
            videosContent.classList.add('hidden')
            removeButtonStyles()
            addButtonStyles(this)
        })
        videosButton.addEventListener('click', function() {
            aboutContent.classList.add('hidden')
            postsContent.classList.add('hidden')
            eventsContent.classList.add('hidden')
            videosContent.classList.remove('hidden')
            removeButtonStyles()
            addButtonStyles(this)
        })
        
    };
</script>