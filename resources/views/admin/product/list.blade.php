@extends('admin.main')

@section('content')
    
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sản phẩm</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Sản phẩm</li>
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
                    <th scope="col">Price</th>
                    <th scope="col">Active</th>
                    <th scope="col">Id_Category</th>
                    <th scope="col-2">Tool</th>
                  
                  </tr>
                </thead>
                <tbody>

                    @foreach($products as $key => $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        
                        <td>{{ $product->description }}</td>
                        <td><img width="60px" height="60px" src="/uploads/{{ $product->image }}" alt=""></td>
                        <td>{{ $product->price }}</td>

                        <td>{{ $product->active }}</td>
                        <td>{{ $product->id_category }}</td>

                        <td>
                            <a href="{{ route('product_edit',['id'=>$product->id]) }}"><button class="btn btn-primary btn-sm">Edit</button></a>
                            <a href="{{ route('product_delete',['id'=>$product->id]) }}"><button class="btn btn-danger btn-sm">Delete</button></a>
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