<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupplyCategory;
use App\Http\Requests\UpdateProduct;
use App\Models\SupplyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SupplyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplyCategory = SupplyCategory::orderBy('id', 'desc')->paginate(15);

        return view('supply_categories.index', compact('supplyCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplyCategory = SupplyCategory::paginate();

        return view('supply_categories.create', compact('supplyCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupplyCategory $request)
    {
        $supplyCategory=SupplyCategory::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'slug'=>Str::slug($request->name, '-')
        ]);

        // $product = Product::create($request->all());

        return redirect()->route('supply_categories.index')->with('success', 'El registro de la categoría del insumo ' . $request->name . ' fue exitoso.');
        // return $product;
    }

    /**
     * Display the specified resource.
     */
    public function show(SupplyCategory $supplyCategory)
    {
        return view('supply_categories.show', compact('supplyCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SupplyCategory $supplyCategory)
    {
        return view('supply_categories.update', compact('supplyCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProduct $request, SupplyCategory $supplyCategory)
    {
        $supplyCategory->name = $request->name;
        $supplyCategory->slug = Str::slug($request->name, '-');
        $supplyCategory->description = $request->description;
        $supplyCategory->save();
        
        // $product->update($request->all());

        return redirect()->route('supply_categories.index')->with('success', 'La actualización de la categoría del insumo ' . $request->name . ' fue exitosa.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SupplyCategory $supplyCategory)
    {
        $supplyCategory->delete();

        return redirect()->route('supply_categories.index')->with('success', 'La eliminación de la categoría del insumo ' . $supplyCategory->name . ' fue exitosa.');
    }
}
