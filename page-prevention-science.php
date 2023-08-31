<?php require_once('header.php'); ?>

<?php $resource_tag = [
    "bipolar-disorder",
    "Bipolar Disorder",
]; ?>

<div class="py-16 bg-white">
    <div class="relative flex flex-col md:flex-row items-center max-w-screen-xl mx-auto">
        <div class="w-full order-1 md:order-1 md:w-1/2 pr-8">
            <p class="text-2xl md:text-5xl leading-[3rem] mb-2 font-gotham-bold text-green">
                Prevention Science
            </p>
            <p class="font-gotham-light leading-7 mb-4 text-lg">
                In early childhood, a child's brain rapidly develops with nearly a million neural connections formed per second. Experiences, including nutrition, social support, family stability, and more, shape this development Adverse childhood experiences also play a role.
            </p>
            <p class="font-gotham-light leading-7 mb-4 text-lg">
                Socioeconomic determinants drive health disparities. Preventive interventions have profound and lasting effects on children and youth health, including behavioral outcomes.
            </p>
        </div>
        <div class="w-full order-0 md:order-1 md:w-1/2">
            <div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3] shadow-xl">
                <img class="h-full w-full object-cover" src="https://project-teach.launchpaddev.com/app/uploads/2020/10/iStock-1266493763.jpg">
            </div>
        </div>
    </div>
</div>

<div class="py-16 max-w-screen-xl mx-auto">
    <div class="flex flex-wrap justify-start md:justify-center items-center">
        <div class="max-w-xl mb-4 md:mb-12 flex lg:mb-0 w-full">
            <div class="flex flex-col w-full gap-4 mr-4">
                <div class="rounded-xl overflow-hidden shadow-xl bg-white">
                    <div class="p-4 flex flex-col h-full">
                        <p class="font-gotham-bold text-3xl mb-4 text-green">
                            59%
                        </p>
                        <div class="mt-auto flex-1 flex flex-col">
                            <p class="mb-2 font-gotham leading-tight">of U.S. children experience <span class="font-gotham-medium">at least one</span> ACE</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden shadow-xl bg-white">
                    <div class="p-4 flex flex-col h-full">
                        <p class="font-gotham-bold text-3xl mb-4 text-green">
                            24%
                        </p>
                        <div class="mt-auto flex-1 flex flex-col">
                            <p class="mb-2 font-gotham leading-tight">of U.S. children experience <span class="font-gotham-medium">three or more</span> ACEs</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden shadow-xl bg-white">
                    <div class="p-4 flex flex-col h-full">
                        <p class="font-gotham-bold text-3xl mb-4 text-green">
                            32%
                        </p>
                        <div class="mt-auto flex-1 flex flex-col">
                            <p class="mb-2 font-gotham leading-tight">of low income families experience at least one food insecurity</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full gap-4 mt-20">
                <div class="rounded-xl overflow-hidden shadow-xl bg-white">
                    <div class="p-4 flex flex-col h-full">
                        <p class="font-gotham-bold text-3xl mb-4 text-green">
                            40+
                        </p>
                        <div class="mt-auto flex-1 flex flex-col">
                            <p class="mb-2 font-gotham leading-tight">Dose-response relationships confirmed between ACEs and medical conditions</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden shadow-xl bg-white">
                    <div class="p-4 flex flex-col h-full">
                        <p class="font-gotham-bold text-3xl mb-4 text-green">
                            80%
                        </p>
                        <div class="mt-auto flex-1 flex flex-col">
                            <p class="mb-2 font-gotham leading-tight">of abused/neglected children will develop a psychiatric disorder</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden shadow-xl bg-white">
                    <div class="p-4 flex flex-col h-full">
                        <p class="font-gotham-bold text-3xl mb-4 text-green">
                            80%
                        </p>
                        <div class="mt-auto flex-1 flex flex-col">
                            <p class="mb-2 font-gotham leading-tight">Increase in risk of overall psychiatric impairment in children from food insecure families</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:flex-1 lg:pl-12">
            <p class="text-2xl md:text-4xl mb-2 font-gotham-bold">
                Adverse Childhood Experiences (ACEs)
            </p>
            <p class="font-gotham-light leading-7 mb-8 text-lg">
                There is a growing body of research on the profound impact that conditions like abuse, neglect, danger, and loss have on children. Especially those from underserved or at-risk families. Research shows a strong link between ACEs and a wide range of physical and mental health problems across the life span.
            </p>
            <p class="font-gotham-light leading-7 text-lg">
                Current and emerging research helps us understand the effects of ACEs and toxic stress on the body. This can increase risk for health problems, including chronic disease, mental illness, and obesity. ACEs include poor education, abuse/neglect, unemployment and job insecurity, poverty, food insecurity, housing instability, adverse environmental conditions, and limited access to health care.
            </p>
        </div>
    </div>
</div>

<div class="px-4 py-16 md:px-0">
    <section class="max-w-screen-lg lg:max-w-screen-xl mx-auto">
        <h2 class="text-blue font-gotham-bold text-2xl md:text-3xl mb-6">Resource Topic: Racism</h2>
        <div class="flex flex-col md:flex-row flex-wrap mb-8 md:-mx-2">
            <?php

            $args = array(
                'posts_per_page' => 4,
                'post_type' => 'pt_resources',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'resource_tags',
                        'terms' => 'racism',
                        'field' => 'slug',
                    )
                ),
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
                                        echo '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 hover:text-blue">' . $term->name . '</a>';
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

<div class="px-4 md:px-0">
    <section class="max-w-screen-lg lg:max-w-screen-xl mx-auto">
        <h2 class="text-blue font-gotham-bold text-2xl md:text-3xl mb-6">Resource Topic: Trauma</h2>
        <div class="flex flex-col md:flex-row flex-wrap mb-8 md:-mx-2">
            <?php

            $args = array(
                'posts_per_page' => 4,
                'post_type' => 'pt_resources',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'resource_tags',
                        'terms' => 'trauma',
                        'field' => 'slug',
                    )
                ),
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
                                        echo '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 hover:text-blue">' . $term->name . '</a>';
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

<!-- Additional Resources -->
<section class="pb-16 px-4 md:px-0" x-data="{ section1: true, section2: false, section3: false, section4:false}">
    <h2 class="md:text-center font-gotham-bold text-2xl md:text-3xl mb-12">Prevention Science Resources From Around the Web</h2>
    <div class="hidden md:block border-b border-solid border-cool-gray mb-8">
        <div class="max-w-screen-lg lg:max-w-screen-xl mx-auto flex flex-col md:flex-row gap-4">
            <button x-on:click="section1 = true, section2 = false, section3 = false, section4 = false" :class="section1 === true ? 'text-green border-purple' : 'text-cool-gray'" class="font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Covid-19
            </button>
            <button x-on:click="section2 = true, section1 = false, section3 = false, section4 = false" :class="section2 === true ? 'text-green border-purple' : 'text-cool-gray'" class="font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Maternal Depression
            </button>
            <button x-on:click="section3 = true, section1 = false, section2 = false, section4 = false" :class="section3 === true ? 'text-green border-purple' : 'text-cool-gray'" class="font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Provider Resources
            </button>
            <button x-on:click="section4 = true, section1 = false, section2 = false, section3 = false" :class="section4 === true ? 'text-green border-purple' : 'text-cool-gray'" class="font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Women & Family Resources
            </button>
        </div>
    </div>
    <div class="max-w-screen-lg mx-auto flex flex-col">
        <button x-on:click="section1 = true, section2 = false, section3 = false, section4 = false" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
            <p :class="section1 === true && 'font-gotham-bold'">Covid-19</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 ml-1 h-4 transform transition-all duration-300" :class="section1 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section1 === true">
            <?php $args = array(
                'numberposts' => 10,
                'post_type' => 'pt_resources',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'resource_topics',
                        'field' => 'slug',
                        'terms' => 'maternal-mental-health',
                    ),
                    array(
                        'taxonomy' => 'resource_tags',
                        'field' => 'slug',
                        'terms' => 'covid-19',
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
                        <a href="<?php echo get_the_permalink(); ?>" class="text-xl font-gotham-bold mb-1 transition hover:text-green">
                            <?php echo get_the_title(); ?>
                        </a>
                        <?php if (!empty($pdf_link)) : ?>
                            <a href="<?php echo $pdf_link['url']; ?>" class=" font-gotham text-green mb-4 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                Download PDF
                            </a>
                        <?php elseif (!empty($url_link)) : ?>
                            <a href="<?php echo $url_link; ?>" class="font-gotham text-green mb-4 flex items-center gap-1">
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
                        <span class="font-gotham-bold text-sm mb-2 uppercase text-green">Tags:</span>';
                            foreach ($tags as $term) {
                                $new_content .= '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 hover:text-green ml-1">' . $term->name . '</a>';
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
            <p :class="section2 === true && 'font-gotham-bold'">Maternal Depression</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform transition-all duration-300" :class="section2 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section2 === true">
            <?php $args = array(
                'numberposts' => 10,
                'post_type' => 'pt_resources',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'resource_topics',
                        'field' => 'slug',
                        'terms' => 'maternal-mental-health',
                    ),
                    array(
                        'taxonomy' => 'resource_tags',
                        'field' => 'slug',
                        'terms' => 'depression',
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
                        <a href="<?php echo get_the_permalink(); ?>" class="text-xl font-gotham-bold mb-1 transition hover:text-green">
                            <?php echo get_the_title(); ?>
                        </a>
                        <?php if (!empty($pdf_link)) : ?>
                            <a href="<?php echo $pdf_link['url']; ?>" class=" font-gotham text-green mb-4 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                Download PDF
                            </a>
                        <?php elseif (!empty($url_link)) : ?>
                            <a href="<?php echo $url_link; ?>" class="font-gotham text-green mb-4 flex items-center gap-1">
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
                        <span class="font-gotham-bold text-sm mb-2 uppercase text-green">Tags:</span>';
                            foreach ($tags as $term) {
                                $new_content .= '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 hover:text-green ml-1">' . $term->name . '</a>';
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
            <p :class="section3 === true && 'font-gotham-bold'">Provider Resources</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform transition-all duration-300" :class="section3 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section3 === true">
            <?php $args = array(
                'numberposts' => 10,
                'post_type' => 'pt_resources',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'resource_topics',
                        'field' => 'slug',
                        'terms' => 'maternal-mental-health',
                    ),
                    array(
                        'taxonomy' => 'resource_tags',
                        'field' => 'slug',
                        'terms' => 'depression',
                        'operator' => 'NOT IN',
                    ),
                    // array(
                    //     'taxonomy' => 'resource_types',
                    //     'field' => 'slug',
                    //     'terms' => $resource_types[0]->slug,
                    // ),
                    array(
                        'taxonomy' => 'resource_demographic',
                        'field' => 'slug',
                        'terms' => 'provider',
                    )
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
                        <a href="<?php echo get_the_permalink(); ?>" class="text-xl font-gotham-bold mb-1 transition hover:text-green">
                            <?php echo get_the_title(); ?>
                        </a>
                        <?php if (!empty($pdf_link)) : ?>
                            <a href="<?php echo $pdf_link['url']; ?>" class=" font-gotham text-green mb-4 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                Download PDF
                            </a>
                        <?php elseif (!empty($url_link)) : ?>
                            <a href="<?php echo $url_link; ?>" class="font-gotham text-green mb-4 flex items-center gap-1">
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
                        <span class="font-gotham-bold text-sm mb-2 uppercase text-green">Tags:</span>';
                            foreach ($tags as $term) {
                                $new_content .= '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 hover:text-green ml-1">' . $term->name . '</a>';
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
            <p :class="section4 === true && 'font-gotham-bold'">Women & Family Resources

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
                    array(
                        'taxonomy' => 'resource_topics',
                        'field' => 'slug',
                        'terms' => 'maternal-mental-health',
                    ),
                    // array(
                    //     'taxonomy' => 'resource_tags',
                    //     'field' => 'slug',
                    //     'terms' => 'covid-19',
                    // ),
                    // array(
                    //     'taxonomy' => 'resource_types',
                    //     'field' => 'slug',
                    //     'terms' => $resource_types[0]->slug,
                    // ),
                    array(
                        'taxonomy' => 'resource_demographic',
                        'field' => 'slug',
                        'terms' => 'parent-family',
                    )
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
                        <a href="<?php echo get_the_permalink(); ?>" class="text-xl font-gotham-bold mb-1 transition hover:text-green">
                            <?php echo get_the_title(); ?>
                        </a>
                        <?php if (!empty($pdf_link)) : ?>
                            <a href="<?php echo $pdf_link['url']; ?>" class=" font-gotham text-green mb-4 flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mb-0.5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                Download PDF
                            </a>
                        <?php elseif (!empty($url_link)) : ?>
                            <a href="<?php echo $url_link; ?>" class="font-gotham text-green mb-4 flex items-center gap-1">
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
                        <span class="font-gotham-bold text-sm mb-2 uppercase text-green">Tags:</span>';
                            foreach ($tags as $term) {
                                $new_content .= '<a href="' . $term->slug . '" class="text-sm text-black font-gotham transtion duration-300 hover:text-green ml-1">' . $term->name . '</a>';
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