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
                                <form class="theme-form" method="post" action="{{route('links.store')}}"
                                      enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <label for="form_name">Instagram</label>
                                            <input id="form_name" type="text" name="instagram"
                                                   class="form-control  @error('instagram') is-invalid @enderror"
                                                   placeholder="Please enter your instagram *"
                                                   data-error="instagram is required."
                                                   value="{{old('instagram')}}">

                                            @error('instagram')
                                            <span style="color: red">{{$message}} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <label for="form_name">Facebook</label>
                                            <input id="form_name" type="text" name="facebook"
                                                   class="form-control  @error('facebook') is-invalid @enderror"
                                                   placeholder="Please enter your facebook *"
                                                   data-error="facebook is required."
                                                   value="{{old('facebook')}}">

                                            @error('facebook')
                                            <span style="color: red">{{$message}} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <label for="form_name">Linkedin</label>
                                            <input id="form_name" type="text" name="linkedin"
                                                   class="form-control  @error('linkedin') is-invalid @enderror"
                                                   placeholder="Please enter your linkedin *"
                                                   data-error="linkedin is required."
                                                   value="{{old('linkedin')}}">

                                            @error('linkedin')
                                            <span style="color: red">{{$message}} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <label for="form_name">Twitter</label>
                                            <input id="form_name" type="text" name="twitter"
                                                   class="form-control  @error('twitter') is-invalid @enderror"
                                                   placeholder="Please enter your twitter *"
                                                   data-error="twitter is required."
                                                   value="{{old('twitter')}}">

                                            @error('twitter')
                                            <span style="color: red">{{$message}} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Upload image</h5>
                                        </div>

                                        <div class="card-body">

                                            <input type="file" class="file-input" name="image" multiple="multiple">
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
