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
	$event_query = new WP_Query($event_args);
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
	$video_query = new WP_Query($video_args);
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
					<li id="posts-button" class="rounded-t-xl mx-px md:mx-1 <?php echo $post_button_classes; ?> px-2 md:px-4 py-4 font-gotham-light text-blue flex items-center justify-center flex-1 text-center">
						<span class="mr-1">Posts</span>
						<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none transform rotate-180 right-0 h-4 w-4 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
						</svg>
					</li>
					<li id="events-button" class="rounded-t-xl mx-px md:mx-1 <?php echo $event_button_classes; ?> px-2 md:px-4 py-4 font-gotham-light text-blue flex items-center justify-center flex-1 text-center">
						<span class="mr-1">Events</span>
						<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none transform rotate-180 right-0 h-4 w-4 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
						</svg>
					</li>
					<li id="videos-button" class="rounded-t-xl mx-px md:mx-1 <?php echo $video_button_classes; ?> px-2 md:px-4 py-4 font-gotham-light text-blue flex items-center justify-center flex-1 text-center">
						<span class="mr-1">Videos</span>
						<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none transform rotate-180 right-0 h-4 w-4 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
						</svg>
					</li>
				</ul>
				<!-- ABOUT -->
				<div class="bg-white px-4 md:px-8 py-8" id="about-content">
					<h4 class="font-gotham-bold text-xl mb-4">About <span class="text-blue"><?php the_title(); ?></span></h4>
					<?php the_content(); ?>
				</div>
				<!-- POSTS -->
				<div class="bg-white px-4 md:px-8 py-8 hidden" id="posts-content">
					<?php
					if ($post_query->have_posts()) :
						while ($post_query->have_posts()) : $post_query->the_post();
							include(locate_template('templates/archives/post.php', false, false));
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
				<!-- EVENTS -->
				<div class="bg-white px-4 md:px-8 py-8 hidden" id="events-content">
					<?php
					if ($event_query->have_posts()) :
						echo '<h4 class="font-gotham-bold text-xl mb-4">Events With <span class="text-blue">' . get_the_title() . '</span></h4>';
						while ($event_query->have_posts()) : $event_query->the_post();
							include(locate_template('templates/archives/events.php', false, false));
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
				<!-- VIDEOS -->
				<div class="bg-white px-4 md:px-8 py-8 hidden" id="videos-content">
					<?php
					if ($video_query->have_posts()) :
						echo '<h4 class="font-gotham-bold text-xl mb-4">Videos With <span class="text-blue">' . get_the_title() . '</span></h4>';
						while ($video_query->have_posts()) : $video_query->the_post();
							include(locate_template('templates/archives/videos.php', false, false));
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
							if ($post_query->have_posts()) :
								while ($post_query->have_posts()) : $post_query->the_post();
									include(locate_template('templates/archives/post.php', false, false));
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
							if ($post_query->have_posts()) :
								while ($post_query->have_posts()) : $post_query->the_post();
									include(locate_template('templates/archives/post.php', false, false));
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
							if ($post_query->have_posts()) :
								while ($post_query->have_posts()) : $post_query->the_post();
									include(locate_template('templates/archives/post.php', false, false));
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
							if ($post_query->have_posts()) :
								while ($post_query->have_posts()) : $post_query->the_post();
									include(locate_template('templates/archives/post.php', false, false));
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
<?php endif; ?>