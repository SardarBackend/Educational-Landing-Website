@extends('base2')
@section('content')

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Page Banner START -->
<section class="py-0 bg-blue h-100px align-items-center d-flex h-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
	<!-- Main banner background image -->
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<!-- Title -->
				<h1 class="text-white">افزودن دوره</h1>
				<p class="text-white mb-0">لطفا <a href="#" class="text-white"><u>"قبل از افزودن دوره"</u></a> مقاله ما را بخوانید.</p>	
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Steps START -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto text-center">
				<!-- Content -->
				<p class="text-center">از این رابط برای اضافه کردن یک دوره جدید به پورتال استفاده کنید. پس از اتمام افزودن مورد، از نظر کیفیت بررسی می شود. در صورت تایید، دوره شما برای فروش ظاهر می شود و از طریق ایمیل به شما اطلاع داده می شود که دوره شما پذیرفته شده است.</p>
			</div>
		</div>

		<div class="card bg-transparent border rounded-3 mb-5">
			<div id="stepper" class="bs-stepper stepper-outline">
				<!-- Card header -->
				<div class="card-header bg-light border-bottom px-lg-5">
					<!-- Step Buttons START -->
					<div class="bs-stepper-header" role="tablist">
						<!-- Step 1 -->
						<div class="step" data-target="#step-1">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger1" aria-controls="step-1">
									<span class="bs-stepper-circle">1</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">جزئیات دوره</h6>
							</div>
						</div>
						<div class="line"></div>

						<!-- Step 2 -->
						<div class="step" data-target="#step-2">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger2" aria-controls="step-2">
									<span class="bs-stepper-circle">2</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">رسانه</h6>
							</div>
						</div>
						<div class="line"></div>

						<!-- Step 3 -->
						<div class="step" data-target="#step-3">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger3" aria-controls="step-3">
									<span class="bs-stepper-circle">3</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">جلسات دوره </h6>
							</div>
						</div>
						<div class="line"></div>

						<!-- Step 4 -->
						<div class="step" data-target="#step-4">
							<div class="d-grid text-center align-items-center">
								<button type="button" class="btn btn-link step-trigger mb-0" role="tab" id="steppertrigger4" aria-controls="step-4">
									<span class="bs-stepper-circle">4</span>
								</button>
								<h6 class="bs-stepper-label d-none d-md-block">اطلاعات تکمیلی</h6>
							</div>
						</div>
					</div>
					<!-- Step Buttons END -->
				</div>

				<!-- Card body START -->
				<div class="card-body">
					<!-- Step content START -->
					<div class="bs-stepper-content">
						<form onsubmit="return false">

							<!-- Step 1 content START -->
							<div id="step-1" role="tabpanel" class="content fade" aria-labelledby="steppertrigger1">
								<!-- Title -->
								<h4 class="fs-5 ff-vb">جزئیات دوره</h4>

								<hr> <!-- Divider -->

								<!-- Basic information START -->
								<div class="row g-4">
									<!-- Course title -->
									<div class="col-12">
										<label class="form-label">عنوان</label>
										<input class="form-control" type="text" placeholder="آموزش ساخت وب سایت خبری">
									</div>

									<!-- Short description -->
									<div class="col-12">
										<label class="form-label">توضیحات کوتاه</label>
										<textarea class="form-control" rows="2" placeholder="کلمات کلیدی"></textarea>
									</div>

									<!-- Course category -->
									<div class="col-md-6">
										<label class="form-label">دسته بندی</label>
										<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" data-search-enabled="true">
											<option value="">انتخاب</option>
											<option>مهندسی</option>
											<option>پزشکی</option>
											<option>طراحی وب</option>
											<option>حسابداری</option>
											<option>برنامه نویسی</option>
										</select>
									</div>

									<!-- Course level -->
									<div class="col-md-6">
										<label class="form-label">سطح دوره</label>
										<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" data-search-enabled="false" data-remove-item-button="true">
											<option value="">انتخاب سطح</option>
											<option>همه</option>
											<option>مقدماتی</option>
											<option>متوسطه</option>
											<option>پیشرفته</option>
										</select>
									</div>

									<!-- Language -->
									<div class="col-md-6">
										<label class="form-label">زبان</label>
										<select class="form-select js-choice border-0 z-index-9 bg-transparent" multiple="multiple" aria-label=".form-select-sm" data-max-item-count="3" data-remove-item-button="true">
											<option value="">انتخاب زبان</option>
											<option>انگلیسی</option>
											<option>آلمانی</option>
											<option>فرانسوی</option>
											<option>فارسی</option>
										</select>
									</div>

									<!-- Switch -->
									<div class="col-md-6 d-flex align-items-center justify-content-start mt-5">
										<div class="form-check form-switch form-check-md">
											<input class="form-check-input" type="checkbox" id="checkPrivacy1">
											<label class="form-check-label" for="checkPrivacy1">دوره ویژه</label>
										</div>
									</div>

									<!-- Course time -->
									<div class="col-md-6">
										<label class="form-label">مدت زمان دوره</label>
										<input class="form-control" type="text" placeholder="4:33:00">
									</div>

									<!-- Total lecture -->
									<div class="col-md-6">
										<label class="form-label">تعداد ویدیوها</label>
										<input class="form-control" type="text" placeholder="19 ویدیو">
									</div>

									<!-- Course price -->
									<div class="col-md-6">
										<label class="form-label">قیمت</label>
										<input type="text" class="form-control" placeholder="90,000 تومان">
									</div>

									<!-- Course discount -->
									<div class="col-md-6">
										<label class="form-label">تخفیف</label>
										<input class="form-control" type="text" placeholder="50%">
										<div class="col-12 mt-1 mb-0">
											<div class="form-check small mb-0">
												<input class="form-check-input" type="checkbox" id="checkBox1">
												<label class="form-check-label" for="checkBox1">
													فعالسازی تخفیف
												</label>
											</div>
										</div>
									</div>
									
									<!-- Course description -->
									<div class="col-12">
										<label class="form-label">توضیحات</label>
										<!-- Editor toolbar -->
										<div class="bg-light border border-bottom-0 rounded-top py-3" id="quilltoolbar">
											<span class="ql-formats">
												<select class="ql-size"></select>
											</span>
											<span class="ql-formats">
												<button class="ql-bold"></button>
												<button class="ql-italic"></button>
												<button class="ql-underline"></button>
												<button class="ql-strike"></button>
											</span>
											<span class="ql-formats">
												<select class="ql-color"></select>
												<select class="ql-background"></select>
											</span>
											<span class="ql-formats">
												<button class="ql-code-block"></button>
											</span>
											<span class="ql-formats">
												<button class="ql-list" value="ordered"></button>
												<button class="ql-list" value="bullet"></button>
												<button class="ql-indent" value="-1"></button>
												<button class="ql-indent" value="+1"></button>
											</span>
											<span class="ql-formats">
												<button class="ql-link"></button>
												<button class="ql-image"></button>
											</span>
											<span class="ql-formats">
												<button class="ql-clean"></button>
											</span>
										</div>

										<!-- Main toolbar -->
										<div class="bg-body border rounded-bottom h-400px overflow-hidden" id="quilleditor">
											<br>
											<h1>آموزش web scraping با Node js (پیشرفته)</h1>
											<br>
											<p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
											<br>
											<p>در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
											<br>
											<p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
											<br>
											<p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. </p>

											<p>در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
											<br>
											<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
											<br>
											<p> کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </p>
											<br>
											<p> در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. </p>

											<p>برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
											<br>
											<p>ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد. </p>
											<br>
											<p> در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. </p>
											<br>
											<p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. </p>
										</div>
									</div>	

									<!-- Step 1 button -->
									<div class="d-flex justify-content-end mt-3">
										<button class="btn btn-primary next-btn mb-0">مرحله بعد</button>
									</div>
								</div>
								<!-- Basic information START -->
							</div>
							<!-- Step 1 content END -->

							<!-- Step 2 content START -->
							<div id="step-2" role="tabpanel" class="content fade" aria-labelledby="steppertrigger2">
								<!-- Title -->
								<h4 class="fs-5 ff-vb">رسانه</h4>

								<hr> <!-- Divider -->

								<div class="row">
									<!-- Upload image START -->
									<div class="col-12">
										<div class="text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3">
											<!-- Image -->
											<img src="assets/images/element/gallery.svg" class="h-50px" alt="">
											<div>
												<h6 class="my-2">آپلود ویدیو، عکس یـا<a href="#!" class="text-primary"> سیستم</a></h6>
												<label>
													<span> 
														<div class="input-group">
                                                <input type="text" class="form-control stretched-link upload-name border-end-0" name="my-image" id="image" accept="image/gif, image/jpeg, image/png"/>
                                                <span class="btn btn btn-secondary-soft cursor-pointer upload-button border-start-0">آپلود فایل</span>
                                        </div> 
                                        <input type="file" class="d-none hidden-upload"/>
													</span>
												</label>
													<p class="small mb-0 mt-2"><b>توجه: </b> فقط JPG، JPEG و PNG. ابعاد پیشنهادی ما 600px * 450px است. تصویر بزرگتر به اندازه 4:3 برش داده می شود تا با تصاویر کوچک/پیش نمایش ما مطابقت داشته باشد.</p>
											</div>	
										</div>

										<!-- Button -->
										<div class="d-sm-flex justify-content-end mt-2">
											<button type="button" class="btn btn-sm btn-danger-soft mb-3">حذف</button>
										</div>
									</div>
									<!-- Upload image END -->

									<!-- Upload video START -->
									<div class="col-12">
										<h5>آپلود ویدیو</h5>
										<!-- Input -->
										<div class="col-12 mt-4 mb-5">
											<label class="form-label">آدرس ویدیو</label>
											<input class="form-control" type="text" placeholder="https://www.aparat.com/video/video/embed/videohash/TyGZt/vt/frame">
										</div>
										<div class="position-relative my-4">
											<hr>
											<p class="small position-absolute top-50 start-50 translate-middle bg-body px-3 mb-0">یـا</p>
										</div>

										<div class="col-12">
											<label class="form-label">آپلود ویدیو</label>
										
											<div class="input-group mb-3">
											<label class="input-group-text" dir="ltr">.mp4</label>
                                                <input type="text" class="form-control upload-name-mp4 border-end-0" id="inputGroupFile01"/>
                                                <span class="btn btn btn-secondary-soft cursor-pointer upload-button-mp4 border-start-0">آپلود فایل</span>
												
                                        </div> 
                                        <input type="file" class="d-none hidden-upload-mp4"/>	
											
											
											<div class="input-group mb-3">
											<label class="input-group-text" dir="ltr">.WebM</label>
                                                <input type="text" class="form-control upload-name-web border-end-0" id="inputGroupFile02"/>
                                                <span class="btn btn btn-secondary-soft cursor-pointer upload-button-web border-start-0">آپلود فایل</span>
												
                                        </div> 
                                        <input type="file" class="d-none hidden-upload-web"/>
											
											<div class="input-group mb-3">
											<label class="input-group-text" dir="ltr">.OGG</label>
                                                <input type="text" class="form-control upload-name-ogg border-end-0" id="inputGroupFile03"/>
                                                <span class="btn btn btn-secondary-soft cursor-pointer upload-button-ogg border-start-0">آپلود فایل</span>
												
                                        </div> 
                                        <input type="file" class="d-none hidden-upload-ogg"/>
											
										</div>

										<!-- Preview -->
										<h5 class="mt-4">پیشنمایش ویدیو</h5>
										<div class="position-relative">
											<!-- Image -->
											<img src="assets/images/about/04.jpg" class="rounded-4" alt="">
											<div class="position-absolute top-50 start-50 translate-middle">
												<!-- Video link -->
												<a href="https://www.aparat.com/video/video/embed/videohash/31hor/vt/frame" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
													<i class="fas fa-play"></i>
												</a>
											</div>
										</div>
									</div>
									<!-- Upload video END -->

									<!-- Step 2 button -->
									<div class="d-flex justify-content-between mt-3">
										<button class="btn btn-secondary prev-btn mb-0">مرحله قبل</button>
										<button class="btn btn-primary next-btn mb-0">مرحله بعد</button>
									</div>
								</div>
							</div>
							<!-- Step 2 content END -->

							<!-- Step 3 content START -->
							<div id="step-3" role="tabpanel" class="content fade" aria-labelledby="steppertrigger3">
								<!-- Title -->
								<h4 class="ff-vb fs-5">جلسات دوره</h4>

								<hr> <!-- Divider -->

								<div class="row">
									<!-- Add lecture Modal button -->
									<div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
										<h5 class="mb-2 mb-sm-0">آپلود دوره</h5>
										<a href="#" class="btn btn-sm btn-primary-soft mb-0" data-bs-toggle="modal" data-bs-target="#addLecture"><i class="bi bi-plus-circle me-2"></i>افزودن دوره</a>
									</div>
			
									<!-- Edit lecture START -->
									<div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
										<!-- Item START -->
										<div class="accordion-item mb-3">
											<h6 class="accordion-header font-base" id="heading-1">
												<button class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
													معرفی دوره فتوشاپ 
												</button>
											</h6>
			
											<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
												<!-- Topic START -->
												<div class="accordion-body mt-3">
													<!-- Video item START -->
													<div class="d-flex justify-content-between align-items-center">
														<div class="position-relative">
															<a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"><i class="fas fa-play"></i></a>
															<span class="ms-2 mb-0 h6 fw-light">معرفی دوره</span>
														</div>
														<!-- Edit and cancel button -->
														<div>
															<a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
															<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
														</div>
													</div>
													<!-- Divider -->
													<hr>
													<!-- Video item END -->
							
													<!-- Video item START -->
													<div class="d-flex justify-content-between align-items-center">
														<div class="position-relative">
															<a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static"><i class="fas fa-play"></i></a>
															<span class="ms-2 mb-0 h6 fw-light">دیجیتال مارکتنیگ چیست؟</span>
														</div>
														<!-- Edit and cancel button -->
														<div>
															<a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
															<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
														</div>
													</div>
													<!-- Divider -->
													<hr>
													<!-- Video item END -->
			
													<!-- Add topic -->
													<a href="#" class="btn btn-sm btn-dark mb-0" data-bs-toggle="modal" data-bs-target="#addTopic"><i class="bi bi-plus-circle me-2"></i>افزودن</a>
												</div>
												<!-- Topic END -->
											</div>
										</div>
										<!-- Item END -->
					
										<!-- Item START -->
										<div class="accordion-item mb-3">
											<h6 class="accordion-header font-base" id="heading-2">
												<button class="accordion-button fw-bold rounded d-inline-block collapsed d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
													آموزش کار به صورت متوسطه
												</button>
											</h6>
			
											<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample2">
												<div class="accordion-body mt-3">
													<!-- Add topic -->
													<a href="#" class="btn btn-sm btn-dark mb-0" data-bs-toggle="modal" data-bs-target="#addTopic">
														<i class="bi bi-plus-circle me-2"></i>افزودن
													</a>	
												</div>
											</div>
										</div>
										<!-- Item END -->
					
										<!-- Item START -->
										<div class="accordion-item mb-3">
											<h6 class="accordion-header font-base" id="heading-3">
												<button class="accordion-button fw-bold collapsed rounded d-block pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
													چقدر باید به فروشندگان پیشنهاد بدهم؟ 
												</button>
											</h6>
											<!-- Body -->
											<div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#accordionExample2">
												<div class="accordion-body mt-3">
													<!-- Add topic -->
													<a href="#" class="btn btn-sm btn-dark mb-0" data-bs-toggle="modal" data-bs-target="#addTopic">
														<i class="bi bi-plus-circle me-2"></i>افزودن
													</a>
												</div>
											</div>
										</div>	
										<!-- Item END -->
			
									</div>
									<!-- Edit lecture END -->

									<!-- Step 3 button -->
									<div class="d-flex justify-content-between">
										<button class="btn btn-secondary prev-btn mb-0">مرحله قبل</button>
										<button class="btn btn-primary next-btn mb-0">مرحله بعد</button>
									</div>
								</div>
							</div>
							<!-- Step 3 content END -->

							<!-- Step 4 content START -->
							<div id="step-4" role="tabpanel" class="content fade" aria-labelledby="steppertrigger4">
								<!-- Title -->
								<h4 class="fs-5 ff-vb">اطلاعات تکمیلی</h4>

								<hr> <!-- Divider -->

								<div class="row g-4">
									
									<!-- Edit faq START -->
									<div class="col-12">
										<div class="bg-light border rounded p-2 p-sm-4">
											<div class="d-sm-flex justify-content-sm-between align-items-center mb-3">
												<h5 class="mb-2 mb-sm-0">آپلود سوالات متداول</h5>
												<a href="#" class="btn btn-sm btn-primary-soft mb-0" data-bs-toggle="modal" data-bs-target="#addQuestion"><i class="bi bi-plus-circle me-2"></i>افزودن پرسش</a>
											</div>

											<div class="row g-4">
												<div class="col-12">
													<div class="bg-body p-3 p-sm-4 border rounded">
														<!-- Item 1 -->
														<div class="d-sm-flex justify-content-sm-between align-items-center mb-2">
															<!-- Question -->
															<h6 class="mb-0">بازاریابی دیجیتال چگونه کار می کند؟</h6>
															<!-- Button -->
															<div class="align-middle">
																<a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
																<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
															</div>
														</div>
														<!-- Content -->
														<p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
													</div>
												</div>

												<div class="col-12">
													<div class="bg-body p-4 border rounded">
														<!-- Item 2 -->
														<div class="d-sm-flex justify-content-sm-between align-items-center mb-2">
															<!-- Question -->
															<h6 class="mb-0">بازاریابی دیجیتال چگونه کار می کند؟</h6>
															<!-- Button -->
															<div class="align-middle">
																<a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
																<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
															</div>
														</div>
														<!-- Content -->
														<p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
													</div>	
												</div>
											</div>
										</div>	
									</div>
									<!-- Edit faq END -->

									<!-- Tags START -->
									<div class="col-12">
										<div class="bg-light border rounded p-4">
											<h5 class="mb-0">برچسب ها</h5>
											<!-- Comment -->
											<div class="mt-3">
												<input type="text" class="form-control js-choice mb-0" data-placeholder="true" data-placeholder-Val="" data-max-item-count="14" data-remove-item-button="true">
												<span class="small">حداکثر 14 کلمه کلیدی کلمات کلیدی همگی باید با حروف کوچک و با کاما از هم جدا شوند. به عنوان مثال، javascript، react</span>
											</div>
										</div>
									</div>
									<!-- Tags START -->

									<!-- Reviewer START -->
									<div class="col-12">
										<div class="bg-light border rounded p-4">
											<h5 class="mb-0">ثبت دیدگاه</h5>

											<!-- Comment -->
											<div class="mt-3">
												<textarea class="form-control" rows="4" placeholder="دیدگاه خود را ثبت کنید" spellcheck="false"></textarea>
												<div class="form-check mb-0 mt-2">
													<input type="checkbox" class="form-check-input" id="exampleCheck1">
													<label class="form-check-label" for="exampleCheck1">
														هر تصویر، صدا، یا سایر دارایی‌هایی که کار من نیستند، مجوز مناسبی برای استفاده در پیش‌نمایش فایل یا دوره اصلی دریافت کرده‌اند. به غیر از این موارد، این اثر کاملاً متعلق به من است و من حق کامل فروش آن را در اینجا دارم.
													</label>
												</div>
											</div>
										</div>
									</div>
									<!-- Reviewer START -->

									<!-- Step 4 button -->
									<div class="d-md-flex justify-content-between align-items-start mt-4">
										<button class="btn btn-secondary prev-btn mb-2 mb-md-0">مرحله قبل</button>
										<button class="btn btn-light me-auto ms-md-2 mb-2 mb-md-0">پیشنمایش دوره</button>
										<div class="text-md-end">
											<a href="course-added.html" class="btn btn-success mb-2 mb-sm-0">ثبت دوره</a>
											<p class="mb-0 small mt-1">پس از کلیک بر روی "ارسال یک دوره"، دوره شما آپلود می شود و به عنوان در انتظار بررسی علامت گذاری می شود.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Step 4 content END -->

						</form>
					</div>
				</div>
				<!-- Card body END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Steps END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@endsection