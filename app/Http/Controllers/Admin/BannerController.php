<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function create(){
        return view('admin.banner.add',[
            'title'=>'Thêm banner',
        ]);
    }


    public function store(Request $request){

        $request->validate([
            'image' => 'required|max:2048', // Giới hạn loại file và dung lượng
        ]);
       
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension(); // Tạo tên file duy nhất
            $file->move(public_path('banners'), $fileName); 

      
        BannerModel::create([
            'name' => $request->input('name'),
            'image' => $fileName,
            'description' => $request->input('description'),
        ]);

        return redirect()->back()->with('message','Thêm banner thành công');
    }


    public function display(){

        $banners = BannerModel::all();

        return view('admin.banner.list',[
            'title'=>'Danh sách banner',
        ])->with('banners',$banners);
    }


    public function show($id){
        $data = BannerModel::find($id);
        return view('admin.banner.edit',[
            'title' => 'Sửa banner',
            'id' => $data,
        ])->with('banners',$data);
    }

    public function update(Request $request,$id){
        $request->validate([
            'image' => 'required|max:2048', 
        ]);
       
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension(); 
            $file->move('banners', $fileName); 


            $banner = BannerModel::findOrFail($id);
            $banner->name = $request->input('name');
            $banner->image = $fileName;
            $banner->description = $request->input('description');

            $banner->save();

            return redirect()->route('banner_list')->with('message','Sửa banner thành công');
    }


    public function destroy($id){
        $data = BannerModel::find($id);
        $data->delete();
        return redirect()->back()->with('message','Xóa banner thành công');
    }
}
