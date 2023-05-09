<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getLogin(){
        return view('admin.login');
    }
    public function login(LoginRequest $request){
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('index');
        }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);

    }
    public function show_dashboard(){
        return view('index');
    }

    public function get_page($id){
        if(view()->exists($id))
            return view($id);
        else
            return view('404');
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('admin.showlogin');
    }

}
