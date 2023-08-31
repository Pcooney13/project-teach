<?php
$video_link = get_field('video_link');
$pdf_link = get_field('pdf_link');
$url_link = get_field('url_link');
$topics = get_the_terms(get_the_id(), 'resource_topics');
$types = get_the_terms($post->ID, 'resource_types');
$tags = get_the_terms($post->ID, 'resource_tags');
$demographic = get_the_terms(get_the_id(), 'resource_demographic');

if ($topics[0] && $topics[0]->slug === 'maternal-mental-health') {
	$topic_slug = $topics[0]->slug;
	$topic_name = $topics[0]->name;
	$text_color = 'text-purple';
	$bg_color_200 = 'bg-purple-200';
	$bg_color = 'bg-purple';
	$hover_text_color = 'hover:text-purple';
	$border_color = 'border-purple';
} elseif ($topics[0] && $topics[0]->slug === 'child-adolescent') {
	$topic_slug = $topics[0]->slug;
	$topic_name = $topics[0]->name;
	$text_color = 'text-blue';
	$bg_color_200 = 'bg-blue-200';
	$bg_color = 'bg-blue';
	$hover_text_color = 'hover:text-blue';
	$border_color = 'border-blue';
} else {
	$topic_slug = '';
	$topic_name = '';
	$text_color = 'text-green';
	$bg_color_200 = 'bg-green-200';
	$bg_color = 'bg-green';
	$hover_text_color = 'hover:text-green';
	$border_color = 'border-green';
}
if ($demographic[0] && $demographic[0]->slug === 'parent-family') {
	$demo_slug = $demographic[0]->slug;
	$demo_name = $demographic[0]->name;
} elseif ($demographic[0] && $demographic[0]->slug === 'provider') {
	$demo_slug = $demographic[0]->slug;
	$demo_name = $demographic[0]->name;
} else {
	$demo_slug = '';
	$demo_name = '';
}
?>

<!-- (1) Featured Resources -->

<div class="py-16 bg-white">
	<div class="relative flex flex-col md:flex-row items-center max-w-screen-xl mx-auto">
		<div class="w-full order-1 md:order-1 md:w-1/2 pr-8">
			<!-- Share -->
			<div class="flex ml-auto items-center mb-4">
				<p class="text-cool-gray font-gotham-light mr-2 mt-1 uppercase text-sm">SHARE: </p>
				<!-- TWITTER -->
				<a href="">
					<svg class="w-6 h-6 text-cool-gray transition <?php echo $hover_text_color; ?> mx-2" fill="currentColor" viewBox="0 0 24 24">
						<path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path>
					</svg>
				</a>
				<!-- LI -->
				<a href="">
					<svg class="w-6 h-6 text-cool-gray transition <?php echo $hover_text_color; ?> mx-2" fill="currentColor" viewBox="0 0 24 24">
						<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
					</svg>
				</a>
				<!-- FB	 -->
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank" follow="nofollow">
					<svg class="w-6 h-6 text-cool-gray transition <?php echo $hover_text_color; ?> mx-2" fill="currentColor" viewBox="0 0 24 24">
						<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
					</svg>
				</a>
			</div>
			<div class="gap-2 flex flex-col mb-8">
				<p class="text-2xl md:text-3xl font-gotham-bold">
					<?php echo get_the_title(); ?>
				</p>
				<?php $authors = get_field('authors');
				if (!empty($authors)) : ?>
					<div class="font-gotham mb-4 flex items-center gap-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
							<path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
						</svg>
						<?php foreach ($authors as $post) :
							// Setup this post for WP functions (variable must be named $post).
							setup_postdata($post); ?>
							<a class="font-gotham text-black transition-all duration-300 hover:text-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				<?php endif; ?>
				<div class="font-gotham-light leading-7 text-lg">
					<?php echo get_the_content(); ?>
				</div>
			</div>
			<?php if ($pdf_link) : ?>
				<a class="border-solid border-2 <?php echo $border_color; ?> font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent <?php echo $hover_text_color; ?> <?php echo $bg_color; ?>" title="learn more about consultations" target="_blank" follow="no-follow" href="<?php echo $pdf_link['url']; ?>">
					Download PDF
				</a>
			<?php elseif ($url_link) : ?>
				<a class="border-solid border-2 <?php echo $border_color; ?> font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent <?php echo $hover_text_color; ?> <?php echo $bg_color; ?>" title="learn more about consultations" target="_blank" follow="no-follow" href="<?php echo $url_link; ?>">
					Visit Website
				</a>
			<?php endif; ?>
		</div>
		<div class="w-full order-0 md:order-1 md:w-1/2">
			<?php if ($video_link) : ?>
				<div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-video shadow-xl">
					<iframe class="absolute h-full w-full" src="<?php echo $video_link; ?>" frameborder="0" allowfullscreen></iframe>
				</div>
			<?php else : ?>
				<div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3] shadow-xl">
					<img class="object-cover h-full w-full" src="<?php echo get_the_post_thumbnail_url(); ?>">
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php if ($topics[0]) : ?>
	<?php
	echo '
    	<div class="py-16 px-4 md:px-0">
        	<section class="max-w-screen-lg lg:max-w-screen-xl mx-auto">
            	<h2 class="font-gotham-bold text-2xl mb-6">More ' . $topic_name . ' Resources</h2>
            	<div class="flex flex-col md:flex-row flex-wrap mb-8 md:-mx-2">';

	$args = array(
		'posts_per_page' => 4,
		'post_type' => 'pt_resources',
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'resource_topics',
				'terms'    => $topic_slug,
				'field'    => 'slug',
			),
		),
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) :
		$resource_count = 1;
		while ($query->have_posts()) : $query->the_post();
			if (strlen(get_the_title()) > 80 && strlen(get_the_title()) !== 80) {
				$resource_title = substr(get_the_title(), 0, 80) . '...';
			} else {
				$resource_title = get_the_title();
			}
			$types = get_the_terms($post->ID, 'resource_types');
			$tags = get_the_terms($post->ID, 'resource_tags');
			$terms = get_the_terms(get_the_id(), 'resource_topics');
			$resource_type_bubble = '';
			foreach ($types as $type) {
				if ($type->slug === 'video') {
					$resource_type_bubble = '
                    	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 '. $bg_color_200.' '.$text_color.' rounded-full dropshadow-md p-1">
                        	<path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                    	</svg>';
				}
			}
			if ($terms) {
				$resource_topic = wp_trim_words($terms[0]->name, 1, '');
				if ($resource_topic === 'Child') {
					$resource_topic_bubble = '                                
                    <div class="absolute height-full right-0 top-0 mb-2 text-right mt-2 mr-2 flex items-center gap-1">                                
                        <p class="bg-blue-200 text-blue text-sm font-bold px-2 text-sm rounded-full dropshadow-md">Child</p>' .
						$resource_type_bubble .
						'</div>';
				} else {
					$resource_topic_bubble = '
                    <div class="absolute height-full right-0 top-0 mb-2 text-right mt-2 mr-2 flex items-center gap-1"> 
                        <p class="bg-purple-200 text-purple text-sm font-bold px-2 text-sm rounded-full dropshadow-md">Maternal</p>' .
						$resource_type_bubble .
						'</div>';
				}
			}
			echo '
            <div class="md:w-1/4 py-2 md:px-2">
            	<div class="flex md:flex-col items-center h-full bg-off-white md:bg-transparent shadow-lg md:shadow-none rounded-r-xl md:rounded-l-none md:items-start">
                	<a class="group" href="' . get_the_permalink() . '">
                    	<div class="relative rounded-lg overflow-hidden mb-4 shadow-xl">
                        	<div class="w-full absolute bg-gradient-to-bl rounded-lg from-black h-full transition-all duration-300 group-hover:opacity-0"></div>' .
				$resource_topic_bubble .
				'<img src="' . get_the_post_thumbnail_url() . '" class="h-44 object-cover w-full">
                        </div>
                    </a>
                    <div class="min-h-[100px] w-full h-full flex flex-col border-b border-solid border-light-gray">
                        <div>
							<a href="' . get_the_permalink() . '" class="inline-block font-gotham-medium transition '. $hover_text_color .' mb-1">' .
				$resource_title .
				'</a>
                        </div>';
			$authors = get_field('authors');
			if (!empty($authors) && count($authors) === 1) : ?>
				<div class="text-sm font-gotham mb-4 flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
						<path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
					</svg>
					<?php foreach ($authors as $post) :
						// Setup this post for WP functions (variable must be named $post).
						setup_postdata($post); ?>
						<a class="text-sm font-gotham text-black transition-all duration-300 hover:text-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			<?php elseif (!empty($authors) && count($authors) > 1) : ?>
				<div class="text-sm font-gotham mb-4 flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
						<path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
						<path d="M16 3.13a4 4 0 0 1 0 7.75" />
						<path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
					</svg>
					Multiple Authors
				</div>
			<?php endif; ?>
			<?php if (!empty($tags)) : ?>
				<div class="mt-auto">
					<span class="font-gotham-bold text-sm mb-2 uppercase <?php echo $text_color; ?>">Tags:</span>
					<?php
					foreach ($tags as $term) {
						echo '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 '. $hover_text_color .'">' . $term->name . '</a>';
					}
					?>
				</div>
			<?php endif; ?>
			</div>
			</div>
			</div>
			<?php $resource_count++; ?>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php wp_reset_query(); ?>
	</div>
	<div class="text-center">
		<a class="border-solid border-2 <?php echo $border_color; ?> font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent <?php echo $hover_text_color; ?> <?php echo $bg_color; ?>" title="learn more about consultations" href="/contact-us">
			View All <?php echo $topic_name; ?> Resources
		</a>
	</div>
	</section>
	</div>
<?php endif; ?>



<?php if ($demographic[0]) : ?>
	<?php
	echo '
    	<div class="py-16 px-4 md:px-0">
        	<section class="max-w-screen-lg lg:max-w-screen-xl mx-auto">
            	<h2 class="font-gotham-bold text-2xl mb-6">More ' . $demo_name . ' Resources</h2>
            	<div class="flex flex-col md:flex-row flex-wrap mb-8 md:-mx-2">';

	$args = array(
		'posts_per_page' => 4,
		'post_type' => 'pt_resources',
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'resource_demographic',
				'terms' => $demo_slug,
				'field' => 'slug',
			)
		),
	);

	$query = new WP_Query($args);

	if ($query->have_posts()) :
		$resource_count = 1;
		while ($query->have_posts()) : $query->the_post();
			if (strlen(get_the_title()) > 80 && strlen(get_the_title()) !== 80) {
				$resource_title = substr(get_the_title(), 0, 80) . '...';
			} else {
				$resource_title = get_the_title();
			}
			$types = get_the_terms($post->ID, 'resource_types');
			$tags = get_the_terms($post->ID, 'resource_tags');
			$terms = get_the_terms(get_the_id(), 'resource_topics');
			$resource_type_bubble = '';
			foreach ($types as $type) {
				if ($type->slug === 'video') {
					$resource_type_bubble = '
                    	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 '. $bg_color_200.' '.$text_color.' rounded-full dropshadow-md p-1">
                        	<path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                    	</svg>';
				}
			}
			if ($terms) {
				$resource_topic = wp_trim_words($terms[0]->name, 1, '');
				if ($resource_topic === 'Child') {
					$resource_topic_bubble = '                                
                    <div class="absolute height-full right-0 top-0 mb-2 text-right mt-2 mr-2 flex items-center gap-1">                                
                        <p class="bg-blue-200 text-blue text-sm font-bold px-2 text-sm rounded-full dropshadow-md">Child</p>' .
					$resource_type_bubble .
						'</div>';
				} else {
					$resource_topic_bubble = '
                    <div class="absolute height-full right-0 top-0 mb-2 text-right mt-2 mr-2 flex items-center gap-1"> 
                        <p class="bg-purple-200 text-purple text-sm font-bold px-2 text-sm rounded-full dropshadow-md">Maternal</p>' .
					$resource_type_bubble .
						'</div>';
				}
			}
			echo '
            <div class="md:w-1/4 py-2 md:px-2">
            	<div class="flex md:flex-col items-center h-full bg-off-white md:bg-transparent shadow-lg md:shadow-none rounded-r-xl md:rounded-l-none md:items-start">
                	<a class="group" href="' . get_the_permalink() . '">
                    	<div class="relative rounded-lg overflow-hidden mb-4 shadow-xl">
                        	<div class="w-full absolute bg-gradient-to-bl rounded-lg from-black h-full transition-all duration-300 group-hover:opacity-0"></div>' .
				$resource_topic_bubble .
				'<img src="' . get_the_post_thumbnail_url() . '" class="h-44 object-cover w-full">
                        </div>
                    </a>
                    <div class="min-h-[100px] w-full h-full flex flex-col border-b border-solid border-light-gray">
                        <div>
							<a href="' . get_the_permalink() . '" class="inline-block font-gotham-medium transition '. $hover_text_color .' mb-1">' .
				$resource_title .
				'</a>
                        </div>';
			$authors = get_field('authors');
			if (!empty($authors) && count($authors) === 1) : ?>
				<div class="text-sm font-gotham mb-4 flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
						<path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
					</svg>
					<?php foreach ($authors as $post) :
						// Setup this post for WP functions (variable must be named $post).
						setup_postdata($post); ?>
						<a class="text-sm font-gotham text-black transition-all duration-300 hover:text-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			<?php elseif (!empty($authors) && count($authors) > 1) : ?>
				<div class="text-sm font-gotham mb-4 flex items-center gap-2">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
						<path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
						<path d="M16 3.13a4 4 0 0 1 0 7.75" />
						<path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
					</svg>
					Multiple Authors
				</div>
			<?php endif; ?>
			<?php if (!empty($tags)) : ?>
				<div class="mt-auto">
					<span class="font-gotham-bold text-sm mb-2 uppercase <?php echo $text_color; ?>">Tags:</span>
					<?php
					foreach ($tags as $term) {
						echo '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 '. $hover_text_color.'">' . $term->name . '</a>';
					}
					?>
				</div>
			<?php endif; ?>
			</div>
			</div>
			</div>
			<?php $resource_count++; ?>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php wp_reset_query(); ?>
	</div>
	<div class="text-center">
		<a class="border-solid border-2 <?php echo $border_color; ?> font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent <?php echo $hover_text_color; ?> <?php echo $bg_color; ?>" title="learn more about consultations" href="/contact-us">
			View All <?php echo $demo_name; ?> Resources
		</a>
	</div>
	</section>
	</div>
<?php endif; ?>