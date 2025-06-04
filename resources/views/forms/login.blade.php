<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <title>ورود</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        body {
            background-color: #0f0f0f;
            font-family: 'Vazirmatn', sans-serif;
            color: #f0f0f0;
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        form {
            background: rgba(255 255 255 / 0.05);
            max-width: 400px;
            width: 100%;
            padding: 2.5rem 2rem;
            border-radius: 1rem;
            box-shadow: 0 0 25px rgb(255 193 7 / 0.3);
            backdrop-filter: blur(10px);
        }
        h2 {
            text-align: center;
            margin-bottom: 2rem;
            color: #ffc107;
            font-weight: 700;
            letter-spacing: 2px;
        }
        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }
        .form-control {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 1rem; /* فضای سمت چپ برای آیکون */
            background: #1b1b1b;
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
            font-size: 1.3rem;
            color: #ffc107;
            pointer-events: none;
        }
        .form-check-label {
            color: #ccc;
            font-size: 0.9rem;
        }
        .btn-login {
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
        .btn-login:hover {
            background-color: #e0a800;
            box-shadow: 0 0 15px rgb(255 193 7 / 0.9);
        }
        .form-footer {
            margin-top: 1.5rem;
            text-align: center;
            font-size: 0.9rem;
            color: #bbb;
        }
        .form-footer a {
            color: #ffc107;
            font-weight: 600;
            text-decoration: none;
            margin-right: 0.3rem;
        }
        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<form novalidate>

    <h2>ورود به حساب کاربری</h2>

    <div class="form-group">
        <input type="email" class="form-control" id="email" placeholder="ایمیل" required />
        <i class="bi bi-envelope-fill input-icon"></i>
    </div>

    <div class="form-group">
        <input type="password" class="form-control" id="password" placeholder="رمز عبور" required />
        <i class="bi bi-lock-fill input-icon"></i>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-4" style="color: #ccc; font-size: 0.9rem;">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember" />
            <label class="form-check-label" for="remember">مرا به خاطر بسپار</label>
        </div>
        <a href="#" class="text-warning text-decoration-none">فراموشی رمز؟</a>
    </div>

    <button type="submit" class="btn-login">ورود</button>

    <div class="form-footer">
        <span>حساب کاربری ندارید؟</span>
        <a href="#">ثبت‌نام</a>
    </div>

</form>

</body>
</html>
