<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProuctController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use App\Models\Product;

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

Route::get('/', [ProuctController::class, 'index'])->name('product.index');
Route::get('/create', [ProuctController::class, 'create']);
Route::post('/product/store', [ProuctController::class, 'store']);
Route::get('products/{id}/edit',[ProuctController::class, 'edit'])->name('product.edit');
Route::put('products/{id}/update',[ProuctController::class, 'update'])->name('product.update');
Route::get('products/{id}/delete',[ProuctController::class, 'delete'])->name('product.delete');  
Route::get('products/{id}/show',[ProuctController::class, 'show'])->name('product.show');
Route::get('home', [HomeController::class, 'home'])->name('product.home');
Route::view('admin','login')->name('product.admin');
Route::post('admin',[AdminController::class],'adminLogin');
