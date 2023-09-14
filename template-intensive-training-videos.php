<?php
/* Template Name: Intensive Training Video */
require_once('header.php');

if (have_rows('topic_resource')) :
    $count = 1;
    $module_count = 1; ?>

    <div class="py-16 bg-white">
        <div class="relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0">
            <h2 class="text-2xl md:text-3xl font-gotham-bold"><?php the_field('title'); ?></h2>

            <?php while (have_rows('topic_resource')) : the_row(); ?>
                
                    <!-- Topic Title -->
                    <h2><?php the_sub_field('topic_title'); ?></h2>
                    <!-- Topic Text -->
                    <?php if (get_sub_field('topic_text')) : ?>
                        <p class="pb-4"><?php the_sub_field('topic_text'); ?></p>
                    <?php endif; ?>
                    <!-- Syllabus Link -->
                    <?php if (get_sub_field('module_topic')) : ?>
                        <p class="pb-4"><a href="/syllabi/2021-statewide-live-virtual-intensive-training-childrens-mental-health-for-primary-care-providers/#topic-<?php echo $module_count; ?>"><?php the_sub_field('module_topic'); ?> Syllabus</a></p>
                        <?php $module_count++; ?>
                    <?php endif; ?>
                    <!-- Blocks -->
                    <div class="grid grid-cols-3 gap-4">
                        <?php if (get_sub_field('resources')) :
                            $inner_count = 1;
                            while (have_rows('resources')) : the_row();
                                $module = get_sub_field('module');
                                $title = get_sub_field('title');
                                $presenter = get_sub_field('presenter');
                                $video = get_sub_field('video');
                                $image = get_sub_field('image');
                                $size = 'full';
                        ?>
                                <!-- Block -->
                                <div class="flex flex-col mb-8 col-md-6">
                                    <!-- Image - add class for video if necessary -->
                                    <?php if ($video) : ?>
                                        <div class="relative aspect-video">
                                            <iframe class="w-full absolute" width="560" height="315" src="<?php echo $video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                    <?php elseif ($image) : ?>
                                        <img class="img-responsive" src="<?php echo $image; ?>">
                                    <?php endif; ?>

                                    <!-- Additional Downloadables -->
                                    <?php if (get_sub_field('pdf_title')) : ?>
                                        <p class="py-2">
                                            <strong>
                                                <?php the_sub_field('pdf_title'); ?>
                                            </strong>
                                        </p>
                                    <?php endif; ?>

                                    <ul class="pl-4">
                                        <?php
                                        $file = get_sub_field('single_file');
                                        if ($file) : ?>
                                            <li>
                                                <strong>
                                                    <a class="text-blue" href="<?php echo $file['url']; ?>">
                                                        <?php echo $file['title']; ?>
                                                        <div style="display:inline-block; width:38px; padding:3px 5px; margin-left:5px; border-radius:5px; background-color:#039fda; font-weight:bold; color:white;">PDF</div>
                                                    </a>
                                                </strong>
                                            </li>
                                        <?php endif; ?>
                                    </ul>

                                    <!-- Title -->
                                    <div style="flex-direction:column;" class="resource-title-box text-center">
                                        <p style="text-decoration:underline" class="text-white text-sm"><strong><?php echo $module; ?></strong></p>
                                        <p style="line-height:1.25;" class="text-white text-xl"><strong><?php echo $title; ?></strong></p>
                                        <p class="text-white text-sm"><?php echo $presenter; ?></p>
                                    </div>

                                </div>

                                <?php $inner_count++; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php $count++; ?>
                
            <?php endwhile; ?>

        </div>
    </div>
<?php endif; ?>

<?php require_once('footer.php'); ?>