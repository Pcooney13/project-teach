<?php

$hero_classes = 'flex flex-col md:flex-row items-center';
$padding = get_sub_field('padding');
$title = get_sub_field('title');
$text = get_sub_field('text');
$button_field = get_sub_field('button');
$button_field_2 = get_sub_field('button_2');
$image = get_sub_field('image'); // Image ID
$map = get_sub_field('map');
$flip_content = get_sub_field('flip_content');
$bg_color = get_sub_field('bg_color');
if ($bg_color) {
    $bg_color = 'bg-white';
}
if ($flip_content) {
    $text_padding = 'md:pl-8';
    $map_padding = 'md:pr-8';
} else {
    $text_padding = 'md:pr-8';
    $map_padding = 'md:pl-8';
}
if ($map) {
    $display_image = '<div class="w-full order-0 md:order-1 md:w-1/2 ' . $map_padding . '">
        <div class="pt-map relative w-full flex-1">
            <img class="-ml-1 md:ml-0" src="' . get_template_directory_uri() . '/assets/images/new-pt-map-text-expanded.svg">
        </div>
    </div>';
} else {
    $image = wp_get_attachment_image_src($image, 'large');
    $image = $image[0];
    $display_image = '<div class="w-full order-0 md:order-1 md:w-1/2">
        <div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3] shadow-xl">
            <img class="h-full w-full object-cover" src="' . $image . '">
        </div>
    </div>';
}
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

$display_text = '<div class="w-full order-1 md:order-1 md:w-1/2 ' . $text_padding . ' mt-4 md:mt-0">
    <div class="flex flex-col gap-2">
        <h2 class="text-2xl ' . $title_size . ' font-gotham-bold ' . $title_color . '">' .
            $title .
        '</h2>
        <div class="pt-text font-gotham-light leading-7 text-lg flex flex-col gap-4">' .
    $text .
    '</div>
    </div>' .
    $button .
'</div>';

if ($flip_content) {
    $content = $display_image .
        $display_text;
} else {
    $content = $display_text .
        $display_image;
}

echo '
<div class="' . $padding . ' ' . $bg_color . '">
    <div class="relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0 ' . $hero_classes . '">' .
        $content .
    '</div>
</div>';
