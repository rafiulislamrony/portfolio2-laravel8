@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"> &times; </button>
            <strong>Error! <br> </strong>{{$error}}
        </div>
    @endforeach
@endif


@if (Session::has('error'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{session('error')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif

@if (Session::has('success'))
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>success!</strong> {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
