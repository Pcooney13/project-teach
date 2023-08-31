<!-- Align image: left side | right side -->
<?php 
    $image = get_field('column_image');
    $align_image = get_field('image_location'); 
    $reorder_image = '';
    $image_margin = '';
    $text_size = get_field('text_size');

    if ($text_size === 'small') {
        $header_size = 'text-xl';
        $para_size = 'text-sm';
    } elseif ($text_size === 'large') {
        $header_size = 'text-3xl';
    } else {
        $header_size = NULL;
        $para_size = NULL;
    }             

    if ($align_image === 'right') {
        $reorder_image = 'order-first md:order-last';
        $image_margin = 'md:ml-6';
    } else {
        $image_margin = 'md:mr-6';
    }
?>
<section class="flex justify-center flex-col md:flex-row my-4 py-4">
    
    <!-- Image Column -->
    <?php if( $image ):

        // Image variables.
        $title = $image['title'];
        $size = 'large';
        $large = $image['sizes'][ $size ]; ?>

        <div
            title="<?php echo esc_attr($title); ?>"
            class="<?php echo $reorder_image . " " . $image_margin; ?> md:max-w-lg h-72 md:h-auto md:flex-1 bg-cover bg-center" 
            style="background-image:url('<?php echo esc_url($large); ?>'); min-height:320px">
        </div>
    <?php endif; ?>
    
    <!-- Text Column -->
    <div class="md:max-w-md self-center">
        <?php if( have_rows('column_text_content') ):?>
            <!-- Text Content Repeater -->
            <?php while( have_rows('column_text_content') ) : the_row();
                $column_title = get_sub_field('title');
                $column_text = get_sub_field('text');
                $column_button_text = get_sub_field('button_text');
                $column_button_link = get_sub_field('button_link'); 
                ?>
                <!-- Title -->
                <?php if ($column_title) : ?>
                    <h2 class="<?php if ($header_size) echo $header_size; ?> font-gotham-bold leading-tight mb-2"><?php echo $column_title; ?></h2>
                <?php endif; ?>
                <!-- Text -->
                <?php if ($column_text) : ?>
                    <div class="<?php if ($para_size) echo $para_size; ?> mb-4 mb-4-p"><?php echo $column_text; ?></div>
                <?php endif; ?>
                <!-- Button -->
                <?php if ($column_button_text && $column_button_link) : ?>
                    <a 
                        class="border-2 border-transparent font-gotham-bold inline-block no-underline text-white rounded-full px-6 py-3 transition-all duration-300 hover:bg-transparent hover:text-blue bg-blue hover:border-blue" 
                        href="<?php echo $column_button_link; ?>"
                    >
                        <?php echo $column_button_text; ?>
                    </a>
                <?php endif; ?>
            <?php endwhile;?>
        <?php endif;?>       
    </div>

</section>