<?php require_once('header.php'); ?>
<?php require(dirname(__FILE__) . "/breadcrumbs.php"); ?>

<section class="py-20">
    <h4 class="max-w-screen-lg mx-auto text-purple font-bold leading-tight text-4xl mb-4">Project TEACH Liaison Coordinators</h4>
    <div class="max-w-screen-lg mx-auto md:flex justify-center">
        <div class="flex-1 md:pr-8">
            <?php  if( have_rows('team_block') ):
                $count = 1;
                while ( have_rows('team_block') ) : the_row(); ?>
                    <?php  if( have_rows('team_members') ): ?>
                        <div class="team-block-wrapper">
                            <?php while ( have_rows('team_members') ) : the_row(); ?>

                                <div class="team-block-row liaison-block-row">
                                    <?php 
                                        if ( get_sub_field('image') ) {
                                            $image = get_sub_field('image');
                                        } else {
                                            $image = get_template_directory_uri() . '/assets/images/placeholder.png';
                                        }
                                    ?>       
                                    <img class="team-image team-image-sm" src="<?php echo wp_get_attachment_image_url( $image, 'full' ); ?>" alt="<?php the_sub_field('name'); ?>" title="<?php the_sub_field('name'); ?>">
                                    <div class="team-member-info">
                                        <p class="team-name team-info"><?php the_sub_field('name'); ?></p>                                                    
                                        <p class="team-title team-core-title team-info"><?php the_sub_field('title'); ?></p>
                                    </div>
                                    <div class="team-member-contact">
                                        <p class="team-phone team-info"><?php the_sub_field('phone'); ?></p>
                                        <a class="team-email team-info" href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
                                    </div>
                                </div>

                                <?php $count++;?>

                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="w-full md:w-1/2">
            <?php include( locate_template( 'templates/utilities/map-image.php', false, false ) ); ?>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>