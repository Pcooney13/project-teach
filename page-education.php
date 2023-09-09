<?php
require_once('header.php');
// require(dirname(__FILE__) . "/breadcrumbs.php");
?>

<!-- map section -->
<div class="py-16">
    <div class="relative flex flex-col md:flex-row items-center max-w-screen-xl mx-auto">
        <div class="w-full order-0 md:order-1 md:w-1/2 pr-8">
            <div class="pt-map relative w-full flex-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/new-pt-map-text-expanded.svg">
            </div>
        </div>
        <div class="w-full order-1 md:order-1 md:w-1/2 pl-8">
            <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-blue">CME-Certified Education on Maternal and Children's Mental Health</h2>
            <p class="font-gotham-bold text-purple text-lg mb-2">Find training that fits your schedule and enhances your ability to care for those you serve.</p>
            <p class="font-gotham-light leading-7 mb-4 text-lg">
                Project TEACH offers training in several different formats for primary care clinicians (PCC) covering child and adolescent mental health as well as maternal mental health. These programs target your ability to assess, treat, and manage mild-to-moderate mental health concerns in your practice.
            </p>
        </div>
    </div>
</div>
<div class="pb-16 max-w-screen-lg lg:max-w-screen-xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4 md:px-0">
        <div class="relative rounded-xl overflow-hidden shadow-xl">
            <div class="absolute h-full w-full bg-cover bg-right" style="background-image:url('https://projectteachny.org/app/uploads/2020/10/provider-resource-1.jpg')">
            </div>
            <div class="absolute h-full w-full bg-blue" style="opacity:85%"></div>
            <div class="absolute h-full w-full" style="background:linear-gradient(rgba(3, 159, 218, 0), rgba(3, 159, 218, 1))"></div>
            <div class="relative p-4 flex flex-col text-white h-full">
                <div class="w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-blue md:text-white" viewBox=" 0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                        <path d="M15 7a2 2 0 0 1 2 2"></path>
                        <path d="M15 3a6 6 0 0 1 6 6"></path>
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-white leading-tight">Pediatric Core Trainings</p>
                    <p class="font-gotham text-base mb-4">The core trainings in child and adolescent mental health are offered virtually, on site at your practice, or at a community location. Contact us to schedule a training for your practice.</p>
                    <div class="mt-auto mb-2">
                        <a class="text-sm border-solid border-2 border-blue font-gotham-bold inline-block no-underline text-blue rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/contact-us">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative rounded-xl overflow-hidden shadow-xl">
            <div class="absolute h-full w-full bg-cover bg-center" style="background-image:url('https://projectteachny.org/app/uploads/2017/09/better-health-bg.jpg')"></div>
            <div class="absolute h-full w-full bg-purple" style="opacity:85%"></div>
            <div class="absolute h-full w-full" style="background:linear-gradient(rgba(62, 13, 133, 0), rgba(62, 13, 133, 1))"></div>
            <div class="relative p-4 flex flex-col text-white h-full">
                <div class="w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-purple md:text-white" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9.183 6.117a6 6 0 1 0 4.511 3.986"></path>
                        <path d="M14.813 17.883a6 6 0 1 0 -4.496 -3.954"></path>
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-white truncate leading-tight">Online Training</p>
                    <p class="font-gotham text-base mb-4">Project TEACH provides access to on-demand content through its online learning management system. Sessions focus on a variety of topics related to mental health in children and youth.</p>
                    <div class="mt-auto mb-2">
                        <a class="text-sm border-solid border-2 border-purple font-gotham-bold inline-block no-underline text-purple rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/courses">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative rounded-xl overflow-hidden shadow-xl">
            <div class="absolute h-full w-full bg-cover bg-center" style="background-image:url('https://projectteachny.org/app/uploads/2022/02/Screen-Shot-2021-04-08-at-4.39.13-PM.png')">
            </div>
            <div class="absolute h-full w-full bg-green" style="opacity:85%"></div>
            <div class="absolute h-full w-full" style="background:linear-gradient(rgba(123, 191, 67, 0), rgba(123, 191, 67, 1))"></div>
            <div class="relative p-4 flex flex-col text-white h-full">
                <div class="w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-orange md:text-white" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path>
                        <path d="M6 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                        <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path>
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-white truncate leading-tight">Intensive Trainings</p>
                    <p class="font-gotham text-base mb-4">Project TEACH also offers specialized, in-depth programs in each region. These trainings address how to recognize, assess, and manage mild-to-moderate mental health concerns in children and adolescents.</p>
                    <div class="mt-4 mb-2">
                        <div class="flex flex-col gap-2 text-center">
                            <a class="text-sm border-solid border-2 border-green font-gotham-bold inline-block no-underline text-green rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/education-overview">
                                View Upcoming Maternal Intensive Training
                            </a>
                            <a class="text-sm border-solid border-2 border-green font-gotham-bold inline-block no-underline text-green rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/education-overview">
                                View Upcoming Child Intensive Training
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>