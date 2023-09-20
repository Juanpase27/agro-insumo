<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use Illuminate\Support\Str;
use GuzzleHttp\Handler\Proxy;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $products = Product::paginate();
        $productCategory = ProductCategory::all();

        return view('products.create', compact('products', 'productCategory'));
    }

    public function store(StoreProduct $request)
    {
        /* Forma larga
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
         */

        
        $product=Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'slug'=>Str::slug($request->name, '-'),
            'category_id'=>$request->category_id
        ]);

        // $product = Product::create($request->all());

        return redirect()->route('products.index');
        // return $product;
    }

    public function show(Product $product, ProductCategory $productCategory)
    {
        $productCategory = ProductCategory::find($product->category_id);
        return view('products.show', compact('product', 'productCategory'));
    }

    public function edit(Product $product)
    {
        $productCategory = ProductCategory::all();
        
        return view('products.update', compact('product', 'productCategory'));
    }

    public function update(UpdateProduct $request, Product $product)
    {

        $product->name = $request->name;
        $product->slug = Str::slug($request->name, '-');
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();
        
        // $product->update($request->all());

        return redirect()->route('products.index');
    }

    /*
    public function delete(Product $product)
    {
        return view('products.destroy', compact('product'));
    }
    */

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
