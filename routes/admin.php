<?php

use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminContactUsController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminSiteSettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProfileController;
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



Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login']);

Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){

    Route::get('logout', [LoginController::class, 'logout']);

    Route::get('dashboard',[DashboardController::class,'index']);

    Route::get('profile', [ProfileController::class, 'index']);


    Route::get('cms/blogs/active-blogs', [AdminBlogController::class, 'index']);
    Route::get('cms/blogs/add-blog', [AdminBlogController::class, 'create']);
     Route::get('cms/contact-us',[AdminContactUsController::class,'index']);


    Route::get('settings/general-settings', [AdminSettingController::class, 'generalSettingIndex']);
    Route::get('settings/localization-settings', [AdminSettingController::class, 'localizationSettingIndex']);
    Route::get('settings/social-links-settings', [AdminSettingController::class, 'socialLinksIndex']);

    Route::post('settings/site-settings', [AdminSiteSettingController::class, 'store']);


   
    
});