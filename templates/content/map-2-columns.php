<?php 
    if (get_sub_field('map_position') === 'left') :
        $map_pos = 'md:pr-8';
    else:
        $map_pos = 'md:order-2 md:pl-8';
    endif; 
?>

<section class="my-8 mb-16">
    <div class="max-w-screen-lg mx-auto md:flex justify-center">
        <div class="w-full mb-8 md:mb-0 md:w-1/2 <?php echo $map_pos; ?>">
            <?php include( locate_template( 'templates/utilities/map-image.php', false, false ) ); ?>
        </div>
        <div class="pt-map-section content-mb-8 flex-1 mb-8 text-xl">
            <?php 
                if (get_sub_field('sections') === false) : ?>
                    <style>
                        .pt-map-section a:not(.flex) {
                            color: <?php echo $hex; ?>;
                            text-decoration:underline;
                        }
                    </style>
                    <?php the_sub_field('text_content'); ?>
                <?php else:
                    if ( have_rows('section') ) :
                        while( have_rows('section') ) : the_row(); ?>
                    
                            <strong class="block mb-4"><?php the_sub_field('title'); ?></strong>
                            <?php the_sub_field('text'); ?>
                            <?php if (get_sub_field('call_button')) : ?>
                                <a href="tel:855-227-7272" class="flex items-center justify-center w-full bg-blue-200 hover:bg-blue transition-all hover:text-white duration-300 mt-2 p-2 py-6 mb-8">
                                    <svg class="w-6 h-6 mr-4" viewBox="0 0 405.33 405.33">
                                        <path class="fill-current" d="M373.33,266.88a231.66,231.66,0,0,1-72.7-11.56A31.17,31.17,0,0,0,269,262l-46,34.73A257.08,257.08,0,0,1,108.57,182.38l33.81-44.93a32.26,32.26,0,0,0,7.91-32.64A231.73,231.73,0,0,1,138.67,32a32,32,0,0,0-32-32H32A32,32,0,0,0,0,32C.23,238.09,167.24,405.1,373.33,405.33a32,32,0,0,0,32-32V298.88A32,32,0,0,0,373.33,266.88Z"></path>
                                    </svg>
                                    <span class="color-current" style="padding:0"><strong>Call us at 855-227-7272</strong></span>
                                </a>
                            <?php endif; ?>
                            
                            
                            <?php 
                            $link = get_sub_field('button');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>                                
                                <a class="text-white mb-8 border-2 border-<?php echo $color;?> border-solid hover:text-<?php echo $color;?> hover:bg-transparent transition-all duration-300 inline-block rounded-full py-4 text-base px-8 bg-<?php echo $color;?> font-bold" title="Request Consult" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                </a>                                
                            <?php endif; ?>

                            <?php if (get_sub_field('divider_line') === true): ?>
                                <hr class="mb-8 block">
                            <?php endif; ?>
                    
                        <?php endwhile;
                    
                    endif;
                endif;
            ?>
        </div>
    </div>
</section>