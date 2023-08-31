<?php
// $dev = 7307;
// $live = 7546;
get_header();
$count = 0;
?>

<div class="py-16 bg-white">
	<div class="relative flex flex-col md:flex-row items-center max-w-screen-xl mx-auto">
		<div class="w-full order-1 md:order-1 md:w-1/2 pr-8">
			<p class="text-2xl md:text-5xl leading-[3rem] mb-2 font-gotham-bold text-orange">
				On-Demand, CME-Certified Education
			</p>
			<p class="font-gotham-light leading-7 mb-4 text-lg">
				Access past Project TEACH training programs on Maternal and Children's Mental Health topics
				to earn CME and enhance your ability to care for those you serve.
			</p>
		</div>
		<div class="w-full order-0 md:order-1 md:w-1/2">
			<div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3] shadow-xl">
				<img class="h-full w-full object-cover" src="https://project-teach.launchpaddev.com/app/uploads/2020/10/Untitled-2.jpg">
			</div>
		</div>
	</div>
</div>



<div class="py-16">
	<div class="max-w-screen-xl mx-auto text-center">
		<p class="font-gotham-light leading-7 mb-4 text-lg">
			Clicking on a program will take you to the event in the Project TEACH Learning Management System (LMS).
			<!-- Access program content on the Project TEACH LMS by clicking the listings below. -->
		</p>
		<p class="font-gotham-light leading-7 text-lg">
			<a class="inline font-gotham text-orange transition-all duration-300 hover:text-black" href="https://lms.projectteachny.org/user/register" target="_blank" nofollow="nofollow">
				Create an account
			</a>
			or
			<a class="inline font-gotham text-orange transition-all duration-300 hover:text-black" href="https://lms.projectteachny.org/user/login" target="_blank" nofollow="nofollow">
				login
			</a>
			to view event videos, handouts and CME credit claim.
		</p>
	</div>
</div>

<div id="main-content" class="max-w-screen-xl mx-auto">
	<div class="max-w-divi mx-auto w-9/10">
		<div class="grid grid-cols-10 gap-8">
			<div class="col-span-full lg:col-span-2">
				<div class="pb-4 border-b border-solid border-tealbrand"><span class="text-bluebrand"><strong>Courses found:</strong> <span data-postcount></span></span></div>
				<?php echo do_shortcode('[post_grid_search_form_7307 id="7307"]'); ?>
			</div>
			<div class="col-span-full lg:col-span-8">
				<?php
				echo do_shortcode('[post_grid id="7307"]');
				?>
			</div>
		</div>
	</div>
</div>

<?php

get_footer();

?>