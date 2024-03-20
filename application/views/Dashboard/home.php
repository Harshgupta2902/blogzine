<!DOCTYPE html>
<html lang="en">

<head>
	<title>Blogzine - Blog and Magazine Bootstrap 5 Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Bootstrap based News, Magazine and Blog Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="../fonts.gstatic.com/index.html">
	<link href="../fonts.googleapis.com/css2ccf1.css?family=Nunito+Sans:wght@400;700&amp;family=Rubik:wght@400;500;700&amp;display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/apexcharts/css/apexcharts.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/overlay-scrollbar/css/OverlayScrollbars.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	 
</head>

<body>
<?php $this->load->view('header')?>
<main>

<!-- =======================
Main contain START -->
<section class="py-4">
	<div class="container">
		<div class="row g-4">

			<div class="col-12">
				<!-- Counter START -->
				<div class="row g-4">
					
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-3">
						<div class="card card-body border p-3">
							<div class="d-flex align-items-center">
								<!-- Icon -->
								<div class="icon-xl fs-1 bg-success bg-opacity-10 rounded-3 text-success">
									<i class="bi bi-people-fill"></i>
								</div>
								<!-- Content -->
								<div class="ms-3">
									<h3>134K</h3>
									<h6 class="mb-0">Pageviews</h6>
								</div>
							</div>
						</div>
					</div>

					<!-- Counter item -->
					<div class="col-sm-6 col-lg-3">
						<div class="card card-body border p-3">
							<div class="d-flex align-items-center">
								<!-- Icon -->
								<div class="icon-xl fs-1 bg-primary bg-opacity-10 rounded-3 text-primary">
									<i class="bi bi-file-earmark-text-fill"></i>
								</div>
								<!-- Content -->
								<div class="ms-3">
									<h3>180</h3>
									<h6 class="mb-0">Posts</h6>
								</div>
							</div>
						</div>
					</div>

					<!-- Counter item -->
					<div class="col-sm-6 col-lg-3">
						<div class="card card-body border p-3">
							<div class="d-flex align-items-center">
								<!-- Icon -->
								<div class="icon-xl fs-1 bg-danger bg-opacity-10 rounded-3 text-danger">
									<i class="bi bi-suit-heart-fill"></i>
								</div>
								<!-- Content -->
								<div class="ms-3">
									<h3>2150</h3>
									<h6 class="mb-0">Likes</h6>
								</div>
							</div>
						</div>
					</div>

					<!-- Counter item -->
					<div class="col-sm-6 col-lg-3">
						<div class="card card-body border p-3">
							<div class="d-flex align-items-center">
								<!-- Icon -->
								<div class="icon-xl fs-1 bg-info bg-opacity-10 rounded-3 text-info">
									<i class="bi bi-bar-chart-line-fill"></i>
								</div>
								<!-- Content -->
								<div class="ms-3">
									<h3>84K</h3>
									<h6 class="mb-0">Visitors</h6>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- Counter END -->
			</div>

			<div class="col-xl-8">
				<!-- Chart START -->
				<div class="card border h-100">

					<!-- Card header -->
					<div class="card-header p-3 border-bottom">
						<h5 class="card-header-title mb-0">Traffic stats</h5>
					</div>
					<!-- Card body -->
					<div class="card-body">
						<!-- Apex chart -->
						<div id="apexChartTrafficStats" class="mt-2"></div>
					</div>
				</div>
				<!-- Chart END -->
			</div>

			<div class="col-md-6 col-xxl-4">
				<!-- Latest blog START -->
				<div class="card border h-100">
					<!-- Card header -->
					<div class="card-header border-bottom p-3">
						<h5 class="card-header-title mb-0">Latest post</h5>
					</div>

					<!-- Card body START -->
					<div class="card-body p-3">

						<div class="row">
							<!-- Blog item -->
							<div class="col-12">
								<div class="d-flex align-items-center position-relative">
									<img class="w-60 rounded" src="assets/images/blog/1by1/01.jpg" alt="product">
									<div class="ms-3">
										<a href="#" class="h6 stretched-link">Dirty little secrets about the business industry</a>
										<p class="small mb-0">Jun 17, 2022</p>
									</div>
								</div>
							</div>

							<!-- Divider -->
							<hr class="my-3">

							<!-- Blog item -->
							<div class="col-12">
								<div class="d-flex align-items-center position-relative">
									<img class="w-60 rounded" src="assets/images/blog/1by1/02.jpg" alt="product">
									<div class="ms-3">
										<a href="#" class="h6 stretched-link">12 worst types of business accounts you follow on Twitter</a>
										<p class="small mb-0">Nov 11, 2022</p>
									</div>
								</div>
							</div>

							<!-- Divider -->
							<hr class="my-3">

							<!-- Blog item -->
							<div class="col-12">
								<div class="d-flex align-items-center position-relative">
									<img class="w-60 rounded" src="assets/images/blog/1by1/03.jpg" alt="product">
									<div class="ms-3">
										<a href="#" class="h6 stretched-link">Bad habits that people in the industry need to quit</a>
										<p class="small mb-0">Sep 01, 2022</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card body END -->

					<!-- Card footer -->
					<div class="card-footer border-top text-center p-3">
						<a href="#">View all Posts</a>
					</div>

				</div>
				<!-- Latest blog END -->
			</div>

			<div class="col-md-6 col-xxl-4">
				<!-- Recent comment START -->
				<div class="card border h-100">
					<!-- Card header -->
					<div class="card-header border-bottom p-3">
						<h5 class="card-header-title mb-0">Recent comments</h5>
					</div>

					<!-- Card body START -->
					<div class="card-body p-3">

						<div class="row">
							<!-- Comment item -->
							<div class="col-12">
								<div class="d-flex align-items-center position-relative">
									<!-- Avatar -->
									<div class="avatar avatar-lg flex-shrink-0">
										<img class="avatar-img rounded-2" src="assets/images/avatar/06.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-3">
										<p class="mb-1"> <a class="h6 fw-normal stretched-link" href="#"> Supposing so be resolving breakfast am or perfectly.. </a></p>
										<div class="d-flex justify-content-between">
											<p class="small mb-0">by Joan</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Divider -->
							<hr class="my-3">

							<!-- Comment item -->
							<div class="col-12">
								<div class="d-flex align-items-center position-relative">
									<!-- Avatar -->
									<div class="avatar avatar-lg flex-shrink-0">
										<img class="avatar-img rounded-2" src="assets/images/avatar/08.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-3">
										<p class="mb-1"> <a class="h6 fw-normal stretched-link" href="#"> We focus a great deal on the understanding of behavioral.. </a></p>
										<div class="d-flex justify-content-between">
											<p class="small mb-0">by Allen Smith</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Divider -->
							<hr class="my-3">

							<!-- Comment item -->
							<div class="col-12">
								<div class="d-flex align-items-center position-relative">
									<!-- Avatar -->
									<div class="avatar avatar-lg flex-shrink-0">
										<img class="avatar-img rounded-2" src="assets/images/avatar/04.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-3">
										<p class="mb-1"> <a class="h6 fw-normal stretched-link" href="#"> Supposing so be resolving breakfast am or perfectly.. </a></p>
										<div class="d-flex justify-content-between">
											<p class="small mb-0">by Louis Ferguson</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Divider -->
							<hr class="my-3">

							<!-- Comment item -->
							<div class="col-12">
								<div class="d-flex align-items-center position-relative">
									<!-- Avatar -->
									<div class="avatar avatar-lg flex-shrink-0">
										<img class="avatar-img rounded-2" src="assets/images/avatar/05.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-3">
										<p class="mb-1"> <a class="h6 fw-normal stretched-link" href="#"> Supposing so be resolving breakfast am or perfectly.. </a></p>
										<div class="d-flex justify-content-between">
											<p class="small mb-0">by Joan Wallace</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Recent comment END -->
			</div>

			<div class="col-md-6 col-xxl-4">
				<!-- Notice board START -->
				<div class="card border h-100">
					<!-- Card header -->
					<div class="card-header border-bottom d-flex justify-content-between align-items-center  p-3">
						<h5 class="card-header-title mb-0">Notice board</h5>
            <!-- Dropdown button -->
						<div class="dropdown text-end">
							<a href="#" class="btn border-0 p-0 mb-0" role="button" id="dropdownShare3" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fa-fw"></i>
							</a>
							<!-- dropdown button -->
							<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare3">
								<li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
							</ul>
						</div>
					</div>

					<!-- Card body START -->
					<div class="card-body p-3">
						<div class="custom-scrollbar h-350">
							<div class="row">
								<!-- Notice board item -->
								<div class="col-12">
									<div class="d-flex justify-content-between position-relative">
										<div class="d-sm-flex">
											<div class="icon-lg bg-warning bg-opacity-15 text-warning rounded-2 flex-shrink-0">
												<i class="fas fa-user-tie fs-5"></i>
											</div>
											<!-- Info -->
											<div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
												<h6 class="mb-0"><a href="#" class="stretched-link">Join New Author</a></h6>
												<p class="mb-0">Amongst moments do in arrived Fat weddings believed prospect</p>
												<span class="small">5 min ago</span>
											</div>
										</div>
									</div>
								</div>

								<!-- Divider -->
								<hr class="my-3">

								<!-- Notice board item -->
								<div class="col-12">
									<div class="d-flex justify-content-between position-relative">
										<div class="d-sm-flex">
											<div class="icon-lg bg-success bg-opacity-10 text-success rounded-2 flex-shrink-0">
												<i class="bi bi-chat-left-quote-fill fs-5"></i>
											</div>
											<!-- Info -->
											<div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
												<h6 class="mb-0"><a href="#" class="stretched-link">Add 5 New Blogs</a></h6>
												<p class="mb-0">Arrived Fat weddings believed prospect</p>
												<span class="small">4 hour ago</span>
											</div>
										</div>
									</div>
								</div>

								<!-- Divider -->
								<hr class="my-3">

								<!-- Notice board item -->
								<div class="col-12">
									<div class="d-flex justify-content-between position-relative">
										<div class="d-sm-flex">
											<div class="icon-lg bg-danger bg-opacity-10 text-danger rounded-2 flex-shrink-0">
												<i class="bi bi-bell-fill fs-5"></i>
											</div>
											<!-- Info -->
											<div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
												<h6 class="mb-0"><a href="#" class="stretched-link">5 New Subscribers</a></h6>
												<p class="mb-0">Weddings believed prospect Arrived</p>
												<span class="small">4 hour ago</span>
											</div>
										</div>
									</div>
								</div>

								<!-- Divider -->
								<hr class="my-3">

								<!-- Notice board item -->
								<div class="col-12">
									<div class="d-flex justify-content-between position-relative">
										<div class="d-sm-flex">
											<div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-2 flex-shrink-0"><i class="fas fa-globe fs-5"></i></div>
											<!-- Info -->
											<div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
												<h6 class="mb-0"><a href="#" class="stretched-link">Update New Feature</a></h6>
												<span class="small">3 days ago</span>
											</div>
										</div>
									</div>
								</div>
							</div><!-- Row END -->
						</div>
					</div>
					<!-- Card body END -->

					<!-- Card footer -->
					<div class="card-footer border-top text-center p-3">
						<a href="#">View all Notice List</a>
					</div>

				</div>
				<!-- Notice board END -->
			</div>

			<div class="col-md-6 col-xxl-4">
				<div class="card border h-100">

					<!-- Card header -->
					<div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
						<h5 class="card-header-title mb-0">Traffic sources</h5>
						<a href="#" class="btn btn-sm btn-link p-0 mb-0 text-reset">View all</a>
					</div>

					<!-- Card body START -->
					<div class="card-body p-4">
						<!-- Chart -->
						<div class=" mx-auto">
							<div id="apexChartTrafficSources"></div>
						</div>
						<!-- Content -->
						<ul class="list-inline text-center mt-3">
							<li class="list-inline-item pe-2"><i class="text-primary fas fa-circle pe-1"></i> Search </li>
							<li class="list-inline-item pe-2"><i class="text-success fas fa-circle pe-1"></i> Direct </li>
							<li class="list-inline-item pe-2"><i class="text-danger fas fa-circle pe-1"></i> Social </li>
							<li class="list-inline-item pe-2"><i class="text-warning fas fa-circle pe-1"></i> Display ads </li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-12">
				<!-- Blog list table START -->
				<div class="card border bg-transparent rounded-3">
					<!-- Card header START -->
					<div class="card-header bg-transparent border-bottom p-3">
						<div class="d-sm-flex justify-content-between align-items-center">
							<h5 class="mb-2 mb-sm-0">Blog list <span class="badge bg-primary bg-opacity-10 text-primary">105</span></h5>
							<a href="#" class="btn btn-sm btn-primary mb-0">Add New</a>
						</div>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body">

						<!-- Search and select START -->
						<div class="row g-3 align-items-center justify-content-between mb-3">
							<!-- Search -->
							<div class="col-md-8">
								<form class="rounded position-relative">
									<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
									<button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
								</form>
							</div>

							<!-- Select option -->
							<div class="col-md-3">
								<!-- Short by filter -->
								<form>
									<select class="form-select z-index-9 bg-transparent" aria-label=".form-select-sm">
										<option value="">Sort by</option>
										<option>Free</option>
										<option>Newest</option>
										<option>Oldest</option>
									</select>
								</form>
							</div>
						</div>
						<!-- Search and select END -->

						<!-- Blog list table START -->
						<div class="table-responsive border-0">
							<table class="table align-middle p-4 mb-0 table-hover table-shrink">
								<!-- Table head -->
								<thead class="table-dark">
									<tr>
										<th scope="col" class="border-0 rounded-start">Blog Name</th>
										<th scope="col" class="border-0">Author Name</th>
										<th scope="col" class="border-0">Published Date</th>
										<th scope="col" class="border-0">Categories</th>
										<th scope="col" class="border-0">Status</th>
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<tbody class="border-top-0">
									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">12 worst types of business accounts you follow on Twitter</a></h6>
										</td>
										<!-- Table data -->
										<td>
											<h6 class="mb-0"><a href="#">Lori Stevens</a></h6>
										</td>
										<!-- Table data -->
										<td>Jan 22, 2022</td>
										<!-- Table data -->
										<td>
											<a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
										</td>
										<!-- Table data -->
										<td>
											<span class="badge bg-success bg-opacity-10 text-success mb-2">Live</span>
										</td>
										<!-- Table data -->
										<td>
                      <div class="d-flex gap-2">
                        <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                        <a href="dashboard-post-edit.html" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                      </div>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">Dirty little secrets about the business industry</a></h6>
										</td>
										<!-- Table data -->
										<td>
											<h6 class="mb-0"><a href="#">Dennis Barrett</a></h6>
										</td>
										<!-- Table data -->
										<td>Jan 19, 2022</td>
										<!-- Table data -->
										<td>
											<a href="#" class="badge text-bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
										</td>
										<!-- Table data -->
										<td>
											<span class="badge bg-warning bg-opacity-15 text-warning mb-2">Draft</span>
										</td>
										<!-- Table data -->
										<td>
                      <div class="d-flex gap-2">
                        <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                        <a href="dashboard-post-edit.html" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                      </div>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">7 common mistakes everyone makes while traveling</a></h6>
										</td>
										<!-- Table data -->
										<td>
											<h6 class="mb-0"><a href="#">Billy Vasquez</a></h6>
										</td>
										<!-- Table data -->
										<td>Nov 11, 2022</td>
										<!-- Table data -->
										<td>
											<a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Photography</a>
										</td>
										<!-- Table data -->
										<td>
											<span class="badge bg-success bg-opacity-10 text-success mb-2">Live</span>
										</td>
										<!-- Table data -->
										<td>
                      <div class="d-flex gap-2">
                        <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                        <a href="dashboard-post-edit.html" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                      </div>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">5 investment doubts you should clarify</a></h6>
										</td>
										<!-- Table data -->
										<td>
											<h6 class="mb-0"><a href="#">Lori Stevens</a></h6>
										</td>
										<!-- Table data -->
										<td>Jan 22, 2022</td>
										<!-- Table data -->
										<td>
											<a href="#" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Gadgets</a>
										</td>
										<!-- Table data -->
										<td>
											<span class="badge bg-success bg-opacity-10 text-success mb-2">Live</span>
										</td>
										<!-- Table data -->
										<td>
                      <div class="d-flex gap-2">
                        <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                        <a href="dashboard-post-edit.html" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                      </div>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">Bad habits that people in the industry need to quit</a></h6>
										</td>
										<!-- Table data -->
										<td>
											<h6 class="mb-0"><a href="#">Larry Lawson</a></h6>
										</td>
										<!-- Table data -->
										<td>Dec 06, 2022</td>
										<!-- Table data -->
										<td>
											<a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
										</td>
										<!-- Table data -->
										<td>
											<span class="badge bg-danger bg-opacity-10 text-danger mb-2">Removed</span>
										</td>
										<!-- Table data -->
										<td>
                      <div class="d-flex gap-2">
                        <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                        <a href="dashboard-post-edit.html" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                      </div>
										</td>
									</tr>

									<!-- Table item -->
									<tr>
										<!-- Table data -->
										<td>
											<h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">Around the web: 20 fabulous infographics about business</a></h6>
										</td>
										<!-- Table data -->
										<td>
											<h6 class="mb-0"><a href="#">Bryan Knight</a></h6>
										</td>
										<!-- Table data -->
										<td>Feb 14, 2022</td>
										<!-- Table data -->
										<td>
											<a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
										</td>
										<!-- Table data -->
										<td>
											<span class="badge bg-success bg-opacity-10 text-success mb-2">Live</span>
										</td>
										<!-- Table data -->
										<td>
                      <div class="d-flex gap-2">
                        <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                        <a href="dashboard-post-edit.html" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                      </div>
										</td>
									</tr>

								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- Blog list table END -->

						<!-- Pagination START -->
						<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
							<!-- Content -->
							<p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
							<!-- Pagination -->
							<nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
								<ul class="pagination pagination-sm pagination-bordered mb-0">
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active"><a class="page-link" href="#">2</a></li>
									<li class="page-item disabled"><a class="page-link" href="#">..</a></li>
									<li class="page-item"><a class="page-link" href="#">15</a></li>
									<li class="page-item">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
							</nav>
						</div>
						<!-- Pagination END -->
					</div>
				</div>
				<!-- Blog list table END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main contain END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="mb-3">
  <div class="container">
    <div class="card card-body bg-light">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6">
          <!-- Copyright -->
          <div class="text-center text-lg-start">©2023 <a href="https://www.webestica.com/" class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
          </div>
        </div>
        <div class="col-lg-6 d-sm-flex align-items-center justify-content-center justify-content-lg-end">
          <!-- Language switcher -->
          <div class="dropup me-0 me-sm-3 mt-3 mt-md-0 text-center text-sm-end">
            <a class="dropdown-toggle text-body" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
              English Edition
            </a>
            <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
              <li><a class="dropdown-item" href="#">English</a></li>
              <li><a class="dropdown-item" href="#">German </a></li>
              <li><a class="dropdown-item" href="#">French</a></li>
            </ul>
          </div>
          <!-- Links -->
          <ul class="nav text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
            <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
            <li class="nav-item"><a class="nav-link pe-0" href="#">Cookies</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/apexcharts/js/apexcharts.min.js"></script>
<script src="assets/vendor/overlay-scrollbar/js/OverlayScrollbars.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from blogzine.webestica.com/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 08:38:30 GMT -->
</html>