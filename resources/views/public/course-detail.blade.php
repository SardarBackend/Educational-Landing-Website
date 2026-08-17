
@extends('base2')
@section('content')
	
<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================
Page banner video START -->
<section class="py-0 pb-lg-5">
	<div class="container">
		<div class="row g-3">
			<!-- Course video START -->
			<div class="col-12">
				<div class="video-player rounded-3">
					<video controls crossorigin="anonymous" playsinline poster="courses/assets/images/videos/poster.jpg">
						<source src="courses/assets/images/videos/360p.mp4" type="video/mp4" size="360">
						<source src="courses/assets/images/videos/720p.mp4" type="video/mp4" size="720">
						<source src="courses/assets/images/videos/1080p.mp4" type="video/mp4" size="1080">
						<!-- Caption files -->
						<track kind="captions" label="English" srclang="en" src="courses/assets/images/videos/en.vtt" default>
						<track kind="captions" label="French" srclang="fr" src="courses/assets/images/videos/fr.vtt">
					</video>
				</div>
			</div>
			<!-- Course video END -->

			<!-- Playlist responsive toggler START -->
			<div class="col-12 d-lg-none">
				<button class="btn btn-primary mb-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
					<i class="bi bi-camera-video me-1"></i> ویدیوهای دوره
				</button>
			</div>
			<!-- Playlist responsive toggler END -->
		</div>
	</div>
</section>
<!-- =======================
Page banner video END -->

<!-- =======================
Page content START -->
<section class="pt-0">
	<div class="container">
		<div class="row g-lg-5">

			<!-- Main content START -->
			<div class="col-lg-8">
				<div class="row g-4">
							
					<!-- Course title START -->
					<div class="col-12">
						<!-- Title -->
						<h1 class="fs-3">{{ $Course->title }}</h1>
						<!-- Content -->
						<ul class="list-inline mb-0">
							<li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
							<li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>{{ $Course->participants_number }} شرکت کننده</li>
							<li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-signal text-success me-2"></i>{{ $Course->level  }}</li>
						</ul>
					</div>
					<!-- Course title END -->

					<!-- Instructor detail START -->
					<div class="col-12">
						<div class="d-sm-flex justify-content-sm-between align-items-center">
							<!-- Avatar detail -->
							<div class="d-flex align-items-center">
								<!-- Avatar image -->
								<div class="avatar avatar-lg">
									<img class="avatar-img rounded-circle" src="courses/assets/images/avatar/05.jpg" alt="avatar">
								</div>
								<div class="ms-3">
									<h6 class="mb-0"><a href="#">{{ $Course->teacher()->first()->name }}</a></h6>
									<p class="mb-0 small">مدرس طراحی وب</p>
								</div>
							</div>

							<!-- Button -->
							<div class="d-flex mt-2 mt-sm-0">
								<a class="btn btn-danger-soft btn-sm mb-0" href="#">دنبال کردن</a>
								<!-- Share button with dropdown -->
								<div class="dropdown ms-2">
									<a href="#" class="btn btn-sm mb-0 btn-info-soft small" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
										اشتراک گذاری
									</a>
									<!-- dropdown button -->
									<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
										<li><a  class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
										<li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
										<li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
										<li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>کپی لینک</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Instructor detail END -->

					<!-- Course detail START -->
					<div class="col-12">
						<!-- Tabs START -->
						<ul class="nav nav-pills nav-pills-bg-soft px-3" id="course-pills-tab" role="tablist">
							<!-- Tab item -->
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-0 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button" role="tab" aria-controls="course-pills-1" aria-selected="true">توضیحات</button>
							</li>
							<!-- Tab item -->
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-0" id="course-pills-tab-2" data-bs-toggle="pill" data-bs-target="#course-pills-2" type="button" role="tab" aria-controls="course-pills-2" aria-selected="false">دیدگاه</button>
							</li>
							<!-- Tab item -->
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-0" id="course-pills-tab-3" data-bs-toggle="pill" data-bs-target="#course-pills-3" type="button" role="tab" aria-controls="course-pills-3" aria-selected="false">سواالات متداول</button>
							</li>
							<!-- Tab item -->
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-0" id="course-pills-tab-4" data-bs-toggle="pill" data-bs-target="#course-pills-4" type="button" role="tab" aria-controls="course-pills-4" aria-selected="false">پرسش و پاسخ</button>
							</li>
						</ul>
						<!-- Tabs END -->

						<!-- Tab contents START -->
						<div class="tab-content pt-4 px-3" id="course-pills-tabContent">
							<!-- Content START -->
							<div class="tab-pane fade show active" id="course-pills-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
								<!-- Course detail START -->
								<h5 class="mb-3">توضیحات این دوره</h5>
								<p class="mb-3">{{ $Course->description }}</p>

								
								<!-- List content -->
								<h5 class="mt-4">بعد از یادگیری:</h5>

								<div class="row mb-3">
									<div class="col-md-6">
										<ul class="list-group list-group-borderless">
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>معرفی دوره دیجیتال مارکتینگ</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>آموزش طراحی رابط کاربری وب و اپلیکشن</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>Facebook ADS</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>ابزارهای بهینه سازی موتور جستجو</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>توان کار با فتوشاپ</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>ابزارهای بهینه سازی موتور جستجو</li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul class="list-group list-group-borderless">
											<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>سئو چیست؟</li>
											<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>آموزش اجرای لوگو</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>ساختار URL</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>طراحی بنر های دیجیتالی</li>
									<li class="list-group-item h6 fw-light d-flex mb-0"><i class="fas fa-check-circle text-success me-2"></i>نکات و ترفندهای سئو</li>
										</ul>
									</div>
								</div>

								<p class="mb-0">ما تمرکز زیادی بر درک روانشناسی رفتاری و محرک های تأثیرگذاری داریم که برای تبدیل شدن به یک بازاریاب دیجیتالی خوب بسیار مهم هستند. ما می‌دانیم که تئوری برای ایجاد یک پایه محکم مهم است، می‌دانیم که تئوری به تنهایی کار را انجام نمی‌دهد، به همین دلیل این دوره مملو از مثال‌های عملی است که می‌توانید قدم به قدم دنبال کنید.</p>
								<!-- Course detail END -->

							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-2" role="tabpanel" aria-labelledby="course-pills-tab-2">
								<!-- Review START -->
								<div class="row mb-4">
									<h5 class="mb-4">دیدگاه کاربران</h5>

									<!-- Rating info -->
									<div class="col-md-4 mb-3 mb-md-0">
										<div class="text-center">
											<!-- Info -->
											<h2 class="mb-0">4.5</h2>
											<!-- Star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star-half-alt text-warning"></i></li>
											</ul>
											<p class="mb-0">(بر اساس بررسی امروز)</p>
										</div>
									</div>

									<!-- Progress-bar and star -->
									<div class="col-md-8">
										<div class="row align-items-center">
											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Review END -->
								@foreach ($comments as $comment )
									
								<!-- Student review START -->
								<div class="row">
									<!-- Review item START -->
									<div class="d-md-flex my-4">
										<!-- Avatar -->
										<div class="avatar avatar-xl me-4 flex-shrink-0">
											<img class="avatar-img rounded-circle" src="courses/assets/images/avatar/09.jpg" alt="avatar">
										</div>
										<!-- Text -->
										<div>
											<div class="d-sm-flex mt-1 mt-md-0 align-items-center">
												<h5 class="me-3 mb-0 fw-normal">نیلوفر سجادی</h5>
												<!-- Review star -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>
											<!-- Info -->
											<p class="small mb-2">2 روز قبل</p>
											<p class="mb-2">{{ $comment->content }}</p>
											<!-- Like and dislike button -->
											<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio1">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio1"><i class="far fa-thumbs-up me-1"></i>25</label>
												<!-- Dislike button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio2">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio2"> <i class="far fa-thumbs-down me-1"></i>2</label>
											</div>
										</div>
									</div>
									<!-- Review item END -->
									<!-- Divider -->
									<hr>
									<!-- Review item START -->
									<div class="d-md-flex my-4">
										<!-- Avatar -->
										<div class="avatar avatar-xl me-4 flex-shrink-0">
											<img class="avatar-img rounded-circle" src="courses/assets/images/avatar/07.jpg" alt="avatar">
										</div>
										<!-- Text -->
										<div>
											<div class="d-sm-flex mt-1 mt-md-0 align-items-center">
												<h5 class="me-3 mb-0 fw-normal">علی مرادی</h5>
												<!-- Review star -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>
											<!-- Info -->
											<p class="small mb-2">2 روز قبل</p>
											<p class="mb-2">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
											<!-- Like and dislike button -->
											<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio3">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio3"><i class="far fa-thumbs-up me-1"></i>25</label>
												<!-- Dislike button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio4">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio4"> <i class="far fa-thumbs-down me-1"></i>2</label>
											</div>
										</div>	
									</div>
									<!-- Review item END -->
									<!-- Divider -->
									<hr>
								</div>
								<!-- Student review END -->
								@endforeach



							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-3" role="tabpanel" aria-labelledby="course-pills-tab-3">
								<!-- Title -->
								<h5 class="mb-3">سوالات متداول</h5>
									@foreach($Course->faq as $faq)										
									<div class="mt-4">
										<h6>   {{ $faq['question'] }}</h6>
										<p class="mb-0">{{ $faq['answer'] }}</p>
									</div>
									@endforeach
				
							</div>
							<!-- Content END -->

							<!-- Content START -->
<div class="tab-pane fade" id="course-pills-4" role="tabpanel" aria-labelledby="course-pills-tab-4">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">پرسش و پاسخ</h5>

            {{-- فرم ثبت پرسش --}}
            <div class="d-flex mb-4">
                <div class="avatar avatar-sm flex-shrink-0 me-2">
                    <img class="avatar-img rounded-circle"
                        src="{{ auth()->user()->avatar ?? asset('images/default-avatar.png') }}">
                </div>

                <form class="w-100 d-flex" action="{{ route('create_question') }}" method="POST">
					<input type="hidden" name="user_id" value="{{ auth()->id() }}">
					<input type="hidden" name="questionable_type" value="{{ $Course::Class }}">
					<input type="hidden" name="questionable_id" value="{{ $Course->id }}">
                    <textarea name="question" class="form-control pe-4 bg-light" rows="1"
                        placeholder="افزودن پرسش ..."></textarea>

                    <button class="btn btn-primary ms-2 mb-0" type="submit">
                        ارسال
                    </button>
                </form>
            </div>

            @forelse($questions as $question)
                <div class="border p-2 p-sm-4 rounded-3 mb-4">
                    <ul class="list-unstyled mb-0">
                        <li class="comment-item">

                            {{-- سوال اصلی --}}
                            <div class="d-flex mb-3">
                                <div class="avatar avatar-sm flex-shrink-0">
                                    <img class="avatar-img rounded-circle"
                                        src="{{ $question->user->avatar ?? asset('images/default-avatar.png') }}">
                                </div>

                                <div class="ms-2 w-100">
                                    <div class="bg-light p-3 rounded">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h6 class="mb-1 fw-normal">
                                                    {{ $question->user->name }}
                                                </h6>

                                                <p class="mb-0">
                                                    {{ $question->question }}
                                                </p>
                                            </div>

                                            <small>
                                                {{ $question->created_at->diffForHumans() }}
                                            </small>
                                        </div>
                                    </div>

                                    <ul class="nav nav-divider py-2 small">
                                        <li class="nav-item">
                                            <a href="#">لایک ({{ $question->score }})</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#">پاسخ</a>
                                        </li>

                                        @if($question->children->count())
                                            <li class="nav-item">
                                                <a href="#">
                                                    مشاهده {{ $question->children->count() }} پاسخ
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            {{-- پاسخ‌ها --}}
                            @if($question->children->count())
                                <ul class="list-unstyled ms-4">
                                    @foreach($question->children as $reply)
                                        <li class="comment-item mb-3">
                                            <div class="d-flex">
                                                <div class="avatar avatar-xs flex-shrink-0">
                                                    <img class="avatar-img rounded-circle"
                                                        src="{{ $reply->user->avatar ?? asset('images/default-avatar.png') }}">
                                                </div>

                                                <div class="ms-2 w-100">
                                                    <div class="bg-light p-3 rounded">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <h6 class="mb-1 fw-normal">
                                                                    {{ $reply->user->name }}
                                                                </h6>

                                                                <p class="mb-0">
                                                                    {{ $reply->question }}
                                                                </p>
                                                            </div>

                                                            <small>
                                                                {{ $reply->created_at->diffForHumans() }}
                                                            </small>
                                                        </div>
                                                    </div>

                                                    <ul class="nav nav-divider py-2 small">
                                                        <li class="nav-item">
                                                            <a href="#">
                                                                لایک ({{ $reply->score }})
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                        </li>
                    </ul>
                </div>
            @empty
                <div class="alert alert-info">
                    هنوز پرسشی ثبت نشده است.
                </div>
            @endforelse

        </div>
    </div>
</div>
							<!-- Content END -->
						</div>
						<!-- Tab contents END -->
					</div>
					<!-- Course detail END -->
				</div>
			</div>
			<!-- Main content END -->

			<!-- Right sidebar START -->
			<div class="col-lg-4">
				<!-- Responsive offcanvas body START -->
				<div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
					<div class="offcanvas-header bg-dark">
						<h5 class="offcanvas-title text-white" id="offcanvasSidebarLabel">ویدیوهای دوره</h5>
						<button type="button" class="btn btn-sm btn-light mb-0" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"><i class="bi bi-x-lg"></i></button>
					</div>
					<div class="offcanvas-body p-3 p-lg-0">
						<div class="col-12">
							<!-- Accordion START -->
							<div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
								<!-- Item -->
							@foreach($Course->chapters as $chapter)
							<div class="accordion-item mb-3">
								<h6 class="accordion-header" id="heading-{{ $chapter->id }}">
									<button class="accordion-button collapsed fw-bold"
											type="button"
											data-bs-toggle="collapse"
											data-bs-target="#collapse-{{ $chapter->id }}">
										<span>
											{{ $chapter->title }}
											<small class="d-block">
												({{ $chapter->videos->count() }} ویدیو)
											</small>
										</span>
									</button>
								</h6>

								<div id="collapse-{{ $chapter->id }}"
									class="accordion-collapse collapse"
									data-bs-parent="#accordionExample2">

									<div class="accordion-body">

										@php
											$totalVideos = $chapter->videos->count();
											$completedVideos = $chapter->videos->where('status', 'completed')->count();
											$percent = $totalVideos ? ($completedVideos / $totalVideos) * 100 : 0;
										@endphp

										<div class="overflow-hidden mb-3">
											<div class="d-flex justify-content-between">
												<p>{{ $completedVideos }}/{{ $totalVideos }} تکمیل شده</p>
												<p>{{ round($percent) }}%</p>
											</div>

											<div class="progress progress-sm">
												<div class="progress-bar"
													style="width: {{ $percent }}%">
												</div>
											</div>
										</div>

										@foreach($chapter->videos as $video)
											<div class="d-flex justify-content-between align-items-center mb-2">
												<div class="d-flex align-items-center">

													<a href="{{ route('video.show', $video) }}"
													class="btn btn-danger-soft btn-round btn-sm">
														<i class="fas fa-play"></i>
													</a>

													<span class="ms-2">
														{{ $video->title }}
													</span>

												</div>

												<span>
													{{ $video->duration }} دقیقه
												</span>
											</div>
										@endforeach

									</div>
								</div>
							</div>
							@endforeach



							</div>
							<!-- Accordion END -->
						</div>
					</div>
				</div>
				<!-- Responsive offcanvas body END -->

				<!-- Tags START -->
				<div class="mt-4">
					<h4 class="mb-3 fs-5">برچسب ها</h4>
							<ul class="list-inline mb-0">
								@foreach ($tags as $tag )
									
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">{{ $tag->name }}</a> </li>
								@endforeach

					</ul>
				</div>

				<div class="card border rounded-3 shadow-sm overflow-hidden">
    <div class="card-body p-4">

        <div class="text-center mb-4">
            <h2 class="fw-bold text-success mb-1">
                {{ $Course->price }} تومان
            </h2>

            <span class="badge bg-success bg-opacity-10 text-success">
                دسترسی مادام العمر
            </span>
        </div>
               <form action="{{route('addCourseToCart' , ['course' => $Course])}}" id="Form" method="post">

        <div class="d-grid">
            <button class="btn btn-success btn-lg mb-3">
                <i class="fas fa-shopping-cart ms-2"></i>
                افزودن به سبد خرید
            </button>
        </div>
			   </form>
        <div class="row g-2 text-center small">
            <div class="col-6">
                <div class="border rounded p-2">
                    <i class="bi bi-people-fill text-success d-block mb-1"></i>
                    120 دانشجو
                </div>
            </div>

            <div class="col-6">
                <div class="border rounded p-2">
                    <i class="bi bi-clock-fill text-success d-block mb-1"></i>
                    18 ساعت
                </div>
            </div>
        </div>

    </div>
</div>
				<!-- Tags END -->
			</div>
			<!-- Right sidebar END -->

		</div><!-- Row END -->
	</div>
</section>
<!-- =======================
Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@endsection
