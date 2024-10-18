@extends('admin.main')

@section('content')

    
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Banner</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Banner</li>
          <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $title }}</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col-2">Tool</th>
                  
                  </tr>
                </thead>
                <tbody>

                    @foreach($banners as $key => $banner)
                    <tr>
                        <th scope="row">{{ $banner->id }}</th>
                        <td>{{ $banner->name }}</td>
                        
                        <td>{{ $banner->description }}</td>
                        <td><img width="60px" height="60px" src="/banners/{{ $banner->image }}" alt=""></td>
                  
                        <td>
                            <a href="{{ route('banner_show',['id'=>$banner->id]) }}"><button class="btn btn-primary btn-sm">Edit</button></a>
                            <a href="{{ route('banner_delete',['id'=>$banner->id]) }}"><button class="btn btn-danger btn-sm">Delete</button></a>
                        </td>
                       
                      </tr>
                      
                    @endforeach
                
                
                
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

</section>

</main><!-- End #main -->

    
@endsection