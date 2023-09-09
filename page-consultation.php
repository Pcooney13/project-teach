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
            <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-blue">Real Time Consultations</h2>
            <p class="font-gotham-bold text-purple text-lg mb-2">Speak with child and adolescent psychiatrists or reproductive psychiatrists</p>
            <p class="font-gotham-light leading-7 mb-4 text-lg">
                Project TEACH is free for all pediatric primary care clinicians and Ob/Gyns and other primary care clinicians treating women with maternal mental health concerns. Pediatricians, family physicians, Ob/GYNs, internists, psychiatrists and nurse practitioners are encouraged to call.
            </p>
            <a class="border-solid border-2 border-purple font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-purple bg-purple" title="learn more about consultations" href="/get-involved/">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 inline mb-px">
                    <path fill-rule="evenodd" d="M15 3.75a.75.75 0 01.75-.75h4.5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0V5.56l-4.72 4.72a.75.75 0 11-1.06-1.06l4.72-4.72h-2.69a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                </svg>
                Call us at 855-227-7272
            </a>
        </div>
    </div>
</div>
<!-- 3 blocks -->
<div class="py-16 max-w-screen-lg lg:max-w-screen-xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-4 md:px-0">
        <div class="md:aspect-square relative rounded-xl overflow-hidden shadow-xl">
            <div class="absolute h-full w-full bg-cover bg-right" style="background-image:url('https://projectteachny.org/app/uploads/2020/10/provider-resource-1.jpg')">
            </div>
            <div class="absolute h-full w-full bg-blue" style="opacity:85%"></div>
            <div class="absolute h-full w-full" style="background:linear-gradient(rgba(3, 159, 218, 0), rgba(3, 159, 218, 1))"></div>
            <div class="relative p-4 flex flex-col text-white h-full">
                <div class="w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-blue md:text-white" viewBox=" 0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M18 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M2 5h2.5l1.632 4.897a6 6 0 0 0 5.693 4.103h2.675a5.5 5.5 0 0 0 0 -11h-.5v6" />
                        <path d="M6 9h14" />
                        <path d="M9 17l1 -3" />
                        <path d="M16 14l1 3" />
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-white leading-tight">Maternal Consultations</p>
                    <p class="font-gotham text-lg mb-4">Maternal Mental Health Consultations</p>
                    <div class="mt-auto mb-2">
                        <a class="border-solid border-2 border-blue font-gotham-bold inline-block no-underline text-blue rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/specialty-consultation/">
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
                <div class="w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-purple md:text-white" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M9 10l.01 0" />
                        <path d="M15 10l.01 0" />
                        <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                        <path d="M12 3a2 2 0 0 0 0 4" />
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-white leading-tight">Child Consultations</p>
                    <p class="font-gotham text-lg mb-4">Child Mental Health Consultations</p>
                    <div class="mt-auto mb-2">
                        <a class="border-solid border-2 border-purple font-gotham-bold inline-block no-underline text-purple rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/specialty-consultation/">
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
                <div class="w-10 h-10 md:w-auto md:h-auto bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-orange md:text-white" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1" />
                    </svg>
                </div>
                <div class="mt-auto flex-1 flex flex-col">
                    <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-white leading-tight">Child Sub-Specialty Consultations</p>
                    <p class="font-gotham text-lg mb-4">Child Sub-Specialty Mental Health Consultations</p>
                    <div class="mt-auto mb-2">
                        <a class="border-solid border-2 border-green font-gotham-bold inline-block no-underline text-green rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/specialty-consultation/">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>