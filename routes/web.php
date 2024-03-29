<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductcController;


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

Route::get('/products', [ProductcController::class,'index'])->name('product.index');
Route::get('/product/create', [ProductcController::class,'create'])->name('product.create');
Route::post('/product/store', [ProductcController::class,'store'])->name('product.store');
Route::get('product/{id}/edit', [ProductcController::class,'edit'])->name('product.edit');
Route::put('/product/update/{id}', [ProductcController::class,'update'])->name('product.update');
Route::get('/product/{x}/destroy', [ProductcController::class,'destroy'])->name('product.destroy');



Route::get('/', function () {
    return view('product.index');
});
