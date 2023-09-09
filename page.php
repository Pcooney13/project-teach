<?php
    require_once('header.php');
    if (have_rows('content')): 
        while (have_rows('content')) : the_row();

            // set block count on first loop
            if (!isset($block_count)) {
                $block_count = 1;
            }
            // get total blocks for page
            $total_blocks = count(get_field('content'));
                    
            // reset Title-Color variables for each block in the loop
            $title_color = null;
            // get Title-Color
            $title_color = get_sub_field('title_color');
            // set Title-Color variables
            if ($title_color) {
                if ($title_color === "#3a0e79") {
                    $title_color = "text-purple";
                } elseif ($title_color === "#039fda") {
                    $title_color = "text-blue";
                } elseif ($title_color === "#7bbf43") {
                    $title_color = "text-green";
                } elseif ($title_color === "#e09b3d") {
                    $title_color = "text-orange";
                }
            } else {
                // fallback Title-Color
                $title_color = "text-black";
            }

            // reset Button-Color variables for each block in the loop
            $button_color = null;
            // get Button-Color
            $button_color = get_sub_field('button_color');
            // set Button-Color variables
            if (!empty($button_color)) {
                if ($button_color === "#3a0e79") {
                    $button_bg_color = 'bg-purple';
                    $button_border_color = 'border-purple';
                    $button_hover_bg_color = 'hover:text-purple';
                } elseif ($button_color === "#039fda") {
                    $button_bg_color = 'bg-blue';
                    $button_border_color = 'border-blue';
                    $button_hover_bg_color = 'hover:text-blue';
                } elseif ($button_color === "#7bbf43") {
                    $button_bg_color = 'bg-green';
                    $button_border_color = 'border-green';
                    $button_hover_bg_color = 'hover:text-green';
                } elseif ($button_color === "#e09b3d") {
                    $button_bg_color = 'bg-orange';
                    $button_border_color = 'border-orange';
                    $button_hover_bg_color = 'hover:text-orange';
                }
            } else {
                // fallback Button-Color (purple)
                $button_bg_color = 'bg-purple';
                $button_border_color = 'border-purple';
                $button_hover_bg_color = 'hover:text-purple';
            }

            // reset Title-Size variables for each block in the loop
            $title_size = null;
            // get Title-Size
            $title_size = get_sub_field('title_size');
            // set Title-Size variables
            if ($title_size) {
                $title_size = "md:text-5xl md:leading-[3rem]";
            } else {
                $title_size = "md:text-3xl";
            }
            

            // flexible content blocks
            if (get_row_layout() == 'text_image') {
                include(locate_template('templates/new/text-image.php', false, false));
            } elseif (get_row_layout() == 'text_faded_image') {
                include(locate_template('templates/new/text-faded-image.php', false, false));
            } elseif (get_row_layout() == 'three_colored_blocks') {
                include(locate_template('templates/new/three-colored-blocks.php', false, false));
            } elseif (get_row_layout() == 'multi_row_blocks') {
                include(locate_template('templates/new/multi-row-blocks.php', false, false));
            } elseif (get_row_layout() == 'portal_blocks') {
                include(locate_template('templates/new/portal-blocks.php', false, false));
            }
            $block_count++;
        endwhile;
    endif;

require_once('footer.php'); ?>