<?php require_once('header.php'); ?>

<!-- Old Hero -->
<!-- <div class="relative">
        <div class="absolute h-full w-full bg-cover bg-center" style="background-image: url('https://projectteachny.org/app/uploads/2017/09/better-health-bg.jpg')"></div>
        <div class="absolute h-full w-full bg-gradient-to-r from-white opacity-75"></div>
        <div class="hero-dimensions max-w-screen-lg lg:max-w-screen-xl mx-auto z-10 relative text-white mx-auto flex flex-col justify-center px-4">
            <div class="max-w-screen-md">
                <h1 class="text-3xl md:text-5xl text-purple m-0 leading-8 mt-12 mb-4 font-bold">Families Thrive with <br>Good Mental Health</h1>
                <div class="w-2/3 text-black">
                    <p>Supporting maternal health and pediatric clinicians to deliver quality mental health care in New York State.</p>
                </div>
                <a style="text-decoration: none;" class="mt-8 mb-8 border-solid border-2 md:uppercase md:tracking-wider border-blue font-bold inline-block no-underline text-purple rounded-full px-4 md:px-8 py-2 md:py-4 transition-all duration-300 hover:bg-transparent hover:text-blue bg-blue hover:border-blue" href="/get-involved">Get Involved</a>
            </div>
        </div>
    </div> -->

<?php
// $hero_classes = 'flex flex-col md:flex-row items-center';
// $bg_color = get_field('background_color');
// $accent_color = get_field('accent_color');
// $padding = get_field('padding');
// $title = get_field('title');
// $text = get_field('text');
// $button_field = get_field('button');
// $image = get_field('image');
// if ($button_field) {
//     $button = '<div class="mt-8">
//         <a class="border-solid border-2 border-blue font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-blue bg-blue" title="learn more about consultations" href="'. $button_field['url'] .'">'.
//             $button_field['title'] .
//         '</a>
//     </div>';
// }

// // Hero
// echo '
// <div class="' . $padding . ' ' . $bg_color . '">
//     <div class="relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0 ' . $hero_classes . '">
//         <div class="w-full order-1 md:order-1 md:w-1/2 md:pr-8 mt-4 md:mt-0">
//             <div class="flex flex-col gap-2">
//                 <p class="text-2xl md:text-5xl md:leading-[3rem] font-gotham-bold text-purple">' .
//                     $title .
//                 '</p>
//                 <div class="font-gotham-light leading-7 text-lg">' .
//                     $text .
//                 '</div>
//             </div>' . 
//             $button .            
//         '</div>
//         <div class="w-full order-0 md:order-1 md:w-1/2">
//             <div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3] shadow-xl">
//                 <img class="h-full w-full object-cover" src="'. $image. '">
//             </div>
//         </div>
//     </div>
// </div>';
?>

<!-- Carousel Hero -->
<style>
    .splide__progress__bar {
        background: #38BDF8;
        height: 6px
    }

    .splide__pagination {
        position: relative;
    }

    .splide__pagination__page.is-active {
        background: #a0aec0;
    }

    .splide__toggle {
        position: absolute;
        margin: 0.25rem;
        right: 0;
        top: 0;
    }
</style>

<section class="py-16 bg-white">
    <div class="splide  max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0 ">
        <div class="splide__track relative">
            <ul class="splide__list">
                <li class="splide__slide" data-color="#38BDF8">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-full order-1 md:order-1 md:w-1/2 md:pr-8 mt-4 md:mt-0">
                            <div class="flex flex-col gap-2">
                                <p class="text-2xl md:text-5xl md:leading-[3rem] font-gotham-bold text-black">
                                    <span class="text-blue block mb-1">Child Providers</span> Thrive with Good Mental Health
                                </p>
                                <p class="font-gotham-light leading-7 text-lg">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe assumenda vero quod consectetur nostrum est sequi dicta quia ex.
                                </p>
                            </div>
                            <div class="mt-8">
                                <a class="border-solid border-2 border-blue font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-blue bg-blue" title="learn more about consultations" href="/provider-resources/">
                                    More Info
                                </a>
                            </div>
                        </div>
                        <div class="w-full order-0 md:order-1 md:w-1/2">
                            <div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3]">
                                <img class="h-full w-full object-cover" src="https://project-teach.launchpaddev.com/app/uploads/2023/08/p4863-fe1ecb34-0715-4e02-bf0c-bb64009e6ca3.jpg">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide" data-color="#5B21B6">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-full order-1 md:order-1 md:w-1/2 md:pr-8 mt-4 md:mt-0">
                            <div class="flex flex-col gap-2">
                                <p class="text-2xl md:text-5xl md:leading-[3rem] font-gotham-bold text-black">
                                    <span style="color:#5B21B6" class="block mb-1">Maternal Providers</span> Thrive with Good Mental Health
                                </p>
                                <p class="font-gotham-light leading-7 text-lg">
                                    Supporting maternal health and pediatric clinicians to deliver quality mental health care in New York State.
                                </p>
                            </div>
                            <div class="mt-8">
                                <a class="border-solid border-2 border-purple font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-purple bg-purple" title="learn more about consultations" href="/mmh">
                                    More Info
                                </a>
                            </div>
                        </div>
                        <div class="w-full order-0 md:order-1 md:w-1/2">
                            <div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3]">
                                <img class="h-full w-full object-cover" src="https://projectteachny.org/app/uploads/2023/04/image001.jpg">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide" data-color="#7bbf43">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="w-full order-1 md:order-1 md:w-1/2 md:pr-8 mt-4 md:mt-0">
                            <div class="flex flex-col gap-2">
                                <p class="text-2xl md:text-5xl md:leading-[3rem] font-gotham-bold text-black">
                                    <span class="text-green block mb-1">Parents & Families</span> Thrive with Good Mental Health
                                </p>
                                <p class="font-gotham-light leading-7 text-lg">
                                    Consectetur adipisicing elit. Saepe assumenda vero quod consectetur nostrum est sequi dicta quia ex, distinctio optio nobis molestiae nesciunt tempore itaque hic! Officia.
                                </p>
                            </div>
                            <div class="mt-8">
                                <a class="border-solid border-2 border-green font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-green bg-green" title="learn more about consultations" href="/get-involved">
                                    More Info
                                </a>
                            </div>
                        </div>
                        <div class="w-full order-0 md:order-1 md:w-1/2">
                            <div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3]">
                                <img class="h-full w-full object-cover" src="https://project-teach.launchpaddev.com/app/uploads/2023/08/Two-families-with-daughters-sitting-on-lawn-901214910_5472x3648-e1538354191369.jpeg">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="aspect-[5/3] w-full absolute md:relative top-0 rounded-xl overflow-hidden md:overflow-visible md:aspect-auto flex flex-col md:flex-row md:h-auto">
                <div class="md:flex-1"></div>
                <div class="splide__progress flex-1 h-8 rounded-xl overflow-hidden md:-translate-y-8 transition">
                    <div class="splide__progress__bar absolute bottom-0">
                    </div>
                </div>
            </div>
            <button class="splide__toggle" type="button">
                <span class="splide__toggle__play">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="text-white w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                    </svg>
                </span>
                <span class="splide__toggle__pause">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="text-white w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9v6m-4.5 0V9M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
            </button>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        let time_count = 6000

        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 1,
            autoplay: true,
            interval: time_count,
            resetProgress: false,
            speed: 500,
            gap: '2rem',
            arrows: false,
        });
        var bar = splide.root.querySelector('.splide__progress__bar');
        let colors = ['#38BDF8', '#5B21B6', '#7bbf43']
        // Update the bar color
        splide.on('mounted move', function(newIndex, prevIndex, destIndex) {
            console.log(newIndex);
            bar.style.background = colors[newIndex % 3];
        });

        splide.mount();

        let togglePlay = document.querySelector('.splide__toggle__play')
        let togglePause = document.querySelector('.splide__toggle__pause')
        let slideProgress = document.querySelector('.splide__progress')
        let pagination = document.querySelector('.splide__pagination__page')

        console.log('TODO: fix clicking of pagination dots (pause play button)')

        togglePlay.addEventListener('click', function() {
            console.log('play')
            slideProgress.classList.add('opacity-100')
            slideProgress.classList.remove('opacity-0')
        })
        togglePause.addEventListener('click', function() {
            console.log('pause')
            slideProgress.classList.add('opacity-0')
            slideProgress.classList.remove('opacity-100')
        })
    });
</script>

<!-- Static Hero -->
<!-- <div class="py-16 bg-white">
    <div class="relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0 flex flex-col md:flex-row items-center">
        <div class="w-full order-1 md:order-1 md:w-1/2 md:pr-8 mt-4 md:mt-0">
            <div class="flex flex-col gap-2">
                <p class="text-2xl md:text-5xl md:leading-[3rem] font-gotham-bold text-purple">
                    Families Thrive with <br class="hidden md:block">Good Mental Health
                </p>
                <p class="font-gotham-light leading-7 text-lg">
                    Supporting maternal health and pediatric clinicians to deliver quality mental health care in New York State.
                </p>
            </div>
            <div class="mt-8">
                <a class="border-solid border-2 border-blue font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-blue bg-blue" title="learn more about consultations" href="/get-involved">
                    Get Involved
                </a>
            </div>
        </div>
        <div class="w-full order-0 md:order-1 md:w-1/2">
            <div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3] shadow-xl">
                <img class="h-full w-full object-cover" src="https://project-teach.launchpaddev.com/app/uploads/2023/08/p4863-fe1ecb34-0715-4e02-bf0c-bb64009e6ca3.jpg">
            </div>
        </div>
    </div>
</div> -->

<!-- 3 blocks -->
<div class="py-16">
    <div class="relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:px-0">
            <div class="md:aspect-square relative rounded-xl overflow-hidden shadow-xl">
                <div class="absolute h-full w-full bg-cover bg-right" style="background-image:url('https://projectteachny.org/app/uploads/2020/10/provider-resource-1.jpg')">
                </div>
                <div class="absolute h-full w-full bg-blue" style="opacity:85%"></div>
                <div class="absolute h-full w-full" style="background:linear-gradient(rgba(3, 159, 218, 0), rgba(3, 159, 218, 1))"></div>
                <div class="relative p-4 flex flex-col text-white h-full">
                    <div class="w-10 h-10 md:w-auto md:h-auto md:flex-1 bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-blue md:text-white" viewBox=" 0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            <path d="M15 7a2 2 0 0 1 2 2" />
                            <path d="M15 3a6 6 0 0 1 6 6" />
                        </svg>
                    </div>
                    <div class="mt-auto flex-1 flex flex-col">
                        <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-white truncate leading-tight">Consultations</p>
                        <p class="font-gotham-light text-base mb-4 md:mb-0">Speak to a child and adolescent psychiatrist or a reproductive psychiatrist for consultation about your patients.</p>
                        <div class="mt-auto mb-2">
                            <a class="border-solid border-2 border-blue font-gotham-bold inline-block no-underline text-blue rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/consultation">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:aspect-square relative rounded-xl overflow-hidden shadow-xl">
                <div class="absolute h-full w-full bg-cover bg-center" style="background-image:url('https://projectteachny.org/app/uploads/2017/09/better-health-bg.jpg')"></div>
                <div class="absolute h-full w-full bg-purple" style="opacity:85%"></div>
                <div class="absolute h-full w-full" style="background:linear-gradient(rgba(62, 13, 133, 0), rgba(62, 13, 133, 1))"></div>
                <div class="relative p-4 flex flex-col text-white h-full">
                    <div class="w-10 h-10 md:w-auto md:h-auto md:flex-1 bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-purple md:text-white" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" />
                            <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" />
                        </svg>
                    </div>
                    <div class="mt-auto flex-1 flex flex-col">
                        <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-white truncate leading-tight">Referrals</p>
                        <p class="font-gotham-light text-base mb-4 md:mb-0">Link your patients to the resources they need in their communities.</p>
                        <div class="mt-auto mb-2">
                            <a class="border-solid border-2 border-purple font-gotham-bold inline-block no-underline text-purple rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/referrals">Learn More</a>
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
                    <div class="w-10 h-10 md:w-auto md:h-auto md:flex-1 bg-white rounded-full md:bg-transparent p-2 md:p-0 mb-4 md:mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:w-12 md:h-12 md:ml-auto stroke-2 md:stroke-[1.5] text-green md:text-white" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5" />
                            <path d="M6 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5" />
                        </svg>
                    </div>
                    <div class="mt-auto flex-1">
                        <p class="text-2xl md:text-3xl mb-2 font-gotham-bold text-white truncate leading-tight">Education</p>
                        <p class="font-gotham-light text-base mb-4 md:mb-0">Find training and education on topics relevant to child/adolescent and maternal mental health in your practice.</p>
                        <div class="mt-4 mb-2">
                            <a class="border-solid border-2 border-green font-gotham-bold inline-block no-underline text-green rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-white bg-white hover:border-white" title="learn more about consultations" href="/education">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Consultation -->
<div class="">
    <div class="relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0">
        <div class="relative rounded-xl overflow-hidden shadow-xl">
            <div class="md:absolute h-full w-full md:bg-[length:75%] bg-center md:bg-[190%_0%] aspect-video md:aspect-none bg-cover bg-no-repeat" style="
                    background-image: url('https://projectteachny.org/app/uploads/2017/09/consulation-improve-health-bg.jpg'); 
                ">
            </div>
            <div class="hidden md:block absolute h-full w-full bg-gradient-to-r from-white via-white"></div>
            <div class="relative mt-auto px-4 md:px-4 py-8 md:w-1/2 bg-white md:py-16">
                <div class="flex flex-col gap-2">
                    <h2 class="text-2xl md:text-3xl font-gotham-bold text-purple">Consultations That Improve Health</h2>
                    <p class="font-gotham-bold text-lg text-blue">Help children and adolescents find good health.</p>
                    <p class="font-gotham-light text-lg leading-7">Call for a consultation today. Speak directly to a child and adolescent psychiatrist. Enhance the care you provide to kids with mild-to-moderate mental health concerns. Or set up face-to-face consultations for patients to meet directly with experts.</p>
                </div>
                <div class="mt-8">
                    <a class="border-solid border-2 border-purple font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-purple bg-purple" title="learn more about consultations" href="/consultations">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- map section -->
<div class="py-16">
    <div class="relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0 flex flex-col md:flex-row items-center">
        <div class="w-full order-1 md:order-1 md:w-1/2 md:pr-8 mt-4 md:mt-0">
            <p class="text-2xl md:text-3xl mb-2 font-gotham-bold">Get Involved</h2>
            <p class="font-gotham-bold mb-2 text-lg">It is easy to use Project TEACH services.</p>
            <p class="font-gotham-light text-lg leading-7 mb-4">
                Talk to a Child and Adolescent Psychiatrist or a Reproductive Psychiatrist within 30 minutes. Simply call <a href="tel:8552277272" class="inline font-gotham text-blue transition-all duration-300 hover:text-black">855-227-7272</a>.
            </p>
            <p class="font-gotham-light text-lg leading-7 mb-8">
                For general questions about the program email <a class="text-blue font-gotham transition-all duration-300 hover:text-black" href="mailto:info@projectteachny.org">info@projectteachny.org</a> and we will respond within two business days.
            </p>
            <a class="border-solid border-2 border-purple font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-purple bg-purple" title="learn more about consultations" href="/get-involved/">Learn More</a>
        </div>
        <div class="w-full order-0 md:order-1 md:w-1/2 md:pl-8">
            <div class="pt-map relative w-full flex-1">
                <img class="-ml-1 md:ml-0" src="<?php echo get_template_directory_uri(); ?>/assets/images/new-pt-map-text-expanded.svg">
            </div>
        </div>
    </div>
</div>

<!-- Training -->
<div class="pb-16">
    <div class="relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0">
        <div class="relative rounded-xl overflow-hidden shadow-xl">
            <div class="md:absolute h-full w-full md:bg-[length:85%] bg-center md:bg-[190%_0%] aspect-video md:aspect-none bg-cover bg-no-repeat" style="background-image: url('https://projectteachny.org/app/uploads/2020/10/Untitled-1.jpg'); "></div>
            <div class="hidden md:block absolute h-full w-full bg-gradient-to-r from-white via-white"></div>
            <div class="relative mt-auto px-4 md:px-4 py-8 md:w-1/2 bg-white">
                <div class="flex flex-col gap-2">
                    <h2 class="text-2xl md:text-3xl font-gotham-bold text-purple">Need Training and CME?</h2>
                    <p class="font-gotham-light text-lg leading-7">Project TEACH offers training in several different formats for providers who treat children and adolescents or mothers/birthing persons. These programs target your ability to assess, treat, and manage mild-to-moderate mental health concerns in your practice.</p>
                    <p class="font-gotham-bold text-lg text-green">Pediatric Core Trainings</p>
                    <p class="font-gotham-light text-lg leading-7">The core trainings in child and adolescent mental health are offered virtually, on site at your practice, or at a community location. Core trainings are 5-hour CME programs covering a variety of key and common mental health topics seen regularly in primary care.</p>
                </div>
                <div class="mt-8">
                    <a class="border-solid border-2 border-purple font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-purple bg-purple" title="learn more about consultations" target="/">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Search -->
<section>
    <div class="text-center py-20 bg-blue">
        <p class="text-2xl md:text-3xl mb-8 font-gotham-bold text-white">Search & Connect</p>
        <form class="max-w-screen-md mx-auto relative" role="search" method="get" action="/">
            <input id="searchtextBox_2" class="bg-white rounded-full h-20 text-xl p-6 w-full" placeholder="Type to search" value="<?php echo get_search_query(); ?>" name="s" type="search" tabindex="3" />
            <button class="absolute text-white right-0 bg-purple w-16 h-16 mt-2 mr-2 rounded-full transition-all duration-500 hover:bg-white hover:text-blue" type="submit" title="Search" tabindex="4">
                <svg class="ml-4 w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </form>
    </div>
</section>

<!-- download materials -->
<?php if (false) : ?>
    <section>
        <div class="relative">
            <div class="bg-cover" style="background-image:url('https://projectteachny.org/wp-content/themes/project-teach/assets/images/home-bg-downloads.jpg')">
                <div class="absolute flex bg-black h-full flex-col justify-center bg-cover w-full top-0 opacity-75"></div>
                <div class="m-auto w-full max-w-screen-lg p-4 py-12 relative z-50">
                    <h4 class="text-white font-bold leading-tight text-4xl md:text-5xl">Download Project TEACH Materials</h4>
                    <p class="mb-6 leading-normal text-white text-2xl">Project TEACH’s mission is to strengthen and support pediatric primary care providers (PCPs) and maternal health providers in their care of children and families who experience mild-to-moderate mental health concerns.</p>
                    <div class="md:grid grid-cols-3 grid-rows-1 gap-6">
                        <!-- 1 -->
                        <div class="flex md:flex-col mb-4 md:mb-0">
                            <a href="https://projectteachny.org/wp-content/uploads/2019/10/ProjectTEACH_Handout_Nov2017.pdf" target="_blank" class="hidden md:block bg-blue w-full p-4 text-white transition-all duration-500 hover:bg-white hover:text-blue">
                                <svg class="fill-current w-1/2 mx-auto" viewBox="0 0 595.04 764.8">
                                    <path class="cls-1" d="M325,768.7s-164.5,16.8-122.5-7.3,77.8-43.1,77.8-43.1-70.6,14.1-90.1,14.9-50-18.3-8-34.3,83.2-28.6,83.2-28.6,8.4-16-11.4-11.4-96.2,15.3-96.2,15.3-34.3-19.5,15.6-34c50-14.1,19.1-69.5-4.6-94.3-8.8-9.5-46.2-60.3-90.1-114.1C7.5,343.9-48.2,206.9,75.8,78.3,114,39,223.9-10.2,321.2,64.2c0,0-195.8-83.2-276.3,135.5,0,0-38.2,88.9,55.3,201.9L193,521.8s33.2,44.6,31.7,92.4L217.4,636s98.1-35.9,82,7.3c0,0,46.2,1.5,9.9,29l-16,13s-3.1,8.8,17.2,8.8,42,5.7,7.3,31.7l-30.1,16s-1.5,8.8,22.9,5.7C311.3,746.5,325,745.4,325,768.7Z" transform="translate(-2.46 -9.6)" />
                                    <polygon id="SVGID" class="cls-1" points="416.44 97.4 480.14 0 505.74 35.9 434.74 108.4 416.44 97.4" />
                                    <polygon id="SVGID-2" data-name="SVGID" class="cls-1" points="462.64 176.7 591.24 112.2 595.04 156.1 472.94 195.8 462.64 176.7" />
                                    <polygon id="SVGID-3" data-name="SVGID" class="cls-1" points="465.64 272.9 581.34 284 561.84 322.9 464.54 294.3 465.64 272.9" />
                                    <polygon id="SVGID-4" data-name="SVGID" class="cls-1" points="433.24 350.4 527.14 419.1 493.54 467.1 421.44 367.9 433.24 350.4" />
                                    <path class="cls-2" d="M422,256.5A180.57,180.57,0,0,1,275.5,433.9a16.94,16.94,0,0,1,.8-7.6,4.15,4.15,0,0,0,0-3.1c-1.1-3.1-3.8-4.2-5.7-5.7-1.1-.8-1.5-1.5-.8-2.7,1.9-4.6,3.1-9.2,4.6-13.7s5-7.3,10.3-4.6c4.6,2.3,9.5,2.7,14.1,3.4,8.8,1.1,17.6,0,25.9-1.1,6.9-.8,13.4-9.2,12.2-15.3-.8-4.2,0-6.9,3.1-9.9,2.7-3.1,5-6.5,3.1-11.1-.4-.8,0-.8.4-1.1,5-3.8,6.9-8.8,7.6-14.9.4-3.1,1.5-6.1,5-7.3a15.64,15.64,0,0,0,9.9-8c3.1-5,3.1-9.2-1.9-12.6s-9.2-7.6-11.4-13.7c0-.4-.4-1.1-.4-1.5-.8-3.4-1.9-6.9-1.9-10.7s.8-4.6,4.6-4.6c2.7,0,5.3-1.5,8.4-3.1-11.8,0-11.1-3.4-10.3-4.6a62.7,62.7,0,0,1,5-8.8,13.56,13.56,0,0,0,3.4-7.6c.8-3.1.8-6.1,1.1-9.2,2.3-13,1.5-25.9-3.4-38.2a43.59,43.59,0,0,1-1.9-5.3,1.82,1.82,0,0,1,2.3-2.3,96,96,0,0,1,9.5,5,2.15,2.15,0,0,0-.4-1.5c-1.1-1.5-.8-2.3.4-4.2.8-1.5,1.5-3.8,2.7-5.3a1.24,1.24,0,0,0-.4-.8c-1.9-1.9,0-2.3,1.1-3.1,1.5-.8,3.8-.4,5-2.3a31.69,31.69,0,0,0-3.8-2.3c-1.1-.4-1.1-1.1-.4-1.9,3.1-5,3.1-5-2.7-6.5-1.5-.4-1.5-1.1-.8-2.3a12.92,12.92,0,0,0,2.7-6.1c.4-1.5.4-2.7-1.9-1.9-1.5.4-3.4,0-5.3,0-1.5,0-2.7-.4-1.9-2.3.4-1.5,0-2.3-1.5-2.3-1.9-.4-4.2-1.1-6.1-1.5a37.73,37.73,0,0,1-3.8-1.5c-2.3-1.5-4.6-1.9-6.5-3.4.4-1.5,2.3-1.1,2.7-3.1-6.9,0-12.6-3.8-18.3-6.5-1.1-.4-2.7-.8-3.1-1.5-.8-1.5.8-2.3,1.5-3.4s-.4-1.1-.8-1.1a39.37,39.37,0,0,1-7.3-2.7c-4.6-1.9-9.5-2.7-13.7-4.6-.8-.4-4.2,1.1-1.5-1.9-.8-.4,0-1.5-1.1-1.9-1.5-.4-1.5-1.1-1.1-2.3s.4-2.3-1.5-1.9c-4.6.4-8.8-1.1-12.6-2.3-12.6-4.2-25.2-7.3-38.5-8.4-3.4-.4-7.3-.8-11.1-1.5.8-1.5,1.5-2.7,2.3-4.2.4-1.1,0-2.3-1.5-1.9a6.26,6.26,0,0,1-3.8.4c-2.7-1.5-5-.8-7.6,0-4.2,1.1-8.8,1.9-13.4,2.7.4-1.9,2.7-2.3,3.4-4.6-8,3.1-16,1.5-24,1.9a10.66,10.66,0,0,0-3.8.8c-8,2.7-16.4,5-23.7,9.2-.4.4-.4.4-.8,0v-.4c.4-.4,1.1-.8.8-1.9-3.8,1.9-6.9,4.6-10.3,7.3-.4.4-.4.8-.8.4-.8-.4,0-.8,0-1.1.4-.8,1.1-1.9,1.5-2.7-3.1,1.1-5,3.4-6.9,5.3-.8.8-.8,3.8-2.7,1.1,0,0-.8,0-.8.4-1.1,1.1-2.7,1.9-2.7,4.2,0,1.5-.8,3.1-1.5,5-.4,1.5-1.1,1.5-2.3.8-2.3-1.1-4.2-2.3-6.9-3.4,0,1.1-.4,1.9-.4,2.7,0,1.9-.8,1.9-2.3,1.1s-3.1-1.5-5-2.3c.8,3.4,1.5,6.1,2.3,9.2.4,1.9.4,3.1-1.9,3.4a3.29,3.29,0,0,0-2.7,2.7,10,10,0,0,1-2.3,4.6,2.78,2.78,0,0,0-.8,1.5c1.1,2.7-1.1,4.2-2.3,6.1-.8,1.5-1.9,3.1,0,5,.8.8.4,1.5,0,2.3-1.1,1.5-3.1,1.9-3.4,3.8-2.7,7.3-5,14.9-5.7,22.5-1.1,11.1-1.1,22.5-1.5,34-.8,14.5,3.1,27.9,9.5,40.8,3.4,7.3,8.8,13.4,12.2,20.6,1.9,3.8,3.4,7.6,5.7,11.1,3.8,6.1,7.6,11.8,11.4,18.3,3.1,5,5.7,10.3,9.5,14.9,3.1,4.2,7.6,5.7,12.2,6.5,3.1.4,5.3,1.5,6.9,4.6a59.12,59.12,0,0,1,6.1,21,45.48,45.48,0,0,1-1.9,17.6,3.23,3.23,0,0,1-1.9,1.9c-6.5,2.7-11.8,7.3-16.4,12.6-2.3,2.7-4.2,5.3-6.5,8-55.7-31.9-93.4-91-93.4-159C61,156.9,141.9,76,241.5,76S422,156.9,422,256.5Z" transform="translate(-2.46 -9.6)" />
                                </svg>
                            </a>
                            <div class="flex flex-col bg-white w-full h-full p-4 ">
                                <a href="https://projectteachny.org/wp-content/uploads/2019/10/ProjectTEACH_Handout_Nov2017.pdf" target="_blank" class="text-blue hover:text-blue hover:opacity-75 transition-all duration-300 font-bold text-xl mb-4">
                                    Project TEACH Flyer
                                </a>
                                <p class="leading-relaxed mb-4">
                                    Project TEACH provides ongoing support to PCPs and OBGYNs to better the mental health status of children and mothers.
                                </p>
                                <a class="flex justify-end md:justify-center items-center mt-auto text-center md:border-solid md:border-2 uppercase transition-all duration-300 hover:text-blue hover:opacity-75 md:hover:opacity-100 tracking-wider md:border-blue font-bold inline-block no-underline text-blue rounded-full md:px-8 md:py-4 transition-all duration-300 md:hover:bg-blue md:hover:text-white bg-transparent" href="https://projectteachny.org/wp-content/uploads/2019/10/ProjectTEACH_Handout_Nov2017.pdf" target="_blank">
                                    Learn More
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-6 w-6 md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="flex md:flex-col mb-4 md:mb-0">
                            <a href="https://projectteachny.org/wp-content/uploads/2021/12/MMH-handout_122421.pdf" target="_blank" class="hidden md:block bg-purple w-full p-4 text-white transition-all duration-500 hover:bg-white hover:text-purple">
                                <svg class="fill-current w-1/2 mx-auto" viewBox="0 0 595.04 764.8">
                                    <path class="cls-1" d="M325,768.7s-164.5,16.8-122.5-7.3,77.8-43.1,77.8-43.1-70.6,14.1-90.1,14.9-50-18.3-8-34.3,83.2-28.6,83.2-28.6,8.4-16-11.4-11.4-96.2,15.3-96.2,15.3-34.3-19.5,15.6-34c50-14.1,19.1-69.5-4.6-94.3-8.8-9.5-46.2-60.3-90.1-114.1C7.5,343.9-48.2,206.9,75.8,78.3,114,39,223.9-10.2,321.2,64.2c0,0-195.8-83.2-276.3,135.5,0,0-38.2,88.9,55.3,201.9L193,521.8s33.2,44.6,31.7,92.4L217.4,636s98.1-35.9,82,7.3c0,0,46.2,1.5,9.9,29l-16,13s-3.1,8.8,17.2,8.8,42,5.7,7.3,31.7l-30.1,16s-1.5,8.8,22.9,5.7C311.3,746.5,325,745.4,325,768.7Z" transform="translate(-2.46 -9.6)" />
                                    <polygon id="SVGID" class="cls-1" points="416.44 97.4 480.14 0 505.74 35.9 434.74 108.4 416.44 97.4" />
                                    <polygon id="SVGID-2" data-name="SVGID" class="cls-1" points="462.64 176.7 591.24 112.2 595.04 156.1 472.94 195.8 462.64 176.7" />
                                    <polygon id="SVGID-3" data-name="SVGID" class="cls-1" points="465.64 272.9 581.34 284 561.84 322.9 464.54 294.3 465.64 272.9" />
                                    <polygon id="SVGID-4" data-name="SVGID" class="cls-1" points="433.24 350.4 527.14 419.1 493.54 467.1 421.44 367.9 433.24 350.4" />
                                    <path class="cls-2" d="M422,256.5A180.57,180.57,0,0,1,275.5,433.9a16.94,16.94,0,0,1,.8-7.6,4.15,4.15,0,0,0,0-3.1c-1.1-3.1-3.8-4.2-5.7-5.7-1.1-.8-1.5-1.5-.8-2.7,1.9-4.6,3.1-9.2,4.6-13.7s5-7.3,10.3-4.6c4.6,2.3,9.5,2.7,14.1,3.4,8.8,1.1,17.6,0,25.9-1.1,6.9-.8,13.4-9.2,12.2-15.3-.8-4.2,0-6.9,3.1-9.9,2.7-3.1,5-6.5,3.1-11.1-.4-.8,0-.8.4-1.1,5-3.8,6.9-8.8,7.6-14.9.4-3.1,1.5-6.1,5-7.3a15.64,15.64,0,0,0,9.9-8c3.1-5,3.1-9.2-1.9-12.6s-9.2-7.6-11.4-13.7c0-.4-.4-1.1-.4-1.5-.8-3.4-1.9-6.9-1.9-10.7s.8-4.6,4.6-4.6c2.7,0,5.3-1.5,8.4-3.1-11.8,0-11.1-3.4-10.3-4.6a62.7,62.7,0,0,1,5-8.8,13.56,13.56,0,0,0,3.4-7.6c.8-3.1.8-6.1,1.1-9.2,2.3-13,1.5-25.9-3.4-38.2a43.59,43.59,0,0,1-1.9-5.3,1.82,1.82,0,0,1,2.3-2.3,96,96,0,0,1,9.5,5,2.15,2.15,0,0,0-.4-1.5c-1.1-1.5-.8-2.3.4-4.2.8-1.5,1.5-3.8,2.7-5.3a1.24,1.24,0,0,0-.4-.8c-1.9-1.9,0-2.3,1.1-3.1,1.5-.8,3.8-.4,5-2.3a31.69,31.69,0,0,0-3.8-2.3c-1.1-.4-1.1-1.1-.4-1.9,3.1-5,3.1-5-2.7-6.5-1.5-.4-1.5-1.1-.8-2.3a12.92,12.92,0,0,0,2.7-6.1c.4-1.5.4-2.7-1.9-1.9-1.5.4-3.4,0-5.3,0-1.5,0-2.7-.4-1.9-2.3.4-1.5,0-2.3-1.5-2.3-1.9-.4-4.2-1.1-6.1-1.5a37.73,37.73,0,0,1-3.8-1.5c-2.3-1.5-4.6-1.9-6.5-3.4.4-1.5,2.3-1.1,2.7-3.1-6.9,0-12.6-3.8-18.3-6.5-1.1-.4-2.7-.8-3.1-1.5-.8-1.5.8-2.3,1.5-3.4s-.4-1.1-.8-1.1a39.37,39.37,0,0,1-7.3-2.7c-4.6-1.9-9.5-2.7-13.7-4.6-.8-.4-4.2,1.1-1.5-1.9-.8-.4,0-1.5-1.1-1.9-1.5-.4-1.5-1.1-1.1-2.3s.4-2.3-1.5-1.9c-4.6.4-8.8-1.1-12.6-2.3-12.6-4.2-25.2-7.3-38.5-8.4-3.4-.4-7.3-.8-11.1-1.5.8-1.5,1.5-2.7,2.3-4.2.4-1.1,0-2.3-1.5-1.9a6.26,6.26,0,0,1-3.8.4c-2.7-1.5-5-.8-7.6,0-4.2,1.1-8.8,1.9-13.4,2.7.4-1.9,2.7-2.3,3.4-4.6-8,3.1-16,1.5-24,1.9a10.66,10.66,0,0,0-3.8.8c-8,2.7-16.4,5-23.7,9.2-.4.4-.4.4-.8,0v-.4c.4-.4,1.1-.8.8-1.9-3.8,1.9-6.9,4.6-10.3,7.3-.4.4-.4.8-.8.4-.8-.4,0-.8,0-1.1.4-.8,1.1-1.9,1.5-2.7-3.1,1.1-5,3.4-6.9,5.3-.8.8-.8,3.8-2.7,1.1,0,0-.8,0-.8.4-1.1,1.1-2.7,1.9-2.7,4.2,0,1.5-.8,3.1-1.5,5-.4,1.5-1.1,1.5-2.3.8-2.3-1.1-4.2-2.3-6.9-3.4,0,1.1-.4,1.9-.4,2.7,0,1.9-.8,1.9-2.3,1.1s-3.1-1.5-5-2.3c.8,3.4,1.5,6.1,2.3,9.2.4,1.9.4,3.1-1.9,3.4a3.29,3.29,0,0,0-2.7,2.7,10,10,0,0,1-2.3,4.6,2.78,2.78,0,0,0-.8,1.5c1.1,2.7-1.1,4.2-2.3,6.1-.8,1.5-1.9,3.1,0,5,.8.8.4,1.5,0,2.3-1.1,1.5-3.1,1.9-3.4,3.8-2.7,7.3-5,14.9-5.7,22.5-1.1,11.1-1.1,22.5-1.5,34-.8,14.5,3.1,27.9,9.5,40.8,3.4,7.3,8.8,13.4,12.2,20.6,1.9,3.8,3.4,7.6,5.7,11.1,3.8,6.1,7.6,11.8,11.4,18.3,3.1,5,5.7,10.3,9.5,14.9,3.1,4.2,7.6,5.7,12.2,6.5,3.1.4,5.3,1.5,6.9,4.6a59.12,59.12,0,0,1,6.1,21,45.48,45.48,0,0,1-1.9,17.6,3.23,3.23,0,0,1-1.9,1.9c-6.5,2.7-11.8,7.3-16.4,12.6-2.3,2.7-4.2,5.3-6.5,8-55.7-31.9-93.4-91-93.4-159C61,156.9,141.9,76,241.5,76S422,156.9,422,256.5Z" transform="translate(-2.46 -9.6)" />
                                </svg>
                            </a>
                            <div class="flex flex-col bg-white w-full h-full p-4 ">
                                <a href="https://projectteachny.org/wp-content/uploads/2021/12/MMH-handout_122421.pdf" target="_blank" class="text-purple hover:text-purple hover:opacity-75 transition-all duration-300 font-bold text-xl mb-4">
                                    Maternal Mental Health Flyer
                                </a>
                                <p class="leading-relaxed mb-4">
                                    Mental Health Resources to support Pregnant and Postpartum Women. Free consultations, videos, referrals and more.
                                </p>
                                <a class="flex justify-end md:justify-center items-center mt-auto text-center md:border-solid md:border-2 uppercase transition-all duration-300 hover:text-purple hover:opacity-75 md:hover:opacity-100 tracking-wider md:border-purple font-bold inline-block no-underline text-purple rounded-full md:px-8 md:py-4 transition-all duration-300 md:hover:bg-purple md:hover:text-white bg-transparent" href="https://projectteachny.org/wp-content/uploads/2021/12/MMH-handout_122421.pdf" target="_blank">
                                    Learn More
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-6 w-6 md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="flex md:flex-col mb-4 md:mb-0">
                            <a href="https://projectteachny.org/wp-content/uploads/2019/11/ProjectTEACH_Parent_Flyer_Nov20171.pdf" target="_blank" class="hidden md:block bg-green w-full p-4 text-white transition-all duration-500 hover:bg-white hover:text-green">
                                <svg class="fill-current w-1/2 mx-auto" viewBox="0 0 595.04 764.8">
                                    <path class="cls-1" d="M325,768.7s-164.5,16.8-122.5-7.3,77.8-43.1,77.8-43.1-70.6,14.1-90.1,14.9-50-18.3-8-34.3,83.2-28.6,83.2-28.6,8.4-16-11.4-11.4-96.2,15.3-96.2,15.3-34.3-19.5,15.6-34c50-14.1,19.1-69.5-4.6-94.3-8.8-9.5-46.2-60.3-90.1-114.1C7.5,343.9-48.2,206.9,75.8,78.3,114,39,223.9-10.2,321.2,64.2c0,0-195.8-83.2-276.3,135.5,0,0-38.2,88.9,55.3,201.9L193,521.8s33.2,44.6,31.7,92.4L217.4,636s98.1-35.9,82,7.3c0,0,46.2,1.5,9.9,29l-16,13s-3.1,8.8,17.2,8.8,42,5.7,7.3,31.7l-30.1,16s-1.5,8.8,22.9,5.7C311.3,746.5,325,745.4,325,768.7Z" transform="translate(-2.46 -9.6)" />
                                    <polygon id="SVGID" class="cls-1" points="416.44 97.4 480.14 0 505.74 35.9 434.74 108.4 416.44 97.4" />
                                    <polygon id="SVGID-2" data-name="SVGID" class="cls-1" points="462.64 176.7 591.24 112.2 595.04 156.1 472.94 195.8 462.64 176.7" />
                                    <polygon id="SVGID-3" data-name="SVGID" class="cls-1" points="465.64 272.9 581.34 284 561.84 322.9 464.54 294.3 465.64 272.9" />
                                    <polygon id="SVGID-4" data-name="SVGID" class="cls-1" points="433.24 350.4 527.14 419.1 493.54 467.1 421.44 367.9 433.24 350.4" />
                                    <path class="cls-2" d="M422,256.5A180.57,180.57,0,0,1,275.5,433.9a16.94,16.94,0,0,1,.8-7.6,4.15,4.15,0,0,0,0-3.1c-1.1-3.1-3.8-4.2-5.7-5.7-1.1-.8-1.5-1.5-.8-2.7,1.9-4.6,3.1-9.2,4.6-13.7s5-7.3,10.3-4.6c4.6,2.3,9.5,2.7,14.1,3.4,8.8,1.1,17.6,0,25.9-1.1,6.9-.8,13.4-9.2,12.2-15.3-.8-4.2,0-6.9,3.1-9.9,2.7-3.1,5-6.5,3.1-11.1-.4-.8,0-.8.4-1.1,5-3.8,6.9-8.8,7.6-14.9.4-3.1,1.5-6.1,5-7.3a15.64,15.64,0,0,0,9.9-8c3.1-5,3.1-9.2-1.9-12.6s-9.2-7.6-11.4-13.7c0-.4-.4-1.1-.4-1.5-.8-3.4-1.9-6.9-1.9-10.7s.8-4.6,4.6-4.6c2.7,0,5.3-1.5,8.4-3.1-11.8,0-11.1-3.4-10.3-4.6a62.7,62.7,0,0,1,5-8.8,13.56,13.56,0,0,0,3.4-7.6c.8-3.1.8-6.1,1.1-9.2,2.3-13,1.5-25.9-3.4-38.2a43.59,43.59,0,0,1-1.9-5.3,1.82,1.82,0,0,1,2.3-2.3,96,96,0,0,1,9.5,5,2.15,2.15,0,0,0-.4-1.5c-1.1-1.5-.8-2.3.4-4.2.8-1.5,1.5-3.8,2.7-5.3a1.24,1.24,0,0,0-.4-.8c-1.9-1.9,0-2.3,1.1-3.1,1.5-.8,3.8-.4,5-2.3a31.69,31.69,0,0,0-3.8-2.3c-1.1-.4-1.1-1.1-.4-1.9,3.1-5,3.1-5-2.7-6.5-1.5-.4-1.5-1.1-.8-2.3a12.92,12.92,0,0,0,2.7-6.1c.4-1.5.4-2.7-1.9-1.9-1.5.4-3.4,0-5.3,0-1.5,0-2.7-.4-1.9-2.3.4-1.5,0-2.3-1.5-2.3-1.9-.4-4.2-1.1-6.1-1.5a37.73,37.73,0,0,1-3.8-1.5c-2.3-1.5-4.6-1.9-6.5-3.4.4-1.5,2.3-1.1,2.7-3.1-6.9,0-12.6-3.8-18.3-6.5-1.1-.4-2.7-.8-3.1-1.5-.8-1.5.8-2.3,1.5-3.4s-.4-1.1-.8-1.1a39.37,39.37,0,0,1-7.3-2.7c-4.6-1.9-9.5-2.7-13.7-4.6-.8-.4-4.2,1.1-1.5-1.9-.8-.4,0-1.5-1.1-1.9-1.5-.4-1.5-1.1-1.1-2.3s.4-2.3-1.5-1.9c-4.6.4-8.8-1.1-12.6-2.3-12.6-4.2-25.2-7.3-38.5-8.4-3.4-.4-7.3-.8-11.1-1.5.8-1.5,1.5-2.7,2.3-4.2.4-1.1,0-2.3-1.5-1.9a6.26,6.26,0,0,1-3.8.4c-2.7-1.5-5-.8-7.6,0-4.2,1.1-8.8,1.9-13.4,2.7.4-1.9,2.7-2.3,3.4-4.6-8,3.1-16,1.5-24,1.9a10.66,10.66,0,0,0-3.8.8c-8,2.7-16.4,5-23.7,9.2-.4.4-.4.4-.8,0v-.4c.4-.4,1.1-.8.8-1.9-3.8,1.9-6.9,4.6-10.3,7.3-.4.4-.4.8-.8.4-.8-.4,0-.8,0-1.1.4-.8,1.1-1.9,1.5-2.7-3.1,1.1-5,3.4-6.9,5.3-.8.8-.8,3.8-2.7,1.1,0,0-.8,0-.8.4-1.1,1.1-2.7,1.9-2.7,4.2,0,1.5-.8,3.1-1.5,5-.4,1.5-1.1,1.5-2.3.8-2.3-1.1-4.2-2.3-6.9-3.4,0,1.1-.4,1.9-.4,2.7,0,1.9-.8,1.9-2.3,1.1s-3.1-1.5-5-2.3c.8,3.4,1.5,6.1,2.3,9.2.4,1.9.4,3.1-1.9,3.4a3.29,3.29,0,0,0-2.7,2.7,10,10,0,0,1-2.3,4.6,2.78,2.78,0,0,0-.8,1.5c1.1,2.7-1.1,4.2-2.3,6.1-.8,1.5-1.9,3.1,0,5,.8.8.4,1.5,0,2.3-1.1,1.5-3.1,1.9-3.4,3.8-2.7,7.3-5,14.9-5.7,22.5-1.1,11.1-1.1,22.5-1.5,34-.8,14.5,3.1,27.9,9.5,40.8,3.4,7.3,8.8,13.4,12.2,20.6,1.9,3.8,3.4,7.6,5.7,11.1,3.8,6.1,7.6,11.8,11.4,18.3,3.1,5,5.7,10.3,9.5,14.9,3.1,4.2,7.6,5.7,12.2,6.5,3.1.4,5.3,1.5,6.9,4.6a59.12,59.12,0,0,1,6.1,21,45.48,45.48,0,0,1-1.9,17.6,3.23,3.23,0,0,1-1.9,1.9c-6.5,2.7-11.8,7.3-16.4,12.6-2.3,2.7-4.2,5.3-6.5,8-55.7-31.9-93.4-91-93.4-159C61,156.9,141.9,76,241.5,76S422,156.9,422,256.5Z" transform="translate(-2.46 -9.6)" />
                                </svg>
                            </a>
                            <div class="flex flex-col bg-white w-full h-full p-4 ">
                                <a href="https://projectteachny.org/wp-content/uploads/2019/11/ProjectTEACH_Parent_Flyer_Nov20171.pdf" target="_blank" class="text-green hover:text-green hover:opacity-75 transition-all duration-300 font-bold text-xl mb-4">
                                    Parent & Family Member Education Card
                                </a>
                                <p class="leading-relaxed mb-4">
                                    Information for parents to share with their child’s health providers in order to receive the benefits of Project TEACH’s free resources.
                                </p>
                                <a class="flex justify-end md:justify-center items-center mt-auto text-center md:border-solid md:border-2 uppercase transition-all duration-300 hover:text-green hover:opacity-75 md:hover:opacity-100 tracking-wider md:border-green font-bold inline-block no-underline text-green rounded-full md:px-8 md:py-4 transition-all duration-300 md:hover:bg-green md:hover:text-white bg-transparent" href="https://projectteachny.org/wp-content/uploads/2019/11/ProjectTEACH_Parent_Flyer_Nov20171.pdf" target="_blank">
                                    Learn More
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-6 w-6 md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php require_once('footer.php'); ?>