<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 
require_once(get_template_directory().'/functions/breadcrumbs.php'); 
// require_once(get_template_directory().'/functions/courses.php');
require_once(get_template_directory().'/functions/admin-styles.php');


/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'header-menu',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => 'menu-{menu slug}-container',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul>%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        )
    );
}

// Register HTML5 Blank Navigation
function register_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'primary' => __('Primary Navigation', 'html5blank'), // Main Navigation
    ));
}

//Remove all classes and IDs from Nav Menu
function wp_nav_menu_remove($var) {
	return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('page_css_class', 'wp_nav_menu_remove', 100, 1);
add_filter('nav_menu_item_id', 'wp_nav_menu_remove', 100, 1);
// add_filter('nav_menu_css_class', 'wp_nav_menu_remove', 100, 1);

//Add custom classes to menu <li> element
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 110, 3);

//Add custom classes to menu link
function add_menu_link_class( $atts, $item, $args ) {
  if (isset($args->link_class)) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

//Add classes to current li
function special_nav_class($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'text-blue ';
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 110 , 2);

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $classes[] = 'blog sidebar-primary';
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Primary', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'sidebar-primary',
        'before_widget' => '<section class="sidebar-block %1$s %2$s">',
        'after_widget' => '</div></section>',
        'before_title' => '<div class="block-title"><h3>',
        'after_title' => '</h3></div><div class="block-content">'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Default', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'sidebar-default',
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions($html)
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'register_menu'); // Add HTML5 Blank Menu
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

function getBaseUrl()
{
    return get_template_directory_uri();
}
function getActive()
{
    $url_array =  explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    $url = $url_array[count($url_array) - 1];
    return $url;
}
function active($current_page)
{
    $url_array =  explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    $url = $url_array[count($url_array) - 1];
    if ($current_page == $url) {
        echo 'active';
    }
    return null;
}

        function build_sorter($a, $b)
        {
            $key = 'order';
            if ($a[$key] == $b[$key]) {
                return 0;
            } else if ($a[$key] > $b[$key]) {
                return 1;
            } else {
                return -1;
            }
        }

        /* START Added by WJF... 12/27/2017 */
        function get_pt_attachment_url($suffix)
        {
            $upload_info = wp_upload_dir();
            $prefix_url = $upload_info['baseurl'];
            $att_url = $prefix_url . '/' . $suffix;
            return $att_url;
        }

        function get_link_by_slug($slug, $type = 'page')
        {
            $post = get_page_by_path($slug, OBJECT, $type);
            //PC::debug("get_link_by_slug: " . print_r($post,1));
            $link = is_object($post) ? get_permalink($post->ID) : '';
            if (!is_object($post)) {
                PC::debug("get_link_by_slug:Error - slug=$slug, type=$type");
            }
            return $link;
        }

        function permalink_thingy($atts)
        {
            extract(shortcode_atts(array(
                'slug' => 1,
                'text' => ""  // default value if none supplied
            ), $atts));

            if ($text) {
                $url = get_link_by_slug($slug);
                return "<a href='$url'>$text</a>";
            } else {
                return get_link_by_slug($slug);
            }
        }
        function permaimage_thingy($atts)
        {
            extract(shortcode_atts(array(
                'suffix' => 1,
                'type' => 2,
                'text' => ""  // default value if none supplied
            ), $atts));
            $url = get_pt_attachment_url($suffix);
            $tag = "";
            switch ($type) {
                case 'bg':
                    $tag = 'style="background-image:url(' . $url . ');"';
                    break;
                case 'href':
                    $tag = 'href="' . $url . '"';
                    break;
                default:
                case 'src':
                    $tag = 'src="' . $url . '"';
                    break;
            }
            return $tag;
        }
        add_shortcode('permalink', 'permalink_thingy');
        add_shortcode('permaimage', 'permaimage_thingy');

        /* END Added by WJF... 12/27/2017 */
        /* START Added by LPD... 2/22/2018 */
        /**
         * Get attachment image
         */
        function get_attachment_image($ID, $size, $order)
        {
            if (!$order) $order = 'DESC';
            $args = array(
                'numberposts' => 1,
                'order' => $order,
                'post_mime_type' => 'image',
                'post_parent' => $ID,
                'post_type' => 'attachment'
            );
            $url = wp_get_attachment_image_src(get_post_thumbnail_id($ID), $size);
            if (!$url) :
                $get_children_array = get_children($args, ARRAY_A);
                $rekeyed_array = array_values($get_children_array);
                $child_image = $rekeyed_array[0];
                $url = wp_get_attachment_image_src($child_image['ID'], $size);
            endif;
            return $url[0];
        }

        /**
         * Get custom slug
         */
        function custom_slug($slug)
        {
            $slug = strtolower($slug);
            $slug = preg_replace("/[^a-z0-9_\s-]/", "", $slug);
            $slug = preg_replace("/[\s-]+/", " ", $slug);
            $slug = preg_replace("/[\s_]/", "-", $slug);
            return $slug;
        }


//Options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        // 'parent_slug'	=> 'menu-dashboard',
		'redirect'		=> false
	));
	
}

// added 4/20/20 by Pat Cooney

/*------------------------------------*\
   BLOG POSTS / NEWSLETTERS FUNCTIONS
\*------------------------------------*/

//POST_EXCERPT START//
    function oz_remove_normal_excerpt() {
        // remove all these metaboxes on post pages
        remove_meta_box('commentsdiv', 'post', 'normal');
        remove_meta_box('commentstatusdiv', 'post', 'normal');
        remove_meta_box('trackbacksdiv', 'post', 'normal');
        remove_meta_box('authordiv','post','normal' );
        remove_meta_box('slugdiv', 'post', 'normal');
    }
    add_action( 'admin_menu' , 'oz_remove_normal_excerpt' );


// Allows author lookup for a post object inside a repeater field
function my_posts_where( $where ) {
	$where = str_replace("meta_key = 'authors_$", "meta_key LIKE 'authors_%", $where);
	return $where;
}
add_filter('posts_where', 'my_posts_where');


//for looks on post page - Move WP content box inside acf fields 
add_action('acf/input/admin_head', 'my_acf_admin_head');
function my_acf_admin_head() { ?>
    <script type="text/javascript">
    (function($) {
        $(document).ready(function(){
            $('.acf-field-5e98a5249a2a1 .acf-input').append( $('#postdivrich') ); 
        });
    })(jQuery);    
    </script>
    <style type="text/css">
        .acf-field #wp-content-editor-tools {
            background: white;
            padding-top: 0;
        }
    </style>
<?php }

// adds Project Teach color swatches to all ACF color pickers on admin side
function custom_colors_colorpicker_admin_footer() { ?>
    <script type="text/javascript">
        (function($) {
            acf.add_filter('color_picker_args', function( args, $field ){
                args.palettes = ['#039fda', '#3a0e79', '#7bbf43', '#e09b3d']
                return args;
            });
        })(jQuery);
    </script>
<?php }
add_action('acf/input/admin_footer', 'custom_colors_colorpicker_admin_footer');

/**
 * Theme Template Usage Report
 *
 * Displays a data dump to show you the pages in your WordPress
 * site that are using custom theme templates.
 * project-teach.launchpaddv.com?template_report
 */
function theme_template_usage_report( $file = false ) {
    if ( ! isset( $_GET['template_report'] ) ) return;

    $templates = wp_get_theme()->get_page_templates();
    $report = array();

    echo '<h1>Page Template Usage Report</h1>';
    echo "<p>This report will show you any pages in your WordPress site that are using one of your theme's custom templates.</p>";

    foreach ( $templates as $file => $name ) {
        $q = new WP_Query( array(
            'post_type' => 'page',
            'posts_per_page' => -1,
            'meta_query' => array( array(
                'key' => '_wp_page_template',
                'value' => $file
            ) )
        ) );

        $page_count = sizeof( $q->posts );

        if ( $page_count > 0 ) {
            echo '<p style="color:green">' . $file . ': <strong>' . sizeof( $q->posts ) . '</strong> pages are using this template:</p>';
            echo "<ul>";
            foreach ( $q->posts as $p ) {
                echo '<li><a href="' . get_permalink( $p, false ) . '">' . $p->post_title . '</a></li>';
            }
            echo "</ul>";
        } else {
            echo '<p style="color:red">' . $file . ': <strong>0</strong> pages are using this template, you should be able to safely delete it from your theme.</p>';
        }

        foreach ( $q->posts as $p ) {
            $report[$file][$p->ID] = $p->post_title;
        }
    }

    exit;
}
add_action( 'wp', 'theme_template_usage_report' );

//Convert ACF COLOR from HEXADECIMAL to RGB
function hex2rgb($hex) {
    $hex = str_replace("#", "", $hex);
    
    if(strlen($hex) == 3) {
    $r = hexdec(substr($hex,0,1).substr($hex,0,1));
    $g = hexdec(substr($hex,1,1).substr($hex,1,1));
    $b = hexdec(substr($hex,2,1).substr($hex,2,1));
    } else {
    $r = hexdec(substr($hex,0,2));
    $g = hexdec(substr($hex,2,2));
    $b = hexdec(substr($hex,4,2));
    }
    $rgb = array($r, $g, $b);
    
    return $rgb; // returns an array with the rgb values
}

//added 4/20/20 by Pat Cooney End

function hex_to_rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}


// MMH - Add consult repeater to RESERVE A CONSULTATION TIME FOR QUESTION
add_filter( 'gform_pre_render_2', 'populate_posts' );
add_filter( 'gform_pre_validation_2', 'populate_posts' );
add_filter( 'gform_pre_submission_filter_2', 'populate_posts' );
add_filter( 'gform_admin_pre_render_2', 'populate_posts' );
function populate_posts( $form ) {
 
    foreach ( $form['fields'] as &$field ) {
 
        if ( $field->type != 'select' || strpos( $field->cssClass, 'populate-posts' ) === false ) {
            continue;
        }
 
        $choices = array();
 
        if( have_rows('schedule', 711) ):
            
            $repeater = get_field('schedule', 711);
            $lengthCount = '';
            // $date_string = get_sub_field('date');
            // $date = DateTime::createFromFormat('Ymd', $date_string);
            $count = 0;
            for ($lengthCount = 0; $lengthCount < count($repeater); $lengthCount++) {
                if ($repeater[$lengthCount]['date'] >= date('Ymd') && $count < 10) : 
                    $count++;
                    $current_repeater = $repeater[$lengthCount];
                    $day_of_consult = DateTime::createFromFormat('!Ymd', $current_repeater['date']);                                                                   
                
                    if($current_repeater['consultant']): 
                        $post_object = $current_repeater['consultant']; 
                    endif;

                    if ($post_object) :
                        $post = $post_object;
                        setup_postdata($post);
                        $image = get_field('image');
                    endif;
                
                    $choices[] = array( 'text' => ($day_of_consult->format('D, F d') . " with " . $post->post_title), 'value' => ($day_of_consult->format('l, F d') . " with " . $post->post_title) );
                
                    wp_reset_postdata();
                
                    // update 'Select a Post' to whatever you'd like the instructive option to be
                    $field->placeholder = 'Select a Consult';
                    $field->choices = $choices;
                endif;
            }
        endif;
    }
    return $form;
}
// Reorder Events by Date on Archive-Events page


function mind_pre_get_posts( $query ) {
  
  if( is_admin() ) {
    return $query; 
  }
  if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'events' && $query->is_main_query() ) {
    
    $query->set('orderby', 'meta_value'); 
    $query->set('meta_key', 'start_date');   
    $query->set('order', 'ASC'); 

    //add rule to remove events that have a date in the past
    
  }
  return $query;
}
add_action('pre_get_posts', 'mind_pre_get_posts');

// Register Google Maps API for Advanced Custom Fields (ACF)
function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyDuXxSaiMJiAPGIFtB80KqHUPjPf_gAR4g');
}

add_action('acf/init', 'my_acf_init');

function get_color_name($color) {
    if ($color == '#039fda') {
        $color_name = 'blue';
    } elseif ($color == '#3a0e79') {
        $color_name = 'purple';
    } elseif ($color == '#7bbf43') {
        $color_name = 'green';
    } elseif ($color == '#e09b3d') {
        $color_name = 'orange';
    } 
    if ($color_name) {
        return $color_name;
    }
}

/*------------------------------------*\
    * === EVENTS ADMIN COLUMNS === *
\*------------------------------------*/
  
// Reorganize Event Columns
add_filter('manage_events_posts_columns', 'events_columns_custom');
function events_columns_custom($columns)
{
    $columns = array(
        'cb'          => $columns['cb'],
        'title'       => __('Title'),
        'eventdate'   => __('Event Date', 'events'),
        'categories'  => __('Categories'),
        'date'       => __('Date'),
    );
    
    return $columns;
}

// Add 'Event Date' to Event Columns
add_action('manage_events_posts_custom_column', 'add_event_date_column', 10, 2);
function add_event_date_column($column, $post_id)
{
    // Image column
    if ('eventdate' === $column) {
        $date_string = get_field('start_date');

        if ($date_string) {
            // Create DateTime object from value (formats must match).
            $date = DateTime::createFromFormat('Ymd', $date_string);
            
            echo $date->format('M j, Y');
        }

    }
}
// Hook into 'Event Date' to add sorting for Event Columns
add_filter('manage_edit-events_sortable_columns', 'event_date_sortable_columns');
function event_date_sortable_columns($columns)
{
    $columns['eventdate'] = 'price_per_month';
    return $columns;
}
// Sorting funtion for 'Event Date'?
add_action('pre_get_posts', 'smashing_posts_orderby');
function smashing_posts_orderby($query)
{
    if (! is_admin() || ! $query->is_main_query()) {
        return;
    }

    if ('price_per_month' === $query->get('orderby')) {
        $query->set('orderby', 'meta_value');
        $query->set('meta_key', 'start_date');
        $query->set('meta_type', 'date');
    }
}


// ACF TO CPT
function migrate_an_acf_repeater_to_its_own_cpt( $post_id ) {

    // page ID containing this ACF repeater object
    $events = get_field_object( 'rating_scale', 119 );
    var_dump('running');
    var_dump($events);
	// get the cpt_slug
	$cpt_slug_ids = get_posts( array(
		'fields'         => 'ids',
		'posts_per_page' => -1,
		'post_type'      => 'rating_scales',
	) );

    foreach ($events['value'] as $event): 

		

            
                
                // vars
				$event_title       = $event['event_title'];
				$event_image       = $event['event_image'];
				$event_description = $event['event_description'];
				$event_link        = $event['event_link'];

				$row = array(
					'event_title'       => $event_title,
					'event_image'       => $event_image,
					'event_description' => $event_description,
					'event_link'        => $event_link,
                );

                add_row('events', $row, $cpt_slug_id);

            

		

    endforeach;
}
add_action( 'acf/save_post', 'migrate_an_acf_repeater_to_its_own_cpt' );