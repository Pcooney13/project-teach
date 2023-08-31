<?php
$content = '';
$title = get_sub_field('title');
$padding = get_sub_field('padding');
$columns = get_sub_field('columns');
$bg_color = get_sub_field('bg_color');
$title_in_grid = get_sub_field('title_in_grid');
$title_span = get_sub_field('title_span');
if ($bg_color) {
    $bg_color = 'bg-white';
}
if ($title_in_grid) {
    if ($title_span) {
        $title_span = 'col-span-2';
    } else {
        $title_span = 'col-span-1';
    }
    // Display title inside grid
    $title_content = ''; // dont display title/text content above the grid
    $title_in_grid = '<div class="relative '. $title_span .' rounded-xl md:flex justify-center items-center overflow-hidden">
        <h2 class="text-2xl ' . $title_size . ' font-gotham-bold ' . $title_color . '">' .
            $title .
        '</h2>
    </div>';
}
else if (!empty($title) || !empty($text)) {
    // Display title/text content above the grid
    $title_in_grid = ''; // dont display title inside grid
    $title_content = '<div class="flex flex-col gap-2 mb-4">
        <h2 class="text-2xl ' . $title_size . ' font-gotham-bold ' . $title_color . '">' .
            $title .
        '</h2>
        <div class="pt-text font-gotham-light leading-7 text-lg flex flex-col gap-4">' .
            $text .
        '</div>
    </div>';
} else {
    $title_content = '';
    $title_in_grid = '';
}

if ($columns) {
    $grid_columns = 'md:grid-cols-4';
} else {
    $grid_columns = 'md:grid-cols-3';
}

// block [repeater] content
if (have_rows('block')) {
    $i = 0;
    $content .= '<div class="grid grid-cols-1 '. $grid_columns .' gap-4 md:px-0">';
    if (!empty($title_in_grid)) {
        $content .= $title_in_grid;
    }
    while (have_rows('block')) : the_row();
        $title = get_sub_field('title');
        $image = get_sub_field('image'); // Image ID
        if ($image) {
            $image = wp_get_attachment_image_src($image, 'large');
            $image = $image[0];
        }
        $icon = get_sub_field('icon');
        $title_size = get_sub_field('title_size');
        $accent_color = get_sub_field('accent_color');
        $border = get_sub_field('border');
        if ($accent_color) {
            if ($accent_color === '#3a0e79') {
                $md_text_accent = 'md:text-purple';
                $bg_accent = 'bg-purple';
                $hover_accent = 'group-hover:text-purple';
                $border_accent = 'border-2 border-solid border-purple';
            } elseif ($accent_color === '#039fda') {
                $md_text_accent = 'md:text-blue';
                $bg_accent = 'bg-blue';
                $hover_accent = 'group-hover:text-blue';
                $border_accent = 'border-2 border-solid border-blue';
            } elseif ($accent_color === '#7bbf43') {
                $md_text_accent = 'md:text-green';
                $bg_accent = 'bg-green';
                $hover_accent = 'group-hover:text-green';
                $border_accent = 'border-2 border-solid border-green';
            } elseif ($accent_color === '#e09b3d') {
                $md_text_accent = 'md:text-orange';
                $bg_accent = 'bg-orange';
                $hover_accent = 'group-hover:text-orange';
                $border_accent = 'border-2 border-solid border-orange';
            }
        } else {
            // fallback Title-Color
            $md_text_accent = 'md:text-blue';
            $bg_accent = 'bg-blue';
            $hover_accent = 'group-hover:text-blue';
            $border_accent = 'border-2 border-solid border-orange';
        }
        if (empty($border)) {
            $border_accent = '';
        }
        // echo $border_accent;
        // set Title-Size variables
        if ($title_size) {
            $title_size = 'text-2xl';
        } else {
            $title_size = 'text-base';
        }
        $image_content = '';
        if ($image) {
            $image_content =
            '<div class="flex-1 w-1/2 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12 mx-auto">
                    <img class="md:max-h-[3rem] h-auto w-full" src="' . $image . '">
                </div>';
        } elseif ($icon) {
            $svg_classes = 'h-6 w-6 md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-white ' . $md_text_accent . ' ';
            // Remove default stroke color that is applied to some icons @ https://tablericons.com
            $svg = str_replace(' stroke="#2c3e50"', ' stroke="currentColor"', $icon);
            // Add classes to svg
            $svg = substr_replace($svg, $svg_classes, 47, 0);
            $image_content = '<div class="flex-1 w-10 h-10 md:w-auto md:h-auto '. $bg_accent . ' rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">' .
                $svg .
            '</div>';
        } else {
             $image_content = '';
        }
        $content .= '<a href="/provider-resources" class="relative rounded-xl '. $border_accent .' overflow-hidden shadow-xl bg-white transition duration-300 hover:-translate-y-2 shadow-lg hover:shadow-2xl group">
            <div class="relative p-4 flex flex-col h-full">' .
                    $image_content .
                '<div class="mt-auto flex-1 flex flex-col">
                    <p class="'. $title_size .' font-gotham-bold leading-tight transition ' . $hover_accent . '">'. $title .'</p>
                </div>
            </div>
        </a>';        
        $i++;
    endwhile;
    $content .= '</div>';
}

echo '<div class="' . $padding . ' ' . $bg_color . '">
    <div class="relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0">' .
    $title_content .
    $content .
    '</div>
</div>';

?>