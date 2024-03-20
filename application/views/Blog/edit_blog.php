<!DOCTYPE html>
<html lang="en">

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
  <link rel="stylesheet" type="text/css" href="assets/vendor/quill/css/quill.snow.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script src="https://cdn.tiny.cloud/1/c1gvghf9a50nhfs4r15amqmkra3k2nynjejiovp81x7e0g03/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
</head>

<body>
  <?php $this->load->view('header') ?>
  <main>

    <!-- =======================
Post edit START -->
    <section class="py-4">
      <div class="container">
        <div class="row pb-4">
          <div class="col-12">
            <!-- Title -->
            <h1 class="mb-0 h2">Edit post</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <!-- Chart START -->
            <div class="card border h-100">
              <!-- Card body -->
              <div class="card-body">
                <!-- Form START -->
                <form action="<?= base_url('update') ?>" enctype="multipart/form-data" method='POST'>
                  <!-- Main form -->
                  <input type="hidden" name="blog_id" value="<?=$blog['blog_id']?>">
                  <div class="row">
                    <div class="col-12">
                      <!-- Post name -->
                      <div class="mb-3">
                        <label class="form-label">Post name</label>
                        <input required name="post_name" type="text" class="form-control" value="<?= $blog['title'] ?>">
                      </div>
                    </div>

                    <div class="col-12">
                      <!-- Post name -->
                      <div class="mb-3">
                        <label class="form-label">Post Slug</label>
                        <input required name="slug" type="text" class="form-control" value="<?= $blog['slug'] ?>">
                      </div>
                    </div>
                    <!-- Post type START -->
                    <div class="col-12">
                      <div class="mb-3">
                        <label class="form-label">Post type</label>
                        <div class="d-flex flex-wrap gap-3">
                          <!-- Post type item -->
                          <div class="flex-fill">
                            <input type="radio" class="btn-check" name="poll" value="Post" id="option">
                            <label class="btn btn-outline-light w-100" for="option">
                              <i class="bi bi-chat-left-text fs-1"></i>
                              <span class="d-block"> Post </span>
                            </label>
                          </div>
                          <!-- Post type item -->
                          <div class="flex-fill">
                            <input type="radio" class="btn-check" name="poll" value="Question" id="option2">
                            <label class="btn btn-outline-light w-100" for="option2">
                              <i class="bi bi-patch-question fs-1"></i>
                              <span class="d-block"> Question </span>
                            </label>
                          </div>
                          <!-- Post type item -->
                          <div class="flex-fill">
                            <input type="radio" class="btn-check" name="poll" value="Poll" id="option3" checked>
                            <label class="btn btn-outline-light w-100" for="option3">
                              <i class="bi bi-chat-right-dots fs-1"></i>
                              <span class="d-block"> Poll </span>
                            </label>
                          </div>
                          <!-- Post type item -->
                          <div class="flex-fill">
                            <input type="radio" class="btn-check" name="poll" value="Images" id="option4">
                            <label class="btn btn-outline-light w-100" for="option4">
                              <i class="bi bi-ui-checks-grid fs-1"></i>
                              <span class="d-block"> Images </span>
                            </label>
                          </div>
                          <!-- Post type item -->
                          <div class="flex-fill">
                            <input type="radio" class="btn-check" name="poll" value="Video" id="option5">
                            <label class="btn btn-outline-light w-100" for="option5">
                              <i class="bi bi-camera-reels fs-1"></i>
                              <span class="d-block"> Video </span>
                            </label>
                          </div>
                          <!-- Post type item -->
                          <div class="flex-fill">
                            <input type="radio" class="btn-check" name="poll" value="Other" id="option6">
                            <label class="btn btn-outline-light w-100" for="option6">
                              <i class="bi bi-chat-square fs-1"></i>
                              <span class="d-block"> Other </span>
                            </label>
                          </div>
                          <!-- Post type item -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Post type END -->
                  <script>
                    function validateForm() {
                      var radioButtons = document.getElementsByName('poll');
                      var selected = false;
                      for (var i = 0; i < radioButtons.length; i++) {
                        if (radioButtons[i].checked) {
                          selected = true;
                          break;
                        }
                      }
                      if (!selected) {
                        alert('Please select a post type.');
                        radioButtons[0].focus(); // Focus on the first radio button

                        return false;
                      }
                      return true;
                    }
                  </script>
                  <!-- Short description -->
                  <div class="col-12">
                    <div class="mb-3">
                      <label class="form-label">Short description </label>
                      <textarea required name="short_description" class="form-control"
                        rows="3"><?= $blog['description'] ?></textarea>
                    </div>
                  </div>

                  <!-- Main toolbar -->
                  <div class="col-md-12">
                    <!-- Main toolbar -->
                    <div class="col-md-12">
                      <!-- Subject -->
                      <div class="mb-3">
                        <label class="form-label">Post body</label>
                        <textarea name="description" id="mytextarea"><?= $blog['blog'] ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-4">
                    <div class="mb-3">
                      <!-- Image -->
                      <div class="row align-items-center mb-2">
                        <div class="col-4 col-md-2">
                          <div class="position-relative">
                            <img src="<?= $blog['image'] ?>" alt="Selected Image" id="image-preview"
                              style="max-width: 100%; height: auto;">
                            <div class="position-absolute top-0 end-0 mt-n2 me-n2">
                              <a class="btn btn-icon btn-xs btn-danger" href="#"><i class="bi bi-x"></i></a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-8 col-md-10 position-relative">
                          <h6 class="my-2">Edit blog image</h6>
                          <label class="w-100" style="cursor:pointer;">
                            <span>
                              <input class="form-control stretched-link" type="file" name="image" id="my-image"
                                accept="image/gif, image/jpeg, image/png" value="<?= $blog['image'] ?>">
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <!-- Post name -->
                    <div class="mb-3">
                      <label class="form-label">Image Alt Keyword</label>
                      <input required name="alt_keyword" type="text" class="form-control"
                        value="<?= $blog['alt_keyword'] ?>">
                    </div>
                  </div>
                  <script>
                    document.addEventListener('DOMContentLoaded', function () {
                      const imageInput = document.getElementById('my-image');
                      const imagePreview = document.getElementById('image-preview');

                      imageInput.addEventListener('change', function (event) {
                        const file = event.target.files[0];
                        const reader = new FileReader();

                        reader.onload = function (e) {
                          imagePreview.src = e.target.result;
                        };

                        if (file) {
                          reader.readAsDataURL(file);
                        } else {
                          imagePreview.src = ''; // Reset image preview if no file selected
                        }
                      });
                    });
                  </script>
                  <div class="col-lg-7">
                    <!-- Tags -->
                    <div class="mb-3">
                      <label class="form-label">Tags</label>
                      <textarea name="tags" class="form-control" rows="1"><?= $blog['tags'] ?></textarea>
                    </div>
                  </div>

                  <div class="col-lg-5">
                    <!-- Message -->
                    <div class="mb-3">
                      <label class="form-label">Category</label>
                      <select class="form-select" name="category" aria-label="Default select example">
                        <option selected>Lifestyle</option>
                        <option value="1" selected>Technology</option>
                        <option value="2">Travel</option>
                        <option value="3">Business</option>
                        <option value="4">Sports</option>
                        <option value="5">Marketing</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check mb-3">
                      <input class="form-check-input" name="featured" type="checkbox" value="1" checked>
                      <label class="form-check-label" for="postCheck">
                        Make this post featured?
                      </label>
                    </div>


                    <div class="col-6">
                      <!-- Post name -->
                      <div class="mb-3">
                        <label class="form-label">Meta title</label>
                        <input required name="meta_title" type="text" class="form-control"
                          value="<?= $blog['meta_title'] ?>">
                      </div>
                    </div>
                    <div class="col-6">
                      <!-- Post name -->
                      <div class="mb-3">
                        <label class="form-label">Robots</label>

                        <select class="form-select" name="robots" aria-label="Default Robots">
                          <option value="">Select Robots</option>
                          <option value="noindex, nofollow" selected>noindex, nofollow</option>
                          <option value="nofollow, index">nofollow, index</option>
                          <option value="noindex, follow">noindex, follow</option>
                          <option value="index, follow">index, follow</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12 mb-3">
                      <label class="form-label">Meta Description</label>
                      <textarea class="form-control"
                        name="meta_description"><?= isset($blog['meta_description']) ? $blog['meta_description'] : '' ?></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12 mb-3">
                      <label class="form-label">Meta Keywords</label>
                      <textarea class="form-control"
                        name="meta_keywords"><?= isset($blog['meta_keywords']) ? $blog['meta_keywords'] : '' ?></textarea>
                    </div>
                  </div>




                  <!-- Crate post button -->
                  <div class="col-md-12 text-start">
                    <button class="btn btn-primary" type="submit">Save change</button>
                    <button class="btn btn-danger" type="delete">Delete post</button>
                  </div>
              </div>
              </form>
              <!-- Form END -->
            </div>
          </div>
          <!-- Chart END -->
        </div>
      </div>
      </div>
    </section>
    <!-- =======================
Post edit END -->

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
  <div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Vendors -->
  <script src="assets/vendor/apexcharts/js/apexcharts.min.js"></script>
  <script src="assets/vendor/quill/js/quill.min.js"></script>

  <!-- Template Functions -->
  <script src="assets/js/functions.js"></script>

</body>

</html>