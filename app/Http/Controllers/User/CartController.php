<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\OderModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function cart(){
        $categorys = CategoryModel::all();
        $products = ProductModel::all();

        $carts=  Session::get('carts'); 

      if(is_null($carts))return view('userview.carts.list',[
            'title'=>'Giỏ hàng', 
      ]) ->with('categorys',$categorys )
         ->with('products',$products);

          $id_product = array_keys($carts);

        $productCart = ProductModel::select('id','name','price','image')->where('active',1)->whereIn('id',$id_product)->get();
     
        return view('userview.carts.list',[

            'title'=>'Giỏ hàng',
            'productCart'=>$productCart,
            'carts'=> $carts,

        ])
        
        ->with('categorys',$categorys )
        ->with('products',$products);
    }




    public function add(Request $request){
     
        $qty = (int)$request->input('num_product');
        $id_product = (int)$request->input('id_product');
        
        if ($qty <= 0 || $id_product <= 0) {
            return false;
        }

        
        $carts = Session::get('carts'); 
      

       if(is_null($carts)){
            Session::put('carts',[
                $id_product => $qty,
            ]);
            return redirect()->route('cart');
       }

        $exists = Arr::exists($carts, $id_product);
      
        if ($exists) {
       
            $carts[$id_product] =  $carts[$id_product] + $qty;
                Session::put('carts', $carts);
                return redirect()->route('cart');
        } 

        $carts[$id_product] =$qty;
        Session::put('carts',$carts);

        return redirect()->route('cart');

    }




    public function update(Request $request){

        Session::put('carts',$request->input('num_product'));

        return redirect()->route('cart');
    }


    public function remove($id){
        $carts =  Session::get('carts'); 
        unset($carts[$id]);
        Session::put('carts',$carts);

        return redirect()->route('cart');
    }


    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        OderModel::create([
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'payment'=>$request->input('payment'),
            'total_price'=>$request->input('total_price'),
            'order_status'=>'Đặt hàng',
        ]);

        Session::forget('carts'); // Xóa giỏ hàng trong session


        return redirect()->route('cart');
    }


}
