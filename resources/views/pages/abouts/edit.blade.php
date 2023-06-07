
@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>

            <form action="{{route('admin.abouts.update', $abouts->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>Image</h3>
                        <img class="img-thumbnail" style="height: 30vh" src="{{url($abouts->image)}}" alt="">
                        <input class="mt-3" type="file" id="bc_img" name="image">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div>
                            <label for="title1">
                                <h4>Title 1</h4>
                            </label>
                            <input type="text" class="form-control" id="title1" name="title1" value="{{$abouts->title1}}">
                        </div>
                        <div class="mb-4 mt-3">
                            <label for="title2">
                                <h4>Title2</h4>
                            </label>
                            <input type="text" class="form-control" id="title2" name="title2" value="{{$abouts->title2}}">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <h3>Description</h3>
                        <textarea class="form-control" name="description" rows="5">{{$abouts->description}}</textarea>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">
            </form>

            <div style="height: 100vh"></div>
            <div class="card mb-4">
                <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the
                    static navigation demo.</div>
            </div>
        </div>
    </main>
@endsection
