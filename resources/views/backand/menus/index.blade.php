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
                        <h5>Menus </h5>
                    </div>
                    <div class="title m-l-5 m-1"><a
                            class="btn mr-1 mb-3 btn-primary btn-sm " href="{{route('menu.create')}}">Menus
                            add</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">№</th>
                                <th scope="col">Name</th>
                                <th scope="col">Link</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(isset($menus))
                                @foreach($menus as $key => $menu)
                                    <tr>
                                        <th scope="row">{{++$key}}</th>


                                        <td>{{$menu->name}}</td>
                                        <td>{{$menu->link}}</td>

                                        <td>
                                            {{--                                            <a href="{{route('links.edit', $socel)}}"--}}
                                            {{--                                               class="btn btn-primary">Edit</a>--}}
                                            <form class="d-inline"
                                                  action="{{route('menu.destroy', $menu->id)}}"
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
