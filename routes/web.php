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
    Route::post('/api/store',[AdminController::class,'store']);
    Route::get('/admin/dashboard', AdminController::class);
    Route::post('/store-data', 'AdminController@storeData');
    Route::get('/admin/home', AdminController::class);

});

Route::get('/',[AdminController::class, 'displayData']);