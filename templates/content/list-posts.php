
<?php
    $category = get_sub_field('category');
    $posts_to_show = -1;

    $args = array(
        'post_type'         => array('post'),
        'posts_per_page'    => $posts_to_show,
        'orderby' => 'DATE',
        'order' => 'DESC',
        'category_name' => $category->slug
    );
    $query = new WP_Query($args); ?>

    <div class="flex items-center">
        <h3 class="text-xl mb-0 lg:text-2xl ml-1 mt-px font-bold text-<?php echo $color; ?>"><?php echo $category->name; ?></h3>
    </div>
            
    <?php if (empty(get_sub_field('show_in_slider'))): ?>
        <div class="flex flex-wrap my-4 -mx-4">
            <?php while ($query->have_posts()) : ?>
                <?php $query->the_post(); ?>   
                <?php
                    $title = get_the_title();                    
                ?>
        
                <div class="inline-flex w-1/3 px-4 mb-2 flex-col mb-2">
                    <a href="<?php the_permalink(); ?>" class="bg-center bg-cover h-32 lg:h-48" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_id()); ?>)"></a>
                    <div class="bg-white p-4 flex-1">
                        <?php if (false && get_field('video_type', get_the_id()) === 'youtube') : ?>
                            <a href="<?php the_permalink(); ?>" class="bg-center bg-cover h-32 lg:h-48" style="background-image:url(https://img.youtube.com/vi/<?php echo get_field('video', get_the_id()); ?>/0.jpg)"></a>
                        <?php endif; ?>

                        <div class="flex-1 flex-col flex ml-2">
                            <a href="<?php the_permalink(); ?>">
                                <h6 class="font-bold leading-tight"><?php echo $title; ?></h6>
                            </a>
                        </div>
                    </div>
                </div>
                        
            <?php endwhile; ?>
        </div>
     <?php endif;?>       
<?php
    wp_reset_postdata();
?>










<script>
    // Initialize Swiper
    var swiper = new Swiper('.swiper-container-<?php echo $block_count;?>', {
        slidesPerView: 2.5,
        slidesPerGroup: 2,
        breakpoints: {
          1024: {    
            // loop: true,
            slidesPerView: 4.5,
            slidesPerGroup: 2,
            slidesPerGroupSkip: 2,
            // spaceBetween: 4,
            // autoplay: {
            //     delay: 5500,
            // },
          },
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });    
</script>