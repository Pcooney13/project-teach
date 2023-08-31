<?php
require_once('header.php');
// require(dirname(__FILE__) . "/breadcrumbs.php");
?>


<!-- (4) Additional Resources -->
<section class="max-w-screen-lg lg:max-w-screen-xl mx-auto pt-12 pb-12 px-4 md:px-0" x-data="{ section1: true, section2: false, section3: false, section4:false}">
    <h2 class="text-blue md:text-center font-bold text-2xl md:text-3xl mb-6">Clinical Team</h2>
    <div class="hidden md:block border-b border-solid border-cool-gray mb-8">
        <div class="flex flex-col md:flex-row gap-4">
            <button x-on:click="section1 = true, section2 = false, section3 = false, section4 = false" :class="section1 === true && 'text-purple border-purple'" class="text-cool-gray font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Child Team
            </button>
            <button x-on:click="section2 = true, section1 = false, section3 = false, section4 = false" :class="section2 === true && 'text-purple border-purple'" class="text-cool-gray font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Maternal Team
            </button>
            <button x-on:click="section3 = true, section1 = false, section2 = false, section4 = false" :class="section3 === true && 'text-purple border-purple'" class="text-cool-gray font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Admin Team
            </button>
            <button x-on:click="section4 = true, section1 = false, section2 = false, section3 = false" :class="section4 === true && 'text-purple border-purple'" class="text-cool-gray font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Liaison Coordinators
            </button>
        </div>
    </div>
    <div class="flex flex-col">
        <button x-on:click="section1 = true, section2 = false, section3 = false, section4 = false" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
            <p :class="section1 === true && 'font-bold'">Child Team</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 ml-1 h-4 transform transition-all duration-300" :class="section1 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section1 === true">
            <?php

            $args = array(
                'posts_per_page'   => -1,
                'post_type' => 'consultants',
                'meta_key'            => 'last_name',
                'orderby'            => 'meta_value',
                'order'                => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'consult_team',
                        'field' => 'slug',
                        'terms' => 'child',
                    )
                ),
            );

            $query = new WP_Query($args);

            ?>
            <?php if ($query->have_posts()) : ?>
                <div id="child">
                    <div class="max-w-screen-lg mx-auto lg:max-w-screen-xl mb-24">
                        <p><strong class="text-purple block text-3xl mb-8">Child Team</strong></p>
                        <div class="grid grid-cols-1 md:grid-cols-3  gap-x-4 gap-y-8 text-base">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="w-full flex bg-white rounded-xl shadow-xl py-4 px-2 items-center">
                                    <img class="w-20 h-20 rounded-full mr-4" src="<?php echo get_the_post_thumbnail_url('', 'medium'); ?>">
                                    <div>
                                        <p class="font-bold text-blue"><?php the_title(); ?></p>
                                        <p class="text-sm leading-4"><?php echo get_field('affliation'); ?></p>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
        </div>
        <button x-on:click="section2 = true, section1 = false, section3 = false, section4 = false" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
            <p :class="section2 === true && 'font-bold'">Maternal Team</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform transition-all duration-300" :class="section2 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section2 === true">
            <?php

            $args = array(
                'posts_per_page'   => -1,
                'post_type' => 'consultants',
                'meta_key'            => 'last_name',
                'orderby'            => 'meta_value',
                'order'                => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'consult_team',
                        'field' => 'slug',
                        'terms' => 'maternal',
                    )
                ),
            );

            $query = new WP_Query($args);

            ?>

            <?php if ($query->have_posts()) : ?>
                <div id="maternal">
                    <div class="max-w-screen-lg mx-auto lg:max-w-screen-xl mb-24">
                        <p><strong class="text-purple block text-3xl mb-8">Maternal Team</strong></p>
                        <div class="grid grid-cols-1 md:grid-cols-3  gap-x-4 gap-y-8 text-base">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="w-full flex bg-white rounded-xl shadow-xl py-4 px-2 items-center">
                                    <img class="w-20 h-20 rounded-full mr-4" src="<?php echo get_the_post_thumbnail_url('', 'medium'); ?>">
                                    <div>
                                        <p class="font-bold text-blue"><?php the_title(); ?></p>
                                        <p class="text-sm leading-4"><?php echo get_field('affliation'); ?></p>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
        </div>
        <button x-on:click="section3 = true, section1 = false, section2 = false, section4 = false" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
            <p :class="section3 === true && 'font-bold'">Admin Team</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform transition-all duration-300" :class="section3 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section3 === true">
            <?php

            $args = array(
                'posts_per_page'   => -1,
                'post_type' => 'consultants',
                'meta_key'            => 'last_name',
                'orderby'            => 'meta_value',
                'order'                => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'consult_team',
                        'field' => 'slug',
                        'terms' => 'admin',
                    )
                ),
            );

            $query = new WP_Query($args);

            ?>

            <?php if ($query->have_posts()) : ?>
                <div id="admin">
                    <div class="max-w-screen-lg mx-auto lg:max-w-screen-xl mb-24">
                        <p><strong class="text-purple block text-3xl mb-8">Admin Team</strong></p>
                        <div class="grid grid-cols-1 md:grid-cols-3  gap-x-4 gap-y-8 text-base">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="w-full flex bg-white rounded-xl shadow-xl py-4 px-2 items-center">
                                    <img class="w-20 h-20 rounded-full mr-4" src="<?php echo get_the_post_thumbnail_url('', 'medium'); ?>">
                                    <div>
                                        <p class="font-bold text-blue"><?php the_title(); ?></p>
                                        <p class="text-sm leading-4"><?php echo get_field('affliation'); ?></p>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
        </div>
        <button x-on:click="section4 = true, section1 = false, section2 = false, section3 = false" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
            <p :class="section4 === true && 'font-bold'">Liaison Coordinators</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform transition-all duration-300" :class="section4 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section4 === true">
            <?php

            $args = array(
                'posts_per_page'   => -1,
                'post_type' => 'consultants',
                'meta_key'            => 'last_name',
                'orderby'            => 'meta_value',
                'order'                => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'consult_team',
                        'field' => 'slug',
                        'terms' => 'liaison',
                    )
                ),
            );

            $query = new WP_Query($args);

            ?>

            <?php if ($query->have_posts()) : ?>
                <div id="lc">
                    <div class="max-w-screen-lg mx-auto lg:max-w-screen-xl mb-24">
                        <p><strong class="text-purple block text-3xl mb-8">Liaison Team</strong></p>
                        <div class="grid grid-cols-1 md:grid-cols-3  gap-x-4 gap-y-8 text-base">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="w-full flex bg-white rounded-xl shadow-xl py-4 px-2 items-center">
                                    <img class="w-20 h-20 rounded-full mr-4" src="<?php echo get_the_post_thumbnail_url('', 'medium'); ?>">
                                    <div>
                                        <p class="font-bold text-blue"><?php the_title(); ?></p>
                                        <p class="text-sm leading-4"><?php echo get_field('affliation'); ?></p>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>