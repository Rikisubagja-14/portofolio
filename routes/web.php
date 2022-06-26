<?php

use Illuminate\Support\Facades\Auth;
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



//route frontend landingpage
Route::resource('/', \App\Http\Controllers\ControllerFronend\FrontaboutController::class);
// Route::resource('/Contact_me', FrontaboutController::class)->except(['create']);
//route backend admin//
Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::resource('/about', \App\Http\Controllers\AboutController::class);
Route::resource('/portofolio', \App\Http\Controllers\PortofolioController::class);
Route::resource('/detail', \App\Http\Controllers\portodetailController::class);
Route::resource('/testimonials', \App\Http\Controllers\TestimonialsController::class);
Route::resource('/contact_me', \App\Http\Controllers\ContactmeController::class);
Route::resource('/summary', \App\Http\Controllers\SummaryController::class);
Route::resource('/education', \App\Http\Controllers\EducationController::class);
Route::resource('/professional_experiences', \App\Http\Controllers\professionalexperienceController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
