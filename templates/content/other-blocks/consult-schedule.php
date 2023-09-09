<div class="flex py-4 items-center">
    <div class="md:max-w-md self-center pr-4">
        <h2 class=" font-gotham-bold leading-tight mb-2">Participate In One of Our Upcoming Consult Calls</h2>
        <p class="mb-4">            
            New York State maternal mental health providers can schedule a consultation with expert psychiatrists in maternal mental health through an open conference line. The open conference line is available twice weekly on <strong>Tuesdays from 5 to 6 PM</strong> and <strong>Thursdays from 1 to 2 PM</strong>. Providers can schedule in advance a ten-minute window to call in to present cases or ask questions and get responses.
        </p>            
        <p class="mb-4">    
            Providers may also <a style="color: #039fda;" href="/mmh/mmh-ask-a-question/">submit non-urgent questions by email</a>. Expert psychiatrists in maternal mental health will respond to all questions within two business days.        
        </p>
        <div class="flex flex-col w-64 mx-auto mb-4">
            <a class="border-2 text-center border-transparent mb-4 font-gotham-bold inline-block no-underline text-white rounded-full px-6 py-3 transition-all duration-300 hover:bg-transparent hover:text-blue bg-blue hover:border-blue" href="/consultation">
                Tuesdays 5PM - 6PM
            </a>
            <a class="border-2 text-center border-transparent font-gotham-bold inline-block no-underline text-white rounded-full px-6 py-3 transition-all duration-300 hover:bg-transparent hover:text-blue bg-blue hover:border-blue" href="/consultation">
                Thursdays 1PM - 2PM
            </a>
        </div>
        <a style="color: #039fda;" href="/association/mmh-consultant/">Click to View Complete List of Featured Consultants</a>        
    </div>
    <div class="h-128 bg-black-100 shadow-inner px-4 pt-4 overflow-auto">
        <?php if (have_rows('schedule')) :
            $rowsVisible = 0; ?>
            <?php while (have_rows('schedule')) : the_row(); 
                $now = date('Ymd');
                $date_format_in = 'F j, Y'; // the format we need (set in the acf field options)
                $date_format_out = 'F j';   // the format we want to end up with
                $date = DateTime::createFromFormat('Ymd', get_sub_field('date')); 
                $time = get_sub_field('time');
            
                if (isset($date) && $date->format('Ymd') < $now) {
                
                    //skips row if the date has already passed.
                
                } else { 
                    $rowsVisible++; 
		            if ($rowsVisible > 18) {
                        break; //stop after 14 consultations
                    } 
                    if (get_sub_field('special_consult')) {
                        $calendar_color = "orange";
                    } elseif ($date->format('n')%2 == 1) {
                        $calendar_color = 'blue';
                    } else {
                        $calendar_color = 'purple';
                    } 
                    // Holiday
                    if (get_sub_field('holiday')):
                        
                        $holdiday = get_sub_field('holiday');
                        $holidayText = get_sub_field('holiday_text'); ?>
                
                        <div class="flex bg-white items-center mb-4 shadow-md">
                        <a href="<?php the_permalink(); ?>" class="text-black-500 leading-tight text-sm no-underline justify-center bg-black-100 w-16 h-16 flex flex-col items-center bg-center bg-cover mr-4">
                            No<br>
                            Event,<br>                        
                            Holiday
                        </a>
                        <div class="flex-1 flex flex-col justify-center py-2">
                            <!-- Title -->
                            <p class="text-black-700 text-sm leading-none"><?php echo $date->format('F j, Y'); ?></p>
                            <a class="no-underline text-black" href="<?php the_permalink();?>">
                                <h3 class="font-gotham-bold leading-tight mb-1 text-black-700">
                                    <?php echo $holidayText; ?>
                                </h3>
                            </a>
                        </div>
                    </div>
                    <!-- Event -->
                    <?php else: ?>
                    
                    
                    <div class="flex bg-white mb-4 shadow-md">
                        <a href="<?php the_permalink(); ?>" class="no-underline justify-center bg-<?php echo $calendar_color; ?>-200 w-16 min-h-full flex flex-col items-center bg-center bg-cover mr-4">
                            <p class="leading-none text-<?php echo $calendar_color; ?> font-gotham-medium uppercase"><?php echo $date->format('M'); ?></p>
                            <p class="leading-none text-xl font-gotham-black"><?php echo $date->format('j'); ?></p>
                        </a>
                        <div class="flex-1 flex flex-col justify-center py-2 pr-4">
                            <?php if (get_sub_field('special_consult')) : ?>
                                <ul class="mb-1">
			                        <div class="order-none mt-1 sm:mt-0 sm:order-first md:order-none font-gotham-medium text-center text-xs mb-0 mr-2 no-underline bg-<?php echo $calendar_color; ?>-200 px-2 rounded-full leading-none py-1 text-<?php echo $calendar_color; ?> inline-block">Featured Consult</div>
                                </ul>
                            <?php endif; ?>
                            <!-- Title -->
                            <a class="no-underline text-black hover:text-<?php echo $calendar_color; ?> transition-color duration-300" href="<?php the_permalink();?>">
                                <h3 class="font-gotham-bold leading-tight mb-1">
                                <?php if (get_sub_field('special_consult')) : ?>
                                    <?php the_sub_field('consult_title'); ?>
                                <?php else : ?>
                                    <?php echo $date->format('l'); ?> Consultation
                                <?php endif; ?>
                                </h3>
                            </a>
                            <!-- Authors -->
                            <div class="flex items-center flex-wrap mb-1">
                                <svg class="h-5 w-5 mr-2 bg-<?php echo $calendar_color; ?> rounded-full" viewBox="0 0 512 512">
                                    <path class="text-<?php echo $calendar_color; ?>-200 fill-current" d="M256,0C114.84,0,0,114.84,0,256S114.84,512,256,512,512,397.16,512,256,397.16,0,256,0ZM377.75,388.41a21.29,21.29,0,0,1-30.16,0L240.92,281.75a21.25,21.25,0,0,1-6.25-15.08V128a21.33,21.33,0,1,1,42.66,0V257.84L377.75,358.25A21.31,21.31,0,0,1,377.75,388.41Z"></path>
                                </svg>
                                <p class="leading-none text-black-800 mr-4 w-8">        						
                                    <?php echo $time; ?>
                                </p>
    		        	        <?php $featured_posts = get_sub_field('consultant');
    		        	        if( $featured_posts ): ?>
    		        	            <a class="flex mr-4 no-underline font-gotham"  href="<?php echo the_permalink($featured_posts->ID); ?>">
    		        	                <div class="mr-2 rounded-full w-6 h-6 bg-cover bg-center" style="background-image:url('<?php echo get_the_post_thumbnail_url( $featured_posts->ID ); ?>')"></div>
    		        	                <span class="text-black-800"><?php the_field('name', $featured_posts->ID);?></span>
			        		        </a>
    		        	        <?php endif; ?>
                            </div>                        
                        </div>
                    </div>
                                
                                
                    <?php endif;
    
                }
            endwhile; ?>
    <?php endif; ?>
    </div>
</div>