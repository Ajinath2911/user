<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailController;

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

Route::get('/', [UserDetailController::class, 'index']);
Route::post('/store', [UserDetailController::class, 'store'])->name('store');
Route::get('/fetchall', [UserDetailController::class, 'fetchAll'])->name('fetchAll');
Route::get('/edit', [UserDetailController::class, 'edit'])->name('edit');
Route::post('/update', [UserDetailController::class, 'update'])->name('update');
Route::get('/export', [UserDetailController::class,'exportCsv']);

