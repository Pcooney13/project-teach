<!-- Color Options -->
<?php include( locate_template( 'includes/utilities/color-options.php', false, false ) ); ?>

<!-- icon blocks -->
<section class="bg-<?php echo $colorName; ?>-200 -mx-4 py-8">
    <h2 class="font-gotham-bold text-center mb-4"><?php the_field('block_title'); ?></h2>

    <?php if( have_rows('icon_block') ): ?>
        <ul class="flex flex-wrap justify-center list-none">
            <?php while( have_rows('icon_block') ) : the_row(); ?>
                <?php $image = get_sub_field('icon');
                if ($image):                
                    // Image variables.
                    $alt = $image['alt'];
                    $caption = $image['caption'];                        
                    // Thumbnail size attributes.
                    $size = 'thumbnail';
                    $thumb = $image['sizes'][ $size ];
                ?>                                             
                    <li class="w-1/4 p-4 bg-<?php echo $colorName; ?> mx-4 my-4 shadow-md">
                        <img class="w-20 h-20 m-auto mb-6" src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                        <p class="text-white text-center font-gotham-medium"><?php the_sub_field('text'); ?></p>
                    </li>
                <?php endif; ?>               
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    
</section>