<?php 
    require_once(dirname(__FILE__).'/header.php');
    include( locate_template( 'templates/banners/post-banner.php', false, false ) );
?>

<style>
    /* Events */
    .event__image-wrap {
        margin-left:5%;
    }
    .event__passed .reg-status {
        display:none;
    }
    .event__passed .event__image-wrap,
    .event__passed .event__wrap a {
        pointer-events:none;
        display:inline-block;
    }
    /* mobile views */
    @media (max-width:600px) {
        .event__image-wrap {
            margin-left:0;
            margin-bottom:3%;
        }
    }
</style>

<div class="flex flex-col md:flex-row max-w-screen-xl mx-auto py-12 px-4 lg:px-0">
    <div class="main w-full md:w-auto md:flex-1 mr-6">

        <!-- UPCOMING EVENTS START-->
        <div>
            <?php $args = array(
                "posts_per_page" => -1,
                "post_type" => 'events',
                'meta_key' => 'start_date',
                'orderby' => 'meta_value',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'start_date',
                        'value' => date('Ymd'),
                        'compare' => '>=',
                    )
                )
            );
            $the_query = new WP_Query($args);
            if (!is_paged() && $the_query->have_posts()) : ?>
                <p id="past-title" style="text-align: center; margin-bottom: 20px; color: #4806a6; font-weight: bold; font-size: 24px;">
                    Upcoming Events
                </p>
                <!-- Upcoming Events -->
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    include( locate_template( 'templates/archives/events.php', false, false ) );		   
                endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
        <!-- UPCOMING EVENTS END -->

        <!-- PAST EVENTS START-->
        <?php if (false) : ?>
        <div>                            
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'posts_per_page' => 10,
                'paged' => $paged,
                'page' => $paged,
                "post_type" => 'events',
                'meta_key' => 'start_date',
                'orderby' => 'meta_value',
                'order' => 'DESC',
                'meta_query' => array(
                    'relation' => 'AND',
                    array(
                        'key' => 'start_date',
                        'value' => date('Ymd'),
                        'compare' => '<',
                    ),
                    array(
                        'key' => 'start_date',
                        'value'   => '20180101',
                        'compare' => '>',
                        'type'    => 'DATE'
                    )
                )
            );

            // the query
            $past_query = new WP_Query($args); 
            if ($past_query->have_posts()) : ?>
                <p id="past-title" style="text-align: center; margin-bottom: 20px; color: #4806a6; font-weight: bold; font-size: 24px;">
                    Past Events
                </p>

                <?php
                // Passed Events Variables                
                while ($past_query->have_posts()) : $past_query->the_post(); 
                    include( locate_template( 'templates/archives/events.php', false, false ) );		   	   	   
                endwhile; ?>
                <!-- end of the loop -->

                <!-- Pagination -->
                <div class="bg-blue-200 flex">
                    <?php 
                        echo paginate_links( array(
                            'total'        => $past_query->max_num_pages,
                            'current'      => max( 1, get_query_var( 'paged' ) ),
                            'prev_next'    => true,
                            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Events', 'text-domain' ) ),
                            'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Events', 'text-domain' ) ),
                        ) );
                    ?>
                </div>

                <?php wp_reset_postdata(); ?>
            <?php endif; ?> 
        </div>
        <?php endif; ?>
        <!-- PAST EVENTS END -->

    </div>
	<aside role="complementary">
        <?php get_sidebar();?>
	</aside>
</div>


<?php require_once(dirname(__FILE__).'/footer.php'); ?>