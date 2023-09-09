<?php
    $banner_color = 'bg-purple';
    // Newsletters
    if (is_home()) {
        $banner_text = 'Project TEACH Newsletters';
        $banner_image = 'https://project-teach.launchpaddev.com/app/uploads/2020/04/doc-reading.jpg';    
        $banner_color = 'bg-green';    
    }
    elseif (is_search()) {
        $banner_text = 'Search Results';
        $banner_image = 'https://projectteachny.org/wp-content/uploads/2021/02/Untitled.jpg';
    }
    // Category Pages
    elseif (is_category()) {
        $post = get_post( $post );
        if ( $post && $post->post_type !== 'post' ) {
            $banner_text = $post->post_type . ' Category: ' . single_term_title('', false);
        } else {
            $banner_text = 'Newsletters Category: ' . single_term_title('', false);
        }
    } 
    // CPT Category Pages
    elseif (is_tax()) {
        $post = get_post( $post );
        if ( $post ) {
            $banner_text = $post->post_type . ' Category: ' . single_term_title('', false);
        }
    } 
    // CPT Archive Pages
    elseif (is_archive()) {
        $post = get_post( $post );
        if ( $post ) {
            $banner_text = 'Project TEACH ' . $post->post_type;
        }
        if ( $post->post_type === 'events' ) {
            // $banner_color = 'purple';
            $banner_image = 'https://project-teach.launchpaddev.com/app/uploads/2018/05/faculty-banner-edit.jpg';
        } elseif ( $post->post_type === 'videos' ) {
            $banner_color = 'bg-blue';
        }
    } 
    // Single Pages
    elseif (is_single()) {
        $banner_text = get_the_title();
    }
    // Catch All - Should Never Show 
    else {
        $banner_text = 'Project TEACH';
    }

    // Backup Banner Image
    if (!isset($banner_image)) {
        $banner_image = get_template_directory_uri() . '/assets/images/publications-bg.jpg';
    }
?>

<div class="h-80 bg-cover bg-center relative flex items-center justify-center" style="background-image: url('<?php echo $banner_image; ?>')">
    <div class="<?php echo $banner_color; ?> w-full h-full opacity-75 absolute"></div>
	<h2 class="max-w-screen-xl w-full mb-6 mx-auto capitalize text-white text-5xl z-10 font-gotham-bold relative">
		<?php echo $banner_text;?>
    </h2>
</div>