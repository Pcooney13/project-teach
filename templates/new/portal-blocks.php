<!-- Parse URL -->
<!-- <a href="<?php echo parse_url($link_url, PHP_URL_SCHEME) . '://' . parse_url($link_url, PHP_URL_HOST); ?>" target="_blank" class="-mt-1 text-sm transition-color duration-300 font-gotham no-underline hover:text-<?php echo $color; ?> text-gray-500 -mr-2"><?php echo parse_url($link_url, PHP_URL_HOST); ?></a> -->

<?php
$block_count_total = count(get_sub_field('block'));
$block_count_total = $block_count_total + 1;
$alpine_sections = [];
$logic = [];
for ($i = 1; $i < $block_count_total; $i++) {
    array_push($alpine_sections, 'section' . $i);
}
for ($i = 1; $i < $block_count_total; $i++) {
    $buttons = '';
    foreach ($alpine_sections as $key => $value) {
        $key = $key + 1;
        if ($i === $key) {
            $value = 'section' . $key . ' = true, ';
        } else {
            $value = 'section' . $key . ' = false, ';
        }
        $buttons .= $value;
    }
    array_push($logic, $buttons);
}
if (have_rows('block')) :
    $block_count_current = 1;
    $desktop_portal_buttons = '';
    $new_content = '';
    while (have_rows('block')) : the_row();
        $title = get_sub_field('title');
        $block_content = get_sub_field('block_content');
        $resource_topics = get_sub_field('resource_topics');
        $resource_tags = get_sub_field('resource_tags');
        $resource_types = get_sub_field('resource_types');
        $resource_demographics = get_sub_field('resource_demographics');

        $desktop_portal_buttons .= '<button x-on:click="' . substr($logic[$block_count_current - 1], 0, -2) . '" :class="section' . $block_count_current . ' === true ? `text-blue border-purple` : `text-cool-gray`" class="font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent text-blue border-purple">
                    ' . $title . '
                </button>';

        $new_content .= '<button x-on:click="' . substr($logic[$block_count_current - 1], 0, -2) . '" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
                    <p :class="section' . $block_count_current . ' === true &amp;&amp; `font-gotham-bold`" class="font-gotham-bold">Addressing Mental Health in Primary Care</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 ml-1 h-4 transform transition-all duration-300 rotate-180" :class="section' . $block_count_current . ' === true &amp;&amp; `rotate-180`">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                    </svg>
                </button>';

        $args = array(
            'numberposts' => 10,
            'post_type' => 'pt_resources',
            'tax_query' => array(
                array(
                    'taxonomy' => 'resource_topics',
                    'field' => 'slug',
                    'terms' => $resource_topics[0]->slug,
                ),
                array(
                    'taxonomy' => 'resource_tags',
                    'field' => 'slug',
                    'terms' => $resource_tags[0]->slug,
                ),
                array(
                    'taxonomy' => 'resource_types',
                    'field' => 'slug',
                    'terms' => $resource_types[0]->slug,
                ),
                array(
                    'taxonomy' => 'resource_demographic',
                    'field' => 'slug',
                    'terms' => $resource_demographics[0]->slug,
                )
            ),
            // 'meta_key' => 'field_name',
            // 'meta_value' => 'field_value'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            $new_content .= '<div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section' . $block_count_current . ' === true">
            <p class="text-2xl text-black mb-4 font-gotham-bold">' . $title . '</p>';
            while ($query->have_posts()) : $query->the_post();
                $tags = get_the_terms(get_the_ID(), 'resource_tags');
                $new_content .= '<div class="bg-white rounded-lg p-4 mb-4">
                <a href="' . get_the_permalink() . '" class="text-xl font-gotham-bold mb-1 transition hover:text-blue">' .
                    get_the_title() .
                    '</a>
                <a href="#" target="_blank" class="font-gotham text-blue mb-4 flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6"></path>
                        <path d="M11 13l9 -9"></path>
                        <path d="M15 4h5v5"></path>
                    </svg>' .
                    parse_url(get_field('url_link'), PHP_URL_HOST) .
                    '</a>                
                <p class="font-gotham-light leading-7 text-lg">' . get_the_excerpt() . '</p>';
                if (!empty($tags)) :
                    $new_content .= '<div class="mt-4">
                        <span class="font-gotham-bold text-sm mb-2 uppercase text-blue">Tags:</span>';
                    foreach ($tags as $term) {
                        $new_content .= '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 hover:text-blue ml-1">' . $term->name . '</a>';
                    }
                    $new_content .= '</div>';
                endif;
                $new_content .= '</div>';
            endwhile;
            $new_content .= '</div>';
        endif;

        wp_reset_query();

        $block_count_current++;
    endwhile;

    $chunk = '<div class="hidden md:block border-b border-solid border-cool-gray mb-8">
        <div class="max-w-screen-lg lg:max-w-screen-xl mx-auto flex flex-col md:flex-row gap-4">' .
        $desktop_portal_buttons .
        '</div>
    </div>';
endif; ?>


<section class="py-16 px-4 md:px-0" x-data="{ section1: true, section2: false, section3: false, section4:false }">
    <div class="max-w-screen-lg lg:max-w-screen-xl mx-auto">
        <h2 class="md:text-center font-gotham-bold text-2xl md:text-3xl mb-12">Resources From Around the Web</h2>
        <?php echo $chunk; ?>
        <div class="max-w-screen-lg mx-auto flex flex-col">
            <?php echo $new_content; ?>
        </div>
    </div>
</section>