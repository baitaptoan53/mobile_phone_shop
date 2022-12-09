<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SpecialController;



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

Route::get('/', action: [HomeController::class, 'index'])->name('welcome');
Route::get('/about', action: [AboutController::class, 'index'])->name('about');
Route::get('/contact', action: [ContactController::class, 'index'])->name('contact');
Route::get('/brand', action: [BrandController::class, 'index'])->name('brand');
Route::get('/special', action: [SpecialController::class, 'index'])->name('special');
