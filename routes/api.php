<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', 'AdminController@login');
Route::post('/logout', 'AdminController@logout')->middleware('auth:sanctum');
Route::post('/store',[AdminController::class,'store_hero']);

Route::get('/posts', [AdminController::class, 'getPosts']);
Route::get('/post/{id}', [AdminController::class, 'getPostById']);
Route::post('/createPost', [AdminController::class, 'createPost']);
// /createPost body
// {
//     "postTitle": "Your Title",
//     "postContent": "Your Content",
//     "postType":"test",
//     "postStatus":1,
//      "postFile":'path',
//   }

Route::post('/edit-post/{id}', [AdminController::class, 'updatePost']);
Route::delete('/post-delete/{id}', [AdminController::class, 'deletePost']);
// Route::get('/fetch-data', 'AdminController@fetchHeroData');
