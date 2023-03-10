<?php

use App\Http\Controllers\MenuController;
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
    return view('welcome');
});
Route::get('/', [App\Http\Controllers\AppController::class,'index'])->name('home');
Route::resource('menus', MenuController::class);
Route::get('/Testimonials', [App\Http\Controllers\TestimonialsController::class,'testimonials'])->name('testimonials');
Route::get('/About', [App\Http\Controllers\AboutController::class,'about'])->name('about');
