@extends('userview.main')

@section('content')

<div class="bg0 m-t-150 p-b-140">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                    All Products 
                </button>
            </div>

        </div>

        <div class="row isotope-grid" style="position: relative; height: 1721.6px;">
            @foreach($products as $key => $product)
                 @if($product->id_category == $data->id)
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women" style="position: absolute; left: 0%; top: 0px;">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <a href="{{ route('product_detail',['id'=>$product->id]) }}">
                                    <img src="/uploads/{{ $product->image }}" alt="IMG-PRODUCT">
                                </a>
                            
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="{{ route('product_detail',['id'=>$product->id]) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $product->name }}
                                    </a>

                                    <span class="stext-105 cl3">
                                        {{ $product->price }}
                                    </span>
                                </div>

                            
                            </div>
                        </div>
                    </div>
                 @endif
            @endforeach
           
          

          
        </div>

        <!-- Load more -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Load More
            </a>
        </div>
    </div>
</div>
    
@endsection