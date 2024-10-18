<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        $categorys = CategoryModel::all();
        $products = ProductModel::all();

        $banners = BannerModel::all();
        return view('userview.home',[
            'title'=>'Cửa hàng giày đá bóng',
        ])  ->with('categorys',$categorys)
            ->with('products',$products)
            ->with('banners',$banners)
        ;   
    }

    public function detail($id){
        $data = ProductModel::find($id);
        $categorys = CategoryModel::all();
        $products = ProductModel::all();
        return view('userview.products.detail',[
            'title'=>'Chi tiết sản phẩm',
            'id'=>$data,
        ])->with('categorys',$categorys )
            ->with('products',$products)
            ->with('data',$data)
        ;
    }

  public function show_product($id){
    $data = CategoryModel::find($id);
    $categorys = CategoryModel::all();
    $products = ProductModel::all();
    return view('userview.products.product',[
        'title'=>'Sản phẩm của hãng '.$data->name,
        'id'=>$data
    ]) ->with('categorys',$categorys)
       ->with('products',$products)
       ->with('data',$data)
    ;
  }


}
