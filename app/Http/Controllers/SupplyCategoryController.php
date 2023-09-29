<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupplyCategory;
use App\Models\SupplyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\UpdateProduct;

class SupplyCategoryController extends Controller
{
    public function index()
    {
        $supplyCategory = SupplyCategory::orderBy('id', 'desc')->paginate(15);

        return view('supply_categories.index', compact('supplyCategory'));
    }

    public function create()
    {
        $supplyCategory = SupplyCategory::paginate();

        return view('supply_categories.create', compact('supplyCategory'));
    }

    public function store(StoreSupplyCategory $request)
    {
        /* Forma larga
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
         */

        
        $supplyCategory=SupplyCategory::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'slug'=>Str::slug($request->name, '-')
        ]);

        // $product = Product::create($request->all());

        return redirect()->route('supply_categories.index')->with('success', 'El registro de la categoría del insumo ' . $request->name . ' fue exitoso.');
        // return $product;
    }

    public function show(SupplyCategory $supplyCategory)
    {
        return view('supply_categories.show', compact('supplyCategory'));
    }

    public function edit(SupplyCategory $supplyCategory)
    {
        return view('supply_categories.update', compact('supplyCategory'));
    }

    public function update(UpdateProduct $request, SupplyCategory $supplyCategory)
    {

        $supplyCategory->name = $request->name;
        $supplyCategory->slug = Str::slug($request->name, '-');
        $supplyCategory->description = $request->description;
        $supplyCategory->save();
        
        // $product->update($request->all());

        return redirect()->route('supply_categories.index')->with('success', 'La actualización de la categoría del insumo ' . $request->name . ' fue exitosa.');
    }

    /*
    public function delete(Product $product)
    {
        return view('products.destroy', compact('product'));
    }
    */

    public function destroy(SupplyCategory $supplyCategory)
    {
        $supplyCategory->delete();

        return redirect()->route('supply_categories.index')->with('success', 'La eliminación de la categoría del insumo ' . $supplyCategory->name . ' fue exitosa.');
    }
}
