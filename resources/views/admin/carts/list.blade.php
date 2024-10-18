@extends('admin.main')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1> Đơn hàng</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Đơn hàng</li>
          <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-15">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $title }}</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Total_price</th>
                    <th scope="col">Payment</th>                 
                    <th scope="col">Order_status</th>
                    <th scope="col-2">Tool</th>
                  
                  </tr>
                </thead>
                <tbody>

                    @foreach($oders as $key => $oder)
                    <tr>
                        <th scope="row">{{ $oder->id }}</th>
                        <td>{{ $oder->name }}</td>                     
                        <td>{{ $oder->address }}</td>
                        <td>{{ $oder->total_price }}</td>
                        <td>{{ $oder->payment }}</td>
                        <td>
                        @if($oder->order_status == "Đặt hàng")
                        <button class="btn btn-danger">{{ $oder->order_status }}</button>
                        @else
                        <button class="btn btn-success">{{ $oder->order_status }}</button>
                        @endif
                      </td>

                        <td>
                            <a href="{{ route('admin_cart_show',['id'=>$oder->id]) }}"><button class="btn btn-primary btn-sm">Xem chi tiết</button></a>
                            <a href="{{ route('admin_cart_delete',['id'=>$oder->id]) }}"><button class="btn btn-danger btn-sm">Delete</button></a>
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