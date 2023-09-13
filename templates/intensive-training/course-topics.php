<?php

$title = get_sub_field('title');
if ($title) {
    $title = '<h6 class="font-gotham-medium text-lg">' . $title . '</h6>';
}

$topics = '';
if (have_rows('topics')) :
    $topic_count = 1;
    $topics .= '<div class="grid md:grid-cols-2 gap-4">';
    while (have_rows('topics')) : the_row();
        $topic = get_sub_field('topic');
        $topics .= '<a href="#mod-' . $topic_count . '" x-on:click="day1 = true, day2 = false" class="bg-white rounded-xl overflow-hidden group items-center shadow transition hover:shadow-lg">
                    <div class="border-l-0 hover:border-l-8 h-full hover:pr-2 ' . $border_color . ' flex flex-col justify-center border-solid p-4 w-full transition-all duration-300">
                        <p class="font-gotham-medium text-slate-500 text-sm mb-1">Module Topic ' . $topic_count . ':</p>
                        <p class="font-gotham-medium ' . $text_color . ' group-hover:text-black transition">' . $topic . '</p>
                    </div>
                </a>';
        $topic_count++;
    endwhile;
    $topics .= '</div>';
endif;

echo '<div id="section' . $block_count . '" class="section space-y-4 scroll-mt-20">
    ' . $title . '
    ' . $topics . '
</div>'; ?>

