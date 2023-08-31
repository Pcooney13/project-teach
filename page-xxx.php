<?php
    require_once('header.php');
    require(dirname(__FILE__)."/breadcrumbs.php");
?>

<div class="page-content">
		<?php
            // Post Content
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        ?>

        <?php if (have_rows('custom_content')): ?>
			<style>
				body {
                    background: #edf2f2
                }
                .links__blue .panel-body a,
                .links__blue .text a {
                    color:#039fda;
                }
                .links__purple .panel-body a,
                .links__purple .text a {
                    color:#3a0e79;
                }
                .links__green .panel-body a,
                .links__green .text a {
                    color:#7bbf43;
                }
                .links__orange .panel-body a,
                .links__orange .text a {
                    color:#e09b3d;
                }
                .section {
                    margin: 0 auto;
                    padding: 30px 0;
                }
                .section__dd a {
                    font-weight:bold;
                }
                .title {
                    margin-bottom:16px;
                    font-size: 36px !important;
                    font-weight: 900;
                }
                .text {
                    margin-bottom:16px;
                }
                .panel-group {
                    margin-bottom:0;
                }
			</style>
        		<?php while (have_rows('custom_content')) : the_row();

                    // set block count on first loop
                    if (!isset($block_count)) {
                        $block_count = 1;
                    }
                    // get total blocks for page
                    $total_blocks = count(get_field('custom_content'));
                    
                    // reset color variables for each block in the loop
                    $hex = null;
                    $color = null;
                    // get color
                    $color = get_sub_field('color');
                    // set color variables
                    if ($color) {
                        if ($color === "#3a0e79") {
                            $hex = "#3a0e79";
                            $color = "purple";
                        } elseif ($color === "#039fda") {
                            $hex = "#039fda";
                            $color = "blue";
                        } elseif ($color === "#7bbf43") {
                            $hex = "#7bbf43";
                            $color = "green";
                        } elseif ($color === "#e09b3d") {
                            $hex = "#e09b3d";
                            $color = "orange";
                        }
                    } else {
                        // fallback color
                        $hex = "#3a0e79";
                        $color = "purple";
                    }

                    // flexible content blocks
                    if (get_row_layout() == 'accordian_content') {
                        include(locate_template('templates/content/dropdown.php', false, false));
                    } elseif (get_row_layout() == 'block_quote') {
                        include(locate_template('templates/content/block-quote.php', false, false));
                    } elseif (get_row_layout() == 'carousel_block') {
                        include(locate_template('templates/content/carousel-block.php', false, false));
                    } elseif (get_row_layout() == 'content_block') {
                        include(locate_template('templates/content/content-block.php', false, false));
                    } elseif (get_row_layout() == 'events_list') {
                        include(locate_template('templates/content/events-list.php', false, false));
                    } elseif (get_row_layout() == 'form_block') {
                        include(locate_template('templates/content/form-block.php', false, false));
                    } elseif (get_row_layout() == 'grid_gallery') {
                        include(locate_template('templates/content/grid-gallery.php', false, false));
                    } elseif (get_row_layout() == 'list_links') {
                        include(locate_template('templates/content/links-list.php', false, false));
                    } elseif (get_row_layout() == 'family_resource') {
                        include(locate_template('templates/content/family-resource.php', false, false));
                    } elseif (get_row_layout() == 'webinar') {
                        include(locate_template('templates/content/webinar.php', false, false));
                    } elseif (get_row_layout() == 'map_2_columns') {
                        include(locate_template('templates/content/map-2-columns.php', false, false));
                    } elseif (get_row_layout() == 'pt_block') {
                        include(locate_template('templates/content/pt-block.php', false, false));
                    } elseif (get_row_layout() == 'list_pages') {
                        include(locate_template('templates/content/list-pages.php', false, false));
                    } elseif (get_row_layout() == 'list_posts') {
                        include(locate_template('templates/content/list-posts.php', false, false));
                    } elseif (get_row_layout() == 'courses_slider') {
                        include(locate_template('templates/content/courses-slider.php', false, false));
                    } elseif (get_row_layout() == 'list_programs') {
                        include(locate_template('templates/content/list-programs.php', false, false));
                    } elseif (get_row_layout() == 'video') {
                        include(locate_template('templates/content/video.php', false, false));
                    } elseif (get_row_layout() == 'post_block_w_dropdown') {
                        include(locate_template('templates/content/post-block-w-dropdown.php', false, false));
                    }
                    $block_count++;
                endwhile;
            endif;
        ?>

</div>

<?php require_once('footer.php'); ?>