@extends('layouts.master')
@section('content')
    <!-- صفحه جزئیات دوره - حالت دارک و چپ‌چین، مینیمال و مدرن -->
    <section class="course-details py-5" style="background: #0d0d0d; direction: ltr; font-family: 'Vazirmatn', sans-serif;">
        <div class="container">

            <!-- هدر دوره - نسخه حرفه‌ای، مدرن، مینیمال و راست‌چین -->
            <div class="row align-items-center mb-5 bg-gradient p-4 rounded-4 shadow-lg" style="background: linear-gradient(135deg, #1a1a1a, #2e2e2e); border: 1px solid #444; direction: rtl; font-family: 'Vazirmatn', sans-serif;">
                <!-- تصویر دوره با افکت هاور -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="max-height: 400px; cursor: pointer; transition: box-shadow 0.3s ease;">
                        <img src="https://via.placeholder.com/700x400" alt="عنوان دوره" class="w-100" style="object-fit: cover; transition: transform 0.5s ease;">
                        <!-- لایه نیمه شفاف با آیکون -->
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0,0,0,0.35); transition: background-color 0.3s ease;">
                            <i class="bi bi-code-slash text-warning fs-1"></i>
                        </div>
                    </div>
                </div>

                <!-- بخش متن دوره -->
                <div class="col-lg-6 text-light pe-lg-5">
                    <!-- عنوان دوره -->
                    <h1 class="fw-bold mb-3 display-5 text-warning" style="letter-spacing: 1.2px; font-weight: 800; line-height: 1.1;">
                        🚀 آموزش جامع HTML و CSS
                    </h1>

                    <!-- توضیح کوتاه -->
                    <p class="text-light opacity-75 mb-4 fs-5" style="line-height: 1.7; font-weight: 400;">
                        دوره‌ای بی‌نظیر و پروژه‌محور، مناسب برای شروع حرفه‌ای طراحی وب با تاکید بر یادگیری کاربردی و مدرن.
                    </p>

                    <!-- برچسب‌ها با آیکون و سایه ظریف -->
                    <div class="d-flex flex-wrap gap-3 mb-4">
            <span class="badge bg-warning text-dark px-4 py-2 rounded-pill shadow-sm d-flex align-items-center gap-2 fs-6" style="font-weight: 600;">
                <i class="bi bi-rocket-takeoff-fill fs-5"></i> مقدماتی تا پیشرفته
            </span>
                        <span class="badge bg-info text-dark px-4 py-2 rounded-pill shadow-sm d-flex align-items-center gap-2 fs-6" style="font-weight: 600;">
                <i class="bi bi-clock-fill fs-5"></i> ۲۰ ساعت آموزش
            </span>
                        <span class="badge bg-success px-4 py-2 rounded-pill shadow-sm d-flex align-items-center gap-2 fs-6" style="font-weight: 600;">
                <i class="bi bi-shield-check fs-5"></i> پشتیبانی مادام‌العمر
            </span>
                    </div>

                    <!-- دکمه ثبت‌نام با افکت‌ها -->
                    <a href="#register" class="btn btn-warning btn-lg px-5 fw-semibold shadow d-inline-flex align-items-center gap-2" style="letter-spacing: 0.6px; transition: transform 0.3s ease;">
                        <i class="bi bi-pencil-square fs-5"></i> ثبت‌نام در دوره
                    </a>
                </div>
            </div>

            <!-- استایل های اضافی برای هاور و انیمیشن -->
            <style>
                /* بزرگنمایی آرام تصویر روی هاور */
                .position-relative:hover img {
                    transform: scale(1.07);
                }
                /* تار شدن پس‌زمینه روی هاور */
                .position-relative:hover div.position-absolute {
                    background-color: rgba(0, 0, 0, 0.6) !important;
                }
                /* تغییر سایه روی هاور */
                .position-relative:hover {
                    box-shadow: 0 10px 30px rgba(255, 166, 0, 0.5);
                }
                /* افکت هاور دکمه ثبت‌نام */
                .btn-warning:hover {
                    transform: scale(1.05);
                    box-shadow: 0 8px 20px rgba(255, 193, 7, 0.7);
                }
            </style>


            <!-- معرفی دوره و مدرس - طراحی مدرن و مینیمال -->
            <div class="bg-gradient rounded-4 p-4 p-lg-5 shadow-lg mb-5" style="background: linear-gradient(135deg, #1b1b1b, #2d2d2d); direction: rtl; font-family: 'Vazirmatn', sans-serif;">
                <div class="row align-items-center">
                    <!-- تصویر مدرس -->
                    <div class="col-md-3 text-center mb-4 mb-md-0">
                        <div class="position-relative d-inline-block">
                            <img src="https://via.placeholder.com/120" class="rounded-circle border border-3 border-warning shadow" style="width: 120px; height: 120px; object-fit: cover;" alt="محمد حسینی">
                            <span class="position-absolute bottom-0 start-0 translate-middle badge rounded-pill bg-success px-3 py-1 fs-6 shadow-sm">
                    مدرس
                </span>
                        </div>
                    </div>

                    <!-- اطلاعات مدرس و معرفی دوره -->
                    <div class="col-md-9 text-light">
                        <h3 class="fw-bold text-warning mb-2" style="letter-spacing: 0.5px;">👨‍🏫 محمد حسینی</h3>
                        <p class="text-secondary mb-3 fs-6">توسعه‌دهنده فول‌استک و مدرس حرفه‌ای طراحی وب با بیش از ۱۰ سال تجربه تدریس و برنامه‌نویسی.</p>

                        <!-- معرفی دوره کوتاه -->
                        <div class="bg-dark rounded-3 p-3 shadow-sm border border-secondary">
                            <h4 class="text-light fw-bold mb-2">📘 درباره این دوره</h4>
                            <p class="text-light opacity-75 mb-0" style="line-height: 1.8;">
                                این دوره برای کسانی طراحی شده که می‌خواهند از پایه تا سطح حرفه‌ای HTML و CSS را با پروژه‌های واقعی و تمرین‌های کاربردی یاد بگیرند.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- سرفصل‌ها به صورت آکاردئون مینیمال و مدرن -->
            <div class="mb-5" id="courseChapters" style="direction: rtl; font-family: 'Vazirmatn', sans-serif;">
                <h2 class="text-warning mb-4 fw-bold d-flex align-items-center gap-2" style="font-size: 1.8rem;">
                    <span>📋</span> سرفصل‌های دوره
                </h2>

                <div class="accordion" id="accordionMinimal">
                    @foreach(["معرفی HTML و CSS", "ساختار صفحات وب و تگ‌ها", "CSS و استایل‌دهی حرفه‌ای", "طراحی واکنش‌گرا", "پروژه نهایی"] as $index => $title)
                        <div class="accordion-item border-0 mb-3 rounded shadow-sm bg-gray-900" style="background: #121212;">
                            <h2 class="accordion-header" id="heading{{$index}}">
                                <button
                                    class="accordion-button collapsed bg-transparent text-warning fw-semibold fs-5 px-4 py-3 d-flex justify-content-between align-items-center"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{$index}}"
                                    aria-expanded="false"
                                    aria-controls="collapse{{$index}}"
                                    style="border-radius: 12px; box-shadow: none; border: 1px solid transparent; transition: border-color 0.3s ease;">

                                    <span>{{$title}}</span>
                                    <i class="bi bi-chevron-down fs-4 transition-icon"></i>
                                </button>
                            </h2>

                            <div
                                id="collapse{{$index}}"
                                class="accordion-collapse collapse"
                                aria-labelledby="heading{{$index}}"
                                data-bs-parent="#accordionMinimal">
                                <div class="accordion-body p-0 mt-3 rounded overflow-hidden" style="box-shadow: 0 4px 12px rgb(255 193 7 / 0.2);">
                                    <video class="w-100 d-block rounded" controls preload="metadata" style="max-height: 350px; object-fit: cover;">
                                        <source src="/videos/sample{{$index}}.mp4" type="video/mp4">
                                        مرورگر شما از پخش ویدیو پشتیبانی نمی‌کند.
                                    </video>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <style>
                /* حذف سایه پیشفرض آکاردئون بوت‌استرپ */
                .accordion-button {
                    box-shadow: none !important;
                }
                /* تغییر آیکون جهت باز و بسته شدن */
                .accordion-button.collapsed .transition-icon {
                    transform: rotate(0deg);
                    transition: transform 0.3s ease;
                }
                .accordion-button:not(.collapsed) .transition-icon {
                    transform: rotate(180deg);
                    transition: transform 0.3s ease;
                }
                /* تغییر رنگ حاشیه در حالت فوکوس و هاور */
                .accordion-button:focus,
                .accordion-button:hover {
                    border-color: #ffc107 !important; /* رنگ طلایی */
                    box-shadow: 0 0 8px #ffc107aa !important;
                }
            </style>

            <!-- 🎓 دوره‌های مرتبط - طراحی حرفه‌ای و مدرن -->
            <section class="mb-5" style="direction: rtl;">
                <h2 class="text-warning mb-4 fw-bold d-flex align-items-center gap-2 fs-4">
                    <i class="bi bi-bookmark-star-fill fs-4"></i> دوره‌های مرتبط
                </h2>

                <div class="row g-4">
                    @foreach(range(1, 3) as $i)
                        <div class="col-md-4">
                            <div class="card bg-dark text-light border-0 shadow-lg rounded-4 overflow-hidden h-100">
                                <div class="position-relative">
                                    <img src="https://via.placeholder.com/400x220?text=Course+{{$i}}" class="w-100 h-auto" style="object-fit: cover;">
                                    <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-3 fw-semibold shadow-sm">
                            سطح متوسط
                        </span>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title fw-bold mb-2">دوره شماره {{$i}}</h5>
                                    <p class="card-text text-secondary mb-3">توضیح کوتاه و کاربردی درباره‌ی دوره شماره {{$i}} که جذابیت ایجاد کند.</p>
                                    <a href="#" class="btn btn-warning text-dark fw-semibold rounded-pill mt-auto align-self-start px-4">
                                        مشاهده دوره
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- 🌳 بخش نظرات کاربران به صورت درختی -->
            <!-- 💬 باکس واحد نظرات کاربران - درختی، مینیمال، حرفه‌ای -->
            <section class="mb-5" style="direction: rtl;">
                <h2 class="text-warning mb-4 fw-bold d-flex align-items-center gap-2 fs-4">
                    <i class="bi bi-chat-dots-fill fs-4"></i> نظرات کاربران
                </h2>

                <div class="bg-dark rounded-4 p-4 p-md-5 border border-secondary shadow-lg">
                    @php
                        $comments = [
                            ['id' => 1, 'name' => 'سارا احمدی', 'comment' => 'دوره خیلی کامل و کاربردی بود. ممنون از مدرس خوبش.', 'avatar' => 'https://via.placeholder.com/60', 'parent_id' => null],
                            ['id' => 2, 'name' => 'رضا مرادی', 'comment' => 'با این دوره تونستم پروژه بگیرم و درآمد داشته باشم.', 'avatar' => 'https://via.placeholder.com/60/2e8b57/ffffff', 'parent_id' => null],
                            ['id' => 3, 'name' => 'مدرس دوره', 'comment' => 'خوشحالم برات مفید بوده 🙏', 'avatar' => 'https://via.placeholder.com/60/ffa500/000000', 'parent_id' => 2],
                            ['id' => 4, 'name' => 'مریم رضایی', 'comment' => 'آیا در این دوره طراحی واکنش‌گرا هم آموزش داده شده؟', 'avatar' => 'https://via.placeholder.com/60/f08080/000000', 'parent_id' => null],
                            ['id' => 5, 'name' => 'پشتیبانی', 'comment' => 'بله، به‌صورت کامل با پروژه عملی آموزش داده میشه 💡', 'avatar' => 'https://via.placeholder.com/60/00ced1/000000', 'parent_id' => 4],
                        ];

                        function renderComments($comments, $parentId = null, $level = 0) {
                            foreach ($comments as $comment) {
                                if ($comment['parent_id'] === $parentId) {
                                    echo '<div class="mb-4" style="padding-right: '. ($level * 30) .'px;">';
                                    echo '  <div class="d-flex align-items-start gap-3">';
                                    echo '      <img src="' . e($comment['avatar']) . '" alt="' . e($comment['name']) . '" class="rounded-circle shadow-sm" style="width: 60px; height: 60px; object-fit: cover;">';
                                    echo '      <div class="flex-grow-1">';
                                    echo '          <div class="d-flex justify-content-between align-items-center mb-1">';
                                    echo '              <span class="fw-bold text-warning">' . e($comment['name']) . '</span>';
                                    echo '              <small class="text-muted">' . now()->subDays(rand(1, 30))->diffForHumans() . '</small>';
                                    echo '          </div>';
                                    echo '          <p class="text-light lh-lg mb-1" style="white-space: pre-wrap;">' . e($comment['comment']) . '</p>';
                                    echo '      </div>';
                                    echo '  </div>';
                                    renderComments($comments, $comment['id'], $level + 1);
                                    echo '</div>';
                                }
                            }
                        }
                    @endphp

                    {!! renderComments($comments) !!}
                </div>
            </section>

            <!-- ✍️ فرم ثبت نظر -->
            <section class="bg-dark p-4 p-lg-5 rounded-4 mb-5 border border-secondary shadow-lg" style="direction: rtl;">
                <h3 class="text-light mb-4 d-flex align-items-center gap-2 fs-5">
                    <i class="bi bi-pencil-square fs-5 text-warning"></i> ثبت نظر شما
                </h3>

                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control bg-transparent border-secondary text-light rounded-3 shadow-sm" placeholder="نام شما" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control bg-transparent border-secondary text-light rounded-3 shadow-sm" placeholder="ایمیل (اختیاری)">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control bg-transparent border-secondary text-light rounded-3 shadow-sm" rows="4" placeholder="نظر شما..." required></textarea>
                        </div>
                    </div>

                    <div class="mt-4 text-start">
                        <button type="submit" class="btn btn-warning text-dark fw-semibold px-5 py-2 rounded-pill shadow">
                            ارسال نظر
                        </button>
                    </div>
                </form>
            </section>


        </div>
    </section>
@endsection
