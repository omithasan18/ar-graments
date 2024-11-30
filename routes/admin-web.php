<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\ManagementController;
use App\Http\Controllers\Admin\CertificationController;
use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\HeaderController;

Route::group(['middleware'=> ['auth', 'admin'], 'as'=>'admin.'], function(){

    Route::resource('industry', IndustryController::class);
    Route::resource('career', CareerController::class);
    Route::resource('collection', CollectionController::class);
    Route::resource('certification', CertificationController::class);
    Route::resource('management', ManagementController::class);
    Route::resource('slider', SliderController::class);

    Route::resource('site-setting', SiteSettingController::class);
    Route::resource('headersetting', HeaderController::class);

});
