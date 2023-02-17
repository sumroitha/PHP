<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;

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

Route::get('all-post',[RequestController::class,'getAllPost'])->name('post.all');
Route::get('single-post/{id}',[RequestController::class,'getSinglePost'])->name('post.single');
Route::get('add-post',[RequestController::class,'addPost'])->name('post.add');
Route::get('update-post',[RequestController::class,'updatePost'])->name('post.update');
Route::get('delete-post/{id}',[RequestController::class,'deletePost'])->name('post.delete');
Route::get('get-cbs',[RequestController::class,'getRequestCBS'])->name('get.cbs');