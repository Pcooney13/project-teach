<?php
    require_once('header.php');
    require(dirname(__FILE__)."/breadcrumbs.php");
    $day_1_modules = get_field('day_1_modules');
    $day_2_modules = get_field('day_2_modules');

    $day1args = array(
        'posts_per_page' => -1,
        'post_type' => 'videos',
        'tax_query' => array(
            array (
                'taxonomy' => 'video_type',
                'field' => 'slug',
                'terms' => '2021-spring-child-intensive-training',
            )
        ),
        'meta_key' => 'module_number',
        'meta_value' => $day_1_modules['value'],
    );
    $day2args = array(
        'posts_per_page' => -1,
        'post_type' => 'videos',
        'tax_query' => array(
            array (
                'taxonomy' => 'video_type',
                'field' => 'slug',
                'terms' => '2021-spring-child-intensive-training',
            )
        ),
        'meta_key' => 'module_number',
        'meta_value' => $day_2_modules['value'],
    );

    $day1query = new WP_Query( $day1args );
    $day2query = new WP_Query( $day2args );
    
?>



<!-- ////////// -->

<!-- <img src="https://projectteachny.org/wp-content/themes/project-teach/assets/images/arrow-down.png" alt="icon"> -->

<div class="flex-col md:flex-row flex">
    <a href="#non-urgent" class="flex-1 bg-blue text-center text-white">
        <img class="py-8 mx-auto w-20" src="https://projectteachny.org/wp-content/uploads/2020/09/blue-icon-400-01-white.png" alt="icon">
        <h3 class="text-white font-gotham-bold text-2xl">Consultations</h3>
        <p class="text-white mb-8 px-4 md:px-8 lg:w-80 mx-auto">Project TEACH provides real time access to reproductive psychiatrists</p>
    </a>
    <a href="#non-urgent" class="flex-1 bg-purple text-center text-white">
        <img class="py-8 mx-auto w-20" src="https://projectteachny.org/wp-content/uploads/2020/09/green-icon-400-01-white.png" alt="icon">
        <h3 class="text-white font-gotham-bold text-2xl">Linkage &amp; Referrals</h3>
        <p class="text-white mb-8 px-4 md:px-8 lg:w-80 mx-auto">Find linkage and referrals to community-based resources</p>
    </a>
    <a href="#non-urgent" class="flex-1 bg-green text-center text-white">
        <img class="py-8 mx-auto w-20" src="https://projectteachny.org/wp-content/uploads/2020/09/orange-icon-400-01-white.png" alt="icon">
        <h3 class="text-white font-gotham-bold text-2xl">Education</h3>
        <p class="text-white mb-8 px-4 md:px-8 lg:w-88 mx-auto">Help support mothers and their families</p>
    </a>
</div>

<!-- <div class="md:bg-transparent flex-1  md:">
        <div class="mb-4"><section>
<div class="page-nav">
<ul class="page__nav pl-0">
    <li class="page__nav-item" style="background-color: #039fda;">
        <figure class="icon-viewfield">
            <div class="icon-slider"><img src="https://projectteachny.org/wp-content/uploads/2020/09/blue-icon-400-01-white.png" alt="" width="78">
                <img src="https://projectteachny.org/wp-content/themes/project-teach/assets/images/arrow-down.png" alt=""></div></figure>
    <div class="text-white">
<h3>Consultations</h3>
Project TEACH provides real time access to reproductive psychiatrists
</div>
</li>
 	<li class="page__nav-item" style="background-color: #3a0e79;">
<figure class="icon-viewfield">
<div class="icon-slider"><img src="https://projectteachny.org/wp-content/uploads/2020/09/green-icon-400-01-white.png" alt="" width="78">
<img src="https://projectteachny.org/wp-content/themes/project-teach/assets/images/arrow-down.png" alt=""></div></figure>
<div class="text-white">
<h3>Linkage &amp; Referrals</h3>
Find linkage and referrals to community-based resources
</div>
</li>
    <li class="page__nav-item" style="background-color: #7bbf43;">
        <figure class="icon-viewfield">
            <div class="icon-slider"><img src="https://projectteachny.org/wp-content/uploads/2020/09/orange-icon-400-01-white.png" alt="" width="78">
                <img src="https://projectteachny.org/wp-content/themes/project-teach/assets/images/arrow-down.png" alt=""></div></figure>
    <div class="text-white">
<h3>Education</h3>
Help support mothers and their families
</div>
</li>
</ul>
</div>
</section></div>            
</div> -->





<!-- ////// -->

<div class="flex flex-col md:flex-row max-w-screen-xl mx-auto py-12 px-4 lg:px-0">
	<div class="main w-full md:w-auto md:flex-1 mr-6">
        <!-- Day 1 -->
        <?php if( $day1query->have_posts() ) : ?>
            <button class="accordion bg-purple text-white text-xl p-4 relative w-full items-center text-left flex">
                <span class="mr-4">Day 1</span>
                 <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute mr-4 right-0 h-6 w-6 text-white transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="panel bg-white mb-4">
                <div class="p-4 bg-purple-200">
                    <?php
                        foreach ($day_1_modules as $key => $value) : ?>
                            <p class="text-purple font-gotham-bold">
                                <?php echo $value['label']; ?>
                            </p>
                            <?php while ( $day1query->have_posts() ) : $day1query->the_post();
                                if ($value['value'] == get_field('module_number')) :
                                    include( locate_template( 'templates/archives/videos.php', false, false ) );    
                                endif;
                            endwhile;
                        endforeach;
                        wp_reset_query();
                    ?>
                </div>
            </div>
        <?php endif; ?>
        <!-- Day 2 -->
        <?php if( $day2query->have_posts() ) : ?>
            <button class="accordion bg-purple text-white text-xl p-4 relative w-full items-center text-left flex">
                <span class="mr-4">Day 2</span>
                 <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute mr-4 right-0 h-6 w-6 text-white transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="panel bg-white mb-4">
                <div class="p-4 bg-purple-200">
                    <?php
                        foreach ($day_2_modules as $key => $value) : ?>
                            <p class="text-purple font-gotham-bold">
                                <?php echo $value['label']; ?>
                            </p>
                            <?php while ( $day2query->have_posts() ) : $day2query->the_post();
                                if ($value['value'] == get_field('module_number')) :
                                    include( locate_template( 'templates/archives/videos.php', false, false ) );    
                                endif;
                            endwhile;
                        endforeach;
                        wp_reset_query();
                    ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <aside role="complementary">
    	<?php get_sidebar();?>
	</aside>
</div>

<?php require_once('footer.php'); ?>