<!-- 
TODO 
- Category posts that continue into DD
- mobile edits
- dropdown icon rotate 180 on click
- 
-->


<style>
    .hover\:bg-transparent:hover {
        background:transparent!important;
    }
</style>

<?php 
    $display_type = get_sub_field('display_type');
    $pt_category = get_sub_field('category');
    $dd_category = get_sub_field('dd_category');
    $pt_selection = get_sub_field('selection');
    $pt_main_post_count = get_sub_field('posts_to_display');
    $pt_dd_post_count = get_sub_field('dd_posts_to_display');
    $show_excerpt = get_sub_field('show_excerpt');

    $add_dropdown = get_sub_field('add_dropdown');
    $dd_display_type = get_sub_field('dd_display_type');
    $dd_title = get_sub_field('dd_title');
?>

<section class="px-4 md:px-0 max-w-screen-xl mx-auto">

    <?php if (get_sub_field('title')): ?>
        <h3 class="px-0 text-<?php echo $color; ?> font-bold font-bold text-xl md:text-3xl leading-tight mb-2">
            <?php the_sub_field('title');?>
        </h3>
    <?php endif; ?>
    
    <div class="md:border-l-4 bg-white shadow-md md:px-4 md:pt-4 border-solid mb-8 border-<?php echo $color; ?>"> 
        <?php if ($display_type !== 'manual') : ?>
            <?php if ($display_type === 'category') : ?>
                <?php                 
                    $main_args = array(
                        'post_type' 	 => array( 'post', 'pt-events' ),
                        'posts_per_page' => $pt_main_post_count,
                        'cat' => $pt_category,
                    ); ?>

            <?php elseif ($display_type === 'selection'):
                    $matchedPosts = [];
                    foreach ($pt_selection as $selection):
                        // echo $selection;
                        array_push($matchedPosts, $selection);
                    endforeach;?>
                    <?php
                        $main_args = array(
                            'post_type' => array( 'post', 'pt-events' ),
                            'post__in' => $matchedPosts,
                            'orderby' =>  'post__in',
                        );
                    ?>
            <?php endif; 
                
                $main_post = new WP_Query($main_args); 

                //Posts Above Dropdown
                if($main_post->have_posts()) :
                    $count = 1;
                    $total_count = 1;
                    while($main_post->have_posts()) : $main_post->the_post(); 
                        $title = get_the_title();
                        $get_excerpt = get_the_excerpt();
                        if (!empty($get_excerpt)) {
                            $excerpt = substr(get_the_excerpt(), 0, strpos(wordwrap(get_the_excerpt(), 200), "\n")) . '...';
                        } else {
                            $excerpt = '';
                        }
                        $page_link = get_the_permalink(); 
                        $post_image = get_the_post_thumbnail_url(); 
                        $categories = get_the_category();                        
                        $authors = get_field('authors');?>

                        <div class="bg-white flex flex-col md:flex-row items-center mb-4">
                            <!-- Image / Video Content -->
                            <?php if (!empty(get_field('video'))) : ?>
                                <div class="w-full md:w-112 mr-0 md:mr-6 mb-4">
                                    <div class="responsive-video">
                                        <iframe src="<?php echo get_field('video'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div>
                            <?php else: ?>                                
                                <a class="w-full md:w-112 mr-0 md:mr-6 mb-4" href="<?php echo $page_link; ?>">
                                    <img src="<?php echo $post_image; ?>">
                                </a>
                            <?php endif; ?>
                            <!-- Text Content -->
                            <div class="flex-1 mb-2 w-full md:w-auto bg-white px-4 md:py-4 md:pr-4">
                                <!-- Categories -->
                                <?php if (!empty($categories)) : ?>
                                    <div class="flex mb-2">
                                        <?php foreach ($categories as $cat) :
                                            if (get_field('category_color', 'category_' . $cat->term_id)) :
                                                $cat_color = get_field('category_color', 'category_' . $cat->term_id);
                                                if ($cat_color) {
                	                    	        if ($color === "#3a0e79") {
                                        		        $hex = "#3a0e79";
                                        		        $color = "purple";
                	                    	        } elseif ($color === "#039fda") {
                                        		        $hex = "#039fda";
                                        		        $color = "blue";
                	                    	        } elseif ($color === "#7bbf43") {
                                        		        $hex = "#7bbf43";
                                        		        $color = "green";
                	                    	        } elseif ($color === "#e09b3d") {
                                        		        $hex = "#e09b3d";
                                        		        $color = "orange";
                	                    	        }
            		                            }
                                            endif;
                                            ?>                                            
                                            <a class="bg-<?php echo $color; ?>-200 text-<?php echo $color; ?> rounded-full px-2 mr-1 py-0.5" href="/category/<?php echo $cat->slug;?>">
                                                <?php echo $cat->name; ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <!-- Title -->
                                <a class="hover:text-<?php echo $color; ?> transition-all duration-300" href="<?php echo $page_link; ?>">
                                    <h3 class="px-0 font-bold text-xl leading-tight mb-2">
                                        <?php echo $title; ?>
                                    </h3>
                                </a>
                                <!-- Authors -->
                                <?php if( have_rows('authors', get_the_ID()) ): ?>
                                    <div class="flex flex-wrap mb-1">
    	                        		<?php while( have_rows('authors', get_the_ID()) ) : the_row();
    	                        		    $featured_posts = get_sub_field('author');
                                            $author_image = get_field('image', $featured_posts->ID);                                            
    	                        		    if( $featured_posts ): ?>
    	                        		        <a class="flex items-center mr-4 no-underline font-gotham"  href="<?php echo the_permalink($featured_posts->ID); ?>">
    	                        		            <div style="margin-right:6px; border-radius:50%; width:24px; height:24px; background-size:cover; background-position:center; background-image:url('<?php echo $author_image['sizes']['thumbnail']; ?>')"></div>
    	                        		            <span class="text-black-800"><?php the_field('name', $featured_posts->ID);?></span>
		                        				</a>
    	                        		    <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
		                        <?php endif; ?>
                                <!-- Text -->
                                <?php if ($show_excerpt && !empty($excerpt)) : ?>
                                    <div class="mt-2 dd-div-text">
                                        <p>
                                            <?php echo $excerpt; ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                                <!-- Button -->
                                <?php if (get_field('override_link')) : 
                                    $over_link_array = get_field('override_link');
                                    $over_link = $over_link_array['url'];
                                    $over_text = $over_link_array['title'];
                                    ?>
                                    <a target="_blank" class="text-white border-2 border-<?php echo $color; ?> border-solid hover:text-<?php echo $color; ?> hover:bg-transparent transition-all duration-300 inline-block rounded-full py-2 text-base px-4 mt-2 bg-<?php echo $color; ?>" href="<?php echo $over_link; ?>">
                                        <?php echo $over_text; ?>
                                    </a>
                                <?php else :?>
                                    <a class="text-white border-2 border-<?php echo $color; ?> border-solid hover:text-<?php echo $color; ?> hover:bg-transparent transition-all duration-300 inline-block rounded-full py-2 text-base px-4 mt-2 bg-<?php echo $color; ?>" href="<?php echo $page_link; ?>">
                                        Read More
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile;
                endif;
            
            ?>

        <?php elseif ($display_type === 'manual'): ?>
            <?php if ( have_rows('manual') ) : ?>            
                <?php while( have_rows('manual') ) : the_row(); 
                    
                    $manual_title = get_sub_field('title');
                    $manual_text = get_sub_field('text');
                    $manual_link = get_sub_field('link');
                    if ($manual_link) {
                        $link_url = $manual_link['url'];
                        $link_title = $manual_link['title'];
                        $link_target = $manual_link['target'] ? $manual_link['target'] : '_self';
                    }
                    ?>

                    <style>
                        .pt-manual-text-content a {
                            color: <?php echo $hex;?>;
                            text-decoration:underline;
                        }
                    </style>
            
                    <div class="bg-white flex flex-col md:flex-row items-center mb-4">
                        <!-- Image / Video Content -->
                        <?php if (get_sub_field('video')) : ?>
                            <div class="w-full md:w-112 mr-0 md:mr-6 mb-4">
                                <div class="responsive-video">
                                    <iframe src="<?php echo get_sub_field('video'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </div>
                        <?php else: 
                            $image = get_sub_field('image');
                            if (!empty($image)): ?>                        
                                <a class="w-full md:w-112 mr-0 md:mr-6 mb-4" href="<?php echo $link_url; ?>"  target="<?php echo esc_attr($link_target); ?>">
                                    <img src="<?php echo esc_url($image['url']); ?>">
                                </a>
                            <?php endif; ?>                              
                        <?php endif; ?>
                        <!-- Text Content -->
                        <div class="flex-1 mb-2 w-full md:w-auto bg-white md:p-0 md:py-4 md:pr-4">
                            <!-- Title -->
                            <a class="hover:text-<?php echo $color; ?> transition-all duration-300" href="<?php echo $link_url; ?>">
                                <h3 class="px-0 font-bold text-xl leading-tight mb-2">
                                    <?php echo $manual_title; ?>
                                </h3>
                            </a>
                            <!-- Authors -->
                            <?php if (have_rows('authors')): ?>			                
			                    <div class="author__list">
				                    <?php while (have_rows('authors')): the_row();
                                        // Author Variables
                                        $sim_post_object = get_sub_field('author');
                                        $post = $sim_post_object;
                                        setup_postdata($post);
                                                
                                        $sim_author_image = get_field('image');
                                        $sim_author_blurb = get_field('blurb');
                                        $sim_size = 'thumbnail';
                                        $sim_author = get_field('name');
                                        $sim_author_content = get_the_content();
                                        $sim_author_page = get_permalink();
                                        if ($sim_author) : ?>
                                            <a class="author author--list" href="<?php echo $sim_author_page; ?>">
                                                <img src="<?php echo $sim_author_image['url']; ?>" alt="<?php echo $sim_author_image['alt']; ?>" class="author__image"/>
                                                <p class="author__name"><?php echo $sim_author; ?></p>
						                    </a>
					                    <?php endif;
                                       ?>
					                    <!-- Resets $post to single post authors fucking everything up -->
                                        <?php wp_reset_postdata(); ?>
				                    <?php endwhile;?>
			                    </div>
		                    <?php endif;?>
                            <!-- Text -->
                            <?php if ($manual_text) : ?>                                
                                <div class="pt-manual-text-content mt-2 dd-div-text">
                                    <?php echo $manual_text; ?>
                                </div>
                            <?php endif; ?>
                            <!-- Button -->
                            <?php if ($manual_link):  ?>
                                <a class="text-white border-2 border-<?php echo $color; ?> border-solid hover:text-<?php echo $color; ?> hover:bg-transparent transition-all duration-300 inline-block rounded-full py-2 text-base px-4 mt-2 bg-<?php echo $color; ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                    <?php echo esc_html($link_title); ?>
                                </a>
                            <?php endif; ?>
                        </div>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        <?php endif; ?>

        <?php wp_reset_query(); ?>
        
        <?php if (!empty($add_dropdown)) : 
            if (get_sub_field('display_dropdown_open')) : 
                $dropdown_open_or_closed = 'true';  
                $panel_open_or_closed = 'in';  
            else:
                $dropdown_open_or_closed = 'false';  
                $panel_open_or_closed = '';  
            endif; ?>
            <div class="mb-4 inline-block w-full">
                <button class="accordion bg-<?php echo $color; ?> text-white text-xl p-4 w-full items-center relative text-left flex">
                    <span class="mr-4"><?php echo $dd_title; ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute mr-4 right-0 h-6 w-6 text-white transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="collapse-pt-block-<?php echo $block_count;?>" class="panel">
                    <div class="bg-<?php echo $color; ?>-200 p-4 pb-px">
                        <?php if ($dd_display_type === 'category' || $dd_display_type === 'selection') : 
                            
                            if ($dd_display_type === 'category') :    
                                if (get_sub_field('continue_into_dropdown') === true) {
                                    $offset = $pt_main_post_count;
                                } else {
                                    $offset = 0;
                                }
                                $dd_args = array(
                                    'post_type' 	 => array( 'post', 'pt-events' ),
                                    'posts_per_page' => $pt_dd_post_count,
                                    'offset' => 1,
                                    'cat' => $dd_category
                                ); 
                            elseif ($dd_display_type === 'selection'): 

                                $matchedPosts = [];
                                foreach ($pt_selection as $selection):
                                    // echo $selection;
                                    array_push($matchedPosts, $selection);
                                endforeach;
                                $dd_args = array(
                                    'post_type' => array( 'post', 'pt-events' ),
                                    'post__in' => $matchedPosts,
                                    'orderby' =>  'post__in',
                                ); 
                            endif;

                            $dd_post = new WP_Query($dd_args); 

                            //Posts inside Dropdown
                            if($dd_post->have_posts()) :
                                $count = 1;
                                $total_count = 1;
                                while($dd_post->have_posts()) : $dd_post->the_post(); 
                                    

                                    $title = get_the_title();
                                    $get_excerpt = get_the_excerpt();
                                    if (!empty($get_excerpt)) {
                                        $excerpt = substr(get_the_excerpt(), 0, strpos(wordwrap(get_the_excerpt(), 150), "\n")) . '...';
                                    } else {
                                        $excerpt = '';
                                    }
                                    $page_link = get_the_permalink();
                                    $post_image = get_the_post_thumbnail_url();
                                    $categories = get_the_category();
                                    $authors = get_field('authors');?>

                                    <div class="bg-white flex flex-col md:flex-row items-center shadow-sm mb-4">
                                        <!-- Image / Video Content -->
                                        <?php if (!empty(get_field('video'))) : ?>
                                            <div class="w-full md:w-80 mr-0 md:mr-6">
                                                <div class="responsive-video">
                                                    <iframe src="<?php echo get_field('video'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        <?php else: ?>                                
                                            <a class="w-full md:w-80 mr-0 md:mr-6" href="<?php echo $page_link; ?>">
                                                <img src="<?php echo $post_image; ?>">
                                            </a>
                                        <?php endif; ?>
                                        <!-- Text Content -->
                                        <div class="flex-1 mb-2 w-full md:w-auto bg-white p-4 md:p-0 md:py-4 md:pr-4">
                                            <!-- Categories -->
                                            <?php if (!empty($categories)) : ?>
                                                <div class="flex mb-2">
                                                    <?php foreach ($categories as $cat) :
                                                        if (get_field('category_color', 'category_' . $cat->term_id)) :
                                                            $cat_color = get_field('category_color', 'category_' . $cat->term_id);
                                                            if ($cat_color) {
                                                                if ($color === "#3a0e79") {
                                                                    $hex = "#3a0e79";
                                                                    $color = "purple";
                                                                } elseif ($color === "#039fda") {
                                                                    $hex = "#039fda";
                                                                    $color = "blue";
                                                                } elseif ($color === "#7bbf43") {
                                                                    $hex = "#7bbf43";
                                                                    $color = "green";
                                                                } elseif ($color === "#e09b3d") {
                                                                    $hex = "#e09b3d";
                                                                    $color = "orange";
                                                                }
                                                            }
                                                        endif;
                                                        ?>                                            
                                                        <a class="bg-<?php echo $color; ?>-200 text-<?php echo $color; ?> rounded-full px-2 mr-1 py-0.5" href="/category/<?php echo $cat->slug;?>">
                                                            <?php echo $cat->name; ?>
                                                        </a>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                            <!-- Title -->
                                            <a class="hover:text-<?php echo $color; ?> transition-all duration-300" href="<?php echo $page_link; ?>">
                                                <h3 class="px-0 font-bold text-base leading-tight -mb-1">
                                                    <?php echo $title; ?>
                                                </h3>
                                            </a>
                                            <!-- Text -->
                                            <?php if ($show_excerpt && !empty($excerpt)) : ?>
                                                <div class="mt-2">
                                                    <p class="text-base leading-tight">
                                                        <?php echo $excerpt; ?>
                                                    </p>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif; ?>

                        <?php elseif ($dd_display_type === 'manual'): ?>
                            
                            <?php if (have_rows('dd_manual')) : ?>            
                                <?php while (have_rows('dd_manual')) : the_row();

                                    $manual_title = get_sub_field('title');
                                    $manual_text = get_sub_field('text');
                                    $manual_link = get_sub_field('link');?>

                                    <div class="bg-white flex flex-col md:flex-row items-center shadow-sm mb-4">
                                        <!-- Image / Video Content -->
                                        <?php if (get_sub_field('video')) : ?>
                                            <div class="w-full md:w-80 mr-0 md:mr-6 mb-4 md:mb-0">
                                                <div class="responsive-video">
                                                    <iframe src="<?php echo get_sub_field('video'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        <?php else:
                                            $image = get_sub_field('image');
                                            if (!empty($image)): ?>                     
                                                <a class="w-full md:w-80 mr-0 md:mr-6 mb-4" href="<?php echo $manual_link['url']; ?>">
                                                    <img src="<?php echo esc_url($image['url']); ?>">
                                                </a>
                                            <?php endif; ?>                              
                                        <?php endif; ?>
                                        <!-- Text Content -->                                        
                                        <div class="flex-1 mb-2 w-full md:w-auto bg-white p-4 md:p-0 md:py-4 md:pr-4">
                                            <!-- Title -->
                                            <?php if($manual_link !== NULL): ?>
                                                <a class="hover:text-<?php echo $color; ?> transition-all duration-300" target="<?php echo $manual_link['target'] ?>" href="<?php echo $manual_link['url'] ?>">
                                                    <h3 class="px-0 font-bold text-base leading-tight -mb-1">
                                                        <?php echo $manual_title; ?>
                                                    </h3>
                                                </a>
                                            <?php else: ?>
                                                 <h3 class="px-0 font-bold text-base leading-tight -mb-1">
                                                    <?php echo $manual_title; ?>
                                                </h3>
                                            <?php endif; ?>
                                            <!-- Text -->
                                            <?php if ($manual_text) : ?>                                
                                                <div class="mt-2 dd-div-text">
                                                    <?php echo $manual_text; ?>
                                                </div>
                                            <?php endif; ?>
                                            
                                        </div>
                                            
                                    </div>
                                            
                                <?php endwhile; ?>
                            <?php endif; ?>

                        <?php elseif ($dd_display_type === 'links'): ?>
                            <?php if ( have_rows('dd_list_links') ) : ?>
                                <?php $i = 1; ?>
                                <div>
                                    <?php while( have_rows('dd_list_links') ) : the_row(); ?>
                                    
                                        <div class=" p-4 flex -mx-4 flex-col 
                                            <?php if ($i % 2 == 0) {
                                                echo 'bg-white';
                                            } ?> 
                                            <?php if ($i === 1) {
                                                echo '-mt-4';
                                            } ?>
                                        ">
                                            <?php $link = get_sub_field('link');
                                            if ($link):
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';

                                                ?>
                                                <?php if ($link['target']) : ?>
                                                    <div class="text-black mb-2 hover:text-<?php echo $color; ?>">
                                                        <a class="no-underline text-current transition-color font-bold text-lg mb-1 duration-300 hover:text-<?php echo $color; ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                                        <svg class="w-4 inline-block mb-1 fill-current transition-color duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                                          <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                                        </svg>
                                                    </div>
                                                <?php else: ?>
                                                    <a class="text-black no-underline transition-color font-bold text-lg mb-1 duration-300 hover:text-<?php echo $color; ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                                <?php endif; ?>
                                                <a href="<?php echo parse_url($link_url, PHP_URL_SCHEME) . '://' . parse_url($link_url, PHP_URL_HOST); ?>" target="_blank" class="-mt-1 text-sm transition-color duration-300 font-gotham no-underline hover:text-<?php echo $color; ?> text-black-500 -mr-2"><?php echo parse_url($link_url, PHP_URL_HOST);?></a>
                                                <?php if (get_sub_field('description')) : ?>
                                                    <p><?php the_sub_field('description');?></p>
                                                <?php endif; ?>
                                                
                                                
                                            <?php endif; ?>
                                        </div>

                                    <?php $i++;

                                    endwhile; ?>
                                </div>
                            <?php endif; ?>

                        <?php elseif ($dd_display_type === 'text'): ?>                        
                            <?php the_sub_field('just_text'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>        
        
        <?php wp_reset_query(); ?>

    </div>

</section>