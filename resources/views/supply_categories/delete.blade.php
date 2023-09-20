@extends('layouts.template')

@section('title', 'Delete')

@section('content')
    <h1>Eliminar insumo</h1>
    <a href="{{ route('product_categories.index') }}">Volver</a>
    <p>Deseo eliminar el insumo {{ $product->name }}, el cual tiene un id {{ $product->id }}</p>
    <form action="{{ route('product_categories.destroy', $product) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>

@endsection
