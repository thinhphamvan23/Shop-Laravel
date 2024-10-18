<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OderModel;
use Illuminate\Http\Request;

class adminCartController extends Controller
{
    //
    public function display(){

        $oders = OderModel::all();

        return view('admin.carts.list',[
            'title'=>'Danh sách đơn hàng',
        ])->with('oders',$oders);
    }


    public function destroy($id){
        $data = OderModel::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function show($id){

        $data = OderModel::find($id);

        return view('admin.carts.listbrowse',[
            'title'=>'Duyệt đơn hàng',
            'id'=>$data,
        ])->with('data',$data);
      
    }


    public function update(Request $request,$id){
        $data = OderModel::findOrFail($id);
        $data->order_status = $request->input('order_status');
        $data->save();
        return redirect()->route('cart_display');
    }
}
