<?php
// Add ETHOS supports
require_once(get_stylesheet_directory().'/Zebra_cURL/Zebra_cURL.php');

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'ETHOS',
        'menu_title'    => 'ETHOS',
        'menu_slug'     => 'ethos-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

function lp_jsonp_decode($jsonp, $assoc = false) { // PHP 5.3 adds depth as third parameter to json_decode
    if($jsonp[0] !== '[' && $jsonp[0] !== '{') { // we have JSONP
       $jsonp = substr($jsonp, strpos($jsonp, '('));
    }
    return json_decode(trim($jsonp,'();'), $assoc);
}
Class Course{
    // Properties
    private $domain = 'https://lms.projectteachny.org'; //Ethos Domain
    private $userpass = 'restws_lpadmin:5BPFVZfAVAf5RxVB'; //Credentials
    private $rcx;
    private $nodeUrls = []; //Main Course Nodes to be sent
    private $imgUrls = []; //Image Nodes to be sent
    private $formatUrls = []; //Image Nodes to be sent
    private $catUrls = []; //Image Nodes to be sent
    private $count = 0; //count
    private $nodeIds = []; //Main Course Nodes that were processed


    //Contructor
    function __construct()
    {
        $this->rcx = new Zebra_cURL(); // Sets up ZebraCurl
        $this->lp_set_multicurls(); //Sets up Zebra Curl Parameters
    }
    private function lp_set_multicurls()
    {
        // if making requests over HTTPS we need to load a CA bundle
        // so we don't get CURLE_SSL_CACERT response from cURL
        // you can get this bundle from https://curl.haxx.se/docs/caextract.html
        $this->rcx->ssl(false);

        // cache results in the "cache" folder and for 3600 seconds (one hour)
        $this->rcx->cache('app/zebra-cache', 3600);

        // setting multiple options at once
        $this->rcx->option(array(
            CURLOPT_HTTPAUTH        => CURLAUTH_BASIC,
            CURLOPT_USERPWD         => $this->userpass,
            CURLOPT_RETURNTRANSFER  => TRUE,
            CURLOPT_HTTPHEADER      => array("Content-Type: application/json"),
            CURLOPT_CONNECTTIMEOUT => 0,
            CURLOPT_TIMEOUT => 3600,
        ));

        $this->rcx->threads = 2000;

        $payload = $this->lp_check_for_cpdlearn();

        if($payload['multi'][0]):
            $this->lp_set_multi_payload($payload['list']);
        endif;
        
    }

    public function lp_check_for_cpdlearn(){
        //Checks the first time
        $this->rcx->get($this->domain.'/course.json', function($result) {
            // everything went well at cURL level
            if ($result->response[1] == CURLE_OK) {
                // if server responded with code 200 (meaning that everything went well)
                // see https://httpstatus.es/ for a list of possible response codes
                if ($result->info['http_code'] == 200) {
         
                    // see all the returned data
                    $body = lp_jsonp_decode($result->body, TRUE);

                    $first = $body['first'];
                    $firstUrl = parse_url($first);
                    parse_str($firstUrl['query'], $firstParams);

                    $last = $body['last'];
                    $lastUrl = parse_url($last);
                    parse_str($lastUrl['query'], $lastParams);

                    $pageCount = 0;
                    $count = 0;

                    if($firstParams['page'] == $lastParams['page']):
                        $this->nodeUrls['multi'][] = false;
                        foreach ($body['list'] as $key => $value) {
                            $nid = $value['nid']['id'];
                            $this->nodeUrls['list'][$count]['url'] = $this->domain.'/node.json?nid='.$nid;

                            $credits = array('num' => $body['list'][$count]['credits'], 'course_credit_types' => $body['list'][$count]['course_credit_types']);
                            $this->nodeUrls['list'][$count]['credits'] = $credits;

                            $count++;
                        }
                    else:
                        $this->nodeUrls['multi'][] = true;
                        while ($pageCount <= $lastParams['page'] ) {
                            $this->nodeUrls['list'][] = $this->domain.'/course.json?page='.$pageCount;
                            $pageCount++;
                        }
                    endif;
         
                // show the server's response code
                } else {
                    trigger_error('Server responded with code ' . $result->info['http_code'], E_USER_ERROR);
                }
         
            // something went wrong
            // ($result still contains all data that could be gathered)
            } else trigger_error('cURL responded with: ' . $result->response[0], E_USER_ERROR);
         
        });

        return $this->nodeUrls;
        
    }
    public function lp_set_multi_payload($payload){

        $this->nodeUrls['multi'][0] = false;
        $this->nodeUrls['list'] = [];

        //Checks the first time
        $this->rcx->get($payload, function($result) {

            // everything went well at cURL level
            if ($result->response[1] == CURLE_OK) {
            
                // if server responded with code 200 (meaning that everything went well)
                // see https://httpstatus.es/ for a list of possible response codes
                if ($result->info['http_code'] == 200) {
                    $body = lp_jsonp_decode($result->body, TRUE);
                    $count = 0;
                    foreach ($body['list'] as $key => $value) {
                        $nid = $value['nid']['id'];
                        $this->nodeUrls['list'][$this->count]['url'] = $this->domain.'/node.json?nid='.$nid;

                        $credits = array('num' => $body['list'][$count]['credits'], 'course_credit_types' => $body['list'][$count]['course_credit_types']);
                        $this->nodeUrls['list'][$this->count]['credits'] = $credits;

                        $this->count++;
                        $count++;
                    }
                    
                
                // show the server's response code
                } else trigger_error('Server responded with code ' . $result->info['http_code'], E_USER_ERROR);
         
            // something went wrong
            // ($result still contains all data that could be gathered)
            } else trigger_error('cURL responded with: ' . $result->response[0], E_USER_ERROR);
         
        }); 
        $this->count = 0;    
    }
    //Gets WP post ID
    public function lp_get_wp_ethos_post($nid){
        $courseWpId = '0';

        $args = array(
            'numberposts'   => -1,
            'post_type'     => 'courses',
            'meta_key'      => 'ethos_id',
            'meta_value'    => $nid
        );
        $the_query = new WP_Query( $args );

        if( $the_query->have_posts() ):
            while( $the_query->have_posts() ) : $the_query->the_post();
                $courseWpId = get_the_ID();
            endwhile;
        endif;
        wp_reset_query();
        return $courseWpId;

    }
    //All posts
    public function lp_create_ethos_posts(){
        
        //Checks the first time
        $this->rcx->get($this->nodeUrls['list'], function($result) {

            // everything went well at cURL level
            if ($result->response[1] == CURLE_OK) {
                
                // if server responded with code 200 (meaning that everything went well)
                // see https://httpstatus.es/ for a list of possible response codes
                if ($result->info['http_code'] == 200) {
                    $body = lp_jsonp_decode($result->body, TRUE);

                    print_r('<pre>');
                    print_r($body);

                    $title = $body['list'][0]['title'];
                    $nid = $body['list'][0]['nid'];
                    $url = $body['list'][0]['url'];
                    if(isset($body['list'][0]['price'])) : $price = $body['list'][0]['price']; else: $price = '';endif;
                    if(isset($body['list'][0]['status'])) : $status = $body['list'][0]['status']; else: $status = 0;endif;
                    if(isset($body['list'][0]['field_accreditation']['value'])) : $field_accreditation = $body['list'][0]['field_accreditation']['value']; else: $field_accreditation = '';endif;
                    if(isset($body['list'][0]['field_course_summary']['value'])) : $field_course_summary = $body['list'][0]['field_course_summary']['value']; else: $field_course_summary = '';endif;
                    if(isset($body['list'][0]['field_faculty_credentials']['value'])) : $field_faculty_credentials = $body['list'][0]['field_faculty_credentials']['value']; else: $field_faculty_credentials = '';endif;
                    if(isset($body['list'][0]['field_learning_objectives']['value'])) : $field_learning_objectives = $body['list'][0]['field_learning_objectives']['value']; else: $field_learning_objectives = '';endif;
                    if(isset($body['list'][0]['field_target_audience']['value'])) : $field_target_audience = $body['list'][0]['field_target_audience']['value']; else: $field_target_audience = '';endif;
                    if(isset($body['list'][0]['field_program']['value'])) : $field_program = $body['list'][0]['field_program']['value']; else: $field_program = '';endif;
                    if(isset($body['list'][0]['field_registration_instructions']['value'])) : $field_registration_instructions = $body['list'][0]['field_registration_instructions']['value']; else: $field_registration_instructions = '';endif;
                    if(isset($body['list'][0]['field_custom_provided']['value'])) : $field_custom_provided = $body['list'][0]['field_custom_provided']['value']; else: $field_custom_provided = '';endif;
                    
                    if(isset($body['list'][0]['field_course_date']['value'])) : $field_course_date_start = $body['list'][0]['field_course_date']['value']; else: $field_course_date_start = '';endif;
                    if(isset($body['list'][0]['field_course_date']['value2'])) : $field_course_date_end = $body['list'][0]['field_course_date']['value2']; else: $field_course_date_end = '';endif;
                    if(isset($body['list'][0]['field_course_date']['duration'])) : $field_course_date_duration = $body['list'][0]['field_course_date']['duration']; else: $field_course_date_duration = '';endif;
                    if(isset($body['list'][0]['field_course_event_date']['value'])) : $field_course_event_date_start = $body['list'][0]['field_course_event_date']['value']; else: $field_course_event_date_start = '';endif;
                    if(isset($body['list'][0]['field_course_event_date']['value2'])) : $field_course_event_date_end = $body['list'][0]['field_course_event_date']['value2']; else: $field_course_event_date_end = '';endif;
                    if(isset($body['list'][0]['field_course_event_date']['duration'])) : $field_course_event_date_duration = $body['list'][0]['field_course_event_date']['duration']; else: $field_course_event_date_duration = '';endif;
                    $time = time();
                    if ($time > $field_course_date_end || $field_course_date_end === '') : $status = 0; endif;
                    echo $time . 'boobs' . $field_course_date_end;
                    if ($time > $field_course_date_end) echo 'old';
                    
                    if(isset($body['list'][0]['field_course_live'])) : $field_course_live = $body['list'][0]['field_course_live']; else: $field_course_live = 0; endif;

                    if(!empty($body['list'][0]['field_course_location'])) : 
                        $field_course_location = $body['list'][0]['field_course_location'];

                    else: 
                        $field_course_location = '';
                    endif;
                    
                    $findWPCourseID = $this->lp_get_wp_ethos_post($nid);
                    $this->nodeIds[] = $nid;

                    if(isset($body['list'][0]['field_course_image']['file']['id'])) : $this->lp_set_imgurl($body['list'][0]['field_course_image']['file']['id'], $findWPCourseID); endif;


                    if(!empty($body['list'][0]['field_course_format'])) :
                        $this->lp_set_formaturl($body['list'][0]['field_course_format'], $findWPCourseID); 
                    endif;

                    if(!empty($body['list'][0]['field_course_category'])) :
                        $this->lp_set_caturl($body['list'][0]['field_course_category'], $findWPCourseID); 
                    endif;

                    // Gather post data.
                    $coursePost = array(
                        'post_title'    => $title,
                        'ID'            => $findWPCourseID,
                        'post_status'   => 'publish',
                        'post_author'   => 1,
                        'post_type'     => 'courses',
                        'post_name'     => $urlSlug,
                    );

                    // Insert the post into the database.
                    $courseWpId = wp_insert_post( $coursePost );
                    update_field('ethos_id', $nid, $courseWpId);
                    update_field('course_url', $url, $courseWpId);
                    update_field('course_price', $price, $courseWpId);
                    update_field('course_status', $status, $courseWpId);
                    update_field('course_accreditation', $field_accreditation, $courseWpId);
                    update_field('course_summary', $field_course_summary, $courseWpId);
                    update_field('course_faculty_credentials', $field_faculty_credentials, $courseWpId);
                    update_field('course_learning_objectives', $field_learning_objectives, $courseWpId);
                    update_field('course_target_audience', $field_target_audience, $courseWpId);
                    update_field('course_program', $field_program, $courseWpId);
                    update_field('course_registration_instructions', $field_registration_instructions, $courseWpId);
                    update_field('course_custom_provided', $field_custom_provided, $courseWpId);

                    update_field('course_date_start', $field_course_date_start, $courseWpId);
                    update_field('course_date_end', $field_course_date_end, $courseWpId);
                    update_field('course_date_duration', $field_course_date_duration, $courseWpId);
                    update_field('course_event_date_start', $field_course_event_date_start, $courseWpId);
                    update_field('course_event_date_end', $field_course_event_date_end, $courseWpId);
                    update_field('course_event_date_duration', $field_course_event_date_duration, $courseWpId);

                    update_field('course_live', $field_course_live, $courseWpId);

                    if(!empty($field_course_location)) : 
                        $term_taxonomy_ids = wp_set_object_terms( $courseWpId, $field_course_location['name'], 'course_location');

                        foreach ($term_taxonomy_ids as $key => $value) {
                            update_field('course_location_id', $field_course_location['lid'], 'course_location_' . $value);
                            update_field('course_location_street', $field_course_location['street'], 'course_location_' . $value);
                            update_field('course_location_city', $field_course_location['city'], 'course_location_' . $value);
                            update_field('course_location_province_name', $field_course_location['province'], 'course_location_' . $value);
                            update_field('course_location_postal_code', $field_course_location['postal_code'], 'course_location_' . $value);
                            update_field('course_location_country_name', $field_course_location['country'], 'course_location_' . $value);
                            update_field('course_location_phone', $field_course_location['phone'], 'course_location_' . $value);
                            update_field('course_location_email', $field_course_location['email'], 'course_location_' . $value);
                            update_field('course_location_www', $field_course_location['www'], 'course_location_' . $value);
                        }
                    endif;

                    $ogUrl = $body['self'];

                    foreach ($this->nodeUrls['list'] as $key => $value) {
                        $url = str_replace('.json','',$value['url']);

                        if($url == $ogUrl):
                            if(isset($value['credits']['num'])) : $credits = $value['credits']['num']; endif;
                            if(isset($value['credits']['course_credit_types'])) : $creditTypes = $value['credits']['course_credit_types']; endif;
                            if(isset($credits)) : update_field('course_credits', $credits, $courseWpId);endif;

                            if(!empty($creditTypes)) : 
                                $term_taxonomy_ids = wp_set_object_terms( $courseWpId, $creditTypes, 'course_credit');
                            endif;
                        endif;
                    }

                // show the server's response code
                } else trigger_error('Server responded with code ' . $result->info['http_code'], E_USER_ERROR);
         
            // something went wrong
            // ($result still contains all data that could be gathered)
            } else trigger_error('cURL responded with: ' . $result->response[0], E_USER_ERROR);
         
        });
        
        $this->lp_set_acf_img_urls();

        $this->lp_set_formatTax();

        $this->lp_set_catTax();

    }
    //Single post
    public function lp_create_ethos_post($nid){
        

    }
    public function lp_get_ethos_url_slug($url){

        $url = parse_url($url);
        $slug = str_replace("/content/", "", $url['path']);

        return $slug;
        
    }
    public function lp_prune_ethos_post(){

        $junkCapsule = [];

        $args = array(
            'post_type'     => 'courses',
            'meta_key'      => 'ethos_id',
            'meta_value'    => $this->nodeIds,
            'meta_compare'  => 'NOT IN',
        );
        $the_query = new WP_Query( $args );

        if( $the_query->have_posts() ):
            while( $the_query->have_posts() ) : $the_query->the_post();
                $junkIDs = get_the_ID();
                $junkCapsule[] = $junkIDs;
                wp_delete_post( $junkIDs );

            endwhile;
        endif;
        wp_reset_query();

        // echo 'The following posts were deleted: ';
        // print_r($junkCapsule);
 
    }
    public function lp_set_imgurl($id, $findWPCourseID){

        $imgUrl = $this->domain . '/file.json?fid=' . $id;

        $imgArr = array('url' => $imgUrl, 'id' => $findWPCourseID);

        $this->imgUrls[] = $imgArr;
    }

    public function lp_set_formaturl($formats, $findWPCourseID){

        $count = 0;

        foreach ($formats as $key => $value) {
            $formatUrl[] = $this->domain . '/taxonomy_term.json?tid=' . $value['id'];
        }

        $formatArr = array('url' => $formatUrl, 'id' => $findWPCourseID);

        $this->formatUrls[] = $formatArr;
    }

    public function lp_set_caturl($cats, $findWPCourseID){

        $count = 0;

        foreach ($cats as $key => $value) {
            $catUrl[] = $this->domain . '/taxonomy_term.json?tid=' . $value['id'];
        }

        $catArr = array('url' => $catUrl, 'id' => $findWPCourseID);

        $this->catUrls[] = $catArr;
    }

    public function lp_get_imgurl(){

        return $this->imgUrls;
    }

    public function lp_get_formaturl(){

        return $this->formatUrls;
    }

    public function lp_get_caturl(){

        return $this->catUrls;
    }

    public function lp_set_acf_img_urls(){

        $imgUrlArr = [];

        foreach ($this->imgUrls as $key => $value) {
            $imgUrlArr[] = $value['url'];
        }

        // // Checks the first time
        $this->rcx->get($imgUrlArr, function($result) {

            // everything went well at cURL level
            if ($result->response[1] == CURLE_OK) {
         
                // if server responded with code 200 (meaning that everything went well)
                // see https://httpstatus.es/ for a list of possible response codes
                if ($result->info['http_code'] == 200) {

                    $body = lp_jsonp_decode($result->body, TRUE);
                    $ogUrl = $result->info['original_url'];

                    foreach ($this->imgUrls as $key => $value) {
                        if($value['url'] == $ogUrl):
                            $imgUrl = $body['list'][0]['url'];
                            if(isset($imgUrl)) : update_field('course_image', $imgUrl, $value['id']);endif;
                        endif;
                    }
                    
                
                // show the server's response code
                } else trigger_error('Server responded with code ' . $result->info['http_code'], E_USER_ERROR);
         
            // something went wrong
            // ($result still contains all data that could be gathered)
            } else trigger_error('cURL responded with: ' . $result->response[0], E_USER_ERROR);
         
        });
    }
    public function lp_set_formatTax(){

        foreach ($this->formatUrls as $key => $value) {

            wp_set_object_terms($value['id'], array(), 'course_format');

            // // Checks the first time
            $this->rcx->get($value['url'], function($result) use ($value) {

                // everything went well at cURL level
                if ($result->response[1] == CURLE_OK) {
             
                    // if server responded with code 200 (meaning that everything went well)
                    // see https://httpstatus.es/ for a list of possible response codes
                    if ($result->info['http_code'] == 200) {

                        $body = lp_jsonp_decode($result->body, TRUE);
                        // print_r('<pre>');
                        // print_r($body);

                        //echo $value['id'];

                        if(isset($body['list'][0]['name'])):
                            $format = array('name' => $body['list'][0]['name'], 'description' => $body['list'][0]['description']);

                            $term_taxonomy_ids = wp_set_object_terms( $value['id'], $format, 'course_format', true);
                        endif;
                    
                    // show the server's response code
                    } else trigger_error('Server responded with code ' . $result->info['http_code'], E_USER_ERROR);
             
                // something went wrong
                // ($result still contains all data that could be gathered)
                } else trigger_error('cURL responded with: ' . $result->response[0], E_USER_ERROR);
             
            });
        }
    }

    public function lp_set_catTax(){

        foreach ($this->catUrls as $key => $value) {

            wp_set_object_terms($value['id'], array(), 'course_category');

            // // Checks the first time
            $this->rcx->get($value['url'], function($result) use ($value) {

                // everything went well at cURL level
                if ($result->response[1] == CURLE_OK) {
             
                    // if server responded with code 200 (meaning that everything went well)
                    // see https://httpstatus.es/ for a list of possible response codes
                    if ($result->info['http_code'] == 200) {

                        $body = lp_jsonp_decode($result->body, TRUE);
                        // print_r('<pre>');
                        // print_r($body);

                        //echo $value['id'];

                        if(isset($body['list'][0]['name'])):
                            $cat = array('name' => $body['list'][0]['name'], 'description' => $body['list'][0]['description']);

                            $term_taxonomy_ids = wp_set_object_terms( $value['id'], $cat, 'course_category', true);
                        endif;
                    
                    // show the server's response code
                    } else trigger_error('Server responded with code ' . $result->info['http_code'], E_USER_ERROR);
             
                // something went wrong
                // ($result still contains all data that could be gathered)
                } else trigger_error('cURL responded with: ' . $result->response[0], E_USER_ERROR);
             
            });
        }
    }

}