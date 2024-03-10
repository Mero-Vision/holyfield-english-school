<?php


use App\Http\Controllers\School\ContactController;
use App\Http\Controllers\School\SchoolAboutController;
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

Route::get('/', function () {
    return view('school.index');

    
});

Route::get('contact',[ContactController::class,'index']);
Route::get('about-us', [SchoolAboutController::class, 'index']);