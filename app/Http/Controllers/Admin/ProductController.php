<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        $categorys = CategoryModel::all();
        return view('admin.product.add',[
            'title'=>'Thêm sản phẩm',
        ])->with('categorys',$categorys);
    }


    public function store(Request $request){

        $request->validate([
            'image' => 'required|max:2048', // Giới hạn loại file và dung lượng
        ]);
       
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension(); // Tạo tên file duy nhất
            $file->move(public_path('uploads'), $fileName); // Di chuyển file tới thư mục uploads

      
        
       
        ProductModel::create([
            'name' => $request->input('name'),
            'id_category'=>$request->input('id_category'),
            'description'=>$request->input('description'),
            'image'=>$fileName,
            'price'=>$request->input('price'),
            'active'=>$request->input('active')
        ]);

        return redirect()->back()->with('message','Thêm sản phẩm thành công');
    }


    public function display(){
        $products = ProductModel::all();
       return  view('admin.product.list',[
            'title'=>'Danh sách sản phẩm'
       ])->with('products',$products);
    }


    public function edit($id){
        $data = ProductModel::find($id);
        $categorys = CategoryModel::all();
        return view('admin.product.edit',[
            'title'=>'Sửa sản phẩm',
            'id'=>$data
        ])->with('data',$data)
            ->with('categorys',$categorys);
    }


    public function update(Request $request,$id){


        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png|max:2048', // Giới hạn loại file và dung lượng
        ]);
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension(); // Tạo tên file duy nhất
        $file->move('uploads', $fileName); // Di chuyển file tới thư mục uploads


        $product = ProductModel::findOrFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->image = $fileName;
        $product->price = $request->input('price');
        $product->active = $request->input('active');
        $product->save();
        return redirect()->route('product_list')->with('message','Sửa danh mục thành công');

    }


    public function destroy($id){
        $data = ProductModel::find($id);
        $data->delete();
        return redirect()->back()->with('message','Xóa sản phẩm thành công');
    }
}
