<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Frontend\BuyNowController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\CategoryControllerController;

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

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('pay.now');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END



Route::get('/',[WebsiteController::class,'web'])->name('webhome');
Route::get('/web-login',[WebsiteController::class,'weblogin'])->name('web.login');
Route::post('/weblogin',[WebsiteController::class,'websitelogin'])->name('websitelogin');
Route::get('/web-registration',[WebsiteController::class,'webregistration'])->name('web.registration');
Route::post('/do-registration',[WebsiteController::class,'doregistration'])->name('do.registration');
Route::get('/upcomming',[WebsiteController::class,'upcomming'])->name('upcomming');
Route::get('/nowshowing',[WebsiteController::class,'nowshowing'])->name('nowshowing');
Route::get('/schedule/list',[WebsiteController::class,'schedule_list'])->name('schedule.list');
Route::get('/ticket/price',[WebsiteController::class,'price'])->name('price');
Route::get('/details/{movie_id}',[WebsiteController::class,'details'])->name('details');
Route::post('/buy/now',[WebsiteController::class,'OrderStore'])->name('buy.now');
Route::get('/booking/list',[HomeController::class,'OrderStore'])->name('booking.list');



Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/logout', [WebsiteController::class, 'logout'])->name('user.logout');

    Route::group(['middleware' => ['CheckUser']], function(){
        Route::get('/profile',[WebsiteController::class,'profile'])->name('user.profile');
        Route::put('/profile/update',[WebsiteController::class,'updateProfile'])->name('profile.update');




    });

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

Route::get('/category/edit/{id}', [CategoryControllerController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryControllerController::class, 'update'])->name('category.update');

Route::get('/category/destroy/{id}', [CategoryControllerController::class, 'destroy'])->name('category.destroy');

Route::get('/report', [Homecontroller::class, 'report'])->name('report');
Route::get('/generatereport', [Homecontroller::class, 'generatereport'])->name('generatereport');

Route::get('/Movie/list', [MovieController::class, 'list'])->name('Movie.list');
Route::get('/Movie/create', [MovieController::class, 'create'])->name('Movie.create');
Route::post('/Movie/store', [MovieController::class, 'store'])->name('Movie.store');

Route::get('/schedule', [HomeController::class, 'schedule'])->name('schedule');
Route::get('/schedule/create', [HomeController::class, 'create'])->name('create');
Route::post('/schedule/store', [HomeController::class, 'store'])->name('store');

Route::get('/schedule/edit/{id}', [HomeController::class, 'schedule_edit'])->name('schedule.edit');
Route::post('/schedule/update/{id}', [HomeController::class, 'schedule_update'])->name('schedule.update');

route::get('/schedule/delete/{id}',[HomeController::class, 'delete'])->name('delete');

Route::get('/Movie/delete/{product_id}', [MovieController::class, 'deleteProduct'])->name('admin.Movie.delete');
Route::get('/Movie/view/{product_id}', [MovieController::class, 'viewProduct'])->name('admin.Movie.view');
Route::get('/Movie/edit/{product_id}', [MovieController::class, 'edit'])->name('Movie.edit');
Route::put('/Movie/update/{product_id}', [MovieController::class, 'update'])->name('Movie.update');

});
});