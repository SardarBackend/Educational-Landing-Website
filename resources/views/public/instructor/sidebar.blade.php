<div class="col-xl-3">
	<!-- Responsive offcanvas body START -->
	<div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
		<!-- Offcanvas header -->
		<div class="offcanvas-header bg-light">
			<h5 class="offcanvas-title" id="offcanvasNavbarLabel">پروفایل</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
		</div>

		<!-- Offcanvas body -->
		<div class="offcanvas-body p-3 p-xl-0">
			<div class="bg-dark border rounded-3 pb-0 p-3 w-100">
				<!-- Dashboard menu -->
				<div class="list-group list-group-dark list-group-borderless">

					<a class="list-group-item {{ request()->routeIs('instructor.dashboard') ? 'active' : '' }}"
					   href="{{ route('instructor.dashboard') }}">
						<i class="bi bi-ui-checks-grid fa-fw me-2"></i>داشبورد
					</a>

					<a class="list-group-item {{ request()->routeIs('instructor.manage-course') ? 'active' : '' }}"
					   href="{{ route('instructor.manage-course') }}">
						<i class="bi bi-basket fa-fw me-2"></i>لیست دوره ها
					</a>


					{{-- <a class="list-group-item {{ request()->routeIs('instructor.earning') ? 'active' : '' }}"
					   href="{{ route('instructor.earning') }}">
						<i class="bi bi-graph-up fa-fw me-2"></i>آنالیز و تحلیل درآمدها
					</a> --}}

					<a class="list-group-item {{ request()->routeIs('instructor.student-list') ? 'active' : '' }}"
					   href="{{ route('instructor.student-list') }}">
						<i class="bi bi-people fa-fw me-2"></i>لیست دانشجویان
					</a>

					<a class="list-group-item {{ request()->routeIs('instructor.order') ? 'active' : '' }}"
					   href="{{ route('instructor.order') }}">
						<i class="bi bi-folder-check fa-fw me-2"></i>لیست سفارشات
					</a>

					<a class="list-group-item {{ request()->routeIs('instructor.review') ? 'active' : '' }}"
					   href="{{ route('instructor.review') }}">
						<i class="bi bi-star fa-fw me-2"></i>دیدگاه ها
					</a>

					<a class="list-group-item {{ request()->routeIs('instructor.edit-profile') ? 'active' : '' }}"
					   href="{{ route('instructor.edit-profile') }}">
						<i class="bi bi-pencil-square fa-fw me-2"></i>ویرایش پروفایل
					</a>

					<a class="list-group-item {{ request()->routeIs('instructor.payout') ? 'active' : '' }}"
					   href="{{ route('instructor.payout') }}">
						<i class="bi bi-wallet2 fa-fw me-2"></i>درآمدها
					</a>



					<a class="list-group-item {{ request()->routeIs('instructor.delete-account') ? 'active' : '' }}"
					   href="{{ route('instructor.delete-account') }}">
						<i class="bi bi-trash fa-fw me-2"></i>حذف پروفایل
					</a>

					<a class="list-group-item text-danger bg-danger-soft-hover"
					   href="{{ route('logout') }}">
						<i class="fas fa-sign-out-alt fa-fw me-2"></i>خروج
					</a>

				</div>
			</div>
		</div>
	</div>
	<!-- Responsive offcanvas body END -->
</div>