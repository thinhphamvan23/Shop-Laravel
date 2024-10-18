@extends('admin.main')

@section('content')
    
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Danh mục</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Danh mục</li>
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
                    <th scope="col">Active</th>
                    <th scope="col-2">Tool</th>
                  
                  </tr>
                </thead>
                <tbody>

                    @foreach($categorys as $key => $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                      
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->active }}</td>
                        <td>
                            <a href="{{ route('category_show',['id' => $category->id]) }}"><button class="btn btn-primary btn-sm">Edit</button></a>
                            <a href="{{ route('category_delete',['id' => $category->id]) }}"><button class="btn btn-danger btn-sm">Delete</button></a>
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