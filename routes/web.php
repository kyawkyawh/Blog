<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TitleController;

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
    Route::get('edit/category', [CategoryController::class, 'edit'])->name('edit-cate');
    Route::post('update/category', [CategoryController::class, 'update'])->name('update-cate');
    Route::get('delete/category', [CategoryController::class, 'destroy'])->name('delete-cate');

    // Posts //
    Route::get('/posts' , [PostController::class, 'index'])->name('posts');
    Route::get('/post/create' , [PostController::class, 'create'])->name('create-post');
    Route::post('post/store', [PostController::class, 'store'])->name('store-post');
    Route::get('post/edit', [PostController::class, 'edit'])->name('edit-post');
    Route::post('post/update', [PostController::class, 'update'])->name('update-post');
    Route::get('post/detail', [PostController::class, 'show'])->name('detail-post');
    Route::get('post/delete', [PostController::class, 'destroy'])->name('delete-post');

    // Titles
    Route::get('/titles',[TitleController::class, 'index'])->name('titles');
    Route::get('/create/titles',[TitleController::class, 'create'])->name('create-title');
    Route::post('/store/titles',[TitleController::class, 'store'])->name('store-title');
    Route::get('edit/titles',[TitleController::class, 'edit'])->name('edit-title');
    Route::post('/update/titles',[TitleController::class, 'update'])->name('update-title');
    Route::get('delete/titles',[TitleController::class, 'destroy'])->name('delete-title');

});
