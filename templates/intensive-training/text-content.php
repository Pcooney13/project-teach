<?php
$title = get_sub_field('title');

if ($title) {
    $title = '<h6 class="font-gotham-medium text-lg">' . $title . '</h6>';
}

echo '<div id="section' . $block_count . '" class="section space-y-4 scroll-mt-12">' .
        $title .
        get_sub_field('text') .
    '</div>';
?>