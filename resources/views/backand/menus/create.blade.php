@extends('backand.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12 col-xl-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>Socials</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" method="post" action="{{route('menu.store')}}"
                                      enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                    <div class="col-12">
                                        <div class="form-label-group">
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
                                    </div>
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <label for="form_name">Link</label>
                                            <input id="form_name" type="text" name="link"
                                                   class="form-control  @error('link') is-invalid @enderror"
                                                   placeholder="Please enter your link *"
                                                   data-error="link is required."
                                                   value="{{old('link')}}">

                                            @error('link')
                                            <span style="color: red">{{$message}} </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div style="margin-top: 20px;" class="block-header">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('javascript')
    <script src="{{asset('/assets/js/vendor/visualization/d3/d3.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendor/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{asset('/assets/demo/pages/uploader_bootstrap.js')}}"></script>
    <script src="{{asset('/assets/js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendor/uploaders/fileinput/fileinput.min.js')}}"></script>
    <script src="{{asset('/assets/js/vendor/uploaders/fileinput/plugins/sortable.min.js')}}"></script>
    <script src="{{asset('/assets/js/app.js')}}"></script>
    <script src="{{asset('/assets/demo/pages/uploader_bootstrap.js')}}"></script>
@endpush
