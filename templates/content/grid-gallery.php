<?php
    $total_columns = get_sub_field('columns');
    $gallery_blocks = 'gallery_block';

    if ($block_count === $total_blocks) {
        $grid_margin = '-mb-8 py-2';
    }
    // elseif ($block_count === 1) {
    //     $grid_margin = '-mb-8';
    // } 
    else {
        $grid_margin = 'mb-8';
    }
?>


<?php if ( have_rows($gallery_blocks) ) : ?>
    <div class="grid-container <?php echo $grid_margin; ?> w-screen grid grid-cols-1 md:grid-cols-2 lg:grid-rows-2 lg:grid-cols-<?php echo $total_columns; ?> gap-2">
        <?php while( have_rows($gallery_blocks) ) : the_row(); ?>

            <?php
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $image = get_sub_field('image');
                $link = get_sub_field('link');
                $row_span = get_sub_field('row_span');
                $col_span = get_sub_field('columns_span');
                $block_color = get_sub_field('block_color');
                $RGB_color = hex2rgb($block_color);
                $Final_Rgb_color = implode(", ", $RGB_color);      

                if ($row_span && $col_span) {
                    $grid_css = ' md:row-span-' . $row_span . ' lg:col-span-' . $col_span . ' ';
                } elseif ($row_span) {
                    $grid_css = ' md:row-span-' . $row_span . ' ';
                } elseif ( $col_span) {
                    $grid_css = ' lg:col-span-' . $col_span . ' ';
                } else {
                    $grid_css = '';
                }                             
            ?>

            <a   
                href="<?php echo $link['url']; ?>"
                target="<?php echo $link['target']; ?>"
                class="grid-block relative flex rounded-sm flex-col justify-center group bg-navy <?php echo $grid_css; ?> bg-white overflow-hidden"
            >
                <!-- Background Gradient -->
                <div 
                    class="bg-center bg-cover top-0 left-0 absolute h-full w-full transform transition-all duration-300 group-hover:scale-110"
                    style= "
                        background-image:linear-gradient(
                            <?php 
                                echo 'rgba(' . $Final_Rgb_color . ', 0.2) 10%, ';
                                echo 'rgba(' . $Final_Rgb_color . ', 0.55) 40%, '; 
                                echo 'rgba(' . $Final_Rgb_color . ', 1) 85%), ';
                                echo 'url(' . $image['sizes']['menu-thumb']; 
                            ?>
                        )
                    "
                >
                </div>
                <!-- Background Hover color Wash -->
                <div style="background:<?php echo $block_color; ?>" class="absolute h-full w-full transition-all duration-300 opacity-0 group-hover:opacity-50"></div>
                <!-- Block Content -->
                <div class="flex z-10 h-full flex-col p-4">
                    <?php 
                        if ($title) {
                            echo '<h3 class="mt-auto font-mont text-lg uppercase pt-48 font-bold text-white">' . $title . '</h3>';
                        }
                        if ($text) {
                            echo '<p class="text-white text-light text-base">' . $text . '</p>';
                        }
                    ?>
                </div>
            </a>

        <?php endwhile; ?>
    </div>
<?php endif; ?>