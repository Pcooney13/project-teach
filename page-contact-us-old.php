<?php /* Template Name: Contact Us */ ?>
<?php require_once('header.php'); ?>
<?php require(dirname(__FILE__) . "/breadcrumbs.php"); ?>


<section class="mb-12 px-4 md:px-0">
    <div class="max-w-screen-lg mx-auto lg:max-w-screen-xl flex items-center text-base">        
        <div class="md:flex w-full">
            <div class="md:w-1/2 md:mr-8 mb-8 md:mb-0">
                <? get_template_part("templates/content", "request-service-form"); ?>
            </div>
            <div class="md:w-1/2 md:ml-4">
                <h1 class="text-3xl text-purple font-bold mb-4">GENERAL INFORMATION</h1>
                <ul class="text-xl font-thin text-purple pl-4 mb-12">
                    <li class="pb-2 font-gotham flex justify-center lg:justify-start items-center  hover:text-blue transition-all duration-300">
                        <svg class="w-4 h-4 mr-4" viewBox="0 0 405.33 405.33">
                            <path class="fill-current" d="M373.33,266.88a231.66,231.66,0,0,1-72.7-11.56A31.17,31.17,0,0,0,269,262l-46,34.73A257.08,257.08,0,0,1,108.57,182.38l33.81-44.93a32.26,32.26,0,0,0,7.91-32.64A231.73,231.73,0,0,1,138.67,32a32,32,0,0,0-32-32H32A32,32,0,0,0,0,32C.23,238.09,167.24,405.1,373.33,405.33a32,32,0,0,0,32-32V298.88A32,32,0,0,0,373.33,266.88Z"></path>
                            <path class="fill-current" d="M394.67,170.67A10.67,10.67,0,0,1,384,160,138.84,138.84,0,0,0,245.33,21.33a10.67,10.67,0,0,1,0-21.33,160.16,160.16,0,0,1,160,160A10.67,10.67,0,0,1,394.67,170.67Z"></path>
                            <path class="fill-current" d="M309.33,170.67A10.67,10.67,0,0,1,298.67,160a53.33,53.33,0,0,0-53.34-53.33,10.67,10.67,0,0,1,0-21.34A74.67,74.67,0,0,1,320,160,10.67,10.67,0,0,1,309.33,170.67Z"></path>
                        </svg>
                        <a class="text-black" rel="noreferrer" href="tel:7168782454" title="Call Us">
                            716-878-2454
                        </a>
                    </li>
                    <li class="pb-2 font-gotham flex justify-center lg:justify-start items-center  hover:text-blue transition-all duration-300">                    
                        <svg class="w-4 h-4 mr-4" viewBox="0 0 512 490.67">
                            <path class="fill-current" d="M186.67,375.72v98.95a16,16,0,0,0,11,15.21,16.32,16.32,0,0,0,5,.79,16,16,0,0,0,12.88-6.53l57.88-78.76Z"></path>
                            <path class="fill-current" d="M505.28,3A16,16,0,0,0,488.6,1.81L8.6,252.48a16,16,0,0,0,2.22,29.33l133.44,45.61,284.18-243L208.53,349.38l223.64,76.43a16,16,0,0,0,21-12.78L511.83,18.37A16,16,0,0,0,505.28,3Z"></path>
                        </svg>
                        <a class="text-black" rel="noreferrer" href="mailto:info@projectteachny.org" title="Mail Us">
                            info@projectteachny.org
                        </a>
                    </li>
                    <li class="pb-2 font-gotham flex justify-center lg:justify-start items-center">                    
                        <svg class="w-4 h-4 mr-4" viewBox="0 0 512 512">
                            <path class="fill-current" d="M256,0C114.84,0,0,114.84,0,256S114.84,512,256,512,512,397.16,512,256,397.16,0,256,0ZM377.75,388.41a21.29,21.29,0,0,1-30.16,0L240.92,281.75a21.25,21.25,0,0,1-6.25-15.08V128a21.33,21.33,0,1,1,42.66,0V257.84L377.75,358.25A21.31,21.31,0,0,1,377.75,388.41Z"></path>
                        </svg>
                        <span class="text-black">9:00AM - 5:00PM</span>
                    </li>
                </ul>
                <h1 class="text-3xl text-purple font-bold mb-4">HUB SITES</h1>
                <div>
                    <?php include( locate_template( 'templates/utilities/map-image.php', false, false ) ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>