@extends('guest.layouts.master')

@push('style')
@endpush

@section('content')
    <!--Hero Banner Start-->
    <section class="main-slider-one">
        <div class="main-slider-one__shape-top"></div>
        <div class="main-slider-one__shape1 wow slideInDown" data-wow-delay="200ms"><img
                src="assets/images/shapes/slider-shape-1.png" alt="kidearn" /> </div>
        <div class="main-slider-one__shape2 wow slideInDown" data-wow-delay="300ms"><img
                src="assets/images/shapes/slider-shape-2.png" alt="kidearn" /> </div>
        <div class="main-slider-one__shape3 wow slideInLeft" data-wow-delay="300ms"><img
                src="assets/images/shapes/slider-shape-3.png" alt="kidearn" /> </div>
        <div class="main-slider-one__shape4 wow fadeInLeft" data-wow-delay="400ms"><img
                src="assets/images/shapes/slider-shape-4.png" alt="kidearn" /> </div>
        <div class="main-slider-one__shape5 wow fadeInUp" data-wow-delay="500ms"><img
                src="assets/images/shapes/slider-shape-5.png" alt="kidearn" /> </div>
        <div class="main-slider-one__carousel kidearn-owl__carousel owl-carousel"
            data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeIn",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 1000,
		"nav": false,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": true,
		"margin": 0
	    }'>
            <div class="item">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg"
                        style="background-image: url({{ asset('storage/assets/images/hero1_1608x772.png') }});"></div>
                    <svg class="main-slider-one__bg-svg" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect class='circle0 steap' x="5.2%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle1 steap' x="15.6%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle2 steap' x="26%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle3 steap' x="36.4%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle4 steap' x="46.8%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle5 steap' x="57%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle6 steap' x="67.7%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle7 steap' x="78.1%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle8 steap' x="88.5%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle9 steap' x="100%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                    </svg>
                    <div class="main-slider-one__svg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 773 733">
                            <path
                                d="M766.449 344.71C723.383 224.387 615.502 120.579 484.704 58.6348C405.86 21.3126 315.17 -2.10426 229.851 9.65815C68.0967 31.9738 3.68962 159.21 6.17025 289.153C8.89967 431.928 93.1812 610.551 227.531 710.871C235.198 716.6 243.042 721.931 251.112 726.874"
                                stroke="var(--kidearn-white)" stroke-width="12" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-dasharray="24 24" />
                        </svg>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-slider-one__content">
                                    <h5 class="main-slider-one__sub-title">Kindergarten & Baby Care School</h5>
                                    <!-- slider-sub-title -->
                                    <h2 class="main-slider-one__title">
                                        <span class="main-slider-one__title__anim">Together we’ll</span>
                                        <span class="main-slider-one__title__anim">explore new</span>
                                        <span class="main-slider-one__title__anim">things</span>
                                    </h2><!-- slider-title -->
                                    <div class="main-slider-one__btn">
                                        <a href="about.html" class="kidearn-btn">
                                            <span>Learn More</span>
                                        </a><!-- slider-btn -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg"
                        style="background-image: url({{ asset('storage/assets/images/hero2_1608x772.png') }});"></div>
                    <svg class="main-slider-one__bg-svg" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect class='circle0 steap' x="5.2%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle1 steap' x="15.6%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle2 steap' x="26%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle3 steap' x="36.4%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle4 steap' x="46.8%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle5 steap' x="57%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle6 steap' x="67.7%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle7 steap' x="78.1%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle8 steap' x="88.5%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle9 steap' x="100%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                    </svg>
                    <div class="main-slider-one__svg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 773 733">
                            <path
                                d="M766.449 344.71C723.383 224.387 615.502 120.579 484.704 58.6348C405.86 21.3126 315.17 -2.10426 229.851 9.65815C68.0967 31.9738 3.68962 159.21 6.17025 289.153C8.89967 431.928 93.1812 610.551 227.531 710.871C235.198 716.6 243.042 721.931 251.112 726.874"
                                stroke="var(--kidearn-white)" stroke-width="12" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-dasharray="24 24" />
                        </svg>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-slider-one__content">
                                    <h5 class="main-slider-one__sub-title">Kindergarten & Baby Care School</h5>
                                    <!-- slider-sub-title -->
                                    <h2 class="main-slider-one__title">
                                        <span class="main-slider-one__title__anim">Together we’ll</span>
                                        <span class="main-slider-one__title__anim">explore new</span>
                                        <span class="main-slider-one__title__anim">things</span>
                                    </h2><!-- slider-title -->
                                    <div class="main-slider-one__btn">
                                        <a href="about.html" class="kidearn-btn">
                                            <span>Learn More</span>
                                        </a><!-- slider-btn -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg"
                        style="background-image: url({{ asset('storage/assets/images/hero3_1608x772.png') }});"></div>
                    <svg class="main-slider-one__bg-svg" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect class='circle0 steap' x="5.2%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle1 steap' x="15.6%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle2 steap' x="26%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle3 steap' x="36.4%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle4 steap' x="46.8%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle5 steap' x="57%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle6 steap' x="67.7%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle7 steap' x="78.1%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle8 steap' x="88.5%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                        <rect class='circle9 steap' x="100%" y="0" rx="0" ry="0"
                            width="100%" height="100%" />
                    </svg>
                    <div class="main-slider-one__svg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 773 733">
                            <path
                                d="M766.449 344.71C723.383 224.387 615.502 120.579 484.704 58.6348C405.86 21.3126 315.17 -2.10426 229.851 9.65815C68.0967 31.9738 3.68962 159.21 6.17025 289.153C8.89967 431.928 93.1812 610.551 227.531 710.871C235.198 716.6 243.042 721.931 251.112 726.874"
                                stroke="var(--kidearn-white)" stroke-width="12" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-dasharray="24 24" />
                        </svg>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-slider-one__content">
                                    <h5 class="main-slider-one__sub-title">Kindergarten & Baby Care School</h5>
                                    <!-- slider-sub-title -->
                                    <h2 class="main-slider-one__title">
                                        <span class="main-slider-one__title__anim">Together we’ll</span>
                                        <span class="main-slider-one__title__anim">explore new</span>
                                        <span class="main-slider-one__title__anim">things</span>
                                    </h2><!-- slider-title -->
                                    <div class="main-slider-one__btn">
                                        <a href="about.html" class="kidearn-btn">
                                            <span>Learn More</span>
                                        </a><!-- slider-btn -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-one__shape-bottom"></div>
    </section>
    <section class="service-three">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="service-three__item" style="--accent-color: #F25334;">
                        <div class="service-three__item__shape"></div>
                        <div class="service-three__item__icon"><span class="icon-eco-house"></span></div>
                        <h4 class="service-three__item__title">Home-like environment</h4>
                    </div>
                </div><!-- /.service-item -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="service-three__item" style="--accent-color: #75C137;">
                        <div class="service-three__item__shape"></div>
                        <div class="service-three__item__icon"><span class="icon-safety"></span></div>
                        <h4 class="service-three__item__title">Safety and scurity</h4>
                    </div>
                </div><!-- /.service-item -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="service-three__item" style="--accent-color: #26A6A1;">
                        <div class="service-three__item__shape"></div>
                        <div class="service-three__item__icon"><span class="icon-presentation"></span></div>
                        <h4 class="service-three__item__title">Quality educators</h4>
                    </div>
                </div><!-- /.service-item -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="service-three__item" style="--accent-color: #FFAA23;">
                        <div class="service-three__item__shape"></div>
                        <div class="service-three__item__icon"><span class="icon-happy-children"></span></div>
                        <h4 class="service-three__item__title">Play to learn</h4>
                    </div>
                </div><!-- /.service-item -->
            </div>
        </div>
    </section>
    <section class="video-one">
        <div class="video-one__bg"></div>
        <div class="video-one__bg-shape1 kidearn-splax"
            data-para-options='{"orientation": "down", "scale": 1.9, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true}'>
            <img src="assets/images/shapes/video-shape-1.png" alt="kidearn" />
        </div>
        <div class="video-one__bg-shape2 kidearn-splax"
            data-para-options='{"orientation": "up", "scale": 1.7, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true}'>
            <img src="assets/images/shapes/video-shape-2.png" alt="kidearn" />
        </div>
        <div class="video-one__bg-shape3 kidearn-splax"
            data-para-options='{"orientation": "right", "scale": 1.8, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true}'>
            <img src="assets/images/shapes/video-shape-3.png" alt="kidearn" />
        </div>
        <div class="video-one__bg-shape4 kidearn-splax"
            data-para-options='{"orientation": "right", "scale": 1.6, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true}'>
            <img src="assets/images/shapes/video-shape-4.png" alt="kidearn" />
        </div>
        <div class="video-one__bg-shape5 kidearn-splax"
            data-para-options='{"orientation": "left", "scale": 1.6, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true}'>
            <img src="assets/images/shapes/video-shape-5.png" alt="kidearn" />
        </div>
        <div class="video-one__bg-shape6 kidearn-splax"
            data-para-options='{"orientation": "right", "scale": 1.7, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true}'>
            <img src="assets/images/shapes/video-shape-6.png" alt="kidearn" />
        </div>
        <div class="video-one__bg-shape7 kidearn-splax"
            data-para-options='{"orientation": "left", "scale": 1.3, "delay": ".6", "transition": "cubic-bezier(0,0,0,1)", "overflow": true}'>
            <img src="assets/images/shapes/video-shape-7.png" alt="kidearn" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-flex align-items-center">
                    <div class="video-one__content">
                        <h3 class="video-one__content__title">
                            Let’s discover the best school through a video tour
                        </h3>
                        <a href="https://www.lyceum.lk/" class="kidearn-btn">
                            <span>Visit Now</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="video-one__btn-shape">
                        <div class="video-one__btn">
                            <img src="{{ asset('storage/assets/images/Cover_Kids_Parallax.png') }}" alt="kidearn" />
                            <a href="https://www.youtube.com/watch?v=hQavTDWd6mE" class="video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="program-three program-three--home-four" style="margin-top: 250px;">
        <div class="program-three__top-shape"></div>
        <div class="program-three__top-bg">
            <div class="program-three__top-bg__inner"
                style="background-image: url(assets/images/shapes/program-bg-shape-3.png);"></div>
        </div>
        <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline">Our Programs</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title">We meet kids at their level<br> regardless of their age</h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row gutter-y-30">
                <div class="col-xl-3 col-md-6">
                    <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'
                        style='--accent-color: #F25334;'>
                        <div class="program-three__item__image">
                            <img src="assets/images/program/program-3-1.jpg" alt="Toddler">
                        </div><!-- /.program-one__item__image -->
                        <div class="program-three__item__content">
                            <div class="program-three__item__icon">
                                <span class="icon-crawling-baby-silhouette"></span>
                            </div><!-- /.program-three__item__icon -->
                            <h3 class="program-three__item__title"><a href="programs-d-toddler.html">Toddler</a></h3>
                            <!-- /.program-three__item__title -->
                            <div class="program-three__item__age">(1.5-3 years)</div><!-- /.program-three__item__age -->
                            <p class="program-three__item__text">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been</p><!-- /.program-three__item__text -->
                            <a class="program-three__item__rm" href="programs-d-toddler.html"><span
                                    class="icon-right-arrow"></span></a><!-- /.program-three__item__text -->
                        </div><!-- /.program-three__item__content -->
                    </div><!-- /.program-three__item__one -->
                </div><!-- /.program-item -->
                <div class="col-xl-3 col-md-6">
                    <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'
                        style='--accent-color: #75C137;'>
                        <div class="program-three__item__image">
                            <img src="assets/images/program/program-3-2.jpg" alt="Preschool">
                        </div><!-- /.program-one__item__image -->
                        <div class="program-three__item__content">
                            <div class="program-three__item__icon">
                                <span class="icon-playtime"></span>
                            </div><!-- /.program-three__item__icon -->
                            <h3 class="program-three__item__title"><a href="programs-d-preschool.html">Preschool</a></h3>
                            <!-- /.program-three__item__title -->
                            <div class="program-three__item__age">(2-3 years)</div><!-- /.program-three__item__age -->
                            <p class="program-three__item__text">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been</p><!-- /.program-three__item__text -->
                            <a class="program-three__item__rm" href="programs-d-preschool.html"><span
                                    class="icon-right-arrow"></span></a><!-- /.program-three__item__text -->
                        </div><!-- /.program-three__item__content -->
                    </div><!-- /.program-three__item__one -->
                </div><!-- /.program-item -->
                <div class="col-xl-3 col-md-6">
                    <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'
                        style='--accent-color: #2390FF;'>
                        <div class="program-three__item__image">
                            <img src="assets/images/program/program-3-3.jpg" alt="Kindergarten">
                        </div><!-- /.program-one__item__image -->
                        <div class="program-three__item__content">
                            <div class="program-three__item__icon">
                                <span class="icon-fun"></span>
                            </div><!-- /.program-three__item__icon -->
                            <h3 class="program-three__item__title"><a href="programs-d-kindergarten.html">Kindergarten</a>
                            </h3><!-- /.program-three__item__title -->
                            <div class="program-three__item__age">(4-5 years)</div><!-- /.program-three__item__age -->
                            <p class="program-three__item__text">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been</p><!-- /.program-three__item__text -->
                            <a class="program-three__item__rm" href="programs-d-kindergarten.html"><span
                                    class="icon-right-arrow"></span></a><!-- /.program-three__item__text -->
                        </div><!-- /.program-three__item__content -->
                    </div><!-- /.program-three__item__one -->
                </div><!-- /.program-item -->
                <div class="col-xl-3 col-md-6">
                    <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'
                        style='--accent-color: #FFAA23;'>
                        <div class="program-three__item__image">
                            <img src="assets/images/program/program-3-4.jpg" alt="Flex-care">
                        </div><!-- /.program-one__item__image -->
                        <div class="program-three__item__content">
                            <div class="program-three__item__icon">
                                <span class="icon-charity"></span>
                            </div><!-- /.program-three__item__icon -->
                            <h3 class="program-three__item__title"><a href="programs-d-flex-care.html">Flex-care</a></h3>
                            <!-- /.program-three__item__title -->
                            <div class="program-three__item__age">(5-12 years)</div><!-- /.program-three__item__age -->
                            <p class="program-three__item__text">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been</p><!-- /.program-three__item__text -->
                            <a class="program-three__item__rm" href="programs-d-flex-care.html"><span
                                    class="icon-right-arrow"></span></a><!-- /.program-three__item__text -->
                        </div><!-- /.program-three__item__content -->
                    </div><!-- /.program-three__item__one -->
                </div><!-- /.program-item -->
            </div>
        </div>
    </section>
    <section class="testimonial-one">
        <div class="testimonial-one__pen kidearn-splax"
            data-para-options='{
                    "orientation": "left",
                    "scale": 2.5,
                    "overflow": true
                    }'>
            <img src="assets/images/shapes/pen.png" alt="kidearn" />
        </div>
        <div class="container">
            <div class="testimonial-one__area">
                <div class="testimonial-one__bg"></div>
                <div class="testimonial-one__bg-shape kidearn-splax"
                    style="
                        background-image: url(assets/images/shapes/testimonial-shape-1.png);
                    "
                    data-para-options='{
                "orientation": "down",
                "scale": 1.5,
                "delay": ".3",
                "transition": "cubic-bezier(0,0,0,1)",
                "overflow": true
                }'>
                </div>
                <div class="testimonial-one__star-left">
                    <img src="assets/images/shapes/star1.png" alt="kidearn" />
                </div>
                <div class="testimonial-one__star-right">
                    <img src="assets/images/shapes/star2.png" alt="kidearn" />
                </div>
                <div class="sec-title text-center">
                    <h6 class="sec-title__tagline">Testimonial</h6>
                    <!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">
                        Parents' words are the key<br />
                        to happy kids
                    </h3>
                    <!-- /.sec-title__title -->
                </div>
                <!-- /.sec-title -->
                <div class="testimonial-one__carousel kidearn-owl__carousel owl-carousel owl-theme"
                    data-owl-options='{
                    "items": 1,
                    "margin": 0,
                    "loop": true,
                    "smartSpeed": 700,
                    "nav": true,
                    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                    "dots": false,
                    "autoplay": false
                    }'>
                    <div class="item">
                        <div class="testimonial-one__item">
                            <div class="testimonial-one__item__quote">
                                Flexible Classes refers to the process of acquiring
                                knowledge or skills through the use of digital technologies
                                and the internet. Flexible Classes refers to the process
                                flexible Classes refers to the process
                            </div>
                            <div class="testimonial-one__item__author">
                                <img src="assets/images/resources/testi-author-1.png" alt="kidearn" />
                                <h5 class="testimonial-one__item__author__name">
                                    Justin Nguyen
                                </h5>
                                <p class="testimonial-one__item__author__designation">
                                    Martin’s Father
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-one__item">
                            <div class="testimonial-one__item__quote">
                                Flexible Classes refers to the process of acquiring
                                knowledge or skills through the use of digital technologies
                                and the internet. Flexible Classes refers to the process
                                flexible Classes refers to the process
                            </div>
                            <div class="testimonial-one__item__author">
                                <img src="assets/images/resources/testi-author-2.png" alt="kidearn" />
                                <h5 class="testimonial-one__item__author__name">
                                    Sarah Taylor
                                </h5>
                                <p class="testimonial-one__item__author__designation">
                                    Martin’s Mother
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="funfact-two">
        <div class="funfact-two__shape" style="background-image: url(assets/images/shapes/funfact-bg-2.png);"></div>
        <div class="funfact-two__shape2 kidearn-splax"
            data-para-options='{"orientation": "left", "scale": 1.5, "delay": ".3", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
            }'>
            <img src="assets/images/shapes/funfact-shape-6.png" alt="kidearn" />
        </div>
        <div class="funfact-two__shape3 kidearn-splax"
            data-para-options='{"orientation": "right", "scale": 1.5, "delay": ".4", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
            }'>
            <img src="assets/images/shapes/funfact-shape-7.png" alt="kidearn" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 d-flex align-items-center">
                    <div class="funfact-two__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline">Check Funfacts</h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title">We make difference in the<br> life of child</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <div class="row gutter-y-30">
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="funfact-two__item" style="--accent-color: #75C137;">
                                    <div class="funfact-two__icon"><span class="icon-graduated"></span></div>
                                    <div class="funfact-two__count">
                                        <span class="count-box">
                                            <span class="count-text" data-stop="10.5" data-speed="1500"></span>
                                        </span>K
                                    </div><!-- /.funfact-two__count -->
                                    <p class="funfact-two__title">Student Enrolled</p><!-- /.funfact-two__title -->
                                </div><!-- /.fact-item -->
                            </div>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="funfact-two__item" style="--accent-color: #26A6A1;">
                                    <div class="funfact-two__icon"><span class="icon-online-learning"></span></div>
                                    <div class="funfact-two__count">
                                        <span class="count-box">
                                            <span class="count-text" data-stop="700" data-speed="1500"></span>
                                        </span>+
                                    </div><!-- /.funfact-two__count -->
                                    <p class="funfact-two__title">Class completed</p><!-- /.funfact-two__title -->
                                </div><!-- /.fact-item -->
                            </div>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="funfact-two__item" style="--accent-color: #FFAA23;">
                                    <div class="funfact-two__icon"><span class="icon-rating"></span></div>
                                    <div class="funfact-two__count">
                                        <span class="count-box">
                                            <span class="count-text" data-stop="96.5" data-speed="1500"></span>
                                        </span>%
                                    </div><!-- /.funfact-two__count -->
                                    <p class="funfact-two__title">satisfaction rate</p><!-- /.funfact-two__title -->
                                </div><!-- /.fact-item -->
                            </div>
                            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="funfact-two__item" style="--accent-color: #2390FF;">
                                    <div class="funfact-two__icon"><span class="icon-instructor"></span></div>
                                    <div class="funfact-two__count">
                                        <span class="count-box">
                                            <span class="count-text" data-stop="500" data-speed="1500"></span>
                                        </span>+
                                    </div><!-- /.funfact-two__count -->
                                    <p class="funfact-two__title">Top instructors</p><!-- /.funfact-two__title -->
                                </div><!-- /.fact-item -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="kidearn-stretch-element-inside-column">
                        <div class="funfact-two__image wow slideInRight" data-wow-delay="300ms">
                            <img src="{{ asset('storage/assets/images/stats_879x725.jpg') }}" alt="kidearn">
                        </div><!-- /.why-choose-one__image -->
                    </div><!-- /.ogency-stretch-element-inside-column -->
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.funfact-two -->
    <section class="mail-one">
        <div class="mail-one__bg-shape" style="background-image: url(assets/images/shapes/mail-shape-1.png)"></div>
        <div class="mail-one__border-shape kidearn-splax"
            style="background-image: url(assets/images/shapes/mail-shape-2.png)"
            data-para-options='{
                "orientation": "down",
                "scale": 1.2,
                "delay": ".6",
                "transition": "cubic-bezier(0,0,0,1)",
                "overflow": true
                }'>
        </div>
        <div class="container">
            <div class="mail-one__area">
                <div class="mail-one__bg"></div>
                <div class="mail-one__content">
                    <h3 class="mail-one__title">
                        Subscribe to our newsletter<br />
                        for daily updates
                    </h3>
                    <form action="#" data-url="MAILCHIMP_FORM_URL" class="mail-one__form mc-form">
                        <input type="text" name="EMAIL" placeholder="Email Address" />
                        <button type="submit" class="kidearn-btn">
                            <span>Subscribe</span>
                        </button>
                    </form>
                    <!-- /. mc-form -->
                    <div class="mc-form__response"></div>
                    <!-- /.mc-form__response -->
                </div>
                <div class="mail-one__shape kidearn-splax"
                    data-para-options='{
                    "orientation": "up",
                    "scale": 1.5,
                    "delay": ".6",
                    "transition": "cubic-bezier(0,0,0,1)",
                    "overflow": true
                    }'>
                    <img src="assets/images/shapes/mail-shape-3.png" alt="kidearn" />
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.mail-one -->
@endsection

@push('script')
@endpush
