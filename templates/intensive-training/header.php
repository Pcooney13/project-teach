<div class="pt-8 pb-16 md:pt-16 bg-white relative">
    <div class="relative flex flex-col md:flex-row max-w-screen-xl mx-auto px-4 md:px-0">
        <div class="w-full order-1 md:order-1 justify-center md:w-1/2 md:pr-8 gap-6 flex flex-col">
            <p class="text-2xl md:text-3xl font-gotham-bold text-black drop-shadow-sm">
                <?php echo $title; ?>
            </p>
            <div class="space-y-2">
                <?php if ($display_register_button && $register_link) : ?>
                    <!-- Date -->
                    <div class="flex items-center <?php echo $text_color; ?> gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                        </svg>
                        <!-- $date_1->format('D, M j, Y') -->
                        <p class="font-gotham-medium"><?php echo $date_1->format('l, F j, Y'); ?></p>
                    </div>
                    <!-- Time -->
                    <div class="flex items-center <?php echo $text_color; ?> gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M12 12h3.5" />
                            <path d="M12 7v5" />
                        </svg>
                        <p class="font-gotham-medium"><?php echo $day_1_start_time; ?> - <?php echo $day_1_end_time; ?></p>
                    </div>
                    <!-- Location -->
                    <div class="flex <?php echo $text_color; ?> gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                        </svg>
                        <p class="font-gotham-medium flex-1"><?php echo $location; ?></p>
                    </div>
                    <div class="pt-6 flex items-center gap-4">
                        <a href="<?php echo $register_link; ?>" class="py-2 px-12 font-gotham-medium text-center text-lg text-white rounded-full <?php echo $bg_color; ?>">Register Now</a>
                        <a href="#section6" class="py-2 px-8 font-gotham-medium text-center text-lg <?php echo $text_color; ?> rounded-full transition flex gap-1 border border-solid <?php echo $border_color; ?> items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 4l18 0" />
                                <path d="M4 4v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-10" />
                                <path d="M12 16l0 4" />
                                <path d="M9 20l6 0" />
                                <path d="M8 12l3 -3l2 2l3 -3" />
                            </svg>
                            View Agenda
                        </a>
                    </div>
                <?php else : ?>
                    <p class="font-gotham-light leading-7"><?php echo $event_details; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="w-full order-0 md:order-1 mb-4 md:mb-0 md:w-1/2">
            <div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3] shadow-xl">
                <img class="h-full w-full object-cover" src="<?php echo wp_get_attachment_image($image, 'large'); ?>">
            </div>
        </div>
    </div>
</div>