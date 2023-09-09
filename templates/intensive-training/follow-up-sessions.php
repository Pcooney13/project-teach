<?php
$today = date('Ymd');
$title = get_sub_field('title');
$text = get_sub_field('text') ? get_sub_field('text') : '';
$follow_up_sessions = '';

if ($title) {
    $title = '<h6 class="font-gotham-medium text-lg">' . $title . '</h6>';
} else {
    $title = '';
}

$old_image = '<div class="w-40">
                <div class="relative">
                    <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                    <div class="absolute group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 ' . $text_color . ' ' . $bg_color_light . ' text-sm font-bold rounded-full dropshadow-md">
                        Follow-Up
                    </div>
                    <img class="aspect-[4/3] object-cover" src="' . wp_get_attachment_image_url($image, 'medium') . '">
                </div>
            </div>';

if (have_rows('follow_up_sessions')) :
    $follow_up_sessions .= '<div class="flex flex-col gap-4">';
    while (have_rows('follow_up_sessions')) : the_row();
    $follow_up_title = get_sub_field('title');
    $date = get_sub_field('date');
    $follow_up_date = DateTime::createFromFormat('Ymd', $date);
    if ($follow_up_date->format('Ymd') < $today) { 
        $hover_effects = '';
        $move_old_to_bottom = 'order-last';
        $status =
            '<div class="absolute group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 text-red-800 bg-red-100 text-sm font-bold rounded-full dropshadow-md">
                Closed
            </div>';
    } else {
        $hover_effects = 'group';
        $move_old_to_bottom = '';
        $status = '<div class="absolute group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 text-emerald-600 bg-green-200 text-sm font-bold rounded-full dropshadow-md">
                Open
            </div>';
    }
        $follow_up_sessions .= '<div class="flex gap-4 '. $hover_effects .' rounded-xl overflow-hidden bg-white shadow transition hover:shadow-lg'. $move_old_to_bottom.'">
            <div class="w-40 h-auto">                
                <div class="relative h-full">
                    <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                    ' . $status . '
                    <div class="bg-center bg-cover h-full" style="background-image:url('. wp_get_attachment_image_url($image, 'medium').');"></div>
                </div>
            </div>
            <div class="flex-1 flex flex-col gap-2 py-4">
                <div class="font-gotham-medium text-black transition ' . $group_hover_text_color . '">
                    ' . $follow_up_title . '
                </div>
                <div class="flex text-slate-500 gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 mb-1">
                    <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd"></path>
                </svg>
                <div class="font-gotham text-slate-500">'. $follow_up_date->format('l, F j, Y') .'</div>
                </div>';
                $posts = get_sub_field('presenters');
                if ($posts) :
                    $follow_up_sessions .= '<div class="flex text-slate-500 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-1" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                      <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                      <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                      <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>';
                    foreach ($posts as $post) : setup_postdata($post);
                        $follow_up_sessions .= '<a href="'.get_the_permalink().'" class="text-left font-gotham text-slate-500 '. $hover_text_color. ' transition">' . get_the_title() . '</a>';
                    endforeach;
                    wp_reset_postdata();
                    $follow_up_sessions .= '</div>';
                endif;
            $follow_up_sessions .= '</div>
        </div>';

    endwhile;
    $follow_up_sessions .= '</div>';
endif;

echo '<div id="section' . $block_count . '" class="section space-y-4 scroll-mt-12">' .
    $title .
    $text . 
    $follow_up_sessions .
'</div>';