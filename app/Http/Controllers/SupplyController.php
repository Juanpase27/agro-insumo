<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupply;
use App\Http\Requests\UpdateProduct;
use App\Models\Supply;
use App\Models\SupplyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SupplyController extends Controller
{
    public function index()
    {
        $supply = Supply::orderBy('id', 'desc')->paginate(15);

        return view('supplies.index', compact('supply'));
    }

    public function create()
    {
        $supply = Supply::paginate();
        $supplyCategory = SupplyCategory::all();

        return view('supplies.create', compact('supply', 'supplyCategory'));
    }

    public function store(StoreSupply $request)
    {
        /* Forma larga
        $product = new Supply();
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
         */

        
        $supply=Supply::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'slug'=>Str::slug($request->name, '-'),
            'categorySupply_id'=>$request->categorySupply_id
        ]);

        // $product = Product::create($request->all());

        return redirect()->route('supplies.index')->with('success', 'El registro del insumo ' . $request->name . ' fue exitoso.');
        // return $product;
    }

    public function show(Supply $supply, SupplyCategory $supplyCategory)
    {
        $supplyCategory = SupplyCategory::find($supply->categorySupply_id);
        return view('supplies.show', compact('supply', 'supplyCategory'));
    }

    public function edit(Supply $supply)
    {
        $supplyCategory = SupplyCategory::all();
        
        return view('supplies.update', compact('supply', 'supplyCategory'));
    }

    public function update(UpdateProduct $request, Supply $supply)
    {

        $supply->name = $request->name;
        $supply->slug = Str::slug($request->name, '-');
        $supply->description = $request->description;
        $supply->categorySupply_id = $request->categorySupply_id;
        $supply->save();
        
        // $product->update($request->all());

        return redirect()->route('supplies.index')->with('success', 'La actualización del insumo ' . $request->name . ' fue exitosa.');
    }

    /*
    public function delete(Supply $product)
    {
        return view('supplies.destroy', compact('product'));
    }
    */

    public function destroy(Supply $supply)
    {
        $supply->delete();

        return redirect()->route('supplies.index')->with('success', 'La eliminación del insumo ' . $supply->name . ' fue exitosa.');
    }
}
