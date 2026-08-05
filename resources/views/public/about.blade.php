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

    <main class="main">

        <div class="site-breadcrumb" style="background: url(podcast/images/aboutus-01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">درباره ما</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">خانه</a></li>
                    <li class="active">درباره ما</li>
                </ul>
            </div>
        </div>


        <div class="about-area py-80 mb-20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                            <div class="about-img">
                                <div class="about-experience">
                                    <h6>۸۵.۶ هزار</h6>
                                    <p>شنونده</p>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="img-1">
                                            <img src="podcast/images/01_1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="img-2">
                                            <img src="podcast/images/02.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="fas fa-microphone-lines"></i> درباره ما</span>
                                <h2 class="site-title">
                                    پادکست مورد علاقه <span>راهی برای گوش دادن</span> سریع                                </h2>
                            </div>
                            <div class="about-content">
                                <p class="about-text">
                                    در اینجا انواع مختلفی از معابر در دسترس است، اما اکثریت آنها آسیب دیده اند
                                    تغییر به شکلی توسط طنز تزریقی کلمات تصادفی که یکنواخت به نظر نمی رسند
                                    طرح بندی محتوای قابل خواندن کمی باورپذیر.
                                </p>
                                <div class="about-item-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about-item">
                                                <div class="icon">
                                                    <img src="podcast/images/podcast-1.svg" alt="">
                                                </div>
                                                <div class="content">
                                                    <h4>پادکست زنده آنتایم</h4>
                                                    <p>کلمات تصادفی طنز که ظاهری یکسان دارند.</p>
                                                </div>
                                            </div>
                                            <div class="about-item">
                                                <div class="icon">
                                                    <img src="podcast/images/podcast.svg" alt="">
                                                </div>
                                                <div class="content">
                                                    <h4>بهترین کیفیت صدا</h4>
                                                    <p>کلمات تصادفی طنز که ظاهری یکسان دارند.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="about-list">
                                                <li class="about-list-item">
                                                    <i class="fas fa-circle-check"></i> پادکست زنده در زمان
                                                </li>
                                                <li class="about-list-item">
                                                <i class="fas fa-circle-check"></i> گوش دادن آفلاین به پادکست ها
                                                </li>
                                                <li class="about-list-item">
                                                <i class="fas fa-circle-check"></i> بهترین کیفیت صدا
                                                </li>
                                                <li class="about-list-item">
                                                <i class="fas fa-circle-check"></i> نمایش پادکست همه نوع
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-bottom">
                                <a href="about.html" class="theme-btn">مشاهده بیشتر<i
                                        class="fas fa-circle-arrow-left"></i></a>
                                <div class="about-phone">
                                    <div class="icon"><i class="far fa-headset"></i></div>
                                    <div class="number">
                                        <span>تماس با ما</span>
                                        <h6><a href="tel:+21236547898"> ۷۲۸۳۵۳ ۲۱+</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="counter-area pt-40 pb-40">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay=".25s">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="podcast/images/podcast.svg" alt="">
                            </div>
                            <div class="counter-item">
                                <div class="counter-content">
                                    <span class="counter" data-count="+" data-to="80" data-speed="3000" style="    font-family: 'vazir-number';">۸۰</span>
                                    <span class="counter-unit">هزار</span>
                                </div>
                                <h6 class="title">مجموع قسمت ها</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="podcast/images/love.svg" alt="">
                            </div>
                            <div class="counter-item">
                                <div class="counter-content">
                                    <span class="counter" data-count="+" data-to="900" data-speed="3000"
                                        style="    font-family: 'vazir-number';">۹۰۰</span>
                                    <span class="counter-unit">هزار</span>
                                </div>
                                <h6 class="title">شنونده راضی</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="podcast/images/host.svg" alt="">
                            </div>
                            <div class="counter-item">
                                <div class="counter-content">
                                    <span class="counter" data-count="+" data-to="150" data-speed="3000"
                                        style="    font-family: 'vazir-number';">۱۵۰</span>
                                    <span class="counter-unit">+</span>
                                </div>
                                <h6 class="title">مجموع میزبان ها</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon">
                                <img src="podcast/images/rate.svg" alt="">
                            </div>
                            <div class="counter-item">
                                <div class="counter-content">
                                    <span class="counter" data-count="+" data-to="30" data-speed="3000"
                                        style="    font-family: 'vazir-number';">۳۰</span>
                                    <span class="counter-unit">+</span>
                                </div>
                                <h6 class="title">سال های تجربه</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="choose-area py-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="fas fa-microphone-lines"></i> چرا ما ؟</span>
                                <h2 class="site-title">
                                    آسان برای گوش دادن <span>هر زمان</span> و هر جا
                                </h2>
                            </div>
                            <p>
                                تنوع بسیاری از معابر موجود است، اما اکثر آنها در برخی دچار تغییر شده اند
                                فرم توسط
                                کلمات طنز تزریق شده حتی کمی باورپذیر به نظر می رسند. اگر می خواهید از استفاده کنید
                                باید مطمئن شوید که ژنراتور در اینترنت وجود دارد.
                            </p>
                            <div class="choose-item-wrap">
                                <div class="choose-item">
                                    <div class="icon">
                                        <img src="podcast/images/offline.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>به صورت آفلاین به پادکست گوش دهید</h5>
                                        <p>این یک واقعیت ثابت شده است که حواس خواننده از این موضوع پرت می شود
                                        محتوای قابل خواندن یک صفحه هنگام مشاهده طرح آن.</p>
                                    </div>
                                </div>
                                <div class="choose-item">
                                    <div class="icon">
                                        <img src="podcast/images/podcast-1.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>بهترین کیفیت صدا در تمام دوران</h5>
                                        <p>این یک واقعیت ثابت شده است که حواس خواننده از این موضوع پرت می شود
                                        محتوای قابل خواندن یک صفحه هنگام مشاهده طرح آن.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-40">
                                <a href="#" class="theme-btn">شروع گوش دادن<i
                                        class="fas fa-circle-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-img-wrap">
                            <div class="choose-img wow fadeInRight" data-wow-delay=".25s">
                                <img src="podcast/images/01_5.jpg" alt="">
                            </div>
                            <div class="choose-img-shape">
                                <img src="podcast/images/03.png" alt="">
                            </div>
                            <div class="choose-img-content wow fadeInUp" data-wow-delay=".50s">
                                <ul>
                                    <li><i class="fas fa-check-circle"></i> موجود در همه پلتفرم‌ها</li>
                                    <li><i class="fas fa-check-circle"></i> اپیزودهای خود را ضبط کنید</li>
                                    <li><i class="fas fa-check-circle"></i> با مردم بحث کنید</li>
                                    <li><i class="fas fa-check-circle"></i> گوش دادن در موقعیت خاموش صفحه</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="testimonial-area bg pt-60 pb-60">
            <div class="testimonial-bg" >
                <img src="podcast/images/bg.jpg" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="site-heading wow fadeInDown" data-wow-delay=".25s" >
                            <span class="site-title-tagline"><i class="fas fa-microphone-lines"></i> دیدگاه ها</span>
                            <h2 class="site-title">کاربران در مورد را چه میگویند</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 wow fadeInUp" data-wow-delay=".25s" dir="ltr" style="margin-left: auto;">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <div class="testimonial-item" dir="rtl">
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="testimonial-quote">
                                <p>
                                    انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                    تغییر
                                    در برخی از واقعیت های ثابت شده که اکثریت دچار تغییر شده اند.
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="podcast/images/01_8.jpg" alt="">
                                </div>
                                <div class="author-info">
                                    <h4>دانیال حکیمی</h4>
                                    <p>کاربر</p>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <img src="podcast/images/quote.svg" alt="">
                            </div>
                        </div>
                        <div class="testimonial-item" dir="rtl">
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="testimonial-quote">
                                <p>
                                    انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                    تغییر
                                    در برخی از واقعیت های ثابت شده که اکثریت دچار تغییر شده اند.
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="podcast/images/02_7.jpg" alt="">
                                </div>
                                <div class="author-info">
                                    <h4>امین حیایی</h4>
                                    <p>کاربر</p>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <img src="podcast/images/quote.svg" alt="">
                            </div>
                        </div>
                        <div class="testimonial-item" dir="rtl">
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="testimonial-quote">
                                <p>
                                    انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                    تغییر
                                    در برخی از واقعیت های ثابت شده که اکثریت دچار تغییر شده اند.
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="podcast/images/03_6.jpg" alt="">
                                </div>
                                <div class="author-info">
                                    <h4>اکبر عبدی</h4>
                                    <p>کاربر</p>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <img src="podcast/images/quote.svg" alt="">
                            </div>
                        </div>
                        <div class="testimonial-item" dir="rtl">
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="testimonial-quote">
                                <p>
                                    انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                    تغییر
                                    در برخی از واقعیت های ثابت شده که اکثریت دچار تغییر شده اند.
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="podcast/images/04_5.jpg" alt="">
                                </div>
                                <div class="author-info">
                                    <h4>محمد زمانی</h4>
                                    <p>کاربر</p>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <img src="podcast/images/quote.svg" alt="">
                            </div>
                        </div>
                        <div class="testimonial-item" dir="rtl">
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="testimonial-quote">
                                <p>
                                    انواع مختلفی از معابر موجود است، اما اکثریت آن ها آسیب دیده اند
                                    تغییر
                                    در برخی از واقعیت های ثابت شده که اکثریت دچار تغییر شده اند.
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-img">
                                    <img src="podcast/images/05_4.jpg" alt="">
                                </div>
                                <div class="author-info">
                                    <h4>محسن دادار</h4>
                                    <p>کابر</p>
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


        <div class="team-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center wow fadeInDown" data-wow-delay=".25s">
                            <span class="site-title-tagline"><i class="fas fa-microphone-lines"></i> تیم ما</span>
                            <h2 class="site-title">ملاقات کنید با  <span>پادکستر ها</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay=".25s">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="podcast/images/01_7.jpg" alt="thumb">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h5><a href="#">آنجلینا ویجی</a></h5>
                                <span>پادکستر ارشد</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="podcast/images/02_6.jpg" alt="thumb">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h5><a href="#">فرانک میچل</a></h5>
                                <span>پادکستر ارشد</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="podcast/images/03_5.jpg" alt="thumb">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h5><a href="#">سوسن لونسفرد</a></h5>
                                <span>مدیر عامل</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="podcast/images/04_4.jpg" alt="thumb">
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-info">
                                <h5><a href="#">دنیس پروتیت</a></h5>
                                <span>پادکستر ارشد</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="partner-area bg pt-50 pb-50" dir="ltr">
            <div class="container">
                <div class="partner-wrapper">
                    <div class="partner-slider owl-carousel owl-theme wow fadeInUp" data-wow-delay=".25s">
                        <img src="podcast/images/01.png" alt="thumb">
                        <img src="podcast/images/02.png" alt="thumb">
                        <img src="podcast/images/03_1.png" alt="thumb">
                        <img src="podcast/images/04.png" alt="thumb">
                        <img src="podcast/images/05.png" alt="thumb">
                        <img src="podcast/images/03_1.png" alt="thumb">
                        <img src="podcast/images/02.png" alt="thumb">
                    </div>
                </div>
            </div>
        </div>

    </main>
    
@endsection