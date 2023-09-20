@extends('layouts.template')

@section('title', 'Show ' . $productCategory->name)

@section('content')
    <h1>Mostrar categoria del producto</h1>
    <a href="{{ route('product_categories.index') }}">Volver</a>
    <a href="{{ route('product_categories.edit', $productCategory) }}">Actualizar</a>
    {{-- <a href="{{ route('products.destroy', $product) }}">Eliminar</a> --}}
    <br>
    <p>{{ $productCategory }}</p>
    <p>Deseo visualizar el producto de id {{ $productCategory->id }}, con nombre {{ $productCategory->name }}; su descripción es:
        {{ $productCategory->description }}</p>
    <form action="{{ route('product_categories.destroy', $productCategory) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
