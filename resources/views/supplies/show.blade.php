@extends('layouts.template')

@section('title', 'Show ' . $supply->name)

@section('content')
    <h1>Mostrar Insumo</h1>
    <a href="{{ route('supplies.index') }}">Volver</a>
    <a href="{{ route('supplies.edit', $supply) }}">Actualizar</a>
    {{-- <a href="{{ route('products.destroy', $product) }}">Eliminar</a> --}}
    <br>
    <p>{{ $supply }}</p>
    <p>Deseo visualizar el producto de id {{ $supply->id }}, con nombre {{ $supply->name }}; su descripción es:
        {{ $supply->description }} y pertenece a la categoría de {{ $supplyCategory->name }}</p>
    
    <form action="{{ route('supplies.destroy', $supply) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
