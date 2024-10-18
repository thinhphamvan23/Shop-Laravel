<?php

namespace App\Http\Controllers\Admin\Login;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('admin.user.login',[
            'title' => 'Đăng nhập hệ thống'
        ]);
    }


    public function register(){
        return view('userview.login.register',[
            'title' => 'Đăng ký',
        ]) ;
    }


    public function create(Request $request){   

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=> Hash::make($request->input('password')),
            'lv'=>2,
        ]);

        return redirect()->route('login');
    }



    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
            
       if(Auth::attempt([
            'email'=> $request->input('email'),
            'password' => $request->input('password'),
       ])){
        $user = Auth::user(); // Lấy người dùng đã xác thực

        
        if ($user->lv == 1) {
                return redirect()->route('admin')->with('message', 'Đăng nhập thành công');
            }
         else if ($user->lv == 2) {
                return redirect()->route('main')->with('message', 'Đăng nhập thành công');
            }
             
       }


       else{
            return redirect()->back()->with('message', 'Email hoặc mật khẩu không chính xác');
       }

       
    }

    public function logout(Request $request): RedirectResponse
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('login');
        }



}
