    <div class="aside w-full md:w-96">

        <?php
            //get 6 most recent posts
		    $args = array( 
			    'post_type' 	 => 'post', 
			    'posts_per_page' => 5,
			    'post__not_in'   => array(get_the_ID())
		    );
            $sidebar_posts = new WP_Query($args);
		    //Display Recent Posts
		    if($sidebar_posts->have_posts()) : ?>
                <?php $counter = 0; ?>
                <div class="bg-white">
                    <h3 class="bg-green-200 text-green p-4 text-lg font-gotham-bold">Recent Posts</h3>
                    <ul class="py-2">
					    <?php while($sidebar_posts->have_posts()) : $sidebar_posts->the_post(); ?>
                            <li class="p-2 pl-4">
                                <div class="flex mb-2">                                    
                                    <div class="text-sm" href="#">
                                        <?php 
                                            $categories = get_the_category();
                                            if ( ! empty( $categories ) ) :
                                                foreach( $categories as $category ) :
                                                    $cat_id = $category->cat_ID;
                                                    $color = get_field('category_color', 'category_'. $cat_id .'');?>
                                                        <a class="font-gotham" style="color:<?php echo $color; ?>;" href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
                                                    <?php 
                                                // endif; ?>
                                                <?php endforeach; ?>
                                            <?php endif; 
                                        ?>
							        </div>
                                    <!-- <span class="text-sm ml-auto opacity-25"><?php the_time('m/j/y'); ?></span> -->
							    </div>
                                <a class="font-gotham-bold opacity-75 hover:opacity-100 transition-all duration-300" href="<?php echo the_permalink();?>"><?php the_title() ?></a>
						    </li>
                            <?php if ($args['posts_per_page'] > $counter + 1) : ?>
                                <li class="py-2">
                                    <hr class="text-light-gray">
                                </li>
                            <?php endif; ?>
                            <?php $counter++; ?>
					    <?php endwhile; ?>                        			
                    </ul>
                </div>

		    <?php endif; 
        ?>

        <div class="mt-6 bg-white">
                <h3 class="bg-blue-200 text-blue p-4 text-lg font-gotham-bold">Posts By Categories</h3>
                <ul class="sidebar__list">
                    <?php foreach (get_categories( $args ) as $cat) : ?>
                        <!-- Don't display "Special Topics" -->
                        <?php if ( $cat->slug !==  'uncategorized'): ?>
                            <li class="sidebar__list-item">

                                <?php if (get_category_link($cat->term_id) === "https://projectteachny.org/category/special-topics/covid-19/" || get_category_link($cat->term_id) === "http://project-teach.launchpaddev.com/category/special-topics/covid-19/"):
                                    $categoryLink = '/covid';
                                else:
                                    $categoryLink = get_category_link($cat->term_id);
                                endif;?>

                                <div class="h-px w-full bg-blue-200"></div>
                			    <a href="<?php echo $categoryLink; ?>" class="block text-lg border-l-0 hover:border-l-8 border-l-blue border-solid transition-all duration-300 font-gotham-light p-4 text-blue">
							    	<?php echo $cat->cat_name; ?>
			  				    </a>
                            </li>
                        <?php endif;?>
                    <?php endforeach; ?>
                </ul>
        </div>


    </div>