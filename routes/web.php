<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PhotographerController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\PhotographerController as PhotographerClientController;
use App\Http\Controllers\Photographer\PhotographerController as PhotographerCmsController;
use App\Http\Controllers\Photographer\UserController as UserCmsController;
use App\Http\Controllers\Photographer\PackageController as PackageCmsController;
use App\Http\Controllers\Client\PackageController as PackageClientController;
use App\Http\Controllers\Client\BlogController as BlogClientController;
use App\Http\Controllers\Client\LandingPageController;
use App\Http\Controllers\DataController;
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


// DataController
Route::get('/data/provinces', [DataController::class, 'provinces'])->name('data.provinces');
Route::get('/data/cities/{id}', [DataController::class, 'cities'])->name('data.cities');

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/registered', [LandingPageController::class, 'registered'])->name('registered');

Route::get('/packages', [PackageClientController::class, 'index'])->name('package.index');
Route::get('/packages/{id}', [PackageClientController::class, 'show'])->name('package.detail');

Route::get('/photographer', [PhotographerClientController::class, 'index'])->name('photographer.index');
Route::get('/photographer/{id}', [PhotographerClientController::class, 'show'])->name('photographer.detail');

Route::get('/blog', [BlogClientController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogClientController::class, 'show'])->name('blog.detail');

Route::middleware(['auth', 'userRole'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware(['photographer'])->prefix('/cms')->name('cms.')->group(function () {
        Route::get('/', [PhotographerCmsController::class, 'index'])->name('dashboard');

        Route::get('/profile', [UserCmsController::class, 'edit'])->name('profile');
        Route::post('/profile', [UserCmsController::class, 'update'])->name('profile');
        Route::get('/profile/password', [UserCmsController::class, 'password'])->name('profile.password');
        Route::post('/profile/password', [UserCmsController::class, 'updatePassword'])->name('profile.password');

        Route::get('/portofolio', [PhotographerCmsController::class, 'portofolio'])->name('portofolio');
        Route::post('/portofolio', [PhotographerCmsController::class, 'store'])->name('portofolio.store');
        Route::get('/portofolio/data', [PhotographerCmsController::class, 'portofolioData'])->name('portofolio.data');
        Route::get('/portofolio/destroy/{id}', [PhotographerCmsController::class, 'destroy'])->name('portofolio.destroy');
        Route::post('/portofolio/upload-image', [PhotographerCmsController::class, 'uploadImage'])->name('portofolio.image');

        Route::get('/package', [PhotographerCmsController::class, 'packages'])->name('package');
        Route::get('/package/create', [PackageCmsController::class, 'create'])->name('package.create');
        Route::get('/package/data', [PackageCmsController::class, 'data'])->name('package.data');
        Route::post('/package/store', [PackageCmsController::class, 'store'])->name('package.store');
        Route::get('/package/{id}', [PackageCmsController::class, 'edit'])->name('package.edit');
        Route::post('/package/{id}/update', [PackageCmsController::class, 'update'])->name('package.update');
        Route::get('/package/{id}/destroy', [PackageCmsController::class, 'destroy'])->name('package.destroy');
    });

    Route::middleware(['admin'])->prefix('/admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

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
        Route::get('/photographer/{id}/reject', [PhotographerController::class, 'rejected'])->name('photographer.reject');
        Route::get('/photographer/{id}/approve', [PhotographerController::class, 'approved'])->name('photographer.approve');
        Route::get('/photographer/{id}/packages', [PhotographerController::class, 'packages'])->name('photographer.packages');
        Route::get('/photographer/{id}/packages/create', [PackageController::class, 'create'])->name('photographer.packages.create');
        Route::post('/photographer/{id}/packages/store', [PackageController::class, 'store'])->name('photographer.packages.store');
        Route::get('/photographer/{id}/portofolio', [PhotographerController::class, 'portofolio'])->name('photographer.portofolio');
        Route::get('/photographer/{id}/portofolio/data', [PhotographerController::class, 'portofolioData'])->name('photographer.portofolio.data');

        Route::get('/packages', [PackageController::class, 'index'])->name('packages');
        Route::get('/packages/data', [PackageController::class, 'data'])->name('packages.data');
        Route::post('/packages/upload-image', [PackageController::class, 'uploadImage'])->name('packages.upload-image');
        Route::get('/packages/{id}', [PackageController::class, 'edit'])->name('packages.edit');
        Route::post('/packages/{id}/update', [PackageController::class, 'update'])->name('packages.update');
        Route::get('/packages/{id}/delete', [PackageController::class, 'destroy'])->name('packages.destroy');

        Route::get('/blog', [BlogController::class, 'index'])->name('blog');
        Route::get('/blog/data', [BlogController::class, 'data'])->name('blog.data');
        Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
        Route::get('/blog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::post('/blog/{id}/update', [BlogController::class, 'update'])->name('blog.update');
        Route::get('/blog/{id}/delete', [BlogController::class, 'destroy'])->name('blog.destroy');


        Route::get('/profile', [UserController::class, 'index'])->name('profile');
        Route::post('/profile/update', [UserController::class, 'update'])->name('profile.update');
    });
});
