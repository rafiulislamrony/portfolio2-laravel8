 @extends('layouts.admin_layout')

 @section('content')
     <main>
         <div class="container-fluid px-4">
             <h1 class="mt-4">Dashboard</h1>
             <ol class="breadcrumb mb-4">
                 <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                 <li class="breadcrumb-item active">Dashboard</li>
             </ol>
             <h1>This is dashboard</h1>
             <div style="height: 100vh"></div>
             <div class="card mb-4">
                 <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the
                     static navigation demo.</div>
             </div>
         </div>
     </main>
 @endsection
