<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project TEACH</title>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TJ7S5MK');
    </script>
    <!-- TypeKit - Working on replacing with googlefont -->
    <script>
        (function(d) {
            var config = {
                    kitId: 'hyv7nlq',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <!-- Favicon -->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/manifest.json">
    <!-- Meta tags -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="">
    <!-- Easy Appt plugin CSS -- Working on removing this plugin cause it has no use. -->
    <link rel='stylesheet' id='ea-frontend-style-css' href='https://easy-appointments.net/wordpress/wp-content/plugins/easy-appointments/css/eafront.css?ver=4.9.8' type='text/css' media='all' />
    <!-- Alpine -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Lastly call wp_head -->
    <?php wp_head(); ?>
</head>

<body class="bg-off-white">

    <!-- Modal -->
    <?php
    $page_options = get_field('specify_pages_for_modal', 'options');
    $modal_pages = get_field('modal_pages', 'options');
    $show_modal = get_field('show_modal', 'options');

    if ($page_options && $modal_pages) {
        // If 'hide' is toggled hide modal on the specific pages
        if ($page_options === 'hide') {
            if (!is_single($modal_pages) && !is_page($modal_pages)) {
                include(locate_template('templates/utilities/modal.php', false, false));
            }
        }
        // If 'show' is toggled show modal only on the specific pages
        if ($page_options === 'show') {
            if (is_single($modal_pages) || !is_page($modal_pages)) {
                include(locate_template('templates/utilities/modal.php', false, false));
            }
        }
    } elseif ($show_modal) {
        // If neither is toggled show modal on all pages
        include(locate_template('templates/utilities/modal.php', false, false));
    }
    ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJ7S5MK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- <div id="header-wrap" class="header-wrap"> -->

    <?php
    $show_banner = get_field('show_banner', 'options');
    if (is_page(array('live-training', 'follow-up-sessions', 'category-intensive-training', 'online-courses', 'cme-certified-education')) || is_archive('events') || is_single()) :
        include(locate_template('templates/utilities/site-notices.php', false, false));
    elseif ($show_banner) :
        if (!is_page('child')) :
            include(locate_template('templates/utilities/important-notice.php', false, false));
        endif;
    endif;
    ?>

    <?php
    $show_modal = get_field('show_modal', 'options');
    if (false && $show_banner) get_template_part('templates/modal');
    ?>

    <!-- Above Navbar Content -->
    <div class="flex relative h-24 items-center justify-center font-gotham-light text-sm px-4 bg-white z-300">
        <!-- LOGO -->
        <a class="flex justify-center lg:h-20 w-auto p-0" href="/">
            <img alt="Project Teach Logo" class="h-16 xl:h-20" src="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/logo.svg">
        </a>
        <!--Connect With Us-->
        <div class="flex flex-col ml-auto">
            <!--Translate Page-->
            <div class="hidden lg:flex mt-4 flex-col ml-auto xl:flex-row px-2 items-center text-blue">
                <p style="line-height:1.25" class="text-black hidden md:block leading-0 font-gotham-medium text-right mr-4 text-base">Clinician's Line: <a class="underline font-gotham-bold text-green" href="tel:855-277-7272">855-277-7272</a></p>
                <!-- <a href="https://www.facebook.com/ProjectTEACHNY/">
                    <svg class="w-4 h-4 mr-2 group-hover:bg-green" viewBox="0 0 512 512">
                        <title>Facebook</title>
                        <path class="fill-current" d="M512,64v384c0,35.3-28.7,64-64,64h-96V336h48l32-80h-80v-64c0-17.7,14.3-16,32-16h32V96h-64
	                        c-26.5,0-50.5,10.7-67.9,28.1C266.7,141.5,256,165.5,256,192v64h-64v80h64v176H64c-35.3,0-64-28.7-64-64V64C0,28.7,28.7,0,64,0h384
	                        C483.3,0,512,28.7,512,64z">
                        </path>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/company/project-teach-new-york/">
                    <svg class="w-4 h-4" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>LinkedIn</title>
                        <path class="fill-current" d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                    </svg>
                </a> -->
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mb-1 text-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                </svg>
    			<span class="hidden xl:block header__text font-gotham">Translate</span>
    			<div class="flex absolute">                      
    		    	<div id="google_translate_element" class="absolute top-0 left-0 h-4 transform -translate-y-1/2 w-16 overflow-hidden opacity-0"></div>
    			</div> -->
            </div>
            <div class="flex items-center">
                <div class="hidden lg:flex flex-col ml-auto xl:flex-row pr-6 items-center">
                    <div class="flex relative transform scale-75">
                        <svg class="header__svg--translate w-16 h-16" viewBox="0 0 512 566">
                            <g class="svg__group svg__group--symbol svg__group--hover-hide">
                                <path class="svg__border" d="M329.4,56.26V246.14a83.35,83.35,0,0,1-83.26,83.26H56.26A83,83,0,0,1,0,307.47V-5.07A83,83,0,0,1,56.26-27H246.14A83.34,83.34,0,0,1,329.4,56.26Z"></path>
                                <path class="svg__block svg__block--symbol" d="M246.14,302.4H56.26A56.26,56.26,0,0,1,0,246.14V56.26A56.26,56.26,0,0,1,56.26,0H246.14A56.26,56.26,0,0,1,302.4,56.26V246.14A56.26,56.26,0,0,1,246.14,302.4Z"></path>
                                <path class="svg__pointer svg__pointer--symbol" d="M358.76,95.34a15,15,0,0,1-6.23,12.18l-112,80.63L0,94.07,177.78,0H237L352.53,83.17A15,15,0,0,1,358.76,95.34Z"></path>
                                <path class="svg__symbol" d="M151.2,173.85a63.93,63.93,0,0,0,17.38-35.94H133.82a63.9,63.9,0,0,0,17.38,35.94Zm0-81.86a8.46,8.46,0,0,1,8.46,8.46V121h37.63a8.46,8.46,0,1,1,0,16.92H185.63a80.72,80.72,0,0,1-21.15,46.52,63.68,63.68,0,0,0,32.81,9.07,8.46,8.46,0,0,1,0,16.92A80.48,80.48,0,0,1,151.2,196h0a80.48,80.48,0,0,1-46.09,14.45,8.46,8.46,0,1,1,0-16.92,63.65,63.65,0,0,0,32.81-9.07,80.63,80.63,0,0,1-21.15-46.52H105.11a8.46,8.46,0,1,1,0-16.92h37.63V100.45A8.46,8.46,0,0,1,151.2,92Z"></path>
                            </g>
                            <g class="svg__group svg__group--letter">
                                <path class="svg__border" d="M512,204.53V517.07A83,83,0,0,1,455.74,539H265.86a83.34,83.34,0,0,1-83.26-83.26V265.86a83.35,83.35,0,0,1,83.26-83.26H455.74A83,83,0,0,1,512,204.53Z"></path>
                                <path class="svg__block svg__block--letter" d="M455.74,512H265.86a56.26,56.26,0,0,1-56.26-56.26V265.86a56.26,56.26,0,0,1,56.26-56.26H455.74A56.26,56.26,0,0,1,512,265.86V455.74A56.26,56.26,0,0,1,455.74,512Z"></path>
                                <path class="svg__pointer svg__pointer--letter" d="M153.24,416.66a15,15,0,0,1,6.23-12.18l112-80.63L512,417.93,334.22,512H275L159.47,428.83A15,15,0,0,1,153.24,416.66Z"></path>
                                <path class="svg__letter" d="M392.37,420c-3.54,0-6.27-1.12-7.07-4.18l-6.11-21.37h-36.8l-6.1,21.37c-.8,3.05-3.54,4.18-7.07,4.18-5.62,0-13.18-3.53-13.18-8.67a9.46,9.46,0,0,1,.32-1.61l31-101.06c1.45-4.82,7.39-7.07,13.34-7.07,6.11,0,12.05,2.25,13.5,7.07l31,101.06a7,7,0,0,1,.32,1.61C405.55,416.31,398,420,392.37,420Zm-45.63-41.94h28l-14-49.32Z"></path>
                            </g>
                            <g class="svg__group svg__group--symbol svg__group--hover-show">
                                <path class="svg__border" d="M329.4,56.26V246.14a83.35,83.35,0,0,1-83.26,83.26H56.26A83,83,0,0,1,0,307.47V-5.07A83,83,0,0,1,56.26-27H246.14A83.34,83.34,0,0,1,329.4,56.26Z"></path>
                                <path class="svg__block svg__block--symbol" d="M246.14,302.4H56.26A56.26,56.26,0,0,1,0,246.14V56.26A56.26,56.26,0,0,1,56.26,0H246.14A56.26,56.26,0,0,1,302.4,56.26V246.14A56.26,56.26,0,0,1,246.14,302.4Z"></path>
                                <path class="svg__pointer svg__pointer--symbol" d="M358.76,95.34a15,15,0,0,1-6.23,12.18l-112,80.63L0,94.07,177.78,0H237L352.53,83.17A15,15,0,0,1,358.76,95.34Z"></path>
                                <path class="svg__symbol" d="M151.2,173.85a63.93,63.93,0,0,0,17.38-35.94H133.82a63.9,63.9,0,0,0,17.38,35.94Zm0-81.86a8.46,8.46,0,0,1,8.46,8.46V121h37.63a8.46,8.46,0,1,1,0,16.92H185.63a80.72,80.72,0,0,1-21.15,46.52,63.68,63.68,0,0,0,32.81,9.07,8.46,8.46,0,0,1,0,16.92A80.48,80.48,0,0,1,151.2,196h0a80.48,80.48,0,0,1-46.09,14.45,8.46,8.46,0,1,1,0-16.92,63.65,63.65,0,0,0,32.81-9.07,80.63,80.63,0,0,1-21.15-46.52H105.11a8.46,8.46,0,1,1,0-16.92h37.63V100.45A8.46,8.46,0,0,1,151.2,92Z"></path>
                            </g>
                        </svg>
                        <!-- The Translate API uses the below div -->
                        <div id="google_translate_element" class="bg-blue absolute top-0 left-0 h-16 w-16 overflow-hidden opacity-0">
                            <div class="skiptranslate goog-te-gadget" dir="ltr" style="">
                                <div id=":0.targetLanguage" style="white-space: nowrap;" class="goog-te-gadget-simple"><img src="https://www.google.com/images/cleardot.gif" class="goog-te-gadget-icon" alt="" style="background-image: url(&quot;https://translate.googleapis.com/translate_static/img/te_ctrl3.gif&quot;); background-position: -65px 0px;"><span style="vertical-align: middle;"><a aria-haspopup="true" class="goog-te-menu-value" href="javascript:void(0)"><span>Select Language</span><img src="https://www.google.com/images/cleardot.gif" alt="" width="1" height="1"><span style="border-left-width: 1px; border-left-style: solid; border-left-color: rgb(187, 187, 187);">​</span><img src="https://www.google.com/images/cleardot.gif" alt="" width="1" height="1"><span style="color: rgb(118, 118, 118);" aria-hidden="true">▼</span></a></span></div>
                            </div>
                        </div>
                    </div>
                    <span class="hidden xl:block -ml-1 header__text font-gotham-light">Translate</span>
                </div>
                <!--CTA Buttons - Consultation & Earn CME-->
                <div class="hidden md:flex items-center border-l border-light-gray border-solid pl-6">
                    <a class="font-gotham-bold text-base text-white rounded-full bg-blue px-4 py-2 transition-all duration-300" title="Earn CME" href="https://lms.projectteachny.org/Users/ProjectTeachUserLogin.aspx">Earn CME</a>
                    <a class="font-gotham-bold text-base text-white rounded-full mx-4 bg-purple px-4 py-2 transition-all duration-300" title="Request A Service" href="/contact-us">Request A Service</a>
                    <!-- <a class="font-gotham-bold text-base text-white rounded-full bg-green px-4 py-2 transition-all duration-300" title="Stay In Touch" href="/stay-in-touch">Stay In Touch</a> -->
                </div>
            </div>
        </div>
    </div>

    <style>
        #gform_submit_button_7 {
            font-family: 'GothamProBold';
            font-size: 16px;
            color: #fff;
            border-radius: 9999px;
            margin: 0 1rem;
            padding: 1rem 2rem;
            background-color: #3a0e79;
            transition: all .3s;
        }
    </style>

    <!-- Navbar Content -->
    <?php include(locate_template('templates/header/default-nav.php', false, false)); ?>
    <?php include(locate_template('templates/banners/page-banner.php', false, false)); ?>
    <?php include(locate_template('templates/utilities/scroll-up.php', false, false)); ?>