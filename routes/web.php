<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\LoginController;
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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::post('/create-post',[AdminController::class,'store_post']);
    Route::get('/admin/dashboard', AdminController::class);
    Route::get('/admin/home', AdminController::class);
    Route::get('/admin/posts', AdminController::class);
    
});



Route::get('/',[AdminController::class, 'displayHomeData']);