<?php require_once(dirname(__FILE__).'/header.php'); ?>
<!-- DEV SITE -->
<style>
    .text-blue {color:#039fda!important;}
    .text-green {color:#54b900!important;}
    .text-purple {color:#4806a6!important;}
    .text-orange {color:#e09b3d!important;}
    .bg-blue {background-color:#039fda!important;}
    .bg-green {background-color:#54b900!important;}
    .bg-purple {background-color:#4806a6!important;}
    .bg-orange {background-color:#e09b3d!important;}
    .border-color-blue {border: 2px solid #039fda!important;}
    .border-color-green {border: 2px solid #54b900!important;}
    .border-color-purple {border: 2px solid #4806a6!important;}
    .border-color-orange {border: 2px solid #e09b3d!important;}
    main {
        display:flex;
        flex-direction:column;
    }
    .follow-up-list p {
        display:inline;
        font-size:16px;
        font-family:sans-serif;
        font-weight:500;
    }
    .follow-up-list strong {
        min-width:116px;
    }
    .event__presenters p {margin-bottom:20px; line-height:1.25;}
    .events__background-color {
        background-color: #f2f2f2;
    }
    .wrap__events {
        background:white;
    }
    .wrap__events .sidebar {
        background-color:#fff;
        box-shadow:0px 10px 20px rgba(0,0,0,0.25);
    }
    .event__card-wrap {
        margin-bottom:30px;
        position:relative;
    }
    .event__card-wrap:last-child {
        /* margin-bottom:0; */
    }
    .event__card-wrap.passed {
        /* order:2; */
    }
    .event__card-wrap.featured {
        order:-1!important;
    }
    .event__card-wrap.featured .event__card {
        border: 3px solid #FFC107;
        background: linear-gradient(270deg, #ffeb3b61 0%, white 50%);
    }
    .event__card-wrap.passed:last-child {
        /* margin-bottom:0; */
    }
    .event__card {
        background-color:#fff;
        padding:3%;
        display:flex;
        font-family: sans-serif;
        justify-content:center;
        box-shadow:0px 10px 20px #ddd;
    }
    .event__card:last-child {
        margin-bottom:0;
    }
    .event__content {
        flex:1;
    }

    .event__image-wrap {
        width:220px;
        max-height:220px;
        margin-left:auto;
        position:relative;
        margin-left:5%;
    }
    .event__image-overlay {
        height:100%;
        width:100%;
        background-color:rgba(0,0,0,0.25);
        transition:all .5s ease-in-out;
        position:absolute;
    }
    /* .event__image-overlay:hover {
        background-color:rgba(0,0,0,0);
    } */
    .event__image {
        background-position:center;
        background-size:cover;
        height:100%;
    }
    .event__header {
        display:flex;
        align-items:center;
    }
    .event__category {
        color: #039fda;
        text-transform: uppercase;
        font-family: sans-serif;
        letter-spacing: 1px;
    }
    .event__regions{
        display: flex;
        align-items: center;
        margin-left:auto;
    }
    .event__regions span {
        color:#333;
        margin-right:8px;
        font-family:sans-serif;
    }
    .region__link {
        margin-right: 10px;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
        border-radius: 50%;
        color: white;
        transition: all .5s ease-in-out;
        border: 2px solid transparent;
    }
    .region__link-1 {
        background-color:#039fda;
    }
    .region__link-1:hover {
        border:2px solid #039fda;
        color:#039fda;
        background-color:transparent
    }
    .region__link-2 {
        background-color:#4806a6;
    }
    .region__link-2:hover {
        border:2px solid #4806a6;
        color:#4806a6;
        background-color:transparent
    }
    .region__link-3 {
        background-color:#54b900;
    }
    .region__link-3:hover {
        border:2px solid #54b900;
        color:#54b900;
        background-color:transparent
    }
    .region__link:last-child {
        margin-right:0;
    }
    .event__title {
        color:#212121;
        margin:.75rem 0;
        font-family:sans-serif;
        transition:all .5s ease-in-out;
    }
    .event__title:hover {
        /* color:#4806a6; */
    }
    .event__date {
        margin:.75rem 0;
        text-transform: uppercase;
        color:#999;
        font-family:sans-serif;
    }
    .event__location,
    .event__credits {
        margin:.25rem 0;
        padding-left:15px;
        display:flex;
        align-items:center;
        font-family:sans-serif;
    }
    .event__location img,
    .event__credits img {
        margin-right:15px;
        width:12px;
    }
    .event__hairline {
        width:50px;
        margin-left:0;
        border-top: 2px solid #420697;
    }
    .event__presenter {
        font-size:16px;
    }
    .event__readmore {
        font-size:14px; 
        text-align:center; 
        color:#039fda; 
        line-height:1;
        border: none;
        background: transparent;
        padding: 0;
        font-weight: 100;
        font-family: sans-serif;
        transform: translateY(5px);
    }
    .event__card-more {
        background-color:#fff;
        transform:translateY(-10px);
        transition:all .5s ease-in-out;
        overflow: hidden;
        max-height: 0;
        opacity: 0;
        padding: 0 3% 0 3%;   
        /* add browser prefixes */
        transition: all 0.5s ease;
    }
    .event__card-more.open {
        max-height: 800px;
        transform:translateY(0);
        opacity: 1;
        padding: 0 3% 3% 3%;
    }
    .presenters {
        padding-left:20px;
        margin-bottom:20px;
    }
    .presenters p {
        font-size:14px;
        line-height:1.5;
    }
    @media (max-width:600px) {
        .event__card {
            flex-direction:column;
        }
        .event__image {
            background-position:bottom;
        }
        .event__image-wrap {
            margin-left:0;
        }
        .event__image-wrap {
            order: -1;
            height: 300px;
            width:100%;
            margin-bottom:3%;
        }
    }
</style>

<style>
    .btn-white-blue {
        color:#039fda;
        border: 2px solid #039fda;
    }
    .btn-white-blue:hover {
        background:#039fda;
    }
    .event__wp-content {
        padding:15px; width:100%;
    }
    .event__wp-content h3 {
        width:100%;
        margin-bottom:5px;
        line-height:1.5;
        margin-top:0;
        font-weight: bold;
        font-size: 24px;
    }
    .event__wp-content p {
        width:100%;
        padding-bottom: 15px;
    }
    .event__wp-content ul {
        width:100%;
        margin-left: 15px;
    }
    .event__wp-content li {
        font-size: 18px;
        font-family: "Helvetica", sans-serif;
        line-height: 30px;
        font-weight: 300;
        padding: 0;
    }
</style>



        <section class="blog-posts">
            <div class="events__background-color">                
                <div style="display:block;" class="wrap wrap__events">
		            <main style="margin:0 auto; max-width:unset;" class="main cf" role="main">
                        <h2 style="font-size: 48px; margin-top:30px; text-align:center; color: #000;font-weight: 900;letter-spacing: 1px;">
	                        <?php the_field('section_title');?>
                        </h2>

                    <div style="margin: 30px 0; box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; border-left: 5px solid #039fda; background: rgba(3, 159, 218, 0.1);">
                        <h3 style="width:100%; padding:15px 0 0 15px; margin-bottom:0; line-height:1.5; margin-top:0; font-weight: bold; font-size: 24px;" class="event__title">
                            <?php the_field('blue_block_title');?>
                        </h3>
                        <div style="font-family:'museo-sans', sans-serif; font-size:18px; padding:15px; line-height:1.5;">
                            <?php the_field('blue_block_text');?>
                        </div>                  
                        <div style="margin:15px 0 30px" class="btn-wrapper">
                        <?php $link = get_field('blue_block_link');
                            if ($link):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a style="float: right; border-radius:9999px; white-space:normal;" class="btn btn-blue ml-4" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>
                            <!-- <a style="float: right;" class="btn btn-white btn-white-blue ml-4" href="https://project-teach.launchpaddev.com/syllabi/virtual-statewide-intensive-training-childrens-mental-health-for-primary-care-providers/">Intensive Training 2020 Syllabus</a> -->
                        </div>
                    </div>

                    <?php $featured_posts = null; ?>
                    <?php $featured_image = null; ?>
                    <!-- <p style="font-size:14px; margin-top:16px;  margin-bottom:16px; line-height:1.5; padding:0 15px;"><strong>The 2020 Statewide Live Virtual Intensive Training Follow-Up Sessions is at no cost to New York State Pediatric Primary Care Providers.</strong></p>                    
                    <p style="font-size:14px; margin-bottom:16px; line-height:1.5; padding:0 15px;"><strong>Accreditation:</strong> This activity has been planned and implemented in accordance with the Essential Areas and Policies of the Accreditation Council for Continuing Medical Education (ACCME) through the joint providership of McLean Hospital and Massachusetts General Hospital Psychiatry Academy. McLean Hospital is accredited by the ACCME to provide continuing medical education for physicians. </p>
                    <p style="font-size:14px; margin-bottom:16px; line-height:1.5; padding:0 15px;">McLean Hospital designates this educational activity for a maximum of 1 <em>AMA PRA Category 1 Credit(s)™</em>.  Physicians should only claim credit commensurate with the extent of their participation in the activity.</p>                                                                
                    <p style="font-size:14px; margin-bottom:16px; line-height:1.5; padding:0 15px;"><strong>Registration:</strong> All registrants will receive online instructions on how to access the Project TEACH Learning Management System to receive CME credits and complete the evaluation form.</p> -->



                    <!-- SYLLABUS -->



                    <?php
                        $PAGE_ID = 3350;
                        $content_agenda = get_field('content_agenda', $PAGE_ID);
                        $title_agenda = get_field('title_agenda', $PAGE_ID);
                        $content_faculty = get_field('content_faculty', $PAGE_ID);
                        $title_faculty = get_field('title_faculty', $PAGE_ID);
                        $content_resources = get_field('content_resources', $PAGE_ID);

                        $additional_repeater = get_field('additional_resources', $PAGE_ID);

                        $title_resources = get_field('title_resources', $PAGE_ID);
                        $content_downloadables = get_field('content_downloadables', $PAGE_ID);
                        $title_downloadables = get_field('title_downloadables', $PAGE_ID);
                        $additional_files_agenda = get_field('additional_files_agenda', $PAGE_ID);
                        $additional_files_faculty = get_field('additional_files_faculty', $PAGE_ID);
                        $additional_files_downloadables = get_field('additional_files_downloadables', $PAGE_ID);
                        $maindesc = get_field('main_description', $PAGE_ID);
                        $icon = get_template_directory_uri() . '/assets/images/icons/pdf.svg';

                        $faculty = get_field('faculty_picker', $PAGE_ID);

                    ?>

                    <section class="single-post">
		                    <div class="wrap">
			                    <main class="main" role="main">
            			                    <section class="syllabus-section">
                                                <?php if (false) : ?>
            				                        <div class="syllabus-intro">
            					                        <h3 class="post__title post__title--featured"><?php echo get_the_title($PAGE_ID); ?></h3>
            					                        <?php if ($maindesc): echo $maindesc; endif; ?>
            				                        </div>  
                                                <?php endif; ?>          				
            				                    <?php
                                                    //hide
                                                    if (false) {
                                                        if ($content_agenda || $additional_files_agenda):
                                                            echo '<div class="syllabus-wrapper" id="agenda">';
                                                        echo '<h4>' . $title_agenda . '</h4>';
                                                        if ($content_agenda):
                                                                echo $content_agenda;
                                                        endif;
                                                        endif;
                                                        
                                                        if ($content_faculty || $additional_files_faculty['additional_files_agenda']):
                                                            echo '<div class="syllabus-wrapper" id="faculty">';
                                                        echo '<h4>' . $title_faculty . '</h4>';
                                                        if ($content_faculty):
                                                                echo $content_faculty;
                                                        endif;
                                                        if ($additional_files_faculty['additional_files_agenda']):
                                                                echo '<div class="syllabus-resource-wrapper">';
                                                        foreach ($additional_files_faculty['additional_files_agenda'] as $file):
                                                                    echo '<a href="' . $file['file'] . '" target="_blank">';
                                                        echo '<div><h6>' . $file['file_title'] . '</h6>';
                                                        echo '<span>' . $file['file_description'] . '</span></div>';
                                                        echo '</a>';
                                                        endforeach;
                                                        echo '</div>';
                                                        endif;
                                                        echo '</div>';
                                                        endif;
                                                    }
                                                        if ($content_resources || $additional_repeater):
                                                        echo '<div class="syllabus-wrapper" id="additional-information">';
                                                        echo '<h4>' . $title_resources . '</h4>';

                                                        if ($additional_repeater):
                                                            echo '<ul class="slides">';
                                                            foreach ($additional_repeater as $repeater) :
                                                                // Resource Titles
                                                                $add_title = $repeater['additional_title'];

                                                                if ($add_title):
                                                                    echo '<h5>' . $add_title . '</h5>';
                                                                endif;
                                                                if ($repeater['additional_files_2']) :
                                                                    echo '<div class="syllabus-resource-wrapper">';
                                                                        foreach ($repeater['additional_files_2'] as $file):
                                                                            echo '<a href="' . $file['file'] . '" target="_blank">';
                                                                            echo '<div><h6>' . $file['file_title'] . '</h6>';
                                                                            echo '<span>' . $file['file_description'] . '</span></div>';
                                                                            echo '</a>';
                                                                            if ($file['supplemental_files']) :
                                                                                echo '<div style="margin-left: 1rem;" class="syllabus-resource-wrapper">';
                                                                                    foreach ($file['supplemental_files'] as $file):
                                                                                        echo '<a href="' . $file['file'] . '" target="_blank">';
                                                                                        echo '<div><h6>' . $file['file_title'] . '</h6>';
                                                                                        echo '<span>' . $file['file_description'] . '</span></div>';
                                                                                        echo '</a>';

                                                                                    endforeach;
                                                                                echo '</div>';
                                                                            endif;
                                                                        endforeach;
                                                                    echo '</div>';
                                                                endif;
                                                            endforeach;
                                                            echo '</ul>';
                                                        endif;
                                                        echo '</div>';
                                                    endif;

                                                    if ($content_downloadables || $additional_files_downloadables['additional_files_agenda']):
                                                        echo '<div class="syllabus-wrapper" id="downloadables">';
                                                        echo '<h4>' . $title_downloadables . '</h4>';
                                                        if ($content_downloadables):
                                                            echo $content_downloadables;
                                                        endif;
                                                        if ($additional_files_downloadables['additional_files_agenda']):
                                                            echo '<div class="syllabus-resource-wrapper">';
                                                            foreach ($additional_files_downloadables['additional_files_agenda'] as $file):
                                                                echo '<a href="' . $file['file'] . '" target="_blank">';
                                                                echo '<div><h6>' . $file['file_title'] . '</h6>';
                                                                echo '<span>' . $file['file_description'] . '</span></div>';
                                                                echo '</a>';
                                                            endforeach;
                                                            echo '</div>';
                                                        endif;
                                                        echo '</div>';
                                                    endif;
                                                ?>
            			                    </section>						
			                    </main>
		                    </div>
                    </section>
		        </main>
		    </div>
        </div>
    </section>                   

<?php require_once(dirname(__FILE__).'/footer.php'); ?>