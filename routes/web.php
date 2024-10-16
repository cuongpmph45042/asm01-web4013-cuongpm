<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PropetyController as AdminPropetyController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PropetyController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserController as ControllersUserController;
use App\Http\Middleware\AdminMiddleware;
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

Route::get('/', [PropetyController::class, 'index'])->name('page.index');
Route::get('/detail/{id}', [PropetyController::class, 'detail'])->name('page.detail');
Route::get('/fill-category/{id}', [PropetyController::class, 'fill_category'])->name('page.fill');
Route::get('/all-property', [PropetyController::class, 'all'])->name('page.all');

Route::get('/profile', [ControllersUserController::class, 'profile'])->middleware('auth')->name('profile');
Route::get('/account/edit/{user}', [ControllersUserController::class, 'edit'])->middleware('auth')->name('edit');
Route::put('/account/update/{user}', [ControllersUserController::class, 'update'])->middleware('auth')->name('update');

Route::prefix('/administrator')->middleware([AdminMiddleware::class])->group(function() {
    Route::get('/', [DashboardController::class, 'dashbroad'])->name('admin.dashbroad');

    Route::get('/category', [CategoryController::class, 'all'])->name('admin.category.all');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
    
    Route::get('/property', [AdminPropetyController::class, 'all'])->name('admin.property.all');
    Route::get('/property/detail/{property}', [AdminPropetyController::class, 'detail'])->name('admin.property.detail');
    Route::get('/property/create', [AdminPropetyController::class, 'create'])->name('admin.property.create');
    Route::post('/property/create', [AdminPropetyController::class, 'store'])->name('admin.property.store');
    Route::get('/property/edit/{property}', [AdminPropetyController::class, 'edit'])->name('admin.property.edit');
    Route::put('/property/edit/{property}', [AdminPropetyController::class, 'update'])->name('admin.property.update');
    Route::delete('/property/delete/{property}', [AdminPropetyController::class, 'destroy'])->name('admin.property.destroy');

    Route::get('/user', [UserController::class, 'all'])->name('admin.user.all');
    Route::patch('/user/active/ban/{user}', [UserController::class, 'ban'])->name('ban');
    Route::patch('/user/active/unban/{user}', [UserController::class, 'unban'])->name('unban');
});

Route::get('/sign-in',[SignInController::class, 'signIn'])->name('signIn');
Route::post('/sign-in',[SignInController::class, 'postSignIn'])->name('postSignIn');

Route::get('/sign-up',[SignUpController::class, 'signUp'])->name('signUp');
Route::post('/sign-up',[SignUpController::class, 'postSignUp'])->name('postSignUp');

Route::get('/log-out',[SignInController::class, 'logout'])->name('logout');

