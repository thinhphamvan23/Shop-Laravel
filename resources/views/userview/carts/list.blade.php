@extends('userview.main')

@section('content')

<form class="col m-t-150" action="{{ route('cart_create') }}" method="POST">
      
    <div class="row m-t-150">
        <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
            <div class="m-l-25 m-r--38 m-lr-0-xl">

              @if(!empty($productCart) && count($productCart) !== 0)
                <div class="wrap-table-shopping-cart">
                    <table class="table-shopping-cart">
                        <tbody><tr class="table_head">
                            <th class="column-1">Product</th>
                            <th class="column-2"></th>
                            <th class="column-3">Price</th>
                            <th class="column-4">Quantity</th>
                            <th class="column-5">Total</th>
                            <th class="column-6">Tool</th>
                        </tr>
                  


                            @php
                                $total = 0;
                            @endphp
                                        
                            @foreach($productCart as $key => $product)

                                @php
                                    $priceEnd = $product->price * $carts[$product->id];
                                    $total += $priceEnd;
                                @endphp

                                <tr class="table_row">
                                <td class="column-1">
                                    <div class="how-itemcart1">
                                        <img src="/uploads/{{ $product->image }}" alt="IMG">
                                    </div>
                                </td>
                                <td class="column-2">{{ $product->name }}</td>
                                <td class="column-3">{{ $product->price }}</td>
                                <td class="column-4">
                                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num_product[{{ $product->id }}]" value="{{  number_format($carts[$product->id], 0, '', '.')  }}">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>
                                </td>
                                <td class="column-5">{{  number_format($priceEnd, 0, '', '.') }} VNĐ</td>
                                <td class="column-6"><a href="{{ route('cart_delete',['id'=>$product->id]) }}">Xóa</a></td>
                            </tr>
                            @endforeach
                        
                            
                        </tbody>
                    </table>
                </div>

                <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                    

                    <input type="submit" value="Update Cart" formaction="{{ route('update_cart') }}" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                    
                    @csrf
                </div>
            </div>
        </div>

        <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
        
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Cart Totals
                    </h4>



                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                            <span class="stext-110 cl2">
                            Nhập tên:
                            </span>
                        </div>

                        <div>
                            <input class="form-control" style="border: 1px solid #000" type="text" name="name">
                    </div>
                    </div>

                

                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                            <span class="stext-110 cl2">
                            Nhập địa chỉ:
                            </span>
                        </div>
                        <div>
                            <input class="form-control" style="border: 1px solid #000" type="text" name="address">
                        </div>
                    </div>

                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                            <span class="stext-110 cl2">
                                Payment
                            </span>
                        </div>

                        <select style="padding: 5px" name="payment" >
                            <option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
                            <option value="MOMO">MOMO</option>
                        </select>
                    </div>

                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208">
                            <span class="mtext-101 cl2">
                                Total:
                            </span>
                        </div>

                        <div class="size-209 p-t-1">
                            <span class="mtext-110 cl2">
                            {{ number_format($total, 0, '', '.')  }} VNĐ
                            <input type="hidden" name="total_price" value="{{ $total }}">
                            </span>
                        </div>
                    </div>

                <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                    Proceed to Checkout
                </button>

             @else
                <div class="text-center"><h1>Giỏ hàng rỗng</h1></div>
            @endif
            </div>
        </div>
    </div>


         
</form>


    
@endsection