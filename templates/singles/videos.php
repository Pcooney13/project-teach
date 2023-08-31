<?php 
	$video_link = get_field('video_link'); 
	$description = get_field('description'); 
?>

<style>
	.heateor_sss_sharing_ul > a {
		transition: all .3s;
	}
	.heateor_sss_sharing_ul > a:hover {
		opacity:.5;
	}
	.heateor_sss_sharing_ul > a:first-child {
		display:none!important;
	}
</style>

	<?php 
	$url = get_field('video');
	if ($url): 
		if (get_field('video_type') == 'vimeo'):
			$videoURL = '//player.vimeo.com/video/' . $url . '?title=0&amp;byline=0&amp;portrait=0&amp;transparent=0';
			$videoImage = 'https://vumbnail.com/' . $url . '.jpg';
		else:
			$videoURL = '//www.youtube.com/embed/' . $url;
			$videoImage = 'https://img.youtube.com/vi/' . $url . '/0.jpg';
		endif;
	else:
		$videoURL = '//www.youtube.com/embed/' . $url;
		$videoImage = 'https://via.placeholder.com/640x480/039fda/ffffff?text=Project TEACH';
	endif; 
	?>
	<div class="bg-transparent md:bg-white flex-1">
		<div class="mx-4 md:mx-0">
			<div class="embed-responsive">
				<iframe src="<?php echo $videoURL; ?>"></iframe>
			</div>
		</div>
		<div class="p-4">
			<div class="flex items-center justify-end mb-2">
				<span class="font-gotham-light text-sm mr-2">SHARE</span>
				<?php echo do_shortcode('[Sassy_Social_Share]'); ?>
			</div>
			<!-- Title -->
			<h3 class="font-gotham-bold text-xl leading-6 mb-4 lg:pr-4">
				<?php the_title(); ?>
			</h3>
			<!-- Description -->
			<?php if ($description) : ?>
				<p class="text-base font-gotham-light mb-4 leading-normal"><?php echo $description; ?></p>
			<?php endif; ?>
			<!-- Presenters -->
			<?php if (get_field('presenters')) : ?>	
				<h3 class="font-gotham-bold text-base leading-6 mb-2 lg:pr-4">Presenters:</h3>		
				<div class="ml-4 mb-4">
					<?php while( have_rows('presenters') ) : the_row();
						$featured_posts = get_sub_field('presenter');
						if( $featured_posts ): ?>
							<a href="<?php echo the_permalink($featured_posts); ?>" class="inline-flex mr-4 bg-off-white pr-2 rounded-full mb-2 transition-all duration-300 hover:text-blue">
								<div class="w-5 h-5 mr-1 rounded-full bg-cover bg-center" style="background-image:url(<?php echo get_the_post_thumbnail_url( $featured_posts ); ?>);"></div>
								<h3 class="mt-px pt-px"><?php the_field('name', $featured_posts);?></h3>
							</a>
						<?php endif;
					endwhile; ?>
				</div>
			<?php endif; ?>
			<?php if (get_field('materials')) : ?>	
				<h3 class="font-gotham-bold text-base leading-6 mb-2 lg:pr-4">Additional Materials:</h3>
				<div class="ml-4 mb-4">
					<?php while( have_rows('materials') ) : the_row();
						$link = get_sub_field('material');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = get_sub_field('text');
						    ?>
						    <a class="underline text-blue transition-all duration-300 hover:text-black" href="<?php echo esc_url( $link_url ); ?>" target="_blank"><?php echo esc_html( $link_title ); ?></a>
						<?php endif;
					endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>