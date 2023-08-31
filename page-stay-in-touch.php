<?php
// Template Name: register
require_once('header.php');
require(dirname(__FILE__) . "/breadcrumbs.php");
?>

<style>
    .request-form>h1,
    .request-form>p {
        display: none;
    }

    input {
        border: 1px solid #a0aec0;
        padding: 0.25rem;
        width: 225px;
        border-radius: 4px;
    }

    select {
        width: 225px;
    }

    .bodyContainer>tbody>tr>td>div:nth-child(3),
    .bodyContainer>tbody>tr>td>div:nth-child(4),
    .bodyContainer>tbody>tr>td>div:nth-child(5),
    .bodyContainer>tbody>tr>td>div:nth-child(8),
    .bodyContainer>tbody>tr>td>div:nth-child(9),
    .bodyContainer>tbody>tr>td>div:nth-child(10) {
        margin-bottom: 0.5rem;
    }
</style>

<section class="mx-auto max-w-screen-xl pb-24 px-4 md:px-0">
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/2 mr-0 md:mr-4">
            <? get_template_part("templates/content", "stay-in-touch"); ?>
            <p class="my-4 mb-12 md:mb-4 text-base">*We respect your privacy and do not tolerate spam and will never sell, rent, lease or give away your information to any third party. Nor will we send you unsolicited email. You may opt out of receiving future mailings from our mailing lists using the unsubscribe link on any of our emails.</p>
        </div>
        <div class="w-full md:w-1/2 ml-0 md:ml-4">
            <div class="bg-white mb-8 text-lg font-thin">
                <div class="p-4 bg-blue-200">
                    <h4 class="text-center md:text-left text-blue font-gotham-bold uppercase">REQUEST A SERVICE</h4>
                </div>
                <ul class="pt-6 md:pt-4 p-4">
                    <li class="pb-4 md:pb-2 font-gotham flex justify-center lg:justify-start items-center  hover:text-blue transition-all duration-300">
                        <svg class="w-4 h-4 mr-2" viewBox="0 0 405.33 405.33">
                            <path class="fill-current" d="M373.33,266.88a231.66,231.66,0,0,1-72.7-11.56A31.17,31.17,0,0,0,269,262l-46,34.73A257.08,257.08,0,0,1,108.57,182.38l33.81-44.93a32.26,32.26,0,0,0,7.91-32.64A231.73,231.73,0,0,1,138.67,32a32,32,0,0,0-32-32H32A32,32,0,0,0,0,32C.23,238.09,167.24,405.1,373.33,405.33a32,32,0,0,0,32-32V298.88A32,32,0,0,0,373.33,266.88Z"></path>
                            <path class="fill-current" d="M394.67,170.67A10.67,10.67,0,0,1,384,160,138.84,138.84,0,0,0,245.33,21.33a10.67,10.67,0,0,1,0-21.33,160.16,160.16,0,0,1,160,160A10.67,10.67,0,0,1,394.67,170.67Z"></path>
                            <path class="fill-current" d="M309.33,170.67A10.67,10.67,0,0,1,298.67,160a53.33,53.33,0,0,0-53.34-53.33,10.67,10.67,0,0,1,0-21.34A74.67,74.67,0,0,1,320,160,10.67,10.67,0,0,1,309.33,170.67Z"></path>
                        </svg>
                        <a rel="noreferrer" href="tel:18552277272" title="Call Us">
                            1-855-227-7272
                        </a>
                    </li>
                    <li class="pb-4 md:pb-2 font-gotham flex justify-center lg:justify-start items-center  hover:text-blue transition-all duration-300">
                        <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg>
                        <a rel="noreferrer" href="tel:18552277272" title="Call Us">
                            Request Form
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-white mb-8 text-lg font-thin">
                <div class="p-4 bg-purple-200">
                    <h4 class="text-center md:text-left text-purple font-gotham-bold uppercase">GENERAL INFORMATION</h4>
                </div>
                <ul class="pt-6 md:pt-4 p-4">
                    <li class="pb-4 md:pb-2 font-gotham flex justify-center lg:justify-start items-center  hover:text-purple transition-all duration-300">
                        <svg class="w-4 h-4 mr-2" viewBox="0 0 405.33 405.33">
                            <path class="fill-current" d="M373.33,266.88a231.66,231.66,0,0,1-72.7-11.56A31.17,31.17,0,0,0,269,262l-46,34.73A257.08,257.08,0,0,1,108.57,182.38l33.81-44.93a32.26,32.26,0,0,0,7.91-32.64A231.73,231.73,0,0,1,138.67,32a32,32,0,0,0-32-32H32A32,32,0,0,0,0,32C.23,238.09,167.24,405.1,373.33,405.33a32,32,0,0,0,32-32V298.88A32,32,0,0,0,373.33,266.88Z"></path>
                            <path class="fill-current" d="M394.67,170.67A10.67,10.67,0,0,1,384,160,138.84,138.84,0,0,0,245.33,21.33a10.67,10.67,0,0,1,0-21.33,160.16,160.16,0,0,1,160,160A10.67,10.67,0,0,1,394.67,170.67Z"></path>
                            <path class="fill-current" d="M309.33,170.67A10.67,10.67,0,0,1,298.67,160a53.33,53.33,0,0,0-53.34-53.33,10.67,10.67,0,0,1,0-21.34A74.67,74.67,0,0,1,320,160,10.67,10.67,0,0,1,309.33,170.67Z"></path>
                        </svg>
                        <a rel="noreferrer" href="tel:7168782454" title="Call Us">
                            716-878-2454
                        </a>
                    </li>
                    <li class="pb-4 md:pb-2 font-gotham flex justify-center lg:justify-start items-center  hover:text-purple transition-all duration-300">
                        <svg class="w-4 h-4 mr-2" viewBox="0 0 512 490.67">
                            <path class="fill-current" d="M186.67,375.72v98.95a16,16,0,0,0,11,15.21,16.32,16.32,0,0,0,5,.79,16,16,0,0,0,12.88-6.53l57.88-78.76Z"></path>
                            <path class="fill-current" d="M505.28,3A16,16,0,0,0,488.6,1.81L8.6,252.48a16,16,0,0,0,2.22,29.33l133.44,45.61,284.18-243L208.53,349.38l223.64,76.43a16,16,0,0,0,21-12.78L511.83,18.37A16,16,0,0,0,505.28,3Z"></path>
                        </svg>
                        <a rel="noreferrer" href="mailto:info@projectteachny.org" title="Mail Us">
                            info@projectteachny.org
                        </a>
                    </li>
                    <li class="pb-4 md:pb-2 font-gotham flex justify-center lg:justify-start items-center">
                        <svg class="w-4 h-4 mr-2" viewBox="0 0 512 512">
                            <path class="fill-current" d="M256,0C114.84,0,0,114.84,0,256S114.84,512,256,512,512,397.16,512,256,397.16,0,256,0ZM377.75,388.41a21.29,21.29,0,0,1-30.16,0L240.92,281.75a21.25,21.25,0,0,1-6.25-15.08V128a21.33,21.33,0,1,1,42.66,0V257.84L377.75,358.25A21.31,21.31,0,0,1,377.75,388.41Z"></path>
                        </svg>
                        9:00AM - 5:00PM
                    </li>
                </ul>
            </div>
            <div class="bg-white mb-8 text-lg font-thin">
                <div class="p-4 bg-green-200">
                    <h4 class="text-center md:text-left text-green font-gotham-bold uppercase">FOLLOW US ON SOCIAL MEDIA</h4>
                </div>
                <div class="pt-6 md:pt-4 p-4">
                    <a class="pb-4 md:pb-2 hover:fill-current group font-gotham flex justify-center lg:justify-start items-center  hover:text-green transition-all duration-300" target="_blank" rel="noreferrer" href="https://www.facebook.com/ProjectTEACHNY/" title="follow Project Teach on facebook">
                        <svg class="w-4 h-4 mr-2 group-hover:bg-green" viewBox="0 0 512 512">
                            <title>Facebook</title>
                            <path class="fill-current" d="M512,64v384c0,35.3-28.7,64-64,64h-96V336h48l32-80h-80v-64c0-17.7,14.3-16,32-16h32V96h-64
	                            c-26.5,0-50.5,10.7-67.9,28.1C266.7,141.5,256,165.5,256,192v64h-64v80h64v176H64c-35.3,0-64-28.7-64-64V64C0,28.7,28.7,0,64,0h384
	                            C483.3,0,512,28.7,512,64z"></path>
                        </svg>
                        <p>Facebook</p>
                    </a>
                    <a class="pb-4 md:pb-2 hover:fill-current hover:text-green font-gotham flex justify-center lg:justify-start items-center  hover:text-green transition-all duration-300" target="_blank" rel="noreferrer" href="https://www.facebook.com/ProjectTEACHNY/" title="follow Project Teach on facebook">
                        <svg class="w-4 h-4 mr-2" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>LinkedIn</title>
                            <path class="fill-current" d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                        </svg>
                        <p>LinkedIn</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>