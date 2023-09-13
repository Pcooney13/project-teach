<?php
$title = get_sub_field('title');
if (isset($date_2)) {
    $justify_date = 'justify-between';
} else {
    $justify_date = 'justify-center';
}
?>

<div id="section<?php echo $block_count; ?>" class="section space-y-4 scroll-mt-20" x-cloak>
    <h6 class="font-gotham-medium text-lg"><?php echo $title; ?></h6>
    <?php if (isset($date_2)) : ?>
        <div class="hidden sm:block bg-white rounded-xl shadow">
            <nav class="grid md:grid-cols-2 text-center p-2">
                <button x-on:click="day1 = true, day2 = false" :class="day1 === true ? `text-white <?php echo $bg_color; ?> font-gotham-medium shadow-sm` : `text-slate-500 font-gotham <?php echo $hover_text_color; ?>`" class="p-2 rounded-lg <?php echo $text_color; ?> font-gotham-medium">
                    Day 1
                </button>
                <button x-on:click="day2 = true, day1 = false" :class="day2 === true ? `text-white <?php echo $bg_color; ?> font-gotham-medium shadow-sm` : `text-slate-500 font-gotham <?php echo $hover_text_color; ?>`" class="p-2 rounded-lg <?php echo $text_color; ?> font-gotham-medium">
                    Day 2
                </button>
            </nav>
        </div>
    <?php endif; ?>

    <?php if (have_rows('day')) :
        $day_count = 1;
        while (have_rows('day')) : the_row();
            if ($day_count === 1) :
                $banner_date = $date_1->format('l, F j, Y');
            else :
                $banner_date = $date_2->format('l, F j, Y');
            endif; ?>
            <div class="bg-white rounded-xl shadow" x-show="day<?php echo $day_count; ?> === true">
                <div class="p-4 pb-0 bg-white rounded-xl mb-4 sticky top-16 flex">
                    <div class="flex items-center w-full <?php echo $justify_date; ?> p-4 <?php echo $bg_color_light; ?> rounded-lg shadow-sm">
                        <?php if (isset($date_2)) : ?>
                            <button class="group rounded-full <?php echo $hover_bg_color; ?> transition opacity-0 pointer-events-none" :class="day2 === true && 'opacity-100 pointer-events-auto'" x-on:click="day1 = true, day2 = false">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="<?php echo $text_color_dark; ?> group-hover:text-white transition w-6 h-6">
                                    <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        <?php endif; ?>
                        <h6 class="font-gotham-medium text-lg <?php echo $text_color_dark; ?>">
                            <?php if (isset($date_2)) {echo 'Day ' . $day_count . ' - ';} ?><?php echo $banner_date; ?>
                        </h6>
                        <?php if (isset($date_2)) : ?>
                            <button class="group rounded-full <?php echo $hover_bg_color; ?> transition opacity-0 pointer-events-none" :class="day1 === true && 'opacity-100 pointer-events-auto'" x-on:click="day2 = true, day1 = false">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="<?php echo $text_color_dark; ?> group-hover:text-white transition w-6 h-6">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if (have_rows('modules')) : 
                    $mod_count = 0;
                    ?>
                    <div class="space-y-8 p-4">
                        <?php while (have_rows('modules')) : the_row();
                            $module_title = get_sub_field('title');
                        ?>
                            <div class="space-y-4">
                                <?php if ($module_title) : ?>
                                    <h5 id="mod-<?php echo $mod_count; ?>" class="font-gotham-light text-xl <?php echo $text_color; ?> scroll-mt-40"><?php echo $module_title; ?></h5>
                                    <?php $mod_count++; ?>
                                <?php endif; ?>
                                <?php $event_total = count(get_sub_field('events')); ?>
                                <?php if (have_rows('events')) :
                                    $event_count = 1; ?>
                                    <?php while (have_rows('events')) : the_row();
                                        $event_type = get_sub_field('event_type');
                                        if ($event_total !== $event_count) :
                                            $border_bottom = 'pb-4 border-b border-solid border-slate-200';
                                        else :
                                            $border_bottom = '';
                                        endif;
                                        $start_time = get_sub_field('start_time');
                                        $start_time = preg_replace("/\s+/", "", $start_time);
                                        $start_time = substr($start_time, 0, -2);
                                        if ($event_type !== 'event') :
                                            if ($event_type === 'adjourn') {
                                                $event_time = get_sub_field('start_time');
                                            } else {
                                                $event_time = $start_time.'-'.get_sub_field('end_time');
                                            }
                                            ?>
                                            <div class="<?php echo $bg_color_very_light; ?> rounded-xl py-4 space-y-8">
                                                <div class="flex gap-4">
                                                    <p class="font-gotham-medium text-slate-600 text-sm w-28 text-right"><?php echo $event_time; ?></p>
                                                    <div class="flex-1">
                                                        <h4 class="font-gotham-medium"><?php echo get_sub_field('title'); ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="flex gap-4 <?php echo $border_bottom; ?>">
                                                <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right"><?php echo $start_time; ?>-<?php echo get_sub_field('end_time'); ?></p>
                                                <div class="flex-1">
                                                    <h4 class="font-gotham-medium mb-0.5 max-w-lg"><?php echo get_sub_field('title'); ?></h4>
                                                    <?php $mods = get_sub_field('moderators'); ?>
                                                    <?php if ($mods) : ?>
                                                        <div class="flex gap-2">
                                                            <p class="font-gotham-medium text-base text-slate-500 w-[90px] text-right mb-1">Moderator:</p>
                                                            <div class="flex flex-col">
                                                                <?php foreach ($mods as $post) : setup_postdata($post);
                                                                    echo '<a href="'.get_the_permalink().'" class="text-left font-gotham text-slate-500 ' . $hover_text_color . ' transition">' . get_the_title() . '</a>';
                                                                endforeach;
                                                                wp_reset_postdata(); ?>
                                                            </div>
                                                        </div>
                                                        <?php $posts = get_sub_field('presenters');
                                                        if ($posts) : ?>
                                                            <div class="flex gap-2">
                                                                <p class="font-gotham-medium text-base text-slate-500 w-[90px] text-right">Panelists:</p>
                                                                <div class="flex flex-col">
                                                                    <?php foreach ($posts as $post) : setup_postdata($post);
                                                                        echo '<a href="'.get_the_permalink().'" class="text-left font-gotham mb-1 text-slate-500 ' . $hover_text_color . ' transition">' . get_the_title() . '</a>';
                                                                    endforeach;
                                                                    wp_reset_postdata(); ?>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php else : ?>
                                                        <?php $posts = get_sub_field('presenters');
                                                        if ($posts) :
                                                            foreach ($posts as $post) : setup_postdata($post);
                                                                echo '<a href="'.get_the_permalink().'" class="text-left font-gotham text-slate-500 ' . $hover_text_color . ' transition">' . get_the_title() . '</a>';
                                                            endforeach;
                                                            wp_reset_postdata();
                                                        endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php $event_count++; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php $day_count++; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>