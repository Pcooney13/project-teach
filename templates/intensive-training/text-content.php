<?php
$title = get_sub_field('title');
$text_content = get_sub_field('text');

if ($title) {
    $title = '<h6 class="font-gotham-medium text-lg">' . $title . '</h6>';
}

echo '<div id="section' . $block_count . '" class="section ' . $type_of_event . ' space-y-4 scroll-mt-20">' .
        $title .
        $text_content .
    '</div>';
?>