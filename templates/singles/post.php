<?php
	if (have_posts()):
		while (have_posts()) : the_post(); 
			$categories = get_the_category();
            if (! empty($categories)) :
                foreach ($categories as $category) :
                    $cat_id = $category->cat_ID; //ID
					if ($category->slug === 'newsletters') {
						$content_category = 'post__content--newsletter'; 
					} else {
						$content_category = 'post__content--featured'; 
					}
					if ($category->slug === 'intensive-training') {
						$intensive_training_template = true;
					}
                endforeach;
			endif;
			if (! empty($intensive_training_template)) :
                get_template_part("templates/content", "intensive-training");			
            else: ?>
				<div class="flex-1">
					<section id="post__featured">
						<article id="post-<?php the_ID(); ?>" class="post post--featured mx-4 md:mx-0">
							<!-- Share Buttons -->
							<?php if( get_field('aap_newsletter') !== true ) : ?>
								<div class="flex items-center mb-2 pb-4 pt-0 hidden md:flex">									
									<div class="share__content" style="margin-left:auto;">
										<span class="share__text">SHARE</span>
										<?php echo do_shortcode('[Sassy_Social_Share]'); ?>
									</div>
								</div>
							<?php endif; ?>
							<!-- Title -->
							<?php if( get_field('aap_newsletter') === true ) : ?>
								<!-- <h3 class="font-bold text-lg md:text-2xl mb-4"><?php the_title(); ?></h3> -->
							<?php else: ?>
								<h3 class="post__title post__title--featured"><?php the_title(); ?></h3>
							<?php endif; ?>									
							<!-- Post Image & Date -->
							<?php if (get_the_post_thumbnail()):?>
                    		<div class="post__image post__image--featured" 
                        		style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 59%, rgba(0, 0, 0, 0.65) 100%), 
                        		url('<?php the_post_thumbnail_url(); ?>');">
								<img class="h-1 w-1 opacity-0" src="<?php the_post_thumbnail_url(); ?>">
							</div>
							<?php endif; ?>	
							<!-- Author Info -->
							<?php if (have_rows('authors')): ?>
								<div class="flex flex-wrap mt-4 -mb-4 lg:mb-0">
									<?php while (have_rows('authors')): the_row();
										// Author Variables
										$post_object = get_sub_field('author'); 
										$post = $post_object;
										setup_postdata($post);
											$author_image = get_field('image');
											$author_blurb = get_field('blurb');
											$author_affliation = get_field('affliation');
											$author = get_field('name');
											$author_content = get_the_content();
											$author_page = get_permalink(); ?>
											<a class="flex items-center mr-4 mb-4" href="<?php echo $author_page;?>">
												<?php if (!empty($author_image)) : ?>
                        						<img class="author__image author__image--featured" src="<?php echo $author_image['url']; ?>" alt="<?php echo $author_image['alt']; ?>"/>
												<?php endif; ?>                            		
												<p style="line-height:1;" class="author__name author__name--featured"><?php echo $author; ?><br>
												<span style="padding:0; margin-top:-5px; font-weight: 500; font-size: 15px; color: #aaa;" class="hidden md:inline mmh-standard"><?php echo $author_affliation; ?></span></p>
											</a>
											<?php wp_reset_postdata(); ?>
									<?php endwhile;?>
								</div>
							<?php endif;?>								
							<!-- Post Content & Video -->
							<?php if( get_field('aap_newsletter') === true ) :
								get_template_part("templates/content", "aap-newsletter"); ?>
							<?php else : ?>
                    			<div class="<?php echo $content_category; ?>">									
                        			<?php if (get_field('featured_video')):?>
										<div class='video'><iframe src='<?php the_field('video');?>' frameborder='0' allowfullscreen></iframe></div>
									<?php endif;?>
									<?php if (get_the_content()) :
										the_content();
									endif;?>
                    			</div>
							<?php endif; ?>
                		</article>
            		</section>

					<?php if (have_rows('authors')): ?>
						<section id="about-author" class="mx-4 mx-0">
							<?php $author_count = count(get_field('authors')); ?>
							<h3>About The Author<?php if ($author_count > 1) echo 's'; ?></h3>
							<?php while (have_rows('authors')): the_row();
								// Author Variables
								$post_object = get_sub_field('author'); 
								global $post;
								$post = $post_object;
								setup_postdata($post);
									$author_image = get_field('image');
									$author_blurb = get_field('blurb');
									$author = get_field('name');
									$author_content = get_the_content();
									$author_page = get_permalink();
								?>
								<div class="author author--about">
									<a href="<?php echo $author_page; ?>">
                    				<img src="<?php echo $author_image['url']; ?>" alt="<?php echo $author_image['alt']; ?>"
                    				class="author__image author__image--about"></a>
                    				<div class="author__content">
										<a href="<?php echo $author_page; ?>" class="author__name author__name--about"><?php echo $author; ?></a> 
										<?php if ($author_blurb): ?>
											<div class="author__blurb">
												<?php echo $author_blurb; ?> 
											</div>
										<?php else: ?>
											<div class="author__blurb">
												<?php echo $author_content; ?>
											</div>
										<?php endif; ?>
                        				</p>
                    				</div>
								</div>
								<?php wp_reset_postdata(); ?>
							<?php endwhile;?>
						</section>
					<?php endif;?>
													
					<?php if(isset($category) && $category !== 'COVID-19') : ?>
						<section id="similar-posts">
							<h3>Similar Posts</h3>
							<?php 
							$sim_args = array(
								'post-type' => 'post',
								'posts_per_page' => 6,
								'post--not_in' => array(get_the_ID())
							);
							$sim_query = new WP_Query( $sim_args ); ?>					
							<?php while ( $sim_query->have_posts() ) : $sim_query->the_post(); ?>
								<? get_template_part("templates/blog/content", "post-list"); ?>
							<?php endwhile; ?>
						</section>	
					<?php endif;?>							

				</div>
            <?php endif; ?>

		<?php endwhile; ?>
	<?php endif; 
?>