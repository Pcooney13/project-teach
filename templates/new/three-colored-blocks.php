<?php
$content = '';
$padding = get_sub_field('padding');
$title = get_sub_field('title');
$text = get_sub_field('text');
$bg_color = get_sub_field('bg_color');
if ($bg_color) {
    $bg_color = 'bg-white';
}
$gradients = [
    'background:linear-gradient(rgba(3, 159, 218, 0), rgba(3, 159, 218, 1))',
    'background:linear-gradient(rgba(62, 13, 133, 0), rgba(62, 13, 133, 1))',
    'background:linear-gradient(rgba(123, 191, 67, 0), rgba(123, 191, 67, 1))'
];
$text_colors = [
    'text-blue',
    'text-purple',
    'text-green'
];
$border_colors = [
    'border-blue',
    'border-purple',
    'border-green'
];
$bg_colors = [
    'bg-blue',
    'bg-purple',
    'bg-green'
];

if (!empty($title) || !empty($text)) {
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
}

if (have_rows('block')) {
    $i = 0;
    $content .= '<div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:px-0">';
    while (have_rows('block')) : the_row();
        $title = get_sub_field('title');
        $image = get_sub_field('image'); // Image ID
        $image = wp_get_attachment_image_src($image, 'large');
        $image = $image[0];
        $text = get_sub_field('text');
        $button_field = get_sub_field('button');
        $button_field_2 = get_sub_field('button_2');
        $icon = get_sub_field('icon');
        $title_size = get_sub_field('title_size');
        // set Title-Size variables
        if ($title_size) {
            $title_size = "md:text-5xl md:leading-[3rem]";
        } else {
            $title_size = "md:text-3xl";
        }
        if ($icon) {
            $svg_classes = 'h-6 w-6 md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] ' . $text_colors[$i] . ' md:text-white ';
            // Remove default stroke color that is applied to some icons @ https://tablericons.com
            $svg = str_replace(' stroke="#2c3e50"', ' stroke="currentColor"', $icon);
            // Add classes to svg
            $svg = substr_replace($svg, $svg_classes, 47, 0);
        } else {
            $svg = '';
        }

        if ($button_field) {
            $button = '<div class="mt-8">
                            <a class="border-solid border-2 ' . $border_colors[$i] . ' font-gotham-bold inline-block no-underline ' . $text_colors[$i] . ' rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="' . $button_field['title'] . '" href="' . $button_field['url'] . '">' .
                $button_field['title'] .
                '</a>';
            if ($button_field_2) {
                $button .= '<a class="border-solid border-2 ' . $border_colors[$i] . ' font-gotham-bold inline-block no-underline ' . $text_colors[$i] . ' rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="' . $button_field_2['title'] . '" href="' . $button_field_2['url'] . '">' .
                    $button_field_2['title'] .
                    '</a>';
            }
            $button .= '</div>';
        }        
        $content .= '<div class="md:aspect-square relative rounded-xl overflow-hidden shadow-xl">
                        <div class="absolute h-full w-full bg-cover bg-center" style="background-image:url(' . $image . ')">
                        </div>
                        <div class="absolute h-full w-full ' . $bg_colors[$i] . '" style="opacity:85%">
                        </div>
                        <div class="absolute h-full w-full" style="' . $gradients[$i] . '">
                        </div>
                        <div class="relative p-4 flex flex-col text-white h-full">
                            <div class="w-10 h-10 md:w-auto md:h-auto md:flex-1 bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-0">' .
            $svg .
            '</div>
                            <div class="mt-auto flex flex-col flex-1 gap-2">
                                <p class="text-2xl '. $title_size .' font-gotham-bold text-white truncate leading-tight">' .
            $title .
            '</p>
                                <div class="pt-text font-gotham leading-7 text-lg flex flex-col gap-4">' .
            $text .
            '</div>
                            </div>' .
            $button .
            '</div>
                    </div>';
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