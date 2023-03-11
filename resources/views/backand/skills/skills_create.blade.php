@extends('backand.layouts.app')

@section('js')
    <link href="{{asset('/assets/fonts/inter/inter.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/assets/icons/phosphor/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('asset/css/ltr/all.min.css')}}" id="stylesheet" rel="stylesheet" type="text/css">


    <!-- Core JS files -->
    <script src="{{asset('/assets/demo/demo_configurator.js')}}"></script>
    <script src="{{asset('/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('/assets/js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendor/forms/selects/select2.min.js')}}"></script>

    <script src="{{asset('/assets/demo/pages/form_layouts.js')}}"></script>
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic layout</h5>
        </div>

        <div class="card-body">

        </div>

        <div class="card-body border-top">
            <form class="theme-form" method="post" action="{{route('skills.store')}}"
                  enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="mb-3">
                    <label for="form_name">Name</label>
                    <input id="form_name" type="text" name="name"
                           class="form-control  @error('name') is-invalid @enderror"
                           placeholder="Please enter your name *"
                           data-error="name is required."
                           value="{{old('name')}}">

                    @error('name')
                    <span style="color: red">{{$message}} </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="form_name">Percent</label>
                    <input id="form_name" type="text" name="percent"
                           class="form-control  @error('percent') is-invalid @enderror"
                           placeholder="Please enter your percent *"
                           data-error="percent is required."
                           value="{{old('percent')}}">

                    @error('percent')
                    <span style="color: red">{{$message}} </span>
                    @enderror
                </div>



                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit form <i class="ph-paper-plane-tilt ms-2"></i></button>
                </div>
            </form>
        </div>
    </div>




@endsection
