<div class="block-<?php echo $block_count;?> family-resource max-w-screen-xl mx-auto px-4 md:px-0">
    <div class="mb-8">
        <h3 class="text-xl lg:text-4xl mb-0 font-bold"><?php the_sub_field('title'); ?></h3>
        <p class=""><?php the_sub_field('text'); ?></p>
    </div>

    <?php if ( have_rows('resource_topic') ) : ?>
    
        <?php while( have_rows('resource_topic') ) : the_row(); ?>
                
            <h3 class="text-xl lg:text-3xl mb-8 font-bold"><?php the_Sub_field('topic_title'); ?></h3>
            
            <?php if ( have_rows('resource') ) :                 
                $inner_count = 1; ?>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                    <?php while( have_rows('resource') ) : the_row(); ?>
                        <?php $image = get_sub_field('image'); 
                        if (false): 
                            $gradient_overlay = "background-image:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,1)), url(" . $image['url'] . ");";
                        else:
                            $gradient_overlay = "background-image:url(" . $image['url'] . ");";
                        endif; ?>
                        <div class="w-full flex flex-col">
                            <?php if (get_sub_field('resource_video') === true && get_sub_field('resource_video')): ?>

                                
                                <!-- START -->
                                <button id="modalbutton-<?php echo $count . '_' . $inner_count; ?>" class="modal-button flex justify-center items-center w-full h-56 bg-cover bg-center relative" style="<?php echo $gradient_overlay; ?>">
                                    <img class="z-20 h-24 w-24 text-white" src="<?php echo get_template_directory_uri();?>/assets/images/play-1.svg">
                                </button>
                                <!-- Modal -->
                                <div class="modal hidden absolute z-50 left-0 right-0 max-w-screen-sm w-full m-auto bg-white p-4" id="modal-<?php echo $count . '_' . $inner_count; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="flex items-center p-4">
                                        <p class="font-bold"><?php the_sub_field('title'); ?></p>
                                        <button type="button" class="close close-modal ml-auto">
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
                                <!-- END -->



                            <?php else: ?>
                                <div class="flex justify-center items-center w-full h-56 bg-cover bg-center relative" style="background-image:url(<?php echo $image['url']; ?>);">
                                    <!-- Showing image in div BG -->
                                </div>
                            <?php endif; ?>
                            <div class="w-full flex flex-1 bg-blue flex-col relative">
                                <div class="flex flex-1 items-center bg-blue justify-center text-white font-bold px-4 py-8 text-lg text-center">
                                    <?php the_sub_field('title'); ?>
                                </div>
                                <?php if (get_sub_field('download_link')) : ?>
                                    <button class="accordion z-40 p-4 bg-dark-blue hover:opacity-75 transition-all duration-300 h-12 text-white flex items-center" role="button">
                                        <img class="w-6 h-6 mr-auto" src="https://project-teach.launchpaddev.com/app/themes/project-teach/assets/images/Adobe_PDF_icon.svg">
                                        <p>Select Language</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                                        </svg>                                
                                    </button>
                                    <div style="top:100%; z-index:100" class="panel dropdown-menu w-full bg-white absolute">
                                        <!-- English -->
                                        <?php if ( get_sub_field('download_link')) : 
                                            $link = get_sub_field('download_link'); ?>
                                            <a class="dropdown-item hover:bg-off-white flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">English</a>
                                        <?php endif; ?>
                                        <!-- Bengali -->
                                        <?php if ( get_sub_field('download_link_bengali')) : 
                                            $link = get_sub_field('download_link_bengali'); ?>
                                            <a class="dropdown-item hover:bg-off-white flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">Bengali</a>
                                        <?php endif; ?>
                                        <!-- Spanish -->
                                        <?php if ( get_sub_field('download_link_spanish')) : 
                                            $link = get_sub_field('download_link_spanish'); ?>
                                            <a class="dropdown-item hover:bg-off-white flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">Spanish</a>
                                        <?php endif; ?>
                                        <!-- Haitian Creole -->
                                        <?php if ( get_sub_field('download_link_hc')) : 
                                            $link = get_sub_field('download_link_hc'); ?>
                                            <a class="dropdown-item hover:bg-off-white flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">Haitian Creole</a>
                                        <?php endif; ?>
                                        <!-- Korean -->
                                        <?php if ( get_sub_field('download_link_korean')) : 
                                            $link = get_sub_field('download_link_korean'); ?>
                                            <a class="dropdown-item hover:bg-off-white flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">Korean</a>
                                        <?php endif; ?>
                                        <!-- Russian -->
                                        <?php if ( get_sub_field('download_link_russian')) : 
                                            $link = get_sub_field('download_link_russian'); ?>
                                            <a class="dropdown-item hover:bg-off-white flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">Russian</a>
                                        <?php endif; ?>
                                        <!-- Simple Chinese -->
                                        <?php if ( get_sub_field('download_link_chinese')) : 
                                            $link = get_sub_field('download_link_chinese'); ?>
                                            <a class="dropdown-item hover:bg-off-white flex text-center p-2" href="<?php echo $link['url']; ?>" target="_blank" rel="noopener">Simple Chinese</a>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
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