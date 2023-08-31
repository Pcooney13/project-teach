<?php
    require_once('header.php');
    require(dirname(__FILE__)."/breadcrumbs.php");
?>

<?php

$args = array(
    'posts_per_page' => -1,
    'post_type' => 'consultants',
    'offset' => 2,
    'orderby' => 'title',
    'order' => 'ASC'
    // 'meta_key' => 'field_name',
    // 'meta_value' => 'field_value'
);

$query = new WP_Query( $args );

?>

<?php if( $query->have_posts() ) : ?>
    <div class="max-w-screen-sm mx-auto text-base">
        <p><strong class="block text-2xl mb-4">Region 1 Core Team</strong></p>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="flex items-center mb-4 p-4 bg-white">
                <?php if (get_the_post_thumbnail()) : ?>
                    <img class="rounded-full w-16 h-16 mr-2" src=<?php echo get_the_post_thumbnail_url('', 'medium');?>">
                <?php endif; ?>
                    <div>
                        <h6 class="leading-0 font-bold text-blue"><?php the_title(); ?></h6>
                        <h6 class="leading-0 font-light"><?php echo get_field('affliation'); ?></h6>
                    </div>
                </a>
            <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>

   
<?php require_once('footer.php'); ?>