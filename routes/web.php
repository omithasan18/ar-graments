<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Affiliate\DashboardController as AffiliateDashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Customer\DashboardController as CustomerDashboardController;
use App\Http\Controllers\Seller\DashboardController as SellerDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware'=> ['login']], function(){
    Route::get('admin/login',[LoginController::class,'login'])->name('admin.login');
    Route::post('login',[LoginController::class,'login_submit']);
    Route::get('login','App\Http\Controllers\Frontend\HomeController@login')->name('login');
});
Route::get('logout',function(){
    Auth::logout();
    return redirect()->route('home');
});
Route::get('unauthorized', function () {
    return view('unauthorized');
})->name('unauthorized');

Route::group(['middleware'=> ['auth', 'admin'], 'as'=>'admin.','prefix'=>'admin'], function(){
    Route::get('dashboard',[AdminDashboardController::class,'dashboard'])->name('dashboard');

    Route::resource('sitesetting','App\Http\Controllers\Admin\SiteSettingController');
    Route::resource('client','App\Http\Controllers\Admin\ClientController');

});

Route::group(['middleware'=> ['auth', 'customer'], 'as'=>'customer.','prefix'=>'customer'], function(){
    Route::get('dashboard',[CustomerDashboardController::class,'dashboard'])->name('dashboard');
    Route::get('logout',[CustomerDashboardController::class,'logout'])->name('logout');

});

Route::group(['middleware'=> ['auth', 'affiliate'], 'as'=>'affiliate.','prefix'=>'affiliate'], function(){
    Route::get('dashboard',[AffiliateDashboardController::class,'dashboard'])->name('dashboard');



});

Route::group(['middleware'=> ['auth', 'seller'], 'as'=>'seller.','prefix'=>'seller'], function(){
    Route::get('dashboard',[SellerDashboardController::class,'dashboard'])->name('dashboard');

});


Route::get('/','App\Http\Controllers\Frontend\HomeController@home')->name('home');

//frontend

Route::get('/ar-garments','App\Http\Controllers\Frontend\HomeController@home')->name('ar-garments');
Route::get('/client','App\Http\Controllers\Frontend\HomeController@client')->name('client');
Route::get('/industry','App\Http\Controllers\Frontend\HomeController@industry')->name('industry');
Route::get('/collection','App\Http\Controllers\Frontend\HomeController@collection')->name('collection');
Route::get('/career','App\Http\Controllers\Frontend\HomeController@career')->name('career');
Route::get('/certification','App\Http\Controllers\Frontend\HomeController@certification')->name('certification');
Route::get('/contact','App\Http\Controllers\Frontend\HomeController@contact')->name('contact');
Route::get('/comphany-profile','App\Http\Controllers\Frontend\HomeController@comphanyProfile')->name('comphany-profile');
Route::get('/management-profile','App\Http\Controllers\Frontend\HomeController@ManagementProfile')->name('management-profile');

// message
Route::post('/message/submit','App\Http\Controllers\Frontend\HomeController@messageSubmit')->name('message.submit');
Route::post('/subcribe/submit','App\Http\Controllers\Frontend\HomeController@subscribeSubmit')->name('subscribe.submit');
