<div class="block-<?php echo $block_count;?> family-resource">
    <div class="mb-8">
        <h3 class="text-xl lg:text-4xl mb-0 font-bold"><?php the_sub_field('title'); ?></h3>
        <p class=""><?php the_sub_field('text'); ?></p>
    </div>

    <?php if ( have_rows('resource_topic') ) : ?>
    
        <?php while( have_rows('resource_topic') ) : the_row(); ?>
                
            <h3 class="text-xl lg:text-3xl mb-8 font-bold"><?php the_Sub_field('topic_title'); ?></h3>
            
            <?php if ( have_rows('resource') ) :                 
                $inner_count = 1; ?>
                <div class="grid grid-cols-3 gap-8 mb-16">
                    <?php while( have_rows('resource') ) : the_row(); ?>
                        <?php $image = get_sub_field('image'); 
                        if (false): 
                            $gradient_overlay = "background-image:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,1)), url(" . $image['url'] . ");";
                        else:
                            $gradient_overlay = "background-image:url(" . $image['url'] . ");";
                        endif; ?>
                        <div class="w-full flex flex-col relative">
                            <?php if (get_sub_field('resource_video') === true && get_sub_field('resource_video')): ?>
                                <a 
                                    href="#" 
                                    class="flex justify-center items-center w-full h-56 bg-cover bg-center relative" 
                                    style="<?php echo $gradient_overlay; ?>" 
                                    data-toggle="modal" 
                                    data-target="#featured_topic_video_<?php echo $count . '_' . $inner_count; ?>">

                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="z-50 h-24 w-24 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <div class="h-full w-full bg-black absolute opacity-25"></div> -->
                                        <img class="z-50 h-24 w-24 text-white" src="<?php echo get_template_directory_uri();?>/assets/images/play-1.svg">

                                </a>
                                <!-- Modal -->
                                <div class="modal" id="featured_topic_video_<?php echo $count . '_' . $inner_count; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="vertical-alignment-helper">
                                        <div class="modal-dialog vertical-align-center">
                                            <div class="modal-content">
                                                <div class="flex items-center p-4">
                                                    <p class="font-bold"><?php the_sub_field('title'); ?></p>
                                                    <button type="button" class="close ml-auto" data-dismiss="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                        <span class="sr-only">Close</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe width="560" height="315" src="<?php the_sub_field('video'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="flex justify-center items-center w-full h-56 bg-cover bg-center relative" style="background-image:url(<?php echo $image['url']; ?>);">
                                    <!-- Showing image in div BG -->
                                </div>
                            <?php endif; ?>
                            <div class="w-full flex flex-1 bg-blue flex-col relative">
                                <div class="flex flex-1 items-center bg-blue justify-center text-white font-bold px-4 py-8 text-lg text-center">
                                    <?php the_sub_field('title'); ?>
                                </div>
                                <div class="opacity-25 absolute bottom-0 bg-black h-12 w-full"></div>
                                <button class="z-50 p-4 h-12 text-white flex items-center" id="dropdownMenuLink" role="button" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="w-6 h-6 mr-auto" src="https://project-teach.launchpaddev.com/app/themes/project-teach/assets/images/Adobe_PDF_icon.svg">
                                    <span>Select Language</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                                    </svg>                                
                                </button>
                                <div class="dropdown-menu w-full" aria-labelledby="dropdownMenuLink">
                                    <!-- English -->
                                    <?php if ( get_sub_field('download_link')) : 
                                        $link = get_sub_field('download_link'); ?>
                                        <a class="dropdown-item flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">English</a>
                                    <?php endif; ?>
                                    <!-- Bengali -->
                                    <?php if ( get_sub_field('download_link_bengali')) : 
                                        $link = get_sub_field('download_link_bengali'); ?>
                                        <a class="dropdown-item flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">Bengali</a>
                                    <?php endif; ?>
                                    <!-- Spanish -->
                                    <?php if ( get_sub_field('download_link_spanish')) : 
                                        $link = get_sub_field('download_link_spanish'); ?>
                                        <a class="dropdown-item flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">Spanish</a>
                                    <?php endif; ?>
                                    <!-- Haitian Creole -->
                                    <?php if ( get_sub_field('download_link_hc')) : 
                                        $link = get_sub_field('download_link_hc'); ?>
                                        <a class="dropdown-item flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">Haitian Creole</a>
                                    <?php endif; ?>
                                    <!-- Korean -->
                                    <?php if ( get_sub_field('download_link_korean')) : 
                                        $link = get_sub_field('download_link_korean'); ?>
                                        <a class="dropdown-item flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">Korean</a>
                                    <?php endif; ?>
                                    <!-- Russian -->
                                    <?php if ( get_sub_field('download_link_russian')) : 
                                        $link = get_sub_field('download_link_russian'); ?>
                                        <a class="dropdown-item flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">Russian</a>
                                    <?php endif; ?>
                                    <!-- Simple Chinese -->
                                    <?php if ( get_sub_field('download_link_chinese')) : 
                                        $link = get_sub_field('download_link_chinese'); ?>
                                        <a class="dropdown-item flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">Simple Chinese</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php $inner_count++; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            
            <?php $count++;?>
        <?php endwhile; ?>
    
    <?php endif; ?>
    
</div>
