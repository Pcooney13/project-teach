<!-- Start Events -->
<?php
$date = new DateTime(get_field('start_date'));
$now = new DateTime();
if ($date >= $now->format('Y-m-d')) {
	$event_card = '';
	$opacity = '';
} else {
	$event_card = 'event__passed opacity-75 pointer-events-none';
	$opacity = 'opacity-50';
}
$terms = get_the_terms($post->ID, 'event_category');
$follow_up_sesh = false;
if ($terms) {
	foreach ($terms as $term) {
		if ($term->slug === "follow-up-sessions") {
			$follow_up_sesh = true;
		}
	}
	if ($follow_up_sesh) {
		$hide_follow_up = "";
		// $hide_follow_up = "hidden";
	} else {
		$hide_follow_up = "";
	}
}
?>
<div class="p-4 bg-white mb-8 <?php echo $hide_follow_up; ?> event__card-wrap border-b border-solid border-off-white">
	<div class="<?php echo $event_card; ?> card flex-col sm:flex-row flex justify-center">
		<div class="flex-1 order-1 sm:order-0">
			<div class="event__wrap <?php echo $opacity; ?>">
				<div class="flex mb-1 pr-4">
					<!-- Categories -->
					<div class="flex">
						<?php
						$terms = get_the_terms($post->ID, 'event_category');
						if ($terms) {
							foreach ($terms as $term) {
								$category = $term->slug;
								echo '<a href="/event_category/' . $term->slug . '/" class="text-blue text-sm leading-6 opacity-75 transition-all duration-300 hover:opacity-100">' . $term->name . '</a>';
							}
						}
						?>
					</div>
					<!-- Registration Status -->
					<div class="reg-status ml-auto">
						<?php if (get_field('registration_link')) : ?>
							<a href="<?php the_field('registration_link'); ?>" class="flex items-center text-sm inline-block bg-green-200 text-green py-1 px-2 rounded-full">
								<div class="h-2 w-2 bg-green rounded-full animate-pulse mr-1"></div>
								<span>Registration Open</span>
							</a>
						<?php else : ?>
							<span class="text-sm inline-block bg-off-white text-cool-gray py-1 px-2 rounded-full">Registration Pending</span>
						<?php endif; ?>
					</div>
				</div>
				<?php
				if ($category !== 'intensive-training' && get_field('registration_link')) :
					$event_link = get_field('registration_link');
				else :
					$event_link = get_permalink();
				endif;
				?>
				<!-- Title  -->
				<a target="_blank" href="<?php echo $event_link; ?>">
					<h3 class="font-gotham-bold text-lg leading-6 mb-4 lg:pr-4 transition-all duration-300 hover:text-purple"><?php the_title(); ?></h3>
				</a>
				<!-- Date -->
				<?php if (get_field('start_date')) :
					$start_date_string = get_field('start_date');
					$end_date_string = get_field('end_date');

					if ($start_date_string) {
						$start_date = DateTime::createFromFormat('Ymd', $start_date_string);
					}
					if ($end_date_string) {
						$end_date = DateTime::createFromFormat('Ymd', $end_date_string);
					} else {
						$end_date = false;
					} ?>
					<div class="flex mb-1 pb-px pr-4 items-end">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
						</svg>
						<p class="leading-none text-base">
							<strong>Date: </strong>
							<?php echo $start_date->format('M j, Y'); ?>
							<?php if ($end_date) : ?>
								- <?php echo $end_date->format('M j, Y'); ?>
							<?php endif; ?>
						</p>
					</div>
				<?php endif; ?>
				<!-- Time -->
				<?php if (get_field('start_time')) : ?>
					<div class="flex mb-1 pb-px pr-4 items-end">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						<p class="leading-none text-base">
							<strong>Time: </strong>
							<?php the_field('start_time'); ?>
							<?php if (get_field('end_time')) : ?>
								- <?php the_field('end_time');
								endif; ?>
						</p>
					</div>
				<?php endif; ?>
				<!-- Event Location/Online -->
				<?php if (get_field('online_service')) : ?>
					<div class="flex mb-1 pb-px pr-4 items-end">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
						</svg>
						<p class="leading-none text-base"><strong>Location: </strong><?php the_field('online_service'); ?></p>
					</div>
				<?php elseif (get_field('location')) :
					$location = get_field('location');
					$address = $location["name"] . ", " . $location["city"] . ", " . $location["state_short"]; ?>
					<div class="flex mb-2 pr-4 items-end">
						<svg class="h-5 w-5 mr-2" viewBox="0 0 18 22.9">
							<path class="text-purple fill-current" d="M0,9A9,9,0,0,1,9,0a9.09,9.09,0,0,1,9,9c0,7.2-9,13.9-9,13.9S0,16.2,0,9Z" style="opacity: 100;"></path>
							<circle class="text-white fill-current" cx="9" cy="9" r="3.9"></circle>
						</svg>
						<p class="leading-none text-lg"><strong>Location: </strong>
							<a target="_blank" rel="nofollow" class="tranistion-all duration-300 hover:text-purple" href="https://www.google.com/maps/search/?api=1&query=<?php echo $address; ?>">
								<?php echo $address; ?>
						</p>
						</a>
					</div>
				<?php endif; ?>
				<!-- Credits   -->
				<?php if (get_field('credits')) : ?>
					<div class="flex mb-1 pb-px pr-4 items-end">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path class="text-purple stroke-current" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
						</svg>
						<p class="leading-none text-base">
							<strong>Credits: </strong>
							<?php the_field('credits'); ?> credits
						</p>
					</div>
				<?php endif; ?>


				<?php $featured_posts = get_field('consultant');
				if ($featured_posts) : ?>
					<div class="flex mb-1 pb-px pr-4 items-end">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path class="text-purple stroke-current" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						<p class="leading-none text-base">
							<strong>Presenter: </strong>
							<?php the_field('name', $featured_posts); ?>
						</p>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<?php if (has_post_thumbnail()) : ?>
			<a target="_blank" href="<?php echo $event_link; ?>" class="event__image-wrap h-80 sm:h-48 w-full sm:w-48 order-0 sm:order-1 ml-0 sm:ml-auto relative <?php echo $opacity; ?>">
				<div class="event__image-overlay w-full h-full absolute transition-all duration-300 ease-in-out bg-black opacity-25 hover:opacity-0"></div>
				<div class="bg-center bg-cover h-full" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
			</a>
		<?php elseif (!empty($featured_image)) : ?>
			<div class="event__image-wrap ml-0 sm:ml-auto relative <?php echo $opacity; ?>">
				<div class="event__image-overlay w-full h-full absolute transition-all duration-300 ease-in-out bg-black opacity-25 hover:opacity-0"></div>
				<div class="event__image" style="background-image:url('<?php echo $featured_image['url']; ?>');"></div>
			</div>
		<?php endif; ?>
	</div>
	<!-- Presenters -->
	<?php if (get_field('group_of_presenters') && have_rows('group_presenters') || have_rows('authors')) : ?>
		<div class="mt-4">
			<?php
			// Post Object Presenters
			if (get_field('group_of_presenters') && have_rows('group_presenters')) :
				echo '<p class="leading-none text-lg mb-2"><strong>Presenters:</strong></p>';
				echo '<div class="pl-2">';
				while (have_rows('group_presenters')) : the_row();
					$featured_post = get_sub_field('presenter');
					echo '<a href="/consultants/' . $featured_post->post_name . '/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">';
					if (get_field('image', $featured_post->ID)) {
						$featured_image = get_field('image', $featured_post->ID);
						echo '<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(' . $featured_image['url'] . ');"></div>';
					}
					if ($featured_post) :
						echo '<h3 class="mt-px pt-px">' . esc_html($featured_post->post_title) . '</h3>';
					endif;
					echo '</a>';
				endwhile;
				echo '</div>';
			// Typed out Presenters
			else :
				if (have_rows('authors')) : ?>
					<h2>Presenters</h2>
					<div class="px-4">
						<div class="pl-4">
							<?php while (have_rows('authors')) : the_row();
								$featured_posts = get_sub_field('author');
								if ($featured_posts) : ?>
									<a class="inline-flex mb-2 mr-1" href="<?php echo the_permalink($featured_posts->ID); ?>">
										<div style="margin-right:6px; border-radius:50%; width:24px; height:24px; background-size:cover; background-position:center; background-image:url('<?php echo get_the_post_thumbnail_url($featured_posts->ID); ?>')"></div>
										<?php the_field('name', $featured_posts->ID); ?>
									</a>
							<?php endif;
							endwhile; ?>
						</div>
					</div>
			<?php endif;
			endif;
			?>
		</div>
	<?php endif; ?>
</div>
<?php $featured_posts = null; ?>
<?php $featured_image = null; ?>