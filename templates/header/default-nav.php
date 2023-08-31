<header class="shadow-md sticky relative z-200 bg-white">
	<div class="z-50 h-16 relative bg-off-white w-full flex items:center p-4 lg:hidden">
    	<button aria-label="Hamburger Menu Button" id="js-hamburger" class="group absolute left-0 top-0 h-16 w-16 flex items-center justify-center">		
        	<?php include( locate_template( 'templates/header/inline-svgs/hamburger-svg.php', false, false ) ); ?>
		</button>
	</div>	
	<div id="js-dropdowns" class="absolute lg:relative w-full bottom-0 bg-off-white">
		<nav class="max-w-screen-xl m-auto flex justify-center items-center w-full bg-off-white transition-all duration-300 h-16">
			<a href="/">
				<img class="hidden mr-auto lg:block opacity-0 transition-all duration-300 text-black fill-current w-10 h-12 left-0" alt="Project Teach Logo Graphic" src="<?php echo get_template_directory_uri();?>/assets/images/svgs/logo-graphic.svg">		
			</a>
			<?php 
				if ( has_nav_menu( 'primary' ) ) : 
		    		wp_nav_menu( 
		    			array( 
		    				'theme_location' => 'primary', 
		    				'menu_class' => 'bottom-0 absolute lg:static flex flex-col lg:flex-row text-center items-center justify-between max-w-screen-lg text-black', 
		    				'container' => false, 
		    				'fallback_cb' => false, 
		    				'depth' => 2, 
		    				'li_class'  => 'w-full lg:w-auto text-black text-sm lg:text-base',
							'link_class' => 'font-gotham-medium block px-4 py-5',
		    			) 
		    		); 
		    	endif; 
			?>
			<ul class="z-50 absolute m-auto flex gap-4 md:hidden">
				<li><a class="font-gotham-bold text-base text-white rounded-full bg-green px-4 py-2 transition-all duration-300" href="/stay-in-touch/">Stay in Touch</a>
				<li><a class="font-gotham-bold text-base text-white rounded-full bg-orange px-4 py-2 transition-all duration-300" href="tel:855-277-7272">Call Us</a>
			</ul>
			<button aria-label="Search Button" id="js-search-button" class="group ml-auto z-50 lg:block w-16 h-16 transition-all duration-300">
				<?php include( locate_template( 'templates/header/inline-svgs/search-svg.php', false, false ) ); ?>
			</button>
		</nav>		
		<div class="search h-16">
        	<form role="search" method="get" action="/" class="contect_search flex">            				
				<input id="search-input" class="border border-transparent focus:border-blue transition-color duration-300 rounded-l-full h-10 pl-4" type="text" placeholder="Search.." name="s">
            	<button id="search-button" class="text-white rounded-r-full bg-blue h-10 pl-2 pr-4" aria-label="Search Submit" type="submit">submit</button>
        	</form>
    	</div>
	</div>
</header>