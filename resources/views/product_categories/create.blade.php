@extends('layouts.template')

@section('title', 'Create')

@section('content')
    <h1>Crear</h1>
    <a href="{{route('product_categories.index')}}">Volver</a>
    <h4>Deseo crear una categoria de producto</h4>
    {{-- {{route('product.createProduct')}} --}}
    <form action="{{route('product_categories.store')}}" method="post">
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
        <button type="submit">Enviar</button>
    </form>
    
@endsection
