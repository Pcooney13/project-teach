<style>
    .layer-content {
        display: none !important;
    }
</style>
<?php
// $dev = 7307;
// $live = 7546;
add_filter('post_grid_item_classes', 'post_grid_no_post_text_7307', 10, 2);
function post_grid_no_post_text_7307($item_css_class, $args)
{

    $item_css_class = $item_css_class;
    $grid_id = $args['grid_id'];
    $post_id = $args['post_id'];
    if ($grid_id == '7307') :
        $item_css_class['custom-new'] = 'col-span-full md:col-span-4 lg:col-span-3';
        $custom_class = get_post_meta($post_id, 'custom_field_name', true);
        $item_css_class['custom-field'] = $custom_class;
    endif;

    return $item_css_class;
}

add_filter('post_grid_grid_items_class', 'post_grid_grid_items_class_7307', 10, 2);
function post_grid_grid_items_class_7307($class, $args)
{

    $class = $class;
    $grid_id = $args['grid_id'];

    if ($grid_id == '7307') :
        $class = ' grid grid-cols-8 lg:grid-cols-9 gap-6';
    endif;

    return $class;
}

add_action('post_grid_item_layout', 'post_grid_item_layout_7307', 10);
function post_grid_item_layout_7307($layout_args)
{
    $layout_id = $layout_args['layout_id'];
    $post_id = $layout_args['post_id'];
    $options = $layout_args['options'];

    if ($options['post_types'][0] === 'courses') :

        $courseImg = get_field('course_image', $post_id);
        $title = get_the_title($post_id);
        $categories = get_field('course_category', $post_id);

        $caty = wp_get_object_terms($post_id, 'course_category', array('fields' => 'names'));

        // Course category images
        $child_course_image = 'https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg';
        $maternal_course_image = 'https://projectteachny.org/app/uploads/2023/07/maternal-course-300.jpg';

        if (!$courseImg && $caty && $caty[0]) :
            if ($caty[0] === 'Maternal Mental Health') :
                $courseImg = $maternal_course_image;
            else :
                $courseImg = $child_course_image;
            endif;
        elseif (!$courseImg && $categories) :
            foreach ($categories as $cat) :
                if ($cat->slug === 'maternal-mental-health') :
                    $courseImg = $maternal_course_image;
                else :
                    $courseImg = $child_course_image;
                endif;
            endforeach;
        endif;
        $url = get_field('course_url', $post_id);
        $status = get_field('course_status', $post_id);
        if (get_field('course_event_date_start', $post_id) && get_field('course_event_date_end', $post_id)) :
            $event = true;
            $start = get_field('course_event_date_start', $post_id);
            $end = get_field('course_event_date_end', $post_id);
            if (date("M j, Y", $start) == date("M j, Y", $end)) :
                $end = '';
            endif;
        else :
            $event = false;
            $start = get_field('course_date_start', $post_id);
            $end = get_field('course_date_end', $post_id);
            if (date("M j, Y", $start) == date("M j, Y", $end)) :
                $end = '';
            endif;
        endif;

        if ($caty && $caty[0]) :
            if ($caty[0] === 'Maternal Mental Health') :
                $display_cat = '<div class="absolute height-full right-0 top-0 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-purple-200 text-purple text-sm font-bold rounded-full dropshadow-md">
                    Maternal
                </div>';
            else :
                $display_cat = '<div class="absolute height-full right-0 top-0 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-blue-200 text-blue text-sm font-bold rounded-full dropshadow-md">
                    Child
                </div>';
            endif;
        elseif ($categories) :
            foreach ($categories as $cat) :
                if ($cat->slug === 'maternal-mental-health') :
                    $display_cat = '<div class="absolute height-full right-0 top-0 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-purple-200 text-purple text-sm font-bold rounded-full dropshadow-md">
                        Maternal
                    </div>';
                elseif ($cat->slug === 'child-adolescent') :
                    $display_cat = '<div class="absolute height-full right-0 top-0 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-blue-200 text-blue text-sm font-bold rounded-full dropshadow-md">
                        Child
                    </div>';
                endif;
            endforeach;
        endif;

        if ($courseImg) :
            echo '<a class="group" href=" ' . $url . ' "><div class="relative rounded-lg overflow-hidden mb-4">
                <div class="w-full absolute bg-gradient-to-bl rounded-lg from-black h-full transition-all duration-300 group-hover:opacity-0"></div>' .
                $display_cat .
                '<img src="' . $courseImg . '" class="h-44 object-cover w-full">
                </div></a>';
        // echo '<div class=""><img src="' . $courseImg . '" class="h-36 object-cover  w-full mb-4"></div>';
        endif;
        echo '<div class="min-h-[100px] h-full flex flex-col border-b border-solid border-light-gray">';
        if ($title) :
            echo '<div><a href="' . $url . '" class="inline-block font-semibold text-purple hover:opacity-75 mb-1">' . $title . '</a></div>';
        endif;

        if ($event) :
            echo '<div class="text-sm mb-4">' . (($end) ? date("M j, Y", $start) . ' - ' . date("M j, Y", $end) : date("M j, Y", $start)) . '</div>';
        else :
            echo '<div class="text-sm mb-4">' . (($end) ? date("M j, Y", $start) . ' - ' . date("M j, Y", $end) : date("M j, Y", $start)) . '</div>';
        endif;

        if ($status) :
            echo '<div class="font-sans font-bold text-sm mb-2 mt-auto uppercase" style="color: #27ae60;">Open</div>';
        else :
            echo '<div class="font-sans font-bold text-sm mb-2 mt-auto uppercase" style="color: #c0392b;">Closed</div>';
        endif;
        echo '</div>';
    // if ($url) :
    //     echo '<div class="mt-auto"><a href="' . $url . '" class="inline-block bg-azulbrand hover:bg-transparent border-2 border-solid border-transparent hover:text-greenbrand hover:border-greenbrand font-sans px-6 py-2 text-white rounded-full text-sm transition-all ease-in-out duration-150">View course</a></div>';
    // endif;
    endif;
}

// Courses
add_shortcode('post_grid_search_form_7307', 'post_grid_search_form_7307');
function post_grid_search_form_7307()
{

    // Get the search keyword and taxonomy terms
    $keyword = isset($_GET['keyword']) ? sanitize_text_field($_GET['keyword']) : '';
    $accreditation = isset($_GET['accreditation']) ? $_GET['accreditation'] : '';
    $format = isset($_GET['format']) ? $_GET['format'] : '';
    $category = isset($_GET['category']) ? $_GET['category'] : '';
    $status = isset($_GET['status']) ? $_GET['status'] : '';
    $price = isset($_GET['price']) ? $_GET['price'] : '';

    $accreditationOutput = '';
    $formatOutput = '';
    $categoryOutput = '';

    if ($accreditation) :
        foreach ($accreditation as $key => $value) {
            $tax = get_term_by('slug', $value, 'course_credit');
            $name = '';
            if ($tax->slug == 'ama') :
                $name = 'CME';
            else :
                $name = 'No CME';
            endif;

            $accreditationOutput .= '<li>
        <input id="' . $tax->slug . '-checkbox" type="checkbox" value="' . $tax->slug . '" name="accreditation[]" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none" checked>
        <label for="' . $tax->slug . '-checkbox" class="ml-2 text-sm font-medium text-gray-500 font-sans">' . $name . '</label>
      </li>';
        }

    else :
        $tax = get_terms([
            'taxonomy' => 'course_credit',
            'hide_empty' => true,
        ]);
        foreach ($tax as $key => $value) {
            if ($value->slug == 'ama') {
                $name = 'CME';
            } else {
                $name = 'No CME';
            }
            $accreditationOutput .= '<li>
        <input id="' . $value->slug . '-checkbox" type="checkbox" value="' . $value->slug . '" name="accreditation[]" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none">
                <label for="' . $value->slug . '-checkbox" class="ml-2 text-sm font-medium text-gray-500 font-sans">' . $name . '</label>
            </li>';
        }

    endif;

    if ($format) :
        foreach ($format as $key => $value) {
            $tax = get_term_by('slug', $value, 'course_format');
            $name = $tax->name;

            $formatOutput .= '<li>
        <input id="' . $tax->slug . '-checkbox" type="checkbox" value="' . $tax->slug . '" name="format[]" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none" checked>
        <label for="' . $tax->slug . '-checkbox" class="ml-2 text-sm font-medium text-gray-500 font-sans">' . $name . '</label>
      </li>';
        }

    else :
        $tax = get_terms([
            'taxonomy' => 'course_format',
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
            $tax = get_term_by('slug', $value, 'course_category');
            $name = $tax->name;

            $categoryOutput .= '<li>
        <input id="' . $tax->slug . '-checkbox" type="checkbox" value="' . $tax->slug . '" name="category[]" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none" checked>
        <label for="' . $tax->slug . '-checkbox" class="ml-2 text-sm font-medium text-gray-500 font-sans">' . $name . '</label>
      </li>';
        }

    else :
        $tax = get_terms([
            'taxonomy' => 'course_category',
            'hide_empty' => true,
        ]);
        foreach ($tax as $key => $value) {
            $name = $value->name;

            $categoryOutput .= '<li>
        <input id="' . $value->slug . '-checkbox" type="checkbox" value="' . $value->slug . '" name="category[]" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none">
                <label for="' . $value->slug . '-checkbox" class="ml-2 text-sm font-medium text-gray-500 font-sans">' . $name . '</label>
            </li>';
        }

    endif;

    ob_start();

?>
    <form method="get" action="" class="divide-y divide-tealbrand divide-solid">

        <input name="keyword" type="search" value="<?php echo $keyword; ?>" placeholder="Search Courses..." class="bg-gray-50 border border-gray-300 text-gray-900 my-4 text-sm rounded-lg focus:ring-bluebrand focus:border-bluebrand block w-full p-2.5">

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
            <!-- <div x-data="{showDropdown: false }" class="py-4" x-cloak>
                <div class="relative">
                    <div @click.stop="showDropdown = !showDropdown" class="bg-blue-200 text-blue p-4 font-bold cursor-pointer p-4 font-bold inline-flex items-center justify-between w-full" x-bind:class="{ '': showDropdown }">
                        Format
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
            </div> -->
        <?php endif; ?>

        <?php if ($accreditationOutput) : ?>
            <div x-data="{showDropdown: false }" class="py-4" x-cloak>
                <div class="relative">
                    <div @click.stop="showDropdown = !showDropdown" class="bg-blue-200 text-blue p-4 font-bold cursor-pointer p-4 font-bold inline-flex items-center justify-between w-full" x-bind:class="{ '': showDropdown }">
                        Accreditation
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
        <?php if (false) : ?>
            <div x-data="{ status: '<?php echo in_array($status, array('0', '1')) ? $status : 'all'; ?>', showDropdown: false }" class="py-4" x-cloak>
                <div class="relative">
                    <div @click.stop="showDropdown = !showDropdown" class="bg-blue-200 text-blue p-4 font-bold cursor-pointer p-4 font-bold inline-flex items-center justify-between w-full" x-bind:class="{ '': showDropdown }">
                        Status
                        <svg x-bind:class="{ 'transform rotate-180': !showDropdown }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition-all duration-300">
                            <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div x-on:click.away="showDropdown = false">
                        <ul x-show="showDropdown" class="p-2 space-y-2 text-navybrand bg-white border border-solid w-full border-navybrand">
                            <li>
                                <input type="radio" name="status" value="all" x-model="status" id="all-radio" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none">
                                <label for="all-radio" class="ml-2 text-sm font-medium text-gray-500 font-sans">All</label>
                            </li>
                            <li>
                                <input type="radio" name="status" value="1" x-model="status" id="open-radio" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none">
                                <label for="open-radio" class="ml-2 text-sm font-medium text-gray-500 font-sans">Open</label>
                            </li>
                            <li>
                                <input type="radio" name="status" value="0" x-model="status" id="closed-radio" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none">
                                <label for="closed-radio" class="ml-2 text-sm font-medium text-gray-500 font-sans">Closed</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div x-data="{ price: '<?php echo !$price || $price === 'all' ? 'all' : $price ?>', showDropdown: false }" class="py-4" x-cloak>
                <div class="relative">
                    <div @click.stop="showDropdown = !showDropdown" class="bg-blue-200 text-blue p-4 font-bold cursor-pointer p-4 font-bold inline-flex items-center justify-between w-full" x-bind:class="{ '': showDropdown }">
                        Price
                        <svg x-bind:class="{ 'transform rotate-180': !showDropdown }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition-all duration-300">
                            <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div x-on:click.away="showDropdown = false">
                        <ul x-show="showDropdown" class="p-2 space-y-2 text-navybrand bg-white border border-solid w-full border-navybrand">
                            <li>
                                <input type="radio" name="price" value="all" x-model="price" id="all-radio-2" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none">
                                <label for="all-radio-2" class="ml-2 text-sm font-medium text-gray-500 font-sans">All</label>
                            </li>
                            <li>
                                <input type="radio" name="price" value="1" x-model="price" id="paid-radio-2" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none">
                                <label for="paid-radio-2" class="ml-2 text-sm font-medium text-gray-500 font-sans">Paid</label>
                            </li>
                            <li>
                                <input type="radio" name="price" value="0" x-model="price" id="free-radio-2" class="w-4 h-4 text-bluebrand bg-gray-100 rounded border-gray-300 focus:ring-bluebrand flex-none">
                                <label for="free-radio-2" class="ml-2 text-sm font-medium text-gray-500 font-sans">Free</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="flex space-x-4 pt-4">
            <input class="inline-block border border-bluebrand border-solid px-6 py-1 text-bluebrand rounded-full text-center font-sans text-sm cursor-pointer" type="submit" value="Filter">
            <a href="/courses" class="inline-block border border-redbrand border-solid px-6 py-1 text-redbrand rounded-full text-center font-sans text-sm" class="">Reset</a>
        </div>

    </form>
<?php

    return ob_get_clean();
}

add_filter('post_grid_filter_query_args', 'post_grid_filter_query_args_extra_7307');
function post_grid_filter_query_args_extra_7307($query_args)
{
    $keyword = isset($_GET['keyword']) ? sanitize_text_field($_GET['keyword']) : '';
    $accreditation = isset($_GET['accreditation']) ? $_GET['accreditation'] : '';
    $format = isset($_GET['format']) ? $_GET['format'] : '';
    $category = isset($_GET['category']) ? $_GET['category'] : '';
    $status = isset($_GET['status']) ? $_GET['status'] : '';
    $price = isset($_GET['price']) ? $_GET['price'] : '';

    // Set up the taxonomy query
    $tax_query = array();

    if ($accreditation) {
        $tax_query[] = array(
            'taxonomy' => 'course_credit',
            'field' => 'slug',
            'key' => 'featured_post',
            'value' => '1',
            'compare' => '=',
            'terms' => $accreditation,
        );
    }
    if ($format) {
        $tax_query[] = array(
            'taxonomy' => 'course_format',
            'field' => 'slug',
            'key' => 'featured_post',
            'value' => '1',
            'compare' => '=',
            'terms' => $format,
        );
    }
    if ($category) {
        $tax_query[] = array(
            'taxonomy' => 'course_category',
            'post_type' => 'courses',
            'field' => 'slug',
            'key' => 'featured_post',
            'value' => '1',
            'compare' => '=',
            'terms' => $category,
        );
    }

    if ($status != 'all' && $status != '') {
        $query_args['meta_query'][] = array(
            'key' => 'course_status',
            'value' => $status,
            'compare' => '='
        );
    }

    if ($price === 'all') {
        // don't add any meta query
    } elseif ($price === '0') {
        $query_args['meta_query'][] = array(
            'key' => 'course_price',
            'value' => 0,
            'compare' => '=',
            'type' => 'numeric'
        );
    } elseif ($price === '1') {
        $query_args['meta_query'][] = array(
            'key' => 'course_price',
            'value' => 0,
            'compare' => '>',
            'type' => 'numeric'
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

add_filter('post_grid_query_args', 'post_grid_query_count_7307', 10, 2);
function post_grid_query_count_7307($query_args, $args)
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
