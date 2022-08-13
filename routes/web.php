<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Category//
    Route::get('list/category', [CategoryController::class, 'index'])->name('list-cate');
    Route::get('create/category', [CategoryController::class, 'create'])->name('create-cate');
    Route::post('store/category', [CategoryController::class, 'store'])->name('store-cate');

    // Posts //
    Route::get('/posts' , [PostController::class, 'index'])->name('posts');
    Route::get('/post/create' , [PostController::class, 'create'])->name('create-post');
    Route::post('post/store', [PostController::class, 'store'])->name('store-post');
});
