@extends('layouts.template')

@section('title', 'Update: ' . $product->name)

@section('content')
    <h1>Actualizar producto</h1>
    <a href="{{ route('products.index') }}">volver</a>
    <br>
    <p>{{ $product }}</p>
    <form action="{{ route('products.update', $product) }}" method="post">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{ old('name', $product->name) }}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripción:
            <input type="text" name="description" value="{{ old('description', $product->description) }}">
        </label>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoria del producto:
            <select name="category_id">
                @foreach ($productCategory as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $product->category_id ? 'selected' : '' }}>
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
