@extends('base2')

@section('content')


<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Page Banner START -->
<section class="pt-0">
	<!-- Main banner background image -->
	<div class="container-fluid px-0">
		<div class="bg-blue h-100px h-md-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
		</div>
	</div>
	<div class="container mt-n4">
		<div class="row">
			<!-- Profile banner START -->
			<div class="col-12">
				<div class="card bg-transparent card-body p-0">
					<div class="row d-flex justify-content-between">
						<!-- Avatar -->
						<div class="col-auto mt-4 mt-md-0">
							<div class="avatar avatar-xxl mt-n3">
								<img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/01.jpg" alt="">
							</div>
						</div>
						<!-- Profile info -->
						<div class="col d-md-flex justify-content-between align-items-center mt-4">
							<div>
								<h1 class="my-1 fs-5">الهام حسینی <i class="bi bi-patch-check-fill text-info small"></i></h1>
								<ul class="list-inline mb-0">
									<li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
									<li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>12k شرکت کننده</li>
									<li class="list-inline-item h6 fw-light me-3 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-2"></i>25 دوره</li>
								</ul>
							</div>
							<!-- Button -->
							<div class="d-flex align-items-center mt-2 mt-md-0">
								<a href="/instructor-CreateCourse" class="btn btn-success mb-0">افزودن دوره</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Profile banner END -->

				<!-- Advanced filter responsive toggler START -->
				<!-- Divider -->
				<hr class="d-xl-none">
				<div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
					<a class="h6 mb-0 fw-bold d-xl-none" href="#">منوی کاربری</a>
					<button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
						<i class="fas fa-sliders-h"></i>
					</button>
				</div>
				<!-- Advanced filter responsive toggler END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Page content START -->
<section class="pt-0">
	<div class="container">
		<div class="row">
			<!-- Left sidebar START -->
				@include('public.instructor.sidebar')
			<!-- Left sidebar END -->

			<!-- Main content START -->
			<div class="col-xl-9">

				<!-- Counter boxes START -->
				<div class="row g-4">
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-4">
						<div class="d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3">
							<span class="display-6 text-warning mb-0"><i class="fas fa-tv fa-fw"></i></span>
							<div class="ms-4">
								<div class="d-flex">
									<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="25"	data-purecounter-delay="200">0</h5>
								</div>
								<span class="mb-0 h6 fw-light">دوره ها</span>
							</div>
						</div>
					</div>
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-4">
						<div class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3">
							<span class="display-6 text-purple mb-0"><i class="fas fa-user-graduate fa-fw"></i></span>
							<div class="ms-4">
								<div class="d-flex">
								    <span class="mb-0 h5">K</span>
									<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="25"	data-purecounter-delay="200">0</h5>
									
								</div>
								<span class="mb-0 h6 fw-light">دانشجویان</span>
							</div>
						</div>
					</div>
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-4">
						<div class="d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3">
							<span class="display-6 text-info mb-0"><i class="fas fa-gem fa-fw"></i></span>
							<div class="ms-4">
								<div class="d-flex">
								    <span class="mb-0 h5">K</span>
									<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="12" data-purecounter-delay="300">0</h5>
									
								</div>
								<span class="mb-0 h6 fw-light">شرکت کننده ها</span>
							</div>
						</div>
					</div>
				</div>
				<!-- Counter boxes END -->

				<!-- Chart START -->
				<div class="row mt-5">
					<div class="col-12">
						<div class="card card-body bg-transparent border p-4 h-100">
							<div class="row g-4">
								<!-- Content -->
								<div class="col-sm-6 col-md-4">
									<span class="badge text-bg-dark">ماه جاری</span>
									<h4 class="text-primary my-2 fs-5">270,000 تومان</h4>
									<p class="mb-0"><span class="text-success me-1">0.20%<i class="bi bi-arrow-up"></i></span>نسبت به ماه قبل</p>
								</div>
								<!-- Content -->
								<div class="col-sm-6 col-md-4">
									<span class="badge text-bg-dark">ماه گذشته</span>
									<h4 class="my-2 fs-5">75,000 تومان</h4>
									<p class="mb-0"><span class="text-danger me-1">0.10%<i class="bi bi-arrow-down"></i></span>نسبت به ماه قبل</p>
								</div>
							</div>

							<!-- Apex chart -->
							<div id="ChartPayout"></div>

						</div>
					</div>
				</div>
				<!-- Chart END -->

				<!-- Course List table START -->
				<div class="row">
					<div class="col-12">
						<div class="card border bg-transparent rounded-3 mt-5">
							<!-- Card header START -->
							<div class="card-header bg-transparent border-bottom">
								<div class="d-sm-flex justify-content-sm-between align-items-center">
									<h3 class="mb-2 mb-sm-0 fs-5 ff-vb">پرفروش ترین دوره ها</h3>
									<a href="#" class="btn btn-sm btn-primary-soft mb-0">مشاهده</a>
								</div>
							</div>
							<!-- Card header END -->

							<!-- Card body START -->
							<div class="card-body">
								<div class="table-responsive border-0 rounded-3">
									<!-- Table START -->
									<table class="table table-dark-gray align-middle p-4 mb-0">
										<!-- Table head -->
										<thead>
											<tr>
												<th scope="col" class="border-0 rounded-start">دوره</th>
												<th scope="col" class="border-0">فروش</th>
												<th scope="col" class="border-0">قیمت</th>
												<th scope="col" class="border-0">تاریخ</th>
												<th scope="col" class="border-0 rounded-end">عملیات</th>
											</tr>
										</thead>
										<!-- Table body START -->
										<tbody>
											
											<!-- Table item -->
											<tr>
												<!-- Course item -->
												<td>
													<div class="d-flex align-items-center">
														<!-- Image -->
														<div class="w-60px">
															<img src="assets/images/courses/4by3/08.jpg" class="rounded" alt="">
														</div>
														<!-- Title -->
														<h6 class="mb-0 ms-2 table-responsive-title fw-normal">	
															<a href="#">دوره جامع آموزش Sketch</a>
														</h6>
													</div>
												</td>
												<!-- Selling item -->
												<td>34</td>
												<!-- Amount item -->
												<td>180,000 تومان</td>
												<!-- Period item -->
												<td>
													<span class="badge bg-primary bg-opacity-10 text-primary">9 ماه</span>
												</td>
												<!-- Action item -->
												<td>
													<a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i class="far fa-fw fa-edit"></i></a>
													<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
												</td>
											</tr>
	
											<!-- Table item -->
											<tr>
												<!-- Course item -->
												<td>
													<div class="d-flex align-items-center">
														<!-- Image -->
														<div class="w-60px">
															<img src="assets/images/courses/4by3/10.jpg" class="rounded" alt="">
														</div>
														<!-- Title -->
														<h6 class="mb-0 ms-2 table-responsive-title fw-normal">	
															<a href="#">دوره جامع آموزش Bootstrap</a>
														</h6>
													</div>
												</td>
												<!-- Selling item -->
												<td>45</td>
												<!-- Amount item -->
												<td>490,000 تومان</td>
												<!-- Period item -->
												<td>
													<span class="badge bg-primary bg-opacity-10 text-primary">6 ماه</span>
												</td>
												<!-- Action item -->
												<td>
													<a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i class="far fa-fw fa-edit"></i></a>
													<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
												</td>
											</tr>
	
											<!-- Table item -->
											<tr>
												<!-- Course item -->
												<td>
													<div class="d-flex align-items-center">
														<!-- Image -->
														<div class="w-60px">
															<img src="assets/images/courses/4by3/02.jpg" class="rounded" alt="">
														</div>
														<!-- Title -->
														<h6 class="mb-0 ms-2 table-responsive-title fw-normal">	
															<a href="#">دوره جامع آموزش Photoshop</a>
														</h6>
													</div>
												</td>
												<!-- Selling item -->
												<td>21</td>
												<!-- Amount item -->
												<td>350,000 تومان</td>
												<!-- Period item -->
												<td>
													<span class="badge bg-primary bg-opacity-10 text-primary">4 ماه</span>
												</td>
												<!-- Action item -->
												<td>
													<a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i class="far fa-fw fa-edit"></i></a>
													<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
												</td>
											</tr>
	
											<!-- Table item -->
											<tr>
												<!-- Course item -->
												<td>
													<div class="d-flex align-items-center">
														<!-- Image -->
														<div class="w-60px">
															<img src="assets/images/courses/4by3/04.jpg" class="rounded" alt="">
														</div>
														<!-- Title -->
														<h6 class="mb-0 ms-2 table-responsive-title fw-normal">	
															<a href="#">دوره جامع آموزش Invision</a>
														</h6>
													</div>
												</td>
												<!-- Selling item -->
												<td>28</td>
												<!-- Amount item -->
												<td>120,000 تومان</td>
												<!-- Period item -->
												<td>
													<span class="badge bg-primary bg-opacity-10 text-primary">8 ماه</span>
												</td>
												<!-- Action item -->
												<td>
													<a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i class="far fa-fw fa-edit"></i></a>
													<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
												</td>
											</tr>
	
											<!-- Table item -->
											<tr>
												<!-- Course item -->
												<td>
													<div class="d-flex align-items-center">
														<!-- Image -->
														<div class="w-60px">
															<img src="assets/images/courses/4by3/06.jpg" class="rounded" alt="">
														</div>
														<!-- Title -->
														<h6 class="mb-0 ms-2 table-responsive-title fw-normal">
															<a href="#">دوره جامع آموزش Angular</a>
														</h6>
													</div>
												</td>
												<!-- Selling item -->
												<td>38</td>
												<!-- Amount item -->
												<td>270,000 تومان</td>
												<!-- Period item -->
												<td>
													<span class="badge bg-primary bg-opacity-10 text-primary">1 سال</span>
												</td>
												<!-- Action item -->
												<td>
													<a href="#" class="btn btn-sm btn-success-soft btn-round me-1 mb-0"><i class="far fa-fw fa-edit"></i></a>
													<button class="btn btn-sm btn-danger-soft btn-round mb-0"><i class="fas fa-fw fa-times"></i></button>
												</td>
											</tr>
										</tbody>
										<!-- Table body END -->
									</table>
									<!-- Table END -->
								</div>

								<!-- Pagination -->
								<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-3">
									<!-- Content -->
									<p class="mb-0 text-center text-sm-start">نمایش 1 تا 8 از 20</p>
									<!-- Pagination -->
									<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
										<ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
											<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-right"></i></a></li>
											<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
											<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
											<li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
											<li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
										</ul>
									</nav>
								</div>
							</div>
							<!-- Card body START -->
						</div>
					</div>
				</div>
				<!-- Course List table END -->
			</div>
			<!-- Main content END -->
		</div><!-- Row END -->
	</div>
</section>
<!-- =======================
Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@endsection