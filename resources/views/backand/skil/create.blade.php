@extends('backand.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12 col-xl-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>Skills</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" method="post" action="{{route('skills.store')}}"
                                      enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <label for="form_name">Name</label>
                                            <input id="form_name" type="text" name="name"
                                                   class="form-control  @error('name') is-invalid @enderror"
                                                   placeholder="Please enter your address *"
                                                   data-error="address is required."
                                                   value="{{old('name')}}">

                                            @error('name')
                                            <span style="color: red">{{$message}} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <label for="form_name">Percent</label>
                                            <input id="form_name" type="number" name="percent"
                                                   class="form-control  @error('percent') is-invalid @enderror"
                                                   placeholder="Please enter your address *"
                                                   data-error="address is required."
                                                   value="{{old('percent')}}">

                                            @error('percent')
                                            <span style="color: red">{{$message}} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div style="margin-top: 20px;">

                                        <button type="submit" class="btn btn-primary ms-3">Submit <i
                                                class="ph-paper-plane-tilt ms-2"></i></button>
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
