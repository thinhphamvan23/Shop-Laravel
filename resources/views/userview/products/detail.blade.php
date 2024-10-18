@extends('userview.main')

@section('content')

<section class="sec-product-detail bg0 p-t-150 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots"><ul class="slick3-dots" role="tablist" style=""><li class="slick-active" role="presentation"><img src="/uploads/{{ $data->image }}"><div class="slick3-dot-overlay"></div></li><li role="presentation"><img src="/uploads/{{ $data->image }}"><div class="slick3-dot-overlay"></div></li><li role="presentation"><img src="/uploads/{{ $data->image }}"><div class="slick3-dot-overlay"></div></li></ul></div>
                        <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                        <div class="slick3 gallery-lb slick-initialized slick-slider slick-dotted">
                            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1215px;"><div class="item-slick3 slick-slide slick-current slick-active" data-thumb="/template/images/product-detail-01.jpg" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 405px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="/uploads/{{ $data->image }}" alt="IMG-PRODUCT">

                                    
                                </div>
                            </div><div class="item-slick3 slick-slide" data-thumb="/uploads/{{ $data->image }}" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide11" aria-describedby="slick-slide-control11" style="width: 405px; position: relative; left: -405px; top: 0px; z-index: 998; opacity: 0;">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="/uploads/{{ $data->image }}" alt="IMG-PRODUCT">

                                   
                                </div>
                            </div><div class="item-slick3 slick-slide" data-thumb="/uploads/{{ $data->image }}" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide12" aria-describedby="slick-slide-control12" style="width: 405px; position: relative; left: -810px; top: 0px; z-index: 998; opacity: 0;">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="/uploads/{{ $data->image }}" alt="IMG-PRODUCT">

                                   
                                </div>
                            </div></div></div>

                        </div>
                    </div>
                </div>
            </div>
                
            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        {{ $data->name }}
                    </h4>

                    <span class="mtext-106 cl2">
                       {{ $data->price }}
                    </span>

                    <p class="stext-102 cl3 p-t-23">
                        {{ $data->description }}
                    </p>
                    
                    <!--  -->
                    <div class="p-t-33">
                      
                        
                    <form action="{{ route('cart_add') }}" method="post">
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                    </div>

                                    <input class="mtext-104 cl3 txt-center num-product" type="number" name="num_product" value="1">

                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                    </div>
                                </div>
                                <input type="hidden" name="id_product" value="{{ $data->id }}">

                                <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                        @csrf	
                    </form>
                    </div>

                    <!--  -->
                    <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                       

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

     
    </div>

    <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
        <span class="stext-107 cl6 p-lr-25">
           Giày Thể Thao
        </span>

        <span class="stext-107 cl6 p-lr-25">
           Giày chính hãng
        </span>
    </div>
</section>
<section class="sec-relate-product bg0 p-t-45 p-b-105">
    <div class="container">
        <div class="p-b-45">
            <h3 class="ltext-106 cl5 txt-center">
                Related Products
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
               


                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="/template/images/product-08.jpg" alt="IMG-PRODUCT">

                            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Quick View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    Pieces Metallic Printed
                                </a>

                                <span class="stext-105 cl3">
                                    $18.96
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04" src="/template/images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/template/images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection