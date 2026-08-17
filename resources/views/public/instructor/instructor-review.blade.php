@extends('base2')

@section('content')


<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Main Banner START -->
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
				<!-- Student review START -->
				<div class="card border bg-transparent rounded-3">
					<!-- Header START -->
					<div class="card-header bg-transparent border-bottom">
						<div class="row justify-content-between align-middle">
							<!-- Title -->
							<div class="col-sm-6">
								<h3 class="card-header-title mb-2 mb-sm-0 fs-5 ff-vb">دیدگاه ها</h3>
							</div>
							
							<!-- Short by filter -->
							<div class="col-sm-4">
								<form>
									<select class="form-select js-choice z-index-9 bg-white" aria-label=".form-select-sm">
										<option value="">مرتب سازی</option>
										<option>★★★★★ (5/5)</option>
										<option>★★★★☆ (4/5)</option>
										<option>★★★☆☆ (3/5)</option>
										<option>★★☆☆☆ (2/5)</option>
										<option>★☆☆☆☆ (1/5)</option>
									</select>
								</form>
							</div>
						</div>
					</div>
					<!-- Header END -->

					<!-- Reviews START -->
					<div class="card-body mt-2 mt-sm-4">
						@foreach ($comments as $comment)				
						<!-- Review item START -->
						<div class="d-sm-flex">
							<!-- Avatar image -->
							<img class="avatar avatar-lg rounded-circle float-start me-3" src="assets/images/avatar/01.jpg" alt="avatar">
							<div>
								<div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
									<!-- Title -->
									<div>
										<h5 class="m-0"> {{ $comment->user()->first()->name }}</h5>
										<span class="me-3 small"> {{ jdate($comment->failed_at)->format('Y:m:D') }}  در 688:10 </span>
									</div>
									<!-- Review star -->
									<ul class="list-inline mb-0">
										<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
									</ul>	
								</div>
								<!-- Content -->
								<h6 class="fw-normal">
									{{-- <span class="text-body fw-light">دیدگاه درمورد:</span> نحوه پیاده سازی نقشه سایت در sass</h6> --}}
								<p> {{ $comment->content }} </p>
								<!-- Button -->
								<div class="text-end">
									{{-- <a href="#" class="btn btn-sm btn-primary-soft mb-1 mb-sm-0">دایرکت</a> --}}
									<a class="btn btn-sm btn-light mb-0" data-bs-toggle="collapse" href="#collapseComment" role="button" aria-expanded="false" aria-controls="collapseComment">
										پاسخ
									</a>
									<!-- collapse textarea -->
									<div class="collapse show" id="collapseComment">
										<div class="d-flex mt-3">
											<form action="{{ route('create_comment') }}" method="POST">
												<input type="hidden" name="parent_id" value="{{ $comment->id }}">
											<textarea class="form-control mb-0" placeholder="ثبت دیدگاه ..." rows="2" spellcheck="false"></textarea>
											<button type="submit" class="btn btn-sm btn-primary-soft ms-2 px-4 mb-0 flex-shrink-0"><i class="fas fa-paper-plane fs-5"></i></button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Divider -->
						<hr>
						@endforeach

					</div>
					<!-- Reviews END -->

					<div class="card-footer border-top">
						<!-- Pagination START -->
						<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
							<!-- Content -->
							<p class="mb-0 text-center text-sm-start">نمایش 1 تا 8 از 20</p>
							<!-- Pagination -->
							<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
								<ul class="pagination pagination-sm pagination-primary-soft my-0 py-0">
									<li class="page-item my-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
									<li class="page-item my-0"><a class="page-link" href="#">1</a></li>
									<li class="page-item my-0 active"><a class="page-link" href="#">2</a></li>
									<li class="page-item my-0"><a class="page-link" href="#">3</a></li>
									<li class="page-item my-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
								</ul>
							</nav>
						</div>
						<!-- Pagination END -->
					</div>
				</div>
				<!-- Student review END -->
			</div>
			<!-- Main content END -->
		</div><!-- Row END -->
	</div>
</section>
<!-- =======================
Inner part END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@endsection