<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryControllerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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



   Route::get('/',[HomeController::class,'home'])->name('dashboard');
   Route::get('/user',[HomeController::class,'user'])->name('user');
   Route::get('/movie/list',[HomeController::class,'movie_list'])->name('movie.list');
   Route::get('/categories', [CategoryControllerController::class, 'list'])->name('category.list');
   Route::get('/category/create', [CategoryControllerController::class, 'createForm'])->name('category.create');
   Route::post('/category/store', [CategoryControllerController::class, 'store'])->name('category.store');

   Route::get('/Movie/list', [MovieController::class, 'list'])->name('Movie.list');
   Route::get('/Movie/create', [MovieController::class, 'create'])->name('Movie.create');
   Route::post('/Movie/store', [MovieController::class, 'store'])->name('Movie.store');

   Route::get('/Movie/delete/{product_id}', [MovieController::class, 'deleteProduct'])->name('admin.Movie.delete');
   Route::get('/Movie/view/{product_id}', [MovieController::class, 'viewProduct'])->name('admin.Movie.view');
   Route::get('/Movie/edit/{product_id}', [MovieController::class, 'edit'])->name('Movie.edit');
   Route::put('/Movie/update/{product_id}', [MovieController::class, 'update'])->name('Movie.update');

   