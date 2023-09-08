<?php
/* Template Name: Intensive Training */
require_once('header.php');

$event_type = get_field('event_type');
$title = get_field('title');
$event_details = get_field('event_details');
$image = get_field('image');
$location = get_field('location');
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
<div class="text-purple-700 hover:text-purple-700"></div>
<div class="pt-8 pb-16 md:pt-16 bg-white relative">
    <div class="relative flex flex-col md:flex-row max-w-screen-xl mx-auto px-4 md:px-0">
        <div class="w-full order-1 md:order-1 justify-center md:w-1/2 md:pr-8 gap-6 flex flex-col">
            <p class="text-2xl md:text-3xl font-gotham-bold text-black drop-shadow-sm">
                <?php echo $title; ?>
            </p>
            <div class="space-y-2">
                <?php if ($display_register_button && $register_link) : ?>
                    <!-- Date -->
                    <div class="flex items-center <?php echo $text_color; ?> gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                        </svg>
                        <!-- $date_1->format('D, M j, Y') -->
                        <p class="font-gotham-medium"><?php echo $date_1->format('l, F j, Y'); ?></p>
                    </div>
                    <!-- Time -->
                    <div class="flex items-center <?php echo $text_color; ?> gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M12 12h3.5" />
                            <path d="M12 7v5" />
                        </svg>
                        <p class="font-gotham-medium"><?php echo $day_1_start_time; ?> - <?php echo $day_1_end_time; ?></p>
                    </div>
                    <!-- Location -->
                    <div class="flex <?php echo $text_color; ?> gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                        </svg>
                        <p class="font-gotham-medium flex-1"><?php echo $location['address']; ?></p>
                    </div>
                    <div class="pt-6 flex items-center gap-4">
                        <a href="<?php echo $register_link; ?>" class="py-2 px-12 font-gotham-medium text-center text-lg text-white rounded-full bg-purple">Register Now</a>
                        <a href="#section6" class="py-2 px-8 font-gotham-medium text-center text-lg text-purple-700 rounded-full transition flex gap-1 border border-solid border-purple-700 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 4l18 0" />
                                <path d="M4 4v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-10" />
                                <path d="M12 16l0 4" />
                                <path d="M9 20l6 0" />
                                <path d="M8 12l3 -3l2 2l3 -3" />
                            </svg>
                            View Agenda
                        </a>
                    </div>
                <?php else : ?>
                    <p class="font-gotham-light leading-7"><?php echo $event_details; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="w-full order-0 md:order-1 mb-4 md:mb-0 md:w-1/2">
            <div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3] shadow-xl">
                <img class="h-full w-full object-cover" src="<?php echo wp_get_attachment_image($image, 'large'); ?>">
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb -->
<nav class="flex max-w-screen-lg py-5 lg:max-w-screen-xl mx-auto px-4 md:px-0 " aria-label="Breadcrumb">
    <ol role="list" class="flex items-center space-x-4">
        <li>
            <div>
                <a href="/" class="text-slate-400 hover:text-slate-500">
                    <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Home</span>
                </a>
            </div>
        </li>
        <!-- <li>
            <div class="flex items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-slate-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <a href="/consultants" class="ml-4 font-gotham-medium text-slate-400 hover:text-slate-500">Consultants</a>
            </div>
        </li> -->
        <!-- <li>
            <div class="flex items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-slate-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <p class="ml-4 font-gotham-medium text-slate-400 hover:text-slate-500" aria-current="page">Victor Fornari, MD</p>
            </div>
        </li> -->
        <li>
            <div class="flex items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-slate-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <p class="ml-4 font-gotham-medium text-slate-400 hover:text-slate-500" aria-current="page">Intensive Training: Child & Adolescent Mental Health for Primary Care Clinicians</p>
            </div>
        </li>
    </ol>
</nav>
<!-- Main Content -->
<div class="max-w-screen-lg py-16 lg:max-w-screen-xl mx-auto px-4 md:px-0 flex flex-col md:flex-row" x-data="{ day1: true, day2: false, open: false}">
    <!-- Sidebar -->
    <div class="w-full md:w-1/3">
        <div class="mb-12 md:mb-0 bg-white shadow-xl rounded-xl overflow-hidden sticky top-[5rem]">
            <div class="p-4 border-b border-slate-200 border-solid space-y-2">
                <p class="font-gotham-medium text-lg text-slate-800">
                    <?php echo $title; ?>
                </p>
                <div class="flex items-center text-slate-500 mb-2 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 mb-1">
                        <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd"></path>
                    </svg>
                    <p class="font-gotham">Sunday, Nov 5 - Monday, Nov 6, 2023</p>
                </div>
                <div class="flex items-center text-slate-500 mb-2 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mb-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <p class="font-gotham">Westchester County, NY</p>
                </div>
            </div>

            <ul class="section-wrap">
                <li>
                    <a href="#section2" data-filter="section2" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Course Topics</a>
                </li>
                <li>
                    <a href="#section3" data-filter="section3" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Learning Objectives</a>
                </li>
                <li>
                    <a href="#section4" data-filter="section4" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Target Audience</a>
                </li>
                <li>
                    <a href="#section5" data-filter="section5" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Presenters</a>
                </li>
                <li>
                    <a href="#section6" data-filter="section6" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Agenda</a>
                </li>
                <li>
                    <a href="#section7" data-filter="section7" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Follow-Up Sessions</a>
                </li>
                <li>
                    <a href="#section8" data-filter="section8" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Additional Resources</a>
                </li>
            </ul>
            <div class="p-4 text-center">
                <a href="#" class="py-3 px-12 text-white font-gotham-bold text-center text-lg rounded-full <?php echo $bg_color; ?>">Register Now</a>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div id="slider" class="flex-1 md:pl-12 space-y-12">

        <?php if (have_rows('content')) :
            $block_count = 1;
            while (have_rows('content')) : the_row();
                // flexible content blocks
                if (get_row_layout() == 'text_content') {
                    include(locate_template('templates/intensive-training/text-content.php', false, false));
                } elseif (get_row_layout() == 'course_topics') {
                    include(locate_template('templates/intensive-training/course-topics.php', false, false));
                } elseif (get_row_layout() == 'presenters') {
                    include(locate_template('templates/intensive-training/presenters.php', false, false));
                } elseif (get_row_layout() == 'agenda') {
                    include(locate_template('templates/intensive-training/agenda.php', false, false));
                }
                $block_count++;
            endwhile;
        endif; ?>
        <div id="section7" class="section space-y-4 scroll-mt-12">
            <h6 class="font-gotham-medium text-lg">Follow-Up Session</h6>
            <p class="font-gotham-light text-lg">Attendees of the one and a half day intensive training event are eligible and encouraged to participate in six, follow-up learning sessions. During each session, you will have the opportunity to present cases, ask questions, and get direct feedback from faculty.</p>
            <p class="font-gotham-medium text-slate-600">All Follow Up Sessions take place from 12:00PM - 1:00PM</p>
            <a href="#" class="flex items-center gap-4 group rounded-xl overflow-hidden bg-white shadow">
                <div class="w-40">
                    <div class="relative">
                        <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 text-blue bg-blue-200 text-sm font-bold rounded-full dropshadow-md">
                            Child
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div class="font-gotham-medium text-black transition <?php echo $group_hover_text_color; ?>">
                        ADHD: What to Do When 1 Stimulant fails
                    </div>
                    <div class="text-gotham text-slate-500">Nov 21, 2023</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #27ae60;">Open</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-4 group rounded-xl overflow-hidden bg-white shadow">
                <div class="w-40">
                    <div class="relative">
                        <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 text-purple-700 bg-purple-200 text-sm font-bold rounded-full dropshadow-md">
                            Maternal
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div class="font-gotham-medium text-black transition <?php echo $group_hover_text_color; ?>">
                        Unipolar/Bipolar Depression
                    </div>
                    <div class="text-gotham text-slate-500">Nov 28, 2023</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #27ae60;">Open</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-4 group rounded-xl overflow-hidden bg-white shadow">
                <div class="w-40">
                    <div class="relative">
                        <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 text-blue bg-blue-200 text-sm font-bold rounded-full dropshadow-md">
                            Child
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div class="font-gotham-medium text-black transition <?php echo $group_hover_text_color; ?>">
                        Suicide assessment and Management in Primary Care
                    </div>
                    <div class="text-gotham text-slate-500">Dec 5, 2023</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #27ae60;">Open</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-4 group rounded-xl overflow-hidden bg-white shadow">
                <div class="w-40">
                    <div class="relative">
                        <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 text-blue bg-blue-200 text-sm font-bold rounded-full dropshadow-md">
                            Child
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div class="font-gotham-medium text-black transition <?php echo $group_hover_text_color; ?>">
                        Eating Disorders in the age of COVID for Primary Care Clinicians
                    </div>
                    <div class="text-gotham text-slate-500">Dec 12, 2023</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #27ae60;">Open</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-4 group rounded-xl overflow-hidden bg-white shadow">
                <div class="w-40">
                    <div class="relative">
                        <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 text-blue bg-blue-200 text-sm font-bold rounded-full dropshadow-md">
                            Child
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div class="font-gotham-medium text-black transition <?php echo $group_hover_text_color; ?>">
                        Schooling in the Time of COVID
                    </div>
                    <div class="text-gotham text-slate-500">Dec 19, 2023</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #27ae60;">Open</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-4 group rounded-xl overflow-hidden bg-white shadow">
                <div class="w-40">
                    <div class="relative">
                        <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 text-blue bg-blue-200 text-sm font-bold rounded-full dropshadow-md">
                            Child
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div class="font-gotham-medium text-black transition <?php echo $group_hover_text_color; ?>">
                        Self-Injurious Behavior
                    </div>
                    <div class="text-gotham text-slate-500">Jan 3, 2024</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #27ae60;">Open</div>
                </div>
            </a>
        </div>
        <div id="section8" class="section space-y-4 scroll-mt-12">
            <h6 class="font-gotham-medium text-lg">Additional Resources</h6>
            <ul class="pl-6 list-disc space-y-4">
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2022/04/MMH-flyer-italics-1.pdf" target="_blank" class="font-gotham-medium <?php echo $text_color; ?> hover:text-black transition">
                        Maternal Mental Health Services Flyer
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2020/10/Parent-Family-Member-Education-Card.pdf" target="_blank" class="font-gotham-medium <?php echo $text_color; ?> hover:text-black transition">
                        Parent & Family Member Education Card
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2020/10/CTL-Flyer.pdf" target="_blank" class="font-gotham-medium <?php echo $text_color; ?> hover:text-black transition">
                        Crisis Text Line
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2021/02/Credit-Claim-Intensive-Training-2021-updated.pdf" target="_blank" class="font-gotham-medium <?php echo $text_color; ?> hover:text-black transition">
                        Credit Claim Instructions
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2022/04/Intro-Day-1-ProjectTEACH_Kaye-2022Final042222-16.pdf" target="_blank" class="font-gotham-medium <?php echo $text_color; ?> hover:text-black transition">
                        Child and Adolescent Psychiatry (CAP) Team
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2022/04/Intro-Day-1-ProjectTEACH_Kaye-2022Final042222-17.pdf" target="_blank" class="font-gotham-medium <?php echo $text_color; ?> hover:text-black transition">
                        PCP Champ Faculty
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2022/04/Intro-Day-1-ProjectTEACH_Kaye-2022Final042222-18.pdf" target="_blank" class="font-gotham-medium <?php echo $text_color; ?> hover:text-black transition">
                        Maternal Mental Health (MMH) Team
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2022/04/Intro-Day-1-ProjectTEACH_Kaye-2022Final042222-19.pdf" target="_blank" class="font-gotham-medium <?php echo $text_color; ?> hover:text-black transition">
                        Administrative, LCs and Specialty Psychiatrists
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Modal -->
    <div class="mt-6" x-cloak>
        <div class="fixed z-50 top-0 left-0 w-full h-full flex items-center justify-center" style="background-color: rgba(0,0,0,.75);" x-show="open">
            <!-- Modal -->
            <div id="modal" class="max-w-3xl relative mx-auto bg-white p-4 rounded-xl" @click.away="open = false">
                <svg @click="open = false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 cursor-pointer text-white <?php echo $hover_text_color; ?> transition h-12 absolute top-0 right-0 -mr-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <div class="flex gap-8">
                    <div class="w-full md:w-1/3 space-y-4">
                        <div class="aspect-square bg-cover py-12 rounded-lg bg-center" style="background-image:url(https://project-teach.launchpaddev.com/app/uploads/2021/09/victor_fornari.jpg)"></div>
                        <div class="flex flex-col gap-2">
                            <h2 class="font-gotham-bold text-lg">Victor Fornari, MD</h2>
                            <p class="font-gotham-medium text-slate-500">Zucker Hillside Hospital, Northwell Health</p>
                            <div class="text-center">
                                <a href="/consultants/victor-fornari" class="py-2 block text-white font-gotham-bold text-center text-lg rounded-full <?php echo $bg_color; ?>">More Info</a>
                            </div>
                            <!-- <p class="font-gotham-light">Vice Chair &amp; Director, Division of Child &amp; Adolescent Psychiatry, Zucker Hillside Hospital, Northwell Health</p> -->
                            <!-- <p class="font-gotham-light">Professor of Psychiatry &amp; Pediatrics, Zucker Hillside Hospital, Northwell Health</p> -->
                            <!-- <p class="font-gotham-light">Chief of Division, Child and Adolescent Psychiatry, Long Island Jewish Medical Center, Project TEACH</p> -->
                        </div>
                    </div>
                    <div class="relative">
                        <p class="bg-white absolute top-0 font-gotham left-0 ml-2 mt-4 text-slate-500 text-lg -translate-y-1/2 px-2">Presenting</p>
                        <div class="flex-1 border overflow-scroll max-h-[440px] border-slate-200 border-solid mt-4 rounded-lg pt-8 p-4">
                            <div class="pb-16">
                                <div class="mb-8">
                                    <h6 class="font-gotham-medium text-sm text-slate-500">Day 1 - Monday, November 5, 2023</h6>
                                    <h5 class="font-gotham text-lg <?php echo $text_color; ?> scroll-mt-20">Module Topic 1: Trauma-Informed Care</h5>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex gap-4 border-b border-solid border-slate-200 pb-4 rounded-lg">
                                        <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">9:25-9:45am</p>
                                        <div class="flex-1">
                                            <h4 class="font-gotham-medium">Treatment</h4>
                                            <a href="" class="font-gotham <?php echo $hover_text_color; ?> transition">Victor Fornari, MD</a>
                                        </div>
                                    </div>
                                    <div class="flex gap-4 border-b border-solid border-slate-200 pb-4 rounded-lg">
                                        <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">10:00-10:30am</p>
                                        <div class="flex-1">
                                            <h4 class="font-gotham-medium">Question &amp; Answer</h4>
                                            <div class="flex gap-2">
                                                <p class="font-gotham-medium text-slate-500 w-[90px] text-right mb-1">Moderator:</p>
                                                <div class="flex flex-col">
                                                    <a href="#" class="font-gotham <?php echo $hover_text_color; ?> transition">Molly Scharf, MD</a>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <p class="font-gotham-medium text-slate-500 w-[90px] text-right">Panelists:</p>
                                                <div class="flex flex-col gap-0.5">
                                                    <a href="#" class="font-gotham <?php echo $hover_text_color; ?> transition">Nayla Khoury, MD</a>
                                                    <a href="#" class="font-gotham <?php echo $hover_text_color; ?> transition">Victor Fornari, MD</a>
                                                    <a href="#" class="font-gotham <?php echo $hover_text_color; ?> transition">Amy Jerum, NP, DNP</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-8">
                                <h6 class="font-gotham-medium text-sm text-slate-500">Day 2 - Tuesday, November 6, 2023</h6>
                                <h5 class="font-gotham text-lg <?php echo $text_color; ?> scroll-mt-20">Introduction & Overview</h5>
                            </div>
                            <div class="space-y-4 mb-8">
                                <div class="flex gap-4 border-b border-solid border-slate-200 pb-4 rounded-lg">
                                    <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">8:30-8:45am</p>
                                    <div class="flex-1">
                                        <h4 class="font-gotham-medium text-lg leading-tight">Welcome, Introduction of the Liaison Coordinators</h4>
                                        <a href="" class="font-gotham <?php echo $hover_text_color; ?> transition">Victor Fornari, MD</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-8">
                                <h5 class="font-gotham text-lg <?php echo $text_color; ?> scroll-mt-20">Module Topic 5: ADHD</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Legal -->
<div class="max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0 pb-16 space-y-8 space-y-8 space-y-8 space-y-8">
    <h3 class="font-gotham-medium text-xl">
        This Intensive Training for Primary Care Clinicians is at no cost to New York State Pediatric Primary Care Providers.
    </h3>
    <div class="grid md:grid-cols-2 gap-6">
        <div class="space-y-4">
            <p class="font-gotham-bold text-lg">Intensive Training Accreditation:</p>
            <p class="font-gotham-medium">ACCREDITATION:</p>
            <p class="font-gotham-light">The University at Buffalo Jacobs School of Medicine and Biomedical Sciences is accredited by the ACCME to provide continuing medical education for physicians.</p>
            <p class="font-gotham-medium">CERTIFICATION:</p>
            <p class="font-gotham-light">The University at Buffalo Jacobs School of Medicine and Biomedical Sciences designates this internet live activity for a maximum of <span class="font-gotham underline">9.0 AMA PRA Category 1 Credit(s)</span><span class="font-gotham"><sup>TM</sup></span>. Physicians should claim only the credit commensurate with the extent of their participation in the activity.</p>
            <p class="font-gotham-light">The UB CME Office will provide UB CME Certificates of Attendance to allied healthcare professionals or non-physicians, who have attended a UB CME certified and accredited educational activity. The allied healthcare professional is responsible for submitting the UB CME certificate to their own governing body for credit. Most allied healthcare professional boards accept Physician credits.</p>
        </div>
        <div class="space-y-4">
            <p class="font-gotham-bold text-lg">Follow-Up Session Accreditation:</p>
            <p class="font-gotham-medium">ACCREDITATION:</p>
            <p class="font-gotham-light">The University at Buffalo Jacobs School of Medicine and Biomedical Sciences is accredited by the ACCME to provide continuing medical education for physicians.</p>
            <p class="font-gotham-medium">CERTIFICATION:</p>
            <p class="font-gotham-light">The University at Buffalo Jacobs School of Medicine and Biomedical Sciences designates this internet live activity for a maximum of <span class="font-gotham underline">6.0 AMA PRA Category 1 Credit(s)</span><span class="font-gotham"><sup>TM</sup></span>. Physicians should claim only the credit commensurate with the extent of their participation in the activity.</p>
            <p class="font-gotham-light">The UB CME Office will provide UB CME Certificates of Attendance to allied healthcare professionals or non-physicians, who have attended a UB CME certified and accredited educational activity. The allied healthcare professional is responsible for submitting the UB CME certificate to their own governing body for credit. Most allied healthcare professional boards accept Physician credits.</p>
        </div>
    </div>
    <p class="font-gotham-light"><span class="font-gotham-medium">Credit Claim:</span> All registrants will receive online instructions on how to access the Project TEACH Learning Management System to receive CME credits and complete the evaluation form.</p>
</div>
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