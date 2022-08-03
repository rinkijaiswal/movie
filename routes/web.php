<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){
    Route::get('/',function(){
        $login = session('admin');
        if($login == 'true'){
            return redirect('admin/dashboard');
        }else{
            return view('admin.login');
        }
    });
    Route::match(['get','post'],'login',[App\Http\Controllers\MovieController::class,'admin_login']);
    Route::get("dashboard",function(){
        return view('admin.dashboard');
    });
    Route::get('logout',[App\Http\Controllers\MovieController::class,'admin_logout']);
});

Route::prefix('course')->group(function(){
    Route::match(['get','post'],'create',[App\Http\Controllers\MovieController::class,'create']);
    Route::get('view',[App\Http\Controllers\MovieController::class,'view']);
});
