<?php
	get_header();

	echo '<div style="min-height: 300px;padding-top: 200px;">';
		$course = new Course();
		$course->lp_create_ethos_posts();
		$course->lp_prune_ethos_post();
	echo '</div>';
	
	get_footer();
?>