<section class="pt-12 pb-12 px-4 md:px-0" x-data="{ section1: true, section2: false, section3: false, section4:false}">
    <h2 class="text-blue md:text-center font-bold text-2xl md:text-3xl mb-6">Additional Resources</h2>
    <div class="hidden md:block border-b border-solid border-cool-gray mb-8">
        <div class="max-w-screen-lg lg:max-w-screen-xl mx-auto flex flex-col md:flex-row gap-4">
            <button x-on:click="section1 = true, section2 = false, section3 = false, section4 = false" :class="section1 === true && 'text-purple border-purple'" class="text-cool-gray font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Addressing Mental Health <br class="hidden md:block"/>in Primary Care
            </button>
            <button x-on:click="section2 = true, section1 = false, section3 = false, section4 = false" :class="section2 === true && 'text-purple border-purple'" class="text-cool-gray font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Resources for Specific <br class="hidden md:block"/>Mental Health Disorders
            </button>
            <button x-on:click="section3 = true, section1 = false, section2 = false, section4 = false" :class="section3 === true && 'text-purple border-purple'" class="text-cool-gray font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Addressing <br class="hidden md:block"/>Substance Use
            </button>
            <button x-on:click="section4 = true, section1 = false, section2 = false, section3 = false" :class="section4 === true && 'text-purple border-purple'" class="text-cool-gray font-semibold leading-tight pb-6 text-lg flex-1 px-4 border-solid border-b-4 border-transparent">
                Resources for Addressing <br class="hidden md:block"/>Suicidality
            </button>
        </div>
    </div>
    <div class="max-w-screen-lg lg:max-w-screen-xl mx-auto flex flex-col">
        <button x-on:click="section1 = true, section2 = false, section3 = false, section4 = false" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
            <p :class="section1 === true && 'font-bold'">Addressing Mental Health in Primary Care</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 ml-1 h-4 transform transition-all duration-300" :class="section1 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section1 === true">
            <?php for ($i = 0; $i < 2; $i++) : ?>
                <div class="bg-white rounded-lg p-4 mb-4">
                    <p class="text-xl font-bold text-purple truncate leading-tight">Addressing Mental Health in Primary Care</p>
                    <div class="flex items-center text-orange mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-0.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                        </svg>
                        <p class="text-lg font-medium leading-tight">omh.ny.org</p>
                    </div>
                    <p class="truncate text-sm md:text-normal leading-tight">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores earum a dolor, esse repellat eius laudantium tempore. Suscipit laudantium nisi dolore neque, doloribus dignissimos, officia quos impedit ad, accusantium repellendus.</p>
                </div>
            <?php endfor; ?>
        </div>
        <button x-on:click="section2 = true, section1 = false, section3 = false, section4 = false" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
            <p :class="section2 === true && 'font-bold'">Resources for Specific Mental Health Disorders</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform transition-all duration-300" :class="section2 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section2 === true">
            <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="bg-white rounded-lg p-4 mb-4">
                    <p class="text-xl font-bold text-purple truncate leading-tight">Resources for Specific Mental Health Disorders</p>
                    <div class="flex items-center text-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-0.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                        </svg>
                        <p class="text-lg font-medium leading-tight">omh.ny.org</p>
                    </div>
                    <p class="truncate leading-tight">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores earum a dolor, esse repellat eius laudantium tempore. Suscipit laudantium nisi dolore neque, doloribus dignissimos, officia quos impedit ad, accusantium repellendus.</p>
                </div>
            <?php endfor; ?>
        </div>
        <button x-on:click="section3 = true, section1 = false, section2 = false, section4 = false" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
            <p :class="section3 === true && 'font-bold'">Addressing Substance Use</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform transition-all duration-300" :class="section3 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section3 === true">
            <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="bg-white rounded-lg p-4 mb-4">
                    <p class="text-xl font-bold text-purple truncate leading-tight">Addressing Substance Use</p>
                    <div class="flex items-center text-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-0.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                        </svg>
                        <p class="text-lg font-medium leading-tight">omh.ny.org</p>
                    </div>
                    <p class="truncate leading-tight">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores earum a dolor, esse repellat eius laudantium tempore. Suscipit laudantium nisi dolore neque, doloribus dignissimos, officia quos impedit ad, accusantium repellendus.</p>
                </div>
            <?php endfor; ?>
        </div>
        <button x-on:click="section4 = true, section1 = false, section2 = false, section3 = false" class="flex items-center md:hidden p-4 bg-purple text-white mt-4 rounded-md shadow-md">
            <p :class="section4 === true && 'font-bold'">Resources for Addressing Suicidality</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 transform transition-all duration-300" :class="section4 === true && 'rotate-180'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
        <div class="p-4 md:p-0 pb-0 bg-purple-200 md:bg-transparent" x-show="section4 === true">
            <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="bg-white rounded-lg p-4 mb-4">
                    <p class="text-xl font-bold text-purple truncate leading-tight">Resources for Addressing Suicidality</p>
                    <div class="flex items-center text-orange">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1 mt-0.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                        </svg>
                        <p class="text-lg font-medium leading-tight">omh.ny.org</p>
                    </div>
                    <p class="truncate leading-tight">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores earum a dolor, esse repellat eius laudantium tempore. Suscipit laudantium nisi dolore neque, doloribus dignissimos, officia quos impedit ad, accusantium repellendus.</p>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>