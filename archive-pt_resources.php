<?php
get_header();
$count = 0;
?>

<div id="main-content" class="max-w-screen-xl mx-auto py-16">
	<div class="max-w-divi mx-auto w-9/10">
		<div class="grid grid-cols-10 gap-8">
			<div class="col-span-full lg:col-span-2">
				<div class="pb-4 border-b border-solid border-tealbrand"><span class="text-bluebrand"><strong>Resources found:</strong> <span data-postcount></span></span></div>
				<?php echo do_shortcode('[post_grid_search_form_7776 id="7776"]'); ?>
			</div>
			<div class="col-span-full lg:col-span-8">
				<?php
				echo do_shortcode('[post_grid id="7776"]');
				?>
			</div>
		</div>
	</div>
</div>

<?php

get_footer();

?>