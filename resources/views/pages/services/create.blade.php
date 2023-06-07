
@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <form action="{{route('admin.services.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4 mt-3">
                        <div>
                            <label for="icon">
                                <h4>Font Awesome Icon</h4>
                            </label>
                            <input type="text" class="form-control" id="icon" name="icon">
                        </div>
                        <div class="mb-4 mt-3">
                            <label for="title">
                                <h4> Title</h4>
                            </label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-4 mt-3">
                            <label  class="d-block" for="description">
                                <h4>Description</h4>
                            </label>
                            <textarea class="w-100" name="description" id="description" cols="30" rows="10"></textarea>
                        </div>
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
