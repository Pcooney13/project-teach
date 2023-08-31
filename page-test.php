<?php require_once('header.php'); ?>

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

<section class="splide py-16 bg-white">

    <div class="splide__track relative max-w-screen-lg lg:max-w-screen-xl mx-auto px-4 md:px-0 ">
        <ul class="splide__list">
            <li class="splide__slide" data-color="#38BDF8">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="w-full order-1 md:order-1 md:w-1/2 md:pr-8 mt-4 md:mt-0">
                        <div class="flex flex-col gap-2">
                            <p class="text-2xl md:text-5xl md:leading-[3rem] font-gotham-bold text-black">
                                <span class="text-blue block mb-1">Child Providers</span> Thrive with Good Mental Health
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
                            <a class="border-solid border-2 border-purple font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-purple bg-purple" title="learn more about consultations" href="/get-involved">
                                Get Involved
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
            <li class="splide__slide" data-color="#7bbf43">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="w-full order-1 md:order-1 md:w-1/2 md:pr-8 mt-4 md:mt-0">
                        <div class="flex flex-col gap-2">
                            <p class="text-2xl md:text-5xl md:leading-[3rem] font-gotham-bold text-black">
                                <span class="text-green block mb-1">Parents & Families</span> Thrive with Good Mental Health
                            </p>
                            <p class="font-gotham-light leading-7 text-lg">
                                Supporting maternal health and pediatric clinicians to deliver quality mental health care in New York State.
                            </p>
                        </div>
                        <div class="mt-8">
                            <a class="border-solid border-2 border-green font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-green bg-green" title="learn more about consultations" href="/get-involved">
                                Get Involved
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
        </ul>
        <div class="flex">
            <div class="flex-1"></div>
            <div class="splide__progress flex-1 h-8 rounded-xl overflow-hidden -translate-y-8">
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
            <span class="splide__toggle__pause"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="text-white w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9v6m-4.5 0V9M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
        </button>
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
            speed: 500,
            gap: '2rem',
            arrows: false,
        });
        splide.mount();

        let togglePlay = document.querySelector('.splide__toggle__play')
        let togglePause = document.querySelector('.splide__toggle__pause')
        let slideProgress = document.querySelector('.splide__progress')

        togglePlay.addEventListener('click', function() {
            console.log('play')
            slideProgress.classList.add('opacity-100')
        })
        togglePause.addEventListener('click', function() {
            console.log('pause')
            slideProgress.classList.add('opacity-0')
        })

        // let splideSlide = document.querySelectorAll('.splide__slide')
        // splideSlide = Array.from(splideSlide)
        // setInterval(() => {
        //     splideSlide.forEach(element => {
        //         if (element.classList.contains('is-active')) {
        //             let color = element.getAttribute('data-color')
        //             document.querySelector('.splide__progress__bar').style.background = color
        //         }
        //     });
        // }, 500);
    });
</script>

<?php require_once('footer.php'); ?>