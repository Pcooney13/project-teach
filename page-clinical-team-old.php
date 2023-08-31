<?php
require_once('header.php');
require(dirname(__FILE__) . "/breadcrumbs.php");
?>

<div class="flex items-center max-w-screen-xl mx-auto">
    <p class="font-gotham-medium bg-blue leading-normal text-white m-1 p-1 whitespace-no-wrap rounded-full px-4 no-underline">All</p>
    <a class="bg-blue-200 text-blue font-gotham-medium m-1 p-1 leading-normal text-lg whitespace-no-wrap rounded-full px-4 no-underline" href="#child">
        Child Team
    </a>
    <a class="bg-purple-200 text-purple font-gotham-medium m-1 p-1 leading-normal text-lg whitespace-no-wrap rounded-full px-4 no-underline" href="#maternal">
        Maternal Team
    </a>
    <a class="bg-blue-200 text-blue font-gotham-medium m-1 p-1 leading-normal text-lg whitespace-no-wrap rounded-full px-4 no-underline" href="#admin">
        Admin Team
    </a>
    <a class="bg-blue-200 text-blue font-gotham-medium m-1 p-1 leading-normal text-lg whitespace-no-wrap rounded-full px-4 no-underline" href="#lc">
        Liaison Coordinators
    </a>
</div>

<div class="h-px w-full mb-8"></div>
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
    <div id="child" class="bg-blue-200 py-16">
        <div class="max-w-screen-lg mx-auto lg:max-w-screen-xl mb-24 px-4 md:px-0">
            <p><strong class="text-blue block text-3xl mb-8">Child Team</strong></p>
            <div class="grid grid-cols-1 md:grid-cols-3  gap-x-4 gap-y-8 text-base">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="w-full h-24 flex items-center">
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
    <div id="maternal" class="bg-purple-200 py-16">
        <div class="max-w-screen-lg mx-auto lg:max-w-screen-xl mb-24 px-4 md:px-0">
            <p><strong class="text-purple block text-3xl mb-8">Maternal Team</strong></p>
            <div class="grid grid-cols-1 md:grid-cols-3  gap-x-4 gap-y-8 text-base">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="w-full h-24 flex items-center">
                        <img class="w-20 h-20 rounded-full mr-4" src="<?php echo get_the_post_thumbnail_url('', 'medium'); ?>">
                        <div>
                            <p class="font-bold text-purple"><?php the_title(); ?></p>
                            <p class="text-sm leading-4"><?php echo get_field('affliation'); ?></p>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>

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
    <div id="admin" class="py-16">
        <div class="max-w-screen-lg mx-auto lg:max-w-screen-xl mb-24 px-4 md:px-0">
            <p><strong class="block text-3xl mb-8">Admin Team</strong></p>
            <div class="grid grid-cols-1 md:grid-cols-3  gap-x-4 gap-y-8 text-base">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="w-full h-24 flex items-center">
                        <img class="w-20 h-20 rounded-full mr-4" src="<?php echo get_the_post_thumbnail_url('', 'medium'); ?>">
                        <div>
                            <p class="font-bold"><?php the_title(); ?></p>
                            <p class="text-sm leading-4"><?php echo get_field('affliation'); ?></p>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>

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
    <div id="lc" class="bg-white py-16">
        <div class="max-w-screen-lg mx-auto lg:max-w-screen-xl mb-24 px-4 md:px-0">
            <p><strong class="block text-3xl mb-8">Liaison Coordinators</strong></p>
            <div class="grid grid-cols-1 md:grid-cols-3  gap-x-4 gap-y-8 text-base">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="w-full h-24 flex items-center">
                        <img class="w-20 h-20 rounded-full mr-4" src="<?php echo get_the_post_thumbnail_url('', 'medium'); ?>">
                        <div>
                            <p class="font-bold"><?php the_title(); ?></p>
                            <p class="text-sm leading-4"><?php echo get_field('affliation'); ?></p>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>

<?php require_once('footer.php'); ?>