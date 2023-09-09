<?php 
require_once('header.php');
require(dirname(__FILE__)."/breadcrumbs.php"); ?>

<section class="rating-scales max-w-screen-xl mx-auto">
    <div style="padding-bottom:0;" class="wrap">
        <p class="section__subtitle">
            Use these evidence-based questionnaires and rating scales in your primary care practice. 
            They are free downloads in PDF format. They are organized by condition and the table indicates whether 
            the instrument is useful for <span>Screening (S),</span> <span>Diagnosis (D),</span> and/or <span>Monitoring Treatment (T)</span>.
        </p>
    </div>
                
<div class="flex flex-col md:flex-row py-12 px-4 md:px-0">
<div class="main w-full md:w-auto md:flex-1 mr-6">	

    <?php 
        if (have_posts()):
            while ( have_posts() ) : the_post();
                if (have_rows('category')):

                    $cat_counter = 0;
                    $line_counter = 0; ?>


                    <div class="all-scales">
                        <div id="rating-key" class="top-ratings rating-scales-container">
                            <div class="ratings-classification">
                            </div>
                            <div class="classified" id="classified-header">
                                <div style="padding:0;" class="cat-title">S</div>
                                <div style="padding:0;" class="cat-title">D</div>
                                <div style="padding:0;" class="cat-title">T</div>
                            </div>
                        </div>

                        <?php while (have_rows('category')) : the_row();
                            //sections will go back and forth between the following colors
                            if ($cat_counter%2):
                                $color = '#3a0e79'; 
                            else: 
                                $color = '#039fda';
                            endif;?>

                            <div class="rating-scales-container">
                                <div class="rating-box">
                                    <div style="background-color:<?php echo $color;?>" class="ratings-classification">
                                        <div class="classification-box">
                                            <p><?php the_sub_field('title');?></p>
                                        </div>
                                    </div>
                                    <div class="classified">
                                        <?php if (have_rows('rating_scale')):
                                            while (have_rows('rating_scale')) : the_row(); 
                                                if (($line_counter%2) == 0 && $color == '#039fda'): 
                                                    $line_color = 'rgba(3, 159, 218, .05)';
                                                elseif (($line_counter%2) == 0 && $color == '#3a0e79'): 
                                                    $line_color = 'rgba(58, 14, 121, .05)';
                                                else: 
                                                    $line_color = 'white';
                                                endif;
                                                $name = get_sub_field('name'); 
                                                $link = get_sub_field('link'); 
                                                $screen = get_sub_field('screening'); 
                                                $diagnose = get_sub_field('diagnosis'); 
                                                $track = get_sub_field('tracking');
                                                $icon = get_field('check_icon') ? get_field('check_icon') : get_template_directory_uri() . "/assets/images/right.png"; ?>
                                                <div style="background-color:<?php echo $line_color;?>" class="classified-ratings">
                                                    <?php if( $link ): ?>
                                                        <div class="ratings-name">
                                                            <a target="_blank" href="<?php echo $link['url']; ?>">
                                                                <p><?php echo $name; ?></p>
                                                            </a>
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="ratings-name"> 
                                                            <a target="_blank" href="#">
                                                                <p><?php echo $name; ?></p>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="rate-wrapper">
                                                        <?php if( $screen ): ?>
                                                        <div class="screening-rating"><div class="checkbox"><img class="checkmark" src="<?php echo get_template_directory_uri();?>/assets/images/check.svg"></div></div>
                                                        <?php else: ?>
                                                        <div class="screening-rating"></div>
                                                        <?php endif; ?>
                                                        <?php if( $diagnose ): ?> <div class="diagnosis-rating"><div class="checkbox"><img class="checkmark" src="<?php echo get_template_directory_uri();?>/assets/images/check.svg"></div></div>
                                                        <?php else: ?>
                                                        <div class="diagnosis-rating"></div>
                                                        <?php endif; ?>
                                                        <?php if( $track ): ?>
                                                        <div class="tracking-rating"><div class="checkbox"><img class="checkmark" src="<?php echo get_template_directory_uri();?>/assets/images/check.svg"></div></div>
                                                        <?php else: ?>
                                                        <div class="tracking-rating"></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <?php $line_counter++;
                                            endwhile;
                                        endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php $cat_counter++; ?>
                        <?php endwhile; ?>
                    </div>

                <?php endif;
            endwhile;
        endif;
    ?>
</div>

<?php get_sidebar();?>

</div>
</section>
<?php require_once('footer.php'); ?>


<style>
.checkbox {
    background-color: #7bbf43;
    border-radius: 50%;
    padding: 5px;
    text-align: center;
}
.checkmark {
    filter:brightness(100);
}
@media (max-width:650px) {
    .checkbox {
        background-color: transparent;
        border-radius: 0;
        padding: 5px;
    }
    .checkmark {
        filter:brightness(1);
        width:20px;
    }
}
</style>


