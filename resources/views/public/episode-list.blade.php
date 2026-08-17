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
                <h2 class="breadcrumb-title">اپیسود لیست</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html">خانه</a></li>
                    <li class="active">اپیسود لیست</li>
                </ul>
            </div>
        </div>


        <div class="podcast-area py-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="podcast-sidebar">
                            <div class="podcast-widget">
                                <div class="podcast-search-form">
                                    <h4 class="widget-title">جستجو</h4>
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="جستجو">
                                            <button type="search"><i class="feather-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="podcast-widget">
                                <h4 class="widget-title">دسته بندی</h4>
                                <ul class="category-list">
                                    @foreach ($categories as $item)
                                        
                                    <li><a href="/podcast-cat-{{ $item->name }}"><i class="far fa-microphone-lines"></i>پادکست
                                            {{ $item->name }}<span>(۱۵)</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="podcast-widget">
                                <h4 class="widget-title">مرتب سازی</h4>
                                <ul class="checkbox-list">
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="order1">
                                            <label class="form-check-label" for="order1">جدیدترین</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="order2">
                                            <label class="form-check-label" for="order2">مشهورترین</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="order3">
                                            <label class="form-check-label" for="order3">ترندترین</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="podcast-sort">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-lg-6 col-xl-8">
                                    <div class="podcast-sort-show">نمایش ۱-۱۵ از {{ $podcasts->total() }} نتیجه</div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="podcast-sort-box">
                                        <span class="podcast-sort-label"> مرتب سازی:</span>
                                        <select class="select">
                                            <option value="1">پیش فرض</option>
                                            <option value="2">بیشترین بازدید</option>
                                            <option value="3">بیشترین امتیاز</option>
                                            <option value="4">بیشترین لایک</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
<div class="episode-list">
    <div class="row g-4">
        @foreach ($podcasts as $podcast)

        <div class="col-md-12">
            <div class="episode-item">
                <div class="episode-img">
                    <a href="/episode-single-{{ $podcast->id }}" class="episode-favourite">
                        <i class="far fa-heart"></i>
                    </a>

                    <img src="{{ asset($podcast->cover_image) }}" alt="{{ $podcast->title }}">
                </div>

                <div class="episode-content">
                    <h4>
                        <a href="/episode-single-{{ $podcast->id }}">
                            {{ $podcast->title }}
                        </a>
                    </h4>

                    <div class="episode-meta">
                        <ul>
                            <li>
                                <i class="far fa-podcast"></i>
                                {{ $loop->iteration }}
                            </li>

                            <li>
                                <i class="far fa-calendar-alt"></i>
                                {{ $podcast->published_at }}
                            </li>
                        </ul>
                    </div>

                    <p>
                        {{ Str::limit($podcast->description, 150) }}
                    </p>

                    <div class="episode-bottom">
                        <div class="episode-host">
                            <h6>
                                <i class="far fa-headphones"></i>
                                {{ gmdate('i:s', $podcast->duration) }}
                            </h6>
                        </div>

                        <div class="episode-player">
                            <audio controls>
                                <source src="{{ asset($podcast->audio_file) }}" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

                        @if ($podcasts->hasPages())
                        <div class="pagination-area mt-50">
                            <div aria-label="Page navigation example">
                                <ul class="pagination">

                                    {{-- صفحه قبل --}}
                                    <li class="page-item {{ $podcasts->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link"
                                        href="{{ $podcasts->onFirstPage() ? '#' : $podcasts->previousPageUrl() }}"
                                        aria-label="Previous">
                                            <span aria-hidden="true">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </li>

                                    {{-- شماره صفحات --}}
                                    @foreach ($podcasts->linkCollection()->elements as $element)
                                        @if (is_string($element))
                                            <li class="page-item">
                                                <span class="page-link">{{ $element }}</span>
                                            </li>
                                        @endif

                                        @if (is_array($element))
                                            @foreach ($element as $page => $url)
                                                <li class="page-item {{ $page == $podcasts->currentPage() ? 'active' : '' }}">
                                                    <a class="page-link" href="{{ $url }}">
                                                        {{ $page }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        @endif
                                    @endforeach

                                    {{-- صفحه بعد --}}
                                    <li class="page-item {{ !$podcasts->hasMorePages() ? 'disabled' : '' }}">
                                        <a class="page-link"
                                        href="{{ $podcasts->hasMorePages() ? $podcasts->nextPageUrl() : '#' }}"
                                        aria-label="Next">
                                            <span aria-hidden="true">
                                                <i class="fas fa-arrow-left"></i>
                                            </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection