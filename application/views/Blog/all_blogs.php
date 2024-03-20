<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blogzine.webestica.com/dashboard-post-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 08:41:17 GMT -->
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
  <link rel="stylesheet" type="text/css" href="assets/vendor/quill/css/quill.snow.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
<?php $this->load->view('header') ?>

<main>

<!-- =======================
Post list START -->
<section class="py-4">
	<div class="container">
    <div class="row pb-4">
			<div class="col-12">
        <!-- Title -->
				<div class="d-sm-flex justify-content-sm-between align-items-center">
					<h1 class="mb-2 mb-sm-0 h2">Post List <span class="badge bg-primary bg-opacity-10 text-primary"><?= $totalBlogs ?></span></h1>			
					<a href="<?= base_url('create') ?>" class="btn btn-sm btn-primary mb-0"><i class="fas fa-plus me-2"></i>Add a post</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
          <div class="row g-4 mb-4">
            <div class="col-sm-4 col-lg-2">
              <!-- Card START -->
              <div class="card card-body border h-100">
                <!-- Icon -->
                <div class="fs-3 text-start text-success">
                  <i class="bi bi-file-earmark-text"></i>
                </div>
                <!-- Content -->
                <div class="ms-0">
                  <h3 class="mb-0">305</h3>
                  <h6 class="mb-0">Document</h6>
                </div>
              </div>
              <!-- Card END -->
            </div>
            <div class="col-sm-4 col-lg-2">
              <!-- Card START -->
              <div class="card card-body border h-100">
                <!-- Icon -->
                <div class="fs-3 text-start text-success">
                  <i class="bi bi-camera-reels"></i>
                </div>
                <!-- Content -->
                <div class="ms-0">
                  <h3 class="mb-0">120</h3>
                  <h6 class="mb-0">Videos</h6>
                </div>
              </div>
              <!-- Card END -->
            </div>
            <div class="col-sm-4 col-lg-2">
              <!-- Card START -->
              <div class="card card-body border h-100">
                <!-- Icon -->
                <div class="fs-3 text-start text-success">
                  <i class="bi bi-image"></i>
                </div>
                <!-- Content -->
                <div class="ms-0">
                  <h3 class="mb-0">475</h3>
                  <h6 class="mb-0">Images</h6>
                </div>
              </div>
              <!-- Card END -->
            </div>
            <div class="col-lg-6">
              <!-- Card START -->
              <div class="card card-body border h-100">
                 <h3>Storage space </h3>
                 <div>
                  <div class="d-flex">
                    <h6 class="mt-0">Storage 80%</h6>
                    <span class="ms-auto">6.80GB of 10GB</span>
                  </div>
                  <div class="progress progress-percent-bg progress-md">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <!-- Card END -->
                </div>
              </div>
            </div>
          </div>
          <!-- Post list table START -->
          <div class="card border bg-transparent rounded-3">

            <!-- Card body START -->
            <div class="card-body p-3">

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

              <!-- Post list table START -->
              <div class="table-responsive border-0">
                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                  <!-- Table head -->
                  <thead class="table-dark">
                    <tr>
                      <th scope="col" class="border-0 rounded-start">Post Name</th>
                      <th scope="col" class="border-0">Author Name</th>
                      <th scope="col" class="border-0">Published Date</th>
                      <th scope="col" class="border-0">Category</th>
                      <th scope="col" class="border-0">Status</th>
                      <th scope="col" class="border-0 rounded-end">Action</th>
                    </tr>
                  </thead>

                  <!-- Table body START -->
                  <tbody >
                    <?php foreach ($allBlogs as $blogs) { ?>
                        <tr>
                      <td>
                        <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#"><?= $blogs['title'] ?></a></h6>
                      </td>
                      <td>
                        <h6 class="mb-0"><a href="#">Admin</a></h6>
                      </td>
                      <td><?= date('d-m-Y', strtotime($blogs['created_at'])) ?></td>

                      <td>
                        <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i><?= $blogs['category'] ?></a>
                      </td>
                      <td>
                      <span class="badge <?= $blogs['published'] == 0 ? "bg-warning text-warning" : "bg-success text-success" ?> bg-opacity-10  mb-2"><?= $blogs['published'] == 0 ? "Draft" : "Live" ?></span>
                      </td>
                      <td>
                        <div class="d-flex gap-2">
                        <a href="<?= base_url('deleteBlog?id=' . $blogs['id']) ?>" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="bi bi-trash"></i></a>
                          <a href="<?= base_url('editBlog?id=' . $blogs['id']) ?>" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
            </div>
          </div>
          <!-- Post list table END -->
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
<script src="assets/vendor/quill/js/quill.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from blogzine.webestica.com/dashboard-post-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 08:41:19 GMT -->
</html>