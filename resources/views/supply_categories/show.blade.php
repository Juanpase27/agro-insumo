@extends('layouts.template')

@section('title', 'Show ' . $supplyCategory->name)

@section('content')
    <h1>Mostrar categoria del insumo</h1>
    <a href="{{ route('supply_categories.index') }}">Volver</a>
    <a href="{{ route('supply_categories.edit', $supplyCategory) }}">Actualizar</a>
    {{-- <a href="{{ route('products.destroy', $product) }}">Eliminar</a> --}}
    <br>
    <p>{{ $supplyCategory }}</p>
    <p>Deseo visualizar la categoría del insumo de id {{ $supplyCategory->id }}, con nombre {{ $supplyCategory->name }}; su descripción es:
        {{ $supplyCategory->description }}</p>
    <form action="{{ route('supply_categories.destroy', $supplyCategory) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
