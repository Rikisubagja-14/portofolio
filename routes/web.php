<?php

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

Route::get('/', function () {
    return view('admin.layout.v_tem');
});

Route::resource('/about', \App\Http\Controllers\AboutController::class);
Route::resource('/portofolio', \App\Http\Controllers\PortofolioController::class);
Route::resource('/testimonials', \App\Http\Controllers\TestimonialsController::class);
Route::resource('/summary', \App\Http\Controllers\SummaryController::class);
Route::resource('/education', \App\Http\Controllers\EducationController::class);
Route::resource('/professional_experiences', \App\Http\Controllers\professionalexperienceController::class);

