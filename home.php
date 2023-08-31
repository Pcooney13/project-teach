<?php 
	// Newsletters
	get_header();
	include( locate_template( 'templates/banners/post-banner.php', false, false ) );
	require(dirname(__FILE__)."/breadcrumbs.php");
?>

	<div class="flex flex-col md:flex-row max-w-screen-xl mx-auto mb-20">
		
		<!-- Blog -->
		<div class="flex-1">
			<?php 
				if ( have_posts() ) : 
					while ( have_posts() ) : the_post(); 
						include( locate_template( 'templates/archives/post.php', false, false ) );
					endwhile;
					$args = array(
                		'prev_text' => __( 'Older Posts<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  												<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
											</svg>' ),
                		'next_text'  => __( '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  												<path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
											</svg>Newer Posts' ),
                	);
					the_posts_navigation($args);
				endif; 
			?>
		</div>
		<!-- Sidebar -->
		<?php 
			echo '<div class="ml-0 md:ml-8">';
				get_sidebar();
			echo '</div>';		
		?>

	</div>

<?php get_footer(); ?>