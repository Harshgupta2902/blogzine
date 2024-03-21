<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blogzine.webestica.com/dashboard-post-categories.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 08:41:19 GMT -->

<head>
	<title>Blogzine - Blog and Magazine Bootstrap 5 Theme</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Bootstrap based News, Magazine and Blog Theme">
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="../fonts.gstatic.com/index.html">
	<link
		href="../fonts.googleapis.com/css2ccf1.css?family=Nunito+Sans:wght@400;700&amp;family=Rubik:wght@400;500;700&amp;display=swap"
		rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/apexcharts/css/apexcharts.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/overlay-scrollbar/css/OverlayScrollbars.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
	<?php $this->load->view('header') ?>

	<main>

		<!-- =======================
Main contain START -->
		<section class="py-4">
			<div class="container">
				<div class="row pb-4">
					<div class="col-12">
						<!-- Title -->
						<div class="d-sm-flex justify-content-sm-between align-items-center">
							<h1 class="mb-2 mb-sm-0 h2">Categories <span
									class="badge bg-primary bg-opacity-10 text-primary">
									<?= $totalCategory ?>
								</span></h1>
								<a href="#" class="btn btn-sm btn-primary mb-0" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
									<i class="fas fa-plus me-2"></i>Add new category
								</a>
						</div>
					</div>
				</div>
				<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form action="<?= base_url('addCategory')?>" method='POST'>
							<div class="mb-3">
								<label for="categoryName" class="form-label">Category Name</label>
								<input type="text" class="form-control" name="categoryName" required>
							</div>
							<button type="submit" class="btn btn-primary">Add Category</button>
							</form>
						</div>
						</div>
					</div>
				</div>
					<script>
						document.addEventListener('DOMContentLoaded', function () {
							const addCategoryModal = new bootstrap.Modal(document.getElementById('addCategoryModal'));

							// Show modal when Add new category button is clicked
							document.querySelector('.btn-add-category').addEventListener('click', function () {
							addCategoryModal.show();
							});
						});
					</script>
				<div class="row g-4">
					<?php foreach ($category as $category) { ?>
					<div class="col-md-6 col-xl-4">
						<div class="card border h-100">
							<!-- Card header -->
							<div class="card-header border-bottom p-3">
								<div class="d-flex align-items-center">
									<div class="icon-lg shadow bg-body rounded-circle">⛰️</div>
									<h3 class="mb-0 ms-3">
										<?= $category['name'] ?>
									</h3>
									<div class="d-flex justify-content-between">
										<div class="ms-3">
											<h5 class="mb-0">846</h5>
											<h6 class="mb-0 fw-light">Total posts</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body p-3">
								<p>Departure defective arranging rapturous did believe him all had supported.</p>
							</div>
							<div class="card-footer border-top text-center p-3">
								<a href="#" class="btn btn-primary-soft w-100 mb-0">View posts</a>
							</div>
						</div>
						<!-- Category item END -->
					</div>
					<?php } ?>

				</div>
			</div>
		</section>

	</main>

	<footer class="mb-3">
		<div class="container">
			<div class="card card-body bg-light">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-6">
						<!-- Copyright -->
						<div class="text-center text-lg-start">©2023 <a href="https://www.webestica.com/"
								class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
						</div>
					</div>
					<div class="col-lg-6 d-sm-flex align-items-center justify-content-center justify-content-lg-end">
						<!-- Language switcher -->
						<div class="dropup me-0 me-sm-3 mt-3 mt-md-0 text-center text-sm-end">
							<a class="dropdown-toggle text-body" href="#" role="button" id="languageSwitcher"
								data-bs-toggle="dropdown" aria-expanded="false">
								English Edition
							</a>
							<ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
								<li><a class="dropdown-item" href="#">English</a></li>
								<li><a class="dropdown-item" href="#">German </a></li>
								<li><a class="dropdown-item" href="#">French</a></li>
							</ul>
						</div>
						<!-- Links -->
						<ul
							class="nav text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
							<li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
							<li class="nav-item"><a class="nav-link pe-0" href="#">Cookies</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<script src="assets/vendor/apexcharts/js/apexcharts.min.js"></script>
	<script src="assets/vendor/overlay-scrollbar/js/OverlayScrollbars.min.js"></script>

	<script src="assets/js/functions.js"></script>

</body>

</html>