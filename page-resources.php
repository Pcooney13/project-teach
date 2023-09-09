<?php require_once('header.php'); ?>
<!-- (1) Featured Resources -->
<div class="py-16 bg-white">
    <div class="relative flex flex-col md:flex-row items-center max-w-screen-xl mx-auto">
        <div class="w-full order-1 md:order-1 md:w-1/2 pr-8">
            <p class="text-2xl md:text-5xl leading-[3rem] mb-2 font-gotham-bold text-purple">
                Resources
            </p>
            <p class="font-gotham-light leading-7 mb-8 text-lg">
                Your mental health is essential to your overall well-being. But knowing how or where to start can feel overwhelming. We've compiled these helpful resources to make it easier to find the right support.
            </p>
            <a class="border-solid border-2 border-purple font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-purple bg-purple" title="learn more about consultations" href="/pt_resources">
                View All Resources
            </a>
        </div>
        <div class="w-full order-0 md:order-1 md:w-1/2">
            <div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3] shadow-xl">
                <img class="h-full object-cover" src="https://project-teach.launchpaddev.com/app/uploads/2020/10/mother-discusses-daughters-symptoms-with-male-pediatrician.jpg">
            </div>
        </div>
    </div>
</div>

<div class="py-16 max-w-screen-lg lg:max-w-screen-xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-4 md:px-0">
        <div class="relative rounded-xl flex justify-center items-center overflow-hidden">
            <p class="text-2xl md:text-5xl leading-[3rem] mb-2 font-gotham-bold">Resource Categories
            </p>
        </div>
        <a href="/provider-resources" class="relative rounded-xl overflow-hidden shadow-xl bg-white transition duration-300 hover:-translate-y-2 shadow-lg hover:shadow-2xl group">
            <div class="relative p-4 flex flex-col h-full">
                <div class="flex-1 w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-blue" viewBox=" 0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1" />
                        <path d="M8 15a6 6 0 1 0 12 0v-3" />
                        <path d="M11 3v2" />
                        <path d="M6 3v2" />
                        <path d="M20 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl font-gotham-bold leading-tight transition group-hover:text-blue">Provider Resources</p>
                </div>
            </div>
        </a>
        <a href="/parent-family-resources" class="relative rounded-xl overflow-hidden shadow-xl bg-white transition duration-300 hover:-translate-y-2 shadow-lg hover:shadow-2xl group">
            <div class="relative p-4 flex flex-col h-full">
                <div class="flex-1 w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-orange" viewBox=" 0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                        <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                        <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                        <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl font-gotham-bold leading-tight transition group-hover:text-orange">Parent & Family Resources</p>
                </div>
            </div>
        </a>
        <a href="/mmh" class="relative rounded-xl overflow-hidden shadow-xl bg-white transition duration-300 hover:-translate-y-2 shadow-lg hover:shadow-2xl group">
            <div class="relative p-4 flex flex-col h-full">
                <div class="flex-1 w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-purple" viewBox=" 0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M18 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M2 5h2.5l1.632 4.897a6 6 0 0 0 5.693 4.103h2.675a5.5 5.5 0 0 0 0 -11h-.5v6" />
                        <path d="M6 9h14" />
                        <path d="M9 17l1 -3" />
                        <path d="M16 14l1 3" />
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl font-gotham-bold leading-tight transition group-hover:text-purple">Maternal Resources</p>
                </div>
            </div>
        </a>

        <a href="/" class="relative rounded-xl overflow-hidden shadow-xl bg-white transition duration-300 hover:-translate-y-2 shadow-lg hover:shadow-2xl group">
            <div class="relative p-4 flex flex-col h-full">
                <div class="flex-1 w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-blue" viewBox=" 0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M9 10l.01 0" />
                        <path d="M15 10l.01 0" />
                        <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                        <path d="M12 3a2 2 0 0 0 0 4" />
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl font-gotham-bold leading-tight transition group-hover:text-blue">Child Resources</p>
                </div>
            </div>
        </a>
        <a href="/covid" class="relative rounded-xl overflow-hidden shadow-xl bg-white transition duration-300 hover:-translate-y-2 shadow-lg hover:shadow-2xl group">
            <div class="relative p-4 flex flex-col h-full">
                <div class="flex-1 w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-green" viewBox=" 0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0" />
                        <path d="M12 7v-4" />
                        <path d="M11 3h2" />
                        <path d="M15.536 8.464l2.828 -2.828" />
                        <path d="M17.657 4.929l1.414 1.414" />
                        <path d="M17 12h4" />
                        <path d="M21 11v2" />
                        <path d="M15.535 15.536l2.829 2.828" />
                        <path d="M19.071 17.657l-1.414 1.414" />
                        <path d="M12 17v4" />
                        <path d="M13 21h-2" />
                        <path d="M8.465 15.536l-2.829 2.828" />
                        <path d="M6.343 19.071l-1.413 -1.414" />
                        <path d="M7 12h-4" />
                        <path d="M3 13v-2" />
                        <path d="M8.464 8.464l-2.828 -2.828" />
                        <path d="M4.929 6.343l1.414 -1.413" />
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl font-gotham-bold leading-tight transition group-hover:text-green">COVID-19 Resources</p>
                </div>
            </div>
        </a>
    </div>
</div>

<?php if (false) : ?>
    <div class="py-16 max-w-screen-xl mx-auto">
        <div class="flex flex-wrap justify-start md:justify-center items-center">
            <div class="max-w-xl mb-4 md:mb-12 flex relative lg:mb-0 w-full">
                <div class="flex flex-col w-full gap-4 mr-4">
                    <a href="/" class="relative rounded-xl overflow-hidden shadow-xl group">
                        <div class="absolute h-full w-full bg-cover bg-right" style="background-image:url('https://projectteachny.org/app/uploads/2020/10/provider-resource-1.jpg')">
                        </div>
                        <div class="absolute h-full w-full bg-blue opacity-[85%] group-hover:opacity-100 transition"></div>
                        <div class="absolute h-full w-full" style="background:linear-gradient(rgba(3, 159, 218, 0), rgba(3, 159, 218, 1))"></div>
                        <div class="relative p-4 flex flex-col text-white h-full">
                            <div class="flex-1 w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-blue md:text-white" viewBox=" 0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 4h-1a2 2 0 0 0 -2 2v3.5h0a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1" />
                                    <path d="M8 15a6 6 0 1 0 12 0v-3" />
                                    <path d="M11 3v2" />
                                    <path d="M6 3v2" />
                                    <path d="M20 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                </svg>
                            </div>
                            <div class="mt-auto flex-1 flex flex-col">
                                <p class="text-2xl mb-2 font-gotham-bold text-white leading-tight">Provider Resources</p>
                                <div class="mt-auto mb-2">
                                    <!-- <a class="border-solid border-2 border-blue font-gotham-bold inline-block no-underline text-blue rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/consultation">
                                    Learn More
                                </a> -->
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/" class="relative rounded-xl overflow-hidden shadow-xl group">
                        <div class="absolute h-full w-full bg-cover bg-right" style="background-image:url('https://projectteachny.org/app/uploads/2020/10/provider-resource-1.jpg')">
                        </div>
                        <div class="absolute h-full w-full bg-orange opacity-[85%] group-hover:opacity-100 transition"></div>
                        <div class="absolute h-full w-full" style="background:linear-gradient(rgba(237, 141, 46, 0), rgba(237, 141, 46, 1))"></div>
                        <div class="relative p-4 flex flex-col text-white h-full">
                            <div class="flex-1 w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-orange md:text-white" viewBox=" 0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                                </svg>
                            </div>
                            <div class="mt-auto flex-1 flex flex-col">
                                <p class="text-2xl mb-2 font-gotham-bold text-white leading-tight">Parent & Family Resources</p>
                                <div class="mt-auto mb-2">
                                    <!-- <a class="border-solid border-2 border-orange font-gotham-bold inline-block no-underline text-orange rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/consultation">
                                    Learn More
                                </a> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex flex-col w-full gap-4 mt-20">
                    <a href="/" class="relative rounded-xl overflow-hidden shadow-xl group">
                        <div class="absolute h-full w-full bg-cover bg-right" style="background-image:url('https://projectteachny.org/app/uploads/2020/10/provider-resource-1.jpg')">
                        </div>
                        <div class="absolute h-full w-full bg-purple opacity-[85%] group-hover:opacity-100 transition"></div>
                        <div class="absolute h-full w-full" style="background:linear-gradient(rgba(62, 13, 133, 0), rgba(62, 13, 133, 1))"></div>
                        <div class="relative p-4 flex flex-col text-white h-full">
                            <div class="flex-1 w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-purple md:text-white" viewBox=" 0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M18 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M2 5h2.5l1.632 4.897a6 6 0 0 0 5.693 4.103h2.675a5.5 5.5 0 0 0 0 -11h-.5v6" />
                                    <path d="M6 9h14" />
                                    <path d="M9 17l1 -3" />
                                    <path d="M16 14l1 3" />
                                </svg>
                            </div>
                            <div class="mt-auto flex-1 flex flex-col">
                                <p class="text-2xl mb-2 font-gotham-bold text-white leading-tight">Maternal Resources</p>
                                <div class="mt-auto mb-2">
                                    <!-- <a class="border-solid border-2 border-purple font-gotham-bold inline-block no-underline text-purple rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/consultation">
                                    Learn More
                                </a> -->
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/" class="relative rounded-xl overflow-hidden shadow-xl group">
                        <div class="absolute h-full w-full bg-cover bg-right" style="background-image:url('https://projectteachny.org/app/uploads/2020/10/provider-resource-1.jpg')">
                        </div>
                        <div class="absolute h-full w-full bg-green opacity-[85%] group-hover:opacity-100 transition"></div>
                        <div class="absolute h-full w-full" style="background:linear-gradient(rgba(123, 191, 67, 0), rgba(123, 191, 67, 1))"></div>
                        <div class="relative p-4 flex flex-col text-white h-full">
                            <div class="flex-1 w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-green md:text-white" viewBox=" 0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0" />
                                    <path d="M12 7v-4" />
                                    <path d="M11 3h2" />
                                    <path d="M15.536 8.464l2.828 -2.828" />
                                    <path d="M17.657 4.929l1.414 1.414" />
                                    <path d="M17 12h4" />
                                    <path d="M21 11v2" />
                                    <path d="M15.535 15.536l2.829 2.828" />
                                    <path d="M19.071 17.657l-1.414 1.414" />
                                    <path d="M12 17v4" />
                                    <path d="M13 21h-2" />
                                    <path d="M8.465 15.536l-2.829 2.828" />
                                    <path d="M6.343 19.071l-1.413 -1.414" />
                                    <path d="M7 12h-4" />
                                    <path d="M3 13v-2" />
                                    <path d="M8.464 8.464l-2.828 -2.828" />
                                    <path d="M4.929 6.343l1.414 -1.413" />
                                </svg>
                            </div>
                            <div class="mt-auto flex-1 flex flex-col">
                                <p class="text-2xl mb-2 font-gotham-bold text-white leading-tight">COVID-19 Resources</p>
                                <div class="mt-auto mb-2">
                                    <!-- <a class="border-solid border-2 border-green font-gotham-bold inline-block no-underline text-green rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/consultation">
                                    Learn More
                                </a> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-full lg:flex-1 lg:pl-12">
                <p class="text-2xl md:text-4xl mb-2 font-gotham-bold">
                    Resource Categories
                </p>
                <p class="font-gotham-light leading-7 mb-8 text-lg">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, delectus! Fuga nam unde nesciunt molestias minima ad aperiam quisquam explicabo. Excepturi aliquid est ullam quo labore quasi numquam molestiae similique.
                </p>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="py-16 px-4 md:px-0">
    <section class="max-w-screen-lg lg:max-w-screen-xl mx-auto">
        <h2 class="text-green font-bold text-2xl md:text-3xl mb-6">Recent Resources</h2>
        <div class="flex flex-col md:flex-row flex-wrap mb-8 md:-mx-2">
            <?php

            $args = array(
                'posts_per_page' => 8,
                'post_type' => 'pt_resources',
            );

            $query = new WP_Query($args);

            ?>

            <?php if ($query->have_posts()) :
                $resource_count = 1;
                while ($query->have_posts()) : $query->the_post(); ?>
                    <?php
                    $resource_topic_bubble = '';
                    $tags = get_the_terms($post->ID, 'resource_tags');
                    $terms = get_the_terms(get_the_id(), 'resource_topics');
                    if ($terms) {
                        $resource_topic = wp_trim_words($terms[0]->name, 1, '');
                        if ($resource_topic === 'Child') {
                            $resource_topic_bubble = '
                                <div class="absolute height-full right-0 top-0 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-blue-200 text-blue text-sm font-bold rounded-full dropshadow-md">
                                    Child
                                </div>';
                        } else {
                            $resource_topic_bubble = '
                                <div class="absolute height-full right-0 top-0 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-purple-200 text-purple text-sm font-bold rounded-full dropshadow-md">
                                    Maternal
                                </div>';
                        }
                    }
                    ?>
                    <div class="md:w-1/4 py-2 md:px-2">
                        <div class="flex md:flex-col items-center h-full bg-off-white md:bg-transparent shadow-lg md:shadow-none rounded-r-xl md:rounded-l-none md:items-start">
                            <a class="group" href="<?php echo get_the_permalink(); ?>">
                                <div class="relative rounded-lg overflow-hidden mb-4 shadow-xl">
                                    <div class="w-full absolute bg-gradient-to-bl rounded-lg from-black h-full transition-all duration-300 group-hover:opacity-0"></div>
                                    <?php echo $resource_topic_bubble; ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="h-44 object-cover w-full">
                                </div>
                            </a>
                            <div class="min-h-[100px] h-full flex flex-col border-b border-solid border-light-gray">
                                <div><a href="<?php echo get_the_permalink(); ?>" class="inline-block font-gotham-medium hover:text-blue mb-1">
                                        <?php
                                        if (strlen(get_the_title()) > 80 && strlen(get_the_title()) !== 80) {
                                            echo substr(get_the_title(), 0, 80) . '...';
                                        } else {
                                            echo get_the_title();
                                        }
                                        ?>
                                    </a></div>
                                <?php
                                $authors = get_field('authors');
                                if (!empty($authors) && count($authors) === 1) : ?>
                                    <div class="text-sm font-gotham mb-4 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                        <?php foreach ($authors as $post) :
                                            // Setup this post for WP functions (variable must be named $post).
                                            setup_postdata($post); ?>
                                            <a class="text-sm font-gotham text-black transition-all duration-300 hover:text-blue" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        <?php endforeach; ?>
                                        <?php wp_reset_postdata(); ?>
                                    </div>
                                <?php elseif (!empty($authors) && count($authors) > 1) : ?>
                                    <div class="text-sm font-gotham mb-4 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                        </svg>
                                        Multiple Authors
                                    </div>
                                <?php endif; ?>
                                <div class="mt-auto">
                                    <span class="font-gotham-bold text-sm mb-2 uppercase text-blue">Tags:</span>
                                    <?php
                                    foreach ($tags as $term) {
                                        echo '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 hover:text-blue">' . $term->name . '</span>';
                                    }
                                    ?>
                                </div>
                            </div>

                            <!-- <div class="flex flex-col">
                                <a href="<?php echo get_the_permalink(); ?>" class="font-semibold leading-tight md:mb-6 text-sm md:text-lg block transition-all duration-300 hover:text-purple"><?php echo get_the_title(); ?></a>
                                <div class="hidden md:block mt-auto mb-10">
                                    <a class="bg-purple text-white font-medium rounded-full py-2 px-4" href="<?php echo get_the_permalink(); ?>">View Details</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <?php $resource_count++; ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
        </div>
    </section>
</div>

<!-- (2) Provider Resources -->
<?php
$posts_per_page = [4, 4];
$args_resource_topics_terms = ['child-adolescent', 'maternal-mental-health'];
$args_resource_topics_demos = ['provider', 'provider'];
$titles = ['Child Provider Resources', 'Maternal Provider Resources'];
$text_color = ['text-blue', 'text-purple'];
$bg_color_200 = ['bg-blue-200', 'bg-purple-200'];
$bg_color = ['bg-blue', 'bg-purple'];
$hover_text_color = ['hover:text-blue', 'hover:text-purple'];
$border_color = ['border-blue', 'border-purple'];

for ($i = 0; $i < count($args_resource_topics_terms); $i++) {
    echo '
        <div class="pt-16 pb-24 px-4 md:px-0">
            <section class="max-w-screen-lg lg:max-w-screen-xl mx-auto">
                <h2 class="' . $text_color[$i] . ' font-gotham-bold text-2xl md:text-3xl mb-6">' . $titles[$i] . '</h2>
                <div class="flex flex-col md:flex-row flex-wrap mb-8 md:-mx-2">';

    $args = array(
        'posts_per_page' => $posts_per_page[$i],
        'post_type' => 'pt_resources',
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'resource_demographic',
                'terms' => $args_resource_topics_demos[$i],
                'field' => 'slug',
            ),
            array(
                'taxonomy' => 'resource_topics',
                'terms'    => $args_resource_topics_terms[$i],
                'field'    => 'slug',
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        $resource_count = 1;
        while ($query->have_posts()) : $query->the_post();
            if (strlen(get_the_title()) > 80 && strlen(get_the_title()) !== 80) {
                $resource_title = substr(get_the_title(), 0, 80) . '...';
            } else {
                $resource_title = get_the_title();
            }
            $types = get_the_terms($post->ID, 'resource_types');
            $tags = get_the_terms($post->ID, 'resource_tags');
            $terms = get_the_terms(get_the_id(), 'resource_topics');
            $resource_type_bubble = '';
            foreach ($types as $type) {
                if ($type->slug === 'video') {
                    $resource_type_bubble = '
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 ' . $bg_color_200[$i] . ' ' . $text_color[$i] . ' rounded-full dropshadow-md p-1">
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
            }
            echo '
                            <div class="md:w-1/4 py-2 md:px-2">
                                <div class="flex md:flex-col items-center h-full bg-off-white md:bg-transparent shadow-lg md:shadow-none rounded-r-xl md:rounded-l-none md:items-start">
                                    <a class="group" href="' . get_the_permalink() . '">
                                        <div class="relative rounded-lg overflow-hidden mb-4 shadow-xl">
                                            <div class="w-full absolute bg-gradient-to-bl rounded-lg from-black h-full transition-all duration-300 group-hover:opacity-0"></div>' .
                $resource_topic_bubble .
                '<img src="' . get_the_post_thumbnail_url() . '" class="h-44 object-cover w-full">
                                        </div>
                                    </a>
                                    <div class="min-h-[100px] h-full flex flex-col border-b border-solid border-light-gray">
                                        <div>
                                            <a href="' . get_the_permalink() . '" class="inline-block font-gotham-medium transition ' . $hover_text_color[$i] . ' mb-1">' .
                $resource_title .
                '</a>
                                        </div>';
            $authors = get_field('authors');
            if (!empty($authors) && count($authors) === 1) : ?>
                <div class="text-sm font-gotham mb-4 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    </svg>
                    <?php foreach ($authors as $post) :
                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post); ?>
                        <a class="text-sm font-gotham text-black transition-all duration-300 <?php echo $hover_text_color[$i]; ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php elseif (!empty($authors) && count($authors) > 1) : ?>
                <div class="text-sm font-gotham mb-4 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>
                    Multiple Authors
                </div>
            <?php endif; ?>
            <?php if (!empty($tags)) : ?>
                <div class="mt-auto">
                    <span class="font-gotham-bold text-sm mb-2 uppercase <?php echo $text_color[$i]; ?>">Tags:</span>
                    <?php
                    foreach ($tags as $term) {
                        echo '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 ' . $hover_text_color[$i] . '">' . $term->name . '</a>';
                    }
                    ?>
                </div>
            <?php endif; ?>
            </div>
            </div>
            </div>
            <?php $resource_count++; ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php wp_reset_query(); ?>
    </div>
    <div class="text-center">
        <a class="border-solid border-2 <?php echo $border_color[$i]; ?> font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent <?php echo $hover_text_color[$i]; ?> <?php echo $bg_color[$i]; ?>" title="learn more about consultations" href="/contact-us">
            View All <?php echo $titles[$i]; ?>
        </a>
    </div>
    </section>
    </div>
<?php }

?>

<!-- Additional Resources -->
<section class="pb-16 px-4 md:px-0" x-data="{ section1: true, section2: false, section3: false, section4:false}">
    <h2 class="md:text-center font-gotham-bold text-2xl md:text-3xl mb-12">Resources From Around the Web</h2>
    <div class="hidden md:block border-b border-solid border-cool-gray mb-8">
        <div class="max-w-screen-lg lg:max-w-screen-xl mx-auto flex flex-col md:flex-row gap-4">
            <button x-on:click="section1 = true, section2 = false, section3 = false, section4 = false" :class="section1 === true ? 'text-blue border-purple' : 'text-cool-gray'" class="font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Anxiety
            </button>
            <button x-on:click="section2 = true, section1 = false, section3 = false, section4 = false" :class="section2 === true ? 'text-blue border-purple' : 'text-cool-gray'" class="font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Bipolar Disorder
            </button>
            <button x-on:click="section3 = true, section1 = false, section2 = false, section4 = false" :class="section3 === true ? 'text-blue border-purple' : 'text-cool-gray'" class="font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Racism
            </button>
            <button x-on:click="section4 = true, section1 = false, section2 = false, section3 = false" :class="section4 === true ? 'text-blue border-purple' : 'text-cool-gray'" class="font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                School Refusal
            </button>
        </div>
    </div>
    <div class="max-w-screen-lg mx-auto flex flex-col">
        <button x-on:click="section1 = true, section2 = false, section3 = false, section4 = false" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
            <p :class="section1 === true && 'font-gotham-bold'">Anxiety</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 ml-1 h-4 transform transition-all duration-300" :class="section1 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section1 === true">
            <?php $args = array(
                'numberposts' => 10,
                'post_type' => 'pt_resources',
                'tax_query' => array(
                    // array(
                    //     'taxonomy' => 'resource_topics',
                    //     'field' => 'slug',
                    //     'terms' => 'maternal-mental-health',
                    // ),
                    array(
                        'taxonomy' => 'resource_tags',
                        'field' => 'slug',
                        'terms' => 'anxiety',
                    ),
                    // array(
                    //     'taxonomy' => 'resource_types',
                    //     'field' => 'slug',
                    //     'terms' => $resource_types[0]->slug,
                    // ),
                    // array(
                    //     'taxonomy' => 'resource_demographic',
                    //     'field' => 'slug',
                    //     'terms' => 'provider',
                    // )
                ),
                // 'meta_key' => 'field_name',
                // 'meta_value' => 'field_value'
            );

            $new_query = new WP_Query($args);

            if ($new_query->have_posts()) :
                while ($new_query->have_posts()) : $new_query->the_post();
                    $url_link = get_field('url_link');
                    $pdf_link = get_field('pdf_link');
                    $video_link = get_field('video_link');
            ?>

                    <div class="bg-white rounded-lg p-4 mb-4">
                        <a href="<?php echo get_the_permalink(); ?>" class="text-xl font-gotham-bold mb-1 transition hover:text-blue">
                            <?php echo get_the_title(); ?>
                        </a>
                        <?php if (!empty($pdf_link)) : ?>
                            <a href="<?php echo $pdf_link['url']; ?>" class=" font-gotham text-blue mb-4 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                Download PDF
                            </a>
                        <?php elseif (!empty($url_link)) : ?>
                            <a href="<?php echo $url_link; ?>" class="font-gotham text-blue mb-4 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                    <path d="M11 13l9 -9" />
                                    <path d="M15 4h5v5" />
                                </svg>
                                <?php echo parse_url($url_link, PHP_URL_HOST); ?>
                            </a>
                        <?php elseif (get_field('video_link')) : ?>
                            <div class="font-gotham text-blue mb-4 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                                Video
                            </div>
                        <?php endif; ?>
                        <p class="font-gotham-light leading-7 text-lg"><?php echo get_the_content(); ?></p>
                        <?php
                        $tags = get_the_terms(get_the_ID(), 'resource_tags');
                        $new_content = '';
                        if (!empty($tags)) :
                            $new_content .= '<div class="mt-4">
                        <span class="font-gotham-bold text-sm mb-2 uppercase text-blue">Tags:</span>';
                            foreach ($tags as $term) {
                                $new_content .= '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 hover:text-blue ml-1">' . $term->name . '</a>';
                            }
                            $new_content .= '</div>';
                        endif;
                        echo $new_content;
                        ?>
                    </div>
            <?php endwhile;
                wp_reset_query();
            endif; ?>

        </div>
        <button x-on:click="section2 = true, section1 = false, section3 = false, section4 = false" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
            <p :class="section2 === true && 'font-gotham-bold'">Bipolar Disorder</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform transition-all duration-300" :class="section2 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section2 === true">
            <?php $args = array(
                'numberposts' => 10,
                'post_type' => 'pt_resources',
                'tax_query' => array(
                    // array(
                    //     'taxonomy' => 'resource_topics',
                    //     'field' => 'slug',
                    //     'terms' => 'maternal-mental-health',
                    // ),
                    array(
                        'taxonomy' => 'resource_tags',
                        'field' => 'slug',
                        'terms' => 'bipolar-disorder',
                        // 'operator' => 'NOT IN',
                    ),
                    // array(
                    //     'taxonomy' => 'resource_types',
                    //     'field' => 'slug',
                    //     'terms' => $resource_types[0]->slug,
                    // ),
                    // array(
                    //     'taxonomy' => 'resource_demographic',
                    //     'field' => 'slug',
                    //     'terms' => 'provider',
                    // )
                ),
                // 'meta_key' => 'field_name',
                // 'meta_value' => 'field_value'
            );

            $new_query = new WP_Query($args);

            if ($new_query->have_posts()) :
                while ($new_query->have_posts()) : $new_query->the_post();
                    $url_link = get_field('url_link');
                    $pdf_link = get_field('pdf_link');
                    $video_link = get_field('video_link');
            ?>

                    <div class="bg-white rounded-lg p-4 mb-4">
                        <a href="<?php echo get_the_permalink(); ?>" class="text-xl font-gotham-bold mb-1 transition hover:text-blue">
                            <?php echo get_the_title(); ?>
                        </a>
                        <?php if (!empty($pdf_link)) : ?>
                            <a href="<?php echo $pdf_link['url']; ?>" class=" font-gotham text-blue mb-4 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                Download PDF
                            </a>
                        <?php elseif (!empty($url_link)) : ?>
                            <a href="<?php echo $url_link; ?>" class="font-gotham text-blue mb-4 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                    <path d="M11 13l9 -9" />
                                    <path d="M15 4h5v5" />
                                </svg>
                                <?php echo parse_url($url_link, PHP_URL_HOST); ?>
                            </a>
                        <?php elseif (get_field('video_link')) : ?>
                            Video
                        <?php endif; ?>
                        <p class="font-gotham-light leading-7 text-lg"><?php echo get_the_content(); ?></p>
                        <?php
                        $tags = get_the_terms(get_the_ID(), 'resource_tags');
                        $new_content = '';
                        if (!empty($tags)) :
                            $new_content .= '<div class="mt-4">
                        <span class="font-gotham-bold text-sm mb-2 uppercase text-blue">Tags:</span>';
                            foreach ($tags as $term) {
                                $new_content .= '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 hover:text-blue ml-1">' . $term->name . '</a>';
                            }
                            $new_content .= '</div>';
                        endif;
                        echo $new_content;
                        ?>
                    </div>
            <?php endwhile;
                wp_reset_query();
            endif; ?>

        </div>
        <button x-on:click="section3 = true, section1 = false, section2 = false, section4 = false" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
            <p :class="section3 === true && 'font-gotham-bold'">Racism</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform transition-all duration-300" :class="section3 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section3 === true">
            <?php $args = array(
                'numberposts' => 10,
                'post_type' => 'pt_resources',
                'tax_query' => array(
                    // array(
                    //     'taxonomy' => 'resource_topics',
                    //     'field' => 'slug',
                    //     'terms' => 'maternal-mental-health',
                    // ),
                    array(
                        'taxonomy' => 'resource_tags',
                        'field' => 'slug',
                        'terms' => 'racism',
                        // 'operator' => 'NOT IN',
                    ),
                    // array(
                    //     'taxonomy' => 'resource_types',
                    //     'field' => 'slug',
                    //     'terms' => $resource_types[0]->slug,
                    // ),
                    // array(
                    //     'taxonomy' => 'resource_demographic',
                    //     'field' => 'slug',
                    //     'terms' => 'provider',
                    // )
                ),
                // 'meta_key' => 'field_name',
                // 'meta_value' => 'field_value'
            );

            $new_query = new WP_Query($args);

            if ($new_query->have_posts()) :
                while ($new_query->have_posts()) : $new_query->the_post();
                    $url_link = get_field('url_link');
                    $pdf_link = get_field('pdf_link');
                    $video_link = get_field('video_link');
            ?>

                    <div class="bg-white rounded-lg p-4 mb-4">
                        <a href="<?php echo get_the_permalink(); ?>" class="text-xl font-gotham-bold mb-1 transition hover:text-blue">
                            <?php echo get_the_title(); ?>
                        </a>
                        <?php if (!empty($pdf_link)) : ?>
                            <a href="<?php echo $pdf_link['url']; ?>" class=" font-gotham text-blue mb-4 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                Download PDF
                            </a>
                        <?php elseif (!empty($url_link)) : ?>
                            <a href="<?php echo $url_link; ?>" class="font-gotham text-blue mb-4 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                    <path d="M11 13l9 -9" />
                                    <path d="M15 4h5v5" />
                                </svg>
                                <?php echo parse_url($url_link, PHP_URL_HOST); ?>
                            </a>
                        <?php elseif (get_field('video_link')) : ?>
                            Video
                        <?php endif; ?>
                        <p class="font-gotham-light leading-7 text-lg"><?php echo get_the_content(); ?></p>
                        <?php
                        $tags = get_the_terms(get_the_ID(), 'resource_tags');
                        $new_content = '';
                        if (!empty($tags)) :
                            $new_content .= '<div class="mt-4">
                        <span class="font-gotham-bold text-sm mb-2 uppercase text-blue">Tags:</span>';
                            foreach ($tags as $term) {
                                $new_content .= '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 hover:text-blue ml-1">' . $term->name . '</a>';
                            }
                            $new_content .= '</div>';
                        endif;
                        echo $new_content;
                        ?>
                    </div>
            <?php endwhile;
                wp_reset_query();
            endif; ?>

        </div>
        <button x-on:click="section4 = true, section1 = false, section2 = false, section3 = false" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
            <p :class="section4 === true && 'font-gotham-bold'">School Refusal

            </p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform transition-all duration-300" :class="section4 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section4 === true">
            <?php $args = array(
                'numberposts' => 10,
                'post_type' => 'pt_resources',
                'tax_query' => array(
                    // array(
                    //     'taxonomy' => 'resource_topics',
                    //     'field' => 'slug',
                    //     'terms' => 'maternal-mental-health',
                    // ),
                    array(
                        'taxonomy' => 'resource_tags',
                        'field' => 'slug',
                        'terms' => 'school-refusal',
                    ),
                    // array(
                    //     'taxonomy' => 'resource_types',
                    //     'field' => 'slug',
                    //     'terms' => $resource_types[0]->slug,
                    // ),
                    // array(
                    //     'taxonomy' => 'resource_demographic',
                    //     'field' => 'slug',
                    //     'terms' => 'parent-family',
                    // )
                ),
                // 'meta_key' => 'field_name',
                // 'meta_value' => 'field_value'
            );

            $new_query = new WP_Query($args);

            if ($new_query->have_posts()) :
                while ($new_query->have_posts()) : $new_query->the_post();
                    $url_link = get_field('url_link');
                    $pdf_link = get_field('pdf_link');
                    $video_link = get_field('video_link');
            ?>

                    <div class="bg-white rounded-lg p-4 mb-4">
                        <a href="<?php echo get_the_permalink(); ?>" class="text-xl font-gotham-bold mb-1 transition hover:text-blue">
                            <?php echo get_the_title(); ?>
                        </a>
                        <?php if (!empty($pdf_link)) : ?>
                            <a href="<?php echo $pdf_link['url']; ?>" class=" font-gotham text-blue mb-4 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                Download PDF
                            </a>
                        <?php elseif (!empty($url_link)) : ?>
                            <a href="<?php echo $url_link; ?>" class="font-gotham text-blue mb-4 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" />
                                    <path d="M11 13l9 -9" />
                                    <path d="M15 4h5v5" />
                                </svg>
                                <?php echo parse_url($url_link, PHP_URL_HOST); ?>
                            </a>
                        <?php elseif (get_field('video_link')) : ?>
                            Video
                        <?php endif; ?>
                        <p class="font-gotham-light leading-7 text-lg"><?php echo get_the_content(); ?></p>
                        <?php
                        $tags = get_the_terms(get_the_ID(), 'resource_tags');
                        $new_content = '';
                        if (!empty($tags)) :
                            $new_content .= '<div class="mt-4">
                        <span class="font-gotham-bold text-sm mb-2 uppercase text-blue">Tags:</span>';
                            foreach ($tags as $term) {
                                $new_content .= '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 hover:text-blue ml-1">' . $term->name . '</a>';
                            }
                            $new_content .= '</div>';
                        endif;
                        echo $new_content;
                        ?>
                    </div>
            <?php endwhile;
                wp_reset_query();
            endif; ?>

        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>