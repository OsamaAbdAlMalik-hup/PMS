<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::controller(AdminController::class)->group(function () {
    Route::middleware('guest:admin')->group(function (){
        Route::get('/login','getLogin')->name('admin.showlogin');
        Route::post('/login','login')->name('admin.login');
    });
    Route::middleware('auth:admin')->group(function (){
        Route::get('/','show_dashboard')->name('index');
        Route::get('/logout','logout')->name('admin.logout');
        Route::get('/{page}','get_page');
    });
});
