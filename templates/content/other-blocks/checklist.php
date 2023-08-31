<?php if (have_rows('category')): 
    $cat_counter = 0; ?>
    <section class="overflow-y-hidden h-16 w-full relative z-10 my-4 py-4">
        <div class="flex w-full pb-8 items-center overflow-x-auto overflow-y-hidden">
            <p class="font-gotham-medium bg-blue text-white m-1 p-1 whitespace-no-wrap rounded-full px-4 no-underline">All</p>
            <?php while (have_rows('category')) : the_row(); ?>        
                <a class="bg-blue-200 text-blue m-1 p-1 whitespace-no-wrap rounded-full px-4 no-underline" href="#item-1-<?php echo $cat_counter; ?>"><?php the_sub_field('title'); ?></a>
                <?php $cat_counter++; ?>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>
 
<?php if (have_rows('category')):

    $cat_counter = 0;
    $line_counter = 0; ?>

    <div class="-mx-4 sm:mx-0 mb-4">
        <!-- Top legend for checklist -->
        <div class="z-10 flex sticky bg-white border-b border-black-100 items-center top-ratings">
            <div class="w-40 sm:w-56 md:w-64  border-r border-black-200 px-8">
                Topic
            </div>
            <div class="flex-1 hidden sm:block px-8">
                Rating Scale
            </div>
            <div class="w-full sm:w-auto h-12 sm:h-full flex-1 sm:flex-auto justify-space-between items-center text-center flex sm:jestify-end py-3" id="classified-header">
                <div class="w-full sm:w-12 bg-white p-0 border-r border-black-100">
                    S
                </div>
                <div class="w-full sm:w-12 bg-white p-0 border-r border-black-100">
                    D
                </div>
                <div class="w-full sm:w-12 bg-white p-0">
                    T
                </div>
            </div>
        </div>

        <?php while (have_rows('category')) : the_row();
            //sections will go back and forth between the following colors
            if ($cat_counter % 2):
                $color = 'bg-purple'; 
            else: 
                $color = 'bg-blue';
            endif;?>

            <div id="item-1-<?php echo $cat_counter; ?>" class="rating-scales-container">
                <div class="flex">
                    <div class="w-40 sm:w-56 md:w-64 <?php echo $color; ?>">
                        <div class="sticky px-4 py-6 sm:px-8 sm:py-8 classification-box">
                            <p class="text-white font-gotham-bold text-lg">
                                <?php the_sub_field('title');?>
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col">
                        <?php if (have_rows('rating_scale')):
                            while (have_rows('rating_scale')) : the_row(); 

                                if (($line_counter%2) == 0 && $color == 'bg-blue'): 
                                    $line_color = 'bg-blue-200';
                                elseif (($line_counter%2) == 0 && $color == 'bg-purple'): 
                                    $line_color = 'bg-purple-200';
                                else: 
                                    $line_color = 'bg-white';
                                endif;

                                $name = get_sub_field('name'); 
                                $link = get_sub_field('link'); 
                                $screen = get_sub_field('screening'); 
                                $diagnose = get_sub_field('diagnosis'); 
                                $track = get_sub_field('tracking');
                                $icon = get_field('check_icon') ? get_field('check_icon') : get_template_directory_uri() . "/assets/images/svgs/check.svg"; ?>

                                <div class="flex items-center flex-1 flex-col sm:flex-row <?php echo $line_color; ?>">
                                    <?php if( $link ): ?>
                                        <div class="px-4 py-6 sm:px-8 sm:py-8 flex flex-1 w-full sm:w-auto">
                                            <a class="no-underline" target="_blank" href="<?php echo $link['url']; ?>">
                                                <p class="text-black font-gotham-medium"><?php echo $name; ?></p>
                                            </a>
                                        </div>
                                    <?php else: ?>
                                        <div class="px-4 py-6 sm:px-8 sm:py-8 flex flex-1 w-full sm:w-auto"> 
                                            <a class="no-underline" target="_blank" href="#">
                                                <p class="text-black font-gotham-medium"><?php echo $name; ?></p>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="sm:h-full h-12 w-full sm:w-auto justify-space-between flex">
                                        <!-- Screen -->
                                        <?php if( $screen ): ?>
                                            <div class="w-full sm:w-12 border-l border-black-100 h-full p-4 flex flex-col justify-center">
                                                <div>
                                                    <img class="w-8 h-8 m-auto" src="<?php echo $icon; ?>">
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="w-full sm:w-12 border-l border-black-100 h-full p-4 flex flex-col justify-center"></div>
                                        <?php endif; ?>
                                        <!-- Diagnose -->
                                        <?php if( $diagnose ): ?>
                                            <div class="w-full sm:w-12 border-l border-black-100 h-full p-4 flex flex-col justify-center">
                                                <div>
                                                    <img class="w-8 h-8 m-auto" src="<?php echo $icon; ?>">
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="w-full sm:w-12 border-l border-black-100 h-full p-4 flex flex-col justify-center"></div>
                                        <?php endif; ?>
                                        <!-- Track -->
                                        <?php if( $track ): ?>
                                            <div class="w-full sm:w-12 border-l border-black-100 h-full p-4 flex flex-col justify-center">
                                                <div>
                                                    <img class="w-8 h-8 m-auto" src="<?php echo $icon; ?>">
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="w-full sm:w-12 border-l border-black-100 h-full p-4 flex flex-col justify-center"></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php $line_counter++;
                            endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
            <?php $cat_counter++; ?>
        <?php endwhile; ?>
    </div>

<?php endif; ?>