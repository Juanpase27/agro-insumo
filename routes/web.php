<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplyCategoryController;
use App\Http\Controllers\SupplyController;
use App\Models\ProductCategories;
use App\Models\Supply;
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

/*Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home');
});*/
Route::get('/' , HomeController::class)->name('home') ;

/*
Route::controller(CursoController::class)->group(function () {
    Route::get('/cursos', 'index');

    Route::get('/cursos/create',  'create');

    Route::get('/cursos/update/{idUser}', 'update');

    Route::get('/cursos/delete/{idUser}', 'delete');
});*/
/*
Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')->name('products.index');

    Route::get('/products/create', 'create')->name('products.create');
    
    Route::post('/products/create', 'store')->name('products.store');

    Route::get('/products/{product}', 'show')->name('products.show');

    Route::get('/products/{product}/update', 'edit')->name('products.edit');

    Route::put('/products/{product}/update', 'update')->name('products.update');

    Route::get('/products/{product}/delete', 'delete')->name('products.delete');

    Route::delete('/products/{product}/delete', 'destroy')->name('products.destroy');
});
*/

// Quedó así de largo debido a que en caso de requerir cambiar nombres o algún imprevisto, se deja especificado los parametros y nombres que maneja
Route::resource('products', ProductController::class)->parameters(['products'=>'product'])->names('products');

Route::resource('product_categories', ProductCategoryController::class);

Route::resource('supplies', SupplyController::class);

Route::resource('supply_categories', SupplyCategoryController::class);
