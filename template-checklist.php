<?php
/* Template Name: Check List */
require_once('header.php');
// $events = get_field_object( 'category', 6521 );
// foreach ($events['value'] as $event): 
//     foreach($event['rating_scale'] as $scale):
//         $name = $scale['name'];
//         $link_off_page = $scale['link_off_page'];
//         $external_link = $scale['external_link'];
//         $screening = $scale['screening'];
//         $diagnosis = $scale['diagnosis'];
//         $tracking = $scale['tracking'];
//         $link = $cale['link'];
//         if ($link_off_page && $external_link) {
//             $pdf_link = $external_link['url'];
//         } elseif ($link) {
//             $pdf_link = $link['url'];
//         }



//         echo $name . ' - ' . $screening . ' - ' . $tracking . ' - ' . $diagnosis . ' - ' . $pdf_link;
//         echo '<br><br>';
//     endforeach;
// endforeach;
?>

<!-- (1) Featured Resources -->
<?php if (is_page(6521)) {
    $title_text_color = 'text-purple';
    $rs_title = 'Maternal Clinical <br class="hidden md:block">Rating Scales';
    $cat_color = 'purple';
    $rs_hero_image = 'https://project-teach.launchpaddev.com/app/uploads/2020/04/publications-bg-low.jpg';
} else {
    $title_text_color = 'text-blue';
    $rs_title = 'Child Clinical <br class="hidden md:block">Rating Scales';
    $cat_color = 'blue';
    $rs_hero_image = 'https://project-teach.launchpaddev.com/app/uploads/2023/08/close-up-doctor-looking-chart_23-2148868111.jpeg';
} ?>

<div class="py-16 bg-white">
    <div class="relative flex flex-col md:flex-row items-center max-w-screen-xl mx-auto">
        <div class="w-full order-1 md:order-1 md:w-1/2 pr-8">
            <p class="text-2xl md:text-5xl leading-[3rem] mb-2 font-gotham-bold <?php echo $title_text_color; ?>">
                <?php echo $rs_title; ?>
            </p>
            <p class="font-gotham-light leading-7 mb-8 text-lg">
                Use these evidence-based questionnaires and rating scales in your primary care practice*. They are free downloads in PDF format. They are organized by condition and the table indicates whether the instrument is useful for <span class="font-gotham">Screening (S)</span>, <span class="font-gotham">Diagnosis (D)</span>, and/or Monitoring <span class="font-gotham">Treatment (T)</span>.
            </p>
            <p class="font-gotham leading-7 mb-8"><em>*These assessments should be completed in private with the patient.</em></p>
        </div>
        <div class="w-full order-0 md:order-1 md:w-1/2">
            <div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3] shadow-xl">
                <img class="h-full w-full object-cover" src="<?php echo $rs_hero_image; ?>">
            </div>
        </div>
    </div>
</div>

<div class="m-auto w-full max-w-screen-lg xl:max-w-screen-xl py-16">
    <div>
        <?php the_field('intro_text'); ?>
    </div>
    <?php if (have_rows('category')) :

        $cat_counter = 0; ?>
        <!-- <div class="flex items-center justify-end opacity-50">
            <p class="text-sm text-right">Scroll to see more</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 ml-1 mt-px w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </div> -->
        <section class="w-full relative z-10 pb-8">
            <div class="flex flex-wrap w-full items-center">
                <p class="font-gotham-medium bg-<?php echo $cat_color; ?> leading-normal text-white m-1 p-1 whitespace-no-wrap rounded-full px-4 no-underline">All</p>
                <?php while (have_rows('category')) : the_row(); ?>
                    <a class="bg-<?php echo $cat_color; ?>-200 text-<?php echo $cat_color; ?> font-gotham-medium m-1 p-1 leading-normal text-lg whitespace-no-wrap rounded-full px-4 no-underline" href="#item-1-<?php echo $cat_counter; ?>"><?php the_sub_field('title'); ?></a>
                    <?php $cat_counter++; ?>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>
    <div class="flex flex-col md:flex-row mb-8">
        <?php if (have_rows('category')) :

            $cat_counter = 0;
            $line_counter = 0; ?>

            <div class="-mx-4 sm:mx-0 flex-1">
                <!-- Top legend for checklist -->
                <div class="z-10 flex sticky bg-white top-16 border-b border-black-100 items-center">
                    <div class="w-40 sm:w-56 md:w-64  border-r border-black-200 px-8">
                        Topic
                    </div>
                    <div class="flex-1 hidden sm:block px-8">
                        Rating Scale
                    </div>
                    <div class="w-full sm:w-auto h-12 sm:h-full flex-1 sm:flex-auto justify-space-between items-center text-center flex sm:justify-end py-3">
                        <div class="w-full sm:w-12 bg-white p-0 border-r border-black-100">
                            S
                        </div>
                        <div class="w-full sm:w-12 bg-white p-0 border-r border-black-100">
                            D
                        </div>
                        <div class="w-full sm:w-12 bg-white p-0">
                            T
                        </div>
                    </div>
                </div>

                <?php while (have_rows('category')) : the_row();
                    //sections will go back and forth between the following colors
                    if ($cat_counter % 2) :
                        $color = 'bg-purple';
                        $text_color = 'text-purple';
                    else :
                        $color = 'bg-blue';
                        $text_color = 'text-blue';
                    endif; ?>

                    <div id="item-1-<?php echo $cat_counter; ?>" class="rating-scales-container">
                        <div class="flex">
                            <div class="w-40 sm:w-56 md:w-64 <?php echo $color; ?>">
                                <div class="sticky px-4 py-6 sm:px-8 sm:py-8 top-108">
                                    <p class="text-white font-gotham-bold text-lg">
                                        <?php the_sub_field('title'); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col">
                                <?php if (have_rows('rating_scale')) :
                                    while (have_rows('rating_scale')) : the_row();

                                        if (($line_counter % 2) == 0 && $color == 'bg-blue') :
                                            $line_color = 'bg-blue-200';
                                        elseif (($line_counter % 2) == 0 && $color == 'bg-purple') :
                                            $line_color = 'bg-purple-200';
                                        else :
                                            $line_color = 'bg-white';
                                        endif;

                                        $translations = get_sub_field('translations');
                                        $name = get_sub_field('name');
                                        $link_off_page = get_sub_field('link_off_page');
                                        $link = get_sub_field('link');
                                        $external_link = get_sub_field('external_link');
                                        $screen = get_sub_field('screening');
                                        $diagnose = get_sub_field('diagnosis');
                                        $track = get_sub_field('tracking');
                                        $icon = get_field('check_icon') ? get_field('check_icon') : get_template_directory_uri() . "/assets/images/svgs/check.svg";
                                        if ($link_off_page && $external_link) {
                                            $use_link = $external_link['url'];
                                        } elseif ($link) {
                                            $use_link = $link['url'];
                                        } else {
                                            $use_link = '#';
                                        } ?>
                                        <div class="flex items-center flex-1 flex-col sm:flex-row <?php echo $line_color; ?>">
                                            <div class="px-4 py-6 sm:px-8 sm:py-8 flex flex-col items-start flex-1 w-full sm:w-auto">
                                                <a class="no-underline" target="_blank" href="<?php echo $use_link; ?>">
                                                    <p class="text-black font-gotham-medium scale-title"><?php echo $name; ?></p>
                                                </a>
                                                <?php if (have_rows('translations')) : ?>
                                                    <div class="<?php echo $color; ?> accordion inline text-white pt-1 px-4 mt-2 flex rounded-full w-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                                                        </svg>
                                                        View Available Translations
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none mt-px ml-1 right-0 h-4 w-4 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="panel">
                                                        <ul class="list-disc pl-5">
                                                            <?php while (have_rows('translations')) : the_row();
                                                                $link = get_sub_field('pdf') ?>
                                                                <li class="my-1"><a class="<?php echo $text_color; ?> transition-all duration-300 hover:text-black" href="<?php echo $link['url']; ?>"><?php the_sub_field('language'); ?></a></li>
                                                            <?php endwhile; ?>
                                                        </ul>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="sm:h-full h-12 w-full sm:w-auto justify-space-between flex">
                                                <!-- Screen -->
                                                <?php if ($screen) : ?>
                                                    <div class="w-full sm:w-12 border-l border-black-100 h-full p-4 flex flex-col justify-center">
                                                        <div>
                                                            <img class="w-8 h-8 m-auto" src="<?php echo $icon; ?>">
                                                        </div>
                                                    </div>
                                                <?php else : ?>
                                                    <div class="w-full sm:w-12 border-l border-black-100 h-full p-4 flex flex-col justify-center"></div>
                                                <?php endif; ?>
                                                <!-- Diagnose -->
                                                <?php if ($diagnose) : ?>
                                                    <div class="w-full sm:w-12 border-l border-black-100 h-full p-4 flex flex-col justify-center">
                                                        <div>
                                                            <img class="w-8 h-8 m-auto" src="<?php echo $icon; ?>">
                                                        </div>
                                                    </div>
                                                <?php else : ?>
                                                    <div class="w-full sm:w-12 border-l border-black-100 h-full p-4 flex flex-col justify-center"></div>
                                                <?php endif; ?>
                                                <!-- Track -->
                                                <?php if ($track) : ?>
                                                    <div class="w-full sm:w-12 border-l border-black-100 h-full p-4 flex flex-col justify-center">
                                                        <div>
                                                            <img class="w-8 h-8 m-auto" src="<?php echo $icon; ?>">
                                                        </div>
                                                    </div>
                                                <?php else : ?>
                                                    <div class="w-full sm:w-12 border-l border-black-100 h-full p-4 flex flex-col justify-center"></div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                <?php $line_counter++;
                                    endwhile;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php $cat_counter++; ?>
                <?php endwhile; ?>
            </div>

        <?php endif; ?>
        <!-- SIDEBAR -->
        <?php
        // include(locate_template('templates/sidebar/rating-scales.php', false, false)); 
        ?>
    </div>
</div>
<?php require_once('footer.php'); ?>