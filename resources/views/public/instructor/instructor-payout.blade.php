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

				<!-- Payout box START -->
				<div class="row g-4 mb-4">
					<!-- Box item -->
					<div class="col-sm-6 col-md-4">
						<div class="border p-3 rounded-3 h-100">
							<div class="d-flex mb-1 justify-content-between align-items-center">
								<h6 class="mb-0">پرداخت ماه گذشته</h6>
								<span class="badge bg-success bg-opacity-10 text-success ms-2 mb-0">پرداخت شده</span>
							</div>
							<h2 class="mb-2 mt-2">250,000</h2>
							<a href="#">مشاهده تراکنش ها</a>
						</div>
					</div>

					<!-- Box item -->
					<div class="col-sm-6 col-md-4">
						<div class="border p-3 rounded-3 h-100">
							<h6 class="mb-0">درآمد این ماه</h6>
							<h2 class="mb-2 mt-2">120,000 تومان</h2>
							<p class="mb-0">پرداخت موردانتظار در 1400/11/4</p>
						</div>
					</div>

					<!-- Box item -->
					<div class="col-sm-6 col-md-4">
						<div class="bg-primary bg-opacity-10 h-100 p-3 rounded-3">
							<h6 class="mb-0">میانگین</h6>
							<h2 class="mb-2 mt-2">90,000 تومان</h2>
							<a href="#" class="btn btn-sm btn-primary mb-0">برداشت سود</a>
						</div>
					</div>
				</div>
				<!-- Payout box END -->

				<div class="card bg-transparent border rounded-3">
					<!-- Card header START -->
					<div class="card-header bg-transparent border-bottom">
						<h3 class="mb-0 fs-5 ff-vb">پرداخت ها</h3>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body">

						<!-- Title and select START -->
						<div class="row g-3 align-items-center justify-content-between mb-4">
							<!-- Content -->
							<div class="col-md-8">
								<form class="rounded position-relative">
									<input class="form-control pe-5 bg-transparent" type="search" placeholder="جستجو..." aria-label="Search">
									<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
								</form>
							</div>

							<!-- Select option -->
							<div class="col-md-3">
								<!-- Short by filter -->
								<form>
									<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm">
										<option value="">مرتب سازی</option>
										<option>رایگان</option>
										<option>جدیدترین</option>
										<option>قدیمی ترین</option>
									</select>
								</form>
							</div>
						</div>
						<!-- Title and select END -->

						<!-- Payout list table START -->
						<div class="table-responsive border-0">
							<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
								<!-- Table head -->
								<thead>
									<tr>
										<th scope="col" class="border-0 rounded-start">پرداختی</th>
										<th scope="col" class="border-0">مبلغ</th>
										<th scope="col" class="border-0">وضعیت</th>
										<th scope="col" class="border-0 rounded-end">تاریخ</th>
									</tr>
								</thead>
								<!-- Table body START -->
								<tbody>
									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="mt-2 mt-lg-0 mb-0 fw-normal"><a href="#">پرداخت موفق #102356</a></h6>
										</td>

										<!-- Table data -->
										<td>148,000 تومان
											<!-- Drop down with id -->
											<a href="#" class="h6 mb-0" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi bi-info-circle-fill"></i>
											</a>
											<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
												<li>
													<div class="d-flex justify-content-between">
														<span class="small">سود</span>
														<span class="h6 mb-0 small">8%</span>
													</div>
													<hr class="my-1">
												</li>
												<!-- Divider -->

												<li>
													<div class="d-flex justify-content-between">
														<span class="me-4 small">مالیات</span>
														<span class="text-danger small">-0.00</span>
													</div>
													<hr class="my-1">
												</li>
												
												<li>
													<div class="d-flex justify-content-between">
														<span class="small">درآمد</span>
														<span class="h6 mb-0 small">250,000</span>
													</div>
												</li>
											</ul>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<span class="badge bg-success bg-opacity-10 text-success">پرداخت شده</span>
										</td>

										<!-- Table data -->
										<td>1400/11/4</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<!-- Title -->
											<h6 class="mt-2 mt-lg-0 mb-0 fw-normal"><a href="#">پرداخت موفق #102589</a></h6>
										</td>

										<!-- Table data -->
										<td>425,000 تومان
											<!-- Drop down with id -->
											<a href="#" class="h6 mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi bi-info-circle-fill"></i>
											</a>
											<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
												<li>
													<div class="d-flex justify-content-between">
														<span class="small">سود</span>
														<span class="h6 mb-0 small">250,000</span>
													</div>
													<hr class="my-1">
												</li>
												<!-- Divider -->

												<li>
													<div class="d-flex justify-content-between">
														<span class="me-4 small">مالیات</span>
														<span class="text-danger small">-0.00</span>
													</div>
													<hr class="my-1">
												</li>
												
												<li>
													<div class="d-flex justify-content-between">
														<span class="small">درآمد</span>
														<span class="h6 mb-0 small">250,000</span>
													</div>
												</li>
											</ul>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<span class="badge bg-success bg-opacity-10 text-success">پرداخت شده</span>
										</td>

										<!-- Table data -->
										<td>1400/6/12</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="mt-2 mt-lg-0 mb-0 fw-normal"><a href="#">پرداخت موفق #108645</a></h6>
										</td>

										<!-- Table data -->
										<td>148,000 تومان
											<!-- Drop down with id -->
											<a href="#" class="h6 mb-0" role="button" id="dropdownShare2" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi bi-info-circle-fill"></i>
											</a>
											<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare2">
												<li>
													<div class="d-flex justify-content-between">
														<span class="small">سود</span>
														<span class="h6 mb-0 small">250,000</span>
													</div>
													<hr class="my-1">
												</li>
												<!-- Divider -->

												<li>
													<div class="d-flex justify-content-between">
														<span class="me-4 small">مالیات</span>
														<span class="text-danger small">-0.00</span>
													</div>
													<hr class="my-1">
												</li>
												
												<li>
													<div class="d-flex justify-content-between">
														<span class="small">درآمد</span>
														<span class="h6 mb-0 small">250,000</span>
													</div>
												</li>
											</ul>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<span class="badge bg-danger bg-opacity-10 text-danger">کنسل شده </span>
										</td>

										<!-- Table data -->
										<td>1400/3/25</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="mt-2 mt-lg-0 mb-0 fw-normal"><a href="#">پرداخت موفق #108645</a></h6>
										</td>

										<!-- Table data -->
										<td>425,000 تومان
											<!-- Drop down with id -->
											<a href="#" class="h6 mb-0" role="button" id="dropdownShare3" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi bi-info-circle-fill"></i>
											</a>
											<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare3">
												<li>
													<div class="d-flex justify-content-between">
														<span class="small">سود</span>
														<span class="h6 mb-0 small">250,000</span>
													</div>
													<hr class="my-1">
												</li>
												<!-- Divider -->

												<li>
													<div class="d-flex justify-content-between">
														<span class="me-4 small">مالیات</span>
														<span class="text-danger small">-0.00</span>
													</div>
													<hr class="my-1">
												</li>
												
												<li>
													<div class="d-flex justify-content-between">
														<span class="small">درآمد</span>
														<span class="h6 mb-0 small">250,000</span>
													</div>
												</li>
											</ul>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<span class="badge bg-success bg-opacity-10 text-success">پرداخت شده</span>
										</td>

										<!-- Table data -->
										<td>1400/2/28</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<!-- Title -->
											<h6 class="mt-2 mt-lg-0 mb-0 fw-normal"><a href="#">پرداخت موفق #108645</a></h6>
										</td>

										<!-- Table data -->
										<td>148,000 تومان
											<!-- Drop down with id -->
											<a href="#" class="h6 mb-0" role="button" id="dropdownShare4" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="bi bi-info-circle-fill"></i>
											</a>
											<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare4">
												<li>
													<div class="d-flex justify-content-between">
														<span class="small">سود</span>
														<span class="h6 mb-0 small">250,000</span>
													</div>
													<hr class="my-1">
												</li>
												<!-- Divider -->

												<li>
													<div class="d-flex justify-content-between">
														<span class="me-4 small">مالیات</span>
														<span class="text-danger small">-0.00</span>
													</div>
													<hr class="my-1">
												</li>
												
												<li>
													<div class="d-flex justify-content-between">
														<span class="small">درآمد</span>
														<span class="h6 mb-0 small">250,000</span>
													</div>
												</li>
											</ul>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<span class="badge bg-orange bg-opacity-10 text-orange">در انتظار پرداخت</span>
										</td>

										<!-- Table data -->
										<td>1400/1/13</td>
									</tr>
								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- Payout list table END -->

						<!-- Pagination START -->
						<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
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
						<!-- Pagination END -->
					</div>
					<!-- Card body START -->
				</div>
				<!-- Payout END -->
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