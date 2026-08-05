@extends('base')
@section('content')
<head>
<link rel="stylesheet" href="podcast/css/bootstrap.min.css">
<link rel="stylesheet" href="podcast/css/all-fontawesome.min.css">
<link rel="stylesheet" href="podcast/css/feather.min.css">
<link rel="stylesheet" href="podcast/css/animate.min.css">
<link rel="stylesheet" href="podcast/css/magnific-popup.min.css">
<link rel="stylesheet" href="podcast/css/owl.carousel.min.css">
<link rel="stylesheet" href="podcast/css/nice-select.min.css">
<link rel="stylesheet" href="podcast/css/amplitude.css">
<link rel="stylesheet" href="podcast/css/style.css">
</head>
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="اینجا جستجو کنید" required="">
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>


    <div class="sidebar-popup">
        <div class="sidebar-wrapper">
            <div class="sidebar-content">
                <button type="button" class="close-sidebar-popup"><i class="far fa-xmark"></i></button>
                <div class="sidebar-logo">
                    <img src="podcast/images/logo-dark.png" alt="">
                </div>
                <div class="sidebar-about">
                    <h4>درباره ما</h4>
                    <p>انواع مختلفی از معابر موجود است که مطمئناً اکثریت آنها دچار تغییر شده اند
                        برخی از آنها با تزریق طنز یا کلمات تصادفی که حتی کمی باورپذیر به نظر نمی رسند.</p>
                </div>
                <div class="sidebar-contact">
                    <h4>اطلاعات تماس</h4>
                    <ul>
                        <li>
                            <h6>ایمیل</h6>
                            <a href="https://devhostco.xyz/cdn-cgi/l/email-protection#9ef7f0f8f1defbe6fff3eef2fbb0fdf1f3"><i
                                    class="far fa-envelope"></i><span class="__cf_email__"
                                    data-cfemail="20494e464f604558414d504c450e434f4d">[email�&nbsp;protected]</span></a>
                        </li>
                        <li>
                            <h6>شماره</h6>
                            <a href="tel:+21236547898"><i class="far fa-phone"></i> ۱۱۳۳۲۷۱ ۲۱+</a>
                        </li>
                        <li>
                            <h6>آدرس</h6>
                            <a href="#"><i class="far fa-location-dot"></i>شیراز، خیابان ارم، نبش کوچه ۱۲</a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-social">
                    <h4>ما را دنبال کنید</h4>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <main class="main" >

        <div class="site-breadcrumb" style="background: url(podcast/images/aboutus-01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">دستاورد ها</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">خانه</a></li>
                    <li class="active">دستاورد ها</li>
                </ul>
            </div>
        </div>


<div class="testimonial-area bg py-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="site-heading wow fadeInDown" data-wow-delay=".25s">
                    <span class="site-title-tagline">
                        <i class="fas fa-award"></i>
                        دستاوردها و افتخارات
                    </span>
                    <h2 class="site-title">
                        مسیر موفقیت دانشجو معلمان آکادمیک
                    </h2>
                </div>
            </div>
        </div>

        <div class="col-lg-10 wow fadeInUp" data-wow-delay=".25s" dir="ltr" style="margin-left:auto;">
            <div class="testimonial-slider owl-carousel owl-theme">

                <!-- Item -->
                <div class="testimonial-item" dir="rtl">
                    <div class="testimonial-rate">
                        <i class="fas fa-trophy"></i>
                    </div>

                    <div class="testimonial-quote">
                        <p>
                            بیش از <strong>۲۵۰۰ دانشجو معلم</strong> در مسیر رشد علمی،
                            پژوهشی و حرفه‌ای از خدمات آکادمیک استفاده کرده‌اند و
                            جامعه‌ای پویا از معلمان پژوهشگر را شکل داده‌اند.
                        </p>
                    </div>

                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="images/achievement-1.jpg" alt="">
                        </div>

                        <div class="author-info">
                            <h4>۲۵۰۰+</h4>
                            <p>دانشجو معلم فعال</p>
                        </div>
                    </div>

                    <div class="quote-icon">
                        <img src="podcast/images/quote.svg" alt="">
                    </div>
                </div>

                <!-- Item -->
                <div class="testimonial-item" dir="rtl">
                    <div class="testimonial-rate">
                        <i class="fas fa-book-open"></i>
                    </div>

                    <div class="testimonial-quote">
                        <p>
                            صدها مقاله، طرح پژوهشی و فعالیت علمی توسط اعضای آکادمیک
                            تدوین و منتشر شده که نقش مهمی در توسعه رزومه علمی آنان
                            داشته است.
                        </p>
                    </div>

                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="images/achievement-2.jpg" alt="">
                        </div>

                        <div class="author-info">
                            <h4>۸۵۰+</h4>
                            <p>مقاله و پژوهش</p>
                        </div>
                    </div>

                    <div class="quote-icon">
                        <img src="podcast/images/quote.svg" alt="">
                    </div>
                </div>

                <!-- Item -->
                <div class="testimonial-item" dir="rtl">
                    <div class="testimonial-rate">
                        <i class="fas fa-medal"></i>
                    </div>

                    <div class="testimonial-quote">
                        <p>
                            اعضای آکادمیک موفق به کسب رتبه‌های برتر در جشنواره‌های
                            پژوهشی، مسابقات علمی و رویدادهای آموزشی کشور شده‌اند.
                        </p>
                    </div>

                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="images/achievement-3.jpg" alt="">
                        </div>

                        <div class="author-info">
                            <h4>۱۲۰+</h4>
                            <p>افتخار و رتبه علمی</p>
                        </div>
                    </div>

                    <div class="quote-icon">
                        <img src="podcast/images/quote.svg" alt="">
                    </div>
                </div>

                <!-- Item -->
                <div class="testimonial-item" dir="rtl">
                    <div class="testimonial-rate">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>

                    <div class="testimonial-quote">
                        <p>
                            بسیاری از اعضا پس از طی مسیر پژوهشی و آموزشی، به عنوان
                            مدرس دانشگاه، پژوهشگر و فعال علمی مشغول فعالیت شده‌اند.
                        </p>
                    </div>

                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="images/achievement-4.jpg" alt="">
                        </div>

                        <div class="author-info">
                            <h4>۷۵+</h4>
                            <p>مدرس و پژوهشگر</p>
                        </div>
                    </div>

                    <div class="quote-icon">
                        <img src="podcast/images/quote.svg" alt="">
                    </div>
                </div>

                <!-- Item -->
                <div class="testimonial-item" dir="rtl">
                    <div class="testimonial-rate">
                        <i class="fas fa-university"></i>
                    </div>

                    <div class="testimonial-quote">
                        <p>
                            آکادمیک بستری برای حرکت از دانشجو معلمی به سمت جایگاه‌های
                            علمی بالاتر و عضویت در هیئت علمی دانشگاه‌ها فراهم کرده است.
                        </p>
                    </div>

                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="images/achievement-5.jpg" alt="">
                        </div>

                        <div class="author-info">
                            <h4>مسیر رشد</h4>
                            <p>تا هیئت علمی</p>
                        </div>
                    </div>

                    <div class="quote-icon">
                        <img src="podcast/images/quote.svg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

    </main>
@endsection