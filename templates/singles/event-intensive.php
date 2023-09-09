<?php
if (get_field('start_date') > date('Ymd')) {
	$event_past = false;
} else {
	$event_past = true;
}
?>


<style>
	.cred-info p {
		font-size: 16px;
		line-height: 1.25rem;
		margin-bottom: 1rem;
	}

	.heateor_sss_sharing_ul>a {
		transition: all .3s;
	}

	.heateor_sss_sharing_ul>a:hover {
		opacity: .5;
	}

	.heateor_sss_sharing_ul>a:first-child,
	#notice-0 {
		display: none !important;
	}
</style>
<?php
$registration_link = get_field('registration_link');
if ($registration_link) {
	$btn_clickable = '';
	$registration_btn_color = 'purple';
	$btn_text = 'Register Now';
	$follow_up_btn_text = 'Register Now';
	$follow_up_btn_color = 'blue';
} else {
	$btn_clickable = 'pointer-events-none';
	$registration_btn_color = 'cool-gray';
	$btn_text = 'Register Soon';
	$follow_up_btn_color = 'cool-gray';
	$follow_up_btn_text = 'Register Soon';
}
?>
<section class="max-w-screen-xl mx-auto mb-12 py-8">
	<h1 class="text-2xl px-4 mb-4 lg:px-0 lg:text-4xl lg:text-center mb-4 font-bold text-black"><?php the_title(); ?></h1>
	<?php $start_date_string = get_field('start_date');
	$start_date = DateTime::createFromFormat('Ymd', $start_date_string); ?>
	<?php if (get_the_id() === 7771) : ?>
		<!-- Date -->
		<div class="flex items-center justify-center">
			<span class="bg-white py-2 px-4 font-gotham shadow-xl rounded-xl font-gotham-normal text-lg"><span class="text-blue font-gotham font-gotham-bold text-lg">Save the Dates:</span> Sunday, Nov 5 - Monday, Nov 6, 2023.</span>
		</div>
	<?php elseif (7767) : ?>
		<!-- Date -->
		<div class="flex items-center justify-center">
			<span class="bg-white py-2 px-4 font-gotham shadow-xl rounded-xl font-gotham-normal text-lg"><span class="text-blue font-gotham font-gotham-bold text-lg">Save the Date:</span> Saturday, November 4, 2023</span>
		</div>
	<?php elseif (get_field('start_date')) : ?>
		<!-- Date -->
		<div class="flex items-center justify-center">
			<span class="bg-white py-2 px-4 font-gotham shadow-xl rounded-xl font-gotham-normal text-lg"><span class="text-blue font-gotham font-gotham-bold text-lg">Save the Date:</span> <?php echo $start_date->format('l, F j, Y'); ?></span>
		</div>
	<?php endif; ?>
	<div class="flex items-center justify-end mb-2">
		<span class="font-gotham-light text-sm mr-2">SHARE</span>
		<?php echo do_shortcode('[Sassy_Social_Share]'); ?>
	</div>
	<!-- Register Steps -->
	<div class="bg-purple mx-4 lg:mx-0 mt-4 p-4 text-white">
		<?php the_field('top_section_callout'); ?>
	</div>
	<!-- White BG Content -->
	<div class="px-4 py-8 width-full bg-white mb-4 font-gotham">
		<div class="flex md:px-4">
			<!-- Event Content -->
			<div class="flex flex-col md:mr-8 flex-1 relative">
				<?php if (!$event_past) :  ?>
					<!-- Categories -->
					<div class="flex">
						<?php
						$terms = get_the_terms($post->ID, 'event_category');
						foreach ($terms as $term) {
							echo '<p href="/event_category/' . $term->slug . '/" class="text-blue text-sm leading-6 opacity-75 transition-all duration-300 hover:opacity-100">' . $term->name . '</p>';
						}
						?>
					</div>
				<?php else : ?>
					<p class="text-blue text-sm leading-6 font-bold text-lg">Event has ended</p>
				<?php endif; ?>
				<!-- Title -->
				<?php if (get_the_title()) : ?>
					<h3 class="font-gotham-bold text-2xl mb-6 leading-7 my-1 lg:pr-4 <?php if ($event_past) echo 'opacity-50'; ?>">
						<?php the_title(); ?>
					</h3>
				<?php endif; ?>
				<?php if (!$event_past) :  ?>
					<!-- <p class="mb-4 text-base font-gotham-bold text-purple leading-6 opacity-75">This is a Live, Virtual Event</p> -->
					<?php if (get_the_id() === 7771) : ?>
						<p class="text-purple font-gotham mb-2 font-gotham-bold text-xl">Save the Dates: Sunday, Nov 5 - Monday, Nov 6, 2023.</p>
					<?php else : ?>
						<p class="text-purple font-gotham mb-2 font-gotham-bold text-xl">Save the Date:</span> <?php echo $start_date->format('l, F j, Y'); ?></span>
						<?php endif; ?>
						<p class="font-gotham-light leading-7 mb-8 text-lg">The next intensive training will be held in-person at a location in Westchester County, New York. If you would like to receive event details and registration information as soon as it is released, please email us by <a class="text-blue transition-all duration-300 font-gotham hover:text-purple" href="mailto:info@projectteachny.org?subject=MMH Intensive Training">clicking here</a>.</p>
						<?php if (false) : ?>
							<div class="flex flex-col md:flex-row mb-4">
								<!-- Day 1 -->
								<div class="mb-4 md:mb-0 md:mr-8 border-l-4 border-solid border-purple p-4 shadow-md">
									<?php if (get_field('end_date')) : ?>
										<span class="font-gotham-bold mb-2 block text-purple">DAY 1</span>
									<?php endif; ?>
									<!-- Date -->
									<?php if (get_field('start_date')) :
										$start_date_string = get_field('start_date');
										$start_date = DateTime::createFromFormat('Ymd', $start_date_string); ?>
										<div class="flex mb-2 pr-4 items-end">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
											</svg>
											<p class="leading-none text-lg">
												<strong>Date: </strong>
												<?php echo $start_date->format('l, M j, Y'); ?>
											</p>
										</div>
									<?php endif; ?>
									<!-- Time -->
									<?php if (get_field('start_time')) : ?>
										<div class="flex pr-4 items-end">
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
								</div>
								<!-- Day 2 -->
								<?php if (get_field('end_date')) : ?>
									<div class="border-l-4 border-solid border-purple p-4 shadow-md">
										<span class="font-gotham-bold mb-2 block text-purple">DAY 2</span>
										<!-- Date -->
										<?php if (get_field('end_date')) :
											$end_date_string = get_field('end_date');
											$end_date = DateTime::createFromFormat('Ymd', $end_date_string); ?>
											<div class="flex mb-2 pr-4 items-end">
												<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
													<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
												</svg>
												<p class="leading-none text-lg">
													<strong>Date: </strong>
													<?php echo $end_date->format('l, M j, Y'); ?>
												</p>
											</div>
										<?php endif; ?>
										<!-- Time -->
										<?php if (get_field('start_time_2')) : ?>
											<div class="flex pr-4 items-end">
												<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
													<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
												</svg>
												<p class="leading-none text-lg">
													<strong>Time: </strong>
													<?php the_field('start_time_2'); ?>
													<?php if (get_field('end_time_2')) : ?>
														- <?php the_field('end_time_2');
														endif; ?>
												</p>

											</div>
										<?php endif; ?>
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<!-- Event Location/Online -->
						<?php if (get_field('online_service')) : ?>
							<div class="flex mb-4 pr-4 items-end">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
								</svg>
								<p class="leading-none text-lg"><strong>Location: </strong><?php the_field('online_service'); ?></p>
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
						<!-- Credits -->
						<?php if (get_field('credits')) : ?>
							<div class="flex mb-2 pr-4 items-end">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
								</svg>
								<p class="leading-none text-lg"><strong>Credits: </strong><?php the_field('credits'); ?> credits</p>
							</div>
						<?php endif; ?>
						<!-- Buttons -->
						<div class="flex flex-col md:flex-row my-4 md:my-0 justify-center md:justify-start items-center h-full">
							<!-- Register Button -->
							<a href="<?php the_field("registration_link"); ?>" class="<?php echo $btn_clickable; ?> text-white border-2 mb-2 md:mb-0 md:mr-4 border-<?php echo $registration_btn_color; ?> border-solid hover:text-<?php echo $registration_btn_color; ?> hover:bg-transparent transition-all leading-normal duration-300 inline-block rounded-full py-2 text-base px-4 bg-<?php echo $registration_btn_color; ?> no-underline">
								<?php echo $btn_text; ?>
							</a>
							<!-- Schedule Button -->
							<?php $sched = get_field('schedule_print');
							if ($sched) :
								$sched_url = $sched['url'];
								$sched_title = $sched['title'];
							?>
								<a href="<?php echo esc_url($sched_url); ?>" class="text-purple border-2 md:mr-4 border-purple border-solid hover:text-white hover:bg-purple transition-all duration-300 inline-block rounded-full py-2 text-base px-4 bg-transparent no-underline flex">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
									</svg>
									<span class="mt-px pt-px">Intensive Training Agenda</span>
								</a>
							<?php endif; ?>
							<!-- PDF Button	 -->
							<?php $link = get_field('pdf_print');
							if ($link) :
								$link_url = $link['url'];
								$link_title = $link['title'];
							?>
								<a href="<?php echo esc_url($link_url); ?>" class="text-purple border-2 border-purple border-solid hover:text-white hover:bg-purple transition-all duration-300 inline-block rounded-full py-2 text-base px-4 bg-transparent no-underline flex">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
										<path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
									</svg>
									<span class="mt-px pt-px">Maternal Services Flyer</span>
								</a>
							<?php endif; ?>
							<?php if (get_the_id() === 7771) : ?>
								<a href="https://projectteachny.org/app/uploads/2022/03/Spring-2022-Child-IT-agenda-Final042022IB.pdf" class="text-purple border-2 md:mr-4 border-purple border-solid hover:text-white hover:bg-purple transition-all duration-300 inline-block rounded-full py-2 text-base px-4 bg-transparent no-underline flex">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
									</svg>
									<span class="mt-px pt-px">Sample Training Agenda</span>
								</a>
							<?php elseif (7767) : ?>
								<a href="https://projectteachny.org/app/uploads/2022/06/MMH-fall-intensive-training-schedule-081622-1.pdf" class="text-purple border-2 md:mr-4 border-purple border-solid hover:text-white hover:bg-purple transition-all duration-300 inline-block rounded-full py-2 text-base px-4 bg-transparent no-underline flex">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
									</svg>
									<span class="mt-px pt-px">Sample Training Agenda</span>
								</a>
							<?php endif; ?>
						</div>
					<?php else : ?>
						<div class="my-4"><?php echo get_field('over_text'); ?></div>
						<?php
						$link = get_field('over_button');
						if ($link) :
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
						?>
							<div>
								<a class="text-white border-2 border-purple border-solid hover:text-purple hover:bg-transparent transition-all duration-300 inline-block rounded-full py-2 text-base px-4 mt-2 bg-purple" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
							</div>
						<?php endif; ?>
					<?php endif; ?>
			</div>
			<!-- Event Image -->
			<?php if (has_post_thumbnail()) : ?>
				<?php if (get_field("registration_link")) : ?>
					<a href="<?php the_field("registration_link"); ?>" class="<?php echo $btn_clickable; ?> hidden md:block w-64 h-64 ml-auto">
						<div style="opacity:5%" class="w-64 h-64 bg-black-500 absolute transition-all duration-300 bg-black ease-in-out hover:opacity-0"></div>
						<div class="w-64 h-64 bg-center bg-cover" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
					</a>
				<?php else : ?>
					<div class="hidden md:block w-64 h-64 ml-auto">
						<div class="w-64 h-64 bg-black-500 opacity-50 absolute transition-all duration-300 ease-in-out hover:opacity-0"></div>
						<div class="w-64 h-64 bg-center bg-cover" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<?php if (!$event_past) :  ?>
			<?php if (false) : ?>
				<div class="md:pl-4 my-4 text-base">
					<?php the_content(); ?>
				</div>
			<?php endif; ?>
			<!-- Presenters -->
			<div class="md:pl-4 my-4">
				<?php
				// Post Object Presenters
				if (get_field('group_of_presenters') && have_rows('group_presenters')) :
					echo '<p class="leading-none text-lg mb-2"><strong>Presenters:</strong></p>';
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

					<?php elseif (get_the_id() === 7771) : ?>
						<div class="my-8">
							<p class="leading-none text-lg mb-2"><strong>Presenters:</strong></p><a href="/consultants/david-kaye/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2020/04/kaye.jpg);"></div>
								<h3 class="mt-px pt-px">David Kaye, MD</h3>
							</a><a href="/consultants/nayla-khoury/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2020/08/n-khoury.jpg);"></div>
								<h3 class="mt-px pt-px">Nayla Khoury, MD</h3>
							</a><a href="/consultants/victor-fornari-md/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2021/09/victor_fornari.jpg);"></div>
								<h3 class="mt-px pt-px">Victor Fornari, MD, MS</h3>
							</a><a href="/consultants/amy-jerum-np-dnp/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/01/amy_jerum.jpg);"></div>
								<h3 class="mt-px pt-px">Amy Jerum, NP, DNP</h3>
							</a><a href="/consultants/michael-scharf/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2020/05/scharf-1.jpg);"></div>
								<h3 class="mt-px pt-px">Michael A Scharf, MD</h3>
							</a><a href="/consultants/eric-r-macmaster-md/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2021/01/macmaste-1-250x251-1.png);"></div>
								<h3 class="mt-px pt-px">Eric MacMaster, MD</h3>
							</a><a href="/consultants/sourav-sengupta-md/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/02/souravse.jpg);"></div>
								<h3 class="mt-px pt-px">Sourav Sengupta, MD</h3>
							</a><a href="/consultants/rachel-zuckerbrot/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2020/08/zuckerbrot100x130.jpg);"></div>
								<h3 class="mt-px pt-px">Rachel Zuckerbrot, MD</h3>
							</a><a href="/consultants/jessica-grant-md/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/01/8fRa2838_400x400.jpg);"></div>
								<h3 class="mt-px pt-px">Jessica Grant, MD</h3>
							</a><a href="/consultants/james-wallace/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2020/04/3138-1.jpg);"></div>
								<h3 class="mt-px pt-px">James Wallace, MD</h3>
							</a><a href="/consultants/zoya-popivker-d-o/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2020/12/ljdpkmsftlhye1ivtxlp-e1606919318285.jpg);"></div>
								<h3 class="mt-px pt-px">Zoya Popivker, D.O.</h3>
							</a><a href="/consultants/diane-e-bloomfield/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2020/07/Screen-Shot-2020-07-10-at-1.20.14-PM-e1595005832869.png);"></div>
								<h3 class="mt-px pt-px">Diane E. Bloomfield, MD</h3>
							</a><a href="/consultants/marc-lashley-md/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/02/marc-lashley.jpeg);"></div>
								<h3 class="mt-px pt-px">Marc Lashley, MD</h3>
							</a><a href="/consultants/colleen-mattimore-md/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/02/MYD-mattimore3.jpg);"></div>
								<h3 class="mt-px pt-px">Colleen Mattimore, MD</h3>
							</a><a href="/consultants/carmel-foley/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2020/04/Foley.jpg);"></div>
								<h3 class="mt-px pt-px">Carmel Foley, MD</h3>
							</a><a href="/consultants/maureen-montgomery-md/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/01/maureen_montgomery.jpg);"></div>
								<h3 class="mt-px pt-px">Maureen Montgomery, MD</h3>
							</a><a href="/consultants/wanda-fremont/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/03/fremontw-1.jpg);"></div>
								<h3 class="mt-px pt-px">Wanda Fremont, MD</h3>
							</a><a href="/consultants/breck-borcherding/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/03/breck-borcherding-1.jpg);"></div>
								<h3 class="mt-px pt-px">Breck Borcherding, MD</h3>
							</a>
						</div>
						<div class="bg-purple-200 mt-4 md:mt-0 p-4 md:mb-8">
							<h3 class="font-gotham-bold text-xl leading-tight mb-2 mt-0">
								Virtual Live Training </h3>
							<p class="mb-4 pl-2 md:pl-6 font-gotham-light text-base md:text-lg leading-normal">This intensive training program enhances primary care clinicians’ skills to assess, treat and manage common mental health concerns in children and youth. This program includes the 1 <span style="font-family: 'museo-sans', sans-serif;">½</span> day training and six follow-up sessions and is presented by Project TEACH’s team of child and adolescent psychiatrists and pediatricians.</p>
							<p class="mb-4 pl-2 md:pl-6 font-gotham-light text-base md:text-lg leading-normal">Project TEACH is funded by the New York State Office of Mental Health and all services and events, such as this intensive training, are offered at no-cost to clinicians in New York State.</p>

							<h3 class="font-gotham-bold text-xl leading-tight mb-2 mt-0">
								Course Descriptions </h3>
							<ul class="ml-0 md:ml-4 mb-4 pl-6 list-disc">
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Trauma-Informed Care: This Intensive Training module addresses how to screen for and treat trauma in children and adolescents.</li>
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Depression: This Intensive Training module addresses how to screen for and treat pediatric depression.</li>
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Anxiety: This Intensive Training module addresses how to screen for and treat pediatric anxiety.</li>
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">ADHD: This Intensive Training module addresses how to assess and treat ADHD, including adherence to treatment options.</li>
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Bipolar Disorder: This Intensive Training module addresses how to screen for and treat pediatric bipolar disorder.</li>
							</ul>

							<h3 class="font-gotham-bold text-xl leading-tight mb-2 mt-0">
								Learning Objectives </h3>
							<p class="pl-2 md:pl-6 mb-2 font-gotham-light text-base md:text-lg leading-normal">At the conclusion of this program, learners will be able to:</p>
							<ul class="ml-0 md:ml-4 mb-4 pl-6 list-disc">
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Recognize the presentation, diagnosis, comorbidity, neurobiology, and current treatment options available for individuals with ADHD.</li>
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Assess depression in youth, and evaluate the treatment options for children and adolescents, including an assessment of the black box warning for SSRIs.</li>
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Differentiate common anxiety disorders and describe their assessments and treatment.</li>
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Recognize the behaviors resulting from trauma that require treatment, and evaluate the treatment options for children and adolescents.</li>
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Define pediatric bipolar disorder, and provide examples of effective evidence-based therapies</li>
							</ul>

							<h3 class="font-gotham-bold text-xl leading-tight mb-2 mt-0">
								Target Audience </h3>
							<p class="pl-2 md:pl-6 mb-2 font-gotham-light text-base md:text-lg leading-normal">New York State primary care and family practice physicians, pediatricians, psychiatrists, psychologists, nursing professionals, social workers, residents, and other mental health, primary care, and pediatric clinicians.</p>

						</div>
						<div class="bg-purple-200 p-4 mb-0">
							<h3 class="font-gotham-bold text-xl leading-tight mt-0">
								Intensive Training Follow-Up Session Dates: </h3>
							<!-- start -->
							<p class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Attendees of the 1 <span style="font-family: 'museo-sans', sans-serif;">½</span> day intensive training event are eligible and encouraged to participate in six, follow-up learning sessions. During each session, you will have the opportunity to present cases, ask questions, and get direct feedback from faculty.</p>
							<!-- Schedule Time Title Call Out -->
							<p class="mb-2 font-gotham-bold mt-16 mb-8 lg:mb-4 lg:mt-0 text-lg leading-normal">
								All Follow Up Sessions take place from 12:00PM - 1:00PM </p>
							<ul class="mb-8 lg:pl-4 list-none">
							</ul>
						</div>
						<div class="flex flex-col items-center md:flex-row justify-center mt-8">
							<!-- Register Button -->
							<a href="https://zoom.us/webinar/register/WN_ruIL7eQ9RHSMLfQOsg99Cw" class="pointer-events-none text-white border-2 mb-2 md:mb-0 md:mr-4 border-cool-gray border-solid hover:text-cool-gray hover:bg-transparent transition-all leading-normal duration-300 inline-block rounded-full py-2 text-base px-4 bg-cool-gray no-underline">
								Register Soon</a>
							<!-- Schedule Button -->
							<a href="https://projectteachny.org/app/uploads/2022/03/Spring-2022-Child-IT-agenda-Final042022IB.pdf" class="text-purple border-2 md:mr-4 border-purple border-solid hover:text-white hover:bg-purple transition-all duration-300 inline-block rounded-full py-2 text-base px-4 bg-transparent no-underline flex">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
								</svg>
								<span class="mt-px pt-px">Sample Training Agenda</span>
							</a>
							<!-- PDF Button	 -->
						</div>
					<?php elseif (get_the_id() === 7767) : ?>
						<div class="my-8">
							<p class="leading-none text-lg mb-2"><strong>Presenters:</strong></p><a href="/consultants/kristina-deligiannidis/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/03/Deligiannidis_Kristina-1.jpg);"></div>
								<h3 class="mt-px pt-px">Kristina Deligiannidis, MD</h3>
							</a><a href="/consultants/joshna-singh-md/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/03/singh-1.jpg);"></div>
								<h3 class="mt-px pt-px">Joshna Singh, MD</h3>
							</a><a href="/consultants/catherine-monk-phd/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/03/monk.jpg);"></div>
								<h3 class="mt-px pt-px">Catherine Monk, PhD</h3>
							</a><a href="/consultants/elizabeth-murphy-fitelson-md/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/03/Fitelson-1.jpg);"></div>
								<h3 class="mt-px pt-px">Elizabeth Murphy Fitelson, MD</h3>
							</a><a href="/consultants/natalie-rasgon-md-phd/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/03/Natalie-Rasgon.jpg);"></div>
								<h3 class="mt-px pt-px">Natalie Rasgon, MD, PhD</h3>
							</a><a href="/consultants/jeffery-ilyer/" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(https://projectteachny.org/app/uploads/2022/03/Jeffery-Ilyer-1.jpg);"></div>
								<h3 class="mt-px pt-px">Jeffery Iler , MD</h3>
							</a>
						</div>
						<div class="bg-purple-200 mt-4 md:mt-0 p-4 md:mb-8">
							<h3 class="font-gotham-bold text-xl leading-tight mb-2 mt-0">
								Virtual Live Training </h3>
							<p class="mb-4 pl-2 md:pl-6 font-gotham-light text-base md:text-lg leading-normal">This intensive training program will enhance a primary care providers’ skills to assess, treat and manage mental health concerns in perinatal patients. This interactive program will provide helpful tools and treatment strategies for ob/gyn’s, family practice, pediatric and psychiatric clinicians to utilize with their practice. This intensive training program includes the half day training and three follow-up sessions and is presented by Project TEACH’s team of reproductive psychiatrists.</p>
							<p class="mb-4 pl-2 md:pl-6 font-gotham-light text-base md:text-lg leading-normal">Project TEACH is funded by the New York State Office of Mental Health and all services and events, such as this intensive training, are offered at no-cost to clinicians in New York State.</p>

							<h3 class="font-gotham-bold text-xl leading-tight mb-2 mt-0">
								Course Descriptions </h3>
							<ul class="ml-0 md:ml-4 mb-4 pl-6 list-disc">
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Epidemiology of Perinatal Mood and Anxiety Disorders (PMADS)</li>
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Psychiatric Assessment and Diagnosis</li>
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Screening for PMADs and Assessing Suicide Risk</li>
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Non-Pharmacologic and Antidepressant Treatment for PMADs (pregnancy and lactation)</li>
							</ul>

							<h3 class="font-gotham-bold text-xl leading-tight mb-2 mt-0">
								Learning Objectives </h3>
							<p class="pl-2 md:pl-6 mb-2 font-gotham-light text-base md:text-lg leading-normal">At the conclusion of this program, learners will be able to/have:</p>
							<ul class="ml-0 md:ml-4 mb-4 pl-6 list-disc">
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Increased knowledge of perinatal mood and anxiety disorder assessment tools which will enable them to improve differential diagnosis in perinatal women.</li>
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Utilize evidence-based screening instruments to determine psychiatric/suicide risk which will enable them to improve their ability to treat and/or refer to specialized behavioral healthcare.</li>
								<li class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Up to date, evidence-based information about when, what, why, and how to use medications in the perinatal population.</li>
							</ul>

							<h3 class="font-gotham-bold text-xl leading-tight mb-2 mt-0">
								Target Audience </h3>
							<p class="pl-2 md:pl-6 mb-2 font-gotham-light text-base md:text-lg leading-normal">New York State primary care and family practice physicians, obstetricians/gynecologists, pediatricians and psychiatrists; as well as, psychologists, nursing professionals, social workers, residents, and mental health clinicians working with primary care, pediatric or ob/gyn practices.</p>

						</div>
						<div class="bg-purple-200 p-4 mb-0">
							<h3 class="font-gotham-bold text-xl leading-tight mt-0">
								Intensive Training Follow-Up Session Dates: </h3>
							<!-- start -->
							<p class="mb-2 font-gotham-light text-base md:text-lg leading-normal">Attendees of the half-day intensive training are eligible and encouraged to participate in three follow-up learning sessions with Project TEACH reproductive psychiatrists, at no charge, on a Zoom interactive call. You will have the opportunity to present cases, ask questions, and get direct feedback from faculty.</p>
							<!-- Follow up page Link -->
							<div class="flex justify-end mb-4">
							</div>
							<!-- Schedule Time Title Call Out -->
							<p class="mb-2 font-gotham-bold mt-16 mb-8 lg:mb-4 lg:mt-0 text-lg leading-normal">
								All Follow Up Sessions take place from 12:00PM - 1:00PM </p>
							<ul class="mb-8 lg:pl-4 list-none">
							</ul>
						</div>
						<div class="flex flex-col items-center md:flex-row justify-center mt-8">
							<!-- Register Button -->
							<a href="" class="pointer-events-none text-white border-2 mb-2 md:mb-0 md:mr-4 border-cool-gray border-solid hover:text-cool-gray hover:bg-transparent transition-all leading-normal duration-300 inline-block rounded-full py-2 text-base px-4 bg-cool-gray no-underline">
								Register Soon</a>
							<!-- Schedule Button -->
							<a href="https://projectteachny.org/app/uploads/2022/06/MMH-fall-intensive-training-schedule-081622-1.pdf" class="text-purple border-2 md:mr-4 border-purple border-solid hover:text-white hover:bg-purple transition-all duration-300 inline-block rounded-full py-2 text-base px-4 bg-transparent no-underline flex">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
								</svg>
								<span class="mt-px pt-px">Sample Training Agenda</span>
							</a>
							<!-- PDF Button	 -->
						</div>
				<?php endif;
				endif;
				?>
			</div>
			<!-- Purple Block -->
			<?php if (have_rows('text_content')) : ?>
				<div class="bg-purple-200 mt-4 md:mt-0 md:m-4 p-4 md:mb-8">
					<?php while (have_rows('text_content')) : the_row(); ?>
						<h3 class="font-gotham-bold text-xl leading-tight mb-2 mt-0">
							<?php the_sub_field('title'); ?>
						</h3>
						<?php the_sub_field('text'); ?>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<!-- Follow-Up Block -->
			<?php if (have_rows('follow_ups')) : ?>
				<div class="bg-purple-200 md:m-4 p-4 mb-0">
					<h3 class="font-gotham-bold text-xl leading-tight mt-0">
						<?php the_field('follow_up_title'); ?>
					</h3>
					<!-- start -->
					<?php
					$follow_up_ids = [];
					$follow_up_dates = [];
					$follow_up_content = '';
					while (have_rows('follow_ups')) : the_row();
						$featured_post = get_sub_field('follow_up');
						if ($featured_post) :
							array_push($follow_up_ids, $featured_post);
						endif;
					endwhile;
					//WP_QUERY
					$args = array(
						'post_type' => 'events',
						'post__in'      => $follow_up_ids,
						'meta_key' => 'start_date',
						'orderby' => 'meta_value',
						'order' => 'ASC',
						'meta_query' => array(
							array(
								'key' => 'start_date',
								'value' => date('Ymd'),
								'compare' => '>=',
							)
						)
					);
					$query = new WP_Query($args);
					// The Loop
					if ($query->have_posts()) :
						$count = 1;
						$total = $query->found_posts; ?>
						<p class="text-purple text-base leading-snug md:leading-normal md:text-lg font-gotham-bold mb-6">
							<?php while ($query->have_posts()) : $query->the_post();
								// echo $count;
								$date_string = get_field('start_date');
								$date = DateTime::createFromFormat('Ymd', $date_string); ?>
								<?php if ($count !== $total) : ?>
									<?php echo $date->format('F j'); ?>,
								<?php else : ?>
									<?php echo $date->format('F j'); ?>
								<?php endif; ?>
								<?php $count++; ?>
							<?php endwhile; ?>
						</p>
					<?php endif;
					// Restore original Post Data
					wp_reset_postdata();	?>
					<?php the_field('follow_up_text'); ?>
					<!-- Follow up page Link -->
					<div class="flex justify-end mb-4">
						<?php $link = get_field('follow_up_link');
						if ($link && get_field("registration_link")) :
							$link_url = $link['url'];
							if ($registration_link) {
								$follow_up_btn_text = $link['title'];
							}
							$link_target = $link['target'] ? $link['target'] : '_self';
						?>
							<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="<?php echo $btn_clickable; ?> text-white border-2 border-<?php echo $follow_up_btn_color; ?> border-solid hover:text-<?php echo $follow_up_btn_color; ?> hover:bg-transparent transition-all leading-normal duration-300 inline-block rounded-full py-2 text-base px-4 bg-<?php echo $follow_up_btn_color; ?> no-underline">
								<?php echo esc_html($follow_up_btn_text); ?>
							</a>
						<?php endif; ?>
					</div>
					<!-- Schedule Time Title Call Out -->
					<p class="mb-2 font-gotham-bold mt-16 mb-8 lg:mb-4 lg:mt-0 text-lg leading-normal">
						<?php the_field('follow_up_schedule_title'); ?>
					</p>
					<ul class="mb-8 lg:pl-4 list-none">
						<?php
						if (have_rows('follow_ups')) :
							$follow_up_ids = [];
							$follow_up_dates = [];
							$follow_up_content = '';
							while (have_rows('follow_ups')) : the_row();
								$featured_post = get_sub_field('follow_up');

								if ($featured_post) :
									array_push($follow_up_ids, $featured_post);
								endif;
							endwhile;
							//WP_QUERY
							$args = array(
								'post_type' => 'events',
								'post__in'      => $follow_up_ids,
								'meta_key' => 'start_date',
								'orderby' => 'meta_value',
								'order' => 'ASC',
								'meta_query' => array(
									array(
										'key' => 'start_date',
										'value' => date('Ymd'),
										'compare' => '>=',
									)
								)
							);
							$query = new WP_Query($args);
							// The Loop
							if ($query->have_posts()) :
								while ($query->have_posts()) : $query->the_post();
									$date_string = get_field('start_date');
									$date = DateTime::createFromFormat('Ymd', $date_string); ?>

									<li class="text-lg leading-normal">
										<span class="font-gotham-bold block"><?php the_title(); ?></span>
										<div class="flex mb-2 pr-4 items-end">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
											</svg>
											<p class="leading-none text-lg font-gotham-bold text-purple">
												<?php echo $date->format('F j'); ?>
											</p>
										</div>
										<!-- Follow Up Presenters -->
										<div class="flex flex-wrap">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path class="text-purple stroke-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
											</svg>
											<?php if (get_field('group_of_presenters') && have_rows('group_presenters')) :
												while (have_rows('group_presenters')) : the_row();
													$featured_post = get_sub_field('presenter');
													echo '<a href="/consultants/' . $featured_post->post_name . '/" class="inline-flex leading-none mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">';
													if (get_field('image', $featured_post->ID)) {
														$featured_image = get_field('image', $featured_post->ID);
														echo '<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(' . $featured_image['url'] . ');"></div>';
													}
													if ($featured_post) :
														echo '<h3 class="mt-px pt-px text-base">' . esc_html($featured_post->post_title) . '</h3>';
													endif;
													echo '</a>';
												endwhile;
											endif; ?>
										</div>
										<p class="mr-4">
											<?php the_field('learning_objectives'); ?>
										</p>
										<div class="mr-4 my-4">
											<div class="w-full h-px bg-purple"></div>
										</div>
									</li>

						<?php endwhile;
							else :
							// no posts found
							endif;

							// Restore original Post Data
							wp_reset_postdata();

						endif;
						?>
					</ul>
				</div>
			<?php endif; ?>
			<!-- end -->
			<!-- Buttons -->
			<?php if (false) : ?>
				<div class="flex flex-col items-center md:flex-row justify-center mt-8">
					<!-- Register Button -->
					<a href="<?php the_field("registration_link"); ?>" class="<?php echo $btn_clickable; ?> text-white border-2 mb-2 md:mb-0 md:mr-4 border-<?php echo $registration_btn_color; ?> border-solid hover:text-<?php echo $registration_btn_color; ?> hover:bg-transparent transition-all leading-normal duration-300 inline-block rounded-full py-2 text-base px-4 bg-<?php echo $registration_btn_color; ?> no-underline">
						<?php echo $btn_text; ?>
					</a>
					<!-- Schedule Button -->
					<?php $sched = get_field('schedule_print');
					if ($sched) :
						$sched_url = $sched['url'];
						$sched_title = $sched['title'];
					?>
						<a href="<?php echo esc_url($sched_url); ?>" class="text-purple border-2 md:mr-4 border-purple border-solid hover:text-white hover:bg-purple transition-all duration-300 inline-block rounded-full py-2 text-base px-4 bg-transparent no-underline flex">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
							</svg>
							<span class="mt-px pt-px">Intensive Training Agenda</span>
						</a>
					<?php endif; ?>
					<!-- PDF Button	 -->
					<?php $link = get_field('pdf_print');
					if ($link) :
						$link_url = $link['url'];
						$link_title = $link['title'];
					?>
						<a href="<?php echo esc_url($link_url); ?>" class="text-purple border-2 border-purple border-solid hover:text-white hover:bg-purple transition-all duration-300 inline-block rounded-full py-2 text-base px-4 bg-transparent no-underline flex">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-px" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
							</svg>
							<span class="mt-px pt-px">Maternal Services Flyer</span>
						</a>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<!-- Accreditation -->
	<?php if (get_the_id() === 7771) : ?>
		<div class="px-4 md:px-0">
			<h3 class="font-gotham-bold text-lg mt-6 mb-4 leading-tight">
				Spring 2023 Statewide Intensive Training Child and Adolescent Mental Health for Primary Care Clinicians <br>is at no cost to New York State Pediatric Primary Care Providers. </h3>
			<div class="flex flex-col md:flex-row mb-4">
				<div class="cred-info flex-1 md:mr-2 mb-4 md:mb-0">
					<p class="text-base font-gotham-bold">Intensive Training Accreditation:</p>
					<p data-renderer-start-pos="1240"><strong data-renderer-mark="true">ACCREDITATION:&nbsp;</strong>The University at Buffalo Jacobs School of Medicine and Biomedical Sciences is accredited by the ACCME to provide continuing medical education for physicians.</p>
					<p data-renderer-start-pos="1415"><strong data-renderer-mark="true">CERTIFICATION:&nbsp;</strong>The University at Buffalo Jacobs School of Medicine and Biomedical Sciences designates this internet live activity for a maximum of <strong data-renderer-mark="true">9.0</strong> <em data-renderer-mark="true"><strong data-renderer-mark="true">AMA PRA Category 1 Credit(s)<sup>TM</sup></strong></em><strong data-renderer-mark="true">.</strong> &nbsp;Physicians should claim only the credit commensurate with the extent of their participation in the activity.</p>
					<p data-renderer-start-pos="538">**The UB CME Office will provide UB CME Certificates of Attendance to allied healthcare professionals or non-physicians, who have attended a UB CME certified and accredited educational activity. The allied healthcare professional is responsible for submitting the UB CME certificate to their own governing body for credit. Most allied healthcare professional boards accept Physician credits.</p>
				</div>
				<div class="cred-info flex-1 md:ml-2 mb-4 md:mb-0">
					<p class="text-base font-gotham-bold">Follow-Up Session Accreditation:</p>
					<p data-renderer-start-pos="1746"><strong data-renderer-mark="true">ACCREDITATION:&nbsp;</strong>The University at Buffalo Jacobs School of Medicine and Biomedical Sciences is accredited by the ACCME to provide continuing medical education for physicians.</p>
					<p data-renderer-start-pos="1921"><strong data-renderer-mark="true">CERTIFICATION:&nbsp;</strong>The University at Buffalo Jacobs School of Medicine and Biomedical Sciences designates this internet live activity for a maximum of <strong data-renderer-mark="true">6.0</strong> <em data-renderer-mark="true"><strong data-renderer-mark="true">AMA PRA Category 1 Credit(s)<sup>TM</sup></strong></em><strong data-renderer-mark="true">.</strong> &nbsp;Physicians should claim only the credit commensurate with the extent of their participation in the activity.</p>
					<p data-renderer-start-pos="1437">**The UB CME Office will provide UB CME Certificates of Attendance to allied healthcare professionals or non-physicians, who have attended a UB CME certified and accredited educational activity. The allied healthcare professional is responsible for submitting the UB CME certificate to their own governing body for credit. Most allied healthcare professional boards accept Physician credits.</p>
				</div>
			</div>
			<p class="text-base leading-snug"><strong>Credit Claim:</strong> All registrants will receive online instructions on how to access the Project TEACH Learning Management System to receive CME credits and complete the evaluation form.</p>
		</div>
	<?php elseif (7767) : ?>
		<div class="px-4 md:px-0">
			<h3 class="font-gotham-bold text-lg mt-6 mb-4 leading-tight">
				Statewide Intensive Training Child and Adolescent Mental Health for Primary Care Clinicians <br>is at no cost to New York State Pediatric Primary Care Providers. </h3>
			<div class="flex flex-col md:flex-row mb-4">
				<div class="cred-info flex-1 md:mr-2 mb-4 md:mb-0">
					<p class="text-base font-gotham-bold">Intensive Training Accreditation:</p>
					<p data-renderer-start-pos="1240"><strong data-renderer-mark="true">ACCREDITATION:&nbsp;</strong>The University at Buffalo Jacobs School of Medicine and Biomedical Sciences is accredited by the ACCME to provide continuing medical education for physicians.</p>
					<p data-renderer-start-pos="1415"><strong data-renderer-mark="true">CERTIFICATION:&nbsp;</strong>The University at Buffalo Jacobs School of Medicine and Biomedical Sciences designates this internet live activity for a maximum of <strong data-renderer-mark="true">3.0</strong> <em data-renderer-mark="true"><strong data-renderer-mark="true">AMA PRA Category 1 Credit(s)<sup>TM</sup></strong></em><strong data-renderer-mark="true">.</strong> &nbsp;Physicians should claim only the credit commensurate with the extent of their participation in the activity.</p>
					<p data-renderer-start-pos="538">**The UB CME Office will provide UB CME Certificates of Attendance to allied healthcare professionals or non-physicians, who have attended a UB CME certified and accredited educational activity. The allied healthcare professional is responsible for submitting the UB CME certificate to their own governing body for credit. Most allied healthcare professional boards accept Physician credits.</p>
				</div>
				<div class="cred-info flex-1 md:ml-2 mb-4 md:mb-0">
					<p class="text-base font-gotham-bold">Follow-Up Session Accreditation:</p>
					<p data-renderer-start-pos="1746"><strong data-renderer-mark="true">ACCREDITATION:&nbsp;</strong>The University at Buffalo Jacobs School of Medicine and Biomedical Sciences is accredited by the ACCME to provide continuing medical education for physicians.</p>
					<p data-renderer-start-pos="1921"><strong data-renderer-mark="true">CERTIFICATION:&nbsp;</strong>The University at Buffalo Jacobs School of Medicine and Biomedical Sciences designates this internet live activity for a maximum of <strong data-renderer-mark="true">3.0</strong> <em data-renderer-mark="true"><strong data-renderer-mark="true">AMA PRA Category 1 Credit(s)<sup>TM</sup></strong></em><strong data-renderer-mark="true">.</strong> &nbsp;Physicians should claim only the credit commensurate with the extent of their participation in the activity.</p>
					<p data-renderer-start-pos="1437">**The UB CME Office will provide UB CME Certificates of Attendance to allied healthcare professionals or non-physicians, who have attended a UB CME certified and accredited educational activity. The allied healthcare professional is responsible for submitting the UB CME certificate to their own governing body for credit. Most allied healthcare professional boards accept Physician credits.</p>
				</div>
			</div>
			<p class="text-base leading-snug"><strong>Credit Claim:</strong> All registrants will receive online instructions on how to access the Project TEACH Learning Management System to receive CME credits and complete the evaluation form.</p>
		</div>
	<?php else : ?>
		<div class="px-4 md:px-0">
			<h3 class="font-gotham-bold text-lg mt-6 mb-4 leading-tight">
				<?php the_field('top_accreditation'); ?>
			</h3>
			<div class="flex flex-col md:flex-row mb-4">
				<?php if (get_field('accred_col_1')) : ?>
					<div class="cred-info flex-1 md:mr-2 mb-4 md:mb-0">
						<p class="text-base font-gotham-bold">Intensive Training Accreditation:</p>
						<?php the_field('accred_col_1'); ?>
					</div>
				<?php endif; ?>
				<?php if (get_field('accred_col_2')) : ?>
					<div class="cred-info flex-1 md:ml-2 mb-4 md:mb-0">
						<p class="text-base font-gotham-bold">Follow-Up Session Accreditation:</p>
						<?php the_field('accred_col_2'); ?>
					</div>
				<?php endif; ?>
			</div>
			<?php if (get_field('accred_col_1') || get_field('accred_col_2')) : ?>
				<p class="text-base leading-snug"><strong>Credit Claim:</strong> All registrants will receive online instructions on how to access the Project TEACH Learning Management System to receive CME credits and complete the evaluation form.</p>
			<?php endif; ?>
		</div>
	<?php endif; ?>


</section>