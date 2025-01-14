<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>Franchise Name Quotient</title>
  <link rel="icon" type="image/x-icon" href="../src/assets/img/Logo-NQ-3D-3.png" />
  <link href="../layouts/vertical-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
  <link href="../layouts/vertical-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
  <script src="../layouts/vertical-dark-menu/loader.js"></script>
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <link href="../layouts/vertical-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
  <link href="../src/assets/css/light/authentication/auth-cover.css" rel="stylesheet" type="text/css" />

  <link href="../layouts/vertical-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
  <link href="../src/assets/css/dark/authentication/auth-cover.css" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->

</head>

<body class="form">

  <!-- BEGIN LOADER -->
  <div id="load_screen">
    <div class="loader">
      <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
      </div>
    </div>
  </div>
  <!--  END LOADER -->

  <div class="auth-container d-flex">

    <div class="container mx-auto align-self-center">

      <div class="row">

        <div class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
          <div class="auth-cover-bg-image"></div>
          <div class="auth-overlay"></div>

          <div class="auth-cover">

            <div class="position-relative">

              <img src="../src/assets/img/Logo-NQ-3D-1.png" width="1350" height="1800" salt="auth-img">

              <h2 class="mt-5 text-white font-weight-bolder px-2">Franchise Name Quotient</h2>
              <p class="text-white px-2">Fundamental Intellegent</p>
            </div>

          </div>

        </div>

        <div
          class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
          <div class="card">
            <div class="card-body">


              <div class="row">
                <div class="col-md-12 mb-3">

                  <h2>Sign In</h2>
                  <p>Enter your email and password to login</p>

                </div>
                <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>


                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                  </div>
                </div>
                <div class="col-12">
                  <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                  </div>
                </div>
                <div class="col-12">
                  <div class="mb-3">
                    <div class="form-check form-check-primary form-check-inline">
                      <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                      <label class="form-check-label" for="form-check-default">
                        Remember me
                      </label>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="mb-4">
                    <button type="submit" class="btn btn-secondary w-100">SIGN IN</button>
                  </div>
                </div>
                </form>

                <div class="col-12 mb-4">
                  <div class="">
                    <div class="seperator">
                      <hr>
                      <div class="seperator-text"> <span>Or continue with</span></div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4 col-12"></div>

                <div class="col-sm-4 col-12">
                  <div class="mb-4">
                    <button class="btn  btn-social-login w-100 ">
                      <img src="../src/assets/img/google-gmail.svg" alt="" class="img-fluid">
                      <span class="btn-text-inner">Google</span>
                    </button>
                  </div>
                </div>
                <div class="col-sm-4 col-12"></div>

                <div class="col-12">
                  <div class="text-center">
                    <p class="mb-0">Dont't have an account ? <a href="{{ route('register') }}" class="text-warning">Sign Up</a></p>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->


</body>

</html>
