@extends('layouts.template')

@section('title', 'Show ' . $product->name)

@section('content')
    <h1>Mostrar Producto</h1>
    <a href="{{ route('products.index') }}">Volver</a>
    <a href="{{ route('products.edit', $product) }}">Actualizar</a>
    {{-- <a href="{{ route('products.destroy', $product) }}">Eliminar</a> --}}
    <br>
    <p>{{ $product }}</p>
    <p>Deseo visualizar el producto de id {{ $product->id }}, con nombre {{ $product->name }}; su descripción es:
        {{ $product->description }} y pertenece a la categoría de {{ $productCategory->name }}</p>
    
    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
