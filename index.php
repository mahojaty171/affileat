<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سایت ساده با بوت استرپ</title>
    <!-- لینک بوت استرپ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- استایل‌های سفارشی -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .hero-section {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 50px 20px;
        }
        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        .user-menu{
            background-color: white;
        }
    </style>
</head>
<body>

    </div>
    <!-- منوی ناوبری -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="login.php">ثبت نام</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="تغییر وضعیت ناوبری">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.PHP">صفحه اصلی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">خدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">تماس با ما</a>
                    </li>
                </ul>
                <?php
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                ?>
            
                <div class="user-menu">
                    <?php if(isset($_SESSION['username'])): ?>
                        <div class="username" onclick="toggleMenu()">
                            <?= htmlspecialchars($_SESSION['username']) ?>
                            <div class="dropdown" id="dropdownMenu">
                                <a href="dashbord.php">داشبورد</a>
                                <a href="logout.php">خروج</a>
                            </div>
                        </div>
                    <?php else: ?>
                        <a href="login.php" class="login-btn">ورود</a>
                    <?php endif; ?>
                </div>
        </div>
    </nav>

    <!-- بخش اصلی (هدر یا قهرمان) -->
    <section id="home" class="hero-section">
        <div class="container">
            <h1>به سایت ما خوش آمدید</h1>
            <p>اینجا می‌توانید خدمات ما را بررسی کنید</p>
            <a href="#services" class="btn btn-light">مشاهده خدمات</a>
        </div>
    </section>

    <!-- درباره ما -->
    <section id="about" class="py-5">
        <div class="container text-center">
            <h2>درباره ما</h2>
            <p>با سلام و خوش آمدید به فروشگاه لوازم خانگی ما! اگر به دنبال لوازم خانگی باکیفیت، مدرن و کارآمد هستید، جای درستی آمده‌اید. ما مفتخریم که مجموعه‌ای از بهترین برندهای داخلی و خارجی را ارائه می‌دهیم تا به شما در ایجاد یک خانه‌ی راحت و زیبا کمک کنیم.</p>
        </div>
    </section>

    <!-- خدمات -->
    <section id="services" class="bg-light py-5">
        <div class="container text-center">
            <h2>خدمات ما</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <img src="ty.jpg" class="card-img-top"
                            <p></p>

                            <a href="about.php"><h5 class="card-title">خدمت اول</h5></a>

                            <p class="card-text">توضیحات مختصر در مورد خدمت اول.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <img src="yu.webp" class="card-img-top"
                            <p></p>
                            <a href="home.PHP"><h5 class="card-title">خدمت دوم</h5></a>
                            <p class="card-text">توضیحات مختصر در مورد خدمت دوم.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <img src="io.jpg" class="card-img-top"
                            <p></p>
                            <a href="contact.php"><h5 class="card-title">خدمات سوم</h5></a>
                            <p class="card-text">توضیحات مختصر در مورد خدمت سوم.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="bg-light py-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <img src="cx.jpg" class="card-img-top"
                            <p></p>

                            <a href="ll.php"><h5 class="card-title">خدمت چهارم</h5></a>

                            <p class="card-text">توضیحات مختصر در مورد خدمت اول.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <img src="vc.jpg" class="card-img-top"
                            <p></p>
                            <a href="tabe.php"><h5 class="card-title">خدمت پنجم</h5></a>
                            <p class="card-text">توضیحات مختصر در مورد خدمت دوم.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <img src="qw.jpg" class="card-img-top"
                            <p></p>
                            <a href="mos.php"><h5 class="card-title">خدمات ششم</h5></a>
                            <p class="card-text">توضیحات مختصر در مورد خدمت سوم.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- تماس با ما -->
    <section id="contact" class="py-5">

        <div class="container text-center">
            <h2>تماس با ما</h2>
            <p>برای اطلاعات بیشتر با ما در تماس باشید.</p>
            <a href="https://mail.google.com/mail/u/0/#inbox" class="btn btn-primary">ارسال ایمیل</a>
        </div>
    </section>

    <!-- فوتر -->
    <footer>
        <div class="container">
            <p>تمامی حقوق محفوظ است</p>
        </div>
    </footer>

    <!-- جاوااسکریپت بوت استرپ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
