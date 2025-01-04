<!DOCTYPE html>
<html <?php language_attributes(); ?> data-bs-theme="dark">
<head>
    <?php wp_head() ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="tigmatemplate">
    <meta name="generator" content="Bootstrap">

    <title> Portfolio </title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/logo/logo.jpg">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/logo/logo.jpg">
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/logo/logo.jpg">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/assets/logo/site.webmanifest">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/libraries/glide/css/glide.core.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/libraries/aos/aos.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">
   
</head>
<body>
    <!-- loader-wrapper -->
    <div class="loader-wrapper">
        <div class="spinner-grow text-primary p-5" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


    <!-- header top -->
    <div class="navigation position-absolute w-100 rounded-bottom-3 rounded-bottom-sm-4">
        <nav class="navbar navbar-expand-xl px-2" aria-label="Offcanvas navbar large">
            <div class="container px-3 py-2">
                <a class="navbar-brand p-1" href="./index.html">
                    <img src="<?php bloginfo('template_url'); ?>/assets/logo/logo.jpg" height="32" alt="logo">
                    <strong class="text-body-emphasis fw-bolder fst-italic"> Andrii Zatochnyi </strong>
                </a>

                <button class="navbar-toggler collapsed" 
                        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
                        aria-controls="offcanvasNavbar2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>

                <div class="offcanvas offcanvas-bottom rounded-top-5 h-auto" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                    <div class="offcanvas-header px-4 pt-4 pb-4">
                        <h5 class="offcanvas-title m-0" id="offcanvasNavbar2Label">
                            <a class="navbar-brand px-2 py-1" href="javascript:;">
                                <img src="<?php bloginfo('template_url'); ?>/assets/logo/logo.jpg" height="32" alt="logo">
                                <strong class="text-body-emphasis fw-bolder fst-italic"> Andrii Zatochnyi </strong>
                            </a>
                        </h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav align-items-xl-center justify-content-center flex-grow-1 column-gap-4 row-gap-4">
                            <li class="nav-item ms-xl-auto" data-bs-dismiss="offcanvas">
                                <a href="javascript:;" onclick="scrollToSection('#home')"
                                    class="nav-link rounded-3 px-3 text-base fw-semibold leading-6 text-body-emphasis bg-body-secondary-hover">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                <a href="javascript:;" onclick="scrollToSection('#projects')"
                                    class="nav-link rounded-3 px-3 text-base fw-semibold leading-6 text-body-emphasis bg-body-secondary-hover">
                                    Projects
                                </a>
                            </li>

                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                <a href="javascript:;" onclick="scrollToSection('#services')"
                                    class="nav-link rounded-3 px-3 text-base fw-semibold leading-6 text-body-emphasis bg-body-secondary-hover">
                                    Services
                                </a>
                            </li>

                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                <a href="javascript:;" onclick="scrollToSection('#faqs')"
                                    class="nav-link rounded-3 px-3 text-base fw-semibold leading-6 text-body-emphasis bg-body-secondary-hover">
                                    FAQs
                                </a>
                            </li>

                            <li class="nav-item ms-xl-auto" data-bs-dismiss="offcanvas">
                                <a href="mailto:andreyz11288@gmail.com"
                                    class="btn btn-primary text-white btn-lg rounded-3 px-3 text-base fw-semibold leading-6 w-100">
                                    Get in touch!
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>