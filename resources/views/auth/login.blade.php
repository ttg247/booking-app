<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="{{ asset('images/logo.svg" alt="logo') }}">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
					<form class="pt-3" method="POST" action={{ route('login') }}>
						@csrf
						<div class="form-group">
							<input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="mt-3 d-grid gap-2">
							<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
						</div>
						<div class="my-2 d-flex justify-content-between align-items-center">
							<div class="form-check">
								<label class="form-check-label text-muted">
								<input type="checkbox" class="form-check-input"> Keep me signed in </label>
							</div>
						<a href="#" class="auth-link text-black">Forgot password?</a>
						</div>
						<div class="mb-2 d-grid gap-2">
							  <a href="{{ url('auth/google') }}" class="btn btn-block btn-danger auth-form-btn">
                  <i class="ti-google me-2"></i>Connect using Google 
                </a>
						</div>
						<div class="mb-2 d-grid gap-2">
							<a href="{{ url('auth/facebook') }}" class="btn btn-block btn-facebook auth-form-btn">
                <i class="ti-facebook me-2"></i>Connect using facebook 
              </a>
						</div>
						<div class="text-center mt-4 font-weight-light"> 
							Don't have an account? 
							<a href="{{ route('register') }}" class="text-primary">Create</a>
						</div>
					</form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>
    <!-- endinject -->
  </body>
</html>