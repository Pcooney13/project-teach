<?php require_once(dirname(__FILE__).'/header.php'); ?>

<div class="banner banner--blog" style="background-image: linear-gradient(rgba(58, 14, 121, .5), rgba(58, 14, 121, .9)), url('https://projectteachny.org/wp-content/uploads/2021/02/Untitled.jpg')">
	<div class="wrap wrap--banner">
		<h1 class="banner__title">Search Results</h1>
	</div>
</div>

<?php require(dirname(__FILE__)."/breadcrumbs.php"); ?>

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

				    <h2 style='font-weight:20px;font-weight:bold;color:#000'>Nothing Found</h2>
				    <div class="alert alert-info">
				        <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
				    </div>

				<?php endif; ?>

			</div>
		</div>
	</div>
</div>
<?php require_once(dirname(__FILE__).'/footer.php'); ?>
