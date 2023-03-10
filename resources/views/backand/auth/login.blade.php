<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

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

<body class="bg-dark">

<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login card -->
                <form class="login-form"  method="post" action="{{ route('login') }}" >
                    @csrf
                    @method('post')
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                                    <img src="{{asset('/assets/images/logo_icon.svg')}}" class="h-48px" alt="">
                                </div>
                                <h5 class="mb-0">Login to your account</h5>

                            </div>

                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="text" name="username" class="form-control" placeholder="john@doe.com">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-user-circle text-muted"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="form-control-feedback form-control-feedback-start">
                                    <input type="password" name="password" class="form-control" placeholder="•••••••••••">
                                    <div class="form-control-feedback-icon">
                                        <i class="ph-lock text-muted"></i>
                                    </div>
                                </div>
                            </div>



                            <div class="d-flex align-items-center mb-3">


                                <a href="" class="ms-auto">Forgot password?</a>
                            </div>


                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100">Sign in</button>
                            </div>

                            <div class="text-center text-muted content-divider mb-3">
                                <span class="px-2">or sign in with</span>
                            </div>





                            <div class="mb-3">
                                <a href="{{route('register')}}" class="btn btn-danger w-100">Sign up</a>
                            </div>


                        </div>
                    </div>
                </form>
                <!-- /login card -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->


<!-- Demo config -->

<!-- /demo config -->

</body>
</html>
