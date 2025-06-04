<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ثبت‌نام</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #121212;
            font-family: 'Vazirmatn', sans-serif;
            color: #f0f0f0;
            padding: 2rem;
        }
        form {
            max-width: 400px;
            margin: auto;
            background: rgba(255 255 255 / 0.05);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0 20px rgb(255 193 7 / 0.3);
            backdrop-filter: blur(12px);
        }
        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }
        .form-control {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 1rem; /* فضای سمت چپ برای آیکون */
            background: #1e1e1e;
            border: 1.5px solid #333;
            border-radius: 0.75rem;
            color: #eee;
            font-size: 1rem;
            transition: border-color 0.3s ease, background-color 0.3s ease;
            direction: rtl;
            text-align: right;
        }
        .form-control::placeholder {
            color: #aaa;
            opacity: 1;
            text-align: right;
        }
        .form-control:focus {
            outline: none;
            background-color: #2a2a2a;
            border-color: #ffc107;
            box-shadow: 0 0 8px #ffc107;
            color: #fff;
        }
        /* آیکون‌ها سمت چپ */
        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2rem;
            color: #ffc107;
            pointer-events: none;
        }
        button.btn-register {
            background-color: #ffc107;
            color: #121212;
            font-weight: 700;
            font-size: 1.1rem;
            border-radius: 9999px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            width: 100%;
            padding: 0.75rem;
            border: none;
            cursor: pointer;
            box-shadow: 0 0 8px rgb(255 193 7 / 0.6);
        }
        button.btn-register:hover {
            background-color: #e0a800;
            box-shadow: 0 0 15px rgb(255 193 7 / 0.9);
        }
        .text-center {
            margin-top: 1.5rem;
        }
        .text-muted {
            color: #bbb !important;
        }
        a.text-warning {
            color: #ffc107 !important;
            font-weight: 600;
        }
        a.text-warning:hover {
            text-decoration: underline;
        }
        .side-img {
            background: url('https://mahd25.github.io/Django-E-booklet/Images/season-eleven.jpeg') no-repeat center center;
            background-size: cover;
            border-radius: 1rem;
            min-height: 500px;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<section class="register-section container py-5">
    <div class="row align-items-center justify-content-center w-100 g-5" style="margin-right: 20px">

        <!-- فرم -->
        <div class="col-lg-6 col-xl-5">
            <div class="form-wrapper">

                <h2 class="mb-4 text-center text-warning fw-bold">ایجاد حساب کاربری</h2>

                <form novalidate>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="نام" required />
                        <i class="bi bi-person-fill input-icon"></i>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="نام خانوادگی" required />
                        <i class="bi bi-person-bounding-box input-icon"></i>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="ایمیل" required />
                        <i class="bi bi-envelope-fill input-icon"></i>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="رمز عبور" required />
                        <i class="bi bi-lock-fill input-icon"></i>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="تکرار رمز عبور" required />
                        <i class="bi bi-lock-fill input-icon"></i>
                    </div>

                    <button type="submit" class="btn-register">ثبت‌نام</button>

                    <div class="text-center">
                        <span class="text-muted small">حساب دارید؟</span>
                        <a href="#" class="text-warning text-decoration-none small">ورود</a>
                    </div>

                </form>

            </div>
        </div>

        <!-- تصویر سمت چپ -->
        <div class="col-lg-6 d-none d-lg-block">
            <div class="side-img w-100 h-100 shadow-lg"></div>
        </div>

    </div>
</section>

</body>
</html>
