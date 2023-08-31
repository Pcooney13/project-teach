<?php
$count = 0;
$mobile_view_styles = null;

if (get_sub_field('show_buttons')) {
    $count++;
}
if (get_sub_field('title')) {
    $count++;
}
if (get_sub_field('content')) {
    $count++;
}

if (get_sub_field('title') && get_sub_field('content') && !get_sub_field('show_buttons') && !get_sub_field('show_image')) {
    $count = 1;
}


echo '<style>
    .block-' . $block_count .  ' a:not(.content-link){ 
        color:'. $hex .'; 
    }
</style>';

$blockMargin = 'mb-8';

if (get_sub_field('show_image')) {
    $textContentMargin = 'my-8';
    $mobile_view_styles = "p-4 md:p-0";
} else {
    $textContentMargin = '';
}
if (!get_sub_field('leave_title_black')) {
    $title_color = 'text-' . $color;
} else {
    $title_color = 'text-black';
}
if (get_sub_field('image_location') === 'right') {
    $image_location = 'order-0 lg:order-1 lg:ml-8';
} else {
    $image_location = 'lg:mr-8';
}
if (!empty(get_sub_field('code_only'))) {
    $block_content = get_sub_field('content', false, false);
    $page_width = '';
} else {
    $block_content = get_sub_field('content');
    $page_width = 'max-w-screen-xl mx-auto';
}
?>
<div class="block-<?php echo $block_count;?> content-block flex flex-col md:flex-row <?php echo $blockMargin;?> <?php echo $page_width;?>">
    <?php 
        $show_image = get_sub_field('show_image');
        if (get_sub_field('image_dimensions') === 'image') {
            $image_dimensions = 'image';
        } else if (get_sub_field('image_dimensions') === 'contain') {
            $image_dimensions = 'bg-contain bg-no-repeat';
        } else {
            $image_dimensions = 'bg-cover';
        }
        var_dump($image_dimensions);
        $image = get_sub_field('image');
        $image_width = get_sub_field('image_width');
        if ($image && $image_dimensions === 'image') {
            echo '<img class="w-full md:w-' . $image_width . '" src="' . $image['url'] . '"/>';
        } else if ( $show_image && $image ) {
            echo '<div style="background-image:url(' . $image['url'] . ')" class="h-64 md:h-auto w-full md:w-' . $image_width . ' ' . $image_location . ' bg-center ' . $image_dimensions . '"></div>';
        }
    ?>
    <div class="md:bg-transparent flex-1 <?php echo $mobile_view_styles; ?> md:<?php echo $textContentMargin;?>">
        <?php if (get_sub_field('title')) {
            echo '<h3 class="text-xl lg:text-' . get_sub_field('title_size') . ' mb-4 font-bold ' . $title_color . '">' . get_sub_field('title') . '</h3>';
        }
        if (get_sub_field('content')) echo '<div class="mb-4">' . $block_content . '</div>';?>
        <?php if (get_sub_field('show_buttons')) : ?>
            <div class="flex">
                <?php 
                $primary_link = get_sub_field('primary_button');
                $secondary_link = get_sub_field('secondary_button');

                if ($primary_link && $secondary_link) {
                    $addSpace = "ml-4";
                } else {
                    $addSpace = "";
                }            

                if( $secondary_link ): 
                    $link_url = $secondary_link['url'];
                    $link_title = $secondary_link['title'];
                    $link_target = $secondary_link['target'] ? $secondary_link['target'] : '_self'; ?>            
                    <a 
                        class="content-link bg-transparent border-2 border-<?php echo $color; ?> text-<?php echo $color; ?> xs:px-4 xs:py-2 md:py-4 md:px-8 rounded-full font-bold hover:bg-<?php echo $color; ?> hover:text-white hover:opacity-50" 
                        href="<?php echo esc_url( $link_url ); ?>" 
                        target="<?php echo esc_attr( $link_target ); ?>"
                    >
                        <?php echo esc_html( $link_title ); ?>
                    </a>
                <?php endif; 

                if( $primary_link ): 
                    $link_url = $primary_link['url'];
                    $link_title = $primary_link['title'];
                    $link_target = $primary_link['target'] ? $primary_link['target'] : '_self'; ?>            
                    <a 
                        class="content-link bg-<?php echo $color; ?> text-white border-2 border-<?php echo $color; ?> xs:px-4 xs:py-2 md:py-4 md:px-8 rounded-full font-bold hover:opacity-50  <?php echo $addSpace; ?>" 
                        href="<?php echo esc_url( $link_url ); ?>" 
                        target="<?php echo esc_attr( $link_target ); ?>"
                    >
                        <?php echo esc_html( $link_title ); ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>