<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>


    <!-- Hero -->
    <div id="home" class="d-flex align-items-center position-relative">
        <div class="container">
            <div class="py-8 py-md-9 py-xl-11">
                <div class="row gy-5 align-items-center justify-content-between">
                    <div class="col-12 col-xl-6 text-center text-xl-start order-xl-last">
                        <div class="max-w-2xl mx-auto mx-xl-0 py-5 py-xl-0">
                            <span class="badge border text-body-emphasis d-inline-flex align-items-center justify-content-between gap-2 rounded-pill fw-medium bg-body-tertiary">
                                <svg class="text-success" viewBox="0 0 6 6" aria-hidden="true" fill="currentColor" width="0.375rem" height="0.375rem">
                                    <circle cx="3" cy="3" r="3"></circle>
                                </svg>
                                Available for hiring!
                            </span>

                            <h1 class="m-0 mt-4 text-body-emphasis fw-bold tracking-tight text-6xl" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                                Web Dev Excellence.
                            </h1>
                            <p class="m-0 mt-4 text-lg leading-8 text-body-secondary" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                                Crafting digital excellence in web dev — your gateway to a standout online presence.
                            </p>
                            <div class="mt-4 pt-3" data-aos-delay="200" data-aos="fade" data-aos-duration="1000">
                                <a href="mailto:andreyz11288@gmail.com" class="btn btn-lg btn-primary text-white text-sm fw-semibold">
                                    Contact me
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-5" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                        <div class="max-w-2xl mx-auto mx-xl-0">
                            <div class="ratio" style="--bs-aspect-ratio: 76.66%;">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/bg/bg1.webp" class="img-fluid object-fit-cover rounded-3 rounded-sm-4 rounded-xl-5" alt="Poeple talking">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container pb-6">
        <h2 class="text-center text-lg fw-semibold leading-8 text-body-emphasis m-0 mb-5">
            Trusted by the world’s most innovative teams at
        </h2>

        <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-5 justify-content-center g-4">
            <div class="d-flex align-items-center column-gap-3">
                <!-- <svg class="img-fuild" viewBox="0 0 352 92" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>Logos</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="logo-nasa" transform="translate(90.000000, 22.000000)" fill="var(--bs-emphasis-color)" fill-rule="nonzero">
                            <path d="M91.3021755,46.5392872 L114.652771,46.5392872 C118.141899,46.5392872 121.005239,45.107617 123.331021,42.243367 C125.567665,39.4700745 126.731011,36.160133 126.731011,32.4035904 C126.731011,24.7986383 116.979463,19.4303298 113.220191,19.4303298 L100.427027,19.4303298 C99.442867,19.4303298 98.6360745,18.9828191 98.0111968,18.2678936 C97.3845,17.4620106 97.0270372,16.5678989 97.0270372,15.4936915 C97.0270372,14.2412074 97.3845,13.1679096 98.0111968,12.2728883 C98.7270319,11.3787766 99.6211436,10.8421277 100.695351,10.8421277 L124.672644,10.8421277 L124.672644,1.26794681 L100.246931,1.26794681 C95.8627819,1.26794681 92.461883,2.61047872 90.0460532,5.20458511 C87.900367,7.62041489 86.82525,10.8412181 86.82525,14.6887181 C86.82525,18.4461702 87.900367,21.7570213 90.0460532,24.4393564 C92.461883,27.3918351 95.326133,28.9144628 98.8152606,28.9144628 L113.578564,28.9144628 C114.471766,28.9144628 115.188511,29.1827872 115.72425,29.8968032 C116.350947,30.6126383 116.619271,31.5076596 116.619271,32.4927287 C116.619271,33.6560745 116.171761,34.7293723 115.455926,35.6243936 C114.650952,36.429367 113.755931,36.8768777 112.594404,36.8768777 L88.9745745,36.8768777 L88.6171117,36.2501809 L79.7596755,7.79960106 L79.3121649,6.90457979 C77.1646596,2.52043085 73.5863936,0.373835106 68.6655957,0.373835106 C65.9814415,0.373835106 63.5656117,0.99962234 61.4181064,2.34215426 C59.1814628,3.6837766 57.7497926,5.65209574 56.9448191,8.1579734 L45.0448564,46.4492394 L55.8706117,46.5401968 L66.7855053,12.452984 C67.0538298,11.3787766 67.6805266,10.8421277 68.4855,10.8421277 C68.9330106,10.8421277 69.2904734,11.0204043 69.5587979,11.2896383 C69.8271223,11.6471011 70.0063085,12.0054734 70.0954468,12.452984 L81.0994787,46.5401968 L91.3021755,46.5401968 L91.3021755,46.5392872 Z M10.779367,15.225367 L10.779367,46.4492394 L0.758585106,46.4492394 L0.758585106,11.8253777 C0.758585106,7.35209043 1.83279255,4.22042553 4.15857447,2.34215426 C5.94770745,0.99962234 8.6318617,0.283787234 12.3893138,0.283787234 C15.4309309,0.283787234 18.0259468,1.17880851 20.3517287,2.87880319 C22.6775106,4.57879787 24.1983191,6.90457979 25.0042021,9.76792021 L31.5349468,32.7610532 L32.6091543,35.8927181 C32.6982926,36.5185053 33.0566649,36.966016 33.4141277,37.3225691 C33.8616383,37.6818511 34.3082394,37.8610372 34.8457979,37.6818511 C35.7408191,37.5927128 36.1883298,37.0551543 36.1883298,36.2501809 L36.1883298,1.35799468 L46.4774362,1.35799468 L46.4774362,35.8026702 C46.4774362,39.6501702 45.5833245,42.5144202 43.7041436,44.5718777 C41.9150106,46.6293351 39.2308564,47.7035426 35.6516809,47.7035426 C32.520016,47.7035426 29.925,47.0768457 27.8675426,46.0035479 C25.3625745,44.7510638 23.7517181,42.7827447 23.035883,40.1868191 L15.5209787,13.972883 L14.9843298,12.2728883 C14.8051436,11.6471011 14.4476809,11.1995904 14.0001702,10.7520798 C13.5526596,10.3937074 13.0160106,10.3045691 12.4793617,10.3937074 C11.9427128,10.4837553 11.58525,10.7520798 11.2268777,11.2887287 C10.9327173,11.7741096 10.7778881,12.331117 10.779367,12.8986755 L10.779367,15.225367 L10.779367,15.225367 Z M170.929053,46.5392872 L159.298324,7.79960106 L158.850814,6.90457979 C156.703309,2.52043085 153.125043,0.373835106 148.204245,0.373835106 C145.52009,0.373835106 143.104261,0.99962234 140.957665,2.34215426 C138.719202,3.6837766 137.289351,5.65209574 136.482559,8.1579734 L124.583505,46.4492394 L135.409261,46.5401968 L146.324154,12.452984 C146.592479,11.3787766 147.219176,10.8421277 148.024149,10.8421277 C148.47166,10.8421277 148.829122,11.0204043 149.097447,11.2896383 C149.36759,11.6471011 149.544957,12.0054734 149.635915,12.452984 L160.639947,46.5401968 L170.929053,46.5401968 L170.929053,46.5392872 L170.929053,46.5392872 Z"></path>
                        </g>
                    </g>
                </svg> -->
                <img src="<?php bloginfo('template_url'); ?>/assets/logo/company/Avice.jpg" height="40" width="40"  class="object-fit-cover" alt="tempalte" loading="lazy">
                <h3 class=" d-flex justify-content-center fw-bold ml-5">Avice</h3>
            </div>

            <div class="d-flex align-items-center column-gap-3">
                <img src="<?php bloginfo('template_url'); ?>/assets/logo/company/Batteribyen.png" height="40" width="40"  class="object-fit-cover" alt="tempalte" loading="lazy">
                <h3 class=" d-flex justify-content-center fw-bold">Batteribyen</h3>
            </div>

            <div class="d-flex align-items-center column-gap-3">
                <img src="<?php bloginfo('template_url'); ?>/assets/logo/company/PH.png" height="40" width="40"  class="object-fit-cover" alt="tempalte" loading="lazy">
                <h4 class=" d-flex justify-content-center fw-bold">Premium Hookahs</h4>
            </div>

            <div class="d-flex align-items-center column-gap-3">
                <img src="<?php bloginfo('template_url'); ?>/assets/logo/company/ImageSkincare.png" height="40" width="40"  class="object-fit-cover" alt="tempalte" loading="lazy">
                <h3 class=" d-flex justify-content-center fw-bold">Image Skincare</h3>
            </div>

            <div class="d-flex align-items-center column-gap-3">
                <img src="<?php bloginfo('template_url'); ?>/assets/logo/company/Singas.png" height="40" width="40"  class="object-fit-cover" alt="tempalte" loading="lazy">
                <h3 class=" d-flex justify-content-center fw-bold">Singas</h3>
            </div>
        </div>
    </div>  


    <!-- projects -->
    <div id="projects" class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
        <div class="container">
            <div class="mb-5 mb-sm-6 mb-xl-7">
                <div class="max-w-xl">
                    <h2 class="m-0 mt-2 fw-bold tracking-tight text-body-emphasis text-4xl">
                        Projects
                    </h2>
                </div>
            </div>

            <div class="row gy-5 gx-sm-5 row-cols-1 row-cols-sm-2">
                <div class="col" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                    <div class="position-relative pt-4">
                        <div class="ratio ratio-4x3">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/bg/bg2.webp"  class="object-fit-cover rounded-3 rounded-sm-4 rounded-xl-5" alt="tempalte" loading="lazy">
                        </div>
                        <a href="javascript:;" class="mt-4 d-block text-xl fw-medium tracking-tight text-decoration-none text-body-tertiary text-body-emphasis-hover stretched-link">
                            Back-End Systems Development
                        </a>
                    </div>
                </div>

                <div class="col" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                    <div class="position-relative pt-4">
                        <div class="ratio ratio-4x3">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/bg/bg3.webp"  class="object-fit-cover rounded-3 rounded-sm-4 rounded-xl-5" alt="tempalte" loading="lazy">
                        </div>
                        <a href="javascript:;" class="mt-4 d-block text-xl fw-medium tracking-tight text-decoration-none text-body-tertiary text-body-emphasis-hover stretched-link">
                            Implementing responsive, user-friendly UI using HTML, CSS/SCSS, and JavaScript
                        </a>
                    </div>
                </div>

                <div class="col" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                    <div class="position-relative pt-4">
                        <div class="ratio ratio-4x3">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/bg/bg4.webp"  class="object-fit-cover rounded-3 rounded-sm-4 rounded-xl-5" alt="tempalte" loading="lazy">
                        </div>
                        <a href="javascript:;" class="mt-4 d-block text-xl fw-medium tracking-tight text-decoration-none text-body-tertiary text-body-emphasis-hover stretched-link">
                             Front-End Systems Development
                        </a>
                    </div>
                </div>

                <div class="col" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                    <div class="position-relative pt-4">
                        <div class="ratio ratio-4x3">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/bg/bg5.webp"  class="object-fit-cover rounded-3 rounded-sm-4 rounded-xl-5" alt="tempalte" loading="lazy">
                        </div>
                        <a href="javascript:;" class="mt-4 d-block text-xl fw-medium tracking-tight text-decoration-none text-body-tertiary text-body-emphasis-hover stretched-link">
                            Database Management
                        </a>
                    </div>
                </div>
            </div>

            <!-- <div class="mt-5 mt-sm-6 mt-xl-7 pt-5 d-flex align-items-center justify-content-center column-gap-3">
                <a href="javascript:;" class="btn btn-lg btn-primary text-white text-sm fw-semibold">
                    Show more
                </a>
            </div> -->
        </div>
    </div>


    <!-- services -->
    <div id="services" class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div>
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                        My services
                    </h2>
                    <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                        Integrated Digital Solutions.
                    </p>
                    <p class="m-0 mt-4 text-body text-lg leading-8">
                        Web, Mobile, and Design Services Tailored for Excellence.
                    </p>
                </div>
            </div>
            <div>
                <div class="row row-cols-1 row-cols-xl-3 gy-5 gx-xl-4 mt-1 justify-content-center justify-content-xl-between">
                    <div class="col pt-5 pt-xl-4">
                        <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                            <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/bg/bg6.webp" class="object-fit-cover rounded-3 rounded-sm-4 rounded-xl-5" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Web Development
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Interactive User Interfaces, Dynamic Server-Side Applications, and E-commerce & Business Platforms.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col pt-5 pt-xl-4">
                        <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                            <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/bg/bg7.webp" class="object-fit-cover rounded-3 rounded-sm-4 rounded-xl-5" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Mobile Development
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Native and Hybrid Apps, User-Centric Design, and Performance Optimization.
                            </p>
                        </div>
                    </div>

                    <div class="col pt-5 pt-xl-4">
                        <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="200" data-aos="fade" data-aos-duration="1000">
                            <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/bg/bg8.webp" class="object-fit-cover rounded-3 rounded-sm-4 rounded-xl-5" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Web Design
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                                Aesthetic & Functional Design, Brand Identity Creation, and Responsive Layouts and Prototyping.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>  

    <!-- Testimonials -->
    <!-- <div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
        <div class="container">
            <div class="glide glideLowGap">
                <div class="max-w-2xl mb-5">
                    <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                        Satisfied Clients Speak Out
                    </h2>
                    <div class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                        Real stories from real customers.
                    </div>
                </div>

                <div class="position-lg-absolute top-0 end-0">
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left btn text-body-emphasis p-0 rounded-circle rtl-flip" data-glide-dir="<">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/> </svg>
                        </button>
                        <button class="glide__arrow glide__arrow--right btn text-body-emphasis p-0 rounded-circle rtl-flip" data-glide-dir=">">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/> </svg>
                        </button>
                    </div>
                </div>

                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide h-auto">
                            <div class="h-100 py-5">
                                <div class="h-100 p-4 p-xl-5 bg-body d-flex flex-column rounded-3 rounded-sm-4 rounded-xl-5 shadow-sm">
                                    <div class="text-body-emphasis">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="ms-n2 bi bi-quote rtl-flip" viewBox="0 0 16 16"> <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/> </svg>
                                    </div>

                                    <p class="text-body text-base leading-7 my-4">
                                        Transformed my web presence with their stellar design and dev services—truly a cut above the rest!
                                    </p>

                                    <div class="d-flex align-items-center column-gap-3 mt-auto">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/small-team/st1.webp" height="40" width="40" class="img-fluid rounded-circle" alt="this is an image" loading="lazy">

                                        <div class="d-flex flex-wrap align-items-center text-sm">
                                            <div class="text-body-secondary fw-semibold">Kade Castillo</div>
                                            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-2 text-body-secondary" fill="currentColor">
                                                <circle cx="1" cy="1" r="1" />
                                            </svg>
                                            <div class="text-body-tertiary">CTO, The Wealth Inc.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="glide__slide h-auto">
                            <div class="h-100 py-5">
                                <div class="h-100 p-4 p-xl-5 bg-body d-flex flex-column rounded-3 rounded-sm-4 rounded-xl-5 shadow-sm">
                                    <div class="text-body-emphasis">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="ms-n2 bi bi-quote rtl-flip" viewBox="0 0 16 16"> <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/> </svg>
                                    </div>

                                    <p class="text-body text-base leading-7 my-4">
                                        Transformed my web presence with their stellar design and dev services—truly a cut above the rest!
                                    </p>

                                    <div class="d-flex align-items-center column-gap-3 mt-auto">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/small-team/st2.webp" height="40" width="40" class="img-fluid rounded-circle" alt="this is an image" loading="lazy">

                                        <div class="d-flex flex-wrap align-items-center text-sm">
                                            <div class="text-body-secondary fw-semibold">Kade Castillo</div>
                                            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-2 text-body-secondary" fill="currentColor">
                                                <circle cx="1" cy="1" r="1" />
                                            </svg>
                                            <div class="text-body-tertiary">CTO, The Wealth Inc.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="glide__slide h-auto">
                            <div class="h-100 py-5">
                                <div class="h-100 p-4 p-xl-5 bg-body d-flex flex-column rounded-3 rounded-sm-4 rounded-xl-5 shadow-sm">
                                    <div class="text-body-emphasis">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="ms-n2 bi bi-quote rtl-flip" viewBox="0 0 16 16"> <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/> </svg>
                                    </div>

                                    <p class="text-body text-base leading-7 my-4">
                                        Transformed my web presence with their stellar design and dev services—truly a cut above the rest!
                                    </p>

                                    <div class="d-flex align-items-center column-gap-3 mt-auto">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/small-team/st3.webp" height="40" width="40" class="img-fluid rounded-circle" alt="this is an image" loading="lazy">

                                        <div class="d-flex flex-wrap align-items-center text-sm">
                                            <div class="text-body-secondary fw-semibold">Kade Castillo</div>
                                            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-2 text-body-secondary" fill="currentColor">
                                                <circle cx="1" cy="1" r="1" />
                                            </svg>
                                            <div class="text-body-tertiary">CTO, The Wealth Inc.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="glide__slide h-auto">
                            <div class="h-100 py-5">
                                <div class="h-100 p-4 p-xl-5 bg-body d-flex flex-column rounded-3 rounded-sm-4 rounded-xl-5 shadow-sm">
                                    <div class="text-body-emphasis">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="ms-n2 bi bi-quote rtl-flip" viewBox="0 0 16 16"> <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/> </svg>
                                    </div>

                                    <p class="text-body text-base leading-7 my-4">
                                        Transformed my web presence with their stellar design and dev services—truly a cut above the rest!
                                    </p>

                                    <div class="d-flex align-items-center column-gap-3 mt-auto">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/small-team/st4.webp" height="40" width="40" class="img-fluid rounded-circle" alt="this is an image" loading="lazy">

                                        <div class="d-flex flex-wrap align-items-center text-sm">
                                            <div class="text-body-secondary fw-semibold">Kade Castillo</div>
                                            <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-2 text-body-secondary" fill="currentColor">
                                                <circle cx="1" cy="1" r="1" />
                                            </svg>
                                            <div class="text-body-tertiary">CTO, The Wealth Inc.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>                       
                    </ul>
                </div>
            </div>
        </div>
    </div> -->


    <!-- FAQs -->
    <div id="faqs" class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="max-w-4xl mx-auto">
                <h2 class="m-0 mb-4 text-body-emphasis tracking-tight leading-10 text-2xl fw-bold">
                    Frequently asked questions
                </h2>

                <div class="accordion accordion-flush pt-2" id="accordionFlushExample2">
                    <div class="accordion-item pb-4" style="border-top: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);">
                        <h3 class="accordion-header">
                            <button class="accordion-button align-items-start p-0 pt-4 text-body-emphasis leading-7 text-base shadow-none collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                What is a pixel?
                            </button>
                        </h3>
                        <div id="flush-collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body p-0 pe-5 mx-0 mb-0 mt-2 text-body-secondary leading-7 text-base">
                                A pixel is the smallest unit of a digital image that displays a specific color and brightness.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item pb-4">
                        <h3 class="accordion-header">
                            <button class="accordion-button align-items-start p-0 pt-4 text-body-emphasis leading-7 text-base shadow-none collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                What is design thinking?
                            </button>
                        </h3>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body p-0 pe-5 mx-0 mb-0 mt-2 text-body-secondary leading-7 text-base">
                                Design thinking is a human-centered approach to problem-solving that involves understanding the needs and emotions of the users, defining the problem, generating and testing ideas, and implementing solutions.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item pb-4">
                        <h3 class="accordion-header">
                            <button class="accordion-button align-items-start p-0 pt-4 text-body-emphasis leading-7 text-base shadow-none collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                What is a QR code?
                            </button>
                        </h3>
                        <div id="flush-collapseThree" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body p-0 pe-5 mx-0 mb-0 mt-2 text-body-secondary leading-7 text-base">
                                A QR code is a type of barcode that can be scanned by a smartphone or a QR reader to access information, such as a website, a text, or an image.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item pb-4">
                        <h3 class="accordion-header">
                            <button class="accordion-button align-items-start p-0 pt-4 text-body-emphasis leading-7 text-base shadow-none collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                What is a wireframe?
                            </button>
                        </h3>
                        <div id="flush-collapseFour" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body p-0 pe-5 mx-0 mb-0 mt-2 text-body-secondary leading-7 text-base">
                                A wireframe is a low-fidelity sketch or blueprint of a website or app that shows the layout, structure, and functionality.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item pb-4">
                        <h3 class="accordion-header">
                            <button class="accordion-button align-items-start p-0 pt-4 text-body-emphasis leading-7 text-base shadow-none collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                What is a chatbot?
                            </button>
                        </h3>
                        <div id="flush-collapseFive" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body p-0 pe-5 mx-0 mb-0 mt-2 text-body-secondary leading-7 text-base">
                                A chatbot is a software program that simulates a conversation with a human user using natural language processing and artificial intelligence.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item pb-4">
                        <h3 class="accordion-header">
                            <button class="accordion-button align-items-start p-0 pt-4 text-body-emphasis leading-7 text-base shadow-none collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                What is a podcast?
                            </button>
                        </h3>
                        <div id="flush-collapseSix" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body p-0 pe-5 mx-0 mb-0 mt-2 text-body-secondary leading-7 text-base">
                                A podcast is a digital audio file that can be downloaded or streamed online and listened to on various devices. Podcasts usually have a theme, topic, or genre.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Call to action -->
    <div class="pb-9 pt-7">
        <div class="container">
            <div class="py-6 position-relative text-white rounded-3 rounded-sm-4 rounded-xl-5 shadow">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/bg/bg10.webp" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover rounded-3 rounded-sm-4 rounded-xl-5" loading="lazy" alt="Meeting">

                <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark rounded-3 rounded-sm-4 rounded-xl-5"
                    style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);">
                </div>

                <div class="px-6">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 tracking-tight text-4xl fw-bold text-center">
                            Ready to Elevate Your Digital Presence?
                        </h2>
                        <p class="m-0 mt-4 text-lg leading-8 text-center">
                            Connect with me and let's build something amazing together.
                        </p>
                        <div class="mt-4 pt-3 text-center">
                            <a href="mailto:andreyz11288@gmail.com" class="btn btn-lg btn-primary text-white text-sm fw-semibold">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <hr class="my-2 text-body-emphasis opacity-10">
    </div>
<!-- <?php the_content(); ?> -->
<?php get_footer(); ?>