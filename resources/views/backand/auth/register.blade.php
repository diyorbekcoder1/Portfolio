<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>

    <!-- Global stylesheets -->
    <link href="{{asset('/assets/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('asset/css/ltr/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('/assets/demo/demo_configurator.js')}}"></script>
    <script src="{{asset('/asset/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('asset/js/app.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-dark navbar-static py-2">
    <div class="container-fluid">
        <div class="navbar-brand">
            <a href="index.html" class="d-inline-flex align-items-center">
                <img src="../../../assets/images/logo_icon.svg" alt="">
                <img src="../../../assets/images/logo_text_light.svg" class="d-none d-sm-inline-block h-16px ms-3"
                     alt="">
            </a>
        </div>

        <div class="d-flex justify-content-end align-items-center ms-auto">
            <ul class="navbar-nav flex-row">


                <li class="nav-item">
                    <a href="{{route('login')}}" class="navbar-nav-link navbar-nav-link-icon rounded ms-1">
                        <div class="d-flex align-items-center mx-md-1">
                            <i class="ph-user-circle"></i>
                            <span class="d-none d-md-inline-block ms-2">Login</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Registration form -->
                <form method="post" action="{{ route('register') }}" class="flex-fill">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="text-center mb-3">
                                        <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                                            <img src="../../../assets/images/logo_icon.svg" class="h-48px" alt="">
                                        </div>
                                        <h5 class="mb-0">Create account</h5>

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input type="text" name="name" class="form-control" placeholder="Typing..">
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-user-circle text-muted"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <div class="form-control-feedback form-control-feedback-start">
                                            <input type="text" name="username" class="form-control" placeholder="Typing..">
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-user-circle text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Your email</label>
                                                <div class="form-control-feedback form-control-feedback-start">
                                                    <input type="email" name="email" class="form-control" placeholder="Typing..">
                                                    <div class="form-control-feedback-icon">
                                                        <i class="ph-at text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <div class="form-control-feedback form-control-feedback-start">
                                                    <input type="password" name="password" class="form-control"
                                                           placeholder="Typing..">
                                                    <div class="form-control-feedback-icon">
                                                        <i class="ph-lock text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Password Confirmation</label>
                                                <div class="form-control-feedback form-control-feedback-start">
                                                    <input type="password" name="password_confirmation" class="form-control"
                                                           placeholder="Typing..">
                                                    <div class="form-control-feedback-icon">
                                                        <i class="ph-lock text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>

                                <div class="card-body text-end border-top">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="ph-plus me-2"></i>
                                        Create account
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /registration form -->

            </div>
            <!-- /content area -->


            <!-- Footer -->

            <!-- /footer -->

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>




</body>
</html>
