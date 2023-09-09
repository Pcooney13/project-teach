<?
/*
Template Name: Forum videos
*/
require_once('header.php'); ?>

<div class="relative">
	<div class="grayscale absolute h-full w-full bg-cover bg-center" style="background-image: url(<? echo get_template_directory_uri(); ?>/assets/images/faculty-banner-edit.png); ?>)"></div>
	<div class="absolute h-full w-full bg-purple" style="opacity:.67"></div>
	<div class="hero-dimensions z-10 relative text-white container px-4 mx-auto flex flex-col">
		<div class="max-w-screen-lg lg:max-w-screen-xl">
			<h1 class="text-5xl m-0 mt-12 mb-4 font-bold">
                Project TEACH Annual Forum: Innovative Practices in Prevention Science 2019
            </h1>
		</div>
	</div>
</div>


<? require(dirname(__FILE__) . "/breadcrumbs.php"); ?>

<section class="bg-off-white p-4 md:p-0">
    <h2 class="font-bold mb-8 text-4xl text-center">Video Presentations</h2>
    <div class="mx-auto max-w-screen-lg lg:max-w-screen-xl">
        <div class="-mx-4 flex flex-col md:flex-row md:flex-wrap justify-center">
            <div class="md:w-1/3 mb-8">
                <div class="bg-white h-full mx-4 flex flex-col">
                    <div class="relative" style="padding-top: 56.25%">
                      <iframe class="absolute inset-0 w-full h-full" src="https://player.vimeo.com/video/354947360" allowfullscreen webkitallowfullscreen mozallowfullscreen frameborder="0" …></iframe>
                    </div>
                    <h6 class="p-4 font-bold text-purple leading-tight">
                        A Panel Discussion About Early Childhood Mental Health: Practice Transformation – Talk 1
                    </h6>
                    <p class="mt-auto p-4 text-base">Evelyn J. Blanck, LCSW</p>
                </div>
            </div>
            <div class="md:w-1/3 mb-8">
                <div class="bg-white h-full mx-4 flex flex-col">                    
                    <div class="relative" style="padding-top: 56.25%">
                      <iframe class="absolute inset-0 w-full h-full" src="https://player.vimeo.com/video/354948106" allowfullscreen webkitallowfullscreen mozallowfullscreen frameborder="0" …></iframe>
                    </div>
                    <h6 class="p-4 font-bold text-purple leading-tight">
                        A Panel Discussion About Early Childhood Mental Health: Practice Transformation – Talk 2
                    </h6>
                    <p class="mt-auto p-4 text-base">Elizabeth A. Isakson, MD, FAAP</p>
                </div>
            </div>
            <div class="md:w-1/3 mb-8">
                <div class="bg-white h-full mx-4 flex flex-col">
                    <div class="relative" style="padding-top: 56.25%">
                      <iframe class="absolute inset-0 w-full h-full" src="https://player.vimeo.com/video/354948613" allowfullscreen webkitallowfullscreen mozallowfullscreen frameborder="0" …></iframe>
                    </div>
                    <h6 class="p-4 font-bold text-purple leading-tight">
                        A Panel Discussion About Early Childhood Mental Health: Practice Transformation – Talk 3
                    </h6>
                    <p class="mt-auto p-4 text-base">Diane E. Bloomfield, MD</p>
                </div>
            </div>
            <div class="md:w-1/3 mb-8">
                <div class="bg-white h-full mx-4 flex flex-col">
                    <div class="relative" style="padding-top: 56.25%">
                      <iframe class="absolute inset-0 w-full h-full" src="https://player.vimeo.com/video/354948834" allowfullscreen webkitallowfullscreen mozallowfullscreen frameborder="0" …></iframe>
                    </div>
                    <h6 class="p-4 font-bold text-purple leading-tight">
                        Evidence-Based NYS Programs That Address Early Intervention/Identification of Psychosocial Concerns in the 0 to 5 Age Range – Talk 1
                    </h6>
                    <p class="mt-auto p-4 text-base">Victor M. Fornari, MD & Diane E. Bloomfield, MD</p>
                </div>
            </div>
            <div class="md:w-1/3 mb-8">
                <div class="bg-white h-full mx-4 flex flex-col">
                    <div class="relative" style="padding-top: 56.25%">
                      <iframe class="absolute inset-0 w-full h-full" src="https://player.vimeo.com/video/354949577" allowfullscreen webkitallowfullscreen mozallowfullscreen frameborder="0" …></iframe>
                    </div>
                    <h6 class="p-4 font-bold text-purple leading-tight">
                        Evidence-Based NYS Programs That Address Early Intervention/Identification of Psychosocial Concerns in the 0 to 5 Age Range – Talk 2
                    </h6>
                    <p class="mt-auto p-4 text-base">Polina L. Umylny, PhD</p>
                </div>
            </div>
        </div>
    </div>
</section>
        
<? require_once('footer.php'); ?>