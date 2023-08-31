<h2 class="text-3xl text-<?php echo $color; ?>"><?php the_sub_field('title'); ?></h2>
<?php if ( have_rows('events') ) : ?>
    <?php while( have_rows('events') ) : the_row(); ?>
        <div class="pl-4 pb-8 mb-8 pt-8 border-b border-black-200">
            <p style="text-decoration-color:<?php echo $hex; ?>" class="text-black underline text-2xl"><strong><?php the_sub_field('title'); ?></strong></p>
            <?php 
                $date = NULL;
                $duration = NULL;
                $timestamp = NULL;
                $endtime = NULL;
                if (get_sub_field('date_time')) {
                    $date = date_create(get_sub_field('date_time')); 
                    $duration = get_sub_field('duration');
                    $timestamp = strtotime(date_format($date, 'g:ia')) + $duration * (60*60);
                    $endtime = date('g:ia', $timestamp);
                } ?>
                <div class="flex">
                    <span class="px-2 py-1 rounded-full flex items-center text-<?php echo $color;?> text-bold mr-4 text-sm bg-<?php echo $color; ?>-200">
                        <!-- Date -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 text-<?php echo $color; ?> h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span><?php if ($date) {echo date_format($date, 'l, F j, Y');} else { echo 'TBD'; } ?></span>
                    </span>
                    <span class="px-2 py-1 rounded-full flex items-center text-<?php echo $color;?> text-bold mr-4 text-sm bg-<?php echo $color; ?>-200">
                        <!-- Time -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 text-<?php echo $color; ?> h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <?php if ($date) {echo date_format($date, 'g:ia') . " - " . $endtime . " ET";} else { echo 'TBD'; } ?>
                    </span>
                </div>

            <div class="my-4"><?php the_sub_field('description'); ?></div>
            <?php  $link = get_sub_field('button');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="bg-<?php echo $color; ?> text-white inline-block hover:opacity-50 rounded-full xs:px-4 xs:py-2 md:py-4 md:px-8 ml-auto" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>

    <?php endwhile; ?>

<?php endif; ?>
