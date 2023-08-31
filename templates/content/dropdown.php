<style>
    .accordion {
        margin:0!important;
    }
    .active {
        opacity:75%;
    }
    .dropdown .panel {
        padding: 0 18px;
    }
    .panel {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }
</style>

<section class="dropdown w-full max-w-screen-lg m-auto pb-8 px-4 md:px-0">
    <?php if (get_sub_field('accordion_title')) : ?>
        <h3 class="px-0 text-<?php echo $color; ?> font-bold font-bold text-xl md:text-3xl leading-tight mb-2">
            <?php the_sub_field('accordion_title'); ?>
        </h3>
    <?php endif; ?>
    <?php if (get_sub_field('accordion_text')) : ?>
        <div class="mb-8">
            <?php the_sub_field('accordion_text'); ?>
        </div>
    <?php endif; ?>

    <?php if(have_rows('accordian_block')): ?>
        <?php while (have_rows('accordian_block')) : the_row(); ?>
            <?php $acc_title = get_sub_field('title'); ?>
            <button class="accordion bg-<?php echo $color; ?> text-white text-xl p-4 relative w-full items-center text-left flex">
                <span class="mr-4"><?php echo $acc_title; ?></span>
                 <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute mr-4 right-0 h-6 w-6 text-white transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div class="panel bg-white mb-4">
                <div class="py-4">
                    <?php if (get_sub_field('list_links') === true) : ?>
                                <?php if (have_rows('list')) : ?>
                                
                                    <?php $i = 1; ?>
                                    <div class="-m-4">
                                        <?php while (have_rows('list')) : the_row(); ?>
                                            <div class="<?php if ($i % 2 == 0) {
                                                echo 'bg-' . $color .'-200';
                                                } ?> py-4 px-8 -mx-4"
                                            >
                                                <?php $link = get_sub_field('link');
                                                if ($link):
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';

                                                    if ($link['target']) : ?>
                                                        <div class="hover:text-<?php echo $color; ?>">
                                                            <a class="text-black no-underline text-lg font-bold opacity-75 text-current transition-color duration-300 hover:text-<?php echo $color; ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                                            <svg class="w-4 inline-block mb-1 fill-current transition-color duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                                <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                                                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                                            </svg>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="hover:text-<?php echo $color; ?>">
                                                            <a class="text-black no-underline text-lg font-bold opacity-75 text-current transition-color duration-300 hover:text-<?php echo $color; ?>" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                                        </div>
                                                    <?php endif; ?>
                                                    <a href="<?php echo parse_url($link_url, PHP_URL_SCHEME) . '://' . parse_url($link_url, PHP_URL_HOST); ?>" target="_blank" class="-mt-1 text-sm transition-color duration-300 font-gotham no-underline hover:text-<?php echo $color; ?> text-gray-500 -mr-2"><?php echo parse_url($link_url, PHP_URL_HOST);?></a>
                                                    <?php if (get_sub_field('description')) : ?>
                                                        <p><?php the_sub_field('description');?></p>
                                                    <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    <?php $i++;

                                    endwhile; ?>
                                </div>
                                
                                <?php endif; ?> 
                            <?php else : ?>
                                  <style>
                                        .accordion-content-<?php echo $block_count; ?> a {
                                            text-decoration: underline;
                                            color: <?php echo $hex; ?>;
                                        }
                                  </style>
                                <div class="accordion-content accordion-content-<?php echo $block_count; ?>">
                                    <?php the_sub_field('content'); ?>
                                </div>
                             
                            <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</section>