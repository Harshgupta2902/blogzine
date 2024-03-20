<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from blogzine.webestica.com/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 08:33:48 GMT -->

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

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

	<main>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
						<div class="p-4 p-sm-5 bg-primary bg-opacity-10 rounded">
							<h2>Log in to your account</h2>
							<!-- Form START -->
							<form class="mt-4" action='<?= base_url('sign_in') ?>' method = 'POST'>
								<!-- Email -->
								<div class="mb-3">
									<label class="form-label" for="exampleInputEmail1">Email address</label>
									<input  name="email" type="email" class="form-control" id="exampleInputEmail1"
										placeholder="E-mail">
								</div>
								<!-- Password -->
								<div class="mb-3">
									<label class="form-label" for="exampleInputPassword1">Password</label>
									<input  name="password" type="password" class="form-control" id="exampleInputPassword1"
										placeholder="*********">
								</div>
								<?php echo validation_errors(); ?>
								<?php if(isset($error)) echo '<div>'.$error.'</div>'; ?>

								<!-- Button -->
								<div class="row align-items-center">
									<div class="col-sm-4">
										<button type="submit" class="btn btn-success">Sign me in</button>
									</div>
									<div class="col-sm-8 text-sm-end">
										<span>Don't have an account? <a href="signup.html"><u>Sign up</u></a></span>
									</div>
								</div>
							</form>
						</div>
					</div>	
				</div>
			</div>
		</section>
	</main>
</body>

</html>