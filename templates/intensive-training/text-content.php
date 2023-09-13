<?php
$title = get_sub_field('title');
<<<<<<< HEAD
$text_content = get_sub_field('text');
=======
>>>>>>> b459d6538b26cbb7fefaa466f490410af4239737

if ($title) {
    $title = '<h6 class="font-gotham-medium text-lg">' . $title . '</h6>';
}

echo '<div id="section' . $block_count . '" class="section space-y-4 scroll-mt-20">' .
        $title .
<<<<<<< HEAD
        $text_content .
=======
        get_sub_field('text') .
>>>>>>> b459d6538b26cbb7fefaa466f490410af4239737
    '</div>';
?>