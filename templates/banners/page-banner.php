<?php 
	if (get_field('show_hero_banner')) {

		$hero_image = get_field('hero_image');
		$hero_color = get_field('hero_color');
		$hero_title = get_field('hero_title');
		$hero_text = get_field('hero_text');
		//Convert Color to RGBA
		$RGB_color = hex2rgb($hero_color);
		$Final_Rgb_color = implode(", ", $RGB_color);

		if( !empty( $hero_image ) ): ?>

			<div class="relative">
				<div class="grayscale absolute h-full w-full bg-cover bg-center" style="background-image: url('<?php echo esc_url($hero_image['url']); ?>')"></div>
				<div class="absolute h-full w-full" style="opacity:.67; background:<?php echo $hero_color; ?>;"></div>
				<div class="hero-dimensions max-w-screen-lg lg:max-w-screen-xl mx-auto z-10 relative text-white mx-auto flex flex-col">
					<div class="max-w-screen-md px-4 md:px-0">
						<h1 class="text-3xl md:text-5xl m-0 mt-12 mb-4 font-bold"><?php echo $hero_title;?></h1>
						<div class="hero--text"><?php echo $hero_text;?></div>
					</div>
				</div>
			</div>

		<?php endif; 
	}
?>