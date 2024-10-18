@extends('admin.main')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Danh mục</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
          <li class="breadcrumb-item">Danh mục</li>
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
            <form method="POST" action="{{ route('category_add') }}">
              @csrf
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control">
                </div>
              </div>
            
          
            
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                  <input class="form-control" name="description" type="text" id="formFile">
                </div>
              </div>

             
           


              <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Active</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="active" id="gridRadios1" value= 1 checked>
                    <label class="form-check-label" for="gridRadios1">
                      Có
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="active" id="gridRadios2" value= 0 >
                    <label class="form-check-label" for="gridRadios2">
                      Không
                    </label>
                  </div>
                 
                </div>
              </fieldset>
        
              <div class="row mb-3">
               
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit</button>
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

@if(Session::has('message'))
  
    <script>
        toastr.success("{{ Session::get('message') }}",'Success',{timeOut: 5000}))
    </script>

@endif
