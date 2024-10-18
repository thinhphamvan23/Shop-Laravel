@extends('admin.main')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Danh mục</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
        <li class="breadcrumb-item">Sản phẩm</li>
        <li class="breadcrumb-item active">{{ $title }}</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-10">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $title }}</h5>

          <!-- General Form Elements -->
          <form method="POST" action="{{ route('admin_cart_update',['id'=>$data->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" value="{{ $data->name }}">
              </div>
            </div>
          
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-10">
                <input class="form-control" name="address" type="text" id="formFile" value="{{ $data->address }}">
              </div>
            </div>

          
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Total_price</label>
              <div class="col-sm-10">
                <input class="form-control" name="total_price" type="number" id="formFile" value="{{ $data->total_price }}">
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Payment</label>
              <div class="col-sm-10">
                <input class="form-control" name="payment" type="text" id="formFile" value="{{ $data->payment }}">
              </div>
            </div>


           
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Order_status</label>
              <div class="col-sm-10">
                <select name="order_status">
                  <option value="Đặt hàng">Đặt hàng</option>
                  <option value="Đơn hàng đã được duyệt">Duyệt đơn hàng</option>

                </select>
               
              </div>
            </div>

             



            <div class="row mb-3">
             
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Duyệt đơn hàng</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>
  </div>
</section>
</main><!-- End #main -->
@endsection