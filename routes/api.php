<?php


use App\Http\Controllers\User\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::controller(AuthController::class)
    ->prefix('auth')->as('auth.')
    ->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::get('login_with_token', 'loginWithToken');
    Route::post('send-verify-code', 'sendVerifyCode');
    Route::post('verify-code', 'verifyCode');
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('logout', 'logout');
        Route::post('add_info', 'addInfo');
    });
});
