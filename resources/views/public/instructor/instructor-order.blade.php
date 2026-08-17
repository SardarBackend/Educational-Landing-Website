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
								<a href="instructor-create-course.html" class="btn btn-success mb-0">افزودن دوره</a>
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

				<!-- Card START -->
				<div class="card border bg-transparent rounded-3">
					<!-- Card header START -->
					<div class="card-header bg-transparent border-bottom">
						<h3 class="mb-0 fs-5 ff-vb">لیست سفارشات</h3>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body">

						<!-- Search and select START -->
						<div class="row g-3 align-items-center justify-content-between mb-4">
							<!-- Search -->
							<div class="col-md-8">
								<form class="rounded position-relative">
									<input class="form-control pe-5 bg-transparent" type="search" placeholder="جستجو" aria-label="Search">
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
						<!-- Search and select END -->

						<!-- Order list table START -->
						<div class="table-responsive border-0">
							<!-- Table START -->
							<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
								<!-- Table head -->
								<thead>
									<tr>
										<th scope="col" class="border-0 rounded-start">دوره</th>
										<th scope="col" class="border-0">کد پیگیری</th>
										<th scope="col" class="border-0">تاریخ</th>
										<th scope="col" class="border-0">قیمت</th>
										<th scope="col" class="border-0 rounded-end">روش پرداخت</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<tbody>
									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="table-responsive-title mt-2 mt-lg-0 mb-0 fw-normal"><a href="#">دوره کامل دیجیتال مارکتینگ - دوره 8 در 1</a></h6>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start text-primary-hover">
											<a href="#" class="text-body"><u>#125489</u></a>
										</td>

										<!-- Table data -->
										<td>1400/12/10</td>

										<!-- Table data -->
										<td>490,000 تومان</td>

										<!-- Table data -->
										<td>کارت</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="table-responsive-title mt-2 mt-lg-0 mb-0 fw-normal"><a href="#">آموزش مقدماتی فتوشاپ Photoshop</a></h6>
										</td>
										<!-- Table data -->
										<td class="text-center text-sm-start text-primary-hover">
											<a href="#" class="text-body"><u>#235486</u></a>
										</td>

										<!-- Table data -->
										<td>1400/12/24</td>

										<!-- Table data -->
										<td>60,000 تومان</td>

										<!-- Table data -->
										<td>کارت</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="table-responsive-title mt-2 mt-lg-0 mb-0 fw-normal"><a href="#">دوره جامع آموزش Sketch</a></h6>
										</td>
										<!-- Table data -->
										<td class="text-center text-sm-start text-primary-hover">
											<a href="#" class="text-body"><u>#0215789</u></a>
										</td>

										<!-- Table data -->
										<td>1400/11/7</td>

										<!-- Table data -->
										<td>280,000 تومان</td>

										<!-- Table data -->
										<td>آنلاین</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="table-responsive-title mt-2 mt-lg-0 mb-0 fw-normal"><a href="#">دوره جامع آموزش Figma</a></h6>
										</td>
										<!-- Table data -->
										<td class="text-center text-sm-start text-primary-hover">
											<a href="#" class="text-body"><u>#0135689</u></a>
										</td>

										<!-- Table data -->
										<td>1400/10/18</td>

										<!-- Table data -->
										<td>0</td>

										<!-- Table data -->
										<td>رایگان</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="table-responsive-title mt-2 mt-lg-0 mb-0 fw-normal"><a href="#">دوره جامع آموزش HTML</a></h6>
										</td>
										<!-- Table data -->
										<td class="text-center text-sm-start text-primary-hover">
											<a href="#" class="text-body"><u>#0587623</u></a>
										</td>

										<!-- Table data -->
										<td>1399/11/8</td>

										<!-- Table data -->
										<td>270,000 تومان</td>

										<!-- Table data -->
										<td>آنلاین</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="table-responsive-title mt-2 mt-lg-0 mb-0 fw-normal"><a href="#">دوره جامع آموزش JavaScript</a></h6>
										</td>
										<!-- Table data -->
										<td class="text-center text-sm-start text-primary-hover">
											<a href="#" class="text-body"><u>#0215789</u></a>
										</td>

										<!-- Table data -->
										<td>1399/8/12</td>

										<!-- Table data -->
										<td>250,000 تومان</td>

										<!-- Table data -->
										<td>کارت</td>
									</tr>
								</tbody>
								<!-- Table body END -->
							</table>
							<!-- Table END -->
						</div>
						<!-- Order list table END -->

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
					<!--Card END  -->
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