<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
    body {
        font-family: 'Vazirmatn', sans-serif;
        background-color: #f8f9fa;
    }
    .hero {
        background: linear-gradient(to left, #0d6efd, #6610f2);
        color: white;
        padding: 80px 20px;
        text-align: center;
    }
    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }
    .hero p {
        font-size: 1.2rem;
    }
    .course-card {
        transition: transform 0.3s ease;
    }
    .course-card:hover {
        transform: translateY(-5px);
    }
    footer {
        background-color: #343a40;
        color: white;
        padding: 40px 0;
    }
    footer a {
        color: #adb5bd;
        text-decoration: none;
    }
    footer a:hover {
        color: #ffffff;
    }
    .navbar-nav .nav-link {
        transition: all 0.3s ease;
    }
    .navbar-nav .nav-link:hover {
        color: #ffc107 !important;
    }
    .navbar-brand i {
        color: #ffc107;
    }
    .navbar-nav .nav-link {
        transition: color 0.3s ease;
    }
    .navbar-nav .nav-link:hover {
        color: #ffc107 !important;
    }
    .navbar-brand i {
        transition: transform 0.3s ease;
    }
    .navbar-brand i:hover {
        transform: rotate(-10deg) scale(1.1);
    }
    <style>
         /* Mega Menu */
     .mega-menu {
         width: 100%;
         max-width: 1000px;
         left: 50%;
         transform: translateX(-50%);
         display: none;
         background-color: #2c2c2e;
         color: #fff;
         z-index: 1000;
     }

    .nav-item.dropdown:hover .mega-menu {
        display: block;
        position: absolute;
        top: 100%;
        padding: 1rem;
    }

    /* Submenu */
    .submenu .submenu-list {
        display: none;
        position: absolute;
        top: 0;
        right: 100%;
        min-width: 200px;
        background-color: #343a40;
        z-index: 1100;
        border-radius: 0.5rem;
        padding: 0.5rem 0;
    }

    .submenu:hover .submenu-list {
        display: block;
    }

    /* Dropdown Item Hover */
    .dropdown-item {
        color: #eaeaea;
        transition: background 0.3s;
    }
    .dropdown-item:hover {
        background-color: #495057;
        color: #ffc107;
    }

    /* Headings */
    .dropdown-menu h6 {
        font-weight: bold;
        margin-bottom: 10px;
    }

    /* Responsive */
    @media (max-width: 991.98px) {
        .mega-menu {
            position: static !important;
            transform: none !important;
            max-width: 100%;
            display: block !important;
        }

        .submenu .submenu-list {
            position: static !important;
            display: block !important;
            background: none;
            padding: 0;
        }
    }
    /* Dropdown چندسطحی زیبا */
    .mega-menu {
        min-width: 100%;
        background-color: #2a2a2e;
        color: white;
    }

    .mega-menu h6 {
        margin-bottom: 1rem;
        border-bottom: 1px solid #444;
        padding-bottom: 0.5rem;
    }

    .submenu-list {
        display: none;
        position: absolute;
        right: 100%;
        top: 0;
        min-width: 180px;
        background-color: #333;
        padding: 0;
        border-radius: 0.5rem;
        z-index: 9999;
    }

    .submenu:hover > .submenu-list {
        display: block;
    }

    .dropdown-menu .dropdown-item {
        padding: 0.5rem 1rem;
        color: #f1f1f1;
        transition: all 0.3s ease;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #444;
        color: #ffd700;
    }

    .submenu {
        position: relative;
    }

    @media (max-width: 991px) {
        .mega-menu {
            position: static !important;
            min-width: 100%;
        }
        .submenu-list {
            position: static;
            display: none;
            margin-top: 0.5rem;
        }
        .submenu:hover .submenu-list {
            display: block;
        }
    }
</style>


</style>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- Bootstrap Icons و Bootstrap CSS باید در صفحه بارگذاری شده باشند -->

<!-- CSS سفارشی -->
<style>
    .dropdown-menu {
        min-width: 250px;
        font-size: 0.9rem;
    }

    .dropdown-menu .dropdown-item {
        padding: 8px 16px;
        border-radius: 6px;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #2c2c2e;
        color: #ffc107;
    }

    .submenu-list {
        display: none;
        list-style: none;
        padding-left: 15px;
        margin-top: 5px;
    }

    .submenu.open > .submenu-list {
        display: block;
    }

    .submenu > .dropdown-item::after {
        content: "▸";
        float: left;
        margin-left: 8px;
        transform: rotate(0deg);
        transition: transform 0.2s;
    }

    .submenu.open > .dropdown-item::after {
        transform: rotate(90deg);
    }

    .mega-menu {
        width: auto;
        max-width: 800px;
        background-color: #2c2c2e;
    }

    .mega-menu h6 {
        font-size: 0.95rem;
        margin-bottom: 10px;
    }

    .navbar .dropdown-toggle::after {
        display: none;
    }
</style>
<!-- Navbar حرفه‌ای -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-lg" style="background-color: #1c1c1e;">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
            <i class="bi bi-code-slash fs-3 me-2 text-warning"></i> کدیاد
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <!-- منوی وسط‌چین شده -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex align-items-center gap-3">

                <li class="nav-item">
                    <a class="nav-link active fw-semibold" href="#"><i class="bi bi-house-door-fill me-1"></i>خانه</a>
                </li>

                <!-- Dropdown با کلیک (فقط Bootstrap) -->
                <!-- وسط‌چین کردن آیتم‌های navbar -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle fw-semibold text-light" href="#" id="coursesDropdown"
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-journal-code me-1"></i> دوره‌ها
                        </a>

                        <!-- وسط‌چین کردن منوی dropdown -->
                        <ul class="dropdown-menu start-50 translate-middle-x mt-2 bg-dark p-3 rounded-4 shadow-lg border-0 text-nowrap"
                            aria-labelledby="coursesDropdown"
                            style="min-width: 650px;">

                            <div class="d-flex flex-row gap-4 justify-content-between">

                                <!-- بخش اول -->
                                <li>
                                    <h6 class="text-warning mb-2">برنامه‌نویسی وب</h6>
                                    <a class="dropdown-item text-light small" href="#">HTML & CSS</a>
                                    <a class="dropdown-item text-light small" href="#">JavaScript مقدماتی</a>
                                    <a class="dropdown-item text-light small" href="#">JavaScript پیشرفته</a>
                                </li>

                                <!-- جداکننده -->
                                <li><div class="vr bg-light opacity-25"></div></li>

                                <!-- بخش دوم -->
                                <li>
                                    <h6 class="text-warning mb-2">بک‌اند</h6>
                                    <a class="dropdown-item text-light small" href="#">Python مقدماتی</a>
                                    <a class="dropdown-item text-light small" href="#">Django</a>
                                    <a class="dropdown-item text-light small" href="#">PHP Laravel</a>
                                </li>

                                <!-- جداکننده -->
                                <li><div class="vr bg-light opacity-25"></div></li>

                                <!-- بخش سوم -->
                                <li>
                                    <h6 class="text-warning mb-2">هوش مصنوعی</h6>
                                    <a class="dropdown-item text-light small" href="#">یادگیری ماشین</a>
                                    <a class="dropdown-item text-light small" href="#">پایتون برای دیتا</a>
                                </li>

                            </div>
                        </ul>
                    </li>
                </ul>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="#"><i class="bi bi-pencil-square me-1"></i>وبلاگ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="#"><i class="bi bi-envelope-fill me-1"></i>تماس با ما</a>
                </li>
            </ul>

            <div class="d-flex">
                <a class="btn btn-outline-warning rounded-pill ms-2 px-4" href="#"><i class="bi bi-box-arrow-in-right me-1"></i>ورود</a>
                <a class="btn btn-warning text-dark rounded-pill px-4" href="#"><i class="bi bi-person-plus-fill me-1"></i>ثبت‌نام</a>
            </div>
        </div>
    </div>
</nav>


<!-- JavaScript فعال‌سازی زیرمنوها -->
<script>
    document.querySelectorAll('.submenu > .dropdown-item').forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            const parent = this.parentElement;
            parent.classList.toggle('open');
        });
    });
</script>


