<?php 
    $post = get_post( $post );
    if (is_page('past-events')) {
        include(locate_template('templates/sidebar/events.php', false, false));
    } elseif (is_page('rating-scales')) {
        include(locate_template('templates/sidebar/rating-scales.php', false, false));
    } elseif (is_home())  {
        include(locate_template('templates/sidebar/posts.php', false, false));       
    } elseif ( $post) {
        if ($post->post_type === 'events') {
            include(locate_template('templates/sidebar/events.php', false, false));
        } elseif ($post->post_type === 'videos') {
            include(locate_template('templates/sidebar/videos.php', false, false));
        } else {
            include(locate_template('templates/sidebar/posts.php', false, false));
        }
    }  else {
        include(locate_template('templates/sidebar/posts.php', false, false));
    }
?>