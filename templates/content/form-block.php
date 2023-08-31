<style>
    .gform_footer.top_label {
        padding-right: 16px!important;
    }
    .gform_button {
        width: 100%!important;
        font-size: 2rem!important;
        padding: 16px 0;
        background: #f7941d;
        border: 2px solid #f7941d;
        color: white;
        letter-spacing: 6px;
        text-transform: uppercase;
        transition: all 0.3s;
    }
    .gform_button:hover {
        color: #f7941d;
        background-color: transparent;
    }
    .gform_wrapper, .gform_title {
        margin-top:0!important;
    }
</style>

<div class="flex flex-col md:flex-row justify-center mb-8">
    <?php if (get_sub_field('add_left_column')) : ?>
        <?php $left_content = get_sub_field('left_column_content'); ?>
        <div class="w-full md:w-1/2 pr-8">

            <?php if ($left_content === 'image') :
                $image = get_sub_field('image');
                if ($image ): 
                    echo '<div style="background-image:url(' . $image['url'] . ')" class="h-full w-full mr-8 bg-center bg-cover"></div>';
                endif; 
            ?>
            <?php elseif ($left_content === 'list_content') : ?>
                <?php if ( have_rows('list') ) : ?>
                    <?php while( have_rows('list') ) : the_row(); ?>
                        <div class="mb-8">
                            <h3 style="background:#1a1f41" class="text-xl font-bold text-white mr-8 p-2 px-4 mb-4" style="font-weight:700"><?php the_sub_field('list_title'); ?></h3>
                            <?php if ( have_rows('member') ) : ?>
                            
                                <?php while( have_rows('member') ) : the_row(); ?>
                                    <div style="max-width:400px;" class="ml-4 flex items-center my-2 p-2 mr-8">
                                    <?php if ( get_sub_field('image') ) : 
                                        $image = get_sub_field('image'); ?>             
                                        <div class="h-16 w-16 rounded-full bg-cover bg-top shadow-md" style="background-image:url(<?php echo $image['url'];?>)"></div>


                                    <?php else: ?>
                                    <img class="h-16 w-16 rounded-full shadow-md" src="https://via.placeholder.com/600x600" alt="<?php the_sub_field('title'); ?>">
                                    <?php endif; ?>
                                    <div class="flex flex-col ml-4">
                                        <p style="font-size:21px" class="text-lg"><strong><?php the_sub_field('title'); ?></strong></p>
                                        <p class="text-sm text-cool-gray flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-px mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                            <?php the_sub_field('subtitle'); ?>
                                        </p>
                                        <a href="mailto:<?php the_sub_field('email'); ?>" class="text-sm text-cool-gray flex transition-all duration-300 hover:text-bright-blue">
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="mb-px mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                            </svg> -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mt-px mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="mb-px mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                            </svg> -->
                                            <?php the_sub_field('email'); ?>
                                        </a>
                                    </div>
                                    </div>
                                    
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <div class="flex-1">
        <?php 
            $form_id = get_sub_field('form');
            if ($form_id):
                gravity_form( $form_id, true, true, false, '', false );
            endif;
        ?>
    </div>
</div>