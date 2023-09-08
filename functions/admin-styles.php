<?php
// CONSULTANTS - Add Custom Column
add_filter('manage_consultants_posts_columns', 'custom_columns_consultants');
function custom_columns_consultants($columns)
{
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'featured_thumb' => 'Image',
        'title' => 'Title',
        'association' => 'Association',
        'author' => 'Author',
        'date' => 'Date'
    );
    return $columns;
}
// CONSULTANTS - Add Image To Custom Column
add_action('manage_consultants_posts_custom_column', 'add_thumbnail_column_to_consultants', 10, 2);
function add_thumbnail_column_to_consultants($column, $post_id)
{
    switch ($column) {
        case 'featured_thumb':
            echo '<a href="' . get_edit_post_link() . '">'; ?>
            <img style="width:48px; height:48px; border-radius:50%;" src="<?php echo get_the_post_thumbnail_url($post_id); ?>">
    <?php echo '</a>';
            break;
    }
}

// Allow SVG Uploads
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Admin Editor CSS
add_action('admin_head', 'colorpicker_restrict_members_custom_admin_css');
function colorpicker_restrict_members_custom_admin_css()
{ ?>
    <style>
        .column-featured_thumb {
            width: 50px;
        }

        /* Template: Intensive Training - color toggle switch for maternal / Child */
        .acf-field-64f48283cf99f .acf-switch  {
            background: #3e0d85;
            color:white;
        }
        .acf-field-64f48283cf99f .acf-switch.-on {
            background:#039fda;
            color:white;
        }
    </style>
<?php }
