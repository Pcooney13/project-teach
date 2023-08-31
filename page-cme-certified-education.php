<?php
    require_once('header.php');
    require(dirname(__FILE__)."/breadcrumbs.php");
?>

<div class="max-w-screen-xl p-4 mx-auto">
    <div class="bg-blue-200">
        <?php
        
        $args = array(
            'numberposts' => 10,
            'post_type' => 'courses',
            // 'meta_key' => 'field_name',
            // 'meta_value' => 'field_value'
        );
        
        $query = new WP_Query( $args );
        
        ?>
        
        <?php if( $query->have_posts() ) : ?>
            <ul>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        
        <?php wp_reset_query(); ?>
        
    </div>
</div>

<?php require_once('footer.php'); ?>