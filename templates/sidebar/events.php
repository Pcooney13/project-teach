<div class="aside w-full md:w-96">
    <div class="sidebars sidebars__sticky">        

		<?php
        //get 6 most recent posts
		$args = array( 
			'post_type' 	 => 'events', 
			'posts_per_page' => '5',
			'post__not_in'   => array(get_the_ID())
		);
        $sidebar_posts = new WP_Query($args);
		//Display Recent Posts
		if($sidebar_posts->have_posts() && 100 === 99) : ?>
            <section class="sidebar sidebar__recent">
                <h3 class="sidebar__header">Recent Added Events</h3>
                <ul class="sidebar__list">
					<?php while($sidebar_posts->have_posts()) : $sidebar_posts->the_post(); ?>
                        <li class="sidebar__list-item">

                            <?php 
                                $date_string = get_field('date');
                                $date = DateTime::createFromFormat('Ymd', $date_string);
                            ?>

                            <p class="post__date post__date--sidebar"><?php echo $date->format('M j, Y'); ?></p>
                            <div class="post__category post__category--sidebar" href="#">
                                <?php 
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) :
                                        foreach( $categories as $category ) :
                                            $cat_id = $category->cat_ID;
                                            $color = get_field('category_color', 'category_'. $cat_id .'');?>
                                                <a style="color:<?php echo $color; ?>;" href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
                                            <?php 
                                        // endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; 
                                ?>
                                
							</div>
                            <a class="post__title post__title--sidebar" href="<?php echo the_permalink();?>"><?php the_title() ?></a>
						</li>
					<?php endwhile; ?>                        			
                </ul>
			</section>
		<?php endif; ?>

        <section class="bg-white mb-6">
            <h3 class="bg-purple text-white font-gotham-bold p-4">Clinical Rating Scales</h3>
            <div style="background-image:url(https://projectteachny.org/wp-content/uploads/2021/04/admin-ajax-4.jpeg); background-position:center; background-size:cover; height:120px; opacity:.8;"></div>
            <div class="p-4">
                <p class="sidebar__text">Evidence-based questionnaires and rating scales in your primary care practice. They are free downloads in PDF format.</p>
                <div class="btn-wrap">                    
                    <a class="bg-purple text-white rounded-full py-4 mx-4 mt-4 border-solid border-2 border-purple hover:bg-transparent hover:text-purple font-gotham-bold transition-all duration-300 block text-center" href="/rating-scales">View Rating scales</a>
                </div>
            </div>
        </section>

        <section class="bg-white mb-6">
            <h3 class="bg-green text-white font-gotham-bold p-4">COVID-19</h3>            
            <div style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/iStock-1210596209.jpg); background-position:center; background-size:cover; height:120px; opacity:.8;"></div>
            <div class="p-4">
                <p class="sidebar__text">COVID-19 is impacting daily life for children and families across New York State. Project TEACH continues to support our Pediatric Primary Care providers during this time.</p>
                <div class="btn-wrap">
                    <a class="bg-green text-white rounded-full py-4 mx-4 mt-4 border-solid border-2 border-green hover:bg-transparent hover:text-green font-gotham-bold transition-all duration-300 block text-center" href="/covid">View Resources</a>
                </div>
            </div>
        </section>

        <section class="bg-white mb-6">
            <h3 class="bg-blue text-white font-gotham-bold p-4">Consultation Services</h3>   
            <div style="background-image:url(https://projectteachny.org/wp-content/uploads/2020/10/provider-resource-1.jpg); background-position:center; background-size:cover; height:120px; opacity:.8;"></div>
            <div class="p-4">
                <p class="sidebar__text">Project TEACH allows primary care providers to speak on the phone with child and adolescent psychiatrists. Ask questions, discuss cases, or review treatment options. Whatever you need to support your ability to manage your patients.</p>
                <div class="btn-wrap">
                    <a class="bg-blue text-white rounded-full py-4 mx-4 mt-4 border-solid border-2 border-blue hover:bg-transparent hover:text-blue font-gotham-bold transition-all duration-300 block text-center" href="/consultation">View Consultations</a>
                </div>
            </div>
        </section>
        <?php if (get_the_title() === 'Past Events') : ?>
            <!-- Upcoming Events -->
		    <a href="/events" class="border-l-0 hover:border-l-8 border-l-purple border-solid transition-all duration-300 block bg-purple-200 p-4 mb-8 text-purple flex flex-col">
			    <h3 class="font-gotham-bold text-lg mb-2 leading-6 lg:pr-4">Upcoming Events</h3>
			    <p class="text-black mb-8 font-gotham-light leading-6">Join us for an upcoming webinar or training</p>
			    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 self-end" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
		  		    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
			    </svg>
		    </a>
        <?php elseif (is_archive('events')): ?>
            <!-- Past Events -->
		    <a href="/past-events" class="border-l-0 hover:border-l-8 border-l-green border-solid transition-all duration-300 block bg-green-200 p-4 mb-8 text-green flex flex-col">
			    <h3 class="font-gotham-bold text-lg mb-2 leading-6 lg:pr-4">Past Events</h3>
			    <p class="text-black mb-8 font-gotham-light leading-6">View past webinars and training offerings</p>
			    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 self-end" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
		  		    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
			    </svg>
		    </a>
        <?php endif; ?>
    </div>
</div>