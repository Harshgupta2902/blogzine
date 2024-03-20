<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blogzine.webestica.com/dashboard-post-create.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 08:41:19 GMT -->

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
  <script src="https://cdn.tiny.cloud/1/c1gvghf9a50nhfs4r15amqmkra3k2nynjejiovp81x7e0g03/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
</head>

<body>

  <?php $this->load->view('header')?>

  <main>

    <section class="py-4">
      <div class="container">
        <div class="row pb-4">
          <div class="col-12">
            <!-- Title -->
            <h1 class="mb-0 h2">Create a post</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <!-- Chart START -->
            <div class="card border">
              <!-- Card body -->
              <div class="card-body">
                <!-- Form START -->
                <form action='<?= base_url('createPost') ?>' enctype="multipart/form-data" method='POST' onsubmit="return validateForm()">
                  <!-- Main form -->
                  <div class="row">
                    <div class="col-12">
                      <!-- Post name -->
                      <div class="mb-3">
                        <label class="form-label">Post name</label>
                        <input required name="post_name" type="text" class="form-control"
                          placeholder="Post name">
                      </div>
                    </div>

                    <div class="col-12">
                      <!-- Post name -->
                      <div class="mb-3">
                        <label class="form-label">Post Slug</label>
                        <input required name="slug" type="text" class="form-control"
                          placeholder="Post Slug">
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
                            <input type="radio" class="btn-check" name="poll" value="Poll" id="option3">
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
                        <textarea required name="short_description" class="form-control" rows="3" placeholder="Add description"></textarea>
                      </div>
                    </div>

                    <!-- Main toolbar -->
                    <div class="col-md-12">
                      <!-- Subject -->
                      <div class="mb-3">
                        <label class="form-label">Post body</label>
                        <textarea name="description" id="mytextarea"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="mb-3">
                        <!-- Image -->
                        <div class="position-relative">
                          <h6 class="my-2">Upload post image here, or<a href="#!" class="text-primary"> Browse</a></h6>
                          <label class="w-100" style="cursor:pointer;">
                            <span>
                              <input class="form-control stretched-link" type="file" name="image" id="image"
                                accept="image/gif, image/jpeg, image/png">
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>
                      <div class="col-12">
                        <!-- Post name -->
                        <div class="mb-3">
                          <label class="form-label">Image Alt Keyword</label>
                          <input required name="alt_keyword" type="text" class="form-control"
                            placeholder="Alt Keyword">
                        </div>
                      </div>
                    <div class="col-lg-7">
                      <!-- Tags -->
                      <div class="mb-3">
                        <label class="form-label">Tags</label>
                        <textarea name="tags" class="form-control" rows="1" placeholder="Tags"></textarea>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <!-- Message -->
                      <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select" name="category" aria-label="Default select example">
                          <option selected>Lifestyle</option>
                          <option value="1">Technology</option>
                          <option value="2">Travel</option>
                          <option value="3">Business</option>
                          <option value="4">Sports</option>
                          <option value="5">Marketing</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-check mb-3">
                        <input class="form-check-input" name="featured" type="checkbox" value="1" id="postCheck">
                        <label class="form-check-label" for="postCheck">
                          Make this post featured?
                        </label>
                      </div>
                    </div>

                    <div class="col-6">
                        <!-- Post name -->
                        <div class="mb-3">
                          <label class="form-label">Meta title</label>
                          <input required name="meta_title" type="text" class="form-control"
                            placeholder="Meta title">
                        </div>
                      </div>
                      <div class="col-6">
                        <!-- Post name -->
                        <div class="mb-3">
                          <label class="form-label">Robots</label>

                          <select class="form-select" name="robots" aria-label="Default Robots">
                              <option value="">Select Robots</option>
                              <option value="noindex, nofollow">noindex, nofollow</option>
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
                      <textarea type="text" class="form-control" name="meta_description" placeholder="Enter meta Description"></textarea>
                      </div>
                    </div>

                      
                    <div class="row">
                      <div class="col-12 mb-3">
                      <label class="form-label">Meta Keywords</label>
                      <textarea type="text" class="form-control" name="meta_keywords" placeholder="Enter meta Keywords"></textarea>
                      </div>
                    </div>
                    <!-- Create post button -->
                    <div class="col-md-12 text-start">
                      <button class="btn btn-primary w-100" type="submit">Create post</button>
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

  </main>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>