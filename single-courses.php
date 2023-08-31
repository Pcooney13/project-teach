<?php
	get_header(); 
	// use instead but add css
	// echo the_breadcrumb();
    require(dirname(__FILE__)."/breadcrumbs.php");
	
    $terms = get_the_terms($post->ID, 'course_category');
    foreach ($terms as $term) {
        echo $term->slug;
    }
    if ($categories) : 
        echo '<ul>';
            foreach ($categories as $cat) : ?>
                <li>
                    <h2><?php echo esc_html($cat->name); ?></h2>
                    <p><?php echo esc_html($cat->description); ?></p>
                </li>
            <?php endforeach;
        echo '</ul>';
    endif;

	get_footer();
?>