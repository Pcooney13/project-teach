<?php 
$year = get_sub_field('year');
$dd_title = get_sub_field('title_in_dropdown');
$taxonomy = get_term_by('id', $year, 'Years');
 
// Test if string contains the word
if (strpos($taxonomy->name, 'Honor') !== false) {
    $honored = true;
    $li_padding = '';
    $right_content_pad = 'py-8';
} else {
    $honored = false;
    $li_padding = 'p-4';
    $right_content_pad = 'py-4';
}

$args = array(
    'post_type' => 'programs',
    'orderby' => 'title',
    'order'   => 'ASC',
    'posts_per_page' => -1,
    'tax_query' => array(
        array (
            'taxonomy' => 'Years',
            'terms' => $year,
        )
    ),
);
$the_query = new WP_Query($args);



    // The Loop
    if ($the_query->have_posts()) : ?>

        <?php if (get_sub_field('accordion')) : ?>
            <div class="accordion mb-8">
                <div class="mb-4">
                    <button class="accordion bg-<?php echo $color;?>  w-full text-left text-white p-4 shadow-sm font-bold xs:text-lg sm:text-2xl"><?php echo $dd_title;?></button>
                    <div class="panel bg-<?php echo $color;?>-200">
                    <?php endif; ?>

                    <ul>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="bg-white <?php echo $li_padding; ?> mb-8 flex shadow-md">
                                <?php 
                                    $title = get_the_title();
                                    $subtitle = get_field('subtitle');
                                    $image = get_field('image');
                                    $honor_image = get_field('honoree_image');
                                    $honor_video = get_field('honoree_video');
                                    $about = get_field('about');
                                    $link = get_field('link');
                                    $location = get_field('location');
                                    $city = $location['city'];
                                    $state = $location['state'];
                                    $country = $location['country'];
                                    if ($country !== 'United States') {
                                        $address = $city . ', ' . $state . ', ' . $country;
                                    } else {
                                        $address = $city . ', ' . $state;
                                    }
                                ?>     

                                <a href="<?php echo $link; ?>" class="flex relative group items-center">
                                    <?php if ($honored && isset($honor_image)) : ?>
                                        <div class="w-96 h-full bg-center bg-cover" style="background-image:url(<?php echo $honor_image['url']; ?>)"></div>
                                    <?php elseif ($honored && $honor_video) : ?>
                                        <div class="video-block w-128 mb-0">
                                            <iframe src="<?php echo $honor_video; ?>"></iframe>
                                        </div>
                                    <?php else: ?>
                                        <img class="w-80 h-auto p-8" src="<?php echo $image['url']; ?>">
                                        <div class="opacity-5 transition-all duration-300 group-hover:opacity-0 absolute bg-black w-full h-full"></div>
                                    <?php endif; ?>
                                </a>
                                <div class="flex-1 flex flex-col justify-center ml-8 <?php echo $right_content_pad;?> relative overflow-hidden">
                                    <?php if ($honored && $honor_image || $honored && $honor_video) : ?>
                                        <img class="max-w-xs w-auto max-h-12 mb-2 object-contain object-left h-auto" src="<?php echo $image['url']; ?>">
                                    <?php endif;?>
                                    <a class="font-black text-2xl font-mont font-bold block" href="<?php echo $link; ?>"><?php echo $title; ?></a>
                                    <p class="text-cool-gray"><?php echo $subtitle; ?></p>
                                    <p class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="mt-0.5 pt-px"><?php echo $address; ?></span>
                                    </p>
                                    <div class="flex mt-8">
                                        <a class="bg-transparent border-2 border-navy text-navy xs:px-4 xs:py-2 md:py-2 md:px-4 rounded-full font-bold hover:bg-navy hover:text-white hover:opacity-50" href="https://www.google.com/maps/search/?api=1&query=<?php echo $title; ?>, <?php echo $location['city']; ?>,<?php echo $location['state']; ?>" target="_blank">
                                            View on Map
                                        </a>
                                        <a class="bg-navy text-white border-2 border-navy xs:px-4 xs:py-2 md:py-2 md:px-4 rounded-full font-bold ml-4 hover:opacity-50" href="<?php echo $link; ?>" target="_blank">
                                            Visit Website
                                        </a>
                                        <?php if ($about) : ?>
                                            <button class="about-btn ml-auto pr-4 flex items-center text-cool-gray">
                                                <span>More Info</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-all duration-300" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        <?php endif; ?>
                                    </div>
                                    <div class="about transition-all max-h-px overflow-hidden duration-300"><?php echo $about; ?></div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>                    
                    
                    <?php if (get_sub_field('accordion')) : ?>
                    </div>
                </div>
            </div>
        <?php endif;?>

    <?php endif; ?>
    
<?php wp_reset_postdata(); ?>




<script>
    const abouts = [...document.querySelectorAll('.about')];
    const aboutBtns = [...document.querySelectorAll('.about-btn')];

    aboutBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            let parent = btn.parentElement.parentElement.children;
            btn.parentElement.parentElement.parentElement.children[0].style.height = btn.parentElement.parentElement.parentElement.children[0].offsetHeight + 'px'
            if (parent.length === 5 ) {
                btn.parentElement.parentElement.children[4].classList.toggle('max-h-px');
                btn.parentElement.parentElement.children[4].classList.toggle('mt-8');
            } else if (parent.length === 6 ) {
                btn.parentElement.parentElement.children[5].classList.toggle('max-h-px');
                btn.parentElement.parentElement.children[5].classList.toggle('mt-8');
            }
            btn.children[1].classList.toggle('rotate-180');
        })
    });

</script>