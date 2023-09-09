<!-- DEV SITE -->
<style>
    .text-blue {color:#039fda!important;}
    .text-green {color:#54b900!important;}
    .text-purple {color:#4806a6!important;}
    .text-orange {color:#e09b3d!important;}
    .bg-green {background-color:#54b900!important;}
    .bg-purple {background-color:#4806a6!important;}
    .bg-orange {background-color:#e09b3d!important;}
    .border-color-blue {border: 2px solid #039fda!important;}
    .border-color-green {border: 2px solid #54b900!important;}
    .border-color-purple {border: 2px solid #4806a6!important;}
    .border-color-orange {border: 2px solid #e09b3d!important;}
    .blog-posts {
        background: #f2f2f2;
    }
    a h6 {
        color:#039fda!important;
    }
    ol {
        list-style:decimal;
        padding-left:30px;
    }
    ol li {
        margin-bottom:8px;
    }
    .day-links {
        width:100%;
    }
    .day-links a {
        font-weight:bold;
        color:#4806a6;
        text-decoration:underline;
    }
    .event-creds p {
        font-size:14px; 
        margin-bottom:16px; 
        line-height:1.5; 
        padding:0 15px;
    }
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

    .btn-white-blue {
        color:#039fda;
        border: 2px solid #039fda;
    }
    .btn-white-blue:hover {
        background:#039fda;
    }
    .bg-lightpurple {
        background:rgba(58, 14, 121, 0.1);
    }
    .event__wp-content {
        padding:15px; width:100%;
    }
    .event__wp-content h3 {
        width:100%;
        margin-bottom:15px;
        line-height:1.5;
        margin-top:0;
        font-weight: bold;
        font-size: 24px;
    }
    .event__wp-content h3:not(:first-child) {
        margin-top:30px;
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
<!-- FOLLOW UPS -->
<?php 
    $fu_text = get_field('follow_up_text');
    $fu_times = get_field('follow_up_times');
    $fu_link = get_field('follow_up_link');
    $event_creds =  get_field('accreditation');
    $creds_col_one =  get_field('accred_col_1');
    $creds_col_two =  get_field('accred_col_2');
?>
<!-- CONTENT -->
<div class="events__background-color">                
    <div style="display:block;" class="wrap wrap__events">
		<main style="margin:0 auto; max-width:unset;" class="main cf" role="main">
            <h2 style="font-size: 48px; text-align:center; color: #000;font-weight: 900;letter-spacing: 1px;">
	            Project TEACH Fall 2021 Statewide Live Virtual Intensive Training
            </h2>                
            <div class="bg-blue-200 border-l-8 border-blue border-solid" style="margin-top:30px; padding:20px;">                                                                                                                                                                                                                                                                             
                <h3 style="width:100%; padding:15px; padding-top:0; padding-bottom:0; margin-bottom:0; line-height:1.5; margin-top:0; font-weight: bold; font-size: 24px;" class="event__title">
                    Fall 2021 Statewide Live Virtual Intensive Training Recorded Lectures             
                </h3>
                <div style="padding:15px; padding-bottom:0;">
                    <p>The Project TEACH Statewide Live Virtual Intensive Training, Children's Mental Health for New York State Pediatric Primary Care Providers, was held on October 31, and November 1, 2021. Lecture slides are are available below under <strong>Intensive Training Resources</strong> and the recorded lectures are available by clicking the button below.</p>
                </div>
                <div style="width:100%; text-align:right;">
                    <a class="border-2 border-solid border-blue rounded-full bg-blue text-xl m-4 inline-block text-white py-4 px-8 transition-all duration-300 hover:bg-transparent hover:text-blue" href="https://projectteachny.org/intensive-training-fall-2021-videos/" target="_self">Fall 2021 Intensive Training Recorded Lectures</a>
                </div>
                <!-- <p style="padding:15px;"><strong>All Follow-Up sessions will be one hour from Noon to 1PM</strong></p>                                     -->
                <ul class="follow-up-list" style="font-size:16px; width:100%;">
                    <!-- <li style="margin-bottom:8px;">
                        <strong>December 21 - </strong>
                        Self-Injurious Behavior | <p>Eric MacMaster, MD, Maureen Montgomery, MD, Maureen Ryan, PsyD</p>
                        <div class="pl-2">
                            <p><strong>Learning Objectives: </strong></p>
                            <p>Recognize and assess self-injurious behaviors in children and adolescents, effective treatment, and how to discuss the indications and treatment of self-injurious behaviors with parents/family members.</p>
                        </div>
                        <hr class="border-orange my-4 opacity-25">
                    </li> -->
                </ul>
            </div>
        </main>
    </div>
    <!-- Syllabus -->
	<?php 
		$args = array(
			'post_type'     => 'syllabus',
            'p'             => 4265,
			'post_per_page' => -1,
			'post_status'   => 'publish',
			'orderby'       => 'title',
			'order'         => 'ASC'
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) : ?>
			<div class="syllabus-archive-wrapper">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php
                        $content_agenda = get_field('content_agenda');
                        $title_agenda = get_field('title_agenda');
                        $content_faculty = get_field('content_faculty');
                        $title_faculty = get_field('title_faculty');
                        $content_resources = get_field('content_resources');

                        $additional_repeater = get_field('additional_resources');

                        $title_resources = get_field('title_resources');
                        $content_downloadables = get_field('content_downloadables');
                        $title_downloadables = get_field('title_downloadables');
                        $additional_files_agenda = get_field('additional_files_agenda');
                        $additional_files_faculty = get_field('additional_files_faculty');
                        $additional_files_downloadables = get_field('additional_files_downloadables');
                        $maindesc = get_field('main_description');
                        $icon = get_template_directory_uri() . '/assets/images/icons/pdf.svg';

                        $faculty = get_field('faculty_picker');
                    ?>

                    <section class="single-post">
		                    <div class="wrap">
			                    <main class="main" style="max-width:100%">

            			            <section class="syllabus-section">
            				            <?php if (false) : ?>
                                            <div class="syllabus-intro">
            					                <h3 class="post__title post__title--featured"><?php echo get_the_title(); ?></h3>
                                                <?php if ($maindesc): echo $maindesc; endif; ?>
                                            </div>            				
                                        <?php endif; ?>
                                        <?php if (false) : ?>
            				                <?php if ($content_agenda || $additional_files_agenda):
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
                                        endif;    
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
		        <?php endwhile; ?>
		    </div>
	    <?php else: 
	        // no posts found
        endif;
	    wp_reset_postdata();
	?>
    <!-- Legal / Credit Claims -->
    <div style="padding:0 45px;" class="mb-4 wrap wrap__events">
    <p><strong>The Fall 2021 Statewide Live Virtual Intensive Training is at no cost to New York State Pediatric Primary Care Providers.</strong></p>
    </div>
    <div class="wrap wrap__events event-creds flex flex-col sm:flex-row">
        <div class="w-full sm:w-1/2">
        <p class="p1"><strong>Intensive Training Accreditation: </strong></p>
        <p class="p2"><strong>Accreditation:</strong> This activity has been planned and implemented in accordance with the Essential Areas and Policies of the Accreditation Council for Continuing Medical Education (ACCME) through the joint providership of McLean Hospital and Massachusetts General Hospital Psychiatry Academy. McLean Hospital is accredited by the ACCME to provide continuing medical education for physicians.</p>
        <p class="p2">McLean Hospital designates this educational activity for a maximum of <strong>9 AMA PRA Category 1 Credit(s)</strong>™. Physicians should only claim credit commensurate with the extent of their participation in the activity.</p>
        <p class="p2">This program meets the requirements of the Massachusetts Board of Registration in Nursing (244 CMR 5.00) for 9 contact hours of nursing continuing education credit.</p>
        <p class="p2">Advance practice nurses, please note: Educational activities which meet the requirements of the ACCME (such as this activity) count towards 50% of the nursing requirement for ANCC accreditation.</p>
        </div>
        <div class="w-full sm:w-1/2">
        <p class="p2"><strong>Follow-Up Session Accreditation: </strong></p>
        <p class="p3"><strong>Accreditation:</strong> This activity has been planned and implemented in accordance with the Essential Areas and Policies of the Accreditation Council for Continuing Medical Education (ACCME) through the joint providership of McLean Hospital and Massachusetts General Hospital Psychiatry Academy. McLean Hospital is accredited by the ACCME to provide continuing medical education for physicians.</p>
        <p class="p3">McLean Hospital designates this educational activity for a maximum of <strong>6 AMA PRA Category 1 Credit(s)</strong>™. Physicians should only claim credit commensurate with the extent of their participation in the activity.</p>
        <p class="p3">This program meets the requirements of the Massachusetts Board of Registration in Nursing (244 CMR 5.00) for 6 contact hours of nursing continuing education credit.</p>
        <p class="p3">Advance practice nurses, please note: Educational activities which meet the requirements of the ACCME (such as this activity) count towards 50% of the nursing requirement for ANCC accreditation.</p>
        </div>
    </div>                                    
    <div style="margin-bottom:0; padding:0 45px 1rem 0;" class="event-creds text-center text-sm mt-4 px-8">
        <strong>Credit Claim: </strong>All registrants will receive online instructions on how to access the Project TEACH Learning Management System to receive CME credits and complete the evaluation form.
        <strong>Instructions on how to receive your credits for the October 31st and November 1st Intensive Trainings, can be found <a class="underline" href="https://projectteachny.org/wp-content/uploads/2021/11/Credit-Claim-Intensive-Training-20211.pdf" target="_blank" rel="noopener">here</a>.</strong>
    </div>
</div>                        
                                                    

                           
			        
		        
	        
        