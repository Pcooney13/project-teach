<?php 
	$event_type = get_field('event_type');
	if ($event_type === 'intensive') :
		include( locate_template( 'templates/singles/event-intensive.php', false, false ) );
	else: ?>
		<style>
			.heateor_sss_sharing_ul > a {
				transition: all .3s;
			}
			.heateor_sss_sharing_ul > a:hover {
				opacity:.5;
			}
			.heateor_sss_sharing_ul > a:first-child {
				display:none!important;
			}
		</style>
		<section class="max-w-screen-xl mx-auto mb-12">
    		<div class="px-4 py-8 width-full bg-white mb-4 font-gotham">	
				<div class="flex md:px-4">
					<!-- Event Content -->
					<div class="flex flex-col md:mr-8 flex-1 relative">
						<!-- Categories -->
						<div class="flex mb-2">
							<?php 
					    		$terms = get_the_terms( $post->ID , 'event_category' );
								foreach ( $terms as $term ) {
									echo '<a href="/event_category/' . $term->slug . '/" class="text-blue transition-all duration-300 hover:text-purple">' . $term->name . '</a>';
								}
							?>
						</div>
						<!-- Title -->
						<?php if (get_the_title()) : ?>
							<h3 class="font-gotham-bold text-xl leading-tight mb-4 mt-0">
								<?php the_title(); ?>
							</h3>
						<?php endif; ?>
						<!-- Date -->
						<?php if(get_field('start_date')):
							$start_date_string = get_field('start_date');
							$end_date_string = get_field('end_date');
							$end_date = false;
						
                			if ($start_date_string) {
                    			$start_date = DateTime::createFromFormat('Ymd', $start_date_string);
                			}
                			if ($end_date_string) {
                    			$end_date = DateTime::createFromFormat('Ymd', $end_date_string);
                			} ?>
							<div class="flex mb-2 pr-4 items-end">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
								</svg>
								<p class="leading-none text-lg">
									<strong>Date: </strong>
									<?php echo $start_date->format('M j, Y'); ?>
									<?php if ($end_date) : ?>
							 			- <?php echo $end_date->format('M j, Y'); ?></p>
									<?php endif; ?>
							</div>
    					<?php endif; ?> 
						<!-- Time -->
						<?php if(get_field('start_time')):?>
							<div class="flex mb-2 pr-4 items-end">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>
								<p class="leading-none text-lg">
									<strong>Time: </strong>
									<?php the_field('start_time'); ?>
									<?php if (get_field('end_time')) : ?>
							 			- <?php the_field('end_time');
									endif; ?>
								</p>
								
							</div>
    					<?php endif; ?> 
						<!-- Event Location/Online -->
						<?php if(get_field('online_service')):?>
	    					<div class="flex mb-2 pr-4 items-end">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
								</svg>
								<p class="leading-none text-lg"><strong>Location: </strong><?php the_field('online_service');?></p>
							</div>
    					<?php elseif(get_field('location')):
							$location = get_field('location'); 
        					$address = $location["name"] . ", " . $location["city"] . ", " . $location["state_short"]; ?>
							<div class="flex mb-2 pr-4 items-end">
								<svg class="h-5 w-5 mr-2" viewBox="0 0 18 22.9">
									<path class="text-purple fill-current" d="M0,9A9,9,0,0,1,9,0a9.09,9.09,0,0,1,9,9c0,7.2-9,13.9-9,13.9S0,16.2,0,9Z" style="opacity: 100;"></path>
									<circle class="text-white fill-current" cx="9" cy="9" r="3.9"></circle>
								</svg>
								<p class="leading-none text-lg"><strong>Location: </strong>
								<a target="_blank" rel="nofollow" class="tranistion-all duration-300 hover:text-purple" href="https://www.google.com/maps/search/?api=1&query=<?php echo $address;?>">
									<?php echo $address;?></p>
								</a>
							</div>
						<?php endif; ?>
						<!-- Credits -->
						<?php if(get_field('credits')):?>
							<div class="flex mb-2 pr-4 items-end">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
								</svg>
								<p class="leading-none text-lg"><strong>Credits: </strong><?php the_field('credits'); ?> credits</p>
							</div>
						<?php endif; ?> 
						<!-- Register Button -->
						<?php if(get_field("registration_link")) :?>
							<div class="flex flex-col md:flex-row my-4 md:my-0 justify-center md:justify-start items-center h-full">
								<a href="<?php the_field("registration_link"); ?>" class="text-white border-2 mb-2 md:mb-0 md:mr-4 border-purple border-solid hover:text-purple hover:bg-transparent transition-all leading-normal duration-300 inline-block rounded-full py-2 text-base px-4 bg-purple no-underline">
									Register Now
								</a>
							</div>
						<?php endif; ?>
						<!-- Register Button -->
						<a href="<?php the_field("registration_link"); ?>" class="<?php echo $btn_clickable; ?> text-white border-2 mb-2 md:mb-0 md:mr-4 border-<?php echo $registration_btn_color; ?> border-solid hover:text-<?php echo $registration_btn_color; ?> hover:bg-transparent transition-all leading-normal duration-300 inline-block rounded-full py-2 text-base px-4 bg-<?php echo $registration_btn_color; ?> no-underline">
							<?php echo $btn_text; ?>
						</a>
					</div>
					<!-- Event Image -->
					<?php if(has_post_thumbnail()): ?>   
						<?php if(get_field("registration_link")) :?>                                 
    						<a href="<?php the_field("registration_link"); ?>" class="hidden md:block w-64 h-64 ml-auto">
    	    					<div class="w-64 h-64 bg-black-500 opacity-50 absolute transition-all duration-300 ease-in-out hover:opacity-0"></div>
		    					<div class="w-64 h-64 bg-center bg-cover" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
							</a>
						<?php else: ?>
							<div class="hidden md:block w-64 h-64 ml-auto">
    	    					<div class="w-64 h-64 bg-black-500 opacity-50 absolute transition-all duration-300 ease-in-out hover:opacity-0"></div>
		    					<div class="w-64 h-64 bg-center bg-cover" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				<!-- Presenters -->
				<div class="md:pl-4">			
					<?php 
						// Post Object Presenters
						if( get_field('group_of_presenters') && have_rows('group_presenters') ): 
							echo '<p class="leading-none text-lg mb-2"><strong>Presenters:</strong></p>';
							while( have_rows('group_presenters') ) : the_row();
								$featured_post = get_sub_field('presenter');
								echo '<a href="/consultants/' . $featured_post->post_name . '/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">';
									if (get_field('image', $featured_post->ID)) {
			        					$featured_image = get_field('image', $featured_post->ID);
										echo '<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(' . $featured_image['url'] . ');"></div>';
			    					}
									if( $featured_post ):
    									echo '<h3 class="mt-px pt-px">' . esc_html( $featured_post->post_title ) . '</h3>';
									endif;
								echo '</a>';
							endwhile;
						// Typed out Presenters
						else: 
							if( have_rows('authors') ): ?>
								<h2>Presenters</h2>
								<div class="px-4">
									<div class="pl-4">
        								<?php while( have_rows('authors') ) : the_row();
        		    						$featured_posts = get_sub_field('author');
        		    						if( $featured_posts ): ?>
        		        						<a class="inline-flex mb-2 mr-1"  href="<?php echo the_permalink($featured_posts->ID); ?>">
        		            						<div style="margin-right:6px; border-radius:50%; width:24px; height:24px; background-size:cover; background-position:center; background-image:url('<?php echo get_the_post_thumbnail_url( $featured_posts->ID ); ?>')"></div>
        		            						<?php the_field('name', $featured_posts->ID);?>
        		        						</a>
        		    						<?php endif;
        								endwhile; ?>
									</div>
								</div>
							<?php endif;
						endif;
					?>
				</div>
    		</div>
		</section>	
	<?php endif; 
?>