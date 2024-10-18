<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function create(){
       return  view('admin.category.add',[
            'title'=>'Thêm danh mục',
       ]);
    }

    public function store(Request $request){
       
       CategoryModel::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'active'=>$request->input('active'),
       ]);

       return redirect()->back()->with('message','Thêm danh mục thành công !');
    }

    public function display(){

      $categorys = CategoryModel::all();

      return view('admin.category.list',[
         'title' => 'Danh sách danh mục',
      ])->with('categorys',$categorys);
    }

    public function show($id){

      $data = CategoryModel::find($id);
      return view('admin.category.edit',[
         'title'=>'Sửa danh mục',
         'id'=> $data,
        
      ])->with('data', $data);

    }


 public function update(Request $request,$id){
      $category = CategoryModel::findOrFail($id);
     $category->name = $request->input('name');
     $category->description = $request->input('description');
     $category->active  = $request->input('active');

    
      $category->save();

      return redirect()->route('category_list')->with('message','Sửa danh mục thành công');
    }

    public function destroy($id){
      $data = CategoryModel::find($id);
      $data->delete();
      return redirect()->back()->with('message','Xóa danh mục thành công');
    }
}
