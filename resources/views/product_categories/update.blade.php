@extends('layouts.template')

@section('title', 'Update: '.$productCategory->name)

@section('content')
    <h1>Update</h1>
    <a href="{{route('product_categories.index')}}">volver</a>
    <br>
    <p>{{$productCategory}}</p>
    <form action="{{route('product_categories.update', $productCategory)}}" method="post">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name', $productCategory->name)}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripción:
            <input type="text" name="description" value="{{old('description', $productCategory->description)}}">
        </label>
        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection



