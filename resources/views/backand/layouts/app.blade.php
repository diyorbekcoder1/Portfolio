<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    @include('backand.layouts.partials.meta')
    <title>Portfolio</title>
</head>

<body>
<!-- Main navbar -->
@include('backand.layouts.partials.navbar')
<!-- /main navbar -->
<!-- Page content -->
<div class="page-content">
    <!-- Main sidebar -->
    @include('backand.layouts.partials.sidebar')
    <!-- /main sidebar -->
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Page header -->
            @include('backand.layouts.partials.header')
            <!-- /page header -->
            <!-- Content area -->
            <div class="content">
                <!-- Dashboard content -->
                <div class="row">
                    @yield('content')
                </div>
                <!-- /dashboard content -->
            </div>
            <!-- Footer -->
            @include('backand.layouts.partials.footer')
            <!-- /footer -->
        </div>
    </div>
</div>
<!-- Notifications -->
@include('backand.layouts.partials.notifications')
<!-- /notifications -->
<!-- Demo config -->
@include('backand.layouts.partials.config')
<!-- /demo config -->

</body>
</html>
