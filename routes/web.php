<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('products', ProductController::class)->parameters(['products' => 'product'])->names('products');

    Route::resource('product_categories', ProductCategoryController::class);
    /*
    <a class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault(); this.closest('form').submit();">Finalizar sesión</a>
    // Mostrar una lista de productos
    Route::get('/product_categories', [ProductCategoryController::class, 'index'])->name('product_categories.index');

    // Mostrar el formulario para crear un nuevo producto
    Route::get('/product_categories/create', [ProductCategoryController::class, 'create'])->name('product_categories.create');

    // Almacenar un nuevo producto en la base de datos
    Route::post('/product_categories', [ProductCategoryController::class, 'store'])->name('product_categories.store');

    // Mostrar un producto específico
    Route::get('/product_categories/{productCategory}', [ProductCategoryController::class, 'show'])->name('product_categories.show');

    // Mostrar el formulario para editar un producto específico
    Route::get('/product_categories/{productCategory}/edit', [ProductCategoryController::class, 'edit'])->name('product_categories.edit');

    // Actualizar un producto específico en la base de datos
    Route::put('/product_categories/{productCategory}', [ProductCategoryController::class, 'update'])->name('product_categories.update');

    // Eliminar un producto específico de la base de datos
    Route::delete('/product_categories/{productCategory}', [ProductCategoryController::class, 'destroy'])->name('product_categories.destroy');
    */

    Route::resource('supplies', SupplyController::class);

    Route::resource('supply_categories', SupplyCategoryController::class);

    Route::resource('contact', ContactController::class);
});
