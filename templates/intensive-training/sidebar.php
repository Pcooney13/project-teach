<div class="w-full md:w-1/3">
    <div class="mb-12 md:mb-0 bg-white shadow-xl rounded-xl overflow-hidden sticky top-[5rem]">
        <div class="p-4 border-b border-slate-200 border-solid space-y-2">
            <p class="font-gotham-medium text-lg text-slate-800">
                <?php echo $title; ?>
            </p>

            <?php if (isset($date_2)) : ?>
                <div class="flex text-slate-500 mb-2 gap-2 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 mb-1">
                        <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd"></path>
                    </svg>
                    <p class="font-gotham-bold absolute text-[0.45rem] top-[6px] left-[6px]">1</p>
                    <p class="font-gotham"><?php echo $date_1->format('D, M j, Y'); ?> - <?php echo $day_1_start_time; ?> - <?php echo $day_1_end_time; ?></p>
                </div>
                <div class="flex text-slate-500 mb-2 gap-2 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 mb-1">
                        <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd"></path>
                    </svg>
                    <p class="font-gotham-bold absolute text-[0.45rem] top-[6px] left-[6px]">2</p>
                    <p class="font-gotham"><?php echo $date_2->format('D, M j, Y'); ?> - <?php echo $day_2_start_time; ?> - <?php echo $day_2_end_time; ?></p>
                </div>
            <?php else : ?>
                <div class="flex text-slate-500 mb-2 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 mb-1">
                        <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd"></path>
                    </svg>
                    <p class="font-gotham"><?php echo $date_1->format('l, F j, Y'); ?></p>
                </div>
                <div class="flex text-slate-500 mb-2 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M12 12h3.5" />
                        <path d="M12 7v5" />
                    </svg>
                    <p class="font-gotham"><?php echo $day_1_start_time; ?> - <?php echo $day_1_end_time; ?></p>
                </div>
            <?php endif; ?>
            <div class="flex text-slate-500 mb-2 gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" class="w-4 h-4 mb-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <p class="font-gotham"><?php echo $location; ?></p>
            </div>
        </div>
        <ul class="section-wrap">
            <li>
                <a href="#section2" data-filter="section2" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Course Topics</a>
            </li>
            <li>
                <a href="#section3" data-filter="section3" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Learning Objectives</a>
            </li>
            <li>
                <a href="#section4" data-filter="section4" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Target Audience</a>
            </li>
            <li>
                <a href="#section5" data-filter="section5" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Presenters</a>
            </li>
            <li>
                <a href="#section6" data-filter="section6" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Agenda</a>
            </li>
            <li>
                <a href="#section7" data-filter="section7" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Follow-Up Sessions</a>
            </li>
            <li>
                <a href="#section8" data-filter="section8" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham <?php echo $hover_text_color; ?> transition">Additional Resources</a>
            </li>
        </ul>
        <div class="p-4 text-center">
            <a href="#" class="py-3 px-12 text-white font-gotham-bold text-center text-lg rounded-full <?php echo $bg_color; ?>">Register Now</a>
        </div>
    </div>
</div>