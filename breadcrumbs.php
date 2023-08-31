<?php if (is_page(6991)) :
    $bg_color = 'bg-white';
else :
    $bg_color = 'bg-off-white';
endif; ?>

<section class="breadcrumbs <?php echo $bg_color; ?> py-6 px-4 md:px-0  w-full">
    <div class="max-w-screen-lg mx-auto lg:max-w-screen-xl flex items-center text-base">
        <a class="font-bold text-purple transition-all duration-300 hover:text-blue uppercase" href="/" title="HOME">home</a>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 text-cool-gray px-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
        </svg>
        <?php if (is_search()) : ?>
            <span class="block text-cool-gray">Search Results</span>
        <?php else : ?>
            <?php if (is_archive('events')) : ?>
                <span class="block text-cool-gray">Events</span>
            <?php else : ?>
                <span class="block text-cool-gray">
                    <?php if (!is_home()) :
                        the_title();
                    else :
                        echo 'Newsletters';
                    endif; ?>
                </span>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>
<div class="pb-8 <?php echo $bg_color; ?>">
    <div class="h-px opacity-25 bg-cool-gray w-full max-w-screen-xl mx-auto"></div>
</div>