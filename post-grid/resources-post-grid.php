<style>
    .layer-content {
        display: none !important;
    }

    #post-grid-7776 .item {
        background: transparent !important;
    }
</style>
<?php
add_filter('post_grid_item_classes', 'post_grid_no_post_text_7776', 10, 2);
function post_grid_no_post_text_7776($item_css_class, $args)
{

    $item_css_class = $item_css_class;
    $grid_id = $args['grid_id'];
    $post_id = $args['post_id'];
    if ($grid_id == '7776') :
        $item_css_class['custom-new'] = 'col-span-full md:col-span-4 lg:col-span-3';
        $custom_class = get_post_meta($post_id, 'custom_field_name', true);
        $item_css_class['custom-field'] = $custom_class;
    endif;

    return $item_css_class;
}

add_filter('post_grid_grid_items_class', 'post_grid_grid_items_class_7776', 10, 2);
function post_grid_grid_items_class_7776($class, $args)
{

    $class = $class;
    $grid_id = $args['grid_id'];

    if ($grid_id == '7776') :
        $class = ' grid grid-cols-8 lg:grid-cols-9 gap-6';
    endif;

    return $class;
}

add_action('post_grid_item_layout', 'post_grid_item_layout_7776', 10);
function post_grid_item_layout_7776($layout_args)
{
    $post_id = $layout_args['post_id'];
    $options = $layout_args['options'];

    if ($options['post_types'][0] === 'pt_resources') :

        if (strlen(get_the_title()) > 80 && strlen(get_the_title()) !== 80) {
            $resource_title = substr(get_the_title(), 0, 80) . '...';
        } else {
            $resource_title = get_the_title();
        }
        $types = get_the_terms($post_id, 'resource_types');
        $tags = get_the_terms($post_id, 'resource_tags');
        $terms = get_the_terms(get_the_id(), 'resource_topics');
        $resource_type_bubble = '';

        if ($terms) {
            $resource_topic = wp_trim_words($terms[0]->name, 1, '');
            if ($resource_topic === 'Child') {
                $video_color_bg = 'bg-blue-200';
                $video_color_fill = 'text-blue';
                $hover_text_color = 'hover:text-blue';
            } elseif ($resource_topic === 'Maternal') {
                $video_color_bg = 'bg-purple-200';
                $video_color_fill = 'text-purple';
                $hover_text_color = 'hover:text-purple';
            }
        } else {
            $video_color_bg = 'bg-green-200';
            $video_color_fill = 'text-green';
            $hover_text_color = 'hover:text-green';
        }

        foreach ($types as $type) {
            if ($type->slug === 'video') {
                $resource_type_bubble = '
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 ' . $video_color_bg . ' ' . $video_color_fill . ' rounded-full dropshadow-md p-1">
                    <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                </svg>';
            }
        }
        if ($terms) {
            $resource_topic = wp_trim_words($terms[0]->name, 1, '');
            if ($resource_topic === 'Child') {
                $resource_topic_bubble = '                                
                <div class="absolute height-full right-0 top-0 mb-2 text-right mt-2 mr-2 flex items-center gap-1">                                
                    <p class="bg-blue-200 text-blue text-sm font-bold px-2 text-sm rounded-full dropshadow-md">Child</p>' .
                    $resource_type_bubble .
                    '</div>';
            } else {
                $resource_topic_bubble = '
                <div class="absolute height-full right-0 top-0 mb-2 text-right mt-2 mr-2 flex items-center gap-1"> 
                    <p class="bg-purple-200 text-purple text-sm font-bold px-2 text-sm rounded-full dropshadow-md">Maternal</p>' .
                    $resource_type_bubble .
                    '</div>';
            }
        } else if ($resource_type_bubble) {
            $resource_topic_bubble = '
                <div class="absolute height-full right-0 top-0 mb-2 text-right mt-2 mr-2 flex items-center gap-1">' .
                $resource_type_bubble .
                '</div>';
        } else {
            $resource_topic_bubble = '';
        }

        echo '<div class="flex md:flex-col items-center h-full bg-off-white md:bg-transparent shadow-lg md:shadow-none rounded-r-xl md:rounded-l-none md:items-start">
            <a class="group" href="' . get_the_permalink() . '">
                <div class="relative rounded-lg overflow-hidden mb-4 shadow-xl">
                    <div class="w-full absolute bg-gradient-to-bl rounded-lg from-black h-full transition-all duration-300 group-hover:opacity-0"></div>' .
            $resource_topic_bubble .
            '<img src="' . get_the_post_thumbnail_url() . '" class="h-44 object-cover w-full">
                </div>
            </a>
            <div class="min-h-[100px] h-full flex flex-col border-b border-solid border-light-gray">
                <div>
                    <a href="' . get_the_permalink() . '" class="inline-block font-gotham-medium transition ' . $hover_text_color . ' mb-1">' .
            $resource_title .
            '</a>
                </div>';
        $authors = get_field('authors');
        if (!empty($authors) && count($authors) === 1) :
            echo '<div class="text-sm font-gotham mb-4 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>';
            foreach ($authors as $post) :
                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post);
                echo '<a class="text-sm font-gotham text-black transition-all duration-300 ' . $hover_text_color . '" href="' . get_the_permalink($post) . '">' . get_the_title($post) . '</a>';
            endforeach;
            wp_reset_postdata();
            echo '</div>';
        elseif (!empty($authors) && count($authors) > 1) :
            echo '<div class="text-sm font-gotham mb-4 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>
                        Multiple Authors
                    </div>';
        endif;

        if (!empty($tags)) :
            echo '<div class="mt-auto">
                <span class="font-gotham-bold text-sm mb-2 mr-px uppercase ' . $video_color_fill . '">Tags:</span>';
                $tag_content = '';
                foreach ($tags as $term) {
                    $tag_content .= '<a href="https://project-teach.launchpaddev.com/pt_resources/?keyword=&format%5B%5D=' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 ' . $hover_text_color . '">' . $term->name . '</a>, ';
                }
                echo rtrim($tag_content, ', ');
            echo '</div>';
        endif;
        echo '</div>
        </div>';
    endif;
}

// Resources
add_shortcode('post_grid_search_form_7776', 'post_grid_search_form_7776');
function post_grid_search_form_7776()
{

    // Get the search keyword and taxonomy terms
    $keyword = isset($_GET['keyword']) ? sanitize_text_field($_GET['keyword']) : '';
    $accreditation = isset($_GET['resource_accreditation']) ? $_GET['resource_accreditation'] : '';
    $demographic = isset($_GET['demographic']) ? $_GET['demographic'] : '';
    $format = isset($_GET['format']) ? $_GET['format'] : '';
    $category = isset($_GET['resource_category']) ? $_GET['resource_category'] : '';

    $accreditationOutput = '';
    $demographicOutput = '';
    $formatOutput = '';
    $categoryOutput = '';

    if ($accreditation) :
        foreach ($accreditation as $key => $value) {
            $tax = get_term_by('slug', $value, 'resource_types');
            $name = '';
            if ($tax->slug == 'ama') :
                $name = '<em>' . $tax->name . '</em>';
            else :
                $name = $tax->name;
            endif;

            $accreditationOutput .= '<li>
        <input id="' . $tax->slug . '-checkbox" type="checkbox" value="' . $tax->slug . '" name="resource_accreditation[]" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none" checked>
        <label for="' . $tax->slug . '-checkbox" class="ml-2 text-sm font-medium text-gray-500 font-sans">' . $name . '</label>
      </li>';
        }

    else :
        $tax = get_terms([
            'taxonomy' => 'resource_types',
            'hide_empty' => true,
        ]);
        foreach ($tax as $key => $value) {
            if ($value->slug == 'ama') {
                $name = '<em>' . $value->name . '</em>';
            } else {
                $name = $value->name;
            }
            $accreditationOutput .= '<li>
        <input id="' . $value->slug . '-checkbox" type="checkbox" value="' . $value->slug . '" name="resource_accreditation[]" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none">
                <label for="' . $value->slug . '-checkbox" class="ml-2 text-sm font-medium text-gray-500 font-sans">' . $name . '</label>
            </li>';
        }

    endif;

    if ($demographic) :
        foreach ($demographic as $key => $value) {
            $tax = get_term_by('slug', $value, 'resource_demographic');
            $name = '';
            if ($tax->slug == 'ama') :
                $name = '<em>' . $tax->name . '</em>';
            else :
                $name = $tax->name;
            endif;

            $demographicOutput .= '<li>
        <input id="' . $tax->slug . '-checkbox" type="checkbox" value="' . $tax->slug . '" name="demographic[]" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none" checked>
        <label for="' . $tax->slug . '-checkbox" class="ml-2 text-sm font-medium text-gray-500 font-sans">' . $name . '</label>
      </li>';
        }

    else :
        $tax = get_terms([
            'taxonomy' => 'resource_demographic',
            'hide_empty' => true,
        ]);
        foreach ($tax as $key => $value) {
            if ($value->slug == 'ama') {
                $name = '<em>' . $value->name . '</em>';
            } else {
                $name = $value->name;
            }
            $demographicOutput .= '<li>
        <input id="' . $value->slug . '-checkbox" type="checkbox" value="' . $value->slug . '" name="demographic[]" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none">
                <label for="' . $value->slug . '-checkbox" class="ml-2 text-sm font-medium text-gray-500 font-sans">' . $name . '</label>
            </li>';
        }

    endif;

    if ($format) :
        foreach ($format as $key => $value) {
            $tax = get_term_by('slug', $value, 'resource_tags');
            $name = $tax->name;

            $formatOutput .= '<li>
        <input id="' . $tax->slug . '-checkbox" type="checkbox" value="' . $tax->slug . '" name="format[]" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none" checked>
        <label for="' . $tax->slug . '-checkbox" class="ml-2 text-sm font-medium text-gray-500 font-sans">' . $name . '</label>
      </li>';
        }

    else :
        $tax = get_terms([
            'taxonomy' => 'resource_tags',
            'hide_empty' => true,
        ]);
        foreach ($tax as $key => $value) {
            $name = $value->name;

            $formatOutput .= '<li>
        <input id="' . $value->slug . '-checkbox" type="checkbox" value="' . $value->slug . '" name="format[]" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none">
                <label for="' . $value->slug . '-checkbox" class="ml-2 text-sm font-medium text-gray-500 font-sans">' . $name . '</label>
            </li>';
        }

    endif;

    if ($category) :
        foreach ($category as $key => $value) {
            $tax = get_term_by('slug', $value, 'resource_topics');
            $name = $tax->name;

            $categoryOutput .= '<li>
        <input id="' . $tax->slug . '-checkbox" type="checkbox" value="' . $tax->slug . '" name="resource_category[]" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none" checked>
        <label for="' . $tax->slug . '-checkbox" class="ml-2 text-sm font-medium text-gray-500 font-sans">' . $name . '</label>
      </li>';
        }

    else :
        $tax = get_terms([
            'taxonomy' => 'resource_topics',
            'hide_empty' => true,
        ]);
        foreach ($tax as $key => $value) {
            $name = $value->name;

            $categoryOutput .= '<li>
        <input id="' . $value->slug . '-checkbox" type="checkbox" value="' . $value->slug . '" name="resource_category[]" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none">
                <label for="' . $value->slug . '-checkbox" class="ml-2 text-sm font-medium text-gray-500 font-sans">' . $name . '</label>
            </li>';
        }

    endif;

    ob_start();

?>
    <form method="get" action="" class="divide-y divide-tealbrand divide-solid">

        <input name="keyword" type="search" value="<?php echo $keyword; ?>" placeholder="Search Resources..." class="bg-gray-50 border border-gray-300 text-gray-900 my-4 text-sm rounded-lg focus:ring-bluebrand focus:border-bluebrand block w-full p-2.5">

        <?php if ($categoryOutput) : ?>
            <div x-data="{showDropdown: true }" class="py-4" x-cloak>
                <div class="relative">
                    <div @click.stop="showDropdown = !showDropdown" class="bg-blue-200 text-blue p-4 font-bold cursor-pointer p-4 font-bold inline-flex items-center justify-between w-full" x-bind:class="{ '': showDropdown }">
                        Category
                        <svg x-bind:class="{ 'transform rotate-180': !showDropdown }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition-all duration-300">
                            <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div x-on:click.away="showDropdown = false">
                        <ul x-show="showDropdown" class="p-2 space-y-2 text-navybrand bg-white w-full">
                            <?php echo $categoryOutput; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($formatOutput) : ?>
            <div x-data="{showDropdown: false }" class="py-4" x-cloak>
                <div class="relative">
                    <div @click.stop="showDropdown = !showDropdown" class="bg-blue-200 text-blue p-4 font-bold cursor-pointer p-4 font-bold inline-flex items-center justify-between w-full" x-bind:class="{ '': showDropdown }">
                        Tags
                        <svg x-bind:class="{ 'transform rotate-180': !showDropdown }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition-all duration-300">
                            <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div x-on:click.away="showDropdown = false">
                        <ul x-show="showDropdown" class="p-2 space-y-2 text-navybrand bg-white border border-solid w-full border-navybrand">
                            <?php echo $formatOutput; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($accreditationOutput) : ?>
            <div x-data="{showDropdown: false }" class="py-4" x-cloak>
                <div class="relative">
                    <div @click.stop="showDropdown = !showDropdown" class="bg-blue-200 text-blue p-4 font-bold cursor-pointer p-4 font-bold inline-flex items-center justify-between w-full" x-bind:class="{ '': showDropdown }">
                        Types
                        <svg x-bind:class="{ 'transform rotate-180': !showDropdown }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition-all duration-300">
                            <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div x-on:click.away="showDropdown = false">
                        <ul x-show="showDropdown" class="p-2 space-y-2 text-navybrand bg-white border border-solid w-full border-navybrand">
                            <?php echo $accreditationOutput; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($demographicOutput) : ?>
            <div x-data="{showDropdown: false }" class="py-4" x-cloak>
                <div class="relative">
                    <div @click.stop="showDropdown = !showDropdown" class="bg-blue-200 text-blue p-4 font-bold cursor-pointer p-4 font-bold inline-flex items-center justify-between w-full" x-bind:class="{ '': showDropdown }">
                        Demographic
                        <svg x-bind:class="{ 'transform rotate-180': !showDropdown }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition-all duration-300">
                            <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div x-on:click.away="showDropdown = false">
                        <ul x-show="showDropdown" class="p-2 space-y-2 text-navybrand bg-white border border-solid w-full border-navybrand">
                            <?php echo $demographicOutput; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="flex space-x-4 pt-4">
            <input class="inline-block border border-bluebrand border-solid px-6 py-1 text-bluebrand rounded-full text-center font-sans text-sm cursor-pointer" type="submit" value="Filter">
            <a href="/pt_resources" class="inline-block border border-redbrand border-solid px-6 py-1 text-redbrand rounded-full text-center font-sans text-sm" class="">Reset</a>
        </div>

    </form>
<?php

    return ob_get_clean();
}

add_filter('post_grid_filter_query_args', 'post_grid_filter_query_args_extra_7776');
function post_grid_filter_query_args_extra_7776($query_args)
{
    $keyword = isset($_GET['keyword']) ? sanitize_text_field($_GET['keyword']) : '';
    $accreditation = isset($_GET['resource_accreditation']) ? $_GET['resource_accreditation'] : '';
    $demographic = isset($_GET['demographic']) ? $_GET['demographic'] : '';
    $format = isset($_GET['format']) ? $_GET['format'] : '';
    $category = isset($_GET['resource_category']) ? $_GET['resource_category'] : '';

    // Set up the taxonomy query
    $tax_query = array();

    if ($accreditation) {
        $tax_query[] = array(
            'taxonomy' => 'resource_types',
            'field' => 'slug',
            'key' => 'featured_post',
            'value' => '1',
            'compare' => '=',
            'terms' => $accreditation,
        );
    }
    if ($demographic) {
        $tax_query[] = array(
            'taxonomy' => 'resource_demographic',
            'field' => 'slug',
            'key' => 'featured_post',
            'value' => '1',
            'compare' => '=',
            'terms' => $demographic,
        );
    }
    if ($format) {
        $tax_query[] = array(
            'taxonomy' => 'resource_tags',
            'field' => 'slug',
            'key' => 'featured_post',
            'value' => '1',
            'compare' => '=',
            'terms' => $format,
        );
    }
    if ($category) {
        $tax_query[] = array(
            'taxonomy' => 'resource_topics',
            'post_type' => 'pt_resources',
            'field' => 'slug',
            'key' => 'featured_post',
            'value' => '1',
            'compare' => '=',
            'terms' => $category,
        );
    }

    // If we have taxonomy query clauses, add them to the query arguments
    if (!empty($tax_query)) {
        $query_args['tax_query'] = array(
            'relation' => 'AND',
            $tax_query
        );
    }

    if (!empty($keyword)) {
        $query_args['s'] = $keyword;
    }
    return $query_args;
}

add_filter('post_grid_query_args', 'post_grid_query_count_7776', 10, 2);
function post_grid_query_count_7776($query_args, $args)
{
    $counter = 0;
    $the_query = new WP_Query($query_args);
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            if ($counter == 0) {

                $js = 'var postcount = ' . $the_query->found_posts . ';';
                wp_print_inline_script_tag($js);
            }

            $counter++;
        }
    } else {
        // no posts found
    }
    wp_reset_postdata();

    return $query_args;
}
