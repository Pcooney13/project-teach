<?php
require_once('header.php');
require(dirname(__FILE__) . "/breadcrumbs.php");
// Get dates for range finder
$current_date = date('Y-m-d');
$current_date_string = strtotime($current_date);
$date_plus_week = strtotime("+7 day", $current_date_string);
$date_plus_week = date('Y-m-d', $date_plus_week);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
// Query
$query = new WP_Query(array(
    'posts_per_page' => 12,
    'paged' => $paged,
    'page' => $paged,
    'post_type' => 'courses',
    'meta_key'            => 'course_date_start',
    'orderby'            => 'meta_value',
    'order'                => 'DESC'
    // 'orderby' => 'meta_value',
    // 'order' => 'ASC'
    // 'meta_key' => 'dates',
    // 'meta_value' => 'field_value'
));
?>

<div class="max-w-screen-xl mx-auto flex flex-col md:flex-row md:items-start">
    <div class="sticky top-16 shadow-md md:shadow-none z-10 w-full md:w-64 mr-0 md:mr-4">
        <div class="mb-4 bg-white">
            <h6 class="bg-blue-200 text-blue p-4 font-bold">Search</h6>
            <!-- TEMP SEARCH -->
            <div class="inner-options mx-auto block text-center">
                <div class="search__section">
                    <div class="course-search p-4">
                        <input class="search__input p-2 my-2 w-full border-off-white border-solid border-2" type="text" autocomplete="off" placeholder="Search Courses..." name="search">
                        <!-- <div class="search__results bg-white p-4"></div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4 bg-white">
            <h6 class="bg-blue-200 text-blue p-4 font-bold">Date Range</h6>
            <div class="p-4">
                <form id="date-form">
                    <div class="flex items-center">
                        <label for="start">Start date:</label>
                        <input class="ml-auto px-1 py-px my-1 border-off-white border-solid border-2" type="date" id="start-date" name="trip-start" value="<?php echo $current_date; ?>" min="2017-01-01" max="2026-12-31">
                    </div>
                    <div class="flex items-center">
                        <label for="start">End date:</label>
                        <input class="ml-auto px-1 py-px my-1 border-off-white border-solid border-2" type="date" id="end-date" name="trip-start" value="<?php echo $date_plus_week; ?>" min="2017-01-01" max="2026-12-31">
                    </div>
                    <input class="w-full mt-2 p-2 rounded-full bg-blue font-bold text-white border-2 border-solid border-blue transition-all duration-300 hover:text-blue hover:bg-white" type="submit" />
                </form>
            </div>
        </div>
        <div class="mb-4 bg-white">
            <h6 class="bg-blue-200 text-blue p-4 font-bold">Filter</h6>
            <div class="p-4">
                <label class="w-full block mb-2 font-bold" for="course-type">Course Type</label>
                <select class="w-full" name="cars" id="course-type">
                    <option value="child">Child</option>
                    <option value="maternal">Maternal</option>
                </select>
            </div>
        </div>
    </div>

    <?php if ($query->have_posts()) : ?>
        <div class="flex-1">

            <div class="grid grid-cols-8 lg:grid-cols-9 gap-4">
                <?php while ($query->have_posts()) : $query->the_post();
                    $course_url = get_field('course_url');
                    $course_start_date = get_field('course_start_date');
                    $course_end_date = get_field('course_end_date');
                    $post_name_data = get_post_field('post_name', get_post());
                    $featured_image = get_field('featured_image');
                    $categories = get_field('course_category');
                    $post_title = get_the_title();
                    $start_timestamp = get_field('course_date_start');
                    $end_timestamp = get_field('course_date_end');
                    $price = get_field('course_price');
                    if ($price === '0.00000') {
                        $price = 'Free';
                    } else {
                        $price = $price;
                    }
                    $terms = get_field('credit');

                    if ($featured_image) :
                        $display_image = 'https://projectteachny.org/' . $featured_image;
                    else :
                        $display_image =  'https://projectteachny.org/wp-content/uploads/2019/10/better-health-bg.jpg';
                    endif; ?>
                    <!-- NEW -->
                    <div class="col-span-full md:col-span-4 lg:col-span-3">
                        <div class="flex flex-col h-full">
                            <div class="relative rounded-lg overflow-hidden mb-4">
                                <div class="w-full absolute bg-gradient-to-bl from-black h-full"></div>
                                <?php if ($categories) : ?>
                                    <?php foreach ($categories as $cat) : ?>
                                        <?php if ($cat->name === 'Maternal Mental Health') : ?>
                                            <div class="absolute height-full right-0 top-0 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-purple-200 text-purple text-sm font-bold rounded-full dropshadow-md">
                                                Maternal
                                            </div>
                                        <?php else : ?>
                                            <div class="absolute height-full right-0 top-0 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-blue-200 text-blue text-sm font-bold rounded-full dropshadow-md">
                                                Child
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <!-- <div class="absolute height-full right-0 top-0 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-purple-200 text-purple text-sm font-bold rounded-full dropshadow-md">
                                    Maternal
                                </div> -->
                                <img src="<?php echo $display_image; ?>" class="h-44 object-cover w-full">
                            </div>
                            <div class="mb-1">
                                <a href="<?php echo $course_url; ?>" class="font-semibold text-purple">
                                    <?php echo $post_title; ?>
                                </a>
                            </div>
                            <div class="font-medium opacity-50 mb-2 text-sm"><?php echo gmdate("M j, Y", $start_timestamp); ?> - <?php echo gmdate("M j, Y", $end_timestamp); ?></div>
                            <div class="font-sans mt-auto font-bold text-sm mb-4 uppercase text-green"><?php echo $price; ?></div>
                        </div>
                    </div>
                    <!-- OLD -->
                    <!-- <a href="<?php echo $course_url; ?>" data-start="<?php echo $course_start_date; ?>" data-end="<?php echo $course_end_date; ?>" data-filter="<?php echo $post_name_data; ?>" class="w-full bg-off-white course">
                        <div class="relative aspect-video">
                            <div class="absolute bg-gradient-to-t from-black w-full h-full top-0"></div>

                            <?php if ($featured_image) :
                                echo '<img class="object-cover" src="https://projectteachny.org/' . $featured_image . '">';
                            else :
                                echo '<img class="object-cover" src="https://projectteachny.org/wp-content/uploads/2019/10/better-health-bg.jpg">';
                            endif;

                            if ($categories) : ?>
                                <?php foreach ($categories as $cat) : ?>
                                    <?php if ($cat->name === 'Maternal Mental Health') : ?>
                                        <div class="absolute height-full right-0 top-0 mb-2 px-2 text-right mt-2 mr-2 bg-purple-200 text-purple font-bold rounded-full dropshadow-md">
                                            Maternal
                                        </div>
                                    <?php else : ?>
                                        <div class="absolute height-full right-0 top-0 mb-2 px-2 text-right mt-2 mr-2 bg-blue-200 text-blue font-bold rounded-full dropshadow-md">
                                            Child
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <div class="absolute w-full height-full bottom-0 mb-2 px-2 font-bold text-white dropshadow-md"><?php echo $post_title; ?></div>
                        </div>
                        <div class="py-4 px-2">
                            <p class="text-sm leading-normal"><strong class="text-blue">Dates: </strong><?php echo gmdate("M j, Y", $start_timestamp); ?> - <?php echo gmdate("M j, Y", $end_timestamp); ?></p>
                            <p class="text-sm leading-normal"><strong class="text-blue">Cost: </strong><?php echo $price; ?></p>
                            <p class="text-sm leading-normal"><strong class="text-blue">Credits Available: </strong>
                                <span class="uppercase text-xs">
                                    AMA, PARTICIPATION
                                    <?php

                                    if (false && $terms) :
                                        $total = count($terms);
                                        $count = 1;
                                        foreach ($terms as $term) :
                                            echo esc_html($term->name);
                                            if ($count !== $total) {
                                                echo ', ';
                                            }
                                            $count++;
                                        endforeach;
                                    endif;
                                    ?>
                                </span>
                            </p>
                        </div>
                    </a> -->
                <?php endwhile; ?>
                <!-- Pagination -->

            </div>
            <div class="bg-blue-200 flex">
                <?php
                echo paginate_links(array(
                    'total'        => $query->max_num_pages,
                    'current'      => max(1, get_query_var('paged')),
                    'prev_next'    => true,
                    'prev_text'    => sprintf('<i></i> %1$s', __('Prev Page', 'text-domain')),
                    'next_text'    => sprintf('%1$s <i></i>', __('Next Page', 'text-domain')),
                ));
                ?>
            </div>
            <?php wp_reset_query(); ?>
        </div>
    <?php endif; ?>
</div>

<?php require_once('footer.php'); ?>