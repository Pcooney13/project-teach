<?php 

    $categories = get_sub_field('categories');

    foreach($categories as $cat) :
    
    $args = array(
        'post_type' => 'sc_files',
        'orderby' => 'title',
        'order'   => 'ASC',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'File Topics',
                'terms' => $cat,
            )
        ),
    );
    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) : ?>
        <h2 class="text-xl lg:text-2xl mb-2 font-bold"><?php echo $cat; ?></h2>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="mb-2 pl-4 flex transition-all duration-300 hover:text-<?php echo $color; ?> items-center">                
                <?php 
                    $file = get_field('file');
                    // var_dump(get_field('file')); 
                ?>
                <?php if ($file['subtype'] === 'png' || $file['subtype'] === 'jpg' || $file['subtype'] === 'jpeg' ) : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6  " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                <?php elseif ($file['subtype'] === 'pdf') : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                <?php elseif ($file['subtype'] === 'xls') : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                <?php else : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                    </svg>
                <?php endif; ?>
                <p class="text-xl ml-1"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></p>
                <span class="ml-1 text-xs py-0.5 px-2 text-<?php echo $color; ?> bg-<?php echo $color; ?>-200 rounded-full uppercase">.<?php echo $file['subtype']; ?></span>
            </div>
        <?php endwhile; ?>
    <?php endif;
    endforeach;
?>