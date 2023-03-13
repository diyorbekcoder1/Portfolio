@extends('backand.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xl-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>Blogs</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" method="post" action="{{route('skills.update',$per_edit)}}"
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
                                                   value="{{old('name', $per_edit->name)}}">

                                            @error('name')
                                            <span style="color: red">{{$message}} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <label for="form_name">Percent</label>
                                            <input id="form_name" type="text" name="percent"
                                                   class="form-control  @error('percent') is-invalid @enderror"
                                                   placeholder="Please enter your percent *"
                                                   data-error="percent is required."
                                                   value="{{old('percent', $per_edit->percent)}}">

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
