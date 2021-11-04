<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\ProductController;

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

// Route::get('index',[testController::class,'index'])->name('index');
/* ---------------------------------------------------------*/
Route::prefix('products')->name('products.')->group(function(){
    Route::get('/',[ProductController::class,'index'])->name('index');
    Route::post('/create',[ProductController::class,'create'])->name('create');
    Route::get('/create',[ProductController::class,'store'])->name('store');
    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');
    Route::put('/edit{id}',[ProductController::class,'update'])->name('update');
    Route::delete('/delete{id}',[ProductController::class,'destroy'])->name('destroy');
    Route::get('/show',[ProductController::class,'show'])->name('show');
});
