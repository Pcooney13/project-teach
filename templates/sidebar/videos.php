<div class="w-full md:w-96">
	<div class="mx-4 md:mx-0">
		<!-- Video Categories -->
		<?php $taxonomy_objects = get_object_taxonomies( 'videos', 'objects' ); ?>
    	<?php foreach ( $taxonomy_objects as $taxonomy_slug => $taxonomy ) : ?>
			<?php $terms = get_terms( $taxonomy_slug ); ?>
        	<?php if ( !empty( $terms ) ) : ?>
				<div class="mb-8">
					<h3 class="bg-blue-200 text-blue p-4 font-gotham-bold text-lg">Video Categories</h3>
					<div class="bg-white">
						<?php foreach ( $terms as $term ) : ?>
							<?php if ($term->name === 'Maternal' || $term->name === 'Child / Adolescent'): ?>
								<div class="h-px w-full bg-blue-200"></div>
                				<a href="https://project-teach.launchpaddev.com/video_type/<?php echo $term->slug; ?>" class="block text-lg border-l-0 hover:border-l-8 border-l-blue border-solid transition-all duration-300 font-gotham-light p-4 text-blue">
									<?php echo $term->name; ?>
			  					</a>
							<?php endif; ?>
			  			<?php endforeach; ?>
					</div>
				</div>
        	<?php endif; ?>
    	<?php endforeach; ?>
		<!-- Upcoming Events -->
		<a href="/events" class="border-l-0 hover:border-l-8 border-l-purple border-solid transition-all duration-300 block bg-purple-200 p-4 mb-8 text-purple flex flex-col">
			<h3 class="font-gotham-bold text-lg mb-2 leading-6 lg:pr-4">Upcoming Events</h3>
			<p class="text-black mb-8 font-gotham-light leading-6">Join us for an upcoming webinar or training</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 self-end" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
		  		<path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
			</svg>
		</a>
		<!-- Past Events -->
		<a href="/past-events" class="border-l-0 hover:border-l-8 border-l-green border-solid transition-all duration-300 block bg-green-200 p-4 mb-8 text-green flex flex-col">
			<h3 class="font-gotham-bold text-lg mb-2 leading-6 lg:pr-4">Past Events</h3>
			<p class="text-black mb-8 font-gotham-light leading-6">View past webinars and training offerings</p>
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 self-end" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
		  		<path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
			</svg>
		</a>
	</div>
</div>