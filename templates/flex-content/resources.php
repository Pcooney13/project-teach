<?php
$color = get_sub_field('color');
$title = get_sub_field('title');
?>

<div class="bg-white pt-8 px-4 md:px-0">
    <section class="max-w-screen-lg lg:max-w-screen-xl mx-auto">
        <h2 class="text-<?php echo $color; ?> font-bold text-2xl md:text-3xl mb-6"><?php echo $title; ?></h2>
        <div class="flex flex-col md:flex-row flex-wrap mb-8 md:-mx-2">
            <?php for ($i = 0; $i < 8; $i++) : ?>
                <div class="md:w-1/4 py-2 md:px-2">
                    <div class="flex md:flex-col items-center bg-off-white md:bg-transparent shadow-lg md:shadow-none rounded-r-xl md:rounded-l-none md:items-start">
                        <a href="#" class="rounded-l-xl md:rounded-xl border-r-4 border-solid border-<?php echo $color; ?> md:border-none w-20 h-16 md:w-full mr-4 md:mr-0 md:shadow-lg p-4 py-6 md:h-48 bg-<?php echo $color; ?> bg-cover bg-center md:mb-4 transition-all duration-300 md:transform hover:-translate-y-4 hover:pb-4" style="background-image:url(https://project-teach.launchpaddev.com/app/uploads/2020/10/mother-discusses-daughters-symptoms-with-male-pediatrician.jpg)"></a>
                        <div>
                            <!-- <a href="#" class="font-semibold leading-tight md:mb-6 text-sm md:text-lg block transition-all duration-300 hover:text-<?php echo $color; ?>">Eating Disorders in Athletes - A Call to Action</a> -->
                            <div class="hidden md:block mt-auto mb-10">
                                <a class="bg-<?php echo $color; ?> text-white font-medium rounded-full py-2 px-4" href="">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div class="text-center pt-12 md:pt-0 pb-20">
            <a class="bg-<?php echo $color; ?> md:bg-transparent text-white md:text-black border-2 border-<?php echo $color; ?> border-solid font-semibold font-xl rounded-full py-4 px-6" href="">Show All Provider Resources</a>
        </div>
        <hr class="md:pb-12" />
    </section>
</div>