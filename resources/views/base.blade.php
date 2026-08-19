<!DOCTYPE html>
<html dir="rtl" lang="fa"><!---design By Mellatweb.com-->
<head>
<meta charset="utf-8">
<title>Lezir - الگوی صفحه فرود Bootstrap 5.3 پاسخگو</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Premium Bootstrap 4 Landing Page Template">
<meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose">
<meta content="mellatweb.com" name="author">
<link rel="stylesheet" href="./assets/css/output.css">
<link rel="stylesheet" href="./assets/css/font.css">
<link href="./assets/css/dependencies/swiper.min.css" rel="stylesheet"/>
<link href="./assets/css/app.css" rel="stylesheet"/>
<link rel="stylesheet" href="./assets/css/main.css">
<link rel="shortcut icon" href="images/favicon.ico">

{{-- <link rel="stylesheet" href="podcast/css/bootstrap.min.css">
<link rel="stylesheet" href="podcast/css/all-fontawesome.min.css">
<link rel="stylesheet" href="podcast/css/feather.min.css">
<link rel="stylesheet" href="podcast/css/animate.min.css">
<link rel="stylesheet" href="podcast/css/magnific-popup.min.css">
<link rel="stylesheet" href="podcast/css/owl.carousel.min.css">
<link rel="stylesheet" href="podcast/css/nice-select.min.css">
<link rel="stylesheet" href="podcast/css/amplitude.css">
<link rel="stylesheet" href="podcast/css/style.css"> --}}
<style>
    /* ===========================
   JV Footer
=========================== */

.jv-footer {
    position: relative;
    background-color: var(--bs-footer-bg);
    background-image: url(images/footer-bg.png);
    background-size: cover;
    background-position: center;
    overflow: hidden;
    padding: 90px 0 60px;
}

.jv-footer__overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        180deg,
        rgba(41, 40, 56, 0.92),
        rgba(35, 34, 47, 0.96)
    );
}

.jv-footer__container {
    position: relative;
    z-index: 2;
    width: min(1200px, calc(100% - 40px));
    margin: 0 auto;
}

.jv-footer__grid {
    display: grid;
    grid-template-columns: 1.2fr 2fr;
    gap: 80px;
}

/* Brand */

.jv-footer__logo img {
    height: 34px;
    width: auto;
}

.jv-footer__description {
    margin-top: 24px;
    color: rgba(248, 249, 250, 0.7);
    line-height: 1.9;
    font-size: 15px;
    max-width: 380px;
}

/* Social */

.jv-footer__socials {
    display: flex;
    gap: 14px;
    margin-top: 30px;
}

.jv-footer__social {
    width: 44px;
    height: 44px;
    border-radius: 12px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: rgba(255,255,255,0.08);

    color: var(--bs-white);

    transition: all .3s ease;
}

.jv-footer__social:hover {
    transform: translateY(-4px);
    background: rgba(255,255,255,0.15);
}

/* Links */

.jv-footer__links {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
}

.jv-footer__title {
    color: var(--bs-white);
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 22px;
    position: relative;
}

.jv-footer__title::after {
    content: "";
    display: block;
    width: 40px;
    height: 2px;
    margin-top: 10px;
    background: rgba(255,255,255,.25);
}

.jv-footer__column ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.jv-footer__column li + li {
    margin-top: 12px;
}

.jv-footer__column a {
    color: rgba(248,249,250,.7);
    text-decoration: none;
    transition: all .25s ease;
}

.jv-footer__column a:hover {
    color: var(--bs-white);
    padding-right: 6px;
}

/* Responsive */

@media (max-width: 992px) {

    .jv-footer {
        padding: 70px 0 50px;
    }

    .jv-footer__grid {
        grid-template-columns: 1fr;
        gap: 50px;
    }

    .jv-footer__description {
        max-width: 100%;
    }

    .jv-footer__links {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {

    .jv-footer__links {
        grid-template-columns: 1fr;
        gap: 35px;
    }

    .jv-footer__socials {
        flex-wrap: wrap;
    }

    .jv-footer__title {
        margin-bottom: 18px;
    }
}
</style>
</head>
<body>
<a href="javascript:%20void(0);" id="light-dark-mode" class="mode-btn text-white rounded-end"><i class="mdi mdi-sun-compass bx-spin mode-light"></i><i class="mdi mdi-moon-waning-crescent mode-dark"></i></a><div id="preloader"><div id="status"><div class="spinner"></div></div></div>
{{-- <nav class="navbar navbar-expand-lg fixed-top custom-navbar" id="navbar">

    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            <img src="images/logo-dark.png" height="38" alt="">
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">

            <i class="mdi mdi-menu"></i>

        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a href="#home" class="nav-link">خانه</a>
                </li>

                <li class="nav-item">
                    <a href="#features" class="nav-link">مسیر رشد</a>
                </li>

                <li class="nav-item">
                    <a href="#resources" class="nav-link">منابع آموزشی</a>
                </li>

                <li class="nav-item">
                    <a href="#news" class="nav-link">اخبار و رویدادها</a>
                </li>

                <li class="nav-item">
                    <a href="#achievements" class="nav-link">دستاوردها</a>
                </li>

                <li class="nav-item">
                    <a href="#contact" class="nav-link">ارتباط با ما</a>
                </li>

            </ul>

            <div class="d-flex gap-2">

                <a href="#" class="btn btn-sm btn-light">
                    ورود
                </a>

                <a href="#" class="btn btn-sm text-white" style="background-color: #22c55e;">
                    شروع مسیر رشد
                </a>

            </div>

        </div>

    </div>

</nav> --}}
<nav class="fixed top-0 left-0 right-0 bg-white shadow-md z-50">
    <div class="max-w-7xl mx-auto px-4">

        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="#">
                <img src="images/logo-dark.png" alt="Logo" class="h-10">
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">

                <ul class="flex items-center gap-6 text-gray-700 font-medium">
                <li class="nav-item">
                    <a href="#home" class="nav-link">خانه</a>
                </li>

                <li class="nav-item">
                    <a href="/way" class="nav-link">مسیر رشد</a>
                </li>

                <li class="nav-item">
                    <a href="/books" class="nav-link">کتاب ها</a>
                </li>
                <li class="nav-item">
                    <a href="/episode-list" class="nav-link"> پادکست ها</a>
                </li>
                <li class="nav-item">
                    <a href="/course-list" class="nav-link"> دوره ها</a>
                </li>
                <li class="nav-item">
                    <a href="/blogs" class="nav-link">اخبار و رویدادها</a>
                </li>

                <li class="nav-item">
                    <a href="/Achievements" class="nav-link">دستاوردها</a>
                </li>


                </ul>

                <div class="flex items-center gap-3">
                    @guest
                        <a href="/login" class="btn btn-sm btn-light">
                            ورود
                        </a>
                    @else
                        <a href="/profile" class="d-flex align-items-center">
                            <img
                                src="{{ request()->user()->avatar ?? asset('images/default-avatar.png') }}"
                                alt="{{ request()->user()->name }}"
                                class="rounded-circle"
                                width="36"
                                height="36"
                                style="object-fit: cover;"
                            >
                        </a>
                    @endguest

                    <a href="/way" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">
                        شروع مسیر رشد
                    </a>
                </div>

            </div>

            <!-- Mobile Toggle -->
            <button id="menuBtn" class="md:hidden">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden pb-4">

            <ul class="flex flex-col gap-3 !text-gray-500 font-medium ">

                <li><a class="!text-gray-500" href="#home">خانه</a></li>
                <li><a class="!text-gray-500" href="#features">مسیر رشد</a></li>
                <li><a class="!text-gray-500" href="#resources">منابع آموزشی</a></li>
                <li><a class="!text-gray-500" href="#news">اخبار و رویدادها</a></li>
                <li><a class="!text-gray-500" href="#achievements">دستاوردها</a></li>
                <li><a class="!text-gray-500" href="#contact">ارتباط با ما</a></li>

            </ul>

            <div class="flex flex-col gap-2 mt-4">

                <a href="#" class="text-center py-2 border rounded-lg">
                    ورود
                </a>

                <a href="#"
                   class="text-center py-2 bg-green-500 text-white rounded-lg">
                    شروع مسیر رشد
                </a>

            </div>

        </div>

    </div>
</nav>

<script>
document.getElementById('menuBtn').addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
});
</script>
{{-- <script>
document.getElementById('mobile-menu-btn').addEventListener('click', () => {
    document.getElementById('mobile-menu').classList.toggle('hidden');
});
</script> --}}
@yield('content')





<footer class="jv-footer">
    <div class="jv-footer__overlay"></div>

    <div class="jv-footer__container">

        <div class="jv-footer__grid">

            <!-- About -->
            <div class="jv-footer__brand">

                <a href="{{ route('index') }}" class="jv-footer__logo">
                    <img src="images/logo-light.png" alt="مشیر رشد دانشجو معلم">
                </a>

                <p class="jv-footer__description">
                    مشیر رشد دانشجو معلم، بستری برای آموزش، رشد و توانمندسازی دانشجو معلمان
                    در مسیر یادگیری، توسعه مهارت‌ها و موفقیت حرفه‌ای.
                </p>

                <div class="jv-footer__socials">

                    <a href="#" class="jv-footer__social">
                        <i data-feather="facebook"></i>
                    </a>

                    <a href="#" class="jv-footer__social">
                        <i data-feather="twitter"></i>
                    </a>

                    <a href="#" class="jv-footer__social">
                        <i data-feather="instagram"></i>
                    </a>

                    <a href="#" class="jv-footer__social">
                        <i data-feather="linkedin"></i>
                    </a>

                </div>

            </div>

            <!-- Links -->
            <div class="jv-footer__links">

                <div class="jv-footer__column">
                    <h3 class="jv-footer__title">دسترسی سریع</h3>

                    <ul>
                        <li><a href="{{ route('index') }}">صفحه اصلی</a></li>
                        <li><a href="/course-list">دوره ها</a></li>
                        <li><a href="/episode-list">پادکست ها</a></li>
                        <li><a href="{{ route('blogs') }}">مقالات</a></li>
                        <li><a href="/books">کتاب ها</a></li>
                    </ul>
                </div>

                <div class="jv-footer__column">
                    <h3 class="jv-footer__title">مشیر رشد</h3>

                    <ul>
                        <li><a href="/about-us">درباره ما</a></li>
                        <li><a href="/way">مسیر رشد</a></li>
                        <li><a href="/Achievements">دستاوردها</a></li>
                        <li><a href="/instructor-list">مدرسین</a></li>
                        <li><a href="{{ route('faq') }}">سوالات متداول</a></li>
                    </ul>
                </div>

                <div class="jv-footer__column">
                    <h3 class="jv-footer__title">پشتیبانی</h3>

                    <ul>
                        <li><a href="/about-us">ارتباط با ما</a></li>
                        <li><a href="{{ route('faq') }}">راهنما و سوالات متداول</a></li>
                        <li><a href="{{ route('cart') }}">سبد خرید</a></li>
                        <li><a href="{{ route('login') }}">ورود به حساب کاربری</a></li>
                        <li><a href="/course-list">شروع یادگیری</a></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>
</footer>



    {{-- <div class="main-player">
        <div class="audio-player">
            <button type="button" class="audio-player-hide"><i class="far fa-angle-down"></i></button>
            <div class="player">
                <div class="player-cover-img">
                    <img data-amplitude-song-info="cover_art_url" src="#" alt="cover">
                </div>
                <div class="player-content">
                    <div class="song-meta-data">
                        <p data-amplitude-song-info="name" class="song-name"></p>
                        <p data-amplitude-song-info="artist" class="song-artist"></p>
                    </div>
                    <div class="player-time-progress">
                        <div id="progress-container">
                            <input type="range" class="amplitude-song-slider">
                            <progress id="song-played-progress" class="amplitude-song-played-progress"></progress>
                            <progress id="song-buffered-progress" class="amplitude-buffered-progress"
                                value="0"></progress>
                        </div>
                        <div class="time-container">
                            <span class="current-time">
                                <span class="amplitude-current-minutes"></span>:<span
                                    class="amplitude-current-seconds"></span>
                            </span>
                            <div id="player-volume" class="player-volume">
                                <span id="amplitude-mute" class="amplitude-mute"><i class="fas fa-volume-up"></i></span>
                                <input type="range" id="volume-slider" max="100" class="amplitude-volume-slider">
                            </div>
                            <span class="duration">
                                <span class="amplitude-duration-minutes"></span>:<span
                                    class="amplitude-duration-seconds"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="player-controls">
                    <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle">
                        <i class="far fa-shuffle"></i>
                    </div>
                    <div class="amplitude-prev" id="previous">
                        <i class="fas fa-backward-step"></i>
                    </div>
                    <div class="amplitude-play-pause" id="play-pause">
                        <i class="fas fa-play"></i>
                    </div>
                    <div class="amplitude-next" id="next">
                        <i class="fas fa-forward-step"></i>
                    </div>
                    <div class="amplitude-repeat" id="repeat">
                        <i class="far fa-repeat"></i>
                    </div>
                    <div class="player-playlist show-playlist">
                        <i class="far fa-list-music"></i>
                    </div>
                </div>

                <div id="playlist-container">
                    <div class="playlist-top">
                        <h6 class="up-next">بعدی</h6>
                        <button type="button" class="close-playlist"><i class="far fa-xmark"></i></button>
                    </div>

                    <div class="playlist-content">
                        <div class="playlist-item">
                            <div class="playlist-song amplitude-song-container amplitude-play-pause"
                                data-amplitude-song-index="0">
                                <img src="images/01_11.jpg" alt="">
                                <div class="playlist-song-meta">
                                    <span class="playlist-song-name">پادکست بیزینس قسمت ۱</span>
                                    <span class="playlist-artist-album">تیموتی کی. آگیلار</span>
                                </div>
                            </div>
                            <button type="button" class="playlist-remove" data-remove-id="d1"><i
                                    class="far fa-xmark"></i></button>
                        </div>
                        <div class="playlist-item">
                            <div class="playlist-song amplitude-song-container amplitude-play-pause"
                                data-amplitude-song-index="1">
                                <img src="images/02_10.jpg" alt="">
                                <div class="playlist-song-meta">
                                    <span class="playlist-song-name">پادکست آموزشی قسمت ۲</span>
                                    <span class="playlist-artist-album">دونا سی نیکولز</span>
                                </div>
                            </div>
                            <button type="button" class="playlist-remove" data-remove-id="d2"><i
                                    class="far fa-xmark"></i></button>
                        </div>
                        <div class="playlist-item">
                            <div class="playlist-song amplitude-song-container amplitude-play-pause"
                                data-amplitude-song-index="2">
                                <img src="images/03_8.jpg" alt="">
                                <div class="playlist-song-meta">
                                    <span class="playlist-song-name">پادکست بیزنس قسمت ۰۲</span>
                                    <span class="playlist-artist-album">آلوین کی بیوریج</span>
                                </div>
                            </div>
                            <button type="button" class="playlist-remove" data-remove-id="d3"><i
                                    class="far fa-xmark"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
{{-- 
<div class="footer-alt py-3"><div class="container"><div class="row"><div class="col-lg-12"><div class="text-center"><p class="text-white-50 font-size-15 mb-0"><script>document.write(new Date().getFullYear())</script>© Lezir. Design By <a href="https://www.mellatweb.com">Mellatweb</a></p></div></div></div></div></div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content login-page"><div class="modal-body">
<div class="text-center">
<h3 class="title mb-4">به Lezir خوش آمدید</h3>
<h4 class="text-uppercase text-primary"><b>وارد شدن</b></h4>
</div>
<div class="login-form mt-4">
<form>
<div class="form-group">
<label for="exampleInputEmail1">نام کاربری / ایمیل</label><input type="email" class="form-control" id="exampleInputEmail1" placeholder="Youremail@gmail.com">
</div>
<div class="form-group">
<label for="exampleInputPassword1">کلمه عبور</label><input type="password" class="form-control" id="exampleInputPassword1" placeholder="کلمه عبور">
</div>
<a href="#" class="float-end text-muted font-size-15">رمز عبور را فراموش کرده اید؟</a><div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck1"><label class="custom-control-label font-size-15" for="customCheck1">مرا به خاطر بسپار</label>
</div>
<div class="text-center mt-4"><button type="submit" class="btn btn-primary">وارد شدن<i class="icon-size-15 icon ms-1" data-feather="arrow-right-circle"></i></button></div>
</form>
<div class="position-relative text-center mt-4">
<span class="login-border"></span><p class="social-login text-muted font-size-17">ورود به سیستم اجتماعی</p>
</div>
<div class="text-center">
<ul class="list-inline mt-2 mb-3">
<li class="list-inline-item me-3"><a href="#" class="login-social-icon icon-primary"><i class="icon-xs" data-feather="facebook"></i></a></li>
<li class="list-inline-item me-3"><a href="#" class="login-social-icon icon-info"><i class="icon-xs" data-feather="twitter"></i></a></li>
<li class="list-inline-item me-3"><a href="#" class="login-social-icon icon-danger"><i class="icon-xs" data-feather="instagram"></i></a></li>
<li class="list-inline-item"><a href="#" class="login-social-icon icon-success"><i class="icon-xs" data-feather="linkedin"></i></a></li>
</ul>
<p class="text-muted mb-0">کاربر جدید؟<a href="#" class="text-primary">ثبت نام</a></p>
</div>
</div>
</div></div></div></div>
<div class="modal fade" id="exampleModalCenter-1" tabindex="-1" role="dialog" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content login-page"><div class="modal-body">
<div class="text-center">
<h3 class="title mb-4">به Lezir خوش آمدید</h3>
<h4 class="text-uppercase text-primary"><b>ثبت نام</b></h4>
</div>
<div class="login-form mt-4">
<form>
<div class="form-group">
<label for="exampleInputUsername">نام کاربری</label><input type="text" class="form-control" id="exampleInputUsername" placeholder="نام را وارد کنید">
</div>
<div class="form-group">
<label for="exampleInputEmail2">پست الکترونیک</label><input type="email" class="form-control" id="exampleInputEmail2" placeholder="Youremail@gmail.com">
</div>
<div class="form-group">
<label for="exampleInputPassword2">کلمه عبور</label><input type="password" class="form-control" id="exampleInputPassword2" placeholder="کلمه عبور">
</div>
<a href="#" class="float-end text-muted font-size-15">رمز عبور را فراموش کرده اید؟</a><div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck2"><label class="custom-control-label font-size-15" for="customCheck2">مرا به خاطر بسپار</label>
</div>
<div class="text-center mt-4"><button type="submit" class="btn btn-primary">ثبت نام<i class="icon-size-15 icon ms-1" data-feather="arrow-right-circle"></i></button></div>
</form>
<div class="position-relative text-center mt-4">
<span class="login-border"></span><p class="social-login text-muted font-size-17">ورود به سیستم اجتماعی</p>
</div>
<div class="text-center"><ul class="list-inline mt-2 mb-3">
<li class="list-inline-item me-3"><a href="#" class="login-social-icon icon-primary"><i class="icon-xs" data-feather="facebook"></i></a></li>
<li class="list-inline-item me-3"><a href="#" class="login-social-icon icon-info"><i class="icon-xs" data-feather="twitter"></i></a></li>
<li class="list-inline-item me-3"><a href="#" class="login-social-icon icon-danger"><i class="icon-xs" data-feather="instagram"></i></a></li>
<li class="list-inline-item"><a href="#" class="login-social-icon icon-success"><i class="icon-xs" data-feather="linkedin"></i></a></li>
</ul></div>
</div>
</div></div></div></div> --}}
<script>

let lastScrollTop = 0;

const navbar = document.getElementById('navbar');

window.addEventListener('scroll', function(){

    let currentScroll =
        window.pageYOffset ||
        document.documentElement.scrollTop;

    if(currentScroll > 100){

        navbar.classList.add('scrolled');

        if(currentScroll > lastScrollTop){

            // اسکرول به پایین
            navbar.classList.add('nav-hidden');

        }else{

            // اسکرول به بالا
            navbar.classList.remove('nav-hidden');

        }

    }else{

        navbar.classList.remove('nav-hidden');
        navbar.classList.remove('scrolled');

    }

    lastScrollTop = currentScroll <= 0
        ? 0
        : currentScroll;

});

</script>
<script src="js/bootstrap.bundle.min.js"></script><script src="js/smooth-scroll.polyfills.min.js"></script><script src="js/gumshoe.polyfills.min.js"></script><script src="js/feather.js"></script><script src="js/unicons.js"></script><script src="js/app.js"></script>
<script data-cfasync="false" src="podcast/js/email-decode.min.js"></script>
<script src="podcast/js/jquery-3.7.1.min.js"></script>
<script src="podcast/js/modernizr.min.js"></script>
<script src="podcast/js/bootstrap.bundle.min.js"></script>
<script src="podcast/js/imagesloaded.pkgd.min.js"></script>
<script src="podcast/js/jquery.magnific-popup.min.js"></script>
<script src="podcast/js/isotope.pkgd.min.js"></script>
<script src="podcast/js/jquery.appear.min.js"></script>
<script src="podcast/js/jquery.easing.min.js"></script>
<script src="podcast/js/owl.carousel.min.js"></script>
<script src="podcast/js/counter-up.js"></script>
<script src="podcast/js/wow.min.js"></script>
<script src="podcast/js/amplitude.min.js"></script>
<script src="podcast/js/amplitude-custom.js"></script>
<script src="podcast/js/main.js"></script>

</body>
</html>
