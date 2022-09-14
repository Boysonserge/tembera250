<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('blog/{slug}', [BlogController::class,'index'])->name('blog');
Route::get('category/{categorySlug}', [CategoryController::class,'index'])->name('category');

Route::get('migrate', function () {
    Artisan::call('migrate');
    return Artisan::output();
});

Route::get('storage', function () {
    Artisan::call('storage:link');
    return Artisan::output();
});
