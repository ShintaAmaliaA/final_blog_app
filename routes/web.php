<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\locationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PriceControler;
use App\Http\Controllers\PublicPageController;
use App\Http\Controllers\PublicWebController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('home');

    Route::prefix('/task')->name('blog.task.')->group(function () {
        Route::get('/', [TaskController::class, 'index'])->name('index');
        Route::get('/create', [TaskController::class, 'create'])->name('create');
        Route::post('/store', [TaskController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [TaskController::class, 'edit'])->name('edit');
        Route::post('/{id}/update', [TaskController::class, 'update'])->name('update');
        Route::get('/{id}/show', [TaskController::class, 'show'])->name('show');
        Route::get('/{id}/destroy', [TaskController::class, 'destroy'])->name('delete');
    });


    Route::prefix('/post')->name('blog.post.')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/create', [PostController::class, 'create'])->name('create');
        Route::post('store', [PostController::class, 'store'])->name('store');
        Route::get('post/{id}/edit', [PostController::class, 'edit'])->name('edit');
        Route::post('post/{id}/update', [PostController::class, 'update'])->name('update');
        Route::get('post/{id}/destroy', [PostController::class, 'destroy'])->name('delete');

    });

    Route::prefix('/categories')->name('blog.categories.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('store', [CategoryController::class, 'store'])->name('store');
        Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::get('{id}/update', [CategoryController::class, 'update'])->name('update');
        Route::get('{id}/destroy', [CategoryController::class, 'destroy'])->name('delete');
    });

});


//Route::get('', [PublicWebController::class, 'webpage'])->name('webpage');
Route::get('/', [PublicWebController::class, 'webpage'])->name('webpage');
Route::get('/location', [locationController::class, 'index'])->name('location.index');
Route::get('/blog/public_pages', [PublicPageController::class, 'homepage'])->name('blog.public_pages.homepage');
Route::get('/price', [PriceControler::class, 'index'])->name('price.index');
//Route::get('', [PublicPageController::class, 'blog.homepage'])->name('blog.homepage');
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/{slug}', [PublicPageController::class, 'show'])->name('show');
