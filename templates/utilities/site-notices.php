<?php
$banner_title = get_field('title', 'options');
$banner_text = get_field('text', 'options');
?>
<div x-data="{showing = true}" :class="showing=false ? 'hidden' : ''" class="flex items-center gap-x-6 bg-purple px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
	<p class="text-sm leading-6 text-white">
		<a class="flex flex-wrap items-center" href="#">
			<strong class="font-gotham-medium"><?php echo $banner_title; ?></strong>
			<svg viewBox="0 0 2 2" class="hidden md:inline mx-2 h-0.5 w-0.5 fill-current" aria-hidden="true">
				<circle cx="1" cy="1" r="1" />
			</svg>
			<span class="hidden md:inline font-gotham"><?php echo $banner_text; ?></span>
			<span class="hidden md:inline font-gotham" aria-hidden="true">&rarr;</span>
		</a>
	</p>
	<div class="flex flex-1 justify-end">
		<button @on-click="showing=false" type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
			<span class="sr-only">Dismiss</span>
			<svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
				<path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
			</svg>
		</button>
	</div>
</div>