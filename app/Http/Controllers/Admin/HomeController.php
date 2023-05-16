<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Imports\AdminsImport;
use App\Models\OrderRegister;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function show_dashboard(){
        return view('index');
    }

    public function get_page($id){
        if(view()->exists($id))
            return view($id);
        else
            return view('404');
    }

    public function import(){
        Excel::import(new AdminsImport(),request()->file('file'));
        return back();
    }


    public function logout(){
        auth()->logout();
        return redirect()->route('admin.showlogin');
    }
}
