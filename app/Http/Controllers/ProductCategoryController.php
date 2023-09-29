<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\StoreProductCategory;
use App\Http\Requests\UpdateProduct;
use App\Models\ProductCategory;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $productCategory = ProductCategory::orderBy('id', 'desc')->paginate(15);

        return view('product_categories.index', compact('productCategory'));
    }

    public function create()
    {
        $productCategory = ProductCategory::paginate();

        return view('product_categories.create', compact('productCategory'));
    }

    public function store(StoreProductCategory $request)
    {
        /* Forma larga
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
         */

        
        $productCategory=ProductCategory::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'slug'=>Str::slug($request->name, '-')
        ]);

        // $product = Product::create($request->all());

        return redirect()->route('product_categories.index')->with('success', 'El registro de la categoría del producto ' . $request->name . ' fue exitoso.');
        // return $product;
    }

    public function show(ProductCategory $productCategory)
    {
        return view('product_categories.show', compact('productCategory'));
    }

    public function edit(ProductCategory $productCategory)
    {
        return view('product_categories.update', compact('productCategory'));
    }

    public function update(UpdateProduct $request, ProductCategory $productCategory)
    {

        $productCategory->name = $request->name;
        $productCategory->slug = Str::slug($request->name, '-');
        $productCategory->description = $request->description;
        $productCategory->save();
        
        // $product->update($request->all());

        return redirect()->route('product_categories.index')->with('success', 'La actualización de la categoría del producto ' . $request->name . ' fue exitosa.');
    }

    /*
    public function delete(Product $product)
    {
        return view('products.destroy', compact('product'));
    }
    */

    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();

        return redirect()->route('product_categories.index')->with('success', 'La eliminación de la categoría del producto ' . $productCategory->name . ' fue exitosa.');
    }
}
