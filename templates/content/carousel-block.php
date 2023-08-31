<style>    

    .swiper-button-prev:after,
    .swiper-button-next:after {
        content:'';
    }
    .swiper-button-prev:hover,
    .swiper-button-next:hover {
        color:#fbaf5d;
        /* transform: scale(1.1); */
        opacity:1;
    }
    .swiper-pagination-bullet {
        border: 1px solid #f2f2f2;
        background: transparent;
        opacity: 100%;
    }
    .swiper-pagination-bullet-active {
        background: #f2f2f2;
        transform:scale(1.2);
    }
    .swiper-slide {
        -webkit-transform: translate3d(0, 0, 0);
    }
</style>

<!-- Swiper -->
<?php if ( have_rows('slides') ) : $loop_count = 1; ?>
    <div class="relative -mx-8 lg:mx-0 mt-4 mb-8">
        <div class="swiper-container swiper-container-<?php echo $block_count;?> w-full h-96 relative mx-auto rounded-none lg:rounded-lg mx-0 lg:mx-6">
            <div class="swiper-wrapper relative h-96 mb-4">
                <?php while( have_rows('slides') ) : the_row(); 

                    $color = get_sub_field('color');

                    if ($color) :
                        $RGB_color = hex2rgb($color);
                        $Final_Rgb_color = implode(", ", $RGB_color);
                            if ($color === "#1a1f41") {
                                $hex = "#1a1f41";
                                $color = "navy";
                            } elseif ($color === "#3d85c6") {
                            $hex = "#3d85c6";
                            $color = "blue";
                        } elseif ($color === "#1cbbb4") {
                            $hex = "#1cbbb4";
                            $color = "green";
                        } elseif ($color === "#fbaf5d") {
                            $hex = "#fbaf5d";
                            $color = "orange";
                        }
                    endif;

                 ?>

                    <div style="background:<?php the_sub_field('color'); ?>" class="swiper-slide w-full flex items-center transition-all duration-500 h-full absolute text-white">
                        <?php $image = get_sub_field('image');?>
                        <?php echo '<style>
                            .slide-' . $loop_count . '{
                                background-image:
                                linear-gradient(
                                    65deg, 
                                    rgba(' . $Final_Rgb_color . ', 1) 5%, 
                                    rgba(' . $Final_Rgb_color . ', .8) 13%, 
                                    rgba(' . $Final_Rgb_color . ', 0.15) 65%
                                ), 
                                linear-gradient(
                                    105deg,
                                    rgba(' . $Final_Rgb_color . ', 1) 8%, 
                                    rgba(' . $Final_Rgb_color . ', .8) 13%, 
                                    rgba(' . $Final_Rgb_color . ', 0.15) 65%
                                ),
                                url(
                                    ' . $image['url'] . '
                                );
                            }
                            @media (max-width:1024px) {
                                .slide-' . $loop_count . '{
                                    background-image:
                                    linear-gradient(
                                        65deg, 
                                        rgba(' . $Final_Rgb_color . ', 1) 5%, 
                                        rgba(' . $Final_Rgb_color . ', .8) 13%, 
                                        rgba(' . $Final_Rgb_color . ', 0.4) 60%
                                    ), 
                                    linear-gradient(
                                        105deg,
                                        rgba(' . $Final_Rgb_color . ', 1) 8%, 
                                        rgba(' . $Final_Rgb_color . ', .8) 24%, 
                                        rgba(' . $Final_Rgb_color . ', 0.4) 60%
                                    ),
                                    url(
                                        ' . $image['url'] . '
                                    );
                                }
                            }
                        </style>';
                        ?>
                        <div class="absolute right-0 w-full md:w-3/4 lg:w-1/2 bg-center bg-cover h-96 slide-<?php echo $loop_count; ?>" >
                        </div>
                        <div class="relative w-full lg:w-2/3 px-12">   
                            <?php $graphic = get_sub_field('graphic');

                            if ($graphic) : ?>
                                <div class="max-w-xs">
                                    <img class="h-auto max-h-10 lg:max-h-16 mb-2" src="<?php echo $graphic['url']; ?>">
                                </div>
                            <?php endif; ?>

			                <h2 class="text-2xl font-bold font-mont text-white mb-2"><?php the_sub_field('title'); ?></h2>
			                <p class="text-xl"><?php the_sub_field('text'); ?></p>
                            <?php
                                $link = get_sub_field('link');
                                $link_url = $link['url'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <?php if ($link) : ?>
                                <a class="inline-flex transition-all duration-300 hover:bg-white hover:text-<?php echo $color;?> rounded-sm border-2 px-4 py-2 border-white items-center text-white no-underline mt-8" target="<?php echo $link_target; ?>" href="<?php echo esc_url($link_url); ?>">
                                    <span><?php echo $link['title']; ?></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>    
                <?php $loop_count++; endwhile; ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next border-0 lg:border border-light-gray right-0 lg:-right-6 absolute top-0 lg:top-1/2 group z-10 h-full lg:bg-white rounded-none lg:rounded-full opacity-50 lg:opacity-75 h-6 lg:h-12 w-6 lg:w-12 flex justify-center items-center transition-all duration-300 shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-white lg:text-cool-gray group-hover:text-orange stroke-current h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
        </div>
        <div class="swiper-button-prev border-0 lg:border border-light-gray left-0 lg:-left-6 absolute top-0 lg:top-1/2 group z-10 h-full lg:bg-white rounded-none lg:rounded-full opacity-50 lg:opacity-75 h-6 lg:h-12 w-6 lg:w-12 flex justify-center items-center transition-all duration-300 shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-white lg:text-cool-gray group-hover:text-orange stroke-current h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
            </svg>
        </div>
    </div>

<?php endif; ?>

<script>
    // Initialize Swiper
    var swiper = new Swiper('.swiper-container-<?php echo $block_count;?>', {
        loop: true,
        autoplay: {
            delay: 5500,
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