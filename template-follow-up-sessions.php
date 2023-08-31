<?php
    /* Template Name: Follow-Up Sessions */
    require_once('header.php');
    require(dirname(__FILE__) . "/breadcrumbs.php");

    // Intensive Training ID
    $training_id = get_field('intensive_training');
?>
<section class="bg-off-white py-4">
    <h2 class="text-2xl leading-tight mb-4 font-bold max-w-screen-xl mx-auto"><?php echo get_the_title($training_id);?> Follow-Up Sessions</h2>
    <div class="bg-white max-w-screen-xl mx-auto p-8">
        <?php the_content(); ?>
        <div class="text-center mt-12 mb-4">
            <h4 class="text-purple text-3xl leading-none font-bold">Schedule</h4>
            <p>
                <strong><?php the_field('follow_up_schedule_title', $training_id); ?></strong>
            </p>
        </div>
        <div class="border-4 border-purple border-solid">
	        <?php 
		        if ( have_rows('follow_ups', $training_id) ) :
			        $follow_up_ids = [];			
			        while( have_rows('follow_ups', $training_id) ) : the_row(); 
				        $featured_post = get_sub_field('follow_up');
                
				        if( $featured_post ): 
					        array_push($follow_up_ids, $featured_post);					
				        endif;
			        endwhile; 
			        //WP_QUERY
			        $args = array(
    			        'post_type' => 'events',
				        'post__in'      => $follow_up_ids,
                        'meta_key' => 'start_date',
                        'orderby' => 'meta_value',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => 'start_date',
                                'value' => date('Ymd'),
                                'compare' => '>=',
                            )
                        )
    			        // 'tax_query' => array(
    			        //     array(
    			        //         'taxonomy' => 'people',
    			        //         'field'    => 'slug',
    			        //         'terms'    => 'bob',
    			        //     ),
    			        // ),
			        );
			        $query = new WP_Query( $args );
			        // The Loop
                    $count = 10;
                    while ($query->have_posts()) : $query->the_post();                           
                        $start_date = NULL;
                        $end_date = NULL;
					    $start_date_string = get_field('start_date');
					    $end_date_string = get_field('end_date');
                        if ($start_date_string) { $start_date = DateTime::createFromFormat('Ymd', $start_date_string);}
                        if ($end_date_string) { $end_date = DateTime::createFromFormat('Ymd', $end_date_string);} 
                        if ($count % 2 === 0) {
                            $bg_color = 'bg-off-white';
                            $text_color = 'text-blue';
                            $btn_color = 'border-blue hover:text-blue bg-blue';
                        } else {
                            $bg_color = 'bg-white';
                            $text_color = 'text-purple';
                            $btn_color = 'border-purple hover:text-purple bg-purple';
                        }
                        ?>
                        
                        <div class="md:flex <?php echo $bg_color; ?> p-4">
                            <div class="md:-ml-4 md:text-center uppercase md:w-40 <?php echo $text_color; ?>">
                                <p class="inline md:block md:text-base leading-tight md:tracking-wider"><?php echo $start_date->format('l'); ?></p>
                                <span class="md:hidden -ml-2 md:ml-0">, </span>
                                <p class="inline md:block md:text-2xl leading-tight md:font-bold"><?php echo $start_date->format('M j'); ?></p>
                                <span class="md:hidden -mr-1 md:mr-0">- </span>
                                <p class="inline md:block md:text-base leading-tight">12pm - 1pm</p>
                            </div>
                            <div class="hidden md:block w-px h-20 bg-cool-gray mr-8 opacity-25"></div>
                            <div class="flex flex-col flex-1 mr-4">
                                <a class="<?php echo $text_color; ?> text-xl font-bold mb-2 transition-all duration-300" href="<?php the_field('registration_link');?>">
                                    <?php the_title(); ?>
                                </a>
                                <?php if ( have_rows('group_presenters') ) : ?>
                                    <div class="flex flex-wrap items-center">
                                        <?php while( have_rows('group_presenters') ) : the_row(); ?>
                                            <p class="leading-none mb-2 mr-4 text-base">
                                            <?php
                                            $featured_post = get_sub_field('presenter'); ?> 
                                            <?php 
                                                $image = get_field('image', $featured_post->ID);
                                                if( !empty( $image ) ): ?>
                                                    <img class="rounded-full w-6 h-6 inline object-cover" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?> 
                                            <?php the_field('name', $featured_post->ID); ?>
                                            </p> 
                                        <?php
                                        endwhile; ?> 
                                    </div>
                                <?php else: ?>
                                    <p class="text-base mb-4 leading-tight"><?php the_field('presenters');?></p>
                                <?php endif; ?>
                                <?php if (get_field('learning_objectives')) : ?>
                                    <p>
                                        <strong>Learning Objectives</strong>
                                    </p>
                                    <p class="text-base mb-4 leading-tight"><?php the_field('learning_objectives');?></p>
                                <?php endif; ?>
                                <!-- <a class="<?php echo $btn_color;?> ml-auto text-white border-2 border-solid hover:bg-transparent transition-all duration-300 inline-block rounded-full py-4 text-base px-8 font-bold" href="<?php the_field('registration_link');?>">Register for <?php echo $start_date->format('M j'); ?></a> -->
                                <a class="pointer-events-none bg-cool-gray ml-auto text-white hover:bg-transparent transition-all duration-300 inline-block rounded-full py-4 text-base px-8 font-bold" href="<?php the_field('registration_link');?>">Register Soon</a>
                            </div>
                        </div>
                    <?php $count++;
                    endwhile; 
                
                
		        endif; 
            ?>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>