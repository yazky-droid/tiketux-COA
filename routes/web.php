<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChartOfAccountController;
use App\Http\Controllers\TransactionController;
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

Route::get('/home', function () {
    return view('welcome');
})->name("home");

Route::resource('/categories', CategoryController::class);
Route::resource('/coa', ChartOfAccountController::class);
Route::resource('/transactions', TransactionController::class);