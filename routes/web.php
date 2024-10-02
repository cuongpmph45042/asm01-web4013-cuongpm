<?php

use App\Http\Controllers\PropetyController;
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