@extends('layouts.master')
@section('title') Blog @endsection

@section('content')

    <!-- بنر مدرن و حرفه‌ای -->
    <!-- بنر مدرن و حرفه‌ای با رنگ‌بندی دارک و زرد -->
    <section class="hero d-flex align-items-center" style="min-height: 500px; background: linear-gradient(135deg, #121212, #1c1c1c);">
        <div class="container text-center text-md-start">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h1 class="display-4 fw-bold text-warning" style="font-family: 'Vazirmatn', sans-serif; letter-spacing: 1.2px; line-height: 1.2; text-shadow: 0 0 12px #ffc107cc;">
                        یادگیری برنامه‌نویسی<br>با بهترین دوره‌های فارسی
                    </h1>
                    <p class="lead text-light opacity-75 mt-3 mb-4" style="max-width: 480px; font-size: 1.2rem; line-height: 1.4;">
                        از مبتدی تا حرفه‌ای، با اساتید باتجربه و پروژه‌محور یاد بگیر!
                    </p>
                    <a href="#" class="btn btn-warning btn-lg px-5 fw-semibold shadow-lg" style="border-radius: 50px; transition: all 0.3s ease;">
                        🚀 شروع یادگیری
                    </a>
                </div>
                <div class="col-md-5 d-none d-md-block">
                    <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="Coding Illustration" class="img-fluid" style="filter: drop-shadow(0 0 12px #ffc107cc); max-height: 320px;">
                </div>
            </div>
        </div>
    </section>



    <!-- دوره‌ها مدرن و حرفه‌ای -->
    <section class="py-5" style="background: #121212;">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold text-warning" style="text-shadow: 0 0 12px #ffc107cc; font-family: 'Vazirmatn', sans-serif;">
                🔥 دوره‌های پیشنهادی
            </h2>
            <div class="row g-4">
                @foreach ([
                    ['title' => 'آموزش HTML & CSS', 'desc' => 'یادگیری طراحی سایت از صفر همراه با پروژه واقعی.'],
                    ['title' => 'جاوااسکریپت پیشرفته', 'desc' => 'مباحث مهم، async، DOM و پروژه نهایی.'],
                    ['title' => 'پایتون مقدماتی تا پیشرفته', 'desc' => 'شروعی عالی برای ورود به بازار کار برنامه‌نویسی.']
                ] as $course)
                    <div class="col-md-4">
                        <div class="card bg-dark rounded-4 border-0 h-100 shadow-lg course-card">
                            <img src="https://via.placeholder.com/400x200" class="card-img-top rounded-top-4" alt="{{ $course['title'] }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-warning fw-semibold" style="letter-spacing: 0.7px; font-size: 1.3rem;">
                                    {{ $course['title'] }}
                                </h5>
                                <p class="card-text text-light opacity-75 flex-grow-1" style="font-size: 0.95rem; line-height: 1.4;">
                                    {{ $course['desc'] }}
                                </p>
                                <a href="#" class="btn btn-warning fw-bold mt-3 shadow-sm py-2" style="border-radius: 30px; transition: transform 0.3s ease;">
                                    مشاهده دوره
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <style>
        .course-card {
            background: linear-gradient(145deg, #232526, #1c1c1c);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        .course-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 12px 25px rgba(255, 193, 7, 0.6);
        }
        .course-card img {
            transition: transform 0.3s ease;
        }
        .course-card:hover img {
            transform: scale(1.05);
        }
        .btn-warning:hover {
            background-color: #e0a800 !important;
            color: #1c1c1c !important;
            box-shadow: 0 8px 15px rgba(224, 168, 0, 0.7);
            transform: scale(1.05);
        }
    </style>

    <section class="py-5" style="background: #121212; direction: rtl;">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold text-warning" style="text-shadow: 0 0 12px #ffc107cc; font-family: 'Vazirmatn', sans-serif;">
                🔥 پرمخاطب‌ترین دوره‌ها
            </h2>

            <div id="popularCoursesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000" data-bs-wrap="true">
                <div class="carousel-inner">

                    @php
                        $courses = [
                            ['title' => 'آموزش HTML & CSS', 'desc' => 'یادگیری طراحی سایت از صفر همراه با پروژه واقعی.', 'img' => 'https://via.placeholder.com/400x200?text=HTML+%26+CSS'],
                            ['title' => 'جاوااسکریپت پیشرفته', 'desc' => 'مباحث مهم، async، DOM و پروژه نهایی.', 'img' => 'https://via.placeholder.com/400x200?text=JavaScript'],
                            ['title' => 'پایتون مقدماتی تا پیشرفته', 'desc' => 'شروعی عالی برای ورود به بازار کار برنامه‌نویسی.', 'img' => 'https://via.placeholder.com/400x200?text=Python'],
                            ['title' => 'لاراول حرفه‌ای', 'desc' => 'توسعه وب با فریمورک لاراول به صورت پروژه محور.', 'img' => 'https://via.placeholder.com/400x200?text=Laravel'],
                            ['title' => 'ری‌اکت جی‌اس', 'desc' => 'ساخت رابط کاربری مدرن با React.js.', 'img' => 'https://via.placeholder.com/400x200?text=React'],
                            ['title' => 'دیتابیس MySQL', 'desc' => 'آموزش طراحی و بهینه‌سازی دیتابیس MySQL.', 'img' => 'https://via.placeholder.com/400x200?text=MySQL'],
                        ];
                        $chunks = array_chunk($courses, 3);
                    @endphp

                    @foreach($chunks as $index => $chunk)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="row g-4 justify-content-center">
                                @foreach($chunk as $course)
                                    <div class="col-md-4">
                                        <div class="card bg-dark rounded-4 border-0 h-100 shadow-lg course-card">
                                            <img src="https://mahd25.github.io/Django-E-booklet/Images/season-nine.jpeg" class="card-img-top rounded-top-4" alt="{{ $course['title'] }}">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title text-warning fw-semibold" style="letter-spacing: 0.7px; font-size: 1.3rem;">
                                                    {{ $course['title'] }}
                                                </h5>
                                                <p class="card-text text-light opacity-75 flex-grow-1" style="font-size: 0.95rem; line-height: 1.4;">
                                                    {{ $course['desc'] }}
                                                </p>
                                                <a href="#" class="btn btn-warning fw-bold mt-3 shadow-sm py-2" style="border-radius: 30px; transition: transform 0.3s ease;">
                                                    مشاهده دوره
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- کلیدهای ناوبری حرفه‌ای -->
                <button class="carousel-control-prev" type="button" data-bs-target="#popularCoursesCarousel" data-bs-slide="prev"
                        style="width: 3.8rem; height: 3.8rem; top: 50%; transform: translateY(-50%); background-color: rgba(255, 193, 7, 0.15); border-radius: 50%; border: none; transition: background-color 0.3s;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1) drop-shadow(0 0 2px #ffc107);"></span>
                    <span class="visually-hidden">قبلی</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#popularCoursesCarousel" data-bs-slide="next"
                        style="width: 3.8rem; height: 3.8rem; top: 50%; transform: translateY(-50%); background-color: rgba(255, 193, 7, 0.15); border-radius: 50%; border: none; transition: background-color 0.3s;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1) drop-shadow(0 0 2px #ffc107);"></span>
                    <span class="visually-hidden">بعدی</span>
                </button>
            </div>
        </div>
    </section>

    <style>
        .course-card {
            background: linear-gradient(145deg, #232526, #1c1c1c);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        .course-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 12px 25px rgba(255, 193, 7, 0.6);
        }
        .course-card img {
            transition: transform 0.3s ease;
        }
        .course-card:hover img {
            transform: scale(1.05);
        }
        .btn-warning:hover {
            background-color: #e0a800 !important;
            color: #1c1c1c !important;
            box-shadow: 0 8px 15px rgba(224, 168, 0, 0.7);
            transform: scale(1.05);
        }
        /* کلیدهای اسلایدر */
        #popularCoursesCarousel .carousel-control-prev:hover,
        #popularCoursesCarousel .carousel-control-next:hover {
            background-color: rgba(255, 193, 7, 0.4) !important;
        }
    </style>


    <style>
        #popularCoursesCarousel .carousel-control-prev:hover,
        #popularCoursesCarousel .carousel-control-next:hover {
            background-color: rgba(255, 193, 7, 0.4) !important;
        }

        #popularCoursesCarousel .btn-outline-warning:hover {
            background-color: #ffc107 !important;
            color: #212529 !important;
        }
    </style>



    <!-- مزایا مدرن و حرفه‌ای - نسخه بهبود یافته -->
    <section class="py-5" style="background: linear-gradient(135deg, #121212, #1c1c1c);">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold text-warning" style="text-shadow: 0 0 12px #ffc107cc; font-family: 'Vazirmatn', sans-serif; letter-spacing: 1.5px;">
                📌 چرا ما؟
            </h2>
            <div class="row g-4 justify-content-center text-center text-light">

                <div class="col-md-4">
                    <div class="advantage-card p-4 rounded-4 h-100 d-flex flex-column align-items-center shadow-lg"
                         style="background: rgba(255 255 255 / 0.07); backdrop-filter: blur(14px);
                            border: 1px solid rgba(255 193 7, 0.3);
                            transition: transform 0.3s ease, box-shadow 0.3s ease;
                            cursor: default;">
                        <i class="bi bi-camera-video-fill fs-1 text-warning mb-3" style="text-shadow: 0 0 6px #ffc107cc;"></i>
                        <h5 class="fw-semibold mb-2" style="letter-spacing: 0.8px; font-size: 1.25rem;">آموزش ویدئویی با کیفیت</h5>
                        <p class="opacity-75" style="line-height: 1.6; font-size: 1rem;">
                            تمامی دوره‌ها با کیفیت بالا و زبان ساده ضبط شده‌اند.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="advantage-card p-4 rounded-4 h-100 d-flex flex-column align-items-center shadow-lg"
                         style="background: rgba(255 255 255 / 0.07); backdrop-filter: blur(14px);
                            border: 1px solid rgba(40, 167, 69, 0.3);
                            transition: transform 0.3s ease, box-shadow 0.3s ease;
                            cursor: default;">
                        <i class="bi bi-person-check-fill fs-1 text-success mb-3" style="text-shadow: 0 0 6px #28a745cc;"></i>
                        <h5 class="fw-semibold mb-2" style="letter-spacing: 0.8px; font-size: 1.25rem;">اساتید باتجربه</h5>
                        <p class="opacity-75" style="line-height: 1.6; font-size: 1rem;">
                            مدرسانی از صنعت واقعی که با پروژه‌ها کار کرده‌اند.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="advantage-card p-4 rounded-4 h-100 d-flex flex-column align-items-center shadow-lg"
                         style="background: rgba(255 255 255 / 0.07); backdrop-filter: blur(14px);
                            border: 1px solid rgba(13, 110, 253, 0.3);
                            transition: transform 0.3s ease, box-shadow 0.3s ease;
                            cursor: default;">
                        <i class="bi bi-clock-history fs-1 text-info mb-3" style="text-shadow: 0 0 6px #0d6efdcc;"></i>
                        <h5 class="fw-semibold mb-2" style="letter-spacing: 0.8px; font-size: 1.25rem;">دسترسی دائمی</h5>
                        <p class="opacity-75" style="line-height: 1.6; font-size: 1rem;">
                            بعد از خرید، دوره‌ها همیشه در دسترس شما هستند.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <style>
        .advantage-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 25px rgba(0, 210, 255, 0.5);
            background: rgba(255 255 255 / 0.12);
        }
    </style>


    <!-- نظرات کاربران - اسلایدر حرفه‌ای و مینیمال با 3 نظر در هر اسلاید -->
    <section class="py-5" style="background: #121212;">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold text-warning" style="font-family: 'Vazirmatn', sans-serif; letter-spacing: 2px; font-size: 2.5rem; text-shadow: 0 0 10px #ffc107bb;">
                <i class="bi bi-chat-dots-fill" style="color: #ff0000; font-size: 2.5rem; vertical-align: middle; margin-left: 0.5rem;"></i> نظرات کاربران
            </h2>


            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="9000" data-bs-pause="hover">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row justify-content-center gx-4 gy-4">
                            <div class="col-md-4">
                                <div class="testimonial-minimal p-4 rounded-4 bg-light bg-opacity-10 border border-warning border-opacity-25 shadow-sm">
                                    <p class="mb-4 fst-italic text-light" style="font-size: 1.125rem; line-height: 1.8; border-left: 4px solid #ffc107; padding-left: 1rem;">
                                        "واقعا آموزش‌ها عالی و پروژه‌محور بودن. از خرید این دوره خیلی راضیم!"
                                    </p>
                                    <footer class="text-warning fw-semibold" style="font-size: 1rem; letter-spacing: 0.15em; font-family: monospace;">
                                        — سارا احمدی
                                    </footer>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="testimonial-minimal p-4 rounded-4 bg-light bg-opacity-10 border border-warning border-opacity-25 shadow-sm">
                                    <p class="mb-4 fst-italic text-light" style="font-size: 1.125rem; line-height: 1.8; border-left: 4px solid #ffc107; padding-left: 1rem;">
                                        "با دیدن این دوره‌ها تونستم اولین پروژه فریلنسری خودمو بگیرم."
                                    </p>
                                    <footer class="text-warning fw-semibold" style="font-size: 1rem; letter-spacing: 0.15em; font-family: monospace;">
                                        — رضا مرادی
                                    </footer>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="testimonial-minimal p-4 rounded-4 bg-light bg-opacity-10 border border-warning border-opacity-25 shadow-sm">
                                    <p class="mb-4 fst-italic text-light" style="font-size: 1.125rem; line-height: 1.8; border-left: 4px solid #ffc107; padding-left: 1rem;">
                                        "اساتید بسیار حرفه‌ای و پشتیبانی عالی، تجربه‌ای بی‌نظیر."
                                    </p>
                                    <footer class="text-warning fw-semibold" style="font-size: 1rem; letter-spacing: 0.15em; font-family: monospace;">
                                        — نازنین جعفری
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row justify-content-center gx-4 gy-4">
                            <div class="col-md-4">
                                <div class="testimonial-minimal p-4 rounded-4 bg-light bg-opacity-10 border border-warning border-opacity-25 shadow-sm">
                                    <p class="mb-4 fst-italic text-light" style="font-size: 1.125rem; line-height: 1.8; border-left: 4px solid #ffc107; padding-left: 1rem;">
                                        "دوره‌ها کاربردی و پروژه‌محور بودند، عالی برای شروع یادگیری."
                                    </p>
                                    <footer class="text-warning fw-semibold" style="font-size: 1rem; letter-spacing: 0.15em; font-family: monospace;">
                                        — امیر حسینی
                                    </footer>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="testimonial-minimal p-4 rounded-4 bg-light bg-opacity-10 border border-warning border-opacity-25 shadow-sm">
                                    <p class="mb-4 fst-italic text-light" style="font-size: 1.125rem; line-height: 1.8; border-left: 4px solid #ffc107; padding-left: 1rem;">
                                        "پشتیبانی عالی و پاسخگویی سریع، فوق‌العاده بود."
                                    </p>
                                    <footer class="text-warning fw-semibold" style="font-size: 1rem; letter-spacing: 0.15em; font-family: monospace;">
                                        — الهام کاظمی
                                    </footer>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="testimonial-minimal p-4 rounded-4 bg-light bg-opacity-10 border border-warning border-opacity-25 shadow-sm">
                                    <p class="mb-4 fst-italic text-light" style="font-size: 1.125rem; line-height: 1.8; border-left: 4px solid #ffc107; padding-left: 1rem;">
                                        "یادگیری با این دوره‌ها ساده و لذت‌بخش بود."
                                    </p>
                                    <footer class="text-warning fw-semibold" style="font-size: 1rem; letter-spacing: 0.15em; font-family: monospace;">
                                        — مهرداد شریفی
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev" aria-label="قبلی">
                    <span class="carousel-control-prev-icon rounded-circle shadow" aria-hidden="true" style="filter: drop-shadow(0 0 8px #ffc107); background-color: #232526;"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next" aria-label="بعدی">
                    <span class="carousel-control-next-icon rounded-circle shadow" aria-hidden="true" style="filter: drop-shadow(0 0 8px #ffc107); background-color: #232526;"></span>
                </button>
            </div>
        </div>
    </section>

    <style>
        .testimonial-minimal {
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            cursor: default;
        }
        .testimonial-minimal:hover {
            background-color: rgba(255, 193, 7, 0.15);
            box-shadow: 0 8px 20px rgba(255, 193, 7, 0.4);
            border-color: #ffc107 !important;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-size: 2.5rem 2.5rem;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 3.5rem;
            height: 3.5rem;
            top: 50%;
            transform: translateY(-50%);
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #232526;
            border-radius: 50%;
            box-shadow: 0 0 12px #ffc107cc;
        }
    </style>



    <!-- سوالات متداول - مینیمال و مدرن -->
    <section class="faq py-5" style="background: #0a0a0a;">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold text-warning" style="font-family: 'Vazirmatn', sans-serif; letter-spacing: 2px; font-size: 2.5rem;">
                ❓ سوالات متداول
            </h2>
            <div class="accordion accordion-flush" id="faqAccordion">

                <div class="accordion-item border-0 mb-3 rounded-3" style="background: #121212;">
                    <h2 class="accordion-header" id="headingOne">
                        <button
                            class="accordion-button collapsed bg-transparent text-warning fw-semibold fs-5"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#q1"
                            aria-expanded="false"
                            aria-controls="q1"
                            style="box-shadow: none; border: none; padding-left: 0;">
                            چطور ثبت‌نام کنم؟
                        </button>
                    </h2>
                    <div
                        id="q1"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-light opacity-75 fs-6" style="padding-left: 1.5rem;">
                            از طریق دکمه ثبت‌نام در بالا می‌تونید حساب کاربری بسازید.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0 mb-3 rounded-3" style="background: #121212;">
                    <h2 class="accordion-header" id="headingTwo">
                        <button
                            class="accordion-button collapsed bg-transparent text-warning fw-semibold fs-5"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#q2"
                            aria-expanded="false"
                            aria-controls="q2"
                            style="box-shadow: none; border: none; padding-left: 0;">
                            آیا مدرک پایان دوره داده می‌شود؟
                        </button>
                    </h2>
                    <div
                        id="q2"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-light opacity-75 fs-6" style="padding-left: 1.5rem;">
                            بله، پس از پایان دوره و قبولی در آزمون، مدرک صادر می‌شود.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        /* حذف آیکون پیش‌فرض آکاردئون و افزودن فلش ساده */
        .accordion-button::after {
            content: '\25B6'; /* ► */
            font-size: 1.25rem;
            color: #ffc107;
            transition: transform 0.3s ease;
            transform-origin: center;
        }
        .accordion-button.collapsed::after {
            transform: rotate(0deg);
        }
        .accordion-button:not(.collapsed)::after {
            transform: rotate(90deg);
        }
        /* حذف سایه و تغییر رنگ پس‌زمینه دکمه هنگام باز شدن */
        .accordion-button {
            box-shadow: none !important;
            background: transparent !important;
        }
        .accordion-button:focus {
            box-shadow: none !important;
        }
    </style>


    <!-- تماس با ما - حرفه‌ای و جمع‌وجور -->
    <section class="py-5" style="background: #0a0a0a;">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold text-warning"
                style="font-family: 'Vazirmatn', sans-serif; letter-spacing: 2px; font-size: 2.4rem; text-shadow: 0 0 6px #000;">
                📞 ارتباط با ما
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-8">
                    <form class="p-3 rounded-4" style="background: #121212; border: 1px solid #222; box-shadow: 0 4px 10px rgb(0 0 0 / 0.5); direction: rtl;">

                        <div class="mb-3 position-relative">
                            <input
                                id="name"
                                type="text"
                                class="form-control bg-transparent border-0 border-bottom ps-5"
                                placeholder="نام شما"
                                style="border-color: #333 !important; box-shadow: none; color: #eee; height: 42px;"
                                autocomplete="off"
                                required
                            >
                            <i class="bi bi-person-fill position-absolute"
                               style="left: 12px; top: 50%; transform: translateY(-50%); font-size: 1.2rem; color: #ffc107;"></i>
                        </div>

                        <div class="mb-3 position-relative">
                            <input
                                id="email"
                                type="email"
                                class="form-control bg-transparent border-0 border-bottom ps-5"
                                placeholder="example@email.com"
                                style="border-color: #333 !important; box-shadow: none; color: #eee; height: 42px;"
                                autocomplete="off"
                                required
                            >
                            <i class="bi bi-envelope-fill position-absolute"
                               style="left: 12px; top: 50%; transform: translateY(-50%); font-size: 1.2rem; color: #ffc107;"></i>
                        </div>

                        <div class="mb-3 position-relative">
            <textarea
                id="message"
                rows="4"
                class="form-control bg-transparent border-0 border-bottom ps-5 pt-2"
                placeholder="متن پیام شما"
                style="border-color: #333 !important; box-shadow: none; color: #eee; resize: none; min-height: 90px;"
                required
            ></textarea>
                            <i class="bi bi-chat-left-text-fill position-absolute"
                               style="left: 12px; top: 1.2rem; font-size: 1.2rem; color: #ffc107;"></i>
                        </div>

                        <button
                            type="submit"
                            class="btn w-100 fw-semibold text-dark"
                            style="background: #ffc107; letter-spacing: 1.1px; font-size: 1.05rem; transition: background 0.3s ease; border-radius: 30px;"
                            onmouseover="this.style.background='#e6b800'"
                            onmouseout="this.style.background='#ffc107'"
                        >
                            ارسال پیام
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <style>
        .form-control:focus {
            box-shadow: none !important;
            border-color: #ffc107 !important;
            outline: none !important;
            background: #222 !important;
            color: #fff !important;
            transition: background-color 0.3s ease;
        }
        .form-control::placeholder {
            color: #aaa !important;
            opacity: 1;
        }
    </style>





@endsection

