<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-wide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{asset('assets') }}"
    data-template="front-pages-no-customizer">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Hafiz-Academy</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('logo.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="{{url('https://fonts.googleapis.com')}}" />
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}" crossorigin />
    <link
        href="{{asset('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap')}}"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-default.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/front-page.css')}}" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{asset('assets/vendor/libs/nouislider/nouislider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />

    <!-- Page CSS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/front-page-landing.css')}}" />

    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/js/front-config.js')}}"></script>
</head>

<body>
<script src="{{asset('assets/vendor/js/dropdown-hover.js')}}"></script>
<script src="{{asset('assets/vendor/js/mega-dropdown.js')}}"></script>

<!-- Navbar: Start -->
<nav class="layout-navbar shadow-none py-0">
    <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
            <!-- Menu logo wrapper: Start -->
            <div class="navbar-brand app-brand demo d-flex py-0 me-4">
                <!-- Mobile menu toggle: Start-->
                <button
                    class="navbar-toggler border-0 px-0 me-2"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="tf-icons bx bx-menu bx-sm align-middle"></i>
                </button>
                <!-- Mobile menu toggle: End-->
                <a href="{{url('/')}}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="{{asset('logo.png')}}" style="width:50px">
              </span>
                    <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Hafiz</span>
                </a>
            </div>
            <!-- Menu logo wrapper: End -->
            <!-- Menu wrapper: Start -->
            <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                <button
                    class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="tf-icons bx bx-x bx-sm"></i>
                </button>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-medium" aria-current="page" href="#landingHero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="#landingFeatures">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="#FeedBack">FeedBack</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="#landingFAQ">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="#landingCourses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="#landingContact">Enroll</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="#landingPricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium" href="#OurStudents">OurStudents</a>
                    </li>
                </ul>
            </div>
            <div class="landing-menu-overlay d-lg-none"></div>
            <!-- Menu wrapper: End -->
            <!-- Toolbar: Start -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- navbar button: Start -->
                <li>
                    <a href="#landingContact" class="btn btn-primary"
                    ><span class="tf-icons bx bx-user me-md-1"></span
                        ><span class="d-none d-md-block">Enroll Now</span></a
                    >
                </li>
                <!-- navbar button: End -->
            </ul>
            <!-- Toolbar: End -->
        </div>
    </div>
</nav>
<!-- Navbar: End -->

<!-- Sections:Start -->

<div data-bs-spy="scroll" class="scrollspy-example">
    <!-- Hero: Start -->
    <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative" style="min-height: 100vh; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); overflow: hidden;">
            <!-- Animated background elements -->
            <div class="position-absolute w-100 h-100" style="top: 0; left: 0; z-index: 1;">
                <div class="floating-shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                    <div class="shape shape-4"></div>
                    <div class="shape shape-5"></div>
                </div>
            </div>
            
            <div class="container position-relative" style="z-index: 2;">
                <div class="row align-items-center min-vh-100">
                    <div class="col-lg-6 text-center text-lg-start">
                        <div class="hero-content">
                            <!-- Badge -->
                            <div class="mb-4">
                                <span class="badge bg-white bg-opacity-20 text-white px-4 py-2 rounded-pill" style="backdrop-filter: blur(10px);">
                                    <i class="bx bx-star me-2"></i><p style="color: black;">Trusted by 1000+ Students Worldwide</p>
                                </span>
                            </div>
                            
                            <!-- Main Title -->
                            <h1 class="display-3 fw-bold text-white mb-4" style="line-height: 1.2; text-shadow: 0 4px 8px rgba(0,0,0,0.3);">
                                Master the <span class="text-warning">Qur'an</span> & <span class="text-warning">Arabic</span> Language
                            </h1>
                            
                            <!-- Subtitle -->
                            <p class="lead text-white-50 mb-5" style="font-size: 1.25rem; line-height: 1.6;">
                                Join our world-class online academy where expert teachers guide you through Quranic studies, 
                                Arabic language mastery, and Islamic education with personalized learning experiences.
                            </p>
                            
                            <!-- CTA Buttons -->
                            <div class="hero-buttons d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                                <a href="#landingContact" class="btn btn-warning btn-lg px-5 py-3 fw-bold shadow-lg" style="border-radius: 50px; transition: all 0.3s ease;">
                                    <i class="bx bx-play-circle me-2"></i>Start Free Trial
                                </a>
                                <a href="#landingCourses" class="btn btn-outline-light btn-lg px-5 py-3 fw-bold" style="border-radius: 50px; border-width: 2px; transition: all 0.3s ease;">
                                    <i class="bx bx-book-open me-2"></i>Explore Courses
                                </a>
                            </div>
                            
                            <!-- Stats -->
                            <div class="row mt-5 pt-4">
                                <div class="col-4 text-center">
                                    <div class="stat-item">
                                        <h3 class="text-white fw-bold mb-1" style="font-size: 2rem;">50K+</h3>
                                        <p class="text-white-50 mb-0 small">Hours Taught</p>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="stat-item">
                                        <h3 class="text-white fw-bold mb-1" style="font-size: 2rem;">1K+</h3>
                                        <p class="text-white-50 mb-0 small">Students</p>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="stat-item">
                                        <h3 class="text-white fw-bold mb-1" style="font-size: 2rem;">24/7</h3>
                                        <p class="text-white-50 mb-0 small">Support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 text-center">
                        <div class="hero-visual mt-5 mt-lg-0">
                            <div class="position-relative">
                                <!-- Main visual element -->
                                <div class="hero-card bg-white bg-opacity-10 p-4 rounded-4" style="backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.2); background-image: url('{{asset('quran.jpg')}}'); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative; min-height: 400px;">
                                    <!-- Overlay for better text readability -->
                                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.4); border-radius: 1rem;"></div>
                                    <div class="text-center position-relative" style="z-index: 2;">
                                        <div class="mb-4">
                                            <i class="bx bx-book-open text-warning" style="font-size: 4rem;"></i>
                                        </div>
                                        <h4 class="text-white mb-3">Interactive Learning</h4>
                                        <p class="text-white-50 mb-0">Experience modern Quranic education with our advanced digital platform</p>
                                    </div>
                                </div>
                                
                                <!-- Floating elements -->
                                <div class="floating-icon floating-icon-1">
                                    <i class="bx bx-mic text-warning"></i>
                                </div>
                                <div class="floating-icon floating-icon-2">
                                    <i class="bx bx-video text-info"></i>
                                </div>
                                <div class="floating-icon floating-icon-3">
                                    <i class="bx bx-chat text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Scroll indicator -->
            <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4" style="z-index: 3;">
                <div class="scroll-indicator">
                    <div class="mouse">
                        <div class="wheel"></div>
                    </div>
                    <div class="arrow"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero: End -->

    <style>
        /* Floating shapes animation */
        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        
        .shape-1 {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .shape-2 {
            width: 120px;
            height: 120px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }
        
        .shape-3 {
            width: 60px;
            height: 60px;
            top: 40%;
            right: 20%;
            animation-delay: 4s;
        }
        
        .shape-4 {
            width: 100px;
            height: 100px;
            bottom: 20%;
            left: 20%;
            animation-delay: 1s;
        }
        
        .shape-5 {
            width: 40px;
            height: 40px;
            top: 80%;
            right: 30%;
            animation-delay: 3s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        /* Floating icons */
        .floating-icon {
            position: absolute;
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            animation: floatIcon 4s ease-in-out infinite;
        }
        
        .floating-icon i {
            font-size: 1.5rem;
        }
        
        .floating-icon-1 {
            top: -30px;
            right: -30px;
            animation-delay: 0s;
        }
        
        .floating-icon-2 {
            bottom: -30px;
            left: -30px;
            animation-delay: 2s;
        }
        
        .floating-icon-3 {
            top: 50%;
            right: -40px;
            animation-delay: 4s;
        }
        
        .floating-icon-4 {
            top: 20%;
            left: -40px;
            animation-delay: 1s;
        }
        
        .floating-icon-5 {
            bottom: 20%;
            right: -50px;
            animation-delay: 3s;
        }
        
        @keyframes floatIcon {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        /* Enhanced floating icon content */
        .icon-content {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }
        
        /* Pulse ring animation */
        .pulse-ring {
            position: absolute;
            width: 100%;
            height: 100%;
            border: 2px solid currentColor;
            border-radius: 50%;
            opacity: 0;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }
        
        /* Icon items hover effects */
        .icon-item {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .icon-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        
        /* Feature items styling */
        .feature-item {
            transition: all 0.3s ease;
        }
        
        .feature-item:hover {
            transform: translateX(5px);
        }
        
        /* Islamic quote styling */
        .islamic-quote {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .islamic-quote::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.1), transparent);
            transition: left 0.5s ease;
        }
        
        .islamic-quote:hover::before {
            left: 100%;
        }
        
        /* Activity cards hover effects */
        .activity-card {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .activity-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        /* Achievement badge animation */
        .achievement-badge {
            animation: badgeGlow 3s ease-in-out infinite;
        }
        
        @keyframes badgeGlow {
            0%, 100% { 
                transform: scale(1);
                box-shadow: 0 0 10px rgba(220, 53, 69, 0.5);
            }
            50% { 
                transform: scale(1.05);
                box-shadow: 0 0 20px rgba(220, 53, 69, 0.8);
            }
        }
        
        /* Scroll indicator */
        .scroll-indicator {
            text-align: center;
        }
        
        .mouse {
            width: 30px;
            height: 50px;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 15px;
            margin: 0 auto 10px;
            position: relative;
        }
        
        .wheel {
            width: 4px;
            height: 8px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 2px;
            position: absolute;
            top: 8px;
            left: 50%;
            transform: translateX(-50%);
            animation: scroll 2s infinite;
        }
        
        @keyframes scroll {
            0% { transform: translateX(-50%) translateY(0); opacity: 1; }
            100% { transform: translateX(-50%) translateY(20px); opacity: 0; }
        }
        
        .arrow {
            width: 20px;
            height: 20px;
            border-right: 2px solid rgba(255, 255, 255, 0.5);
            border-bottom: 2px solid rgba(255, 255, 255, 0.5);
            transform: rotate(45deg);
            margin: 0 auto;
            animation: arrow 2s infinite;
        }
        
        @keyframes arrow {
            0% { opacity: 0; transform: rotate(45deg) translate(-5px, -5px); }
            50% { opacity: 1; }
            100% { opacity: 0; transform: rotate(45deg) translate(5px, 5px); }
        }
        
        /* Button hover effects */
        .btn-warning:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(255, 193, 7, 0.4) !important;
        }
        
        .btn-outline-light:hover {
            transform: translateY(-2px);
            background: rgba(255, 255, 255, 0.1);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem !important;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .hero-buttons .btn {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>

    <!-- Useful features: Start -->
    <section id="landingFeatures" class="section-py landing-features">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">Useful Features</span>
            </div>
            <h3 class="text-center mb-1">
                <span class="section-title">Everything you need</span> to know to start with us
            </h3>
            <p class="text-center mb-3 mb-md-5 pb-3">
                We Assure you the following features.
            </p>
            <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('arabic.png')}}" alt="laptop charging" style="width:70px"/>
                    </div>
                    <h5 class="mb-3">Multilingual Teachers</h5>
                    <p class="features-icon-description">
                        Professional teachers fluent in Arabic, English, and Urdu ensure effective learning at Quran Online Academy.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('family.png')}}" alt="transition up" style="width:70px"/>
                    </div>
                    <h5 class="mb-3">Courses For Kids & Adults</h5>
                    <p class="features-icon-description">
                        Our courses offer programs tailored for both kids and adults with experienced teachers can teach kids and adults.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('free-trial.png')}}" alt="edit" style="width:70px"/>
                    </div>
                    <h5 class="mb-3">Free Trial Classes</h5>
                    <p class="features-icon-description">
                        Before starting with us, enjoy a free trial lesson to meet the teacher and experience our teaching process.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('responsive.png')}}" alt="3d select solid" style="width:70px"/>
                    </div>
                    <h5 class="mb-3">Anywhere, Any Device</h5>
                    <p class="features-icon-description">
                        Experience easy online learning from any device, at your own pace and schedule, all from the comfort of home.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('working-hours.png')}}" alt="lifebelt" style="width:70px"/>
                    </div>
                    <h5 class="mb-3">24/7 Flexible Schedule</h5>
                    <p class="features-icon-description">Enjoy a 24/7 flexible schedule, allowing you to learn at any time that suits you, design your own schedule.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('couple.png')}}" alt="google docs" style="width:70px"/>
                    </div>
                    <h5 class="mb-3">Males&Females Tutors</h5>
                    <p class="features-icon-description">Experienced Male and Female Quran Tutors at our academy, offering options for both brothers and sisters who prefer learning from tutors of the same gender.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Useful features: End -->

    <!-- Real customers reviews: Start -->
    <section id="FeedBack" class="section-py bg-body landing-reviews pb-0">
        <!-- What people say slider: Start -->
        <div class="container">
            <div class="row align-items-center gx-0 gy-4 g-lg-5">
                <div class="col-md-6 col-lg-5 col-xl-3">
                    <div class="mb-3 pb-1">
                        <span class="badge bg-label-primary">Real Customers Reviews</span>
                    </div>
                    <h3 class="mb-1"><span class="section-title">What people say</span></h3>
                    <p class="mb-3 mb-md-5">
                        See what our customers have to<br class="d-none d-xl-block" />
                        say about their experience.
                    </p>
                    <div class="landing-reviews-btns d-flex align-items-center gap-3">
                        <button id="reviews-previous-btn" class="btn btn-label-primary reviews-btn" type="button">
                            <i class="bx bx-chevron-left bx-sm"></i>
                        </button>
                        <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn" type="button">
                            <i class="bx bx-chevron-right bx-sm"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-9">
                    <div class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3">
                        <div class="swiper" id="swiper-reviews">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <p class="text-center">
                                                "I've tried various online platforms to learn Quran and Arabic, but none have compared to the experience I've had at this academy. The curriculum is well-structured and the
                                                instructors are highly qualified."
                                            </p>
                                            <div class="text-warning d-flex align-items-center mb-3 justify-content-center">
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('3.png')}}" alt="Avatar" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Mohamed Khan </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <p class="text-center">
                                                "My daughter has been attending classes at this academy and the education quality consistently impresses me. Teachers are not just knowledgeable but genuinely care about progress.
                                                Her confidence in Quranic recitation and Islamic understanding has soared."
                                            </p>
                                            <div class="text-warning d-flex align-items-center mb-3 justify-content-center">
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('5.png')}}" alt="Avatar" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Aisha Mahmoud </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <p class="text-center">
                                                "I was hesitant about Arabic and Islamic studies. But this academy surprised me with its supportive environment and effective teaching. Complex concepts become clear, and I've made remarkable
                                                progress quickly. Grateful for this spiritual journey."
                                            </p>
                                            <div class="text-warning d-flex align-items-center mb-3 justify-content-center">
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('4.png')}}" alt="Avatar" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Abdullah Patel </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <p class="text-center">
                                                "I was hesitant about Arabic and Islamic studies. But this academy surprised me with its supportive environment and effective teaching. Complex concepts become clear, and I've made remarkable
                                                progress quickly. Grateful for this spiritual journey."
                                            </p>
                                            <div class="text-warning d-flex align-items-center mb-3 justify-content-center">
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                                <i class="bx bxs-star bx-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('4.png')}}" alt="Avatar" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Abdullah Patel </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- What people say slider: End -->

    </section>
    <!-- Real customers reviews: End -->

    <!-- Courses -->
    <section id="landingCourses" class="section-py landing-fun-facts">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">Courses</span>
            </div>
            <h3 class="text-center mb-1">
                <span class="section-title">Our Courses
            </h3>
            <p class="text-center mb-3 mb-md-5 pb-3">
                These Courses We Provide For Adults & Kids
            </p>
            <div class="row gy-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-primary shadow-none">
                        <div class="card-body text-center">
                            <img src="{{asset('6.png')}}" alt="laptop" class="mb-2" style="width:70px"/>
                            <h5 class="h2 mb-1">Quran</h5>
                            <p class="fw-medium mb-0">
                                you can learn how to memorise the Holy Qur'an and become a Hafiz/Hafiz of the Qur'an.
                            </p><br>
                            <a href="#" class="btn btn-primary">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-success shadow-none">
                        <div class="card-body text-center">
                            <img src="{{asset('7.png')}}" alt="laptop" class="mb-2" style="width:70px"/>
                            <h5 class="h2 mb-1">Fiqh</h5>
                            <p class="fw-medium mb-0">
                                FIQH provides clear guidance on how to lead a good and meaningful life in accordance with Islamic teachings.
                            </p><br>
                            <a href="#" class="btn btn-primary">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-info shadow-none">
                        <div class="card-body text-center">
                            <img src="{{asset('8.png')}}" alt="laptop" class="mb-2" style="width:70px"/>
                            <h5 class="h2 mb-1">Aqeedah</h5>
                            <p class="fw-medium mb-0">
                                Learning the correct Islamic Aqeedah is mandatory for our lives and to determine our destiny in the hereafter.
                            </p><br>
                            <a href="#" class="btn btn-primary">Enroll Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-warning shadow-none">
                        <div class="card-body text-center">
                            <img src="{{asset('9.png')}}" alt="laptop" class="mb-2" style="width:70px"/>
                            <h5 class="h2 mb-1">Arabic</h5>
                            <p class="fw-medium mb-0">
                                Knowledge of Arabic opens the door to vast resources of Islamic knowledge. You can start learn it with us now.
                            </p><br>
                            <a href="#" class="btn btn-primary">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses -->

    <!-- Pricing plans: Start -->
    <section id="landingPricing" class="section-py landing-pricing bg-body">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">Pricing Plans</span>
            </div>
            <h3 class="text-center mb-1"><span class="section-title">Packages</span></h3>
            <div class="row gy-4 pt-lg-3">
                <!-- Package 1: Start -->
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <img
                                    src="{{asset('assets/img/front-pages/icons/paper-airplane.png')}}"
                                    alt="paper airplane icon"
                                    class="mb-4 pb-2 scaleX-n1-rtl" />
                                <h4 class="mb-1">Package 1</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="price-monthly h1 text-primary fw-bold mb-0">25 pounds</span>
                                    <sub class="h6 text-muted mb-0 ms-1">/month</sub>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="bx bx-check bx-xs"></i
                            ></span>
                                        Free Trial
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="bx bx-check bx-xs"></i
                            ></span>
                                        30 minutes/class
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="bx bx-check bx-xs"></i
                            ></span>
                                        8 Classes
                                    </h5>
                                </li>
                            </ul>
                            <div class="d-grid mt-4 pt-3">
                                <a href="#Enroll" class="btn btn-label-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Package 1: End -->
                <!-- Package 2: Start -->
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <img
                                    src="{{asset('assets/img/front-pages/icons/paper-airplane.png')}}"
                                    alt="paper airplane icon"
                                    class="mb-4 pb-2 scaleX-n1-rtl" />
                                <h4 class="mb-1">Package 2</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="price-monthly h1 text-primary fw-bold mb-0">30 pounds</span>
                                    <sub class="h6 text-muted mb-0 ms-1">/month</sub>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="bx bx-check bx-xs"></i
                            ></span>
                                        Free Trial
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="bx bx-check bx-xs"></i
                            ></span>
                                        1 hour/class
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="bx bx-check bx-xs"></i
                            ></span>
                                        5 Classes
                                    </h5>
                                </li>
                            </ul>
                            <div class="d-grid mt-4 pt-3">
                                <a href="#Enroll" class="btn btn-label-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Package 2: End -->
                <!-- Package 3: Start -->
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <img
                                    src="{{asset('assets/img/front-pages/icons/paper-airplane.png')}}"
                                    alt="paper airplane icon"
                                    class="mb-4 pb-2 scaleX-n1-rtl" />
                                <h4 class="mb-1">Package 3</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="price-monthly h1 text-primary fw-bold mb-0">40 pounds</span>
                                    <sub class="h6 text-muted mb-0 ms-1">/month</sub>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="bx bx-check bx-xs"></i
                            ></span>
                                        Free Trial
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="bx bx-check bx-xs"></i
                            ></span>
                                        1 hour/class
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-2"
                        ><i class="bx bx-check bx-xs"></i
                            ></span>
                                        7 Classes
                                    </h5>
                                </li>
                            </ul>
                            <div class="d-grid mt-4 pt-3">
                                <a href="#Enroll" class="btn btn-label-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Package 3: End -->
            </div>
        </div>
    </section>
    <!-- Pricing plans: End -->

    <!-- Fun facts: Start -->
    <section id="landingFunFacts" class="section-py landing-fun-facts">
        <div class="container">
            <div class="row gy-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-primary shadow-none">
                        <div class="card-body text-center">
                            <img src="../../assets/img/front-pages/icons/laptop.png" alt="laptop" class="mb-2" />
                            <h5 class="h2 mb-1">50000k+</h5>
                            <p class="fw-medium mb-0">
                                 Hours<br />
                                Conducted Online
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-success shadow-none">
                        <div class="card-body text-center">
                            <img src="../../assets/img/front-pages/icons/user-success.png" alt="laptop" class="mb-2" />
                            <h5 class="h2 mb-1">1k+</h5>
                            <p class="fw-medium mb-0">
                                Student<br />
                                WorldWide
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-info shadow-none">
                        <div class="card-body text-center">
                            <img src="../../assets/img/front-pages/icons/diamond-info.png" alt="laptop" class="mb-2" />
                            <h5 class="h2 mb-1">+500</h5>
                            <p class="fw-medium mb-0">
                                Student<br />
                                Give Positive Feedback
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-warning shadow-none">
                        <div class="card-body text-center">
                            <img src="../../assets/img/front-pages/icons/check-warning.png" alt="laptop" class="mb-2" />
                            <h5 class="h2 mb-1">100%</h5>
                            <p class="fw-medium mb-0">
                                Time<br />
                                Flexibility
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fun facts: End -->

    <!-- FAQ: Start -->
    <section id="landingFAQ" class="section-py bg-body landing-faq">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">FAQ</span>
            </div>
            <h3 class="text-center mb-1">Frequently asked <span class="section-title">questions</span></h3>
            <p class="text-center mb-5 pb-3">Browse through these FAQs to find answers to commonly asked questions.</p>
            <div class="row gy-5">
                <div class="col-lg-5">
                    <div class="text-center">
                        <img
                            src="{{asset('man.png')}}"
                            alt="faq boy with logos"
                            class="faq-image" />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion accordion-header-primary" id="accordionExample">
                        <div class="card accordion-item active">
                            <h2 class="accordion-header" id="headingOne">
                                <button
                                    type="button"
                                    class="accordion-button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionOne"
                                    aria-expanded="true"
                                    aria-controls="accordionOne">
                                    What courses do you offer for Quran learning?
                                </button>
                            </h2>

                            <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We offer a variety of courses including Quran reading, Tajweed (pronunciation rules), Quran memorization (Hifz),
                                    and Quran translation with Tafseer (explanation) to cater to different levels and learning goals.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionTwo"
                                    aria-expanded="false"
                                    aria-controls="accordionTwo">
                                    How are the classes conducted?
                                </button>
                            </h2>
                            <div
                                id="accordionTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our classes are conducted live via one-on-one sessions with qualified teachers.
                                    We use video conferencing tools and interactive whiteboards to ensure a
                                    personalized and engaging learning experience.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionThree"
                                    aria-expanded="false"
                                    aria-controls="accordionThree">
                                    Can I choose my class schedule?
                                </button>
                            </h2>
                            <div
                                id="accordionThree"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we provide flexible scheduling options. You can choose the days and
                                    times that best fit your availability, and rescheduling is possible with
                                    prior notice.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionFour"
                                    aria-expanded="false"
                                    aria-controls="accordionFour">
                                    Do you offer trial classes?
                                </button>
                            </h2>
                            <div
                                id="accordionFour"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we offer a free trial class to help you experience our
                                    teaching methods and decide if our program meets your expectations
                                    before committing to a full course.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button
                                    type="button"
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordionFive"
                                    aria-expanded="false"
                                    aria-controls="accordionFive">
                                    What are the payment options?
                                </button>
                            </h2>
                            <div
                                id="accordionFive"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We accept payments through various methods,
                                    including credit/debit cards, PayPal, and bank transfers.
                                    You can choose to pay monthly, quarterly, or annually based on
                                    the plan you select.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ: End -->

    <!-- Contact Us: Start -->
    <section id="landingContact" class="section-py landing-contact">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">Enroll Now</span>
            </div>
            <h3 class="text-center mb-1"><span class="section-title">Let's Study</span> together</h3>
            <p class="text-center mb-4 mb-lg-5 pb-md-3">Fill The Form And We Will Contact You Soon.</p>
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="contact-img-box position-relative border p-2 h-100">
                        <img
                            src="{{asset('enroll.jpg')}}"
                            alt="contact customer service"
                            class="contact-img w-100 scaleX-n1-rtl img-fluid" />
                        <div class="pt-3 px-4 pb-1">
                            <div class="row gy-3 gx-md-4">
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge bg-label-primary rounded p-2 me-2"><i class="bx bx-envelope bx-sm"></i></div>
                                        <div>
                                            <p class="mb-0">Email</p>
                                            <h5 class="mb-0">
                                                <a href="mailto:elmajd1000@gmail.com" class="text-heading">nehadeid530@gmail.com</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge bg-label-success rounded p-2 me-2">
                                            <i class="bx bx-phone-call bx-sm"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Phone</p>
                                            <h5 class="mb-0"><a href="tel:+1234-568-963" class="text-heading">+201017662671</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-1">Enroll Now</h4>
                            <p class="mb-4">
                                Fill the below form and we will contact you soon.
                            </p>
                            <form>
                                <div class="row g-4">
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">Full Name</label>
                                        <input type="text" class="form-control" name="name" required id="contact-form-fullname" placeholder="mohamed" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-email">Email</label>
                                        <input
                                            type="text"
                                            id="contact-form-email"
                                            class="form-control"
                                            placeholder="mohamed@gmail.com" required name="email" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">Phone</label>
                                        <input type="text" class="form-control" required name="phone" id="contact-form-fullname" placeholder="+201554134201" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">Student Age</label>
                                        <input type="number" class="form-control" required name="student_age" id="contact-form-fullname" placeholder="ahmed" />
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">Student Gender</label>
                                        <select type="number" class="form-control" required name="student_gender" id="contact-form-fullname">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">Teacher Gender</label>
                                        <select type="number" class="form-control" required name="teacher_gender" id="contact-form-fullname">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">Course Title </label>
                                        <select type="number" class="form-control" required name="course" id="contact-form-fullname">
                                            <option value="Quran with tajweed">Quran with tajweed</option>
                                            <option value="Arabic">Arabic</option>
                                            <option value="Islamic studies">Islamic studies</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">Desired Package </label>
                                        <select type="number" class="form-control" required name="package" id="contact-form-fullname">
                                            <option value="package1">Package1</option>
                                            <option value="package2">Package2</option>
                                            <option value="package3">Package3</option>
                                            <option value="package1">Package4</option>
                                            <option value="package2">Package5</option>
                                            <option value="package3">Package6</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="contact-form-fullname">Preferred Day </label>
                                        <input type="text" class="form-control" required name="days" id="contact-form-fullname" placeholder="Sunday, Monday, ..." />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="contact-form-message">Message</label>
                                        <textarea
                                            id="contact-form-message"
                                            class="form-control"
                                            rows="9"
                                            name="message"
                                            placeholder="Send Us More Details If you need"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Enroll Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function() {
                $('form').on('submit', function(event) {
                    event.preventDefault(); // Prevent form from submitting normally

                    var formData = $(this).serialize(); // Serialize form data
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: '/enrolls', // Replace with your server script
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                          if(response.status === 'success'){
                              console.log('done');
                              Swal.fire(
                                  'Done!',
                                  'We Will Contact You Soon',
                                  'success'
                              )
                          }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    });
                });
            });
        </script>
    </section>
    <!-- Contact Us: End -->

    <!-- FAQ: Start -->
    <section id="OurStudents" class="section-py bg-body landing-faq">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">Our Students Sessions</span>
            </div>
            <h3 class="text-center mb-1">Live Sessions With Our Students And Teachers</h3>
            <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                    <div>
                        <div class="card">
                            <video width="320" height="240" controls>
                                <source src="{{ asset('new_1.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="card-body text-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal2">
                                    Watch Video
                                </button>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="videoModal2" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center" id="videoModalLabel">Hafiz Academy Sessions</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Local Video -->
                                        <div class="ratio ratio-16x9">
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset('new_2.mp4') }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                    <div>
                        <div class="card">
                            <video width="320" height="240" controls>
                                <source src="{{ asset('new_2.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="card-body text-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal2">
                                    Watch Video
                                </button>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="videoModal2" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center" id="videoModalLabel">Hafiz Academy Sessions</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Local Video -->
                                        <div class="ratio ratio-16x9">
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset('new_2.mp4') }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                    <div>
                        <div class="card">
                            <video width="320" height="240" controls>
                                <source src="{{ asset('new_3.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="card-body text-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal3">
                                    Watch Video
                                </button>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="videoModal3" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center" id="videoModalLabel">Hafiz Academy Sessions</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Local Video -->
                                        <div class="ratio ratio-16x9">
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset('new_3.mp4') }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                    <div>
                        <div class="card">
                            <video width="320" height="240" controls>
                                <source src="{{ asset('new_4.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="card-body text-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal4">
                                    Watch Video
                                </button>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="videoModal4" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center" id="videoModalLabel">Hafiz Academy Sessions</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Local Video -->
                                        <div class="ratio ratio-16x9">
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset('new_4.mp4') }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    <!-- FAQ: End -->
</div>

<script>
    $('#videoModal1').on('hide.bs.modal', function (e) {
        var video = $("video")[0]; // assuming you have only one video on the page
        video.pause();
    });
</script>

<!-- / Sections:End -->

<!-- Footer: Start -->
<footer class="landing-footer bg-body footer-text">
    <div class="footer-top">
        <div class="container">
            <div class="row gx-0 gy-4 g-md-5">
                <div class="col-lg-5">
                    <a href="#landingHero" class="app-brand-link mb-4">
                <span class="app-brand-logo demo">
                    <img src="{{asset('logo.png')}}" width="50px">
                </span>
                        <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">Hafiz</span>
                    </a>
                    <p class="footer-text footer-logo-description mb-4">
                        Established 6 years ago, have many student from around the world.
                    </p>
                    <a class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top" href="#Enroll">Enroll Now</a>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6">
                    <h6 class="footer-title mb-4">Pages</h6>
                    <ul class="list-unstyled mb-md-0">
                        <li class="mb-3">
                            <a href="#landingHero" class="footer-link">Home</a>
                        </li>
                        <li class="mb-3">
                            <a href="#landingPricing" class="footer-link">Pricing</a>
                        </li>
                        <li class="mb-3">
                            <a href="#landingContact" class="footer-link">Enroll</a>

                        </li>
                        <li class="mb-3">
                            <a href="#landingFAQ" class="footer-link">Faq</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <h6 class="footer-title mb-4">More Pages</h6>

                    <ul class="list-unstyled mb-md-0">
                        <li class="mb-3">
                            <a href="#FeedBack" class="footer-link">FeedBack</a>
                        </li>
                        <li class="mb-3">
                            <a href="#landingCourses" class="footer-link">Courses</a>
                        </li>
                        <li class="mb-3">
                            <a href="#landingFeatures" class="footer-link">Features</a>
                        </li>
                        <li class="mb-3">
                            <a href="#OurStudents" class="footer-link">OurStudents</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-3">
        <div
            class="container d-flex flex-wrap justify-content-center flex-md-row flex-column text-center text-md-start">
            <div class="mb-2 mb-md-0">
            <span class="footer-text"
            >©
              <script>
                document.write(new Date().getFullYear());
              </script>
            </span>
                <a href="https://www.facebook.com/profile.php?id=61571489512337" target="_blank" class="fw-medium text-white footer-link">Created By Tech-Nest Agency</a>
            </div>
        </div>
    </div>
</footer>
<!-- Footer: End -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('assets/vendor/libs/nouislider/nouislider.js')}}"></script>
<script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/front-main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('assets/js/front-page-landing.js')}}"></script>
</body>
</html>
