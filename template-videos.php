<?php
/* Template Name: Video */
require_once('header.php');
?>

<style>
    a.video-link:before {
        content: url('<?php echo get_template_directory_uri();?>/assets/images/play-1.svg');
        z-index: 5;
        position: absolute;
        opacity:1;
        left: 50%;
        top: 50%;
        height: 100px;
        width: 100px;
        transition: all .3s;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    a.video-link:hover:before {
        opacity:.25;
    }
    @media (max-width:750px) {
        a.video-link:before {
            height: 70px;
            width: 70px;
        }
    }
</style>

<!-- Banner -->
<div class="banner" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/iStock-996290796-1credit.png); background-color: #039fda; background-position:50% 75%;">
    <div class="container">
        <div class="row">
            <div class="banner-text col-md-9 col-sm-12 col-xs-12" style="padding-top:5%;padding-bottom:5%;">
                <h1 class="banner-title"><?php the_field('title'); ?></h1>
                <p class="banner-caption"><?php the_field('sub_text'); ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <div style="margin:45px 0; align-items:center; width:100%;" class="row flex-row">


        <?php if (get_field('video')): 
            if (get_field('video_type') == 'vimeo'):
                $url = get_field('video');
                $url = str_replace("http:", "", $url);
                $url = str_replace("https:", "", $url);
                $url = str_replace("www.", "", $url);
                $url = str_replace("vimeo.com", "", $url);
                $url = str_replace("/", "", $url);
                $videoURL = '//player.vimeo.com/video/' . $url . '?title=0&amp;byline=0&amp;portrait=0&amp;transparent=0';
            else:
                $url = get_field('video');
                $url = str_replace("http:", "", $url);
                $url = str_replace("https:", "", $url);
                $url = str_replace("www.", "", $url);
                $url = str_replace("watch?v=", "", $url);
                $url = str_replace("youtube.com", "", $url);
                $url = str_replace("youtu.be", "", $url);
                $url = str_replace("embed", "", $url);
                $url = str_replace("/", "", $url);
                $videoURL = '//www.youtube.com/embed/' . $url;
			endif;
            ?>         

            <!-- <div class="col-sm-12">
                <div style="max-width:850px; margin:0 auto; margin-top:45px; margin-bottom:90px">
            	    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="<?php echo $videoURL; ?>" frameborder="0" allow="encrypted-media" mozallowfullscreen="" webkitallowfullscreen="" allowfullscreen=""></iframe>
            	    </div>
            	</div>
            </div> -->

            <div class="col-sm-12 col-md-8">            
        	    <a href="#" class="video-link" data-toggle="modal" data-target="#video-modal">
                    <?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <?php the_field('bottom_content'); ?>
            </div>

            <!-- Modal -->
            <div class="modal" id="video-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="vertical-alignment-helper">
                    <div class="modal-dialog vertical-align-center">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h3 class="modal-title" id="myModalLabel"><?php  the_title(); ?></h3>
                            </div>
                            <div class="modal-body">                                               
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="<?php echo $videoURL; ?>" frameborder="0" allow="encrypted-media" mozallowfullscreen="" webkitallowfullscreen="" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_field('bottom_content')): ?>
            <!-- <div class="col-sm-12">
                <?php the_field('bottom_content'); ?>
            </div> -->
        <?php endif; ?>

    </div>
</div>

<?php require_once('footer.php'); ?>