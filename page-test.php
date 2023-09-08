<?php require_once('header.php');

// Post Query
$post_args = array(
    'numberposts'    => -1,
    'post_type'        => 'events',
    'meta_query'    => array(
        'relation'        => 'OR',
        array(
            'compare'    => '=',
            'value'        => 5807,
        )
    )
);
$post_query = new WP_Query($post_args);

?>



<!-- Mailchimp Archive -->
<!-- <style type="text/css">
    .display_archive {
        font-family: arial, verdana;
        font-size: 12px;
    }

    .campaign {
        line-height: 125%;
        margin: 5px;
    }
</style>
<script language="javascript" src="//projectteachny.us4.list-manage.com/generate-js/?u=bfcc0eb023a330efed7da0d84&fid=30822&show=10" type="text/javascript"></script> -->

<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<!-- Header -->
<div class="py-16 bg-white relative">
    <!-- <div class="bg-gradient-to-b md:bg-gradient-to-r from-white via-blue-200 to-blue absolute w-full transform h-full top-0 -translate-y-1/2"></div> -->
    <div class="relative flex flex-col md:flex-row max-w-screen-xl mx-auto px-4 md:px-0">
        <div class="w-full order-1 md:order-1 md:w-1/2 pr-8 gap-6 flex flex-col">
            <div class="flex-1 flex flex-col justify-end">
                <p class="text-2xl md:text-3xl font-gotham-bold text-black drop-shadow-sm">
                    Intensive Training: <br class="hidden md:block"><span class="font-gotham-bold text-blue">Child & Adolescent</span> Mental Health <br class="hidden md:block">for Primary Care Clinicians
                </p>
            </div>
            <div class="flex-1">
                <div class="flex items-center text-blue mb-2 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mb-1">
                        <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                    </svg>
                    <p class="font-gotham-medium">Sunday, Nov 5 - Monday, Nov 6, 2023</p>
                </div>
                <p class="font-gotham-light leading-7">The next intensive training will be held in-person at a location in Westchester County, New York. If you would like to receive event details and registration information as soon as it is released, please email us by <a class="text-blue transition-all duration-300 font-gotham hover:text-black" href="mailto:info@projectteachny.org?subject=MMH Intensive Training">clicking here</a>.</p>
            </div>
        </div>
        <div class="w-full order-0 md:order-1 md:w-1/2">
            <div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3] shadow-xl">
                <img class="h-full w-full object-cover" src="https://projectteachny.org/app/uploads/2017/09/consulation-improve-health-bg.jpg">
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb -->
<nav class="flex max-w-screen-lg py-5 lg:max-w-screen-xl mx-auto px-4 md:px-0 " aria-label="Breadcrumb">
    <ol role="list" class="flex items-center space-x-4">
        <li>
            <div>
                <a href="/" class="text-slate-400 hover:text-slate-500">
                    <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Home</span>
                </a>
            </div>
        </li>
        <!-- <li>
            <div class="flex items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-slate-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <a href="/consultants" class="ml-4 font-gotham-medium text-slate-400 hover:text-slate-500">Consultants</a>
            </div>
        </li> -->
        <!-- <li>
            <div class="flex items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-slate-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <p class="ml-4 font-gotham-medium text-slate-400 hover:text-slate-500" aria-current="page">Victor Fornari, MD</p>
            </div>
        </li> -->
        <li>
            <div class="flex items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-slate-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <p class="ml-4 font-gotham-medium text-slate-400 hover:text-slate-500" aria-current="page">Intensive Training: Child & Adolescent Mental Health for Primary Care Clinicians</p>
            </div>
        </li>
    </ol>
</nav>
<!-- Main Content -->
<div class="max-w-screen-lg py-16 lg:max-w-screen-xl mx-auto px-4 md:px-0 flex flex-col md:flex-row" x-data="{ day1: true, day2: false, open: false}">
    <!-- Sidebar -->
    <div class="w-full md:w-1/3">
        <div class="mb-12 md:mb-0 bg-white shadow-xl rounded-xl overflow-hidden sticky top-[5rem]">
            <div class="p-4 border-b border-slate-200 border-solid space-y-2">
                <p class="font-gotham-medium text-lg text-slate-800">
                    Intensive Training: <br class="hidden md:block"><span class="text-blue font-gotham-medium">Child & Adolescent</span> Mental Health <br class="hidden md:block">for Primary Care Clinicians
                </p>
                <div class="flex items-center text-slate-500 mb-2 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 mb-1">
                        <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd"></path>
                    </svg>
                    <p class="font-gotham">Sunday, Nov 5 - Monday, Nov 6, 2023</p>
                </div>
                <div class="flex items-center text-slate-500 mb-2 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mb-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <p class="font-gotham">Westchester County, New York</p>
                </div>
            </div>
            <ul class="section-wrap">
                <li>
                    <a href="#section2" data-filter="section2" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham hover:text-blue transition">Course Descriptions</a>
                </li>
                <li>
                    <a href="#section3" data-filter="section3" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham hover:text-blue transition">Learning Objectives</a>
                </li>
                <li>
                    <a href="#section4" data-filter="section4" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham hover:text-blue transition">Target Audience</a>
                </li>
                <li>
                    <a href="#section5" data-filter="section5" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham hover:text-blue transition">Presenters</a>
                </li>
                <li>
                    <a href="#section6" data-filter="section6" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham hover:text-blue transition">Agenda</a>
                </li>
                <li>
                    <a href="#section7" data-filter="section7" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham hover:text-blue transition">Follow-Up Sessions</a>
                </li>
                <li>
                    <a href="#section8" data-filter="section8" class="p-4 block border-b border-slate-200 border-solid text-slate-500 font-gotham hover:text-blue transition">Additional Resources</a>
                </li>
            </ul>
            <div class="p-4 text-center">
                <a href="#" class="py-3 px-12 text-white font-gotham-bold text-center text-lg rounded-full bg-blue">Register Now</a>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div id="slider" class="flex-1 md:pl-12 space-y-12">
        <div id="section1" class="section space-y-4 scroll-mt-20">
            <div class="bg-blue-200 p-4 rounded-xl shadow space-y-4">
                <p class="font-gotham-medium text-lg">This Intensive Training Program Includes:</p>
                <p class="font-gotham-light text-lg">1.5 day training event + 6 follow-up sessions = 15 CME credits.</p>
                <p class="font-gotham-light text-lg">For those who attended the 1.5 day training event on November 5-6, 2023, you can now register for as many follow-up sessions that your schedule allows. Please use the registration link that was sent to you. Clinicians who complete 14 CME hours and utilize the consultation line twice will receive a Certificate of Completion from Project TEACH.</p>
            </div>
            <p class="font-gotham-light text-lg">This intensive training program enhances primary care clinicians' skills to assess, treat and manage common mental health concerns in children and youth. This program includes the one and a half day training and six follow-up sessions and is presented by Project TEACH's team of child and adolescent psychiatrists and pediatricians.</p>
            <p class="font-gotham-light text-lg">Project TEACH is funded by the New York State Office of Mental Health and all services and events, such as this intensive training, are offered at no-cost to clinicians in New York State.</p>
        </div>
        <div id="section2" class="section space-y-4 scroll-mt-20">
            <h6 class="font-gotham-medium text-lg">Course Descriptions</h6>
            <ul class="pl-6 list-disc space-y-4">
                <li class="font-gotham-light text-lg"><a href="#mod-1" x-on:click="day1 = true, day2 = false" class="font-gotham-medium text-blue hover:text-black transition">Trauma-Informed Care:</a> This Intensive Training module addresses how to screen for and treat trauma in children and adolescents.</li>
                <li class="font-gotham-light text-lg"><a href="#mod-2" x-on:click="day1 = true, day2 = false" class="font-gotham-medium text-blue hover:text-black transition">Depression:</a> This Intensive Training module addresses how to screen for and treat pediatric depression.</li>
                <li class="font-gotham-light text-lg"><a href="#mod-3" x-on:click="day1 = true, day2 = false" class="font-gotham-medium text-blue hover:text-black transition">Anxiety:</a> This Intensive Training module addresses how to screen for and treat pediatric anxiety.</li>
                <li class="font-gotham-light text-lg"><a href="#mod-4" x-on:click="day1 = true, day2 = false" class="font-gotham-medium text-blue hover:text-black transition">ADHD:</a> This Intensive Training module addresses how to assess and treat ADHD, including adherence to treatment options.</li>
                <li class="font-gotham-light text-lg"><a href="#mod-5" x-on:click="day1 = false, day2 = true" class="font-gotham-medium text-blue hover:text-black transition">Bipolar Disorder:</a> This Intensive Training module addresses how to screen for and treat pediatric bipolar disorder.</li>
                <li class="font-gotham-light text-lg"><a href="#mod-6" x-on:click="day1 = false, day2 = true" class="font-gotham-medium text-blue hover:text-black transition">Aggresion:</a> This Intensive Training module addresses how to screen for and treat pediatric aggression.</li>
            </ul>
        </div>
        <div id="section3" class="section space-y-4 scroll-mt-20">
            <h6 class="font-gotham-medium text-lg">Learning Objectives</h6>
            <p class="font-gotham-light text-lg">At the conclusion of this program, learners will be able to:</p>
            <ul class="pl-6 list-disc space-y-4">
                <li class="font-gotham-light text-lg">Recognize the presentation, diagnosis, comorbidity, neurobiology, and current treatment options available for individuals with ADHD.</li>
                <li class="font-gotham-light text-lg">Assess depression in youth, and evaluate the treatment options for children and adolescents, including an assessment of the black box warning for SSRIs.</li>
                <li class="font-gotham-light text-lg">Differentiate common anxiety disorders and describe their assessments and treatment.</li>
                <li class="font-gotham-light text-lg">Recognize the behaviors resulting from trauma that require treatment, and evaluate the treatment options for children and adolescents.</li>
                <li class="font-gotham-light text-lg">Define pediatric bipolar disorder, and provide examples of effective evidence-based therapies.</li>
            </ul>
        </div>
        <div id="section4" class="section space-y-4 scroll-mt-20">
            <h6 class="font-gotham-medium text-lg">Target Audience</h6>
            <p class="font-gotham-light text-lg">New York State primary care and family practice physicians, pediatricians, psychiatrists, psychologists, nursing professionals, social workers, residents, and other mental health, primary care, and pediatric clinicians.</p>
        </div>
        <div id="section5" class="section space-y-4 scroll-mt-20">
            <h6 class="font-gotham-medium text-lg">Presenters</h6>
            <div class="grid md:grid-cols-2 gap-4">
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2020/04/kaye.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">David Kaye, MD</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2020/08/n-khoury.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Nayla Khoury, MD</p>
                </a>
                <button @click="open = true" class="text-left bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2021/09/victor_fornari.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Victor Fornari, MD, MS</p>
                </button>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2022/01/amy_jerum.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Amy Jerum, NP, DNP</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2020/05/scharf-1.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Michael A Scharf, MD</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2021/01/macmaste-1-250x251-1.png">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Eric MacMaster, MD</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2022/02/souravse.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Sourav Sengupta, MD</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2020/08/zuckerbrot100x130.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Rachel Zuckerbrot, MD</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2022/01/8fRa2838_400x400.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Jessica Grant, MD</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2020/04/3138-1.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">James Wallace, MD</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2020/12/ljdpkmsftlhye1ivtxlp-e1606919318285.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Zoya Popivker, D.O.</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2020/07/Screen-Shot-2020-07-10-at-1.20.14-PM-e1595005832869.png">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Diane E. Bloomfield, MD</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2022/02/marc-lashley.jpeg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Marc Lashley, MD</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2022/02/MYD-mattimore3.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Colleen Mattimore, MD</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2020/04/Foley.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Carmel Foley, MD</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2022/01/maureen_montgomery.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Maureen Montgomery, MD</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2022/03/fremontw-1.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Wanda Fremont, MD</p>
                </a>
                <a href="#" class="bg-white rounded-xl overflow-hidden group flex items-center shadow">
                    <img class="w-14 h-14" src="https://projectteachny.org/app/uploads/2022/03/breck-borcherding-1.jpg">
                    <p class="font-gotham p-4 text-slate-800 group-hover:text-blue transition">Breck Borcherding, MD</p>
                </a>
            </div>
        </div>
        <div id="section6" class="section space-y-4 scroll-mt-20" x-cloak>
            <h6 class="font-gotham-medium text-lg">Agenda</h6>
            <!-- <p class="font-gotham-light text-lg">New York State primary care and family practice physicians, pediatricians, psychiatrists, psychologists, nursing professionals, social workers, residents, and other mental health, primary care, and pediatric clinicians.</p> -->
            <div class="hidden sm:block bg-white rounded-xl shadow">
                <nav class="grid md:grid-cols-2 text-center p-2">
                    <button x-on:click="day1 = true, day2 = false" :class="day1 === true ? 'text-white bg-blue font-gotham-medium shadow-sm' : 'text-slate-500 font-gotham hover:text-blue'" class="p-2 rounded-lg text-blue font-gotham-medium">
                        Day 1
                    </button>
                    <button x-on:click="day2 = true, day1 = false" :class="day2 === true ? 'text-white bg-blue font-gotham-medium shadow-sm' : 'text-slate-500 font-gotham hover:text-blue'" class="p-2 rounded-lg text-blue font-gotham-medium">
                        Day 2
                    </button>
                </nav>
            </div>
            <div class="bg-white rounded-xl shadow" x-show="day1 === true">
                <div class="p-4 pb-0 bg-white rounded-xl mb-4 sticky top-16 flex">
                    <div class="flex items-center w-full justify-between p-4 bg-blue-200 rounded-lg shadow-sm">
                        <button class="group rounded-full hover:bg-blue transition opacity-0 pointer-events-none" :class="day2 === true && 'opacity-100 pointer-events-auto'" x-on:click="day1 = true, day2 = false">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-sky-600 group-hover:text-white transition w-6 h-6">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <h6 class="font-gotham-medium text-lg text-sky-600">Day 1 - Monday, November 5, 2023</h6>
                        <button class="group rounded-full hover:bg-blue transition opacity-0 pointer-events-none" :class="day1 === true && 'opacity-100 pointer-events-auto'" x-on:click="day2 = true, day1 = false">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-sky-600 group-hover:text-white transition w-6 h-6">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="space-y-8 p-4">
                    <div class="space-y-4">
                        <h5 class="font-gotham-light text-xl text-blue">Introduction & Overview</h5>
                        <div class="space-y-8">
                            <div class="flex gap-4">
                                <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">8:30-8:45am</p>
                                <div class="flex-1">
                                    <h4 class="font-gotham-medium">Welcome & Project TEACH Overview</h4>
                                    <a href class="font-gotham hover:text-blue transition">David Kaye, MD</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <h5 id="mod-1" class="font-gotham-light text-xl text-blue scroll-mt-40">Module Topic 1: Trauma-Informed Care</h5>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">8:45-9:05am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Assessment and Diagnosis</h4>
                                <a href class="font-gotham hover:text-blue transition">Nayla Khoury, MD</a>
                            </div>
                        </div>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">9:05-9:25am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Screening</h4>
                                <a href class="font-gotham hover:text-blue transition">Nayla Khoury, MD</a>
                            </div>
                        </div>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">9:25-9:45am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Treatment</h4>
                                <button @click="open = true" class="text-left font-gotham hover:text-blue transition">Victor Fornari, MD</button>
                            </div>
                        </div>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">9:45-10:00am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Incorporation into Your Practice: Trauma-Informed Care&nbsp;</h4>
                                <a href class="font-gotham hover:text-blue transition">Amy Jerum, NP, DNP</a>
                            </div>
                        </div>
                        <div class="flex gap-4 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">10:00-10:30am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Question & Answer</h4>
                                <div class="flex gap-2">
                                    <p class="font-gotham-medium text-slate-500 w-[90px] text-right mb-1">Moderator:</p>
                                    <div class="flex flex-col">
                                        <a href="#" class="font-gotham hover:text-blue transition">Molly Scharf, MD</a>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <p class="font-gotham-medium text-slate-500 w-[90px] text-right">Panelists:</p>
                                    <div class="flex flex-col gap-0.5">
                                        <a href="#" class="font-gotham hover:text-blue transition">Nayla Khoury, MD</a>
                                        <button @click="open = true" class="text-left font-gotham hover:text-blue transition">Victor Fornari, MD</button>
                                        <a href="#" class="font-gotham hover:text-blue transition">Amy Jerum, NP, DNP</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-blue-200/50 rounded-xl py-4 space-y-8">
                        <div class="flex gap-4">
                            <p class="font-gotham-medium text-slate-600 text-sm w-28 text-right">10:30-10:45am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Break</h4>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h5 id="mod-2" class="font-gotham-light text-xl text-blue scroll-mt-40">Module Topic 2: Despression</h5>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">10:45-11:05am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Assessment and Diagnosis</h4>
                                <a href class="font-gotham hover:text-blue transition">Eric MacMaster, MD</a>
                            </div>
                        </div>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">11:05-11:25am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Antidepressants, Youth and Suicide</h4>
                                <a href class="font-gotham hover:text-blue transition">Sourav Sengupta, MD</a>
                            </div>
                        </div>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">11:25-11:45am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Treatment</h4>
                                <a href class="font-gotham hover:text-blue transition">Rachel Zuckerbrot, MD</a>
                            </div>
                        </div>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">11:45-12:00pm</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Incorporation into Your Practice: Depression</h4>
                                <a href class="font-gotham hover:text-blue transition">Jessica Grant, MD</a>
                            </div>
                        </div>
                        <div class="flex gap-4 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">12:00-12:30pm</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Question & Answer</h4>
                                <div class="flex gap-2">
                                    <p class="font-gotham-medium text-slate-500 w-[90px] text-right mb-1">Moderator:</p>
                                    <div class="flex flex-col">
                                        <a href="#" class="font-gotham hover:text-blue transition">Molly Scharf, MD</a>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <p class="font-gotham-medium text-slate-500 w-[90px] text-right">Panelists:</p>
                                    <div class="flex flex-col gap-0.5">
                                        <a href="#" class="font-gotham hover:text-blue transition">Eric MacMaster, MD</a>
                                        <a href="#" class="font-gotham hover:text-blue transition">Sourav Sengupta, MD</a>
                                        <a href="#" class="font-gotham hover:text-blue transition">Rachel Zuckerbrot, MD</a>
                                        <a href="#" class="font-gotham hover:text-blue transition">Jessica Grant, MD</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-200/50 rounded-xl py-4 space-y-8">
                        <div class="flex gap-4">
                            <p class="font-gotham-medium text-slate-600 text-sm w-28 text-right">12:30-1:00pm</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Lunch</h4>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <h5 id="mod-3" class="font-gotham-light text-xl text-blue scroll-mt-40">Module Topic 3: Anxiety</h5>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">1:00-1:20pm</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Assessment and Diagnosis</h4>
                                <a href class="font-gotham hover:text-blue transition">Nayla Khoury, MD</a>
                            </div>
                        </div>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">1:20-1:40pm</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Treatment</h4>
                                <a href class="font-gotham hover:text-blue transition">Zoya Popivker, DO</a>
                            </div>
                        </div>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">1:40-2:00pm</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Incorporation into Your Practice: Anxiety</h4>
                                <a href class="font-gotham hover:text-blue transition">Diane Bloomfield, MD</a>
                            </div>
                        </div>
                        <div class="flex gap-4 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">2:00-2:30pm</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Question & Answer</h4>
                                <div class="flex gap-2">
                                    <p class="font-gotham-medium text-slate-500 w-[90px] text-right mb-1">Moderator:</p>
                                    <div class="flex flex-col">
                                        <a href="#" class="font-gotham hover:text-blue transition">David Kaye, MD</a>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <p class="font-gotham-medium text-slate-500 w-[90px] text-right">Panelists:</p>
                                    <div class="flex flex-col gap-0.5">
                                        <a href="#" class="font-gotham hover:text-blue transition">Nayla Khoury, MD</a>
                                        <a href="#" class="font-gotham hover:text-blue transition">Zoya Popivker, MD</a>
                                        <a href="#" class="font-gotham hover:text-blue transition">Diane Bloomfield, MD</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-200/50 rounded-xl py-4 space-y-8">
                        <div class="flex gap-4">
                            <p class="font-gotham-medium text-slate-600 text-sm w-28 text-right">2:00-2:45pm</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Break</h4>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <h5 id="mod-4" class="font-gotham-light text-xl text-blue scroll-mt-40">Module Topic 4: Reimbursement & Implementation</h5>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">2:45-3:15pm</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Reimbursement & Implementation</h4>
                                <a href class="font-gotham hover:text-blue transition">Marc Lashley, MD</a>
                                <a href class="font-gotham hover:text-blue transition">Colleen Mattimore, MD</a>
                            </div>
                        </div>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">3:15-3:45pm</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Question & Answer</h4>
                                <a href class="font-gotham hover:text-blue transition">Marc Lashley, MD</a>
                                <a href class="font-gotham hover:text-blue transition">Colleen Mattimore, MD</a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-200/50 rounded-xl py-4 space-y-8">
                        <div class="flex gap-4">
                            <p class="font-gotham-medium text-slate-600 text-sm w-28 text-right">3:35pm</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Adjourn</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow" x-show="day2 === true">
                <div class="p-4 pb-0 bg-white rounded-xl mb-4 sticky top-16 flex">
                    <div class="flex items-center w-full justify-between p-4 bg-blue-200 rounded-lg shadow-sm">
                        <button class="group rounded-full hover:bg-blue transition opacity-0 pointer-events-none" :class="day2 === true && 'opacity-100 pointer-events-auto'" x-on:click="day1 = true, day2 = false">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-sky-600 group-hover:text-white transition w-6 h-6">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <h6 class="font-gotham-medium text-lg text-sky-600">Day 2 - Tuesday, November 6, 2023</h6>
                        <button class="group rounded-full hover:bg-blue transition opacity-0 pointer-events-none" :class="day1 === true && 'opacity-100 pointer-events-auto'" x-on:click="day2 = true, day1 = false">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-sky-600 group-hover:text-white transition w-6 h-6">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="space-y-8 p-4">
                    <div class="border border-slate-200 border-solid rounded-lg pb-5">
                        <h5 class="ml-2 px-2 inline-block bg-white font-gotham-light text-xl text-blue transform -translate-y-1/2">Introduction & Overview</h5>
                        <div class="flex gap-4 pt-1">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">8:30-8:45am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium mb-0.5">Welcome, Introduction of the Liaison Coordinators</h4>
                                <button @click="open = true" class="text-left font-gotham text-slate-500 hover:text-blue transition">Victor Fornari, MD</button>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <h5 id="mod-5" class="font-gotham-light text-xl text-blue scroll-mt-40">Module Topic 5: ADHD</h5>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">8:45-9:05am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Assessment and Diagnosis</h4>
                                <a href class="font-gotham hover:text-blue transition">Mike Scharf, MD</a>
                            </div>
                        </div>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">9:05-9:25am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Treatment</h4>
                                <a href class="font-gotham hover:text-blue transition">Carmel Foley, MD</a>
                            </div>
                        </div>
                        <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">9:25-9:40am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Incorporation into Your Practice: ADHD</h4>
                                <button @click="open = true" class="text-left font-gotham hover:text-blue transition">Maureen Montgomery, MD</button>
                            </div>
                        </div>
                        <div class="flex gap-4 pb-4">
                            <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">9:40-10:05am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Question & Answer</h4>
                                <div class="flex gap-2">
                                    <p class="font-gotham-medium text-slate-500 w-[90px] text-right mb-1">Moderator:</p>
                                    <div class="flex flex-col">
                                        <a href="#" class="font-gotham hover:text-blue transition">Victor Fornari, MD</a>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <p class="font-gotham-medium text-slate-500 w-[90px] text-right">Panelists:</p>
                                    <div class="flex flex-col gap-0.5">
                                        <a href="#" class="font-gotham hover:text-blue transition">Mike Scharf, MD</a>
                                        <button @click="open = true" class="text-left font-gotham hover:text-blue transition">Carmel Foley, MD</button>
                                        <a href="#" class="font-gotham hover:text-blue transition">Maureen Montgomery, MD</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-200/50 rounded-xl py-4 space-y-8">
                        <div class="flex gap-4">
                            <p class="font-gotham-medium text-slate-600 text-sm w-28 text-right">10:05-10:30am</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Break</h4>
                            </div>
                        </div>
                    </div>
                    <h5 id="mod-6" class="font-gotham-light text-xl text-blue scroll-mt-40">Module Topics 6: Aggression</h5>
                    <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                        <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">10:30-11:10am</p>
                        <div class="flex-1">
                            <h4 class="font-gotham-medium">Assessment</h4>
                            <a href class="font-gotham hover:text-blue transition">Wanda Fremont, MD</a>
                        </div>
                    </div>
                    <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                        <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">11:10-11:30am</p>
                        <div class="flex-1">
                            <h4 class="font-gotham-medium">Treatment</h4>
                            <a href class="font-gotham hover:text-blue transition">Breck Borcherding, MD</a>
                        </div>
                    </div>
                    <div class="flex gap-4 border-b border-solid border-slate-200 pb-4">
                        <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">11:30-11:50am</p>
                        <div class="flex-1">
                            <h4 class="font-gotham-medium">Incorporation into Your Practice: Aggression</h4>
                            <button @click="open = true" class="text-left font-gotham hover:text-blue transition">Maureen Montgomery, MD</button>
                        </div>
                    </div>
                    <div class="flex gap-4 pb-4">
                        <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">11:50-12:15</p>
                        <div class="flex-1">
                            <h4 class="font-gotham-medium">Question & Answer</h4>
                            <div class="flex gap-2">
                                <p class="font-gotham-medium text-slate-500 w-[90px] text-right mb-1">Moderator:</p>
                                <div class="flex flex-col">
                                    <a href="#" class="font-gotham hover:text-blue transition">James Wallace, MD</a>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <p class="font-gotham-medium text-slate-500 w-[90px] text-right">Panelists:</p>
                                <div class="flex flex-col gap-0.5">
                                    <a href="#" class="font-gotham hover:text-blue transition">Wanda Fremont, MD</a>
                                    <button @click="open = true" class="text-left font-gotham hover:text-blue transition">Breck Borcherding, MD</button>
                                    <a href="#" class="font-gotham hover:text-blue transition">Maureen Montgomery, MD</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-200/50 rounded-xl py-4 space-y-8">
                        <div class="flex gap-4">
                            <p class="font-gotham-medium text-slate-600 text-sm w-28 text-right">12:15pm</p>
                            <div class="flex-1">
                                <h4 class="font-gotham-medium">Adjourn</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="section7" class="section space-y-4 scroll-mt-20">
            <h6 class="font-gotham-medium text-lg">Follow-Up Session</h6>
            <p class="font-gotham-light text-lg">Attendees of the one and a half day intensive training event are eligible and encouraged to participate in six, follow-up learning sessions. During each session, you will have the opportunity to present cases, ask questions, and get direct feedback from faculty.</p>
            <p class="font-gotham-medium text-slate-600">All Follow Up Sessions take place from 12:00PM - 1:00PM</p>
            <a href="#" class="flex items-center gap-4 group rounded-xl overflow-hidden bg-white shadow">
                <div class="w-40">
                    <div class="relative">
                        <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-blue-200 text-blue text-sm font-bold rounded-full dropshadow-md">
                            Child
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div class="font-gotham-medium text-black transition group-hover:text-blue">
                        ADHD: What to Do When 1 Stimulant fails
                    </div>
                    <div class="text-gotham text-slate-500">Nov 21, 2023</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #27ae60;">Open</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-4 group rounded-xl overflow-hidden bg-white shadow">
                <div class="w-40">
                    <div class="relative">
                        <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-blue-200 text-blue text-sm font-bold rounded-full dropshadow-md">
                            Child
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div class="font-gotham-medium text-black transition group-hover:text-blue">
                        Unipolar/Bipolar Depression
                    </div>
                    <div class="text-gotham text-slate-500">Nov 28, 2023</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #27ae60;">Open</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-4 group rounded-xl overflow-hidden bg-white shadow">
                <div class="w-40">
                    <div class="relative">
                        <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-blue-200 text-blue text-sm font-bold rounded-full dropshadow-md">
                            Child
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div class="font-gotham-medium text-black transition group-hover:text-blue">
                        Suicide assessment and Management in Primary Care
                    </div>
                    <div class="text-gotham text-slate-500">Dec 5, 2023</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #27ae60;">Open</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-4 group rounded-xl overflow-hidden bg-white shadow">
                <div class="w-40">
                    <div class="relative">
                        <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-blue-200 text-blue text-sm font-bold rounded-full dropshadow-md">
                            Child
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div class="font-gotham-medium text-black transition group-hover:text-blue">
                        Eating Disorders in the age of COVID for Primary Care Clinicians
                    </div>
                    <div class="text-gotham text-slate-500">Dec 12, 2023</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #27ae60;">Open</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-4 group rounded-xl overflow-hidden bg-white shadow">
                <div class="w-40">
                    <div class="relative">
                        <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-blue-200 text-blue text-sm font-bold rounded-full dropshadow-md">
                            Child
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div class="font-gotham-medium text-black transition group-hover:text-blue">
                        Schooling in the Time of COVID
                    </div>
                    <div class="text-gotham text-slate-500">Dec 19, 2023</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #27ae60;">Open</div>
                </div>
            </a>
            <a href="#" class="flex items-center gap-4 group rounded-xl overflow-hidden bg-white shadow">
                <div class="w-40">
                    <div class="relative">
                        <div class="w-full absolute bg-gradient-to-bl from-black h-full transition duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full group-hover:opacity-0 right-0 top-0 transition duration-300 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-blue-200 text-blue text-sm font-bold rounded-full dropshadow-md">
                            Child
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg">
                    </div>
                </div>
                <div class="flex-1 flex flex-col gap-2">
                    <div class="font-gotham-medium text-black transition group-hover:text-blue">
                        Self-Injurious Behavior
                    </div>
                    <div class="text-gotham text-slate-500">Jan 3, 2024</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #27ae60;">Open</div>
                </div>
            </a>
        </div>
        <div id="section8" class="section space-y-4 scroll-mt-20">
            <h6 class="font-gotham-medium text-lg">Additional Resources</h6>
            <ul class="pl-6 list-disc space-y-4">
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2022/04/MMH-flyer-italics-1.pdf" target="_blank" class="font-gotham-medium text-blue hover:text-black transition">
                        Maternal Mental Health Services Flyer
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2020/10/Parent-Family-Member-Education-Card.pdf" target="_blank" class="font-gotham-medium text-blue hover:text-black transition">
                        Parent & Family Member Education Card
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2020/10/CTL-Flyer.pdf" target="_blank" class="font-gotham-medium text-blue hover:text-black transition">
                        Crisis Text Line
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2021/02/Credit-Claim-Intensive-Training-2021-updated.pdf" target="_blank" class="font-gotham-medium text-blue hover:text-black transition">
                        Credit Claim Instructions
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2022/04/Intro-Day-1-ProjectTEACH_Kaye-2022Final042222-16.pdf" target="_blank" class="font-gotham-medium text-blue hover:text-black transition">
                        Child and Adolescent Psychiatry (CAP) Team
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2022/04/Intro-Day-1-ProjectTEACH_Kaye-2022Final042222-17.pdf" target="_blank" class="font-gotham-medium text-blue hover:text-black transition">
                        PCP Champ Faculty
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2022/04/Intro-Day-1-ProjectTEACH_Kaye-2022Final042222-18.pdf" target="_blank" class="font-gotham-medium text-blue hover:text-black transition">
                        Maternal Mental Health (MMH) Team
                    </a>
                </li>
                <li class="font-gotham-light text-lg">
                    <a href="https://project-teach.launchpaddev.com/app/uploads/2022/04/Intro-Day-1-ProjectTEACH_Kaye-2022Final042222-19.pdf" target="_blank" class="font-gotham-medium text-blue hover:text-black transition">
                        Administrative, LCs and Specialty Psychiatrists
                    </a>
                </li>


            </ul>
        </div>
    </div>
    <!-- Modal -->
    <div class="mt-6" x-cloak>
        <div class="fixed z-50 top-0 left-0 w-full h-full flex items-center justify-center" style="background-color: rgba(0,0,0,.75);" x-show="open">
            <!-- Modal -->
            <div id="modal" class="max-w-3xl relative mx-auto bg-white p-4 rounded-xl" @click.away="open = false">
                <svg @click="open = false" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 cursor-pointer text-white hover:text-blue transition h-12 absolute top-0 right-0 -mr-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <div class="flex gap-8">
                    <div class="w-full md:w-1/3 space-y-4">
                        <div class="aspect-square bg-cover py-12 rounded-lg bg-center" style="background-image:url(https://project-teach.launchpaddev.com/app/uploads/2021/09/victor_fornari.jpg)"></div>
                        <div class="flex flex-col gap-2">
                            <h2 class="font-gotham-bold text-lg">Victor Fornari, MD</h2>
                            <p class="font-gotham-medium text-slate-500">Zucker Hillside Hospital, Northwell Health</p>
                            <div class="text-center">
                                <a href="/consultants/victor-fornari" class="py-2 block text-white font-gotham-bold text-center text-lg rounded-full bg-blue">More Info</a>
                            </div>
                            <!-- <p class="font-gotham-light">Vice Chair &amp; Director, Division of Child &amp; Adolescent Psychiatry, Zucker Hillside Hospital, Northwell Health</p> -->
                            <!-- <p class="font-gotham-light">Professor of Psychiatry &amp; Pediatrics, Zucker Hillside Hospital, Northwell Health</p> -->
                            <!-- <p class="font-gotham-light">Chief of Division, Child and Adolescent Psychiatry, Long Island Jewish Medical Center, Project TEACH</p> -->
                        </div>
                    </div>
                    <div class="relative">
                        <p class="bg-white absolute top-0 font-gotham left-0 ml-2 mt-4 text-slate-500 text-lg -translate-y-1/2 px-2">Presenting</p>
                        <div class="flex-1 border overflow-scroll max-h-[440px] border-slate-200 border-solid mt-4 rounded-lg pt-8 p-4">
                            <div class="pb-16">
                                <div class="mb-8">
                                    <h6 class="font-gotham-medium text-sm text-slate-500">Day 1 - Monday, November 5, 2023</h6>
                                    <h5 class="font-gotham text-lg text-blue scroll-mt-20">Module Topic 1: Trauma-Informed Care</h5>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex gap-4 border-b border-solid border-slate-200 pb-4 rounded-lg transition hover:bg-blue-200">
                                        <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">9:25-9:45am</p>
                                        <div class="flex-1">
                                            <h4 class="font-gotham-medium">Treatment</h4>
                                            <a href="" class="font-gotham hover:text-blue transition">Victor Fornari, MD</a>
                                        </div>
                                    </div>
                                    <div class="flex gap-4 border-b border-solid border-slate-200 pb-4 rounded-lg transition hover:bg-blue-200">
                                        <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">10:00-10:30am</p>
                                        <div class="flex-1">
                                            <h4 class="font-gotham-medium">Question &amp; Answer</h4>
                                            <div class="flex gap-2">
                                                <p class="font-gotham-medium text-slate-500 w-[90px] text-right mb-1">Moderator:</p>
                                                <div class="flex flex-col">
                                                    <a href="#" class="font-gotham hover:text-blue transition">Molly Scharf, MD</a>
                                                </div>
                                            </div>
                                            <div class="flex gap-2">
                                                <p class="font-gotham-medium text-slate-500 w-[90px] text-right">Panelists:</p>
                                                <div class="flex flex-col gap-0.5">
                                                    <a href="#" class="font-gotham hover:text-blue transition">Nayla Khoury, MD</a>
                                                    <a href="#" class="font-gotham hover:text-blue transition">Victor Fornari, MD</a>
                                                    <a href="#" class="font-gotham hover:text-blue transition">Amy Jerum, NP, DNP</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-8">
                                <h6 class="font-gotham-medium text-sm text-slate-500">Day 2 - Tuesday, November 6, 2023</h6>
                                <h5 class="font-gotham text-lg text-blue scroll-mt-20">Introduction & Overview</h5>
                            </div>
                            <div class="space-y-4 mb-8">
                                <div class="flex gap-4 border-b border-solid border-slate-200 pb-4 rounded-lg transition hover:bg-blue-200">
                                    <p class="font-gotham-medium text-slate-500 text-sm w-28 text-right">8:30-8:45am</p>
                                    <div class="flex-1">
                                        <h4 class="font-gotham-medium text-lg leading-tight">Welcome, Introduction of the Liaison Coordinators</h4>
                                        <a href="" class="font-gotham hover:text-blue transition">Victor Fornari, MD</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-8">
                                <h5 class="font-gotham text-lg text-blue scroll-mt-20">Module Topic 5: ADHD</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Legal -->
<div class="max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0 pb-16 space-y-8 space-y-8 space-y-8 space-y-8">
    <h3 class="font-gotham-medium text-xl">
        This Intensive Training for Primary Care Clinicians is at no cost to New York State Pediatric Primary Care Providers.
    </h3>
    <div class="grid md:grid-cols-2 gap-6">
        <div class="space-y-4">
            <p class="font-gotham-bold text-lg">Intensive Training Accreditation:</p>
            <p class="font-gotham-medium">ACCREDITATION:</p>
            <p class="font-gotham-light">The University at Buffalo Jacobs School of Medicine and Biomedical Sciences is accredited by the ACCME to provide continuing medical education for physicians.</p>
            <p class="font-gotham-medium">CERTIFICATION:</p>
            <p class="font-gotham-light">The University at Buffalo Jacobs School of Medicine and Biomedical Sciences designates this internet live activity for a maximum of <span class="font-gotham underline">9.0 AMA PRA Category 1 Credit(s)</span><span class="font-gotham"><sup>TM</sup></span>. Physicians should claim only the credit commensurate with the extent of their participation in the activity.</p>
            <p class="font-gotham-light">The UB CME Office will provide UB CME Certificates of Attendance to allied healthcare professionals or non-physicians, who have attended a UB CME certified and accredited educational activity. The allied healthcare professional is responsible for submitting the UB CME certificate to their own governing body for credit. Most allied healthcare professional boards accept Physician credits.</p>
        </div>
        <div class="space-y-4">
            <p class="font-gotham-bold text-lg">Follow-Up Session Accreditation:</p>
            <p class="font-gotham-medium">ACCREDITATION:</p>
            <p class="font-gotham-light">The University at Buffalo Jacobs School of Medicine and Biomedical Sciences is accredited by the ACCME to provide continuing medical education for physicians.</p>
            <p class="font-gotham-medium">CERTIFICATION:</p>
            <p class="font-gotham-light">The University at Buffalo Jacobs School of Medicine and Biomedical Sciences designates this internet live activity for a maximum of <span class="font-gotham underline">6.0 AMA PRA Category 1 Credit(s)</span><span class="font-gotham"><sup>TM</sup></span>. Physicians should claim only the credit commensurate with the extent of their participation in the activity.</p>
            <p class="font-gotham-light">The UB CME Office will provide UB CME Certificates of Attendance to allied healthcare professionals or non-physicians, who have attended a UB CME certified and accredited educational activity. The allied healthcare professional is responsible for submitting the UB CME certificate to their own governing body for credit. Most allied healthcare professional boards accept Physician credits.</p>
        </div>
    </div>
    <p class="font-gotham-light"><span class="font-gotham-medium">Credit Claim:</span> All registrants will receive online instructions on how to access the Project TEACH Learning Management System to receive CME credits and complete the evaluation form.</p>
</div>


<div class="max-w-screen-lg py-16 lg:max-w-screen-xl mx-auto px-4 md:px-0 flex flex-col md:flex-row">
    <!-- Post Content -->
    <div class="w-full md:w-1/3">
        <div class="mb-12 md:mb-0 border-b shadow-xl rounded-xl sticky top-[5rem]">
            <div class="aspect-square bg-cover py-12 rounded-t-xl bg-center" style="background-image:url(https://project-teach.launchpaddev.com/app/uploads/2021/09/victor_fornari.jpg)"></div>
            <div class="p-4 bg-white rounded-b-xl flex flex-col gap-4">
                <h2 class="font-gotham-bold text-xl">Victor Fornari, MD</h2>
                <p class="font-gotham-medium text-lg leading-6 text-slate-500">Zucker Hillside Hospital, Northwell Health</p>
                <p class="font-gotham-light">Vice Chair & Director, Division of Child & Adolescent Psychiatry, Zucker Hillside Hospital, Northwell Health</p>
                <p class="font-gotham-light">Professor of Psychiatry & Pediatrics, Zucker Hillside Hospital, Northwell Health</p>
                <p class="font-gotham-light">Chief of Division, Child and Adolescent Psychiatry, Long Island Jewish Medical Center, Project TEACH</p>
            </div>
        </div>
    </div>


    <div class="flex-1 md:pl-12" x-cloak x-data="{ section1: true, section2: false, section3: false, section4:false}">
        <!-- Pill Nav -->
        <div class="relative flex-1 justify-around pb-5 border-b border-slate-200 sm:pb-0">
            <div>
                <!-- Dropdown menu on small screens -->
                <div class="sm:hidden">
                    <label for="current-tab" class="sr-only">Select a tab</label>
                    <select id="current-tab" name="current-tab" class="block w-full pl-3 pr-10 py-2 text-base border-slate-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option>About</option>
                        <option>Events</option>
                        <option selected="">Resources</option>
                        <option>Courses</option>
                    </select>
                </div>
                <!-- Tabs at small breakpoint and up -->
                <div class="hidden sm:block bg-white rounded-xl shadow-xl">
                    <nav class="grid grid-cols-4 text-center">
                        <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-slate-500 hover:text-slate-700 hover:border-slate-300" -->
                        <button x-on:click="section1 = true, section2 = false, section3 = false, section4 = false" :class="section1 === true ? 'text-blue font-gotham-medium' : 'text-slate-500 font-gotham hover:text-slate-800'" class="p-4 border-r border-slate-200 border-solid">
                            About
                        </button>
                        <button x-on:click="section2 = true, section1 = false, section3 = false, section4 = false" :class="section2 === true ? 'text-blue font-gotham-medium' : 'text-slate-500 font-gotham hover:text-slate-800'" class="p-4 border-r border-slate-200 border-solid">
                            Events
                        </button>
                        <button x-on:click="section3 = true, section1 = false, section2 = false, section4 = false" :class="section3 === true ? 'text-blue font-gotham-medium' : 'text-slate-500 font-gotham hover:text-slate-800'" class="p-4 border-r border-slate-200 border-solid">
                            Resources
                        </button>
                        <button x-on:click="section4 = true, section1 = false, section2 = false, section3 = false" :class="section4 === true ? 'text-blue font-gotham-medium' : 'text-slate-500 font-gotham hover:text-slate-800'" class="p-4">
                            Courses
                        </button>
                    </nav>
                </div>
            </div>
        </div>
        <div x-show="section1 === true">
            <div class="flex items-center gap-2">
                <h4 class="font-gotham-bold text-slate-800 text-xl my-4">
                    Victor Fornari, MD
                </h4>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
                <h4 class="font-gotham-bold text-slate-800 text-xl my-4">
                    About
                </h4>
            </div>
            <div class="max-w-2xl space-y-4 pr-4">
                <p class="font-gotham-light text-lg">As a child and adolescent psychiatrist, I provide psychiatric care for children and adolescents as developing individuals and as members of a family, community and culture. I believe strongly in the adage “there is no health without mental health” and have committed my career to bettering the lives of children and adolescents in Western New York. Understanding the child comprehensively and addressing treatment broadly is fundamental to my approach. While medication management is an important part of what I do, I prescribe and manage medication within the context of the psychosocial needs of the child. As a result, I often address my patients’ needs by providing psychotherapy, family guidance and consultation about other fundamental aspects of the child’s life, particularly school.</p>
                <p class="font-gotham-light text-lg">In 2010, I led a team of five university-based child psychiatry programs to secure a major grant from the New York State Office of Mental Health, to provide education and consultation to primary care physicians across the state of New York. I am now the medical director for the national model program made possible by this collaboration, the Child and Adolescent Psychiatry for Primary Care (CAP PC) program-the second largest in the nation of the 24 programs of its type. As such, I devote significant time collaborating with primary care physicians to increase their skills in assessing and managing pediatric mental health problems. The unique collaboration within the CAP PC network includes the original five university divisions of child and adolescent psychiatry and provides education and consultation support to primary care providers statewide. The goal of the program is to meet the public health need for greater access to mental health care via primary care. I am currently involved in research on the impact of CAP PC and receive grant support from the New York State Office of Mental Health.</p>
                <p class="font-gotham-light text-lg">I serve as the vice chair for academic affairs in the Department of Psychiatry. In this role, I am closely involved in the educational programs of the department and in recruiting and developing our faculty. I teach and supervise residents and medical students in outpatient settings and provide lectures to these trainees as well. In addition, I mentor residents and early career faculty, and I often write journal articles and chapters with them. My areas of academic interest include psychiatric education, psychotherapy and collaboration with primary care.</p>
            </div>
        </div>
        <div x-show="section2 === true">
            <div class="flex items-center gap-2">
                <h4 class="font-gotham-bold text-slate-800 text-xl my-4">
                    Victor Fornari, MD
                </h4>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
                <h4 class="font-gotham-bold text-slate-800 text-xl my-4">
                    Events
                </h4>
            </div>
            <?php
            if ($post_query->have_posts()) :
                echo '<h4 class="font-gotham-bold text-xl mb-4">Posts By <span class="text-blue">' . get_the_title() . '</span></h4>';
                while ($post_query->have_posts()) : $post_query->the_post();
                    include(locate_template('templates/archives/post.php', false, false));
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            <div class="flex items-center gap-4 bg-white rounded-xl shadow-xl">
                <a class="group w-40" href=" https://lms.projectteachny.org/CMHWenduring1 ">
                    <div class="relative rounded-l-xl overflow-hidden">
                        <div class="w-full absolute bg-gradient-to-bl from-black h-full transition-all duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full right-0 top-0 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-blue-200 text-blue text-sm font-bold rounded-full dropshadow-md">
                            Child
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2022/03/izzy-park-kOTplk22W0w-unsplash-1.jpg">
                    </div>
                </a>
                <div class="flex-1 flex flex-col gap-2">
                    <a href="https://lms.projectteachny.org/CMHWenduring1" class="font-gotham-medium text-black transition hover:text-blue">
                        Impact of COVID Pandemic on Youth Mental Health and Lessons Learned
                    </a>
                    <div class="text-gotham text-slate-500">Apr 19, 2022 @ 7:00 pm - 8:00 pm</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #ae0000;">Closed</div>
                </div>
            </div>
        </div>
        <div x-show="section3 === true">
            <div class="flex items-center gap-2">
                <h4 class="font-gotham-bold text-slate-800 text-xl my-4">
                    Victor Fornari, MD
                </h4>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
                <h4 class="font-gotham-bold text-slate-800 text-xl my-4">
                    Resources
                </h4>
            </div>
            <div class="flex items-center gap-4">
                <a class="group w-40" href=" https://lms.projectteachny.org/CMHWenduring1 ">
                    <div class="relative rounded-xl overflow-hidden">
                        <div class="w-full absolute bg-gradient-to-bl rounded-lg from-black h-full transition-all duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full right-0 top-0 mb-2 text-right mt-2 mr-2 flex items-center gap-1">
                            <p class="bg-purple-200 text-purple text-sm font-bold px-2 text-sm rounded-full dropshadow-md">Maternal</p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 bg-purple-200 text-purple rounded-full dropshadow-md p-1">
                                <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"></path>
                            </svg>
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://project-teach.launchpaddev.com/app/uploads/2023/08/Black-midwife-feeling-and-measuring-pregnant-womans-stomach-for-exam-1296x728-header-1.jpg.webp">
                    </div>
                </a>
                <div class="flex-1 flex flex-col gap-2">
                    <a href="https://lms.projectteachny.org/CMHWenduring1" class="font-gotham-medium text-black hover:text-blue">
                        Hemorrhagic and Traumatic Births
                    </a>
                    <div class="">
                        <span class="font-gotham-bold text-sm mb-2 mr-px uppercase text-purple">Tags:</span><a href="https://project-teach.launchpaddev.com/pt_resources/?keyword=&amp;format%5B%5D=trauma" class="text-sm text-black font-gotham transtion duration-300 hover:text-purple">Trauma</a>
                    </div>
                </div>
            </div>
        </div>
        <div x-show="section4 === true">
            <div class="flex items-center gap-2">
                <h4 class="font-gotham-bold text-slate-800 text-xl my-4">
                    Victor Fornari, MD
                </h4>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
                <h4 class="font-gotham-bold text-slate-800 text-xl my-4">
                    Courses
                </h4>
            </div>
            <div class="flex items-center gap-4">
                <a class="group w-40" href=" https://lms.projectteachny.org/CMHWenduring1 ">
                    <div class="relative rounded-xl overflow-hidden">
                        <div class="w-full absolute bg-gradient-to-bl rounded-lg from-black h-full transition-all duration-300 group-hover:opacity-0"></div>
                        <div class="absolute height-full right-0 top-0 mb-2 px-2 text-sm text-right mt-2 mr-2 bg-blue-200 text-blue text-sm font-bold rounded-full dropshadow-md">
                            Child
                        </div>
                        <img class="aspect-[4/3] object-cover" src="https://projectteachny.org/app/uploads/2023/07/child-course-300.jpg">
                    </div>
                </a>
                <div class="flex-1 flex flex-col gap-2">
                    <a href="https://lms.projectteachny.org/CMHWenduring1" class="font-gotham-medium text-black hover:text-blue">
                        Accessing Services Through OPWDD: The Role of the Primary Care Clinician
                    </a>
                    <div class="text-gotham text-slate-500">Feb 21, 2023 - Jan 1, 2026</div>
                    <div class="font-gotham-bold text-sm uppercase" style="color: #27ae60;">Open</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    /*
		Intersection Observer for Services sidebar
	**/
    const sections = document.querySelectorAll(".section");
    const filterWrapCollection = window.document.querySelector(".section-wrap");

    if (filterWrapCollection) {
        let filterWrap = Array.from(filterWrapCollection.children);
        const options = {
            root: null,
            threshold: 0,
            rootMargin: "-5% 0px -80% 0px",
        };

        const observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    entry.target.classList.remove("opacity-100");
                    return;
                }
                entry.target.classList.add("opacity-100");
                newFunction(entry.target.id, filterWrap);
            });
        }, options);

        sections.forEach((section) => {
            observer.observe(section);
        });

        function newFunction(needle, haystack) {
            console.log(needle)

            haystack.map((item) => {
                let style = "text-blue";
                item.children[0].classList.add("text-slate-500");
                item.children[0].classList.add("font-gotham");
                item.children[0].classList.remove("font-gotham-medium");
                item.children[0].classList.remove(style);
                if (item.children[0].dataset.filter === needle) {
                    item.children[0].classList.remove("text-slate-500");
                    item.children[0].classList.remove("font-gotham");
                    item.children[0].classList.add("font-gotham-medium");
                    item.children[0].classList.add(style);
                }
            });
        }
    }
</script>
<?php require_once('footer.php'); ?>