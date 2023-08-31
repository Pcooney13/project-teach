<?php
require_once('header.php');
// require(dirname(__FILE__) . "/breadcrumbs.php");
?>

<!-- Floating Block -->
<div class="relative py-16">
    <!-- BG color change -->
    <!-- <div class="hidden md:block absolute bg-slate-100 h-full w-full" style="transform:translateY(50%); background-color:rgb(241 245 249);"></div> -->
    <div class="relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0">
        <div class="relative rounded-xl overflow-hidden shadow-xl">
            <div class="absolute h-full w-full bg-cover bg-right bg-no-repeat" style="background-image: url('https://projectteachny.org/app/uploads/2020/10/Untitled-2.jpg'); background-size: 86%; background-position: 250%, 0%;"></div>
            <div class="absolute h-full w-full bg-gradient-to-r from-white via-white"></div>
            <div class="relative mt-auto pl-6 py-8 md:w-1/2">
                <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-orange">Vision</p>
                <p class="font-gotham-light text-lg leading-7 mb-4">A New York State where children and families receive skillful, prompt and compassionate care for mental health conditions.</p>
                <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-orange">Mission</p>
                <p class="font-gotham-light text-lg leading-7 mb-4">To strengthen and support the ability of New York's Maternal Health and Pediatric Primary Care Providers (PCPs) to deliver care to children and families who experience mild-to-moderate mental health concerns.</p>
                <a class="border-solid border-2 border-orange mb-12 font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-orange bg-orange" title="Learn More About OMH" href="/faqs">
                    Learn More about Project TEACH
                </a>
            </div>
        </div>
    </div>
</div>

<!-- 6 blocks -->
<div class="py-16 max-w-screen-lg lg:max-w-screen-xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-4 md:px-0">
        <div class="relative rounded-xl flex justify-center items-center overflow-hidden">
            <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-purple">What We Provide to Maternal and Pediatric Primary Care Clinicians</h2>
        </div>
        <?php
        $text = [
            'Telephone consultations for mild-to-moderate mental health concerns',
            'Direct face-to-face consultations for selected pediatric patients',
            'CME-certified training on how to assess, treat and manage mental health concerns',
            'Referrals to mental health professionals and community resources across the state',
            'Linkage to key resources that your patients and their families need in their communities'
        ];
        $svg = [
            '<svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 stroke-2 md:stroke-[1.5] text-blue" viewBox=" 0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                    <path d="M15 7a2 2 0 0 1 2 2"></path>
                    <path d="M15 3a6 6 0 0 1 6 6"></path>
                </svg>',
            '<svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 stroke-2 md:stroke-[1.5] text-blue" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                </svg>',
            '<svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 stroke-2 md:stroke-[1.5] text-blue" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                    <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path>
                    <path d="M6 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path>
                </svg>',
            '<svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 stroke-2 md:stroke-[1.5] text-blue" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9.183 6.117a6 6 0 1 0 4.511 3.986"></path>
                    <path d="M14.813 17.883a6 6 0 1 0 -4.496 -3.954"></path>
                </svg>',
            '<svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 stroke-2 md:stroke-[1.5] text-blue" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"></path>
                    <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"></path>
                </svg>'
        ]
        ?>
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <div class="bg-white border-2 border-solid border-blue relative rounded-xl overflow-hidden shadow-xl">
                <div class="relative p-4 flex flex-col h-full">
                    <div class="flex-1 w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                        <?php echo $svg[$i]; ?>
                    </div>
                    <div class="mt-auto flex-1 flex flex-col">
                        <p class="font-gotham-light text-base mb-4"><?php echo $text[$i]; ?></p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
<!-- Floating Block -->
<div class="relative py-16">
    <!-- BG color change -->
    <!-- <div class="hidden md:block absolute bg-slate-100 h-full w-full" style="transform:translateY(50%); background-color:rgb(241 245 249);"></div> -->
    <div class="relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0">
        <div class="relative rounded-xl overflow-hidden shadow-xl">
            <div class="absolute h-full w-full bg-cover bg-right bg-no-repeat" style="background-image: url('https://project-teach.launchpaddev.com/app/uploads/2021/03/medical-physician-doctor-man-1-scaled.jpg'); background-size: 86%; background-position: 110%, 0%;"></div>
            <div class="absolute h-full w-full bg-gradient-to-r from-white via-white"></div>
            <div class="relative mt-auto pl-6 py-8 md:w-1/2">
                <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-purple">Project TEACH is a program funded by the New York State Office of Mental Health (OMH).</p>
                <p class="font-gotham-light text-lg leading-7 mb-4">OMH operates psychiatric centers across the State, and also regulates, licenses and oversees more than 4,500 programs, which are operated by local governments and nonprofit agencies. These programs include various inpatient and outpatient programs, emergency services, community support, residential and family care programs.</p>
                <a class="border-solid border-2 border-purple mb-12 font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-purple bg-purple" title="Learn More About OMH" target="https://www.omh.ny.gov/">
                    Learn More About OMH
                </a>
            </div>
        </div>
    </div>
</div>

<!-- 3 blocks -->
<div class="py-16 max-w-screen-lg lg:max-w-screen-xl mx-auto">
    <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-blue">About Project Teach</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4 md:px-0">
        <div class="md:aspect-square relative rounded-xl overflow-hidden shadow-xl">
            <div class="absolute h-full w-full bg-cover bg-right" style="background-image:url('https://projectteachny.org/app/uploads/2020/10/provider-resource-1.jpg')">
            </div>
            <div class="absolute h-full w-full bg-blue" style="opacity:85%"></div>
            <div class="absolute h-full w-full" style="background:linear-gradient(rgba(3, 159, 218, 0), rgba(3, 159, 218, 1))"></div>
            <div class="relative p-4 flex flex-col text-white h-full">
                <div class="flex-1 w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-purple md:text-white" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-white truncate leading-tight">Clinical Team</p>
                    <p class="font-gotham-light text-base mb-4">View our clinical team</p>
                    <div class="mt-auto mb-2">
                        <a class="border-solid border-2 border-blue font-gotham-bold inline-block no-underline text-blue rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/consultation">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:aspect-square relative rounded-xl overflow-hidden shadow-xl">
            <div class="absolute h-full w-full bg-cover bg-center" style="background-image:url('https://projectteachny.org/app/uploads/2017/09/better-health-bg.jpg')"></div>
            <div class="absolute h-full w-full bg-purple" style="opacity:85%"></div>
            <div class="absolute h-full w-full" style="background:linear-gradient(rgba(62, 13, 133, 0), rgba(62, 13, 133, 1))"></div>
            <div class="relative p-4 flex flex-col text-white h-full">
                <div class="flex-1 w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-purple md:text-white" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 21l18 0" />
                        <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
                        <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                        <path d="M10 9l4 0" />
                        <path d="M12 7l0 4" />
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-white truncate leading-tight">Hub Sites</p>
                    <p class="font-gotham-light text-base mb-4">Project TEACH has 7 hubs so that every region of New York state has a team that is known to the practitioners in that area</p>
                    <div class="mt-auto mb-2">
                        <a class="border-solid border-2 border-purple font-gotham-bold inline-block no-underline text-purple rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/referrals">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:aspect-square relative rounded-xl overflow-hidden shadow-xl">
            <div class="absolute h-full w-full bg-cover bg-center" style="background-image:url('https://projectteachny.org/app/uploads/2022/02/Screen-Shot-2021-04-08-at-4.39.13-PM.png')">
            </div>
            <div class="absolute h-full w-full bg-green" style="opacity:85%"></div>
            <div class="absolute h-full w-full" style="background:linear-gradient(rgba(123, 191, 67, 0), rgba(123, 191, 67, 1))"></div>
            <div class="relative p-4 flex flex-col text-white h-full">
                <div class="flex-1 w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-orange md:text-white" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                        <path d="M12 16v.01"></path>
                        <path d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483"></path>
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-white truncate leading-tight">FAQs</p>
                    <p class="font-gotham-light text-base mb-4">Find answers in the Frequently Asked Questions section.</p>
                    <div class="mt-4 mb-2">
                        <a class="border-solid border-2 border-green font-gotham-bold inline-block no-underline text-green rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/faqs">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>