<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplyCategoryController;
use App\Http\Controllers\SupplyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('products', ProductController::class)->parameters(['products' => 'product'])->names('products');

    Route::resource('product_categories', ProductCategoryController::class);

    Route::resource('supplies', SupplyController::class);

    Route::resource('supply_categories', SupplyCategoryController::class);

    Route::resource('contact', ContactController::class);
});
