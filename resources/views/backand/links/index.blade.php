@extends('backand.layouts.app')
@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Skills </h5>
                    </div>
                    <div class="title m-l-5 m-1"><a
                            class="btn mr-1 mb-3 btn-primary btn-sm " href="{{route('links.create')}}">Social
                            add</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">№</th>
                                <th scope="col">Instagram</th>
                                <th scope="col">Facebook</th>
                                <th scope="col">Linkedin</th>
                                <th scope="col">Twitter</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($socels))
                                @foreach($socels as $key => $socel)
                                    <tr>
                                        <th scope="row">{{++$key}}</th>

{{--                                        <td style="width: 50px; height: 50px; border-radius: 50%;"><img--}}
{{--                                                style="width: 50px; height: 50px; border-radius: 50%;"--}}
{{--                                                src="{{ asset('uploads/'.$socel->image) }}"--}}
{{--                                                alt="">--}}
{{--                                        </td>--}}
                                        <td>{{$socel->instagram}}</td>
                                        <td>{{$socel->facebook}}</td>
                                        <td>{{$socel->linkedin}}</td>
                                        <td>{{$socel->twitter}}</td>
                                        <td>
                                            <form class="d-inline"
                                                  action="{{route('links.destroy', $socel->id)}}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Sure Want Delete?')"
                                                        class="btn btn-danger">Delete
                                                </button>
                                            </form>


                                        </td>

                                    </tr>

                                @endforeach

                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection
