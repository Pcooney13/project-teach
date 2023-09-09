
<!-- Theme sidebar -->
<div class="aside rating-scale-sidebar w-full md:w-72 ml-0 md:ml-4">
    <div class="sidebars">

        <?php if( have_rows('item') ): ?>
            <?php while ( have_rows('item') ) : the_row();
                $sidebar_color = get_sub_field('color');
                // set color variables
                if ($sidebar_color) {
                    if ($sidebar_color === "#3a0e79") {
                        $hex = "#3a0e79";
                        $sidebar_color = "purple";
                    } elseif ($sidebar_color === "#039fda") {
                        $hex = "#039fda";
                        $sidebar_color = "blue";
                    } elseif ($sidebar_color === "#7bbf43") {
                        $hex = "#7bbf43";
                        $sidebar_color = "green";
                    } elseif ($sidebar_color === "#e09b3d") {
                        $hex = "#e09b3d";
                        $sidebar_color = "orange";
                    }
                } else {
                    // fallback color
                    $hex = "#3a0e79";
                    $sidebar_color = "purple";
                } ?>
                <section class="bg-white mb-6 shadow-md">
                    <?php if (get_sub_field('manual')) : ?>
                        <?php $image = get_sub_field('image');
                        if( !empty( $image ) ): ?>
                            <a class="block mb-1 bg-center bg-cover h-40 w-full" href="<?php the_sub_field('link'); ?>" style="background-image:url('<?php echo esc_url($image['url']); ?>');"></a>
                        <?php endif; ?>
                        <div class="p-4">
                            <div class="" href="#">
                                <p class="text-sm mb-1 text-<?php echo $sidebar_color; ?>"><?php the_sub_field('type'); ?></p>                                                                                                                                                  
							</div>
                            <a class="font-gotham-bold mb-2 block leading-4" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a>
                            <div class="text-sm"><?php the_sub_field('description'); ?></div>
                            <a class="bg-<?php echo $sidebar_color; ?> text-white rounded-full py-4 mx-4 mt-4 border-solid border-2 border-<?php echo $sidebar_color; ?> hover:bg-transparent hover:text-<?php echo $sidebar_color; ?> font-gotham-bold transition-all duration-300 block text-center" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_text'); ?></a>                        
                        </div>
                    <?php else: ?>
                        <div>
                            <?php $post_object = get_sub_field('post'); ?>
                            <?php if( $post_object ): ?>
                                <?php $post = $post_object; ?>
	                            <?php setup_postdata( $post ); ?>
                                    <? get_template_part("templates/blog/content", "post-list"); ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </section>    
                <?php endwhile; ?>
            <?php endif; ?>

    </div>
</div>
