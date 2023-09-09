<?php
/* Template Name: Intensive Training */
require_once('header.php');

$event_type = get_field('event_type');
$title = get_field('title');
$event_details = get_field('event_details');
$image = get_field('image');
$location = get_field('location');
if ($location) {
    $location = $location['name'] . '<br>' . $location['street_number'] . ' ' . $location['street_name'] . ', ' . $location['city'] . ', ' . $location['state_short'];
} else {
    $location = '';
}
$day_1_date = get_field('day_1_date');
$date_1 = DateTime::createFromFormat('Ymd', $day_1_date);
$day_1_start_time = get_field('day_1_start_time');
$day_1_end_time = get_field('day_1_end_time');
$two_day_event = get_field('two_day_event');
$day_2_date = get_field('day_2_date');
if ($day_2_date) {
    $date_2 = DateTime::createFromFormat('Ymd', $day_2_date);
}
$day_2_start_time = get_field('day_2_start_time');
$day_2_end_time = get_field('day_2_end_time');
$display_register_button = get_field('display_register_button');
$register_link = get_field('register_link');

if ($event_type) {
    $text_color = 'text-blue';
    $text_color_dark = 'text-sky-600';
    $hover_text_color = 'hover:text-blue';
    $group_hover_text_color = 'group-hover:text-blue';
    $bg_color_light = 'bg-blue-200';
    $bg_color_very_light = 'bg-blue-200/50';
    $bg_color = 'bg-blue';
    $hover_bg_color = 'hover:bg-blue';
    $border_color = 'border-blue';
} else {
    $text_color = 'text-purple-700';
    $text_color_dark = 'text-purple';
    $hover_text_color = 'hover:text-purple-700';
    $group_hover_text_color = 'group-hover:text-purple-700';
    $bg_color_light = 'bg-purple-200';
    $bg_color_very_light = 'bg-purple-200/50';
    $bg_color = 'bg-purple';
    $hover_bg_color = 'hover:bg-purple';
    $border_color = 'border-purple-700';
}

?>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>
<!-- Header -->
<?php include(locate_template('templates/intensive-training/header.php', false, false)); ?>
<!-- Breadcrumb -->
<?php include(locate_template('templates/intensive-training/breadcrumb.php', false, false)); ?>
<!-- Main Content -->
<div class="max-w-screen-lg py-16 lg:max-w-screen-xl mx-auto px-4 md:px-0 flex flex-col md:flex-row" x-data="{ day1: true, day2: false}">
    <!-- Sidebar -->
    <?php include(locate_template('templates/intensive-training/sidebar.php', false, false)); ?>
    <!-- Content -->
    <div id="slider" class="flex-1 md:pl-12 space-y-12">
        <?php if (have_rows('content')) :
            $block_count = 1;
            while (have_rows('content')) : the_row();
                // flexible content blocks
                if (get_row_layout() == 'agenda') {
                    include(locate_template('templates/intensive-training/agenda.php', false, false));
                } elseif (get_row_layout() == 'course_topics') {
                    include(locate_template('templates/intensive-training/course-topics.php', false, false));
                } elseif (get_row_layout() == 'follow_up_sessions') {
                    include(locate_template('templates/intensive-training/follow-up-sessions.php', false, false));
                } elseif (get_row_layout() == 'presenters') {
                    include(locate_template('templates/intensive-training/presenters.php', false, false));
                } elseif (get_row_layout() == 'resources') {
                    include(locate_template('templates/intensive-training/resources.php', false, false));
                } elseif (get_row_layout() == 'text_content') {
                    include(locate_template('templates/intensive-training/text-content.php', false, false));
                }
                $block_count++;
            endwhile;
        endif; ?>
    </div>
</div>
<!-- Legal -->
<?php include(locate_template('templates/intensive-training/legal.php', false, false)); ?>
<!-- Intersection Observer -->
<script>
    /*
		Intersection Observer for Services sidebar
	**/
    const sections = document.querySelectorAll(".section");
    const filterWrapCollection = window.document.querySelector(".section-wrap");

    if (filterWrapCollection) {
        let filterWrap = Array.from(filterWrapCollection.children);
        const options = {
            root: null,
            threshold: 0,
            rootMargin: "-5% 0px -80% 0px",
        };

        const observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    entry.target.classList.remove("opacity-100");
                    return;
                }
                entry.target.classList.add("opacity-100");
                newFunction(entry.target.id, filterWrap);
            });
        }, options);

        sections.forEach((section) => {
            observer.observe(section);
        });

        function newFunction(needle, haystack) {
            console.log(needle)

            haystack.map((item) => {
                let style = "<?php echo $text_color; ?>";
                item.children[0].classList.add("text-slate-500");
                item.children[0].classList.add("font-gotham");
                item.children[0].classList.remove("font-gotham-medium");
                item.children[0].classList.remove(style);
                if (item.children[0].dataset.filter === needle) {
                    item.children[0].classList.remove("text-slate-500");
                    item.children[0].classList.remove("font-gotham");
                    item.children[0].classList.add("font-gotham-medium");
                    item.children[0].classList.add(style);
                }
            });
        }
    }
</script>

<?php require_once('footer.php'); ?>