<?php 
    require_once('header.php'); 
    include( locate_template( 'templates/banners/post-banner.php', false, false ) );
?>

<style>
    /* Pagination */
    .page-numbers {
        display:none;
    }
    .next, .prev {
        display:block;
        padding:1.25rem;
        background:#039fda;
        font-weight:bold;
        color:white;
    }
    .next:hover, .prev:hover {
        color:white;
        opacity:.8;
    }
    .next {
        margin-left:auto;
    }
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
            <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                    'posts_per_page' => 10,
                    'paged' => $paged,
                    'page' => $paged,
                    "post_type" => 'events',
                    'meta_key' => 'start_date',
                    'orderby' => 'meta_value',
                    'order' => 'DESC',
                    'meta_query' => array(
                    array(
                        'key' => 'start_date',
                        'value' => date('Ymd'),
                        'compare' => '<',
                    )
                    )
                );

                // the query
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) : ?>
                    <p id="past-title" style="text-align: center; margin-bottom: 20px; color: #4806a6; font-weight: bold; font-size: 24px;">
                        Past Events
                    </p>
                    <!-- Upcoming Events -->
                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                        include( locate_template( 'templates/archives/events.php', false, false ) );		   
                    endwhile; ?>
                    <!-- Pagination -->
                    <div class="bg-blue-200 flex">
                        <?php 
                            echo paginate_links( array(
                                'total'        => $the_query->max_num_pages,
                                'current'      => max( 1, get_query_var( 'paged' ) ),
                                'prev_next'    => true,
                                'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Events', 'text-domain' ) ),
                                'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Events', 'text-domain' ) ),
                            ) );
                            wp_reset_postdata();
                        ?>
                    </div>
                <?php endif; 
            ?> 
        </div>
    </div>
	<aside role="complementary">
        <?php get_sidebar();?>
	</aside>
</div>

<?php require_once('footer.php'); ?>