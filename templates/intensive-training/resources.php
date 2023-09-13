<?php
$title = get_sub_field('title');
$resources = '';

if ($title) {
    $title = '<h6 class="font-gotham-medium text-lg">' . $title . '</h6>';
}

if (have_rows('resources')) :
    $resources .= '<ul class="pl-6 list-disc space-y-4">';
    while (have_rows('resources')) : the_row();
        $resource = get_sub_field('resource');
        if ($resource) :
            $resource_url = $resource['url'];
            $resource_title = $resource['title'];
            $resource_target = $resource['target'] ? $resource['target'] : '_self';

            $resources .= '<li class="font-gotham-light text-lg">
                    <a href="' . $resource_url . '" target="' . $resource_target . '" class="font-gotham-medium ' . $text_color . ' hover:text-black transition">
                        ' . $resource_title . '
                    </a>
                </li>';
        endif;
    endwhile;
    $resources .= '</ul>';
endif; 

echo '<div id="section' . $block_count . '" class="section space-y-4 scroll-mt-20">' .
    $title .
    $resources .
'</div>';