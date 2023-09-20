@extends('layouts.template')

@section('title', 'Create')

@section('content')
    <h1>Crear insumo</h1>
    <a href="{{route('supplies.index')}}">Volver</a>
    <h4>Deseo crear un insumo</h4>
    {{-- {{route('product.createProduct')}} --}}
    <form action="{{route('supplies.store')}}" method="post">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripción:
            <input type="text" name="description" value="{{old('description')}}">
        </label>
        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoria del producto:
            <select name="categorySupply_id">
                @foreach ($supplyCategory as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
    
@endsection
