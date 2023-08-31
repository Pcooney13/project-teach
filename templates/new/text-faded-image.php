<?php

$hero_classes = 'flex flex-col md:flex-row items-center';
$padding = get_sub_field('padding');
$title = get_sub_field('title');
$text = get_sub_field('text');
$button_field = get_sub_field('button');
$button_field_2 = get_sub_field('button_2');
$image = get_sub_field('image'); // Image ID
$image = wp_get_attachment_image_src($image, 'large');
$image = $image[0];
$flip_content = get_sub_field('flip_content');
$bg_color = get_sub_field('bg_color');
if ($bg_color) {
    $bg_color = 'bg-white';
}
if ($flip_content) {
    $image_bg_position = 'md:bg-[-40%_0%]';
    $bg_gradient_direction = 'bg-gradient-to-l';
    $text_position = 'md:ml-auto md:pl-8';
} else {
    $image_bg_position = 'md:bg-[190%_0%]';
    $bg_gradient_direction = 'bg-gradient-to-r';
    $text_position = '';
}

$display_image = '<div class="md:absolute h-full w-full md:bg-[length:75%] bg-center ' . $image_bg_position . ' aspect-video md:aspect-none bg-cover bg-no-repeat" style="
    background-image: url(' . $image . ');">
</div>
<div class="hidden md:block absolute h-full w-full ' . $bg_gradient_direction . ' from-white via-white"></div>';

if ($button_field && $button_color) {
    $button = '<div class="mt-8">
        <a class="border-solid border-2 ' . $button_border_color . ' font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent ' . $button_hover_bg_color . ' ' . $button_bg_color . '" title="' . $button_field['title'] . '" href="' . $button_field['url'] . '">' .
            $button_field['title'] .
        '</a>';
    if ($button_field_2) {
        $button .= '<a class="ml-2 border-solid border-2 ' . $button_border_color . ' font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent ' . $button_hover_bg_color . ' ' . $button_bg_color . '" title="' . $button_field_2['title'] . '" href="' . $button_field_2['url'] . '">' .
            $button_field_2['title'] .
        '</a>';
    }
    $button .= '</div>';
} else {
    $button = '';
}

$display_text = '<div class="relative mt-auto ' . $text_position . ' px-4 md:px-4 py-8 md:w-1/2 bg-white md:py-16">
    <div class="flex flex-col gap-2">
        <h2 class="text-2xl '. $title_size .' font-gotham-bold ' . $title_color . '">' .
                $title .
        '</h2>
        <div class="pt-text font-gotham-light leading-7 text-lg flex flex-col gap-4">' .
            $text .
        '</div>
    </div>' .
    $button .
'</div>';

echo '
<div class="' . $padding . ' ' . $bg_color . '">
    <div class="relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0">
        <div class="relative rounded-xl overflow-hidden shadow-xl">' .
            $display_image .            
            $display_text .
        '</div>
    </div>
</div>';