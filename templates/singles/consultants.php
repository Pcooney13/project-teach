<style>
	[x-cloak] {
		display: none !important;
	}
</style>

<?php
	// Used in event loop to check if event has passed
	$today = date('Ymd');
	// Event Query
	$event_query = new WP_Query(
		array(
			'numberposts' => -1,
			'post_type' => 'events',
			'meta_value' => get_the_ID(),
			'meta_compare' => 'LIKE',
		)
	);
	// Resource Query
	$resource_query = new WP_Query(
		array(
			'numberposts' => -1,
			'post_type' => 'pt_resources',
			'meta_value' => get_the_ID(),
			'meta_compare' => 'LIKE',
		)
	);
?>
<div class="max-w-screen-lg py-16 lg:max-w-screen-xl mx-auto px-4 md:px-0 flex flex-col md:flex-row">
	<!-- Post Content -->
	<div class="w-full md:w-1/3">
		<div class="mb-12 md:mb-0 border-b shadow-xl rounded-xl sticky top-[5rem]">
			<div class="aspect-square bg-cover py-12 rounded-t-xl bg-center" style="background-image:url(<?php echo get_the_post_thumbnail_url('', 'large'); ?>)"></div>
			<div class="p-4 bg-white rounded-b-xl flex flex-col gap-4">
				<?php
				$teams = get_the_terms($post->ID, 'consult_team');
				foreach ($teams as $term) {
					if ($term->slug === 'child') {
						$team =
						'<div class="inline-block text-sm font-gotham-medium text-blue -mb-2">
							Child & Adolescent Team Member
						</div>';
					} else {
						$team =
						'<div class="inline-block text-sm font-gotham-medium text-purple-700 -mb-2">
							Maternal Team Member
						</div>';
					}
					echo $team;
				}
				?>
				
				<h2 class="font-gotham-bold text-xl"><?php echo get_the_title(); ?></h2>
				<?php
				$hospitals = get_the_terms($post->ID, 'hospital');
				foreach ($hospitals as $term) {
					echo '<p class="font-gotham-medium text-lg leading-6 text-slate-500">' . $term->name . '</p>';
				}
				?>
				<?php if (have_rows('titles')) : ?>
					<?php while (have_rows('titles')) : the_row(); ?>
						<p class="font-gotham-light"><?php echo get_sub_field('title'); ?></p>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>


	<div class="flex-1 md:pl-12" x-cloak x-data="{ section1: true, section2: false, section3: false, section4:false, option1: true, option2: false, option3:false}">
		<!-- Pill Nav -->
		<div class="relative flex-1 justify-around pb-5 border-b border-slate-200 sm:pb-0">
			<div>
				<!-- Dropdown menu on small screens -->
				<div class="sm:hidden">
					<label for="current-tab" class="sr-only">Select a tab</label>
					<select id="current-tab" name="current-tab" class="block w-full pl-3 pr-10 py-2 text-base border-slate-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
						<option>About</option>
						<option>Events</option>
						<option selected="">Resources</option>
					</select>
				</div>
				<!-- Tabs at small breakpoint and up -->
				<div class="hidden sm:block bg-white rounded-xl shadow">
					<nav class="grid md:grid-cols-3 text-center p-2">
						<button x-on:click="section1 = true, section2 = false, section3=false" :class="section1 === true ? `text-white bg-blue font-gotham-medium shadow-sm` : `text-slate-500 font-gotham hover:text-blue`" class="p-2 rounded-lg text-blue font-gotham-medium">
							About
						</button>
						<button x-on:click="section2 = true, section1 = false, section3=false" :class="section2 === true ? `text-white bg-blue font-gotham-medium shadow-sm` : `text-slate-500 font-gotham hover:text-blue`" class="p-2 rounded-lg text-blue font-gotham-medium">
							Events
						</button>
						<button x-on:click="section3 = true, section1 = false, section2=false" :class="section3 === true ? `text-white bg-blue font-gotham-medium shadow-sm` : `text-slate-500 font-gotham hover:text-blue`" class="p-2 rounded-lg text-blue font-gotham-medium">
							Resources
						</button>
					</nav>
				</div>
			</div>
		</div>
		<div x-show="section1 === true">
			<div class="flex items-center gap-2">
				<h4 class="font-gotham-bold text-slate-800 text-xl my-4">
					<?php echo get_the_title(); ?>
				</h4>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-400">
					<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
				</svg>
				<h4 class="font-gotham-bold text-slate-800 text-xl my-4">
					About
				</h4>
			</div>
			<div class="max-w-2xl space-y-4 pr-4">
				<div class="font-gotham-light text-lg space-y-4"><?php the_content(); ?></div>
			</div>
		</div>
		<div x-show="section2 === true">
			<div class="flex items-center gap-2">
				<h4 class="font-gotham-bold text-slate-800 text-xl my-4">
					<?php echo get_the_title(); ?>
				</h4>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-400">
					<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
				</svg>
				<h4 class="font-gotham-bold text-slate-800 text-xl my-4">
					Events
				</h4>
			</div>
			<?php
			if ($event_query->have_posts()) :
				echo '<div class="flex flex-col gap-4">';
				while ($event_query->have_posts()) : $event_query->the_post();
					$date_field = get_field('start_date');
					$date = DateTime::createFromFormat('Ymd', $date_field);
					if ($date->format('Ymd') < $today) {
						$hover_effects = '';
						$move_old_to_bottom = 'order-last';
						$status = '<div class="absolute group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 text-red-800 bg-red-100 text-sm font-bold rounded-full dropshadow-md">
            			    Closed
            			</div>';
					} else {
						$hover_effects = 'group';
						$move_old_to_bottom = '';
						$status = '<div class="absolute group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 text-emerald-600 bg-green-200 text-sm font-bold rounded-full dropshadow-md">
            			    Open
            			</div>';
					}
					if (strlen(get_the_title()) > 100) {
						$event_title = substr(get_the_title(), 0, 100) . '...';
					} else {
						$event_title = get_the_title();
					}
					echo '<div class="flex gap-4 ' . $hover_effects . ' min-h-[120px] rounded-xl overflow-hidden bg-white shadow transition hover:shadow-lg' . $move_old_to_bottom . '">
							<div class="w-40 h-auto">
								<div class="relative h-full">
									<div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
									' . $status . '
									<div class="bg-center bg-cover h-full" style="background-image:url(https://project-teach.launchpaddev.com/app/uploads/2017/09/consulation-improve-health-bg-250x119.jpg);"></div>
								</div>
							</div>
							<div class="flex-1 flex flex-col justify-center gap-2 py-4 pr-4">
								<div class="font-gotham-medium text-black transition group-hover:text-blue">
									' . $event_title . '
								</div>
								<div class="flex gap-4 flex-wrap">
								<div class="flex text-slate-500 gap-2">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 mb-1">
										<path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd"></path>
									</svg>
									<div class="font-gotham text-sm text-slate-500">
										' . $date->format('D, M j, Y') . '
									</div>
								</div>
								<div class="flex text-slate-500 gap-2">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-1" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
										<path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
										<path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
										<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
										<path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
									</svg>';
					$presenter_count = count(get_field('group_presenters'));
					if (have_rows('group_presenters')) :
						if ($presenter_count > 2) {
							echo '<p class="text-left text-sm font-gotham text-slate-500">Multiple Presenters</p>';
						} else {
							while (have_rows('group_presenters')) : the_row();
								$presenter = get_sub_field('presenter');
								echo '<a href="' . get_permalink($presenter->ID) . '" class="text-left text-sm font-gotham text-slate-500 hover:text-blue transition">' . get_the_title($presenter->ID) . '</a>';
							endwhile;
						}
					endif;
					echo '</div>
								</div>
							</div>
						</div>';
				endwhile;
				wp_reset_postdata();
				echo '</div>';
			endif;
			?>
		</div>
		<div x-show="section3 === true">
			<div class="flex items-center gap-2">
				<h4 class="font-gotham-bold text-slate-800 text-xl my-4">
					<?php echo get_the_title(); ?>
				</h4>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-400">
					<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
				</svg>
				<h4 class="font-gotham-bold text-slate-800 text-xl my-4">
					Resources
				</h4>
			</div>
			<?php
			if ($resource_query->have_posts()) :
				echo '<div class="flex flex-col gap-4">';
				while ($resource_query->have_posts()) : $resource_query->the_post();
					echo '<div class="flex gap-4 group min-h-[120px] rounded-xl overflow-hidden bg-white shadow transition hover:shadow-lg">
							<a href="' . get_the_permalink() . '" class="w-40 h-auto">
								<div class="relative h-full">
									<div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
									<div class="absolute group-hover:opacity-0 transition duration-300 height-full right-0 top-0 mb-2 text-right mt-2 mr-2 flex items-center gap-1">
										<p class="bg-purple-200 text-purple text-sm font-bold px-2 text-sm rounded-full dropshadow-md">Maternal</p>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 bg-purple-200 text-purple rounded-full dropshadow-md p-1">
											<path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"></path>
										</svg>
									</div>
									<div class="bg-center bg-cover h-full" style="background-image:url(https://project-teach.launchpaddev.com/app/uploads/2017/09/consulation-improve-health-bg-250x119.jpg);"></div>
								</div>
							</a>
							<div class="flex-1 flex flex-col justify-center gap-2 py-4 pr-4">
								<a href="' . get_the_permalink() . '" class="block font-gotham-medium text-black transition group-hover:text-blue">
									' . get_the_title() . '
								</a>
								<div class="flex gap-4 flex-wrap">
									<div class="">
										<span class="font-gotham-bold text-sm mb-2 mr-px uppercase text-purple">Tags:</span>
										<a href="https://project-teach.launchpaddev.com/pt_resources/?keyword=&amp;format%5B%5D=trauma" class="text-sm text-black font-gotham transtion duration-300 hover:text-purple">Trauma</a>
									</div>
									<div class="flex text-slate-500 gap-2">
										<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-1" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
											<path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
											<path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
											<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
											<path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
										</svg>';
					$featured_posts = get_field('authors');
					$author_count = count(get_field('authors'));
					if ($featured_posts) :
						if ($author_count > 2) {
							echo '<p class="text-left text-sm font-gotham text-slate-500">Multiple Presenters</p>';
						} else {
							foreach ($featured_posts as $post) :
								setup_postdata($post);
								echo '<p class="text-left text-sm font-gotham text-slate-500">' . get_the_title() . '</p>';
							endforeach;
							wp_reset_postdata();
						}
					endif;
					echo '</div>
								</div>
							</div>
						</div>';
				endwhile;
				wp_reset_postdata();
				echo '</div>';
			endif;
			?>
		</div>
	</div>
</div>

<?php if (false) : ?>
	<style>
		.consultant-info p {
			font-size: 16px
		}

		.consultant-info p,
		#about-content p {
			font-family: 'GothamProLight';
			margin-bottom: 1rem;
			line-height: 1.5;
		}

		.unclickable {
			background: #fff !important;
			opacity: 75%;
			pointer-events: none;
			color: #888;
		}

		.unclickable svg {
			display: none;
		}
	</style>

	<!-- Queries -->
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
	$post_query = new WP_Query($post_args);
	if ($post_query->have_posts()) {
		$post_button_classes = 'bg-blue-200';
	} else {
		$post_button_classes = 'unclickable';
	}	// Event Query
	$event_query = new WP_Query(
		array(
			'numberposts' => -1,
			'post_type' => 'events',
			'meta_value' => get_the_ID(),
			'meta_compare' => 'LIKE',
		)
	);
	// Resource Query
	$resource_query = new WP_Query(
		array(
			'numberposts' => -1,
			'post_type' => 'pt_resources',
			'meta_value' => get_the_ID(),
			'meta_compare' => 'LIKE',
		)
	);
?>
<div class="max-w-screen-lg py-16 lg:max-w-screen-xl mx-auto px-4 md:px-0 flex flex-col md:flex-row">
	<!-- Post Content -->
	<div class="w-full md:w-1/3">
		<div class="mb-12 md:mb-0 border-b shadow-xl rounded-xl sticky top-[5rem]">
			<div class="aspect-square bg-cover py-12 rounded-t-xl bg-center" style="background-image:url(<?php echo get_the_post_thumbnail_url('', 'large'); ?>)"></div>
			<div class="p-4 bg-white rounded-b-xl flex flex-col gap-4">
				<?php
				$teams = get_the_terms($post->ID, 'consult_team');
				//fix for consultants with multiple teams (liasions + child example)
				foreach ($teams as $term) {
					if ($term->slug === 'child') {
						$text_color = 'text-blue';
						$hover_text_color = 'hover:text-blue';
						$group_hover_text_color = 'group-hover:text-blue';
						$bg_color = 'bg-blue';
						$team =
						'<div class="inline-block text-sm font-gotham-medium '.$text_color.' -mb-2">
							Child & Adolescent Team Member
						</div>';
					} else {
						$text_color = 'text-purple-700';
						$hover_text_color = 'hover:text-purple-700';
						$group_hover_text_color = 'group-hover:text-purple-700';
						$bg_color = 'bg-purple';
						$team =
						'<div class="inline-block text-sm font-gotham-medium '.$text_color.' -mb-2">
							Maternal Team Member
						</div>';
					}
					echo $team;
				}
				?>
				
				<h2 class="font-gotham-bold text-xl"><?php echo get_the_title(); ?></h2>
				<?php
				$hospitals = get_the_terms($post->ID, 'hospital');
				foreach ($hospitals as $term) {
					echo '<p class="font-gotham-medium text-lg leading-6 text-slate-500">' . $term->name . '</p>';
				}
				?>
				<?php if (have_rows('titles')) : ?>
					<?php while (have_rows('titles')) : the_row(); ?>
						<p class="font-gotham-light"><?php echo get_sub_field('title'); ?></p>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>


	<div class="flex-1 md:pl-12" x-cloak x-data="{ section1: true, section2: false, section3: false, section4:false, option1: true, option2: false, option3:false}">
		<!-- Pill Nav -->
		<div class="relative flex-1 justify-around pb-5 border-b border-slate-200 sm:pb-0">
			<div>
				<!-- Dropdown menu on small screens -->
				<div class="sm:hidden">
					<label for="current-tab" class="sr-only">Select a tab</label>
					<select id="current-tab" name="current-tab" class="block w-full pl-3 pr-10 py-2 text-base border-slate-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
						<option>About</option>
						<option>Events</option>
						<option selected="">Resources</option>
					</select>
				</div>
				<!-- Tabs at small breakpoint and up -->
				<div class="hidden sm:block bg-white rounded-xl shadow">
					<nav class="grid md:grid-cols-3 text-center p-2">
						<button x-on:click="section1 = true, section2 = false, section3=false" :class="section1 === true ? `text-white <?php echo $bg_color; ?> font-gotham-medium shadow-sm` : `text-slate-500 font-gotham <?php echo $hover_text_color; ?>`" class="p-2 rounded-lg <?php echo $text_color; ?> font-gotham-medium">
							About
						</button>
						<button x-on:click="section2 = true, section1 = false, section3=false" :class="section2 === true ? `text-white <?php echo $bg_color; ?> font-gotham-medium shadow-sm` : `text-slate-500 font-gotham <?php echo $hover_text_color; ?>`" class="p-2 rounded-lg <?php echo $text_color; ?> font-gotham-medium">
							Events
						</button>
						<button x-on:click="section3 = true, section1 = false, section2=false" :class="section3 === true ? `text-white <?php echo $bg_color; ?> font-gotham-medium shadow-sm` : `text-slate-500 font-gotham <?php echo $hover_text_color; ?>`" class="p-2 rounded-lg <?php echo $text_color; ?> font-gotham-medium">
							Resources
						</button>
					</nav>
				</div>
			</div>
		</div>
		<div x-show="section1 === true">
			<div class="flex items-center gap-2">
				<h4 class="font-gotham-bold text-slate-800 text-xl my-4">
					<?php echo get_the_title(); ?>
				</h4>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-400">
					<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
				</svg>
				<h4 class="font-gotham-bold text-slate-800 text-xl my-4">
					About
				</h4>
			</div>
			<div class="max-w-2xl space-y-4 pr-4">
				<div class="font-gotham-light text-lg space-y-4"><?php the_content(); ?></div>
			</div>
		</div>
		<div x-show="section2 === true">
			<div class="flex items-center gap-2">
				<h4 class="font-gotham-bold text-slate-800 text-xl my-4">
					<?php echo get_the_title(); ?>
				</h4>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-400">
					<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
				</svg>
				<h4 class="font-gotham-bold text-slate-800 text-xl my-4">
					Events
				</h4>
			</div>
			<?php
			if ($event_query->have_posts()) :
				echo '<div class="flex flex-col gap-4">';
				while ($event_query->have_posts()) : $event_query->the_post();
					$date_field = get_field('start_date');
					$date = DateTime::createFromFormat('Ymd', $date_field);
					if ($date->format('Ymd') < $today) {
						$hover_effects = '';
						$move_old_to_bottom = 'order-last';
						$pointer_events = 'pointer-events-none';
						$status = '<div class="absolute group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 text-red-800 bg-red-100 text-sm font-bold rounded-full dropshadow-md">
            			    Closed
            			</div>';
					} else {
						$hover_effects = 'group';
						$move_old_to_bottom = '';
						$pointer = '';
						$status = '<div class="absolute group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 text-emerald-600 bg-green-200 text-sm font-bold rounded-full dropshadow-md">
            			    Open
            			</div>';
					}
					if (strlen(get_the_title()) > 100) {
						$event_title = substr(get_the_title(), 0, 100) . '...';
					} else {
						$event_title = get_the_title();
					}
					if (get_the_ID() === 8425) {
						$link = 'https://project-teach.launchpaddev.com/intensive-training-maternal-mental-health-for-ob-gyn-and-primary-care-clinicians/';
					} elseif(get_the_ID() === 8430) {
						$link = 'https://project-teach.launchpaddev.com/intensive-training-child-adolescent-mental-health-for-primary-care-clinicians/';
					} else {
						$link = get_the_permalink();
					}
					// https://project-teach.launchpaddev.com/intensive-training-child-adolescent-mental-health-for-primary-care-clinicians/
					echo '<div class="flex gap-4 ' . $hover_effects . ' min-h-[120px] rounded-xl overflow-hidden bg-white shadow transition hover:shadow-lg' . $move_old_to_bottom . '">
							<a href='. $link .' class="w-40 h-auto '. $pointer_events .'">
								<div class="relative h-full">
									<div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
									' . $status . '
									<div class="bg-center bg-cover h-full" style="background-image:url(https://project-teach.launchpaddev.com/app/uploads/2017/09/consulation-improve-health-bg-250x119.jpg);"></div>
								</div>
							</a>
							<div class="flex-1 flex flex-col justify-center gap-2 py-4 pr-4">
								<a href=' . $link . ' class="font-gotham-medium text-black transition '. $hover_text_color . ' ' . $pointer_events . '">
									' . $event_title . '
								</a>
								<div class="flex gap-4 flex-wrap">
								<div class="flex text-slate-500 gap-2">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 mb-1">
										<path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd"></path>
									</svg>
									<div class="font-gotham text-sm text-slate-500">
										' . $date->format('D, M j, Y') . '
									</div>
								</div>
								<div class="flex text-slate-500 gap-2">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-1" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
										<path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
										<path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
										<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
										<path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
									</svg>';
					$presenter_count = count(get_field('group_presenters'));
					if (have_rows('group_presenters')) :
						if ($presenter_count > 2) {
							echo '<p class="text-left text-sm font-gotham text-slate-500">Multiple Presenters</p>';
						} else {
							while (have_rows('group_presenters')) : the_row();
								$presenter = get_sub_field('presenter');
								echo '<a href="' . get_permalink($presenter->ID) . '" class="text-left text-sm font-gotham text-slate-500 '. $hover_text_color .' transition">' . get_the_title($presenter->ID) . '</a>';
							endwhile;
						}
					endif;
					echo '</div>
								</div>
							</div>
						</div>';
				endwhile;
				wp_reset_postdata();
				echo '</div>';
			endif;
			?>
		</div>
		<div x-show="section3 === true">
			<div class="flex items-center gap-2">
				<h4 class="font-gotham-bold text-slate-800 text-xl my-4">
					<?php echo get_the_title(); ?>
				</h4>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-400">
					<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
				</svg>
				<h4 class="font-gotham-bold text-slate-800 text-xl my-4">
					Resources
				</h4>
			</div>
			<?php
			if ($resource_query->have_posts()) :
				echo '<div class="flex flex-col gap-4">';
				while ($resource_query->have_posts()) : $resource_query->the_post();
					$terms = get_the_terms(get_the_id(), 'resource_topics');
					if ($terms) {
						$resource_topic = wp_trim_words($terms[0]->name, 1, '');
						if ($resource_topic === 'Child') {
							$video_color_bg = 'bg-blue-200';
							$video_color_fill = 'text-blue';
							$hover_text_color = 'hover:text-blue';
						} elseif ($resource_topic === 'Maternal') {
							$video_color_bg = 'bg-purple-200';
							$video_color_fill = 'text-purple';
							$hover_text_color = 'hover:text-purple';
						}
					} else {
						$video_color_bg = 'bg-green-200';
						$video_color_fill = 'text-green';
						$hover_text_color = 'hover:text-green';
					}
					if ($terms) {
						$tags = get_the_terms($post_id, 'resource_tags');
						$types = get_the_terms($post_id, 'resource_types');
						foreach ($types as $type) {
							if ($type->slug === 'video') {
								$resource_type_bubble = '
                				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 ' . $video_color_bg . ' ' . $video_color_fill . ' rounded-full dropshadow-md p-1">
                				    <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                				</svg>';
							}
						}
						$resource_topic = wp_trim_words($terms[0]->name, 1, '');
						if ($resource_topic === 'Child') {
							$resource_topic_bubble = '                                
                			<div class="absolute group-hover:opacity-0 transition duration-300 height-full right-0 top-0 mb-2 text-right mt-2 mr-2 flex items-center gap-1">                                
                			    <p class="bg-blue-200 text-blue text-sm font-bold px-2 text-sm rounded-full dropshadow-md">Child</p>' .
								$resource_type_bubble .
							'</div>';
						} else {
							$resource_topic_bubble = '
                			<div class="absolute group-hover:opacity-0 transition duration-300 height-full right-0 top-0 mb-2 text-right mt-2 mr-2 flex items-center gap-1"> 
                    			<p class="bg-purple-200 text-purple text-sm font-bold px-2 text-sm rounded-full dropshadow-md">Maternal</p>' .
								$resource_type_bubble .
							'</div>';
						}
					} else if ($resource_type_bubble) {
						$resource_topic_bubble = '
                		<div class="absolute group-hover:opacity-0 transition duration-300 height-full right-0 top-0 mb-2 text-right mt-2 mr-2 flex items-center gap-1">' .
							$resource_type_bubble .
						'</div>';
					} else {
						$resource_topic_bubble = '';
					}
					echo '<div class="flex gap-4 group min-h-[120px] rounded-xl overflow-hidden bg-white shadow transition hover:shadow-lg">
							<a href="' . get_the_permalink() . '" class="w-40 h-auto">
								<div class="relative h-full">
									<div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
									' . $resource_topic_bubble . '
									<div class="bg-center bg-cover h-full" style="background-image:url(https://project-teach.launchpaddev.com/app/uploads/2017/09/consulation-improve-health-bg-250x119.jpg);"></div>
								</div>
							</a>
							<div class="flex-1 flex flex-col justify-center gap-2 py-4 pr-4">
								<a href="' . get_the_permalink() . '" class="block font-gotham-medium text-black transition '. $hover_text_color .'">
									' . get_the_title() . '
								</a>
								<div class="flex gap-4 flex-wrap">';
									if (!empty($tags)) :
        							    echo '<div class="flex gap-1">
        							        <span class="font-gotham-bold text-sm mb-2 mr-px uppercase ' . $text_color . '">Tags:</span>';
        							        $tag_content = '';
        							        foreach ($tags as $term) {
        							            $tag_content .= '<a href="https://project-teach.launchpaddev.com/pt_resources/?keyword=&format%5B%5D=' . $term->slug . '" class="text-sm text-slate-500 font-gotham transtion duration-300 ' . $hover_text_color . '">' . $term->name . '</a>, ';
        							        }
        							        echo rtrim($tag_content, ', ');
        							    echo '</div>';
        							endif;
									echo '
									<div class="flex text-slate-500 gap-2">
										<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-1" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
											<path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
											<path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
											<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
											<path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
										</svg>';
										$featured_posts = get_field('authors');
										$author_count = count(get_field('authors'));
										if ($featured_posts) :
											if ($author_count > 2) {
												echo '<p class="text-left text-sm font-gotham text-slate-500">Multiple Presenters</p>';
											} else {
												$author_content = '';
												echo '<div>';
												foreach ($featured_posts as $post) :
													setup_postdata($post);
													// $author_content .= '<a href="https://project-teach.launchpaddev.com/pt_resources/?keyword=&format%5B%5D=' . $term->slug . '" class="text-sm text-slate-500 font-gotham transtion duration-300 ' . $hover_text_color . '">' . $term->name . '</a>, ';
													$author_content .= '<a href="' . get_permalink($presenter->ID) . '" class="text-left text-sm font-gotham text-slate-500 ' . $hover_text_color . ' transition">' . get_the_title() . '</a>, ';
												endforeach;
												wp_reset_postdata();
												echo rtrim($author_content, ', ');
												echo '</div>';
											}
										endif;
								echo '</div>
							</div>
						</div>
					</div>';
				endwhile;
				wp_reset_postdata();
				echo '</div>';
			endif;
			?>
		</div>
	</div>
</div>
<?php endif; ?>