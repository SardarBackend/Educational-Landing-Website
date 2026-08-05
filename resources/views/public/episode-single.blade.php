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
                <h2 class="breadcrumb-title">اپیسود تک</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">خانه</a></li>
                    <li class="active">اپیسود تک</li>
                </ul>
            </div>
        </div>


        <div class="episode-single py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <div class="widget">
                            <h4 class="widget-title">گوش کردن توسط : </h4>
                            <div class="listen-on">
                                <a href="#"><img src="podcast/images/spotify.svg" alt=""></a>
                                <a href="#"><img src="podcast/images/google.svg" alt=""></a>
                                <a href="#"><img src="podcast/images/apple.svg" alt=""></a>
                                <a href="#"><img src="podcast/images/itunes.svg" alt=""></a>
                                <a href="#"><img src="podcast/images/soundcloud.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">دسته بندی</h4>
                            <div class="category-list">
                                <a href="#"><i class="far fa-arrow-left"></i>پادکست بیزینس<span>(۱۰)</span></a>
                                <a href="#"><i class="far fa-arrow-left"></i>پادکست آموزش<span>(۱۵)</span></a>
                                <a href="#"><i class="far fa-arrow-left"></i>پادکست لایف استایل<span>(۲۶)</span></a>
                                <a href="#"><i class="far fa-arrow-left"></i>پادکست سفر<span>(۲۰)</span></a>
                                <a href="#"><i class="far fa-arrow-left"></i>پادکست تکنولوژي<span>(۳۰)</span></a>
                            </div>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">تگ های مشهور</h4>
                            <div class="tag-list">
                                <a href="#">پادکست</a>
                                <a href="#">بیزینس</a>
                                <a href="#">میزبان</a>
                                <a href="#">زنده</a>
                                <a href="#">استریم</a>
                                <a href="#">دیجیتال</a>
                                <a href="#">مدرن</a>
                                <a href="#">موزیک</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="episode-single-content">
                            <div class="episode-single-img">
                                <img src="podcast/images/single.jpg" alt="">
                            </div>
                            <div class="episode-single-meta">
                                <div class="meta-item">
                                    <div class="meta-img">
                                        <img src="podcast/images/single01.jpg" alt="#">
                                    </div>
                                    <div class="meta-item-info">
                                        <h6>میزبان ما</h6>
                                        <span> شکیبا</span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <div class="meta-icon">
                                        <i class="far fa-podcast"></i>
                                    </div>
                                    <div class="meta-item-info">
                                        <h6>دسته </h6>
                                        <span>لایف استایل</span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <div class="meta-icon">
                                        <i class="far fa-microphone-lines"></i>
                                    </div>
                                    <div class="meta-item-info">
                                        <h6>قسمت</h6>
                                        <span>۵۰</span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <div class="meta-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="meta-item-info">
                                        <h6>مدت زمان</h6>
                                        <span>۲ ساعت و ۳۰ دقیقه</span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <div class="meta-icon">
                                        <i class="far fa-calendar-alt"></i>
                                    </div>
                                    <div class="meta-item-info">
                                        <h6>تاریخ</h6>
                                        <span>۲۰ تیز , ۱۴۰۳</span>
                                    </div>
                                </div>
                                <div class="meta-item">
                                    <button type="button" class="player-btn amplitude-play-pause" data-song-add="8">
                                        <i class="fas fa-play"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="episode-single-info">
                                <h3 class="title">ذهنیت در زندگی ما بخش : ۰۱</h3>
                                <p class="mb-20">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی
                                </p>
                                <div class="episode-single-guest">
                                    <h3 class="title">میهمان ما</h3>
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="guest-item">
                                                <div class="guest-img">
                                                    <img src="podcast/images/single05.jpg" alt="">
                                                </div>
                                                <div class="guest-content">
                                                    <h4>محسن دادار</h4>
                                                    <span>کمدین</span>
                                                    <p>این یک واقعیت ثابت است که خواننده با آن پرت می شود
                                                        چیدمان</p>
                                                    <div class="guest-social">
                                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        <a href="#"><i class="fab fa-x-twitter"></i></a>
                                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="guest-item">
                                                <div class="guest-img">
                                                    <img src="podcast/images/single07.jpg" alt="">
                                                </div>
                                                <div class="guest-content">
                                                    <h4>رابرت تامسون</h4>
                                                    <span>کمدین</span>
                                                    <p>این یک واقعیت ثابت است که خواننده با آن پرت می شود
                                                        چیدمان</p>
                                                    <div class="guest-social">
                                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        <a href="#"><i class="fab fa-x-twitter"></i></a>
                                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-20">
                                    اما باید برای شما توضیح دهم که چگونه این همه تصور اشتباه تقبیح لذت و
                                    ستایش درد متولد شد و من به شما گزارش کاملی از سیستم خواهم داد و
                                    آموزه های واقعی کاشف بزرگ حقیقت را توضیح دهید
                                    استاد ساز خوشبختی انسان هیچ کس لذت را رد نمی کند، دوست ندارد یا از آن اجتناب نمی کند
                                    خود، چون لذت است، اما به این دلیل که کسانی که نمی دانند چگونه به دنبال
                                    لذت به طور منطقی با عواقبی روبرو می شود که بسیار دردناک است. نه دوباره
                                    آیا کسی هست که دوست داشته باشد یا به دنبال آن باشد یا بخواهد درد خود را بدست آورد؟
                                    چون درد است، اما به این دلیل که گهگاه شرایطی پیش می آید که در آن زحمت می کشد
                                    و درد می تواند لذت بزرگی را برای او به ارمغان آورد. برای مثال بی اهمیت
                                </p>
                                <div class="episode-single-more-img">
                                    <div class="row">
                                        <div class="col-md-6 mb-20">
                                            <img src="podcast/images/singlee.jpg" alt="">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <img src="podcast/images/single02.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-20">
                                    قدرت انتخاب بدون محدودیت است و زمانی که هیچ چیز مانع از توانایی ما نمی شود
                                    چیزی که ما بیشتر دوست داریم، از هر لذتی باید استقبال کرد و از هر دردی اجتناب کرد. اما
                                    در شرایط خاص و به دلیل ادعای وظیفه یا تعهدات
                                    کسب و کار اغلب اتفاق می افتد که لذت ها باید رد شوند و
                                    مزاحمت پذیرفته شد بنابراین، انسان عاقل همیشه در این مسائل پایبند است
                                    این اصل انتخاب
                                </p>
                                <div class="my-4">
                                    <div class="mb-3">
                                        <h3 class="mb-3">چرا شما به آن نیاز دارید</h3>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی</p>
                                    </div>
                                    <ul class="episode-single-list">
                                        <li><i class="far fa-check"></i>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</li>
                                        <li><i class="far fa-check"></i>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</li>
                                        <li><i class="far fa-check"></i>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                        </li>
                                        <li><i class="far fa-check"></i>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</li>
                                        <li><i class="far fa-check"></i>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</li>
                                    </ul>
                                </div>
                                <div class="my-4">
                                    <h3 class="mb-3">عناصر اصلی که ما ارائه می دهیم</h3>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection