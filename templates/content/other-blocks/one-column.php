<?php 
    $col_title = get_field('title');
    $col_text = get_field('text');
    $col_button_text = get_field('button_text');
    $col_button_link = get_field('button_link'); 
    
    $col_text_color = get_field('text_color'); 
    $col_bg_color = get_field('bg_color'); 
?>

<style>
    .one-column__button {
        color: <?php echo $col_bg_color; ?>;
        background: <?php echo $col_text_color; ?>;
    }
    .one-column__button:hover {
        background: <?php echo $col_bg_color; ?>;
        color: <?php echo $col_text_color; ?>;
        border-color: <?php echo $col_text_color; ?>;
    }
</style>

<!-- one column -->
<section style="background:<?php echo $col_bg_color; ?>" class="px-4 py-8 width-full -mx-4 max-w-screen-lg mx-auto bg-white shadow-lg font-gotham">
    
<?php $image = get_field('image');

if ($image):

    // Image variables.
    $url = $image['url'];
    $title = $image['title'];
    $alt = $image['alt'];

    // Thumbnail size attributes.
    $size = 'thumbnail';
    $thumb = $image['sizes'][ $size ];
    ?>

    <a target="_blank" rel="noreferrer" href="<?php echo $col_button_link; ?>">
        <img class="max-w-md m-auto pb-6" src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
    </a>
<?php endif; ?>
    <div class="max-w-xl m-auto text-center">
        <h2 style="color:<?php echo $col_text_color; ?>" class="font-gotham-bold leading-tight mb-4"><?php echo $col_title; ?></h2>
        <div style="color:<?php echo $col_text_color; ?>" class="mb-8 mb-4-p"><?php echo $col_text; ?></div>
        <a 
            class="one-column__button border-2 border-transparent font-gotham-bold inline-block no-underline text-purple rounded-full px-6 py-3 transition-all duration-300 hover:bg-transparent bg-white" 
            href="<?php echo $col_button_link; ?>"
        >
            <?php echo $col_button_text; ?>
        </a>
    </div>
</section>