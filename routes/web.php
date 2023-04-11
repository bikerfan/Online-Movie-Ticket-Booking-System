<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryControllerController;
use App\Http\Controllers\Frontend\BuyNowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
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


Route::get('/',[WebsiteController::class,'web'])->name('webhome');
Route::get('/web-login',[WebsiteController::class,'weblogin'])->name('web.login');
Route::post('/weblogin',[WebsiteController::class,'websitelogin'])->name('websitelogin');
Route::get('/web-registration',[WebsiteController::class,'webregistration'])->name('web.registration');
Route::post('/do-registration',[WebsiteController::class,'doregistration'])->name('do.registration');
Route::get('/upcomming',[WebsiteController::class,'upcomming'])->name('upcomming');
Route::get('/nowshowing',[WebsiteController::class,'nowshowing'])->name('nowshowing');
Route::get('/details/{movie_id}',[WebsiteController::class,'details'])->name('details');
Route::get('buy/now',[BuyNowController::class,'buynow'])->name('buynow');


Route::group(['middleware' => 'auth'], function () {
    

    Route::get('/logout', [WebsiteController::class, 'logout'])->name('user.logout');
    Route::get('/profile',[WebsiteController::class,'profile'])->name('user.profile');
    Route::put('/profile/update',[WebsiteController::class,'updateProfile'])->name('profile.update');

});



Route::get('/admin/login', [HomeController::class, 'login'])->name('login');
Route::post('/admin/do-login', [HomeController::class, 'doLogin'])->name('do.login');


Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
       Route::group(['middleware' => 'CheckAdmin'], function () {



Route::get('/logout',[HomeController::class,'logout'])->name('logout');


Route::get('/', [HomeController::class, 'home'])->name('dashboard');
Route::get('/user', [HomeController::class, 'user'])->name('user');
Route::get('/movie/list', [HomeController::class, 'movie_list'])->name('movie.list');
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
});
});