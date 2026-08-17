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

				<!-- Earning boxes START -->
				<div class="row g-4">
					<!-- Earning item -->
					<div class="col-sm-6 col-lg-4">
						<div class="text-center p-4 bg-light rounded-3">
							<h6 class="text-body">فروش این ماه</h6>
							<h2 class="mb-0 fs-4">337,500 تومان</h2>
						</div>
					</div>

					<!-- Earning item -->
					<div class="col-sm-6 col-lg-4">
						<div class="text-center p-4 bg-light rounded-3">
							<h6 class="text-body">پرداخت شده
								<a tabindex="0" class="h6 mb-0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="با احتساب مالیات">
									<i class="bi bi-info-circle-fill small"></i>
								</a>
							</h6>
							<h2 class="mb-0 fs-4">250,000 تومان</h2>
						</div>
					</div>

					<!-- Earning item -->
					<div class="col-sm-6 col-lg-4">
						<div class="text-center p-4 bg-light rounded-3">
							<h6 class="text-body">میانگین درآمد</h6>
							<h2 class="mb-0 fs-4">500,000 تومان</h2>
						</div>
					</div>
				</div>
				<!-- Earning boxes END -->

				<!-- Chart START -->
				<div class="card card-body bg-transparent rounded-top border overflow-hidden p-0 mt-5">
					<div class="row g-4 p-4">
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
					<div id="ChartPayoutEarning"></div>

				</div>
				<!-- Chart END -->

				<!-- Earning chart START -->
				<div class="card bg-transparent border rounded-3 mt-5">
					<!-- Card title -->
					<div class="card-header bg-transparent">
						<h5 class="mb-0">پنج منبع برتر درآمد</h5>
					</div>
					<!-- Card body -->
					<div class="card-body">
						<div class="row g-4 g-md-5 align-items-center">
							<!-- Chart -->
							<div class="col-md-6">
								<div id="ChartPageViews"></div>
							</div>

							<!-- Content -->
							<div class="col-md-6">
								<ul class="list-group list-group-borderless mb-3">
									<li class="list-group-item"><h6 class="mb-0">دوره</h6></li>
									<li class="list-group-item"><i class="text-success fas fa-circle me-2"></i>آموزش Laravel</li>
									<li class="list-group-item"><i class="text-warning fas fa-circle me-2"></i>آموزش HTML</li>
									<li class="list-group-item"><i class="text-danger fas fa-circle me-2"></i>آموزش JavaScript</li>
									<li class="list-group-item"><i class="text-primary fas fa-circle me-2"></i>آموزش Figma</li>
									<li class="list-group-item"><i class="text-secondary fas fa-circle me-2"></i>آموزش React-Native</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Earning chart END -->

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