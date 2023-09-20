@extends('layouts.template')

@section('title', 'Update: ' . $supply->name)

@section('content')
    <h1>Actualizar producto</h1>
    <a href="{{ route('supplies.index') }}">volver</a>
    <br>
    <p>{{ $supply }}</p>
    <form action="{{ route('supplies.update', $supply) }}" method="post">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{ old('name', $supply->name) }}">
        </label>
        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripción:
            <input type="text" name="description" value="{{ old('description', $supply->description) }}">
        </label>
        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoria del producto:
            <select name="categorySupply_id">
                @foreach ($supplyCategory as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $supply->categorySupply_id ? 'selected' : '' }}>
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
