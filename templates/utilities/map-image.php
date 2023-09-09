<!-- Map Column -->
<div class="relative w-full flex-1">
    <?php 
        $image = get_field("map_no_labels", "option");
        $size = 'large'; // (thumbnail, medium, large, full or custom size)
        if( false && $image ) {
	        echo wp_get_attachment_image( $image, $size, '', array("class" => "pt_map_no_labels") );
        }
    ?>
    <img src="<?php echo get_template_directory_uri();?>/assets/images/new-pt-map-text-expanded.svg">
</div>