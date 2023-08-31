<!-- Maybe add a small animation making it look like its sliding into center from bottom by like 50px -->
<?php if(get_field('display_modal', 'options')): 
    if (get_field('modal_accent_color', 'options')) {
        $colorHex = get_field('modal_accent_color', 'options');
        if ($colorHex === "#3e0d85") {
            $colorName = "purple";
        } elseif ($colorHex === "#7bbf43") {
            $colorName = "green";
        } elseif ($colorHex === "#e09b3d") {
            $colorName = "orange";
        } else {
            $colorName = "blue";
        } 
    } else {
        $colorName = 'blue';
    }    
?>
    
    <div id="modal-bg" class="opacity-0 pointer-events-none fixed z-50 inset-0 transition-opacity duration-300">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div id="modal-bg-click-close" class="absolute inset-0 bg-absolute-black opacity-75"></div>
            </div>

            <!-- tricks the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div id="modal" class="opacity-0 pointer-events-none transition-opacity duration-300 inline-block align-bottom bg-white rounded-lg text-left shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-screen-md sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <button id="close-modal-x" class="opacity-75 hover:opacity-100 transition-opacity duration-300 absolute top-0 right-0 p-3 pr-4 transform translate-x-full">
                    <svg class="h-6 w-6 pointer-events-none text-white fill-current" viewBox="0 0 22.88 22.88">
                        <path d="M0.324,1.909c-0.429-0.429-0.429-1.143,0-1.587c0.444-0.429,1.143-0.429,1.587,0l9.523,9.539  l9.539-9.539c0.429-0.429,1.143-0.429,1.571,0c0.444,0.444,0.444,1.159,0,1.587l-9.523,9.524l9.523,9.539  c0.444,0.429,0.444,1.143,0,1.587c-0.429,0.429-1.143,0.429-1.571,0l-9.539-9.539l-9.523,9.539c-0.444,0.429-1.143,0.429-1.587,0  c-0.429-0.444-0.429-1.159,0-1.587l9.523-9.539L0.324,1.909z"/>
                    </svg>
                </button>
                <div class="bg-white flex rounded-lg">
                    <?php 
                        $image = get_field('modal_image', 'options');
                        if( !empty( $image ) ): ?>
                            <div class="w-full rounded-l-lg bg-cover bg-center" style="background-image:url('<?php echo esc_url($image['url']); ?>');"></div>
                        <?php endif; 
                    ?>
                    <div class="sm:flex sm:items-start pt-12 pb-4 px-6">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-<?php echo $colorName; ?>-200 sm:mx-0">
                            <svg class="h-8 w-8 text-<?php echo $colorName; ?> fill-current" fill="none" viewBox="0 0 512 512" stroke="currentColor">
                                <path d="m403.759 55.173h-53.4c-7.01-14.67-18.07-22.4-32.173-22.4h-30.958a31.259 31.259 0 0 0 -62.39 0h-30.956c-13.572 0-24.757 7.926-31.87 22.4h-53.771a38.291 38.291 0 0 0 -38.248 38.248v376.816a38.291 38.291 0 0 0 38.248 38.248h295.518a38.291 38.291 0 0 0 38.248-38.248v-376.816a38.291 38.291 0 0 0 -38.248-38.248zm-232.366 8.332c5.12-12.431 12.686-18.734 22.489-18.734h37.218a6 6 0 0 0 5.921-6.962 19.258 19.258 0 1 1 38.023 0 6 6 0 0 0 5.922 6.962h37.218c9.962 0 17.525 6.094 22.482 18.113l10.582 32.065-190.448.028zm193.851 35.562-.792-2.4h24.518v351.655h-265.94v-351.654h24.544l-.806 2.4a6 6 0 0 0 5.687 7.914l207.092-.032a6 6 0 0 0 5.7-7.88zm64.763 371.17a26.278 26.278 0 0 1 -26.248 26.248h-295.518a26.278 26.278 0 0 1 -26.248-26.248v-376.816a26.278 26.278 0 0 1 26.248-26.248h49.259l-5.887 17.5h-34.583a6 6 0 0 0 -6 6v363.649a6 6 0 0 0 6 6h277.94a6 6 0 0 0 6-6v-363.654a6 6 0 0 0 -6-6h-34.478l-5.774-17.5h49.041a26.278 26.278 0 0 1 26.248 26.248z"/>
                                <path d="m155.753 348.713h66.085a6 6 0 1 0 0-12h-66.085a6 6 0 0 0 0 12z"/>
                                <path d="m356.247 370.316h-200.494a6 6 0 0 0 0 12h200.494a6 6 0 0 0 0-12z"/>
                                <path d="m356.247 403.918h-200.494a6 6 0 0 0 0 12h200.494a6 6 0 0 0 0-12z"/>
                                <path d="m250.79 245.75a27.174 27.174 0 1 0 27.173-27.173 27.2 27.2 0 0 0 -27.173 27.173zm27.173-15.173a15.173 15.173 0 1 1 -15.173 15.173 15.191 15.191 0 0 1 15.173-15.173z"/>
                                <path d="m246.841 213.511a20.86 20.86 0 1 0 -20.86-20.859 20.883 20.883 0 0 0 20.86 20.859zm0-29.719a8.86 8.86 0 1 1 -8.86 8.86 8.869 8.869 0 0 1 8.86-8.86z"/>
                                <path d="m234.376 236.748a15.193 15.193 0 0 0 -3.563-9.925 14.078 14.078 0 0 0 -10.894-4.823c-8.242 0-14.457 6.345-14.457 14.76s6.215 14.749 14.457 14.749 14.457-6.346 14.457-14.761zm-16.249 2.117a3.319 3.319 0 0 1 -.665-2.106c0-1.831.827-2.76 2.457-2.76a2.069 2.069 0 0 1 1.792.644 3.314 3.314 0 0 1 .665 2.1c0 1.832-.827 2.76-2.457 2.76a2.069 2.069 0 0 1 -1.792-.638z"/>
                                <path d="m163.438 234.272a6 6 0 0 0 6-6v-.407h12.509a73.877 73.877 0 0 0 16.918 42.65l-8.315 8.316-.288-.288a6 6 0 0 0 -8.487 8.485l9.061 9.061a6 6 0 0 0 8.486-8.485l-.288-.288 8.221-8.221a73.885 73.885 0 0 0 42.745 18.061v11.271h-.407a6 6 0 1 0 0 12h12.814a6 6 0 1 0 0-12h-.407v-11.271a73.885 73.885 0 0 0 42.745-18.056l8.221 8.221-.288.288a6 6 0 1 0 8.486 8.485l9.061-9.061a6 6 0 0 0 -8.487-8.485l-.288.288-8.315-8.316a73.877 73.877 0 0 0 16.918-42.65h12.509v.407a6 6 0 1 0 12 0v-12.819a6 6 0 1 0 -12 0v.407h-12.714a73.913 73.913 0 0 0 -17.959-41.4l9.561-9.561.288.288a6 6 0 0 0 8.487-8.486l-9.061-9.061a6 6 0 0 0 -8.486 8.485l.288.289-9.657 9.657a73.879 73.879 0 0 0 -41.309-16.82v-13.956h.407a6 6 0 0 0 0-12h-12.814a6 6 0 1 0 0 12h.407v13.953a73.879 73.879 0 0 0 -41.309 16.815l-9.657-9.657.288-.289a6 6 0 0 0 -8.486-8.485l-9.061 9.061a6 6 0 0 0 8.487 8.486l.288-.288 9.561 9.561a73.913 73.913 0 0 0 -17.959 41.405h-12.714v-.407a6 6 0 1 0 -12 0v12.814a6 6 0 0 0 6 6.003zm92.562-73.28a62.214 62.214 0 1 1 -62.214 62.214 62.284 62.284 0 0 1 62.214-62.214z"/>
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <!-- Modal Text Content -->
                            <h3 class="text-lg leading-6 font-medium text-black-900">
                                <?php the_field('modal_title', 'options'); ?>
                            </h3>
                            <div class="mt-2">
                                <div class="text-sm leading-5 text-black-500 mb-4">
                                    <?php the_field('modal_text', 'options'); ?>
                                </div>
                            </div>
                            <!-- Modal Buttons -->
                            <?php $link = get_field('cta_button', 'options');                
                            if ($link) : 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                <div class="bg-black-50 px-4 pb-3 pt-6 pb-2 sm:px-6 sm:flex sm:flex-row-reverse">
                                    <a class="border py-1 border-transparent font-medium text-sm text-white rounded-full flex items-center px-4 transition-all duration-300 hover:bg-transparent hover:text-<?php echo $colorName; ?> bg-<?php echo $colorName; ?> hover:border-<?php echo $colorName; ?> ml-2" 
                                        title="<?php echo esc_url( $link_title ); ?>" 
                                        href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>"
                                    >
                                        <?php echo esc_html( $link_title ); ?>
                                    </a>
                                    <a id="close-modal-btn" 
                                        class="border py-1 border-<?php echo $colorName; ?> font-medium text-sm text-<?php echo $colorName; ?> rounded-full flex items-center px-4 transition-all duration-300 hover:bg-transparent hover:text-<?php echo $colorName; ?> bg-transparent hover:border-<?php echo $colorName; ?>" 
                                        title="cancel" 
                                        href="#"
                                    >
                                        Cancel
                                    </a>
                                </div>
                                    
                            <?php endif; ?>
                            <!-- "Do not show again" button -->
                            <button id="one-day-hide-modal-cookie" class="block ml-auto text-sm leading-5 text-black-500 text-right pr-6">Do not show me this again</button>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>