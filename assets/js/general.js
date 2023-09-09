// var $ = jQuery.noConflict();

// $(document).ready(function () {
    
//     if (typeof postcount === 'undefined') {
//       postcount = "0";
//     }

//     $('[data-postcount]').html(postcount);

//     var left = '<div class="bg-purple hover:opacity-50 transition-all duration-300 h-12 flex items-center justify-center w-12 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 text-white stroke-current transition-all duration-300 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" /></svg></div>';
//     var right = '<div class="bg-purple hover:opacity-50 transition-all duration-300 h-12 flex items-center justify-center w-12 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 stroke-current transition-all text-white duration-300 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg></div>';

//     $(".owl-carousel").owlCarousel({
//         loop: !0,
//         nav: true,
//         navText: [left, right],
//         items: 3,
//         dots: true,
//         margin: 16,
//         autoHeight: true,
//         responsive: {
//             0: { items: 1 },
//             767: { items: 2 },
//             991: { items: 3 },
//             1400: { items: 3 },
//         }
//     });

//       $('.events-slider').length > 0 &&
//         $('.events-slider').owlCarousel({
//             loop: !0,
//             nav: true,
//             navText: [left, right],
//             items: 3,
//             dots: !1,
//             // autoWidth: true,
//             autoHeight: true,
//         })
//     $('.event_box_main').length > 0 &&
//         $('.event_box_main').each(function () {
//             $('#events-slider' + t).owlCarousel({
//                 nav: true,
//                 dotsContainer: '.dots' + t,
//                 items: 3,
//                 responsive: {
//                     0: { items: 1 },
//                     767: { items: 2 },
//                     991: { items: 3 },
//                     1400: { items: 3 },
//                 },
//             }),
//                 t++;
//         });

//     try{
//         $(".ethos-slider").slick({ 
//             adaptiveHeight: true, 
//             dots: true, 
//             infinite: false,
//             slidesToShow: 2.5,
//             slidesToScroll: 1,
//             prevArrow: "<button type='button' class='slick-prev ethos-slider-prev'>Previous</button>",
//             nextArrow: "<button type='button' class='slick-next ethos-slider-next'>Next</button>",
//             appendDots: '.ethos-slider-nav',
//             appendArrows: '.ethos-slider-nav',
//             responsive: [{
//               breakpoint: 1080,
//               settings: {
//                 slidesToShow: 2,
//                 slidesToScroll: 1
//               }
//             }, {
//               breakpoint: 768,
//               settings: {
//                 slidesToShow: 2,
//                 slidesToScroll: 1
//               }
//             }, {
//               breakpoint: 634,
//               settings: {
//                 slidesToShow: 1.5,
//                 slidesToScroll: 1
//               }
//             }, {
//               breakpoint: 535,
//               settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1
//               }
//             }]
//         });     
//     } catch(error) {
        
//     }
//     $('.ethos-slider').css('display', 'block');
//     $('[data-dismiss]').click(function(event) {
//         var dataDismiss = $(this).attr("data-dismiss");
//         $('#' + dataDismiss).hide();
//         Cookies.set(dataDismiss, 'off', { sameSite: 'strict' });

//     });
//     //Initial Cookies
//     var siteNotices = document.querySelectorAll('[id^="notice-"]');
//     for (var i = 0; i < siteNotices.length; i++) {
//         if(!Cookies.get(siteNotices[i].id)){
//             Cookies.set(siteNotices[i].id, 'on', { sameSite: 'strict' });
//         }

//         if(Cookies.get(siteNotices[i].id) != 'on'){
//             siteNotices[i].remove();
//         }
//     }

//     var topMenu = jQuery("header"),
//         topMenuHeight = topMenu.outerHeight(),
//         // All list items
//         menuItems = topMenu.find('a[href*="#"]'),
//         // Anchors corresponding to menu items
//         scrollItems = menuItems.map(function () {
//             var href = jQuery(this).attr("href"),
//                     id = href.substring(href.indexOf('#')),
//                     item = jQuery(id);
//             //console.log(item)
//             if (item.length) {
//                 return item;
//             }
//         });


//     // Bind to scroll
//     jQuery(window).scroll(function () {
//         // Get container scroll position
//         var fromTop = jQuery(this).scrollTop() + topMenuHeight + 2;

//         // Get id of current scroll item
//         var cur = scrollItems.map(function () {
//             if (jQuery(this).offset().top < fromTop)
//                 return this;
//         });

//         // Get the id of the current element
//         cur = cur[cur.length - 1];
//         var id = cur && cur.length ? cur[0].id : "";

//         menuItems.parent().removeClass("active");
//         if (id) {
//             menuItems.parent().end().filter("[href*='#" + id + "']").parent().addClass("active");
//         }

//     });


//     $('.slider-event').owlCarousel({
//         margin: 40,
//         loop: true,
//         items: 3,
//         autoWidth: true,
//         stagePadding: 100,
//         nav: true,
//         responsive: {
//             0: {
//                 items: 1,
//                 stagePadding: 0,
//             },

//             768: {
//                 items: 1,
//             },
//             990: {
//                 items: 1,
//             },
//             1200: {
//                 items: 2,
//             },
//             1600: {
//                 items: 3,
//             },
//             1920: {
//                 items: 3,
//             },
//         },
//     });
    
// });

// ;(function($){
//     $.fn.equalHeight = function (option) {
//         var $this = this
//         var get_height = function(){
//             var maxheight=0;
//             $this.css("height","")
//             $this.each(function(){
//                 maxheight = $(this).height() > maxheight ? $(this).height() : maxheight;
//             })
//             $this.height(maxheight)
//         }
//         var init =function(){
//             get_height()
//             $(window).bind("resize",get_height)
//         }
//         $this.destroy = function(){
//             $this.css("height","")
//             $(window).unbind("resize",get_height)
//         }
//         init();
//         return this
//     }
// })(jQuery);