<?php

$title = get_sub_field('title');

echo '<div id="section' . $block_count . '" class="section space-y-4 scroll-mt-12">' .
    '<h6 class="font-gotham-medium text-lg">' . $title . '</h6>' .
    '<div class="grid md:grid-cols-2 gap-4">';
$posts = get_sub_field('presenters');
if ($posts) :
    foreach ($posts as $post) : setup_postdata($post);
        // echo '<a href="' . get_the_permalink() . '">' .get_the_title() . get_the_ID() .'</a>';
        echo '<a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow transition hover:shadow-lg">
            <img class="w-14 h-14" src="'. get_the_post_thumbnail_url('', 'thumbnail') .'">
            <p class="font-gotham-medium p-4 text-slate-500 ' . $group_hover_text_color . ' transition">'. get_the_title() .'</p>
        </a>';
    endforeach;
    wp_reset_postdata();
endif;
echo '</div>' .
    '</div>'; ?>
