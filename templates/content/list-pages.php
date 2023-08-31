<div style="flex-wrap:wrap" class="flex row">
    <?php
		$mypages = get_pages(
            array(
                'child_of' => $post->ID, 
                'parent' => $post->ID,
                'sort_column' => 'menu_order', 
                'sort_order' => 'asc'
            )
        );
    ?>
    <?php foreach( $mypages as $page ):	?>
    <div class="w-full md:w-1/2 px-4 pb-4 block-wrapper">
        <div>
            <div class="img-wrapper overflow-hidden">
                <a href="<?php echo get_page_link($page->ID); ?>">
                    <?php 
                        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'menu-thumb' ); 
                        $thumb = $thumb['0'];
                    ?>
                    <?php if ($thumb) :?>
                    <img class="img-responsive" src="<?php echo $thumb; ?>"
                        alt="<?php echo $page->post_title; ?>" title="<?php echo $page->post_title; ?>">
                    <?php else :?>
                    <div class="placeholder transform hover:scale-110 tranistion-all duration-300">
                        <img class="img-responsive"
                            src="https://via.placeholder.com/540x300/1a1f41/1a1f41?text=0"
                            alt="<?php echo $page->post_title; ?>" title="<?php echo $page->post_title; ?>">
                        <div class="placeholder__bg"></div>
                        <div class="placeholder__content">
                            <p class="placeholder__title"><?php echo $page->post_title; ?></p>
                            <img class="" src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg"
                                alt="The Schwartz Center Member Community">
                        </div>
                    </div>
                    <?php endif; ?>
                </a>
            </div>
            <div class="block__content">
                <a href="<?php echo get_page_link($page->ID); ?>">
                    <h3><?php echo $page->post_title; ?></h3>
                </a>
                <p><?php the_field('page_summary', $page->ID); ?></p>
            </div>
        </div>
    </div>
    <?php $count++; endforeach; ?>
</div>