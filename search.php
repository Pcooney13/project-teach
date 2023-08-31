<?php 
	require_once(dirname(__FILE__).'/header.php'); 
	include( locate_template( 'templates/banners/post-banner.php', false, false ) );
	require(dirname(__FILE__)."/breadcrumbs.php"); 
?>

<div class="mx-auto max-w-screen-xl">
	<?php if ( have_posts() ) :
		while ( have_posts() ) : the_post(); 
			$post_type = get_post_type();
			if ($post_type === 'post') {
				$post_type = 'Newsletter';
			}
			$hero = get_field('hero_image', get_the_ID()); 
			$thumbnail = get_the_post_thumbnail_url();
			if ($hero) {
				$hero_image = $hero['url']; 
			} elseif ($thumbnail) {
				$hero_image = $thumbnail;
			} else {
				$hero_image = 'https://projectteachny.org/wp-content/uploads/2019/10/better-health-bg.jpg'; 
			}?>

			<div class="flex flex-col md:flex-row bg-white w-full mb-6 min-h-32 border-b border-solid border-off-white">
				<a class="overflow-hidden" href="https://project-teach.launchpaddev.com/covid-19-special-topics-medication-management-during-covid/">
        			<img class="w-full md:w-48 h-full object-cover transform transition-all duration-300 hover:scale-110" src="<?php echo $hero_image; ?>">
    			</a>
				<div class="mx-2 flex flex-col justify-center flex-1">					
					<!-- Categories -->
					<p class="text-blue text-sm leading-6 opacity-75 capitalize transition-all duration-300 hover:opacity-100"><?php echo $post_type; ?></p>
					<!-- Title  -->
					<a target="_blank" href="<?php the_permalink(); ?>">
						<h3 class="font-gotham-bold text-base leading-6 mb-1 lg:pr-4 transition-all duration-300 hover:text-purple">
							<?php the_title(); ?>
						</h3>
						<p class="search-excerpt text-sm font-gotham text-cool-gray leading-tight"><?php echo get_the_excerpt() ?></p>
					</a>
				</div>
			</div>

		<?php endwhile;
	endif; ?>


	<div style="background:#f2f2f2" class="flex flex-col pb-12">
		<div style="padding-top:20px;" class="privacy-policy-content">
			<div class="container">
				<div class="row">

					<?php if ( have_posts() ) : ?>		

						<?php _e("<h2 class='mb-4 pb-4 mmh__title'>Search Results for: ".get_query_var('s')."</h2>");  ?>
						<ul class="search_result_list">
							<?php while ( have_posts() ) : ?>
								<?php the_post();
								$posttype = get_post_type();
								if (get_field('image')) :
									$image = get_field('image');
								endif; ?>

								<li style="" class="flex p-4 bg-white mb-4 shadow-md">	
									<?php if (has_post_thumbnail()) : ?>
										<a class="post__image post__image--list" href="<?php the_permalink(); ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">
										</a>
									<?php elseif (!empty( $image )) : ?>
										<a class="post__image post__image--list" href="<?php the_permalink(); ?>" style="background-image:url('<?php echo esc_url($image['url']); ?>">
										</a>
									<?php endif; ?>
									<div class="flex-1">
										<?php if ($posttype == 'page') : ?>
											<p class="text-sm font-bold text-purple">PAGE</p>
										<?php elseif ($posttype == 'consultants') : ?>
											<p class="text-sm font-bold text-orange">PROJECT TEACH TEAM</p>
										<?php elseif ($posttype == 'post') : ?>
											<p class="text-sm font-bold text-blue">NEWS / ARTICLES</p>
										<?php elseif ($posttype == 'events') : ?>
											<p class="text-sm font-bold text-green">EVENTS</p>
										<?php endif;?>
										<a href="<?php the_permalink(); ?>">
											<span style="font-size:20px;" class="search-results">
												<?php the_title(); ?>
											</span>
										</a>
										<div class="search_results leading-tight">
											<?php the_excerpt() ?>
										</div>
									</div>
								</li>
							<?php 
								$image = null;
								endwhile; 
							?>
						</ul>

					<?php else: ?>

				    	<h2 class="text-center md:text-left text-xl font-gotham-bold">0 Results Found</h2>
				        <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>

					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once(dirname(__FILE__).'/footer.php'); ?>
