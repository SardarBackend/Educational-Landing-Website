<!DOCTYPE html>
<html dir="rtl" lang="fa"><!---design By Mellatweb.com-->
<head>
<meta charset="utf-8">
<title>Lezir - الگوی صفحه فرود Bootstrap 5.3 پاسخگو</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Premium Bootstrap 4 Landing Page Template">
<meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose">
<meta content="mellatweb.com" name="author">
<link rel="shortcut icon" href="images/favicon.ico">
<link href="css/bootstrap.rtl.min.css" rel="stylesheet" type="text/css">
<link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
<link href="css/style.min.css" rel="stylesheet" type="text/css">
<style>
    .timeline-wrapper{
    position:relative;
    padding-top:30px;
}

.timeline-line{
    position:absolute;
    top:60px;
    left:5%;
    width:90%;
    height:4px;
    background:linear-gradient(
        90deg,
        #0d6efd,
        #20c997,
        #ffc107,
        #dc3545
    );
    border-radius:10px;
}

.timeline-item{
    position:relative;
    z-index:2;
}

.timeline-icon{
    width:90px;
    height:90px;
    border-radius:50%;
    color:#fff;
    font-size:36px;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:auto;
    box-shadow:0 10px 25px rgba(0,0,0,.15);
    transition:.3s;
}

.timeline-item:hover .timeline-icon{
    transform:translateY(-8px);
}

.timeline-item h6{
    margin-top:15px;
}

@media(max-width:991px){

    .timeline-line{
        display:none;
    }

    .timeline-item{
        margin-bottom:30px;
    }

    .timeline-icon{
        width:75px;
        height:75px;
        font-size:28px;
    }
}

.feature-icon{
    width:90px;
    height:90px;
}

.feature-icon i{
    font-size:40px;
}

.card{
    transition:all .3s ease;
    border-radius:18px;
}

.card:hover{
    transform:translateY(-6px);
}

@media (max-width:768px){

    .feature-icon{
        width:70px;
        height:70px;
    }

    .feature-icon i{
        font-size:32px;
    }

    h2{
        font-size:1.8rem;
    }

    .card{
        padding:1.5rem !important;
    }
}

.resource-orbit{
    position:relative;
    height:650px;
    max-width:900px;
    margin:auto;
}

.main-resource-card{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    width:380px;
    max-width:90%;
    padding:50px 30px;
    text-align:center;
    border-radius:30px;
    background:rgba(255,255,255,.95);
    backdrop-filter:blur(12px);
    box-shadow:0 25px 60px rgba(0,0,0,.08);
    z-index:10;
}

.resource-number{
    font-size:4rem;
    font-weight:800;
    color:var(--bs-primary);
    line-height:1;
    margin-bottom:15px;
}

.floating-card{
    position:absolute;
    background:white;
    padding:18px 24px;
    border-radius:20px;
    box-shadow:0 15px 35px rgba(0,0,0,.08);
    display:flex;
    align-items:center;
    gap:12px;
    font-weight:600;
    animation:float 4s ease-in-out infinite;
}

.floating-card i{
    font-size:28px;
    color:var(--bs-primary);
}

.card-1{
    top:60px;
    left:100px;
}

.card-2{
    top:20px;
    right:120px;
}

.card-3{
    top:210px;
    right:20px;
}

.card-4{
    bottom:120px;
    left:50px;
}

.card-5{
    bottom:40px;
    right:130px;
}

@keyframes float{
    0%,100%{
        transform:translateY(0);
    }
    50%{
        transform:translateY(-12px);
    }
}

@media(max-width:992px){

    .resource-orbit{
        height:auto;
    }

    .main-resource-card{
        position:relative;
        top:auto;
        left:auto;
        transform:none;
        margin:auto;
    }

    .floating-card{
        position:relative;
        margin:15px auto;
        width:250px;
        justify-content:center;
    }

    .card-1,
    .card-2,
    .card-3,
    .card-4,
    .card-5{
        top:auto;
        left:auto;
        right:auto;
        bottom:auto;
    }
}



.featured-news-card{
    position:relative;
    overflow:hidden;
    border-radius:24px;
    box-shadow:0 15px 40px rgba(0,0,0,.08);
}

.featured-news-card img{
    width:100%;
    height:420px;
    object-fit:cover;
    display:block;
}

.featured-news-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(
        to top,
        rgba(0,0,0,.85),
        rgba(0,0,0,.25)
    );
    color:#fff;
    display:flex;
    flex-direction:column;
    justify-content:flex-end;
    padding:40px;
}

.featured-news-overlay h3{
    font-size:1.8rem;
    line-height:1.5;
    margin-bottom:12px;
    max-width:650px;
}

.featured-news-overlay p{
    font-size:.95rem;
    opacity:.95;
    max-width:600px;
    margin-bottom:22px;
}

.news-tag{
    display:inline-block;
    width:fit-content;
    background:#0d6efd;
    padding:8px 16px;
    border-radius:50px;
    font-size:.8rem;
    font-weight:600;
}

.custom-arrow{
    width:60px;
    opacity:1;
}

.custom-arrow i{
    width:46px;
    height:46px;
    border-radius:50%;
    background:#fff;
    color:#0d6efd;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:22px;
    box-shadow:0 10px 25px rgba(0,0,0,.12);
}

.custom-indicators{
    margin-bottom:-45px;
}

.custom-indicators button{
    width:10px !important;
    height:10px !important;
    border-radius:50%;
    background:#0d6efd !important;
}



@media (max-width:992px){

    .featured-news-card img{
        height:340px;
    }

    .featured-news-overlay{
        padding:30px;
    }

    .featured-news-overlay h3{
        font-size:1.45rem;
    }

    .featured-news-overlay p{
        font-size:.9rem;
    }

}


@media (max-width:768px){

    .featured-news-card{
        border-radius:18px;
    }

    .featured-news-card img{
        height:260px;
    }

    .featured-news-overlay{
        padding:20px;
    }

    .featured-news-overlay h3{
        font-size:1.05rem;
        margin-bottom:8px;
    }

    .featured-news-overlay p{
        font-size:.82rem;
        margin-bottom:12px;

        display:-webkit-box;
        -webkit-line-clamp:2;
        -webkit-box-orient:vertical;
        overflow:hidden;
    }

    .news-tag{
        font-size:.7rem;
        padding:5px 12px;
    }

    .featured-news-overlay .btn{
        font-size:.8rem;
        padding:.45rem 1rem;
    }

    .custom-arrow{
        display:none;
    }

}



@media (min-width:1400px){

    .featured-news-card img{
        height:480px;
    }

}

.contact-section{
    background:#f8fafc;
}

.contact-badge{
    background:#eaf2ff;
    color:#0d6efd;
    padding:8px 16px;
    border-radius:50px;
    font-size:.9rem;
    font-weight:600;
}

.contact-info-card,
.contact-form-card{
    background:#fff;
    border-radius:24px;
    padding:35px;
    box-shadow:0 10px 35px rgba(0,0,0,.05);
    height:100%;
}

.contact-item{
    display:flex;
    gap:15px;
    margin-bottom:25px;
}

.contact-item i{
    width:50px;
    height:50px;
    border-radius:14px;
    background:#eef4ff;
    color:#0d6efd;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:22px;
    flex-shrink:0;
}

.contact-item small{
    color:#6c757d;
}

.contact-item p{
    margin:0;
    font-weight:600;
}

.custom-input{
    border-radius:14px;
    padding:14px 16px;
    border:1px solid #e5e7eb;
}

.custom-input:focus{
    box-shadow:none;
    border-color:#0d6efd;
}

.btn-primary{
    border-radius:14px;
}

@media(max-width:992px){

    .contact-info-card{
        margin-bottom:10px;
    }

}

@media(max-width:768px){

    .contact-info-card,
    .contact-form-card{
        padding:25px;
        border-radius:18px;
    }

    .contact-item i{
        width:42px;
        height:42px;
        font-size:18px;
    }

    .btn-lg{
        width:100%;
    }

}

.custom-navbar{
    transition:all .35s ease;
    padding:20px 0;
    background:rgba(255,255,255,.9);
    backdrop-filter:blur(12px);
    border-bottom:1px solid transparent;
}

.custom-navbar .nav-link{
    font-weight:500;
    margin:0 6px;
}

.custom-navbar.scrolled{
    padding:10px 0;
    background:#fff;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    border-bottom:1px solid #eee;
}

.custom-navbar.scrolled .navbar-brand img{
    height:30px;
}

.navbar-brand img{
    transition:.3s;
}

.nav-link{
    transition:.3s;
}

.nav-link:hover{
    color:var(--bs-primary) !important;
}

.min-vh-75{
    min-height:75vh;
}

.hero-1-title{
    font-size:3.2rem;
    line-height:1.4;
}

.hero-content{
    max-width:520px;
}

.hero-img{
    max-height:550px;
    transition:.4s;
}

.hero-img:hover{
    transform:translateY(-8px);
}

.subscribe-form .form-control{
    min-height:52px;
    border-radius:12px;
}

.subscribe-form .btn{
    min-height:52px;
    border-radius:12px;
    padding:0 24px;
}

@media (max-width:992px){

    .hero-1-title{
        font-size:2.5rem;
    }

    .hero-content{
        max-width:100%;
    }

}

@media (max-width:768px){

    .hero-1-title{
        font-size:2rem;
        text-align:center;
    }

    .hero-content{
        text-align:center;
    }

    .hero-image{
        margin-top:40px;
    }

    .hero-img{
        max-height:350px;
    }

    .subscribe-form form{
        justify-content:center;
    }

}

:root{
    --bs-primary:#16a34a;
}

.btn-primary{
    background:#16a34a !important;
    border-color:#16a34a !important;
}

.text-primary{
    color:#16a34a !important;
}

.bg-primary{
    background:#16a34a !important;
}

.btn-outline-primary{
    color:#16a34a !important;
    border-color:#16a34a !important;
}

.btn-outline-primary:hover{
    background:#16a34a !important;
    border-color:#16a34a !important;
}

.btn-primary{
    background:#16a34a !important;
    border:none;
    border-radius:12px;
    padding:10px 22px;
    font-weight:600;
    transition:.3s;
}

.btn-primary:hover{
    background:#15803d !important;
    transform:translateY(-2px);
    box-shadow:0 8px 20px rgba(22,163,74,.25);
}

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
{{-- <a href="javascript:%20void(0);" id="light-dark-mode" class="mode-btn text-white rounded-end"><i class="mdi mdi-sun-compass bx-spin mode-light"></i><i class="mdi mdi-moon-waning-crescent mode-dark"></i></a><div id="preloader"><div id="status"><div class="spinner"></div></div></div> --}}
<nav class="navbar navbar-expand-lg fixed-top custom-navbar" id="navbar">

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
                    <a href="/way" class="nav-link">مسیر رشد</a>
                </li>

                <li class="nav-item">
                    <a href="/books" class="nav-link">کتاب ها</a>
                </li>
                <li class="nav-item">
                    <a href="/episode-list" class="nav-link"> پادکست ها</a>
                </li>
                <li class="nav-item">
                    <a href="/episode-list" class="nav-link"> دوره ها</a>
                </li>

                <li class="nav-item">
                    <a href="#news" class="nav-link">اخبار و رویدادها</a>
                </li>

                <li class="nav-item">
                    <a href="/Achievements" class="nav-link">دستاوردها</a>
                </li>



            </ul>

            <div class="d-flex gap-2">


                    
            @guest
                <a href="/login" class="btn btn-sm btn-light">
                    ورود
                </a>
            @else
                <a href="/personal" class="d-flex align-items-center">
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
                    


                <a href="/way" class="btn btn-sm text-white" style="background-color: #22c55e;">
                    شروع مسیر رشد
                </a>

            </div>

        </div>

    </div>

</nav>

<section class="hero-1-bg position-relative overflow-hidden"
         style="background-image: url(images/hero-1-bg-img.png)"
         id="home">

    <div class="container">

        <div class="row align-items-center justify-content-center min-vh-75">

            <!-- Content -->
            <div class="col-lg-6">

                <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">
                    سامانه رشد علمی و پژوهشی
                </span>

                <h1 class="hero-1-title fw-bold mb-4">
                    مسیر رشد علمی و پژوهشی
                    دانشجو-معلمان
                </h1>

                <div class="hero-content mb-5 mb-lg-0">

                    <p class="text-muted mb-4 font-size-17">
                        بستری برای توسعه مهارت‌های پژوهشی، دسترسی به منابع آموزشی،
                        ثبت دستاوردها و مشارکت در فعالیت‌های علمی و حرفه‌ای.
                    </p>

                    <p class="text-muted mb-4">
                        📚 بیش از ۲۰۰ منبع آموزشی، وبینار تخصصی، کتابچه، پادکست و
                        محتوای کاربردی برای رشد حرفه‌ای شما.
                    </p>

                    <div class="subscribe-form">

                        <form action="{{ route('send_email') }}" method="POST" class="d-flex flex-wrap gap-2">

                            <input type="email"
                                    name="email"
                                   class="form-control"
                                   placeholder="ایمیل خود را وارد کنید">

                            <button type="submit"
                                    class="btn text-white"  style="background-color: #22c55e;">

                                شروع مسیر رشد

                            </button>

                        </form>

                    </div>

                </div>

            </div>

            <!-- Image -->

            <div class="col-lg-6 col-md-10">

                <div class="hero-image text-center mt-5 mt-lg-0">

                    <img src="images/hero-1-img.png"
                         alt=""
                         class="img-fluid hero-img">

                </div>

            </div>

        </div>

    </div>

</section>

<section class="section py-5">
    <div class="container">

        <div class="row align-items-center g-5">

            <!-- معرفی -->
            <div class="col-lg-4 text-center text-lg-end">

                <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-soft-primary mb-4 feature-icon">
                    <i class="mdi mdi-school-outline text-primary"></i>
                </div>

                <h2 class="fw-bold mb-3">
                    مسیر رشد علمی و پژوهشی
                </h2>

                <p class="text-muted mb-4">
                    بستری برای ثبت فعالیت‌های پژوهشی، مستندسازی دستاوردها و پایش پیشرفت حرفه‌ای دانشجو-معلمان در طول دوران تحصیل.
                </p>

                <a href="/way" class="btn text-white  px-4"  style="background-color: #22c55e;">
                    مشاهده جزئیات
                </a>

            </div>

            <!-- کارت ها -->
            <div class="col-lg-8">

                <div class="row g-4">

                    <div class="col-12 col-md-6">
                        <div class="card border-0 shadow-sm h-100 text-center p-4">
                            <i class="mdi mdi-book-open-page-variant text-primary display-5 mb-3"></i>
                            <h5 class="fw-bold">ثبت پژوهش‌ها</h5>
                            <p class="text-muted mb-0">
                                ثبت مقالات، پروژه‌ها و فعالیت‌های علمی در پرونده پژوهشی.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card border-0 shadow-sm h-100 text-center p-4">
                            <i class="mdi mdi-chart-line text-primary display-5 mb-3"></i>
                            <h5 class="fw-bold">پایش پیشرفت</h5>
                            <p class="text-muted mb-0">
                                ارزیابی مستمر عملکرد و میزان دستیابی به اهداف علمی.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card border-0 shadow-sm h-100 text-center p-4">
                            <i class="mdi mdi-account-group-outline text-primary display-5 mb-3"></i>
                            <h5 class="fw-bold">راهنمایی تخصصی</h5>
                            <p class="text-muted mb-0">
                                تعامل با استادان و دریافت بازخورد برای بهبود فعالیت‌ها.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card border-0 shadow-sm h-100 text-center p-4">
                            <i class="mdi mdi-trophy-award text-primary display-5 mb-3"></i>
                            <h5 class="fw-bold">نمایش دستاوردها</h5>
                            <p class="text-muted mb-0">
                                ایجاد رزومه علمی و ارائه توانمندی‌ها و افتخارات.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>



<section class="section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- ویدئو -->
            <div class="col-lg-7">
                <div class="position-relative">

            <div class="ratio ratio-16x9 rounded overflow-hidden shadow-lg">
                <iframe
                    src="./Recording 2024-10-27 054020.mp4"
                    title="ویدئوی معرفی"
                    allowfullscreen>
                </iframe>
            </div>

                    <div class="bg-white shadow rounded p-4 mt-n4 mx-4 position-relative">
                        <div class="row text-center">
                            <div class="col-4">
                                <h3 class="fw-bold text-primary mb-1">20+</h3>
                                <small class="text-muted">سال سابقه</small>
                            </div>
                            <div class="col-4">
                                <h3 class="fw-bold text-primary mb-1">1500+</h3>
                                <small class="text-muted">دانش‌پذیر</small>
                            </div>
                            <div class="col-4">
                                <h3 class="fw-bold text-primary mb-1">50+</h3>
                                <small class="text-muted">استاد متخصص</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- متن -->
            <div class="col-lg-5">

                <span class="badge bg-soft-primary text-primary px-3 py-2 mb-3">
                    معرفی مؤسسه
                </span>

                <h2 class="fw-bold mb-4">
                    آموزش، پژوهش و توسعه مهارت برای آینده‌ای بهتر
                </h2>

                <p class="text-muted mb-4">
                    مؤسسه ما با بهره‌گیری از اعضای هیئت علمی مجرب، امکانات آموزشی
                    نوین و رویکردی مبتنی بر کیفیت، بستری پویا برای یادگیری،
                    پژوهش و رشد حرفه‌ای دانشجویان و پژوهشگران فراهم کرده است.
                </p>

                <div class="mb-3 d-flex">
                    <i class="mdi mdi-check-circle text-success me-2"></i>
                    <span>اساتید و متخصصان با تجربه علمی و اجرایی</span>
                </div>

                <div class="mb-3 d-flex">
                    <i class="mdi mdi-check-circle text-success me-2"></i>
                    <span>برنامه‌های آموزشی منطبق با استانداردهای روز</span>
                </div>

                <div class="mb-3 d-flex">
                    <i class="mdi mdi-check-circle text-success me-2"></i>
                    <span>حمایت از پژوهش، نوآوری و فعالیت‌های علمی</span>
                </div>

                <div class="mb-4 d-flex">
                    <i class="mdi mdi-check-circle text-success me-2"></i>
                    <span>محیط آموزشی حرفه‌ای و امکانات مدرن</span>
                </div>

                <a href="/about-us" class="btn text-white me-2" style="background-color: #16a34a;" >
                    اطلاعات بیشتر
                </a>

                <a href="/course-list" class="btn btn-outline-success">
                    مشاهده دوره‌ها
                </a>

            </div>

        </div>
    </div>
</section>
```



<section class="section bg-light py-5" id="career-path">
    <div class="container">

        <!-- Section Title -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">
                    مسیر توسعه علمی
                </span>

                <h2 class="fw-bold mb-3">
                    مسیر رشد از دانشجو تا هیئت علمی
                </h2>

                <p class="text-muted">
                    در این مسیر، افراد با کسب دانش، مهارت‌های پژوهشی و تجربه آموزشی
                    به مراتب بالاتر علمی دست یافته و به عضویت هیئت علمی دانشگاه می‌رسند.
                </p>
            </div>
        </div>

        <!-- Timeline -->
        <div class="timeline-wrapper">

            <div class="timeline-line"></div>

            <div class="row g-4 justify-content-center text-center">

                <!-- Student -->
                <div class="col">
                    <div class="timeline-item">
                        <div class="timeline-icon bg-primary">
                            <i class="mdi mdi-school"></i>
                        </div>

                        <h6 class="fw-bold mt-3">دانشجو</h6>

                        <p class="text-muted small">
                            آغاز مسیر یادگیری و کسب دانش تخصصی
                        </p>
                    </div>
                </div>

                <!-- Research Assistant -->
                <div class="col">
                    <div class="timeline-item">
                        <div class="timeline-icon bg-info">
                            <i class="mdi mdi-book-search"></i>
                        </div>

                        <h6 class="fw-bold mt-3">
                            دستیار پژوهشی
                        </h6>

                        <p class="text-muted small">
                            مشارکت در پروژه‌های علمی و تحقیقاتی
                        </p>
                    </div>
                </div>

                <!-- Researcher -->
                <div class="col">
                    <div class="timeline-item">
                        <div class="timeline-icon bg-success">
                            <i class="mdi mdi-flask"></i>
                        </div>

                        <h6 class="fw-bold mt-3">
                            پژوهشگر
                        </h6>

                        <p class="text-muted small">
                            تولید مقالات و توسعه فعالیت‌های پژوهشی
                        </p>
                    </div>
                </div>

                <!-- Lecturer -->
                <div class="col">
                    <div class="timeline-item">
                        <div class="timeline-icon bg-warning">
                            <i class="mdi mdi-teach"></i>
                        </div>

                        <h6 class="fw-bold mt-3">
                            مدرس
                        </h6>

                        <p class="text-muted small">
                            تجربه تدریس و انتقال دانش به دانشجویان
                        </p>
                    </div>
                </div>

                <!-- Assistant Professor -->
                <div class="col">
                    <div class="timeline-item">
                        <div class="timeline-icon bg-danger">
                            <i class="mdi mdi-account-tie"></i>
                        </div>

                        <h6 class="fw-bold mt-3">
                            استادیار
                        </h6>

                        <p class="text-muted small">
                            ورود رسمی به بدنه آموزشی دانشگاه
                        </p>
                    </div>
                </div>

                <!-- Associate Professor -->
                <div class="col">
                    <div class="timeline-item">
                        <div class="timeline-icon bg-secondary">
                            <i class="mdi mdi-account-star"></i>
                        </div>

                        <h6 class="fw-bold mt-3">
                            دانشیار
                        </h6>

                        <p class="text-muted small">
                            ارتقاء جایگاه علمی و پژوهشی
                        </p>
                    </div>
                </div>

                <!-- Professor -->
                <div class="col">
                    <div class="timeline-item">
                        <div class="timeline-icon bg-dark">
                            <i class="mdi mdi-crown"></i>
                        </div>

                        <h6 class="fw-bold mt-3">
                            عضو هیئت علمی
                        </h6>

                        <p class="text-muted small">
                            دستیابی به بالاترین سطح فعالیت دانشگاهی
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<section class="section py-5 overflow-hidden">
    <div class="container">

        <div class="text-center mb-5">
            <span class="badge bg-primary-subtle text-primary px-3 py-2">
                منابع یادگیری رایگان
            </span>

            <h2 class="fw-bold mt-3">
                یادگیری را از همین امروز آغاز کنید
            </h2>

            <p class="text-muted mx-auto" style="max-width:700px">
                مجموعه‌ای از وبینارها، کتابچه‌ها، پادکست‌ها، ویدئوهای آموزشی و
                فایل‌های تخصصی برای همراهی شما در مسیر رشد علمی و حرفه‌ای.
            </p>
        </div>

        <div class="resource-orbit">

            <div class="floating-card card-1">
                <i class="mdi mdi-video-outline"></i>
                <a href="/episode-list"><span>وبینار</span></a>
            </div>

            <div class="floating-card card-2">
                <i class="mdi mdi-file-pdf-box"></i>
                <span>PDF</span>
            </div>

            <div class="floating-card card-3">
                <i class="mdi mdi-book-open-page-variant"></i>
                <a href="/books"><span>کتابچه</span></a>
            </div>

            <div class="floating-card card-4">
                <i class="mdi mdi-podcast"></i>
                <a href="/episode-list"><span>پادکست</span></a>
            </div>

            <div class="floating-card card-5">
                <i class="mdi mdi-clipboard-check-outline"></i>
                <a href="#"><span>چک‌لیست</span></a>
            </div>

            <div class="main-resource-card">

                <div class="resource-number">
                    200+
                </div>

                <h3 class="fw-bold">
                    منبع آموزشی رایگان
                </h3>

                <p class="text-muted mb-4">
                    همه آنچه برای شروع مسیر یادگیری و پژوهش نیاز دارید.
                </p>

                <a href="/books" class="btn  text-white btn-lg" style="background-color: #16a34a;">
                    مشاهده منابع
                </a>

            </div>

        </div>

    </div>
</section>



<section class="section py-5 bg-light" id="news">

    <div class="container">

        <!-- Header -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">

                <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">
                    اخبار و رویدادها
                </span>

                <h2 class="fw-bold mb-3">
                    تازه‌ترین رویدادها و دستاوردهای علمی
                </h2>

                <p class="text-muted">
                    از وبینارها، نشست‌های علمی، فراخوان‌های پژوهشی و دستاوردهای دانشجو-معلمان مطلع شوید.
                </p>

            </div>
        </div>

        <!-- Slider -->
        <div id="newsCarousel" class="carousel slide  carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner">

                @foreach ($blogs as $blog)
                    
                <div class="carousel-item active">

                    <div class="featured-news-card">

                        <img src="images/blog/img-1.jpg" alt="">

                        <div class="featured-news-overlay">

                            <span class="news-tag">
                                وبینار تخصصی
                            </span>

                            <h3 class="fw-bold mt-3">
                             {{ $blog->title }}
                            </h3>

                            <p>
                                آشنایی با رویکردهای نوین پژوهش و شیوه‌های نگارش مقالات علمی برای دانشجو-معلمان.
                            </p>

                            <a href="/blog-{{ $blog->id }}" class="btn btn-light rounded-pill px-4">
                                مشاهده جزئیات
                            </a>

                        </div>

                    </div>

                </div>
                @endforeach

                <!-- Slide 2 -->
                {{-- <div class="carousel-item">

                    <div class="featured-news-card">

                        <img src="images/blog/img-2.jpg" alt="">

                        <div class="featured-news-overlay">

                            <span class="news-tag bg-success">
                                دستاورد پژوهشی
                            </span>

                            <h3 class="fw-bold mt-3">
                                انتشار مجموعه مقالات برتر دانشجو-معلمان
                            </h3>

                            <p>
                                معرفی آثار برگزیده پژوهشی و تجربیات موفق آموزشی در سطح دانشگاه.
                            </p>

                            <a href="/blogs" class="btn btn-light rounded-pill px-4">
                                مطالعه بیشتر
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">

                    <div class="featured-news-card">

                        <img src="images/blog/img-3.jpg" alt="">

                        <div class="featured-news-overlay">

                            <span class="news-tag bg-warning text-dark">
                                فراخوان
                            </span>

                            <h3 class="fw-bold mt-3">
                                فراخوان ارسال آثار پژوهشی و نوآورانه
                            </h3>

                            <p>
                                از تمامی دانشجو-معلمان دعوت می‌شود آثار و ایده‌های علمی خود را ارسال نمایند.
                            </p>

                            <a href="#" class="btn btn-light rounded-pill px-4">
                                شرکت در فراخوان
                            </a>

                        </div>

                    </div>

                </div> --}}

            </div>

            <!-- Controls -->

            <button class="carousel-control-prev custom-arrow"
                    type="button"
                    data-bs-target="#newsCarousel"
                    data-bs-slide="prev">

                <i class="mdi mdi-chevron-right"></i>

            </button>

            <button class="carousel-control-next custom-arrow"
                    type="button"
                    data-bs-target="#newsCarousel"
                    data-bs-slide="next">

                <i class="mdi mdi-chevron-left"></i>

            </button>

            <!-- Indicators -->

            <div class="carousel-indicators custom-indicators">

                <button type="button"
                        data-bs-target="#newsCarousel"
                        data-bs-slide-to="0"
                        class="active">
                </button>

                <button type="button"
                        data-bs-target="#newsCarousel"
                        data-bs-slide-to="1">
                </button>

                <button type="button"
                        data-bs-target="#newsCarousel"
                        data-bs-slide-to="2">
                </button>

            </div>

        </div>

    </div>

</section>

```html
<section class="contact-section py-5">

    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">

                <span class="contact-badge">
                    ارتباط با ما
                </span>

                <h2 class="fw-bold mt-3 mb-3">
                    سوالی دارید یا نیاز به راهنمایی دارید؟
                </h2>

                <p class="text-muted">
                    تیم پشتیبانی و کارشناسان سامانه آماده پاسخگویی به پرسش‌های شما
                    درباره مسیر رشد علمی، منابع آموزشی و فعالیت‌های پژوهشی هستند.
                </p>

            </div>
        </div>

        <div class="row g-4 align-items-stretch">

            <!-- Info Card -->

            <div class="col-lg-4">

                <div class="contact-info-card h-100">

                    <h4 class="fw-bold mb-4">
                        راه‌های ارتباطی
                    </h4>

                    <div class="contact-item">
                        <i class="mdi mdi-email-outline"></i>
                        <div>
                            <small>ایمیل</small>
                            <p>support@yourdomain.com</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="mdi mdi-phone-outline"></i>
                        <div>
                            <small>تلفن</small>
                            <p>021-12345678</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="mdi mdi-web"></i>
                        <div>
                            <small>وب‌سایت</small>
                            <p>www.cfu.ac.ir</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <div>
                            <small>نشانی</small>
                            <p>دانشگاه فرهنگیان</p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Form -->

            <div class="col-lg-8">

                <div class="contact-form-card">

                    <form method="POST" action="{{ route('Contact_post') }}">

                        <div class="row g-4">

                            <div class="col-md-6">
                                <label class="form-label">
                                    نام و نام خانوادگی
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    class="form-control custom-input"
                                    placeholder="نام خود را وارد کنید">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">
                                    ایمیل
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control custom-input"
                                    placeholder="example@email.com">
                            </div>

                            <div class="col-12">
                                <label class="form-label">
                                    موضوع
                                </label>

                                <input
                                    type="text"
                                    name="subject"
                                    class="form-control custom-input"
                                    placeholder="موضوع پیام">
                            </div>

                            <div class="col-12">
                                <label class="form-label">
                                    پیام
                                </label>

                                <textarea
                                name="content"
                                    rows="5"
                                    class="form-control custom-input"
                                    placeholder="پیام خود را بنویسید..."></textarea>
                            </div>

                            <div class="col-12">

                                <button class="btn text-white btn-lg px-4" type="submit"  style="background-color: #16a34a;">

                                    <i class="mdi mdi-send me-2"></i>

                                    ارسال پیام

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>
@include('sweetalert::alert')

<footer class="jv-footer">
    <div class="jv-footer__overlay"></div>

    <div class="jv-footer__container">

        <div class="jv-footer__grid">

            <!-- About -->
            <div class="jv-footer__brand">

                <a href="#" class="jv-footer__logo">
                    <img src="images/logo-light.png" alt="Logo">
                </a>

                <p class="jv-footer__description">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                    با استفاده از طراحان گرافیک است.
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
                    <h3 class="jv-footer__title">درباره ما</h3>

                    <ul>
                        <li><a href="#">آثار</a></li>
                        <li><a href="#">استراتژی</a></li>
                        <li><a href="#">منتشر شده</a></li>
                        <li><a href="#">مطبوعات</a></li>
                        <li><a href="#">ماموریت</a></li>
                    </ul>
                </div>

                <div class="jv-footer__column">
                    <h3 class="jv-footer__title">مشتریان</h3>

                    <ul>
                        <li><a href="#">تجارت</a></li>
                        <li><a href="#">محبوب</a></li>
                        <li><a href="#">مشتریان</a></li>
                        <li><a href="#">امکانات</a></li>
                    </ul>
                </div>

                <div class="jv-footer__column">
                    <h3 class="jv-footer__title">پشتیبانی</h3>

                    <ul>
                        <li><a href="#">توسعه‌دهندگان</a></li>
                        <li><a href="#">پشتیبانی</a></li>
                        <li><a href="#">خدمات مشتری</a></li>
                        <li><a href="#">شروع کنید</a></li>
                        <li><a href="#">راهنما</a></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>
</footer>


{{-- <section class="footer" style="background-image: url(images/footer-bg.png)"><div class="container"><div class="row">
<div class="col-lg-4"><div class="mb-5">
<img src="images/logo-light.png" alt="" class="" height="24"><p class="text-white-50 my-4 font-size-15">لورم پیسوم متن است چاپگرها در موتون блика روزنا</p>
<ul class="list-inline footer-social-icon-content">
<li class="list-inline-item me-4"><a href="#" class="footer-social-icon facebook"><i class="" data-feather="facebook"></i></a></li>
<li class="list-inline-item me-4"><a href="#" class="footer-social-icon"><i class="" data-feather="twitter"></i></a></li>
<li class="list-inline-item me-4"><a href="#" class="footer-social-icon"><i class="" data-feather="instagram"></i></a></li>
<li class="list-inline-item "><a href="#" class="footer-social-icon"><i class="" data-feather="linkedin"></i></a></li>
</ul>
</div></div>
<div class="col-lg-7 offset-lg-1"><div class="row">
<div class="col-md-4">
<h6 class="text-white text-uppercase mb-3">درباره ما</h6>
<ul class="list-unstyled footer-sub-menu">
<li><a href="#" class="footer-link">آثار</a></li>
<li><a href="#" class="footer-link">استراتژی</a></li>
<li><a href="#" class="footer-link">منتشر شده</a></li>
<li><a href="#" class="footer-link">مطبوعات</a></li>
<li><a href="#" class="footer-link">ماموریت</a></li>
</ul>
</div>
<div class="col-md-4">
<h6 class="text-white text-uppercase mb-3">مشتریان</h6>
<ul class="list-unstyled footer-sub-menu">
<li><a href="#" class="footer-link">تجارت</a></li>
<li><a href="#" class="footer-link">محبوب</a></li>
<li><a href="#" class="footer-link">مشتریان</a></li>
<li><a href="#" class="footer-link">امکانات</a></li>
</ul>
</div>
<div class="col-md-4">
<h6 class="text-white text-uppercase mb-3">حمایت کردن</h6>
<ul class="list-unstyled footer-sub-menu">
<li><a href="#" class="footer-link">توسعه دهندگان</a></li>
<li><a href="#" class="footer-link">حمایت کردن</a></li>
<li><a href="#" class="footer-link">خدمات مشتری</a></li>
<li><a href="#" class="footer-link">شروع کنید</a></li>
<li><a href="#" class="footer-link">راهنما</a></li>
</ul>
</div>
</div></div>
</div></div></section> --}}
{{-- <div class="footer-alt py-3"><div class="container"><div class="row"><div class="col-lg-12"><div class="text-center"><p class="text-white-50 font-size-15 mb-0"><script>document.write(new Date().getFullYear())</script>© Lezir. Design By <a href="https://www.mellatweb.com">Mellatweb</a></p></div></div></div></div></div>
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
</body>
</html>
