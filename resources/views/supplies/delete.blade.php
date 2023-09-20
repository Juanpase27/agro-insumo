@extends('layouts.template')

@section('title', 'Delete')

@section('content')
    <h1>Eliminar Producto</h1>
    <a href="{{ route('products.index') }}">Volver</a>
    <p>Deseo eliminar el producto {{ $product->name }}, el cual tiene un id {{ $product->id }}</p>
    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>

@endsection
