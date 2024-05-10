<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PhotographerController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\PhotographerController as PhotographerClientController;
use App\Http\Controllers\Client\LandingPageController;
use App\Http\Controllers\Client\PackageController;
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
Auth::routes();

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/registered', [LandingPageController::class, 'registered'])->name('registered');

Route::get('/packages', [PackageController::class, 'index'])->name('package.index');
Route::get('/packages/{id}', [PackageController::class, 'show'])->name('package.detail');

Route::get('/photographer', [PhotographerClientController::class, 'index'])->name('photographer.index');
Route::get('/photographer/{id}', [PhotographerClientController::class, 'show'])->name('photographer.detail');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.detail');

Route::prefix('/cms')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/category/data', [CategoryController::class, 'data'])->name('category.data');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

    Route::get('/photographer', [PhotographerController::class, 'index'])->name('photographer');
    Route::get('/photographer/data', [PhotographerController::class, 'data'])->name('photographer.data');
    Route::get('/photographer/{id}', [PhotographerController::class, 'show'])->name('photographer.detail');
//    Route::post('/photographer/store', [CategoryController::class, 'store'])->name('photographer.store');
//    Route::get('/photographer/edit/{id}', [CategoryController::class, 'edit'])->name('photographer.edit');
//    Route::post('/photographer/update/{id}', [CategoryController::class, 'update'])->name('photographer.update');
//    Route::get('/photographer/delete/{id}', [CategoryController::class, 'destroy'])->name('photographer.delete');
});
